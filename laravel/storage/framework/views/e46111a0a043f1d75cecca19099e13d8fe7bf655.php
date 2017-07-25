<?php $__env->startSection('user'); ?>
    <div class="centers_mr">
    <h1 class="welcom_tm">欢迎您，会员<font><?php echo e(session('master')->username); ?></font></h1>
    	<div class="public_m1">
        	<div class="public_m2">资料管理</div>
            <div class="zp_nrm">
                <div class="zp_nrm_l">
                	<img src="/uploads/avatar/<?php echo e(session('master')->photo); ?>"/>
                </div>
                <div class="zp_nrm_r">
                	<form action="/home/user/information" method="post">
                        
                	<p><em>用户名：</em><i><?php echo e(session('master')->username); ?></i></p>
                    <p><em>邮箱：</em><i><?php echo e(session('master')->email); ?></i></p>
                       
                    <p><em>性别：</em><i><?php echo e(($tb->sex=='m')?'男':'女'); ?></i></p>
                    <p><em>QQ：</em><i><?php echo e($tb->qq); ?></i></p>
                    <p><em>手机号：</em><i><?php echo e($tb->phone); ?></i></p>
                    </form>
                </div>
<<<<<<< HEAD

=======
>>>>>>> 7b74b8e6bfbb28f622ee765ccc02056b1e462bcd
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>