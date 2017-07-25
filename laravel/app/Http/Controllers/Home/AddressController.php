<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index(Request $request){

    	// 获取当前用户
        $id = $request->session()->get('master')->id;
        $data = \DB::table('address')->where('aid',$id)->get();

    	return view('home.user.address',['data'=>$data]);
    }
}
