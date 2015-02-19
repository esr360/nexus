
/* Flyout Navigation
================================================================ */

$(document).ready(function() {

	var fnContainer = $('#flyout-nav');

	// create the flyout nav HTML
	function flyoutNav() {

		$("#flyout-trigger").detach().prependTo('body') // relocate the flyout-trigger in the DOM
		$("#app-header .main-nav > ul").clone().appendTo(fnContainer); // clone the main nav into the flyout nav container
		$("#app-header .logo").clone().prependTo(fnContainer); // clone the logo into the off-canvas nav

	} // End flyoutNav()

	$(flyoutNav);

}); // End document.ready

$(window).load(function(){

	function toggleFlyout(state) {

	    if($('body').hasClass('flyout-active')) {  // are we currently in scaled-small mode about to switch back?
	        // yes we are, so toggle and then scroll "down" the larger page to compensate
	        if(state != 1) {
	            $('body').toggleClass('flyout-active');
	            $('#flyout-trigger').toggleClass('nav-trigger-animate');
	    		$('#site-overlay').toggleClass('invisible');
	        }
	    } else {
	        // no, we are not, so toggle and then scroll "up" the smaller page to compensate
	        if(state != 0) {
	            $('body').toggleClass('flyout-active');
	            $('#flyout-trigger').toggleClass('nav-trigger-animate');
	    		$('#site-overlay').toggleClass('invisible');
	        }
	    }

	} // End toggleFlyout()

	// toggle the flyout nav
	$('#flyout-trigger').click(function() {
	    toggleFlyout();
	});

	$('#flyout-nav a, .site-overlay').click(function() {
	    toggleFlyout(0);
	});

}); // End window.load