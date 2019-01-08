<?php
/**
 * AstraClient Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AstraClient
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRACLIENT_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astraclient-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRACLIENT_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


// A placer dans le fichier functions.php de votre thème sans le <?php du début
/***
 * Remplacer les couleurs par défaut (color et background-color)
 * ici pour 'margenta-fort' cela donnera les classes suivantes:
 * '.has-magenta-fort-background-color' et 'has-magenta-fort-color'
 * 
 * Attention, si votre thème le nécessite, ajouter les fonctions 
 * add_theme_support dans un hook sur after_setup_theme
 * Voir le lien pour plus d'information: 
 * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support
 */
add_theme_support( 'editor-color-palette', array(
    array(
        'name' => __('Mine Shaft', 'genesis-sample' ),
        'slug' => 'MineShaft',
        'color' => '#4a4a4a',
    ),
    array(
        'name' => __( 'Mongoose', 'genesis-sample' ),
        'slug' => 'Mongoose',
        'color' => '#b09f82',
    ),
    array(
        'name' => __( 'White', 'genesis-sample' ),
        'slug' => 'white',
        'color' => '#ffffff',
    ),
    array(
        'name' => __( 'Pickled Bean', 'genesis-sample' ),
        'slug' => 'Pickled_Bean',
        'color' => '#8b572a',
    ),
) );
// Suppression des couleurs sur mesure
add_theme_support( 'disable-custom-colors' );