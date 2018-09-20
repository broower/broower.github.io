$(document).ready(function () {

    $("#nav").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top -110;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    $(".btn-num-product-up").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        var newVal = parseFloat(oldValue) + 1;

        $button.parent().find("input").val(newVal);

    });


    $(".btn-num-product-down").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
        $button.parent().find("input").val(newVal);

    });


    "use strict";

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;


    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);


// -------   Active Mobile Menu-----//

    $(".menu-bar").on('click', function (e) {
        e.preventDefault();
        $("nav").toggleClass('hide');
        $("span", this).toggleClass("lnr-menu lnr-cross");
        $(".main-menu").addClass('mobile-menu');
    });

    $('select').niceSelect();
    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.active-works-carousel').owlCarousel({
        center: true,
        items: 1,
        loop: true,
        margin: 100,
        dots: true
    });
    $('.active-banner-slider').owlCarousel({
        items: 1,
        loop: true,
        margin: 100,
        dots: true
    });
// Add smooth scrolling to Menu links

    $(document).ready(function () {
        $('#mc_embed_signup').find('form').ajaxChimp();
    });


})
;
