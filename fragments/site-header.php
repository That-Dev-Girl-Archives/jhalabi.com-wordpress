<header class="site-header">
	<a href="/">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/joni-halabi-logo.png" alt="Joni Halabi site logo" />
    <h1>Joni Halabi</h1>
	</a>

	<nav class="site-nav">
		<button id="open-menu">Menu</button>
		<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
	</nav>
</header>
