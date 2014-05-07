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

    @include('includes.navbar');

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