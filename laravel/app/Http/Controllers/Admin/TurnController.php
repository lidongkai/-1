<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TurnController extends Controller
{
     public function index(Request $request){

     	$num = $request->input('num',2); 
        $keywords = $request->input('keywords','');
        $allData = \DB::table('goodsdetail')->where('status',1)->get(); 
        $data = \DB::table('turn')->where('name','like','%'.$keywords.'%')->paginate($num); 
     	 
     	return view('admin.turn.index',['data'=>$data,'allData'=>$allData,'request' => $request->all(),'title'=>'轮播图']);
     }

     public function add(){

     	$data = \DB::table('goodsdetail')->where('status',1)->get();
     	// dd($data);

     	return view('admin.turn.add',['data'=>$data,'title'=>'轮播图添加']);
     }

     public function insert(Request $request){

     	 $data = $request->except('_token');
     	 // dd($data);
     	  
     	  // 处理图片
         if($request->hasFile('img'))
         {
            if($request->file('img')->isValid())
            {
                // 读取扩展名
                $ext = $request->file('img')->extension();
                // 随机文件名
                $fileName = time().mt_rand(100000,999999).'.'.$ext;
                // 移动
                $request->file('img')->move('./uploads/avatar',$fileName);

                // 添加数据
                $data['img'] = $fileName;
            }
         }
     	 $res = \DB::table('turn')->insert($data);

        // 判断
        if($res){
            return redirect('/admin/turn/index')->with(['info' => '添加成功']);
        }else{
            return redirect('/admin/turn/add')->with(['info' => '添加失败']);
        }
     	 
     }

     public function edit($id){

     	$data = \DB::table('turn')->where('id',$id)->first();
     	$allData = \DB::table('goodsdetail')->where('status',1)->get();

     	return view('admin.turn.edit',['data'=>$data,'allData'=>$allData,'title'=>'轮播图编辑']);
     }

     public function update(Request $request,$id){

     	$data = $request->except('_token');
     	 // 处理图片
         if($request->hasFile('img'))
         {
            if($request->file('img')->isValid())
            {
                // 读取扩展名
                $ext = $request->file('img')->extension();
                // 随机文件名
                $fileName = time().mt_rand(100000,999999).'.'.$ext;
                // 移动
                $request->file('img')->move('./uploads/avatar',$fileName);

                // 删除老图片
                $oldpicture = \DB::table('turn')->where('id',$id)->first()->img;

                if(file_exists('./uploads/avatar/'.$oldpicture)  && $oldpicture != 'default.jpg')
                {
                    unlink('./uploads/avatar/'.$oldpicture);
                }

                // 添加数据
                $data['img'] = $fileName;
            }
         }

         $res = \DB::table('turn')->where('id',$id)->update($data);

        // 判断
        if($res){
            return redirect('/admin/turn/index')->with(['info' => '更新成功']);
        }else{
            return back()->with(['info' => '更新失败']);
        }

     }

     public function delete($id){

     	 $res = \DB::table('turn')->delete($id);
        // 判断
        if($res){
            return back()->with(['info' => '删除成功']);
        }else{
            return back()->with(['info' => '删除失败']);
        }
     }
}
