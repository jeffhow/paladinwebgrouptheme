(function( $ ){

    /**
     * Nav toggle
     * 
     */
    $('.menu-toggle').click(function(){
        if( $('#menu-icon').hasClass('fa-bars') ){
            $('#menu-icon').removeClass('fa-bars');
            $('#menu-icon').addClass('fa-times');
        }else{
            $('#menu-icon').removeClass('fa-times');
            $('#menu-icon').addClass('fa-bars');
        }
    });

})( jQuery );