<?php $__env->startSection('user'); ?>

<div>
	<ul>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


		<li>
		<div class="container-fluid" >
		<div class= "row" style="margin-top:10px; height:80px;">
			<div class="col-md-1" >
				<img class="img-circle" src="/uploads/avatar/default.jpg" width="50px" height="50px" alt="">
			</div>
			<div class="parent col-md-8">
				<div class="row">
					<div><span  class="sendname pull-left"><?php echo e($v->sendname); ?></span><span class="pull-right"><?php echo e($v->stime); ?></span> 
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div >
						<?php echo e($v->cons); ?>

					</div> 
					<div  class="btns pull-right">
						<a  href="javascript:;">回复</a>
					</div>
				</div>
				
			</div>
		</div>
		 
		</div>
		</li>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	</ul>
	<?php echo e($data->appends($request)->links()); ?>

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



  <?php if(session('master')): ?>
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
    <?php else: ?>
    <script type="text/javascript">
        $('.btns').click(function(){

            $('#loginkk').click();
            
        });
    </script>  
    <?php endif; ?> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>