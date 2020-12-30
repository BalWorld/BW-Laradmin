<?php
$bw_title='Contact';
$getaquote='General Enquiry'; ?>
@include('main/layouts/header')

<section class="contact-us">
    <div class="contact-infomation">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d497666.90403699415!2d77.7307!3d12.9704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d295c4318d10383!2sVNC%20DIGITAL%20SERVICES!5e0!3m2!1sen!2sus!4v1606808506052!5m2!1sen!2sus"
            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <div class="container">
            <div class="infomation-box_wrapper">
                <div class="infomation-box">
                    <h5 class="mb-2 font-bebas" style="font-size:40px">Contact Us</h5>
                    <p>Are you looking for technical assistance to your company needs?
                        <br>Give us a shout and we are there at your service. Feel free to reach us Out.
                    </p>
                    <ul class="bw-contact-ul">
                        <li> <i class="mdi mdi-phone"></i><a href="tel:+918068281800"
                                class="text-dark">+918068281800</a></li>
                        <li> <i class="mdi mdi-mail"></i><a href="mailto:info@vncdigital.com"
                                class="text-dark">info@vncdigital.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- START CONTACT -->
<section class="section">
    <div class="container" data-aos="fade-up" data-aos-duration="600">

        <div class="row">
            <div class="col-lg-12">
                <div class="title-box text-center">
                    <h6 class="title-sub-title mb-0">Contact us</h6>
                    <h3 class="bal-title-heading mt-4">Have a project on mind? Contact Us </h3>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="bw-contact-info p-4 mt-4 mb-4">
                    <h5 class="bw-title-text">Contact Details</h5>
                    <p>Leave your Questions, Valuable Comments and Suggestions Here.</p>
                    <div class="mt-4">
                        <div class="media">
                            <i class="mdi mdi-home h4"></i>
                            <div class="media-body pl-3">
                                <h5 class="mt-0 f-17">Head Office</h5>
                                <p class="mb-0">Whitefield, Bangalore, Karnataka, India</p>
                            </div>
                        </div>

                        <div class="mt-4 pt-1">
                            <div class="media">
                                <i class="mdi mdi-mail h4"></i>
                                <div class="media-body pl-3">
                                    <h5 class="mt-0 f-17">Email Us</h5>
                                    <p class="mb-0"><a href="mailto:info@vncdigital.com"
                                            class="text-white">info@vncdigital.com</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-1">
                            <div class="media">
                                <i class="mdi mdi-phone h4"></i>
                                <div class="media-body pl-3">
                                    <h5 class="mt-0 f-17">Call Support</h5>
                                    <p class="mb-0">
                                        <a href="tel:+918073959200" class="text-white">+918073959200</a>
                                    </p>
                                    <p class="mb-0">
                                        <a href="tel:+918073959200" class="text-white">+918073959200</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="pl-0 pl-lg-2 mt-4">
                    <h5 class="font-poppins f-600">Send a Message</h5>

                    <div class="custom-form mt-3">
                        <div id="message"></div>
                        <form method="post" action="../bw-phpmailer/send_mail.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">First Name</label>
                                        <input name="bwname" id="name" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Last Name</label>
                                        <input name="bwlname" id="lastname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Email Address</label>
                                        <input name="bwemail" id="email" class="form-control" type="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Subject</label>
                                        <input name="bwsubject" id="subject" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Your Message</label>
                                        <textarea name="bwmessage" id="message" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-3 text-right">
                                    <input id="submit" name="send" class="submitBnt btn btn-default btn-round"
                                        value="Send Message" type="submit">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- END CONTACT -->

<section class="bw-icon-text bg-light">
    <div class="container">
        <div class="pt-2 pb-2">
            <h1 class="f-600">Our Locations</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bw-icon-text-group">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-content">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d497666.90403699415!2d77.7307!3d12.9704!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d295c4318d10383!2sVNC%20DIGITAL%20SERVICES!5e0!3m2!1sen!2sus!4v1606808506052!5m2!1sen!2sus"
                                        width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>

                                    <h5 class="bw-icon-text-content--title pt-4">Corporate Office</h5>
                                    <p class="bw-icon-text-content--pragraph">#306B, VNC Digital Services, Brigade IRV
                                        Centre, Nallurhalli Road, Whitefield, Bengaluru, Karnataka 560066</p>
                                    <p class="bw-icon-text-content--pragraph">Phone: <a
                                            href="tel:+918068281800">+918068281800</a></p>
                                    <p class="bw-icon-text-content--pragraph">Email: <a
                                            href="mailto:info@vncdigital.com">info@vncdigital.com</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-6">
                            <div class="bw-icon-text_block">
                                <div class="bw-icon-text-content">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d487240.86298904644!2d78.387251!3d17.432448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91579e2272b5%3A0xe40da161c6d3916c!2siLabs%20Centre%2C%20Inorbit%20Mall%20Rd%2C%20Silpa%20Gram%20Craft%20Village%2C%20HITEC%20City%2C%20Hyderabad%2C%20Telangana%20500081%2C%20India!5e0!3m2!1sen!2sus!4v1606808594298!5m2!1sen!2sus"
                                        width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>

                                    <h5 class="bw-icon-text-content--title pt-4">Hyderabad Centre</h5>
                                    <p class="bw-icon-text-content--pragraph"> Oval Building, Centre, Plot no. 18, iLabs
                                        Hyderabad Technology Park,, Inorbit Mall Rd, Madhapur, Hyderabad, Telangana
                                        500081</p>
                                    <p class="bw-icon-text-content--pragraph">Phone: <a
                                            href="tel:+918073959200">+918073959200</a></p>
                                    <p class="bw-icon-text-content--pragraph">Email: <a
                                            href="mailto:hr@vncdigital.com">hr@vncdigital.com</a></p>
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
                    <h3 class="h3 cta-title">Interested in our Services ?</h3>
                    <p class="p cta-pragraph">Just submit your contact details and we will be in touch shortly. </p>
                </div>
            </div>
            <div class="col-12 col-lg-3 text-lg-right"><a data-toggle="modal" data-target="#modal-quote"
                    class="btn-basic">Contact Us</a></div>
        </div>
    </div>
</section>

@include('main/layouts/footer')
