  

<?php $__env->startSection('user'); ?>
<!DOCTYPE html>
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script charset="utf-8" src="<?php echo e(asset('home/meizu/js/v.js')); ?>"></script>
<script src="<?php echo e(asset('home/meizu/js/hm.js')); ?>"></script>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<script src="<?php echo e(asset('home/meizu/js/flow.js')); ?>"></script>
<script src="<?php echo e(asset('home/meizu/js/analytics-min.js')); ?>"></script>
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>我的订单-魅族商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电子商务平台,提供魅族PRO系列、魅族MX系列和魅蓝系列等产品的预约和购买.官方正品,全国联保.">
    <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="<?php echo e(asset('home/meizu/css/layout-98a57da498.css')); ?>">

    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link rel="stylesheet" href="<?php echo e(asset('home/meizu/css/order-newPayment-61cb551b79.css')); ?>">
<style>
    .sureGet .ui-pop-main .ui-pop-cont{
        line-height: 28px !important;
        margin: 64px auto 30px !important;
        padding:0 30px;
    }
    .font-14{
        font-size: 14px;
    }
    .big-font{
        font-size: 18px;
    }
</style>
</head>
<body>
<!-- common header -->
 
<header class="layout-header clearfix" id="layoutHeader">
    <div class="mzcontainer"> 
    <div class="store-wrap" style="position:absolute;left:-250px">
        <div class="crumbs">
            <a href="http://store.meizu.com/index.html">首页 &gt;&nbsp;</a><a href="http://me.meizu.com/member/index">我的商城 &gt;&nbsp;</a><a href="http://ordercenter.meizu.com/list/index.html?type=-1&amp;selectStatus=0" class="active">我的订单&nbsp;</a>
        </div>
        <div class="main clearfix">
    
            <div class="right-content f-fr">
                <div class="order-main">
                    <div class="type-tab-btn">
                        <a href="javascript:;" class="allOrder active" data-type="-1">全部订单</a><i class="line">|</i>
                        <a class="waitPay" href="javascript:;" data-type="0">待付款<span class="amount _actAmount"></span></a><i class="line">|</i>
                        <a class="waitDeliver" href="javascript:;" data-type="1">待发货</a><i class="line">|</i>
                        <a class="hasDeliver" href="javascript:;" data-type="2">已发货</a><i class="line">|</i>
                        <a class="other" href="javascript:;" data-type="99">其他</a>
                    </div>
                    <div class="list-head">
                        <ul class="clearfix">
                            <li class="w50">
                                <select id="checkType" class="check-type">
                                    <option value="0">近三个月的订单</option>
                                    <option value="1">全部订单</option>
                                </select>
                                订单明细
                            </li>
                            <li class="w125">售后</li>
                            <li class="w125">金额</li>
                            <li class="w125">状态</li>
                            <li class="w125">操作</li>
                        </ul>
                    </div>
                    <div id="tableList" class="type-contain ui-load-container"><div class="ui-load-content"><input id="unPayNum" type="hidden" value="0">
<table class="orderItem">
        <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="trHead">
          <td colspan="4" class="title clearfix">
              <div class="f-fl">下单时间：<span class="time"><?php echo e($v->ftime); ?></span>订单号：<span class="orderNumber"><?php echo e($v->ordernum); ?></span>
              </div>
          </td>
        </tr>
        <tr class="list-box b-l b-r b-b">
            <td class="list b-r j-iamCart">
              <div class="cart-wrap j-CartWrap">
                    <div class="shop j-shop">
                           <div class="item b-t clearfix j-iamMain">
                              <a class="productDetail nameWidth" href="http://detail.meizu.com/item/lexin_S1.html" target="_blank">
                              <img src="<?php echo e(asset('/uploads/avatar/1.png')); ?>" class="f-fl"></a>
                              <div class="describe f-fl">
                                  <div class="vertic clearfix">
                                      <span class="clearfix">
                                          <a class="productDetail nameWidth" href="<?php echo e(url('/home/shop/detail')); ?>/<?php echo e($v->gid); ?>" target="_blank">
                                          专业卖魅族手机</a>
                                          <p>
                                            ￥99
 
                                          </p>
                                      </span>
                                  </div>
                              </div>
                              <input type="hidden" class="orderSn" value="51071837482130650101">
                              <input type="hidden" class="isCart" value="1">
                              <input class="orderSnSon" type="hidden" value="21071837482130652100">
                            </div>
                    </div>

              </div>
            </td>
            <td class="b-r w125  price b-t">
                <div class="priceDiv">
                    ￥ <?php echo e($v->total); ?>

                    
                </div>
            </td>
            <td class="b-r w125  state b-t">
                <div class="stateDiv">
                        <?php if($v->status == 1): ?>
                       <div>出库中<br></div>
                       <?php endif; ?> 
                       <?php if($v->status == 2): ?>
                       <div>派发中<br></div>
                       <?php endif; ?>
                       <?php if($v->status == 3): ?>
                       <div>已完成<br></div>
                       <?php endif; ?>
                </div>
            </td>
            <td class="w125 opreat b-t">
                <ul>
                    <li class="more"><a href="<?php echo e(url('/home/user/orderDetail')); ?>/<?php echo e($v->id); ?>" target="_blank">查看详情</a></li> 
                </ul>
            </td>
        </tr> 
        <tr class="b-b b-l b-r show-more-order j-showOrder hide">
            <td colspan="4">还有<span class="j-orderNum"></span>种商品<i class="iconfont icon-arrow-xx"></i></td>
        </tr>
         
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div></div>
                    <input type="hidden" id="pageId" value="0">
                </div>
            </div>
        </div>
    </div>

     
 
 
<script type="text/javascript" src="<?php echo e(asset('home/meizu/js/order-newPayment-4c82a7e919.js')); ?>"></script>

  
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

</body></html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>