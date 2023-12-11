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
                items:1,
                dots: false,
                margin:15,
            },
            870: {
                items:1,
                dots: false
            },
            1170:{
                items:2
            }
        }
    })
});


