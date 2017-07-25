
@extends('home.user.layout')

@section('user')
    <div class="centers_mr">
    <h1 class="welcom_tm">欢迎您，会员<font>{{ session('master')->username }}</font></h1>
    	<div class="public_m1">
        	<div class="public_m2">详细资料</div>
            <div class="zp_nrm">
                <div class="zp_nrm_l">
                	<img src="/uploads/avatar/{{ session('master')->photo }}"/>
                </div>
                <div class="zp_nrm_r">
                	<form action="/home/user/detail" method="post">
                    <div class="form-group col-xs-9" style="font-size:16px;">
                	<div class="col-xs-3">用户名：</div>
                    <div class="col-xs-6">{{ session('master')->username}}</div>
                    </div>

                    <div class="form-group col-xs-9" style="font-size:16px;">
                    <div class="col-xs-3">邮箱:</div>
                    <div class="col-xs-6">{{ session('master')->email }}</div>
                    </div>

                    <div class="form-group col-xs-9" style="font-size:16px;">
                    <div class="col-xs-3">性别:</div>
                    <div class="col-xs-6">{{ ($tb->sex=='m')?'男':'女'}}</div>
                    </div>

                    <div class="form-group col-xs-9" style="font-size:16px;">
                    <div class="col-xs-3">QQ:</div>
                    <div class="col-xs-6">{{$tb->qq }}</div>
                    </div>

                    <div class="form-group col-xs-9" style="font-size:16px;">
                    <div class="col-xs-3">手机:</div>
                    <div class="col-xs-6">{{ $tb->phone}}</div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection