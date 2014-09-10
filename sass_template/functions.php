<?php
/**
 * @package WordPress
 * @subpackage NAME ME
 * @since 1.0
 */
   
/**
 * Enqueues scripts and styles for front end.
 * ============================================================================ 
 */
function name_me_scripts_styles() {
	global $wp_styles;
	
	// Loads our site styles (Generated with SASS)
	wp_enqueue_style( 'name_me_main_style', get_template_directory_uri() . '/assets/css/style.css' );
	
	
	// Loads the Internet Explorer specific stylesheets. (Generated with SASS)
	wp_enqueue_style( 'name_me_ie8', get_template_directory_uri() . '/assets/css/ie.css', array( 'name_me_main_style' ) );
	wp_style_add_data( 'name_me_ie8', 'conditional', 'lt IE 9' );

}
add_action( 'wp_enqueue_scripts', 'name_me_scripts_styles' );