define(function(require, exports, module) {

	//硬创公开课js
	//图片轮播
	var lis = $('.ycLesson-item .slider li');
	var liw = lis.width();
	var firstLi = lis.first().clone();
	var uls = $(".ycLesson-item .slider ul");
	uls.append(firstLi);
	var lis2 = $('.ycLesson-item .slider li');
	uls.width(lis2.length*liw);

	var i=0,timer;

	autoPlay();

	function move(num){

		//如果是最后一张
		if(i==lis2.length){
			i=1;
			uls.css('left',0);
		}
		//第一张
		if(i==-1){
			i=lis2.length-2;
			uls.css('left',-(lis2.length-1)*liw);
		}

		uls.stop().animate({'left':-(i*liw)},300)

		if(i==lis2.length-1){
			$('.ycLesson-item .btns a').eq(0).addClass('cur').siblings().removeClass('cur');
		}else{
			$('.ycLesson-item .btns a').eq(i).addClass('cur').siblings().removeClass('cur');
		}

	}

	function autoPlay(){
		timer = setInterval(function(){
			i++;
			move(i);
		},7000)
	}

	$('.ycLesson-item .btns a').mouseenter(function(){
		i = $(this).index();
		move(i)
	});
	$(".ycLesson-item .slider").hover(function(){

		clearInterval(timer)

	},function(){

		autoPlay();

	});

});