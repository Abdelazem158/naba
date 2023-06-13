@extends('layouts.front.home')

<!-- title page -->
@section('title')
<title>About | Naba soft company</title>
@endsection
<!-- custom page -->     
@section('about1')
<link rel="stylesheet" href="{{asset('public/front/assets/css/scss/main.min.css')}}">
@endsection

@section('about2')
<link rel="stylesheet" href="{{asset('public/front/assets/css/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/normalize.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/about.css')}}">
@endsection
@section('content')


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
    <!--Start About Us -->
    <section class="about-area-five py-100 rpt-100 rpb-65 rel z-1">
        <div class="container">
            <div class="row align-items-center gap-100">
                <div class="col-xl-6">
                    <div class="about-five-images mt-55 rel z-1 wow fadeInRight delay-0-2s">
                        <img src="{{asset('public/front/assets/images/about/about-five1.jpg')}}" alt="About">
                        <img src="{{asset('public/front/assets/images/about/about-five2.jpg')}}" alt="About">
                        <div class="experience-years">
                            <span class="years">25</span>
                            <h4>Years Of ExperienceIT Solutions</h4>
                        </div>
                        <img class="abut-bg-shape" src="{{asset('public/front/assets/images/about/about-five-bg.png')}}" alt="Shape">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-content  rel z-1 wow fadeInLeft delay-0-2s">
                        <div class="section-title mb-30 rmb-30">
                            <span class="sub-title mb-15">About Company</span>
                            <h2>Company Profile</h2>
                        </div>
						<p class="sub-title mission">We always aim to achieve noticeable quality development for our
							customers by presenting special services and intelligent systems
							that understand the customer’s requirements, and undertake the
							administration’s present and future demands,  As a result of the
							experience we acquired and developed during the last years, we managed
							to comprehend all the evolution requirements for the commercial</p>
                        <div class="row gap-40">
                            <div class="col-md-6">
                                <div class="service-item style-three">
                                    <div class="icon">
                                        <i class="flaticon-trophy"></i>
                                    </div>
                                    <h4>Our Mission & Vision</h4>
                                    <p class="mission">
										NabaSoft  works to develop computer system through serious scientific research that aims to
										develop a high-level programming techniques in public and private sectors .
									</p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item style-three">
                                    <div class="icon">
                                        <i class="flaticon-pie-chart"></i>
                                    </div>
                                    <h4>
										Company activities
									</h4>
                                    <p class="mission">Basically the company secures integrated solutions according to the user’s necessities to fulfill all
										of the user’s present and future needs. Therefore our
										company provides many services to the companies </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area end -->
	<!--Strenth points -->
    <div class="strong_points mb-100">
		<div class="container">
			<div class="text-center">
				<span class="sub-title mb-15">Our Programes</span>
			</div>
			<h3 class="text-center mb-50"> Our <span class="orange-text">programs </span>   are characterized by the following points</h3>
			<div class="row">
				<div class="col-xl-4">
					<div class="image">
						<img  src="{{asset('public/front/assets/images/power.png')}}" />
					</div>
				</div>
				<div class="col-xl-4">
                <div class="card">
					<div class="card-body">
						<ul>
								  <li><i class="fa fa-angle-right"></i> Ease of use</li>
								  <li><i class="fa fa-angle-right"></i> Works in Arabic and English simultaneously</li>
								  <li><i class="fa fa-angle-right"></i> Possible add other languages</li>
								  <li><i class="fa fa-angle-right"></i> Full support for multiple companies </li>
								  <li><i class="fa fa-angle-right"></i> Budget balance for better planning</li>
								  <li><i class="fa fa-angle-right"></i> Support cost centers</li>
								  <li><i class="fa fa-angle-right"></i> Integration of all systems, which saves  time</li>
								  <li><i class="fa fa-angle-right"></i> No impact of data volume on performance </li>
								  <li><i class="fa fa-angle-right"></i> Possibility of entry screens amendment </li>
								  <li><i class="fa fa-angle-right"></i> Privacy on window, job and record levels</li>
								  <li><i class="fa fa-angle-right"></i> Multi-dimensional analysis</li>
								  <li><i class="fa fa-angle-right"></i> Detailed and overall reports with analytical graphics support</li>
						</ul>
					</div>
				</div>

				</div>
				<div class="col-xl-4">
					<div class="card">
						<div class="card-body">
							<ul>
								<li><i class="fa fa-angle-right"></i> Export reports to all Office programs </li>
								<li> <i class="fa fa-angle-right"></i>Immediate assistance and guidance system</li>
								<li> <i class="fa fa-angle-right"></i>Training  explained in Arabic / English</li>
								<li><i class="fa fa-angle-right"></i> Long-term after-sales services and maintenance contracts</li>
								<li><i class="fa fa-angle-right"></i> All systems are integrated with each other</li>
								<li><i class="fa fa-angle-right"></i> Link your data with the Internet</li>
								<li><i class="fa fa-angle-right"></i> Follow-up your company’s activity and control through Mobile phone</li>
								<li><i class="fa fa-angle-right"></i> Send alert messages and account statements to customers by fax, e-mail or Mobile phone automatically from within the system</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Strenth Points -->
<hr class="mb-50">
    

    <!-- Testimonials Area Two start -->
    <section class="testimonials-area-two pb-50 rpb-85 rel z-1">
        <div class="container">
			<div class="section-title mb-25 wow fadeInRight delay-0-2s text-center">
				<span class="sub-title mb-15">Technologies</span>
				<h2><span class="orange-text">Our </span> Technologies</h2>
			</div>
            <div class="row justify-content-between align-items-end mb-30">
                <div class="col-lg-8">

                </div>
                <div class="col-lg-4">

                </div>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-item wow fadeInUp delay-0-2s">

                    <div class="content">
                        <div class="testi-header">
                            <ul>
								<li> <i class="fa fa-angle-right"> </i> Microsoft VS .NET 2013</li>
								<li><i class="fa fa-angle-right"></i> Asp.net</li>
								<li><i class="fa fa-angle-right"> </i> c#</li>
								<li><i class="fa fa-angle-right"> </i> Java EE </li>
								<li><i class="fa fa-angle-right"> </i> PHP MVC</li>
							</ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item wow fadeInUp delay-0-4s">
                    <div class="content">
                        <div class="testi-header">
							<ul>
								<li> <i class="fa fa-angle-right"> </i> HTML5 & CSS3</li>
 								<li><i class="fa fa-angle-right"> </i> Microsoft SQL Server</li>
								<li><i class="fa fa-angle-right"> </i> MySQL</li>
							    <li><i class="fa fa-angle-right"> </i> Oracle</li>
								<li><i class="fa fa-angle-right"> </i> JavaScript (jQuery , Angular)</li>
								<li></li>
							</ul>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item wow fadeInUp delay-0-6s">
                    <div class="content">
                        <div class="testi-header">
                         <ul>
							 <li><i class="fa fa-angle-right"> </i> Mobile Apps(Android , IOS , Windows Phone)</li>
							 <li><i class="fa fa-angle-right"> </i> Seagate Crystal Reports </li>
							 <li> <i class="fa fa-angle-right"> </i> Seagate Crystal Info  </li>
							 <li> <i class="fa fa-angle-right"> </i> MS Project  </li>
							 <li> <i class="fa fa-angle-right"> </i> MS Office 365</li>
						 </ul>

                        </div>
                    </div>
                </div>

            </div>
			<div class="slider-arrow mb-25 text-lg-end">
				<button class="testi-prev"><i class="fa fa-angle-left"></i></button>
				<button class="testi-next"><i class="fa fa-angle-right"></i></button>
			</div>
        </div>
    </section>
    <!-- Testimonials Area Two end -->
	<hr class="mb-50">
	<!-- contact form -->
	<div class="contact-from-section mt-5 mb-5" id="join">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Be </span> Partner</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
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