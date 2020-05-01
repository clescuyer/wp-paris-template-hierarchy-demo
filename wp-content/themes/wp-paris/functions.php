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

add_action( 'init', function() {
	$labels_destinations = array(
		'name'              => _x( 'Destinations', 'taxonomie nom pluriel', 'to2020' ),
		'singular_name'     => _x( 'Destination', 'taxonomie nom singulier', 'to2020' ),
		'search_items'      => __( 'Rechercher une destination', 'to2020' ),
		'all_items'         => __( 'Toutes les destinations', 'to2020' ),
		'parent_item'       => __( 'Destination parente', 'to2020' ),
		'parent_item_colon' => __( 'Destination parente:', 'to2020' ),
		'edit_item'         => __( 'Éditer la destination', 'to2020' ),
		'view_item'         => __( 'Afficher la destination', 'to2020' ),
		'update_item'       => __( 'Mettre à jour la destination', 'to2020' ),
		'add_new_item'      => __( 'Nouvelle destination', 'to2020' ),
		'new_item_name'     => __( 'Nouveau nom de destination', 'to2020' ),
		'menu_name'         => _x( 'Destinations', 'nom dans le menu admin', 'to2020' ),
		'back_to_items'     => __( 'Retour à la liste des destinations', 'to2020' ),
	);
	$args = array(
		'hierarchical'      => true,  // Pour avoir des checkboxes
		'labels'            => $labels_destinations,
		'rewrite'           => array( 'slug' => 'destination' ),
		'show_admin_column' => true,  // Afficher dans la colonne dans la liste
		'show_in_rest'      => true,  // Pour Gutenberg
	);

	register_taxonomy( 'destinations', array( 'post' ), $args );
} );

