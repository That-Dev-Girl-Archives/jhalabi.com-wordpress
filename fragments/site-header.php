<header class="site-header">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joni-halabi-logo.png" alt="Joni Halabi site logo" />
    <h1>Joni Halabi</h1>
	</a>

	<nav class="site-nav">
		<a href="#" class="menu">Menu</a>
		<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
	</nav>
</header>
