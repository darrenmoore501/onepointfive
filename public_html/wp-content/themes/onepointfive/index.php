<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EcoVolt
 */

?>

<?php get_header(); ?>
<style>
header#masthead {
    top: 0;
}
</style>
<main id="primary" class="content-area container page">

	<?php
	if ( have_posts() ) {
	?>

			<?php


		// Start the loop.
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
		<?php endwhile;
		// End the loop.

		the_posts_navigation();

	}
	?>

</main>

<?php get_footer(); ?>
