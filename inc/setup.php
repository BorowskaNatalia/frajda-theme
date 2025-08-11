<?php
add_action( 'after_setup_theme', function () {
  load_theme_textdomain( 'super', get_template_directory() . '/languages' );

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', [ 'search-form','gallery','caption','style','script','navigation-widgets' ] );
  add_theme_support( 'custom-logo', ['height'=>80,'width'=>240,'flex-height'=>true,'flex-width'=>true] );

  register_nav_menus([
    'primary' => __('Menu główne', 'super'),
    'footer'  => __('Menu stopki', 'super'),
  ]);

  add_image_size( 'hero', 1920, 1080, true );
  add_image_size( 'card', 800, 600, true );
  add_image_size( 'avatar-round', 400, 400, true );
});