@extends('template.form')

@section('title')
    Edit User
@stop

@section('content')
			<div class="createForm">
               <div class="main-heading">
                    <h2>Edit User</h2>
                </div>
                <div class="formAdmin form pure-form pure-form-aligned">
                    <fieldset>
                        {!! Form::model($user,array('url' => 'user/'.$user->id, 'method' => 'put', 'id'=>'Form')) !!}
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

                            {!! Form::button('<i class="fa fa-floppy-o"></i>&nbsp;&nbsp;&nbsp;Update',array('id' => 'Send','type'=>'submit')) !!}

                        {!! Form::close() !!}
                    </fieldset>
            </div>
@stop