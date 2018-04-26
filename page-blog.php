<?php
/**
 * Template to display the blog page.
 *
 * @package jhalabi
 */

get_header(); ?>

<div class="site-wrapper">
  <header aria-label="Page header">
    <h1><?php the_title(); ?></h1>
    <p>Blog posts about the untechnical side of my life. For geekier posts, check out <a href="http://www.thatdevgirl.com/blog">my development blog</a>.</p>
  </header>
</div>

<section class="blog-recent" aria-label="Latest blog post">
  <?php jhalabi_get_recent_post(); ?>
</section>

<section class="blog-category-list" aria-label="List of blog categories">
  <div class="site-wrapper">
    <?php jhalabi_get_categories(); ?>
  </div>
</section>

<?php get_footer(); ?>
