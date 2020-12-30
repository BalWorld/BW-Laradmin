<?php
$bw_title='Apply for '.$job->bw_job_name; ?>
@include('main/layouts/header')
<section class="bal1-banner-page bg-primary bw-bg" style="background-image: url('/img/home/banner3.jpg');">
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

<section class="pt-4 mt-4">
    <div class="container" data-aos="fade-up" data-aos-duration="600">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-0 text-center">
                    <span class="badge badge-primary mb-2">{{ $job->bw_job_location }},
                        {{ $job->bw_job_wlocation }}</span>
                    <h3 class="mb-2 bal-title-heading">Apply for {{ $job->bw_job_name }}</h3>
                    <span>{{ $job->bw_job_title }} </span><br>
                    <span class="badge badge-dark">
                        {{ $job->bw_job_type }}</span>
                </div>
            </div>

            <div class="col-lg-6 py-4">
                <div class="card p-4">
                    <div class="">
                        <p><span class="f-600 font-poppins">Job Description</span> <br>
                            {{ $job->bw_job_description }}
                        </p>
                        <hr>
                        <div class="row no-gutter">
                            <div class="col-lg-6">
                                <p><span class="f-600 font-poppins">Primary Skills</span> <br>
                                    {{ $job->bw_job_pskills }}
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p><span class="f-600 font-poppins">Secondary Skills</span> <br>
                                    {{ $job->bw_job_sskills }}
                                </p>
                            </div>
                        </div>
                        <p><span class="f-600 font-poppins">Optional Skills</span> <br>
                            {{ $job->bw_job_oskills }}
                        </p>
                        <hr>
                        <div class="row no-gutter">
                            <div class="col-lg-6">
                                <p><span class="f-600 font-poppins">Expirence Required</span>
                                    <br>
                                    {{ $job->bw_job_minexp }} - {{ $job->bw_job_maxexp }}
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p><span class="f-600 font-poppins">Salary Offered</span> <br>
                                    {{ $job->bw_job_sal }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 py-4">
                <div class="custom-form card p-4">
                    <form action="{{route('applyjob')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="contact-lable">Name</label>
                                    <input name="name" id="name" class="form-control" type="text" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label class="contact-lable">Phone</label>
                                    <input name="phone" id="phone" class="form-control" type="text" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-3">
                                    <label class="contact-lable">Email Address</label>
                                    <input name="email" id="email" class="form-control" type="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-3">
                                    <label class="contact-lable">Job</label>
                                    <input name="job" id="job" class="form-control" type="text"
                                        value="{{ $job->bw_job_name }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-3">
                                    <label class="contact-lable">Resume</label>
                                    <input name="resume" id="resume" class="form-control mt-4" type="file" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mt-3">
                                <input id="submit" name="send" class="submitBnt btn btn-default btn-round"
                                    value="Apply for {{ $job->bw_job_name }}" type="submit">
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>



<section class="bw-icon-text bg-light mt-4">
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
