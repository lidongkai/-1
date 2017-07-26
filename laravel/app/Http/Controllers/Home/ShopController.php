<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index(){  
    	// 查询数据库
        $data1 = \DB::table('goods')->where('pid',1)->get(); 
        $data2 = \DB::table('goodsdetail')->where('status',1)->get(); 
    	$data3 = \DB::table('turn')->get();   
    	return view('home.shop.index',['data1'=>$data1,'data2'=>$data2,'data3'=>$data3]);
    }

     public function show(Request $request){  

     	// 查询商品分类
     	$data1 = \DB::table('goods')->where('pid',1)->get(); 
         $data2 = \DB::table('goodsdetail')->where('status',1)->get(); 
     	$data = \DB::table('goodsDetail')->get();
     	// dd($data);
    	return view('home.shop.show',['data'=>$data,'data1'=>$data1,'data2'=>$data2]);
    }

     
    public function ajax(Request $request){ 
    	$id = $request->input('id');
    	// dd($id);
    	$data = \DB::table('goods')->where('pid',$id)->get(); 
    	 return $data;  
    }

    public function ajaxs(Request $request){ 
    	$id = $request->input('id');
    	// dd($id);
    	$data = \DB::table('goodsDetail')->where('tid',$id)->get(); 
    	return $data;
    }

    public function detail($id){ 
    	$data = \DB::table('goodsDetail')->where('id',$id)->get();
         $data2 = \DB::table('goodsdetail')->where('status',1)->get(); 
    	// dd($data); 
    	return view('home.shop.detail',['data'=>$data,'data2'=>$data2]); 
    }

    public function ajaxb(Request $request){ 
        $id = $request->input('id'); 
        $data = \DB::table('goods')->where('pid',$id)->get();
        return $data; 
    }
}
