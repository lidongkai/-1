<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColumnController extends Controller
{
    //
    public function index()
    {	
    	$data = \DB::table('column')->get();

    	return view ('admin.index.column.index',['title'=>'栏目主页','data' => $data]);
    }

    public function add()
    {
    	return view('admin.index.column.add',['title'=>'栏目添加']);
    }

    public function insert(Request $request)
    {
    	$name = $request->name;


    	$res = \DB::table('column')->insert(
   					['name'=>$name]
				);

    	if($res)
    	{
    		return  redirect('/admin/column/index')->with(['info'=>'添加成功']);
    	}else
    	{
    		return back()->with(['info'=>'添加失败']);
    	}
     }

    public function ajaxRename(Request $request)
	{
		// dd($request->all());
		$res=\DB::table('column')->where('name','=',$request->input('name'))->first();
		\DB::table('articles')->where('cid',$request->input('id'))->update(['cname'=>$request->input('name')]);


		if($res)
		{
			return response() -> json('0');
		}else
		{
			$res=\DB::table('column')->where('id',$request->input('id'))->update(['name'=>$request->input('name')]);
			
			if($res)
			{
				return response()->json('1');
			}else
			{
				return response()->json('2');
			}
		}

	}

	public function edit($id)
	{	
		$data = \DB::table('column')->where('id',$id)->first();
		return view('admin.index.column.edit',['title'=>'栏目编辑','data'=>$data]);
	}

	public function update(Request $request)
	{
		$data = $request -> except('_token','id');
		$data1 = ['cname' => $request->name];
	

		\DB::table('articles')->where('cid',$request->id)->update($data1);

		$res = \DB::table('column')->where('id',$request->id)->update($data);

		if($res)
    	{
    		return  redirect('/admin/column/index')->with(['info'=>'更新成功']);
    	}else
    	{
    		return back()->with(['info'=>'更新失败']);
    	}
	}

	public function delete($id)
	{
		// dd($id);
		$res1 = \DB::table('articles')->where('cid',$id)->get();
		if($res1)
		{
			return redirect('/admin/column/index')->with(['info'=>'栏目下有文章不可删除哟']);
		}
		$res = \DB::table('column')->where('id',$id)->delete();
		if($res)
    	{
    		return  redirect('/admin/column/index')->with(['info'=>'删除成功']);
    	}else
    	{
    		return back()->with(['info'=>'删除失败']);
    	}
	}
}
