@extends('layout')
@section('content')
<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">All Job Lisiting</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Careers</a></li>
                    <li class="breadcrumb-item active">All Job Lisiting</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <button class="btn btn-success btn-rounded dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-briefcase-search-outline mr-1"></i> View Responses
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                            <a class="dropdown-item" href="#">Add New Job</a>
                            <a class="dropdown-item" href="#">View Active Job Lisiting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">View All Response</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">View All Job lisiting</h4>
                        <p class="card-title-desc">DataTables has most features enabled by
                            default, so all you need to do to use it with your own tables is to call
                            the construction function: <code>$().DataTable();</code>.
                        </p>
                        <form action="{{route('uploadresume')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="resume">
                            <input type="text" name="name">
                            <input type="text" name="email">
                            <input type="text" name="job">
                            <input type="text" name="phone">
                            <input type="submit" name="submit" value="upload">

                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div>
    <!-- end container-fluid -->
</div>
<!-- end page-content-wrapper -->
@endsection
