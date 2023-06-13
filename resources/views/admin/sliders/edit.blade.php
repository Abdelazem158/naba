@extends('layouts.admin.home')

<!-- title page -->
@section('title')
    <title>Sliders</title>
@endsection
<!-- custom page -->
@section('css')
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-8">
            <h1 class="page-header">Slider Edit</h1>
        </div>
        <div class="col-lg-4">
            <div class="breadcrumb_container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin/index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin/sliders/index')}}">Sliders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            @include('flash::message')
            <div class="panel tabbed-panel panel-info">
                <div class="panel-heading clearfix">
                    <div class="panel-title pull-left">Slider Form</div>
                    <!-- <div class="pull-right">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#section_ar" data-toggle="tab">Slider AR</a></li>
                            <li><a href="#section_en" data-toggle="tab">Slider EN</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="panel-body">
                    @isset($slider)
                        <form role="form" action="{{url(route('admin/sliders/update', $slider->id))}}" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-center">EN</h1>
                                </div>
                                <div class="col-md-6 text-center">
                                    <h2 class="text-center">PC</h2>
                                    <img src="{{asset($slider->translate('en')->image)}}" alt="" class="img-fluid img-50 rounded-circle blur-up lazyloaded" width="100">
                                </div>
                                <div class="col-md-6 text-center">
                                    <h2 class="text-center">Mobile</h2>
                                    <img src="{{asset($slider->translate('en')->image_phone)}}" alt="" class="img-fluid img-50 rounded-circle blur-up lazyloaded" width="100">
                                </div>
                                <div class="col-12">
                                    <h1 class="text-center">AR</h1>
                                </div>
                                <div class="col-md-6 text-center">
                                    <h2 class="text-center">PC</h2>
                                    <img src="{{asset($slider->translate('ar')->image)}}" alt="" class="img-fluid img-50 rounded-circle blur-up lazyloaded" width="100">
                                </div>
                                <div class="col-md-6 text-center">
                                    <h2 class="text-center">Mobile</h2>
                                    <img src="{{asset($slider->translate('ar')->image_phone)}}" alt="" class="img-fluid img-50 rounded-circle blur-up lazyloaded" width="100">
                                </div>
                            </div>
                            <div class="form-group input-group">
                                <div class="m-2 d-flex">
                                </div>
                                <div class="m-2 d-flex">
                                </div>
                            </div>
                            <div class="tab-content">
                                @csrf
                                <div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="title_ar" type="text" class="form-control" placeholder="Title AR" value="{{ $slider->translate('ar')->title }}">
                                        @error('title_ar')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <textarea class="form-control" name="description_ar" placeholder="Description AR" rows="2">{{ $slider->translate('ar')->description }}</textarea>
                                        @error('description_ar')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="link_ar" type="text" class="form-control" placeholder="Link AR" value="{{ $slider->link_ar }}">
                                        @error('link_ar')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">PC Ar*</span>
                                        <input name="image_ar" type="file" class="form-control" placeholder="Upload Image">
                                        @error('image_ar')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">Mobile *</span>
                                        <input name="image_mobile_ar" type="file" class="form-control" placeholder="Upload Mobile Image">
                                        @error('image_mobile_ar')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="title_en" type="text" class="form-control" placeholder="Title EN" value="{{ optional($slider->translate('en'))->title }}">
                                        @error('title_en')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <textarea class="form-control" name="description_en" placeholder="Description EN" rows="2">{{ optional($slider->translate('en'))->description }}</textarea>
                                        @error('description_en')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="link_en" type="text" class="form-control" placeholder="Link EN" value="{{ $slider->link_en }}">
                                        @error('link_en')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">PC En *</span>
                                        <input name="image_en" type="file" class="form-control" placeholder="Upload Image">
                                        @error('image_en')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">Mobile En*</span>
                                        <input name="image_mobile_en" type="file" class="form-control" placeholder="Upload Mobile Image" value="{{asset($slider->translate('en')->image)}}">
                                        @error('image_mobile_en')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Submit Button</button>
                            </div>
                        </form>
                    @endisset
                </div>
            </div>
        </div>
        <!-- /.col-lg-6 -->
    </div>

@endsection
<!-- custom js -->
@section('script')
@endsection
