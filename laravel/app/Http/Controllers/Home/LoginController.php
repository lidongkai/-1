<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

   public function layout()
    {
        return view('home.layout');
    }

   public function ajaxLogin(Request $request)
   {
        // dd($request->all());
        //判断用户名
        $data = $request->except('_token');
        // dd($data['username']);
        $res = \DB::table('users')->where('username',$data['username'])->first();
        // dd($res);
        // $pwd = \DB::table('users')->where('password',$data['password'])->first();
 

        if(!$res)
        {
            return response()->json('1');
        }


        //判断密码
        $pwd = $res->password;
        // dd($pwd);
        if(\Hash::check($data['password'],$pwd))
        {   //存session
            session(['master'=>$res]);
            
            return response()->json('0');

        }else
        {
            return response()->json('2');
        }
   }

   public function register(Request $request)
   {
        // dd(111);
   $this->validate($request, 
        [
        'username' => 'required|unique:users|min:5|max:18',
        'email'=> 'required|unique:users|email',
        'password'=>'required',
        'repwd'=>'same:password'
        ],
        
        [
            'username.min'=>'用户名至少5个字符',
            'username.required'=>'用户名不能为空',
            'username.unique'=>'用户名不能重复',
            'username.max'=>'用户名最多不能超过18个字符',
            'email.required'=>'邮箱不能为空',
            'email.unique'=>'邮箱已存在',
            'email.email'=>'请填写正确的邮箱',
            'password.required'=>'密码不能为空',
            'repwd.same'=>'确认密码不正确'
        ]);    

    

        $data = $request->except('_token','repwd');
        // dd($data);

        // $code = session('code');

        // //验证是否记住我
        // $remember_token = \Cookie::get('remember_token');
        // if($remember_token)
        // {   

        //     $admin = \DB::table('users')->where('remember_token',$remember_token)->first();

        //     //存入
        //     session(['master'=>$admin]);

        //     return redirect('/home/layout')->with(['info'=>'欢迎回来']);
        // }
        // //判断验证码是否正确
        // if($code != $data['code'])
        // {
        //     return back()->with(['info'=>'验证码错误']);
        // }

        //密码加密
        $data['password'] = \Hash::make($data['password']);

        //remember_token
        $data['remember_token'] = str_random(50);

        //处理时间
        $time = date('Y-m-d H:i:s');
        $data['created_at'] = $time;
        $data['updated_at'] = $time;

        //添加注册
        $res = \DB::table('users')->insert($data);

        if($res)
        {
            return response()->json('0');
        }else
        {
            return response()->json('1');
        }
   }

   //退出
   public function Loginout(Request $request)
   {    
        $request->session()->forget('master');
        return redirect('/home/index');
   }
}
