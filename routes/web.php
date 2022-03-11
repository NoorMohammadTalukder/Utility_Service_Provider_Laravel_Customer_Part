<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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
    return view('home');
});

Route::get('/signup', [CustomerController::class, 'signup'])->name('signup');
Route::post('/signup', [CustomerController::class, 'signupSubmit'])->name('signup');

Route::get('/signin', [CustomerController::class, 'signin'])->name('signin');
Route::post('/signin', [CustomerController::class, 'signinSubmit'])->name('signin');

Route::get('/customerDash', [CustomerController::class, 'customerDash'])->name('customerDash');

Route::get('/customerInfo', [CustomerController::class, 'customerInfo'])->name('customerInfo');

Route::get('/customerUpdateInformation', [CustomerController::class, 'customerUpdateInformation'])->name('customerUpdateInformation');

Route::post('/updateInformationPassFormSubmit', [CustomerController::class, 'updateInformationPassFormSubmit'])->name('updateInformationPassFormSubmit');

Route::get('/customerUpdate', [CustomerController::class, 'customerUpdate'])->name('customerUpdate');
Route::post('/customerUpdate', [CustomerController::class, 'customerUpdateSubmit'])->name('customerUpdate');

Route::get('/customerLogout', [CustomerController::class, 'customerLogout'])->name('customerLogout');

// products work
Route::get('/list',[ProductController::class,'list'])->name('list');

Route::get('/addtocart/{id}',[ProductController::class,'addtocart'])->name('addtocart');

Route::get('/cart',[ProductController::class,'cart'])->name('cart');

Route::post('/checkout',[ProductController::class,'checkout'])->name('checkout');

Route::get('/orderHistory',[ProductController::class,'orderHistory'])->name('orderHistory');

// Route::post('/checkout',[ProductController::class,'checkout'])->name('checkout');