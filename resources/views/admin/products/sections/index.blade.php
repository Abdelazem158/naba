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
        <h1 class="page-header">Product Options</h1>
    </div>
    <div class="col-lg-4">
        <div class="breadcrumb_container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin/index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin/products/index')}}">Products</a></li>
                    @isset($id)
                    <li class="breadcrumb-item"><a href="{{route('admin/products/section/index', $id)}}">Options</a>
                    </li>
                    @endisset
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Product Options Viwes
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                @include('flash::message')
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 text-right">
                        <div id="dataTables-example_filter" class="dataTables_filter mb-3">
                            <a href="{{route('admin/products/section/create', $id)}}"
                                style="text-decoration: none; color: white; width: 75px;margin:auto"
                                class="btn btn-success">
                                create
                            </a>
                            <!-- <label><input id="data_search" placeholder="search" type="search" class="form-control input-sm" aria-controls="dataTables-example"></label> -->
                        </div>
                    </div>
                </div>
                <div class="dataTable_wrapper">
                    <h2>SECTION ONE</h2>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>Icon</th> -->
                                <!-- Warning must be icon -->
                                <th>Title</th>
                                <th>Section</th>
                                <th>Activation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableShowData">
                            @isset($product_sections_one)
                            @foreach($product_sections_one as $product_section_one)
                            <tr class="odd gradeX">
                                <td>{{$product_section_one->id}}</td>
                                <!-- <td>{{$product_section_one->id}}</td> -->
                                <td>{{$product_section_one->title}}</td>
                                <!-- Warning must be image -->
                                <td>{{$product_section_one->section_no}}</td>
                                <?php
                                                if($product_section_one->is_activate == 1){$activate = '<span class="badge badge-info">active</span>';}
                                                else{$activate = '<span class="badge badge-danger">un active</span>';}
                                            ?>
                                <td class="center">{!! $activate !!}</td>
                                <td class="center">
                                    <ul class="nav navbar-center navbar-top-links" style="border-radius: 15px;">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                actions <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu dropdown-user">
                                                <li>
                                                    <a href="{{route('admin/products/section/edit', $product_section_one->id)}}"
                                                        style="text-decoration: none; color: white; width: 75px;margin:auto"
                                                        class="btn btn-success">
                                                        edit
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <button class="dropdown-item btn btn-danger openDeleteFrom"
                                                        data-toggle="modal" data-target="#myModalDelete"
                                                        data-id="{{$product_section_one->id}}">
                                                        delete
                                                    </button>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <button class="dropdown-item btn btn-priamry openActivationFrom"
                                                        data-toggle="modal" data-target="#myModalActivation"
                                                        data-id="{{$product_section_one->id}}">
                                                        activation
                                                    </button>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                    <hr>
                    <h2>SECTIONTWO</h2>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>Icon</th> -->
                                <th>Title</th>
                                <th>Section</th>
                                <th>Activation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableShowData">
                            @isset($product_sections_tow)
                            @foreach($product_sections_tow as $product_section_tow)
                            <tr class="odd gradeX">
                                <td>{{$product_section_tow->id}}</td>
                                <!-- <td>{{$product_section_tow->id}}</td> -->
                                <td>{{$product_section_tow->title}}</td>
                                <td>{{$product_section_tow->section_no}}</td>
                                <?php
                                                if($product_section_tow->is_activate == 1){$activate = '<span class="badge badge-info">active</span>';}
                                                else{$activate = '<span class="badge badge-danger">un active</span>';}
                                            ?>
                                <td class="center">{!! $activate !!}</td>
                                <td class="center">
                                    <ul class="nav navbar-center navbar-top-links" style="border-radius: 15px;">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                actions <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu dropdown-user">
                                                <li>
                                                    <a href="{{route('admin/products/section/edit', $product_section_tow->id)}}"
                                                        style="text-decoration: none; color: white; width: 75px;margin:auto"
                                                        class="btn btn-success">
                                                        edit
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <button class="dropdown-item btn btn-danger openDeleteFrom"
                                                        data-toggle="modal" data-target="#myModalDelete"
                                                        data-id="{{$product_section_tow->id}}">
                                                        delete
                                                    </button>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <button class="dropdown-item btn btn-priamry openActivationFrom"
                                                        data-toggle="modal" data-target="#myModalActivation"
                                                        data-id="{{$product_section_tow->id}}">
                                                        activation
                                                    </button>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                    <!-- <div style="margin-top: 20px; font-weight: 600; font-size: 16px;">
                            Showing 1 to <span id="showItems"></span> <span></span> entries
                        </div> -->
                    <div class="ltn__pagination-area text-center mt-5">
                        <div class="ltn__pagination text-center">
                            <div id="load_more">
                                <!-- <button type="button" name="load_more_button" style="width: 350px;" class="btn btn-info form-control px-5" data-id="'.$last_id.'" id="load_more_button">عرض المزيد</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabell" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title f-w-600" id="exampleModalLabell">Delete Confirmation</h5>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="{{url(route('admin/products/section/delete'))}}" method="get">
                                    {{ csrf_field() }}
                                    <p>Are You Sure To Update This Record ?</p>
                                    <input id="delete_record_id" name="record_id" type="hidden">
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Sure</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModalActivation" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Activation Confirmation</h5>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="{{url(route('admin/products/section/activate'))}}"
                                    method="get">
                                    {{ csrf_field() }}
                                    <p>Are You Sure To Update This Record ?</p>
                                    <input id="activation_record_id" name="record_id" type="hidden">
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Sure</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

@endsection
<!-- custom js -->
@section('script')
<script>
$(document).on('click', '.openDeleteFrom', function() {
    var id = $(this).attr('data-id');
    $('#delete_record_id').val(id);
});
$(document).on('click', '.openActivationFrom', function() {
    var id = $(this).attr('data-id');
    $('#activation_record_id').val(id);
});
</script>
@endsection
