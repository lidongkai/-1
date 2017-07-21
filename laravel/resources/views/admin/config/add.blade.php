@extends('admin.layout')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        网络配置管理
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">网络配置管理</a></li>
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

            <form role="form" action="/admin/config/insert" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
			
<!-- 
			@if(session('info'))
			
			<div class="alert alert-danger">
				{{ session('info') }}	
			</div>
	
			@endif

			@if (count($errors) > 0) -->
	<!-- 	    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
			@endif -->
                <div class="form-group">
                  <label for="exampleInputName">网络名称</label>
                  <input type="text" class="form-control" id="exampleInputName" name="cname" value="" placeholder="请输入链接名称">
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputUrl">网络地址</label>
                  <input type="text" class="form-control" id="exampleInputUrl" value="" name="curl" placeholder="请输入链接地址">
                </div>
               
                <div class="form-group">
                  <label for="exampleInputFile">网站logo</label>
                  <input type="file" id="exampleInputLogo" name="clogo">
                </div>
                <div class="form-group">
                  <label for="exampleInputStauts">网络状态</label><br>
                 <select class="form-group" name="status">
                   <option value="1">开启</option>
                   <option value="0">关闭</option>
                 </select>
                </div>

               <!--  <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
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
@endsection

