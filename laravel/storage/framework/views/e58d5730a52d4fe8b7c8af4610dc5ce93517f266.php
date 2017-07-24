<?php $__env->startSection('content'); ?>


<nav class="yp-secNav">

			
    <div class="wrapper">
    	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/home/column/<?php echo e($val->id); ?>"  class=" "><?php echo e($val->name); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   
</nav>
<link rel="stylesheet" type="text/css" href="/leiphone/css/list.css" media="all" />

<div class="lph-main clr">
    <div class="wrapper">
        <div class="lph-left list-left">
            <!-- 模块一 -->
            <div class="lph-picShow list-picShow clr">
                <div class="lph-slider list-slider">
                    <a href="javascript:;" class="arrow prev"><em></em></a>
                    <a href="javascript:;" class="arrow next"><em></em></a>
                    <ul>
                                    <li>
                            <div class="pic">
                                <a href="/banner/homepageUrl/id/1836" target="_blank">
                                    <img src="/uploads/img/1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="txt">
                                <a href="/banner/homepageUrl/id/1836">黑客 Jayson E.Street 讲述｜我如何一边搭飞机一边抢银行</a>
                            </div>
                            <div class="shadow"></div>
                        </li>
                                    <li>
                            <div class="pic">
                                <a href="/banner/homepageUrl/id/1833" target="_blank">
                                    <img src="/leiphone/picture/583c0257dd26d.jpg" alt="" />
                                </a>
                            </div>
                            <div class="txt">
                                <a href="/banner/homepageUrl/id/1833">“黑客老王”联手“乌云一哥”重出江湖，为黑客“造梦”的幻云有多牛？</a>
                            </div>
                           <div class="shadow"></div>
                        </li>
                                    <li>
                            <div class="pic">
                                <a href="/banner/homepageUrl/id/2412" target="_blank">
                                    <img src="/leiphone/picture/59195d17c133f.png" alt="" />
                                </a>
                            </div>
                            <div class="txt">
                                <a href="/banner/homepageUrl/id/2412">勒索蠕虫病毒新变种 WannaCry 2.0 究竟长啥样？怎么防？</a>
                            </div>
                            <div class="shadow"></div>
                        </li>
                                </ul>
                    <div class="btns">
                                    <a href="javascript:;" class="cur"></a>
                                    <a href="javascript:;" ></a>
                                    <a href="javascript:;" ></a>
                                </div>
                </div>
                <div class="list-topPush">
                <ul>
                                <li  class="first">
                        <a href="/banner/homepageUrl/id/2394" target="_blank" title="">
                            <img src="/uploads/img/1.jpg" width="260" height="156" >
                        </a>
                        
                        <a href="/banner/homepageUrl/id/2394" target="_blank" class="pop">
                            <table>
                                <tbody>
                                <tr>
                                    <td>探秘 | 比朝鲜核武器更炸裂更神秘的，是朝鲜黑客部队</td>
                                </tr>
                                </tbody>
                            </table>
                        </a>
                    </li>
                                <li >
                        <a href="/banner/homepageUrl/id/2393" target="_blank" title="">
                            <img src="/leiphone/picture/59101d350e824.jpg" width="260" height="156" >
                        </a>
                    
                        <a href="/banner/homepageUrl/id/2393" target="_blank" class="pop">
                            <table>
                                <tbody>
                                <tr>
                                    <td>我有个朋友叫残废</td>
                                </tr>
                                </tbody>
                            </table>
                        </a>
                    </li>
                            </ul>
                </div>
            </div>
            <!-- 最新文章 -->
            <div class="lph-pageList list-pageList">
				
                <H1 class="title"><?php echo e($hname); ?></H1>
				
                <div class="list">
                    <ul class="clr">
                        
						<?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<div class="box">
								<div class="img">
									<a href="" date-category="26" class='sort wlaq'><?php echo e($v->cname); ?></a>
									<a href=""  target="_blank">
										<img class='lazy' data-original="" src="/uploads/article/<?php echo e($v->picture); ?>" title="赛门铁克将收购以色列安全公司Fireglass" alt="" />
									</a>
								</div>
								<div class="word">
									<h3>
									<a href="/home/show/<?php echo e($v->id); ?>" target="_blank" title="赛门铁克将收购以色列安全公司Fireglass" class="headTit">
										<?php echo e($v->atitle); ?>			</a>
									</h3>
									<div class="des">
										<?php echo e($v->descript); ?>			</div>
									<div class="msg clr">
										<a href="https://www.leiphone.com/author/zhouxiang759" target="_blank" class="aut" rel="nofollow">
											<img src="picture/7_100_100_1.jpg" width="50" height="50" alt=""/>周翔				</a>
										<div class="time"><?php echo e($v->ctime); ?></div>
										<div class="tags">
											<em></em>
													            <a href="https://www.leiphone.com/tag/%E8%B5%9B%E9%97%A8%E9%93%81%E5%85%8B" title="赛门铁克"  target="_blank">赛门铁克</a><a href="https://www.leiphone.com/tag/%E4%BB%A5%E8%89%B2%E5%88%97" title="以色列"  target="_blank">以色列</a><a href="https://www.leiphone.com/tag/fireglass" title="fireglass"  target="_blank">fireglass</a><a href="https://www.leiphone.com/tag/%E7%BD%91%E7%BB%9C%E5%AE%89%E5%85%A8" title="网络安全"  target="_blank">网络安全</a>		            				</div>
									</div>
								</div>
							</div>
						</li>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						  </ul>
                    </div>
                    <?php echo e($data1->appends($request)->links()); ?>

            </div>


        </div>
        <div class="lph-right">
            <div class="right-item-sw">
        <a href="javascript:void(0)" target="_blank">
            <img src="/leiphone/picture/583e79391224d.jpg" alt='' width="312" height="322" />
        </a>
    </div>
        

    
        <!-- start -->
    <div class="ycLesson-item">
        <div class="title">最新硬创公开课预告</div>
        <div class="main">
            <div class="slider">
                <ul>
                                        <li>
                        <a href="http://www.leiphone.com/news/201704/aglsw3o4E05NCckh.html?type=preview" target="_blank">
                            <div class="pic">
                                <img src="picture/58f9af0eefdbd.jpg"/>
                            </div>
                            <div class="name">硬创公开课 AR/VR 领域往期实录</div>
                        </a>
                    </li>
                                        <li>
                        <a href="http://www.leiphone.com/news/201703/TamDONTdXy2tyd4w.html?type=preview" target="_blank">
                            <div class="pic">
                                <img src="picture/58f9aee2d3bb2.jpg"/>
                            </div>
                            <div class="name">硬创公开课人工智能领域往期实录</div>
                        </a>
                    </li>
                                        <li>
                        <a href="http://www.leiphone.com/news/201703/lDZpxd1XYBXfhy5A.html" target="_blank">
                            <div class="pic">
                                <img src="picture/58f9ae7735b29.jpg"/>
                            </div>
                            <div class="name">硬创公开课智能驾驶领域往期实录</div>
                        </a>
                    </li>
                                    </ul>
                <div class="btns">
                                            <a href="javascript:;" class="curcur"></a>
                                            <a href="javascript:;" class="cur"></a>
                                            <a href="javascript:;" class="cur"></a>
                                    </div>
            </div>
            <div class="past-ycLesson">
                <div class="tit">往期公开课</div>
                <div class="list">
                                        <p>
                        <a href="https://www.leiphone.com/news/201706/i8kpf4Ohmd4OU1V7.html" target="_blank" title="万字实录：从DDCTF大赛看当前网络安全新趋势 | 硬创公开课总结文＋视频（下篇）">
                            万字实录：从DDCTF大赛看当前网络安全新趋势 | 硬创公开课总结文＋视频（下篇）                        </a>
                    </p>
                                        <p>
                        <a href="https://www.leiphone.com/news/201706/atTNBW82iSNafko4.html" target="_blank" title="万字实录：从DDCTF大赛看当前网络安全新趋势 | 硬创公开课总结文＋视频（上篇）">
                            万字实录：从DDCTF大赛看当前网络安全新趋势 | 硬创公开课总结文＋视频（上篇）                        </a>
                    </p>
                                        <p>
                        <a href="https://www.leiphone.com/news/201705/4LSuhsQl7XCMx4Fy.html" target="_blank" title="Android原生保护壳的原理与实现 | 硬创公开课总结文+视频">
                            Android原生保护壳的原理与实现 | 硬创公开课总结文+视频                        </a>
                    </p>
                                        <p>
                        <a href="https://www.leiphone.com/news/201704/4qTw6sbX8AlTlbOs.html" target="_blank" title="白帽黑客教主 TK 告诉你，黑客的游戏 CTF 究竟是什么  | 硬创公开课总结文+视频">
                            白帽黑客教主 TK 告诉你，黑客的游戏 CTF 究竟是什么  | 硬创公开课总结文+视频                        </a>
                    </p>
                                        <p>
                        <a href="https://www.leiphone.com/news/201703/IFqvJU6OPebLOLTy.html" target="_blank" title="百度讲师：以struts2 为例，教你打造一款互联网思维的安全防御 | 硬创公开课（附讲稿全文和PPT）">
                            百度讲师：以struts2 为例，教你打造一款互联网思维的安全防御 | 硬创公开课（附讲稿全文和PPT）                        </a>
                    </p>
                                    </div>
                <div class="more">
                    <a href="https://www.leiphone.com/special/ycopen?category=letshome" target="_blank">更多</a>
                </div>
            </div>
        </div>
    </div>
        <!--end -->

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
                    <img src="picture/5902a5c22860f_1.jpg" width="260"  height="154" /></a>
                </div>
                <div class="txt">
                    <a href="https://www.leiphone.com/news/201704/GFYSvBeOdtpBHrLw.html"  target="_blank">
                        GMIC2017 | 李开复：AI时代创业必须思考的4个问题                    </a>
                </div>
            </li>
                        <li>
                <div class="pic">
                    <a href="https://www.leiphone.com/news/201704/xDjQIZBKqQREZtcr.html" target="_blank">
                    <img src="picture/590035989d119_1.png" width="260"  height="154" /></a>
                </div>
                <div class="txt">
                    <a href="https://www.leiphone.com/news/201704/xDjQIZBKqQREZtcr.html"  target="_blank">
                        从环视ADAS到自动驾驶，纵目科技是如何布局的？                    </a>
                </div>
            </li>
                    </ul>
        <ul class='justTxt'>
                        <li>
                <a href="https://www.leiphone.com/news/201704/18Yqcnly6A6umLRQ.html" target="_blank">
                    <em></em>龙芯推出新一代处理器，离 Intel 还有多大差距？                </a>
            </li>
                        <li>
                <a href="https://www.leiphone.com/news/201704/igL2jfmpN6Srr5kj.html" target="_blank">
                    <em></em>钱晨：为什么“智能音箱”可能会被做臭？                </a>
            </li>
                        <li>
                <a href="https://www.leiphone.com/news/201704/qkNCCDKam4oe5IEW.html" target="_blank">
                    <em></em>我知道的周航                </a>
            </li>
                        <li>
                <a href="https://www.leiphone.com/news/201703/oULGpAzuTAuejf5G.html" target="_blank">
                    <em></em>小蓝单车李刚：滴滴带给我的绝望已经过去了                </a>
            </li>
                        <li>
                <a href="https://www.leiphone.com/news/201703/RS2qMN2KMQwhZoiB.html" target="_blank">
                    <em></em>亚马逊的秘密部队和差点成笑话的Amazon Echo                </a>
            </li>
                    </ul>
             </div>
</div>
<!-- 每周精选 end -->

            <div class="weekly-choice hotNew-article">
        <div class="rComTitle">
            热门文章
        </div>
        <div class="list">
            <ul class="justTxt">
                                    <li>
                        <a href="https://www.leiphone.com/news/201706/MTeY9NwP05ARN3pA.html" target="_blank">
                            <em></em>传 VPN 应用明日起将全面禁止，安卓、苹果无一幸免 </a>
                    </li>
                                    <li>
                        <a href="https://www.leiphone.com/news/201706/CNxsOx8KUFq8fiGa.html" target="_blank">
                            <em></em>20秒色情小电影，骗了宅男6个亿 </a>
                    </li>
                                    <li>
                        <a href="https://www.leiphone.com/news/201706/PhR0KtsguO6LJMAR.html" target="_blank">
                            <em></em>“教材涉黄”案水落石出，牵出网络诈骗产业链 </a>
                    </li>
                                    <li>
                        <a href="https://www.leiphone.com/news/201706/xTPFnX0LwfS84I6j.html" target="_blank">
                            <em></em>突发 | 欧洲遭到新一轮未知病毒冲击，乌克兰总理都中招了 </a>
                    </li>
                                    <li>
                        <a href="https://www.leiphone.com/news/201706/D8bL3w7hOIpXltf6.html" target="_blank">
                            <em></em>从现在开始，如果使用网络做这10件事就是违法犯罪！ </a>
                    </li>
                                    <li>
                        <a href="https://www.leiphone.com/news/201706/gv6mkWKajAI3rFgf.html" target="_blank">
                            <em></em>应急指南｜新一轮勒索病毒来袭，小白用户看这里 </a>
                    </li>
                                    <li>
                        <a href="https://www.leiphone.com/news/201707/SkLmKRnWQlc0XEZb.html" target="_blank">
                            <em></em>打“农药”刷金币：我的队友原来是个机器人 </a>
                    </li>
                                    <li>
                        <a href="https://www.leiphone.com/news/201706/BEPieZE7bo2K4jNv.html" target="_blank">
                            <em></em>两只蚂蚁打得过一头大象吗？这两家网络安全公司的老板想试试 </a>
                    </li>
                            </ul>
        </div>
    </div>
        <div class="serKesy-list">
    <div class="rComTitle">
        热门搜索
    </div>
    <div class="list clr">
                <a href="https://www.leiphone.com/tag/苹果" target="_blank">苹果</a>
                <a href="https://www.leiphone.com/tag/联想" target="_blank">联想</a>
                <a href="https://www.leiphone.com/tag/投资" target="_blank">投资</a>
                <a href="https://www.leiphone.com/tag/Google play" target="_blank">Google play</a>
                <a href="https://www.leiphone.com/tag/发布会" target="_blank">发布会</a>
                <a href="https://www.leiphone.com/tag/游戏" target="_blank">游戏</a>
                <a href="https://www.leiphone.com/tag/团购" target="_blank">团购</a>
                <a href="https://www.leiphone.com/tag/Galaxy S6" target="_blank">Galaxy S6</a>
                <a href="https://www.leiphone.com/tag/操作系统" target="_blank">操作系统</a>
                <a href="https://www.leiphone.com/tag/信息安全" target="_blank">信息安全</a>
                <a href="https://www.leiphone.com/tag/爱奇艺" target="_blank">爱奇艺</a>
            </div>
</div>
</div>
        <!-- lph-right -->
    </div>
</div>


  


<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>