$(function() {
    $('#owl-demo2').owlCarousel({
        margin: 50,
        nav: false,
        autoplay: true,
        slideSpeed: 10,
        rewindNav: true,
        scrollPerPage: false,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            700: {
                items: 2
            },
            1000: {
                items: 3
            },
            1100: {
                items: 3
            }
        }
    })
     $('.animate-anchor').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 90
        }, 1000);
        event.preventDefault();
    });
});