<?php $__env->startSection('user'); ?>
    <div class="centers_mr">
    <h1 class="welcom_tm">欢迎您，会员<font><?php echo e(session('master')->username); ?></font></h1>
    	<div class="public_m1">
        	<div class="public_m2">详细资料</div>
            <div class="zp_nrm">
                <div class="zp_nrm_l">
                	<img src="/uploads/avatar/<?php echo e(session('master')->photo); ?>"/>
                </div>
                <div class="zp_nrm_r">
                	<form action="/home/user/detail" method="post">
                    <div class="form-group col-xs-9" style="font-size:16px;">
                	<div class="col-xs-3">用户名：</div>
                    <div class="col-xs-6"><?php echo e(session('master')->username); ?></div>
                    </div>

                    <div class="form-group col-xs-9" style="font-size:16px;">
                    <div class="col-xs-3">邮箱:</div>
                    <div class="col-xs-6"><?php echo e(session('master')->email); ?></div>
                    </div>

                    <div class="form-group col-xs-9" style="font-size:16px;">
                    <div class="col-xs-3">性别:</div>
                    <div class="col-xs-6"><?php echo e(($tb->sex=='m')?'男':'女'); ?></div>
                    </div>

                    <div class="form-group col-xs-9" style="font-size:16px;">
                    <div class="col-xs-3">QQ:</div>
                    <div class="col-xs-6"><?php echo e($tb->qq); ?></div>
                    </div>

                    <div class="form-group col-xs-9" style="font-size:16px;">
                    <div class="col-xs-3">手机:</div>
                    <div class="col-xs-6"><?php echo e($tb->phone); ?></div>
                    </div>
        <!--             <p><em>邮箱：</em><i><?php echo e(session('master')->email); ?></i></p>
                       
                    <p><em>性别：</em><i><?php echo e(($tb->sex=='m')?'男':'女'); ?></i></p>
                    <p><em>QQ：</em><i><?php echo e($tb->qq); ?></i></p>
                    <p><em>手机号：</em><i><?php echo e($tb->phone); ?></i></p> -->
                    </form>
                </div>
                </div>
                </div>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>