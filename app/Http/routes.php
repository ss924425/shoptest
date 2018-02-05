<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// 前台
Route::get('/','home\indexController@index');
Route::get('/login','home\loginController@index');
Route::get('/detial','home\detialController@index');
Route::get('/product','home\productController@index');
Route::get('/cart','home\cartController@index');
Route::get('/contact','home\contactController@index');
Route::get('/register','home\registerController@index');

// 后台
Route::get('/admin', 'admin\indexController@index');

// 商家
Route::resource('/goods', 'seller\goodsController');
