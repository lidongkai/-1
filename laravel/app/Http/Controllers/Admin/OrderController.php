<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request){

    	$num = $request->input('num',10); 
        $keywords = $request->input('keywords','');
     
        $data = \DB::table('order')->where('ordernum','like','%'.$keywords.'%')->paginate($num);
 
    	return view('admin.order.index',['data'=>$data,'request' => $request->all(),'title'=>'订单列表']);
    }
 
    public function update(Request $request,$id){
    	 
    	$status = $request->input('status');  
    	
    	$res = \DB::table('order')->where('id',$id)->update(['status'=>$status]);
 		 if($res){
            return redirect('/admin/order/index')->with(['info' => '添加成功']);
        }else{
            return redirect('/admin/goodsDetail/create')->with(['info' => '添加失败']);
        }
    	
    }

    public function delete($id){
    	$res = \DB::table('order')->delete($id);
        // 判断
        if($res){
            return redirect('/admin/order/index')->with(['info' => '删除成功']);
        }else{
            return back()->with(['info' => '删除失败']);
        }
    }

}
