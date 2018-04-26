<?php
/**
 * Template to display the books page.
 *
 * @package jhalabi
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="site-wrapper">
      <header aria-label="Page header">
        <h1><?php the_title(); ?></h1>
        <p>Because... you know... books are awesome!</p>
      </header>
    </div>

    <section class="intro" aria-label="Introductory text">
      <div class="site-wrapper">
        <?php the_content(); ?>
      </div>
    </section>

    <?php if (get_field('books_2017')): ?>
      <section class="books" aria-label="Books read in 2017">
        <div class="full-width">
          <h2>Books Read in 2017</h2>
        </div>

        <div class="site-wrapper">
          <?php $books2017 = get_field('books_read_2017'); ?>

          <?php if ( have_rows( 'books_read_2017' ) ): ?>
            <table>

              <?php while ( have_rows( 'books_read_2017' ) ): the_row(); ?>
                <?php $date = get_sub_field('date'); ?>
                <?php $title = get_sub_field('title'); ?>
                <?php $author = get_sub_field('author'); ?>
                <?php $notes = get_sub_field('notes'); ?>

                <tr>
                  <td><?php echo $date; ?></td>
                  <td><?php echo $title; ?></td>
                  <td><?php echo $author; ?></td>
                  <td><?php echo $notes; ?></td>
                </tr>
              <?php endwhile; ?>
            </table>
          <?php endif; ?>

          <hr>
          <?php echo the_field('books_2017'); ?>
        </div>
      </section>
    <?php endif; ?>

    <section class="books" aria-label="Books read in 2016">
      <div class="full-width">
        <h2>Books Read in 2016</h2>
      </div>

      <div class="site-wrapper">
        <?php echo the_field('books_2016'); ?>
      </div>
    </section>

    <section class="books" aria-label="Books read in 2015">
      <div class="full-width">
        <h2>Books Read in 2015</h2>
      </div>

      <div class="site-wrapper">
        <?php echo the_field('books_2015'); ?>
      </div>
    </section>

    <section class="books" aria-label="Books read in 2014">
      <div class="full-width">
        <h2>Books Read in 2014</h2>
      </div>

      <div class="site-wrapper">
        <?php echo the_field('books_2014'); ?>
      </div>
    </section>

    <section class="books" aria-label="Books read in 2013">
      <div class="full-width">
        <h2>Books Read in 2013</h2>
      </div>

      <div class="site-wrapper">
        <?php echo the_field('books_2013'); ?>
      </div>
    </section>

    <section class="books" aria-label="Books read in 2012">
      <div class="full-width">
        <h2>Books Read in 2012</h2>
      </div>

      <div class="site-wrapper">
        <?php echo the_field('books_2012'); ?>
      </div>
    </section>

    <section class="books" aria-label="Books read in 2011">
      <div class="full-width">
        <h2>Books Read in 2011</h2>
      </div>

      <div class="site-wrapper">
        <?php echo the_field('books_2011'); ?>
      </div>
    </section>

    <section class="books" aria-label="Books read in 2010">
      <div class="full-width">
        <h2>Books Read in 2010</h2>
      </div>

      <div class="site-wrapper">
        <?php echo the_field('books_2010'); ?>
      </div>
    </section>
  </article>
<?php endwhile; ?>

<?php get_footer(); ?>
