@extends('template.form') 
  
@section('title')
    Profile
@stop      


@section('content')
    <div class="createForm">
        <div class="main-heading">
            <h2>My Profile</h2>
        </div>
        <div class="profile">
            <h3>First Name</h3>
            <h4 data-field="firstname">{!! $user->firstname !!}</h4>
            
            <h3>Last Name</h3>
            <h4 data-field="lastname">{!! $user->lastname !!}</h4>
            
            <h3>User Name</h3>
            <h4 data-field="username">{!! $user->username !!}</h4>
            
            <h3 id="EmailUs">E-mail</h3>
            <h4 id="EmailU" data-field="email">{!! $user->email !!}</h4>
            
            <a href="{{url('users/'.Auth::user()->id.'/edit')}}">Edit Profile</a>
        </div>
    </div>    
    
@stop