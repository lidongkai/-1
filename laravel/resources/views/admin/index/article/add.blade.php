@extends('admin.layout')


@section('content')
	
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
            @if(session('info'))
              <div class="alert alert-danger">
                {{session('info')}}
              </div>
            @endif  
            <form role="form" action="/admin/article/insert" method="post" enctype="multipart/form-data">
              <div class="box-body">
              {{csrf_field()}}
                <div class="form-group">
                <b>栏目名</b>
                  <select class="form-control" name="cid">
                  @foreach( $data as $key=>$val)
                    <option value="{{$val->id}}" >{{$val->name}}</option>
                  @endforeach  
                  </select>
                </div>

              	<div class="form-group">
                  <label for="exampleInputName">文章标题</label>
                  <input type="text" name="atitle" value="{{ old('atitle')}}" class="form-control" id="exampleInputName" placeholder="请输入文章名">
                </div>
                <div class="form-group">
                  <label for="exampleInputDescript">文章描述</label>
                  <input type="text" name="descript" value="{{ old('descript')}}" class="form-control" id="exampleInputDescript" placeholder="请输入文章描述">
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
	
@endsection

<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>