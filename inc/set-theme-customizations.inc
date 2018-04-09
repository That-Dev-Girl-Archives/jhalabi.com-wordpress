<?php
/**
 * Setup theme support
 *
 * @package jhalabi
 */

function jhalabi_set_theme_customizations() {
  // Let WordPress manage the document title.
  add_theme_support( 'title-tag' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus(
    array( 'primary' => __( 'Primary Menu', 'jhalabi' ) )
  );

  // Switch default core markup for search form, gallery, and captions.
  add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
}

add_action( 'after_setup_theme', 'jhalabi_set_theme_customizations' );
