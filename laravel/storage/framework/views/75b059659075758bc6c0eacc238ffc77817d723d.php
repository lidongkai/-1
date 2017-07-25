<?php $__env->startSection('content'); ?>

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
        	<a href="#"><img src="/uploads/avatar/<?php echo e(session('master')->photo); ?>"/></a>
            <em>您好:<font><?php echo e(session('master')->username); ?></font></em>
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
                <a href="/home/user/information" class="center_in_self"><font>完善资料</font></a>
                <a href="/home/user/safe" class="center_in_self"><font>修改密码</font></a>
                <a href="/home/user/detail" class="center_in_self"><font>详细资料</font></a>
            </span>
            <!--一条开始-->
            
            <span class="gjszmdm">

                <a href="/home/user/article" class="center_in_self"><font>我的文章</font></a>
                <a href="/home/user/addarticle" class="center_in_self"><font>发表文章</font></a>
                <a href="#" class="center_in_self"><font>我的收藏</font></a>

                <a href="#" class="center_in_self"><font>我的订单</font></a>
                <a href="#" class="center_in_self"><font>我的预约</font></a>
                <a href="#" class="center_in_self"><font>评价订单</font></a>
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

   <?php echo $__env->yieldContent('user'); ?>
        
    </div>
</div>   





     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>