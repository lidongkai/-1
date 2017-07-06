<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LinksController extends Controller
{
    //用户添加页
    public function add()
    {
    	return view('admin.links.add',['title'=>'添加链接']);
    }

    //用户添加执行
    public function insert(Request $request)
    {	
    // dd($request->all());
    	$this->validate($request, 
		[
    	'webname' => 'required|unique:links|min:5|max:18',
    	'weburl'=> 'required|unique:links',
    	'logo'=>'image'
    	],
    	
    	[
    		'webname.min'=>'链接名称至少5个字符',
			'webname.required'=>'链接名称不能为空',
			'webname.unique'=>'链接名称不能重复',
			'webname.max'=>'链接名称最多不能超过18个字符',
			'weburl.required'=>'链接地址不能为空',
			'weburl.unique'=>'链接地址不能重复',
			'logo.image'=>'您上传图片格式不正确'
    	]);    	

		$data = $request->except('_token');

		//处理上传头像
		if($request->hasFile('logo'))
		{
			if($request->file('logo')->isValid())
			{
				$ext = $request->file('logo')->extension();

				//随机文件名
				$filename = time().mt_rand(100000,999999).'.'.$ext;

				//移动文件
				$request->file('logo')->move('./uploads/logo',$filename);

				//头像信息添加到data中
				$data['logo'] = $filename;
			}
				
		}

    		//执行添加
    		$res = \DB::table('links')->insert($data);

    		if($res)
    		{
    			return redirect('/admin/links/index')->with(['info'=>'添加成功']);
    		}else
    		{
    			return back()->with(['info'=>'添加失败']);
    		}	
   		 }

   		public function index(Request $request)
    {
    	$num = $request->input('num',10);
    	$keywords = $request->input('keywords','');
    	//查询所有数据
    	$data = \DB::table('links')->where('webname','like','%'.$keywords.'%')->paginate($num);
    	// dd($data);

    	return view('admin.links.index',['request'=>$request->all(),'data'=>$data,'title'=>'链接列表']);

    }

    	public function edit($id)
    	{
    		$data = \DB::table('links')->where('id',$id)->first();

    		return view('admin.links.edit',['data'=>$data,'title'=>'链接编辑']);
    	}

    	public function update(Request $request)
    	{
    		$data = $request->except('_token','id');
    		// dd($data);

    		$this->validate($request, 
			[
		    	'webname' => 'required|unique:links|min:5|max:18',
		    	'weburl'=> 'required|unique:links',
		    	'logo'=>'image'
	    	],
	    	
	    	[
	    		'webname.min'=>'链接名称至少5个字符',
				'webname.required'=>'链接名称不能为空',
				'webname.unique'=>'链接名称不能重复',
				'webname.max'=>'链接名称最多不能超过18个字符',
				'weburl.requiresd'=>'链接地址不能为空',
				'weburl.unique'=>'链接名称不能重复',
				'logo.image'=>'您上传图片格式不正确'
	    	]);

    		//查询老图片
    		$oldlogo = \DB::table('links')->where('id',$request->id)->first()->logo;

    		//头像更新
    		if($request->hasFile('logo'))
    		{
    			if($request->file('logo')->isValid())
    			{
    				$ext = $request->file('logo')->extension();

				//随机文件名
				$filename = time().mt_rand(100000,999999).'.'.$ext;

				//移动文件
				$request->file('logo')->move('./uploads/logo',$filename);

				//删除老图片
				if(file_exists('/uploads/logo/'.$oldlogo) && $oldlogo != 'default.jpg')
				{
					unlink('uploads/logo/'.$oldlogo);
				}

				//头像信息添加到data中
				$data['logo'] = $filename;
    			}
    		}



    		$res = \DB::table('links')->where('id',$request->id)->update($data);

    		if($res)
    		{
    			return redirect('/admin/links/index')->with(['info'=>'更新成功']);
    		}else
    		{
    			return back()->with(['info'=>'更新失败']);
    		}	
    	}


    	//删除
    	public function delete($id)
    	{
    		$res = \DB::table('links')->delete($id);

    		if($res)
    		{
    			return redirect('/admin/links/index')->with(['info'=>'删除成功']);
    		}else
    		{
    			return back()->with(['info'=>'删除失败']);
    		}
    	}



    	//ajax修改用户名
    	public function ajaxRename(Request $request)
    	{
    		
    		$res = \DB::table('links')->where('webname','=',$request->input('webname'))->first();

    		if($res)
    		{
    			return response()->json('0'); 
    		}else
    		{
    			$res = \DB::table('links')->where('id',$request->input('id'))->update(['webname'=>$request->input('webname')]);
    			
    			if($res)
    			{
    				return response()->json('1');
    			}else
    			{
    				return response()->json('2');
    			}
    		}

    	}

    	public function ajaxStatus(Request $request)
    	{
    		$result = \DB::table('links')->where('id',$request->input('id'))->update(['status'=>$request->input('status')]);

    		if($result)
    		{
    			return response()->json('1');
    		}else
    		{
    			return response()->json('2');
    		}
    	}
    	
}
