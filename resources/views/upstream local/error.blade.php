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

        <!-- Error Area Start -->
        <div class="error ptb-100 border-b">
            <div class="container">
                <div class="error-content">
                    <img src="assets/images/error.png" alt="image">
                    <h4>Sorry there are no openings for now, please check back some other time.</h4>


                    <a class="default-button" href="/">Take Me Home <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- Error Area End -->
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
