<?php
/**
 * This file contains our layout template for the main navigation, normally found in the header
 *
 * @package EcoVolt
 */

?>

<nav id="main-nav" class="container-fluid">
	<div class="row">

		<!-- DESKTOP NAVIGATION -->
		<div class="logo col-12 col-xl-2">
			<a href="/">
			<img src="/wp-content/themes/onepointfive/dist/media/15degrees.png" alt="onepointfive" width="180" height="120" />
			</a>
		</div>

		<div class="menu col-12 col-xl-10 d-none d-md-block">
			<?php wp_nav_menu(array('menu' => 'main-menu')); ?>
		</div>

		<!-- MOBILE NAVIGATION -->

		<button id="toggle-mobile-menu" class="toggle-menu d-block d-md-none"><i class="fas fa-bars"></i></button>

		<div id="mobile-menu-wrapper" class="menu mobile col-12 col-lg-10 d-block d-md-none">

		<a href="/">
			<img src="/wp-content/themes/onepointfive/dist/media/15degrees.png" alt="onepointfive" width="180" height="120"  class="custom-logo"/>"
			</a>

			<?php wp_nav_menu( array( 'menu' => 'mobile', 'menu_class' => 'mobile-menu' ) ); ?>
		</div>
	</div>
</nav>

