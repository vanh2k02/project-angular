<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
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
        $product->image = $request->image;
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
            'image' => $request->image,
        ]);
        return response()->json(['message' => 'thanh cong r day']);
    }

    public function deleteProduct($id)
    {
        Product::where('product_id', $id)->delete();
        return response()->json(['message' => 'xoa thanh cong']);
    }

}
