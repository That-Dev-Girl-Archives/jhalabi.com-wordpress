<?php
/**
 * The template for displaying the resume page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="page-header">
			<h1 class="columns"><?php the_title(); ?></h1>
		</header>

		<section class="resume__section">
			<?php the_content(); ?>
		</section>

		<section class="resume-skills resume__section">
			<header>
				<h2>Technical Skills</h2>
			</header>

			<div class="resume-skills__div">
				<?php echo the_field('technical_skills'); ?>

				<p>
					<a href="http://www.thatdevgirl.com" target="_blank" class="resume-skills--button">
						<i class="fa fa-code"></i>
						http://www.thatdevgirl.com
					</a>
				</p>
			</div>

			<div class="resume-skills__div--list">
				<h3>Front-End Basics</h3>
				<ul>
					<li>HTML 5</li>
					<li>CSS 3</li>
					<li>Sass / Less</li>
					<li>Bourbon Neat / Foundation</li>
				</ul>

				<h3>Javascript</h3>
				<ul>
					<li>Plain Ol' Javascript</li>
					<li>jQuery / jQuery UI</li>
					<li>Backbone / Marionette</li>
					<li>Require</li>
					<li>Jasmine</li>
					<li>Ember</li>
				</ul>

				<h3>Languages &amp; Scripts</h3>
				<ul>
					<li>PHP</li>
					<li>Gulp</li>
					<li>JSP / JSTL</li>
				</ul>

				<h3>CMS &amp; E-Commerce</h3>
				<ul class="last">
					<li>WordPress</li>
					<li>WooCommerce</li>
					<li>Drupal</li>
					<li>Magento</li>
				</ul>
			</div>
		</section>

		<section class="resume__section resume__section--experience">
			<header>
				<h2>That Dev Girl</h2>
				<p>October 2015 - present</p>
			</header>

			<?php echo the_field('thatdevgirl'); ?>
		</section>

		<section class="resume__section resume__section--experience">
			<header>
				<h2>General Assembly</h2>
				<p>December 2015 - present</p>
			</header>

			<?php echo the_field('ga'); ?>
		</section>

		<section class="resume__section resume__section--experience">
			<header>
				<h2>Atlantic Media Strategies</h2>
				<p>January 2015 - October 2015</p>
			</header>

			<?php echo the_field('ams'); ?>
		</section>

		<section class="resume__section resume__section--experience">
			<header>
				<h2>Optaros</h2>
				<p>December 2009 - December 2014</p>
			</header>

			<?php echo the_field('optaros'); ?>
		</section>

		<section class="resume__section resume__section--experience">
			<header>
				<h2>Cambridge Interactive Development Corp.</h2>
				<p>June 2004 - July 2009</p>
			</header>

			<?php echo the_field('cidc'); ?>
		</section>

		<section class="resume__section resume__section--misc">
			<header>
				<h2>Degrees and Certifications</h2>
			</header>

			<?php echo the_field('education'); ?>
		</section>

		<section class="resume__section resume__section--misc">
			<header>
				<h2>Community Involvement</h2>
			</header>

			<?php echo the_field('community_involvement'); ?>
		</section>

		<section class="resume__section resume__section--social">
			<a href="https://github.com/thatdevgirl" target="_blank">
				<i class="fa fa-github"></i> GitHub
			</a>

			<a href="https://www.linkedin.com/in/jonihalabi" target="_blank">
				<i class="fa fa-linkedin"></i> LinkedIn
			</a>

			<a href="https://careers.stackoverflow.com/jonihalabi" target="_blank">
				<i class="fa fa-stack-overflow"></i> Stack Overflow
			</a>

			<a href="<?php echo the_field('resume_pdf'); ?>" target="_blank">
				<i class="fa fa-file-pdf-o"></i> Resume PDF
			</a>
		</section>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
