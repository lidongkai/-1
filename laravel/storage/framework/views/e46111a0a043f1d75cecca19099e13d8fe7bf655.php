<?php $__env->startSection('user'); ?>
  
<link rel="stylesheet" type="text/css" href="/leiphone/css/leiphone.css"  />
	<div class="contRtModel2">
        <div class="lphMebBox yahei partBox">

            
<div class="hd clr">
    <div class="l-mess">
        <div class="face">
            <a href="/home/user/detail">
                <img src="/uploads/avatar/<?php echo e(session('master')->photo); ?>" alt="" width="60">
            </a>
        </div>
        <div class="face-name">
            <div class="nickname">
                <a href="">
                    <?php echo e(session("master")->username); ?>               </a>
            </div>
            <p>
                            </p>
        </div>
    </div>
    <div class="m-mess">
        <p>积分：<?php echo e(session('master')->score); ?><a href="https://home.leiphone.com/help" class="q">?</a></p>
<!--        <p>雷点：</p>-->
    </div>
    <div class="r-mess">
        <em></em>
        phpweb网站开发工程师    </div>

</div>
<div class="noRead-mess">
    <span><em></em>您有<a href="/home/user/sixin"><?php echo e($res); ?></a>条未读消息</span>
</div>

            <div class="main-list">
                <div class="list CollectList">
                    <h1>最新收藏</h1>
                                        <ul>
                                                    <li class="first">
                                <div class="tit">
                                    <span class="name">
                                        <a href="https://www.leiphone.com/news/201706/83X9xXtyltG9IYyZ.html">观点 | 微软漏洞防不胜防，应当推广国产基础软件</a>
                                    </span>
                                    <span class="time">
                                        2017-06-28 18:46:40                                    </span>
                                </div>
                                <div class="descri">
                                    在6月27日，新的病毒“Petrwrap”由乌克兰和俄罗斯开始爆发，逐渐蔓延到欧洲多国                                </div>
                            </li>
                                            </ul>
                    <div class="more">
                        <a href="https://home.leiphone.com/interact/collect/site/leiphone">查看更多1条收藏</a>
                    </div>
                                    </div>
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
                    <div class="more">
                        <a href="https://home.leiphone.com/interact/comment/site/leiphone">查看更多1条评论</a>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>    



<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>