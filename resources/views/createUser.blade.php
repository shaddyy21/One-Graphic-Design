@extends('template.form') 
  
@section('title')
    Create Paper Art
@stop      

@section('content')
            <div class="createForm">
               <div class="main-heading">
                    <h2>Create User</h2>
                </div>
                <div class="formAdmin form pure-form pure-form-aligned">
                    <fieldset>
                        {!! Form::open(array('url' => 'users', 'id'=>'Form')) !!}
                            <div class="pure-control-group">
                                {!! Form::label('firstname', 'First Name') !!}
                                {!! Form::text('firstname') !!}
                                {!! $errors->first('firstname','<p class="error">:message</p>')!!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('lastname', 'Last Name') !!}
                                {!! Form::text('lastname') !!}
                                {!! $errors->first('lastname','<p class="error">:message</p>')!!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('email', 'E-mail') !!}
                                {!! Form::text('email') !!}
                                {!! $errors->first('email','<p class="error">:message</p>')!!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('username', 'User Name') !!}
                                {!! Form::text('username') !!}
                                {!! $errors->first('username','<p class="error">:message</p>')!!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::password('password') !!}
                                {!! $errors->first('password','<p class="error">:message</p>')!!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('password_confirmation', 'Confirm Password') !!}
                                {!! Form::password('password_confirmation') !!}
                                {!! $errors->first('password_confirmation','<p class="error">:message</p>')!!}
                            </div>
                            
                            {!! Form::button('Create Account',array('id' => 'Send','type'=>'submit')) !!}
                        {!! Form::close() !!}
                    </fieldset>
            </div>
@stop