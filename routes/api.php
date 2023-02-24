<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;








//API RESTAURANTS (USERS)
Route::get('/users',    'Api\UserController@index')->name('users.index');
Route::get('/users/{user:slug}', 'Api\UserController@show')->name('users.show');

//API DISHES DEI SINGOLI RESTAURANTS (USERS)
//! PROBABILMENTE NON SERVONO
//Route::get('/users/{dish:slug}', 'Api\DishController@index')->name('dishes.index');
//Route::get('/users/{user:slug}/{dish:slug}', 'Api\DishController@show')->name('dishes.show');
