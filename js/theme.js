;(function($) {
    "use strict";
	
//    $('#carousel-example-generic').carousel({
//        interval: 3000
//    });
    
	//  Animate JS
    new WOW().init();
    
    // For Counter Up
    $('.counter').counterUp({
        delay: 10,
        time: 2500
    });
    
    //Hide Loading Box (Preloader)
     $(window).load(function() {
        $('.loading').delay(500).fadeOut('slow');
        $('body').delay(500).css({'overflow':'visible'});
    });
    
    // isotop plugin area
    $(window).on('load', function(){
        
        // Activate isotope in container
        $(".project_item").imagesLoaded( function() {
            $(".project_item").isotope({
                itemSelector: ".element-item"
            }); 
        });        

        // Add isotope click function
        $(".link_area .button").on('click',function(){
            $(".link_area .button").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr("data-filter");
            $(".project_item").isotope({
                filter: selector,
                animationOptions: {
                    duration: 450,
                    easing: "linear",
                    queue: false
                }
            });
            return false;
        });
    });
    
    
    // Lightbox
     lightbox.option({
        'showImageNumberLabel': false
    })
    
})(jQuery)