<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopCarController extends Controller
{
     public function index(){

     	$data = \DB::table('shopcar')
            ->join('users', 'users.id', '=', 'shopcar.uid')  
            ->join('goodsdetail', 'goodsdetail.id', '=', 'shopcar.gids')  
            ->select('users.username','shopcar.*','goodsdetail.picture')
            ->get(); 
         $username = [];
        foreach($data as $key=>$val){
        	$username[] = $val->username;
        }
     	return view('home.shopcar.index',['data'=>$data,'username'=>$username]);
     }

     public function ajaxc(Request $request){ 
     	$data = $request->all(); 
     	// dd($data);
     	// dd(session('master')); 


     	if($request->session()->exists('master')){

     		// 同一个用户加了两次该商品
     		$uid = $request->session()->get('master')->id;
     		$gid = $request->input('gids');
     		// dd($gid);
		    $res1 = \DB::table('shopcar')->where([['gids',$gid],['uid',$uid]])->get();
		    dd($res1);
		    
		    if($res1 == []){
     			
     			// 取出session中的用户的id与用户名
	     		// $id = $request->session()->get('master')->id;  
	     		$data['uid']=$uid;  
	     		// dd($data);
	     		// 执行添加
	     		$res = \DB::table('shopcar')->insert($data);
	     			if($res)
	     			{ 
	     				return response()->json('1');
		     		}else{
		     			return response()->json('3');
		     		} 
     			
     		}else{

     			// 修改数据库中num
     			$num = $request->input('num') + 1;
     			$res2 = \DB::table('shopcar')->where([['gids',$gid],['uid',$uid]])->update(['num'=>$num]);
     			if($res2)
	     			{ 
	     				return response()->json('1');
		     		}else{
		     			return response()->json('2');
		     		} 
     			return response()->json('0');
	     		}
  
     	}else{
     	// 存入session
     	session(['shop'=>$data]); 
     	return response()->json('3');
     	} 


     }

     // 删除购物车商品
     public function delete($id){

     	$res = \DB::table('shopcar')->delete($id);
        // 判断
        if($res){
            return redirect('/home/shopcar/index');
        }else{
            return back()->with(['info' => '删除失败']);
        }
     }
}
