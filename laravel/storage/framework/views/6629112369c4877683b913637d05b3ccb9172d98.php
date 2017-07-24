<?php $__env->startSection('content'); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        文章
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">文章</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">请选择文章模块</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
            <?php if(session('info')): ?>
            	<div class="alert alert-danger">
            		<?php echo e(session('info')); ?>

            	</div>
            <?php endif; ?>	
				
				<div class="row">
				
                <form action="/admin/article/index" method="post">
                <?php echo e(csrf_field()); ?>

                	
                	<div class="col-md-3">
                	
                	<select class="form-control" name="selid">
                		<?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                		<option value="<?php echo e($v->id); ?>"  ><?php echo e($v->name); ?></option>
                		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                	</select>
                	</div>
               
             	<div class="col-md-3  ">
             	<input value="<?php echo e(isset($request['keywords']) ? $request['keywords'] : ''); ?>" type="text" name="keywords" class="form-control" placeholder="搜索文章">
					</div>
					<span class="input-group-btn">
						    <button type="submit" class="btn btn-info btn-flat">搜索</button>
						</span>	        
						    
				</form>
				
				</div>		 
						
               
				

                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>标题</th>
                  <th>描述</th>
                  <!-- <th>封面图片</th> -->
                  <!-- <th>上传时间</th> -->
                  
                  <th>作者</th>
                  <th>状态 | 加精 | 置顶 |轮播</th>
                  
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
					
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="parent">
                  <td class="ids"><?php echo e($val->id); ?></td>
                  <td class=""><a href="<?php echo e(url('/admin/article/show')); ?>/<?php echo e($val->id); ?>"><?php echo e($val->atitle); ?></a></td>
                  <td class="" style="overflow:hidden;white-space:nowrap;"><?php echo e($val->descript); ?></td>
                  <!-- <td><img style="width:30%" src="/uploads/article/<?php echo e($val->picture); ?>" alt=""></td> -->
            
                  
                  <td class=""><?php echo e($val->aname); ?></td>

                  <td ><button class="tds" ><?php echo e($val->status ==1 ? "开启" : "禁用"); ?></button>
                  <button class="tdc" ><?php echo e($val->chosen ==1 ? "精选" : "普通"); ?></button>
                  <button class="tdt" ><?php echo e($val->top ==1 ? "置顶" : "普通"); ?></button>
                  <button class="tdl" ><?php echo e($val->lunbo ==1 ? "轮播" : "普通"); ?></button></td>
                  <td><a href="<?php echo e(url('/admin/article/edit')); ?>/<?php echo e($val->id); ?>">编辑</a> | <a class="del" href="#" data-toggle="modal" data-target="#myModal">删除</a></td>
                </tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              	</tbody>

              </table>
			<?php echo e($data->appends($request)->links()); ?>	
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
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


	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	
		
	$('.tds').click(function(){
		var id = $(this).parent().parent('.parent').find('.ids').html();
		
        var sta ='';	
        var oldSta = $(this).html();
        if(oldSta == "开启")
    	{
    		oldSta = "禁用";
    	}else
    	{
    		oldSta = "开启";
    	}

		

    	if(oldSta == "开启")
    	{
    		sta = 1;
    	}else
    	{
    		sta = 0;
    	}
		$(this).html(oldSta);
    	 


  	
    	$.ajax('/admin/article/ajaxstatus',{
				type:'POST',
				data:{id:id,status:sta},
				success:function(data){
					
					
					if(data == '1')
					{
						
					}else
					{
						alert('修改失败');
					}
				},
				error:function(data){
					alert('数据异常');
				},
				dataType:'json',
			});

    });








    $('.tdc').click(function(){
    var id = $(this).parent().parent('.parent').find('.ids').html();
    
        var cho ='';  
        var oldCho = $(this).html();
        if(oldCho == "精选")
      {
        oldCho = "普通";
      }else
      {
        oldCho = "精选";
      }

    

      if(oldCho == "精选")
      {
        cho = 1;
      }else
      {
        cho = 0;
      }
    $(this).html(oldCho);
       


    
      $.ajax('/admin/article/ajaxchosen',{
        type:'POST',
        data:{id:id,chosen:cho},
        success:function(data){
          
          
          if(data == '1')
          {
            
          }else
          {
            alert('修改失败');
          }
        },
        error:function(data){
          alert('数据异常');
        },
        dataType:'json',
      });

    });


    $('.tdt').click(function(){
    var id = $(this).parent().parent('.parent').find('.ids').html();
    
        var cho ='';  
        var oldCho = $(this).html();
        if(oldCho == "置顶")
      {
        oldCho = "普通";
      }else
      {
        oldCho = "置顶";
      }

    

      if(oldCho == "置顶")
      {
        cho = 1;
      }else
      {
        cho = 0;
      }
    $(this).html(oldCho);
       


    
      $.ajax('/admin/article/ajaxtop',{
        type:'POST',
        data:{id:id,chosen:cho},
        success:function(data){
          
          
          if(data == '1')
          {
            
          }else
          {
            alert('修改失败');
          }
        },
        error:function(data){
          alert('数据异常');
        },
        dataType:'json',
      });

    });



    $('.tdl').click(function(){
    var id = $(this).parent().parent('.parent').find('.ids').html();
    
        var cho ='';  
        var oldCho = $(this).html();
        if(oldCho == "轮播")
      {
        oldCho = "普通";
      }else
      {
        oldCho = "轮播";
      }

    

      if(oldCho == "轮播")
      {
        cho = 1;
      }else
      {
        cho = 0;
      }
    $(this).html(oldCho);
       


    
      $.ajax('/admin/article/ajaxlunbo',{
        type:'POST',
        data:{id:id,chosen:cho},
        success:function(data){
          
          
          if(data == '1')
          {
            
          }else
          {
            alert('修改失败');
          }
        },
        error:function(data){
          alert('数据异常');
        },
        dataType:'json',
      });

    });









	var id = 0;
	$(".del").on('click',function(){
		id = $(this).parents('.parent').find('.ids').html();
	});

	

    
    
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">是否删除</h4>
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
	$("#delete").click(function(){
      // alert(id);
      location.href="/admin/article/delete/"+id;
    });

    
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>