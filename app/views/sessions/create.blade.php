@extends('layouts.master')

@section('content')
<div class='col-xs-6 col-md-2'>	    

				{{ Form::open(array('route' => 'sessions.store', 'role'=>'form', 'class'=>'navbar-form navbar-right'))}}
				  <div class="form-group">	        
					  {{ Form::input('text', 'username', null, array('class'=>'form-control', 'placeholder'=>'Username'))}}
				  </div>
				  <div class="form-group">	        
					  {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password'))}}
				  </div>
				  <div class="form-group">	        
				  	  {{ Form::submit('Log in', array('class'=>'btn btn-success')) }}
				  </div>
				{{ Form::close()}}
</div>	

@stop
