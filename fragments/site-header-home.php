<header class="home-header">
	<div class="site-wrapper">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joni-halabi-logo.png" alt="Joni Halabi site logo" class="home-header__img" />
		  <h1 class="home-header__h1">Joni Halabi</h1>
    </a>

		<p class="home-header__p">
			ux developer, cookie baker, long distance runner, amateur photographer, occasional knitter, music lover, perpetual reader
		</p>
	</div>
</header>

<nav class="home-nav" aria-label="Main site navigation">
	<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
</nav>
