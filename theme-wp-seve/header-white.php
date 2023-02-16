<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      
    <?php wp_head(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>

<body <?php body_class(); ?>>

  <header class="header-white">
    <a href="<?php echo home_url( '/' ); ?>">
      <img class="header-logo" src="/wp-content/uploads/2021/10/logo-white.svg" alt="Logo">
    </a> 

    <nav role="navigation" id="desktop">
      <div class="header-flex">
        <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
        <div class="header-contact cta"><a href="<?php echo site_url().'/contact' ?>">Nous contacter</a></div>
      </div>
    </nav>

    <nav role="navigation" id="mobile">
      <a href="#" id="clickMe"><img class="burger" src="/wp-content/uploads/2021/10/Menu.svg"></a>
      <div id="slideMe" class="header-mobile">
        <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
        <div class="cta contact-mobile"><a href="<?php echo site_url().'/contact' ?>">Nous contacter</a></div>
    </div>
      
    </nav>
  </header>

    <?php wp_body_open(); ?>