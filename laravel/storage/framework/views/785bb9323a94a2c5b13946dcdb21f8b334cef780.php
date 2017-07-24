<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品详情
        <small>详情</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品详情</a></li>
        <li class="active">详情</li>
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
              <h3 class="box-title">商品介绍</h3>
            </div> 
      <!-- /.box-header -->
            <!-- form start -->
            <?php if(session('info')): ?>
                <div class="alert alert-danger">
                <?php echo e(session('info')); ?>

                </div>
                <?php endif; ?>
            <form role="form" method="post" action="<?php echo e(url('/admin/goodsDetail')); ?>/<?php echo e($data->id); ?>" enctype="multipart/form-data">
                 <?php echo e(method_field("PATCH")); ?>

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
                  <label for="exampleInputPicture">商品图片</label>
                  <img style="width:100px;height:100px" src="/uploads/avatar/<?php echo e($data->picture); ?>"> 
                </div> 
              </div>
              <!-- /.box-body -->
              <div class="form-group">
                  <label for="exampleInputIntroduce">商品介绍</label> 
                  <?php echo $data->introduce; ?> 
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