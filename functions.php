<?php
/**
 * jhalabi functions and definitions
 *
 * @package jhalabi
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'jhalabi_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jhalabi_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	//Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jhalabi' ),
	) );

	// Switch default core markup for search form, comment form, and comments
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	//Enable support for Post Formats.
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'jhalabi_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // jhalabi_setup
add_action( 'after_setup_theme', 'jhalabi_setup' );

/**
 * Enqueue scripts and styles.
 */
function jhalabi_scripts() {
	wp_enqueue_style( 'jhalabi-style',       get_stylesheet_uri() );

  wp_enqueue_script( 'jhalabi-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '20150201', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jhalabi_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
