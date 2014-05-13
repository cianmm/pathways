@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="row">
	<div class='logged-in-warning bg-danger col-md-4'>
		<p>Hold your horses, let's get you logged in!</p>
	</div>
</div>
<div class="row">
	<div class='col-md-4'>	    
		{{ Form::open(array('route' => 'sessions.store', 'role'=>'form',))}}
		  <div class="form-group">	        
              {{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'Email'))}}
		  </div>
		  <div class="form-group">	        
			{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password'))}}
		  </div>
		  <div class="form-group">
		  	{{ Form::submit('Log in', array('class'=>'btn btn-success')) }}
		  </div>
		{{ Form::close()}}
	</div>	
</div>
@stop
