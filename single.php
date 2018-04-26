<?php
/**
 * Template to display a single post.
 *
 * @package jhalabi
 */

get_header(); ?>

<div class="site-wrapper">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'single' ); ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
