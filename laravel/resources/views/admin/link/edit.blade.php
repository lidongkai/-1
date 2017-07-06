@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品编辑
        <small>编辑</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品编辑</a></li>
        <li class="active">编辑</li>
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
              <h3 class="box-title">快速编辑</h3>
            </div>
            
	           
			<!-- /.box-header -->
            <!-- form start -->
            @if(session('info'))
                <div class="alert alert-danger">
                {{ session('info') }}
                </div>
                @endif
            <form role="form" method="post" action="{{ url('/admin/link/insert') }}" enctype="multipart/form-data">
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
                  <label for="exampleInputName">链接名称</label>
                  <input type="text" value="{{ $data->webname  }}" name="webname" class="form-control" id="exampleInputName" placeholder="请输入链接名称">
                </div> 
               
                <div class="form-group">
                  <label for="exampleInputPrice">链接地址</label>
                  <input type="text" value="{{ $data->weburl }}" name="weburl" class="form-control" id="exampleInputPrice" placeholder="请输入链接地址">
                </div>
                <div class="form-group">
                  <label for="exampleInputPicture">logo</label>
                  <input type="file" value="{{ $data->url }}" name="logo" class="form-control" id="exampleInputPicture">
                </div>
                <div class="form-group">
                  <label for="exampleInputName">链接状态</label>
                  <select name="status" class="form-control">
                    <option value="1">开启</option> 
                    <option value="0">关闭</option>
                    
                  </select>
                    
                </div>
              </div>
              
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">添加</button>
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