<header class="home-header">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/joni-halabi-logo.png" alt="Joni Halabi" class="home-header__img" />
	</a>

	<h1 class="home-header__h1">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			Joni Halabi
		</a>
	</h1>

	<p class="home-header__p">
		ux developer, cookie baker, long distance runner, amateur photographer, occasional knitter, music lover, perpetual reader
	</p>
</header>

<nav class="home-nav">
	<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
</nav>