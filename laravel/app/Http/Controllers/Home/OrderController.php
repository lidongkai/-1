<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{	

   // 个人中心订单
   public function index(Request $request){ 
      // 获取当前用户
      $id = $request->session()->get('master')->id; 
      $data = \DB::table('order')->where('uid',$id)->get(); 
        
      foreach($data as $key=>$val){
         // $data1[] = explode(',',(rtrim($val->gid,',')));
         $data0[] = $val->ordernum; 
      } 
      foreach($data0 as $a){
         $dataGood[] = \DB::table('order')->where('ordernum',$a)->first();

               foreach($dataGood as $b){
                  $dataGid[] = $b->gid;

                        // dd($dataGid);
                     foreach($dataGid as $key=>$val){
                        $data1[] = explode(',',(rtrim($val,',')));
                        
                     }  

                     foreach($data1 as $k=>$v){
                        $data2 = $v;
                           foreach($data2 as $a=>$b){
                           $data3[] = $b;
                           }
                     }
                     
                     // dd($data3);
                     foreach($data3 as $value){
                        // echo $value;
                       $data4[] = \DB::table('goodsdetail')->where('id',$value)->first(); 
                     }
               }
               
   }
     
      dd($data4); 

      return view('home.user.order',['data'=>$data]);
   }

	// 处理订单地址及商品
	// 订单去结算页面
   public function add(Request $request){

   	// 获取当前用户
   	$aid = $request->session()->get('master')->id;

   	$data = \DB::table('shopcar')->where('status',1)->where('uid',$aid)->get();   
   	$data2 = \DB::table('address')->where('aid',$aid)->get();

   	return view('home.order.add',['data'=>$data,'data2'=>$data2]);
   }
 
   // 订单地址
   public function ajaxg(Request $request){

   	// dd($request->all());
   	$upid = $request->input('upid');
   	$data = \DB::table('district')->where('upid',$upid)->get();
   	return $data;
   }

   public function ajaxp(Request $request){
   	$upid = $request->input('upid');
   	$data1 = \DB::table('district')->where('upid',$upid)->get();
   	return $data1;
   }

   // 添加新地址
   public function doadd(Request $request){
   	// dd($request->all());   
   	 // 判断用户名
   	$p = '/\d{2}\-\d{15}/';
   	if($request->input('sname') == null && !(preg_match($p,$request->input('sname')))){
   		return response()->json('0');
   	}

   	// 判断手机号码
   	$a = '/\d{11}/';
   	if(!(preg_match($a,$request->input('iphone')))){
   		return response()->json('1');
   	}
   	// 判断地址
   	// dd(count($request->input('city')));
   	if(count($request->input('city')) < 3 ){
   		return response()->json('4');
   	}

   	if(strlen($request->input('daddress')) <= 3){
   		return response()->json('4');
   	}


   	// 获取当前用户
   	$aid = $request->session()->get('master')->id;
   	// dd($aid);
   	 
   	// 查询地址名称
   	$city0 = \DB::table('district')->where('id',$request->input('city.0'))->first()->name;

   	$city1 = \DB::table('district')->where('id',$request->input('city.1'))->first()->name;

   	$city2 = \DB::table('district')->where('id',$request->input('city.2'))->first()->name;

   	$city4 = $request->input('daddress');

   	// 拼接地址
   	if($request->input('city.3')){
   		$city3 = \DB::table('district')->where('id',$request->input('city.3'))->first()->name;
   		$city = $city0.$city1.$city2.$city3.$city4;
   	}else{
   		$city = $city0.$city1.$city2.$city4;
   	} 

   	$data = $request->except('_token','city','daddress');
   	$data += ['address'=>$city];
   	$data += ['aid'=>$aid];
   	// dd($data);
   	// 执行添加
   	$res = \DB::table('address')->insert($data);
   	if($res){
   		return response()->json('2');
   	}else{
   		return response()->json('3');
   	}
 
   }

   public function delete($id){ 
   	$res = \DB::table('address')->delete($id);
   	if($res){
   		return back();
   	} 
   }

   // 去结算后的确认订单
   public function sureOrder(){

   	return view('/home/order/sureOrder');
   }

   // 订单生成
   public function insert(Request $request){


   // 判断是否选择地址
   	if($request->input('addre') == null){
   		return back()->with(['info'=>'请选择地址']);
   	} 

   	$data = $request->all(); 

   	// 用户的id
   	$uid = $request->session()->get('master')->id;
   	$data['uid'] = $uid;
   	$data['ftime'] = date('Y-m-d H:i:s', time());
   	$data['otime'] = date('Y-m-d H:i:s', time()); 
   	$data['status'] = 1;
   	// 生成订单号
	$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
	$data['ordernum'] = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));

	// dd($data);
	$res = \DB::table('order')->insert($data);
	if($res){

		// 删除购物车商品
		// 获取要删商品的id 
		$allId = $request->input('gid'); 
	   	// 清除多余字符
	   	$allId = rtrim($allId,',');
	   	$allId = explode(',',$allId);
	   	foreach($allId as $key=>$val){
	   		\DB::table('shopcar')->delete($val);
	   	}
   	// dd($allId);  

   		return redirect('/home/order/sureOrder'); 
   	}else{
   		return back()->with(['info'=>'提交失败']);
   	}

   	 
   }
}
