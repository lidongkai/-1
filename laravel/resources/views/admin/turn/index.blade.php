@extends('admin.layout')

@section('content')
<style>
  .example-modal .modal {
    position: relative;
    top: auto;
    bottom: auto;
    right: auto;
    left: auto;
    display: block;
    z-index: 1;
  }

  .example-modal .modal {
    background: transparent !important;
  }
</style>
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
             <form action="{{ url('/admin/turn/index') }}" method="get">
            	<div class="row">
				<div class="col-md-2">
					<div class="form-group"> 
	                  <select name="num" class="form-control"> 
	                     
	                    <option value="2"
						@if(!empty($request['num']) && $request['num'] == 2)
					 		selected="selected"
					 	@endif 
	                    >2</option>

	                    <option value="5"
						@if(!empty($request['num']) && $request['num'] == 5)
					 		selected="selected"
					 	@endif 
	                    >5</option> 
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
                  <th>轮播图名称</th> 
                  <th>推荐商品</th> 
                  <th>轮播图</th>   
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
				@foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{ $val->id }}</td> 
                  <td class="tid">{{ $val->name }}</td>
                  @foreach($allData as $k=>$v)
                  @if($val->gid == $v->id)  
                  <td>{{ $v->goodsName }}</td> 
                  @endif
                  @endforeach
                  <td><a href=""><img style="width:300px;height:150px" src="/uploads/avatar/{{ $val->img }}"></a></td>  
                  <td>
                  <a href="{{ url('/admin/turn/edit') }}/{{ $val->id }}">编辑</a> 
                  <a class="del" href="#" data-toggle="modal" data-target="#myModal">删除</a>
                  </td>  
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
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">确定删除此信息吗?</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" id="delete" class="btn btn-primary">确认删除</button>
      </div>
      <form style="display:none" action="{{ url('/admin/turn/delete') }}/{{ $val->id }}" method="post">
           
          {{ csrf_field() }} 
       </form>
    </div>
  </div>
</div>

@endsection

@section('js')

<script type="text/javascript">  

$.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

 


  $(".alert").on('click',function(){
    $(".alert").hide();
  });
 
  $('#delete').on('click',function(){
     $(this).parent().next().submit(); 
   });


</script>  
@endsection