@extends('layout')
@section('content')
<!-- Page-Title -->
<div class="page-title-box">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title mb-1">Add New Job Lisiting</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Careers</a></li>
                    <li class="breadcrumb-item active">New Job Lisiting</li>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Job Information</h4>
                        <p class="card-title-desc">For custom Bootstrap form validation messages, you’ll need to add the
                            <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>.
                        </p>

                        <form class="needs-validation" novalidate method="POST" action="/jobs">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="jobname">Job name</label>
                                        <input type="text" class="form-control" name="jobname" placeholder="Job name"
                                            value="" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jobtitle">Job Title</label>
                                        <input type="text" class="form-control" id="jobtitle" name="jobtitle"
                                            placeholder="Job Title" value="" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="jobdesc">Job Description</label>
                                    <div class="form-group">
                                        <textarea required="" id="jobdesc" name="jobdesc" class="form-control" rows="5"
                                            placeholder="minimum 50 words"></textarea>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="jobskills">Primary Skills</label>
                                    <input type="text" class="form-control" id="jobskills" name="jobskills"
                                        placeholder="Primary Skills" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="secondaryskills">Secondary Skills</label>
                                    <input type="text" class="form-control" id="secondaryskills" name="secondaryskills"
                                        placeholder="Secondary Skills" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="optionalskills">Optional Skills</label>
                                    <input type="text" class="form-control" id="optionalskills" name="optionalskills"
                                        placeholder="Optional Skills" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="Location" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>


                                <div class="col-md-4 mb-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="minexp">Experience</label>
                                            <input type="text" class="form-control" id="minexp" name="minexp"
                                                placeholder="Min Exp." value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="maxexp" class="text-white">.</label>
                                            <input type="text" class="form-control" id="maxexp" name="maxexp"
                                                placeholder="Max Exp." value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="salary">Salary Range</label>
                                    <input type="text" class="form-control" id="salary" name="salary"
                                        placeholder="Salary" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="jobtype">Job Type</label>
                                    <select class="custom-select" id="jobtype" name="jobtype">
                                        <option selected="Full-Time">Full-Time</option>
                                        <option value="Part-Time">Part-Time</option>
                                        <option value="C2H">C2H</option>
                                        <option value="Contract">Contract</option>
                                        <option value="Freelance">Freelance</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="wlocation">Work Location</label>
                                    <select class="custom-select" id="wlocation" name="wlocation">
                                        <option selected="In Office">In Office</option>
                                        <option value="Remote">Remote</option>
                                        <option value="Client Location">Client Location</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                            </div>


                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="invalidCheck" required="">
                                    <label class="custom-control-label" for="invalidCheck">I have Verified this
                                        Information, and Proceed with Lisiting.</label>
                                    <div class="invalid-feedback">
                                        You must Verify before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add Job Lisiting</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end container-fluid -->
</div>
<!-- end page-content-wrapper -->
@endsection
