<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// get parent css file
    wp_enqueue_style( 'parent-style', 
	get_template_directory_uri() . '/style.css' );
	//get the reset.css file
	wp_enqueue_style( 'parent-reset', 
	get_template_directory_uri() . '/reset.css' );
	
	//load child theme styles
    wp_enqueue_style( 'child-style', 
	get_stylesheet_uri(). '/style.css', 
	array( 'parent-style' ) );
	
	// Load Bootstrap Styles
	wp_enqueue_style( 'bootstrap', 
	get_stylesheet_directory_uri().'/css/bootstrap.min.css');
	
	wp_enqueue_style( 'bootstrap-theme', 
	get_stylesheet_directory_uri().'/css/bootstrap-theme.min.css');
	
	// Load Bootstap js file
	wp_enqueue_script( 'bootstrap-js', 
	get_stylesheet_directory_uri().'/js/bootstrap.min.js', array( 'jquery' ), '3.3.4', true );
	}
?>