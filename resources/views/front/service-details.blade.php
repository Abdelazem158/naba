@extends('layouts.front.home')

<!-- title page -->
@section('title')
    <title>Naba soft company - Products</title>
@endsection
<!-- custom page -->
@section('css')

@endsection
@section('content')


	@isset($service)

	<div class="mt-150 mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="media my-5">
						<div class="row">
							<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
								<img src="{{asset($service->image)}}" width="400" class="mr-3"
									alt="Article image">
							</div>
							<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
								<div class="media-body">
									<h2 class="mt-0">{{$service->title}}</h5>
										<p>{{$service->description}}</p>
								</div>
								<button type="button" class="btn btn-outline-secondary mt-2 mb-2" tn
									btn-outline-secondary mt-2 mb-2" onclick="copyArticleUrl()">{{__('service-details.Copy link of service')}} <i
										class="fas fa-share"></i></button>
								<a class="fb-xfbml-parse-ignore btn btn-primary" target="_blank"
									href="https://www.facebook.com/sharer/sharer.php?u={{route('front/service', $service->id)}}">{{__('service-details.Share with facebook')}}</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>

	@endisset

	@include('flash::message')
    <!-- contact form -->
    <?php
        $contact_item_id = $service->id;
        $contact_section_no = "4";
        $contact_page_name = "Service";
    ?>
    @include('front.comm.contact_us')
    <!-- end contact form -->

@endsection
<!-- custom js -->
@section('script')
<script>
	$('#services_active').addClass('current-list-item');
</script>
@isset($service)
<script>
	$('#service_active_<?php echo $service->id ?>').addClass('active');
</script>
@endisset
@endsection

