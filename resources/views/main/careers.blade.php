<?php
$bw_title='Careers'; ?>
@include('main/layouts/header')
<section class="bal1-banner-page bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-md-7">
                <div class="banner-content">
                    <h1 class="heading banner-title banner-title-b">Careers at VNC Digital Services</h1>
                    <p class="p banner-subtitle">The Digital workforce to streamline anything &amp; everything</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-4 pb-4 mt-4">
    <div class="container" data-aos="fade-up" data-aos-duration="600">
        <h1 class="f-600">Open Positions</h1>
        <p class="pb-2">“Artificial intelligence is the science and engineering of making computers behave in ways that,
            until recently, we thought required human intelligence.” Artificial Intelligence – devices designed to act
            intelligently – are often classified into one of two fundamental groups – applied or general. Applied AI is
            far more common – systems designed to intelligently trade stocks and shares, or maneuver an autonomous
            vehicle would fall into this category.</p>
    </div>
</section>

<div class="careers">
    <div class="container">
        <div class="open-positon">
            <div class="row">
                <div class="job-lists">
                    <table class="table-responsive">
                        <colgroup>
                            <col span="1" style="width: 40%">
                            <col span="1" style="width: 20%">
                            <col span="1" style="width: 20%">
                            <col span="1" style="width: 20%">
                        </colgroup>
                        <tbody>
                            @foreach($jobs as $ajob)
                            <tr>
                                <td class="job-detail">
                                    <h1 class="job-position">{{ $ajob->bw_job_name }}</h1>

                                    <p class="{{ $ajob->bw_job_type }} d-lg-none">{{ $ajob->bw_job_type }}</p>
                                    <p class="job-location"><i
                                            class="mdi mdi-map-marker"></i>{{ $ajob->bw_job_location }},
                                        {{ $ajob->bw_job_wlocation }}
                                    </p>
                                </td>
                                <td class="job-time d-none d-lg-inline-block">
                                    <p class="{{ $ajob->bw_job_type }}">{{ $ajob->bw_job_type }}</p>
                                </td>
                                <td class="job-salary d-none d-lg-inline-block">{{ $ajob->bw_job_sal}}</td>
                                <td class="apply-btn"><a href="#" data-toggle="modal"
                                        data-target="#jobmodal{{ $ajob->id }}">More Details</a></td>
                            </tr>


                            <!-- Jobs modal content -->
                            <div id="jobmodal{{ $ajob->id }}" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content pl-2">
                                        <a type="button" class="modal-close" data-dismiss="modal" aria-label="Close"><i
                                                class="mdi mdi-close-circle"></i>
                                        </a>
                                        <div class="row justify-content-center pt-4 pr-4">
                                            <div class="col-lg-8 text-center">
                                                <div class="mb-0">
                                                    <span class="badge badge-primary mb-2">{{ $ajob->bw_job_location }},
                                                        {{ $ajob->bw_job_wlocation }}</span>
                                                    <h3 class="mb-2 bal-title-heading">{{ $ajob->bw_job_name }}</h3>
                                                    <span>{{ $ajob->bw_job_title }} </span><br>
                                                    <span class="badge badge-dark">
                                                        {{ $ajob->bw_job_type }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body mt-0 pt-0">
                                            <hr>
                                            <div class="bw-jobdetails" id="bw-jobDetails{{ $ajob->id }}">
                                                <p><span class="f-600 font-poppins">Job Description</span> <br>
                                                    {{ $ajob->bw_job_description }}
                                                </p>
                                                <hr>
                                                <div class="row no-gutter">
                                                    <div class="col-lg-6">
                                                        <p><span class="f-600 font-poppins">Primary Skills</span> <br>
                                                            {{ $ajob->bw_job_pskills }}
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p><span class="f-600 font-poppins">Secondary Skills</span> <br>
                                                            {{ $ajob->bw_job_sskills }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <p><span class="f-600 font-poppins">Optional Skills</span> <br>
                                                    {{ $ajob->bw_job_oskills }}
                                                </p>
                                                <hr>
                                                <div class="row no-gutter">
                                                    <div class="col-lg-6">
                                                        <p><span class="f-600 font-poppins">Expirence Required</span>
                                                            <br>
                                                            {{ $ajob->bw_job_minexp }} - {{ $ajob->bw_job_maxexp }}
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p><span class="f-600 font-poppins">Salary Offered</span> <br>
                                                            {{ $ajob->bw_job_sal }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <hr>
                                                <a class="btn btn-default" href="{{ $ajob->path() }}">
                                                    Apply For {{ $ajob->bw_job_name }} </a>
                                            </div>

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
        </div>
    </div>
</div>
<section class="bw-icon-text bg-light mt-6">
    <div class="container">
        <div class="pt-2 pb-4">
            <h1 class="f-600">Interested to Join Us ?</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bw-icon-text-group">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">Visit Us</h5>
                                    <p class="bw-icon-text-content--pragraph">305A, Brigade IRV Centre, Nallurhalli
                                        Road,<br>Whitefield, Bengaluru, Karnataka 560066</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">Contact Us</h5>
                                    <p class="bw-icon-text-content--pragraph">Tel: +918073959200<br>
                                        Email: hr@vncdigital.com</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="call-to-action">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-9">
                <div class="call-to-action_content text-lg-left">
                    <h3 class="h3 cta-title">Ready To Begin Your Journey With Al &amp; ML?</h3>
                    <p class="p cta-pragraph">Just submit your contact details and we will be in touch shortly. </p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-lg-right"><a data-toggle="modal" data-target="#modal-quote"
                    class="btn-basic">Contact Us</a></div>
        </div>
    </div>
</section>

@include('main/layouts/footer')
