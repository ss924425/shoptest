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
Route::get('/','home\indexController@index'); // 首页

Route::get('/login','home\loginController@index'); // 登录页

Route::get('/detial','home\detialController@index'); // 商品详情页

Route::get('/product/show/{id}','home\productController@show'); // 商品详情页

Route::get('/product','home\productController@index'); // 商品列表页

Route::get('/cart','home\cartController@index'); // 购物车页

Route::get('/contact','home\contactController@index'); // 商家入驻页

Route::get('/register','home\registerController@index'); // 注册页

Route::post('/register/send','home\registerController@send'); // 注册页

Route::post('/register/doRegister','home\registerController@doRegister'); // 注册页

Route::get('/center','home\centerController@index'); // 个人中心页

Route::get('/pay','home\payController@index'); // 结算页

// 平台
Route::get('/admin','admin\indexController@index'); // 平台首页
 
Route::resource('/admin/users','admin\users\usersController'); // 用户页

Route::resource('/admin/seller','admin\seller\sellerController'); // 商家页

Route::get('/admin/users/center','admin\users\usersController@center'); // 个人中心

// 商家
Route::get('/seller','seller\indexController@index'); // 商家首页

Route::resource('/seller/users','seller\users\usersController'); // 会员页

Route::resource('/seller/goods','seller\goods\goodsController'); // 商品页

Route::get('/seller/order','seller\orders\orderController@index'); // 订单页

Route::get('/seller/orders/orderinfo','seller\orders\orderinfoController@index'); // 订单详情页