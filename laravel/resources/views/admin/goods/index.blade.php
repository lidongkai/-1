@extends('admin.layout')

@section('content')
	
	   	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        分类管理
        <small>分类列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">分类管理</a></li>
        <li class="active">分类列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">快速查看列表</h3>
            </div>
		      @if(session('info'))
              <div class="alert alert-danger">
              {{ session('info') }}
              </div>
          @endif 
            <!-- /.box-header -->
            <div class="box-body"> 
             <form action="{{ url('/admin/user/index') }}" method="get">
            	<div class="row">
				<div class="col-md-2">
					<div class="form-group"> 
	                  <select name="num" class="form-control"> 
	                    <option value="5"  
					 	@if(!empty($request['num']) && $request['num'] == 5)
					 		selected="selected"
					 	@endif 
	                    >5</option>

	                    <option value="20"
						@if(!empty($request['10']) && $request['num'] == 10)
					 		selected="selected"
					 	@endif 
	                    >10</option>

	                    <option value="20"
						@if(!empty($request['num']) && $request['num'] == 20)
					 		selected="selected"
					 	@endif 
	                    >20</option> 
	                  </select>
	                </div>
				</div>
				<div class="col-md-4 col-md-offset-6">
					<div class="input-group">
	               		 <input value="{{ $request['keywords'] or ''}}" name="keywords" type="text" class="form-control">
	                    <span class="input-group-btn">
	                      <button type="submit" class="btn btn-info btn-flat">搜索</button>
	                    </span>
              		</div>
				</div> 
			</div>
            </form> 

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>分类名</th> 
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
				@foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{ $val->id }}</td>
                  <td class="name">{{ $val->name }}</td> 
                  <td>
                  <a href="{{ url('/admin/goods') }}/{{ $val->id }}/edit">编辑</a> 
                  <a class="del" href="#">删除</a>
                  </td> 
                  <form style="display:none" action="{{ url('/admin/goods') }}/{{ $val->id }}" method="post">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }} 
                  </form>
                </tr> 
				@endforeach
                </tbody> 
              </table> 
            </div>
            <!-- /.box-body -->
          </div>  
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('js')

<script type="text/javascript">
  $(".del").on('click',function(){
      $(this).parent().next().submit();
  });
  $(".alert").on('click',function(){
    $(".alert").hide();
  });

</script>
 
@endsection