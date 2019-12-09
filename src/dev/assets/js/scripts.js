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

		// Vimeo loading video
		var video_id = $('.iframe_container').html();
		$('#video_container a').click(function(e) {
				e.preventDefault();
				$('#video_container').html('<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/'+ video_id +'?autoplay=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>');
			
		}); // End vimeo video


		// bxSlider
		$('.slider').bxSlider({
				controls:false,
				pager:false,
				auto:true,
		});

		// Smooth Scrolling
		$('a[href*="#"]')
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function(event) {
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
				&& 
				location.hostname == this.hostname
			) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function() {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) {
							return false;
						} else {
							$target.attr('tabindex','-1'); 
							$target.focus();
						};
					});
				}
			}
		});
		// End Smooth scrolling

		// Remove current menu item from contact menu item
		$('.not-current').removeClass('current-menu-item');


		// Ajax Load more
		$(document).on('click', '.load_more_post', function(e){
			e.preventDefault();
			var page = $(this).data('page');
			var maxpage = $(this).data('maxpage');
			var ajaxUrl = $(this).data('url');
			// var ajaxUrl = 'http://kantoka.wpengine.com/wp-admin/admin-ajax.php';
			var that = $(this);

			$.ajax({
				url: ajaxUrl,
				type: 'post',
				data:{
					page: page,
					action: 'kantoka_load_more'
				},
				success:function(res){
					$('.post_holder').append(res);
					that.data('page', page+1) ;
					if((page +1) == maxpage){
						that.addClass('finished');
						that.text('No more posts!')
					}
				},
				error: function(err){
					console.log(err);
				}


			});

				
		}); //Ajax call finished

		$(document).on('click','a.finished',function(){
			//$(this).text('I said, no more posts!!!')
			
		})




});// Document ready

