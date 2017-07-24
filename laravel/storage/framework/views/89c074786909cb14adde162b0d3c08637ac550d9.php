<?php $__env->startSection('content'); ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        用户管理
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">用户管理</a></li>
        <li class="active">添加</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">快速添加</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="/admin/user/insert" method="post" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

              <div class="box-body">
			

			<?php if(session('info')): ?>
			
			<div class="alert alert-danger">
				<?php echo e(session('info')); ?>	
			</div>
	
			<?php endif; ?>

			<?php if(count($errors) > 0): ?>
		    <div class="alert alert-danger">
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
			<?php endif; ?>
                <div class="form-group">
                  <label for="exampleInputName">用户名</label>
                  <input type="text" class="form-control" id="exampleInputName" name="username" value="<?php echo e(old('username')); ?>" placeholder="请输入用户名">
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">邮箱</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo e(old('email')); ?>" name="email" placeholder="请输入邮箱">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">密码</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="请输入密码">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">头像</label>
                  <input type="file" id="exampleInputFile" name="photo">
                </div>

               <!--  <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>