@extends('template.form') 
  
@section('title')
    Login
@stop      

@section('content') 
        <div class="createForm">
            <div class="main-heading">
                    <h2>Log-in</h2>
            </div>
            <div class="form pure-form pure-form-aligned">
               <div class="contact">
                    <fieldset>
                        {!! Form::open(array('url' => 'login', 'id'=>'Form')) !!}
                            <div class="pure-control-group">
                                {!! Form::label('username', 'User Name') !!}
                                {!! Form::text('username') !!}
                                {!! $errors->first('usernamel','<p class="error">:message</p>')!!}
                            </div>

                            <div class="pure-control-group">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::password('password') !!}
                                {!! $errors->first('password','<p class="error">:message</p>')!!}
                            </div>

                            {!! Form::button('<i class="fa fa-sign-in"></i> Log-in',array('id' => 'Send','type'=>'submit')) !!}
                        {!! Form::close() !!}
                    </fieldset>
               </div>
            </div>
        </div>
@stop
