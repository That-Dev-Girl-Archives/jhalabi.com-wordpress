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

        <nav class="book-anchors" aria-label="Links to book information by year">
          <?php for ( $i = 2018; $i >= 2010; $i-- ): ?>
            <a href="#books-<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php if ( $i !== 2010 ): ?> | <?php endif; ?>
          <?php endfor; ?>
        </nav>
      </div>
    </section>

    <?php // Get the books for each year. ?>
    <?php for ( $i = 2018; $i >= 2010; $i-- ): ?>
      <?php $books = jhalabi_get_books_read( $i ); ?>
      <?php if ( $books ): ?>

        <section class="books" aria-label="Books read in <?php echo $i; ?>">
          <div id="books-<?php echo $i; ?>" class="anchor">&nbsp;</div>

          <div class="full-width">
            <h2>
              Books Read in <?php echo $i; ?>
              <span class="total">(Total: <?php echo count( $books ); ?>)</span>
            </h2>
          </div>

          <div class="site-wrapper">
            <table class="books-read">
              <caption class="sr-only">List of books read in <?php echo $i; ?>.</caption>

              <thead>
                <tr>
                  <th>Book</th>
                  <th>Thoughts</th>
                  <th>Date read</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ( $books as $book ): ?>
                  <tr>
                    <td class="book">
                      <b><?php print $book->title; ?></b>
                      <span class="author"><?php print $book->author; ?></span>
                    </td>

                    <td class="notes">
                      <?php print $book->notes; ?>
                      <?php if ( $book->recommended ): ?>
                        <span class="fas fa-heart">
                          <span class="sr-only">Loved it!</span>
                        </span>
                      <?php endif; ?>
                    </td>

                    <td class="date">
                      <?php print $book->date; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </section>

      <?php endif; ?>
    <?php endfor; ?>

  </article>
<?php endwhile; ?>

<?php get_footer(); ?>
