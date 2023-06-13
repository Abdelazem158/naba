@extends('layouts.front.home')

<!-- title page -->
@section('title')
<title>Naba soft company</title>
@endsection
<!-- custom page -->
@section('css')
@endsection
@section('content')

<div id="rev_slider_1_1_index2_wrapper " class="rev_slider_wrapper fullwidthbanner-container" style="top: 90px;" > 
	<div id="rev_slider_1_1_index2" class="rev_slider fullwidthabanner">
        <ul>
            <li data-transition="random" data-slotamount="7" data-masterspeed="500">
                <img src="{{asset('public/front/assets/images/slider/f5f5f5.jpg')}}" alt="f5f5f5" data-fullwidthcentering="true">
                <div class="tp-caption lfr" data-x="288" data-y="104" data-speed="1500" data-start="200" data-easing="easeInOutElastic"><img src="{{asset('public/front/assets/images/slider/slide1-1.png')}}" alt="Image 3"></div>
                <div class="tp-caption lfb" data-x="-27" data-y="4" data-speed="1500" data-start="800" data-easing="easeInOutElastic"><img src="{{asset('public/front/assets/images/slider/slide1-2.png')}}" alt="Image 4"></div>
                <div class="tp-caption lfl" data-x="-25" data-y="0" data-speed="1500" data-start="1200" data-easing="easeInOutElastic"><img src="{{asset('public/front/assets/images/slider/slide1-3.png')}}" alt="Image 5"></div>
                <div class="tp-caption lft" data-x="620" data-y="86" data-speed="1500" data-start="1800" data-easing="easeInOutElastic">
                    <img src="{{asset('public/front/assets/images/slider/slide1-4.png')}}" alt="Image 6">
                </div>
            </li>
            <li data-transition="random" data-slotamount="7" data-masterspeed="300">
                <img src="{{asset('public/front/assets/images/slider/f5f5f5.jpg')}}" alt="f5f5f5" data-fullwidthcentering="true">
                <div class="tp-caption fade" data-x="left" data-hoffset="-140" data-y="11" data-speed="300" data-start="500" data-easing="easeOutExpo"><img src="{{asset('public/front/assets/images/slider/hand-black2.png')}}" alt="Image 1"></div>
                <div class="tp-caption fade" data-x="left" data-hoffset="55" data-y="61" data-speed="300" data-start="800" data-easing="easeOutExpo">
                    <iframe width="422" height="316" src="https://www.youtube.com/embed/zsww_3YUfZo" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="tp-caption very_big_black fade" data-x="right" data-y="24" data-speed="300" data-start="1100" data-easing="easeOutExpo">View Video oF Our Products     </div>
                <div class="tp-caption big_white fade" data-x="right" data-y="96" data-speed="300" data-start="1400" data-easing="easeOutExpo">   Now More About our Products  </div>
                <div class="tp-caption noshadow fade" data-x="right" data-y="170" data-speed="300" data-start="1700" data-easing="easeOutExpo"> What we do Provide high-quality, easy-to-use software <br>
                    What we do Provide high-quality, easy-to-use software
                </div>
                <div class="tp-caption fade" data-x="right" data-y="256" data-speed="300" data-start="2000" data-easing="easeOutExpo"><img src="{{asset('public/front/assets/images/slider/th.png')}}" alt="Image 9"></div>
            </li>
        <li data-transition="random" data-slotamount="7" data-masterspeed="300">
        <img src="{{asset('public/front/assets/images/slider/f5f5f5.jpg')}}" alt="f5f5f5" data-fullwidthcentering="true">
        <div class="tp-caption lfl" data-x="left" data-hoffset="-40" data-y="36" data-speed="2000" data-start="500" data-easing="easeInOutElastic"><img src="{{asset('public/front/assets/images/slider/Ibm-slide.png')}}" alt="Image 1">
        </div>
        <div class="tp-caption very_big_black fade" data-x="right" data-y="46" data-speed="300" data-start="1100" data-easing="easeOutExpo"><span style='color:#2386c8'>Naba  </span>Software
        </div>
        <div class="tp-caption big_white fade" data-x="right" data-y="117" data-speed="300" data-start="1400" data-easing="easeOutExpo">  What we do Provide high-quality, easy-to-use software    
        </div>
        <div class="tp-caption noshadow fade" data-x="right" data-y="189" data-speed="300" data-start="1700" data-easing="easeOutExpo">What we do Provide high-quality, easy-to-use software 

        </div>
        <div class="tp-caption fade" data-x="right" data-y="350" data-speed="300" data-start="2300" data-easing="easeOutExpo"><a style='color:#ffffff;' href='/application/' class='btn btn-info btn-large boxed-btn '>Our Products </a>
        </div>
        <div class="tp-caption black fade" data-x="right" data-y="231" data-speed="300" data-start="2000" data-easing="easeOutExpo">Web Design  <br>
        - Apllications  ERP<br>
        -  Web Applications <br>
        -  Accounting Systems 
        </div>
        </li>

        <li data-transition="random" data-slotamount="7" data-masterspeed="300">
                    <img src="{{asset('public/front/assets/images/slider/f5f5f5.jpg')}}" alt="f5f5f5" data-fullwidthcentering="true">
                    <div class="tp-caption lfl" data-x="left" data-y="36" data-speed="2000" data-start="500" data-easing="easeInOutElastic"><img src="{{asset('public/front/assets/images/slider/ipad1.png')}}" alt="Image 1">
                    </div>
                    <div class="tp-caption lfl" data-x="left" data-hoffset="190" data-y="135" data-speed="2000" data-start="800" data-easing="easeInOutElastic"><img src="{{asset('public/front/assets/images/slider/ipad21.png')}}" alt="Image 2">
                    </div>
                    <div class="tp-caption very_big_black fade" data-x="right" data-y="46" data-speed="300" data-start="1100" data-easing="easeOutExpo"><span style='color:#2386c8'>Naba </span>Software
                    </div>
                    <div class="tp-caption big_white fade" data-x="right" data-y="117" data-speed="300" data-start="1400" data-easing="easeOutExpo">Development
                    </div>
                    <div class="tp-caption noshadow fade" data-x="right" data-y="189" data-speed="300" data-start="1700" data-easing="easeOutExpo"
                    >  What we do Provide high-quality, easy-to-use software         
                    
                    <br>
                    What we do Provide high-quality, easy-to-use software   				</div>
                    <div class="tp-caption fade" data-x="right" data-y="378" data-speed="300" data-start="2300" data-easing="easeOutExpo"><a style='color:#ffffff;' href='/%D8%A7%D8%AA%D8%B5%D9%84-%D8%A8%D9%86%D8%A7/' class='btn btn-info btn-large'>اتصل بنا الأن</a>
                    </div>
                    <div class="tp-caption black fade" data-x="right" data-y="259" data-speed="300" data-start="2000" data-easing="easeOutExpo">Web Design -   <br>
                        - Apllications  ERP<br>
                        -  Web Applications <br>
                        -  Accounting Systems 
                    </div>
        </li>
        <li data-transition="random" data-slotamount="7" data-masterspeed="300">
        <img src="{{asset('public/front/assets/images/slider/f5f5f5.jpg')}}" alt="f5f5f5" data-fullwidthcentering="true">
        <div class="tp-caption lfl" data-x="left" data-y="36" data-speed="2000" data-start="500" data-easing="easeInOutElastic"><img src="{{asset('public/front/assets/images/slider/ipad3.png')}}" alt="Image 1">
        </div>
        <div class="tp-caption very_big_black fade" data-x="right" data-y="46" data-speed="300" data-start="1100" data-easing="easeOutExpo"><span style='color:#2386c8'> Software Development </span>Company
        </div>
        <div class="tp-caption big_white fade" data-x="right" data-y="117" data-speed="300" data-start="1400" data-easing="easeOutExpo"> What we do Provide high-quality, easy-to-use software  
        </div>
        <div class="tp-caption noshadow fade" data-x="right" data-y="189" data-speed="300" data-start="1700" data-easing="easeOutExpo">What we do Provide high-quality, easy-to-use software  <br>

        </div>
        <div class="tp-caption fade" data-x="right" data-y="378" data-speed="300" data-start="2300" data-easing="easeOutExpo"><a style='color:#ffffff;' href='/%D8%A7%D8%AA%D8%B5%D9%84-%D8%A8%D9%86%D8%A7/' class='btn btn-info btn-large boxed-btn '>Contatc Us  </a>
        </div>
        <div class="tp-caption black fade" data-x="right" data-y="259" data-speed="300" data-start="2000" data-easing="easeOutExpo">-   Web Design <br>
            - Apllications  ERP<br>
                        -  Web Applications <br>
                        -  Accounting Systems 
        </div>
        </li>

        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
        </div>
	</div>
<!-- end home page slider -->
@include('flash::message')
<!-- features list section -->
<div class="list-section pt-80 pb-80">
    <div class="container">
        <div class="row">
            @isset($about_section)
            @foreach($about_section as $about)
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box m-4 d-flex align-items-center">
                        <!-- <i class="fas fa-binoculars"></i> -->
                        <img src="{{asset($about->image)}}" width="65" alt="">
                    </div>
                    <div class="content m-3">
                        <h3>{{$about->title}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>

    </div>
</div>
<!-- end features list section -->

	<!--Start news-->
    <div class="latest-news py-5 pb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
                        <h3 style="margin-top: 100px;">{{__('home.Our ')}}<span class="brand-text">{{__('home.Products')}}</span></h3>
                        <p>{{__('home.Sub Product Title')}}</p>
					</div>
				</div>
			</div>
	
			<div class="row">

                @isset($products)
                @foreach($products as $product)
                    <div class="col-xxl-4 col-xl-4 xol-lg-4 col-md-4 col-sm-6 col-12">

                        <div class="single-latest-news  hvr-fade hvr-float-shadow shadow rounded p-2">
                            <a href="{{route('front/product', $product->id)}}"><div class="latest-news-bg news-bg-1"></div></a>
                            <div class="news-text-box text-center rounded">
                                <h3><a href="{{route('front/product', $product->id)}}"> {{$product->title}} </a></h3>
                                <img class="rounded shadow" src="{{asset('public/'.$product->image)}}" alt="Italian Trulli">
                                <a href="{{route('front/product', $product->id)}}" class="boxed-btn mt-3">{{__('home.Show more')}} <i class="fas fa-angle-right"></i></a>
                            </div>

                        </div>

                    </div>
                
                @endforeach
                @endisset

			</div>
	 
		</div>
	</div>


   	
	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Features</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
				  <div class="carousel-item active">
		
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex align-items-center">
								<div class="list-icon">
									<i class="fas fa-binoculars"></i>
								</div>
								<div class="content">
									<h3>integrated vision</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex align-items-center">
								<div class="list-icon">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="content">
									<h3>24/7 Support</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-sync"></i>
								</div>
								<div class="content">
									<h3>use the latest technology</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box  shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-headset"></i>
								</div>
								<div class="content">
									<h3>Technical support team </h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="content">
									<h3>Quick response</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2  m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-building"></i>
								</div>
								<div class="content">
									<h3>Our branches are the closest to you</h3>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="carousel-item">

					<div class="row">
						<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex align-items-center">
								<div class="list-icon">
									<i class="fas fa-binoculars"></i>
								</div>
								<div class="content">
									<h3>integrated vision</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex align-items-center">
								<div class="list-icon">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="content">
									<h3>24/7 Support</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-sync"></i>
								</div>
								<div class="content">
									<h3>use the latest technology</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box  shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-headset"></i>
								</div>
								<div class="content">
									<h3>Technical support team </h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="content">
									<h3>Quick response</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2  m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-building"></i>
								</div>
								<div class="content">
									<h3>Our branches are the closest to you</h3>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="carousel-item">
					<div class="row">

					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex align-items-center">
								<div class="list-icon">
									<i class="fas fa-binoculars"></i>
								</div>
								<div class="content">
									<h3>integrated vision</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex align-items-center">
								<div class="list-icon">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="content">
									<h3>24/7 Support</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-sync"></i>
								</div>
								<div class="content">
									<h3>use the latest technology</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box  shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-headset"></i>
								</div>
								<div class="content">
									<h3>Technical support team </h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2 m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-phone-volume"></i>
								</div>
								<div class="content">
									<h3>Quick response</h3>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="hvr-fade hvr-float-shadow list-box shadow rounded p-2  m-4 d-flex justify-content-start align-items-center">
								<div class="list-icon">
									<i class="fas fa-building"></i>
								</div>
								<div class="content">
									<h3>Our branches are the closest to you</h3>
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>
				
			  </div>



		

		</div>
	</div>
	<!-- end features list section -->
<!--training section-->
<section class="shop-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-12">
		<h3>We implement IT career training solutions for the organization's
			<br> with big <span class="orange-text">advancing their professional goals and maximize their potential</span></h3>
		<div class="sale-percent"><span> </span> </div>
		<a href="{{route('front/services')}}" class="cart-btn btn-lg">Our Services</a>
	</div>
	<div class="col-md-6 col-12">
		<img class="shadow rounded" src="{{asset('public/front/assets/img/training.jpg')}}" alt="Italian Trulli">
	</div>
	</div>
	</div>
</section>



 
    

<!-- product section -->
	<div class="product-section mt-50 mb-50 pt-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">{{__('home.Our ')}} </span> {{__('home.webinars')}} </h3>
						<p>{{__('home.Sub Product Title')}}</p>
					</div>
				</div>
			</div>


			<div class="row">

			   @isset($webinars)
               @foreach($webinars as $webinar)
					<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item  hvr-float-shadow shadow-sm rounded bg-light " >
							<div class="product-image img-hover-zoom">
								<img class="mb-0" src="{{asset('public/' . $webinar->image)}}" alt="construction">
							</div>
					
							<div class="d-flex justify-content-between p-3 py-0 bg-light ">
											<div class="date"><i class="fas fa-calendar"></i>  {{$webinar->date}}</div>
											<div class="date"><i class="far fa-clock"></i>{{$webinar->time_started}}</div>
											<div class="date"><i class="fas fa-stopwatch"></i> {{$webinar->hours}}</div>
							</div>
									
		
							<?php
								if((int)$webinar->cost > 0){ $cost = '	<span class="badge badge-warning position-absolute">Webinar $ '. $webinar->cost .'</span>'; }
								else{ $cost = '<span class="badge badge-success position-absolute">Free</span>'; }
							?>
                            {!! $cost !!}
				
							<h3>{{$webinar->title}}</h3>
							<p class="product-price"><span> {{$webinar->description}} </span>
									 </p>
							<a href="{{url(route('front/webinar', $webinar->id)) }}" class="cart-btn">{{__('webinars.Join now')}}</a>
						</div>
					</div>
					@endforeach
                   @endisset

			</div>
		</div>
	</div>
	<!-- end product section -->

   <!-- advertisement section -->
	<div class="abt-section pt-5">
		<div class="container">

		@isset($setting)
			<div class="row">
				<div class="col-xl-6 col-md-12">
					<div class="embed-responsive embed-responsive-16by9 shadow rounded">
						<iframe class="embed-responsive-item" src="{{$setting->video_link}}" allowfullscreen></iframe>
					  </div>

					<!--<a href="https://www.youtube.com/watch?v=EuPDCOxuXjA" class="video-play-btn popup-youtube"><i
								class="fas fa-play"></i></a>-->
					 
				</div>
				<div class="col-xl-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">{{__('home.Since Year')}} 2000</p>
						<h2>{{__('home.We are')}} <span class="orange-text">{{$setting->title}}</span></h2>
						<p>{{$setting->second_title}}</p>
					</div>
				</div>
			</div>
		@endisset
		</div>
	</div>




<!-- contact form -->
<?php
    $contact_page_name = "Home Page";
?>
<div class="contact-from-section mt-5 mb-5" id="join">
    <div class="container">
        <div class="row">
		    <div class="col-lg-8 offset-lg-2 text-center">
			    <div class="section-title">	
                    <h2> <span class="orange-text"> {{__('contact-us.contact_us')}} </span> </h2>
                    <p>{{__('contact-us.You can join out community and we will contact you')}}</p>
                </div>
			</div>
		</div>
		<div class="row">
				<div class="col-lg-12 mb-5 mb-lg-0">
                <div id="form_status"> </div>
                <div class="contact-form" style="padding: 30px">
                    <form role="form" action="{{url(route('front/contact-us'))}}" method="post"  id="fruitkha-contact">
                        @csrf

						<div class="row">
                            @isset($contact_item_id)
                            <input type="hidden" name="item_id" value="{{$contact_item_id}}">
                            @endisset
                            @isset($contact_section_no)
                            <input type="hidden" name="section_no" value="{{$contact_section_no}}">
                            @endisset
                            @isset($contact_page_name)
                            <input type="hidden" name="page_name" value="{{$contact_page_name}}">
                            @endisset

							<div class="col-md-4 col-sm-12 col-12">
									<label class="text-dark">{{__('contact-us.Name')}}</label>
									<input type="text" class="form-control form-control-lg" placeholder="{{__('contact-us.Name')}}" name="name" id="name" required>
									@error('name')
									<span class="text-danger">{{$message}}</span>
									@enderror
							</div>

                            <div class="col-md-4 col-sm-12 col-12">
									<label class="text-dark">{{__('contact-us.Company name')}}</label>
									
									<input class="form-control form-control-lg" type="text" placeholder="{{__('contact-us.Company name')}}" name="company_name"
										id="company_name" required>
									@error('company_name')
									<span class="text-danger">{{$message}}</span>
									@enderror

							</div>

							<div class="col-md-4 col-sm-12 col-12">
						    	<label class="text-dark">{{__('contact-us.Email')}}</label>
								<input class="form-control form-control-lg" type="email" placeholder="{{__('contact-us.Email')}}" name="email" id="email"
									required>
								@error('email')
								<span class="text-danger">{{$message}}</span>
								@enderror
                           </div>
						   <div class="col-md-6 col-sm-12 col-12">
						       <label class="text-dark">Country</label>
                            <select class="form-control form-control-lg" name="country" id="" required>
                                <option disabled selected hidden style="color:#DDD">
                                    {{__('contact-us.Select your country')}}</option>
                                <option value="Saudi Arabia">{{__('contact-us.Saudi Arabia')}}</option>
                                <option value="Egypt">{{__('contact-us.Egypt')}}</option>
                                <option value="Jordan">{{__('contact-us.Jordan')}}</option>
                                <option value="Oman">{{__('contact-us.Oman')}}</option>
                                <option value="UAE">{{__('contact-us.UAE')}}</option>
                                <option value="Libya">{{__('contact-us.Libya')}}</option>
                                <option value="Bahrain">{{__('contact-us.Bahrain')}}</option>
                                <option value="Tunisia">{{__('contact-us.Tunisia')}}</option>
                                <option value="Morocco">{{__('contact-us.Morocco')}}</option>
                                <option value="Kuwait">{{__('contact-us.Kuwait')}}</option>
                                <option value="Qatar">{{__('contact-us.Qatar')}}</option>
                                <option value="Algeria">{{__('contact-us.Algeria')}}</option>
                                <option value="Somalia">{{__('contact-us.Somalia')}}</option>
                                <option value="Iraq">{{__('contact-us.Iraq')}}</option>
                                <option value="Syrian">{{__('contact-us.Syrian')}}</option>
                                <option value="Palestine">{{__('contact-us.Palestine')}}</option>
                                <option value="Lebanon">{{__('contact-us.Lebanon')}}</option>
                                <option value="Other - Record the international phone number">
                                    {{__('contact-us.Other - Record the international phone number')}}</option>
                            </select>
                            @error('country')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        
							</div>
                            <div class="col-md-6 col-sm-12 col-12">
								<label class="text-dark">Phone</label>
								<input class="form-control form-control-lg" type="tel" placeholder="{{__('contact-us.Mobile number')}}" name="phone" id="phone"
									required>
								@error('phone')
								<span class="text-danger">{{$message}}</span>
								@enderror
                           </div>


                       	<div class="col-md-12 col-sm-12 col-12">
						   <label class="text-dark">Message</label>
                            <textarea class="form-control" name="notes" id="" cols="30" rows="10"
                                placeholder="{{__('contact-us.Enter your message')}}"></textarea>
                            @error('notes')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="m-3 d-flex justify-content-start">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                        
					</div>
						<div class="m-3">
								<button type="submit" class="theme-btn style-two mt-15 mb-30" value="{{__('contact-us.Submit')}}">Send Message</button>
						 </div>
					
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end contact form -->

@endsection
<!-- custom js -->
@section('script')
<script>
$('#home_active').addClass('current-list-item');
</script>
@endsection
