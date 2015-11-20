@extends('template.form') 
  
@section('title')
Paper Art
@stop      

@section('content')
   <div class="items">
        <p>
            {{$pack->description}}
        </p>
   </div>
@stop