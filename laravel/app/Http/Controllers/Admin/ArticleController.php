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

        
        $res = \DB::table('articles')->insert($data);

        
        if($res)
        {
            return  redirect('/admin/article/index')->with(['info'=>'添加成功']);
        }else
        {
            return back()->with(['info'=>'添加失败']);
        }



    }


    public function index(Request $request)
    {   
        $keywords = $request->input('keywords','');
        $data1 = \DB::table('column')->get();
        if(empty($request->selid))
        {
            $request->selid = 1;
        }
        $data = \DB::table('articles')->where([
            ['cid',$request->selid], 
            ['atitle','like','%'.$keywords.'%']

            ])->paginate(10);
        
        
        return view('admin.index.article.index',['request'=>$request->all(),'data1'=>$data1,'data'=>$data,'title'=>'文章管理']);
    }

    public function edit($id)
    {   

        $data = \DB::table('articles')->where('id',$id)->first();
        return view('admin.index.article.edit',['data'=>$data,'title'=>'文章修改']);
    }

    public function update(Request $request)
    {   

       $this->validate($request,[
            'atitle' => 'required',
            'descript' => 'required|max:30',
            'editorValue' => 'required',
            ],[
            'atitle.required' => '标题不能为空',
            'descript.required' => '描述内容不能为空',
            'descript.max' => '描述内容不能超过30个字符',
            'editorValue.required' => '内容部分不能为空'
            ]);
        $data = $request->except('id','_token');

       

        $data['ctime'] = date('Y-m-d H:i:s');

        $res = \DB::table('articles')->where('id',$request->id)->update($data);
        
        if($res)
        {
            return  redirect('/admin/article/index')->with(['info'=>'修改成功']);
        }else
        {
            return back()->with(['info'=>'修改失败']);
        }
     }

    public function delete($id)
    {
        // dd($id);
        $res = \DB::table('articles')->where('id',$id)->delete();
        if($res)
        {
            return  redirect('/admin/article/index')->with(['info'=>'删除成功']);
        }else
        {
            return back()->with(['info'=>'删除失败']);
        }
    }

    public function show($id)
    {   

        $data = \DB::table('articles')->where('id',$id)->first();
        return view('admin.index.article.show',['data'=>$data,'title'=>'文章详情页']);
    }


    public function ajaxStatus(Request $request)
    {

        $res=\DB::table('articles')->where('id',$request->id)->update(['status'=>$request->status]);
        
        if($res)
        {
            return response()->json('1');
        }else
        {
            return response()->json('2');
        }



    }

    public function ajaxChosen(Request $request)
    {

        $res=\DB::table('articles')->where('id',$request->id)->update(['chosen'=>$request->chosen]);
        
        if($res)
        {
            return response()->json('1');
        }else
        {
            return response()->json('2');
        }



    }


    public function ajaxTop(Request $request)
    {

        $res=\DB::table('articles')->where('id',$request->id)->update(['top'=>$request->chosen]);
        
        if($res)
        {
            return response()->json('1');
        }else
        {
            return response()->json('2');
        }



    }


    public function ajaxLunbo(Request $request)
    {

        $res=\DB::table('articles')->where('id',$request->id)->update(['lunbo'=>$request->chosen]);
        
        if($res)
        {
            return response()->json('1');
        }else
        {
            return response()->json('2');
        }



    }

    
}
