<?php
$bw_title='Lambda'; ?>
@include('main/layouts/header')

<section class="bal1-banner-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-md-7">
                <div class="banner-content">
                    <h1 class="heading banner-title banner-title-b">AWS Lambda</h1>
                    <p class="p banner-subtitle">Run code without thinking about servers.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-4 pb-4 mt-4">
    <div class="container" data-aos="fade-up" data-aos-duration="600">
        <h1 class="f-600">AWS Lambda expertise to speed up your Ops</h1>
        <p class="pb-2">AWS Lambda allows you to run software without servers.
            <br>You pay only for the compute time you consume-there is no charge when your code is not running.
            <br>
            With Lambda, you can run code for virtually any type of application or backend service-all with zero
            administration. Just upload your code and Lambda takes care of everything required to run and scale your
            code with high availability. You can set up your code to automatically trigger from other AWS services or
            call it directly from any web or mobile app.
        </p>
        <div class="d-flex justify-content-center">
            <img class="pb-4 img-fluid" src="/img/lambda/lambda.png" alt="Image">
        </div>
    </div>
</section>


<section class="bw-icon-text bg-light">
    <div class="container">
        <div class="pt-2 pb-6">
            <h1 class="f-600">What's in it for you?</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bw-icon-text-group" data-aos="fade-up" data-aos-duration="600">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-icon">
                                    <img src="/img/lambda/icon-server.png" alt="icon">
                                </div>
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">No Servers to Manage</h5>
                                    <p class="bw-icon-text-content--pragraph">Without the need to provide or manage
                                        servers, AWS Lambda automatically executes your code. Just type in the software
                                        for Lambda and upload it.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-icon">
                                    <img src="/img/lambda/icon-scale.png" alt="icon">
                                </div>
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">Continous Scaling</h5>
                                    <p class="bw-icon-text-content--pragraph">In reaction to each trigger, AWS Lambda
                                        scales your request automatically by running a code. Each trigger is parallel to
                                        your code, which can be scaled exactly to workload size.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-icon">
                                    <img src="/img/lambda/icon-metering.png" alt="icon">
                                </div>
                                <div class="bw-icon-text-content">
                                    <h5 class="bw-icon-text-content--title">Subsecond Metering</h5>
                                    <p class="bw-icon-text-content--pragraph">For every 100ms, the number of times your
                                        code is triggered, you are charged with AWS LAMBDA. When your code doesn't work,
                                        you pay nothing.</p>
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
                    <h3 class="h3 cta-title">Ready To Begin Your Journey With AWS Lambda ?</h3>
                    <p class="p cta-pragraph">Just submit your contact details and we will be in touch shortly. </p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-lg-right"><a data-toggle="modal" data-target="#modal-quote"
                    class="btn-basic">Contact Us</a></div>
        </div>
    </div>
</section>

@include('main/layouts/footer')
