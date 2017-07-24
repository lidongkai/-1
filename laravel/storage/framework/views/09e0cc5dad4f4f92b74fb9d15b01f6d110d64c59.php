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
        订单管理
        <small>订单列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">订单管理</a></li>
        <li class="active">订单列表</li>
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
             <form action="<?php echo e(url('/admin/order/index')); ?>" method="get">
            	<div class="row">
				<div class="col-md-2">
					<div class="form-group"> 
	                  <select name="num" class="form-control"> 
	                    <option value="5"  
					 	<?php if(!empty($request['num']) && $request['num'] == 5): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >5</option>

	                    <option value="10"
						<?php if(!empty($request['num']) && $request['num'] == 10): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >10</option>

	                    <option value="20"
						<?php if(!empty($request['num']) && $request['num'] == 20): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >20</option>

	                    <option value="30"
						<?php if(!empty($request['num']) && $request['num'] == 30): ?>
					 		selected="selected"
					 	<?php endif; ?> 
	                    >30</option> 

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
                  <th>订单编号</th> 
                  <th>用户名</th> 
                  <th>商品名称</th> 
                  <th>订单总价</th> 
                  <th>下单时间</th> 
                  <th>完成订单时间</th> 
                  <th>订单状态</th> 
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="parent">
                  <td class="ids"><?php echo e($val->id); ?></td>
                  <td class="ordernum"><?php echo e($val->ordernum); ?></td> 
                  <td><?php echo e($val->uid); ?></td> 
                  <td><?php echo e($val->gid); ?></td> 
                  <td><?php echo e($val->total); ?></td> 
                  <td><?php echo e($val->ftime); ?></td> 
                  <td><?php echo e($val->otime); ?></td>    
                  <td>
                  <form class="a" role="form" action="<?php echo e(url('/admin/order/update')); ?>/<?php echo e($val->id); ?>" method="post" enctype="multipart/form-data">  
                 
                   <?php echo e(csrf_field()); ?> 
                    <select class="b form-control" onchange="return jumpPage()" class="jumpPage" name="status">

                    <option class="one" value="1" 
                    <?php if($val->status == 1): ?>
                    selected="selected"
                    disabled="disabled"
                    <?php endif; ?>
                    >出库中</option>

                    <option class="two" value="2"
                    <?php if($val->status == 2): ?>
                    selected="selected"
                    disabled="disabled"
                    <?php endif; ?>
                    >派发中</option>

                    <option class="three" value="3"
                    <?php if($val->status == 3): ?>
                    selected="selected"
                    disabled="disabled"
                    <?php endif; ?>
                    >已完成</option>

                  </select>
                  <button class="edit" type="submit" style="display:none">修改</button>  
                 </form>
                  
                  
                   <!--  <?php if($val->status == 1): ?>
                    出库中
                    <?php endif; ?>
                    <?php if($val->status == 2): ?>
                    派发中
                    <?php endif; ?>
                    <?php if($val->status == 3): ?>
                    已完成
                    <?php endif; ?> -->
                  </td>
                  <td> 
                  <a style="display:none" href="">修改</a>
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
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script type="text/javascript">  
  $(".alert").on('click',function(){
    $(".alert").hide();
  });
  
  var id = 0;
  $('.del').on('click',function(){
    id = $(this).parents('.parent').find('.ids').html();
    // alert(id);
  });
  $('#delete').on('click',function(){ 
     location.href = "/admin/order/delete/"+id; 
   });

   
   $('.one').on('click',function(){
    $(this).parents('.a').submit();
    
  });
    $('.two').on('click',function(){
    $(this).parents('.a').submit();
   
  });
     $('.three').on('click',function(){
    $(this).parents('.a').submit();
    
  });
    // function jumpPage() {
    //   Apply($(".jumpPage").val())
    // }
    //  function Apply(class) {
    //     id = parseInt(id);
    //     if (id == 0)
    //     { window.location.href = "xxx?a=0"; }
    //     else if (id == 1)
    //     { window.location.href = "xxx?a=1"; }
    //     else if (id == 2)
    //     { window.location.href = "xxx?a=2"; }
    // }
     

</script>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>