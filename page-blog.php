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
	<header aria-label="Page header">
		<h1><?php the_title(); ?></h1>
		<p>Blog posts about life, photography, and whatever else.</p>
	</header>
</div>

<section class="blog-recent" aria-label="Latest blog post">
	<?php jhalabi_blog_recent(); ?>
</section>

<section class="blog-category-list" aria-label="List of blog categories">
	<div class="site-wrapper">
		<?php jhalabi_blog_categories(); ?>
	</div>
</section>

<?php get_footer(); ?>
