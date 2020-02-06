<?php
/**
 * The generic page template
 *
 * @package EcoVolt
 */

get_header(); ?>

<noscript>

</noscript>
  <main id="primary" class="page">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="container">
				<div class="row justify-content-center top" >
					<div class="col-md-8 maintext col-sm-10">
						<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					</div>
				</div>
			
			
			</div>
		<?php endwhile; ?>
  </main>

<?php get_footer(); ?>
