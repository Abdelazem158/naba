@extends('layouts.front.home')

<!-- title page -->
@section('title')
<title>Naba soft company - Products</title>
@endsection
<!-- custom page -->
@section('paginate')

<link rel="stylesheet" href="{{asset('public/front/assets/css/hover-min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/normalize.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/blogs.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/webiners.css')}}">

@endsection

@section('content')


@isset($training)

<!-- single article section -->

<section class="blog-details-area  rpy-100">
        <div class="container">
            <div class="row gap-60">
                <div class="col-lg-8">
                    <div class="blog-details-content wow fadeInUp delay-0-2s">
                        <div class="image mb-40">
                            <img src="{{asset('public/'.$training->image)}}" alt="Blog Single">
                        </div>
                        <div class="blog-meta-two pb-15">
                            <a class="date" href="#"><i class="far fa-calendar-alt"></i> {{$training->date_from}} TO
                                    {{$training->date_to}}</a>

                            <a class="date" href="#"><i class="far fa-calendar-alt"></i>{{$training->time_started}}</a>

                            <a class="date" href="#"><i class="far fa-clock"></i> {{$training->days}} </a>


                        </div>
                        <div class="title mb-20">
                            <h3>{{$training->name}}</h3>
                        </div>
                        <p>{{$training->description}}</p>
                      
           </div>
      </div>
    </section>


@endisset

@include('flash::message')

<!-- contact form -->
<?php
        $contact_item_id = $training->id;
        $contact_section_no = "5";
        $contact_page_name = "Training";
    ?>


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
