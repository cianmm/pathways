@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="row">
	<div class='logged-in-warning bg-danger col-md-4 col-md-offset-4'>
		<p>Hold your horses, let's get you logged in!</p>
	</div>
</div>
<div class="row">
    <div class="col-md-4">
        <h1>Register</h1>
        {{ $registerform }}

    </div> <!-- register -->

	<div class='col-md-4 col-md-offset-4 login'>	
	    <h1>Login</h1>    
		{{ Form::open(array('route' => 'sessions.store', 'role'=>'form',))}}
		  <div class="form-group">
		      {{ Form::label('login-email', 'Email')}}
              {{ Form::email('login-email', null, array('class'=>'form-control email-input', 'placeholder'=>'Email'))}}
		  </div>
		  <div class="form-group">	  
		    {{ Form::label('login-password', 'Password')}}
			{{ Form::password('login-password', array('class'=>'form-control', 'placeholder'=>'Password'))}}
		  </div>
		  <div class="form-group">
		  	{{ Form::submit('Log in', array('class'=>'btn btn-success')) }}
		  </div>
		{{ Form::close()}}
	</div>	<!-- login -->
</div>
@stop
