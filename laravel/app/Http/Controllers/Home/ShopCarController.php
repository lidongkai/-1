<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopCarController extends Controller
{
     public function index(Request $request){

        // 获取当前用户的id
        $id = $request->session()->get('master')->id;
        $username = $request->session()->get('master')->username; 
        // 查询当前用户的购物车商品
        $data = \DB::table('shopcar')->where('uid',$id)->get(); 
        $data1 = \DB::table('shopcar')->where('uid',$id)->where('status',1)->get(); 
     	return view('home.shopcar.index',['data'=>$data,'username'=>$username,'data1'=>$data1]);
     }

     public function ajaxc(Request $request){ 
     	$data = $request->all(); 
     	// dd($data); 
     	if($request->session()->exists('master')){

     		// 同一个用户加了两次该商品
     		$uid = $request->session()->get('master')->id;
     		$gid = $request->input('gids');
     		// dd($gid);
		    $data1 = \DB::table('shopcar')->where([['gids',$gid],['uid',$uid]])->get(); 
		    // dd($data1);
            $data2 = []; 
            foreach($data1 as $k=>$v){
                 $data2['gids'] = $v->gids;
                 $data2['num'] = $v->num;
                 $data2['price'] = $v->price;
            }
            // dd($data2);
            if(in_array($gid,$data2)){ 
     			
     			// 修改数据库中num
                $num = $data2['num'] + 1;
                // dd($num);
                // 修改数据库中total
                $total = $num * $data2['price'].'.00';
                // dd($total);
                $res2 = \DB::table('shopcar')->where([['gids',$gid],['uid',$uid]])->update(['num'=>$num,'total'=>$total]);
                    if($res2)
                     { 
                         return response()->json('1');
                     }else{
                         return response()->json('2');
                     }  
     		}else{

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

     public function update(Request $request){
        // dd($request->all());
        $status = $request->input('status');
        $id = $request->input('id');
        $res = \DB::table('shopcar')->where('id',$id)->update(['status'=>$status]);

        if($res){
            return response()->json('0');
        }else{
            return response()->json('1');
        }
     }

     public function update1(Request $request){
        // dd($request->all());
        $id = $request->session()->get('master')->id;
        $status = $request->input('status');
 
        $res = \DB::table('shopcar')->where('uid',$id)->update(['status'=>$status]);

        if($res){
            return response()->json('0');
        }else{
            return response()->json('1');
        }
     }
}
