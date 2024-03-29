<?php
/* enqueue script for parent theme stylesheeet */
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
	wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('child', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// Ajout d'un hook pour le menu personnalisé
add_filter('wp_nav_menu_items', 'menu_with_admin', 10, 2);

function menu_with_admin($items, $args)
{

	if (is_user_logged_in() && $args->theme_location == 'main_menu') {
		$items .= '<li class="menu-survol"><a href="'. site_url().'/wp-admin">Admin</a>';
	}
	$items .= '</li><li class="menu-button"><a href="'.site_url().'/precommande"><span>Commande</span></a></li>';


	return $items;

}
