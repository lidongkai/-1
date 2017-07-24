<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        轮播图添加
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">轮播图添加</a></li>
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
            <?php if(session('info')): ?>
                <div class="alert alert-danger">
                <?php echo e(session('info')); ?>

                </div>
                <?php endif; ?>
            <form role="form" method="post" action="<?php echo e(url('/admin/turn/insert')); ?>" enctype="multipart/form-data">
              	<?php echo e(csrf_field()); ?>

              <div class="box-body">

                
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
                  <label for="exampleInputName">轮播图名称</label>
                  <input type="text" value="" name="name" class="form-control" placeholder="请输入轮播图名称">
                </div> 
                <div class="form-group">
                	<label for="exampleInputImg">轮播图</label>
                	<input type="file" value="" name="img" class="form-control"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputImg">轮播图</label>
                  <select name="gid" class="form-control">
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($val->id); ?>"><?php echo e($val->goodsName); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select> 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
              </div>
            </form>
          </div>
          <!-- /.box --> 

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<script type="text/javascript"> 
  $(".alert").on('click',function(){
    $(".alert").hide();
  });

</script>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>