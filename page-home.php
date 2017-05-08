<?php
/**
 * The template for displaying the home page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="home-intro" aria-label="Introduction text">
		<div class="site-wrapper">
			<h2><?php echo the_field('tag_line'); ?></h2>
			<?php echo the_field('intro_text'); ?>
		</div>
	</section>

	<section class="home-intro" aria-label="About my consulting business">
		<div class="site-wrapper">
			<h2><b>That Dev Girl</b> is Live!</h2>
			<p>I have officially started freelancing as an independent web developer and just launched my new and improved portfolio site.  I am working on a couple of sites now, but am always looking to meet potential new clients.  Check out out and spread the word!</p>
			<a class="continue" href="http://www.thatdevgirl.com" target="_blank"><i class="fa fa-bookmark"></i> &nbsp; That Dev Girl</a>
		</div>
	</section>

	<section class="archive__section home" aria-label="Latest blog article">
		<?php query_posts('showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>

			<article class="excerpt__article home">
				<div class="site-wrapper">
					<div class="excerpt__div">
						<h2><b>Latest Post:</b> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php jhalabi_posted_on(); ?>
						<?php the_excerpt(); ?>
						<p><a href="<?php the_permalink(); ?>" class="continue">Read more...</a></p>
					</div>
				</div>
			</article>

		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
