
@extends('home.user.layout')

@section('user')
  
<link rel="stylesheet" type="text/css" href="/leiphone/css/leiphone.css"  />
	<div class="contRtModel2">
        <div class="lphMebBox yahei partBox">

            
            <div class="hd clr">
                <div class="l-mess">
                    <div class="face">
                        <a href="">
                            <img src="/uploads/avatar/{{session('master')->photo}}" alt="" width="60">
                        </a>
                    </div>
                    <div class="face-name">
                        <div class="nickname">
                            <a href="">
                                {{session("master")->username}}               </a>
                        </div>
                        <p>
                                        </p>
                    </div>
                </div>
                <div class="m-mess">
                    <p>积分：{{session('master')->score}}<a href="" class="q">?</a></p>
            <!--        <p>雷点：</p>-->
                </div>
                <div class="r-mess">
                    <em></em>
                    phpweb网站开发工程师    </div>
            </div>
            
            <div class="noRead-mess">
                <span><em></em>您有<a href="/home/user/sixin">{{$res}}</a>条未读消息</span>
            </div>

            <div class="main-list">
                <div class="list CollectList">
                    <h1>我的收藏</h1>
                    <ul>
                        @php
                        $ress = \DB::table('articles')->where('id',$data1->arid)->first();
                        @endphp
                        <li class="first">
                            <div class="tit">
                                    <span class="name">
                                        <a href="/home/show/{{$ress->id}}">{{$ress->atitle}}</a>
                                    </span>
                                    <span class="time">
                                        {{$ress->ctime}}                                  </span>
                            </div>
                                <div class="descri">
                                    {{$ress->descript}}
                                </div>
                        </li>
                    </ul>
                    <div class="more">
                        <a href="/home/user/shouclist">查看更多{{$nums}}条收藏</a>
                    </div>
                </div>
                <div class="list commentList">
                    <h1>最新评论</h1>
                        <ul>
                            @foreach($data as $ke=>$va)
                            @php
                            $res = \DB::table('articles')->where('id',$va->aid)->first();
                            @endphp
                            <li>
                                <div class="tit">
                                    <span class="name">
                                        <a href="/home/show/{{$res->id}}">{{$res->atitle}}</a>
                                    </span>
                                    <span class="time">
                                        {{$va->ctime}}                                </span>
                                </div>
                                <div class="descri">
                                    <em></em>{{$va->comment}}                           
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    <div class="more">
                        <a href="/home/user/commentlist">查看更多{{$num}}条评论</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    


