<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登录
    public function login()
    {
    	return view('admin.login.login',['title'=>'用户主页']);
    }

    //执行登录
    public function doLogin(Request $request)
    {
    	$data = $request->except('_token');
    	// dd($data);
    	$code = session('code');

    	//验证是否记住我
    	$remember_token = \Cookie::get('remember_token');
    	if($remember_token)
    	{	

    		$admin = \DB::table('users')->where('remember_token',$remember_token)->first();

    		//存入
    		session(['master'=>$admin]);

    		return redirect('/admin/index')->with(['info'=>'欢迎回来']);
    	}
    	//判断验证码是否正确
    	if($code != $data['code'])
    	{
    		return back()->with(['info'=>'验证码错误']);
    	}
    	

    	//查询数据库用户数据
    	$res = \DB::table('users')->where('username',$data['name'])->first();

    	//判断
    	if(!$res)
    	{
    		return back()->with(['info'=>'用户名不正确']);
    	}
    	

    	// //判断密码
        $password = $res->password;
        if(\Hash::check($data['password'] , $password))
        {
            //将登录信息存入session
        session(['master'=>$res]);

        //写入cookie
        if($request->has('remember_me'))
        {
            \Cookie::queue('remember_token',$res->remember_token,10);
        }
        

        //登录成功跳转到主页
        return redirect('/admin/index')->with(['info'=>'登录成功']);
        }else{
            return back()->with(['info'=>'密码不正确']);
        }


    	
    }

    	public function logout(Request $request)
    	{
    		$request->session()->forget('master');
    		return redirect('/admin/login')->with(['info'=>'退出成功']);
    	}
}