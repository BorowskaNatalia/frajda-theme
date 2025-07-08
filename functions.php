<?php
function frajda_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'frajda_enqueue_styles');

function frajda_setup() {
  // Ładowanie tłumaczeń motywu
  load_theme_textdomain('frajda', get_template_directory() . '/languages');
  // Włączenie wsparcia dla różnych funkcji WordPress
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style'));
  add_theme_support('custom-logo', array(
    'height'      => 80,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description')
  ));
  register_nav_menus(array(
    'main_menu' => 'Główne menu',
  ));
}
add_action('after_setup_theme', 'frajda_setup');
