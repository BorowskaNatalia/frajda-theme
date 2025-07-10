<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content">
  <?php _e('Przejdź do treści', 'frajda'); ?>
</a>

<header class="site-header">
  <div class="container">

    <!-- Logo -->
    <div class="logo">
      <?php if ( function_exists('the_custom_logo') && has_custom_logo() ) {
          the_custom_logo();
        } else { ?>
          <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php } ?>
    </div>

    <!-- Hamburger toggle -->
    <button class="nav-toggle" aria-label="<?php esc_attr_e('Otwórz menu', 'frajda'); ?>" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Nawigacja -->
    <nav class="main-nav" aria-label="<?php esc_attr_e('Główne menu', 'frajda'); ?>">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main_menu',
          'menu_class'     => 'nav-list',
          'container'      => false,
          'fallback_cb'    => false
        ));
      ?>
    </nav>

  </div>
</header>
