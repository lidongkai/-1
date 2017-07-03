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
Route::resource('/admin/goodsDetail',"Admin\GoodsDetailController");
Route::get('/admin/getAllGoods',"Admin\GoodsController@get");