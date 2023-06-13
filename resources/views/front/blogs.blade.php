@extends('layouts.front.home')

<!-- title page -->
@section('title')
<title>Naba soft company</title>
@endsection
<!-- custom page -->
@section('about1')
<link rel="stylesheet" href="{{asset('public/front/assets/css/scss/main.min.css')}}">
@endsection

@section('about2')
<link rel="stylesheet" href="{{asset('public/front/assets/css/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/normalize.css')}}">
<link rel="stylesheet" href="{{asset('public/front/assets/css/blogs.css')}}">
@endsection
@section('paginate')

<style>
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination li {
        display: inline-block;
        margin: 0 5px;
    }

    .pagination li a {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
        background-color: #f2f2f2;
        color: #333;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .pagination li.active a {
        background-color: #333;
        color: #fff;
    }

    .pagination li.disabled a {
        pointer-events: none;
        opacity: 0.5;
    }

    .pagination li:first-child a {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .pagination li:last-child a {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .pagination li a:hover {
        background-color: #333;
        color: #fff;
    }
</style>

@endsection
@section('content')

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell" >
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--Start Blogs  -->


	 
        <!-- Blog Standard Area start -->
        <section class="blog-standard-area">
            <div class="container">
				<div class="row mb-5">
					<div class="col-md-4">
						<div class="widget widget-search wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp; margin-bottom: 24px;" >
							<h4 class="widget-title">Search</h4>
							<form action="#" class="default-search-form">
								<input type="text" placeholder="Find Keywords" required="">
								<button type="submit" class="searchbutton far fa-search"></button>
							</form>
						</div>
					</div>
				</div>
		
                <div class="row gap-60">
                    <div class="col-lg-12">

					    @foreach($articles as $article)

                            <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="{{asset('public/'.$article->image)}}" alt="Blog" style="width:300px;height:300px;">
                                </div>
                                <div class="content">
                                    <h4><a href="{{route('front/article', $article->id)}}">{{$article->title}}</a></h4>
                                    <p>{{$article->description}}</p>
                                    <hr>
                                    <a href="{{route('front/article', $article->id)}}" class="read-more btn btn-warning">Read More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
							<hr>
						@endforeach	
							
					

                        </div>
                    </div>
                          
					         
					
                </div>
            </div>
        </section>
        <!-- Blog Standard Area end -->
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
