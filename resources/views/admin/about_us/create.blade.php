@extends('layouts.admin.home')

<!-- title page -->
@section('title')
<title>About Us</title>
@endsection
<!-- custom page -->
@section('css')
@endsection
@section('content')

<div class="row">
    <div class="col-lg-8">
        <h1 class="page-header">Add New About Us</h1>
    </div>
    <div class="col-lg-4">
        <div class="breadcrumb_container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin/index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin/about-us/index')}}">About Us</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                <div class="panel-title pull-left">About Us Form</div>
                <!-- <div class="pull-right">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#section_ar" data-toggle="tab">Webinar AR</a></li>
                            <li><a href="#section_en" data-toggle="tab">Webinar EN</a></li>
                        </ul>
                    </div> -->
            </div>
            <div class="panel-body">
                <form role="form" action="{{url(route('admin/about-us/create'))}}" method="post"
                    enctype="multipart/form-data">
                    <div class="tab-content">
                        @csrf
                        <div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">Title AR *</span>
                                <input name="title_ar" type="text" class="form-control" placeholder="Title AR"
                                    value="{{ old('title_ar') }}">
                                @error('title_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>>
                            <!-- <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <textarea class="form-control" name="description_ar" placeholder="Description AR"
                                    rows="2">{{ old('description_ar') }}</textarea>
                                @error('description_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div> -->
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <input name="image" type="file" class="form-control" placeholder="Upload Image">
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <select class="form-control" name="section" aria-controls="dataTables-example">
                                    <option value="">Sections</option>
                                    <option value="1">Excellence points</option>
                                    <option value="2">Why Naba</option>
                                    <option value="3">Our clients</option>
                                    <option value="4">Our techniques</option>
                                    <option value="5">Our vision</option>
                                </select>
                                @error('section')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">Title EN *</span>
                                <input name="title_en" type="text" class="form-control" placeholder="Title EN"
                                    value="{{ old('title_en') }}">
                                @error('title_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <textarea class="form-control" name="description_en" placeholder="Description EN"
                                    rows="2">{{ old('description_en') }}</textarea>
                                @error('description_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div> -->
                        </div>
                        <button type="submit" class="btn btn-success">Submit Button</button>
                        <button type="reset" class="btn btn-primary">Reset Button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-6 -->
</div>

@endsection
<!-- custom js -->
@section('script')
<script>
var select = document.getElementById("section_no"),
    input = document.getElementById("description_item");

if (select.value == 2) {
    input.style.display = "none";
} else {
    input.style.display = "table"
}
select.addEventListener("change", function() {
    if (this.value == 2) {
        input.style.display = "none";
    } else {
        input.style.display = "table"
    }
})
</script>
@endsection
