@extends('admin.layout')


@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        栏目
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">栏目</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">栏目列表</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
            @if(session('info'))
            	<div class="alert alert-danger">
            		{{session('info')}}
            	</div>
            @endif	
				<!-- <form action="/admin/user/index" method="get">
	                <div class="row">
						<div class="col-md-2">
							<div class="form-group">
						     
						      	<select class="form-control" name="num" >
						        	<option vlaue="10"
									@if(!empty($request['num']) && $request['num'] == '10')
										selected="selected"	
									@endif	
						        	>10</option>
						        	<option value="25"
						        	@if(!empty($request['num']) && $request['num'] == '25')
										selected="selected"	
									@endif
									>25</option>
						        	<option value="50"
						        	@if(!empty($request['num']) &&$request['num'] == '50')
										selected="selected"	
									@endif	
						        	>50</option>
						        	<option value="100"
						        	@if(!empty($request['num']) && $request['num'] == '100')
										selected="selected"	
									@endif	
						        	>100</option>
						      	</select>
						    </div>
						</div>		
						<div class="col-md-4 col-md-offset-6">
						    <div class="input-group">
						        <input value="{{ $request['keywords'] or '' }}" type="text" name="keywords" class="form-control">
						        <span class="input-group-btn">
						            <button type="submit" class="btn btn-info btn-flat">搜索</button>
						        </span>
						    </div>
						</div>    
					</div>
				</form> -->
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>栏目名</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>

				@foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{$val->id}}</td>
                  <td class="name">{{$val->name}}</td>
                  <td><a href="{{url('/admin/column/edit')}}/{{$val->id}}">编辑</a> | <a class="del" href="#" data-toggle="modal" data-target="#myModal">删除</a></td>
                </tr>
				@endforeach

              	</tbody>	
              </table>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
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


	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	$(".name").one('dblclick', aaa);

	function aaa(){

		var td = $(this);
		// 获取id
		var id = $(this).parent('.parent').find('.ids').html();
		// alert(id);
		var inp = $("<input type='text'>");
		var oldName = $(this).html();
		inp.val(oldName);
		$(this).html(inp);
		// 直接选中
		inp.select();

		inp.on('blur',function(){

			var newName = inp.val();
			// 执行ajax
			$.ajax('/admin/column/ajaxrename',{
				type:'POST',
				data:{id:id,name:newName},
				success:function(data){
					
					if(data == '0')
					{
						alert('栏目名已存在');
						td.html(oldName);
					}else if(data == '1')
					{
						td.html(newName);
					}else
					{
						alert('修改失败');
					}
				},
				error:function(data){
					alert('数据异常');
				},
				dataType:'json',
			});

			td.one('dblclick',aaa);

		});

	}
	var id = 0;
	$(".del").on('click',function(){
		id = $(this).parents('.parent').find('.ids').html();
	});

	

    
    
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">是否删除</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" id="delete" class="btn btn-primary">确认</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$("#delete").click(function(){
      // alert(id);
      location.href="/admin/column/delete/"+id;
    });
</script>
@endsection