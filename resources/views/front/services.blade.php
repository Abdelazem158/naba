@extends('layouts.front.home')

<!-- title page -->
@section('title')
<title>Naba soft company</title>
@endsection
<!-- custom page -->
@section('paginate')

<link rel="stylesheet" href="{{asset('public/front/assets/css/hover-min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/normalize.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/services.css')}}">


@endsection
@section('content')

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
    <!--Start Services-->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLongTitle">Employee Training </h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing
				 elit, sed do eiusmod tempor incididunt ut labore et
				  dolore magna aliqua. Ut enim ad minim veniam, quis 
				  nostrud exercitation ullamco laboris nisi ut aliquip
				   ex ea commodo consequat. Duis aute irure dolor  </p>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal" style="    color: #fff;
			  background-color: #FFC107;
			  border-color: #6c757d;
			  border: 0;
			  border-radius: 0;
			  border-radius: 51px;
			  padding: 10px;">Close</button>
			</div>
		  </div>
		</div>
	  </div>


    <section class="services-area-three overflow-hidden pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row gap-100 align-items-center">
                <div class="col-xl-5">
                    <div class="services-content-three mb-30 rmb-65 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-30">
                            <span class="sub-title mb-15">Amazing Services</span>
                            <h2>We Provide Best IT Services to Growth you Business</h2>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium totam rem aperiame aque ipsa quae abillo inventore veritatis etuas</p>
                        <ul class="list-style-one pt-5">
                            <li>Comprehensive UI/UX Assessment</li>
                            <li>Deep Contextual Research and 360° Planning</li>
                            <li>Wireframing & Prototyping</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="row">

					@foreach($services as $service)
                        <div class="col-sm-6">
                            <div class="feature-item style-two wow fadeInUp delay-0-2s">
                                <div class="icon"><img src="{{asset('public/'.$service->image)}}"></div>
                                <a href="service-details.html"><h4>{{$service->title}}</h4></a>
                                <p>{{$service->description}}</p>
                                <button class="more-btn" data-toggle="modal" data-target="#exampleModalCenter" ><i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="servcies-bg-shape">
            <img src="assets/images/shapes/services-bg-shape.png" alt="Shape">
        </div>
    </section>
    <!-- Services Area Three end -->
    
    
    <!-- Statistics Area start -->
    <section class="statistics-area-four text-white bgs-cover pt-80 pb-20" style="background-image: url(assets/images/background/statistics-three.jpg);">
        <div class="container">
            <div class="row align-items-xl-start align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="statistics-content mb-55 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-30">
                            <span class="sub-title mb-15">Company Statistics</span>
                            <h2>Learn About Our Comapny Statistics</h2>
                        </div>
                        <a href="about.html" class="read-more">Learn More <i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="row">
                        <div class="col-xl-4 col-6 text-center">
                            <div class="counter-item counter-text-wrap wow fadeInDown delay-0-3s">
                                <i class="fas fa-bullseye"></i>
                                <span class="count-text plus" data-speed="3000" data-stop="2563">0</span>
                                <span class="counter-title">Project Complate</span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-6 text-center">
                            <div class="counter-item counter-text-wrap wow fadeInUp delay-0-3s">
                                <i class="fas fa-users"></i>
                                <span class="count-text percent" data-speed="3000" data-stop="98.9">0</span>
                                <span class="counter-title">Clinets Happy</span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-6 text-center">
                            <div class="counter-item counter-text-wrap wow fadeInDown delay-0-3s">
                                <i class="fas fa-certificate"></i>
                                <span class="count-text plus" data-speed="3000" data-stop="35.6">0</span>
                                <span class="counter-title">Years Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Statistics Area end -->

    <!-- Work Process Area start -->
        <section class="work-process-area pt-130 pb-100 rpt-100 rpb-70 rel z-1">
            <div class="section-title text-center mb-70 wow fadeInUp delay-0-2s">
                <span class="sub-title mb-15">Working Process</span>
                <h2>Industry Best Practices to the Core</h2>
            </div>
            <div class="work-process-line text-center">
                <img src="assets/images/shapes/work-process-line.png" alt="line">
            </div>
            <div class="container">
                <div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col">
                        <div class="work-process-item mt-40 wow fadeInUp delay-0-2s">
                            <div class="number">01</div>
                            <div class="content">
                                <h4>Discover</h4>
                                <p>We emphasize planning get everythin documente nothing assumption</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work-process-item mt-10 wow fadeInDown delay-0-2s">
                            <div class="number">02</div>
                            <div class="content">
                                <h4>Planning</h4>
                                <p>Our design approach is to simplify. We embrace  creating something.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work-process-item mt-40 wow fadeInUp delay-0-2s">
                            <div class="number">03</div>
                            <div class="content">
                                <h4>Design & Dev</h4>
                                <p>At this step, we cater to requirement backed web services developmenc</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work-process-item wow fadeInDown delay-0-2s">
                            <div class="number">04</div>
                            <div class="content">
                                <h4>Testing</h4>
                                <p>On the other denounce with righteou indignation dislike beguile demore</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="work-process-item mt-50 wow fadeInUp delay-0-2s">
                            <div class="number">05</div>
                            <div class="content">
                                <h4>Project Deliver</h4>
                                <p>We denounce righteous indignation and dislike men who beguiled</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Work Process Area end -->

 <!-- contact form -->
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