<?php

function niteo_theme_styles() {
	wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.min.css');
	wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('roboto_font', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'niteo_theme_styles');

function niteo_theme_js() {
	wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false);
	wp_enqueue_script('foundation_js', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '', true);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true);
}

add_action('wp_enqueue_scripts', 'niteo_theme_js');

?>