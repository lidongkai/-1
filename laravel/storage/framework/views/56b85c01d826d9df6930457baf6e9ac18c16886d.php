<?php $__env->startSection('user'); ?>
<div class="public_m1">
  <div class="public_m2">个人信息</div>
  <!--照片和内容-->    
  <div class="zp_nrm">
      <!--left-->
      <div class="zp_nrm_l" >
          <img src="/uploads/avatar/<?php echo e(session('master')->photo); ?>" style="width:100px;height:100px;" /><br>
      </div>
      <!--right-->
      <div class="zp_nrm_r">
         <form action="/home/user/add" method="post" onsubmit="return dosubmit()" enctype="multipart/form-data">
               <?php echo e(csrf_field()); ?>

              <div class="form-group col-xs-8">
                  <div class="col-xs-2">
                  <p style="font-size:16px">昵称:</p>
                  </div>
                <div class="col-xs-6">
                  <input type="text" name="nickname" class="form-control" id="nkname"  placeholder="请输入昵称" required="required"><span ></span>
                </div>
                
            </div>
              <br><br><br><br><br>
              <div class="form-group col-xs-8">
                <div class="col-xs-2">
                <p style="font-size:16px">邮箱:</p>
                </div>
                <div class="col-xs-6">
                <input type="text" id='email2' name="email" class="form-control" placeholder="请输入邮箱" ><span ></span>
              </div>
              </div>
              <div class="form-group col-xs-8">
                <div class="col-xs-2">
                <p style="font-size:16px">性别:</p>
                </div>
                <div class="col-xs-3" style="margin-top:12px">
                <input type="radio" name="sex" value="m" checked >男
                </div>
                <div class="col-xs-3" style="margin-top:12px">
                <input type="radio" name="sex" value="w">女
                </div>
                </div>
              <div class="form-group col-xs-8">
                <div class="col-xs-2">
                <p style="font-size:16px">QQ:</p>
                </div>
                <div class="col-xs-6">
                <input type="text" id='qqq' name="qq" class="form-control" placeholder="请输入QQ号" required="required"><span ></span>
              </div>
              </div>
 
              <div class="form-group col-xs-8">
                <div class="col-xs-2">
                <p style="font-size:16px">手机号:</p>
                </div>
                <div class="col-xs-6">
                <input type="text" id='phone' name="phone" class="form-control" placeholder="请输入手机号" required="required"><span ></span>
              </div>
              </div>
 
              <div class="form-group col-xs-10">
                <div class="col-xs-2">
                <p style="font-size:16px">手机:</p>
                </div>
                <div class="col-xs-5">
                <input type="text" id='phone' name="phone" class="form-control" placeholder="请输入手机号" required="required"><span ></span>
              </div>
              <!-- <button class="btn btn-primary col-xs-2" id="code" disabled>获取验证码</button> -->
              </div>
             <!--  <div class="form-group col-xs-8" style="display:none" id="hid">
                <div class="col-xs-2">
                <p style="font-size:16px">验证码:</p>
                </div>
                <div class="col-xs-6">
                <input type="text" id='coded' name="coded" class="form-control" placeholder="请输入验证码" required="required"><span ></span>
              </div>
              </div> -->
 
              <div class="row">
                <div class="col-xs-8">
                </div>
              </div>
               <div class="form-group col-xs-8">
                <div class="col-xs-2">
                <p style="font-size:16px">头像:</p>
                </div>
                <div class="col-xs-6">
                <input type="file" id='photo' name="photo" class="form-control">
              </div>
              <br><br><br><br>
              <div class="form-group col-xs-8">
            <button id="btn" type="submit" class="public_m3">保存</button>
          </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
// alert(11);
$('#nkname').blur(
function()
{   
  // alert(22);
var nickname = $('#nkname').val();
 
// var email = $('#email').val();
// var qq = $('#qq').val();
// var phone = $('#phone').val();
// var photo = $('#photo').val();
// alert(nickname);
 

 
if (nickname=='') {
  $('#nkname').css('border-color',"red");
  $('#nkname').next("span").first().html('昵称不能为空');
}else if(nickname.length<2)
{
  $('#nkname').css('border-color',"red");
  $('#nkname').next("span").first().html('昵称不能少于2个字符');
}else if(nickname.length>6)
{
  $('#nkname').css('border-color',"red");
  $('#nkname').next("span").first().html('昵称不能大于6字符');
}else
{
  $('#nkname').css('border-color',"green");
  $('#nkname').next("span").first().html('');
}


});

$('#email2').blur(
function()
{   
 
// var nickname = $('#nkname').val();
var email = $('#email2').val();
// var qq = $('#qq').val();
// var phone = $('#phone').val();
// var photo = $('#photo').val();
// alert(nickname);
 

var email = $('#email2').val();

 
if (email=='') {
  $('#email2').css('border-color',"red");
  $('#email2').next("span").first().html('邮箱不能为空');
}
 

//  var myreg = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
//  if(!myreg.test(email.value))
//              {
//                   $('#email2').css('border-color',"red");
//                   $('#email2').next("span").first().html('邮箱格式不正确');
//                   myreg.focus();
//                   return false;
// }else
// {
//   $('#email2').css('border-color',"green");
 
// /^\w+@\w+\.(com|cn|edu|org|com\.cn)$/
 if(!$('#email2').val().match(/^\w+@\w+\.(com|cn|edu|org|com\.cn)$/)){
                     $('#email2').css('border-color','red');
                     $('#email2').next("span").first().html('邮箱格式不正确');
                    return false;
}else
{
  $('#email2').css('border-color',"green");
  $('#email2').next("span").first().html('');

}
 

});

$('#qqq').blur(
function()
{   
  // alert(11);
var qq = $('#qqq').val();
 
// var email = $('#email').val();
// var qq = $('#qq').val();
// var phone = $('#phone').val();
// var photo = $('#photo').val();
// alert(nickname);
 

 
if (qq=='') {
  $('#qqq').css('border-color',"red");
  $('#qqq').next("span").first().html('qq号不能为空');
}else if(qq.length<5)
{
  $('#qqq').css('border-color',"red");
 
  $('#qqq').next("span").first().html('qq号不能少于5个字符');
 
  $('#qqq').next("span").first().html('qq号不能少于5位');
 
}else
{
  $('#qqq').css('border-color',"green");
  $('#qqq').next("span").first().html('');
}


});

$('#phone').blur(
function()
{   
  // alert(11);
var phone = $('#phone').val();
 
// var email = $('#email').val();
// var qq = $('#qq').val();
// var phone = $('#phone').val();
// var photo = $('#photo').val();
// alert(nickname);
if (phone=='') {
  $('#phone').css('border-color',"red");
  $('#phone').next("span").first().html('手机号不能为空');
}else if(phone.length<11)
{
  $('#phone').css('border-color',"red");
  $('#phone').next("span").first().html('手机号不能少于11个字符');
 

if (phone=='') {
  $('#phone').css('border-color',"red");
  $('#phone').next("span").first().html('手机号不能为空');
}

 if(!$('#phone').val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/)){
                     $('#phone').css('border-color','red');
                     $('#phone').next("span").first().html('手机号格式不正确');
                    return false;
 
}else
{
  $('#phone').css('border-color',"green");
  $('#phone').next("span").first().html('');
 
 
  // code.disabled = false;
 
}


});

 
function dosubmit()
{
  return true;
}
 


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.user.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>