<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;








//API RESTAURANTS (USERS)
Route::get('/users',    'Api\UserController@index')->name('users.index');
Route::get('/users/{user:slug}', 'Api\UserController@show')->name('users.show');

//Api payment
Route::get('/payment/generate', 'Api\PaymentController@generate');
Route::post('/payment/make/payment', 'Api\PaymentController@makePayment');