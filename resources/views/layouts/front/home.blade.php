<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<!--Responsive needs & IE-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit= no" />
	<meta http-equiv="X-UA-compatible" content="ie=edge" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<!-- --------------- FOR IE9 below ----------------->
	<!--[if lt IE 9]-->
	<!--script(src="js/respond.min.js")-->
	<!--[endif]-->
	<!--Site description -->
	<!-- TODO------------------------------- Client remaining -->
	<meta name="keyword" content="" />
	<meta name="description"
		content="NABA was established in 2000. We provides information systems, technical support, research, hardware, systematic and network" />

	<!-- meta(http-equiv="refresh", content="0; url=index.html")-->
	<meta name="auther" content="Eng - Mohamed Ahmed" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<!--Windows phone-->
	<meta content="#" name="msapplication-navbutton-color" />
	<meta name="msapplication-TileImage" content="./assets/img/naba_logo.jpeg" />
	<!-- Chrome, Firefox OS and Opera-->
	<meta content="#094aae" name="theme-color" />
	<!--Apple-->
	<link rel="apple-touch-icon" href="./assets/img/naba_logo.jpeg" />
	<!--Open graph protocol Facebook integration-->
	<meta property="og:site_name" content="Naba soft" />
	<meta property="og:url" content="http://www.nabasoft.com" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:description"
		content="Best ERP Software, HR, Real estate, Constructions, School system, Mobile App., Web development ... our branches at Dubai , Muscat , Ras Al Khaimah , Riyadh and Cairo from year  2000" />
	<meta property="og:title" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="./assets/img/naba_logo.jpeg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<!--Twitter integration-->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Naba software" />
	<meta name="twitter:image" content="./assets/img/naba_logo.jpeg" />
	<meta name="twitter:description"
		content="Best ERP Software, HR, Real estate, Constructions, School system, Mobile App., Web development ... our branches at Dubai , Muscat , Ras Al Khaimah , Riyadh and Cairo from year  2000" />
	<meta name="generator" content="Powered by Naba soft company" />
	<link rel="icon" href="./assets/img/naba_logo.jpeg" sizes="32x32" />
	<link rel="icon" href="./assets/img/naba_logo.jpeg" sizes="192x192" />
	<meta name="language" content="English" />
	<link rel="canonical" href="" />
	<meta name="robots" content="index, follow" />
	<meta content="en" http-equiv="content-language" />
	<meta content="text/html;charset=UTF-8" http-equiv="content-type" />
	<meta content="text/javascript" http-equiv="content-script-type" />
	<meta content="text/css" http-equiv="content-style-type" />
	<meta name="copyright" content="Copyright 2023 Nabasoft.com, Inc." />
	<meta name="image" content="./assets/img/naba_logo.jpeg" />
	<meta name="twitter:creator" content="@mohamedahmed" />
	<meta name="twitter:image:src" content="./assets/img/naba_logo.jpeg" />
	<!-- title -->
	<title>Naba soft company</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500&display=swap" rel="stylesheet">
	<!-- favicon -->

       @yield('title')
        @yield('css')
	<link rel="shortcut icon" type="image/png" href="{{asset('public/front/assets/img/naba_logo.jpeg')}}">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/bootstrap.min.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/magnific-popup.min.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/animate.min.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/meanmenu.min.css')}}">
	<!-- main style -->

	@yield('about1')
	
	<link rel="stylesheet" href="{{asset('public/front/assets/css/main.min.css')}}">

	@yield('about2')
	<link rel="stylesheet" href="{{asset('public/front/assets/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/scss/main.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/hover-min.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/style.css')}}">
	<link rel='stylesheet' id='settingss-css' href='https://elmeyasoft.com/wp-content/themes/elmeya/rs-plugin/css/settings.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='captionss-css' href="{{asset('public/front/assets/css/captions.css')}}" type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesomess-css' href="{{asset('public/front/assets/css/font-awesome.css')}}" type='text/css' media='all' />

	@yield('paginate')

  

</head>
    <body>
       
        <!-- Page Header Start-->
        @include('layouts.front.navbar')

        <!-- Page Body Start-->
        @yield('content')

        <!-- footer Start-->
        @include('layouts.front.footer')
        <!-- jquery -->
      
        <!-- jquery -->
		<script src="{{asset('public/front/assets/js/jquery-3.7.0.js')}}" ></script>
	    <script src="{{asset('public/front/assets/js/popper.min.js')}}"></script>
		<script src="{{asset('public/front/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/front/assets/js/jquery.countdown.js')}}"></script>
		<script src="{{asset('public/front/assets/js/slick.min.js')}}"></script>
		<script src="{{asset('public/front/assets/js/owl.carousel.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/jquery-migrate.min.js')}}"></script>

		<script type='text/javascript' src="{{asset('public/front/assets/js/jquery.tweet.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/jquery.themepunch.plugins.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/jquery.nivo.slider.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/jquery.prettyPhoto.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/testimonialrotator.js')}}"></script>
	    <script type='text/javascript' src="{{asset('public/front/assets/js/panzer.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/custom_rtl.js')}}"></script>
		<script type='text/javascript' src="https://maps.googleapis.com/maps/api/js?sensor=false&#038;v=3.exp&#038;ver=1.0.0"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/jquery.gmap.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/wp-embed.min.js')}}"></script>
		<script src="{{asset('public/front/assets/js/sticker.js')}}"></script>
		<script type='text/javascript' src="{{asset('public/front/assets/js/jquery.meanmenu.min.js')}}"></script>
	    <script src="{{asset('public/front/assets/js/script.js')}}"></script>
      


        @yield('script')

    </body>
</html>
