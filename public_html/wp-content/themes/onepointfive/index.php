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
	#primary.page .container {
		padding-top:200px;
	}
	.bluewash {
		position:absolute;
		width:100%;
		height: 100%;
	}
	body {
		margin:0;
	} 
	#page .maintext p,#page .maintext ul,#page .maintext ul li{
		color:#fff;
		font-family: 'Cabin', sans-serif;
	}	

	#page .maintext h1{
		color:#fff;
		font-size: 40px;
		font-family: 'Cabin', sans-serif;	
		margin-top:50px;
	}

	#page  h2 {
		color:#65B22E;
		font-size: 30px;
		font-family: 'Cabin', sans-serif;
		text-align:center;
	}
	header#masthead {
		background-color: rgba(20,38,49,1);
		position: fixed;
		z-index: 1000;
		width: 100%;
	}
	.panel {
		background: rgba(255,255,255,0.7);
		margin:0 1em;
		padding:1em;
}
#page .panel a {
/*	color:#CA6334; */
color:#B72F53;
}
#page .panel h2 {
/*	color:#CA6334; */
color:#B72F53;
}
/*main brand 65B22E */





</style>
<main id="primary" class="content-area container">
	<?php var_dump('template-parts/content', get_post_format() ); ?>
	<?php
	if ( have_posts() ) :
		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
		endif;

		// Start the loop.
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-post.php');
		endwhile;
		// End the loop.

		the_posts_navigation();

	endif;
	?>

</main>

<?php get_footer(); ?>
