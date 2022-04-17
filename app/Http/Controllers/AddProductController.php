<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public $name;
    public $description;
    public $price;
    public $sale_price;
    public $image;
    public $images = [];
    public $category_id;



    public function AddProduct (Request $request) {
        $attr = $request -> validate([
            'name' => 'required|string|max:255',
            'description' => 'string',
            'price' => 'required|numeric',
            'sale price' => 'numeric',
            'image' => 'required|mimes:jpeg,png',
            'images'=> 'mimes:jpeg,png',
            'category_id' => 'required',

        ]);
        $products = new Products();
        $products->name = $this->name;
        $products->price = $this->price;
        $products->sale_price = $this->sale_price;
        $products->image = $this->image ;
        $products->images = $this->images;
        $products->category_id = $this->category_id;
        $products->save();
    }
}
