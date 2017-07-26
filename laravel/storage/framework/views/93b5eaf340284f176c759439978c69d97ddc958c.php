<?php $__env->startSection('content'); ?>
<nav class="yp-secNav">

			
    <div class="wrapper">
    	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/home/column/<?php echo e($val->id); ?>"  class=" "><h4><?php echo e($val->name); ?></h4></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="wrapper">
        
        <a href="/home/shop/index"  class=" "><h4>积分商城</h4</a>
      
    </div>
   
</nav>




 
<link rel="stylesheet" type="text/css" href="/leiphone/css/jquery.mcustomscrollbar.css" media="all" />
<link rel="stylesheet" type="text/css" href="/leiphone/css/calendar.css" media="all" />
<link rel="stylesheet" type="text/css" href="/leiphone/css/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="/leiphone/css/lunbo.css" media="all" />



 <!-- idx-main -->
<div class="lph-main idx-main clr">
	<div class="wrapper">
		<!-- 首页左侧 -->
		<div class="lph-left idx-left">
			<!-- 模块一 -->
			<div class="lph-picShow idx-picShow clr" >
   				 
				 <div class="lph-slider list-slider">
			        <a href="javascript:;" class="arrow prev" ><em></em></a>
			        <a href="javascript:;" class="arrow next" ><em></em></a>
			        <ul>
                        <?php $__currentLoopData = $data5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z=>$x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            <li>
			                <div class="pic">
			                    <a href="/home/show/<?php echo e($x->id); ?>" target="_blank">
			                        <img src="/uploads/article/<?php echo e($x->picture); ?>" width="388px" height="391px" alt="" />
			                    </a>
			                </div>
			                <div class="txt">
			                    <a href="/home/show/<?php echo e($x->id); ?>"><?php echo e($x->atitle); ?></a>
			                </div>
			                <div class="shadow"></div>
			            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			        </ul>
			        			<div class="btns">
			                        <a href="javascript:;" class="cur"></a>
			                        <a href="javascript:;" ></a>
			                        <a href="javascript:;" ></a>
			                        <a href="javascript:;" ></a>
			                    </div>
			    </div>




		    <div class="module">
		        <!-- 第一列 -->
		        <div class="rows clr rowOne ">
                    
                    <?php $__currentLoopData = $data4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys=>$values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

		            <div class="column picTxt">
		                <a href="/home/show/<?php echo e($values->id); ?>" target="_blank">
		                    <div class="pic">
		                        <img src="/uploads/article/<?php echo e($values->picture); ?>" width="195" height="195" />
		                    </div>
		                    <div class="txt">
		                        <?php echo e($values->atitle); ?>                   </div>
		                    <div class="cover"></div>
		                </a>
		                <div class="shadow"></div>
		            </div>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		        </div>
		        <!-- 第二列 -->
		        <!-- <div class="rows clr">
		                        <div class="column line picTxt">
		                <a href="/banner/homepageUrl/id/2507" target="_blank">
		                    <div class="pic">
		                        <img src="/leiphone/picture/595318f0b7f3e.png" width="195" height="195" />
		                    </div>
		                    <div class="txt">
		                        应急指南｜Petya 勒索病毒来袭，小白用户看这里                    </div>
		                    <div class="cover"></div>
		                </a>
		                <div class="shadow"></div>
		            </div>
		                        <div class="column colTxt">
		                <table>
		                    <tr>
		                        <td>
		                                                          <a href="/banner/homepageUrl/id/2248" target="_blank">CCF-GAIR 2017全球人工智能与机器人峰会                                                    </td>
		                    </tr>
		                </table>
		            </div>
		        </div> -->
		    </div>
		</div>

			<!-- 精选导读 -->
			<!-- 精选导读 -->
<div class="idx-selRead">
    <div class="title">精选导读</div>
    <div class="list">
        <ul class="clr">
        <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ke => $va): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="box">
                    <div class="pic">
                        <a href="/home/show/<?php echo e($va->id); ?>" target="_blank">
                            <img src="/uploads/article/<?php echo e($va->picture); ?>" alt="" />
                        </a>
                    </div>
                    <div class="txt">
                        <a href="/home/show/<?php echo e($va->id); ?>" target="_blank">
                            <?php echo e($va->atitle); ?>                       </a>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
              
        </ul>            
    </div>
</div>
<!-- 精选导读end -->
						<!-- 最新文章 -->
			<div class="lph-pageList index-pageList">
                <div class="title clr">最新文章 <div class='upd-num fr'><em></em>今日更新<span>16</span>篇</div></div>
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

            </div>	 
				<?php echo e($data1->appends($request)->links()); ?>

		</div>

		<!-- 首页右侧 -->
		<!-- 首页右侧 -->
<div class="lph-right">
    <!-- 业界资讯 -->
    <!-- 业界资讯 -->

<div class="traUni-news">
    <div class="box">
        <div class="box2">
            <div class="box3">
                <div class="refresh">

                    <div class="btns"><a href="javascript:;">刷新</a></div>
                </div>
                <div class="title"><span>业界资讯</span></div>
                <div class="list"> 
                    <div id="scroll2">
                        <ul class="cont">
                            <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="time" id="ctime"><?php echo e($value->ctime); ?></div>
                                <div class="headTit">   
                                    <a id="atitle" href="" target="_blank"><?php echo e($value->atitle); ?></a>
                                </div>  
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="scroll-bar" id='scroll-bar2'><b></b></div>
                                        <div class="cover"></div>
                </div>  
            </div>
        </div>
    </div>
</div>

                <div class="right-item-sw">
            <a href="https://www.leiphone.com/banner/updateClickNum/id/1221" target="_blank">
                <img src="/leiphone/picture/58e7471ad1b50.jpg" width="312" />
            </a>
        </div>
    
            <!-- 记者跑会日程 -->
       <!-- 硬创公开课 -->
    <div class="ycLesson">
    <div class="rComTitle">
        硬创公开课
        <!-- <a href="" target="_blank" class='more'>MORE<em></em></a> -->
    </div>
    <div class="main">
        <a href="https://www.leiphone.com/banner/updateClickNum/id/1114" target="_blank">
            <div class="tags"><img src="/leiphone/picture/news-tag.png" /></div>    
            <div class="pic">
                <img src="/leiphone/picture/595cbd592018c.jpg" width="312"  height="204" />
            </div>
            <div class="txt">
                用技术洞见未来            </div>
            <div class="shadow"></div>
        </a>
    </div>
</div>
    
    <!-- 商务专题 -->
    <div class="nearly-topic recmd-topic">
    <div class="rComTitle">
        推荐专题
        <a href="https://www.leiphone.com/specials" target="_blank" class='more'>MORE<em></em></a>
    </div>
    <div class="list">
        <div class="box">
            <ul class="clr">
                            <li>
                    <div class="pic">
                        <a href="https://www.leiphone.com/special/290/201706/593648bd4c134.html" target="_blank">
                            <img src="/leiphone/picture/593648bcac90e.jpg" alt="" width="260" height="150" />
                        </a>
                    </div>
                    <div class="txt">
                        <a href="https://www.leiphone.com/special/290/201706/593648bd4c134.html" target="_blank">WWDC 2017苹果开发者大会</a>
                    </div>
                </li>
                            
                        </ul>
        </div>
        <a href="javascript:;" class='arrow prev'><em></em></a>
        <a href="javascript:;" class='arrow next'><em></em></a>
    </div>
</div>
    <!-- 业界速递 -->
    <div class="express">
    <div class="rComTitle">
        业界速递
        <a  href="https://www.leiphone.com/category/sponsor" target="_blank" class='more'>MORE<em></em></a>
    </div>
    <div class="list">
        <ul>
                                    <li>
                <a href="https://www.leiphone.com/news/201707/VgWl9ofPhWHgjRur.html" target="_blank" class='txt'>
                    「2017全球人工智能与机器人峰会」 ...                </a>
                <div class="pic">
                    <a href="https://www.leiphone.com/news/201707/VgWl9ofPhWHgjRur.html" target="_blank">
                        <img src="/leiphone/picture/595c9fc6091c6.jpg" width="110"  height="65" />
                    </a>
                </div>
            </li>
                    
                    </ul>
    </div>
</div>
    <!-- 热门作者 -->
    <div class="hot-author">
    <div class="rComTitle">
        热门作者
        <!-- <a href="" target="_blank" class='more'>MORE<em></em></a> -->
    </div>
    <div class="list">
        <ul>
                        <li>
                <a href='https://www.leiphone.com/author/AI%E7%A0%94%E4%B9%A0%E7%A4%BE394' target="_blank" class="avater">
                    <img src="/leiphone/picture/5902f78b1a5bb_100_100.jpg" width="70" height="70" />
                </a>
                <div class="txt">
                    <a href="https://www.leiphone.com/author/AI%E7%A0%94%E4%B9%A0%E7%A4%BE394" target="_blank" class='name'>
                        AI研习社                        <em class='gold'></em>
                    </a>
                    <div class="intro">
                        聚焦数据科学，连接AI开发者。                    </div>
                </div>
            </li>
               
                    </ul>
    </div>
</div>
    <!--每周精选 -->
    <!-- 每周精选 -->
<div class="weekly-choice">
    <div class="rComTitle">
        每周精选
    </div>
    <div class="list">
                <ul class='picTxt'>
                        <li>
                <div class="pic">
                    <a href="https://www.leiphone.com/news/201704/GFYSvBeOdtpBHrLw.html" target="_blank">
                    <img src="/leiphone/picture/5902a5c22860f.jpg" width="260"  height="154" /></a>
                </div>
                <div class="txt">
                    <a href="https://www.leiphone.com/news/201704/GFYSvBeOdtpBHrLw.html"  target="_blank">
                        GMIC2017 | 李开复：AI时代创业必须思考的4个问题                    </a>
                </div>
            </li>
                 
                    </ul>
             </div>
</div>
<!-- 每周精选 end -->
    <!-- 优质评论 -->
<div class="good-comments">
    <div class="rComTitle">
        优质评论
    </div>
    <div class="list clr">
        <div class="box " id='demo'>
            <ul class="cont">   
                                                <li>
                    <div class="cmt">
                        <em class='arrow'></em>
                        这群人无非就是为自己的利益摇旗呐喊而已，道德？站在道德道德高地做些男盗女娼 ...                    </div>
                    <div class="perMsg clr">
                        <a  href="https://home.leiphone.com/uprofile/5023468"  target="_blank" target="_blank" class="avater" rel="nofollow">
                            <img src="/leiphone/picture/68_avatar_pic_40_40.jpg" width="40"  height="40" />
                        </a>
                        <div class="txt">
                            <div class="rows clr">
                                <a  href="https://home.leiphone.com/uprofile/5023468"  target="_blank" class='name' target="_blank" rel="nofollow"><span>阿普唑伦</span>评论文章：</a>
                                <span class='time'>06月05日</span>
                            </div>
                            <div class="artHeadTit">
                                <a href="https://www.leiphone.com/news/201706/0L3VgQAIqZFQBz4q.html" target="_blank">
                                    撕毁《巴黎协定》，半个硅谷又双炸锅了                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                                             
                            </ul>
        </div>
        <div class="scroll-bar s2 " id='scrollBar'>
            <b></b>
        </div>
    </div>
</div>
    <!-- 热门试用 -->
        <!-- 热门搜索 -->
        <div class="serKesy-list">
    <div class="rComTitle">
        热门搜索
    </div>
    <div class="list clr">
                <a href="https://www.leiphone.com/tag/HTC" target="_blank">HTC</a>
                <a href="https://www.leiphone.com/tag/车联网" target="_blank">车联网</a>
                <a href="https://www.leiphone.com/tag/众筹" target="_blank">众筹</a>
                <a href="https://www.leiphone.com/tag/硬创公开课" target="_blank">硬创公开课</a>
                <a href="https://www.leiphone.com/tag/Xbox One" target="_blank">Xbox One</a>
                <a href="https://www.leiphone.com/tag/Win10" target="_blank">Win10</a>
                <a href="https://www.leiphone.com/tag/工信部" target="_blank">工信部</a>
                <a href="https://www.leiphone.com/tag/Moto 360" target="_blank">Moto 360</a>
                <a href="https://www.leiphone.com/tag/自动驾驶汽车" target="_blank">自动驾驶汽车</a>
                <a href="https://www.leiphone.com/tag/树莓派" target="_blank">树莓派</a>
                <a href="https://www.leiphone.com/tag/小米电视" target="_blank">小米电视</a>
            </div>
</div>

</div>
	</div>
</div>

<!-- <script src="/leiphone/js/jquery.js"></script> -->
<!-- <script src="/leiphone/js/jquery.mcustomscrollbar.concat.min.js"></script> -->
<!-- <script src="/leiphone/js/calendar.js"></script> -->

<!-- js END -->


<div id="lph-footer-gotoBar">
    <div class="gotoTop">   
        <a href="javascript:;" class="top" data-goto="0" data-start="100"><em></em></a>
    </div>
</div>




 <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var skip = 0;
   
    $('.btns').click(function(){

        skip+=6;
        $.ajax('/home/refresh',{
                type:'POST',
                data:{skip:skip},
                

                success:function(data){
                    
                 var scr = $("#scroll2>ul");
                    
                 scr.empty();
               
                var nei ="";
                 
                $.each(data,function(i,n){

                nei += "<li><div class='time' id='ctime'>"+n.ctime+"</div><div class='headTit'><a id='atitle' href='/home/show/"+n.id+"' target='_blank'>"+n.atitle+"</a></div></li>";
                
                // console.log(nei);
                });
                
                scr.append(nei);
                 

                },
                error:function(data){
                    alert('数据异常');
                },
                dataType:'json',
            });
    });
    </script>

 
<div class="yp-footer-link">
<div class="wrapper">
<div class="tab_tit clr">
<a href="javascript:;" class='cur'>友情链接</a>
</div>
<div class="tab_con">
<ul>
<li class='cur'>
<?php $__currentLoopData = $dataz1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="<?php echo e($v->weburl); ?>" target="_blank"><?php echo e($v->webname); ?></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>