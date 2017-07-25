<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgotController extends Controller
{
    //
    public function forgot()
    {
    	return view('admin.mails.forgot');
    }

    public function sendEmail(Request $request)
    {	
    	$data = $request->except('_token');

    	$res = \DB::table('users')->where('email',$data['email'])->first();

    	if(!$res)
    	{
    		return back()-with(['info'=>'该邮箱不存在']);
    	}
    	\Mail::raw('这是封邮件',function($message),use($data))
        {
        	$message->to($data['email']);
        	$message->subject('这是标题');
        }
    }
}
