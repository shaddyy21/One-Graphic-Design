@extends('template.form') 
  
@section('title')
   Mail
@stop      

@section('content')
            <div class="createForm">
               <!--This is a blade template that goes in email message to site administrator-->
      
                    <h1>We been contacted by.... </h1>

                    <p>
                        Name: <br>
                        Email address:  <br>
                        Subject:<br>
                        Message: {{$content}}<br>
                        Date: <br>
                      
                    </p>
            </div>
@stop