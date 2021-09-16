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
        $products = Product::orderBy('name', 'desc')->get();
        return response()->json($products);
    }

}
