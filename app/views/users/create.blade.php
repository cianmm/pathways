@extends('layouts.master')

@section('title', 'Register')

@section('content')
<div class="row col-md-4">
    {{ Form::open(array("route" => "users.store"))}}
    
    <div class="row">
        <div class="form-group col-md-6">
            
            {{ Form::label('first_name', 'First Name:') }}
            
            {{ Form::text('first_name', null, array('class'=>'form-control', 'placeholder'=>'Milo')) }}
            
            {{ $errors->first('first_name')}}
            
        </div>
        
        <div class="form-group col-md-6">
            
            {{ Form::label('last_name', 'Last Name:') }}
            
            {{ Form::text('last_name', null, array('class'=>'form-control', 'placeholder'=>'Banana')) }}
                       
            {{ $errors->first('last_name') }}
            
        </div>

    </div>
        <div class="form-group">
        
            {{ Form::label('register-email', 'Email: ') }}
            
            {{ Form::email('register-email', null, array('class'=>'email-input form-control', 'placeholder'=>'milo@cs50.tv'))}}
            
            {{ $errors->first('email') }}            
            
        </div>
        
        <div class="form-group">
            {{ Form::label('password', 'Password: ') }}
            
            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Super Secret Password')) }}
            
            {{ $errors->first('password') }}

        </div>
        
		<div>{{ Form::submit('Register',array('class'=>'btn btn-default')) }}</div>

    {{ Form::close()}}
</div>
@stop