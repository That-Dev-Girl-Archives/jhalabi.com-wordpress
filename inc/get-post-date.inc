<?php
/**
 * Display the publish date for a particular post.
 *
 * @package jhalabi
 */

function jhalabi_get_post_date() {
  $time_string = sprintf(
    '<time datetime="%1$s">%2$s</time>',
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );

  print '<p class="posted-on">' . $time_string . '</p>';
}
