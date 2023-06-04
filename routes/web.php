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


/* Route::get('/product-details', function () {
    return view('product-details');
})->name('product-details');
 */


route::get('/profile',[UsersController::class,'profile'])->name('profile');
 Route::get('/parts}', [ComputersController::class, 'PartType'])->name('PartType');
Route::get('/store', [ComputersController::class, 'products'])->name('store');

Route::get('/product-details/{id}', [ComputersController::class, 'productDetails'])->name('product-details');

Route::get('/cart/{id}', [ComputersController::class, 'addToCart'])->name('cart');

Route::get('/checkout/{id}', [ComputersController::class, 'checkout'])->name('checkout');

Route::post('/invoice', [ComputersController::class, 'invoice'])->name('invoice');




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
