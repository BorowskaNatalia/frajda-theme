<?php
add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'super-main', super_asset('/assets/css/main.css'), [], null, 'all' );
  wp_enqueue_script( 'super-main', super_asset('/assets/js/main.js'), [], null, true );
});