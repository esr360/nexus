
/* Homepage Scripts
================================================================ */

$(document).ready(function() {

/******************************************************************
Desktop Intro Animations
******************************************************************/

if (window.matchMedia('(min-width: 940px)').matches) {
    $(window).load(function(){
        /* Loading Spinner */
        $('.loading-wrapper').removeClass('active');
        /* Hero Section */
        setTimeout(function(){
            $('section.hero').removeClass('inactive');
        }, 600)
    }); // End window.load
} else {
    $('.loading-wrapper').removeClass('active');  
}

}); // End document.ready