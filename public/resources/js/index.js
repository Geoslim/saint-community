

$(document).ready(function () {
    let owl = $(".owl-one");
    owl.owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        dots: true,
        dotsEach: true,
        autoplayTimeout: 8000
    });

    $('.home__next').click(function () {
        owl.trigger('next.owl.carousel');
    })


    $('.home__previous').click(function () {
        owl.trigger('prev.owl.carousel');
    })
});



$(document).ready(function () {
    let owl = $(".owl_three");
    owl.owlCarousel({
        items: 1,
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        autoplayTimeout: 5000
    });

    


    
});