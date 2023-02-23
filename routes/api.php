<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//API DISHES
Route::get('/dishes', 'Api\DishController@index')->name('dishes.index');
Route::get('/dishes/{dishes:slug}', 'Api\DishController@show')->name('dishes.show');

//API RESTAURANTS (USERS)
Route::get('/users',    'Api\UserController@index')->name('users.index');
Route::get('/users/{user:slug}', 'Api\UserController@show')->name('users.show');
