
/* Control Panel Navigation
================================================================ */

$(document).ready(function() {

	var cpContainer = $('#cp-nav');

	// create the cp nav HTML
	function cpNav() {

		$("#cp-trigger").detach().prependTo('body') // relocate the cp-trigger in the DOM
		$("#logo").clone().removeAttr('id').prependTo(cpContainer); // clone the logo into the cp nav
		$("#search").clone().removeAttr('id').prependTo(cpContainer); // clone the search box into the cp nav
		$("#app-header .main-nav > ul").clone().appendTo(cpContainer); // clone the main nav into the cp nav container
		$("#copyright").clone().removeAttr('id').appendTo(cpContainer); // clone the copyright into the cp nav

	} // End cpNav()

	$(cpNav);

}); // End document.ready

$(window).load(function(){

	function toggleCP(state) {

	    var scaleFactorWhenNavActive = 0.65; // change me if CSS body.cp-active #site-content transform:scale factor ever changes! 

	    var vPos = $('html').scrollTop(); // my current scroll position in px

	    // webkit doesn't consider the html container to have scrolled, so let's check the body container instead
	    if(vPos == 0) vPos = $('body').scrollTop();

	    var screenHeight = $(window).height();
	    var screenHeightFactor = screenHeight*0.15; // this is the height of the body:before, which is a height of 15%

	    if($('body').hasClass('cp-active')) {  // are we currently in scaled-small mode about to switch back?
	        // yes we are, so toggle and then scroll "down" the larger page to compensate
	        if(state != 1) {
	            $('body').toggleClass('cp-active');
	            $('.cp-trigger').toggleClass('nav-trigger-animate');
	            $('body,html').animate({scrollTop:Number((vPos + screenHeightFactor)/scaleFactorWhenNavActive) + 1 },0);
	        }
	    } else {
	        // no, we are not, so toggle and then scroll "up" the smaller page to compensate
	        if(state != 0) {
	            $('body').toggleClass('cp-active');
	            $('.cp-trigger').toggleClass('nav-trigger-animate');
	            $('body,html').animate({scrollTop:Number((vPos * scaleFactorWhenNavActive) - (screenHeightFactor))},0);
	        }
	    }
	 
	} // End toggleCP()

    $('#cp-trigger').click(function() {
        toggleCP();
    });
    $('#cp-nav a').click(function() {
        toggleCP(0);
    });

}); // End window.load