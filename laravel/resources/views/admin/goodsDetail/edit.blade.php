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
            <form role="form" method="post" action="{{ url('/admin/goodsDetail') }}/{{ $data->id }}" enctype="multipart/form-data">
                 {{ method_field("PATCH") }}
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
                  <label for="exampleInputName">商品名称</label>
                  <input type="hidden" value="{{ $data->tid }}">
                  <input type="text" value="{{ $data->goodsName }}" name="goodsName" class="form-control" id="exampleInputName" placeholder="请输入用户名">
                </div>  
                <div class="form-group">
                  <label for="exampleInputPrice">商品价格</label>
                  <input type="text" value="{{ $data->price }}" name="price" class="form-control" id="exampleInputPrice" placeholder="请输入商品价格">
                </div>
                <div class="form-group">
                  <label for="exampleInputPrice">库存量</label>
                  <input type="text" value="{{ $data->stock }}" name="stock" class="form-control" id="exampleInputPrice" placeholder="请输入商品价格">
                </div>
                <div class="form-group">
                  <label for="exampleInputPicture">商品图片</label>
                  <input type="file" value="{{ $data->picture }}" name="picture" class="form-control" id="exampleInputPicture">
                </div>
                <div class="form-group">
                  <label for="exampleInputName">分类名称</label>
                  <input style="disabled" type="text" value="{{ $data->good_name }}" name="good_name" class="form-control" id="exampleInputPrice">
                    
                </div>
              </div>
              <!-- /.box-body -->
              <div class="form-group">
                  <label for="exampleInputIntroduce">商品介绍</label>
                   <!-- 加载编辑器的容器 -->
                  <script id="container" name="introduce" type="text/plain"> 
                  {!! $data->introduce !!}
                  </script>
                  <!-- 配置文件 -->
                  <script type="text/javascript" src="{{ asset('ue/ueditor.config.js')}}"></script>
                  <!-- 编辑器源码文件 -->
                  <script type="text/javascript" src="{{ asset('ue/ueditor.all.js')}}"></script>
                  <!-- 实例化编辑器 -->
                  <script type="text/javascript">
                      var ue = UE.getEditor('container');
                  </script>  
                </div> 

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