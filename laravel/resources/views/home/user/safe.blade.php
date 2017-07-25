@extends('home.user.layout')

@section('user')
  <div class="public_m1">
    <div class="public_m2">修改密码</div>
  
    <!--照片和内容-->    
    <div class="zp_nrm">
      <!--left-->
      <div class="zp_nrm_l" >
          <img src="/uploads/avatar/{{ session('master')->photo }}" style="width:100px;height:100px;" /><br>
      </div>
      <!--right-->
      <div class="zp_nrm_r">
         <form action="/home/user/update" method="post">
                {{ csrf_field() }}
                @if(session('info'))
                  <div class="alert alert-danger">
                {{ session('info') }}
                  </div>
                @endif
              
              <div class="form-group col-xs-8">
                <div class="col-xs-2">
                  <p style="font-size:16px">旧密码:</p>
                </div>
                <div class="col-xs-6">
                  <input type="password" value="" name="oldpwd" class="form-control" id="oldpwd"  placeholder="请输入旧密码" required="required"><span ></span>
                </div>                
              </div>
              <br><br><br><br><br>
              
              <div class="form-group col-xs-8">
                <div class="col-xs-2">
                  <p style="font-size:16px">新密码:</p>
                </div>
                <div class="col-xs-6">
                <input type="password" id='newpwd' name="newpwd" class="form-control" placeholder="请输入新密码" ><span ></span>
                 </div>
              </div>

              <div class="form-group col-xs-8">
                <div class="col-xs-2">
                  <p style="font-size:16px">确认密码:</p>
                </div>
                <div class="col-xs-6">
                  <input type="password" id='renewpwd' name="renewpwd" class="form-control" placeholder="请确认密码" ><span ></span>
                </div>
              </div>
            </div>
              <br><br><br><br>

            <div class="form-group col-xs-8">
              <button id="btn" type="submit" class="public_m3">保存</button>
            </div>
      </form>
    </div>
  </div>
</div>

@endsection