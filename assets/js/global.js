
/* Global Scripts
================================================================ */

$(document).ready(function() {

/******************************************************************
Loading Spinner
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

/******************************************************************
Sub-Header Parallax Title
******************************************************************/

if (window.matchMedia('(min-width: 940px)').matches) { // is the window width larger than 940px?

    var shTitle = $('.sh-title-wrapper'); // the element to apply parallax to

    $(window).on('scroll', function() { // call the script on window scroll

        var st = $(this).scrollTop();

        // set the CSS relative to scroll position to achieve parallax effect
        shTitle.css({ 
            //'top' : (st/3)+"px", 
            'transform' : "translate3d(0px, "+(st/3)+"px, 0px)",
            'opacity' : 1 - st/250
        }); 

    });

}

/******************************************************************
Opera Flyout Nav
******************************************************************/

// Our custom control panel nav doesn't work in Opera, so we need a fallback
function operaNav() {

    $('#cp-trigger').hide(); // hide the regular cp-canvas nav trigger
    $('#flyout-trigger').show().addClass('opera-trigger'); // show the mobile off-canvas nav trigger

} // End operaNav()

// are we browsing with Opera?
if (isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0) { 
    // yes
    operaNav();
} else {
    // no
}
    
/******************************************************************
Scroll to Top/Nav trigger Visibility
******************************************************************/

if (window.matchMedia('(min-width: 940px)').matches) { // is the window width larger than 940px?

    $(window).bind("load scroll", function() { // call the script on window scroll & window load

        if ($(this).scrollTop() > 350) { // have we scrolled more than 350px from the top?
            // yes
            $(".scroll-top, #cp-trigger, .opera-trigger").addClass('visible'); // show the buttons
        } else {
            // no
            $(".scroll-top, #cp-trigger, .opera-trigger").stop().removeClass('visible'); // hide the buttons
        }

        // are we at the bottom of the page?
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            $(".scroll-top").stop().removeClass('visible'); // hide the scroll-top button
        }

    });

}

/******************************************************************
Fixed Header
******************************************************************/

$('.app-header').clone().removeAttr('id').appendTo('.fixed-header-container'); // Create the fixed header

$(window).bind("load scroll", function() { // call the script on window scroll & window load

    if ($(this).scrollTop() > 350) { // have we scrolled more than 350px from the top?
        // yes
        $('body').addClass('fh-visible');
    } else {
        // no
        $('body').removeClass('fh-visible');      
    }

    if ($('.fixed-header-container').css('opacity') == '1' && $('body').hasClass('fh-visible')) { // is the fixed-header visible?
        // yes
        $('.flyout-trigger').css({
            top: '1.05em'
        });
    } else {   
        // no     
        $('.flyout-trigger').css({
            top: '1.5em'
        });
    }

});

/******************************************************************
Main Search
******************************************************************/

$('.search-toggle').click(function() {

    $('body').addClass('search-active'); // search box is visible

    // auto-focus the input afer transition complete
    setTimeout(function(){
        $('.main-search input').focus();
    }, 400)

});

$('.search-close').click(function() {
    $('body').removeClass('search-active'); // search box is hidden
});

/******************************************************************
Add Active Class
******************************************************************/

if (window.matchMedia('(min-width: 940px)').matches) { // is the window width larger than 940px?
    // yes
    tiles = $(".inactive");
    $(window).bind("load scroll", function(d,h) { // call the script on window scroll & window load
        tiles.each(function(i) {
            a = $(this).offset().top + $(this).height();
            b = $(window).scrollTop() + $(window).height();
            if (a < b) $(this).removeClass('inactive').addClass('active');
        });
    });
} else {
    // no
    $('.inactive').removeClass('inactive');
}

/******************************************************************
Smooth Scroll
******************************************************************/

$('a[href*=#]').click(function() { // target all links except the off-canvas nav links
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1200);
            return false;
        }
    }
});

/******************************************************************
Modals
******************************************************************/

$('.modal-image').magnificPopup({ 
    type: 'image',
});

$('.modal-gallery').magnificPopup({ 
    type: 'image',
    delegate: 'a',
    gallery: {
        enabled: true
    },
});

$('.inline-modal').magnificPopup({
    type:'inline',
    midClick: true,
});

/******************************************************************
Tooltip
******************************************************************/

 $('.tooltip').tipr({
    'speed': 300,
    'mode': 'top'
 });

/******************************************************************
Progress Bars
******************************************************************/

$(".progress").each(function() {
    attrProgress = $(this).attr('data-progress');
    $(this).css({ width : attrProgress }); 
});

/******************************************************************
Stats Animated Numbers
******************************************************************/

stat = $('[id^="stat-"]');

$(window).on("load scroll", function(d,h) {
    stat.each(function(i) {
        a = $(this).offset().top + $(this).height();
        b = $(window).scrollTop() + $(window).height();
        statSep = $.animateNumber.numberStepFactories.separator(',');
        attrStat = $(this).attr('data-val');
        if (window.matchMedia('(min-width: 940px)').matches) {
            if (a < b) {
                $(this).animateNumber({ 
                        number: attrStat,
                        numberStep: statSep
                    }, 2000
                );
            }
        } else {
            $(this).animateNumber({ 
                number: attrStat
            });
        }
    });
});

/******************************************************************
Portfolio Items Gallery
******************************************************************/

$(".portfolio-items").magnificPopup({ 
    type: "image",
    delegate: ".icon-view",
    gallery: {
        enabled: true
    },
    callbacks: {
        change: function() {
            if (this.isOpen) {
                this.wrap.addClass('mfp-open');
            }
        }
    }
});

/******************************************************************
Single Project Gallery
******************************************************************/

$("#project-gallery").magnificPopup({ 
    type: "image",
    delegate: "a",
    gallery: {
        enabled: true
    },
    callbacks: {
        change: function() {
            if (this.isOpen) {
                this.wrap.addClass('mfp-open');
            }
        }
    }
});

/******************************************************************
Meet the Team Gallery
******************************************************************/

$(".section.team").magnificPopup({ 
    type: "image",
    delegate: ".mask [class^='icon-']",
    gallery: {
        enabled: true
    },
    callbacks: {
        change: function() {
            if (this.isOpen) {
                this.wrap.addClass('mfp-open');
            }
        }
    }
});

/******************************************************************
Portfolio Grid Carousel
******************************************************************/

var portfolioCarousel = $('.portfolio-carousel');

portfolioCarousel.owlCarousel({
    items: 1,
    loop: false,
    dots: true,
    nav: false,
    slideBy: 1
})

// Go to the next item
$('.section.latest-works .nav-next').click(function() {
    portfolioCarousel.trigger('next.owl.carousel');
})

// Go to the previous item
$('.section.latest-works .nav-prev').click(function() {
    portfolioCarousel.trigger('prev.owl.carousel');
})

/******************************************************************
Portfolio Previews Carousel
******************************************************************/

var projectCarousel = $('.single-project .previews');

projectCarousel.owlCarousel({
    items: 1,
    dots: false,
    loop: true,
    nav: false,
    autoplay:true,
    slideBy: 1
})

// Go to the next item
$('.project-carousel .nav-next').click(function() {
    projectCarousel.trigger('next.owl.carousel');
})

// Go to the previous item
$('.project-carousel .nav-prev').click(function() {
    projectCarousel.trigger('prev.owl.carousel');
})

/******************************************************************
Testimonials Carousel
******************************************************************/

var testimonialCarousel = $('.testimonials-slider');

testimonialCarousel.owlCarousel({
    items: 1,
    loop: true,
    dots: false,
    nav: false,
    margin: 60,
    slideBy: 1
});

// Go to the next item
$('.section.testimonials .nav-next').click(function() {
    testimonialCarousel.trigger('next.owl.carousel');
})

// Go to the previous item
$('.section.testimonials .nav-prev').click(function() {
    testimonialCarousel.trigger('prev.owl.carousel');
})

/******************************************************************
Services Carousel
******************************************************************/

var servicesCarousel = $('.services-slider');

servicesCarousel.owlCarousel({
    items: 1,
    loop: false,
    dots: false,
    nav: false,
    margin: 20,
    slideBy: 1,
    responsive:{
        720:{                
            items: 2
        },
        1100:{                
            items: 3
        }
    }
});

// Go to the next item
$('.section.services .nav-next').click(function() {
    servicesCarousel.trigger('next.owl.carousel');
})

// Go to the previous item
$('.section.services .nav-prev').click(function() {
    servicesCarousel.trigger('prev.owl.carousel');
})

/******************************************************************
Clients Carousel
******************************************************************/

$('.clients-slider').owlCarousel({
    items: 1,
    loop: true,
    dots: true,
    nav: false,
    margin: 35,
    slideBy: 1,
    autoplay:true,
    autoplayTimeout: 4000,
    autoplayHoverPause:true,
    responsive:{
        460:{                
            items: 2
        },
        720:{                
            items: 3
        }
    }
});

/******************************************************************
Footer Testimonials Carousel
******************************************************************/

$('.footer-testimonials').owlCarousel({
    items: 1,
    loop: true,
    dots: false,
    nav: true,
    navText: [],
    margin: 20,
    slideBy: 1
});

}); // End document.ready
