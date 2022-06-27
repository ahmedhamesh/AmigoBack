<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        return Brand::all();
    }

    public function addBrand(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255|unique:brands',
        ]);
        $brand = Brand::query()->create(['name' => $attr['name']]);
        return response()->json([
            'status' => 'success',
            'message' => 'successful registered',
        ]);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::query()->find($id);
        $brand->update($request->all());
        return $brand;
    }

    public function destroy($id)
    {
        return Brand::destroy($id);
    }

}
