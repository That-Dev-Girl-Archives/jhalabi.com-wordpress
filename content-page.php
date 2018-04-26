<?php
/**
 * Template part used to display page content.
 *
 * @package jhalabi
 */
?>

<section <?php post_class(); ?> aria-label="<?php the_title(); ?>">
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</section>
