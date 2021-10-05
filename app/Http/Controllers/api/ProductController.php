<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class ProductController extends Controller
{
    //

    public function showProductNew()
    {
        $products = Product::orderBy('product_name', 'desc')->get();
        return response()->json($products);
    }

    public function showAllProduct()
    {
        $products = Product::join('categories', 'categories.category_id', '=', 'products.category_id')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
            ->orderBy('product_name', 'desc')->get();
        return response()->json($products);
    }

    public function createProduct(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->promotional_price = $request->promotional_price;
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->save();
        return response()->json(['message' => 'oke r day']);
    }

    public function findProduct($id)
    {
        $product = Product::join('categories', 'categories.category_id', '=', 'products.category_id')
            ->join('brands', 'brands.brand_id', '=', 'products.brand_id')
            ->where('product_id', $id)
            ->first();
        return response()->json($product);
    }

    public function updateProduct(Request $request, $id)
    {
        Product::where('product_id', $id)->update([
            'product_name' => $request->name,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'desc' => $request->desc,
            'price' => $request->price,
            'promotional_price' => $request->promotional_price,
            'image' => $request->image,
        ]);
        return response()->json(['message' => 'thanh cong r day']);
    }

    public function deleteProduct($id)
    {
        Product::where('product_id', $id)->delete();
        return response()->json(['message' => 'xoa thanh cong']);
    }

    public function addToCart(Request $request)
    {

        $cartProduct = Cart::where('user_id', $request->user_id)
            ->where('product_id', $request->product_id)
            ->first();
        if (!$cartProduct) {
            $cart = new Cart();
            $cart->product_id = $request->product_id;
            $cart->cart_quantity = $request->quantity;
            $cart->user_id = $request->user_id;
            $cart->save();
            return response()->json('oke r day');
        } else {
            Cart::where('user_id', $request->user_id)
                ->where('product_id', $request->product_id)
                ->update(['cart_quantity' => $cartProduct->cart_quantity + $request->quantity]);
            return response()->json('oke r');
        }
    }

    public function showCart($id)
    {
        $cart = Cart::join('products', 'products.product_id', '=', 'cart.product_id')
            ->where('user_id', $id)
            ->get();
        return response()->json($cart);
    }

    public function updateToCart($id, $data)
    {
        Cart::where('cart_id', $id)->update(['cart_quantity' => $data]);
        return response()->json(['message' => 'oke r day']);
    }
}
