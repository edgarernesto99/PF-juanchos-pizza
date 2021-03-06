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
						<div class="ribbon-fold"><h1> <a href="index.html">Juanchos Pizza</a></h1></div>
					</div>
					<h2>Siempre Horneando su felicidad</h2>
				</div>
				<!--navigation-->
				@include("/Layouts/menunav")
				<!--navigation-->
			</div>
		</div>
	</div>
	<!--//banner-->

    <!--menu-->
    @include("/mensajes");
	@yield('content')
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
