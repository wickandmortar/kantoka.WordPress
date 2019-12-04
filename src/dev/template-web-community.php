<?php 
/*
	Template Name: Web Community
*/
get_header(); ?>

<section class="community_hero">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 img_col">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_flower.png" alt="">
			</div>
			<div class="col-md-5 my-auto text_col">
				<h1 class="bb pink">THE PLANT WITHIN</h1>
				<p>Cannabis is a connector, and she interacts directly with consumers. We have a lot to learn about the plant, the endocannabinoid system, and their co-evolution. But from what we know, it’s pretty neat to experience the internal dance of nature as it nurtures.</p>
				<p>Part of our mission is to showcase quality products to enhance your personal connection with cannabis, while also providing much needed information for conscious consumption and education to elevate the mind and body. </p>
			</div>
		</div>
	</div>
</section>

<!-- Left Right Content -->
<section class="left_right_content community_left_right">
	<div class="container-fluid">

		<div class="row">

			<div class="col-md-6 text_col order-2 order-md-1 my-auto">
				<h2 class="bb pink">AT THE FOREFRONT</h2>
				<p>Kantoka is looking for ambassadors, folks who love to share their voice with purpose and intention. If you've been impacted by cannabis in a meaningful way or have an authentic story to tell, it’s time to grab the mic. Our ambassador program is launching soon, with many perks. Let's talk!</p>
				<a href="#">Connect with us ></a>
			</div>

			<div class="col-md-6 img_col order-1 order-md-2" style="background-image:url('http://kantoka.me/wp-content/themes/wickandmortar/assets/images/forefront.jpg');">
			</div>

		</div>

		<div class="row">

			<div class="col-md-6 img_col" style="background-image:url('http://kantoka.me/wp-content/themes/wickandmortar/assets/images/transform.jpg');">
			</div>

			<div class="col-md-6 text_col my-auto">
				<h2 class="bb pink">CONTENT THAT TRANSFORMS</h2>
				<p>Cannabis is often considered a muse, a source of inspiration and a connection to our higher selves. We are always looking for new voices and contributors. Have a story to tell? </p>

				<p>Cannabis is all about connection, and Kantoka is all about connecting brands and audiences through information, education, and elevation.</p>
				<a href="#">Submit your idea here ></a>
			</div>
			
		</div>


		<div class="row">

			<div class="col-md-6 text_col order-2 order-md-1 my-auto">
				<h2 class="bb pink">PASS IT FORWARD</h2>
				<p>We believe in the transformative power of giving. Philanthropy is at the core of our corporate culture. We give back through volunteer hours, fundraising and dedicated funds towards improving the communities we serve.</p>

				<p>Want to know how you can get involved in the Pass it Forward program, or have a great idea on how Kantoka can give back to your community?</p>

				<a href="#">Submit your idea here ></a>
			</div>

			<div class="col-md-6 img_col order-1 order-md-2" style="background-image:url('http://kantoka.me/wp-content/themes/wickandmortar/assets/images/forward.jpg');">
			</div>

		</div>

	</div>
</section><!-- End Left Right Content -->




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