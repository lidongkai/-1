<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index()
    {	
    	$res = \DB::table('sixin')->where([
    		['zuoz',session('master')->username],
    		['status',1]
    		]
    		)->count();
    	
    	$data = \DB::table('comment')->where('uid',session('master')->id)->orderBy('ctime','desc')->get();

    	return view('home.user.index',['data'=>$data,'res'=>$res]);
    }

    public function show(Request $request)
    {
    	 $data = $request->except('_token','remember_token');

    }

    public function sixin(Request $request)
    {
    	$data = \DB::table('sixin')->where('zuoz',session('master')->username)->orderBy('stime','desc')->paginate(10);
    	\DB::table('sixin')->where('zuoz',session('master')->username)->update(['status'=>0]);
    	return view('home.user.sixin',['request'=>$request->all(),'data'=>$data]);
    }
}

