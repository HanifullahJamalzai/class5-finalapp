<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homestate &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('landing_assets/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('landing_assets/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('landing_assets/css/bootstrap.css') }}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{ asset('landing_assets/css/superfish.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('landing_assets/css/flexslider.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('landing_assets/css/magnific-popup.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('landing_assets/css/bootstrap-datepicker.min.css') }}">
	<!-- CS Select -->
	<link rel="stylesheet" href="{{ asset('landing_assets/css/cs-select.css') }}">
	<link rel="stylesheet" href="{{ asset('landing_assets/css/cs-skin-border.css') }}">
	
	<link rel="stylesheet" href="{{ asset('landing_assets/css/style.css') }}">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
    <body>
        <div id="fh5co-wrapper">
            <div id="fh5co-page">

        @include('landing.layouts.partials.header')

        @yield('contents')

        @include('landing.layouts.partials.footer')
        
	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="{{ asset('landing_assets/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('landing_assets/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('landing_assets/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('landing_assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('landing_assets/js/sticky.js') }}"></script>
	<!-- Superfish -->
	<script src="{{ asset('landing_assets/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('landing_assets/js/superfish.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('landing_assets/js/jquery.flexslider-min.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('landing_assets/js/bootstrap-datepicker.min.js') }}"></script>
	<!-- CS Select -->
	<script src="{{ asset('landing_assets/js/classie.js') }}"></script>
	<script src="{{ asset('landing_assets/js/selectFx.js') }}"></script>

	
	<!-- Main JS -->
	<script src="{{ asset('landing_assets/js/main.js') }}"></script>

	</body>
</html>

