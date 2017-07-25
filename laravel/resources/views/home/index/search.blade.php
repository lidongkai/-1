@extends('home.layout')

@section('content')

<link rel="stylesheet"  type="text/css" href="/leiphone/css/ma.css" />
<link rel="stylesheet"  type="text/css" href="/leiphone/css/com.css" />


<nav class="yp-secNav">

			
    <div class="wrapper">
    	@foreach($data as $key=>$val)
        <a href="/home/column/{{$val->id}}"  class=" ">{{$val->name}}</a>
        @endforeach
    </div>
   
</nav>
		<div class="lph-pageList index-pageList container" >
                
                <div class="list">
                    <ul class="clr">
                      
                        
            					@foreach($data1 as $k=>$v)

                                @php
                                $res = \DB::table('users')->where('username',$v->aname)->first();
                               
                                @endphp
                            
                                <li>
                                    <div class="box">
                                        <div class="img">
                                            <a href="" date-category="40" class='sort znyj'>{{$v->cname}}</a>
                                            <a href=""  target="_blank">
                                                <img class='lazy' src="/uploads/article/{{$v->picture}}" title="{{$v->atitle}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="word">
                                            <h3>
                                            <a href="/home/show/{{$v->id}}" target="_blank" title="{{$v->atitle}}" class="headTit">
                                                {{$v->atitle}}            </a>
                                            </h3>
                                            <div class="des">
                                               {{$v->descript}}            </div>
                                            <div class="msg clr">
                                                <a href="" target="_blank" class="aut" rel="nofollow">
                                                    <img src="/uploads/avatar/{{$res->photo}}" width="50" height="50" alt=""/>{{$v->aname}}               </a>
                    
                                                <div class="time">{{$v->ctime}}</div>
                                                <div class="tags">
                                                    <em></em>
                                                                       <!--  <a href="" title="智能音箱"  target="_blank">智能音箱</a><a href="" title="echo"  target="_blank">echo</a><a href="" title="Dueros"  target="_blank">Dueros</a>   -->                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
            					@endforeach
            		
                    </ul>
									
           
                </div>
                    {{ $data1->appends($request)->links() }}
            </div>	 	


@endsection