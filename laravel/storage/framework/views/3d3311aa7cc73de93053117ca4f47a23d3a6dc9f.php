<?php $__env->startSection('content'); ?>


    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        链接列表
        <small>链接详情</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>列表</a></li>
        <li><a href="#">详情</a></li>
        <li class="active"></li>
      </ol>
    </section>
  
  

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">链接列表</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <?php if(session('info')): ?>
              <div class="alert alert-danger">
                <?php echo e(session('info')); ?>

              </div>
            <?php endif; ?>

<form action="<?php echo e(url('/admin/links/index')); ?>" method="get">
  <div class="row">
    
    <div class="col-md-2">
      <div class="form-group">
          <select class="form-control" name="num">
          <option value="10"
          <?php if(!empty($request['num']) && $request['num'] == '10'): ?>
          selected = 'selected'
          <?php endif; ?>
          >10</option>
          <option value="20"
          <?php if(!empty($request['num']) && $request['num'] == '20'): ?>
          selected = 'selected'
          <?php endif; ?>
          >20</option>
          <option value="50"
          <?php if(!empty($request['num']) && $request['num'] == '50'): ?>
          selected = 'selected'
          <?php endif; ?>
          >50</option>
          <option value="100"
          <?php if(!empty($request['num']) && $request['num'] == '100'): ?>
          selected = 'selected'
          <?php endif; ?>
          >100</option>
          <option value="200"
          <?php if(!empty($request['num']) && $request['num'] == '200'): ?>
          selected = 'selected'
          <?php endif; ?>
          >200</option>
      </select>
      </div>

    </div>

      <div class="col-md-4 col-md-offset-6">
                <!-- select -->
               <div class="input-group input-group">
                 <input type="text" class="form-control" name="keywords" value="<?php echo e(isset($request['keywords']) ? $request['keywords'] : ''); ?>">
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
                  <th>链接名称</th>
                  <th>链接地址</th>
                  <th>链接logo</th>
                  <th>状态</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
               
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="parent">
                  <td class="ids"><?php echo e($val->id); ?></td>
                  <td class="name"><?php echo e($val->webname); ?></td>
                  <td><?php echo e($val->weburl); ?></td>
                  <td><img style="width:50px;height:50px;" src="/uploads/logo/<?php echo e($val->logo); ?>"></td>
                  <td><button class="tds"><?php echo e($val->status == 1 ? '开启' : '禁用'); ?></button></td>
                  <td><a href="<?php echo e(url('/admin/links/edit')); ?>/<?php echo e($val->id); ?>">编辑</a> <a href="#" class="del" data-toggle="modal" data-target="#myModal">删除</a></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
                </tbody>
                <tfoot>
       
                </tfoot>
              </table>

              <?php echo e($data->appends($request)->links()); ?>


            </div>
            <!-- /.box-body -->
          </div>

          </div>
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
 
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $(".name").one('dblclick', aaa);

  function aaa(){

    var td = $(this);
    // 获取id
    var id = $(this).parent('.parent').find('.ids').html();
    // alert(id);
    var inp = $("<input type='text'>");
    var oldName = $(this).html();
    inp.val(oldName);
    $(this).html(inp);
    // 直接选中
    inp.select();

    inp.on('blur',function(){

      var newName = inp.val();
      // 执行ajax
      $.ajax('/admin/links/ajaxrename',{
        type:'POST',
        data:{id:id,webname:newName},
        success:function(data){
          
          if(data == '0')
          {
            alert('链接名已存在');
            td.html(oldName);
          }else if(data == '1')
          {
            td.html(newName);
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

      td.one('dblclick',aaa);

    });

  }

    var id = 0;

    $('.del').on('click',function(){

      id = $(this).parents('.parent').find('.ids').html();
    });

</script>

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

  <script type="text/javascript">

  $('#delete').click(function(){

      location.href = "/admin/links/delete/"+ id;
  });

  $(".alert").on('click',function(){
    $(".alert").hide();
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
       


    
      $.ajax('/admin/links/ajaxstatus',{
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

  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>