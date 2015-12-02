@extends('template.form') 
  
@section('title')
    Edit Logo
@stop      

@section('content')
            <div class="createForm">
               <div class="main-heading">
                    <h2>Edit Logo</h2>
                </div>
                <div class="formAdmin form pure-form pure-form-aligned">
                   <div class="contact">
                        <fieldset>
                            {!! Form::model($logo,array('url' => 'logo/'.$logo->id, 'method' => 'put','files'=>true, 'id'=>'Form')) !!}
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

                                {!! Form::button('<i class="fa fa-floppy-o"></i>&nbsp;&nbsp;&nbsp;Update',array('id' => 'Send','type'=>'submit')) !!}
                            {!! Form::close() !!}
                        </fieldset>                       
                   </div>
            </div>
@stop