<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// 商品分类管理
Route::resource('/admin/goods',"Admin\GoodsController");
// 商品管理
Route::resource('/admin/goodsDetail',"Admin\GoodsDetailController"); 
// 递归
Route::get('/admin/getAllGoods',"Admin\GoodsController@get");

// 订单管理
Route::get('/admin/order/index',"Admin\OrderController@index"); 
Route::get('/admin/order/delete/{id}',"Admin\OrderController@delete");
Route::post('/admin/order/update/{id}',"Admin\OrderController@update");