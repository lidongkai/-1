<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap 实例 - 轮播（Carousel）插件方法</title>
   <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="./bootstrap/jquery-3.2.1.min.js"></script>
   <script src="./bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
 
<div id="myCarousel" class="carousel slide" style="width:389px;height:391px">
   <!-- 轮播（Carousel）指标 -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0"
         class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>  
   <!-- 轮播（Carousel）项目 -->
   <div class="carousel-inner" >
      <div class="item active">
         <img style="width:389px;height: 391px;" src="./img/1.jpg" alt="First slide">
      </div>
      <div class="item">
         <img  style="width:389px;height: 391px;" src="./img/2.jpg" alt="Second slide">
      </div>
      <div class="item">
         <img style="width:389px;height: 391px;" src="./img/3.jpg" alt="Third slide">
      </div>
   </div>
   <!-- 轮播（Carousel）导航 -->
   <a class="carousel-control left" href="#myCarousel"
      data-slide="prev">&lsaquo;</a>
   <a class="carousel-control right" href="#myCarousel"
      data-slide="next">&rsaquo;</a>

</div>
<script>
   $(function(){
      // 初始化轮播
      $(".start-slide").click(function(){
         $("#myCarousel").carousel('cycle');
      });
      // 停止轮播
      $(".pause-slide").click(function(){
         $("#myCarousel").carousel('pause');
      });
      // 循环轮播到上一个项目
      $(".prev-slide").click(function(){
         $("#myCarousel").carousel('prev');
      });
      // 循环轮播到下一个项目
      $(".next-slide").click(function(){
         $("#myCarousel").carousel('next');
      });
      // 循环轮播到某个特定的帧
      $(".slide-one").click(function(){
         $("#myCarousel").carousel(0);
      });
      $(".slide-two").click(function(){
         $("#myCarousel").carousel(1);
      });
      $(".slide-three").click(function(){
         $("#myCarousel").carousel(2);
      });
   });
</script>
 
 
</body>
</html>













