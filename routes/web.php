<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/customerLogout', [CustomerController::class, 'customerLogout'])->name('customerLogout');