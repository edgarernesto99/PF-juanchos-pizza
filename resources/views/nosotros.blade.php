<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Juanchos Pizza | About :: w3layouts</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="all">
<!--js-->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
<!-- //js -->
<body>
	<!--banner-->
	<div class="banner about-bnr">
		<div class="banner-info about-bnr-info">
			<div class="container">
				<div class="logo">
					<div class="ribbon">
						<div class="ribbon-fold"><h1> <a href="index.html">Juanchos Pizza</a></h1></div>
					</div>
					<h2>Siempre horneando su felicidad</h2>
				</div>
				<!--navigation-->
				@include('/Layouts/menunav')
				<!--navigation-->
			</div>
		</div>
	</div>
	<!--//banner-->
	<!-- about-->
	<!--about-top-->
	<div class="about-top">
		<!-- container -->
		<div class="container">
			<div class="about-info">
				<h3 class="title">Sobre nosotros</h3>
			</div>
			<div class="about-top-grids">
				<div class="col-md-5 about-top-grid">
					<img src="{{ asset('assets/images/2.png') }}" alt="" />
				</div>
				<div class="col-md-7 about-top-grid">
					<h4>Somos un restaurante de comida rápida </h4>
					<p>Estamos ubicados en Tonalá Jalisco, fundados en junio del 2018.
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//container-->
	</div>
	<!--//about-top-->
	<!--about-team-->
	
	<!--//about-team-->
	<!--about-bottom-->
	<div class="about-bottom">
		<!--container-->
		<div class="container">
			<h3 class="title"></h3>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--//container-->
	</div>
	<!--//about-bottom-->
	<!--//about-->
	<!--footer-->
	@include('/footer')
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>
