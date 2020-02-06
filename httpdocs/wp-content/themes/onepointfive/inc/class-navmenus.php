<?php
/**
 * This file contains all our methods to create custom nav menu locations for the EcoVolt theme
 *
 * @package EcoVolt
 */

new NavMenus();

class NavMenus {

	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'mobile_nav' ) );
		add_action( 'after_setup_theme', array( $this, 'footer_services_menu' ) );
		add_action( 'after_setup_theme', array( $this, 'footer_terms_menu' ) );
	}

	public function mobile_nav() {
		register_nav_menu( 'mobile', __( 'Mobile Menu', 'ecovolt' ) );
	}

	public function footer_services_menu() {
		register_nav_menu( 'footer-services', __( 'Footer Services Menu', 'ecovolt' ) );
	}

	public function footer_terms_menu() {
		register_nav_menu('footer-terms', __( 'Footer Terms Menu', 'ecovolt'));
	}
}
