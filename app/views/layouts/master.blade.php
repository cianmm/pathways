<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<title>Pathways: @yield('title', 'Meet your goals.')</title>
	<meta name="description" content="" />
  	<meta name="keywords" content="" />
	<meta name="author" content="Cian Mac Mahon" />
	
	<!-- include bootstrap from a cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- include my own CSS -->
	{{HTML::style('/css/css.css')}}
	
	<!-- Latest compiled and minified jQuery and JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    {{HTML::script('js/functions.js')}}
    {{HTML::script('js/peity.min.js')}}

	<!-- better rendering and zooming on mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <!--This is Remy Sharps script for adding some HTML5 tag compatibility to older IE browsers-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body>

    @include('includes.navbar');

    <div class="jumbotron">
        <div class="container">
            <h1>{{ link_to_route('goals.index', 'Pathways', null, array('class' => 'jumbotron-title'))}}</h1>
            <p>Let's meet your goals. They're friendly.</p>
        </div>
    </div>
    <div class="container">
    
        <div class="content">
            @yield('content')
        </div>
        
    </div>  
    <div id="footer">

    </div><!-- footer -->
</body>
</html>