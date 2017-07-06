@extends('admin.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品详情
        <small>详情</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品详情</a></li>
        <li class="active">详情</li>
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
              <h3 class="box-title">商品介绍</h3>
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
                  <label for="exampleInputPicture">商品图片</label>
                  <img style="width:100px;height:100px" src="/uploads/avatar/{{ $data->picture }}"> 
                </div> 
              </div>
              <!-- /.box-body -->
              <div class="form-group">
                  <label for="exampleInputIntroduce">商品介绍</label> 
                  {!! $data->introduce !!} 
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