define(function(require, exports, module){

	require('../libs/jquery.js')
	//banner轮播
	var prev  = $(".lph-slider .prev");
	var next  = $('.lph-slider .next');
	var lis   = $('.lph-slider li');
	var btn_a = $(".lph-slider .btns a");
	var len   = lis.length;
	//轮播次数
	var isNow = 0;
	var timer = 0;
    
	//定时器
	function scroll(){
		timer=setInterval(function(){
			isNow++;	
			if(isNow>len-1){
				isNow=0;
			}
			$(".lph-slider ul").stop().animate({'marginLeft':-liW*isNow},300);

			btn_a.eq(isNow).addClass('cur').siblings().removeClass('cur');
		},5000);
	}
	scroll();

	$(".lph-slider ").hover(function(){
		if(len>1){
			$('.lph-slider  .arrow').show();
		}
		clearInterval(timer);
	},function(){
		$('.lph-slider  .arrow').hide();
		scroll();
	});

	$('.lph-slider  .next').on('click',function(){
		
		isNow++;	
		if(isNow>len-1){
			isNow=0;
		}
		$(".lph-slider  ul").stop().animate({'marginLeft':-liW*isNow},300);
		btn_a.eq(isNow).addClass('cur').siblings().removeClass('cur');

	});

	$('.lph-slider  .prev').on('click',function(){	

		isNow--;	
		if(isNow<0){
			isNow=len-1
		}
		$(".lph-slider  ul").stop().animate({'marginLeft':-liW*isNow},300);
		btn_a.eq(isNow).addClass('cur').siblings().removeClass('cur');
		
	});

	btn_a.hover(function(){
		isNow=$(this).index();
		$(".lph-slider  ul").stop().animate({'marginLeft':-liW*isNow},300);
		btn_a.eq(isNow).addClass('cur').siblings().removeClass('cur');

		clearInterval(timer);
	},function(){

	});


});