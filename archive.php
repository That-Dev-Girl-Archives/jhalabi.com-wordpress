<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package jhalabi
 */

get_header(); ?>

<div class="site-wrapper">
	<header aria-label="Page header">
		<h1><?php single_cat_title(); ?></h1>
		<p><?php echo category_description(); ?></p>
	</header>
</div>

<section class="archive__section" aria-label="Blog article list">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>
</section>

<?php jhalabi_posts_navigation(); ?>

<?php get_footer(); ?>
