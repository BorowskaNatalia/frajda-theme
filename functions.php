<?php
function frajda_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'frajda_enqueue_styles');

function frajda_setup() {
  register_nav_menus(array(
    'main_menu' => 'Główne menu',
  ));
}
add_action('after_setup_theme', 'frajda_setup');
