$(document).ready(function() {
    // scroll
    let header = $('header');
    let scrollPos = 30;

    $(window).on('scroll', function(){
        if($(window).scrollTop() > scrollPos){
            header.addClass('active');
        } else {
            header.removeClass('active');
        }
    })
    
})