<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', 
	get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', 
	get_stylesheet_uri(), 
	array( 'parent-style' ) );
		// Load Boostrap Styles
	 wp_enqueue_style( 'bootstrap', 
	get_stylesheet_directory_uri(),'/css/boostrap.min.css ');
	wp_enqueue_style( 'bootstrap-theme', 
	get_stylesheet_directory_uri(),'/css/boostrap-theme.min.css ');
		// Load Bootstap js file
	wp_enqueue_style( 'script-name', 
	get_stylesheet_directory_uri(),'/js/boostrap.min.js ',
	array( 'jquery' ) );
}
?>