<?php

/*
 * Begin Custom Functions -
 * This will be loaded directly before the parent theme functions.
 */
function enqueue_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.css');
    wp_enqueue_style('extraneous-style', get_stylesheet_directory_uri().'/css/extraneous.css');
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function custom_theme_setup() {
	add_theme_support( 'post-thumbnails' ); 
}

add_action( 'after_setup_theme', 'custom_theme_setup' );

?>
