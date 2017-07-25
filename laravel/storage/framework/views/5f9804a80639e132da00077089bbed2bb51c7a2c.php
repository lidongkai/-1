<?php $__env->startSection('content'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品添加
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品添加</a></li>
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
            <form role="form" method="post" action="<?php echo e(url('/admin/goodsDetail')); ?>" enctype="multipart/form-data">
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
                  <label for="exampleInputName">商品名称</label>
                  <input type="text" value="" name="goodsName" class="form-control" id="exampleInputName" placeholder="请输入商品名称">
                </div> 
               
                <div class="form-group">
                  <label for="exampleInputPrice">商品价格</label>
                  <input type="text" value="" name="price" class="form-control" id="exampleInputPrice" placeholder="请输入商品价格">
                </div>
                <div class="form-group">
                  <label for="exampleInputPrice">库存量</label>
                  <input type="text" value="" name="stock" class="form-control" id="exampleInputPrice" placeholder="请输入库存量">
                </div>
                <div class="form-group">
 
                  <label for="exampleInputName">商品分类</label>
                     <option value="0">普通</option>
                  <select name="status" class="form-control">
                     <option value="0">普通</option>
                     <option value="1">推荐</option>
                  </select> 
                </div>
                <div class="form-group">
 
                  <label for="exampleInputPicture">商品图片</label>
                  <input type="file" value="" name="picture" class="form-control" id="exampleInputPicture">
                </div>
                <div class="form-group">
                	<label for="exampleInputName">商品分类</label>
                	<select name="tid" class="form-control">
                    <option></option>
                		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                		<option  
                    <?php if((substr_count($val->path,',')) <=1): ?>
                    disabled="disabled"
                    <?php endif; ?>
                    value="<?php echo e($val->id); ?>"><?php echo e($val->name); ?></option>
                	  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                	</select>
                		
                </div>
              </div>
              <div class="form-group">
                  <label for="exampleInputIntroduce">商品介绍</label>
                   <!-- 加载编辑器的容器 -->
                  <script id="container" name="introduce" type="text/plain"> 
                  </script>
                  <!-- 配置文件 -->
                  <script type="text/javascript" src="<?php echo e(asset('ue/ueditor.config.js')); ?>"></script>
                  <!-- 编辑器源码文件 -->
                  <script type="text/javascript" src="<?php echo e(asset('ue/ueditor.all.js')); ?>"></script>
                  <!-- 实例化编辑器 -->
                  <script type="text/javascript">
                      var ue = UE.getEditor('container');
                  </script>  
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