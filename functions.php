<?php

// Ładowanie stylów i skryptów
function frajda_enqueue_assets() {
  wp_enqueue_style(
    'frajda-style',
    get_template_directory_uri() . '/style.css',
    [],
    filemtime(get_template_directory() . '/style.css')
  );
}
add_action('wp_enqueue_scripts', 'frajda_enqueue_assets');

// Konfiguracja motywu
function frajda_setup() {
  // Tłumaczenia
  load_theme_textdomain('frajda', get_template_directory() . '/languages');

  // Podstawowe wsparcie
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style']);

  // Logo
  add_theme_support('custom-logo', [
    'height'      => 80,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => ['site-title', 'site-description'],
  ]);

  // Menu
  register_nav_menus([
    'main_menu' => __('Główne menu', 'frajda'),
  ]);
}
add_action('after_setup_theme', 'frajda_setup');
