/*================================================================================================================
                                            SERVICES

=================================================================================================================*/
$(function() {
    new WOW().init();
});
/*================================================================================================================
                                            SERVICES

=================================================================================================================*/

$(function() {
    $("#work").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    })
});

/*================================================================================================================
                                            
                                            Team

=================================================================================================================*/



$(function() {
    $("#team-members").owlCarousel({
        items: 3,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        responsive: {
            //breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 480 up
            480: {
                items: 2
            },
            // breakpoint from 768 up
            768: {
                items: 3
            },
            992: {
                items: 3
            },

        }
    });
});



/*================================================================================================================
                                            
                                            Testimonials

=================================================================================================================*/



$(function() {
    $("#customers-testimonials").owlCarousel({
        items: 1,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
    });
});

/*================================================================================================================
                                            
                                            STATS

=================================================================================================================*/

$(function() {
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
});


/*================================================================================================================
                                            
                                            CLIENTS

=================================================================================================================*/



$(function() {
    $("#clients-list").owlCarousel({
        items: 6,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        responsive: {
            //breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 480 up
            480: {
                items: 3
            },
            // breakpoint from 768 up
            768: {
                items: 5
            },
            992: {
                items: 6
            },

        }
    });
});


/*================================================================================================================
                                            
                                            NAVIGATION

=================================================================================================================*/
// show/Hide transparent black navigation

// $(function() {
//     $(window).scroll(function() {
//         if ($(this).scrollTop() < 50) {
//             // hide nav
//             // $("nav").removeClass("jibran-top-nav");
//             $("#back-to-top").fadeOut();
//         } else {
//             // show nav
//             $("nav").addClass("jibran-top-nav");
//             $("#back-to-top").fadeIn();
//         }
//     });
// });

// Smooth scrolling
// $(function() {
//     $("a.smooth-scroll").click(function(event) {

//         event.preventDefault();

//         //get/return id like #about, #work, #team and etc;

//         var section = $(this).attr("href");

//         $('html, body').animate({
//             scrollTop: $(section).offset().top - 44
//         }, 1250), "easeInOutExpo";
//     });
// });


//Close mobile menu on click
// $(function () {
//     $(".navbar-collapse ul li a").on("click touch", function () {
//         $(".navbar-toggle").click();
//     });
// });


/*================================================================================================================
                                            
                                            suggetion team

=================================================================================================================*/



$(function() {
    $("#team-members1").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        responsive: {
            //breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 480 up
            480: {
                items: 1
            },
            // breakpoint from 768 up
            768: {
                items: 1
            },
            992: {
                items: 1
            },

        }
    });
});

// var owl = $('.owl-carousel');
// owl.owlCarousel();
// // Go to the next item
// $('.customNextBtn').click(function() {
//     owl.trigger('next.owl.carousel');
// })
// // Go to the previous item
// $('.customPrevBtn').click(function() {
//     // With optional speed parameter
//     // Parameters has to be in square bracket '[]'
//     owl.trigger('prev.owl.carousel', [300]);
// })