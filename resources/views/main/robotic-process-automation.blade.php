<?php
$bw_title='Robotic Process Automation'; ?>
@include('main/layouts/header')

<section class="bal1-banner-devops">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-8 col-md-7">
                <div class="banner-content">
                    <h1 class="heading banner-title banner-title-b">RPA</h1>
                    <p class="p banner-subtitle">The Technology that leads the world</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bw-title-strip bg-primary">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-9">
                <div class="">
                    <h3 class="strip-title text-white">Meet Our Bots !</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="col-12 mb-6 bw-plr-0" data-aos="fade-up" data-aos-duration="600">
            <div class="bw-textimg_group">
                <div class="row justify-content-between">
                    <div class="col-12 order-2 order-lg-1 bs-imgtext-intro">
                        <h1 class="f-600">Automated Chatbot</h1>
                        <p>The Chatbot is an automated computer response system, which conducts a conversation via
                            auditory or textual methods. It provides information to the customer in automated fashion. A
                            predefined questionnaire with prepared answer is loaded in the process. Chatbot are
                            typically used in dialog systems for various practical purposes including customer service
                            or information acquisition. Chatbot applications streamline interactions between people and
                            services, enhancing customer experience. At the same time, they offer companies new
                            opportunities to improve the customer’s engagement process and operational efficiency by
                            reducing the typical cost of customer service.</p>
                        <p>A pre-defined and configurable questioner along with answers in Blue Prism are used to
                            provide the service information. The bot wait for customer response first. Then it ask for
                            User Name and email id which will help the bot to send the content details the user seek, in
                            email. Based on organizational need the questioner need to be updated so that the user is
                            provided with ample information, on his request.</p>
                        <a class="btn btn-primary">RPA Cababilities (White Paper)</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-12 mt-6 bw-plr-0" data-aos="fade-up" data-aos-duration="600">
            <div class="bw-textimg_group">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-4">
                        <img class="img-fluid pb-4" src="/img/robotic-process-automation/chatbot-for-test.jpg"
                            alt="Image">
                    </div>
                    <div class="col-12 col-lg-8 bs-imgtext-intro">
                        <h1>Chatbot for test data management</h1>
                        <p>These process automate the manual steps to extract test data from database based on chosen
                            fields by customer. The chatbot feature integrated in this system retrieve the requirement
                            from the customer. It then formulate the request in database readable form and send the
                            request to database. The result returned by the database query will be read interpreted by
                            the bot, make necessary modification as per defined rule and then send the data to the
                            customer email which will be provided by the user at the beginning of the process.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="section">
    <div class="container">
        <div data-aos="fade-up" data-aos-duration="600">
            <h1 class="f-600">Reversing of vehicle contract</h1>
            <p class="pb-2">The usecase scope is to develop RPA Blue Prism processes for Reversing Vehicle Contract is
                to automate the Reversing vehicle registration before reallocating to another user. The process will
                reverse the service contract and cancel warranty claims, then reverse the vehicle registration. This
                automated process will help customer to achieve Reversing Vehicle request faster and provide a better
                service to the organization while freeziing up some office staff capacity.</p>
            <h1 class="f-600 pt-4">InsuranceBot</h1>
            <p class="pb-2">The scope of this project is to develop an automated process in order to get the Final bill
                payments for discharged patients and approximate bill for non-discharged patients in V-Pulse hospital
                management application using RPA Blue Prism.</p>
            <div class="d-flex justify-content-center">
                <img class="pb-4 img-fluid" src="/img/robotic-process-automation/insurance-bot.png" alt="Image">
            </div>
        </div>
        <hr>
        <div data-aos="fade-up" data-aos-duration="600">
            <h1 class="f-600 pt-4">Invoice Generation</h1>
            <p class="pb-2">The use case of this project is to develop RPA Blue Prism Process for creating a bot which
                extracts a snapshot of account payables and receviables from the invoices raised by client and to
                clients.</p>
            <div class="d-flex justify-content-center">
                <img class="pb-4 img-fluid" src="/img/robotic-process-automation/invoice-generation.png" alt="Image">
            </div>
        </div>
    </div>
</section>

<section class="call-to-action">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-7">
                <div class="call-to-action_content text-lg-left">
                    <h3 class="h3 cta-title">Would you like start your Work with Us ?</h3>
                    <p class="p cta-pragraph">Just submit your contact details and we will be in touch shortly. </p>
                </div>
            </div>
            <div class="col-12 col-lg-5 text-lg-right">
                <a data-toggle="modal" data-target="#modal-quote" class="btn-basic mb-2">Know More</a>
                <a data-toggle="modal" data-target="#modal-quote" class="btn-basic mb-2">Contact Us</a>
            </div>
        </div>
    </div>
</section>

@include('main/layouts/footer')
