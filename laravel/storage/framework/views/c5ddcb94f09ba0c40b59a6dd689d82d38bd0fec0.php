<?php $__env->startSection('content'); ?>
	
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        文章管理
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">文章管理</a></li>
        <li class="active">文章添加</li>
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
            <?php if(session('info')): ?>
              <div class="alert alert-danger">
                <?php echo e(session('info')); ?>

              </div>
            <?php endif; ?>  
            <form role="form" action="/admin/article/insert" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <?php echo e(csrf_field()); ?>

                <div class="form-group">
                <b>栏目名</b>
                  <select class="form-control" name="cid">
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($val->id); ?>" ><?php echo e($val->name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                  </select>
                </div>

              	<div class="form-group">
                  <label for="exampleInputName">文章标题</label>
                  <input type="text" name="atitle" value="<?php echo e(old('atitle')); ?>" class="form-control" id="exampleInputName" placeholder="请输入文章名">
                </div>
                <div class="form-group">
                  <label for="exampleInputDescript">文章描述</label>
                  <input type="text" name="descript" value="<?php echo e(old('descript')); ?>" class="form-control" id="exampleInputDescript" placeholder="请输入文章描述">
                </div>
                <div class="form-group">
                  <label for="exampleInputPicture">封面图片</label>
                  <input type="file" name="picture" value="<?php echo e(old('picture')); ?>" class="form-control" id="exampleInputPicture" placeholder="请输入文章描述">
                </div>
                <div class="form-group">
                   
                  <script id="editor" type="text/plain" style="width:950px;height:350px;"></script>
                  <script type="text/javascript">
                    var ue = UE.getEditor('editor');
                  </script>
                
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">提交</button>
              </div>
            </form>
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

<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>