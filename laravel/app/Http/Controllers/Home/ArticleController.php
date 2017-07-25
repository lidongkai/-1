<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
    {	
    	if(!session('master'))
    	{
    		return view('/home/index');
    	}
    	$data = \DB::table('articles')->where('aname',session('master')->username)->get();
    	return view ('home.user.article',['data'=>$data]);
    }

    public function addarticle()
    {	
    	$data = \DB::table('column')->get();
    	return view ('home.user.addarticle',['data'=>$data]);
    }

    public function insertarticle(Request $request)
    {
    	if(!session('master'))
    	{
    		return view('/home/index');
    	}

    	$this->validate($request,[
            'cid' => 'required',
            'atitle' => 'required',
            'descript' => 'required|max:30',
            'picture' => 'required|image',
            'editorValue' => 'required',
            ],[
            'cid.required' => '栏目名不能为空',
            'atitle.required' => '标题不能为空',
            'descript.required' => '描述内容不能为空',
            'descript.max' => '描述内容不能超过30个字符',
            'editorValue.required' => '内容部分不能为空',
            'picture.required' => '封面图片不能为空',
            'picture.required' => '您上传的不是一张图片'
            ]);

        $data = $request->except('_token');

        if($request->hasFile('picture'))
        {
            if($request->file('picture')->isValid())
            {
                $ext = $request->file('picture')->extension();

                //随机文件名
                $filename = time().mt_rand(100000,999999).'.'.$ext;

                //移动文件
                $request->file('picture')->move('./uploads/article',$filename);

                //头像信息添加到data中
                $data['picture'] = $filename;
            }
                
        }

        
        $data['ctime'] = date('Y-m-d H:i:s');

        $cid = $request->cid;

        $res1 = \DB::table('column')->where('id',$cid)->first();

        $data['cname'] = $res1->name;
        $data['aname'] = session('master')->username;

       
        $res = \DB::table('articles')->insert($data);

        
        if($res)
        {
            return  redirect('/home/user/article')->with(['info'=>'添加成功']);
        }else
        {
            return back()->with(['info'=>'添加失败']);
        }	

    }

    public function edit(Request $request)
    {	
    	$data = \DB::table('articles')->where('id',$request->id)->first();
    	return view('home.user.edit',['data'=>$data]);
    }

    public function update(Request $request)
    {
    	if(!session('master'))
    	{
    		return view('/home/index');
    	}
    	$data = $request->except('_token');
    	$this->validate($request,[
            
            'atitle' => 'required',
            'descript' => 'required|max:30',
            'picture' => 'image',
            'editorValue' => 'required',
            ],[
           
            'atitle.required' => '标题不能为空',
            'descript.required' => '描述内容不能为空',
            'descript.max' => '描述内容不能超过30个字符',
            'editoValue.required' => '内容部分不能为空',
            'picture.required' => '您上传的不是一张图片'
            ]);


        if($request->hasFile('picture'))
        {
            if($request->file('picture')->isValid())
            {
                $ext = $request->file('picture')->extension();

                //随机文件名
                $filename = time().mt_rand(100000,999999).'.'.$ext;

                //移动文件
                $request->file('picture')->move('./uploads/article',$filename);

                //头像信息添加到data中
                $data['picture'] = $filename;
            }
                
        }

        
        $data['ctime'] = date('Y-m-d H:i:s');

        $res = \DB::table('articles')->where('id',$request->id)->update($data);

        
        if($res)
        {
            return  redirect('/home/user/article')->with(['info'=>'修改成功']);
        }else
        {
            return back()->with(['info'=>'修改失败']);
        }
    }

    public function delete(Request $request)
    {
    	$res = \DB::table('articles')->where('id',$request->id)->delete();

    	if($res)
        {
            return  redirect('/home/user/article')->with(['info'=>'删除成功']);
        }else
        {
            return back()->with(['info'=>'删除失败']);
        }
    }

    public function comment(Request $request)
    {	

    	$data = $request->except('_token');
    	if(session('master'))
    	{
    		
    		$data['uid'] = session('master')->id;
    	}else
    	{
    		return back()->with(['info'=>'您还没有登录']);
    	}
    	$data['ctime'] = date('Y-m-d H:i:s');

    	$res = \DB::table('comment')->insert($data);

    	if($res)
    	{
    		return back();
    	}else
    	{
    		return back()->with(['info'=>'发表评论失败']);
    	}

    }

    public function ajaxSixin(Request $request)
    {
    	$data=$request->all();
    	$data['sendname'] = session('master')->username;
    	$data['stime'] = date('Y-m-d H:i:s');
    	
    	$res=\DB::table('sixin')->insert($data);
		
			if($res)
			{
				return response()->json('1');
			}else
			{
				return response()->json('2');
			}
	}


	
    
}
