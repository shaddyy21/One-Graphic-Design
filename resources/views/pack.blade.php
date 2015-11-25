@extends('template.imgInfo') 
  
@section('title')
    Packaging
@stop      

@section('content')
   <div class="desp">   
        <img src="{{asset('img/'.$pack->path)}}" alt="">
        <p>{{$pack->description}}</p>
        <a href="{{url('/?slide=packaging')}}"><p class="cls"><i class="fa fa-times"></i>&nbsp;&nbsp; Close</p></a>
   </div>
@stop