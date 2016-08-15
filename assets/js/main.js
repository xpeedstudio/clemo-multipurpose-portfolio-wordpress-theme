"use strict";


jQuery(document).ready(function ($) {

    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    $(document).on('click', '.navbar-collapse.in', function (e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });

    $('ul.navbar-nav li').hover(function () {
        $(this).children('ul').stop(true, false, true).fadeToggle(300);
    });

    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

    $("").localScroll();

    /*---------------------------------------------*
     * SLIDER PRO
     ---------------------------------------------*/
    $('#example-three').sliderPro({
        width: 960,
        height: 200,
        fade: true,
        loop: true,
        arrows: false,
        buttons: true,
        fullScreen: false,
        shuffle: true,
        smallSize: 500,
        mediumSize: 1000,
        largeSize: 3000,
        thumbnailArrows: true,
        autoplay: false,
        thumbnailsContainerSize: 960

    });

    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/
    var wow = new WOW({
        mobile: false // trigger animations on mobile devices (default is true)
    });
    wow.init();


    
    /*---------------------------------------------*
     * Counter 
     ---------------------------------------------*/

    $('.statistic-counter').counterUp({
        delay: 10,
        time: 2000
    });

    /*---------------------------------------------*
     * MASONARY
     ---------------------------------------------*/
    $('.mixcontent').masonry();


    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

    $('.main_home_slider').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: false,
        dots: true,
        nav: false,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });

    $('.main_team').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: false,
        dots: true,
        nav: true,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });

    $('.main_work1_content').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: true,
        nav: true,
        navText: [
            "prew",
            "next"
        ],
        autoplayHoverPause: true

    });
    $('.main_work1_team').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: false,
        dots: true,
        nav: false,
        navText: [
            "prew",
            "next"
        ],
        autoplayHoverPause: true

    });


// main-menu-scroll

    jQuery(window).scroll(function () {
        var top = jQuery(document).scrollTop();
        var height = 5;
        //alert(batas);

        if (top > height) {
            jQuery('.navbar-fixed-top').addClass('menu-scroll');
        } else {
            jQuery('.navbar-fixed-top').removeClass('menu-scroll');
        }
    });

// scroll Up

    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('.scrollup').fadeIn('slow');
        } else {
            $('.scrollup').fadeOut('slow');
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });

});







