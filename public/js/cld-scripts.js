$(document).ready(function() {
    var searchIcon = $('.search-icon');
    var searchInput = $('.upper-search');
    searchIcon.on('click', function() {
        searchInput.slideToggle();
    });

    // doctors page
    var advance_srch_button = $('.advance-srch-button');
    advance_srch_button.on('click', function() {
        $('#bannerWrap').slideToggle();
    });

    // temporary off
    function abc() {
        var slideBody = $('.cld-popup');
        slideBody.fadeOut(300);
    }
    setInterval(abc, 10000);

});


//testimonials       
$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true
            },
            600: {
                items: 3,
                nav: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true
            },
            1000: {
                items: 4,
                nav: true,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true
            }
        }

    });

})