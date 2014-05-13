@extends('layouts.master')

@section('title', 'Register')

@section('content')
    {{ Form::open(array("route" => "users.store"))}}
    
        <div>
        
            {{ Form::label('email', 'Email: ') }}
            
            {{ Form::email('email@domain.com')}}
            
        </div>
        
        <div>
            {{ Form::label('password', 'Password: ') }}
            
            {{ Form::password('password')}}
        </div>
        
		<div>{{ Form::submit() }}</div>

    {{ Form::close()}}
@stop