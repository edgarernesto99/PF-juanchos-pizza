<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Juanchos Pizza | Home :: w3layouts</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pizza Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
<link href="{{ asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="all">
<!--js-->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
<!-- //js -->
<script>
	$(document).ready(function () {
	    size_li = $("#myList li").size();
	    x=1;
	    $('#myList li:lt('+x+')').show();
	    $('#loadMore').click(function () {
	        x= (x+1 <= size_li) ? x+1 : size_li;
	        $('#myList li:lt('+x+')').show();
	    });
	    $('#showLess').click(function () {
	        x=(x-1<0) ? 1 : x-1;
	        $('#myList li').not(':lt('+x+')').hide();
	    });
	});
</script>
</head>
<body>
	<!--banner-->
	<div class="banner">
		<div class="banner-info">
			<div class="container">
				<div class="logo">
					<div class="ribbon">
						<div class="ribbon-fold"><h1> <a href="inicio">Juanchos Pizza</a></h1></div>
					</div>
					<h2>Siempre Horneando su felicidad</h2>
				</div>
				<!--navigation-->
				@include('/Layouts/menunav')
				<!--navigation-->
			</div>
		</div>
	</div>
	<!--//banner-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-text">
				<h3>JUANCHOS PIZZA</h3>
				<p>"Siempre horneando su felicidad"</p>
				<a href="#" class="btn btn-1 btn-1b"></a>
			</div>
			<!--welcome-->
			<div class="welcome">
				<h3 class="title">Bienvenidos</h3>
				<p></p>
				<div class="welcome-info">
					<div class="col-md-6 welcome-grids">
						<div class="welcome-img">
							<img src="{{ asset('assets/images/Alitas.jpg') }}" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="col-md-6 welcome-grids">
						<div class="welcome-img">
							<img src="{{ asset('assets/images/precios.jpg') }}" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<p> </p>
			</div>
			<!--//welcome-->
		</div>
	</div>
	<!--//banner-bottom-->
	<!--services-->
	<div class="services">
		<div class="container">
			<h3 class="title">Servicios</h3>
			<div class="servc-grids">
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"></span></a>
					</div>
					<h4>Entrega en mostrador </h4>
					<p>Visita nuestro local y aprovecha nuestras promociones </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span></a>
					</div>
					<h4>Servicio a domicilio </h4>
					<p>Llevamos tu orden hasta la puerta de tu casa(Aplican restricciones) </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-fire" aria-hidden="true"></span></a>
					</div>
					<h4>Entrega caliente y fresca </h4>
					<p> </p>
				</div>
				<div class="col-md-3 servc-grid">
					<div class="servc-icon hi-icon-effect-8">
						<a href="#" class="hi-icon hi-icon-archive"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a>
					</div>
					<h4>Con los mejores ingredientes </h4>
					<p> </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!--menu-->
	<div class="menu">
		<div class="container">
			<div class="menu-tag">
				<h3 class="title">Menú</h3>
			</div>
			<div class="load_more">
				<ul id="myList">
					<li>
						<div class="l_g">
							<div class="l_g_r">
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Pizza mediana</h4>
											<h6>30 cm</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$ 85</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Pizza grande</h4>
											<h6>35 cm</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$109</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Pizza Familiar</h4>
											<h6>41 cm</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$139</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Pizza Jumbo</h4>
											<h6>46 cm</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$179</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Alitas</h4>
											<h6>12 Piezas</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$85</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Papas a la francesa</h4>
											<h6></h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$35</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Costillitas a BBQ</h4>
											<h6></h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$85</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Paquete 1</h4>
											<h6>1 pizza grande, papas y refresco</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$160</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
					<li><div class="l_g">
							<div class="l_g_r g_r">
								<div class="col-md-6 menu-grids">
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Paquete 2</h4>
											<h6>1 pizza grande, papas, 6 pzas alitas y refresco</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$219</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Paquete 3</h4>
											<h6>1 pizza familiar, papas y refresco</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$195</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Paquete 4</h4>
											<h6>1 pizza familiar, papas, alitas y refresco</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$249</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="menu-text">
										<div class="menu-text-left">
											<h4>Paquete 5</h4>
											<h6>Pizza jumbo, papas y refresco</h6>
										</div>
										<div class="menu-text-midle">
											<span class="line"> </span>
										</div>
										<div class="menu-text-right">
											<h4>$239</h4>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>

				</ul>
				<div id="loadMore">Mostrar más</div>
				<div id="showLess">Mostrar menos</div>
			</div>
		</div>
	</div>
	<!--//menu-->
	<!--footer-->
	@include('/footer')
	<!--//footer-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>
