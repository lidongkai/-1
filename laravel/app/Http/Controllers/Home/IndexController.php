<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{  
  
    public function index(Request $request)
    {	
    	$data = \DB::table('column')->get();
    	$data1 = \DB::table('articles')->where('status',1)->paginate(10);
    	$data2 = \DB::table('articles')->where([
    			['status',1],
    			['chosen',1]
    			])->get();

    	return view ('home.index.index',['request'=>$request->all(),'data'=>$data,'data1'=>$data1,'data2'=>$data2]);
    }

    public function column(Request $request)
    {
    	$data = \DB::table('column')->get();
        $res = \DB::table('column')->where('id',$request->id)->get();
        $hname = $res[0]->name;

    	$data1 = \DB::table('articles')->where([
    		['cid',$request->id],
    		['status',1]
    		])->paginate(10);
    	
    	return view ('home.index.column',['hname'=>$hname ,'request'=>$request->all(),'data'=>$data,'data1'=>$data1]);
    }

    public function show(Request $request)
    {
        $data = \DB::table('articles')->where('id',$request->id)->first();
        
        return view('home.index.show',['data'=>$data]);
    }
}
