@extends('template.imgInfo') 
  
@section('title')
    Paper Art
@stop      

@section('content')
   <div class="desp">   
        <img src="{{asset('img/'.$paper->path)}}" alt="">
        <p>{{$paper->description}}</p>
        <a href="{{url('/#Portfolio')}}"><p class="cls"><i class="fa fa-times"></i>&nbsp;&nbsp; Close</p></a>
   </div>
@stop