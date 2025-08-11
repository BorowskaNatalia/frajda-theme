<?php
if ( ! defined( 'SUPER_VERSION' ) ) define( 'SUPER_VERSION', '1.0.0' );

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/custom-post-types.php';

/** Cache-busting dla assetów */
function super_asset( $path ) {
  $full = get_template_directory() . $path;
  $ver  = file_exists( $full ) ? filemtime( $full ) : SUPER_VERSION;
  return get_template_directory_uri() . $path . '?v=' . $ver;
}