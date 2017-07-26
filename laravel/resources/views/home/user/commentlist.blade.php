@extends('home.user.layout')

@section('user')
<link rel="stylesheet" type="text/css" href="/leiphone/css/leiphone.css"  />
<div class="contRtModel2">
    <div class="lphMebBox yahei partBox">
		<div class="main-list">
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
			</div>
			{{ $data->appends($request)->links() }}
		</div>	
	</div>	       
</div>

@endsection