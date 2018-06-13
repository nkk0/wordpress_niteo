<?php

add_theme_support('menus');

function register_theme_menus() {
  register_nav_menus(
    array('primary-menu' => __('Primary Menu'))
  );
  add_theme_support('custom-logo');
  add_theme_support( 'automatic-feed-links' );
}

add_action('init', 'register_theme_menus');

function niteo_theme_styles() {
  wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.min.css');
  wp_enqueue_style('google_css', 'https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i');
  wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'niteo_theme_styles');

function niteo_theme_js() {
	wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'niteo_theme_js');

function themeprefix_first_paragraph() {
  $first_paragraph_str = wpautop(get_the_content());
  $first_paragraph_str = substr($first_paragraph_str, 0, strpos($first_paragraph_str, '</p>') + 4);
  $first_paragraph_str = strip_tags($first_paragraph_str, '<a><strong><em>');
  return '<p>' . $first_paragraph_str . '</p>';
}

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Name of Widgetized Area',
    'id' => 'sidebar-1',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

?>