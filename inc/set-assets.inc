<?php
/**
 * Add stylesheets and JS files to theme.
 *
 * @package jhalabi
 */

function jhalabi_set_assets() {
	wp_enqueue_style( 'jhalabi-style', get_stylesheet_uri() );

  wp_enqueue_script( 'jhalabi-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '20150201', true );
}

add_action( 'wp_enqueue_scripts', 'jhalabi_set_assets' );
