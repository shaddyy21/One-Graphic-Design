@extends('template.imgInfo') 
  
@section('title')
    Logo
@stop      

@section('content')
   <div class="desp">   
        <img src="{{asset('img/'.$logo->path)}}" alt="">
        <p>{{$logo->description}}</p>
        <a href="{{url('/?slide=logo')}}"><p class="cls"><i class="fa fa-times"></i>&nbsp;&nbsp; Close</p></a>
   </div>
@stop