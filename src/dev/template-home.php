<?php 
/*
    Template Name: Home
*/
get_header(); ?>

<?php
    if(have_posts()):while(have_posts()):the_post();
        the_content();
    endwhile; endif;

?>
<!-- Home Hero -->
<section class="page_hero">
	<div class="video_holder">
		<video loop autoplay muted playsinline>
        	<source src="<?php echo get_template_directory_uri(); ?>/assets/hp_hero.mp4" type="video/mp4;codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
        </video>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1>WELCOME TO KANTOKA</h1>
				<p>SOMETHING FOR EVERYONE</p>
			</div>
		</div>
	</div>

	<a href="#down-to-arrow" id="down-arrow" class="down-arrow">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/white-down_arrow.png" alt="">
	</a>



<!-- 	<div class="slider">

		<div class="slder_content" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/kantoka-main-img.jpg');">
			
			
		</div>

		<div class="slder_content" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/slide_2.jpg');">
		</div>
		<div class="slder_content" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/slide_3.jpg');">
		</div>
		<div class="slder_content" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/slide_4.jpg');">
		</div>

		
		
		
	</div> -->

		
	

</section><!-- End Home Hero -->

<section id="down-to-arrow"></section>
<!-- Left Right Content -->
<section class="left_right_content">
	<div class="container-fluid">

		<div class="row">

			<div class="col-md-6 text_col order-2 order-md-1 my-auto">
				<h2 class="bb pink">THE JOURNEY BEGINS</h2>
				<p>As legalization, consumers, and the cannabis industry evolve, so will Kantoka.</p>

				<p>The current market isn’t perfect, but Canada has taken one hell of a step forward by introducing adult-use legislation. And that’s what it is, an introduction.</p>
			</div>

			<div class="col-md-6 img_col order-1 order-md-2" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/section_1_1.jpg');">
			</div>

		</div>

		<div class="row">

			<div class="col-md-6 img_col" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/section_1_2.jpg');">
			</div>

			<div class="col-md-6 text_col my-auto">
				<p>Cannabis, and the folks who love her, have been around for a long time. Moving into the next evolution of our relationship with the plant from a legal, cultural, and consumer standpoint, we want to acknowledge the activists and advocates who got us here in the first place, and make sure they still have a place to play and space to share their stories.</p>

				<p>Cannabis is all about connection, and Kantoka is all about connecting brands and audiences through information, education, and elevation.</p>
			</div>
			
		</div>

	</div>
</section><!-- End Left Right Content -->


<!-- Home Video -->
<section class="home_video">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- <div class="youtube-player" data-id="6lt2JfJdGSY"></div> -->
				<!-- <div class="text"><h3>Welcome to Kantoka</h3></div> -->
				
				<div id="video_container">
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/video.jpg" alt=""></a>
				</div>
				<div style="display: none" class="iframe_container">
					372464535
				</div>

			</div>
		</div>
	</div>
</section><!-- End Home Video -->

<!-- Home Mission  -->
<section class="home_mission">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 text-col order-2 order-md-1 my-auto">
				<h2 class="bb">THE KANTOKA MISSION</h2>
				<p>Kantoka is a Japanese word that translates to “something.” Our mission is to create a platform that bridges the gap between consumers and brands and unites us on the journey through legalization. Medical consumers, connoisseurs, and the curious alongside the legacy market and new arrivals will continue to trailblaze and shape the future of the cannabis industry. </p>

				<p>Kantoka, something for everyone.</p>
			</div>
			<div class="col-md-6 img-col order-1 order-md-2 " style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/mission.jpg');"></div>
		</div>
	</div>
</section><!-- End Home Mission  -->

<!-- New Features -->
<section class="new_featrues">
	<div class="container">

		<div class="row">
			<div class="col-12 text-center">
				<h2 class="bb pink area_title">NEW FEATURES COMING SOON</h2>
			</div>
		</div>


		<div class="row">

			<div class="col-md-6 no-padding  img-col order-2 order-md-1">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_1.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_2.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_3.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_4.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="col-md-6 no-padding text-col order-1 order-md-2">
				<div class="inner">
					<h2 class="bb pink">SHOP HIGH-END <br /> ACCESSORIES</h2>
					<p>Lifestyle essentials that will set <br />your heart ablaze</p>	
				</div>
				
			</div>

		</div>

		<div class="row">

			<div class="col-md-6 text-col no-padding">
				<div class="inner">
					<h2 class="bb pink">DISCOVER RETAILERS <br />AND PRODUCERS</h2>
					<p>Shop peer-reviewed and <br> hand selected brands</p>
				</div>
			</div>

			<div class="col-md-6 no-padding  img-col">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_5.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_6.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_7.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_8.jpg" alt="">
					</div>
				</div>
			</div>
			
		</div>

		<div class="row">

			<div class="col-md-6 no-padding img-col order-2 order-md-1">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_9.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_10.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_11.jpg" alt="">
					</div>
					<div class="col-md-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coming_12.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="col-md-6 no-padding text-col order-1 order-md-2">
				<div class="inner">
					<h2 class="bb pink">EXPLORE POPULAR <br /> STRAINS AND <br /> PRODUCTS</h2>
					<p>A curated collection of high-end flower, <br /> oils, edibles, extracts and topicals</p>
				</div>
			</div>

		</div>


	</div>
</section><!-- End New Features -->


<!-- Home Feature table -->
<section class="feature-table">
    <div class="feature-table-container">

        <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/icon_1_img.jpg')">
        	<div class="bg_container"></div>
            <div class="feature-table-content text-center">
                <!-- <img class="black" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-shop.png" alt="">
                <img class="white" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-shop-white.png" alt=""> -->
				<svg class="black"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="122" height="119" viewBox="0 0 122 119">
				  <image id="marketplace-black.svg" width="122" height="119" xlink:href="data:img/png;base64,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"/>
				</svg>


				<svg class="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="122" height="119" viewBox="0 0 122 119">
				  <image id="marketplace-pink.svg" width="122" height="119" xlink:href="data:img/png;base64,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"/>
				</svg>


                <h2 class="bb black text-center">MARKETPLACE</h2>
                <p>
                    Consumers deserve brands that are more than just hype. Cruise our brand pages to learn more about the people behind your favourite products, reviews and top picks, facility tours, exclusive interviews, and everything else you need to know to feel informed and empowered in your purchasing decision.
                </p>

                <a class="pink" href="<?php home_url();?>/#contact">Get Early Access</a>
            </div>
        </div>


        <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/icon_2_img.jpg')">
        	<div class="bg_container"></div>
            <div class="feature-table-content text-center">

				<svg class="black" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="113" height="113" viewBox="0 0 113 113">
				  <image id="tele-medicine-black.svg" width="113" height="113" xlink:href="data:img/png;base64,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"/>
				</svg>


				<svg class="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="113" height="113" viewBox="0 0 113 113">
				  <image id="tele-medicine-pink.svg" width="113" height="113" xlink:href="data:img/png;base64,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"/>
				</svg>

                <h2 class="bb black text-center">TELE-MEDICINE</h2>
                <p>
                    Patients are the pioneers of legalization but still face barriers accessing medicine in the new legislative landscape. Here, you can connect with a licensed health practitioner and browse different licensed producers and learn more about their product offerings to determine what works best for you. It’s that easy.
                </p>
                <a class="pink" href="<?php home_url();?>/#contact">Get Early Access</a>
            </div>
        </div>

        <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/icon_3_img.jpg')">
        	<div class="bg_container"></div>
            <div class="feature-table-content text-center">
				<svg class="black" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="122" height="119" viewBox="0 0 122 119">
				  <image id="marketplace-black.svg" width="122" height="119" xlink:href="data:img/png;base64,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"/>
				</svg>


				<svg class="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="122" height="119" viewBox="0 0 122 119">
				  <image id="marketplace-pink.svg" width="122" height="119" xlink:href="data:img/png;base64,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"/>
				</svg>

                <h2 class="bb black text-center">JOB PORTAL</h2>
                <p>
                    If you love cannabis and want to help create a thriving and sustainable industry, check out our careers page. Our online recruitment platform is secure, confidential, and the first of its kind in Canada to connect employers and candidates in this global industry. Get educated, certified, and hired - all in one place.
                </p>
                <a class="pink" href="<?php home_url();?>/#contact">Get Early Access</a>
            </div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="join-circle blog--join-circle home--join-circle" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/pattern.png');">
    <div class="join-circle-container">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-5 join-circle-content order-2 order-md-1">
                            <p>
                                Sign-up for industry and company updates, new product releases, events, giveaways, exclusive perks, <span>and lots more!</span>
                            </p>

                            <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]');
                           	?>
                        </div>
                        <div class="col-md-6 offset-md-1 order-1 order-md-2">
                            <h1 class="join-circle-title">
                                Join the circle
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Instagram -->
<section class="instagram">
	<div class="container">
		<div class="row">
			<?php echo do_shortcode('[instagram-feed]');?>

<!-- 			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_1.jpg" alt="">
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_2.jpg" alt="">
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_3.jpg" alt="">
			</div>


			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_4.jpg" alt="">
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_5.jpg" alt="">
			</div>
			<div class="col-md-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_6.jpg" alt="">
			</div>

			<div class="col-12 text-center">
				<a href="https://www.instagram.com/shopkantoka/" target="_blank">See more on Instagram ></a>
			</div> -->

		</div>
	</div>
</section><!-- End Instagram -->



<!-- Contact form -->
<section class="home-contact-form" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="bb lg text-center">Contact us</h1>
                <br>

                <div class="contact-form">
                	<div class="row">
                        <div class="col-12">
                            <?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=true tabindex=49]');   ?>
                        </div>
                		
                	</div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Contact form -->

<?php get_footer(); ?>