<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
    //
    public function showCategory()
    {
        $categories = Category::orderBy('category_name', 'desc')->get();
        return response()->json($categories);
    }

    public function createCategory(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->name;
        $category->category_image = $request->image;
        $category->category_desc = $request->desc;
        $category->category_status = 0;
        $category->save();
        return response()->json(['message' => 'success']);
    }

    public function findCategory($id)
    {
        $category = Category::where('category_id', $id)->first();
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {

        Category::where('category_id', $id)->update([
            'category_name' => $request->name,
            'category_image' => $request->image,
            'category_desc' => $request->desc,
        ]);
        return response()->json(['message' => 'success']);
    }

    public function delete($id)
    {
        Category::where('category_id', $id)->delete();
        return response()->json(['message' => 'delete success']);
    }


}
