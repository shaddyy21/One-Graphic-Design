@extends('template.mail') 
  
@section('title')
   Mail
@stop      

@section('content')
            <div class="createForm">
               <!--This is a blade template that goes in email message to site administrator-->
      
                    <h1>We been contacted by.... </h1>

                    <p>
                        Name: {{$name}}<br>
                        Email address: {{$emailC}} <br>
                        Subject:{{$subject}}<br>
                        Message: {{$content}}<br>
                      
                    </p>
            </div>
@stop