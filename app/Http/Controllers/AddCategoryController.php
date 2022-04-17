<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    public $name;

    public function AddCategory(Request $request){
        $attr = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categories = new Categories();
        $categories->name = $this->name;
        $categories->save();
    }

}
