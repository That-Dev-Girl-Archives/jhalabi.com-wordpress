<?php
/**
 * @package jhalabi
 */
?>

<div id="post-<?php the_ID(); ?>" class="excerpt">
  <?php jhalabi_get_post_date(); ?>

	<?php if (is_archive() || is_search()):?>
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<?php else: ?>
		<?php the_title( sprintf( '<h2>Latest Post: <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<?php endif; ?>

	<?php the_excerpt(); ?>
  <a href="<?php the_permalink(); ?>" class="btn" aria-label="Read more about <?php the_title(); ?>">Read more...</a>
</div>
