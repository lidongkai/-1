/*
* 顶部请求登陆（暂时沿用原站点方式，后续改为模板引擎）
*/
define(function(require, exports, module){
    var article_category;
    if(typeof(ARTICLE_CATEGORY)!='undefined'){
      article_category = ARTICLE_CATEGORY;
    }
    
    // 旧代码
    window.YP_IsLogin_Callbacks = []; // 已登录
    window.YP_UnLog_Callbacks = []; // 未登录
    require('jquery');
    var user = {
      'box':$("#lph-header-user")
    };

    var loginFns = [];

    user.init = function(){
      this.load();
    };
    user.load = function(){
      $.ajax({
            type:"get",
            async:'false',
            url: HOME_URL+"main/isLoginJson",
            dataType : "jsonp",
            data:{referer:document.referrer,'article_category':article_category},
            success:function(data){
              if(data.logged ==1 ){
                user.islog(data);
                for(var i = 0; i < loginFns.length; i++){
                  loginFns[i](data);
                }
                require.async("./com_addIntegralTip",function(integra){
                    integra.tip("login","登录成功！");
                });
                if(data.messageCount > 0){
                  user.showMessageCount(data.messageCount);
                }
                $('.yp-header-message').show();
              }else{
                user.checkYpLogin();
                user.unlog(data);
              }
            },
            error:function(){
              YP_alert("登录请求失败，请刷新页面");
            }
      });
    }

    // 登录状态回调
    user.on = function(ev,fn){
      if(ev == 'in'){
        loginFns.push(fn);
        YP_IsLogin_Callbacks.push(fn);
      }else if(ev == 'out'){
        YP_UnLog_Callbacks.push(fn);
      }
    }


    user.showMessageCount = function(count){
      //获取通知列表
      $.ajax({
        type:'get',
        url:BASE_URL+'notice/getNotice',
        dataType:'json',
        success:function(data){
          //20151229 修改头部模板的时候 注释掉了全部标注为已读的按钮
          var htmlstr = [
            '<div class="message">',
              //'<div class="select-all"><i class="success" title="全部已读"></i></div>',
              '<ul>',
                data.html,
              '</ul>',
              '<div class="check-all"><a href="http://home.leiphone.com">全部消息</a></div>',
            '</div>'
          ].join('');
          $('.yp-header-message').append(htmlstr);
          $('.yp-header-message .bell').addClass('expand');
          //显示隐藏消息层
            $('.yp-header-message .bell').on('mouseenter',function(){
              
              $(this).find('.ico').addClass('expand').parent().next('.message').stop().show();
              $(this).removeClass('bell-shake').addClass('hover');

            }).on('mouseleave',function(){

              $(this).find('.ico').removeClass('expand').parent().next('.message').stop().hide();
              if(count > 0) $(this).addClass('bell-shake');

            });
            $('.yp-header-message .message').on('mouseenter',function(){

              $(this).show();
              $('.yp-header-message .bell').removeClass('bell-shake');
              $('.yp-header-message .bell .ico').addClass('expand');

            })
            $('.yp-header-message .message').on('mouseleave',function(){

              $(this).hide();
              if( count != 0){
                $('.yp-header-message .bell').addClass('bell-shake');
              }
              $('.yp-header-message .bell .ico').removeClass('expand');

            });
            $('.yp-header-message').on('mouseleave',function(){
                $(this).find('.bell').removeClass('hover').addClass('expand');
            });
            
            //显示隐藏已读标记
            $('.yp-header-message .message ul li:not(".readed")').hover(function(){
                // $(this).find('p').after('<i class="success"></i>');
                $('.yp-header-message ul .read').on('click',function(e){
                  var noticeId = $(this).closest('li').data('notice-id');
                  $(this).closest('li').addClass('readed').off('hover');
                  $(this).remove();
                  count < 0 ? count = 0 : count--;
                  if(count == 0){   
                    $('.yp-header-message .bell').removeClass('bell-shake').find('.count').hide();
                  }else{
                    $('.yp-header-message .bell .count').html(count);
                  }
                  user.mark(noticeId);
                  return false;
                });
            },function(){
              $(this).find('i.success').remove();
            });

            //点击链接后
            $('.yp-header-message .message li:not(".readed") a').click(function(){
              var noticeId = $(this).closest('li').data('notice-id');
              user.mark(noticeId);
            });

            //全部已读
            $('.yp-header-message .select-all i').click(function(e){
              $('.yp-header-message .message li').addClass('readed').off('hover');
              count = 0;
              if(count == 0){
                $('.yp-header-message .bell').removeClass('bell-shake').find('.count').hide();

              }else{
                $('.yp-header-message .bell .count').html(count);
              }
              user.markAll();
              return false;
            });
        }
      });
      $('.yp-header-message .bell').addClass('bell-shake');
      $('.yp-header-message .bell .count').html(count).css('display','block');
    }

    //全部标记已读
    user.markAll = function() {
      $.ajax({
        type:"get",
        url:BASE_URL + '/notice/markAll',
        success: function(data){
          //YP_alert('全部已读成功')
        }
      });
    }

    //单条标记已读
    user.mark = function(id) {
      $.ajax({
        type:"get",
        url:BASE_URL + 'notice/mark?notice_id=' + id,
        dataType:'json',
        success:function(data) {
          //YP_alert('已读成功');
        }
      });
    }


    user.islog = function(data){
      var isVip = data.is_vip < 1 ? '' : 'isvip';
      var template = [
        '<input type="hidden" id="is_login_tag_status" value="1" />',
        '<div class="user-main user-haslg">',
            '<div class="avatar"><img src="'+data.avatar+'" alt=""></div>',
        '</div>',
        '<div class="user-link">',
                '<ul>',
                    data.isAuthor?'<li class="l3"><a href="'+HOME_URL+'authorcolumns/myArticle" rel="nofollow"><i></i>我的专栏</a></li>':'',
                    '<li class="l1"><a href="'+HOME_URL+'site/leiphone" rel="nofollow"><i></i>个人中心</a></li>',
                    '<li class="l2"><a href="'+data.logoutLink+'?returnUrl='+encodeURIComponent(location.href)+'" rel="nofollow"><i></i>退出</a></li>',
                '</ul>',
            '</div>'
      ].join('');
      $('.yp-header-user').html(template);
    }
    
    //老版本登录，注册弹窗iframe
    // user.unlog = function(data){
    //   var template = [
    //         '<input type="hidden" id="is_login_tag_status" value="0" />',
    //         '<div class="user-main">',
    //             '<div class="avatar"><img width="36" height="36" src="'+BASE_URL+'resWeb/home/images/member/noLogin.png" alt=""></div>',
    //         '</div>',
    //         '<div class="user-link">',
    //             '<ul>',
    //                 '<li class="l1"><a href="javascript:YP_LOGIN_WINDOW.show();"><i></i>登录</a></li>',
    //                 '<li class="l2"><a href="javascript:YP_LOGIN_WINDOW.register_show();"><i></i>注册</a></li>',
    //             '</ul>',
    //         '</div>'
    //   ].join('');
    //   $('.yp-header-user').html(template);
    // }

    user.unlog = function(data){
      var template = [
            '<input type="hidden" id="is_login_tag_status" value="0" />',
            '<div class="user-main">',
                '<div class="avatar"><a href="'+HOME_URL+'login/wechatLogin"><img width="36" height="36" src="'+BASE_URL+'resWeb/home/images/member/noLogin.png" alt=""></a></div>',
            '</div>'
      ].join('');
      $('.yp-header-user').html(template);
    }
    
    user.checkYpLogin = function(){
      $("#yingpeng_login_iframe").attr("src",$("#yingpeng_login_iframe_src").val());
    }
    
    user.loginCheck = function(){
        return $('#is_login_tag_status').val() > 0;
    }

    module.exports = user;

});
