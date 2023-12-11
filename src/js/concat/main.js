jQuery(document).ready(function($) {
    new WOW().init();

    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    $('.owl-carousel').owlCarousel({
        autoplay: true,
        margin:30,
        lazyLoad: true,

        nav:true,
        navText:[],

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


