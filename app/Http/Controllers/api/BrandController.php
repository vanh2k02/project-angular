<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
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
        $brand->brand_desc = $request->desc;
        $brand->brand_status = $request->status;
        $brand->save();
        return response()->json(['message' => 'success']);
    }

    public function findBrand($id)
    {
        $brand = Brand::where('brand_id', $id)->get();
        return response()->json($brand);
    }

    public function update(Request $request, $id)
    {

        Brand::where('brand_id', $id)->update([
            'brand_name' => $request->name,
            'brand_desc' => $request->desc,
            'brand_status' => $request->status
        ]);
        return response()->json(['message' => 'success']);
    }

    public function actionShowBrand($id)
    {
        Brand::where('brand_id', $id)->update(['brand_status' => 1]);
        return response()->json(['message' => 'oke']);
    }

    public function actionHideBrand($id)
    {
        Brand::where('brand_id', $id)->update(['brand_status' => 0]);
        return response()->json(['message' => 'oke']);
    }

    public function delete($id)
    {
        Brand::where('brand_id', $id)->delete();
        return response()->json(['message' => 'delete success']);
    }

    public function showBrandPage()
    {
        $brands = Brand::where('brand_status', 1)->get();
        return response()->json($brands);
    }
}
