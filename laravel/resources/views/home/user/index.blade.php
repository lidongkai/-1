 
@extends('home.user.layout')

@section('user')
    <div class="centers_mr">
    <h1 class="welcom_tm">欢迎您，会员<font>{{ session('master')->username }}</font></h1>
    	<div class="public_m1">
        	<div class="public_m2">资料管理</div>
            <div class="zp_nrm">
                <div class="zp_nrm_l">
                	<img src="/uploads/avatar/{{ session('master')->photo }}"/>
                </div>
                <div class="zp_nrm_r">
                	<form action="/home/user/information" method="post">
                        
                	<p><em>用户名：</em><i>{{ session('master')->username}}</i></p>
                    <p><em>邮箱：</em><i>{{ session('master')->email }}</i></p>
                       
                    <p><em>性别：</em><i>{{ ($tb->sex=='m')?'男':'女'}}</i></p>
                    <p><em>QQ：</em><i>{{$tb->qq }}</i></p>
                    <p><em>手机号：</em><i>{{ $tb->phone}}</i></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

 @endsection

 