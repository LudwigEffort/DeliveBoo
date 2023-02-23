<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;







//API DISHES
Route::get('/dishes', 'Api\DishController@index')->name('dishes.index');
Route::get('/dishes/{dish:slug}', 'Api\DishController@show')->name('dishes.show');

//API RESTAURANTS (USERS)
Route::get('/users',    'Api\UserController@index')->name('users.index');
Route::get('/users/{user:slug}', 'Api\UserController@show')->name('users.show');
