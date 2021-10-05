<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    //

    public function createTransport(Request $request,$val)
    {
        $transport_id = Transport::insertGetId([
            'transport_name' => $request->name,
            'transport_email' => $request->email,
            'transport_address' => $request->address,
            'transport_phone' => $request->phone,
            'payment_id' => $request->payment_id,
            'user_id' => $request->user_id
        ]);
        $order_id = Order::insertGetId([
            'transport_id' => $transport_id,
            'order_total' => $val,
            'order_status' => 'Đơn hàng đang trong quá trình xác nhận'
        ]);
        $cart = Cart::join('products', 'products.product_id', '=', 'cart.product_id')
            ->where('user_id', $request->user_id)
            ->get();
        foreach ($cart as $item) {
            $order_detail = new Order_detail();
            $order_detail->order_id = $order_id;
            $order_detail->product_name = $item->product_name;
            $order_detail->product_price = $item->price - $item->promotional_price;
            $order_detail->product_sales_quantity = $item->cart_quantity;
            $order_detail->product_image = $item->image;
            $order_detail->save();
        }
        return response()->json(['message' => 'oke r day', $transport_id]);
    }

    public function showPayment()
    {
        $payments = Payment::all();
        return response()->json($payments);
    }

}
