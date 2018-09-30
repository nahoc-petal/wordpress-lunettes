<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Le_centre_visuel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lustria|Lato:400,600,900" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
      <?php esc_html_e( 'Skip to content', 'le-centre-visuel' ); ?></a>
    <header id="masthead" class="container lato is-uppercase">
      <nav class="navbar is-transparent">
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" />
          </a>
          <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
          <div class="navbar-end">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'menu-1',
              ) );
            ?>
          </div>
        </div>
      </nav>

    </header><!-- #masthead -->

    <div id="content" class="site-content">