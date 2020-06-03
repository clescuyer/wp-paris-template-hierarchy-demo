<?php
/**
 * Plugin Name:            WP Paris — exercice — couleur de fond
 * Description:            Ajoute une option <strong>couleur de fond</strong> aux articles et pages
 * Version:                1.0.0
 * Author:                 Christian Lescuyer
 * License:                GPLv2 or later
 * License URI:            https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package wpp-couleur-de-fond
 */
declare(strict_types=1);

defined( 'ABSPATH' ) || exit;

/*
 * Pour installer la librairie Carbon Fields, dans le dossier du plugin, lancer:
 *
 *   composer require htmlburger/carbon-fields
 */
add_action( 'after_setup_theme', function() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
} );

/**
 * Déclarer les fonctions Carbon Fields
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Créer le champ couleur dans l’admin
 */
add_action( 'carbon_fields_register_fields', function() {

	// Créer un container
	// https://docs.carbonfields.net/#/containers/usage
	Container::make( 'post_meta', 'wpp-univers', __( 'Choix d’un univers', 'to2020' ) )

	// Limiter aux articles (optionnel)
	->where( 'post_type', '=', 'post' )

	// Placer le sélecteur dans la colonne de droite (optionnel)
	->set_context( 'side' )

	// Ajouter le champ
	->add_fields( [

		// https://docs.carbonfields.net/#/fields/color
		Field::make( 'color', 'wpp-couleur-de-fond', __( 'Couleur de fond', 'to2020' ) )

		// Prédéfinir une palette (optionnel)
		->set_palette( array( '#98BBD8', '#649496', '#847443', '#A1C067', '#CAE196' ) ),
	] );

} );

/**
 * Ajouter la couleur en front
 */
add_action( 'wp_head', function() {
	$univers_bg_color = carbon_get_post_meta( get_the_ID(), 'wpp-couleur-de-fond' );
	if ( $univers_bg_color ) {
		echo '<style> .site-content {background-color: ' . esc_attr( $univers_bg_color ) . '}</style>' . "\n";
	}
}, 100);
