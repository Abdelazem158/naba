@extends('layouts.admin.home')

<!-- title page -->
@section('title')
<title>Products</title>
@endsection
<!-- custom page -->
@section('css')
@endsection
@section('content')

<div class="row">
    <div class="col-lg-8">
        <h1 class="page-header">Add New Product Options</h1>
    </div>
    <div class="col-lg-4">
        <div class="breadcrumb_container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin/index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin/products/index')}}">Products</a></li>
                    @isset($id)
                    <li class="breadcrumb-item"><a href="{{route('admin/products/section/index', $id)}}">Product
                            Options</a></li>
                    @endisset
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
                <div class="panel-title pull-left">Product Options Form</div>
                <!-- <div class="pull-right">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#section_ar" data-toggle="tab">Section AR</a></li>
                            <li><a href="#section_en" data-toggle="tab">Section EN</a></li>
                        </ul>
                    </div> -->
            </div>
            <div class="panel-body">
                @isset($id)
                <form role="form" action="{{url(route('admin/products/section/store', $id))}}" method="post"
                    enctype="multipart/form-data">
                    <div class="tab-content">
                        @csrf
                        <div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <input name="title_ar" type="text" class="form-control" placeholder="Title AR"
                                    value="{{ old('title_ar') }}">
                                @error('title_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <input name="description_ar" type="text" class="form-control"
                                    placeholder="Description AR" value="{{ old('description_ar') }}">
                                @error('description_ar')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <input name="icon" type="file" class="form-control" placeholder="Upload Icon">
                                @error('icon')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- <div class="form-group input-group">
                                        <span class="input-group-addon" style="color: red;">*</span>
                                        <input name="icon" type="text" class="form-control" placeholder="Icon" value="{{ old('icon') }}">
                                        @error('icon')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div> -->
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <select class="form-control" name="section_no" id="section_no">
                                    <option value="" disabled>Section</option>
                                    <option value="1">Section ONE</option>
                                    <option value="2">Section TWO</option>
                                </select>
                                @error('section_no')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <input name="title_en" type="text" class="form-control" placeholder="Title EN"
                                    value="{{ old('title_en') }}">
                                @error('title_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group input-group" id="description_item">
                                <span class="input-group-addon" style="color: red;">*</span>
                                <input name="description_en" type="text" class="form-control"
                                    placeholder="Description EN" value="{{ old('description_en') }}">
                                @error('description_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit Button</button>
                        <button type="reset" class="btn btn-primary">Reset Button</button>
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
