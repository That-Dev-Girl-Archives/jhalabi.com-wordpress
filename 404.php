<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package jhalabi
 */

get_header(); ?>

<h1 class="columns">Congratulations!</h1>

<section class="error-404">
	<div class="error-404__div--inner">
		<div class="error-404__div">
      <h2>You found Dino's hiding place!</h2>
      <p>
          Dino has been sitting here <em>all day</em> waiting for you to stop by.
          Dino is a great hider, but you are clearly a better seeker.  You rock!
      </p>
		</div>

		<div class="error-404__div--dino">
		</div>
	</div>

  <div class="error-404__div--inner">
    <h2>Wait... what?!</h2>
    <p>
      What do you mean you were looking for something else?!  Ok, fine.  Why
      don't you use this search box to find whatever could possibly be more
      important than a cute, cuddly baby dinosaur.  Just don't tell Dino.
      That would make him sad.
    </p>

    <br />

    <?php get_search_form(); ?>
  </div>
</section>

<?php get_footer(); ?>
