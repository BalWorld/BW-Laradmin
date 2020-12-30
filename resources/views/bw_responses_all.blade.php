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

                        <table class="table table-striped dt-responsive nowrap border datatablesortid"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th data-priority="2">Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Applied Job</th>
                                    <th data-priority="4">Status</th>
                                    <th data-priority="3">Download</th>
                                    <th data-priority="1">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($responses as $aresponse)
                                <tr>
                                    <td>{{ $aresponse->id }}</td>
                                    <td>{{ $aresponse->name }}</td>
                                    <td>{{ $aresponse->email }}</td>
                                    <td>{{ $aresponse->phone }}</td>
                                    <td>{{ $aresponse->job }}</td>
                                    <td> @if($aresponse->status == 'Not Contacted')
                                        <p class="badge badge-danger p-2">{{$aresponse->status}}</p>
                                        @elseif($aresponse->status == 'Contacted')
                                        <p class="badge badge-success p-2">{{$aresponse->status}}</p>
                                        @elseif($aresponse->status == 'Shortlisted')
                                        <p class="badge badge-warning p-2">{{$aresponse->status}}</p>
                                        @else
                                        <p class="badge badge-light p-2 text-primary">{{$aresponse->status}}</p>
                                        @endif

                                    </td>
                                    <td>
                                        <a class="badge badge-primary p-2"
                                            href="uploads/jobresponse/{{ $aresponse->file }}" target="_blank">Download
                                            Resume</a>
                                    </td>
                                    <td>
                                        <div class="btn-group ml-md-2 mb-3">
                                            <a type="button" class="badge badge-light p-2 dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                <a class="dropdown-item text-dark" data-toggle="modal"
                                                    data-target="#jobdetails{{ $aresponse->id }}">Update Status</a>

                                                <a class="dropdown-item text-dark"
                                                    href="{{ route('response.delete', $aresponse->id) }}"
                                                    data-method="delete" data-token="{{csrf_token()}}"
                                                    data-confirm="Confirm Deletion? {{ $aresponse->name }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                                <!--  modal content -->
                                <div id="jobdetails{{ $aresponse->id }}" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Response Status</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="font-size-16">Updated Job Status of {{ $aresponse->name }}
                                                </h5>

                                                <form action="{{ route('response.edit', $aresponse->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-8 mb-3">
                                                            <select class="custom-select" id="status" name="status">
                                                                <option selected="{{ $aresponse->status }}">Current
                                                                    Status :
                                                                    {{ $aresponse->status }}</option>
                                                                <option value="Shortlisted">Shortlisted</option>
                                                                <option value="Contacted">Contacted</option>
                                                                <option value="Hired">Hired</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <input type="submit" name="submit"
                                                                class="btn btn-secondary waves-effect"
                                                                value="Update Status">
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div>
    <!-- end container-fluid -->
</div>
<!-- end page-content-wrapper -->

@endsection
