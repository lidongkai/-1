
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     @foreach($data as $key=>$val)
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $val->goodsName }}-魅族商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="魅族桌面多口USB充电器，小身型 解决大问题，正品行货，另有魅族桌面多口USB充电器详细介绍、图片、价格、参数、售前咨询等，购买魅族桌面多口USB充电器上魅族商城，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="keywords" content="魅族桌面多口USB充电器，魅族，魅族商城">
    <link rel="stylesheet" href="{{ asset('home/meizu/css/layout-51312a08ab.css')}}" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link rel="stylesheet" href="{{ asset('home/meizu/css/detail-b94e46a6a6.css')}}">
</head>
<body>
    <!-- common header -->
 
 
<div class="layout-header clearfix">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a target="_blank" href="http://www.meizu.com" class="layout-header-logo-link" alt="魅族科技"
               data-mdesc="魅族logo跳转链接" data-mtype="store_index_logo">
                <i class="layout-font layout-font-logo"></i>
            </a>
        </div>
        <ul class="layout-header-nav clearfix" id="layoutHeaderNav">
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=73&click=store_index_dh_1" class="layout-header-nav-link" data-mdesc="导航第1个"
                       data-mtype="store_index_dh_1">全部分类</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&features=80%3A18778%2C21896%2C9%2C12529%2C22216%2C18382&click=store_index_dh_2" class="layout-header-nav-link" data-mdesc="导航第2个"
                       data-mtype="store_index_dh_2">PRO手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&features=80%3A3%2C19475%2C5%2C10%2C11760%2C22119%2C868%2C1133%2C18237%2C22214%2C20724%2C22215%2C23107%2C19242%2C19243%2C20374%2C20100%2C21854%2C20579%2C20580%2C22463%2C18732&click=store_index_dh_3" class="layout-header-nav-link" data-mdesc="导航第3个"
                       data-mtype="store_index_dh_3">魅蓝手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&features=80%3A8%2C18136%2C20098&click=store_index_dh_4" class="layout-header-nav-link" data-mdesc="导航第4个"
                       data-mtype="store_index_dh_4">MX手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="http://lists.meizu.com/page/list/?categoryid=231&click=store_index_dh_5" class="layout-header-nav-link" data-mdesc="导航第5个"
                       data-mtype="store_index_dh_5">数码配件</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="http://lists.meizu.com/page/list/?categoryid=153&click=store_index_dh_6" class="layout-header-nav-link" data-mdesc="导航第6个"
                       data-mtype="store_index_dh_6">智能设备</a>
                </li>
        </ul>
        <div class="layout-header-nav-downmenu" id="layoutHeaderNavDownmenu"></div>
    </div>
</div>
        
      
            
       

        <!--下面是模板标签，不可删除-->
        <main class="wrapper page-detail">
            <div class="container">
             
                <section class="crumbs clearfix">
                            <a data-mtype="store_de_mbx_1" href="{{ url('/home/shop/index') }}">首页</a>&nbsp;&gt;&nbsp;
                            <a class="ellipsis crumbs-title">{{ $val->goodsName }}</a>
                </section> 
                <section class="row">
                    <div class="preview" id="preview">
                        <div class="preview-booth">
                            <a href="javascript:;" id="J_imgBooth">
                                <img id="picture" val="{{ $val->picture }}" src="/uploads/avatar/{{ $val->picture }}" height="375" width="375"
                                     alt="">
                            </a>
                        </div>
                        <ul class="preview-thumb clearfix" id="J_previewThumb">
                                <li class="current">
                                    <a data-mtype="store_de_tp_1" href="#"><img
                                            src="/uploads/avatar/{{ $val->picture }}" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_2" href="#"><img
                                            src="/uploads/avatar/{{ $val->picture }}" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_3" href="#"><img
                                            src="/uploads/avatar/{{ $val->picture }}" width="75" height="75"></a>
                                </li>
                                <li >
                                    <a data-mtype="store_de_tp_4" href="#"><img
                                            src="/uploads/avatar/{{ $val->picture }}" width="75" height="75"></a>
                                </li>
                        </ul>
                        <div class="preview-action">
                            <a class="vm-favorite" data-mtype="store_de_favorite" id="J_favorite" href="javascript:;"><i class="iconfont icon-favorite"></i>收藏 </a>
                        </div>
                    </div>
                    <div class="property" id="property">
                            <div class="property-hd">
                                <h1 id="goodsName">{{ $val->goodsName }}</h1>

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
                                            <span id="J_price" class="vm-money">{{ $val->price }}</span>
                                            <span style="display:none" id="J_id" class="vm-money">{{ $val->id }}</span>
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
                                                            <img src="/uploads/avatar/{{ $val->picture }}" width="32" height="32">
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

                                    <a data-mtype="store_de_buy" href="javascript:void(0);" id="J_btnBuy" class="btn btn-danger btn-lg mr20 "><i></i>立即购买</a>

                                    <a data-mtype="store_de_cart" href="javascript:void(0);" id="J_btnAddCart" class="btn btn-primary btn-lg"><i></i>加入购物车</a>
                                    <span class="vm-service" id="J_panicBuyingWrap"></span>

                                </div>
                            </div>
                        <!-- <div class="prod-addition">
                            <input type="hidden" id="servertime" value="1499691608595">

                            <div class="layer-promo" id="layerPromo" style="display:none;">
                                <div class="layer-promo-hd">
                                    领取优惠券
                                    <a class="vm-close" id="J_promoClose" href="#">
                                        ╳
                                    </a>
                                </div>
                                <div class="layer-promo-bd">
                                    <dl class="discount-coupon" id="J_discountCoupon">
                                    </dl>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </section>
            </div>
            <div class="detail-tab anim detail-fast-float" id="detailFast">
                <div class="fixed-container">
                    <ul class="clearfix">
                        <li class="current">
                            <a href="#">商品详情</a>
                        </li>
                        <li>
                            <a href="#">规格参数</a>
                        </li>
                    </ul>
                    <div class="shortcut trans">
                        <div class="shortcut-con trans">
                            <div class="mod-buy">
                                <a data-mtype="store_de_buynow" href="javascript:void(0);" id="J_btnBuyShortcut" class="btn btn-primary btn-lg"><i></i>现在购买</a>
                            </div>
                            <div class="mod-total trans">
                            魅族桌面多口USB充电器<em class="vm-price" id="J_totalPriceShortcut"></em>
                                <p class="vm-title" id="J_summaryName">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mod-title">

                    </div>
                </div>
            </div>
            <section class="row detail" id="detail">
                <div style="height:62px;">
                    <div class="detail-tab" id="detailTabFixed">
                        <div class="fixed-container">
                            <ul class="clearfix">
                                <li class="current">
                                    <a data-mtype="store_de_xq_1" href="#">商品详情</a>
                                </li>
                                <li class="stand">
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
                                        {!! $val->introduce !!}
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
@endforeach

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
                            <img class="layout-footer-nav-wechat-img" src="{{ url('home/meizu/picture/weixin.png')}}" alt="微信二维码">
                        </a>
                    </li>
                </ul>
            </li>
            <li class="layout-footer-nav-item ">
                <p class="layout-footer-nav-title tel">24小时全国服务热线</p>
                <p><a class="layout-footer-nav-tel" href="tel:400-788-3333" data-mdesc="服务热线电话号码" data-mtype="store_index_yw_tel">400-788-3333</a></p>
                <p>
                    <a class="layout-footer-nav-btn" href="javascript:;" data-mdesc="在线客服按钮" data-mtype="store_index_yw_service" onclick="window.open('http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl='+ encodeURIComponent(document.URL) + '&amp;pagereferrer=' + encodeURIComponent(document.referrer) + '&amp;info=&amp;k=1', '_blank','height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no');">
                        <i class="layout-font layout-font-talk"></i>24小时在线客服
                    </a>
                </p>
            </li>
        </ul>
        <div class="layout-footer-copyright">
            珠海市魅族通讯设备有限公司 &copy;2017 Meizu Telecom Equipment Co., Ltd. All rights reserved.
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://www.miitbeian.gov.cn/" target="_blank" data-mdesc="底部版权信息第1个坑" data-mtype="store_index_yw_copyright_1">备案号：粤ICP备13003602号-2</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="//www2.res.meizu.com/zh_cn/images/common/icp2.jpg" target="_blank" data-mdesc="底部版权信息第2个坑" data-mtype="store_index_yw_copyright_2">经营许可证编号：粤B2-20130198</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="//www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" target="_blank" data-mdesc="底部版权信息第3个坑" data-mtype="store_index_yw_copyright_3">营业执照</a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/" rel="nofollow" target="_blank" data-mdesc="底部版权信息第4个坑" data-mtype="store_index_yw_copyright_4">
                <i class="layout-icon layout-icon-license"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" rel="nofollow" target="_blank" data-mdesc="底部版权信息第5个坑" data-mtype="store_index_yw_copyright_5">
                <i class="layout-icon layout-icon-wel"></i>
            </a>
            <a class="layout-footer-copyright-link" hidefocus="true" href="https://credit.szfw.org/CX20151204012550820380.html" rel="nofollow" target="_blank" data-mdesc="底部版权信息第6个坑" data-mtype="store_index_yw_copyright_6">
                <i class="layout-icon layout-icon-trust"></i>
            </a>
          <a class="layout-footer-copyright-link" hidefocus="true" href="http://si.trustutn.org/info?sn=749160913024249024251&certType=1" rel="nofollow" target="_blank" data-mdesc="底部版权信息第7个坑" data-mtype="store_index_yw_copyright_7">
                <i class="layout-icon layout-icon-official"></i>
            </a>
        </div>
    </div>
</div>
<div tabindex="-1" id="one" style="position: absolute; outline: 0px; left: 500px; top: 350px; z-index: 1046; display:none" aria-labelledby="title:artAlert" aria-describedby="content:artAlert" class="ui-popup ui-popup-show ui-popup-focus" role="dialog"><div i="dialog" class="ui-dialog">
      <div class="ui-dialog-arrow-a"></div><div class="ui-dialog-arrow-b"></div><table class="ui-dialog-grid"><tbody><tr><td i="header" class="ui-dialog-header" style="display: none;"><button i="close" class="ui-dialog-close" title="cancel">×</button><div i="title" class="ui-dialog-title" id="title:artAlert"></div></td></tr><tr><td i="body" class="ui-dialog-body"><div i="content" class="ui-dialog-content" id="content:artAlert" style="width: 360px;"><div class="bi-alert success">
    <div class="bi-alert-bd">
        
            <p class="mod-message">
                <span><i class="iconfont icon-success"></i>已成功加入购物车</span>
            </p> 
            <a class="mod-link" target="_blank" href="{{ url('/home/shopcar/index') }}">去购物车结算 &gt;</a>
            
        
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
            
            
            <a class="mod-link" target="_blank" href="https://login.flyme.cn/vCodeLogin?useruri=http%3A%2F%2Fstore.meizu.com%2Fmember%2Flogin.htm%3Fuseruri%3Dhttps%3A%2F%2Fdetail.meizu.com%2Fitem%2Ffeizhi_shoubing.html%3Fskuid%3D1442%26click%3Dstore_index_cdh_4_g_1_3&amp;service=store&amp;sid=unionlogin&amp;autodirct=true">去登录 &gt;</a>
            
        
    </div>
    <a class="bi-alert-close J_alertClose" href="javascript:;">
        <i class="iconfont icon-chahao"></i>
    </a>
</div>
</div></td></tr><tr><td i="footer" class="ui-dialog-footer" style="display: none;"><div i="statusbar" class="ui-dialog-statusbar" style="display: none;"></div><div i="button" class="ui-dialog-button"></div></td></tr></tbody></table></div></div>


    

<script src="{{ asset('/home/meizu/js/layout-ca70dcecd0.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('/home/meizu/js/detail-dcc36a765c.js')}}"></script>

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
    $('#J_btnAddCart').on('click',function(){

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
            $('#standard').css('display','block');
        });
        </script>
<script>
    // var __mzt = __mzt || [];
    // (function () {
    //     var hm = document.createElement("script");
    //     hm.src = "//sccom.res.meizu.com/js/analytics-min.js";
    //     var s = document.getElementsByTagName("script")[0];
    //     s.parentNode.insertBefore(hm, s);
    // })();
</script>

<script type="text/javascript" charset="utf-8">
    // var _hmt = _hmt || [];
    // (function () {
    //     var hm = document.createElement("script");
    //     hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
    //     var s = document.getElementsByTagName("script")[0];
    //     s.parentNode.insertBefore(hm, s);
    // })();
</script>

<script type="text/javascript">
    // var _hmt = _hmt || [];
    // (function () {
    //     var hm = document.createElement("script");
    //     hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
    //     var s = document.getElementsByTagName("script")[0];
    //     s.parentNode.insertBefore(hm, s);
    // })();
</script>
</body>
</html>

