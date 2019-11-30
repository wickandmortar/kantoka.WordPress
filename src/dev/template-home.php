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
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1>WELCOME TO KANTOKA</h1>
				<p>SOMETHING FOR EVERYONE</p>
			</div>
		</div>
	</div>
	<a href="#down-to-arrow" id="down-arrow" class="down-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arow.png" alt=""></a>
</section><!-- End Home Hero -->

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
				<div class="youtube-player" data-id="6lt2JfJdGSY"></div>
				<!-- <div class="text"><h3>Welcome to Kantoka</h3></div> -->
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


<section class="new_featrues">
	<div class="container">

		<div class="row">
			<div class="col-12 text-center">
				<h2 class="bb pink area_title">NEW FEATURES COMING SOON</h2>
			</div>
		</div>


		<div class="row">

			<div class="col-md-6 no-padding  img-col">
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

			<div class="col-md-6 no-padding text-col">
				<div class="inner">
					<h2>SHOP HIGH-END <br /> ACCESSORIES</h2>
					<p>Lifestyle essentials that will set <br />your heart ablaze</p>	
				</div>
				
			</div>

		</div>

		<div class="row">

			<div class="col-md-6 no-padding">
				<div class="inner">
					<h2>DISCOVER RETAILERS <br />AND PRODUCERS</h2>
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

			<div class="col-md-6 no-padding img-col">
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

			<div class="col-md-6 no-padding">
				<div class="inner">
					<h2>EXPLORE POPULAR <br /> STRAINS AND <br /> PRODUCTS</h2>
					<p>A curated collection of high-end flower,<br /> oils,edibles,extracts and topicals</p>
				</div>
			</div>

		</div>


	</div>
</section>


    <!-- Home Feature table -->
    <section class="feature-table">
        <div class="feature-table-container">

            <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/feature-table-item-1-bg.png')">
                <div class="feature-table-content text-center">
                    <img class="black" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-shop.png" alt="">
                    <img class="white" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-shop-white.png" alt="">
                    <h2 class="bb black text-center">MARKETPLACE</h2>
                    <p>
                        If passion is what ignites you, purpose is how you serve others. With social responsibility at our core, we are committed to serving our communities with safe, legal and compliant content and products.
                    </p>
                </div>
            </div>


            <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/feature-table-item-2-bg.jpg')">
                <div class="feature-table-content text-center">
                    <img class="black" src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-cann.png" alt="">
                    <img class="white"src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-cann-white.png" alt="">
                    <h2 class="bb black text-center">TELE-MEDICINE</h2>
                    <p>
                        If passion is what ignites you, purpose is how you serve others. With social responsibility at our core, we are committed to serving our communities with safe, legal and compliant content and products.
                    </p>
                </div>
            </div>

            <div class="feature-table-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/feature-table-item-3-bg.png')">
                <div class="feature-table-content text-center">
                    <img class="black"src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-desktop.png" alt="">
                    <img class="white"src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-desktop-white.png" alt="">
                    <h2 class="bb black text-center">JOB PORTAL</h2>
                    <p>
                        If passion is what ignites you, purpose is how you serve others. With social responsibility at our core, we are committed to serving our communities with safe, legal and compliant content and products.
                    </p>
                </div>
            </div>

        </div>
    </section>

<!-- CTA -->
<section class="join-circle" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/pattern.png');">
    <div class="join-circle-container">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-5 join-circle-content">
                            <p>
                                Sign-up for industry and company updates, new product releases, events, giveaways, exclusive perks, <span>and lots more!</span>
                            </p>

                            <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]');
                           	?>
                        </div>
                        <div class="col-md-6 offset-md-1">
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


			<div class="col-md-4">
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
				<a href="#">See more on Instagram ></a>
			</div>

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