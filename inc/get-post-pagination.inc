<?php
/**
 * Display pagination for post archive pages.
 *
 * @package jhalabi
 */

function jhalabi_get_post_pagination() {
  $args = array(
    'prev_text'          => __( '<span class="fas fa-chevron-left"></span> Older posts' ),
    'next_text'          => __( 'Newer posts <span class="fas fa-chevron-right"></span>' ),
    'screen_reader_text' => 'Blog article pagination'
  );

  the_posts_navigation($args);
}
