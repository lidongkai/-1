@extends('admin.layout')

@section('content')
	
	   	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        商品管理
        <small>商品列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">商品管理</a></li>
        <li class="active">商品列表</li>
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
             <form action="{{ url('/admin/goodsDetail') }}" method="get">
            	<div class="row">
				<div class="col-md-2">
					<div class="form-group"> 
	                  <select name="num" class="form-control"> 
	                    <option value="10"  
					 	@if(!empty($request['num']) && $request['num'] == 10)
					 		selected="selected"
					 	@endif 
	                    >10</option>

	                    <option value="20"
						@if(!empty($request['num']) && $request['num'] == 20)
					 		selected="selected"
					 	@endif 
	                    >20</option>

	                    <option value="50"
						@if(!empty($request['num']) && $request['num'] == 50)
					 		selected="selected"
					 	@endif 
	                    >50</option>

	                    <option value="100"
						@if(!empty($request['num']) && $request['num'] == 100)
					 		selected="selected"
					 	@endif 
	                    >100</option> 

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
                  <th>商品名称</th> 
                  <th>分类名称</th> 
                  <th>商品介绍</th> 
                  <th>商品图片</th> 
                  <th>商品价格</th> 
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
				@foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{ $val->id }}</td>
                  <td class="goodsName">{{ $val->goodsName }}</td> 
                  <td class="tid">{{ $val->good_name }}</td> 
                  <td class="introduce">{{ $val->introduce }}</td> 
                  <td class="picture"><img style="width:50px;height:50px" src="/uploads/avatar/{{ $val->picture }}"></td> 
                  <td class="price">{{ $val->price }}</td> 
                  <td>
                  <a href="{{ url('/admin/goodsDetail') }}/{{ $val->id }}/edit">编辑</a> 
                  <a class="del" href="#">删除</a>
                  </td> 
                  <form style="display:none" action="{{ url('/admin/goodsDetail') }}/{{ $val->id }}" method="post">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }} 
                  </form>
                </tr> 
				@endforeach
                </tbody> 
              </table> 
              {{ $data->appends($request)->links() }}
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

</script>
 
@endsection