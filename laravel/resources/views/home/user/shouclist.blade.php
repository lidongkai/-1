
@extends('home.user.layout')

@section('user')
<link rel="stylesheet" type="text/css" href="/leiphone/css/leiphone.css"  />
<div class="contRtModel2">
    <div class="lphMebBox yahei partBox">
		<div class="main-list">
		    <div class="list CollectList">
		        <h1>我的收藏</h1>
		        <ul>
		            @foreach($data as $k=>$v)
		            @php
					$res = \DB::table('articles')->where('id',$v->arid)->first();	
		            @endphp
		            <li class="first">
		                <div class="tit">
		                        <span class="name">
		                            <a href="/home/show/{{$res->id}}">{{$res->atitle}}  </a>
		                        </span>
		                        <span class="time">
		                                        {{$res->ctime}}                   </span>
		                </div>
		                    <div class="descri">
		                        {{$res->descript}}
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