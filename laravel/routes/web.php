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


Route::get('/', function () {
    return view('welcome');
});

// 栏目主页
Route::get('/admin/column/index','Admin\ColumnController@index');
// 添加栏目
Route::get('/admin/column/add','Admin\ColumnController@add');
// 执行添加
Route::post('/admin/column/insert','Admin\ColumnController@insert');
// 编辑栏目
Route::get('/admin/column/edit/{id}','Admin\ColumnController@edit');
// 执行修改
Route::post('/admin/column/update','Admin\ColumnController@update');
// 删除栏目
Route::get('/admin/column/delete/{id}','Admin\ColumnController@delete');


// ajax 操作
Route::post('/admin/column/ajaxrename','Admin\ColumnController@ajaxRename');


// 添加文章
Route::get('/admin/article/add','Admin\ArticleController@add');
// 执行添加
Route::post('/admin/article/insert','Admin\ArticleController@insert');
// 文章列表主页
Route::get('/admin/article/index','Admin\ArticleController@index');
Route::post('/admin/article/index','Admin\ArticleController@index');
// 文章修改
Route::get('/admin/article/edit/{id}','Admin\ArticleController@edit');
// 执行修改
Route::post('/admin/article/update','Admin\ArticleController@update');
// 执行删除
Route::get('/admin/article/delete/{id}','Admin\ArticleController@delete');
// 文章详情页
Route::get('/admin/article/show/{id}','Admin\ArticleController@show');
// ajax更改状态
Route::post('/admin/article/ajaxstatus','Admin\ArticleController@ajaxStatus');

// 商品分类管理
Route::resource('/admin/goods',"Admin\GoodsController");
<<<<<<< HEAD
// 商品管理
Route::resource('/admin/goodsDetail',"Admin\GoodsDetailController"); 
// 递归
Route::get('/admin/getAllGoods',"Admin\GoodsController@get");

// 订单管理
Route::get('/admin/order/index',"Admin\OrderController@index"); 
Route::get('/admin/order/delete/{id}',"Admin\OrderController@delete");
Route::post('/admin/order/update/{id}',"Admin\OrderController@update");
=======
Route::resource('/admin/goodsDetail',"Admin\GoodsDetailController");
Route::get('/admin/getAllGoods',"Admin\GoodsController@get");


>>>>>>> 8e62021eb9bfdd5d6446701cc18b21039c3941f0
