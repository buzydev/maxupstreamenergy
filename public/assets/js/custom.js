(function ($) {
    "use strict";
    // for sticky navbar
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $(".navbar-area").addClass("sticky");
        } else {
            $(".navbar-area").removeClass("sticky");
        }
    });
    $(window).scroll(function () {
        if ($(window).scrollTop() > 0) {
            $(".navbar-area .main-nav").addClass("sticky");
        } else {
            $(".navbar-area .main-nav").removeClass("sticky");
        }
    });

    // Mean Menu
    $(".mean-menu").meanmenu({
        meanScreenWidth: "1199",
    });

    $(".main-banner-slider-area").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: false,
        margin: 0,
        items: 1,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
    });

    $(".home-banner-slider-area").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: false,
        margin: 0,
        items: 1,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    });

    $(".banner-slider-area").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: false,
        margin: 0,
        items: 1,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
    });

    $(".service-slider-area").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1100: {
                items: 4,
            },
            1400: {
                items: 4,
            },
        }
    });

    $(".project-slider-area").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1400: {
                items: 3,
            },
        }
    });

    $(".testimonial-slider-area").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: false,
        margin: 25,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        }
    });

    $(".partner-slider-area").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: false,
        margin: 25,
        responsive: {
            0: {
                items: 2,
            },
            500: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        }
    });

    $(".project-slider-area-2").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: true,
        margin: 20,
        autoHeight: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
        }
    });

    $(".team-slider-area-2").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: false,
        margin: 20,
        nav: true,
        center: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        }
    });

    $(".testimonial-slider-area-2").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: false,
        margin: 20,
        nav: true,
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1500: {
                items: 2.5,
            },
        }
    });

    $(".testimonial-slider-area-3").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 2,
            },
        }
    });

    $(".service-slider-area-3").owlCarousel({
        autoplayHoverPause: true,
        autoplaySpeed: 2000,
        autoplay: true,
        loop: true,
        dots: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        }
    });


    // Video PopUp
    $(".video-popup").magnificPopup({
        type: "iframe",
    });
    
    // language select
    $("select").niceSelect();

    // Subscribe form
	$(".newsletter-form").validator().on("submit", function (event) {
		if (event.isDefaultPrevented()) {
			// handle the invalid form...
			formErrorSub();
			submitMSGSub(false, "Please enter your email correctly.");
		} else {
			// everything looks good!
			event.preventDefault();
		}
	});
	function callbackFunction (resp) {
		if (resp.result === "success") {
			formSuccessSub();
		}
		else {
			formErrorSub();
		}
	}
	function formSuccessSub(){
		$(".newsletter-form")[0].reset();
		submitMSGSub(true, "Thank you for subscribing!");
		setTimeout(function() {
			$("#validator-newsletter").addClass('hide');
		}, 4000)
	}
	function formErrorSub(){
		$(".newsletter-form").addClass("animated shake");
		setTimeout(function() {
			$(".newsletter-form").removeClass("animated shake");
		}, 1000)
	}
	function submitMSGSub(valid, msg){
		if(valid){
			var msgClasses = "validation-success";
		} else {
			var msgClasses = "validation-danger";
		}
		$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
	}
	$(".newsletter-form").ajaxChimp({
		url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
		callback: callbackFunction
	});

    // Go to Top
    $(function () {
        // Scroll Event
        $(window).on("scroll", function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $(".go-top").addClass("active");
            if (scrolled < 600) $(".go-top").removeClass("active");
        });
        // Click Event
        $(".go-top").on("click", function () {
            $("html, body").animate({ scrollTop: "0" }, 500);
        });
    });
    
    //Barfiller 
    $(".progress-bar-area-2").appear(function () {
        $('#bar1').barfiller({
            duration: 2500,
        });
        $('#bar2').barfiller({
        duration: 2500,
        });
        $('#bar3').barfiller({
        duration: 2500,
        });
        $('#bar4').barfiller({
        duration: 2500,
        });
    });

    $(".odometer").appear(function (e) {
        var odo = $(".odometer");
        odo.each(function () {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });

    // WOW Animation JS
    if ($(".wow").length) {
        var wow = new WOW({
            mobile: false,
        });
        wow.init();
    }

})(jQuery);