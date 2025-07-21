<?php
if ( ! defined( 'ABSPATH' ) ) exit;
require get_template_directory() . '/inc/enqueue.php';

add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
    if (in_array('btn', $item->classes)) {
        $atts['class'] = (isset($atts['class']) ? $atts['class'].' ' : '') . 'btn';
    }
    return $atts;
}, 10, 3);


function sf_register_menus() {
    register_nav_menus([
        'main_menu' => __('Menu główne', 'stajniafrajda'),
    ]);
}
add_action('after_setup_theme', 'sf_register_menus');