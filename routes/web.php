<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputersController;
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

Route::get('/', function () {
    return view('welcome');
});

route::get('/Computers',[ComputersController::class,'ComputerType']);
route::get('/checkout/{id}',[ComputersController::class,'Checkout'])->name('checkout');


    route::get('/getComputerstype',[ComputersController::class,'getComputerstype'])->name('getComputerstype');
    // route::get('/invoic',ComputersController::class,'invoic')->name('invoic');
    route::get('/ComputerType',[ComputersController::class,'ComputerType'])->name('computertype');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
