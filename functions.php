<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

$project_image_size = array();

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_action( 'after_setup_theme', 'add_resource_asset_size' );

function add_resource_asset_size() {
	global $project_image_size;
	$project_image_size = array();

	$project_image_size['resource-product-cta']      = array( 750, 370 );
	$project_image_size['resource-product-blog-cta'] = array( 350, 233 );
	$project_image_size['resource-product-shot']     = array( 750, 500 );
	$project_image_size['resource-grid-item']        = array( 260, 128 );

	foreach ( $project_image_size as $k => $v ) {

		// add image size

		add_image_size( $k, $v[0], $v[1], true );

	}

}