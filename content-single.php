<?php
/**
 * @package jhalabi
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header aria-label="Page header">
		<h1><?php the_title(); ?></h1>
		<?php jhalabi_posted_on(); ?>
	</header>

	<section class="post-topics" aria-label="Categories and tags">
		<span class="post-topics__span post-topics__span--categories">
			<b>Category:</b> <?php echo get_the_category_list( __( ', ', 'jhalabi' ) ); ?>
		</span>

		<?php if (get_the_tag_list()): ?>
		<span class="post-topics__span post-topics__span--tags">
			<b>Topics:</b> <?php echo get_the_tag_list( '', __( ' ', 'jhalabi' ) ); ?>
		</span>
		<?php endif; ?>
	</section>

	<section class="entry" aria-label="Article content">
		<div class="entry__div--share">
			<p>Share this:</p>
			<?php echo do_shortcode('[ssba]'); ?>
		</div>

		<div class="entry__div--content">
			<?php the_content(); ?>

			<div class="entry__div--comments">
				<?php  // If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>
		</div>
	</section>
</article><!-- #post-## -->
