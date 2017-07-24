<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品分类编辑
        <small>编辑</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品分类编辑</a></li>
        <li class="active">编辑</li>
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
              <h3 class="box-title">快速编辑</h3>
            </div>
            
	           
			<!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" action="<?php echo e(url('/admin/goods')); ?>/<?php echo e($data->id); ?>" enctype="multipart/form-data">
              <?php echo e(method_field("PATCH")); ?>

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
                  <label for="exampleInputName">分类名</label>
                  <input type="text" value="<?php echo e($data->name); ?>" name="name" class="form-control" id="exampleInputName" placeholder="请输入用户名">
                </div> 
                <div class="form-group">
                	<label for="exampleInputName">父类名</label>
                	<select name="pid" class="form-control">
                    <option value="0">根分类</option>
                	  <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option 
                    <?php if($data->pid == $val->id): ?>
                    selected="selected"
                    <?php endif; ?>
                    <?php if($data->id == $val->id): ?>
                    disabled="disabled"
                    <?php endif; ?>
                    value="<?php echo e($val->id); ?>"><?php echo e($val->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                	</select>
                		
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">编辑</button>
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