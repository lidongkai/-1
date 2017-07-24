define(function(require, exports, module){

	"use strict";
	//雷锋网首页index.js

	//引入com_banner.js
	require('../common/com_banner');



	//优质评论

	window.requestAnimationFrame=(function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.msRequestAnimationFrame||function(b,a){return window.setTimeout(b,1000/60)}})();window.cancelAnimationFrame=window.cancelAnimationFrame||window.mozCancelAnimationFrame||window.clearTimeout;
	(function(){var b={};b.extend=function(c){var d=this;b.each(c,function(f,e){d[f]=e})};b.each=function(f,e){var d,c=f.length;if(c===undefined){for(d in f){if(e(d,f[d])===false){break}}}else{for(d=0;d<c;d++){if(e(d,f[d],c)===false){break}}}};b.Velocity=function(){var c,d=[],f=this;function e(){return(new Date()).getTime()-c}this.start=function(){d=[[0,0]];c=(new Date()).getTime()};this.end=function(){var h=d.length-1;if(h<1){return 0}var g=e()-d[h][0];if(g<200){return(d[0][1]-d[h][1])/g*1000}else{return 0}};this.change=function(g){d.unshift([e(),g]);if(d.length>4){d.length=4}}};b.StripingReduce=function(){var c;this.start=function(h,e){var g=20,f=h;function d(){f=parseFloat((f*0.8).toFixed(2));e(f);if(Math.abs(f)>0.1){c=setTimeout(d,g)}}c=setTimeout(d,g)};this.stop=function(){clearTimeout(c)}};b.changeAnime=function(g,e){var h=this,c=false;e=e?e:0.2;function f(){c=false}function i(l,k){function j(){var m=e*(h.to-h.cur);h.cur+=m;if(Math.abs(h.to-h.cur)<1){h.cur=h.to;f()}g(h.cur);if(c){window.requestAnimationFrame(j)}}h.to=l;h.cur=k?k:h.cur;if(c){return}c=true;window.requestAnimationFrame(j)}function d(){c=false}this.start=i;this.stop=d;this.cur=0;this.to=0;this.getState=function(){return c}};b.drag=function(c,d,i,h){var e=!-[1,],g=document;b.eventBind(c,"mousedown",f);function f(j){i(j);if(e){c.setCapture()}var k={mousemove:function(l){d({left:l.pageX-j.pageX,top:l.pageY-j.pageY,event:l})},mouseup:function(){if(h){h()}if(e){c.releaseCapture()}b.eventUnBind(document,k)}};b.eventBind(document,k);return false}};b.eventBind=function(i,d,f){var g,h;if(window.addEventListener){g="addEventListener";h=""}else{g="attachEvent";h="on"}if(typeof d==="string"){i[g](h+d,e(f))}else{for(var c in d){i[g](h+c,e(d[c]))}}function e(j){j.base_date_realListener=function(l){var k={pageX:l.pageX===undefined?document.documentElement.scrollLeft+l.clientX:l.pageX,pageY:l.pageY===undefined?document.documentElement.scrollTop+l.clientY:l.pageY,offsetX:l.offsetX,offsetY:l.offsetY,originalEvent:l,target:l.target||l.srcElement,preventDefault:function(){if(l.cancelable){l.preventDefault()}else{l.returnValue=false}},stopPropagation:function(){if(l.stopPropagation){l.stopPropagation()}else{l.cancelBubble=true}}};if(j(k)===false){k.preventDefault();k.stopPropagation()}};return j.base_date_realListener}};b.eventUnBind=function(h,d,e){var f,g;if(window.removeEventListener){f="removeEventListener";g=""}else{f="detachEvent";g="on"}if(typeof d==="string"){h[f](g+d,e.base_date_realListener)}else{for(var c in d){h[f](g+c,d[c].base_date_realListener)}}};b.mouseWheel=function(d,c){if(d.addEventListener){if(d.onmousewheel===undefined){d.addEventListener("DOMMouseScroll",c,false)}else{d.addEventListener("mousewheel",c,false)}}else{d.attachEvent("onmousewheel",c)}};b.removeMouseWheel=function(d,c){if(d.addEventListener){if(d.onmousewheel===undefined){d.removeEventListener("DOMMouseScroll",c,false)}else{d.removeEventListener("mousewheel",c,false)}}else{d.detachEvent("onmousewheel",c)}};b.extend({ContScroll:function ContScroll(params){var eBox=params.eBox,eCont=params.eCont,type=params.type||"top",moveAttrName=params.moveAttrName||type,boxWH,contWH,currContXY=0,tempContXY,velocity=new c.Velocity(),stripingReduce=new c.StripingReduce(),maxXY=0,that=this,isDrag=false,contMoveAnime=new c.changeAnime(function(v){eCont.style[moveAttrName]=v+"px"});c.drag(eBox,function(xy){xy=xy[type];velocity.change(xy);change(tempContXY+xy);isDrag=Math.abs(xy)>6},function(e){velocity.start();tempContXY=currContXY;stripingReduce.stop();isDrag=false},function(){stripingReduce.start(velocity.end()/70,function(v){change(currContXY+v)})});c.eventBind(eBox,"click",function(e){if(isDrag){e.preventDefault()}});c.mouseWheel(eBox,mouseWheel);this.update=update;this.moveCont=moveCont;this.change=function(){};this.mouseWheel=mouseWheel;function update(params){boxWH=params.boxWH;contWH=params.contWH;if(contWH-boxWH>1){maxXY=boxWH-contWH;change(currContXY)}}function mouseWheel(e){var pre,xy=currContXY,to=boxWH/4,isScroll;if(e.wheelDelta){pre=e.wheelDelta>0}else{pre=e.detail<0}if(pre){xy+=to}else{xy-=to}isScroll=change(xy);if(boxWH-contWH>1){return true}if(e.cancelable&&isScroll){e.preventDefault()}return !isScroll}function moveCont(v){var isScroll;if(v<maxXY){v=maxXY}else{if(v>0){v=0}}contMoveAnime.start(v);isScroll=v!==currContXY;currContXY=v;return isScroll}function change(v){var isScroll=moveCont(v);that.change(currContXY);return isScroll}},ScrollBar:function(params){var eBox=params.eBox,eCont=params.eCont,eBarBox=params.eBarBox,eBar=eBarBox.children[0],type=params.type||"top",moveAttrName=params.moveAttrName||type,typeSize=type==="top"?"height":"width",boxWH,currXY=0,tempXY,maxXY=0,contScroll=new c.ContScroll({eBox:eBox,eCont:eCont,type:type,moveAttrName:moveAttrName}),moveR;c.drag(eBar,function(xy){xy=xy[type];change(tempXY+xy)},function(e){tempXY=currXY});c.eventBind(eBarBox,"mousedown",function(e){var v;if((type==="left"?e.offsetX:e.offsetY)<currXY){v=boxWH}else{v=-boxWH}change(-v/moveR+currXY);e.preventDefault()});contScroll.change=function(v){moveBar(-v/moveR)};c.mouseWheel(eBarBox,contScroll.mouseWheel);this.update=update;function update(params){boxWH=params.boxWH;var contWH=params.contWH,barBoxWH=params.barBoxWH,r=contWH/boxWH,barWH;if(r<=1){eBarBox.style.display="none"}else{eBarBox.style.display="block";barWH=barBoxWH/r;if(barWH<30){barWH=30}maxXY=barBoxWH-barWH;moveR=(contWH-boxWH)/maxXY;eBar.style[typeSize]=barWH+"px"}contScroll.update({boxWH:boxWH,contWH:contWH})}function moveBar(v){if(v>maxXY){v=maxXY}else{if(v<0){v=0}}eBar.style[moveAttrName]=v+"px";currXY=v}function change(v){moveBar(v);contScroll.moveCont(-v*moveR)}}});window.c=window.common=b})();

	cmtScroll();

	function cmtScroll() {
	    var eBox = document.getElementById('demo'),
	    eCont = eBox.children[0],
	    eBarBox = document.getElementById('scrollBar');

	    var scrollBar = new c.ScrollBar({
	        eBox: eBox,
	        eCont: eCont,
	        eBarBox: eBarBox,
	        contDrag: false,
	        moveAttrName:'marginTop'
	    });
	    scrollBar.update({
	        boxWH: eBox.clientHeight,
	        contWH: eCont.clientHeight,
	        barBoxWH: eBarBox.clientHeight
	    });
	    var eBox = document.getElementById('scroll2'),
	    eCont = eBox.children[0],
	    eBarBox = document.getElementById('scroll-bar2');
	    //拉一拉 
	    var scrollBarT = new c.ScrollBar({
	        eBox: eBox,
	        eCont: eCont,
	        eBarBox: eBarBox,
	        contDrag: false,
	        moveAttrName:'marginTop'
	    });
	    scrollBarT.update({
	        boxWH: eBox.clientHeight,
	        contWH: eCont.clientHeight,
	        barBoxWH: eBarBox.clientHeight
	    });
	    
	}


	//文章加载
    var timer=0,
        loading=0,
        nowParm=parseInt(page)+2;
    if(totalPage<=1){
        $(".lph-pageList .loadMore").hide();
    }
    $(window).scroll(function(){
    	if(!timer){
    		timer=setTimeout(function(){
    			if($('body').height()-$(window).scrollTop()-$(window).height()<500){
	    	
	    			if(loading===0)	
	    			loadMore();
				
	    		}
	   
	    	},200);
	    	timer=0;
    	}

    });

    // 执行两次
    function loadMore(){
    	
        loading=1;
        page++;

        if(page>nowParm){
        	return;
        }
		$.ajax({
            url:  BASE_URL + 'site/AjaxLoad/page/'+page,
            type: 'get',
            dataType: 'json',
            success:function(data){
          
            	$('.lph-pageList .list ul').append(data.html);

            	// 文章图片延迟加载（其他地方可复用）
			    $('.lph-pageList .list ul').find("img.lazy").slice(-20).lazyload({
			      	effect : "fadeIn",
			      	threshold : 500
			    });

			    if(nowParm==page){
			    	$('.loadMore').hide();
                	$(".lph-page").show();
			    }

                loading=0;
            },
            error:function(){
                YP_warn('网络错误');
            }
        });
    }

	//拉一拉刷新
	var refresh=$(".traUni-news .box3 .refresh");
	var page2=1;
    var timer2=0,
        loading2=0;
	refresh.click(function(){
		var _this=$(this);
		_this.addClass('push');
		loadYjNews();
	
		setTimeout(function(){
			_this.removeClass('push')
		},400);
		setTimeout(function(){
			
			$(".traUni-news .box3 .list ul").addClass('trans');
			cmtScroll().scrollBarT;
			
		},600);
		setTimeout(function(){
			$(".traUni-news .box3 .list ul").removeClass('trans');
		},900);

	});
	function loadYjNews(){
		loading=1;
        page2++;
     		
            $.ajax({
	            url:  BASE_URL + 'site/YejieKuaixun/page/'+page2,
	            type: 'get',
	            dataType: 'json',
	            success:function(data){
            		var html='';
            		var totalPage=data.total;
            		if(page2<=totalPage){

		            	for(var i=0;i<data.article.length;i++){
		            		var arr=[
		            			'<li>',
		                            '<div class="time">'+data.article[i].public_time+'</div>',
		                            '<div class="headTit">',   
		                                '<a href="'+data.article[i].url+'" target="_blank">'+data.article[i].title+'</a>',
		                            '</div>',
		                        '</li>'
		            		];
		            		html += arr.join('');
		            	}
		            	$('.traUni-news .list ul li').fadeOut(100);
		            	setTimeout(function(){
		            		$('.traUni-news .list ul').html(html);
		            	},100);
		            	
	               		loading=0;
	            	}
	            	
	                
            	},
	            error:function(){
	                YP_warn('网络错误');
	            }
        });
  
	}

	// 推荐专题
	var pre  = $(".recmd-topic .prev");
	var nex  = $('.recmd-topic .next');
	var li   = $('.recmd-topic li');
	// var btn_a = $(".lph-slider .btns a");
	var len2   = li.length;
	
	//轮播次数
	var isNow2 = 0;
	var timer2 = 0;
	var liw2 = 260;

	//定时器
	function scroll2(){
		timer2=setInterval(function(){
			isNow2++;	
			if(isNow2>len2-1){
				isNow2=0;
			}
			$(".recmd-topic ul").animate({'marginLeft':-liw2*isNow2},300);

		},5000);
	}
	scroll2();

	$(".recmd-topic").hover(function(){
		if(len2>1){
			$('.recmd-topic  .arrow').show();
		}
		clearInterval(timer2);
	},function(){
		$('.recmd-topic .arrow').hide();
		scroll2();
	});

	$('.recmd-topic .next').on('click',function(){
		
		isNow2++;	
		if(isNow2>len2-1){
			isNow2=0;
		}
		$(".recmd-topic  ul").stop().animate({'marginLeft':-liw2*isNow2},300);

	});

	$('.recmd-topic .prev').on('click',function(){	

		isNow2--;	
		if(isNow2<0){
			isNow2=len2-1
		}
		$(".recmd-topic  ul").stop().animate({'marginLeft':-liw2*isNow2},300);
		
	});

	//侧边栏二维码

	$(".minCode").hover(function(){
		$(".minCode").addClass('show')
		
	},function(){
		$(".minCode").removeClass('show')
	})
		


});
