<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" id="header">
        <div class="header__container">
            <a href="#hero" class="header__logo" aria-label="Stajnia Frajda - Strona główna">
                STAJNIA FRAJDA
            </a>
            <nav class="header__nav" aria-label="Menu główne">
                <?php
        wp_nav_menu([
          'theme_location' => 'main_menu',
          'container' => false,
          'menu_class' => 'header__menu',
          'depth' => 1
        ]);
      ?>
            </nav>
            <!-- Hamburger na mobile (js do rozwijania) -->
            <button class="header__hamburger" aria-label="Otwórz menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </header>