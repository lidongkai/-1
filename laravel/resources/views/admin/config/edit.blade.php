@extends('admin.layout')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        网络管理
        <small>修改</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
        <li><a href="#">网络管理</a></li>
        <li class="active">修改</li>
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
              <h3 class="box-title">快速修改</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="/admin/config/update" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $data->id }}">
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
                  <label for="exampleInputName">网络名称</label>
                  <input type="text" class="form-control" id="exampleInputName" name="cname" value="" placeholder="请输入网络名称">
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputUrl">网络地址</label>
                  <input type="text" class="form-control" id="exampleInputWeburl" value="" name="curl" placeholder="请输入网络地址">
                </div>
               
                <div class="form-group">
                  <label for="exampleInputFile">logo</label>
                  <input type="file" id="exampleInputFile" name="clogo">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">更新</button>
              </div>
            </form>
          </div>
          </div>
       </div>
      </div>
    </section>
</div>
@endsection

