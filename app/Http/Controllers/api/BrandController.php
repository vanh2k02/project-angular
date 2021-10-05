<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function showBrand()
    {
        $brands = Brand::orderBy('brand_name', 'desc')->get();
        return response()->json($brands);
    }

    public function createBrand(Request $request)
    {
        $brand = new Brand();
        $brand->brand_name = $request->name;
        $brand->brand_image = $request->image;
        $brand->brand_desc = $request->desc;
        $brand->save();
        return response()->json(['message' => 'success']);
    }

    public function findBrand($id)
    {
        $brand = Brand::where('brand_id', $id)->first();
        return response()->json($brand);
    }

    public function update(Request $request, $id)
    {

        Brand::where('brand_id', $id)->update([
            'brand_name' => $request->name,
            'brand_image' => $request->image,
            'brand_desc' => $request->desc,
        ]);
        return response()->json(['message' => 'success']);
    }


    public function delete($id)
    {
        Brand::where('brand_id', $id)->delete();
        return response()->json(['message' => 'delete success']);
    }

    public function getProductByBrand($id)
    {
        $products=Product::where('brand_id', $id)->orderBy('product_name', 'desc')->get();
        return response()->json($products);
    }

}
