/*************** PAGE OCURENCES ****************/
$(document).ready(function(){
    $('header').css('height',$(window).height());
    $('.link').click(function(){var data = $(this).data('target');scrollToPoint(data);});
    $('.link-menu').click(function(){var data = $(this).data('target');scrollToPointMenu(data);});
    var justHeight = $(window).height();
    $('.fillHeight').css('height',justHeight);

    /***************** Flickity ******************/

    $('#featuresSlider').flickity({
        cellAlign: 'left',
        contain: true,
        prevNextButtons: false,
        autoPlay: true
    });

    /***************** Waypoints ******************/
    $('.wp1').waypoint(function(){$('.wp1').addClass('animated fadeInLeft');},{offset: '75%'});
    $('.wp2').waypoint(function(){$('.wp2').addClass('animated fadeInDown');},{offset: '75%'});
    $('.wp3').waypoint(function(){$('.wp3').addClass('animated bounceInDown');},{offset: '75%'});
    $('.wp4').waypoint(function(){$('.wp4').addClass('animated fadeInDown');},{offset: '75%'});
    $('.wp5').waypoint(function(){$('.wp5').addClass('animated rotateInDownRight');},{offset: '100%'});

});

/*************** Nav Transform ****************/
/* When user clicks the Icon */
$(".nav-toggle").click(function(){$(this).toggleClass("active");$(".overlay-boxify").toggleClass("open");});
/* When user clicks a link */
$(".overlay ul li a").click(function(){$(".nav-toggle").toggleClass("active");$(".overlay-boxify").toggleClass("open");});
/* When user clicks outside */
$(".overlay").click(function(){$(".nav-toggle").toggleClass("active");$(".overlay-boxify").toggleClass("open");});

/********* Smooth Scrolling Function **********/
function scrollToPoint(data){var target = '#'+data;$('html, body').animate({scrollTop:$(target).offset().top},1000);}
function scrollToPointMenu(data){var target = '#'+data;$('html, body').animate({scrollTop:$(target).offset().top},1000);$(".nav-toggle").toggleClass("active");$(".overlay-boxify").toggleClass("open");}



