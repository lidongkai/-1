<?php $__env->startSection('user'); ?>
<link rel="stylesheet" type="text/css" href="/leiphone/css/leiphone.css"  />
<div class="contRtModel2">
    <div class="lphMebBox yahei partBox">
		<div class="main-list">
			<div class="list commentList">
			    <h1>最新评论</h1>
			        <ul>
			            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ke=>$va): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            <?php 
			            $res = \DB::table('articles')->where('id',$va->aid)->first();
			             ?>
			            <li>
			                <div class="tit">
			                    <span class="name">
			                        <a href="/home/show/<?php echo e($res->id); ?>"><?php echo e($res->atitle); ?></a>
			                    </span>
			                    <span class="time">
			                        <?php echo e($va->ctime); ?>                                </span>
			                </div>
			                <div class="descri">
			                    <em></em><?php echo e($va->comment); ?>                           
			                </div>
			            </li>
			            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			        </ul>
			</div>
			<?php echo e($data->appends($request)->links()); ?>

		</div>	
	</div>	       
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>