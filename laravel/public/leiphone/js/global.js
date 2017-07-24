 // 测试用
if( typeof(HOME_URL) != 'undefined'){HOME_URL = HOME_URL}else{HOME_URL = 'http://home.leiphone.com/'}
if( typeof(SCRIPT_URL) != 'undefined'){SCRIPT_URL = SCRIPT_URL}else{SCRIPT_URL = 'http://home.leiphone.com/'}

/*
*	全局部分
*/


/*
*	公用模块(顶部、尾部、右侧栏、左侧文章列表)
*/
define(function(require, exports, module){
	
	require('../libs/jquery');
	// require('../libs/jquery.easing.min');

	// var searchAutoComplete = require('./com_searchTip');
	//雷锋网顶部广告位消失出现
    if(typeof $(".top-banner") != 'undefined'){
    	$(".top-banner").slideDown(400);
	    setTimeout(function(){
	        // $(".top-banner").animate({'height':0},400).hide();;
	        $(".top-banner").slideUp(400);
	    },10*1000);
    }
    //雷锋网顶部广告位消失出现
	//---------------------------------
	// 1.全局变量----------------------
	//---------------------------------
	var popVars = {};
	$.ajax({
		type:"get",
		dataType:"jsonp",
		url:BASE_URL+"site/globalVars",
		jsonpCallback:'callback',
		async:'false',
		success:function(data){
			popVars = data.popVars;
			G_Message(popVars.message,popVars.type)
		}
	})
	 function G_Message(message,type){
	     if(!message || message == ''){
	        return;
	     }
	     switch (type){
	         case 'success' :
	             YP_tip(message);
	             break;
	         case 'warn' :
	             YP_warn(message);
	             break;
	         case 'error':
	             YP_error(message);
	             break;
	         case 'alert':
	             YP_alert(message);
	             break;
	         default:
	             YP_tip(message);
	             break;
	     }
	 }

	//---------------------------------
	// 1.顶部模块----------------------
	//---------------------------------

	var lphHeader = function(){
		// 用户登录
		require.async('./com_login',function(user){
			user.init();
		})
		// 搜索框特效
		var topSearch = $(".lph-header .top .search"),
			topSearch_input = topSearch.find("input");
		topSearch_input.focusin(function(){
			topSearch.addClass("fcs");
		})
		topSearch_input.focusout(function(){
			topSearch.removeClass("fcs");
		})	
	

		// 搜索框自动补全
		// require.async('./com_searchTip',function(searchTip){
		// 	searchTip.init($(".lph-header .top .search"));
		// });
 		// var searchBox = $('#lph-header .search');
 		// var input = searchBox.find('input');
 		// searchAutoComplete.init(input);
 		// input.on('input propertychange',function(){
 		// 	searchAutoComplete.request();
 		// });
 		// input.on('data.update',function(ev,data){
 		// 	var html = searchAutoComplete.json2html(data);
 		// 	listBox.empty().html(html);
 		// });

		//导航栏箭头
 		;(function($){
		var menu = $('.yp-header-menu');
		var liAttr = [];
		if(menu.length > 0){
				menu.each(function(){
					if(!$(this).is(':hidden')){
						var list = $(this).find('ul>li');
						list.each(function(i,li){
							var l = $(li).position().left + $(li).width() / 2 - 10 / 2 - 1;
							liAttr.push(l);
						});
					}
				});
				menu.each(function(){
					var ul = $(this).find('ul');
					var arrow = $(this).find('.arrow');
					var menuList = ul.children('li');
					var activeIndex = ul.children('li.active').index();
					var duration = 250;
					activeIndex = activeIndex == -1 ? 0 : activeIndex;
					arrow.css({'left' : liAttr[activeIndex], 'display' : 'block'});
					$(this).on('mouseenter','ul>li',function(){
						var l = liAttr[$(this).index()];
						arrow.stop().animate({left : l},duration);
					}).on('mouseleave',function(){
						arrow.stop().animate({left : liAttr[activeIndex]},duration);
					});
				});

 				// 取滚动条宽度
				// function getScrollWidth () {
				// 	var eDiv = document.createElement('div'),
				// 		scrollW;
				// 	eDiv.style.width = '100px';
				// 	eDiv.style.height = '100px';
				// 	eDiv.style.overflow = 'scroll';
				// 	document.body.appendChild(eDiv);
				// 	scrollW = eDiv.offsetWidth - eDiv.clientWidth
				// 	document.body.removeChild(eDiv);
				// 	return scrollW;
				// }

				menu.each(function(){

					var ej = $(this).find('.ej');
					var menu = ej.find('.product-menu');
					//var scrollW=parseInt(getScrollWidth());

					ej.hover(function(){
						//$("body").css({"overflow":"hidden","margin-right":scrollW});
						//$(".yp-header-nav.nav-fixed").width($(window).width()-scrollW)
						clearTimeout(this.t);
						$(this).addClass('ej-hover');
					}, function(){
						//$(".yp-header-nav.nav-fixed").css("width","100%");
						//$("body").css({"overflow":"auto","margin-right":"0px"});
						var self = this;
						self.t = setTimeout(function(){
							$(self).removeClass('ej-hover');
						},100);
					});	
					// ej.hover(function(){
					// 	$(this).find(".sub-menu").removeAttr('display');
					// 	alert()
					// 	$(this).addClass('ui-show');
					// 	setTimeout(function(){
					// 		$(this).removeClass('ui-show');
					// 	},1)
					// },function(){

					// });
				});
			}
		})(jQuery);

	}
	lphHeader();



	//底部tabs
	$(".yp-footer-link .tab_tit a").click(function(){
		var _index=$(this).index();
		$(this).addClass('cur').siblings().removeClass('cur');
		$(".yp-footer-link .tab_con li").eq(_index).addClass('cur').siblings().removeClass('cur');
	});

	//搜索
	var ypSech = $(".yp-header-search");
	ypSech.click(function(event){
		event.stopPropagation();
		$(this).addClass('sel');
	});
	$(document).click(function(){
		if(ypSech.hasClass('sel')){
			ypSech.removeClass('sel');
		}
	})

	//---------------------------------
	// 2.左侧模块----------------------
	//---------------------------------
	var lphLeft = function(){
		// 文章图片延迟加载（其他地方可复用）
		require.async('../libs/jquery.lazyload',function(){
		  $(".lph-pageList img.lazy").lazyload({
		      effect : "fadeIn",
		      threshold : 500
		  });

		})
	}
	

	//---------------------------------
	// 3.右侧模块----------------------
	//---------------------------------
	var lphRight = function(){
		// 右侧业界快讯
		var rightKxLis = $(".lph-right .kuaixun .kx-ul li");
		rightKxLis.mouseenter(function(e){
			rightKxLis.removeClass("hov");
			$(this).addClass("hov");
		})


		// 右侧热门作者
		var rightAuWeixin = $(".lph-right .hotauthor .btns a.weixin");
		rightAuWeixin.hover(function(){
			var thiss = $(this);
			thiss.find(".aut-ewm").show(10,function(){
				$(this).addClass("show");
			})
		},function(){
			    var this2 = $(this);
				$(this).find(".aut-ewm").removeClass("show");
				setTimeout(function(){
					this2.find(".aut-ewm").hide(10);
				},300)
		})

		// 右侧精彩评论最新专题tab
		var rightPzIleft = [0,'50%'],
			pbzttab = $("#pbzttab"),
			pbzttabHd = pbzttab.find(".pbz-hd a"),
			pbzttabBd = pbzttab.find(".pbz-bd .bdd"),
			pbzttabCoin = pbzttab.find(".pbz-hd i");
		pbzttabHd.mouseenter(function(){
			var idx = $(this).index();
			pbzttabHd.removeClass("cur");
			pbzttabHd.eq(idx).addClass("cur");
			pbzttabBd.css({"display":"none"});
			pbzttabBd.eq(idx).css({"display":"block"});
			pbzttabCoin.animate({"left":rightPzIleft[idx]},300);
		})


		;(function(){
			// 修复ie10已下 输入框不支持placeholder属性
			var element = document.createElement('input');
			if(!('placeholder' in element)){
			    var nodes = [];
			    var inputs = document.getElementsByTagName('input');
			    var textareas = document.getElementsByTagName('textarea');
			    for(var i = 0,inputs_length = inputs.length; i < inputs_length; i++){
			        if(inputs[i].getAttribute('type') == 'text' && inputs[i].value == ''){
			            nodes.push(inputs[i]);
			        }
			    }
			    for(var j = 0, textareas_length = textareas.length; j < textareas_length; j++){
			        if(textareas[j].value == ''){
			            nodes.push(textareas[j]);
			        }
			    }
			    for(var k = 0, len = nodes.length; k < len; k++){
			        var node = nodes[k];
			        node.value = node.placehold = node.getAttribute('placeholder');
			        node.style.color = 'graytext';
			        node.attachEvent('onfocus',(function(self){
			            return function(){
			                if(self.value == self.placehold){
			                    self.value = '';
			                    self.style.color = '#333';
			                }
			            }
			        })(node));
			        node.attachEvent('onblur',(function(self){
			            return function(){
			                if(self.value == ''){
			                    self.style.color = 'graytext';
			                    self.value = self.placehold;
			                }
			            }
			        })(node));
			    }
			}
			element = null;
			})();

		

		// // 顶部广告
		$('.lph-top-ad .cls').hover(function(){
			$('.lph-top-ad .close-button').stop().animate({width : 92} , 200);
		},function(){
			$('.lph-top-ad .close-button').stop().animate({width : 0} , 200);
		}).click(function(){
			$(this).parent().fadeOut(200);
		});

		//搜索切换
		$('.sehType-list p').click(function() {
			var type = $(this).data('type');
			var text = $(this).html();
			
			$('input[name="site"]').val(type);
			$('.site-name').html(text);
		});

		// 知趣接口
		;(function(){
			var url = HAITAO_URL+'/app/banner/knewbi_index/';
			var o = $('.zhiqu-ads');
			if(o.length < 1){
				return;
			}
			var ul = o.find('ul');
			var btn = o.find('.reflash');
			var loaded = false;
			var loadAds = function(){
				$.ajax({
					url : url + Math.random() * 1000,
					dataType : 'jsonp',
					jsonpCallback : 'knewbi_ads',
					success : function(data){
						if(!loaded){
							o.show();
							loaded = true;
						}
						var html = '';
						$.each(data,function(i){

							html += '<li title="'+this.title+'" class="'+ (i%2===0?'odd' : 'even' )+'"><a target="_blank" href="'+this.link+'"><img width="134" height="134" alt="'+this.title+'" src="'+this.img+'" alt=""></a></li>';
						});
						ul.empty().append($(html).hide().fadeIn(500));
					}
				});
			}
			btn.click(function(){
				loadAds();
				btn.find('i').addClass('active');
				setTimeout(function(){
					btn.find('i').removeClass('active');
				},500);
			});
			loadAds();
		})();

	}
	lphRight();

	//---------------------------------
	// 4.尾部模块----------------------
	//---------------------------------
	var lphFooter = function(){
		// 上下滚动块
		var footerGotoBtns = $("#lph-footer-gotoBar a"),
			docHig = $('body').height(),
			winHig = $(window).height(),
			ajustTop = 50;
		footerGotoBtns.click(function(){
			gotoPosition($(this).attr("data-goto"));
		})

		$(window).scroll(function(){  

            if($(window).scrollTop()>200){  
                $(".gotoTop .top").css("display","block").fadeIn(400);
            }  
            else  
            {  
                $(".gotoTop .top").css("display","none");
            }  
        });  

		function gotoPosition(jqObj){
			var count =0;
			if(!isNaN(jqObj)){
				count = jqObj;
			}else{
				count = $(jqObj).offset().top -50;
			}
			$("html, body").animate({ scrollTop: count },{
		        duration: 400,  
		        easing: 'linear'
		    });
		}

		// 验证邮箱
		// var yzEmail = require('./com_yzEmail');
		
	}
	$(function(){
		
		lphLeft();
		lphFooter();

		// hover 效果
		$(document).find(".sub_a").hover(function(){
			$(this).addClass('enter');
		},function(){
			var _this=$(this);
			_this.removeClass('enter').addClass('leave');
			setTimeout(function(){
				_this.removeClass('leave')
			},500);
		});

		//爆料投稿
		$(".yp-header-menu .contribute").click(function(){
			if($("#is_login_tag_status").val() == 0) { //如果没登录
				// require.async("./common/com_pop", function(pop) {
				// 	YP_LOGIN_WINDOW.show();
				// })
				window.location.href=HOME_URL+"main/remoteLogin";
				return;
			}
			$(".applyAutor-pop").show();
			$(".lph-overlay").show();

		});

		var aAflag = true;
	    var complement = {
	        nickname : function(nickname){
	            
	            if($(".applyAutor-pop #name").val()==''){
	                $(".applyAutor-pop #name").parent().find(".error").html("*姓名不能为空")
	                aAflag=false;
	                return;
	            }
	            aAflag=true;
	            return true;
	        },
	        phone:function(phone){
	        	
	        	if(phone==""){
	        		$(".applyAutor-pop #phone").parent().find(".error").html("*电话不能为空");
	        		aAflag=false;
	                return;
	        	}
	        	
	        	if(phone!=''){
	        		var reg = /^0?1[3|4|5|7|8][0-9]\d{8}$/;
	        		if(!reg.test(phone)){
	                   $(".applyAutor-pop #phone").parent().find(".error").html("*电话格式不正确");
	                    aAflag=false;
	                    return;
	                }
	        	}
	        	aAflag=true;
	            return true;
	        },
	        email : function(email){
	            if(email!=''){
	                var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
	                if(!reg.test(email)){
	                    $(".applyAutor-pop #eml").parent().find(".error").html("*邮箱格式不正确");
	                    aAflag=false;
	                    return;
	                }
	            }
	            if(email==""){
	        		$(".applyAutor-pop #eml").parent().find(".error").html("*邮箱不能为空");
	        		aAflag=false;
	                return;
	        	}
	            aAflag=true;
	            return true;
	        },
	        company:function(company){
	            if(company=!''){
	            }
	            return true;
	        },
	        description:function(description){
	            if(description!=''){
	                
	            }
	            aAflag=true;
	            return true;
	        }
	    }
	    //昵称验证
	    $(".applyAutor-pop #name").blur(function(){

	        complement.nickname($(this).val());

	    }).focus(function(){

	        $(this).parent().find(".error").html("");

	    });
	    //电话验证
	    $(".applyAutor-pop #phone").blur(function(){

	        complement.phone($(this).val());

	    }).focus(function(){

	        $(this).parent().find(".error").html("");

	    });
	    //邮箱验证
	    $(".applyAutor-pop #eml").blur(function(){

	        complement.email($(this).val());

	    }).focus(function(){
	        $(".msg").html("")
	        $(this).parent().find(".error").html("");
	    });
	    $(document).on('click','.applyAutor-pop #subBtn',function(event) {

	    	$('.applyAutor-pop input[type="text"]').trigger("blur");

	        if(aAflag){

	        	var formData = $("#applyAutor").serialize();
                $.ajax({
                    url:HOME_URL+'Authorcolumns/MemberProposer',
                    type:'get',
                    data:formData,
                    dataType:'jsonp',
                    success:function(data){
                        if(data.status == 1){

                        	$(".applyAutor-pop").hide();
							$(".lph-overlay").hide();
							$(".applyAutor-pop .main .rows .error").html("");
							$(".applyAutor-pop .main .rows input[type='text']").val("");
							$(".applyAutor-pop .main .rows textarea").val("");
							setTimeout(function(){
								YP_alert(data.msg);
							},200)

                        }else{
                            YP_alert(data.msg)
                        }
                    },

                });

	        }

	    })

	   	// 关闭
	   	$(".applyAutor-pop i.close,.applyAutor-pop #clsBtn").click(function(){
	   		$(".applyAutor-pop").hide();
			$(".lph-overlay").hide();
			$(".applyAutor-pop .main .rows .error").html("");
			$(".applyAutor-pop .main .rows input[type='text']").val("");
			$(".applyAutor-pop .main .rows textarea").val("")

	   	});

	});
	
	$(window).trigger("scroll");
	//---------------------------------
	// 5.低版本浏览器----------------------
	//---------------------------------
	$("#low-explorer .exp-ico1").click(function(){
		window.open('http://www.firefox.com.cn/download/');
	});
	$("#low-explorer .exp-ico2").click(function(){
		window.open('http://windows.microsoft.com/en-us/internet-explorer/download-ie');
	});
	$("#low-explorer .exp-ico3").click(function(){
		window.open('http://www.google.cn/intl/zh-CN/chrome/browser/desktop/index.html');
	});
	$("#low-explorer .exp-ico4").click(function(){
		window.open('http://www.apple.com/cn/safari/');
	});
	$("#low-explorer .exp-ico5").click(function(){
		window.open('http://www.opera.com/');
	});

	// //导航栏新活动提示

 //    var ls=$(".events-list .ls");
 //    var ls_len=ls.length;
 //    var fin_len=$(".events-list .finished").length;
 //    var noStart;

 //    if(fin_len<ls_len){
 //    	$(".yp-header-menu .li-events a .point").show();
 //    }

 // 	ls.each(function(i){

 //        noStart=$(".events-list .ls").not($(".events-list .ls.finished"));

 //        if(getCookie('clicked'+noStart)){
 //            $(".yp-header-menu .li-events a .point").hide();
 //        };
        
 //    });
    
 //    $(".events-list .ls").not($(".events-list .ls.finished")).click(function(){

 //    	setCookie("clicked"+noStart,true,30);
 //    	$(".yp-header-menu .li-events a .point").hide();
    	

 //    });

 //    function getCookie(c_name){
 //        if (document.cookie.length>0){
 //          c_start=document.cookie.indexOf(c_name + "=");
 //          if (c_start!=-1){ 
 //            c_start=c_start + c_name.length+1 
 //            c_end=document.cookie.indexOf(";",c_start);
 //            if (c_end==-1) c_end=document.cookie.length;
 //            return unescape(document.cookie.substring(c_start,c_end));
 //            } 
 //          }
 //        return "";
 //    }
 //    function setCookie(c_name,value,expiredays){
 //        var exdate=new Date();
 //        exdate.setDate(exdate.getDate()+expiredays);
 //        document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
 //    }

 	//公告cookie
 	// if(getCookie("serverMove")==""){
 	// 	$(".server-pop").show();
 	// 	$(".server-mask").show();
 	// }
 	// $(document).on('click','#serCls',function(){
 	// 	setCookie('serverMove','show',2);
 	// 	$(".server-pop").hide();
 	// 	$(".server-mask").hide();
 	// })
 	//
 	// function getCookie(c_name){
    //     if (document.cookie.length>0){
    //       c_start=document.cookie.indexOf(c_name + "=");
    //       if (c_start!=-1){
    //         c_start=c_start + c_name.length+1
    //         c_end=document.cookie.indexOf(";",c_start);
    //         if (c_end==-1) c_end=document.cookie.length;
    //         return unescape(document.cookie.substring(c_start,c_end));
    //         }
    //       }
    //     return "";
    // }
    // function setCookie(c_name,value,expiredays){
    //     var exdate=new Date();
    //     exdate.setDate(exdate.getDate()+expiredays);
    //     document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
    // }
		//
});
