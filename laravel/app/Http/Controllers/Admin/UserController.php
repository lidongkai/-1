<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    //用户添加页
    public function add()
    {
    	return view('admin.user.add',['title'=>'用户添加']);
    }

    //用户添加执行
    public function insert(Request $request)
    {
    	$this->validate($request, 
		[
    	'username' => 'required|unique:users|min:5|max:18',
    	'email'=> 'required|unique:users|email',
    	'password'=>'required',
    	'photo'=>'image'
    	],
    	
    	[
    		'username.min'=>'用户名至少5个字符',
			'username.required'=>'用户名不能为空',
			'username.unique'=>'用户名不能重复',
			'username.max'=>'用户名最多不能超过18个字符',
			'email.required'=>'邮箱不能为空',
			'email.unique'=>'邮箱已存在',
			'email.email'=>'请填写正确的邮箱',
			'password.required'=>'密码不能为空',
			'photo.image'=>'您上传图片格式不正确'
    	]);    	

		$data = $request->except('_token');

		//密码加密
		$data['password'] = \Hash::make($data['password']);

		//处理上传头像
		if($request->hasFile('photo'))
		{
			if($request->file('photo')->isValid())
			{
				$ext = $request->file('photo')->extension();

				//随机文件名
				$filename = time().mt_rand(100000,999999).'.'.$ext;

				//移动文件
				$request->file('photo')->move('./uploads/avatar',$filename);

				//头像信息添加到data中
				$data['photo'] = $filename;
			}
				
		}
			//处理remember_token
    		$data['remember_token'] = str_random(50);

    			//处理时间
    		$time = date('Y-m-d H:i:s');
    		$data['created_at'] = $time;
    		$data['updated_at'] = $time;

    		//执行添加
    		$res = \DB::table('users')->insert(

    				$data
    			);

    		if($res)
    		{
    			return redirect('/admin/user/index')->with(['info'=>'添加成功']);
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
    	$data = \DB::table('users')->where('username','like','%'.$keywords.'%')->paginate($num);
    	// dd($data);

    	return view('admin.user.index',['request'=>$request->all(),'data'=>$data,'title'=>'用户列表']);

    }

    	public function edit($id)
    	{
    		$data = \DB::table('users')->where('id',$id)->first();

    		return view('admin.user.edit',['data'=>$data,'title'=>'用户编辑']);
    	}

    	public function update(Request $request)
    	{
    		$data = $request->except('_token','id');
    		// dd($data);

    		$this->validate($request, 
			[
		    	'username' => 'required|unique:users|min:5|max:18',
		    	'email'=> 'required|unique:users|email',
		    	'photo'=>'image'
	    	],
	    	
	    	[
	    		'username.min'=>'用户名至少5个字符',
				'username.required'=>'用户名不能为空',
				'username.unique'=>'用户名不能重复',
				'username.max'=>'用户名最多不能超过18个字符',
				'email.required'=>'邮箱不能为空',
				'email.unique'=>'邮箱已存在',
				'email.email'=>'请填写正确的邮箱',
				'photo.image'=>'您上传图片格式不正确'
	    	]);

    		//查询老图片
    		$oldPhoto = \DB::table('users')->where('id',$request->id)->first()->photo;

    		//头像更新
    		if($request->hasFile('photo'))
    		{
    			if($request->file('photo')->isVaild())
    			{
    				$ext = $request->file('photo')->extension();

				//随机文件名
				$filename = time().mt_rand(100000,999999).'.'.$ext;

				//移动文件
				$request->file('photo')->move('./uploads/avatar',$filename);

				//删除老图片
				if(file_exists('/uploads/avatar/'.$oldPhoto) && $oldPhoto != 'default.jpg')
				{
					unlink('uploads/avatar/'.$oldPhoto);
				}

				//头像信息添加到data中
				$data['photo'] = $filename;
    			}
    		}

    		$data['updated_at'] = date('Y-m-d H:i:s');

    		$res = \DB::table('users')->where('id',$request->id)->update($data);

    		if($res)
    		{
    			return redirect('/admin/user/index')->with(['info'=>'更新成功']);
    		}else
    		{
    			return back()->with(['info'=>'更新失败']);
    		}	
    	}


    	//删除
    	public function delete($id)
    	{
    		$res = \DB::table('users')->delete($id);

    		if($res)
    		{
    			return redirect('/admin/user/index')->with(['info'=>'删除成功']);
    		}else
    		{
    			return back()->with(['info'=>'删除失败']);
    		}
    	}



    	//ajax修改用户名
    	public function ajaxRename(Request $request)
    	{
    	
    		$res = \DB::table('users')->where('username','=',$request->input('username'))->first();

    		if($res)
    		{
    			return response()->json('0'); 
    		}else
    		{
    			$res = \DB::table('users')->where('id',$request->input('id'))->update(['username'=>$request->input('username')]);
    			
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

        $res=\DB::table('users')->where('id',$request->id)->update(['status'=>$request->status]);
        
        if($res)
        {
            return response()->json('1');
        }else
        {
            return response()->json('2');
        }
    }
    	
   		 
    			

}
