<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Roraima</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	

	<!-- Animate.css -->
	{!! Html::style ('assets/css/animate.css') !!}
	<!-- Icomoon Icon Fonts-->
	{!! Html::style ('assets/css/icomoon.css') !!}
	<!-- Bootstrap  -->
	{!! Html::style ('assets/css/bootstrap.css') !!}
	<!-- Flexslider  -->
	{!! Html::style ('assets/css/flexslider.css') !!}
	<!-- Flaticons  -->
	{!! Html::style ('assets/fonts/flaticon/font/flaticon.css') !!}
	<!-- Owl Carousel -->
	{!! Html::style ('assets/css/owl.carousel.min.css') !!}
	{!! Html::style ('assets/css/owl.theme.default.min.css') !!}
	<!-- Theme style  -->
	{!! Html::style ('assets/css/style.css') !!}

	<!-- Modernizr JS -->
	
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html">Roraima</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="{{route ('roraima.index')}}">Home</a></li>
					<li><a href="{{route ('roraima.works')}}">Proyectos</a></li>
					<li><a href="{{route ('roraima.about')}}">Sobre Nosotros</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="{{route ('roraima.contact')}}">Contacto</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Made by <a href="https://colorlib.com" target="_blank">Digital Studio MY</a> 
                </p>
                <ul>
					<li><a href="https://api.whatsapp.com/send?phone=+5804141387830&text=Buenas,%20necesito%20una%20cotizaci%C3%B3n%20para%20una%20remodelaci%C3%B3n." target="_blank"><i class="icon-whatsapp"></i></a></li>
					<li><a href="https://www.instagram.com/roraimamultiservicios2018/" target="_blank"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>

		</aside>
		@yield('content')
		

		{!! Html::script('assets/js/modernizr-2.6.2.min.js') !!}
		{!! Html::script('assets/js/jquery.min.js') !!}
		{!! Html::script('assets/js/jquery.easing.1.3.js') !!}
		{!! Html::script('assets/js/bootstrap.min.js') !!}
		{!! Html::script('assets/js/jquery.waypoints.min.js') !!}
		{!! Html::script('assets/js/jquery.flexslider-min.js') !!}
		{!! Html::script('assets/js/sticky-kit.min.js') !!}
		{!! Html::script('assets/js/owl.carousel.min.js') !!}
		{!! Html::script('assets/js/jquery.countTo.js') !!}
		
		<!-- MAIN JS -->
		{!! Html::script('assets/js/main.js') !!}
		<!-- Libreria js para las Notificaciones -->


	
		</body>
	</html>
	