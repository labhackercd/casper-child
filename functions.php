<?php

function enqueue_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.css');
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

?>
