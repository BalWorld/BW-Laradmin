<?php
$bw_title='V-Pulse'; ?>
@include('main/layouts/header')

<section class="bal1-banner-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-md-7">
                <div class="banner-content">
                    <h1 class="heading banner-title banner-title-b">V-Pulse</h1>
                    <p class="p banner-subtitle">Path-breaking cloud-based application with revolutionary capabilities
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.owl-carousel .owl-stage-outer {
    padding-bottom: 10px;
    margin-bottom: -40px;
}

@media only screen and (max-width: 600px) {
    .owl-carousel .owl-stage-outer {
        padding-bottom: 20px;
    }
}

@media only screen and (max-width: 990px) {
    .owl-carousel .owl-stage-outer {
        padding-bottom: 30px;
    }
}

</style>
<section>
    <div class="container">
        <div class="loop owl-carousel owl-theme pb-4">
            <div class="item pb-0">
                <img src="/img/v-pulse/1.png" alt="img">
            </div>
            <div class="item pb-0">
                <img src="/img/v-pulse/2.png" alt="img">
            </div>
            <div class="item pb-0">
                <img src="/img/v-pulse/3.png" alt="img">
            </div>
            <div class="item pb-0">
                <img src="/img/v-pulse/4.png" alt="img">
            </div>
            <div class="item pb-0">
                <img src="/img/v-pulse/5.png" alt="img">
            </div>
            <div class="item pb-0">
                <img src="/img/v-pulse/6.png" alt="img">
            </div>
            <div class="item pb-0">
                <img src="/img/v-pulse/7.png" alt="img">
            </div>
        </div>
    </div>
</section>
<section class="pt-2 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-duration="600">
                <p class="pb-2">A patient life cycle in a hospital has lot of manual effort and documentation. Our
                    application, V-PULSE, helps in automating this effort thereby streamlining the process. V-PULSE is
                    an easy to use, affordable and powerful Software for hospitals to perform the patient life cycle
                    activities and manage the hospital operational activities. It facilitates and improves the process
                    of patient care via the generation and securing electronic health records.</p>
                <p>
                    The other advantage with V-PULSE is that we are on cloud, apart from being on premise, which helps
                    the hospitals spend less on the infrastructure and security, which in turn reduces the cost burden
                    on the patients. This is has been our core ideology – Provide low-cost reliable automation of the
                    existing systems.</p>
            </div>
        </div>
    </div>
</section>

<hr>
<section class="pt-0 pb-2">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="600">
            <h1 class="f-600 pt-4">Our V-PULSE application helps the departments of Hospital like:</h1>
            <div class="d-flex justify-content-center">
                <img class="pb-4 pt-4 img-fluid" src="/img/v-pulse/v-pulse.jpg" alt="Image">
            </div>
        </div>
    </div>
</section>
<hr>
<section class="pt-4 pb-4 mt-4">
    <div class="container">
        <h1 class="f-600">Hospitals using our Application</h1>
        <p class="pb-2 w-50">V-PULSE, helps in automating this effort thereby streamlining the EHR Process. </p>
        <div class="row pl-3" data-aos="fade-up" data-aos-duration="600">

            <div class="container row client-img-container pb-4 mb-4">
                <div class="col-4 col-lg-2 text-center">
                    <img src="/img/v-pulse/clients/little-blossom.png" alt="partner" class="img-fluid img-client">
                </div>
                <div class="col-4 col-lg-2 text-center">
                    <img src="/img/v-pulse/clients/udhava-kukatpally.png" alt="partner" class="img-fluid img-client">
                </div>
                <div class="col-4 col-lg-2 text-center">
                    <img src="/img/v-pulse/clients/santharam.png" alt="partner" class="img-fluid img-client">
                </div>
                <div class="col-4 col-lg-2 text-center">
                    <img src="/img/v-pulse/clients/sree-nursing-home.png" alt="partner" class="img-fluid img-client">
                </div>
                <div class="col-4 col-lg-2 text-center">
                    <img src="/img/v-pulse/clients/udbhava-miyapur.png" alt="partner" class="img-fluid img-client">
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
                    <h3 class="h3 cta-title">Ready To Begin Your Journey With Us ?</h3>
                    <p class="p cta-pragraph">Just submit your contact details and we will be in touch shortly. </p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-lg-right"><a data-toggle="modal" data-target="#modal-quote"
                    class="btn-basic">Contact Us</a></div>
        </div>
    </div>
</section>


@include('main/layouts/footer')
<script>
$('.loop').owlCarousel({
    center: true,
    items: 1,
    loop: true,
    margin: 10,
    responsive: {
        600: {
            items: 1
        }
    }
});
</script>
