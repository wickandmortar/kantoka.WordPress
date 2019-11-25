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
	$('.h3_bb h3:first-child').addClass('bb');
    $('.cta_form input[type="text"]').addClass('form-control mr-sm-2');
    $('.cta_form input[type="submit"]').addClass('btn btn-block');

    $('.home_contact_form select').addClass('form-control custom-select');
    $('.home_contact_form input[type="text"],.home_contact_form input[type="email"], .home_contact_form textarea').addClass('form-control');
    $('.home_contact_form .gform_footer').addClass('col-md-12 text-center');
    $('.home_contact_form .gform_footer input').addClass('btn light');
    $('.menu-footer-menu-container').addClass('footer-menu');
    $('.menu-footer-menu-container').addClass('footer-menu');
    $('.menu-footer-menu-container ul').addClass('main-menu');

});

