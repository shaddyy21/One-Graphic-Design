@extends('template.form') 
  
@section('title')
    Create Paper
@stop      

@section('content')
            <div class="createForm">
               <div class="main-heading">
                    <h2>Create Paper</h2>
                </div>
                <div class="formAdmin form pure-form pure-form-aligned">
                    <fieldset>
                        {!! Form::open(array('url' => 'paper', 'files'=>true, 'id'=>'Form')) !!}
                            <div class="pure-control-group">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::textarea('description', null ,['class' => 'description']) !!}
                                {!! $errors->first('description','<p class="error">:message</p>')!!}
                            </div>
                            
                            <div class="pure-control-group">
                                {!! Form::label('path', 'Photo') !!}
                                {!! Form::file('path') !!}
                                {!! $errors->first('path','<p class="error">:message</p>')!!}
                            </div>
                            
                            {!! Form::button('<i class="fa fa-plus-circle"></i>&nbsp;&nbsp;&nbsp;Create',array('id' => 'Send','type'=>'submit')) !!}
                        {!! Form::close() !!}
                    </fieldset>
            </div>
@stop