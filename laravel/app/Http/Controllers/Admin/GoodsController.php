<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data =  \DB::table('goods')->select('*',\DB::raw("concat(path,',',id) AS sort_path"))->orderBy('sort_path')->get();

        // 处理
        foreach($data as $key=>$val){

            $num = substr_count($val->path,',');
            $data[$key]->name = str_repeat('|---', $num).$data[$key]->name;
        }
        return view('admin.goods.index',['data' => $data,'title'=>'分类列表']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data =  \DB::table('goods')->select('*',\DB::raw("concat(path,',',id) AS sort_path"))->orderBy('sort_path')->get();

        // 处理
        foreach($data as $key=>$val){ 
            $num = substr_count($val->path,','); 
            $data[$key]->name = str_repeat('|---', $num).$data[$key]->name;
        }
        return view('admin.goods.add',['data'=>$data,'title'=>'分类添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate($request, [
            'name' => 'required|unique:posts|max:255',  
        ],[
            'name.required' => '分类名称不能为空',
            'name.unique' => '分类名称已存在',
        ]);
        $data = $request->except('_token');

        if($data['pid'] == 0){
            $data['path'] = 0;
            $data['status'] = 1;
        }else{
       
            // 查询父类path
            $parent_path = \DB::table('goods')->where('id',$data['pid'])->first()->path;
 
            // dd($parent_path);
 
            $num = substr_count($parent_path,','); 
           
            if($num > 1)
            {
                return back()->with(['info'=>'对不起，此分类下不可有子分类']);
            }
            $data['path'] = $parent_path.','.$data['pid'];
            $data['status'] = 1; 
        }
        $res = \DB::table('goods')->insert($data);

        // 判断
        if($res){
            return redirect('/admin/goods')->with(['info' => '添加成功']);
        }else{
            return redirect('/admin/goods/create')->with(['info' => '添加失败']);
        }
    }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $allData =  \DB::table('goods')->select('*',\DB::raw("concat(path,',',id) AS sort_path"))->orderBy('sort_path')->get();

        // 处理
        foreach($allData as $key=>$val){

            $num = substr_count($val->path,',');
            $allData[$key]->name = str_repeat('|---', $num).$allData[$key]->name;
        }

        $data = \DB::table('goods')->where('id',$id)->first();
        return view('admin.goods.edit',['title'=>'分类编辑','data'=>$data,'allData'=>$allData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_token','_method');

        if($data['pid'] == 0){
            $data['path'] = 0;
            $data['status'] = 1;
        }else{
       
            // 查询父类path
            $parent_path = \DB::table('goods')->where('id',$data['pid'])->first()->path;
            $data['path'] = $parent_path.','.$data['pid'];
            $data['status'] = 1; 
        }
        $res = \DB::table('goods')->where('id',$id)->update($data);

        // 判断
        if($res){
            return redirect('/admin/goods')->with(['info' => '更新成功']);
        }else{
            return back()->with(['info' => '更新失败']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = \DB::table('goods')->where('pid',$id)->first();

        if($res){
            return back()->with(['info'=>'有子分类,不能删除']);
        }
        $res = \DB::table('goods')->delete($id);
        // 判断
        if($res){
            return redirect('/admin/goods')->with(['info' => '删除成功']);
        }else{
            return back()->with(['info' => '删除失败']);
        }
    }

    // // 递归查询多级分类
    // public function getGoodsByPid($pid){

    //     // 根据pid查询子分类
    //     $data = \DB::table('goods')->where('pid',$pid)->get();

    //     $allData = [];
    //     foreach($data as $key=>$val){
    //         $val->sub = $this->getGoodsByPid($val->id);
    //         $allData[] = $val;
    //     }

    //     return $allData;
    // }

    // public function get(){

    //     $data = $this->getGoodsByPid(0);
    //     dd($data);
    // }
}
