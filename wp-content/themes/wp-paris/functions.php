<?php
/**
 * WP Paris
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-paris
 */

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri() . '/style.css', array(), '2.3' );
	wp_enqueue_style( 'wp-paris-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'twentyseventeen-style' ),
		'1.0'
	);
} );
