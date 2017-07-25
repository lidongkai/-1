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
    <link rel="stylesheet"  type="text/css" href="/leiphone/css/common.css"  />    
    <link rel="stylesheet"  type="text/css" href="/leiphone/css/list.css" />
    <link rel="stylesheet" type="text/css" href="/leiphone/css/index.css"  />    
    <link rel="stylesheet" type="text/css" href="/leiphone/css/set.css"  />
    <link rel="stylesheet" type="text/css" href="/leiphone/css/tips.css"  />

    <script type="text/javascript" src="/leiphone/js/bw-loader-411.4.5.js"></script>
    <script type="text/javascript" src="/leiphone/js/mobilecheck.js"></script>
    <script  src="/leiphone/js/jquery-3.2.1.min.js"></script>
    <script  src="/leiphone/js/bootstrap.min.js"></script>
    <link href="/leiphone/css/bootstrap.min.css" rel="stylesheet">
    <script src="/leiphone/js/jquery-sea.js"></script>
    <script  src="/leiphone/js/global.js"></script>
    <script src="/leiphone/js/com_banner.js"></script>
    <script src="/leiphone/js/list.js"></script>
    
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
           <a href="/home/loginout">退出</a>
            </div>
            <div class="yp-header-message" style="margin-top:22px;font-size:16px;">积分:{{ session('master')->score }}</div>
            <div class="yp-header-message" style="margin-top:22px;font-size:16px;">{{ session('master')->username }}</div>
      </div>

      <div class="yp-header-user-box">
        <div class="yp-header-user">
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
            <div  class="yp-header-message" style="margin-top:22px;font-size:16px;">
            <a id="loginkk" data-toggle="modal" data-target="#login" href="">登录</a>
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
                        {{ csrf_field() }}
                   <label for="" >用户名</label>
                   <input id='username' class="form-control" type="text" placeholder="请输入用户名" name="username">
                   </div>
                   <div class="modal-body">
                    <label for="">密码</label>
                    <input id="password" class="form-control" type="password" placeholder="请输入密码" name="password">
                    </div>
                   <div class="text-center">
                   <div class="checkbox icheck">
                 <!--  <label>
                  <input name="remember_me" type="checkbox">记住我
                  </label> -->
                  </div>
                      <button id="btns" class="btn btn-primary" type="">登录</button>
                      <button class="btn btn-danger" data-dismiss="modal">取消</button>
                  </div>                             
                  <a href="" data-toggle="modal" data-dismiss="modal" data-target="#register">还没有账号？点我注册</a>
                <!-- </form>                  -->
            </div>
         </div>
      </div>

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
          location.href = location.href;
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
          location.href = '/home/index';
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

   <script>
  var liW=388;
  var currentMonthNews = {"ret":0,"data":{"2017-07-07":[{"title":"CCF-GAIR 2017 | \u6df1\u5733","url":"http:\/\/gair.leiphone.com\/"}],"2017-07-08":[{"title":"CCF-GAIR 2017 | \u6df1\u5733","url":"http:\/\/gair.leiphone.com\/"}],"2017-07-09":[{"title":"CCF-GAIR 2017 | \u6df1\u5733","url":"http:\/\/gair.leiphone.com\/"},{"title":"\u963f\u91cc\u4e91\u5b89\u5168\u5cf0\u4f1a","url":"none"}],"2017-07-22":[{"title":"BlackHat \u00ae\ufe0f USA 2017 | \u7f8e\u56fd\u62c9\u65af\u7ef4\u52a0\u65af ","url":"https:\/\/www.blackhat.com\/us-17\/"},{"title":"CCAI 2017 | \u676d\u5dde","url":"http:\/\/ccai.caai.cn\/"},{"title":"KDD Summer School - \u6570\u636e\u9a71\u52a8\u667a\u80fd | \u6210\u90fd","url":"http:\/\/kddchina.org\/#\/Content\/summerschool"},{"title":"CVPR 2017 | \u590f\u5a01\u5937\uff0c\u7f8e\u56fd","url":"http:\/\/cvpr2017.thecvf.com\/"}],"2017-07-28":[{"title":"RSAC\u00ae\ufe0f Asia | \u65b0\u52a0\u5761","url":"https:\/\/www.rsaconference.com\/events\/ap17"},{"title":"\u4e2d\u56fd\u673a\u5668\u5b66\u4e60\u4f1a\u8bae CCML2017 | \u5929\u6d25","url":"http:\/\/ccml2017.org.cn\/"}],"2017-07-27":[{"title":"DEFCON 25 | \u7f8e\u56fd\u62c9\u65af\u7ef4\u52a0\u65af","url":"https:\/\/defcon.org\/html\/defcon-25\/dc-25-index.html"},{"title":"\u4e2d\u56fd\u673a\u5668\u5b66\u4e60\u4f1a\u8bae CCML2017 | \u5929\u6d25","url":"http:\/\/ccml2017.org.cn\/"}],"2017-07-23":[{"title":"CCAI 2017 | \u676d\u5dde","url":"http:\/\/ccai.caai.cn\/"},{"title":"KDD Summer School - \u6570\u636e\u9a71\u52a8\u667a\u80fd | \u6210\u90fd","url":"http:\/\/kddchina.org\/#\/Content\/summerschool"},{"title":"CVPR 2017 | \u590f\u5a01\u5937\uff0c\u7f8e\u56fd","url":"http:\/\/cvpr2017.thecvf.com\/"}],"2017-06-30":[{"title":"2017\u5168\u7403\u673a\u5668\u5b66\u4e60\u6280\u672f\u5927\u4f1a | \u5317\u4eac","url":"http:\/\/ml-summit.org\/"}],"2017-07-26":[{"title":"\u4e2d\u56fd\u673a\u5668\u5b66\u4e60\u4f1a\u8bae CCML2017 | \u5929\u6d25","url":"http:\/\/ccml2017.org.cn\/"},{"title":"CVPR 2017 IEEE\u56fd\u9645\u8ba1\u7b97\u673a\u89c6\u89c9\u4e0e\u6a21\u5f0f\u8bc6\u522b\u4f1a\u8bae | \u590f\u5a01\u5937\uff0c\u7f8e\u56fd","url":"http:\/\/cvpr2017.thecvf.com\/"}],"2017-07-24":[{"title":"KDD Summer School - \u6570\u636e\u9a71\u52a8\u667a\u80fd | \u6210\u90fd","url":"http:\/\/kddchina.org\/#\/Content\/summerschool"},{"title":"CVPR 2017 | \u590f\u5a01\u5937\uff0c\u7f8e\u56fd","url":"http:\/\/cvpr2017.thecvf.com\/"}],"2017-07-21":[{"title":"CVPR 2017 | \u590f\u5a01\u5937\uff0c\u7f8e\u56fd","url":"http:\/\/cvpr2017.thecvf.com\/"}],"2017-07-25":[{"title":"CVPR 2017 | \u590f\u5a01\u5937\uff0c\u7f8e\u56fd","url":"http:\/\/cvpr2017.thecvf.com\/"}],"2017-07-30":[{"title":"ACL 2017 \u56fd\u9645\u8ba1\u7b97\u8bed\u8a00\u5b66\u9876\u7ea7\u4f1a\u8bae | \u6e29\u54e5\u534e\uff0c\u52a0\u62ff\u5927","url":"http:\/\/acl2017.org\/"}]}};
    seajs.use(['https://www.leiphone.com/resWeb/js/index/index','https://www.leiphone.com/resWeb/js/index/calendarNews']);
  </script>
</body>

  @yield('content') 

<footer class='yp-footer'>

<!-- 友情链接，热门关键字 -->
<div class="yp-footer-link">
<div class="wrapper">
<div class="tab_tit clr">

</div>
</div>
</div>

<div class="yp-footer-msg">
<div class="wrapper clr">
<!-- links -->
<div class="links" style="text-align:center">
<a rel="nofollow" href="https://www.leiphone.com/us/concact">联系我们</a>
<a rel="nofollow" href="https://www.leiphone.com/us/index">关于我们</a>
<a rel="nofollow" href="https://www.leiphone.com/news/201611/0nOqnvNoxI6vX4L9.html">加入我们</a>
<a rel="nofollow" href="https://www.leiphone.com/us/feedback">意见反馈</a>
<a rel="nofollow" href="https://www.leiphone.com/contribute/index">投稿</a>
</div>
<!-- 下载app -->
<div class="downLoad-app">
<div class="qrcode">
<!-- /site/download -->
<img src="/leiphone/picture/downcode.jpg" width="96" height="96" alt="" />
</div>
<div class="txt">
<p>下载雷锋网客户端</p>
<a rel="nofollow" href="https://itunes.apple.com/cn/app/lei-feng-wang-yi-dong-hu-lian/id579529120?mt=8" target="_blank" class='iPhone'><em></em>iPhone</a>
<a rel="nofollow" href="https://android.myapp.com/myapp/detail.htm?apkName=com.leiphone.app" target="_blank" class='Android'><em></em>Android</a>
</div>
</div>
<!-- 关注-->
<div class="contact">
<a rel="nofollow" href="mailto:web@leiphone.com " class='eml sub_a'><em></em></a>
<a rel="nofollow" href="https://www.weibo.com/p/1006062118746300" target="_blank" class='sina sub_a'><em></em></a>
</div>
</div>
</div>
<br/><br/><br/>
    <!-- copyRight -->
    <div class="yp-copyright">
        <div class="wrapper">
            <p>Copyright © 2011-2018 www.leiphone.com 雷锋网-移动互联网智能终端第一媒体 All Rights Reserved <a target="_blank" style="color:#9baab6;" href="https://www.miitbeian.gov.cn">粤ICP备11095991号-1</a>
                <img src="/leiphone/picture/anquan.png" alt="">
                &nbsp;&nbsp;
                <a href="http://szcert.ebs.org.cn/0ee69ac3-f114-4bd9-9ea1-a5a04f7cd44b" rel="nofollow" target="_blank"></a>
                                &nbsp;&nbsp;
                <a rel="nofollow" href="" target="_blank" style="color:#9baab6">ICP证粤B2-20150332</a>
                <a rel="nofollow" href="" target="_blank" rel="nofollow" style="float:right">
                    <img src="/leiphone/picture/hzs4.png">
                </a>
            </p>
        </div>
    </div>
</footer>

</body>
</html>
