<?php
/**
 * The template for displaying the books page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<h1><?php the_title(); ?></h1>
			<p>Because... you know... books are awesome!</p>
		</header>

		<section class="intro">
			<?php the_content(); ?>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2015</h2>
			</header>
			<?php echo the_field('books_2015'); ?>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2014</h2>
			</header>
			<?php echo the_field('books_2014'); ?>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2013</h2>
			</header>
			<?php echo the_field('books_2013'); ?>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2012</h2>
			</header>
			<?php echo the_field('books_2012'); ?>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2011</h2>
			</header>
			<?php echo the_field('books_2011'); ?>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2010</h2>
			</header>
			<?php echo the_field('books_2010'); ?>
		</section>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>