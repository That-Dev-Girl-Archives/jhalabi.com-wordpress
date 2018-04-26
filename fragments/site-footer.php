<?php
/**
 * Page footer template fragment.
 *
 * @package jhalabi
 */
?>

<footer>
  <div class="footer-row">
    <section aria-label="Blog categories">
      <h2>Read My Stuff</h2>
      <?php wp_nav_menu( array('menu' => 'Footer Blog Nav') ); ?>
    </section>

    <section class="wide" aria-label="Contact links">
      <h2>Get in touch</h2>

      <p>Have a question? Just want to say hello? Drop me a note or find me on a social network.</p>

      <p>
        <a href="https://twitter.com/jonihalabi" class="icon" aria-label="Twitter">
          <span class="fab fa-twitter"></span>
        </a>

        <a href="https://www.linkedin.com/in/jonihalabi" class="icon" aria-label="LinkedIn">
          <span class="fab fa-linkedin"></span>
        </a>

        <a href="https://www.pinterest.com/jonihalabi/" class="icon" aria-label="Pinterest">
          <span class="fab fa-pinterest"></span>
        </a>

        <a href="mailto:joni@jhalabi.com" class="icon" aria-label="Email">
          <span class="fas fa-envelope"></span>
        </a>
      </p>
    </section>

    <section aria-label="Search this site">
      <h2>Search</h2>
      <?php get_search_form(); ?>
    </section>
  </div>

  <div class="footer-row copyright">
    <p>&copy; <?php echo date( 'Y' ); ?> Joni Halabi</p>
  </div>
</footer>
