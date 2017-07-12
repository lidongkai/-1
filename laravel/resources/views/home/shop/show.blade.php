    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>雷锋网-积分商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
    <meta name="description" content="魅族商城提供各种全部商品产品，包括手机,智能设备,智能穿戴,游戏设备,数码影音,手机配件/移动电源,移动存储/办公设备,生活周边，品质保障，可按推荐、商品上架时间，价格等放心购买，魅族商城将为您提供最好的子类目名称产品，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="keywords" content="全部商品,手机,智能设备,智能穿戴,游戏设备,数码影音,手机配件/移动电源,移动存储/办公设备,生活周边，魅族，魅族手机，魅族商城">
    <link rel="stylesheet" href="{{ asset('home/meizu/css/layout-51312a08ab.css')}}" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link href="{{ asset('home/meizu/css/search-00ea2bc25a.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- common header -->
<!-- <div class="layout-topbar clearfix" id="layoutTopbar">
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
</div><script>
    var layoutHeaderData = {
        header: [{"id":25,"href":"https://lists.meizu.com/page/list?categoryid=73","commodityType":0,"name":"全部分类","children":[{"name":"手机","href":"http://lists.meizu.com/page/list/?categoryid=76","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPGAIU-VAAqnoNZJkt8948.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"数码影音","href":"http://lists.meizu.com/page/list/?categoryid=231","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPCAbjRmAAaQNt-KZ6Q072.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"智能设备","href":"http://lists.meizu.com/page/list/?categoryid=153","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPKAc9eUAALQF0POZTo904.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"智能穿戴","href":"http://lists.meizu.com/page/list/?categoryid=174","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGAJIZIAATg2-3hRQ4628.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"游戏设备","href":"http://lists.meizu.com/page/list/?categoryid=181","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGALkdkAATOlMGeplg965.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"手机配件","href":"http://lists.meizu.com/page/list/?categoryid=186","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/41/Cgbj0FjlsPGAUklnAASPiYZvwZ8694.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"办公存储","href":"http://lists.meizu.com/page/list/?categoryid=227","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPGAB1CDAAfX3jfKrg0412.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0},{"name":"生活周边","href":"http://lists.meizu.com/page/list/?categoryid=222","price":0.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/14/Cgbj0VjlsPCAecrdAAa_FIBfrjA141.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0}],"more":[]},{"id":18,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A18778%2C21896%2C9%2C12529%2C22216%2C18382","commodityType":1,"name":"PRO手机","children":[{"name":"魅族PRO 6 Plus","href":"https://detail.meizu.com/item/pro6plus.html","price":2699.000,"originalPrice":2999.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/DC/CnQOjVhjjb6AcDdoABXIbr6WvK8260_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10637},"sellingPoint":"性能旗舰 冷静表现"},{"name":"魅族PRO 6s","href":"https://detail.meizu.com/item/pro_6s.html","price":2299.000,"originalPrice":2499.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/C4/CnQOjVhAAfGATHD5AA1jPCtyxxQ710_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10560}},{"name":"魅族PRO 6","href":"https://detail.meizu.com/item/meizu_pro6.html","price":2299.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/30/Cgbj0VkP3IaAMo4RABG5x6Omz88935_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10167},"sellingPoint":"最高立减400元"}],"more":[]},{"id":21,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A3%2C19475%2C5%2C10%2C11760%2C22119%2C868%2C1133%2C18237%2C22214%2C20724%2C22215%2C23107%2C19242%2C19243%2C20374%2C20100%2C21854%2C20579%2C20580%2C22463%2C18732","commodityType":1,"name":"魅蓝手机","children":[{"name":"魅蓝 A5","href":"https://detail.meizu.com/item/meilana5.html","price":699.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/B2/Cgbj0VlcXwaAJ3syAABXVIBRp8M285_126x126.jpg"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10947},"sellingPoint":"7月3日10:00 准时开售"},{"name":"魅蓝 E2","href":"https://detail.meizu.com/item/meilane2.html","price":1299.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/59/Cgbj0FkAVOCASFx2AAB6yRT6jV8170_126x126.jpg"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10911},"sellingPoint":"4月29日10点，首发开售，6期免息"},{"name":"魅蓝 5s","href":"http://detail.meizu.com/item/meilan5s.html","price":888.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/28/CnQOjViwBUiAZjKqAAndI9Fz2pU065_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10761},"sellingPoint":"32G套餐版，购机享3期免息"},{"name":"魅蓝 Note5","href":"https://detail.meizu.com/item/meilannote5.html","price":899.000,"originalPrice":999.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/35/CnQOjVjCTEWANnKrAAtuFSxnh1Q016_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":1,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10638},"sellingPoint":"购64G版本，享6期免息"},{"name":"魅蓝 X","href":"https://detail.meizu.com/item/meilanx.html","price":1699.000,"originalPrice":1699.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/C3/CnQOjVg-j0uAWlJIAAj4ScedJ9k483_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10618}},{"name":"魅蓝 5","href":"https://detail.meizu.com/item/meilan5.html","price":788.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/DB/Cix_s1hhz22AIuezAAuqcqE5YHc854_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10550},"sellingPoint":"大屏幕，大电池"},{"name":"魅蓝 E","href":"https://detail.meizu.com/item/meilan_e1.html","price":1099.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A2/Cgbj0FlZqBeAEpWNAAtHG2nRyAc153_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10387},"sellingPoint":"领券减50元 购机再送自拍杆"},{"name":"魅蓝 Max","href":"https://detail.meizu.com/item/meilan_max1.html","price":1699.000,"originalPrice":1699.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/D0/CnQOjVhPyJ-AW1LQAAvjYcX8eAE808_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":0,"pageGoodsDiscountMqSku":{"itemId":10478}}],"more":[]},{"id":24,"href":"https://lists.meizu.com/page/list?categoryid=76&features=80%3A8%2C18136%2C20098","commodityType":1,"name":"MX手机","children":[{"name":"魅族 MX6","href":"https://detail.meizu.com/item/mx6.html","price":1599.000,"originalPrice":0.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/0E/Cgbj0VjZzjiAMGEuAA7OmPNvWD8625_126x126.png"},"goodType":0,"tagColour":"","displayStartPriceTag":1,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10314}}],"more":[]},{"id":19,"href":"http://lists.meizu.com/page/list/?categoryid=231","commodityType":1,"name":"数码配件","children":[{"name":"魅族EP51蓝牙运动耳机","href":"https://detail.meizu.com/item/meizu_ep51.html?skuid=696","price":269.000,"originalPrice":269.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIhpOAZfAeAAHOwfpsRUs639_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10155},"sellingPoint":"明亮清晰的高音 强有力的低音"},{"name":"魅族HD50头戴式耳机","href":"https://detail.meizu.com/item/meizu_hd50.html?skuid=839","price":399.000,"originalPrice":399.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/98/Cgbj0FlFVNOAf-qRAATZrGgT1ak741_126x126.png"},"goodType":1,"tagThings":"热卖","tagColour":"#f59646","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10017},"sellingPoint":"清新简洁，有音质更有颜值"},{"name":"魅族 EP2X耳机","href":"https://detail.meizu.com/item/ep_2x.html?skuid=2505","price":129.000,"originalPrice":129.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIhkyAeuFqAAErzSizI8c740_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10563},"sellingPoint":"契合声音的流动之美"},{"name":"魅族蓝牙通话耳机","href":"https://detail.meizu.com/item/meizu_erji.html?skuid=2823","price":89.000,"originalPrice":89.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIhwWAcxAiAAL5gzRzFIY024_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10641},"sellingPoint":"经典小圆点，一键集大成"},{"name":"魅族蓝牙小音箱","href":"https://detail.meizu.com/item/meizu_yinxiang_a20.html?skuid=3569","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIhnOAFP1PAAbboUvsAC4345_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10760},"sellingPoint":"好音感 直达心灵"},{"name":"魅族移动电源（标准版）","href":"https://detail.meizu.com/item/mpower_m8e.html?skuid=1061","price":99.000,"originalPrice":99.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A9/Cgbj0VlJ2E-AfJshAAKdyPUHRpQ241_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10227},"sellingPoint":"素雅百搭 颜值典范"},{"name":"铁三角 ATH-EQ300M 耳机","href":"https://detail.meizu.com/item/ATH_EQ300M.html?skuid=3978","price":138.000,"originalPrice":138.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9C/Cgbj0FlMyOeANQdKAACW7PIbLZU073_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10842},"sellingPoint":"运动 出街利器 人声靓丽"},{"name":"JBL GO音乐金砖 蓝牙音响","href":"https://detail.meizu.com/item/JBL_JBLGO_LC.html?skuid=3078","price":268.000,"originalPrice":268.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/11/Cix_s1iZNteAYXd6AA8rGU1paRA348_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10678},"sellingPoint":"降噪麦克风  一键接听通话"}],"more":[]},{"id":20,"href":"http://lists.meizu.com/page/list/?categoryid=153","commodityType":1,"name":"智能设备","children":[{"name":"魅族手环","href":"https://detail.meizu.com/item/meizu_shouhuan_h1.html?skuid=3455","price":229.000,"originalPrice":229.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/23/Cix_s1imq8-AZlLQAAOqzSlfPuA761_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10722},"sellingPoint":"腕间流动的心率专家"},{"name":"魅族盒子","href":"https://detail.meizu.com/item/meizu_hezi.html?skuid=2463","price":399.000,"originalPrice":299.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIh2mAbWEnAAGoLQ8h81w399_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10546},"sellingPoint":"一键找回遥控器"},{"name":"魅族路由器 极速版","href":"https://detail.meizu.com/item/router_f1.html?skuid=1112","price":199.000,"originalPrice":199.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/A8/Cgbj0VlIh62APAl_AABXVrwLVgU248_126x126.jpg"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10241},"sellingPoint":"天生不凡 快狠稳"},{"name":"魅族智能体脂秤","href":"https://detail.meizu.com/item/smartscale.html?skuid=4435","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9B/Cgbj0FlIh8GAPJnNAAGCK4nlrc0593_126x126.png"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10944},"sellingPoint":"精准的数字，才是真实的你"},{"name":"乐心心率手环MAMBO2","href":"https://detail.meizu.com/item/mambo2.html?skuid=2448","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/00/E6/Cix_s1hrFXmAUuv8AAH8vdkEC9M905_126x126.png"},"goodType":1,"tagThings":"特惠","tagColour":"#f0415f","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10541},"sellingPoint":"超长续航 防水性能"},{"name":"暴风魔镜S1 智能VR眼镜","href":"https://detail.meizu.com/item/BF_S1_android.html?skuid=3189","price":199.000,"originalPrice":199.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/14/CnQOjVidYEGALArbAAHFhtrFdCs403_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10698},"sellingPoint":"轻出新境界  近视党福音"},{"name":"飞智黑武士蓝牙无线手柄","href":"https://detail.meizu.com/item/feizhi_shoubing.html?skuid=1442","price":116.000,"originalPrice":116.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/9C/Cgbj0FlMyX6Ae6ycAATDVSjZmTU411_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10320},"sellingPoint":"正版游戏云端适配"},{"name":"雷柏无线超薄键鼠套装9060","href":"https://detail.meizu.com/item/RAPOO_9060.html?skuid=3746","price":169.000,"originalPrice":169.000,"pic":{"imgSrc":"//openfile.meizu.com/group1/M00/01/AA/Cgbj0VlQtVCAGxApAAR053u7D6s226_126x126.png"},"goodType":1,"tagColour":"","displayStartPriceTag":0,"displayOriginalPrice":0,"autoPrice":1,"pageGoodsDiscountMqSku":{"itemId":10802},"sellingPoint":"紧凑设计 简单便捷"}],"more":[]}]
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
</div> -->

<!--下面是模板标签，不可删除-->

<main class="wrapper page-search" id="main">
    <div class="container">
        <section class="crumbs clearfix">
            <a data-mtype="store_list_mbx_index" href="//store.meizu.com/index.html?click=store_list_mbx_index">首页</a> &nbsp;&gt;&nbsp;
            <span class="crumbs-level" id="crumbsLevel" data-mtype="">
                全部商品
            </span>
        </section>

            <section class="brand" id="brand" style="display: none"></section>

        <section class="selector" id="selector">
            <!--  分类部分 start -->
                   <div class="sl-category" id="slCategory">
                    <div class="sl-line-wrap">
                        <div class="mod-key">分类：</div>
                        <div class="mod-value">
                            <div class="mod-value-list">
                                <ul>
                                @foreach($data1 as $key=>$val)
                                            <li class="ids" style="display:none">{{ $val->id }}</li>
                                            <li class="name"><a href="#">{{ $val->name }}</a>
                                               
                                            </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                       

                            <div class="mod-ext">
                                <a class="sl-e-more J_extMore" href="javascript:;" data-mtype="store_list_fl_more_1" style="">更多<i></i></a>
                            </div>
                    </div>
                   </div>
                   <div class="sl-prop" id="slProp">
                        <div class="sl-line-wrap">
                            <div class="mod-key"><span>品牌：</span></div>
                            <div class="mod-value">
                                <div class="mod-value-list">
                                    <ul>
                                           <li class="vm-all">
                                                <a title="全部" data-value="96:1,18951,884,18518,17898,17899,885,14257,20712,19410,881,882,883,17512,17513,19308,9159,1717,19539,11755,874,18439,876,877,871,872,19603,17984,20730,18266,18361,20697,7806,20498,19381,18070,18669,19791,20312,19747,886,879,880,875,20516,873,11236,18932,18107,17910,11292,17848,20270,19713,19309,19646,20011,20737,19088,20060,20061,20071,20250,20702,21099,21159,21326,22331,22428" data-mtype="store_list_xf_1_all" href="javascript:;">全部</a>
                                           </li> 
                                 
                                           <a href="#"><div class="abc"></div></a>
                                           
                                    </ul>
                                </div>
                            </div>
                                <div class="mod-ext">
                                    <a class="sl-e-more J_extMore" href="javascript:;" data-mtype="store_list_xf_1_more" style="">更多<i></i></a>
                                </div>

                        </div>
            </div>
          
        </section>

<section class="filter clearfix" id="filter" style="display:
    block">
    <div class="filter-order" id="J_filterOrder">
        <a class="active" data-tag="0" data-mtype="store_list_sx_1" href="javascript:void(0);">
            推荐
        </a>
        <a data-tag="1" data-mtype="store_list_sx_2" href="javascript:void(0);">
            新品
        </a>
        <a data-tag="2" data-mtype="store_list_sx_3" href="javascript:void(0);">
            价格<i class="icon-arrow-down"></i>
        </a>
    </div>
    <div class="filter-condition" id="J_filterCondition">
        <label class="bs-checkbox" data-mtype="store_list_sx_xz" >
            <i></i>仅显示有货商品
        </label>
    </div>
</section>
 

<section class="goods-list" id="goodsList">

        <ul class="goods-list-wrap clearfix ula" id="goodsListWrap" style="display:block"> 
             @foreach($data as $key=>$val) 
                <li class="gl-item"  id="lis" data-init="0">
                    <a data-mtype="store_list_kw_24" target="_blank" href="{{ url('/home/shop/detail') }}/{{ $val->id }}" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" src="/uploads/avatar/{{ $val->picture }}">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_24_clr_1" data-skuid="1608">
                                                <img width="40" height="40" class="lazy" src="/uploads/avatar/{{ $val->picture }}">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_24_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_24_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2>{{ $val->goodsName }}</h2>
                                <h3 class="gray" title="虚胖还是真胖？乐心S5告诉你！">
                                虚胖还是真胖？乐心S5告诉你！
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price">{{ $val->price }}</span>
                                </dd>
                        </div>
                    </a>
                </li> 
            @endforeach

        </ul>

        <ul class="goods-list-wrap clearfix uls" id="goodsListWrap" style="display:none"> 
               
        </ul>
         <li class="gl-item"  id="lis" data-init="0" style="display:none">
                    <a class="path" data-mtype="store_list_kw_24" target="_blank" href="" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" src="">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_24_clr_1" data-skuid="1608">
                                                <img width="40" height="40" class="lazy" src="">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_24_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_24_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2></h2>
                                <h3 class="gray" title="虚胖还是真胖？乐心S5告诉你！">
                                虚胖还是真胖？乐心S5告诉你！
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price"></span>
                                </dd>
                        </div>
                    </a>
                </li> 
</section>
<section class="empty clearfix" id="empty" style="display:none;">
    <div class="empty-bd">
        <div class="empty-bd-pic"></div>
        <div class="empty-bd-info">
            <h4 class="yahei">抱歉没有找到相关商品</h4>
            <p>建议您：<br/>
                1.适当减少筛选条件<br/>
                2.尝试其他关键字
            </p>
        </div>
    </div>
</section>

<section class="pages" id="pages">
</section>

            <section class="more-brands" style="display: none"></section>
            <section class="list-floorad" style="display: none"></section>

    <section class="recommend" id="recommend">
        <div class="recommend-hd">
            <h2 class="mod-title">为您推荐</h2>
            <div class="mod-control" id="recommendDirectionNav">
                <a class="vm-prev flex-prev iconfont" id="J_recommendPrev" data-mtype="sotre_list_tj_a" href="#">
                </a>
                <a class="vm-next flex-next iconfont" id="J_recommendNext" data-mtype="sotre_list_tj_b" href="#">
                </a>
            </div>
        </div>
        <div class="recommend-slider" id="J_recommendSlider">
            <ul class="recommend-slider-wrap">
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_1" class="rs-item-wrap" title="魅蓝 Note5"
                                   href="//detail.meizu.com/item/meilannote5.html?click=store_list_tj_1"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/00/C7/Cix_s1hGE96AUG5fAAtuFSxnh1Q216.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅蓝 Note5 </h4>
                                    <h6 class="vm-subtitle" title="6期免息  16G直降100元">6期免息  16G直降100元</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">899</span>
                                    </p>
                                </div>
                                    <span class="mod-sign" style="background-color: #f0415f;">
                                         特惠
                                    </span>
                            </a>
                        </li>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_2" class="rs-item-wrap" title="魅蓝 5s"
                                   href="//detail.meizu.com/item/meilan5s.html?click=store_list_tj_2"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/01/1D/CnQOjVij9TqAWnwcAAndI9Fz2pU075.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅蓝 5s </h4>
                                    <h6 class="vm-subtitle" title="购机享3期免息">购机享3期免息</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">888</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_3" class="rs-item-wrap" title="魅族 MX6"
                                   href="//detail.meizu.com/item/mx6.html?click=store_list_tj_3"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/00/19/Cix_s1eNvdmALdX_AA7OmPNvWD8560.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅族 MX6 </h4>
                                    <h6 class="vm-subtitle" title="全金属 拍照旗舰">全金属 拍照旗舰</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">1599</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_4" class="rs-item-wrap" title="魅蓝 Max"
                                   href="//detail.meizu.com/item/meilan_max1.html?click=store_list_tj_4"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/00/4F/Cix_s1fM2_iASNMvAAscQInnNPY866.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅蓝 Max </h4>
                                    <h6 class="vm-subtitle" title="大屏长续航 享3期免息">大屏长续航 享3期免息</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">1699</span>
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_5" class="rs-item-wrap" title="魅族 休闲旅行双肩包"
                                   href="//detail.meizu.com/item/meizu_bag.html?click=store_list_tj_5"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" data-original="//openfile.meizu.com/group1/M00/00/49/CnQOjVfJIReAKnozAAVBTlzLU4U593.png@480x480.jpg" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title">魅族 休闲旅行双肩包 </h4>
                                    <h6 class="vm-subtitle" title="曲面一体式设计 多功能隔层">曲面一体式设计 多功能隔层</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text">199</span>
                                    </p>
                                </div>
                            </a>
                        </li>
            </ul>
        </div>
    </section>
    </div>
</main>

<div  class="compare-bar"  id="compareBar"  style="position:fixed">
    <div  class="diff-bar"  id="diffBar">
        <div  class="diff-bar-title">
            <div  class="bar-title">
                <p>商品对比  (<span  class="bar-num"  id="barNum">0</span>/4)</p>
            </div>
            <div  class="operate" data-mtype="store_public_compare_close">
                <i  class="iconfont  icon-chahao  hide-me"></i>
            </div>
        </div>

        <div  class="diff-bd  tab-cons">
            <div  class="tab-con  clearfix"  id="tabCon"  style="display:  block">
                <div  class="diff-items"  id="diffItems">
                </div>
                <div  class="diff-operate"  id="diffOperate">
                    <a  href="javascript:void(0);"  id="J_btnCompare" class="btn  btn-primary  btn-lg" data-mtype="store_public_compare"><i></i>对比</a>
                    <a  href="javascript:void(0);"  id="J_compareClear" data-mtype="store_public_compare_delall">清空商品</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<!-- <div class="layout-footer clearfix">
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
</div> -->

<script src="{{ asset('/home/meizu/js/layout-ca70dcecd0.js')}}" type="text/javascript"></script>

<script src="{{ asset('/home/meizu/js/search-08821fe9a8.js')}}"></script>
 <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.name').on('click',function(){

            var id = $(this).prev('.ids').html();
            // alert(id); 
            var name = $(this).html();
            // alert(name);
            // 执行ajax
            $.ajax('/home/shop/ajax',{
                type:'POST',
                data:{id:id},
                success:function(data){
                    // 声明空字符串。
                     // console.log(data);
                    var str = '';

                    // 遍历
                     $.each(data, function(i,n){  
                         str += "<li class='sgood' value="+n.id+">"+n.name+"</li>";
                     }); 
                    // 写入 li
                    $('.abc').html(str);
                },
                error:function(data){
                    alert('数据异常');
                }, 
                dataType: 'json'
            });
        });

        $('.sgood').live("click",function(){ 

            $('.uls').css('display','block');
            $('.ula').remove();

            // 删除克隆的li
            $('.uls').empty(); 

           var id = $(this).val(); 
             
            $.ajax('/home/shop/ajaxs',{
                type:'POST',
                data:{id:id},
                success:function(data){
                    // 声明空字符串。
                     // console.log(data); 

                    // 遍历
                     $.each(data, function(i,n){  
                        // console.log(n);
                        var newli = $('#lis').clone();
                        newli.find('img').attr('src',"/uploads/avatar/"+n['picture']);
                        newli.find('.path').attr('href',"/home/shop/detail/"+n['id']);  
                        newli.find('h2').html(n['goodsName']); 
                        newli.find('.vm-price').html(n['price']);

                        // 显示
                        newli.css('display', 'block'); 
                        $(".uls").append(newli); 
                     });  

                },
                error:function(data){
                    alert('数据异常');
                }, 
                dataType: 'json'
            });
        }) 
</script>
 
    
</body>
    </html>
