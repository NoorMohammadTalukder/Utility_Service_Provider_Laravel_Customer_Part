<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;

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

Route::get('/home', [CustomerController::class, 'home'])->name('home');

Route::get('/signup', [CustomerController::class, 'signup'])->name('signup');
Route::post('/signup', [CustomerController::class, 'signupSubmit'])->name('signup');

Route::get('/signin', [CustomerController::class, 'signin'])->name('signin');
Route::post('/signin', [CustomerController::class, 'signinSubmit'])->name('signin');

Route::get('/customerDash', [CustomerController::class, 'customerDash'])->name('customerDash')->middleware("validCustomer");;

Route::get('/customerInfo', [CustomerController::class, 'customerInfo'])->name('customerInfo')->middleware("validCustomer");

Route::get('/customerUpdateInformation', [CustomerController::class, 'customerUpdateInformation'])->name('customerUpdateInformation')->middleware("validCustomer");

Route::post('/updateInformationPassFormSubmit', [CustomerController::class, 'updateInformationPassFormSubmit'])->name('updateInformationPassFormSubmit')->middleware("validCustomer");

Route::get('/customerUpdate', [CustomerController::class, 'customerUpdate'])->name('customerUpdate')->middleware("validCustomer");
Route::post('/customerUpdate', [CustomerController::class, 'customerUpdateSubmit'])->name('customerUpdate')->middleware("validCustomer");

Route::get('/customerLogout', [CustomerController::class, 'customerLogout'])->name('customerLogout')->middleware("validCustomer");

// products work
Route::get('/list',[ProductController::class,'list'])->name('list');

Route::get('/serviceDetail/{id}',[ProductController::class,'serviceDetail'])->name('serviceDetail');

Route::post('/addtocart',[ProductController::class,'addtocart'])->name('addtocart');

Route::get('/cart',[ProductController::class,'cart'])->name('cart');

Route::post('/checkout',[ProductController::class,'checkout'])->name('checkout')->middleware("validCustomer");

Route::get('/orderHistory',[ProductController::class,'orderHistory'])->name('orderHistory')->middleware("validCustomer");

Route::get('/emptycart',[ProductController::class,'emptycart'])->name('emptycart');

Route::get('/SpecificServiceDetail/{id}',[CustomerController::class,'SpecificServiceDetail'])->name('SpecificServiceDetail')->middleware("validCustomer");;

// Route::post('/checkout',[ProductController::class,'checkout'])->name('checkout');