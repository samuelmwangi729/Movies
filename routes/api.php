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

Route::resource('phones/Users', 'Mobile\LoginController',['only'=>['store']]);
Route::resource('phone/Categories','Mobile\CategoriesController',['only'=>['index']]);
Route::resource('phone/Videos','Mobile\VideosController',['only'=>['index']]);
Route::resource('phone/Trailers','Mobile\TrailersController',['only'=>['index']]);
Route::resource('phone/User','Mobile\UserController',['only'=>['index','store','update']]);
Route::resource('/phone/Subscribers','Mobile\SubsController');