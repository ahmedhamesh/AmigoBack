<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return Country::all();
    }
    public function update(Request $request, $id)
    {
        return Country::where('id', $id)->update($request->all());

    }
    public function avilableCountries()
    {
        return Country::query()->where('status' , [1])->get();
    }

}
