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
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('public/front/assets/img/naba_logo.jpeg')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('public/front/assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/owl.carousel.min.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/magnific-popup.min.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/animate.min.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/scss/main.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/main.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/hover-min.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('public/front/assets/css/slick.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/products.css')}}">
	<link rel="stylesheet"  href="{{asset('public/front/assets/css/product-details.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/assets/css/responsive.css')}}">
</head>
<body>
	<!--PreLoader-->
	<div class="loader" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
	   <img style="width: 230px;" src="{{asset('public/front/assets/img/naba-logo.gif')}}">
	   <p class="mt-3">Loading...</p>
	</div>
	<!--PreLoader Ends-->
    <div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{route('front/index')}}">
								<img src="{{asset('public/front/assets/img/naba_logo-white.svg')}}" alt="This is the site logo" width="70">
							</a>
						</div>
						<!-- logo -->
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item hvr-float"><a href="{{route('front/index')}}">{{__('navbar.Home')}}</a>
								</li>
								<li class="hvr-float"><a href="{{route('front/products')}}">{{__('navbar.Products')}}</a>
									<ul class="sub-menu">
                                       
									<li><a href="{{route('front/products')}}">{{__('navbar.Products')}}</a></li>
										<?php
											use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
											// $nav_products = session()->get('nav_products');
											$nav_products = \App\Models\Product::translatedIn(LaravelLocalization::setLocale())->active()->get();
										?>
										@if(count($nav_products) > 0)
											@foreach($nav_products as $nav_product)
												<li><a href="{{route('front/product', $nav_product->id)}}"> {{$nav_product->title}}</a></li>
											@endforeach
										@endif
									</ul>
								</li>

								<li class="hvr-float"><a href="{{route('front/services')}}">{{__('navbar.Services')}}</a></li>

								<li class="hvr-float">
									  <a href="#">{{__('navbar.Articles')}}</a>
									<ul class="sub-menu">
                                    <li><a href="{{route('front/articles')}}">{{__('navbar.Articles')}}</a></li>
										<?php
											// $nav_trainings = session()->get('nav_trainings');
											$nav_trainings = \App\Models\Article::translatedIn(LaravelLocalization::setLocale())->active()->get()
										?>
										@if(count($nav_trainings) > 0)
											@foreach($nav_trainings as $nav_article)
												<li class="<?php if(app()->getLocale() == "ar"){ echo "text-right"; } ?>" id="article_active_<?php echo $nav_article->id ?>"><a href="{{route('front/article', $nav_article->id)}}">{{$nav_article->title}}</a></li>
											@endforeach
										@endif
									</ul>
								</li>
								
								<li class="hvr-float"><a href="{{route('front/webinars')}}">{{__('navbar.Webinars')}}</a>
									<ul class="sub-menu">
									<li><a href="{{route('front/webinars')}}">{{__('navbar.Webinars')}}</a></li>
										<?php
											// $nav_webinars = session()->get('nav_webinars');
											$nav_webinars = \App\Models\Webinar::translatedIn(LaravelLocalization::setLocale())->active()->get();
										?>
										@if(count($nav_webinars) > 0)
											@foreach($nav_webinars as $nav_webinar)
												<li><a href="{{route('front/webinar', $nav_webinar->id)}}">{{$nav_webinar->title}}</a></li>
											@endforeach
										@endif
									</ul>
								</li>
								
								<li class="hvr-float"><a href="{{route('front/trainings')}}">{{__('navbar.Training')}}</a>
									<ul class="sub-menu">
									   <li><a href="{{route('front/trainings')}}">{{__('navbar.Training')}}</a></li>
										<?php
											// $nav_trainings = session()->get('nav_trainings');
											$nav_trainings = \App\Models\Training::translatedIn(LaravelLocalization::setLocale())->active()->get();
										?>
										@if(count($nav_trainings) > 0)
											@foreach($nav_trainings as $nav_training)
												<li><a href="{{route('front/training', $nav_training->id)}}">{{$nav_training->name}}</a></li>
                                               
											@endforeach
										@endif
									</ul>
								</li>
                                <li class="hvr-float"><a href="{{route('front/about')}}">{{__('navbar.About')}}</a></li>
								<li class="hvr-float">
									<a class="mobile-show change-language change-language-desktop"
										href="index-ar.html"><i class="pe-3 fas fa-globe-americas"></i>عربى</a>
									<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
								</li>
								<!-- <li> -->
									<!-- <a class="mobile-show change-language change-language-desktop" href="index-ar.html">عربى</a> -->
									<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
								<!-- </li> -->
							</ul>
						</nav>
						<!-- <a class="mobile-show change-language" href="index-ar.html">عربى</a> -->
						<!-- <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
						<a class="mobile-show change-language" href="index-ar.html">عربى</a>
						<div class="mobile-menu mean-container"><div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="right: 0px; left: auto; text-align: center; text-indent: 0px; font-size: 18px;">
							<span></span>
							<span></span>
							<span></span>
						</a>
						
						<nav class="mean-nav">
							<ul style="display: none;">
								<li class="current-list-item hvr-float"><a href="index.html">Home</a></li>
								<li class="hvr-float"><a href="#">Products</a>
									<ul class="sub-menu" style="display: none;">
										<li><a href="products.html">All products</a></li>
										<li><a href="show-product.html">ElMohtaref for contracting companies</a></li>
										<li><a href="show-product.html">ElMohtaref for real estate investment</a></li>
										<li><a href="show-product.html">ElMohtaref for educational institutions</a></li>
										<li><a href="show-product.html">ElMohtaref for human resources</a></li>
										<li><a href="show-product.html">ElMohtaref for production and factories</a></li>
										<li><a href="show-product.html">ElMohtaref for manage transportation
												companies</a></li>
										<li><a href="show-product.html">ElMohtaref for charitable institutions and
												endowments</a></li>
									</ul>
								<a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
								<li class="hvr-float"><a href="blogs.html">Articles </a>
									<ul class="sub-menu" style="display: none;">
										<li><a href="blogs.html">All articles</a></li>
										<li><a href="blog-details.html">article</a></li>
										<li><a href="blog-details.html">article</a></li>
										<li><a href="blog-details.html">article</a></li>
										<li><a href="blog-details.html">article</a></li>
										<li><a href="blog-details.html">article</a></li>
									</ul>
								<a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
								<li class="hvr-float"><a href="#">Webinars </a>
									<ul class="sub-menu" style="display: none;">
										<li><a href="webinars.html">All webinars</a></li>
										<li><a href="show-webinar.html">webinar</a></li>
										<li><a href="show-webinar.html">webinar</a></li>
										<li><a href="show-webinar.html">webinar</a></li>
										<li><a href="show-webinar.html">webinar</a></li>
										<li><a href="show-webinar.html">webinar</a></li>
									</ul>
								<a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
								<li class="hvr-float"><a href="#">Services</a>
									<ul class="sub-menu" style="display: none;">
										<li><a href="services.html">All services</a></li>
										<li><a href="show-service.html">Employee training</a></li>
										<li><a href="show-service.html">Fully operational</a></li>
										<li><a href="show-service.html">Technical support</a></li>
										<li><a href="show-service.html">Software tests</a></li>
										<li><a href="show-service.html">Consulting</a></li>
									</ul>
								<a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
								<li class="hvr-float"><a href="#">Training </a>
									<ul class="sub-menu" style="display: none;">
										<li><a href="trainings.html">All trainings</a></li>
										<li><a href="show-training.html">training</a></li>
										<li><a href="show-training.html">training</a></li>
										<li><a href="show-training.html">training</a></li>
										<li><a href="show-training.html">training</a></li>
										<li><a href="show-training.html">training</a></li>
									</ul>
								<a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
								<li class="hvr-float mean-last">
									<a class="mobile-show change-language change-language-desktop" href="index-ar.html"><i class="pe-3 fas fa-globe-americas"></i>عربى</a>
									<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
								</li>
						     	</ul>
						               <select>
										     <option value="">من فضلك اختر الصفحة</option>
											 <option value="index.html">Home</option>
											 <option value="#">Products</option><option value="products.html">-- All products</option>
											 <option value="show-product.html">-- ElMohtaref for contracting companies</option>
											 <option value="show-product.html">-- ElMohtaref for real estate investment</option>
											 <option value="show-product.html">-- ElMohtaref for educational institutions</option>
											 <option value="show-product.html">-- ElMohtaref for human resources</option>
											 <option value="show-product.html">-- ElMohtaref for production and factories</option>
											 <option value="show-product.html">-- ElMohtaref for manage transportationcompanies</option>
											 <option value="show-product.html">-- ElMohtaref for charitable institutions and endowments</option>
											 <option value="blogs.html">Articles </option>
											 <option value="articles.html">-- All articles</option>
											 <option value="show-article.html">-- article</option>
											 <option value="show-article.html">-- article</option>
											 <option value="show-article.html">-- article</option>
											 <option value="show-article.html">-- article</option>
											 <option value="show-article.html">-- article</option>
											 <option value="#">Webinars </option>
											 <option value="webinars.html">-- All webinars</option>
											 <option value="show-webinar.html">-- webinar</option>
											 <option value="show-webinar.html">-- webinar</option>
											 <option value="show-webinar.html">-- webinar</option>
											 <option value="show-webinar.html">-- webinar</option>
											 <option value="show-webinar.html">-- webinar</option>
											 <option value="#">Services</option>
											 <option value="services.html">-- All services</option>
											 <option value="show-service.html">-- Employee training</option>
											 <option value="show-service.html">-- Fully operational</option>
											 <option value="show-service.html">-- Technical support</option>
											 <option value="show-service.html">-- Software tests</option>
											 <option value="show-service.html">-- Consulting</option>
											 <option value="#">Training </option>
											 <option value="trainings.html">-- All trainings</option>
											 <option value="show-training.html">-- training</option>
											 <option value="show-training.html">-- training</option>
											 <option value="show-training.html">-- training</option>
											 <option value="show-training.html">-- training</option>
											 <option value="show-training.html">-- training</option>
											 <option value="index-ar.html">عربى</option>
											 <option value="index.html">-- Home</option>
											 <option value="#">-- Products</option>
											 <option value="products.html">All products</option>
											 <option value="show-product.html">ElMohtaref for contracting companies</option>
											 <option value="show-product.html">ElMohtaref for real estate investment</option>
											 <option value="show-product.html">ElMohtaref for educational institutions</option>
											 <option value="show-product.html">ElMohtaref for human resources</option>
											 <option value="show-product.html">ElMohtaref for production and factories</option>
											 <option value="show-product.html">ElMohtaref for manage transportation
												companies</option>
												<option value="show-product.html">ElMohtaref for charitable institutions and
												endowments</option>
												<option value="#">-- +</option>
												<option value="blogs.html">-- Articles </option>
												<option value="articles.html">All articles</option>
												<option value="show-article.html">article</option>
												<option value="show-article.html">article</option>
												<option value="show-article.html">article</option>
												<option value="show-article.html">article</option>
												<option value="show-article.html">article</option>
												<option value="#">-- +</option>
												<option value="#">-- Webinars </option>
												<option value="webinars.html">All webinars</option>
												<option value="show-webinar.html">webinar</option>
												<option value="show-webinar.html">webinar</option>
												<option value="show-webinar.html">webinar</option>
												<option value="show-webinar.html">webinar</option>
												<option value="show-webinar.html">webinar</option>
												<option value="#">-- +</option>
												<option value="#">-- Services</option>
												<option value="services.html">All services</option>
												<option value="show-service.html">Employee training</option>
												<option value="show-service.html">Fully operational</option>
												<option value="show-service.html">Technical support</option>
												<option value="show-service.html">Software tests</option>
												<option value="show-service.html">Consulting</option>
												<option value="#">-- +</option>
												<option value="#">-- Training </option>
												<option value="trainings.html">All trainings</option>
												<option value="show-training.html">training</option>
												<option value="show-training.html">training</option>
												<option value="show-training.html">training</option>
												<option value="show-training.html">training</option>
												<option value="show-training.html">training</option>
												<option value="#">-- +</option>
												<option value="index-ar.html">-- عربى</option>
											</select>
										</nav>
									</div></div>
						<!-- menu end -->
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--Start Product Details -->

	<section class="project-details-area pt-130 rpt-100 pb-60 rpb-30">
		<div class="container">
			<div class="project-details-content">
				<div class="section-title mb-25">
					<p>The Professional </p>
					<h2 style="text-transform: uppercase;" class="text-center">The Professional HR System</h2>
				</div>
				<p style="
				text-align: center;
				font-size: 20px;
				line-height: 36px;
				font-weight: 500;">What Happens When you Grow From 10 to 1000 Projects? Old Method Doesn’t Really Work As you
					Start to Grow & Need to Start Getting More Organized. You need to Know Exactly Where your
					Money are Going. The Professional ERP Construction System Gives you Complete Visibility to
					Track your Time and Costs.</p>
		
			</div>
		</div>
	</section>
	<!-- Project Details Area end -->
	<section class="services-area-six pb-100 rpb-70 rel z-1 why-choose-us">
		<div class="container">
			<h2 class="text-center mb-4" style="color:#ffb028 ; font-size: 30px; margin-bottom: 56px !important; "  >Why Choose Us</h2>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="service-item-six wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="icon">
							<img src="{{asset('public/front/assets/images/icons/control.png')}}" >
						</div>
						<h4><a href="service-details.html">Sentralized Control</a></h4>
						<p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="service-item-six wow fadeInUp delay-0-4s animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="icon">
							<img src="{{asset('public/front/assets/images/icons/language.png')}}" >
						</div>
						<h4><a href="service-details.html">MULTI LANGUAGES </a></h4>
						<p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="service-item-six wow fadeInUp delay-0-6s animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="icon">
							<i class="flaticon-mission-1"></i>
							<img src="{{asset('public/front/assets/images/icons/Evaluations.png')}}" >
						</div>
						<h4><a href="service-details.html">Payroll Structures </a></h4>
						<p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="service-item-six wow fadeInUp delay-0-6s animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="icon">
							<img src="{{asset('public/front/assets/images/icons/alerts.png')}}" >
						</div>
						<h4><a href="service-details.html">REMINDERS AND ALERTS  </a></h4>
						<p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="service-item-six wow fadeInUp delay-0-6s animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="icon">
							<img src="{{asset('public/front/assets/images/icons/attendance.png')}}" >
						</div>
						<h4><a href="service-details.html">Attendance Management </a></h4>
						<p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
					</div>
				</div>
	
				 
				<div class="col-lg-3 col-md-6">
					<div class="service-item-six wow fadeInUp delay-0-6s animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="icon">
							<img src="{{asset('public/front/assets/images/icons/Evaluations.png')}}" >
						</div>
						<h4><a href="service-details.html">Evaluations</a></h4>
						<p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
					</div>
				</div>

								 
				<div class="col-lg-3 col-md-6">
					<div class="service-item-six wow fadeInUp delay-0-6s animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="icon">
							<img src="{{asset('public/front/assets/images/icons/time-out.png')}}" >
						</div>
						<h4><a href="service-details.html">Leave /Time off Management </a></h4>
						<p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="service-item-six wow fadeInUp delay-0-6s animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="icon">
							<img src="{{asset('public/front/assets/images/icons/document.png')}}" >
						</div>
						<h4><a href="service-details.html">Document Manager </a></h4>
						<p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
					</div>
				</div>
				


			</div>
		</div>
	</section>
	<hr>
	<!-- Next Prev Project start -->
  <!-- What We Provide Area Start -->
  <section class="what-we-provide overflow-hidden py-50 rpy-50 rel z-1">
	<div class="container">
		<div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
			<span class="sub-title mb-10">What We Provides</span>
			<h2>Digital Core Services</h2>
		</div>
		<div class="service-three-slider">
			<div class="service-item-three wow fadeInUp delay-0-2s">
				<div class="card mb-5">
					<div class="card-body">
						<h3>  TO DO LIST  </h3>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h3>  Day laborers  </h3>
					</div>
				</div>

			</div>
			<div class="service-item-three active wow fadeInUp delay-0-4s">
				<div class="card mb-5">
					<div class="card-body">
						<h3>  Custody  </h3>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h3>  Security System  </h3>
					</div>
				</div>
			</div>
			<div class="service-item-three wow fadeInUp delay-0-6s">
				<div class="card mb-5">
					<div class="card-body">
						<h3>  Air Tickets  </h3>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h3>  End of Service  </h3>
					</div>
				</div>
			</div>
			<div class="service-item-three wow fadeInUp delay-0-2s">
				<div class="card mb-5">
					<div class="card-body">
						<h3>   Archive  </h3>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h3>  Pension </h3>
					</div>
				</div>
			</div>
			<div class="service-item-three active">
				<div class="card mb-5">
					<div class="card-body">
						<h3>  SMS, E-MAIL  </h3>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h3>   Online Chat  </h3>
					</div>
				</div>
			</div>
			<div class="service-item-three">
				<div class="card mb-5">
					<div class="card-body">
						<h3>  Auto Backup 24/7  </h3>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h3>   Leaves and Absence   </h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- What We Provide Area End -->

    <!--End  Product Deta -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Naba Soft was established in 2000 as a specialist in all fields of computer technologies. It
							provides technical support, research, information, hardware, systematic and network support
							to all governmental and private sector companies and establishments. We have developed the
							experience that we acquired throughout many years</p>
					</div>
				</div>
				<div class="col-lg-8 col-md-12">
					<div class="footer-box pages get-in-touch">
						<h2 class="widget-title">Contact Us</h2>
						<ul>
							<ul class="row">
								<li class="col-lg-4 col-sm-12">
									<h6>Dubai Office</h6>
									<div>
										<a href="tel:971552243426">+971-552243426</a>
										<i class="fas fa-phone-volume m-1"></i>
										<a href="https://wa.me/971552243426" target="_blank"><i
												class="fab fa-whatsapp m-1"></i></a>
									</div>
								</li>
								<li class="col-lg-4 col-sm-12">
									<h6>Riyadh Office</h6>
									<div>
										<a href="tel:966570005134">+966-570005134</a>
										<i class="fas fa-phone-volume m-1"></i>
										<a href="https://wa.me/966570005134" target="_blank"><i
												class="fab fa-whatsapp m-1"></i></a>
									</div>
								</li>
								<li class="col-lg-4 col-sm-12">
									<h6>R.A.K Office</h6>
									<div>
										<a href="tel:971589618351">+971-589618351</a>
										<i class="fas fa-phone-volume m-1"></i>
										<a href="https://wa.me/971589618351" target="_blank"><i
												class="fab fa-whatsapp m-1"></i></a>
									</div>
								</li>
								<li class="col-lg-4 col-sm-12">
									<h6>Muscat Office</h6>
									<div>
										<a href="tel:96891113014">+968-91113014</a>
										<i class="fas fa-phone-volume m-1"></i>
										<a href="https://wa.me/96891113014" target="_blank"><i
												class="fab fa-whatsapp m-1"></i></a>
									</div>
								</li>
								<li class="col-lg-4 col-sm-12">
									<h6>Cairo Office</h6>
									<div>
										<a href="tel:201020111351">+20-1020111351</a>
										<i class="fas fa-phone-volume m-1"></i>
										<a href="https://wa.me/01020111351" target="_blank"><i
												class="fab fa-whatsapp m-1"></i></a>
									</div>
								</li>
							</ul>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-md-12">
					<p>Copyrights &copy; 2023 -Naba All Rights
						Reserved.</p>
				</div>
				<div class="col-xl-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://www.facebook.com/nabasoft" target="_blank"><i
										class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/NABASOFT" target="_blank"><i
										class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/company/naba-software" target="_blank"><i
										class="fab fa-linkedin"></i></a></li>
							<li><a href="https://www.youtube.com/@nabasoftware" target="_blank"><i
										class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		 
	<!-- end copyright -->

    <script src="{{asset('public/front/assets/js/jquery-3.7.0.js')}}" ></script>
	<script src="{{asset('public/front/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('public/front/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/front/assets/js/jquery.countdown.js')}}"></script>
	<script src="{{asset('public/front/assets/js/slick.min.js')}}"></script>
	<script src="{{asset('public/front/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('public/front/assets/js/jquery.meanmenu.min.js')}}"></script>
	<script src="{{asset('public/front/assets/js/sticker.js')}}"></script>
	<script src="{{asset('public/front/assets/js/script.js')}}"></script>
</body>

</html>