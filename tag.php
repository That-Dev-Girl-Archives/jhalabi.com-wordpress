<?php
/**
 * Template to display a tag page.
 *
 * @package jhalabi
 */

get_header(); ?>

<header aria-label="Page header">
  <h1>Tag: <?php single_tag_title(); ?></h1>
</header>

<section class="archive" aria-label="Blog article list">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>

    <?php jhalabi_get_post_pagination(); ?>

  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>

  <?php endif; ?>
</section>

<?php get_footer(); ?>
