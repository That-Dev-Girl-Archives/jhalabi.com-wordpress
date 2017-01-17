<?php
/**
 * The template for displaying the books page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="site-wrapper">
			<header>
				<h1><?php the_title(); ?></h1>
				<p>Because... you know... books are awesome!</p>
			</header>
		</div>

		<section class="intro">
			<div class="site-wrapper">
				<?php the_content(); ?>
			</div>
		</section>

		<?php if (get_field('books_2017')): ?>
		<section class="books">
			<header>
				<h2>Books Read in 2017</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('books_2017'); ?>
			</div>
		</section>
		<?php endif; ?>

		<?php if (get_field('books_2016')): ?>
		<section class="books">
			<header>
				<h2>Books Read in 2016</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('books_2016'); ?>
			</div>
		</section>
		<?php endif; ?>

		<section class="books">
			<header>
				<h2>Books Read in 2015</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('books_2015'); ?>
			</div>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2014</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('books_2014'); ?>
			</div>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2013</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('books_2013'); ?>
			</div>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2012</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('books_2012'); ?>
			</div>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2011</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('books_2011'); ?>
			</div>
		</section>

		<section class="books">
			<header>
				<h2>Books Read in 2010</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('books_2010'); ?>
			</div>
		</section>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
