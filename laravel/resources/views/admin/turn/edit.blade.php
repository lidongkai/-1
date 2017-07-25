@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        轮播图添加
        <small>添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">轮播图添加</a></li>
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
            @if(session('info'))
                <div class="alert alert-danger">
                {{ session('info') }}
                </div>
                @endif
            <form role="form" method="post" action="{{ url('/admin/turn/update') }}/{{ $data->id }}" enctype="multipart/form-data">
              	{{ csrf_field() }}
              <div class="box-body">

                
            	@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
              
              	<div class="form-group">
                  <label for="exampleInputName">轮播图名称</label>
                  <input type="text" value="{{ $data->name }}" name="name" class="form-control" placeholder="请输入轮播图名称">
                </div> 
                <div class="form-group">
                	<label for="exampleInputImg">轮播图</label>
                	<input type="file" value="{{ $data->img }}" name="img" class="form-control"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputImg">轮播图</label>
                  <select name="gid" class="form-control">
                  @foreach($allData as $key=>$val)
                    <option
                    @if($data->gid == $val->id)
                    selected="selected"
                    @endif
                     value="{{ $val->id }}">{{ $val->goodsName }}</option>
                  @endforeach 
                  </select> 
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">编辑</button>
              </div>
            </form>
          </div>
          <!-- /.box --> 

@endsection
@section('js')

<script type="text/javascript"> 
  $(".alert").on('click',function(){
    $(".alert").hide();
  });

</script>
 
@endsection