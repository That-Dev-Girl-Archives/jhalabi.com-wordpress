<?php
/**
 * Default template to display all pages.
 *
 * @package jhalabi
 */

get_header(); ?>

<div class="site-wrapper">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
