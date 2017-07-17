 
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>雷锋网_读懂智能&amp;未来</title>
    <meta name="keywords" content="智能硬件,虚拟现实,VR,AR,移动互联网,互联网媒体,移动终端" />
  <meta name="description" content="雷锋网是国内最早关注人工智能和智能硬件领域的互联网科技媒体，内容涵盖人工智能、智能硬件、机器人、智能驾驶、ARVR、网络安全、物联网、未来医疗、金融科技等9大领域。雷锋网致力于连接和服务学术界、工业界与投资界，为用户提供更专业的互联网科技资讯和培训服务，让用户读懂智能与未来。" />
    <meta name="sogou_site_verification" content="ilkqV8FehD"/>
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
     <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />

        <link rel="stylesheet"  type="text/css" href="/leiphone/css/common.css"  />
        
      <link rel="stylesheet"  type="text/css" href="/leiphone/css/list.css" />

    <link rel="stylesheet" type="text/css" href="/leiphone/css/jquery.mcustomscrollbar.css"  />
    <link rel="stylesheet" type="text/css" href="/leiphone/css/calendar.css"  />
    <link rel="stylesheet" type="text/css" href="/leiphone/css/index.css"  />  
     <link rel="stylesheet" href="{{ asset('home/meizu/css/layout-51312a08ab.css')}}" /> 

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link href="{{ asset('home/meizu/css/index-ae8b657ce8.css')}}" rel="stylesheet"/>
<link href="{{ asset('home/meizu/css/search-00ea2bc25a.css')}}" rel="stylesheet" />
</head>
<body>

<!-- header start-->
<header class="yp-header">
    <div class="yp-header-top clr">
        <a class="yp-header-logo" href="/home/index">
            <img src="/leiphone/picture/lph-headerlogo.png"  alt="雷锋网">
                        <span>读懂<h1>智能</h1>&未来</span>
        </a>
        
        <!-- 用户登录 -->
        @if(session('master'))
         <div id="hidd">
            <div class="yp-header-message"  style="margin-top:22px;font-size:16px;">
              <!--   <a href="https://home.leiphone.com/login/wechatLogin" class="bell">
                     <i class="ico"></i>
                     <em class="count"></em>   
                </a> -->
                <!-- <ul class="nav navbar-nav navbar-right"> -->
             <a href="/home/loginout">退出</a>
              <!-- </ul> -->
              </div>
              <div class="yp-header-message" style="margin-top:22px;font-size:16px;">{{ session('master')->username }}</div>
        </div>

        <div class="yp-header-user-box">
            <div class="yp-header-user">
                <!-- <input type="hidden" id="is_login_tag_status" value="1"> -->
                <div class="user-main user-haslg">
                    <div class="avatar"><a href="/home/user/index"><img width="36" height="36" src="/uploads/avatar/{{ session('master')->photo }}" alt=""></a></div>
                </div>
               
            </div>
        </div>
         @else
        <!-- 用户消息 -->
        <div id="hidd">
            <div class="yp-header-message"  style="margin-top:22px;font-size:16px;">
            <a data-toggle="modal" data-target="#register" href="">注册</a>
            </div>
            <div class="yp-header-message" style="margin-top:22px;font-size:16px;">
            <a data-toggle="modal" data-target="#login" href="">登录</a>
            </div>
        </div>
        @endif

        <div class="yp-header-search">
           <form method="GET" name="allSearchForm" action="https://www.leiphone.com/search" style="height: 100%;">
                <input type="hidden" name="site" value="">
                <input class="text" type="text" name="s" autocomplete="off" value="">
                <input class="submit" type="submit" value="">
                <input class="submit2" type="submit" value="">
            </form>
        </div>
        
    </div>
</header> 

     <!-- 注册窗口 -->
      <div id="register" class="modal fade" tabindex="-1" aria-hidden="true" data-backdrop="static">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <button class="close" data-dismiss="modal">
                          <span>&times;</span>
                     </button>
                </div>
                  <div class="modal-title">
                    <h1 class="text-center">注册</h1>
                </div>

        <div id="show" style="display:none" class="alert alert-danger"></div>

                 <div class="modal-body">
                      <!-- <form class="form-group" action="{{ url('home/login/register') }}" method="post"> -->
                 
                              {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="">用户名</label>
                                 <input id="rname" class="form-control" name="username" type="text" placeholder="6-15位字母或数字">
                              </div>
                             <div class="form-group">
                                <label for="">密码</label>
                                  <input id="rpass" class="form-control" name="password" type="password" placeholder="至少6位字母或数字">
                             </div>
                              <div class="form-group">
                                  <label for="">再次输入密码</label>
                                  <input id="repass" class="form-control" name="repass" type="password" placeholder="至少6位字母或数字">
                              </div>
                              <div class="form-group">
                                  <label for="">邮箱</label>
                                  <input id="email" class="form-control" name="email" type="email" placeholder="例如:123@123.com">
                              </div>
                                <!-- <div class="form-group has-feedback">
                                <input id="code" type="text" name="code" class="form-control" placeholder="请输入验证码">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                <a onclick="javascript:re_captcha();" ><img src="{{ URL('kit/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>
                              </div> -->
                              <div class="text-right">
                                  <button id="subs" class="btn btn-primary" type="">提交</button>
                                  <button class="btn btn-danger" data-dismiss="modal">取消</button>
                              </div>
                              <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login">已有账号？点我登录</a>
                      <!-- </form> -->
                  </div>
              </div>
          </div>
      </div>
      <!-- 登录窗口 -->
    <div id="login" class="modal fade" aria-hidden="true" data-backdrop="static">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <button class="close" data-dismiss="modal">
                          <span>&times;</span>
                      </button>
                  </div>
                  <div class="modal-title">
                     <h1 class="text-center">登录</h1>                  
                  </div>
                  <div class="modal-body">
                  @if(session('info'))
              <div class="alert alert-danger">
                {{ session('info') }}
              </div>
            @endif
                <!-- <form class="form-group" action="{{ url('home/login/login') }}" method="post"> -->
                <!-- <form class="form-group" onsubmit="return doSubmit()" action="" method="post"> -->
                          {{ csrf_field() }}
                   <label for="" >用户名</label>
                   <input id='username' class="form-control" type="text" placeholder="请输入用户名" name="username">
                   </div>
                   <div class="form-group">
                    <label for="">密码</label>
                    <input id="password" class="form-control" type="password" placeholder="请输入密码" name="password">
                    </div>
                   <div class="text-right">
                   <div class="checkbox icheck">
                  <label>
                  <input name="remember_me" type="checkbox">记住我
                  </label>
                  </div>
                       <button id="btns" class="btn btn-primary" type="">登录</button>
                      <!-- <input type="" id="bts" class="btn btn-primary" value="登录">
                        --><button class="btn btn-danger" data-dismiss="modal">取消</button>
                  </div>                             
                  <a href="" data-toggle="modal" data-dismiss="modal" data-target="#register">还没有账号？点我注册</a>
                <!-- </form>                  -->
            </div>
         </div>
      </div>
   </div>
  
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
 >
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
<div class="home" style="width:1500px">
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
<ul class="home-category" id="homeCategory" style="height:500px">
        @foreach($data1 as $key=>$val)
        <li class="home-category-item lis" id="{{ $val->id }}">
            <a href="{{ url('/home/shop/show') }}" class="home-category-link" data-mtype="store_index_cdh_1" data-mdesc="侧边导航中第1个分类">
                {{ $val->name }}
            </a>
        </li> 
        @endforeach
        <div id="div" class="home-right" style="width:250px;height:480px;position: absolute;left:244px;top:0;background:#FFF;display:none">
             <table id="example2" class="table table-bordered table-hover tab" style="border:1px;cellspacing="10" cellpadding="30"">
                
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
  <script  src="/leiphone/js/jquery-3.2.1.min.js"></script>
   
    <script  src="/leiphone/js/bootstrap.min.js"></script>
   
    <link href="/leiphone/css/bootstrap.min.css" rel="stylesheet">

    
    <script src="/leiphone/js/jquery-sea.js"></script>
    <script src="/leiphone/js/sea.js"></script>
   
    <script  src="/leiphone/js/aq_auth.js"></script>
    
   
   
   
    <script src="/leiphone/js/list.js"></script>
    <script  src="/leiphone/js/mobilecheck.js"></script>
    <script  src="/leiphone/js/com_banner.js"></script>
   
    <script  src="/leiphone/js/global.js"></script>
    <script  src="/leiphone/js/index.js"></script>
    <script  src="/leiphone/js/calendarNews.js"></script>  
   <script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  
    $('#btns').click(function(){


      var username = $('#username').val();
      var password = $('#password').val();
      $.ajax('/home/login/ajaxlogin',{
      type:'post',
      data:{username:username,password:password},
      dataType:'json',
      success:function(data)
      {
        if(data == '0')
        {
          alert('恭喜,登录成功');
          location.href = '/home/layout';
          // $('#hidd').hide();
        }
        if(data == '1')
        {
          alert('用户名不正确');
        }
        if(data == '2')
        {
          alert('密码不正确');
        } 
      },
      error:function(data)
      {
        alert('数据异常');
      }
      });
    });

     $('#subs').click(function(){
      var rname = $('#rname').val();
      var rpass = $('#rpass').val();
      var repass = $('#repass').val();
      var email = $('#email').val();
      $.ajax('/home/login/register',{
      type:'post',
      data:{username:rname,password:rpass,repwd:repass,email:email},
      dataType:'json',
      success:function(data)
      {
        if(data == '0' )
        {
          alert('恭喜您.注册成功');
          location.href = '/home/layout';
        }
      },
      error: function(msg) {
      var username1=JSON.parse(msg.responseText).username;
      var password1=JSON.parse(msg.responseText).password;
      var email1=JSON.parse(msg.responseText).email;
      username1 = username1 == undefined ? '' : username1;
      password1 = password1 == undefined ? '' : password1;
      email1 = email1 == undefined ? '' : email1;
     
      $('#show').css('display','block');

      $('#show').html(username1+','+password1+','+email1);
       
     
      },
      });
    });

   </script>
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
             $('#div').css('display','none');
        }
        );

        
    </script>
 

</body>
</html>

