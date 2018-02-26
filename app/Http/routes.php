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

Route::get('/center','home\centerController@index');

// 平台
Route::get('/admin','admin\indexController@index');

Route::resource('/admin/users','admin\users\usersController');

Route::resource('/admin/seller','admin\seller\sellerController');

Route::get('/admin/users/center','admin\users\usersController@center');

// 商家
Route::get('/seller','seller\indexController@index');

Route::resource('/seller/users','seller\users\usersController');

Route::resource('/seller/goods','seller\goods\goodsController');

Route::get('/seller/order','seller\orders\orderController@index');

Route::get('/seller/orders/orderinfo','seller\orders\orderinfoController@index');