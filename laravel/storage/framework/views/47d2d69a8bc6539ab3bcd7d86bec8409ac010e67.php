   
   <?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo e($val->goodsName); ?>-雷锋网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
     
    <link rel="stylesheet" href="<?php echo e(asset('home/meizu/css/layout-51312a08ab.css')); ?>" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link rel="stylesheet" href="<?php echo e(asset('home/meizu/css/detail-b94e46a6a6.css')); ?>">
</head>
<body>
 
        <!--下面是模板标签，不可删除-->
        <main class="wrapper page-detail">
            <div class="container">
             
                <section class="crumbs clearfix">
                            <a data-mtype="store_de_mbx_1" href="<?php echo e(url('/home/shop/index')); ?>">首页</a>&nbsp;&gt;&nbsp;
                            <a class="ellipsis crumbs-title"><?php echo e($val->goodsName); ?></a>
                </section> 
                <section class="row">
                    <div class="preview" id="preview">
                        <div class="preview-booth">
                            <a href="javascript:;" id="J_imgBooth">
                                <img id="picture" val="<?php echo e($val->picture); ?>" src="/uploads/avatar/<?php echo e($val->picture); ?>" height="375" width="375"
                                     alt="">
                            </a>
                             <div id="move"></div>
                        </div>
                        <div class="preview-booth" style="display:none">
                            <a href="javascript:;" id="J_imgBooth">
                                <img id="picture" val="<?php echo e($val->picture); ?>" src="/uploads/avatar/<?php echo e($val->picture); ?>" height="375" width="375"
                                     alt="">
                            </a>
                        </div>
                        <ul class="preview-thumb clearfix" id="J_previewThumb">
                                <li class="current">
                                    <a data-mtype="store_de_tp_1" href="#"><img
                                            src="/uploads/avatar/<?php echo e($val->picture); ?>" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_2" href="#"><img
                                            src="/uploads/avatar/<?php echo e($val->picture); ?>" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_3" href="#"><img
                                            src="/uploads/avatar/<?php echo e($val->picture); ?>" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_4" href="#"><img
                                            src="/uploads/avatar/<?php echo e($val->picture); ?>" width="75" height="75"></a>
                                </li>
                        </ul>
                         
                    </div>
                    <div class="property" id="property">
                            <div class="property-hd">
                                <h1 id="goodsName"><?php echo e($val->goodsName); ?></h1>

                                <p class="mod-info ">小身型 解决大问题</p>
                            </div>
                            <div class="property-sell">
                                <dl class="property-sell-price clearfix">
                                    <dt class="vm-metatit" id="J_discountTag">价<span class="s-space"></span><span
                                            class="s-space"></span>格：
                                    </dt>
                                    <dd>
                                        <div class="mod-price">
                                            <small>¥</small>
                                            <span id="J_price" class="vm-money"><?php echo e($val->price); ?></span>
                                            <span style="display:none" id="J_id" class="vm-money"><?php echo e($val->id); ?></span>
                                        </div>
                                        <div class="mod-original" id="J_originalPrice" style="display:none;"></div>
                                        <div class="mod-activity">
                                        </div>
                                        <div class="mod-countdown" id="J_discountCountDown" style="display:none;">
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="property-sell-coupon clearfix" id="J_prodPromo" style="display:none;">
                                    <dt class="vm-metatit">领<span class="s-space"></span><span class="s-space"></span>券：
                                    </dt>
                                    <dd>
                                        <p id="J_promoInner">
                                        </p>
                                        <a class="vm-more" data-mtype="store_de_coupon_more" id="J_promoMore" href="#">更多></a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="property-set">
                                    <dl class="property-set-sale" data-property="颜色分类">
                                        <dt class="vm-metatit">颜色分类：</dt>
                                        <dd class="clearfix">
                                                <a data-value="3:11"
                                                   class="vm-sale-img"
                                                   data-mtype="store_de_sp_1_1" href="#"
                                                   title="白色">
                                                            <img src="/uploads/avatar/<?php echo e($val->picture); ?>" width="32" height="32">
                                                        <span></span>
                                                </a>
                                        </dd>
                                    </dl>
                            </div>
                            <div class="property-service">
                                    <dl class="property-service-item clearfix">
                                        <dt class="vm-metatit">支<span class="s-space"></span><span class="s-space"></span>持：
                                        </dt>
                                        <dd class="mod-bd" id="J_prodService">
                                            
                                            
                                                <span><i class="icon icon-service"></i>顺丰包邮</span>
                                                <span><i class="icon icon-service"></i>7天无理由退货</span>
                                        </dd>
                                    </dl>
                                    <dl class="property-service-provider clearfix">
                                        <dt class="vm-metatit">服<span class="s-space"></span><span class="s-space"></span>务：
                                        </dt>
                                        <dd class="clearfix">
                                            <span id="J_installmentInfo"></span>
                                                本商品由 魅族 负责发货并提供售后服务
                                        </dd>
                                    </dl>
                            </div>
                            <div class="property-buy">
                                <p class="vm-message" id="J_message">
                                </p>
                                <dl class="property-buy-quantity">
                                    <dt class="vm-metatit">数<span class="s-space"></span><span class="s-space"></span>量：
                                    </dt>
                                    <dd class="clearfix">
                                        <div class="mod-control">
                                            <a title="减少" href="javascript:;" class="vm-minus">-</a>
                                            <input type="text" value="1" id="J_quantity"data-max="5">
                                            <a title="增加" href="javascript:;" class="vm-plus">+</a>
                                        </div>
                                    </dd>
                                </dl>
                                <div class="property-buy-action">

                                    <a data-mtype="store_de_buy" href="javascript:void(0);" id="J_btnBuy" class="btn btn-danger btn-lg mr20 mai"><i></i>立即购买</a>

                                    <a data-mtype="store_de_cart" href="javascript:void(0);" id="J_btnAddCart" class="btn btn-primary btn-lg mai"><i></i>加入购物车</a>
                                    <span class="vm-service" id="J_panicBuyingWrap"></span>

                                </div>
                            </div> 
                    </div>
                </section>
            </div>
           
            <section class="row detail" id="detail">
                <div style="height:62px;">
                    <div class="detail-tab" id="detailTabFixed">
                        <div class="fixed-container">
                            <ul class="clearfix">
                                
                                <li class="stand n">
                                    <a data-mtype="store_de_xq_2" href="javascript:;">规格参数</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="detail-content container">
                    <div class="introduce" id="introduce" style="display:block;">
                            <img class="lazy" data-original="//openfile.meizu.com/group1/M00/01/0C/Cix_s1iW7uqAYf0EAAtxOHy0Ov0908.jpg" width="1240" alt="">
                            <img class="lazy" data-original="//openfile.meizu.com/group1/M00/01/0B/CnQOjViW7uuAX2A3AAwFJCHwpA0266.jpg" width="1240" alt="">
                    </div>
                    <div class="standard" id="standard" style="display:none;">
                        <table class="standard-table">
                            <tbody>
                                    <tr class="standard-table-group">
                                        <?php echo $val->introduce; ?>

                                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main> 
    <div class="compare-bar" id="compareBar" style="position:fixed">
        <div class="diff-bar" id="diffBar">
            <div class="diff-bar-title">
                <div class="bar-title">
                    <p>商品对比 (<span class="bar-num" id="barNum">0</span>/4)</p>
                </div>
                <div class="operate" data-mtype="store_public_compare_close">
                    <i class="iconfont icon-chahao hide-me"></i>
                </div>
            </div>

            <div class="diff-bd tab-cons">
                <div class="tab-con clearfix" id="tabCon" style="display: block">
                    <div class="diff-items" id="diffItems">

                    </div>

                    <div class="diff-operate" id="diffOperate">
                        <a href="javascript:void(0);" id="J_btnCompare" class="btn btn-primary btn-lg" data-mtype="store_public_compare"><i></i>对比</a>
                        <a href="javascript:void(0);" id="J_compareClear" data-mtype="store_public_compare_delall">清空商品</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
<div tabindex="-1" id="one" style="position: absolute; outline: 0px; left: 500px; top: 350px; z-index: 1046; display:none" aria-labelledby="title:artAlert" aria-describedby="content:artAlert" class="ui-popup ui-popup-show ui-popup-focus" role="dialog"><div i="dialog" class="ui-dialog">
      <div class="ui-dialog-arrow-a"></div><div class="ui-dialog-arrow-b"></div><table class="ui-dialog-grid"><tbody><tr><td i="header" class="ui-dialog-header" style="display: none;"><button i="close" class="ui-dialog-close" title="cancel">×</button><div i="title" class="ui-dialog-title" id="title:artAlert"></div></td></tr><tr><td i="body" class="ui-dialog-body"><div i="content" class="ui-dialog-content" id="content:artAlert" style="width: 360px;"><div class="bi-alert success">
    <div class="bi-alert-bd">
        
            <p class="mod-message">
                <span><i class="iconfont icon-success"></i>已成功加入购物车</span>
            </p> 
            <a class="mod-link" target="_blank" href="<?php echo e(url('/home/shopcar/index')); ?>">去购物车结算 &gt;</a>
            
        
    </div>
    <a class="bi-alert-close J_alertClose" href="javascript:;">
        <i class="iconfont icon-chahao"></i>
    </a>
</div>
</div></td></tr><tr><td i="footer" class="ui-dialog-footer" style="display: none;"><div i="statusbar" class="ui-dialog-statusbar" style="display: none;"></div><div i="button" class="ui-dialog-button"></div></td></tr></tbody></table></div></div>


<div tabindex="-1" id="two" style="position: absolute; outline: 0px; left: 500px; top: 350px; z-index: 1046; display:none" aria-labelledby="title:artAlert" aria-describedby="content:artAlert" class="ui-popup ui-popup-show ui-popup-focus" role="dialog"><div i="dialog" class="ui-dialog">
      <div class="ui-dialog-arrow-a"></div><div class="ui-dialog-arrow-b"></div><table class="ui-dialog-grid"><tbody><tr><td i="header" class="ui-dialog-header" style="display: none;"><button i="close" class="ui-dialog-close" title="cancel">×</button><div i="title" class="ui-dialog-title" id="title:artAlert"></div></td></tr><tr><td i="body" class="ui-dialog-body"><div i="content" class="ui-dialog-content" id="content:artAlert" style="width: 360px;"><div class="bi-alert success">
    <div class="bi-alert-bd">
        
            <p class="mod-message">
                <span><i class="iconfont icon-success"></i>已成功加入购物车</span>
            </p>
            
            <p class="mod-tips">登录后可显示您账号中已加入的商品哦~</p>
            
            
            <a class="mod-link" target="_blank" href="<?php echo e(url('/home/index')); ?>">去登录 &gt;</a>
            
        
    </div>
    <a class="bi-alert-close J_alertClose" href="javascript:;">
        <i class="iconfont icon-chahao"></i>
    </a>
</div>
</div></td></tr><tr><td i="footer" class="ui-dialog-footer" style="display: none;"><div i="statusbar" class="ui-dialog-statusbar" style="display: none;"></div><div i="button" class="ui-dialog-button"></div></td></tr></tbody></table></div></div>


    

<script src="<?php echo e(asset('/home/meizu/js/layout-ca70dcecd0.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('/home/meizu/js/detail-dcc36a765c.js')); ?>"></script>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    // 加操作
    $('.vm-plus').on('click',function(){
        // 计算数量
        var num = $(this).prev().val();
        if(num < 10){
            num++;
        }else{
            alert('对不起，不能超过10件商品');
            return;
        }
        // 将数量写入
        $(this).prev().val(num);

    });
        // 减操作
    $('.vm-minus').on('click',function(){
        // 计算数量
        var num = $(this).next().val();
        if(num > 1){
            num--;
        }else{
            alert('至少一件');
            return;
        }
        // 将数量写入
        $(this).next().val(num);


    });

    // 加入购物车 
    $('.mai').on('click',function(){

        // 商品名称
        var name = $('#goodsName').html();
        // 商品单价
        var price = $('#J_price').html();
        // 商品数量
        var num = $('#J_quantity').val(); 
        var gid = $('#J_id').html();
        var picture = $('#picture').attr('val');
        var status = 0;

        // 计算商品总价
        var total = price * num;
        $.ajax('/home/shopcar/ajaxc',{
            type:'POST',
            data:{name:name,price:price,num:num,total:total,gids:gid,status:status,picture:picture},
            dataType:'json',
            success:function(data){
                 // console.log(data); 
                 
                 if(data == 1)
                 { 
                     $('#one').css('display','block');
                 }
                 if(data == 2)
                 {
                    alert('加入失败');
                 }
                 if(data == 3)
                 { 
                    $('#two').css('display','block');
                 }
            },  
            error:function(data){
                alert('数据异常');
            }
        });

    });

    // 购物车模态框
    $('.icon-chahao').on('click',function(){  
        $('.ui-popup').css('display','none'); 
    });
</script>

         <script type="text/javascript">
        $('.stand').on('click',function(){
             if($(this).hasClass('n')){
                $('#standard').css('display','block');
                $(this).removeClass('n');
             }else{
                $('#standard').css('display','none');
                $(this).addClass('n');
             }
           
        });
        </script>
<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//sccom.res.meizu.com/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript" charset="utf-8">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>