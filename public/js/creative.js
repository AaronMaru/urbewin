(function($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 57)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
            $("#logo").attr('src', 'images/new_logo/blue.png');
        } else {
            $("#mainNav").removeClass("navbar-shrink");
            $("#logo").attr('src', 'images/new_logo/white.png');
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    if ($(window).width() > 960) {
        $(window).scroll(navbarCollapse);
    }

    // Magnific popup calls
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });

    $('#locale').change(function(){
        $('#language').submit();
    });

    var links = $('.navbar ul li a');
    $.each(links, function (key, va) {
        if (va.href == document.URL) {
            $(this).addClass('active');
        }
    });

    if ($(window).width() < 960) {
       $('#logo').attr('src', 'images/new_logo/blue.png');
       $('.remove').remove();
       $('#footer').addClass('d-flex justify-content-center')
    }

})(jQuery); // End of use strict
