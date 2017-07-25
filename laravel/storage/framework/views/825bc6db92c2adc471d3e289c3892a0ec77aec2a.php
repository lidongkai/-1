<?php $__env->startSection('content'); ?> 
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>购物车-我的购物车</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />
      <link rel="stylesheet" href="<?php echo e(asset('/admin/adminlte/bootstrap/css/bootstrap.min.css')); ?>">
    <meta name="description" content="购物车，我的购物车"> 
    <link rel="stylesheet" href="<?php echo e(asset('home/meizu/css/layout-51312a08ab.css')); ?>" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
    <link href="<?php echo e(asset('home/meizu/css/cart-a5ee4bd832.css')); ?>" rel="stylesheet" />
</head>
<body>
<script>
    var layoutHeaderData = false;
</script>
<div class="layout-header clearfix layout-header-order" id="layoutHeader">
    <div class="mzcontainer">
         
        <ul class="layout-header-bread">
            <li class="layout-header-bread-block active">购物车</li>
            <li class="layout-header-bread-block ">确认订单</li>
            <li class="layout-header-bread-block ">在线支付</li>
            <li class="layout-header-bread-block ">完成</li>
        </ul>
        <ul class="layout-header-right">
              
            <li class="layout-member signin">

                <a class="layout-member-link" target="_blank" href=""> 
                <span class="layout-member-username" id="topbarUser"></span>
                
                的商城<i class="layout-member-triangle"></i></a>
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
</div>

<div class="cart" id="cart">
    <div class="cart-login-tips" id="cartLoginTips">
        您还没有登录！登录后可显示您账号中已加入的商品哦~
        <a class="mz-btn s success" href="javascript:void(0);" data-mdesc="登录提示" data-mtype="store_cart_tip_login">
            去登录
        </a>
    </div>

    <div class="mzcontainer">
        <table class="cart-header">
            <tr>
                <td class="cart-col-select">
                    <div class="cart-select-all JSelectAll" data-mdesc="全选按钮" data-mtype="store_cart_all">
                        <div class="mz-checkbox maxbox"></div>
                        <span class="cart-select-title">全选</span>
                    </div>
                </td>
                <td class="cart-col-name">商品</td>
                <td class="cart-col-price">单价(元)</td>
                <td class="cart-col-number">数量</td>
                <td class="cart-col-total">小计(元)</td>
                <td class="cart-col-ctrl">操作</td>
            </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="cart-product">
                <td class="cart-col-select"> 
                    <?php if(($val->status) == 0): ?>
                    <div class="mz-checkbox minbox a" val="<?php echo e($val->id); ?>"></div>
                    <?php endif; ?> 
                    <?php if(($val->status) == 1): ?>
                    <div class="mz-checkbox minbox a checked" val="<?php echo e($val->id); ?>"></div>
                    <?php endif; ?>
                    <a href="<?php echo e(url('/home/shop/detail')); ?>/<?php echo e($val->gids); ?>" class="cart-product-link" target="_blank" data-mdesc="购物车商品位" data-mtype="store_cart_prod">
                      <img src="/uploads/avatar/<?php echo e($val->picture); ?>" class="cart-product-img" alt="">
                    </a>
                  </td>
                  <td class="cart-col-name">
                    <a href="<?php echo e(url('/home/shop/detail')); ?>/<?php echo e($val->gids); ?>" class="cart-product-link" target="_blank" data-mdesc="购物车商品位" data-mtype="store_cart_prod">
                      <p><?php echo e($val->name); ?></p> 
                    </a>
                  </td>
                  <td class="cart-col-price">
                    <p>
                      <span class="cart-product-price price"><?php echo e($val->price); ?></span>
                      
                    </p>
                    
                  </td>
                  <td class="cart-col-number">
                    
                    <div class="cart-product-number-adder">
                      <p class="cart-product-number-max show">
                        
                      </p>
                    <div class="mz-adder">
                  <button class="mz-adder-subtract"></button>
                  <div class="mz-adder-num">
                    <input type="text" class="mz-adder-input" value="<?php echo e($val->num); ?>">
                  </div>
                  <button class="mz-adder-add"></button>
                </div></div>
                    
                  </td>
                  <td class="cart-col-total">
                    <span class="cart-product-price total"><?php echo e($val->total); ?></span>
                  </td>
                  <td style="display:none" class="idd"><?php echo e($val->id); ?></td>
                  <td class="cart-col-ctrl"> 
                  <a class="del" href="#" data-toggle="modal" data-target="#myModal"> <div class="cart-product-remove" data-mdesc="删除单个商品按钮" data-mtype="store_cart_del"></div></a>
                  </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="cart-product-price one" style="display:none" ><?php echo e($v->total); ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <ul class="cart-merchant-list" id="merchantList"> 

        </ul>

    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">删除</h4>
      </div>
      <div class="modal-body">
        您确定要删除该商品吗?
      </div>
      <div class="modal-footer">
        <button type="button" id="close" class="btn btn-primary" data-dismiss="modal">取消</button>
        <button type="button" id="delete"  class="btn btn-default">确认删除</button>
      </div> 
    </div>
  </div>
</div>
    <div class="cart-footer" id="cartFooter">
        <div class="mzcontainer">
            <div class="cart-footer-left">
                <div class="cart-select-all JSelectAll" data-mdesc="全选按钮" data-mtype="store_cart_all">
                    <div class="mz-checkbox maxbox"></div>
                    <span class="cart-select-title">全选</span>
                </div>
                <span class="cart-remove-selected" data-mdesc="删除选中商品" data-mtype="store_cart_batch" id="removeSelected">删除选中的商品</span>
                <span class="cart-footer-count">
        共<span class="cart-footer-num" id="totalCount">0</span>件商品， 已选择
                    <span class="cart-footer-num blue" id="totalSelectedCount">0</span>件
                    </span>
            </div>
            <div class="cart-footer-right">
                    <span class="cart-footer-sum">
        已优惠<span class="cart-footer-num red" id="totalDiscount">0.00</span>元， 合计(不含运费)：
                    <span class="cart-footer-total" id="totalPrice">0.00</span>
                    </span>
                <a href="/home/order/add"><div class="mz-btn success" id="cartSubmit" data-mdesc="去结算按钮" data-mtype="store_cart_checkout">去结算</div></a>
            </div>
        </div>
    </div>

</div>

 
<script src="<?php echo e(asset('/admin/adminlte/plugins/jQuery/jquery-2.2.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('/admin/adminlte/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('home/meizu/js/layout-ca70dcecd0.js')); ?>" type="text/javascript"></script>
<script>
    var MZSTORECARTDATA = {
        timestamp: 1499929970807,
        cart: null
    };
</script>

<script type="text/javascript">
$.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
    // 加操作
    $('.mz-adder-add').on('click',function(){
        // 计算数量
        var num = $(this).prev().find('.mz-adder-input').val();
        var total = $(this).parents('.cart-product').find('.total').html();
        var price = $(this).parents('.cart-product').find('.price').html();
        // alert(num);
        if(num < 10){
            num++;
            total = parseFloat(price * num).toFixed(2);
        }else{
            alert('对不起，不能超过10件商品');
            return;
        }
        // 将数量写入
        $(this).prev().find('.mz-adder-input').val(num);
        // 将小计写入
        $(this).parents('.cart-product').find('.total').html(total);
        // 判断是否被选中
        if($(this).parents('.cart-product').find('.minbox').hasClass('checked')){

            var allTotal = $('.cart-footer-total').html(); 
            allTotal = parseFloat(allTotal);
            var lprice = parseFloat($(this).parents('.cart-product').find('.price').html());
            allTotal += lprice;
            if(allTotal *10%2 ==0){
                allTotal = allTotal + '.00';
            }
            $('.cart-footer-total').html(allTotal);
        }

    });
    // 减操作
    $('.mz-adder-subtract').on('click',function(){
        // 计算数量
        var num = $(this).next().find('.mz-adder-input').val();
        var total = $(this).parents('.cart-product').find('.total').html();
        var price = $(this).parents('.cart-product').find('.price').html();
        if(num > 1){
            num--;
             total = parseFloat(price * num).toFixed(2);
        }else{
            alert('至少一件');
            return;
        }
        // 将数量写入
        $(this).next().find('.mz-adder-input').val(num);
        // 将小计写入
        $(this).parents('.cart-product').find('.total').html(total); 
        // 判断是否被选中
        if($(this).parents('.cart-product').find('.minbox').hasClass('checked')){

            var allTotal = $('.cart-footer-total').html(); 
            allTotal = parseFloat(allTotal);
            var lprice = parseFloat($(this).parents('.cart-product').find('.price').html());
            allTotal -= lprice;
            if(allTotal *10%2 ==0){
                allTotal = allTotal + '.00';
            }
            $('.cart-footer-total').html(allTotal);
        }

    });   
     
        // 商品的选中
     $('.minbox').on('click',function(){

        // 获取商品总价 
        var total = $(this).parents('.cart-product').find('.total').html();
        // 获取购物车总价
        var allTotal = $('.cart-footer-total').html(); 
        total = parseFloat(total);
        allTotal = parseFloat(allTotal);
        if($(this).hasClass('checked')){
            $(this).removeClass("checked");
           
            if(allTotal == 0.00){
                allTotal =0.00
            }else{
           
                allTotal -= total; 
            }
           
            if(allTotal *10%2 ==0){
                allTotal = allTotal + '.00';
            }
            $('.cart-footer-total').html(allTotal);
        }else{
            $(this).addClass('checked');
            
            allTotal += total;
            if(allTotal *10%2 ==0){
                allTotal = allTotal + '.00';
            }
            $('.cart-footer-total').html(allTotal);
        }
     });  
   
   // 购物车总计函数
   function all(){

        var allTotal = $('.cart-footer-total').html(); 
            allTotal = parseFloat(allTotal);
        var list = $('.one');   
        for(var i=0;i<list.length;i++){
            allTotal += parseFloat($(list[i]).html());
        }
        $('.cart-footer-total').html(allTotal.toFixed(2)); 


   }
    all(); 
    function all1(){

        var allTotal = $('.cart-footer-total').html(); 
            allTotal = parseFloat(allTotal);
            allTotal = 0.00;
        var list = $('.total');   
        for(var i=0;i<list.length;i++){
            allTotal += parseFloat($(list[i]).html());
        }
        $('.cart-footer-total').html(allTotal.toFixed(2)); 
   }
    // 全选
    function allcheck(){
    // alert(11111);
        var list0 = $('.minbox').length;
        // console.log(list0);   
        var list1 = $('.checked').length;
        // console.log(list1);
        if(list0 == list1){
            $('.maxbox').addClass('checked');  
        } 
   }
   allcheck(); 

 // 商品的全选全不选
    $('.maxbox').on('click',function(){
         var status = 0;
        if($(this).hasClass('checked')){
            status = 0;
            $.ajax({
                url:'/home/shopcar/update1',
                type:'post',
                data:{status:status},
                dataType:'json',
                success:function(data){ 
                    if(data == 0){ 
                        $('.maxbox').removeClass("checked");
                        $('.minbox').removeClass('checked');
                        $('.cart-footer-total').html(parseFloat(0).toFixed(2));  
                    }else{
                        alert('失败');
                    }
                },
                error:function(data){
                    alert('数据异常');
                }

                }); 
        }else{
             var status = 1;
            $.ajax({
                url:'/home/shopcar/update1',
                type:'post',
                data:{status:status},
                dataType:'json',
                success:function(data){ 
                    if(data == 0){ 
                        $('.maxbox').addClass("checked"); 
                        $('.minbox').addClass("checked"); 
                        all1();  
                    }else{
                        alert('失败');
                    }
                },
                error:function(data){
                    alert('数据异常');
                }

                }); 
        }


    }); 

   // 商品的单选
    $('.a').on('click',function(){
        var idd = $(this).attr('val');  
        // alert(idd);
        var status = 0;
        if($(this).hasClass('checked')){
            status = 1;
            $.ajax({
                url:'/home/shopcar/update',
                type:'post',
                data:{id:idd,status:status},
                dataType:'json',
                success:function(data){ 
                    if(data == 0){
                         allcheck();   
                    }else{
                        alert('失败');
                    }
                },
                error:function(data){
                    alert('数据异常');
                }

                }); 
             
        }else{
            status = 0;
            $.ajax({
                url:'/home/shopcar/update',
                type:'post',
                data:{id:idd,status:status},
                dataType:'json',
                success:function(data){ 
                    if(data == 0){  
                        $('.maxbox').removeClass("checked");
                        allcheck(); 
                    }else{
                        alert('失败');
                    }
                },
                error:function(data){
                    alert('数据异常');
                }

                }); 
        }
            
             
    });
     
    // 删除购物车中的商品
    var id = 0;
   $('.del').on('click',function(){
     id = $(this).parent().prev().html();
    // alert(id);
   });
   $('#delete').on('click',function(){ 
     location.href = "/home/shopcar/delete/"+id; 
    });  

</script>
<!-- <script src="<?php echo e(asset('home/meizu/js/cart-da2c5f831f.js')); ?>" type="text/javascript"></script> -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>