<!DOCTYPE html>
<!-- saved from url=(0044)https://ordercenter.meizu.com/order/add.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>确认订单-魅族商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon">
    <link href="https://store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon">
    <meta name="description" content="魅族商城是魅族面向全国服务的官方电子商务平台,提供魅族PRO系列、魅族MX系列和魅蓝系列等产品的预约和购买.官方正品,全国联保.">
    <meta name="keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、魅族商城">
    <link rel="stylesheet" href="{{ asset('home/meizu/css/layout-51312a08ab.css')}}">

    <!--[if lt IE 9]>
    <script src="//store.res.meizu.com/layout/js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="//store.res.meizu.com/layout/js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link href="{{ asset('home/meizu/css/add-e7067b7417.css')}}" rel="stylesheet" charset="UTF-8">
</head>
<body>
<!-- common header -->
<script charset="utf-8" src="{{ asset('home/meizu/js/v.js')}}"></script>
<script src="{{ asset('home/meizu/js/hm.js')}}"></script>
<script src="{{ asset('home/meizu/js/flow.js')}}"></script>
<script src="{{ asset('home/meizu/js/analytics-min.js')}}"></script>
<script src="{{ asset('/admin/adminlte/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script>
    var layoutHeaderData = false;
</script>
 

        <div class="order">
        <div class="mzcontainer">
            <div class="order-address" id="addressModule">
                <div class="order-address-title">
                    收货人信息
                    <div class="order-address-title-tips" id="orderAddressHasOldTips">
                        <i class="order-address-tips-icon"></i>因配送地址库升级，部分地址需升级后方可使用！
                    </div>
                </div> 
                <ul class="order-address-list clearfix" id="addressList" style="height: 174px;">
                 @if(session('info')) 
              <h3 style="color:red">{{ session('info') }}</h3> 
              
          @endif
  @if($data)
  @foreach($data as $key=>$val) 
<li class="order-address-checkbox lis" val="{{ $val->id }}" data-mdesc="收货人信息" data-mtype="store_se_adr">
<div class="order-address-checkbox-top"> 
  <div class="order-address-checkbox-name" title="">{{ $val->sname }}</div>
  <div class="order-address-checkbox-phone">{{ $val->iphone }}</div>
</div>
<div class="order-address-checkbox-content">{{ $val->address }}</div>
<div class="order-address-checkbox-checked">
  <div class="order-address-checkbox-tick"></div>
</div>

<div class="order-address-checkbox-ctrl">
  <a href="/home/order/delete/{{ $val->id }}"><div class="order-address-checkbox-delete"></div></a>
  <a href="#"><div class="order-address-checkbox-edit edit"></div></a>
  
  </div>  
</li>
@endforeach
@endif
<li class="order-address-checkbox add">
  <div class="order-address-add-icon"></div>
  <div class="order-address-add-text">添加新地址</div>
</li></ul>
                <div class="order-address-bottom">
                    <div class="order-address-more" id="orderAddressMore">
                          <p class="order-address-more-text">点击显示更多地址</p>
                          <i class="order-address-triangle"></i>
                    </div>
                </div>
            </div>

           
    
<!-- end content -->

 

<script src="{{ asset('home/meizu/js/layout-ca70dcecd0.js')}}" type="text/javascript"></script>

    <script src="{{ asset('home/meizu/js/add-9fa7019527.js')}}" type="text/javascript"></script><div class="mz-mask hide">
  <div class="mz-dialog tips ">
    <div class="mz-dialog-header">
      <div class="mz-dialog-title">提示</div>
      <div class="mz-dialog-close"></div>
    </div>
    <div class="mz-dialog-main">
      <div class="mz-dialog-warp">
        
        <div class="mz-dialog-content"></div>
      </div>
    </div>
    
    <div class="mz-dialog-bottom">
      
      <div class="mz-btn success">确定</div>
      
    </div>
    
  </div>
</div>

<div class="mz-mask hide address">
  
         
  <div class="mz-dialog dialog address-adder">
    <div class="mz-dialog-header">
      <div class="mz-dialog-title"></div>
      <div class="mz-dialog-close close"></div>
    </div>
    <div class="mz-dialog-main">
      <div class="mz-dialog-warp">
      

        <!-- <form action="/home/order/doadd" method="post">  -->
        
        <div class="mz-dialog-content">
        <div class="address-adder-content">
  <div class="address-adder-row clearfix">
    <div class="address-adder-title">收货人姓名<span class="address-adder-must">*</span></div>
    <div class="mz-input-warp">
    <input type="text" id="sname" class="mz-input address-adder-name" placeholder="姓名长度不超过15个汉字"  maxlength="15"></div>
    <div class="address-adder-title">收货人手机号<span class="address-adder-must">*</span></div>
    <div class="mz-input-warp">
    <input type="text" id="iphone" class="mz-input address-adder-phone" placeholder="请输入11位手机号" maxlength="11"></div>
  </div>
  <div class="address-adder-row clearfix">
    <div class="address-adder-title">收货人地址<span class="address-adder-must">*</span></div>

    <div class="mz-input-warp address-adder-select mz-address">

     
    <select type="text" tabindex="-1" class="mz-downmenu-input" name="city[]" id="cid">
      <option value="">--请选择--</option>
    </select>  
    <div class="mz-address-other mz-input-warp" name="" style="display: none;"><input type="text" class="mz-input mz-address-input" placeholder="请输入其他街道名称" maxlength="10"></div></div>
  </div>
  <div class="address-adder-row clearfix address-adder-other">
    <div class="address-adder-title">其他</div>
  </div>
  <div class="address-adder-row clearfix">
    <div class="address-adder-title">详细地址<span class="address-adder-must">*</span></div>
    <div class="mz-input-warp">
      <input type="text" id="daddress" class="mz-input address-adder-detail" placeholder="请输入至少四个字符的详细地址，例如路名、门牌号" maxlength="50" minlength="4">
    </div>
  </div>
</div></div>
      </div>
    </div>
    
    <div class="mz-dialog-bottom">   
      <div class="mz-btn success sure">确认</div>  
      <div class="mz-btn cancel">取消</div> 
    </div>
    </form>
  </div>
</div><div class="mz-downmenu"></div><div class="mz-downmenu"></div><div class="mz-downmenu"></div><div class="mz-downmenu"></div><div class="mz-mask hide">
  <div class="mz-dialog tips ">
    <div class="mz-dialog-header">
      <div class="mz-dialog-title">提示</div>
      <div class="mz-dialog-close"></div>
    </div>
    <div class="mz-dialog-main">
      <div class="mz-dialog-warp">
        
        <div class="mz-dialog-content"></div>
      </div>
    </div>
    
    <div class="mz-dialog-bottom">
      
      <div class="mz-btn success">确定</div>
      
    </div>
    
  </div>
</div><div class="mz-mask hide">
  <div class="mz-dialog tips ">
    <div class="mz-dialog-header">
      <div class="mz-dialog-title">提示</div>
      <div class="mz-dialog-close"></div>
    </div>
    <div class="mz-dialog-main">
      <div class="mz-dialog-warp">
        
        <div class="mz-dialog-content"></div>
      </div>
    </div>
    
    <div class="mz-dialog-bottom">
      
      <div class="mz-btn success">确定</div>
      
    </div>
    
  </div>
</div>
<script type="text/javascript">

$.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  }); 

        // 添加新地址
        // 打开模态框
        $('.order-address-add-icon').on('click',function(){
          $('.address').removeClass('hide'); 
        });
        $('.edit').on('click',function(){
          $('.address').removeClass('hide'); 
        });

        // 关闭模态框
        $('.cancel').on('click',function(){
          $('.address').addClass('hide');;
        });
        $('.close').on('click',function(){
          $('.address').addClass('hide');;
        });

        // 地址的选中
        $('.lis').on('click',function(){ 
          if($(this).hasClass('checked')){
            $(this).removeClass('checked');
          }else{
            $(this).addClass('checked');

            // 地址id
            var addre = $(this).attr('val'); 
            $('#a').val(addre);

            // 购物车商品id
            // <td style="display:none" val="{{ $val->id }}" class="d" ></td>
            var gid = [];
            var list = $('.d');
            for(var i =0;i<list.length;i++){
              gid += $(list[i]).attr('val') + ',';
            }

            $('#b').val(gid);

            // 商品总价
            var total = $('#totalPayPrice').html();
            $('#c').val(total);
          } 
        });

        // 订单提交
        $('#submitForm').on('click',function(){

          $('#form').submit();
        });

    // 地址的添加
    $.ajax({
        url:'/home/order/ajaxg',
        type:'get',
        async:true,
        data:{upid:0},
        dataType:'json',
        success:function(data){
          for (var i = 0; i < data.length; i++) {
             $('#cid').append("<option value="+data[i].id+">"+data[i].name+"</option>");
           };
        },
        error:function(data){
          alert('ajaxg请求失败');
        }
    });

    // 给select添加onchange事件
    $('select').live('change',function(){

      // 去掉选择的select后的select标签
       $(this).nextAll('select').remove();

      // 判断是否选择
      if($(this).val() != '--请选择--')
      { 
        var ob = $(this);
        $.ajax({
          url:'/home/order/ajaxp',
          type:'post', 
          data:{upid:ob.val()},
          dataType:'json',
          success:function(data){

            if(data.length >0){
              // 生成一个新的select标签
            var select = $("<select class='mz-downmenu-input' name='city[]'><option>--请选择--</option></select>");
            // 遍历生成option
            for (var i = 0; i < data.length; i++) {
             $(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
           };
            // 写到前一个select后面
            ob.after(select);
          }
          },
          error:function(data){
            alert('请求失败'); 
          }

        });
      }

    });

    // 添加新地址
    $('.sure').on('click',function(){
      // alert(1111);

      var sname = $('#sname').val();
      var iphone = $('#iphone').val(); 
      var daddress = $('#daddress').val();
      var city1 = $('#cid').val();
      var city2 = $('#cid').next().val();
      var city3 = $('#cid').next().next().val(); 
      if($('#cid').next().next().next().val()){

         var city4 = $('#cid').next().next().next().val();
         var city = [city1,city2,city3,city4];
      }else{
        var city = [city1,city2,city3];
      }

     
      $.ajax({
        url:'/home/order/doadd',
        type:'post',
        data:{sname:sname,iphone:iphone,city:city,daddress:daddress},
        dataType:'json',
        success:function(data){
          // console.log(data);
          if(data == 0){
            alert('用户名为3-15个字符');
          } 
          if(data == 1){
            alert('手机号码为11位');
          } 
          if(data == 2){
            alert('添加成功'); 
            // $('.address').addClass('hide');
            location.href = '/home/user/address';
          } 
          if(data == 3){
            alert('添加失败');
          } 
          if(data == 4){
            alert('请输入地址');
          }

        },
        error:function(data){
          alert('数据异常');
        }
      });
    })

    // 订单数据

</script>
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

</body></html>