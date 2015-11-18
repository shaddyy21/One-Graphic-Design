@extends('template.form') 
  
@section('title')
    Create Paper Art
@stop      

@section('content')
            <div class="createForm">
               <div class="main-heading">
                    <h2>Create Paper Art</h2>
                </div>
                <div class="formAdmin form pure-form pure-form-aligned">
                    <fieldset>
                        {!! Form::open(array('url' => 'foo/bar', 'id'=>'Form')) !!}
                            <div class="pure-control-group">
                                {!! Form::label('name', 'Full Name') !!}
                                {!! Form::text('name') !!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('email', 'E-mail') !!}
                                {!! Form::text('email') !!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('subject', 'Subject') !!}
                                {!! Form::text('subject') !!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('message', 'Message') !!}
                                {!! Form::textarea('message',null,array('id' => 'Message')) !!}
                            </div>
                            
                            {!! Form::button('<i class="fa fa-paper-plane"></i>&nbsp;&nbsp;&nbsp;Send',array('id' => 'Send','type'=>'submit')) !!}
                        {!! Form::close() !!}
                    </fieldset>
            </div>
@stop