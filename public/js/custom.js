//animation
jQuery(document).ready(function ($) {
    "use strict";
    //add some elements with animate effect
    $(".big-cta").hover(
        function () {
            $('.cta a').addClass("animated shake");
        },
        function () {
            $('.cta a').removeClass("animated shake");
        }
    );
    $(".box").hover(
        function () {
            $(this).find('.icon').addClass("animated fadeInDown");
            $(this).find('p').addClass("animated fadeInUp");
        },
        function () {
            $(this).find('.icon').removeClass("animated fadeInDown");
            $(this).find('p').removeClass("animated fadeInUp");
        }
    );

    //scroll to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });

    //Slider Slippry
    $('#slider').slippry({
        pager: !0,
        pause: 7000
    });

    //Review Carousel
    $('.carousel').carousel({
        interval: 5000
    })
});