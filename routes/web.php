<?php

use App\Models\OrderList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// For Customer

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('shop',function(){
    return view('shop.shop');
})->name('shop.shop');

Route::get('checkouts',function(){
    return view('shop.checkout');
})->name('shop.checkout');


Route::get('carts',function(){
    return view('shop.cart');
})->name('shop.cart');

// For Administration Use only
Route::get('admins',function(){
    return view('admin.home');
})->name('admin.home');


Route::get('products',function(){
    return view('admin.product');
})->name('admin.product');


Route::get('customers', function () {
        return view('admin.customer');
})->name('admin.customer');


// for authentication purpose

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
