(function( $ ){
    /**
     * Set header color class onload
     */
    $(document).ready(function(){
        if ( $(window).scrollTop() <= 25 ) {
            $('#masthead').addClass('site-header-transparent');
            $('.custom-logo').addClass('large');
        }else{
            $('#masthead').removeClass('site-header-transparent');
            $('.custom-logo').removeClass('large');
        }
    });

    /**
     * Change the height of brand and masthead color on scroll
     */
    $(window).on('scroll', function() {

        var finalHeight = getComputedStyle(document.documentElement).getPropertyValue('--masthead-min-height');
        var currentHeight = $('#masthead').height();

        // Get the primary color through the CSS variable
        var solidbg = getComputedStyle(document.documentElement).getPropertyValue('--primary-color');
        var transbg = solidbg+'00'; // Add Hex 0% opacity

        if ( $(this).scrollTop() <= 25 ) {
            $('#masthead').addClass('site-header-transparent');
            $('.custom-logo').addClass('large');
        }else{
            $('#masthead').removeClass('site-header-transparent');
            $('.custom-logo').removeClass('large');

        }

    });

    /**
     * Nav toggle
     * 
     */
    $('.menu-toggle').click(function(){
        if( $('#menu-icon').hasClass('fa-bars') ){
            $('#menu-icon').removeClass('fa-bars');
            $('#menu-icon').addClass('fa-times');
            $('#masthead').removeClass('site-header-transparent');
        }else{
            $('#menu-icon').removeClass('fa-times');
            $('#menu-icon').addClass('fa-bars');
            if ( $(window).scrollTop() <= 25 ) {
                $('#masthead').addClass('site-header-transparent');
            }
        }
    });

})( jQuery );