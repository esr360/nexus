
/* Welcome Section
================================================================ */

$(document).ready(function() {

/******************************************************************
Welcome Section Content Switcher
******************************************************************/

$('.earth .pin').click(function() {

    var $this = $(this);

    $('.earth .pin').removeClass('active');
    $this.addClass('active');
    $('.welcome-content').removeClass('active');

    setTimeout(function(){
        if ($this.is(':nth-child(1)')) {        
            $('.welcome-content:nth-child(1)').addClass('active');  
        } 
        else if ($this.is(':nth-child(2)')) {        
            $('.welcome-content:nth-child(2)').addClass('active');  
        }
        else if ($this.is(':nth-child(3)')) {        
            $('.welcome-content:nth-child(3)').addClass('active');  
        }
    }, 200)

});

pin1 = $('.earth .pin:nth-child(1)');
pin2 = $('.earth .pin:nth-child(2)');
pin3 = $('.earth .pin:nth-child(3)');

$('.section.welcome .nav-next').click(function() {

    $('.welcome-content').removeClass('active');

    if (pin1.hasClass('active')) {
        pin1.removeClass('active');
        pin3.addClass('active');
        setTimeout(function(){
            $('.welcome-content:nth-child(3)').addClass('active'); 
        }, 200);
    } else if (pin2.hasClass('active')) {
        pin2.removeClass('active');
        pin1.addClass('active');
        setTimeout(function(){
            $('.welcome-content:nth-child(1)').addClass('active'); 
        }, 200);
    } else if (pin3.hasClass('active')) {
        pin3.removeClass('active');
        pin2.addClass('active');
        setTimeout(function(){
            $('.welcome-content:nth-child(2)').addClass('active'); 
        }, 200);
    }

});

$('.section.welcome .nav-prev').click(function() {

    $('.welcome-content').removeClass('active');

    if (pin1.hasClass('active')) {
        pin1.removeClass('active');
        pin2.addClass('active');
        setTimeout(function(){
            $('.welcome-content:nth-child(2)').addClass('active'); 
        }, 200);
    } else if (pin2.hasClass('active')) {
        pin2.removeClass('active');
        pin3.addClass('active');
        setTimeout(function(){
            $('.welcome-content:nth-child(3)').addClass('active'); 
        }, 200);
    } else if (pin3.hasClass('active')) {
        pin3.removeClass('active');
        pin1.addClass('active');
        setTimeout(function(){
            $('.welcome-content:nth-child(1)').addClass('active'); 
        }, 200);
    }

});

/******************************************************************
Welcome Section Scroll Animations
******************************************************************/

if (window.matchMedia('(min-width: 940px)').matches) {
    $(window).bind("load scroll", function() {
        welcome = $('.welcome-titles');
        welcomeA = welcome.offset().top + welcome.height();
        welcomeB = $(window).scrollTop() + $(window).height();
        if (welcomeA < welcomeB) {
            $('.welcome header:first-of-type').addClass('active');
        }
    });
} else {
    $('.welcome .pin').css({opacity: 1});
    $('.welcome header:first-of-type').addClass('active');        
}

}); // End document.ready