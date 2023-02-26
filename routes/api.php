<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;








//API RESTAURANTS (USERS)
Route::get('/users',    'Api\UserController@index')->name('users.index');
Route::get('/users/{user:slug}', 'Api\UserController@show')->name('users.show');

//Api payment by Braintree
Route::get('/payment/generate', 'Api\Braintree\PaymentController@generate');
Route::post('/payment/make/payment', 'Api\Braintree\PaymentController@makePayment');

// API to generate Orders from db
Route::get('/orders', 'Api\Braintree\OrderController@index');
