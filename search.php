<?php
/**
 * Template to display the search results page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
  <header aria-label="Page header">
    <h1><?php printf( __( 'Search Results for: "%s"', 'jhalabi' ), get_search_query() ); ?></h1>
  </header>

  <section class="archive" aria-label="Search results">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content' ); ?>
    <?php endwhile; ?>

    <?php jhalabi_get_post_pagination(); ?>
  </section>

<?php else : ?>
  <?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>

<?php get_footer(); ?>
