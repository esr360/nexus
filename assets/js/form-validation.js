
/* Contact form
================================================================ */

$(document).ready(function() {

    var $contact = $('.h5-valid input');

    if( $contact.val().length != 0 ) {
        $contact.find('~ label').hide();
    }

    $contact.blur(function() {
        if( $(this).val().length != 0 ) {
            $(this).find('~ label').hide();
        } else {
           $(this).find('~ label').fadeIn(); 
        }
    });

}); // End document.ready