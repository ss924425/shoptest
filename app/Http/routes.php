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


// 后台
Route::get('/admin', 'admin\indexController@index');

// 商家
Route::get('/seller', 'seller\sellerController@index');
Route::resource('/goods', 'seller\goodsController');

// 注册
Route::get('/register','home\registerController@index');
Route::post('/doRegister', 'home\registerController@doRegister');

// 登录
Route::get('/login','home\loginController@index');
Route::post('/doLogin', 'home\loginController@doLogin');

