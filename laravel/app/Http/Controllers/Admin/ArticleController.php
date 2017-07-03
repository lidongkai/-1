<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function add()
    {	
    	$data = \DB::table('column')->get();
    	return view('admin.index.article.add',['data'=>$data,'title'=>'文章添加']);
    }

    public function insert(Request $request)
    {

    	$this->validate($request,[
    		'cid' => 'required',
    		'atitle' => 'required',
    		'content' => 'required',
    		'descript' => 'required',
    		'img' => 'image'
    		],[
    		'cid.required' => '栏目名不能为空',
    		'atitle.required' => '标题不能为空',
    		'content.required' => '文章内容不能为空',
    		'descript.required' => '描述内容不能为空',
    		'img.image' => '您上传的不是一张图片'

    		]);

 		$data = $request->except('_token');

    	if($request->hasFile('img'))
    	{	
    		if($request->file('img')->isValid())
    		{
	    	$ext = $request->file('img')->extension();

	    	$filename = time().mt_rand(1000000,9999999).'.'.$ext;

	    	// dd($filename);
	    	// 移动
	    	$request->file('img')->move('./uploads/img',$filename);

	    	$data['img'] = $filename;
	    	}
    	}

    	$data['ctime'] = date('Y-m-d H:i:s');

    	$cid = $request->cid;

    	$res1 = \DB::table('column')->where('id',$cid)->first();

    	$data['cname'] = $res1->name;

    	
    	$res = \DB::table('articles')->insert($data);

    	
    	if($res)
    	{
    		return  redirect('/admin/article/index')->with(['info'=>'添加成功']);
    	}else
    	{
    		return back()->with(['info'=>'添加失败']);
    	}



    }


    public function index()
    {	
    	$data = \DB::table('articles')->orderBy('cid')->get();
    	return view('admin.index.article.index',['data'=>$data,'title'=>'文章管理']);
    }
}
