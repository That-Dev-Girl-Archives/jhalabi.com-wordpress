<?php
/**
 * Template to display the resume page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="page-header" aria-label="Page header">
      <h1 class="columns"><?php the_title(); ?></h1>
    </header>

    <section class="resume__section" aria-label="Resume introduction">
      <div>
        <?php the_content(); ?>
      </div>
    </section>

    <section class="resume__section" aria-label="Technical skills">
      <div>
        <h2>Technical Skills</h2>
        <?php echo the_field('technical_skills'); ?>
        <br>

        <p>
          <a href="http://www.thatdevgirl.com" class="btn">
            <span class="fas fa-code"></span> Check out my portfolio!
          </a>
        </p>
      </div>
    </section>

    <section class="resume__section experience" aria-label="Current work">
      <div>
        <h2>Current Work</h2>
        <?php echo the_field('current_work'); ?>
      </div>
    </section>

    <section class="resume__section experience" aria-label="Conference speaking and teaching">
      <div>
        <h2>Conference Speaking and Teaching</h2>
        <?php echo the_field('speaking'); ?>
      </div>
    </section>

    <section class="resume__section experience" aria-label="Previous experience">
      <div>
        <h2>Previous Professional Experience</h2>
        <?php echo the_field('previous_work'); ?>
      </div>
    </section>

    <section class="resume__section" aria-label="Education">
      <div>
        <h2>Degrees and Certifications</h2>
        <?php echo the_field('education'); ?>
      </div>
    </section>

    <section class="resume__section" aria-label="Volunteer work">
      <div>
        <h2>Community Involvement</h2>
        <?php echo the_field('community_involvement'); ?>
      </div>
    </section>

    <section class="resume__section--social" aria-label="Resume links">
      <div>
        <a href="https://github.com/thatdevgirl">
          <span class="fab fa-github"></span> GitHub
        </a>

        <a href="https://www.linkedin.com/in/jonihalabi">
          <span class="fab fa-linkedin"></span> LinkedIn
        </a>

        <a href="https://careers.stackoverflow.com/jonihalabi">
          <span class="fab fa-stack-overflow"></span> Stack Overflow
        </a>

        <a href="<?php echo the_field('resume_pdf'); ?>">
          <span class="fas fa-file-pdf"></span> Resume PDF
        </a>
      </div>
    </section>
  </article>
<?php endwhile; ?>

<?php get_footer(); ?>
