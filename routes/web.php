<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/users', 'HomeController@users')->name('users');
    Route::get('/Categories/Home',[
        'uses'=>'CategoriesController@index',
        'as'=>'categories.index'
    ]);
    Route::post('/Categories/Save',[
        'uses'=>'CategoriesController@store',
        'as'=>'categories.save'
    ]);
    Route::get('/Categories/Delete/{id}',[
        'uses'=>'CategoriesController@destroy',
        'as'=>'categories.delete'
    ]);
    Route::get('/Videos/Index/',[
        'uses'=>'VideosController@index',
        'as'=>'videos.index'
    ]);
    Route::get('/Videos/Delete/{id}',[
        'uses'=>'VideosController@destroy',
        'as'=>'videos.delete'
    ]);
    Route::get('/Play/{id}',[
        'uses'=>'VideosController@show',
        'as'=>'videos.play'
    ]);
    Route::get('/Video/Edit/{id}',[
        'uses'=>'VideosController@edit',
        'as'=>'video.edit'
    ]);
    Route::get('/Video/Delete/{id}',[
        'uses'=>'VideosController@destroy',
        'as'=>'video.delete'
    ]);
    Route::post('/Videos/Add/',[
        'uses'=>'VideosController@store',
        'as'=>'video.add'
    ]);
    Route::post('/Videos/Like/{url}',[
        'uses'=>'VideosController@like',
        'as'=>'video.like'
    ]);
    Route::post('/Videos/Update/{id}',[
        'uses'=>'VideosController@update',
        'as'=>'video.update'
    ]);
    Route::get('/Videos/Single/{id}',[
        'uses'=>'CategoriesController@find',
        'as'=>'category.find'
    ]);
    Route::get('/Videos/View/{id}',[
        'uses'=>'CategoriesController@show',
        'as'=>'video.review'
    ]);
    Route::get('/callback',[
        'uses'=>'PaymentsController@index',
    ]);
    Route::get('/Account',[
        'uses'=>'HomeController@account',
        'as'=>'account'
    ]);
    Route::Post('/Account/Update',[
        'uses'=>'HomeController@update',
        'as'=>'account.update'
    ]);

});
