<?php
/* enqueue script for parent theme stylesheeet */        
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
	wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('child', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
