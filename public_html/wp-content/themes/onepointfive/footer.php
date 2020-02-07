<?php
/**
 * The footer template for the theme
 *
 * @package EcoVolt
 */

?>
<style>


</style>
<footer id="colophon" role="contentinfo" >
<div class="bird-container bird-container--one">
		<div class="bird bird--one"></div>
	</div>
	<div class="bird-container bird-container--two">
		<div class="bird bird--two"></div>
	</div>
	<?php echo file_get_contents( get_stylesheet_directory_uri() . '/src/media/forest.svg' ); ?>
	<div class="container-fluid main">
				<div class="row text-center">
					<div class="col-12">
					<p class="text-center">Carbon negative web hosting. Full audit and minimisation of footprint. 10% of profits invested in tree planting projects.<br />One Point Five Comms Ltd: a carbon negative business. <a href="/about/">Find out how</a>.</p>
				</div>
				
			</div>
		<div class="row divider">
			<div class="col">
				<hr/>
			</div>
		</div>
		<div class="row">
			<?php get_template_part( 'template-parts/footer/layout', 'logo' ); ?>
			<div class="col-12 col-sm-4">
				<div class="row">
					<?php get_template_part( 'template-parts/footer/layout', 'address' ); ?>
				</div>
				<div class="row">
					<?php wp_nav_menu( array( 'menu' => 'footer-terms', 'menu_class' => 'footer-menu-terms' ) );  ?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>


<!-- The final curtain... -->

</div><!-- End of page -->
<audio id="birdsong" src="/wp-content/themes/onepointfive/src/media/birdsong.mp3" autoplay>
<p>Playing birdsong in the background.</p>
<embed src="/wp-content/themes/onepointfive/src/media/birdsong.mp3" width="18" height="9" hidden="true" />
</audio>

<script>
	
	function mute() {
		var song = document.getElementById("birdsong");
song.muted = true;
	}
	</script>
</body>
</html>
