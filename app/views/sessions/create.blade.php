@extends('layouts.master')

@section('content')
<div class='col-xs-6 col-md-2'>	    

	{{ Form::open(array('route' => 'sessions.store', 'role'=>'form', 'class'=>'form'))}}
	
		<div class='form-group'>
	    
	        {{ Form::label('username', 'Username: ') }}
	        
	        {{ Form::input('text', 'username', null, array('class'=>'form-control'))}}
	        
	    </div>
	    
	    <div class='form-group'>
	    
	        {{ Form::label('password', 'Password: ') }}
	        
	        {{ Form::password('password', array('class'=>'form-control'))}}
	    </div>
	    
		<div>{{ Form::submit('login', array('class'=>'btn btn-default')) }}</div>
	{{ Form::close()}}
</div>	

@stop
