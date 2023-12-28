<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

// Inscription des fichiers styles du thème enfant.
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

// Récupération du nom du dossier du thème enfant actif. 
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme.css',  array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


include("commande.php");

// Ajout du lien ADMIN dans le menu principal si autorisé.
function menu_admin_planty( $items, $args ) {


if ( is_user_logged_in() && $args->theme_location == 'primary') {

	$admin_link = '<li id="menu-item-409" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-409">                        
	<a target="_blank" class="menu-link" href="' . site_url() .  '/wp-admin/">Admin</a>                   
	</li>';

	$menu_items = explode('</li>', $items);      

	array_splice($menu_items, 1, 0, $admin_link);

	$items = implode('</li>', $menu_items);
	}


	return $items;
}

add_filter( 'wp_nav_menu_items', 'menu_admin_planty', 10, 2);


enregistrerCommande();
?>
