
/* Earth Slider
================================================================ */

$(document).ready(function() {

    if ($('#s-welcome').length > 0) {

        var $pin = $('.earth .pin-wrapper');
        var $pinCount = $pin.length;
        var $pinRange = 165;
        var $pinFirstChild = $('.earth .pin-wrapper:first-child');
        var $pinLastChild = $('.earth .pin-wrapper:last-child');

        // calculate the rotation angle of the pins
        function pinRotate(pinAngle, pinNo) {

            var pinAngle = pinAngle / (pinNo + 1) + ((180 - $pinRange) / 2);
            pinAngle.toString();
            var interval = pinAngle - ((180 - $pinRange) / 2);

            for(i=1; i<$pinCount+1; i++){   
                if (i>1) {
                    pinAngle += interval;
                }
                i.toString();   
                $('.pin-wrapper:nth-child('+i+')').css({
                    transform: 'rotate('+pinAngle+'deg)'
                });
            }

        }

        pinRotate($pinRange, $pinCount);

        $pin.click(function() {

            $pin.removeClass('active');
            $(this).addClass('active');
            $('.welcome-content').removeClass('active');

            var $pinChild = $(this).index() + 1;
            var $pinChildVal = $pinChild.toString();

            setTimeout(function(){
                $('.welcome-content:nth-child('+$pinChildVal+')').addClass('active'); 
            }, 200); 

        });
        
        $('.section.welcome .nav-prev').click(function() {

            var $pinActive = $('.earth .pin-wrapper.active');
            var $pinChild = 1;

            $pinActive.removeClass('active');

            if ($pinActive.is(':first-child')) {
                $pinActive = $pinLastChild;
                $pinActive.addClass('active');
            } else {                
                $pinActive.prev().addClass('active');               
            }   

            $('.welcome-content').removeClass('active');
            
            setTimeout(function(){
                $('.welcome-content:nth-child('+$pinChild+')').addClass('active'); 
            }, 200);            
            
            var $pinActive = $('.earth .pin-wrapper.active');
            var $pinChild = $pinActive.index() + 1;
            
        });

        $('.section.welcome .nav-next').click(function() {

            var $pinActive = $('.earth .pin-wrapper.active');
            var $pinChild = $pinActive.index() + 1;
            var $pinChildVal = $pinChild + 1;

            $pinActive.removeClass('active');

            if ($pinActive.is(':last-child')) {
                $pinActive = $pinFirstChild;
                $pinActive.addClass('active');
            } else {                
                $pinActive.next().addClass('active');               
            }   

            if ($pinChildVal == ($pinCount + 1)){
                $pinChildVal = 1;
            }

            $('.welcome-content').removeClass('active');
            
            setTimeout(function(){
                $('.welcome-content:nth-child('+$pinChildVal+')').addClass('active'); 
            }, 200);                 
            
        });

        //Animations

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

    }

}); // End document.ready

$(window).load(function(){

    var highest = null;
    var hi = 0;

    $(".welcome-content").each(function(){
        var h = $(this).outerHeight();
        if (h > hi) {
            hi = h;
            highest = $(this);  
        }
        $(".welcome-content").css("height", hi)    
    });

}); // End window.load