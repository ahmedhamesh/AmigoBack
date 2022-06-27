<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index() {
        return Product::all();
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'numeric',
            'image' => 'required',
            'country_id'=>'required'
        ]);
        return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $product = Product::query()->find($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id)
    {
        return Product::destroy($id);
    }
}
