@extends('home.user.layout')

@section('user')
<div class="public_m1">
  <div class="public_m2">个人信息</div>
  <!--照片和内容-->    
  <div class="zp_nrm">
      <!--left-->
      <div class="zp_nrm_l" >
          <img src="/uploads/avatar/{{ session('master')->photo }}" style="width:100px;height:100px;" /><br>
      </div>
      <!--right-->
      <div class="zp_nrm_r">
         <form action="/home/user/add" method="post" onsubmit="return dosubmit()" enctype="multipart/form-data">
               {{ csrf_field() }}
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
                <p style="font-size:16px">手机:</p>
                </div>
                <div class="col-xs-6">
                <input type="text" id='phone' name="phone" class="form-control" placeholder="请输入手机号" required="required"><span ></span>
              </div>
              <a class="btn btn-primary col-xs-3" id="code">获取验证码</a>
              </div>
              <div class="form-group col-xs-8" style="display:none" id="hid" required="required">
                <div class="col-xs-2">
                <p style="font-size:16px">验证码:</p>
                </div>
                <div class="col-xs-6">
                <input type="text" id='coded' name="coded" class="form-control" placeholder="请输入验证码" required="required"><span ></span>
              </div>
              </div>
              <div class="row">
                <div class="col-xs-8">
                </div>
              </div>
               <div class="form-group col-xs-8">
                <div class="col-xs-2">
                <p style="font-size:16px">头像:</p>
                </div>
                <div class="col-xs-6">
                <input type="file" id='photo' name="photo" style="margin:14px;" required="required">
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
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// alert(11);
$('#nkname').blur(
function()
{   
  // alert(22);
var nickname = $('#nkname').val();

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

var email = $('#email2').val();

if (email=='') {
  $('#email2').css('border-color',"red");
  $('#email2').next("span").first().html('邮箱不能为空');
}
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

if (qq=='') {
  $('#qqq').css('border-color',"red");
  $('#qqq').next("span").first().html('qq号不能为空');
}else if(qq.length<5)
{
  $('#qqq').css('border-color',"red");
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
  code.disabled = false;
}


});

$('#code').on('click', function(){

    $('#hid').css('display','block');
    // var code = document.getElementById('code');
    var sec = 30;

    var inte = setInterval(function(){

      sec --;

      if(sec <= 0)
      {
        code.innerHTML = '重新获取';

         clearInterval(inte);
                return ;
      }
      var str = sec;
      code.innerHTML = str;
    },1000);

    var phone = $('#phone').val();
    console.log(phone);

    $.ajax('/home/sendmessage', {
      type:'POST',
      data:{'phone':phone},
      success:function(data){
        console.log(data);
      },
      dataType:'json'
    });

});


  $('#coded').change(function()
    {
      var coded = $('#coded').val();
      // alert(coded);
    $.ajax('/home/getmessage',{
    type:'POST',
    data:{'coded':coded},
    success:function(data)
    {
      if(data == 1)
      {
        alert('恭喜.绑定成功');
  
      }else
      {
        alert('验证码不正确,请重新验证');
        return false;
      }
      
    },
    error:function(data)
    {
      alert('数据异常');
    },
    dataType:'json'
    });
  
  }); 
  

  

</script>
@endsection