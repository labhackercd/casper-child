<?php

function enqueue_theme_styles_and_scripts() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri().'/css/font-awesome.css');

    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri().'/scripts/bootstrap.js', array('jquery'), '0.0.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_theme_styles_and_scripts');

?>
