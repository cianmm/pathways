@extends('layouts.master')

@section('title', 'Register')

@section('content')
    {{ Form::open(array("route" => "users.store"))}}
    
        <div>
            
            {{ Form::label('first_name', 'First Name:') }}
            
            {{ Form::text('first_name') }}
            
        </div>
        
        <div>
            
            {{ Form::label('last_name', 'Last Name:') }}
            
            {{ Form::text('last_name') }}
            
        </div>

    
        <div>
        
            {{ Form::label('email', 'Email: ') }}
            
            {{ Form::email('email')}}
            
        </div>
        
        <div>
            {{ Form::label('password', 'Password: ') }}
            
            {{ Form::password('password')}}
        </div>
        
		<div>{{ Form::submit() }}</div>

    {{ Form::close()}}
@stop