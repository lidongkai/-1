
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>魅族官网商城-提供魅族手机 PRO系列、MX系列、魅蓝（Note）系列的预约和购买</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="魅族在线商城是魅族面向全国服务的官方电商平台，提供魅族PRO系列、MX系列、魅蓝（Note）系列的手机、配件和智能硬件的预约和购买。官方正品，全场包邮。">
    <meta name="Keywords" content="魅族手机官网商城、魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="{{ asset('home/meizu/css/layout-51312a08ab.css')}}" /> 

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link href="{{ asset('home/meizu/css/index-ae8b657ce8.css')}}" rel="stylesheet"/>
<link href="{{ asset('home/meizu/css/search-00ea2bc25a.css')}}" rel="stylesheet" />
</head>
<body> 
<!-- common header -->
    <!--小广告-->
    <div class="home-settlement" style="background-color: rgb(255,255,255);" id="homeSettlement">
        <div class="mzcontainer">
            <img src="{{ url('home/meizu/picture/cgbj0vlwi8-aegraaacpzukv5ia939.jpg')}}" alt=" " class="home-settlement-img"
                 style="width: 1920px;
                         margin-left: -960px;"/>
            <a href="javascript:;" class="home-settlement-point close" title="关闭">
                <i class="home-font close"></i>
            </a>
                <a href="{{ url('/home/shop/detail/73') }}" class="home-settlement-point"
                   style="width: 1240px; height: 120px; left: 0px; top: 0px;"
                   target="_blank" title="魅蓝 A5" data-mtype="store_index_dt_1"
                   data-mdesc="顶通1"></a>
        </div>
    </div>
<div class="layout-topbar clearfix" id="layoutTopbar">
    <div class="mzcontainer">
        <ul class="layout-topbar-left clearfix">
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第1个" data-mtype="store_index_yt_1" target="_blank" href="http://www.meizu.com">魅族官网</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第2个" data-mtype="store_index_yt_2" href="http://store.meizu.com/index.html">魅族商城</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第3个" data-mtype="store_index_yt_3" target="_blank" href="http://www.flyme.cn">Flyme</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第4个" data-mtype="store_index_yt_4" target="_blank" href="http://retail.meizu.com/index.html">专卖店</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第5个" data-mtype="store_index_yt_5" target="_blank" href="http://service.meizu.com/index.html">服务</a></li>
            <li class="layout-topbar-left-links"><a class="layout-topbar-link" data-mdesc="页头中第6个" data-mtype="store_index_yt_6" target="_blank" href="http://bbs.meizu.cn">社区</a></li>
        </ul>
        <ul class="layout-topbar-right clearfix" id="topbarRight">
            <li class="layout-topbar-right-links layout-topbar-right-cart layout-topbar-right-cart-hide" id="layoutCart">
                <a class="layout-topbar-link" data-mdesc="页头-购物车" data-mtype="store_index_yt_cart" id="layoutCartBtn" href="//cart.meizu.com/">
                    <i class="layout-font layout-font-cart"></i>购物车<span class="layout-topbar-cart-quantity" id="layoutCartQuantity">0</span>
                </a>
                <div class="layout-cart" id="miniContent">
                </div>
            </li>

            <li class="layout-topbar-right-links">
                <a id="topbarOrderMsg" class="layout-topbar-link" data-mdesc="页头-我的订单" data-mtype="store_index_yt_order" target="_blank" href="//ordercenter.meizu.com/list/index.html">我的订单</a>
            </li>
            <li class="layout-topbar-right-links signin" id="topbarMsgBox">
                <a id="topbarMsg" class="layout-topbar-link" data-mdesc="页头-消息" data-mtype="store_index_yt_msg" target="_blank" href="//me.meizu.com/member/message/index">消息</a>
            </li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" data-mdesc="页头-未登录状态-登录" data-mtype="store_index_yt_login" href="javascript:window.location.href='https://login.flyme.cn/vCodeLogin?sid=unionlogin&service=store&autodirct=true&useruri=http://store.meizu.com/member/login.htm?useruri='+ encodeURIComponent(encodeURIComponent(window.location.href));">登录</a></li>
            <li class="layout-topbar-right-links signout"><a class="layout-topbar-link" data-mdesc="页头-未登录状态-注册" data-mtype="store_index_yt_register" target="_blank" href="//member.meizu.com/register">注册</a></li>
            <li class="layout-member signin">
                <a class="layout-member-link" target="_blank" href="http://me.meizu.com/member/index"><span class="layout-member-username" id="topbarUser"></span>的商城<i class="layout-member-triangle"></i></a>
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
<script>
    var layoutHeaderData = {
        header: [{"id":25,"href":"https://lists.meizu.com/page/list?categoryid=73","commodityType":0,"name":"全部分类","children":[
        {"name":"手机","href":"{{ url('/home/shop/show') }}","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/Cgbj0VjlsPGAIU-VAAqnoNZJkt8948.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},
        {"name":"数码影音","href":"{{ url('/home/shop/show') }}","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/Cgbj0FjlsPCAbjRmAAaQNt-KZ6Q072.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},
        {"name":"智能设备","href":"{{ url('/home/shop/show') }}","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/Cgbj0VjlsPKAc9eUAALQF0POZTo904.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},
        {"name":"智能穿戴","href":"{{ url('/home/shop/show') }}","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/Cgbj0FjlsPGAJIZIAATg2-3hRQ4628.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},
        {"name":"游戏设备","href":"{{ url('/home/shop/show') }}","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/Cgbj0FjlsPGALkdkAATOlMGeplg965.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},
        {"name":"手机配件","href":"{{ url('/home/shop/show') }}","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/Cgbj0FjlsPGAUklnAASPiYZvwZ8694.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},
        {"name":"办公存储","href":"{{ url('/home/shop/show') }}","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/Cgbj0VjlsPGAB1CDAAfX3jfKrg0412.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},
        {"name":"生活周边","href":"{{ url('/home/shop/show') }}","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/Cgbj0VjlsPCAecrdAAa_FIBfrjA141.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0}],"more":[]},

        {"id":18,"href":"","commodityType":1,"name":"PRO手机","children":[
        
        {"name":"魅族PRO 6 Plus","href":"{{ url('/home/shop/detail/68') }}","price":2699.000,"originalPrice":2999.000,"pic":{"imgSrc":"/uploads/avatar/1499738847708964.png"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10637},"sellingPoint":"性能旗舰 冷静表现"},

        {"name":"魅族PRO 6s","href":"{{ url('/home/shop/detail/69') }}","price":2299.000,"originalPrice":2499.000,"pic":{"imgSrc":"/uploads/avatar/1499739436399946.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10560}},

        {"name":"魅族PRO 6","href":"{{ url('/home/shop/detail/70') }}","price":2299.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/1499739436399946.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10167},"sellingPoint":"最高立减400元"}],"more":[]},

        {"id":21,"href":"","commodityType":1,"name":"魅蓝手机",
        "children":[
        {"name":"魅蓝 A555","href":"{{ url('/home/shop/detail/71') }}","price":699.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/1499744990887623.png"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10947},"sellingPoint":"7月3日10:00 准时开售"}, 
     
        {"name":"魅蓝 Note5","href":"{{ url('/home/shop/detail/72') }}","price":899.000,"originalPrice":999.000,"pic":{"imgSrc":"/uploads/avatar/1499739643827410.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10638},"sellingPoint":"购64G版本，享6期免息"},
   
       
        {"name":"魅蓝 Max","href":"{{ url('/home/shop/detail/73') }}","price":1699.000,"originalPrice":1699.000,"pic":{"imgSrc":"/uploads/avatar/1499739716201750.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10478}}],"more":[]},

        {"id":24,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A8%2C18136%2C20098","commodityType":1,"name":"MX手机","children":[

        {"name":"魅族 MX6","href":"{{ url('/home/shop/detail/74') }}","price":1599.000,"originalPrice":0.000,"pic":{"imgSrc":"/uploads/avatar/1499745040237569.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10314}}],"more":[]},

        {"id":19,"href":"","commodityType":1,"name":"数码配件","children":[

        {"name":"魅族EP51蓝牙运动耳机","href":"{{ url('/home/shop/detail/75') }}","price":269.000,"originalPrice":269.000,"pic":{"imgSrc":"/uploads/avatar/1499745189480359.jpeg"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10155},"sellingPoint":"明亮清晰的高音 强有力的低音"},

        {"name":"魅族HD50头戴式耳机","href":"{{ url('/home/shop/detail/76') }}","price":399.000,"originalPrice":399.000,"pic":{"imgSrc":"/uploads/avatar/1499745262894773.jpeg"},"goodType":1,"tagThings":"热卖","tagColour":"#f59646","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10017},"sellingPoint":"清新简洁，有音质更有颜值"},

        {"name":"魅族 EP2X耳机","href":"{{ url('/home/shop/detail/77') }}","price":129.000,"originalPrice":129.000,"pic":{"imgSrc":"/uploads/avatar/1499745304587678.jpeg"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10563},"sellingPoint":"契合声音的流动之美"},
        {"name":"魅族蓝牙通话耳机","href":"{{ url('/home/shop/detail/78') }}","price":89.000,"originalPrice":89.000,"pic":{"imgSrc":"/uploads/avatar/1499745350561499.jpeg"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10641},"sellingPoint":"经典小圆点，一键集大成"},
        {"name":"魅族蓝牙小音箱","href":"{{ url('/home/shop/detail/79') }}","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"/uploads/avatar/1499745400490153.jpeg"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10760},"sellingPoint":"好音感 直达心灵"},
        {"name":"魅族移动电源（标准版）","href":"{{ url('/home/shop/detail/80') }}","price":99.000,"originalPrice":99.000,"pic":{"imgSrc":"/uploads/avatar/1499745534256700.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10227},"sellingPoint":"素雅百搭 颜值典范"},
        {"name":"铁三角 ATH-EQ300M 耳机","href":"{{ url('/home/shop/detail/81') }}","price":138.000,"originalPrice":138.000,"pic":{"imgSrc":"/uploads/avatar/1499745595197223.jpeg"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10842},"sellingPoint":"运动 出街利器 人声靓丽"},
        {"name":"JBL GO音乐金砖 蓝牙音响","href":"{{ url('/home/shop/detail/82') }}","price":268.000,"originalPrice":268.000,"pic":{"imgSrc":"/uploads/avatar/1499745755522109.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10678},"sellingPoint":"降噪麦克风  一键接听通话"}],"more":[]},
        {"id":20,"href":"","commodityType":1,"name":"智能设备","children":[ 
         
        {"name":"魅族路由器 极速版","href":"{{ url('/home/shop/detail/83') }}","price":199.000,"originalPrice":199.000,"pic":{"imgSrc":"/uploads/avatar/1499752229180999.png"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10241},"sellingPoint":"天生不凡 快狠稳"},
        {"name":"魅族智能体脂秤","href":"{{ url('/home/shop/detail/84') }}","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"/uploads/avatar/1499752444979437.png"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10944},"sellingPoint":"精准的数字，才是真实的你"},
        {"name":"乐心心率手环MAMBO2","href":"{{ url('/home/shop/detail/85') }}","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"{{ asset('/uploads/avatar/1499752598233033.png')}}"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10541},"sellingPoint":"超长续航 防水性能"},
         
        {"name":"飞智黑武士蓝牙无线手柄","href":"{{ url('/home/shop/detail/86') }}","price":116.000,"originalPrice":116.000,"pic":{"imgSrc":"{{ asset('/uploads/avatar/1499752715334086.png')}}"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"discountId":25047,"skuId":1442,"itemId":10320,"price":116.00,"discountBegin":1499652001000,"discountEnd":1500256800000},"sellingPoint":"正版游戏云端适配"},
        {"name":"雷柏无线超薄键鼠套装9060","href":"{{ url('/home/shop/detail/87') }}","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"{{ asset('/uploads/avatar/1499752909251908.png') }}"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10802},"sellingPoint":"紧凑设计 简单便捷"}],"more":[]}]
    };
</script>
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
                    <a href="" class="layout-header-nav-link" data-mdesc="导航第1个"
                       data-mtype="store_index_dh_1">全部分类</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="" class="layout-header-nav-link" data-mdesc="导航第2个"
                       data-mtype="store_index_dh_2">PRO手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="" class="layout-header-nav-link" data-mdesc="导航第3个"
                       data-mtype="store_index_dh_3">魅蓝手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="https://lists.meizu.com/page/list?categoryid=76&features=80%3A8%2C18136%2C20098&click=store_index_dh_4" class="layout-header-nav-link" data-mdesc="导航第4个"
                       data-mtype="store_index_dh_4">MX手机</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="" class="layout-header-nav-link" data-mdesc="导航第5个"
                       data-mtype="store_index_dh_5">数码配件</a>
                </li>
                <li class="layout-header-nav-item">
                    <a href="" class="layout-header-nav-link" data-mdesc="导航第6个"
                       data-mtype="store_index_dh_6">智能设备</a>
                </li>
        </ul>
        <div class="layout-header-nav-downmenu" id="layoutHeaderNavDownmenu"></div>
    </div>
</div>  
        <div class="home">
<div class="home-carousel" id="homeCarousel">
    @foreach($data3 as $key=>$val)
        <div class="home-carousel-child" style="background-color: #FFFFFF;">
            <a class="mzcontainer home-carousel-link" href="{{ url('/home/shop/detail/') }}/{{ $val->gid }}" target="_blank" data-mtype="store_index_ba_1" data-mdesc="第1屏banner">
                <img class="home-carousel-img" data-lazy="{{ url('/uploads/avatar') }}/{{ $val->img }}" alt=" "
                 style="width: 1920px;margin-left: -960px">
            </a>
        </div> 
    @endforeach
</div>
<ul class="home-category" id="homeCategory">
        @foreach($data1 as $key=>$val)
        <li class="home-category-item lis" id="{{ $val->id }}">
            <a href="{{ url('/home/shop/show') }}" class="home-category-link" data-mtype="store_index_cdh_1" data-mdesc="侧边导航中第1个分类">
                {{ $val->name }}
            </a>
        </li> 
        @endforeach
        <div id="div" class="home-right" style="width:250px;height:480px;position: absolute;left:244px;top:0;background:#FFF;display:none">
             <table id="example2" class="table table-bordered table-hover tab" style="border:1px;cellspacing="10" cellpadding="20"">
                
                <tr class="trs">
                <td></td>
                </tr>
                  
              </table> 
        </div>
</ul> 
<ul class="mzcontainer home-server" id="homeServer">
    <li class="home-server-item home-server-icons clearfix">
          <a class="home-server-icon" href="" target="_blank" data-mtype="store_index_gd_1" data-mdesc="固定资源位中第1个">
              <i class="home-font mcode"></i> M码通道
          </a>
          <a class="home-server-icon" href="" target="_blank" data-mtype="store_index_gd_2" data-mdesc="固定资源位中第2个">
              <i class="home-font mcycle"></i> 以旧换新
          </a>
          <a class="home-server-icon" href="" target="_blank" data-mtype="store_index_gd_3" data-mdesc="固定资源位中第3个">
              <i class="home-font insurance"></i> 魅族意外保
          </a>
          <a class="home-server-icon" href="" target="_blank" data-mtype="store_index_gd_4" data-mdesc="固定资源位中第4个">
              <i class="home-font queryOrder"></i> 回购单查询
          </a>
    </li>

        <li class="home-server-item">
            <a class="home-server-link" href="{{ url('/home/shop/detail/69') }}" target="_blank" data-mtype="store_index_xj_1" data-mdesc="小焦中第1个">
                <img class="home-server-img" src="{{ url('home/meizu/picture/cgbj0vlaftiasp5paadeqffiyi4420.png')}}" width="244" height="140">
            </a>
        </li>
        <li class="home-server-item">
            <a class="home-server-link" href="{{ url('/home/shop/detail/71') }}" target="_blank" data-mtype="store_index_xj_2" data-mdesc="小焦中第2个">
                <img class="home-server-img" src="{{ url('home/meizu/picture/cgbj0vlbpewayd7naads1tgfrew055.png')}}" width="244" height="140">
            </a>
        </li>
        <li class="home-server-item">
            <a class="home-server-link" href="{{ url('/home/shop/detail/78') }}" target="_blank" data-mtype="store_index_xj_3" data-mdesc="小焦中第3个">
                <img class="home-server-img" src="{{ url('home/meizu/picture/cgbj0flbbw2abq8baabli_49dco798.png')}}" width="244" height="140">
            </a>
        </li>
        <li class="home-server-item">
            <a class="home-server-link" href="{{ url('/home/shop/detail/2') }}" target="_blank" data-mtype="store_index_xj_4" data-mdesc="小焦中第4个">
                <img class="home-server-img" src="{{ url('home/meizu/picture/cgbj0flaftiaw7uraadoalj5u9m690.png')}}" width="244" height="140">
            </a>
        </li>
</ul> 
    <div class="home-hot mzcontainer">
    <div class="home-hot-header clearfix">
        <div class="home-hot-title">热品推荐</div>
        <div class="home-hot-ctrl clearfix">
            <div class="home-hot-ctrl-btn disabled" id="homeHotCtrlPrev" data-mtype="store_main_rp_a" data-mdesc="">
                <i class="home-font prev1"></i>
            </div>
            <div class="home-hot-ctrl-btn disabled" id="homeHotCtrlNext" data-mtype="store_main_rp_b" data-mdesc="">
                <i class="home-font next1"></i>
            </div>
        </div>
    </div>
    <div class="home-hot-content lazyload" id="homeHotContent" style="width:1241px;position: relative; overflow: hidden;">

         <ul class="recommend-slider-wrap" id="uls" style=" position: absolute; width: 2482px;">
        @foreach($data2 as $key=>$val)
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_1" class="rs-item-wrap" title="{{ $val->goodsName }}"
                                   href="{{ url('/home/shop/detail') }}/{{ $val->id }}"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" src="/uploads/avatar/{{ $val->picture }}" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">{{ $val->goodsName }} </h4>
                                    <h6 class="vm-subtitle" title="6期免息  16G直降100元">6期免息  16G直降100元</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">{{ $val->price }}</span>
                                    </p>
                                </div>
                                    <span class="mod-sign" style="background-color: #f0415f;">
                                         特惠
                                    </span>
                            </a>
                        </li>
                        @endforeach 
        </ul>
    </div>
</div>
 
    </div>
</main>
 
<div class="home-magnet" id="homeMagnet">
    <a class="home-magnet-link" title="建议反馈" href="//me.meizu.com/member/advice/index" target="_blank">
        <i class="home-font mail"></i>
    </a>
    <a class="home-magnet-link" title="回到顶部" id="homeGoToTop">
        <i class="home-font goToTop"></i>
    </a>
</div>        </div>
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
                            <img class="layout-footer-nav-wechat-img" src="{{ asset('home/meizu/picture/weixin.png')}}" alt="微信二维码">
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

<script src="{{ asset('home/meizu/js/layout-ca70dcecd0.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    var global = {
        sysTime: 1499740287856,
        settlementBig: false,
        category: [], 
      };
</script> 
<script src="{{ asset('home/meizu/js/index-708955739e.js')}}"type="text/javascript"></script> 
    <script type="text/javascript">

        var os = '-';
        var inte = null;
        
        function run()
        {
            inte = setInterval(function(){
                // 获取 left
                var left = $('#uls').position().left;
                
                // 判断
                if(left <= -1241)
                {
                    os = '+';
                }

                if(left >= 0)
                {
                    os = '-';
                }

                $('#uls').animate({
                    'left': os+'=1241px'
                }, 500);

            }, 4000);

        }

        // 入口。
        run(); 
    </script>
    <script type="text/javascript">
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('.lis').hover(

       
        function(){
             $('#div').css('display','block');
             var id = $(this).attr('id');

             $.ajax('/home/shop/ajaxb',{
                type:'POST',
                data:{id:id},
                success:function(data){

                    // console.log(data);
                    var str = '';

                    // 遍历
                     $.each(data, function(i,n){  
                         str += "<tr class='trs' value="+n.id+"><td>"+n.name+"</td></tr>";
                         // console.log(n);
                     }); 
                    // 写入 
                    $('.tab').html(str);
                },
                error:function(data){
                    alert('数据异常');
                },
                dataType:'json'

             }); 
        },
        function(){
             // $('#div').css('display','none');
        }
        );

        
    </script>
 

</body>
</html>

