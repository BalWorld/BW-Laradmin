<?php
$bw_title='About Us';
$getaquote='General Enquiry';?>
@include('main/layouts/header')

<section class="bal1-banner-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-md-7">
                <div class="banner-content">
                    <h1 class="heading banner-title banner-title-b">About Us</h1>
                    <p class="p banner-subtitle">The Digital workforce to streamline anything &amp; everything</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light pt-4 pb-4">
    <div class="container">
        <img src="/img/about-us/butterfly.png" class="img-fluid" alt="img">
    </div>
</section>

<section class="pt-2 pb-6 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pb-4" data-aos="fade-up" data-aos-duration="600">
                <h1 class="f-600">Who We are</h1>
                <p class="pb-2">For us Monday’s are interesting and Fridays and weekends are boring..Silly right!! But
                    we mean it. We are bunch of enthusiasts who feel we are here in this beautiful world to solve some
                    of the complex problems using cutting edge technologies.</p>
                <p class="pb-2">Team comes with a mix of technology experience which helps us in collaborating and
                    developing something great. Try us to feel better.</p>
                <a href="../leadership/" class="">Our Leadership Team<i class="mdi mdi-arrow-right"></i></a><br>
                <a href="../clients-and-partners/" class="">Clients and Partners<i
                        class="mdi mdi-arrow-right"></i></a><br>
                <a href="../contact/" class="">Contact Us<i class="mdi mdi-arrow-right"></i></a>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <h1 class="f-600">What can we Do for you</h1>
                <p class="pb-2">Virtualization and Cloud computing are at the core of all that we do at VNC. Our main
                    goal is finding smart ways of using technology that will help build a better tomorrow for everyone,
                    everywhere.</p>
                <p class="pb-2">Any technology that makes users life simple, we have expertise in it. We understand that
                    new technologies evolve to fix many of the complex problems and we learn and use them as torch
                    bearers. Cloud, DevOps, Test and Process Automation, UI/UX and Web technologies.</p>
            </div>
        </div>
    </div>
</section>


<!-- Clients and Partners -->
<section class="section bg-white" id="team">
    <div class="container">
        <div class="overflow-hidden">

            <div class="row justify-content-lg-between">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="mb-4" style="max-width: 150px;">
                        <img class="img-fluid" src="/img/vnclogo.png" alt="logo">
                    </div>

                    <div class="mb-5 ">
                        <h2 class="bal-title-heading">Our Success Stories -<br> H-Bot and ChatBot</h2>
                        <p class="bal-article-textbody text-muted">Explore and learn more about our Success in Deploying
                            H-Bot, Our Offering to Hospitals, and ChatBot, A Chat Assistant that communicates with in
                            through Natural Language.</p>
                    </div>

                    <a class="btn btn-default transition-3d-hover px-4" data-toggle="modal"
                        data-target="#modal-success">View Our Success Stories</a>
                </div>

                <div class="col-lg-6">
                    <div class="row mt-4 mr-2">
                        <div class="col-sm-6 mb-5 mb-sm-0 col-6" data-aos="zoom-out" data-aos-duration="600">
                            <!-- Article Item -->
                            <a class="partner-btn" data-toggle="modal" data-target="#modal-clients">
                                <img class="img-fluid w-100 rounded" src="../img/clients.jpg" alt="Image Description">
                                <div class="shadow-none py-4">
                                    <h4 class="bal-artice-texttitle f-600">Clients</h4>
                                    <p class="bal-article-textbody">View All our Valuable Clients</p>
                                    <span class="bal-article-learnmore">View Our Clients <i
                                            class="fas fa-angle-right fa-sm ml-1"></i></span>
                                </div>
                            </a>
                            <!-- End Article Item -->
                        </div>

                        <div class="col-sm-6 col-6" data-aos="zoom-out" data-aos-duration="600" data-aos-delay="200">
                            <!-- Article Item -->
                            <a class="partner-btn" data-toggle="modal" data-target="#modal-partners">
                                <img class="img-fluid w-100 rounded" src="../img/partners.jpg" alt="Image Description">
                                <div class="shadow-none py-4">
                                    <h4 class="bal-artice-texttitle f-600">Partners</h4>
                                    <p class="bal-article-textbody">View all our Valuable Partners</p>
                                    <span class="bal-article-learnmore">View Our Partners <i
                                            class="fas fa-angle-right fa-sm ml-1"></i></span>
                                </div>
                            </a>
                            <!-- End Article Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Clients and Partners -->

<section class="call-to-action">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-9">
                <div class="call-to-action_content text-lg-left">
                    <h3 class="h3 cta-title">Ready To Begin Your Journey With Us ?</h3>
                    <p class="p cta-pragraph">Just submit your contact details and we will be in touch shortly.</p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-lg-right"><a data-toggle="modal" data-target="#modal-quote"
                    class="btn-basic">Contact Us</a></div>
        </div>
    </div>
</section>
@include('main/layouts/modals')
@include('main/layouts/footer')
