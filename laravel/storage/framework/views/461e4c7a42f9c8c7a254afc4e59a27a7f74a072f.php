<?php $__env->startSection('content'); ?>
	
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        栏目管理
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">栏目管理</a></li>
        <li class="active">栏目添加</li>
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
              <h3 class="box-title">请输入已下信息</h3>
            </div>

            <?php if($errors->any()): ?>
    		<div class="alert alert-danger">
        	<ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</ul>
   			 </div>
			<?php endif; ?>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(session('info')): ?>
              <div class="alert alert-danger">
                <?php echo e(session('info')); ?>

              </div>
            <?php endif; ?>  
            <form role="form" action="/admin/column/insert" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <?php echo e(csrf_field()); ?>

              	<div class="form-group">
                  <label for="exampleInputName">栏目名</label>
                  <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" id="exampleInputName" placeholder="请输入栏目名">
                </div>
                <div class="checkbox">
                 <!--  <label>
                    <input type="checkbox"> Check me out
                  </label> -->
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
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