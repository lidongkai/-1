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

			//网络配置
			Route::get('/admin/config/index','Admin\ConfigController@index');

			//网络配置修改页
			Route::get('admin/config/edit/{id}','Admin\ConfigController@edit');

			//网络配置执行添加
			Route::post('admin/config/update','Admin\ConfigController@update');

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
			// ajax更改状态
			Route::post('/admin/user/ajaxstatus','Admin\UserController@ajaxStatus');

			Route::post('/admin/config/ajaxstatus','Admin\ConfigController@ajaxstatus');

			Route::post('/admin/links/ajaxstatus','Admin\LinksController@ajaxStatus');

			Route::post('/admin/links/ajaxrename','Admin\LinksController@ajaxRename');

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
			Route::post('/admin/article/ajaxtop','Admin\ArticleController@ajaxTop');
			Route::post('/admin/article/ajaxchosen','Admin\ArticleController@ajaxChosen');
			Route::post('/admin/article/ajaxlunbo','Admin\ArticleController@ajaxLunbo');

			
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
			 
			Route::resource('/admin/goodsDetail',"Admin\GoodsDetailController");
			Route::get('/admin/getAllGoods',"Admin\GoodsController@get");
});

//前台群组
Route::group(['middleware'=>'homelogin'],function(){

			
//前台用户中心页
Route::get('/home/user/index','Home\UserController@index');


// 前台栏目

//前台完善资料
Route::get('/home/user/information','Home\UserController@information');

//前台完善添加信息
Route::post('/home/user/add','Home\UserController@add');

//前台更改密码模板
Route::get('/home/user/safe','Home\UserController@safe');

//用户前台修改密码
Route::post('/home/user/update','Home\UserController@update');

Route::get('/home/user/detail','Home\UserController@detail');

Route::get('/home/column/{id}','Home\IndexController@column');

// 前台个人中心文章
Route::get('/home/user/article','Home\ArticleController@index');
// 前台个人中心文章添加
Route::get('/home/user/addarticle','Home\ArticleController@addarticle');

// 前台个人中心文章执行添加
Route::post('/home/user/insertarticle','Home\ArticleController@insertarticle');
// 前台文章修改
Route::get('/home/article/edit/{id}','Home\ArticleController@edit');
// 前台文章执行修改
Route::post('/home/article/update','Home\ArticleController@update');
// 前台文章删除
Route::get('/home/article/delete/{id}','Home\ArticleController@delete');
// 前台文章评论
Route::post('/home/article/comment','Home\ArticleController@comment');
// 前台发送私信
Route::post('/home/user/sixin','Home\ArticleController@ajaxSixin');
// 前台个人中心接收私信
Route::get('/home/user/sixin','Home\UserController@sixin');


});

// 前台主
Route::get('/home/index','Home\IndexController@index');
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

//邮件
Route::get('/admin/send','Admin\MailController@send');

//忘记密码
Route::get('/admin/forgot','Admin\ForgotController@forgot');
Route::post('/admin/sendemail','Admin\ForgotController@sendEmail');

 




// ajax 操作
Route::post('/admin/column/ajaxrename','Admin\ColumnController@ajaxRename');

 
//前台登录主页
Route::get('/home/layout','Home\LoginController@layout');

//前台登录ajax方法
Route::post('/home/login/ajaxlogin',"Home\LoginController@ajaxLogin");

//前台注册方法
Route::post('/home/login/register','Home\LoginController@register');

//前台退出
Route::get('/home/loginout','Home\LoginController@Loginout');


// 前台文章详情
Route::get('/home/show/{id}','Home\IndexController@show');
// 前台业界资讯刷新
Route::post('/home/refresh','Home\IndexController@refresh');




//短信验证
Route::post('/home/sendmessage','Home\SendMessageController@sendmessage');
Route::post('/home/getmessage','Home\SendMessageController@getmessage');



