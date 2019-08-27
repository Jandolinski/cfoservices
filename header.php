<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/app.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <title><?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <? wp_head(); ?>
  </head>
  <body>
        
    <header class="header">
      <div class="container">
        <div class="header__logo__parent">
          <div class="header__logo">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="CFO Services" />
          </div>
        </div>
        <nav class="header__nav">
          <!-- <ul class="menu--desktop">
            <li class="menu__item"><a href="#" class="active">Home</a></li>
            <li class="menu__item"><a href="#">O firmie</a></li>
            <li class="menu__item"><a href="#">Oferta</a></li>
            <li class="menu__item"><a href="#">Blog</a></li>
            <li class="menu__item"><a href="#">Kontakt</a></li>
          </ul> -->
          <?php
            wp_nav_menu( array(
              'menu' => 'primary',
              'theme_location' => 'primary',
              'container' => 'div',
              'menu_class' => 'menu--desktop'
            ));
          ?>
          <button class="hamburger" aria-label="Menu">
            <span class="hamburger__container" tabindex="-1">
              <span class="hamburger__bars"></span>
            </span>
          </button>
          <?php
            wp_nav_menu( array(
              'menu' => 'primary',
              'theme_location' => 'primary',
              'container' => '',
              'menu_class' => 'menu--mobile',
              'menu_id' => 'mobile-menu'
            ));
          ?>
          <!-- <ul class="menu--mobile" id="mobile-menu">
            <li class="menu__item"><a href="#" class="active">Home</a></li>
            <li class="menu__item"><a href="#">O firmie</a></li>
            <li class="menu__item"><a href="#">Oferta</a></li>
            <li class="menu__item"><a href="#">Blog</a></li>
            <li class="menu__item"><a href="#">Kontakt</a></li>
          </ul> -->
        </nav>
      </div>
    </header>