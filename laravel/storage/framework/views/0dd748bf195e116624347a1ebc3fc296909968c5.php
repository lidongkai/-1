<?php $__env->startSection('content'); ?>

<link rel="stylesheet"  type="text/css" href="/leiphone/css/ma.css" />
<link rel="stylesheet"  type="text/css" href="/leiphone/css/com.css" />


<nav class="yp-secNav">

			
    <div class="wrapper">
    	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/home/column/<?php echo e($val->id); ?>"  class=" "><?php echo e($val->name); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   
</nav>
		<div class="lph-pageList index-pageList container" >
                
                <div class="list">
                    <ul class="clr">
                      
                        
            					<?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php 
                                $res = \DB::table('users')->where('username',$v->aname)->first();
                               
                                 ?>
                            
                                <li>
                                    <div class="box">
                                        <div class="img">
                                            <a href="" date-category="40" class='sort znyj'><?php echo e($v->cname); ?></a>
                                            <a href=""  target="_blank">
                                                <img class='lazy' src="/uploads/article/<?php echo e($v->picture); ?>" title="<?php echo e($v->atitle); ?>" alt="" />
                                            </a>
                                        </div>
                                        <div class="word">
                                            <h3>
                                            <a href="/home/show/<?php echo e($v->id); ?>" target="_blank" title="<?php echo e($v->atitle); ?>" class="headTit">
                                                <?php echo e($v->atitle); ?>            </a>
                                            </h3>
                                            <div class="des">
                                               <?php echo e($v->descript); ?>            </div>
                                            <div class="msg clr">
                                                <a href="" target="_blank" class="aut" rel="nofollow">
                                                    <img src="/uploads/avatar/<?php echo e($res->photo); ?>" width="50" height="50" alt=""/><?php echo e($v->aname); ?>               </a>
                    
                                                <div class="time"><?php echo e($v->ctime); ?></div>
                                                <div class="tags">
                                                    <em></em>
                                                                       <!--  <a href="" title="智能音箱"  target="_blank">智能音箱</a><a href="" title="echo"  target="_blank">echo</a><a href="" title="Dueros"  target="_blank">Dueros</a>   -->                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
            					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            		
                    </ul>
									
           
                </div>
                    <?php echo e($data1->appends($request)->links()); ?>

            </div>	 	


<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>