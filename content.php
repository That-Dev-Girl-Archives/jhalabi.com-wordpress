<?php
/**
 * @package jhalabi
 */
?>

<article id="post-<?php the_ID(); ?>" class="excerpt__article">
	<header>
		<?php the_title( sprintf( '<h2><b>Latest Post:</b> <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="entry-meta">
			<?php jhalabi_posted_on(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php printf( '<p><a href="%s" rel="bookmark" class="continue">Read more</a></p>', esc_url( get_permalink() ) ); ?>
	</div><!-- .entry-content -->
</article>