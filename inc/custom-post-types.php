<?php
add_action( 'init', function () {
  register_post_type( 'event', [
    'labels' => ['name'=>__('Wydarzenia','super'),'singular_name'=>__('Wydarzenie','super')],
    'public' => true,'has_archive' => false,'show_in_rest' => true,
    'menu_icon' => 'dashicons-calendar-alt','supports' => ['title','editor','thumbnail','excerpt']
  ]);

  register_post_type( 'instructor', [
    'labels' => ['name'=>__('Instruktorzy','super'),'singular_name'=>__('Instruktor','super')],
    'public' => true,'has_archive' => false,'show_in_rest' => true,
    'menu_icon' => 'dashicons-groups','supports' => ['title','editor','thumbnail','excerpt']
  ]);
});