<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\S_CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::get('/me', function (Request $request) {
        return auth()->user();
    });
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::get('/list', [AuthController::class, 'list']);

});
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}',[ProductController::class,'update']);
Route::delete('/products/{id}',[ProductController::class , 'destroy']);


Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'addCategory']);
Route::put('/categories/{id}' , [CategoryController::class , 'update']);
Route::delete('/categories/{id}',[CategoryController::class , 'destroy']);

Route::get('/brands', [BrandsController::class , 'index']);
Route::post('/brands', [BrandsController::class, 'addBrand']);
Route::put('/brands/{id}' , [BrandsController::class , 'update']);
Route::delete('/brands/{id}',[BrandsController::class , 'destroy']);

Route::get('/countries', [CountryController::class , 'index']);
Route::put('/countries/{id}', [CountryController::class , 'update']);
Route::get('/countries/available',[CountryController::class,'avilableCountries']);






