jQuery(document).ready(function($) {
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay: true,
        margin:15,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:2
            }
        }
    })
});


