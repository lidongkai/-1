<?php $__env->startSection('user'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b style="font-size:20px">我的文章</b>
        <small>列表</small></h1>
      
    </section>
	<div class="box-body">
            <?php if(session('info')): ?>
            	<div class="alert alert-danger">
            		<?php echo e(session('info')); ?>

            	</div>
            <?php endif; ?>	 

     	<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
        
          <th>文章名</th>
          <th>状态</th>
          <th>操作</th>
           
        </tr>
        </thead>
        <tbody>       
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr class="parent">
	      <input class="hidid" type="hidden" value="<?php echo e($v->id); ?>">         
		  <td class="name"><a href="/home/show/<?php echo e($v->id); ?>"><?php echo e($v->atitle); ?></a></td>
		  <td class="name"><?php echo e($v->status ==1 ? "正常显示" : "禁用"); ?></td>
		  <td><a href="<?php echo e(url('/home/article/edit')); ?>/<?php echo e($v->id); ?>">编辑</a> | <a class="del" href="#" data-toggle="modal" data-target="#myModal">删除</a></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>	
        </table>
	</div>

	 
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">您确定删除吗?</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" id="delete" class="btn btn-primary">确认</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	var id = 0;
	$(".del").on('click',function(){
		id = $(this).parent().parents('.parent').find('.hidid').val();
	});

$("#delete").click(function(){
   		// alert(id);
      location.href="/home/article/delete/"+id;
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>