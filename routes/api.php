<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//API RESTAURANTS (USERS)
Route::get('/users',    'Api\UserController@index')->name('users.index');
Route::get('/users/{user:slug}', 'Api\UserController@show')->name('users.show');

//API Search Bar
Route::get('/api/users', 'Api\UserController@index');


Route::get('orders/generate', 'Api\OrderController@generate');
Route::post('orders/make/payment', 'Api\OrderController@makePayment');
