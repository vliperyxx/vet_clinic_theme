<?php
/**
 * The header for our theme
 *
 * @package vet_clinic_theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#primary">
    <?php esc_html_e( 'Skip to content', 'vet_clinic_theme' ); ?>
  </a>

<div class="top-bar">
  <div class="top-bar_info">
    <p class="top-bar_address">
      <img 
        src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/top-bar/location-icon.svg" 
        alt="Location Icon" 
        class="top-bar_icon"
      >
      <span>Kyiv, 9 Khreshchatyk St.</span>
    </p>
    <p class="top-bar_schedule">
      <img 
        src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/top-bar/clock-icon.svg" 
        alt="Clock Icon" 
        class="top-bar_icon"
      >
      <span>AM – 9:00 PM, no days off</span> 
    </p>
  </div>
</div>

<header id="masthead" class="site-header">
  <a class="logo" href="/">
    <img 
      src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/logo.svg" 
      alt="Pet Life Logo" 
      class="logo-image"
    >
  </a>

  <nav id="site-navigation" class="main-navigation menu desktop">
    <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'primary-menu',  
          'container'       => false,
          'menu_class'      => 'menu-list',
          'fallback_cb'     => false,
          'menu_id'         => 'primary-menu',
        )
      );
    ?>
  </nav>

  <button class="nav-button">Login</button>
  <div class="burger-menu mobile">
    <span class="burger-line"></span>
    <span class="burger-line"></span>
    <span class="burger-line"></span>
  </div>

  <div class="mobile-menu">
    <button class="nav-button">Login</button>
    <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'mobile-menu',
          'container'       => false,
          'menu_class'      => 'menu-list',
          'fallback_cb'     => false,
          'menu_id'         => 'mobile-menu',
        )
      );
    ?>
  </div>
</header>