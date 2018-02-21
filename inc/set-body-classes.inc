<?php
/**
 * Add body classes to single photo pages.
 *
 * @package jhalabi
 */

function jhalabi_set_body_classes( $classes ) {
  global $post;

  if ( is_page() ) {
    if ( $post->post_parent ) {
      $parent = get_post( $post->post_parent );
      $parent_slug = $parent->post_name;

      if ( $parent_slug == 'photos' ) {
        array_push( $classes, 'photo-single' );
      }
    }
  }

  return $classes;
}

add_filter( 'body_class', 'jhalabi_set_body_classes' );
