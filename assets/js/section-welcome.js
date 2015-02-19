
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