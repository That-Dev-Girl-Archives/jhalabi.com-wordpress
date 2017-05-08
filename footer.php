</main><!-- #content -->

<br />

<footer class="site-footer">
	<div class="site-footer__block">
		<section class="site-footer__section" aria-label="Blog categories">
			<h4>Read My Stuff</h4>
			<?php wp_nav_menu( array('menu' => 'Footer Blog Nav') ); ?>
		</section>

		<section class="site-footer__section site-footer__section--wide" aria-label="Contact links">
			<h4>Get in touch</h4>

			<p>Have a question?  Need some development help?  Just feel like chatting?  Drop me a note or find me on a social network.</p>

			<p>
				<a href="http://twitter.com/jonihalabi" target="blank">
          <span class="fa fa-twitter-square"></span>
          <span class="sr-only">Twitter</span>
        </a>

				<a href="http://www.linkedin.com/in/jonihalabi" target="_blank">
          <i class="fa fa-linkedin-square"></i>
          <span class="sr-only">LinkedIn</span>
        </a>

				<a href="http://www.pinterest.com/jonihalabi/" target="_blank">
          <i class="fa fa-pinterest-square"></i>
          <span class="sr-only">Pinterest</span>
        </a>

				<a href="mailto:joni@jhalabi.com">
          <i class="fa fa-envelope"></i>
          <span class="sr-only">Email</span>
        </a>
			</p>
		</section>

		<section class="site-footer__section" aria-label="Search this site">
			<h4>Search</h4>
			<?php get_search_form(); ?>
		</section>
	</div>

	<section class="site-footer__block" aria-label="Copyright information">
		<p>&copy; <?php echo date('Y'); ?> Joni Halabi</p>
	</section>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9400057-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>
