<?php $__env->startSection('content'); ?>
	
	   	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        分类管理
        <small>分类列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">分类管理</a></li>
        <li class="active">分类列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速查看列表</h3>
            </div>
		      <?php if(session('info')): ?>
              <div class="alert alert-danger">
              <?php echo e(session('info')); ?>

              </div>
          <?php endif; ?> 
            <!-- /.box-header -->
            <div class="box-body"> 
             <form action="<?php echo e(url('/admin/user/index')); ?>" method="get">
            	<div class="row">
				<div class="col-md-2">
					<div class="form-group"> 
	                  <select name="num" class="form-control"> 
	                    <option value="5"  
					 	<?php if(!empty($request['num']) && $request['num'] == 5): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >5</option>

	                    <option value="20"
						<?php if(!empty($request['10']) && $request['num'] == 10): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >10</option>

	                    <option value="20"
						<?php if(!empty($request['num']) && $request['num'] == 20): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >20</option> 
	                  </select>
	                </div>
				</div>
				<div class="col-md-4 col-md-offset-6">
					<div class="input-group">
	               		 <input value="<?php echo e(isset($request['keywords']) ? $request['keywords'] : ''); ?>" name="keywords" type="text" class="form-control">
	                    <span class="input-group-btn">
	                      <button type="submit" class="btn btn-info btn-flat">搜索</button>
	                    </span>
              		</div>
				</div> 
			</div>
            </form> 

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>分类名</th> 
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="parent">
                  <td class="ids"><?php echo e($val->id); ?></td>
                  <td class="name"><?php echo e($val->name); ?></td> 
                  <td>
                  <a href="<?php echo e(url('/admin/goods')); ?>/<?php echo e($val->id); ?>/edit">编辑</a> 
                  <a class="del" href="#">删除</a>
                  </td> 
                  <form style="display:none" action="<?php echo e(url('/admin/goods')); ?>/<?php echo e($val->id); ?>" method="post">
                    <?php echo e(method_field('DELETE')); ?>

                    <?php echo e(csrf_field()); ?> 
                  </form>
                </tr> 
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody> 
              </table> 
            </div>
            <!-- /.box-body -->
          </div>  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script type="text/javascript">
  $(".del").on('click',function(){
      $(this).parent().next().submit();
  });
  $(".alert").on('click',function(){
    $(".alert").hide();
  });

</script>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>