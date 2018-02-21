<?php
/**
 * Display list of all block categories.
 *
 * @package jhalabi
 */

function jhalabi_get_categories() {
  $cats = get_categories();

  foreach ( $cats as $cat ) {
    // Get the URL for the category page.
    $link = get_category_link( $cat->term_id );

    // Get the number of posts in this category.
    $posts_count = get_term_by( 'id', $cat->term_id, 'category' )->count;

    // Print out the category block.
    print
      '<div class="category">' .
        '<h2><a href="' . $link . '">' . $cat->name . '</a></h2>' .
        '<p>' . $cat->description . '</p>' .
        '<p><a href="' . $link . '" class="btn" aria-label="Read ' . $posts_count . 'posts about ' . $cat->name . '">Read ' . $posts_count . ' posts</a></p>' .
      '</div>';
  }
}
