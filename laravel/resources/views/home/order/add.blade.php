 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>购物车-我的购物车</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
      <link rel="stylesheet" href="{{ asset('/admin/adminlte/bootstrap/css/bootstrap.min.css')}}">
    <meta name="description" content="购物车，我的购物车">
    <meta name="Keywords" content="魅族手机官网商城、魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="{{ asset('home/meizu/css/layout-51312a08ab.css')}}" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link href="{{ asset('home/meizu/css/cart-a5ee4bd832.css')}}" rel="stylesheet" />
</head>
<body>
<script>
    var layoutHeaderData = false;
</script>
<div class="layout-header clearfix layout-header-order" id="layoutHeader">
    <div class="mzcontainer">
        <div class="layout-header-logo">
            <a target="_blank" href="http://www.meizu.com" class="layout-header-logo-link" alt="魅族科技" data-mdesc="购物车页头logo" data-mtype="store_cart_yt_logo">
                <i class="layout-font layout-font-logo"></i>
            </a>
        </div>
        <ul class="layout-header-bread">
            <li class="layout-header-bread-block active">购物车</li>
            <li class="layout-header-bread-block ">确认订单</li>
            <li class="layout-header-bread-block ">在线支付</li>
            <li class="layout-header-bread-block ">完成</li>
        </ul>
        <ul class="layout-header-right">
            <li class="layout-header-right-item">
                <a class="layout-header-right-link" href="" target="_blank" data-mdesc="购物车页头-我的订单" data-mtype="store_cart_yt_order">我的订单</a>
            </li> 
            <li class="layout-member signin">

                <a class="layout-member-link" target="_blank" href=""> 
                <span class="layout-member-username" id="topbarUser"></span>
                
                的商城<i class="layout-member-triangle"></i></a>
                <ul class="layout-member-downmenu">
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框1" data-mtype="store_index_yt_my_1" target="_blank" href="//me.meizu.com/member/address/index">地址管理</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="页头-收藏" data-mtype="store_index_yt_collect" target="_blank" href="//me.meizu.com/member/favorite/index">我的收藏</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框2" data-mtype="store_index_yt_my_2" target="_blank" href="//mcycle.meizu.com/repo/ticket/list">我的回购券</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link" data-mdesc="我的商城下拉框3" data-mtype="store_index_yt_my_3" target="_blank" href="//me.meizu.com/member/advice/index">问题反馈</a></li>
                    <li class="layout-member-downmenu-item"><a class="layout-member-downmenu-link exit" data-mdesc="我的商城下拉框4" data-mtype="store_index_yt_my_4" href="javascript:window.location.href='http://store.meizu.com/member/logout.htm?useruri='+ encodeURIComponent(encodeURIComponent(window.location.href));">退出</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>

<div class="cart" id="cart">
    <div class="cart-login-tips" id="cartLoginTips">
        您还没有登录！登录后可显示您账号中已加入的商品哦~
        <a class="mz-btn s success" href="javascript:void(0);" data-mdesc="登录提示" data-mtype="store_cart_tip_login">
            去登录
        </a>
    </div>

    <div class="mzcontainer">
        <table class="cart-header">
            <tr> 
                <th class="cart-col-name">商品</th>
                <th class="cart-col-price">单价(元)</th>
                <th class="cart-col-number">数量</th>
                <th class="cart-col-total">小计(元)</th> 
                <th class="cart-col-total">配送方式</th> 
            </tr>
            @foreach($data as $key=>$val)
            <tr class="cart-product">
                <td class="cart-col-select"> 
                    
                    <a href="//detail.meizu.com/item/lexin_S1.html?skuId=977" class="cart-product-link" target="_blank" data-mdesc="购物车商品位" data-mtype="store_cart_prod">
                      <img src="/uploads/avatar/{{ $val->picture }}" class="cart-product-img" alt="">
                    </a>
                  </td>
                  <td class="cart-col-name">
                    <a href="//detail.meizu.com/item/lexin_S1.html?skuId=977" class="cart-product-link" target="_blank" data-mdesc="购物车商品位" data-mtype="store_cart_prod">
                      <p>{{ $val->name }}</p> 
                    </a>
                  </td>
                  <td class="cart-col-price">
                    <p>
                      <span class="cart-product-price price">{{ $val->price }}</span>
                      
                    </p>
                    
                  </td>
                  <td class="order-product-table-num">{{ $val->num }}</td>
                  <td class="cart-col-total">
                    <span class="cart-product-price total">{{ $val->total }}</span>
                  </td>
                  <td style="display:none">{{ $val->id }}</td>
                   
            </tr>
            @endforeach
        </table>

        <ul class="cart-merchant-list" id="merchantList"> 

        </ul>

    </div>
 
    <div class="cart-footer" id="cartFooter">
        <div class="mzcontainer">
            
            <div class="cart-footer-right">
                    <span class="cart-footer-sum">
        已优惠<span class="cart-footer-num red" id="totalDiscount">0.00</span>元， 合计(不含运费)：
                    <span class="cart-footer-total" id="totalPrice">0.00</span>
                    </span>
                <div class="mz-btn success" disabled="disabled" id="cartSubmit" data-mdesc="去结算按钮" data-mtype="store_cart_checkout">去结算</div>
            </div>
        </div>
    </div>

</div>

 
<script src="{{ asset('/admin/adminlte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{ asset('/admin/adminlte/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('home/meizu/js/layout-ca70dcecd0.js')}}" type="text/javascript"></script>
<script>
    var MZSTORECARTDATA = {
        timestamp: 1499929970807,
        cart: null
    };
</script>

<script type="text/javascript">
$.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  }); 

</script>
<!-- <script src="{{ asset('home/meizu/js/cart-da2c5f831f.js')}}" type="text/javascript"></script> -->
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
</script></body>
</html>
