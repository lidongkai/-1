<?php $__env->startSection('content'); ?>
	
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        文章管理
        <small>详情</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">文章管理</a></li>
        <li class="active">文章详情</li>
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
              <h3 class="box-title">请输入已下信息</h3>
            </div>

            <?php if($errors->any()): ?>
    		<div class="alert alert-danger">
        	<ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        	</ul>
   			 </div>
			<?php endif; ?>
            <!-- /.box-header -->
            <!-- form start -->
            <table>
              <div class="box-body">
              <?php echo e(csrf_field()); ?>

              
                <div class="form-group">
                  <label for="exampleCname">所属栏目</label>
                  <input type="text" disabled name="cname" value="<?php echo e($data->cname); ?>" class="form-control" id="exampleInputCname" placeholder="请输入文章名">
                </div>
              	<div class="form-group">
                  <label for="exampleInputName">标题</label>
                  <input type="text" name="atitle" disabled value="<?php echo e($data->atitle); ?>" class="form-control" id="exampleInputName" placeholder="请输入文章名">
                </div>

                <div class="form-group">
                  <label for="exampleInputDescript">描述</label>
                  <input type="text" name="descript" disabled value="<?php echo e($data->descript); ?>" class="form-control" id="exampleInputDescript" placeholder="请输入文章名">
                </div>
                
                <div class="form-group">
                  <p><?php echo $data->editorValue; ?></p>
                </div>
                <br/>
                <!-- <div class="form-group" style="float:right">
                  <span>发表于:<?php echo e($data->ctime); ?></span>
                </div> -->
                <br/>
                <div class="form-group" style="width:85px; text-align:center; border-radius: 40%; height:26px;border:1px solid #ccc;">
                  <i class="fa fa-fw fa-star-o"></i>
                   <span>0<span>
                   人收藏
                </div>

                <div class="form-group" style="width:85px; text-align:center; border-radius: 40%; height:26px;border:1px solid #ccc;">
                  <i class="fa fa-fw  fa-star"></i>
                   <span>0<span>
                   人收藏
                </div>

              

                <hr/>
                <div class="form-group">
                  <h4><b>文章评论</b></h4>
                </div>
                </div>
              </table>
              <!-- /.box-body -->

          
          </div>
          <!-- /.box -->

          
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>