<?php
// Sidebars
require_once('sidebar-club.php');
require_once('sidebar-homepage.php');
require_once('sidebar-ladies.php');
require_once('sidebar-youth.php');
require_once('sidebar-schools.php');
require_once('sidebar-academy.php');

/**
 * Enqueue styles.
 */
if (!function_exists('twrfc_styles')) :
	function twrfc_styles()
	{
		$theme = wp_get_theme();
		$twrfcversion = $theme->get('Version');
		$rookieverson = $theme->parent()->get('Version');

		// Load icon font.
		wp_enqueue_style('dashicons');

		// Load web fonts.
		wp_enqueue_style('rookie-lato', add_query_arg(array('family' => 'Lato:400,700,400italic,700italic', 'subset' => 'latin-ext'), "//fonts.googleapis.com/css", array(), null));
		wp_enqueue_style('rookie-oswald', add_query_arg(array('family' => 'Oswald:400,700', 'subset' => 'latin-ext'), "//fonts.googleapis.com/css", array(), null));

		// Load our framework stylesheet.
		wp_enqueue_style('twrfc-framework-style', get_stylesheet_uri(), array('rookie-framework-style'), $twrfcversion);

		// Load RTL framework stylesheet if needed.
		if (is_rtl()) {
			wp_enqueue_style('twrfc-framework-rtl-style', get_stylesheet_uri(), array('rookie-framework-rtlstyle'), $twrfcversion);
		}

		// Load our main stylesheet.
		wp_enqueue_style( 'rookie-style', get_template_directory_uri() . '/style.css', array(),  $rookieverson);
		wp_enqueue_style( 'twrfc-style', get_stylesheet_uri(), array('rookie-style'), $twrfcversion );

	}
	add_action('wp_enqueue_scripts', 'twrfc_styles');
endif;
