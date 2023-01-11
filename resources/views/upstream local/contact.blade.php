<!DOCTYPE html>
<html lang="zxx">

<x-header/>
    <body>

        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+2348038430946", // WhatsApp number
                    call_to_action: "Message us", // Contact Us
                    position: "left", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        </script>

        <!-- Navigation area start -->
        <x-nav/>
        <!-- Navigation area end -->


        <!-- Uni Banner Area Start -->
        <div class="uni-banner">
            <div class="container">
                <div class="uni-banner-text-area">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- Uni Banner Area End -->

        <!-- Contact Area Start -->
        <div class="contact ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="contact-card-area">
                            <div class="row g-4 justify-content-center">
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="contact-card">
                                        <i class="fas fa-phone-alt"></i>
                                        <h5>Phone Number</h5>
                                        <p><a href="tel:+234 81 12020002">+2348112020002</a></p>
                                    <p><a href="tel:+2348038430946">+2348038430946</a></p>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="contact-card">
                                        <i class="far fa-envelope"></i>
                                        <h5>Our Email</h5>
                                        <p><a href="mailto:info@maxupstreamenergy.com">

                                            <span class="">info@maxupstreamenergy.com</span>
                                        </a> <br>
                                        <a href="mailto:hello@maxupstreamenergy.com">

                                            <span class="">hello@maxupstreamenergy.com</span>
                                        </a>
                                       </p>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="contact-card">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h5>Our Location</h5>
                                        <p>Block 104, Plot 6B Olajide Olabanji Street, <br> Off Adewunmi Adebimpe Drive, Lekki 1, Lagos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-page-form-area pl-20 pt-30">
                            <div class="default-section-title">
                                <span>Get In Touch</span>
                                <h3>Add Your Address In The Form Below</h3>
                                <p>If you have any inquiry or will like to send a project brief, kindly contact us with the details below;</p>
                            </div>
                            <div class="contact-form-text-area">
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name" id="name" required data-error="Please enter your name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" id="email" required data-error="Please enter your Email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" id="phone_number" required data-error="Please enter your phone number">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" class="form-control" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30" rows="5" required data-error="Please enter your message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-12">
                                            <button class="default-button" type="submit"><span>Send Message</span></button>
                                            <div id="msgSubmit" class="h6 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area end -->


        <!-- Footer Area Start -->
        <x-footer/>
        <!-- Footer Area End -->

    <!-- Copyright area start -->
    <div class="copyright black-bg">
        <div class="container">
            <p>© Maxupstream Energy Service Limited Design by <a href="https://buzyde.com/" target="_blank">Buzydev</a></p>
        </div>
    </div>
    <!-- Copyright area end -->

    <div class="go-top"><i class="fas fa-arrow-up"></i></div>

    <!-- Link of JS files -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/owl.carousel2.thumbs.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/TweenMax.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/ajaxchimp.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
