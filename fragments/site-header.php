<header class="site-header">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joni-halabi-logo.png" alt="Joni Halabi" class="site-header__img" />
	</a>

	<h1 class="site-header__h1">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			Joni Halabi
		</a>
	</h1>

	<nav class="site-nav">
		<a href="#" class="site-nav__a--menu">Menu</a>
		<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
	</nav>
</header>