<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;



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


//profile


 Route::get('/', function () {
    return view('home');
});
 

Route::get('/home', [App\Http\Controllers\ComputersController::class, 'products'])->name('home');

route::get('/profile',[UsersController::class,'profile'])->name('profile');
//  Route::get('/parts}', [ComputersController::class, 'PartType'])->name('PartType');
Route::get('/phone', [ComputersController::class, 'phone'])->name('phone');
Route::get('/store', [ComputersController::class, 'products'])->name('store');
Route::get('/Computers', [ComputersController::class, 'computer'])->name('Computers');

Route::get('/product-details/{id}', [ComputersController::class, 'productDetails'])->name('product-details');

Route::get('/cart/{id}', [ComputersController::class, 'addToCart'])->name('cart');

Route::get('/checkout_laptops/{id}', [ComputersController::class, 'checkout_laptops'])->name('checkout');
Route::get('/checkout_phones/{id}', [ComputersController::class, 'checkout_phones'])->name('checkout');
Route::get('/checkout_computers/{id}', [ComputersController::class, 'checkout_computers'])->name('checkout');

Route::post('/invoice', [ComputersController::class, 'invoice'])->name('invoice');




Auth::routes();

