	<!-- header -->
	<!-- header -->
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

	<div class="loader" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
		<img style="width: 230px;" src="{{asset('public/front/assets/img/naba-logo.gif')}}">
		<p class="mt-3">Loading...</p>
	</div>
    

