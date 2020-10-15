$(document).ready(function() {
    // scroll
    const header = $('header');
    const scrollPos = 30;
    const windowWidth = $(window).width()

    if (windowWidth  > 1000){
        $(window).on('scroll', function(){
            if($(window).scrollTop() > scrollPos){
                header.addClass('header-scroll');
            } else {
                header.removeClass('header-scroll');
            }
        })
    } else {
        header.addClass('header-scroll')
    }
    // header height
    const height = $( 'header' ).height();
    $( '.header-margin' ).height(height);

    // main slider
    $('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
      });
    // team slider
    $('.team-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        fade: true
      });

     // Animation 
     $('.team-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $current = $('.slider .slick-slide[data-slick-index='+ currentSlide+']');
        $next = $('.slider .slick-slide[data-slick-index='+ nextSlide+']');

        $current.find('img').css('opacity', '0');
        $current.find('.name').css('opacity', '0');
        $current.find('.position').css('opacity', '0');
        $current.find('.description').css('opacity', '0');
        $next.find('img').css('opacity', '0');
        $next.find('.name').css('opacity', '0');
        $next.find('.position').css('opacity', '0');
        $next.find('.description').css('opacity', '0');
    });

    $('.team-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $current = $('.slider .slick-slide[data-slick-index='+ currentSlide+']');
        $current.find('img').animate({opacity: 1},400);
        $current.find('.name').animate({opacity: 1},400);
        $current.find('.position').animate({opacity: 1},400);
        $current.find('.description').animate({opacity: 1},400);
    });
})