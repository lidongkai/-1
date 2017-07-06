<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    //
    public function send(){
    	\Mail::raw('这是封邮件',function($message){
    	$message->to('357866763@qq.com');
    	$message->subject('这是标题');
    });
    }
    
}
