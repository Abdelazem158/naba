@extends('layouts.admin.home')

<!-- title page -->
@section('title')
    <title>Trainings</title>
@endsection
<!-- custom page -->
@section('css')
@endsection
@section('content')


    <div class="row">
        <div class="col-lg-8">
        <h1 class="page-header">Training Edit</h1>
        </div>
        <div class="col-lg-4">
            <div class="breadcrumb_container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin/index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin/trainings/index')}}">Trainings</a></li>
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
                    <div class="panel-title pull-left">Training Form</div>
                    <!-- <div class="pull-right">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#section_ar" data-toggle="tab">Training AR</a></li>
                            <li><a href="#section_en" data-toggle="tab">Training EN</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="panel-body">
                    @isset($training)
                        <form role="form" action="{{url(route('admin/trainings/update', $training->id))}}" method="post" enctype="multipart/form-data">
                            <div class="form-group input-group">
                                <div class="m-2 d-flex">
                                    <img src="{{asset($training->image)}}" alt="" class="img-fluid img-50 rounded-circle blur-up lazyloaded" width="100">
                                </div>
                            </div>
                            <div class="tab-content">
                                @csrf
                                <div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="name_ar" type="text" class="form-control" placeholder="Name AR" value="{{ $training->translate('ar')->name }}">
                                        @error('name_ar')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="title_ar" type="text" class="form-control" placeholder="Title AR" value="{{ $training->translate('ar')->title }}">
                                        @error('title_ar')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> -->
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <textarea class="form-control" name="description_ar" placeholder="Description AR" rows="2">{{ $training->translate('ar')->description }}</textarea>
                                        @error('description_ar')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="instructor" type="text" class="form-control" placeholder="Instructor" value="{{ $training->instructor }}">
                                        @error('instructor')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="date_from" type="date" class="form-control" placeholder="Date From" value="{{ $training->date_from }}">
                                        @error('date_from')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="date_to" type="date" class="form-control" placeholder="Date To" value="{{ $training->date_to }}">
                                        @error('date_to')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="days" type="text" class="form-control" placeholder="Days" value="{{ $training->days }}">
                                        @error('days')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="time_started" type="text" class="form-control" placeholder="Time Started" value="{{ $training->time_started }}">
                                        @error('time_started')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="cost" type="number" class="form-control" placeholder="Cost" value="{{ $training->cost }}">
                                        @error('cost')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="image" type="file" class="form-control" placeholder="Upload Image">
                                        @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="name_en" type="text" class="form-control" placeholder="Name EN" value="{{ optional($training->translate('en'))->name }}">
                                        @error('name_en')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="title_en" type="text" class="form-control" placeholder="Title EN" value="{{ optional($training->translate('en'))->title }}">
                                        @error('title_en')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> -->
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <textarea class="form-control" name="description_en" placeholder="Description EN" rows="2">{{ optional($training->translate('en'))->description }}</textarea>
                                        @error('description_en')
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
