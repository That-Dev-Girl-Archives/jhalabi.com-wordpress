<?php
/**
 * The template for displaying the resume page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="site-wrapper">
			<header class="page-header" aria-label="Page header">
				<h1 class="columns"><?php the_title(); ?></h1>
			</header>
		</div>

		<section class="resume__section" aria-label="Resume introduction">
			<div class="site-wrapper">
				<?php the_content(); ?>
			</div>
		</section>

		<section class="resume-skills resume__section" aria-label="Technical skills">
			<header aria-label="Technical skills section header">
				<h2>Technical Skills</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('technical_skills'); ?>

				<p>
					<a href="http://www.thatdevgirl.com" target="_blank" class="resume-skills--button">
						<i class="fa fa-code"></i>
						Check out my portfolio!
					</a>
				</p>
			</div>
		</section>

		<section class="resume__section resume__section--experience" aria-label="Current work">
			<header aria-label="Current work section header">
				<h2>Current Work</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('current_work'); ?>
			</div>
		</section>

    <section class="resume__section resume__section--experience" aria-label="Conference speaking and teaching">
			<header aria-label="Current work section header">
				<h2>Conference Speaking and Teaching</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('speaking'); ?>
			</div>
		</section>

		<section class="resume__section resume__section--experience" aria-label="Previous experience">
			<header aria-label="Previous experience section header">
				<h2>Previous Professional Experience</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('previous_work'); ?>
			</div>
		</section>

		<section class="resume__section resume__section--misc" aria-label="Education">
			<header aria-label="Education section header">
				<h2>Degrees and Certifications</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('education'); ?>
			</div>
		</section>

		<section class="resume__section resume__section--misc" aria-label="Volunteer work">
			<header aria-label="Volunteer work section header">
				<h2>Community Involvement</h2>
			</header>

			<div class="site-wrapper">
				<?php echo the_field('community_involvement'); ?>
			</div>
		</section>

		<section class="resume__section resume__section--social" aria-label="Resume links">
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
