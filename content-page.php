<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package jhalabi
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?> aria-label="<?php the_title(); ?>">
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
</section><!-- #post-## -->
