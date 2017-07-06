<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{		
	public function index(Request $request){

		$num = $request->input('num',5); 
        $keywords = $request->input('keywords','');
     
        $data = \DB::table('links')->where('webname','like','%'.$keywords.'%')->paginate($num);
  
        return view('admin.link.index',['data' => $data,'request' => $request->all(),'title'=>'友情链接']);
	}

	public function add(){

		return view('admin.link.add',['title'=>'友情链接添加']);
	}

	public function insert(Request $request){

		$data = $request->except('_token');
 

         // 处理图片
         if($request->hasFile('logo'))
         {
            if($request->file('logo')->isValid())
            {
                // 读取扩展名
                $ext = $request->file('logo')->extension();
                // 随机文件名
                $fileName = time().mt_rand(100000,999999).'.'.$ext;
                // 移动
                $request->file('logo')->move('./uploads/avatar',$fileName);

                // 添加数据
                $data['logo'] = $fileName;
            }
         }

         $res = \DB::table('links')->insert($data);

        // 判断
        if($res){
            return redirect('/admin/link/index')->with(['info' => '添加成功']);
        }else{
            return back()->with(['info' => '添加失败']);
        }
	}

	public function edit($id){
		 $data = \DB::table('links')->where('id',$id)->first();
         return view('admin.link.edit',['title'=>'友情链接','data'=>$data,]);
	}
	 
	 
    
}
