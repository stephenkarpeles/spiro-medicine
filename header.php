<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spiro-medicine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,700,700i&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'spiro-medicine' ); ?></a>

	<header id="masthead" class="header site-header">
    <div class="header__container">

      <div class="header__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-color.png ?> " alt="Spiro Medicine Home">
      </div>

      <nav id="site-navigation" class="header__nav main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'spiro-medicine' ); ?></button>
        <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        ) );
        ?>
      </nav><!-- #site-navigation -->
    </div>		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
