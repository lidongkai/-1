<!DOCTYPE html>
<!-- saved from url=(0044)https://ordercenter.meizu.com/order/add.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>确认订单-魅族商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="https://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电子商务平台,提供魅族PRO系列、魅族MX系列和魅蓝系列等产品的预约和购买.官方正品,全国联保.">
    <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="<?php echo e(asset('home/meizu/css/layout-51312a08ab.css')); ?>">

    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link href="<?php echo e(asset('home/meizu/css/add-e7067b7417.css')); ?>" rel="stylesheet" charset="UTF-8">
</head>
<body>
<!-- common header -->
<script charset="utf-8" src="<?php echo e(asset('home/meizu/js/v.js')); ?>"></script>
<script src="<?php echo e(asset('home/meizu/js/hm.js')); ?>"></script>
<script src="<?php echo e(asset('home/meizu/js/flow.js')); ?>"></script>
<script src="<?php echo e(asset('home/meizu/js/analytics-min.js')); ?>"></script>
<script src="<?php echo e(asset('/admin/adminlte/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
<script>
    var layoutHeaderData = false;
</script>
<div class="layout-header clearfix layout-header-order login" id="layoutHeader">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a target="_blank" href="http://www.meizu.com/" class="layout-header-logo-link" alt="魅族科技" data-mdesc="购物车页头logo" data-mtype="store_cart_yt_logo">
                <i class="layout-font layout-font-logo"></i>
            </a>
        </div>
        <ul class="layout-header-bread">
            <li class="layout-header-bread-block ">购物车</li>
            <li class="layout-header-bread-block active">确认订单</li>
            <li class="layout-header-bread-block ">在线支付</li>
            <li class="layout-header-bread-block ">完成</li>
        </ul>
        <ul class="layout-header-right">
            <li class="layout-header-right-item">
                <a class="layout-header-right-link" href="https://ordercenter.meizu.com/list/index.html" target="_blank" data-mdesc="购物车页头-我的订单" data-mtype="store_cart_yt_order">我的订单</a>
            </li>
            <li class="layout-header-right-item signout">
                <a class="layout-header-right-link" data-mdesc="购物车页头-登录" data-mtype="store_cart_yt_login" href="javascript:window.location.href=&#39;https://login.flyme.cn/vCodeLogin?sid=unionlogin&amp;service=store&amp;autodirct=true&amp;useruri=http://store.meizu.com/member/login.htm?useruri=&#39;+ encodeURIComponent(encodeURIComponent(window.location.href));">登录</a>
            </li>
            <li class="layout-header-right-item signout">
                <a class="layout-header-right-link" data-mdesc="购物车页头-注册" data-mtype="store_cart_yt_register" target="_blank" href="https://member.meizu.com/register">注册</a>
            </li>
            <li class="layout-member signin">
                <a class="layout-member-link" target="_blank" href="http://me.meizu.com/member/index"><span class="layout-member-username" id="topbarUser">用户573200368</span>的商城<i class="layout-member-triangle"></i></a>
                <ul class="layout-member-downmenu">
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="https://me.meizu.com/member/address/index">地址管理</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="页头-收藏" data-mtype="store_index_yt_collect" target="_blank" href="https://me.meizu.com/member/favorite/index">我的收藏</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框2" data-mtype="store_index_yt_my_2" target="_blank" href="https://mcycle.meizu.com/repo/ticket/list">我的回购券</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="https://me.meizu.com/member/advice/index">问题反馈</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="javascript:window.location.href=&#39;http://store.meizu.com/member/logout.htm?useruri=&#39;+ encodeURIComponent(encodeURIComponent(window.location.href));">退出</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>

        <div class="order">
        <div class="mzcontainer">
            <div class="order-address" id="addressModule">
                <div class="order-address-title">
                    收货人信息
                    <div class="order-address-title-tips" id="orderAddressHasOldTips">
                        <i class="order-address-tips-icon"></i>因配送地址库升级，部分地址需升级后方可使用！
                    </div>
                </div> 
                <ul class="order-address-list clearfix" id="addressList" style="height: 174px;">
                 <?php if(session('info')): ?> 
              <h3 style="color:red"><?php echo e(session('info')); ?></h3> 
              
          <?php endif; ?>
  <?php if($data2): ?>
  <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
<li class="order-address-checkbox lis" val="<?php echo e($val->id); ?>" data-mdesc="收货人信息" data-mtype="store_se_adr">
<div class="order-address-checkbox-top"> 
  <div class="order-address-checkbox-name" title=""><?php echo e($val->sname); ?></div>
  <div class="order-address-checkbox-phone"><?php echo e($val->iphone); ?></div>
</div>
<div class="order-address-checkbox-content"><?php echo e($val->address); ?></div>
<div class="order-address-checkbox-checked">
  <div class="order-address-checkbox-tick"></div>
</div>

<div class="order-address-checkbox-ctrl">
  <a href="/home/order/delete/<?php echo e($val->id); ?>"><div class="order-address-checkbox-delete"></div></a>
  <a href="#"><div class="order-address-checkbox-edit edit"></div></a>
  
  </div>  
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<li class="order-address-checkbox add">
  <div class="order-address-add-icon"></div>
  <div class="order-address-add-text">添加新地址</div>
</li></ul>
                <div class="order-address-bottom">
                    <div class="order-address-more" id="orderAddressMore">
                          <p class="order-address-more-text">点击显示更多地址</p>
                          <i class="order-address-triangle"></i>
                    </div>
                </div>
            </div>

            <div class="mzcontainer order-product">
                <div class="order-product-title">确认订单信息</div>
                <div class="order-product-list" id="orderProductList">
                <table cellpadding="0" cellspacing="0" class="order-product-table" border="5px">
  <thead>

    <form action="/home/order/insert" method="post" id="form" >
        <input type="hidden" id="a" name="addre" value="">
        <input type="hidden" id="b" name="gid" value="">
        <input type="hidden" id="c" name="total" value="">
        <button style="display:none" id="btn" type="submit"></button>
    </form>
  <tr>
    <th class="order-product-table-name" colspan="2">
      <div class="order-product-supplier">
        供应商：<span class="order-product-supplier-name">雷锋网</span>
        <!--<div class="order-product-supplier-tips">由“魅族”负责发货，并提供售后服务</div>-->
      </div>
    </th>
    <th class="order-product-table-price">单价</th>
    <th class="order-product-table-num">数量</th>
    <th class="order-product-table-total">小计</th>
    <th class="order-product-table-express">配送方式</th>
  </tr>
  </thead>
  <tbody>
   <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
  <td class="order-product-table-name">
    <a target="_blank" class="order-product-link" href="" data-mdesc="确认订单信息" data-mtype="store_se_ord">
      <img class="order-product-image" src="/uploads/avatar/<?php echo e($val->picture); ?>">
    </a>
    </td>
    <td style="display:none" val="<?php echo e($val->id); ?>" class="d" ></td>
     <td class="order-product-table-name">
    <div class="order-product-name">
      <a target="_blank" class="order-product-link" href="" data-mdesc="确认订单信息" data-mtype="store_se_ord">
        <p class="order-product-name-item"><?php echo e($val->name); ?></p> 
        
      </a>
    </div>
  </td>
  <td class="order-product-table-price">
    <p>
      <span class="order-product-price"><?php echo e($val->price); ?></span>
      
    </p>
    
    
  </td>
  <td class="order-product-table-num"><?php echo e($val->num); ?></td>
  <td class="order-product-table-total">
    <p class="order-product-price red total"><?php echo e($val->total); ?></p>
  </td>
  
  <td class="order-product-table-express" rowspan="">
    <p>
      快递配送：运费<span class="order-product-price red">0.00</span>
    </p>
  <div class="order-product-arrival"></div>
  </td>
  
</tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
</tbody>
  <tfoot>
  <tr>
    <td colspan="5">
      <div class="order-product-info">
        <div class="order-product-invoice clearfix">
          
          <div class="order-product-invoice-type">
            发票类型：电子发票<div class="order-product-invoice-icon"></div>
          </div>
          
          <div class="order-product-invoice-info">
            <p>发票抬头：<span class="order-product-invoice-title">默认为收货人姓名</span>
              <span class="order-product-invoice-edit">修改</span></p>
          </div>
        </div>
        <div class="order-product-remark">
          <span class="order-product-remark-title">备注</span>
          <textarea class="order-product-remark-input" placeholder="备注..." maxlength="45"></textarea>
        </div>
      </div>
      <div class="order-product-total">
        合计：<span class="order-product-price red allTotal">0</span>
      </div>
    </td>
  </tr>
  </tfoot>
</table></div>
            </div>

            

            <div class="order-total clearfix">
                <div class="order-total-content">
                    <div class="order-total-row">
                        总金额
                        <div class="order-total-price" id="totalOrderPrice">9365.00</div>
                    </div>
                    <div class="order-total-row order-total-discount" id="totalCouponRow">
                        优惠券优惠
                        <div class="order-total-price sub">0.00</div>
                    </div>
                    <div class="order-total-row order-total-discount" id="totalRedRow">
                        红包抵扣
                        <div class="order-total-price sub">0.00</div>
                    </div>
                    <div class="order-total-row order-total-discount" id="totalRepoRow">
                        回购券抵扣
                        <div class="order-total-price sub">0.00</div>
                    </div>
                    <div class="order-total-row">
                        运费
                        <div class="order-total-price" id="totalExpressPrice">0.00</div>
                    </div>
                    <div class="order-total-line"></div>
                    <div class="order-total-row">
                        应付：
                        <div class="order-total-price total" id="totalPayPrice">0.00</div>
                    </div>
                    <div class="order-total-row order-total-valid-row clearfix">
                        <div class="order-total-valid" id="validCode"></div>
                        <div class="mz-btn success" id="submitForm">提交订单</div>
                    </div>
                    <div class="order-total-row order-total-row-tips" id="totalTips"></div>
                </div>
            </div>
        </div>
    </div>
    
<!-- end content -->

<div class="layout-footer clearfix">
    <div class="mzcontainer">
        <ul class="layout-footer-service clearfix">
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot1"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">7天</span>无理由退货
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot2"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">15天</span>换货保障
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot3"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">1年</span>免费保修
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot4"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">百城</span>速达
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot5"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">全场</span>包邮
                </p>
            </li>
            <li class="layout-footer-service-item">
                <i class="layout-font layout-font-foot6"></i>
                <p class="layout-service-text">
                    <span class="layout-service-name">2000多家</span>专卖店
                </p>
            </li>
        </ul>
        <ul class="layout-footer-nav clearfix">
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">帮助说明</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="https://hd.meizu.com/rules/payment_help.html" data-mdesc="帮助说明下第1个坑" data-mtype="store_index_yw_support_1">支付方式</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="https://hd.meizu.com/rules/deliverynote.html" data-mdesc="帮助说明下第2个坑" data-mtype="store_index_yw_support_2">配送说明</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://store.meizu.com/explain/warranty_services.html" data-mdesc="帮助说明下第3个坑" data-mtype="store_index_yw_support_3">售后服务</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="https://hd.meizu.com/rules/payment_helps.html" data-mdesc="帮助说明下第4个坑" data-mtype="store_index_yw_support_4">付款帮助</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">Flyme</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" href="https://open.flyme.cn/" target="_blank" data-mdesc="Flyme下第1个坑" data-mtype="store_index_yw_flyme_1">开放平台</a></li>
                    <li><a class="layout-footer-nav-link" href="http://www.flyme.cn/firmware.jsp" target="_blank" data-mdesc="Flyme下第2个坑" data-mtype="store_index_yw_flyme_2">固件下载</a></li>
                    <li><a class="layout-footer-nav-link" href="http://app.flyme.cn/" target="_blank" data-mdesc="Flyme下第3个坑" data-mtype="store_index_yw_flyme_3">软件商店</a></li>
                    <li><a class="layout-footer-nav-link" href="http://finder.flyme.cn/" target="_blank" data-mdesc="Flyme下第4个坑" data-mtype="store_index_yw_flyme_4">查找手机</a></li>
                </ul>
            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关于我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/about.html" data-mdesc="关于我们下第1个坑" data-mtype="store_index_yw_about_1">关于魅族</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://hr.meizu.com/" data-mdesc="关于我们下第2个坑" data-mtype="store_index_yw_about_2">加入我们</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/contact.html" data-mdesc="关于我们下第3个坑" data-mtype="store_index_yw_about_3">联系我们</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://www.meizu.com/legalStatement.html" data-mdesc="关于我们下第4个坑" data-mtype="store_index_yw_about_4">法律声明</a></li>
                </ul>

            </li>
            <li class="layout-footer-nav-item">
                <p class="layout-footer-nav-title">关注我们</p>
                <ul class="layout-footer-nav-list">
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://weibo.com/meizumobile" data-mdesc="关注我们下第1个坑" data-mtype="store_index_yw_follow_1">新浪微博</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://t.qq.com/meizu_tech" data-mdesc="关注我们下第2个坑" data-mtype="store_index_yw_follow_2">腾讯微博</a></li>
                    <li><a class="layout-footer-nav-link" target="_blank" href="http://user.qzone.qq.com/2762957059" data-mdesc="关注我们下第3个坑" data-mtype="store_index_yw_follow_3">QQ空间</a></li>
                    <li>
                        <a class="layout-footer-nav-link layout-footer-nav-wechat" href="javascript:;" data-mdesc="关注我们下第4个坑" data-mtype="store_index_yw_follow_4">
                            官方微信
                            <img class="layout-footer-nav-wechat-img" src="<?php echo e(asset('home/meizu/picture/weixin.png')); ?>" alt="微信二维码">
                        </a>
                    </li>
                </ul>
            </li>
            <li class="layout-footer-nav-item ">
                <p class="layout-footer-nav-title tel">24小时全国服务热线</p>
                <p><a class="layout-footer-nav-tel" href="tel:400-788-3333" data-mdesc="服务热线电话号码" data-mtype="store_index_yw_tel">400-788-3333</a></p>
                <p>
                    <a class="layout-footer-nav-btn" href="javascript:;" data-mdesc="在线客服按钮" data-mtype="store_index_yw_service" onclick="window.open(&#39;http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl=&#39;+ encodeURIComponent(document.URL) + &#39;&amp;pagereferrer=&#39; + encodeURIComponent(document.referrer) + &#39;&amp;info=&amp;k=1&#39;, &#39;_blank&#39;,&#39;height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no&#39;);">
                        <i class="layout-font layout-font-talk"></i>24小时在线客服
                    </a>
                </p>
            </li>
        </ul>
        <div class="layout-footer-copyright">
            珠海市魅族通讯设备有限公司 ©2017 Meizu Telecom Equipment Co., Ltd. All rights reserved.
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www.miitbeian.gov.cn/" target="_blank" data-mdesc="底部版权信息第1个坑" data-mtype="store_index_yw_copyright_1">备案号：粤ICP备13003602号-2</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://www2.res.meizu.com/zh_cn/images/common/icp2.jpg" target="_blank" data-mdesc="底部版权信息第2个坑" data-mtype="store_index_yw_copyright_2">经营许可证编号：粤B2-20130198</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" target="_blank" data-mdesc="底部版权信息第3个坑" data-mtype="store_index_yw_copyright_3">营业执照</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/" rel="nofollow" target="_blank" data-mdesc="底部版权信息第4个坑" data-mtype="store_index_yw_copyright_4">
                <i class="layout-icon layout-icon-license"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" rel="nofollow" target="_blank" data-mdesc="底部版权信息第5个坑" data-mtype="store_index_yw_copyright_5">
                <i class="layout-icon layout-icon-wel"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://credit.szfw.org/CX20151204012550820380.html" rel="nofollow" target="_blank" data-mdesc="底部版权信息第6个坑" data-mtype="store_index_yw_copyright_6">
                <i class="layout-icon layout-icon-trust"></i>
            </a>
          <a class="layout-footer-copyright-link" hidefocus="true" href="http://si.trustutn.org/info?sn=749160913024249024251&amp;certType=1" rel="nofollow" target="_blank" data-mdesc="底部版权信息第7个坑" data-mtype="store_index_yw_copyright_7">
                <i class="layout-icon layout-icon-official"></i>
            </a>
        </div>
    </div>
</div>

<script src="<?php echo e(asset('home/meizu/js/layout-ca70dcecd0.js')); ?>" type="text/javascript"></script>

    <script src="<?php echo e(asset('home/meizu/js/add-9fa7019527.js')); ?>" type="text/javascript"></script><div class="mz-mask hide">
  <div class="mz-dialog tips ">
    <div class="mz-dialog-header">
      <div class="mz-dialog-title">提示</div>
      <div class="mz-dialog-close"></div>
    </div>
    <div class="mz-dialog-main">
      <div class="mz-dialog-warp">
        
        <div class="mz-dialog-content"></div>
      </div>
    </div>
    
    <div class="mz-dialog-bottom">
      
      <div class="mz-btn success">确定</div>
      
    </div>
    
  </div>
</div>

<div class="mz-mask hide address">
  
         
  <div class="mz-dialog dialog address-adder">
    <div class="mz-dialog-header">
      <div class="mz-dialog-title"></div>
      <div class="mz-dialog-close close"></div>
    </div>
    <div class="mz-dialog-main">
      <div class="mz-dialog-warp">
      

        <!-- <form action="/home/order/doadd" method="post">  -->
        
        <div class="mz-dialog-content">
        <div class="address-adder-content">
  <div class="address-adder-row clearfix">
    <div class="address-adder-title">收货人姓名<span class="address-adder-must">*</span></div>
    <div class="mz-input-warp">
    <input type="text" id="sname" class="mz-input address-adder-name" placeholder="姓名长度不超过15个汉字"  maxlength="15"></div>
    <div class="address-adder-title">收货人手机号<span class="address-adder-must">*</span></div>
    <div class="mz-input-warp">
    <input type="text" id="iphone" class="mz-input address-adder-phone" placeholder="请输入11位手机号" maxlength="11"></div>
  </div>
  <div class="address-adder-row clearfix">
    <div class="address-adder-title">收货人地址<span class="address-adder-must">*</span></div>

    <div class="mz-input-warp address-adder-select mz-address">

     
    <select type="text" tabindex="-1" class="mz-downmenu-input" name="city[]" id="cid">
      <option value="">--请选择--</option>
    </select>  
    <div class="mz-address-other mz-input-warp" name="" style="display: none;"><input type="text" class="mz-input mz-address-input" placeholder="请输入其他街道名称" maxlength="10"></div></div>
  </div>
  <div class="address-adder-row clearfix address-adder-other">
    <div class="address-adder-title">其他</div>
  </div>
  <div class="address-adder-row clearfix">
    <div class="address-adder-title">详细地址<span class="address-adder-must">*</span></div>
    <div class="mz-input-warp">
      <input type="text" id="daddress" class="mz-input address-adder-detail" placeholder="请输入至少四个字符的详细地址，例如路名、门牌号" maxlength="50" minlength="4">
    </div>
  </div>
</div></div>
      </div>
    </div>
    
    <div class="mz-dialog-bottom">   
      <div class="mz-btn success sure">确认</div>  
      <div class="mz-btn cancel">取消</div> 
    </div>
    </form>
  </div>
</div><div class="mz-downmenu"></div><div class="mz-downmenu"></div><div class="mz-downmenu"></div><div class="mz-downmenu"></div><div class="mz-mask hide">
  <div class="mz-dialog tips ">
    <div class="mz-dialog-header">
      <div class="mz-dialog-title">提示</div>
      <div class="mz-dialog-close"></div>
    </div>
    <div class="mz-dialog-main">
      <div class="mz-dialog-warp">
        
        <div class="mz-dialog-content"></div>
      </div>
    </div>
    
    <div class="mz-dialog-bottom">
      
      <div class="mz-btn success">确定</div>
      
    </div>
    
  </div>
</div><div class="mz-mask hide">
  <div class="mz-dialog tips ">
    <div class="mz-dialog-header">
      <div class="mz-dialog-title">提示</div>
      <div class="mz-dialog-close"></div>
    </div>
    <div class="mz-dialog-main">
      <div class="mz-dialog-warp">
        
        <div class="mz-dialog-content"></div>
      </div>
    </div>
    
    <div class="mz-dialog-bottom">
      
      <div class="mz-btn success">确定</div>
      
    </div>
    
  </div>
</div>
<script type="text/javascript">

$.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  // 获取购物车总价
    var allTotal = $('.allTotal').html();
    allTotal = parseFloat(allTotal);
    var list = $('.total');
       for (var i = 0; i < list.length; i++) {
            allTotal += parseInt($(list[i]).html()); 
        }
        // console.log(allTotal);
         
        if(allTotal *10%2 ==0){
            allTotal = allTotal + '.00';
        }
        $('.allTotal').html(allTotal);
        $('#totalPayPrice').html(allTotal);
        $('#totalOrderPrice').html(allTotal);
        

        // 添加新地址
        // 打开模态框
        $('.order-address-add-icon').on('click',function(){
          $('.address').removeClass('hide'); 
        });
        $('.edit').on('click',function(){
          $('.address').removeClass('hide'); 
        });

        // 关闭模态框
        $('.cancel').on('click',function(){
          $('.address').addClass('hide');;
        });
        $('.close').on('click',function(){
          $('.address').addClass('hide');;
        });

        // 地址的选中
        $('.lis').on('click',function(){ 
          if($(this).hasClass('checked')){
            $(this).removeClass('checked');
          }else{
            $(this).addClass('checked');

            // 地址id
            var addre = $(this).attr('val'); 
            $('#a').val(addre);

            // 购物车商品id
            // <td style="display:none" val="<?php echo e($val->id); ?>" class="d" ></td>
            var gid = [];
            var list = $('.d');
            for(var i =0;i<list.length;i++){
              gid += $(list[i]).attr('val') + ',';
            }

            $('#b').val(gid);

            // 商品总价
            var total = $('#totalPayPrice').html();
            $('#c').val(total);
          } 
        });

        // 订单提交
        $('#submitForm').on('click',function(){

          $('#form').submit();
        });

    // 地址的添加
    $.ajax({
        url:'/home/order/ajaxg',
        type:'get',
        async:true,
        data:{upid:0},
        dataType:'json',
        success:function(data){
          for (var i = 0; i < data.length; i++) {
             $('#cid').append("<option value="+data[i].id+">"+data[i].name+"</option>");
           };
        },
        error:function(data){
          alert('ajaxg请求失败');
        }
    });

    // 给select添加onchange事件
    $('select').live('change',function(){

      // 去掉选择的select后的select标签
       $(this).nextAll('select').remove();

      // 判断是否选择
      if($(this).val() != '--请选择--')
      { 
        var ob = $(this);
        $.ajax({
          url:'/home/order/ajaxp',
          type:'post', 
          data:{upid:ob.val()},
          dataType:'json',
          success:function(data){

            if(data.length >0){
              // 生成一个新的select标签
            var select = $("<select class='mz-downmenu-input' name='city[]'><option>--请选择--</option></select>");
            // 遍历生成option
            for (var i = 0; i < data.length; i++) {
             $(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
           };
            // 写到前一个select后面
            ob.after(select);
          }
          },
          error:function(data){
            alert('请求失败'); 
          }

        });
      }

    });

    // 添加新地址
    $('.sure').on('click',function(){
      // alert(1111);

      var sname = $('#sname').val();
      var iphone = $('#iphone').val(); 
      var daddress = $('#daddress').val();
      var city1 = $('#cid').val();
      var city2 = $('#cid').next().val();
      var city3 = $('#cid').next().next().val(); 
      if($('#cid').next().next().next().val()){

         var city4 = $('#cid').next().next().next().val();
         var city = [city1,city2,city3,city4];
      }else{
        var city = [city1,city2,city3];
      }

     
      $.ajax({
        url:'/home/order/doadd',
        type:'post',
        data:{sname:sname,iphone:iphone,city:city,daddress:daddress},
        dataType:'json',
        success:function(data){
          // console.log(data);
          if(data == 0){
            alert('用户名为3-15个字符');
          } 
          if(data == 1){
            alert('手机号码为11位');
          } 
          if(data == 2){
            alert('添加成功'); 
            // $('.address').addClass('hide');
            location.href = '/home/order/add';
          } 
          if(data == 3){
            alert('添加失败');
          } 
          if(data == 4){
            alert('请输入地址');
          }

        },
        error:function(data){
          alert('数据异常');
        }
      });
    })

    // 订单数据

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

</body></html>