<!--  MODAL START  -->
<div class="modal fade" id="modal-quote" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content pl-4">
            <a type="button" class="modal-close" data-dismiss="modal" aria-label="Close"><i
                    class="mdi mdi-close-circle"></i>
            </a>
            <div class="row justify-content-center pt-4 pr-4">
                <div class="col-lg-8 text-center">
                    <div class="mb-5">
                        <h3 class="mb-2 bal-title-heading">Contact Us</h3>
                        <p>Just submit your contact details and well be in touch with you shortly.</p>
                    </div>
                </div>
            </div>

            <div class="container justify-content-center row pb-4">
                <div class="col-12">
                    <div class="custom-form">
                        <div id="message"></div>
                        <form method="post" action="/bw-phpmailer/send_mail.php" name="q-form" id="q-form">
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
                                        <select class="form-control" id="test">
                                            <option hidden="true">
                                                <?php if (!empty($getaquote)) echo $getaquote; else if (!empty($bw_title)) echo $bw_title; else echo "General Enquiry";?>
                                            </option>
                                            <option class="text-dark">Devops</option>
                                            <option class="text-dark">Robotic Process Automation</option>
                                            <option class="text-dark">AI and ML</option>
                                            <option class="text-dark">Internet of Things</option>
                                            <option class="text-dark">Full Stack Development</option>
                                            <option class="text-dark">PhP</option>
                                            <option class="text-dark">Testing as a Service</option>
                                            <option class="text-dark">Lambda</option>
                                            <option class="text-dark">Alexa Skills</option>
                                            <option class="text-dark">Extract, Transform, Load</option>
                                            <option class="text-dark">Cloud Computing</option>
                                            <option class="text-dark">Big Data Migration</option>
                                            <option class="text-dark">Temenos- T24</option>
                                        </select>
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
</div>
<!--  MODAL END  -->

<footer class="position-relative">
    <div class="bw-footer">
        <hr>
        <div class="container">
            <div class="bw-f-arrow" data-toggle="collapse" href="#bw-collapse" role="button"><i data-toggle="popover"
                    data-content="Toggle Footer" data-trigger="hover" data-placement="right"
                    class="mdi mdi-arrow-down"></i></div>


            <div class="collapse" id="bw-collapse">
                <div class="row pt-4">
                    <div class="col-lg-4 col-12 mb-2">
                        <h5 class="f-600">VNC Digital Services</h5>
                        <p class="mt-2 bw-f-brand-p">We are a flock of technology enthusiasts who are on a mission to
                            solve some of the complex problems our clients are facing.</p>
                        <ul class="bw-f-socials nav">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="https://www.facebook.com/vncdigiservices/"
                                    target="_blank"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.linkedin.com/company/vncdigital/"
                                    target="_blank"><i class="mdi mdi-linkedin"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/vnc-digital" target="_blank"><i
                                        class="mdi mdi-github"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.youtube.com/channel/UCR80tiJQ65YstEZBZtjxsEQ"
                                    target="_blank"><i class="mdi mdi-youtube"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/vncdigitalservices/"
                                    target="_blank"><i class="mdi mdi-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://twitter.com/DigitalVnc" target="_blank"><i
                                        class="mdi mdi-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-2">
                        <h6 class="bw-f-heading mb-3">Company</h6>
                        <ul class="list-unstyled">
                            <li><a href="/about-us/">About Us</a></li>
                            <li><a href="/leadership/">Leadership</a></li>
                            <li><a href="/contact/">Contact</a></li>
                            <li><a href="/webmail/">Webmail</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-2">
                        <h6 class="bw-f-heading mb-3">More</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Training</a></li>
                            <li><a href="https://www.vncdigitalservices.com/blog/" target="_blank">Blog</a></li>
                            <li><a href="https://www.vncdigitalservices.com/case-studies/" target="_blank">Case
                                    Studies</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-4">
                        <h6 class="bw-f-heading mb-3">Products</h6>
                        <ul class="list-unstyled">
                            <li><a href="/v-pulse/">V-Pulse</a></li>
                            <li><a href="/homebotix/">Homebotix</a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.vncdigital.lifebank"
                                    target="_blank">Life Bank</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-4 d-lg-none">
                        <h6 class="bw-f-heading mb-3">Information</h6>
                        <ul class="list-unstyled">
                            <li><a href="/terms-and-conditions/">Terms and Conditions</a></li>
                            <li><a href="/privacy-policy/">Privacy Policies</a></li>
                            <li><a href="/sitemap/">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>

            <div class="row align-items-center justify-content-md-between pt-4 pb-4 bw-copyright">
                <div class="col-lg-6 col-12">
                    <div class="bw-copyright-text text-md-left">©2020 VNC Digital Services.<br> <small
                            class="text-muted" style="font-size:8px;">Designed and Developed by <a
                                href="https://www.balworld.in">Bal Zankar</a>.</small></div>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <ul class="nav justify-content-lg-end justify-content-start">
                        <li class="nav-item"><a class="nav-link" href="/terms-and-conditions/">Terms and
                                Conditions</a></li>
                        <li class="nav-item"><a class="nav-link" href="/privacy-policy/">Privacy Policies</a></li>
                        <li class="nav-item"><a class="nav-link" href="/sitemap/">Sitemap</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="bw-brandlogo" class="bw-brandlogo bw-hide">
    <div class="container">
        <img class="bw-brandlogo-img" src="/img/vnclogo.png">
    </div>
</div>

<div class="bw-cookie-banner" style="display: none">
    <p>We use <span class="text-primary">cookies</span> to deliver the Best User Experience.</p>
    <button class="bw-cookie-close"><i class="mdi mdi-close"></i></button>
</div>


<script src="/main/js/pluginson3step.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>

<script src="/main/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="/main/js/main.js"></script>
<script>
$('.bw-f-arrow').click(function() {
    $("i", this).toggleClass("mdi-arrow-down mdi-arrow-up");
});
</script>
<script>
AOS.init();
</script>

<script>
$(document).scroll(function() {

    myID = document.getElementById("bw-brandlogo");

    var myScrollFunc = function() {
        var y = window.scrollY;
        if (y >= 100) {
            myID.className = "bw-brandlogo bw-show"
        } else {
            myID.className = "bw-brandlogo bw-hide"
        }
    };

    window.addEventListener("scroll", myScrollFunc);
});
</script>
<script>
if (localStorage.getItem('cookieSeen') != 'shown') {
    $(".bw-cookie-banner").delay(2000).fadeIn();
    localStorage.setItem('cookieSeen', 'shown')
}

$('.bw-cookie-close').click(function(e) {
    $('.bw-cookie-banner').fadeOut();
});
</script>
<script>
$(function() {
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        callbacks: {

            open: function() {
                $('body').css('overflow', 'hidden');
            },

            close: function() {
                $('body').css('overflow', '');
            },

        }
    });
});
</script>

<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
$(function() {
    $('[data-toggle="popover"]').popover();
});
</script>

<script>
$('.bw-services-loop').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 1500,
    autoplayHoverPause: true,
    navText: [
        '<i class="mdi mdi-arrow-left" aria-hidden="true"></i>',
        '<i class="mdi mdi-arrow-right" aria-hidden="true"></i>'
    ],
    navContainer: '.bw-hovercards-group .custom-nav',
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})
</script>

</body>

</html>
