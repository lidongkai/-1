<<<<<<< HEAD
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

=======
@extends('home.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="/leiphone/css/jiazaitoubu.css">
    
   
   
    <link rel="stylesheet" type="text/css" href="/leiphone/css/center.css">
    <!--城市联动-->
    <link rel="stylesheet" type="text/css" href="/leiphone/css/city.css">
    <script src="/leiphone/js/popt.js"></script>
    <script src="/leiphone/js/cityjson.js"></script>
    <script src="/leiphone/js/cityset.js"></script>
<div class="now_positionm">
<span>当前位置：</span><a href="#">首页></a><a href="#">资料管理</a>
</div>
<!--centers-->
<div class="centers_m">
	<!--清除浮动-->
    <div class="clear_sm"></div>
	<!--left-->
    <div class="centers_ml">
    	<!--头像-->
        <div class="center_header">
        	<a href="#"><img src="/uploads/avatar/{{ session('master')->photo }}"/></a>
            <em>您好:<font>{{ session('master')->username }}</font></em>
  <!--           <em><font>退出</font></em> -->

        </div>
        <!--列表go-->
        <div class="centers_listm">
        	<div class="centers_listm_one">
            	<img src="/leiphone/picture/zshy.png"/>
                <em>会员中心</em>
            </div>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="/leiphone/picture/shezhi.png"/>
                <em>资料管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a href="/home/user/information" class="center_in_self"><font>详细资料</font></a>
                <a href="#" class="center_in_self"><font>安全中心</font></a>
                <a href="#" class="center_in_self"><font>修改信息</font></a>
            </span>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="/leiphone/picture/ddgl.png"/>
                <em>我的文章</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a href="/home/user/article" class="center_in_self"><font>我的文章</font></a>
                <a href="/home/user/addarticle" class="center_in_self"><font>发表文章</font></a>
                <a href="#" class="center_in_self"><font>我的收藏</font></a>
                <a href="#" class="center_in_self"><font>订单投诉</font></a>
            </span>
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="/leiphone/picture/suo.png"/>
                <em>我的订单</em>
                <b></b>
            </div>
            <span class="gjszmdm">
                <a href="#" class="center_in_self"><font>账户安全</font></a>
                <a href="#" class="center_in_self"><font>账户余额</font></a>
                <a href="#" class="center_in_self"><font>我的积分</font></a>
                <a href="#" class="center_in_self"><font>积分兑换</font></a>
                <a href="#" class="center_in_self"><font>我的经验</font></a>
                <a href="#" class="center_in_self"><font>我的优惠卷</font></a>
            </span>    
            <!--一条开始-->
            <div class="centers_listm_one_in">
                <img src="/leiphone/picture/wdssc.png"/>
                <em>收藏管理</em>
                <b></b>
            </div>
            <span class="gjszmdm">
            	<a href="#" class="center_in_self"><font>店铺收藏</font></a>
                <a href="#" class="center_in_self"><font>菜品收藏</font></a>
            </span>    
            <!--一条开始-->

           
        </div>
        <script type="text/javascript">
		$(function(){//第一步都得写这个
			$(".centers_listm_one_in").click(function(){
			$(this).next(".gjszmdm").slideToggle().siblings("gjszmdm").slideUp()
			});
		})
		</script>
    </div>
    <!--right-->
    <div class="centers_mr">
   @yield('user')
        
    </div>
</div>   

     
>>>>>>> 3ecf1a8a9f99f1ec63baeb4438aba24fa40c5cb7
@endsection