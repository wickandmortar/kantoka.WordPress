jQuery(document).ready(function($){
    
    /* Navigation events */
    $('#nav-button').on('click', function() {
        if ($('#nav-button').hasClass('nav-active')) {
            $('#nav-button').removeClass('nav-active');
            $('#nav-megamenu').removeClass('menu-active');
        } else {
            $('#nav-button').addClass('nav-active');
            $('#nav-megamenu').addClass('menu-active');
        }
    })

    $("#down-arrow").click(function() {
        $('html,body').animate(
            {scrollTop: $("#down-to-arrow").offset().top},
            'slow'
        );
    });
    
});