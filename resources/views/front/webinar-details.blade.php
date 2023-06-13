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


	@isset($webinar)

	<section class="blog-details-area rpy-100">
        <div class="container">
            <div class="row gap-60">
                <div class="col-lg-8">
                    <div class="blog-details-content wow fadeInUp delay-0-2s">
                        <div class="image mb-40">
                            <img src="{{asset('public/front/assets/img/products/estate_investment.jpeg')}}" alt="Blog Single">
                        </div>
                        <div class="blog-meta-two pb-15">
                            <a class="date" href="#"><i class="far fa-calendar-alt"></i>  {{$webinar->date}}</a>

                            <a class="date" href="#"><i class="far fa-calendar-alt"></i>  {{$webinar->time_started}} </a>

                            <a class="date" href="#"><i class="far fa-clock"></i> {{$webinar->hours}} </a>

                        </div>
                        <div class="title mb-20">
                            <h3>{{$webinar->title}}</h3>
                        </div>
                        <p>{{$webinar->description}}</p>
                       

              

           </div>
      </div>
    </section>


		
	@endisset

	@include('flash::message')

    <!-- contact form -->
    <?php
        $contact_item_id = $webinar->id;
        $contact_section_no = "3";
        $contact_page_name = "Webinar";
    ?>
    @include('front.comm.contact_us')
    <!-- end contact form -->

@endsection
<!-- custom js -->
@section('script')
<script>
	$('#webinars_active').addClass('current-list-item');
</script>
@isset($webinar)
<script>
	$('#webinar_active_<?php echo $webinar->id ?>').addClass('active');
</script>
@endisset
@endsection
