   @extends('home.user.layout')

@section('user')
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script charset="utf-8" src="./订单详情-魅族商城_files/v.js.下载"></script>
<script src="{{ asset('home/meizu/js/hm.js')}}"></script>
<script src="{{ asset('home/meizu/js/flow.js')}}"></script>
<script src="{{ asset('home/meizu/js/analytics-min.js')}}"></script>
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>订单详情-魅族商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电子商务平台,提供魅族PRO系列、魅族MX系列和魅蓝系列等产品的预约和购买.官方正品,全国联保.">
    <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="{{ asset('home/meizu/css/layout-98a57da498.css')}}">

    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link rel="stylesheet" href="{{ asset('home/meizu/css/orderDetail-jsonp-0ed7d220a3.css')}}">
<style>
    .sureGet .ui-pop-main .ui-pop-cont {
        line-height: 28px !important;
        margin: 64px auto 30px !important;
        padding: 0 30px;
    }

    .font-14 {
        font-size: 14px;
    }

    .big-font {
        font-size: 18px;
    }
</style>
</head>
<body>
<!-- common header -->
 


    <div class="store-wrap">
         

        <div class="main clearfix" style="position:absolute;left:-100px"> 
         

            <div class="right-content f-fr">
                <div class="orderDetail-main">
                    <div class="type-tab-btn">
                        <a href="javascript:;" class="active">订单详情</a>
                    </div>

                   <div class="editBox title">
                        <span class="title">收货人信息&nbsp;&nbsp;</span>

                    </div>
                    
                    <div class="address">
                        <p>收货人： {{ $data3->sname }}</p>
                        <p>地址：{{ $data3->address }}</p>
                        <p>电话：{{ $data3->iphone }}</p>
                        <p>邮编：102200</p>
                    </div>
                    
                        <div class="item product" id="products">
                                <div class="title clearfix">&nbsp;&nbsp;&nbsp;&nbsp;订单号：
                                    <span>{{ $ordernum }}
                                </span></div>

                            <table>
                                <tbody><tr>
                                    <td class="product" colspan="2" style="padding-left: 44px;">
                                        供应商：雷锋网</td>
                                    <td>单价</td> 
                                    <td>优惠</td> 
                                    <td>售后</td>
                                </tr> 
                                @foreach($data1 as $k=>$v)
                                        <tr class="b-b-dashed">
                                            <td class="p-r">
                                                
                                                <a href="" target="_blank">
                                                    <img src="{{ url('/uploads/avatar') }}/{{ $v->picture }}"></a></td>
                                            <td class="product"><span><a href="" target="_blank">
                                    {{ $v->goodsName }}<br> 
                                    <span></span>
                                    </a></span>
                                            </td>

                                            <td class="price">
                                                <span>{{ $v->price }}</span>
                                            </td> 
                                            <td class="cut">
                                                    --
                                            </td> 
                                            
                                        </tr>  
                                    @endforeach
                                     
                            </tbody></table>
                        </div>



                    <div class="item makeOrder">
                        <input type="hidden" id="pageId" value="1">
                        <input type="hidden" id="isOld" value="0">
                        <input type="hidden" id="isCart" value="1">
                        <input type="hidden" id="orderStatus" value="3">
                        <ul>
                            
                            <li class="end"><span>应付</span><span class="total big-red">￥{{ $total }}</span>
                            </li>
                        </ul>
                        <input type="hidden" id="relateSn" value="51071837482130650101">
                        <input type="hidden" id="addressId" value="7403746394000">
                        <input type="hidden" id="zipCode" value="102200">
                    </div> 

                </div>

            </div>
        </div>
    </div>

 

 
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
@endsection