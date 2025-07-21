<?php
if ( ! defined( 'ABSPATH' ) ) exit;
require get_template_directory() . '/inc/enqueue.php';

function sf_register_menus() {
    register_nav_menus([
        'main_menu' => __('Menu główne', 'stajniafrajda'),
    ]);
}
add_action('after_setup_theme', 'sf_register_menus');