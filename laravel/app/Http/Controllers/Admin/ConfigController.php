<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    //
    //网络配置页
    public function index()
    {	
    	$data = \DB::table('config')->get();
    	// dd($data);
    	return view('admin.config.index',['title'=>'网络配置','data'=>$data]);
    }

    //网络配置添加页
    public function edit($id)
    {
      	$data = \DB::table('config')->where('id',$id)->first();
      	// dd($data);
       	return view('admin.config.edit',['title'=>'网络修改','data'=>$data]);
    }


    //执行修改
    public function update(Request $request)
    {
    	// dd(111);
    	$data = $request->except('_token');
    		// dd($data);

    		$this->validate($request, 
			[
		    	'cname' => 'required|unique:config|min:2|max:10',
		    	'curl'=> 'required',
		    	'clogo'=>'image'
	    	],
	    	
	    	[
	    		'cname.min'=>'网络名称至少2个字符',
				'cname.required'=>'网络名称不能为空',
				'cname.unique'=>'网络名称不能重复',
				'cname.max'=>'用户名最多不能超过10个字符',
				'curl.required'=>'网络链接不能为空',
				'clogo.image'=>'您上传图片格式不正确'
	    	]);

	    	//判断上传clogo
	    	// dd($request);
	    	$oldphoto = \DB::table('config')->where('id',$request->id)->first()->clogo;

	    	if($request->hasFile('clogo'))
	    	{
	    		if($request->file('clogo')->isValid())
	    		{
	    			$ext = $request->file('clogo')->extension();
	    			// dd($ext);

	    			//随机图片名
	    			$filename = time().mt_rand(10000,99999).'.'.$ext;
	    			// dd($filename);

	    			//移动图片
	    			$request->file('clogo')->move('./uploads/avatar/',$filename);

	    			//删除老图片
	    			if(file_exists('/uploads/avatar/'.$oldphoto) && $oldphoto != 'default.jpg')
	    			{
	    				unlink('/uploads/avatar/'.$oldphoto);
	    			}

	    			//存入数据
	    			$data['clogo'] = $filename;
	    		}
	    	}
	    	
	    	$res = \DB::table('config')->where('id',$request->id)->update($data);

	    	if($res)
	    	{
	    		return redirect('admin/config/index')->with(['info'=>'修改成功']);
	    	}else
	    	{
	    		return back()->with(['info'=>'修改失败']);
	    	}
    }


    	//ajax修改状态
    	public function ajaxstatus(Request $request)
    	{
    		$res = \DB::table('config')->where('id',$request->id)->update(['status'=>$request->status]);

    		if($res)
    		{
    			return response()->json('1');
    		}else
    		{
    			return response()->json('2');
    		}
    	}
}
