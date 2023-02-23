<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;








//API RESTAURANTS (USERS)
Route::get('/users',    'Api\UserController@index')->name('users.index');
Route::get('/users/{user:slug}', 'Api\UserController@show')->name('users.show');

//API DISHES
Route::get('/{users:slug}/dishes', 'Api\DishController@index')->name('dishes.index');
Route::get('/{users:slug}/dishes/{dish:slug}', 'Api\DishController@show')->name('dishes.show');
