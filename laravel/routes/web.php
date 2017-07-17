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
 


//群组
Route::group(['middleware'=>'adminlogin'],function(){

			//后台主页
			Route::get('/admin/index','Admin\IndexController@index');

			//后台用户
			Route::get('/admin/user/add','Admin\UserController@add');

			//用户编辑
			Route::get('/admin/user/edit/{id}','Admin\UserController@edit');

			//修改
			Route::post('/admin/user/update','Admin\UserController@update');

			//用户删除
			Route::get('/admin/user/delete/{id}','Admin\UserController@delete');

			//后台用户添加
			Route::post('/admin/user/insert','Admin\UserController@insert');

			//用户添加主页
			Route::get('/admin/user/index','Admin\UserController@index');

			// 链接管理
			Route::get('/admin/links/index','Admin\LinksController@index');
			Route::get('/admin/links/add','Admin\LinksController@add');
			// 修改链接
			Route::get('/admin/links/edit/{id}','Admin\LinksController@edit');
			// 删除链接
			Route::get('/admin/links/delete/{id}','Admin\LinksController@delete');
			//修改
			Route::post('/admin/links/update','Admin\LinksController@update');
			Route::post('/admin/links/insert','Admin\LinksController@insert');
});



//ajax
Route::post('/admin/user/ajaxrename','Admin\UserController@ajaxRename');

//后台登录
Route::get('/admin/login','Admin\LoginController@login');

//执行登录
Route::post('/admin/dologin','Admin\LoginController@doLogin');

//退出
Route::get('/admin/logout','Admin\LoginController@logout');

//验证码
Route::get('kit/captcha/{tmp}', 'Admin\KitController@captcha');

// ajax更改状态
Route::post('/admin/user/ajaxstatus','Admin\UserController@ajaxStatus');

Route::post('/admin/links/ajaxstatus','Admin\LinksController@ajaxStatus');

Route::post('/admin/links/ajaxrename','Admin\LinksController@ajaxRename');
//邮件
Route::get('/admin/send','Admin\MailController@send');

//忘记密码
Route::get('/admin/forgot','Admin\ForgotController@forgot');
Route::post('/admin/sendemail','Admin\ForgotController@sendEmail');

 

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
 
// 商品管理
Route::resource('/admin/goodsDetail',"Admin\GoodsDetailController"); 
 
Route::post('/admin/goodsDetail/ajaxa',"Admin\GoodsDetailController@ajaxa"); 
 
// 递归
Route::get('/admin/getAllGoods',"Admin\GoodsController@get");

// 订单管理
Route::get('/admin/order/index',"Admin\OrderController@index"); 
Route::get('/admin/order/delete/{id}',"Admin\OrderController@delete");
Route::post('/admin/order/update/{id}',"Admin\OrderController@update");
 
Route::resource('/admin/goodsDetail',"Admin\GoodsDetailController");
Route::get('/admin/getAllGoods',"Admin\GoodsController@get");
 

// 前台积分商城
Route::get('/home/shop/index',"home\ShopController@index");
Route::get('/home/shop/show',"home\ShopController@show");
Route::get('/home/shop/detail/{id}',"home\ShopController@detail");

// 购物车
Route::get('/home/shopcar/index',"home\ShopCarController@index");
Route::post('/home/shopcar/ajaxc',"home\ShopCarController@ajaxc");
Route::get('/home/shopcar/delete/{id}',"home\ShopCarController@delete");
// 订单
Route::get('/home/order/add',"home\OrderController@add");



// ajax
Route::post('/home/shop/ajax',"home\ShopController@ajax");
Route::post('/home/shop/ajaxs',"home\ShopController@ajaxs");

// 轮播图
Route::post('/admin/turn/insert',"admin\TurnController@insert"); 
Route::get('/admin/turn/add',"admin\TurnController@add");
Route::get('/admin/turn/index',"admin\TurnController@index");
Route::get('/admin/turn/edit/{id}',"admin\TurnController@edit");
Route::post('/admin/turn/update/{id}',"admin\TurnController@update"); 
Route::post('/admin/turn/delete/{id}',"admin\TurnController@delete"); 

Route::post('/home/shop/ajaxb',"home\ShopController@ajaxb");
 
 
//前台登录主页
Route::get('/home/layout','Home\LoginController@layout');

//前台登录ajax方法
Route::post('/home/login/ajaxlogin',"Home\LoginController@ajaxLogin");

//前台注册方法
Route::post('/home/login/register','Home\LoginController@register');

//前台退出
Route::get('/home/loginout','Home\LoginController@Loginout');

//前台用户中心页
Route::get('/home/user/index','Home\UserController@index');

//前台用户详情
// Route::

 
