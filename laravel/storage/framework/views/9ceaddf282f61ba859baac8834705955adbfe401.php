<?php $__env->startSection('user'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b style="font-size:20px">我的文章</b>
        <small>添加</small></h1>
      
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
            <form role="form" action="/home/article/update" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <?php echo e(csrf_field()); ?>

                
                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
              	<div class="form-group">
                  <label for="exampleInputName">文章标题</label>
                  <input type="text" name="atitle" value="<?php echo e($data->atitle); ?>" class="form-control" id="exampleInputName" placeholder="请输入文章名">
                </div>
                <div class="form-group">
                  <label for="exampleInputDescript">文章描述</label>
                  <input type="text" name="descript" value="<?php echo e($data->descript); ?>" class="form-control" id="exampleInputDescript" placeholder="请输入文章描述">
                </div>
                <div class="form-group">
                  <label for="exampleInputPicture">封面图片</label><br/>
                  <img style="width:100px;" src="/uploads/article/<?php echo e($data->picture); ?>" alt="">
                  <input type="file" name="picture"  class="form-control" id="exampleInputPicture" placeholder="请输入文章描述">
                </div>
                <div class="form-group">
                   
                  <script id="editor" type="text/plain" style="width:950px;height:350px;"><?php echo $data->editorValue; ?></script>
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
<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>