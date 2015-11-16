@extends('template.form') 
  
@section('title')
    Login
@stop      

@section('content')         
                  <div class="loginForm">   

                    <div class="main-heading">
                        <h2>Login</h2>
                    </div>
                    
                    <fieldset>
                        {!! Form::open(['url' => 'login'], array('class'=>'pure-form')) !!}
                            <div class="pure-control-group">
                                {!! Form::label('username', 'User Name', array('class'=>'label')) !!}
                                {!! Form::text('username', null, array('class'=>'input')) !!}
                                {!! $errors->first('email','<p class="error">:message</p>')!!}                             
                            </div>

                            <div class="pure-control-group">
                                {!! Form::label('password', 'Password', array('class'=>'label')) !!}
                                {!! Form::password('password', array('class'=>'input')) !!}
                                {!! $errors->first('password','<p class="error">:message</p>')!!}
                            </div>
                            
                            <p class="error">{{Session::get('message')}}</p>

                            {!! Form::button('<i class="fa fa-sign-in"></i>&nbsp;&nbsp;&nbsp;Sign In',array('id' => 'Login','type'=>'submit')) !!}
                        {!! Form::close() !!}
                    </fieldset>
                </div>
@stop
