<?php
/**
 * Template to display the site header.
 *
 * @package jhalabi
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?v=2" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?v=3" type="image/x-icon">

  <?php if ( is_404() ): ?>
    <title>You Found Dino! &#8211; <?php echo get_bloginfo(); ?></title>
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php if ( is_home() || is_front_page() ): ?>
    <?php include( 'fragments/site-header-home.php' ); ?>
  <?php else: ?>
    <?php include( 'fragments/site-header.php' ); ?>
  <?php endif; ?>

  <main id="content" class="site-content">
