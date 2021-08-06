<!doctype html>
<html>
<head>
    <title> @yield('title') </title>

    <link  href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">

    
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/register.js"></script>

</head>
<body>
        @include('shared.navbar')
        
        <section>
        	
        	@yield('contenido')
        </section>
        
</body>

<footer>
	@include('shared.footer')
</footer>

</html>