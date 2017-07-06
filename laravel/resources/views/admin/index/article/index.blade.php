@extends('admin.layout')


@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        文章
        <small>列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
        <li><a href="#">文章</a></li>
        <li class="active">列表</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">请选择文章模块</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
            @if(session('info'))
            	<div class="alert alert-danger">
            		{{session('info')}}
            	</div>
            @endif	
				
				<div class="row">
				
                <form action="/admin/article/index" method="post">
                {{csrf_field()}}
                	
                	<div class="col-md-3">
                	
                	<select class="form-control" name="selid">
                		@foreach($data1 as $k=>$v)
                		<option value="{{$v->id}}"  >{{$v->name}}</option>
                		@endforeach
                	</select>
                	</div>
               
             	<div class="col-md-3  ">
             	<input value="{{ $request['keywords'] or '' }}" type="text" name="keywords" class="form-control" placeholder="搜索文章">
					</div>
					<span class="input-group-btn">
						    <button type="submit" class="btn btn-info btn-flat">搜索</button>
						</span>	        
						    
				</form>
				
				</div>		 
						
               
				

                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>标题</th>
                  <th>描述</th>
                  <!-- <th>内容</th> -->
                  <!-- <th>上传时间</th> -->
                  
                  <th>作者</th>
                  <th>状态</th>
                  <th>操作</th>
                </tr>
                </thead>
                <tbody>
					
				@foreach($data as $key=>$val)
                <tr class="parent">
                  <td class="ids">{{$val->id}}</td>
                  <td class=""><a href="{{url('/admin/article/show')}}/{{$val->id}}">{{$val->atitle}}</a></td>
                  <td class="" style="overflow:hidden;white-space:nowrap;">{{$val->descript}}</td>
            
                  
                  <td class="">{{$val->aname}}</td>

                  <td ><button class="tds" >{{$val->status ==1 ? "开启" : "禁用"}}</button></td>
                  <td><a href="{{url('/admin/article/edit')}}/{{$val->id}}">编辑</a> | <a class="del" href="#" data-toggle="modal" data-target="#myModal">删除</a></td>
                </tr>
				@endforeach

              	</tbody>

              </table>
			{{ $data->appends($request)->links() }}	
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
	
		
	$('.tds').click(function(){
		var id = $(this).parent().parent('.parent').find('.ids').html();
		
        var sta ='';	
        var oldSta = $(this).html();
        if(oldSta == "开启")
    	{
    		oldSta = "禁用";
    	}else
    	{
    		oldSta = "开启";
    	}

		

    	if(oldSta == "开启")
    	{
    		sta = 1;
    	}else
    	{
    		sta = 0;
    	}
		$(this).html(oldSta);
    	 


  	
    	$.ajax('/admin/article/ajaxstatus',{
				type:'POST',
				data:{id:id,status:sta},
				success:function(data){
					
					
					if(data == '1')
					{
						
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

    });




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
      location.href="/admin/article/delete/"+id;
    });

    
 </script>
@endsection