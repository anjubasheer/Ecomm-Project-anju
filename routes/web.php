<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;


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
Route::get('login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login1', function () {
    return view('login1');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login1');
});
Route::post("/login1",[loginController::class,'loginData']);
Route::get("/log",[productController::class,'loginProduct']);
Route::get("detail/{id}",[productController::class,'prodetail']);
Route::get("search",[productController::class,'search']);
Route::post("add_to_cart",[productController::class,'AddToCart']);

Route::get("/home",[productController::class,'loginProduct1']);







