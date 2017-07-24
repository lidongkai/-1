<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\libs\Ucpaas\Ucpaas;

class SendMessageController extends Controller
{
    //
    /**
     * 发送手机短信
     * @param  Request $request 获取用户提交的手机
     * @return json 发送回执
     */

    public function sendmessage(Request $request)
    {
    	//获取用户提交的手机号
    	$phone = $request->phone;
    	// dd($phone);
    	$param = rand(1000,9999);

    	// 把验证码写入redis，十分钟内有效。
        // \Cache::put($phone, $param, 10);

        return $res = $this->message($phone, $templateId, $param);
    }

     /**
     * 发送验证码短信
     * @param  string $phone 要发送的手机号
     * @param  string $templateId 模版id
     * @param  string $param 验证码
     * @return [type]             [description]
     */
    public function message ($phone, $templateId, $param)
    {
        //初始化必填
        $options['accountsid']='8a8e24c0e56701c280233cc85cc43c88';
        $options['token']='acf6f0865ca8128696b2646e74b9bb19';
         
        //初始化 $options必填
        $ucpass = new Ucpaas($options);
        
        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = 'b171c26d19354b1b969539c745c5bcca';
        $to = $phone;
        $templateId = $templateId;
        $param= $param;
        return $ucpass->templateSMS($appId,$to,$templateId,$param);
    }
}
