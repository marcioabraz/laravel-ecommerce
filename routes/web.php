<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductControler::class,'index']);
Route::get('/products/create',[ProductControler::class,'create']);
Route::post('/products/store',[ProductControler::class,'store']);
Route::get('/products/show/{id}',[ProductControler::class,'show']);
Route::get('/products/edit/{id}',[ProductControler::class,'edit']);
Route::post('/products/update/{id}',[ProductControler::class,'update']);
Route::get('/products/delete/{id}',[ProductControler::class,'destroy']);
