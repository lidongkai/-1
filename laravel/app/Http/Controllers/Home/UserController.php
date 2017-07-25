<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    //
    public function index()

    {	

    	$res = \DB::table('sixin')->where([
    		['zuoz',session('master')->username],
    		['status',1]
    		]
    		)->count();
    	
    	$data = \DB::table('comment')->where('uid',session('master')->id)->take(1)->orderBy('ctime','desc')->get();
        $data1 = \DB::table('shouc')->where('useid',session('master')->id)->first();
        $nums = \DB::table('shouc')->where('useid',session('master')->id)->count();
        $num = \DB::table('comment')->where('uid',session('master')->id)->count();
    	return view('home.user.index',['data'=>$data,'data1'=>$data1,'res'=>$res,'num'=>$num,'nums'=>$nums]);

    }

    public function show(Request $request)
    {
    	 $data = $request->except('_token','remember_token');

    }


    public function sixin(Request $request)
    {
    	$data = \DB::table('sixin')->where('zuoz',session('master')->username)->orderBy('stime','desc')->paginate(10);
    	\DB::table('sixin')->where('zuoz',session('master')->username)->update(['status'=>0]);
    	return view('home.user.sixin',['request'=>$request->all(),'data'=>$data]);
    } 

    public function commentlist(Request $request)
    {
        $data = \DB::table('comment')->where('uid',session('master')->id)->orderBy('ctime','desc')->paginate(4);
        return view('home.user.commentlist',['request'=>$request->all(),'data'=>$data]);
    }   

    public function shouc(Request $request)
    {   
        $data['arid'] = $request->hids;
        $data['useid'] = session('master')->id;
        $res1 = \DB::table('shouc')->where('arid',$request->hids)->where('useid', session('master')->id)->first();

        if($res1)
        {   \DB::table('shouc')->where('arid',$request->hids)->where('useid', session('master')->id)->delete();

            return response()->json('1');
        }else
        {
            $res = \DB::table('shouc')->insert($data);
            if($res)
            {
                return response()->json('2');
            }else
            {
                return response()->json('3');
            }
        }
        
    }

    public function shouclist(Request $request)
    {
        $data = \DB::table('shouc')->where('useid',session('master')->id)->paginate(4);
        return view('home.user.shouclist',['request'=>$request->all(),'data'=>$data]);
    }
    //完善资料
    public function information(Request $request)
    {
         $id = session('master')->id; 
         $tb = DB::table('userdetail')->where('uid',$id)->first();
    	return view('home.user.information',['tb'=>$tb]);
    }

    //完善添加
    public function add(Request $request)
    {   

    	$data = $request->except('_token');
    	


    	//处理头像

    	//查询原来头像
    	$oldPhoto = \DB::table('users')->where('id',session('master')->id)->first()->photo;
    	
    	if($request->hasFile('photo'))
            {
                if($request->file('photo')->isValid())
                {
                    //获取后缀
                    $ext = $request->file('photo')->extension();
    			//随机头像名
    			$filename = time().mt_rand(100000,999999).'.'.$ext;
                // dd($filename);
    			//移动头像
    			$aa=$request->file('photo')->move('./uploads/avatar/',$filename);
                // dd($aa);
    			//删除老图片
				if(file_exists('/uploads/avatar/'.$oldPhoto) && $oldPhoto != 'default.jpg')
				{
                    //一会后处理
					// unlink('uploads/avatar/'.$oldPhoto);
				}
                //将新图片路径及名称写入
               

    			//将头像添加到session中
    			// $aa=$request->session()->push('master', 'photo');
                // session(['master'=>$res]);
                // $aa=$request->session();
                // dd($aa);
    			//存入session

    		}
    	}
        // dd(11);
        $data['photo']=$filename;
        $id=session('master')->id;
        // dd($id);
        // dd($id);
        // dd($data['photo']);
        //修改用户详情数据库
        $res = \DB::table('userdetail')->where('uid',$id)->update($data);
        //读取用户详情数据库信息
        $ress=\DB::table('userdetail')->where('uid',$id)->first();
        session(['userdetail'=>'']);
        $aa=session(['userdetail'=>$ress]);
        // dd($aa);

        // dd(session('userdetail'));
        //更新用户主数据库
        $newdata=array();
        $newdata['email']=$data['email'];
        $newdata['photo']=$data['photo'];
        // dd($newdata);
        // dd($id);
        $res=\DB::table('users')->where('id',$id)->update($newdata);
        $res=\DB::table('users')->where('id',$id)->first();
        // dd($res);
        //更新session
        session(['master'=>'']);
        session(['master'=>$res]);
        // dd($cc);
        // dd(session('master'));
        // dd($cc);



        if($res)
        {
            return redirect('/home/user/index')->with(['info'=>'保存成功']);
        }else
        {
            return back()->with(['info'=>'保存失败']);
        }
    }


        //用户修改密码页
    public function safe(Request $request)
    {
         $id = session('master')->id; 
         $tb = DB::table('userdetail')->where('uid',$id)->first();
        return view('home.user.safe',['tb'=>$tb]);
    }

    //修改密码
    public function update(Request $request)
    {
        // dd(111);
        // dd($request->all());
        $data = $request->except('_token');
        $id = session('master')->id;
        // dd($id);
    // dd($data['oldpwd']);

        $oldpwd = \DB::table('users')->where('id',session('master')->id)->first()->password;
        // dd($oldpwd);
        if(\Hash::check($data['oldpwd'],$oldpwd))
        {
            if($data['newpwd'] == $data['renewpwd'])
            {   
                $newpassword = \Hash::make($data['newpwd']);

                $res = \DB::table('users')->where('id',$id)->update(['password'=>$newpassword]);

                return redirect('/home/user/index')->with(['info'=>'恭喜.修改成功']);
                
            }else
            {
                return back()->with(['info'=>'两次密码不一致,请重新输入']);
            }
        }else
        {
            return back()->with(['info'=>'旧密码不正确,请重新填写']);
        }

    }
}

