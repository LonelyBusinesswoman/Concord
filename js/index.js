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

    // burger
    // MOBILE MENU SETTINGS
    $('.mobile_menu').on('click touchstart',function(){
        $('.mobile').addClass('active');
          })
          $('.close_mob_menu').click(function(){
            $('.mobile').removeClass('active');
          })
          $('.mobile .wrap a').click(function(){
            $('.mobile').removeClass('active');
          })
          $('.mobile .wrap .action_button').click(function(){
            $('.mobile').removeClass('active');
          })
          $(document).click(function(e){
            if( 
              $('.mobile').hasClass('active') && 
              $('.mobile_menu').has(e.target).length == 0 &&
              $('.mobile').has(e.target).length == 0
            )
            {
              $('.mobile').removeClass('active');
            }
        });

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
    // TABS
    $('.panel-heading').click(function () {
      $(this).toggleClass('in').next().slideToggle();
      const arrow = $(this).find('img');
      if (arrow.hasClass('active')){
        arrow.removeClass('active')
      } else {
        arrow.addClass('active');
      }
    });

})