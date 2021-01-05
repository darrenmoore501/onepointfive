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
					<div class="col-md-10 col-sm-10 panel">
					<div class="row">
						<div class='col-md-7'>
						<h1><?php the_title(); ?></h1>
						
						<?php the_content(); ?>
						</div>
				
				
				
						<div class='col-md-5'>
								<img  src="https://images.unsplash.com/photo-1552049879-1af647388e2e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1834&q=80" alt="IMG_20191128_165612-2-scaled" class="img-fluid"  />
								<!-- https://images.unsplash.com/photo-1605477899141-ac050a727db1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80 
									
									https://images.unsplash.com/photo-1510498920909-5f2cc51ea451?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80
								-->
						</div>
					</div>
			
				
				</div>
					<div class="row justify-content-center top row3" >
					<div class="col-md-6 panel col-sm-10">
						<h2>About OnePointFive Comms </h2>
						<p>We set up One Point Five Degrees to address one big issue - to help organisations understand their impact on climate change and act to reduce it.</p><p>Work with <strong>OnePointFive</strong> to make your business carbon neutral or even carbon negative in 2021. Gain marketing and PR credibility, a competitive edge and cut waste and inefficiencies at the same time.</p>
					<a href="/about/">More</a>
					</div>
					</div>
					
					<div class="row justify-content-center top row3" >
					<div class="col-md-6 panel col-sm-10">
						<h5>We support <a href="https://treesforlife.org.uk" class="trees">Trees For Life</a>, tree planting and rewilding the Scottish Highlands.</h5>
					</div>
					</div>
			</div>
		<?php endwhile; ?>
  </main>
<?php get_footer(); ?>
