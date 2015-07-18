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

			<div>
				<div class="resume-skills__div">
					<h3>Front-End Basics</h3>
					<ul>
						<li>HTML 5</li>
						<li>CSS 3</li>
						<li>SASS</li>
						<li>Less</li>
						<li>Bourbon / Neat</li>
						<li>Foundation</li>
						<li>Media Queries</li>
					</ul>
				</div>

				<div class="resume-skills__div">
					<h3>Javascript</h3>
					<ul>
						<li>Plain Ol' Javascript</li>
						<li>jQuery</li>
						<li>jQuery UI</li>
						<li>Backbone</li>
						<li>Marionette</li>
						<li>Require</li>
						<li>Jasmine</li>
					</ul>
				</div>

				<div class="resume-skills__div">
					<h3>CMS &amp; E-Commerce</h3>
					<ul>
						<li>WordPress</li>
						<li>Drupal</li>
						<li>Magento</li>
						<li>Woo Commerce</li>
					</ul>
				</div>

				<div class="resume-skills__div">
					<h3>Languages</h3>
					<ul>
						<li>PHP</li>
						<li>JSP</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="resume__section resume__section--experience">
			<header>
				<h2>Atlantic Media Strategies</h2>
				<p>January 2015 - present</p>
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
			<a href="https://www.linkedin.com/in/jonihalabi" target="_blank">
				<i class="fa fa-linkedin"></i> LinkedIn
			</a>

			<a href="https://careers.stackoverflow.com/jonihalabi" target="_blank">
				<i class="fa fa-stack-overflow"></i> Stack Overflow
			</a>

			<a href="https://github.com/thatdevgirl" target="_blank">
				<i class="fa fa-github"></i> GitHub repos
			</a>

			<a href="<?php echo the_field('resume_pdf'); ?>" target="_blank">
				<i class="fa fa-file-pdf-o"></i> Resume PDF
			</a>
		</section>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
