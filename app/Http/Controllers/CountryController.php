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

    public function addCountry(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255|unique:countries',
        ]);
        $country = Country::query()->create(['name' => $attr['name']]);
        return response()->json([
            'status' => 'success',
            'message' => 'successful registered',
        ]);
    }

    public function update(Request $request, $id)
    {
        $country = Country::query()->find($id);
        $country->update($request->all());
        return $country;
    }

    public function destroy($id)
    {
        return Country::destroy($id);
    }

}
