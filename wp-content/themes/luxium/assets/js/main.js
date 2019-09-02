$(function () {

    $('.features__slider').slick({
        prevArrow: '<button type="button" class="slick-btn slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-btn slick-next"></button>',
        fade: true,
        cssEase: 'linear'
    });

    $(".features__scroll-down, .footer__scroll-top, .menu, .menu-mob").on("click", "a", function (event) {
        // event.preventDefault();
        let id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1500);
    });
    const links = $('.features__navigation .menu-mob ul li, .single-interior__navigation .menu-mob ul li');
    const ul = $('.features__navigation .menu-mob ul, .single-interior__navigation .menu-mob ul');
    $('.menu__btn').click(function () {
        ul.slideToggle(''),
            $(this).toggleClass("no-active"),
            $(this).toggleClass("active")
    });
    links.click(function (e) {
        ul.slideToggle(''),
            $('.menu__btn').toggleClass("no-active"),
            $('.menu__btn').toggleClass("active")
    });


    $(document).ready(function ($) {
        $("#contact").submit(function () {
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "/wp-content/themes/luxium/mail.php",
                data: str,
                success: function (msg) {
                    if (msg == 'OK') {
                        result = '<div class="ok">Message sent</div>';
                        $("#fields").show();
                    } else {
                        result = msg;
                    }
                    $('#note').html(result);
                    $('.input', '#contact')
                        .not(':button, :submit, :reset, :hidden')
                        .val('')
                }
            });
            return false;
        });
    });
    


});