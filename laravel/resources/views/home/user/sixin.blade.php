@extends('home.user.layout')

@section('user')

<div>
	<ul>
		@foreach($data as $k=>$v)


		<li>
		<div class="container-fluid" >
		<div class= "row" style="margin-top:10px; height:80px;">
			<div class="col-md-1" >
				<img class="img-circle" src="/uploads/avatar/default.jpg" width="50px" height="50px" alt="">
			</div>
			<div class="parent col-md-8">
				<div class="row">
					<div><span  class="sendname pull-left">{{$v->sendname}}</span><span class="pull-right">{{$v->stime}}</span> 
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div >
						{{$v->cons}}
					</div> 
					<div  class="btns pull-right">
						<a  href="javascript:;">回复</a>
					</div>
				</div>
				
			</div>
		</div>
		 
		</div>
		</li>
		
		@endforeach


	</ul>
	{{ $data->appends($request)->links() }}
</div>
		<div class="sendMsg-pop">
		    <a href="javascript:;" class="closePop"><em></em></a>
		    <div class="title">回复私信<span id="zuoz"></span></div>
		    <div>
		        <textarea id="cons" cols="43" rows="7"  style="resize:none"  placeholder='私信内容'></textarea>
		    </div>
		    <div class="btns">
		        <a href="javascript:;" class="send-button">发送</a>
		    </div>
		</div>



  @if(session('master'))
     <script type="text/javascript">
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    	var zuoz = '';

        $('.btns').click(function(){

 			zuoz = $(this).parent().parent('.parent').find('.sendname').html();

            $('.sendMsg-pop').css('display','block');
           
         });

        $('.send-button').click(function(){
            
            var cons = $('#cons').val();
           


            if(!cons)
            {
                alert('私信内容不能为空');
                return;
            }

            $.ajax('/home/user/sixin',{
                type:'POST',
                data:{zuoz:zuoz,cons:cons},
                success:function(data){
                    
                     if(data == '1')
                    {
                      alert('发送成功');
                       $('.sendMsg-pop').css('display','none');
                    }else
                    {
                        alert('发送失败');
                    }
                },
                error:function(data){
                    alert('数据异常');
                },
                dataType:'json',
            });
                
        });

        $('.closePop').click(function(){

            $('.sendMsg-pop').css('display','none');
        });
            
    </script>
    @else
    <script type="text/javascript">
        $('.btns').click(function(){

            $('#loginkk').click();
            
        });
    </script>  
    @endif 
@endsection