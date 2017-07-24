@extends('home.user.layout')

@section('user')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <b style="font-size:20px">我的文章</b>
        <small>列表</small></h1>
      
    </section>
	<div class="box-body">
            @if(session('info'))
            	<div class="alert alert-danger">
            		{{session('info')}}
            	</div>
            @endif	 

     	<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
        
          <th>文章名</th>
          <th>状态</th>
          <th>操作</th>
           
        </tr>
        </thead>
        <tbody>       
		@foreach($data as $k => $v)
		<tr class="parent">
	      <input class="hidid" type="hidden" value="{{$v->id}}">         
		  <td class="name"><a href="/home/show/{{$v->id}}">{{$v->atitle}}</a></td>
		  <td class="name">{{$v->status ==1 ? "正常显示" : "禁用"}}</td>
		  <td><a href="{{url('/home/article/edit')}}/{{$v->id}}">编辑</a> | <a class="del" href="#" data-toggle="modal" data-target="#myModal">删除</a></td>
		</tr>
		@endforeach
		</tbody>	
        </table>
	</div>

	 
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">您确定删除吗?</h4>
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
	var id = 0;
	$(".del").on('click',function(){
		id = $(this).parent().parents('.parent').find('.hidid').val();
	});

$("#delete").click(function(){
   		// alert(id);
      location.href="/home/article/delete/"+id;
    });
</script>
@endsection