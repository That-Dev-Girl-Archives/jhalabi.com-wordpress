<?php
/**
 * @package jhalabi
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header aria-label="Page title">
		<h1><?php the_title(); ?></h1>
		<?php jhalabi_get_post_date(); ?>
	</header>

	<section class="post-topics" aria-label="Categories and tags">
		<span class="topic categories">
			<b>Category:</b> <?php echo get_the_category_list( __( ', ', 'jhalabi' ) ); ?>
		</span>

		<?php if (get_the_tag_list()): ?>
		<span class="topic tags">
			<b>Tags:</b> <?php echo get_the_tag_list( '', __( ' ', 'jhalabi' ) ); ?>
		</span>
		<?php endif; ?>
	</section>

	<section class="post-entry" aria-label="Article content">
		<div class="share">
			<p>Share this:</p>
			<?php echo do_shortcode('[ssba]'); ?>
		</div>

		<div class="content">
			<?php the_content(); ?>
		</div>
	</section>
</div><!-- #post-## -->
