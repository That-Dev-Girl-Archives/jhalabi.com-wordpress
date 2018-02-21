<?php
/**
 * Display excerpt of the most recent post.
 *
 * @package jhalabi
 */

function jhalabi_get_recent_post() {
  query_posts( 'posts_per_page=1' );

  while (have_posts()):
    the_post();
    get_template_part( 'content', get_post_format() );
  endwhile;
}
