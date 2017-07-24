<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{  
  
    public function index(Request $request)
    {	
    	$data = \DB::table('column')->get();
    	$data1 = \DB::table('articles')->where('status',1)->orderBy('ctime','desc')->paginate(10);
    	$data2 = \DB::table('articles')->where([
    			['status',1],
    			['chosen',1]
    			])->get();

        if($request->skip)
        {
            $skip = $request->skip;
        }else
        {
            $skip = 0;
        }

        $data3 = \DB::table('articles')->where('status',1)->skip($skip)->take(6)->orderBy('ctime','desc')->get();

        $data4 = \DB::table('articles')->where([
                ['status',1],
                ['top',1]
            ])->take(4)->get();

        $data5 = \DB::table('articles')->where([
                ['status',1],
                ['lunbo',1]
            ])->take(4)->get();





        $dataz1 = \DB::table('links')->get();
        // dd($data3);

        $data8 = \DB::table('config')->get();
        $data8 = $data8[0]->status;
        if($data8 == '1')
        {
            return view ('home.index.index',['request'=>$request->all(),'data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5,'dataz1'=>$dataz1]);
        }else
        {
            return view('home.down.index');
        }
    	

    }

    public function column(Request $request)
    {
    	$data = \DB::table('column')->get();
        $res = \DB::table('column')->where('id',$request->id)->get();
        $hname = $res[0]->name;

    	$data1 = \DB::table('articles')->where([
    		['cid',$request->id],
    		['status',1]
    		])->orderBy('ctime','desc')->paginate(10);
    	
    	return view ('home.index.column',['hname'=>$hname ,'request'=>$request->all(),'data'=>$data,'data1'=>$data1]);
    }

    public function show(Request $request)
    {
        $data = \DB::table('articles')->where('id',$request->id)->first();
        $data1 = \DB::table('comment')->where('aid',$request->id)->orderBy('ctime','desc')->get();
      
        return view('home.index.show',['data'=>$data,'data1'=>$data1]);
    }


    public function refresh(Request $request)
    {
        $data = \DB::table('column')->get();
        $data1 = \DB::table('articles')->where('status',1)->orderBy('ctime','desc')->paginate(10);
        $data2 = \DB::table('articles')->where([
                ['status',1],
                ['chosen',1]
                ])->get();
        if($request->skip)
        {
            $skip = $request->skip;
        }else
        {
            $skip = 0;
        }

        $data3 = \DB::table('articles')->where('status',1)->skip($skip)->take(6)->orderBy('ctime','desc')->get();
        
        return response() -> json($data3);
        
    }
}
