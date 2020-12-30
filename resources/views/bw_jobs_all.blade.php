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

                        <table id="datatable" class="table table-striped dt-responsive nowrap border"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Job Name</th>
                                    <th>Job Title</th>
                                    <th>Description</th>
                                    <th>Primary Skills</th>
                                    <th>Secondary Skills</th>
                                    <th>Optional Skills</th>
                                    <th>Location</th>
                                    <th>Expirence</th>
                                    <th>Salary</th>
                                    <th>Type</th>
                                    <th>Work Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($jobs as $ajob)
                                <tr>
                                    <td>{{ $ajob->bw_job_name }}</td>
                                    <td>{{ $ajob->bw_job_title }}</td>
                                    <td>{{ $ajob->bw_job_description }}</td>
                                    <td>{{ $ajob->bw_job_pskills }}</td>
                                    <td>{{ $ajob->bw_job_sskills }}</td>
                                    <td>{{ $ajob->bw_job_oskills }}</td>
                                    <td>{{ $ajob->bw_job_location }}</td>
                                    <td>{{ $ajob->bw_job_minexp }} - {{ $ajob->bw_job_maxexp }}</td>
                                    <td>{{ $ajob->bw_job_sal }}</td>
                                    <td>{{ $ajob->bw_job_type }}</td>
                                    <td>{{ $ajob->bw_job_wlocation }}</td>
                                    <td>
                                        <div class="btn-group ml-md-2 mb-3">
                                            <button type="button"
                                                class="btn btn-light waves-light waves-effect dropdown-toggle"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#jobmodal{{ $ajob->id }}">View
                                                    More Details</a>
                                                <a class="dropdown-item text-dark"
                                                    href="{{ route('job.delete', $ajob->id) }}" data-method="delete"
                                                    data-token="{{csrf_token()}}"
                                                    data-confirm="Confirm Deletion? {{ $ajob->bw_job_name }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Job  modal content -->
                                <div id="jobmodal{{ $ajob->id }}" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="font-size-16">Overflowing text to show scroll behavior</h5>
                                                {{ $ajob->bw_job_name }}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn btn-primary waves-effect waves-light">Save
                                                    changes</button>


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
