<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
   public function add(){

   	$data = \DB::table('shopcar')
            ->join('users', 'users.id', '=', 'shopcar.uid')  
            ->join('goodsdetail', 'goodsdetail.id', '=', 'shopcar.gids')  
            ->select('users.username','shopcar.*','goodsdetail.picture')
            ->get();
   	return view('home.order.add',['data'=>$data]);
   }
}
