<?php $__env->startSection('content'); ?>
<?php if(session('info')): ?>
  <div class="alert alert-danger">
    <?php echo e(session('info')); ?>

  </div>
<?php endif; ?>  
<link rel="stylesheet" type="text/css" href="/leiphone/css/artcont_web_admin_2.css">
    <link rel="stylesheet" type="text/css" href="/leiphone/css/main_2.css" media="all" />
<div class="wrapper">
    <div class="lph-Nowsite clr">
        <a href='/home/index'><em class='ico'></em></a>
        <em class='arro'></em>
        <a href="/home/column/<?php echo e($data->cid); ?>"><?php echo e($data->cname); ?></a>
        <em class='arro'></em>
        <a href="#">正文</a>
    </div>
</div>

<!-- 发送私信 -->
<div class="sendMsg-pop">
    <a href="javascript:;" class="closePop"><em></em></a>
    <div class="title">发私信给<span id="zuoz"><?php echo e($data->aname); ?></span></div>
    <div>
        <textarea id="cons" cols="43" rows="7"  style="resize:none"  placeholder='私信内容'></textarea>
    </div>
    <div class="btns">
        <a href="javascript:;" class="send-button">发送</a>
    </div>
</div>
<!-- 评论数 -->
<a href="#lph-comment-166802" class="cmtNums" >
    <em></em>
    <p>0</p>
</a>
<div class="lph-overlay"></div>
    <!-- 文章详情页 -->
    <div class="lphArticle-detail" data-article_url="https://www.leiphone.com/news/201707/xSx7Xv8cktsNpyaq.html"
    data-article_id="166802" data-article_unique="xSx7Xv8cktsNpyaq"
    data-article_seo_title="除了是全球首款L3自动驾驶的量产车，奥迪A8还带来了哪些亮点？ | 雷锋网" data-article_seo_keywords="奥迪A8,奥迪A8L,Audi AI,自动驾驶,L3"
    data-article_seo_description="新车搭载Level 3自动驾驶技术、主动电子悬挂系统、混合动力引擎，以及全新的娱乐信息系统，处处体现着这家德国汽车厂商眼中的“未来”。" data-comment_type="2"
    data-collect_type="2" data-author_id="23772"
    data-author_name="思佳" data-article_cmtNum="0">
    <div class="article-template">
            <div class="article-title">
                <div class="inner">
                    <h1 class="headTit">
                        <?php echo e($data->atitle); ?>                </h1>
                        <div class="msg">
                            <table>
                                <tr>
                                    <td class="aut">
                                        本文作者：<a href="https://www.leiphone.com/author/sijia893" target="_blank" rel="nofollow"><?php echo e($data->aname); ?></a>
                                    </td>
                                                                <td class="time">
                                        <?php echo e($data->ctime); ?>                           </td>
                                                                                            <!-- <td class="tags">
                                        <em></em> -->
                                                                                                                                    <!-- </td> -->
                                                              <!--   <td class='cmtNum'>
                                        <a href="https://www.leiphone.com/news/201707/xSx7Xv8cktsNpyaq.html#lph-comment-166802">0条评论</a>
                                    </td> -->
                                </tr>
                            </table>
                        </div>
                        <div class="article-lead">
                                <em></em><?php echo e($data->descript); ?>                
                        </div>
                </div>
            </div>

        <div class="info">
                    <div class="wrapper clr">
                        <div class="article-left">

                        <div class="lph-article-comView">
                                                    <!-- 正文内容 -->
                            <?php echo $data->editorValue; ?>

                            
                                                                          
                                                  <!-- 正文内容结束 -->
                        </div>

                        <!-- 分享 -->
                        <div class="pageActive clr">
                            <div class="mark-like-btn ">
                                <a class="collect collect-no" href="javascript:;"><i></i><span>0</span>人收藏</a>
                            </div>
                            <!-- Baidu Button BEGIN -->
                            <div  class="bdsharebuttonbox"  data-tag="share_166802">
                                <span class="s-txt">分享：</span>
                                <a href="javascript:void()" onclick="openYNote('https://www.leiphone.com/news/201707/xSx7Xv8cktsNpyaq.html','除了是全球首款L3自动驾驶的量产车，奥迪A8还带来了哪些亮点？', 'https://static.leiphone.com/uploads/new/article/pic/201707/5964ec6895830.jpg','leiphone','除了是全球首款L3自动驾驶的量产车，奥迪A8还带来了哪些亮点？')" class="youdao " title="收藏此篇文章到有道云笔记"><i></i></a>
                                <a class="bds_tsina weibo-btn  " data-cmd="tsina"  title="分享到新浪微博"></a>
                                <a class="weixin-btn bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                                <a class="bds_more more-btn" data-cmd="more"></a>
                            </div>
                            <script type="text/javascript">
                                //在这里定义bds_config
                                // var bds_config = {'snsKey':{'tsina':'2475906690'}};
                                // var qcode = {
                                //     api : "http://qr.liantu.com/api.php?text=",
                                //     url :  window.location.href,
                                //     exist : false,
                                //     create : function(){
                                //         if(!this.exist){
                                //             var image = document.createElement('img');
                                //             image.src = this.api + this.url;
                                //             image.width = 120;
                                //             this.exist = true;
                                //             return image;
                                //         }
                                //     }
                                // };
                            </script>

                        </div>
                        <!-- 相关文章 -->
                        <!-- 相关文章 start -->
            

                <!-- 相关文章 end -->


                        <!-- 推荐文章 -->
                        <div class="realted-article clr recmdArticle" data-article_id="166802">
                            <div class="list">
                                <ul>
                                </ul>
                            </div>
                        </div>
                        <!-- 广告 -->
                        
                        <!-- 文章 评论  -->
                                    <!-- 评论 -->
                <div class="article-comment lp-comment" id="lph-comment-166802">
                    <div class="useComJs" >
                        <!-- <input id="lp_item_id" type="hidden" name="item_id" value="166802">
                            <input id="lp_item_type" type="hidden" name="type" value="2"> -->

                        <div class="h2 clr">
                            <h2>文章点评：</h2>
                            <!-- <strong class="h2-tip">
                                （您需要<a class="c-log" href="javascript:openPop('#lp-login-pop');">登录</a>后才能评论 <a href="https://home.leiphone.com/main/register" class="c-reg">没有账号</a> ？）</strong>
                            -->        
                        </div>
                        <div class="submit clr commentForm" id="">
                            <form action="/home/article/comment" method="post">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="aid" value="<?php echo e($data->id); ?>">
                                <div class="text">
                                    <textarea name="comment" placeholder="我有话要说……" ></textarea>
                                </div>
                                <div class="sub clr publishtosina">
                                    
                                    
                                <div class="qqFace" style="position:absolute; display:none; z-index:10"></div>
                                <button type="submit" title="提交">提交</button>
                                </div>
                            </form>
                        </div>
                       
                        <div class="words">
                            <h3><strong>最新评论</strong></h3>
                        <ul class="comment-say">
                            <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php 
                            $res = \DB::table('users')->where('id',$val->uid)->first();
                             ?>
                            <li class="comment-say-li clr comment-level-1">
                                <div class="csl-img">
                                    <a href=""><img src="/uploads/avatar/<?php echo e($res->photo); ?>" width="40" height="40"></a>
                                </div>

                                <div class="csl-body">
                                    <div class='cont'>
                                        <a href=""><?php echo e($res->username); ?></a><span class="time"><?php echo e($val->ctime); ?></span>
                                    </div>
                                    <div class="des"><?php echo e($val->comment); ?></div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        
                        </div>
                    </div>
                </div>
                <!-- 评论 -->



                </div>

                <script>
                var codeAuthor_id   = "sijia893";
                var author_id       = "23772";
                 </script>

            <div class="article-right">
                 <div class="aboutAur-main">
                        <div class="aboutAur-msg">
                        <?php 
                        $res1 = \DB::table('users')->where('username',$data->aname)->first();
                         ?>
                            <a href="个人详情" class="avater" target="_blank" rel="nofollow">
                                <img src="/uploads/avatar/<?php echo e($res1->photo); ?>" alt=""  width="80" height="80" />
                            </a>
                            <div class="name">
                                <a href="" target="_blank" rel="nofollow"><span><?php echo e($data->aname); ?></span><em class='gold'></em></a>
                            </div>
                            <p class='profession'>编辑</p>
                            <div class="saying">
                                <em class='l-quote'></em>
                                <span>个性签名</span>
                                <em class='r-quote'></em>
                            </div>
                            <div class="operate-btn">
                                <table>
                                    <tr>
                                                                                        <td>
                                            <a href="mailto:tangsijia@leiphone.com" class="eml sub_a" rel="nofollow"><em></em></a>
                                        </td>
                                                                                    </tr>
                                </table>
                            </div>
                            <div class="btns">
                                <a href="javascript:;">发私信</a>
                            </div>
                        </div>

                        
                       
                       
                            <!-- 作者的文章 -->
                
                        <div class="mouthHot-article">
                            <div class="title">当月热门文章</div>
                                <div class="list">
                                    <ul>
                                        <li>
                                <a href="https://www.leiphone.com/news/201706/R9v0v3ytyuwIA4dG.html" title="Drive.ai宣布融资5000万美元，妇唱夫随吴恩达进入董事会" target="_blank">Drive.ai宣布融资5000万美元，妇唱夫随吴恩达进入董事会</a>
                            </li>
                                        <li>
                                <a href="https://www.leiphone.com/news/201707/7WOmEYg4QV4vmaeZ.html" title="百度AI开发者大会召开，阿波罗计划更多细节将在今天揭晓" target="_blank">百度AI开发者大会召开，阿波罗计划更多细节将在今天揭晓</a>
                            </li>
                                        <li>
                                <a href="https://www.leiphone.com/news/201706/Soa7uPxLKPYjDpr7.html" title="特斯拉上海建厂消息坐实，今日与上海市政府签订协议" target="_blank">特斯拉上海建厂消息坐实，今日与上海市政府签订协议</a>
                            </li>
                                        <li>
                                <a href="https://www.leiphone.com/news/201706/JWdFm143nndORHQM.html" title="通用自动驾驶路测车旧金山发生剐蹭，对象号称无人车最大敌手" target="_blank">通用自动驾驶路测车旧金山发生剐蹭，对象号称无人车最大敌手</a>
                            </li>
                                        <li>
                                <a href="https://www.leiphone.com/news/201706/hiztpPd3wARXvsHW.html" title="打磨动力系统和电池性能，虬龙科技要用电动摩托车挺进新能源市场" target="_blank">打磨动力系统和电池性能，虬龙科技要用电动摩托车挺进新能源市场</a>
                            </li>
                                    </ul>
                            </div>
                        </div>
                       <!-- 作者文章结束 -->
                 </div>

                    <div class="weekly-choice hotNew-article">
                            <div class="rComTitle">
                                最新文章
                            </div>
                        <div class="list">
                            <ul class="justTxt">
                                                    <li>
                                        <a href="https://www.leiphone.com/news/201707/gaJa2jVmKuLQdd0H.html" target="_blank">
                                            <em></em>千里眼顺风耳都得有：Waymo自动驾驶汽车正在学习如何辨别应急车辆 </a>
                                    </li>
                                                    <li>
                                        <a href="https://www.leiphone.com/news/201707/Scl9L3vjjAWLA7DG.html" target="_blank">
                                            <em></em>Vector.ai 蔡长柏：手把手教你改造一辆自动驾驶汽车 | 讲座预告 </a>
                                    </li>
                                                    <li>
                                        <a href="https://www.leiphone.com/news/201707/vzL8vpfzCChN3sBZ.html" target="_blank">
                                            <em></em>到底有什么乾坤？揭开Luminar激光雷达的神秘面纱 </a>
                                    </li>
                                                    <li>
                                        <a href="https://www.leiphone.com/news/201707/bNi1W95C3Mt671EG.html" target="_blank">
                                            <em></em>对话耶鲁大学教授邵中：安全操作系统如何成为自动驾驶市场的最新蓝海？ | CCF-GAIR 2017 </a>
                                    </li>
                                                    <li>
                                        <a href="https://www.leiphone.com/news/201707/lCogVF9T1xsgADmm.html" target="_blank">
                                            <em></em>百度孙勇义：Apollo 的自动驾驶开放之路  | CCF-GAIR 2017 </a>
                                    </li>
                                                    <li>
                                        <a href="https://www.leiphone.com/news/201707/xjkxcgpiznxDzHUL.html" target="_blank">
                                            <em></em>速腾聚创邱纯鑫：量产化、低成本，软硬结合将激光雷达发挥到极致 | CCF-GAIR 2017 </a>
                                    </li>
                                            </ul>
                        </div>
                        </div>
                        <div class="serKesy-list">
                                <div class="rComTitle">
                                    热门搜索
                                </div>
                            <div class="list clr">
                            <a href="https://www.leiphone.com/tag/app" target="_blank">app</a>
                            <a href="https://www.leiphone.com/tag/黑莓" target="_blank">黑莓</a>
                            <a href="https://www.leiphone.com/tag/iPhone应用" target="_blank">iPhone应用</a>
                            <a href="https://www.leiphone.com/tag/4G" target="_blank">4G</a>
                                        <a href="https://www.leiphone.com/tag/RIM" target="_blank">RIM</a>
                            <a href="https://www.leiphone.com/tag/产品" target="_blank">产品</a>
                            <a href="https://www.leiphone.com/tag/产品设计" target="_blank">产品设计</a>
                            <a href="https://www.leiphone.com/tag/beats" target="_blank">beats</a>
                            <a href="https://www.leiphone.com/tag/信息安全" target="_blank">信息安全</a>
                            <a href="https://www.leiphone.com/tag/手环" target="_blank">手环</a>
                            <a href="https://www.leiphone.com/tag/Line" target="_blank">Line</a>
                            </div>
                        </div>
            </div>



            </div>
        </div>
    </div>


    <?php if(session('master')): ?>
     <script type="text/javascript">
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
        $('.btns').click(function(){

            $('.sendMsg-pop').css('display','block');
         });

        $('.send-button').click(function(){
            var zuoz = $('#zuoz').html();
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
            alert('请先登录哦');
            $('#loginkk').click();
            
        });
    </script>  
    <?php endif; ?> 
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('home.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>