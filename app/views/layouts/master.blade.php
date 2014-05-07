<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<title></title>
	<meta name="description" content="" />
  	<meta name="keywords" content="" />
	<meta name="author" content="Cian Mac Mahon" />
	
	<!-- include bootstrap from a cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- better rendering and zooming on mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <!--This is Remy Sharp's script for adding some HTML5 tag compatibility to older IE browsers-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body>
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
			@if (Auth::guest())
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
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
			@else
				<div>
					<a href="logout" type="button" class="btn btn-danger navbar-btn navbar-right">Log Out</a>
				</div>
			@endif
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1>Pathways</h1>
            <p>Let's meet your goals. They're friendly.</p>
        </div>
    </div>
    <div class="container">
    
        <div class="content">
            @yield('content')
        </div>
        
    </div>
<!-- Latest compiled and minified jQuery and JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>