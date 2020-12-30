<?php 
$getaquote="General Enquiry"; ?>
@include('main/layouts/header')
<section class="bal1-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-md-7">
                <div class="banner-content">
                    <div class="mb-2" style="width: 120px;">
                        <img class="img-fluid" src="/img/vnclogo-white-sm.png" alt="logo">
                    </div>
                    <h1 class="heading banner-title" data-aos="fade-right" data-aos-duration="600">Welcome to VNC
                        Digital Services<br>
                        <span style="font-size: 26px;">Technology Simplified.</span>
                    </h1>
                    <p class="p banner-paragraph" data-aos="fade-right" data-aos-duration="600" data-aos-delay="200">You
                        are here because you are up to solving something complex and creating a unique product. Take a
                        first step towards this journey by learning more about us.</p>
                    <div class="banner-btn-group d-flex" data-aos="fade-right" data-aos-duration="600"
                        data-aos-delay="400">
                        <div class="banner-video"><a class="popup-youtube d-flex align-items-center"
                                href="https://www.youtube.com/watch?v=kTs6LbQ1Bkg">
                                <div class="video-btn font-poppins"><i class="mdi mdi-play inline-block"></i> Know us in
                                    180 Seconds</div>
                            </a>
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
                    <h3 class="h3 cta-title">Our Core Services</h3>
                    <p class="p cta-pragraph">Interested ? Just submit your contact details and we will be in touch
                        shortly. </p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-lg-right"><a data-toggle="modal" data-target="#modal-quote"
                    class="btn-basic">Contact Us</a></div>
        </div>
    </div>
</section>
<style>
</style>
<!-- BW Cards -->
<section class="bw-hovercards" style="background: #eee;">
    <div class="container-fluid">
        <section class="bw-featured-cards">
            <div class="bw-featured-cards_bottom bw-featured-hcards-footer">
                <div class="bw-hovercards-group bw-carousel">
                    <div class="bw-services-loop owl-carousel owl-theme">

                        <a class="bal-card_one text-left m-2" href="../v-pulse/">
                            <div class="bal-card_one-body h-100">
                                <div class="bal-card-text">
                                    <h3 class=" font-poppins">V-Pulse</h3>
                                    <p class="">Path-breaking cloud-based application with revolutionary capabilities.
                                        An automated cloud based solution to manage hospitals and patient EHR.</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">

                                <span class="font-size-1 font-weight-bold">Know More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>

                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../devops/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">Enable Rapid Innovation with DevOps</h3>
                                    <p class="">The six core principles of DevOps practise are embedded into our genes
                                        which helps in rolling out your products quickly by creating a platform where
                                        Development and Operations go hand in hand</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">

                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->
                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../full-stack-development/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">Full Stack Development</h3>
                                    <p class="">Full Stack Developers influence the pace of the project. After all,
                                        every business requires professionals with extensive know- how about everything
                                        from the back-end , a database to front-end.</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">


                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->

                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../internet-of-things/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">IoT for smart, connected enterprise &amp; home</h3>
                                    <p class="">VNC IoT platform makes the implementation of enterprise-wide connected
                                        IoT business seamless. By abstracting away the complexities in data acquisition,
                                        edge intelligence, device management, security, visualization, reporting and
                                        analytics.</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">

                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->

                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../ai-ml/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">Artificial Intelligence &amp; Machine Learning</h3>
                                    <p class="">Our philosophy is delivering value from AI and ML. The platform is the
                                        manifestation of this, assisting data-scientists to build better machine
                                        learning models, faster and to take them from prototype to enterprise scale
                                        deployment in a few clicks.</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">

                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->

                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../alexa-skill/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">Alexa Skills</h3>
                                    <p class="">Looking for Alexa Skills. Our expertise with Lambda will help you to
                                        host your product on Alexa at a quick pace</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">

                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->

                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../testing-as-a-servics/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">Testing as a Service</h3>
                                    <p class="">Testing as a Service model combines Tools, Process, Data, Technology and
                                        talent to deliver a quality product which includes modern web applications,
                                        mobile applications and API's.</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">

                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->

                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../php/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">PHP</h3>
                                    <p class="">Our deep domain expertise combined with the knowledge in PHP specific
                                        frameworks and libraries help you to fast pace your product delivery.</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">

                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->

                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../robotic-process-automation/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">Robotic Process Automation</h3>
                                    <p class="">Our AI and ML expertise embedded with RPA capabilities helps you in
                                        intelligent automation of digital workforce</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">


                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->

                        <!-- bal-card_one -->
                        <a class="bal-card_one text-left m-2 h-70" href="../lambda/">
                            <div class="bal-card_one-body">
                                <div class="bal-card-text">
                                    <h3 class="font-poppins">AWS Lambda</h3>
                                    <p class="">You can operate code with Lambda for almost any implementation or
                                        back-end service-with zero management. Our expertise can set up your code to
                                        automatically trigger from other AWS services or call it directly from any web
                                        or mobile app.</p>
                                </div>
                            </div>
                            <div class="bal-card_one-footer border-0 bg-transparent pt-0">


                                <span class="font-size-1 font-weight-bold">Learn More <i
                                        class="fas fa-angle-right fa-sm ml-1"></i></span>
                            </div>
                        </a>
                        <!-- End bal-card_one -->

                    </div>

                </div>
            </div>
        </section>
    </div>
</section>
<!-- End of BW Cards -->

<!-- HOME -->
<section class="bg-home bw-bg" style="background-image: url('/img/home/banner.jpg');">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 order-2 order-lg-1">
                        <div class="home-content">
                            <h1 class="home-title text-white bal-title-heading">What can we do for you<br>Technology,
                                That Matters!</h1>
                            <p class="text-white mt-6">Virtualization and Cloud computing are at the core of all that we
                                do at VNC. Our main goal is finding smart ways of using technology that will help build
                                a better tomorrow for everyone, everywhere.</p>
                            <p class="text-white mt-3"> Any technology that makes users life simple, we have expertise
                                in it. We understand that new technologies evolve to fix many of the complex problems
                                and we learn and use them as torch bearers. Cloud, DevOps, Test and Process Automation,
                                UI/UX and Web technologies.</p>

                        </div>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 mb-4">
                        <img src="/img/home/technology-simplified.jpg" class="img-fluid">
                    </div>
                </div>
                <!-- new row -->
                <div class="row pt-4 bal-plus-box" style="color:white !important;">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-2 bal-ispin bal-pbox">
                        <div class="h-100" data-toggle="modal" data-target="#modal-solutions">
                            <h4 class="f-600 text-center">Solutions<br>offered<div>
                                    <i class="mdi mdi-plus-circle d-inline-block"></i>
                                </div>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-2 bal-ispin bal-pbox">
                        <div class="h-100" data-toggle="modal" data-target="#modal-products">
                            <h4 class="f-600 text-center">Our<br>products<div class="pt-1">
                                    <i class="mdi mdi-plus-circle d-inline-block"></i>
                                </div>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-2 bal-ispin bal-pbox">
                        <div class="h-100">
                            <h4 class="f-600 text-center">Career<br>opportunities<div class="pt-1">
                                    <i class="mdi mdi-plus-circle d-inline-block"></i>
                                </div>
                            </h4>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-2 bal-ispin bal-pbox">
                        <a href="../about-us/" class="text-white">
                            <div class="h-100">
                                <h4 class="f-600 text-center">Our<br>company<div class="pt-1">
                                        <i class="mdi mdi-plus-circle d-inline-block"></i>
                                    </div>
                                </h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HOME -->

<section class="pt-6 pb-6 bw-bg bg-default">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pb-4" data-aos="fade-up" data-aos-duration="600">
                <h1 class="f-600 text-white">Who we are</h1>
                <p class="pb-2 text-white">For us Mondays are interesting and Fridays and weekends are boring.. Silly
                    right!! But we mean it. We are bunch of enthusiasts who feel we are here in this beautiful world to
                    solve some of the complex problems using cutting edge technologies.</p>
                <p class="pb-2 text-white">Team comes with a mix of technology experience which helps us in
                    collaborating and developing something great. Try us to feel better.</p>
                <a href="../about-us/" class="text-white">About our Company <i class="mdi mdi-arrow-right"></i></a>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                <h1 class="f-600 text-white">What can we do for you</h1>
                <p class="pb-2 text-white">Virtualization and Cloud computing are at the core of all that we do at VNC.
                    Our main goal is finding smart ways of using technology that will help build a better tomorrow for
                    everyone, everywhere.</p>
                <p class="pb-2 text-white">Any technology that makes users life simple, we have expertise in it. We
                    understand that new technologies evolve to fix many of the complex problems and we learn and use
                    them as torch bearers. Cloud, DevOps, Test and Process Automation, UI/UX and Web technologies.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cards -->
<section class="bw-hovercards bg-white bw-bg">
    <div class="container pt-4 pb-6">
        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box text-center">
                    <h6 class="title-sub-title mb-0">Our Projects</h6>
                    <h3 class="bal-title-heading mt-4">Navigate your Next</h3>
                    <p class="">We bring you powerful advantages to navigate your digital transformation</p>
                </div>
            </div>
        </div>
        <!-- End Title -->
        <section class="bw-featured-cards">
            <div class="bw-featured-cards_bottom bw-featured-hcards-footer">
                <div class="bw-hovercards-group">

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 bw-hcard-bwstyle2">
                            <div class="hcard-block bw-2 h-100">
                                <div class="bw-hovercards-content">
                                    <a class="bw-hovercards-title">V-Pulse</a>
                                    <p class="bw-hcard-p pb-4">An automated cloud based solution to manage hospitals and
                                        patient EHR.</p>
                                    <a class="btn btn-primary" href="../v-pulse/">Know More</a>
                                </div><img src="/img/home/vpulse-promo.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 bw-hcard-bwstyle2">
                            <div class="hcard-block bw-2 h-100">
                                <div class="bw-hovercards-content">
                                    <a class="bw-hovercards-title">Life Bank</a>
                                    <p class="bw-hcard-p pb-4">Life Bank helps in getting the life saver donors of blood
                                        in your neighborhood.</p>
                                    <a href="https://play.google.com/store/apps/details?id=com.vncdigital.lifebank"
                                        target="_blank" class="btn btn-primary">Download App</a>
                                </div><img src="/img/home/lifebank-promo.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 bw-hcard-bwstyle2">
                            <div class="hcard-block bw-2 h-100">
                                <div class="bw-hovercards-content">
                                    <a class="bw-hovercards-title">Homebotix</a>
                                    <p class="bw-hcard-p pb-4">Sit back laid in your couch and control everything in
                                        your sweet home.</p>
                                    <a class="btn btn-primary" href="../homebotix/">Know More</a>
                                </div><img src="/img/home/homebotix-img.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-8 bw-hcard-bwstyle2">
                            <div class="hcard-block bw-2 h-100">
                                <div class="bw-hovercards-content">
                                    <a class="bw-hovercards-title">Blog</a>
                                    <p class="bw-hcard-p pb-4">Our experts discuss the key drivers of technology
                                        transformation and accelerating innovation, and other various VNC Insights.</p>
                                    <a class="btn btn-primary" href="https://www.vncdigitalservices.com/blog/"
                                        target="_blank">View our Blogs</a>
                                </div><img src="/img/home/blog.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 bw-hcard-bwstyle2">
                            <div class="hcard-block bw-2 h-100">
                                <div class="bw-hovercards-content">
                                    <a class="bw-hovercards-title">Case Studies</a>
                                    <p class="bw-hcard-p pb-4">Our Research methods involving an up-close, in-depth, and
                                        detailed examination of various cases.</p>
                                    <a class="btn btn-primary" href="https://www.vncdigitalservices.com/case-studies/"
                                        target="_blank">View Case Studies</a>
                                </div><img src="/img/home/case-studies.jpg" alt="img">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End of Cards -->

    </div>
</section>


<!-- Clients and Partners -->
<section class="section bg-white bw-bg" style="background-image: url('/img/home/clients-partner-banner.jpg');">
    <div class="container pt-2 pb-2">
        <div class="overflow-hidden">

            <div class="row justify-content-lg-between">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="mb-4" style="max-width: 150px;">
                        <img class="img-fluid" src="/img/vnclogo-sm.png" alt="logo">
                    </div>

                    <div class="mb-5 ">
                        <h2 class="bal-title-heading">Our Success Stories -<br> H-Bot and ChatBot</h2>
                        <p class="bal-article-textbody">Explore and learn more about our Success in Deploying H-Bot, Our
                            Offering to Hospitals, and ChatBot, A Chat Assistant that communicates with in through
                            Natural Language.</p>
                    </div>

                    <a class="btn btn-default transition-3d-hover px-4" data-toggle="modal"
                        data-target="#modal-success">View Our Success Stories</a>
                </div>

                <div class="col-lg-6">
                    <div class="row mt-4 mr-2">
                        <div class="col-sm-6 mb-5 mb-sm-0 col-6" data-aos="fade-up" data-aos-duration="600">
                            <!-- Article Item -->
                            <a class="partner-btn" data-toggle="modal" data-target="#modal-clients">
                                <img class="img-fluid w-100 rounded" src="/img/clients.jpg" alt="Image Description">
                                <div class="shadow-none py-4">
                                    <h4 class="bal-artice-texttitle f-600">Clients</h4>
                                    <p class="bal-article-textbody">View All our Valuable Clients</p>
                                    <span class="bal-article-learnmore">View Our Clients <i
                                            class="fas fa-angle-right fa-sm ml-1"></i></span>
                                </div>
                            </a>
                            <!-- End Article Item -->
                        </div>

                        <div class="col-sm-6 col-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                            <!-- Article Item -->
                            <a class="partner-btn" data-toggle="modal" data-target="#modal-partners">
                                <img class="img-fluid w-100 rounded" src="/img/partners.jpg" alt="Image Description">
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


<!-- START COUNTER -->
<section class="section bg-light pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="counter-info mt-4">
                    <h3 class="bal-title-heading">Focused, with a specialized skillset</h3>
                    <p class="text-muted mt-4">Our main goal is finding smart ways of using technology that will help
                        build a better tomorrow for everyone, everywhere.</p>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bw-counter-box mt-4">
                            <div class="media box-shadow bg-white p-4 rounded">
                                <div class="counter-icon mr-3">
                                    <i class="mdi mdi-heart text-primary h2"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="counter-count"> <span class="counter-value" data-count="370">100</span>
                                        +</h3>
                                    <h5 class="mt-2 mb-0 f-17">Happy Clients </h5>
                                    <p class="text-muted mb-0 mt-2 f-15">All around the World
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="bw-counter-box mt-4">
                            <div class="media box-shadow bg-white p-4 rounded">
                                <div class="counter-icon mr-3">
                                    <i class="mdi mdi-progress-download text-primary h2"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="counter-count"> <span class="counter-value" data-count="2">10</span> M
                                    </h3>
                                    <h5 class="mt-2 mb-0 f-17">Download </h5>
                                    <p class="text-muted mb-0 mt-2 f-15">From All Platfroms
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="bw-counter-box mt-4">
                            <div class="media bg-white p-4 rounded">
                                <div class="counter-icon mr-3">
                                    <i class="mdi mdi-emoticon-outline text-primary h2"></i>
                                </div>
                                <div class="media-body pl-2">
                                    <h3 class="counter-count"> <span class="counter-value"
                                            data-count="45000">1000</span> +
                                    </h3>
                                    <h5 class="mt-2 mb-0 f-17">Happy Users </h5>
                                    <p class="text-muted mb-0 mt-2 f-15">All around the World
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END COUNTER -->

<section class="call-to-action">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-9">
                <div class="call-to-action_content text-lg-left">
                    <h3 class="h3 cta-title">Ready To Begin Your Journey With Us ?</h3>
                    <p class="p cta-pragraph">Just submit your contact details and we will be in touch shortly. </p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-lg-right"><a data-toggle="modal" data-target="#modal-quote"
                    class="btn-basic">Contact Us</a></div>
        </div>
    </div>
</section>
@include('main/layouts/modals')
@include('main/layouts/footer')
