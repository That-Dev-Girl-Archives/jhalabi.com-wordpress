<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package jhalabi
 */

get_header(); ?>

<div class="site-wrapper">
	<header>
		<h1><?php the_title(); ?></h1>
		<p>Articles about lots of things, both technical and not.</p>
	</header>
</div>

<section class="blog__section--recent">
	<?php jhalabi_blog_recent(); ?>
</section>

<section class="blog__section--topics">
	<div class="site-wrapper">
		<?php jhalabi_blog_categories(); ?>
	</div>
</section>

<?php get_footer(); ?>
