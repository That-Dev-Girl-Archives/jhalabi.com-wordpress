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
			<h2>
        <a href="http://www.thatdevgirl.com">That Dev Girl</a> is Live!
      </h2>
      
			<p>
        I am a web developer with a full time job, but I also enjoy spreading my wings
        with freelance projects.  <a href="http://www.thatdevgirl.com">That Dev Girl</a> is
        my official consulting website and features both my portfolio of websites and tools,
        as well as <a href="http://www.thatdevgirl.com/blog">development-focused blog posts</a>
        about code, web accessibility, random tech tips, and more. Check it out!
      </p>
			<a class="btn" href="http://www.thatdevgirl.com">
        <span class="fa fa-bookmark"></span> That Dev Girl
      </a>
		</div>
	</section>

	<section class="excerpt-section" aria-label="Latest blog article">
		<?php query_posts('showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>

			<article>
				<div class="site-wrapper">
					<div class="excerpt">
            <?php jhalabi_get_post_date(); ?>
						<h2>Latest Post: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn" aria-label="Read more about <?php the_title(); ?>">Read more...</a>
					</div>
				</div>
			</article>

		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
