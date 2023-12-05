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




/* --------------- TRAVAIL DE RECHERCHE -----------------

Prise en charge des menus WP.

	register_nav_menus( array(
		'primary' => 'Menu Principal',
		'footer' => 'Menu de pied de page',
) ); */



// Ajout du lien ADMIN dans le menu principal si autorisé.

 /*function menu_admin_planty( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li id="menu-item-409" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-409">
    			<a target="_blank" class="menu-link" href="http://localhost/planty/wp-admin/">Admin</a>
				</li>';
    }
    return $items;
}

add_filter( 'wp_nav_menu_items', 'menu_admin_planty', 10, 2); 

Pour éventuellement ajouter un lien de déconnexion juste aprés le lien Admin :
 | <a href="<?php echo wp_logout_url(home_url()); ?>">Déconnexion</a> */


 
/* Pour définir l'ordre du menu.

function custom_menu_order() {
	return array( 'menu-item-24', 'menu-item-409', 'menu-item-747');
}

add_filter( 'menu_order', 'custom_menu_order' );

        // Divise les éléments de menu existants en un tableau     
		$menu_items = explode('</li>', $items);

		// Insère l'élément de menu de l'administration en deuxième position      
		array_splice($menu_items, 1, 0, $admin_link); 

		// Recrée la chaîne d'éléments de menu en les rejoignant     
		$items = implode('</li>', $menu_items); 
		
	--------------- FIN DE RECHERCHE ----------------- */


function menu_admin_planty( $items, $args ) {

	// Vérifie si l'utilisateur est connecté et si l'emplacement du menu est 'primary'.
if ( is_user_logged_in() && $args->theme_location == 'primary') {

	// Construit l'élément de menu pour le lien vers l'interface d'administration.  
	$admin_link = '<li id="menu-item-409" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-409">                        
	<a target="_blank" class="menu-link" href="http://localhost/planty/wp-admin/">Admin</a>                   
	</li>';

	// Divise les éléments de menu existants en un tableau.  
	$menu_items = explode('</li>', $items);      

	// Insère l'élément de menu de l'administration en deuxième position.
	array_splice($menu_items, 1, 0, $admin_link);

	// Recrée la chaîne d'éléments de menu en les rejoignant.
	$items = implode('</li>', $menu_items);
	}

	// Renvoie les éléments de menu réorganisés.
	return $items;
}

	// Ajoute un hook pour exécuter la fonction 'menu_admin_planty' lors de la génération des éléments de menu.
	add_filter( 'wp_nav_menu_items', 'menu_admin_planty', 10, 2);

	/* Pour bien comprendre, $items est défini comme 
	une chaîne de caractères représentant 
	les éléments de menu HTML générés par WordPress.

	Dans la fonction, le code ajoute un nouvel élément de menu
	à la chaîne $items si l'utilisateur est connecté et si le menu en cours de génération 
	est celui spécifié par $args->theme_location. La fonction modifie ensuite la chaîne 
	$items en ajoutant le lien administrateur à la deuxième position dans le menu. */
?>
