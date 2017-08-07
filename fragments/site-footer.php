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
				<a href="http://twitter.com/jonihalabi" class="icon" target="blank">
          <span class="fa fa-twitter-square"></span>
          <span class="sr-only">Twitter</span>
        </a>

				<a href="http://www.linkedin.com/in/jonihalabi" class="icon" target="_blank">
          <i class="fa fa-linkedin-square"></i>
          <span class="sr-only">LinkedIn</span>
        </a>

				<a href="http://www.pinterest.com/jonihalabi/" class="icon" target="_blank">
          <i class="fa fa-pinterest-square"></i>
          <span class="sr-only">Pinterest</span>
        </a>

				<a href="mailto:joni@jhalabi.com" class="icon">
          <i class="fa fa-envelope"></i>
          <span class="sr-only">Email</span>
        </a>
			</p>
		</section>

		<section aria-label="Search this site">
			<h2>Search</h2>
			<?php get_search_form(); ?>
		</section>
	</div>

	<div class="footer-row copyright">
		<p>&copy; <?php echo date('Y'); ?> Joni Halabi</p>
	</div>
</footer>
