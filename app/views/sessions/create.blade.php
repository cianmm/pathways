@extends('layouts.master')

@section('content')
<div class='logged-in-warning bg-danger'>
	<p>Hold your horses, let's get you logged in!</p>
</div>
<div class='col-md-4 col-md-offset-4'>	    
	
	{{ Form::open(array('route' => 'sessions.store', 'role'=>'form',))}}
	  <div class="form-group">	        
		{{ Form::input('text', 'username', null, array('class'=>'form-control', 'placeholder'=>'Username'))}}
	  </div>
	  <div class="form-group">	        
		{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password'))}}
	  </div>
	  <div class="form-group">
	  	<center>{{ Form::submit('Log in', array('class'=>'btn btn-success')) }}</center>
	  </div>
	{{ Form::close()}}
</div>	
@stop
