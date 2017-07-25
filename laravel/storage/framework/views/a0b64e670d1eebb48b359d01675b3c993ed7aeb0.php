<?php $__env->startSection('content'); ?>
<style>
  .example-modal .modal {
    position: relative;
    top: auto;
    bottom: auto;
    right: auto;
    left: auto;
    display: block;
    z-index: 1;
  }

  .example-modal .modal {
    background: transparent !important;
  }
</style>
	   	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品管理
        <small>商品列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品管理</a></li>
        <li class="active">商品列表</li>
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
             <form action="<?php echo e(url('/admin/turn/index')); ?>" method="get">
            	<div class="row">
				<div class="col-md-2">
					<div class="form-group"> 
	                  <select name="num" class="form-control"> 
	                     
	                    <option value="2"
						<?php if(!empty($request['num']) && $request['num'] == 2): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >2</option>

	                    <option value="5"
						<?php if(!empty($request['num']) && $request['num'] == 5): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >5</option> 
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
                  <th>轮播图名称</th> 
                  <th>推荐商品</th> 
                  <th>轮播图</th>   
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="parent">
                  <td class="ids"><?php echo e($val->id); ?></td> 
                  <td class="tid"><?php echo e($val->name); ?></td>
                  <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($val->gid == $v->id): ?>  
                  <td><?php echo e($v->goodsName); ?></td> 
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <td><a href=""><img style="width:300px;height:150px" src="/uploads/avatar/<?php echo e($val->img); ?>"></a></td>  
                  <td>
                  <a href="<?php echo e(url('/admin/turn/edit')); ?>/<?php echo e($val->id); ?>">编辑</a> 
                  <a class="del" href="#" data-toggle="modal" data-target="#myModal">删除</a>
                  </td>  
                </tr> 
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody> 
              </table>  
               <?php echo e($data->appends($request)->links()); ?>

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
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">确定删除此信息吗?</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" id="delete" class="btn btn-primary">确认删除</button>
      </div>
      <form style="display:none" action="<?php echo e(url('/admin/turn/delete')); ?>/<?php echo e($val->id); ?>" method="post">
           
          <?php echo e(csrf_field()); ?> 
       </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script type="text/javascript">  

$.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

 


  $(".alert").on('click',function(){
    $(".alert").hide();
  });
 
  $('#delete').on('click',function(){
     $(this).parent().next().submit(); 
   });


</script>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>