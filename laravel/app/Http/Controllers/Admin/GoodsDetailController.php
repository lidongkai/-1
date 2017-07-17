<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class GoodsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {     
        $num = $request->input('num',10); 
        $keywords = $request->input('keywords','');
     
        $data = \DB::table('goodsDetail')->where('goodsName','like','%'.$keywords.'%')->paginate($num);
  
        return view('admin.goodsDetail.index',['data' => $data,'request' => $request->all(),'title'=>'商品管理']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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


    public function create()
    {   
 
        // 查询子类id
         $data =  \DB::table('goods')->select('*',\DB::raw("concat(path,',',id) AS sort_path"))->orderBy('sort_path')->get();
         // dd($data);
        // 处理
        foreach($data as $key=>$val){

            $num = substr_count($val->path,','); 
             
            $data[$key]->name = str_repeat('|---', $num).$data[$key]->name; 
             
        }
        return view('admin.goodsDetail.add',['data'=>$data,'title'=>'商品添加']);
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
            'goodsName' => 'required|unique:goodsDetail|min:6|max:255',
             'price'=>'required', 
             'picture'=>'image',
             'tid'=>'required',
             'introduce'=>'required',
             'stock'=>'required',
    ],[
        'goodsName.required' => '商品名称不能为空',
        'goodsName.unique' => '商品名称已存在',
        'goodsName.min' => '用户名最小6个字符',
        'goodsName.max' => '用户名最大255个字符',  
        'introduce.required'=>'商品介绍不能为空',
        'tid.required'=>'商品分类不能为空',
        'price.required'=>'商品价格不能为空', 
        'picture.image'=>'您上传的不是一张图片',
        'stock.required'=>'请输入库存量',
    ]);

        $data = $request->except('_token');
 

         // 处理图片
         if($request->hasFile('picture'))
         {
            if($request->file('picture')->isValid())
            {
                // 读取扩展名
                $ext = $request->file('picture')->extension();
                // 随机文件名
                $fileName = time().mt_rand(100000,999999).'.'.$ext;
                // 移动
                $request->file('picture')->move('./uploads/avatar',$fileName);

                // 添加数据
                $data['picture'] = $fileName;
            }
         }

         // 查询分类名称
            $data['good_name'] = \DB::table('goods')->where('id',$data['tid'])->first()->name;
            // 查询父类path
            $parent_path = \DB::table('goods')->where('id',$data['tid'])->first()->path;
             
        $res = \DB::table('goodsDetail')->insert($data);

        // 判断
        if($res){
            return redirect('/admin/goodsDetail')->with(['info' => '添加成功']);
        }else{
            return redirect('/admin/goodsDetail/create')->with(['info' => '添加失败']);
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
        $data = \DB::table('goodsDetail')->where('id',$id)->first();
        return view('admin.goodsDetail.detail',['title'=>'商品详情','data'=>$data,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = \DB::table('goodsDetail')->where('id',$id)->first();
         return view('admin.goodsDetail.edit',['title'=>'商品编辑','data'=>$data,]);
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
        // 处理图片
         if($request->hasFile('picture'))
         {
            if($request->file('picture')->isValid())
            {
                // 读取扩展名
                $ext = $request->file('picture')->extension();
                // 随机文件名
                $fileName = time().mt_rand(100000,999999).'.'.$ext;
                // 移动
                $request->file('picture')->move('./uploads/avatar',$fileName);

                // 删除老图片
                $oldpicture = \DB::table('goodsDetail')->where('id',$id)->first()->picture;

                if(file_exists('./uploads/avatar/'.$oldpicture)  && $oldpicture != 'default.jpg')
                {
                    unlink('./uploads/avatar/'.$oldpicture);
                }

                // 添加数据
                $data['picture'] = $fileName;
            }
         }
        $res = \DB::table('goodsDetail')->where('id',$id)->update($data);

        // 判断
        if($res){
            return redirect('/admin/goodsDetail')->with(['info' => '更新成功']);
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
        $res = \DB::table('goodsDetail')->delete($id);
        // 判断
        if($res){
            return back()->with(['info' => '删除成功']);
        }else{
            return back()->with(['info' => '删除失败']);
        }
    }
 

    // 修改商品状态
    public function ajaxa(Request $request){
         // dd($request->all());

        $res=\DB::table('goodsDetail')->where('id',$request->id)->update(['status'=>$request->status]);
        
        if($res)
        {
            return response()->json('1');
        }else
        {
            return response()->json('2');
        }

    }
 
}
