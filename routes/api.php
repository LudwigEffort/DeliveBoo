<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;








//API RESTAURANTS (USERS)
Route::get('/users',    'Api\UserController@index')->name('users.index');
Route::get('/users/{user:slug}', 'Api\UserController@show')->name('users.show');
