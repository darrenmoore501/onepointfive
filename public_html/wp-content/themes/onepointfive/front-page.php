<?php
/**
 * The generic page template
 *
 * @package EcoVolt
 */

get_header();
/* Template Name:Front Page */
?>
  <main id="primary" class="page">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="container">
				<div class="row justify-content-center top" >
					<div class="col-md-6 col-sm-10">
						<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					</div>
				</div>
				<!-- <div class="row justify-content-center top" >
					<h2>Services</h2>
				</div> -->
				<div class="row justify-content-center top" >
						<div class="col-md-3 panel col-sm-3">
						<h2>Carbon Footprinting</h2>
					<p>The first step to becoming carbon neutral or even carbon negative is to measure your footprint. Use our proven technique as specified by the UK Government to measure the footprint of your business and develop an action plan to reduce your footprint.</p>
					<a href="/services/carbon-footprinting/">More</a>
					</div>
					<div class="col-md-3 panel col-sm-3">
						<h2>Sustainable Marketing</h2>
					<p>Use our marketing experience in the sustainable business world to market your sustainable business to deliver a measurable return on your investment.</p>
					<a href="/services/sustainable-marketing/">More</a>
					</div>
						<div class="col-md-3 panel col-sm-3">
						<h2>Carbon Negative Tech</h2>
					<p>We utilise efficient Open Source technologies and lean development approaches on our carbon negative web hosting platform to deliver high performance tech solutions for your next project.</p>
					<a href="/services/carbon-negative-tech/">More</a>
					</div>
				
				</div>
					<div class="row justify-content-center top row3" >
					<div class="col-md-6 abouttext col-sm-10">
						<h2>About OnePointFive Comms </h2>
						<p>We set up <strong>OnePointFive</strong> to address one big issue. The biggest issue of our times.<br /> Work with One Point Five Comms to bring make your business carbon neutral or even carbon negative by the end of the decade. Gain marketing and PR credibility, a competitive edge and cut waste and inefficiencies at the same time.</p>
					<a href="/about/">More</a>
					</div>
					</div>
			</div>
		<?php endwhile; ?>
  </main>

<?php get_footer(); ?>
