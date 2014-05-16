<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
		        <span class="sr-only">Toggle login</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
			</button>

            <a class="navbar-brand" href="/goals">Pathways</a>

		</div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">

			@if (Auth::guest())
					{{ Form::open(array('route' => 'sessions.store', 'role'=>'form', 'class'=>'navbar-form navbar-right'))}}
					  <div class="form-group">	        
						  {{ Form::email('email', null, array('class'=>'form-control email-input', 'placeholder'=>'Email'))}}
					  </div>
					  <div class="form-group">	        
						  {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password'))}}
					  </div>
					  <div class="form-group">	        
					  	  {{ Form::submit('Log in', array('class'=>'btn btn-success')) }}
					  </div>
					{{ Form::close()}}
			@else
			<div class="navbar-right">
			    <div class="navbar-text hidden-xs">
                    Hi {{Auth::user()->first_name}}
			    </div>
			    {{ HTML::linkRoute('goals.create', 'Create goal', null, array('class' => 'btn btn-success navbar-btn hidden-md hidden-sm hidden-lg'))}}
				{{ HTML::linkRoute('logout', 'Logout', null, array('class' => 'btn btn-danger navbar-btn'))}}
			</div>
		@endif
						</div>

    </div>
</nav>