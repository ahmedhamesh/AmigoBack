<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class AddBrandsController extends Controller
{
    public $name;
    public function AddProduct(Request $request){
        $attr = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $brands = new Brands();
        $brands->name = $this->name ;

    }
}
