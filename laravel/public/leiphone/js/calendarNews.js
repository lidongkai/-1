define(function(require, exports, module){

    require('../jquery.mCustomScrollbar.concat.min');
    require('./calendar');

    module.isLeap = function(y) {
        return (y % 100 !== 0 && y % 4 === 0) || (y % 400 === 0);
    };

    module.getDaysNum = function(y, m) {
        var num = 31;

        switch (m) {
            case 2:
                num = module.isLeap(y) ? 29 : 28;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                num = 30;
                break;
        }
        return num;
    };

    var calendarNewsList = {}, calendarObj = null, monthlyScrollObj = null;

    initCalendarNews();

    function initCalendarNews(currentDate){
        var nowdate = new Date();
        if(currentDate){
            nowdate = currentDate;
        }

        var y = nowdate.getFullYear();
        var m = (nowdate.getMonth()+1)<10?'0'+(nowdate.getMonth()+1):(nowdate.getMonth()+1);
        var nowYM = ''+y+m;

        if(currentMonthNews){
            calendarNewsList[nowYM] = currentMonthNews;
            currentMonthNews = '';
        }

        if(calendarNewsList[nowYM]){
            setCalendarView(calendarNewsList[nowYM], nowdate);
            return true;
        }

        $.ajax({
            url: BASE_URL + 'leiphonecal/index?month='+nowYM,
            type: 'get',
            dataType: 'json',
            success: function(data){

                if(data.ret != '0' || !data.data){
                    $('#calNews').calendar({
                        width: 280,
                        height: 280,
                        customClass: 'myCalNews'
                    });

                    return false;
                }
                calendarNewsList[nowYM] = data;

                setCalendarView(data, nowdate);


            },
            error: function(err){
                console.log(err);
            }
        });

    }

    function setCalendarView(data, nowdate){

        var nowMonthDays = module.getDaysNum(nowdate.getFullYear(), nowdate.getMonth()+1);

        var newsList = {}, calendarDataList = [];
        for(var i in data.data){
            var ymd = i.split('-');
            var dy = ymd[0], dm = parseInt(ymd[1]), dd = parseInt(ymd[2]);
            newsList[dd] = (data.data)[i];
            calendarDataList.push({
                date: (dy + '-' + (ymd[1]) + '-' + ymd[2]),
                value: newsList[dd].length+'条新闻'
            });
        }

        var newsListHtml = '';
        for(var i=1; i<nowMonthDays; i++){
            if(newsList[i]){
                newsListHtml += "<div id='monthly-list-item-"+i+"' class=\"monthly-list-item monthly-list-item-"+i+"\">";

                for(var j=0; j<newsList[i].length; j++){
                    newsListHtml += "<p><a href='"+newsList[i][j].url+"' title='"+newsList[i][j].title+"' target='_blank'><em></em>"+newsList[i][j].title+"</a></p>";
                }

                newsListHtml += "</div>";
            }
        }

        $("#calendarNewsScroll .cont").html(newsListHtml);

        initCalendarView(calendarDataList);
    }

    function initCalendarView(calendarDataList){

        if(!calendarObj){
            calendarObj = $('#calNews').calendar({
                width: 310,
                height: 310,
                customClass: 'myCalNews',
                label: false,
                //data: calendarDataList,
                onSelected: function(view, date, value){
                    var selectedDate = new Date( Date.parse(date) );
                    if(value && view=='date'){
                        showCalendarNews(selectedDate);
                    }
                },
                viewChange: function(view, y, m){
                    if(view == 'date'){
                        initCalendarNews(new Date(y,m-1,1));
                    }
                }
            });
            $('#calNews').calendar('setData', calendarDataList);

            $(".calendarNews .monthly").find(".btn-back").on("click", function(){
                hideCalendarNews();
            });
        }
        else{
            $('#calNews').calendar('setData', calendarDataList);
        }
    }

    function showCalendarNews(selectedDay){
        $(".calendarNews .monthly").find(".monthly-list-item").removeClass("show");
        $(".calendarNews .monthly").find("#monthly-list-item-"+parseInt(selectedDay.getDate())).addClass("show");
        $(".calendarNews").find(".label-date").text((parseInt(selectedDay.getMonth())+1)+'月'+parseInt(selectedDay.getDate())+'日');
        initMonthlyScroll();

        $(".calendarNews .monthly").addClass('show').css({
            'transform': 'scale(1)'
        });

        var cti = null;
        $(".calendarNews").on('mouseleave', function(){
            if($(".calendarNews .monthly").hasClass('show')){
                cti = setTimeout(function(){
                    hideCalendarNews();
                }, 500);
            }
        });
        $(".calendarNews").on('mouseenter', function(){
            if($(".calendarNews .monthly").hasClass('show')){
                clearTimeout(cti);
            }
        });

        $(".calendarNews .monthly").on('mouseleave', function(e){
            e.preventDefault();
            if($(this).hasClass('show')){
                cti = setTimeout(function(){
                    hideCalendarNews();
                }, 500);
            }
        });
    }

    function hideCalendarNews(){
        $(".calendarNews .monthly").removeClass('show').css({
            'transform': 'scale(0)'
        });
    }

    function initMonthlyScroll(){
        if(monthlyScrollObj){
            $("#calendarNewsScroll").mCustomScrollbar("update");
        }
        else{
            $("#calendarNewsScroll").mCustomScrollbar({
                theme:"minimal-dark"
            });
        }
    }

});
