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

    //Scroll to top
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

    //Review Carousel
    $('.carousel').carousel({
        interval: 5000
    });

    //Alert
    $('div.alert').delay(5000).fadeOut(350);

    //Phone mask
    $('input[name="phone"]').mask('+0 (000) 000-00-00');

    //AJAX Contact Form
    $('#contact-form').on('submit', function(e){
        e.preventDefault();
        $('.output_message').text('Подождите...');
        $.ajax({
            type: 'POST',
            url: '/contact',
            data: $('#contact-form').serialize(),
            success: function(data){
                if (data.result){
                    $('.output_message').text('Сообщение отправлено!').delay(2000).fadeOut(800);
                } else {
                    $('.output_message').text('Ошибка!').delay(2000).fadeOut(800);
                }
                $('#contact-form')[0].reset();
            }
        });
        return false;
    });
});