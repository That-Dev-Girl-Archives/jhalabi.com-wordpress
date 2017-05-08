<?php
/**
 * The template for displaying the photos page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header aria-label="Page header">
			<h1><?php the_title(); ?></h1>
			<p>Photography from here, there, and everywhere.</p>
		</header>

		<section class="photos__section" aria-label="Photo galleries">
			<?php the_content(); ?>
		</section>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
