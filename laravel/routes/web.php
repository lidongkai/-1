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

// Route::get('/', function () {
//     return view('welcome');
// });

// 商品分类管理
Route::resource('/admin/goods',"Admin\GoodsController");
Route::resource('/admin/goodsDetail',"Admin\GoodsDetailController");
Route::get('/admin/getAllGoods',"Admin\GoodsController@get");

