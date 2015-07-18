<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package jhalabi
 */

get_header(); ?>

<header>
	<h1 class="columns">Congratulations!</h1>
</header>

<section class="error-404 not-found">
	<h2>You did it!</h2>
	<p>You found Dino's hiding place!  Dino has been sitting here <i>all day</i> waiting for you to stop by.</p>
	<p>Dino is a great hider, but you are clearly a better seeker.  You rock!</p>

	<p>
		<br />
		<img src="<?php echo get_template_directory_uri(); ?>/img/404-dino.png" />
		<br />
	</p>

	<h2>Wait... what?!</h2>
	<p>What do you mean you were looking for something else?  Are you <i>sure</i> you weren't looking for Dino?</p>
	<p>Ok, fine.  Why don't you use this search box to find whatever could possibly be more important than a cute, cuddly baby dinosaur.  Just don't tell Dino.  That would make him sad.</p>

	<br />

	<?php get_search_form(); ?>
</section>

<?php get_footer(); ?>
