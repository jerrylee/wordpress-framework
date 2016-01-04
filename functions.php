<?php

function load_styles() {
	wp_enqueue_style('bootstrap_styles', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('animate_styles', get_template_directory_uri() . '/css/animate.css');
  wp_enqueue_style('wordpress_styles', get_template_directory_uri() . '/css/wordpress.css');
	wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/styles.css');
}
add_action('wp_enqueue_scripts', 'load_styles');


function load_scripts() {
	wp_enqueue_script('bootstrap_scripts', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0', true);
	wp_enqueue_script('custom_scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

// navigation
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'lavane' ),
) );
