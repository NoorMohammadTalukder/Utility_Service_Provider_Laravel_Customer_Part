<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmailController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//--------------- customer API-------------------
Route::post('/signupSubmit', [CustomerController::class, 'signupSubmit']);

Route::post('/signinSubmit', [CustomerController::class, 'signinSubmit']);

Route::get('/customerInfo/{id}',[CustomerController::class,'customerInfo']);
Route::get('/aa',[CustomerController::class,'aa']);

// Route::post('/updateInformationPassFormSubmit/{id}/{pass}', [CustomerController::class, 'updateInformationPassFormSubmit']);
Route::post('/customerUpdate/{id}', [CustomerController::class, 'customerUpdateSubmit']);
Route::post('/customerUpdateSubmit', [CustomerController::class, 'customerUpdateSubmit'])->middleware('APIAuth');;
Route::post('/logout', [CustomerController::class, 'logout'])->middleware('APIAuth');;
Route::post('/delete',[CustomerController::class,'delete']);

Route::get('/SpecificServiceDetail',[CustomerController::class,'SpecificServiceDetail']);

// ---------------product-------------------------------
//Route::get('/list',[ProductController::class,'list']);

Route::get('/serviceDetail/{id}',[ProductController::class,'serviceDetail']);

Route::get('/orderHistory/{id}',[ProductController::class,'orderHistory']);


// Route::get('/product/list',[ProductController::class,'list']);

Route::get('/product/list',[ProductController::class,'list'])->middleware('APIAuth');

// Route::get('signinSubmit', [EmailController::class, 'myDemoMail']);
Route::get('/my-demo-mail', [EmailController::class, 'myDemoMail']);