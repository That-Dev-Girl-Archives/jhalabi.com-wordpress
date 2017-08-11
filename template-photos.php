<?php /* Template Name: Photo Album */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="photos">
		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>
