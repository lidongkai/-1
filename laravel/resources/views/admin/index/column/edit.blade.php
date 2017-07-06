@extends('admin.layout')


@section('content')
	
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        栏目管理
        <small>编辑</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">栏目管理</a></li>
        <li class="active">栏目编辑</li>
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

            @if ($errors->any())
    		<div class="alert alert-danger">
        	<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        	</ul>
   			 </div>
			@endif
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/admin/column/update" method="post" enctype="multipart/form-data">
              <div class="box-body">
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$data->id}}">
              	<div class="form-group">
                  <label for="exampleInputName">栏目名</label>
                  <input type="text" name="name" value="{{ $data->name}}" class="form-control" id="exampleInputName" placeholder="请输入栏目名">
                </div>
               
                <div class="checkbox">
                 <!--  <label>
                    <input type="checkbox"> Check me out
                  </label> -->
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
	
@endsection
