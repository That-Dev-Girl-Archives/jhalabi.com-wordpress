<?php
/**
 * The template for displaying the home page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="home-intro">
		<h2><?php echo the_field('tag_line'); ?></h2>
		<?php echo the_field('intro_text'); ?>
	</section>

	<section class="archive__section">
		<?php query_posts('showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>

			<article class="excerpt__article home">
				<div class="excerpt__div">
					<h2><b>Latest Post:</b> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php jhalabi_posted_on(); ?>
					<?php the_excerpt(); ?>
					<p><a href="<?php the_permalink(); ?>" class="continue">Read more...</a></p>
				</div>
			</article>

		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
