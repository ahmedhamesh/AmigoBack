<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function addCategory(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);
        $category = Category::query()->create(['name' => $attr['name']]);
        return response()->json([
            'status' => 'success',
            'message' => 'successful registered',
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::query()->find($id);
        $category->update($request->all());
        return $category;
    }

    public function destroy($id)
    {
        return Category::destroy($id);
    }

}
