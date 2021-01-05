<?php
	/**
	 * EcoVolt functions and definitions.
	 *
	 * @link https://developer.wordpress.org/themes/basics/theme-functions/
	 *
	 * @package EcoVolt
	 * @author Benjamin Roffe
	 */

	/* define some Constants to make our life easier */
	define( 'FS_METHOD', 'direct' );

	if ( ! function_exists( 'ecovolt_setup' ) ) :
		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which
		 * runs before the init hook. The init hook is too late for some features, such
		 * as indicating support for post thumbnails.
		 */
		function ecovolt_setup() {

			// Add default posts and comments RSS feed links to head.
			add_theme_support( 'automatic-feed-links' );

			add_theme_support( 'custom-logo' );
			/*
			* Let WordPress manage the document title.
			* By adding theme support, we declare that this theme does not use a
			* hard-coded <title> tag in the document head, and expect WordPress to
			* provide it for us.
			*/
			add_theme_support( 'title-tag' );

			/*
			* Enable support for Post Thumbnails on posts and pages.
			*
			* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
			*/
			add_theme_support( 'post-thumbnails' );
			// This theme uses wp_nav_menu() in one location.
			register_nav_menus( array(
					'primary' => esc_html__( 'Primary', 'ecovolt' ),
					'mobile-menu' => esc_html__( 'Mobile Menu', 'ecovolt' ),
					'footer'  => esc_html__( 'Footer', 'ecovolt' ),
				) );

			/*
			* Switch default core markup for search form, comment form, and comments
			* to output valid HTML5.
			*/
			add_theme_support( 'html5', array(
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
				) );



		}
	endif;

	add_action( 'after_setup_theme', 'ecovolt_setup' );

	/**
	 * Load our required theme scripts and styles
	 */
	function load_scripts() {

		$main_js_loc  = get_stylesheet_directory_uri() . '/dist/js/scripts.js';
		$main_css_loc = get_stylesheet_directory_uri() . '/dist/css/main.css';

		// create version codes.
		$main_js_ver  = date( 'ymd-Gis', filemtime( __DIR__ . '/dist/js/scripts.js' ) );
		$main_css_ver = date( 'ymd-Gis', filemtime( __DIR__ . '/dist/css/main.css' ) );

		// enqueue the scripts and stylesheets.
		wp_enqueue_script( 'main_js', $main_js_loc, array( 'jquery' ), $main_js_ver, true );
		wp_register_style( 'main_css', $main_css_loc, false, $main_css_ver );
		wp_register_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, '4.3.1' );
		wp_enqueue_style( 'main_css' );
		wp_enqueue_style( 'bootstrap_css' );

	}

	add_action( 'wp_enqueue_scripts', 'load_scripts' );


	/**
	 * Load Inc files with further functions
	 */

	require 'inc/class-metaboxes.php';
	require 'inc/class-posttypes.php';
	require 'inc/class-navmenus.php';
	require 'inc/class-settings.php';
function check_ssl_twitter_card_image($image) {
return preg_replace("/https/", 'http', $image);
}
// Hook into the Yoast plugin's hooks for handling the Twitter image
add_action('wpseo_twitter_image', 'check_ssl_twitter_card_image');
