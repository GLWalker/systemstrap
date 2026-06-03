<?php
/**
 * Register Custom Block Styles
 *
 * @package SystemStrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register block styles.
 */
function strap_register_block_styles() {
	$theme_dir = get_template_directory() . '/';
	$theme_uri = get_template_directory_uri() . '/';

	// Auto-register and map stylesheets to specific blocks via wp_enqueue_block_style
	// Expected filename format: [namespace]-[block]-[variation].css (e.g., core-details-system-details.css)
	foreach ( glob( "{$theme_dir}assets/css/style-variations/*.css" ) as $file ) {
		$filename = basename( $file, '.css' );
		
		// Find where the variation name starts (assuming all our variations start with 'system-')
		$var_pos = strpos( $filename, '-system-' );
		
		// Skip files that are strictly for block variations rather than block styles
		if ( $filename === 'core-group-system-carousel' ) {
			continue;
		}
		
		if ( $var_pos !== false ) {
			$block_part     = substr( $filename, 0, $var_pos ); // e.g., 'core-details' or 'core-page-list'
			$variation_name = 'system-' . substr( $filename, $var_pos + 8 ); // e.g., 'system-details'
			
			// Replace only the *first* dash in the block part with a slash to separate namespace from block
			$dash_pos   = strpos( $block_part, '-' );
			$block_name = substr_replace( $block_part, '/', $dash_pos, 1 ); // e.g., 'core/details' or 'core/page-list'
			
			$handle = $filename;

			// 1. Register the conditional block stylesheet using absolute path
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => $handle,
					'src'    => $theme_uri . 'assets/css/style-variations/' . basename( $file ),
					'path'   => $file,
				)
			);

			// 2. Register the Block Style Variation and map it to the handle
			register_block_style(
				$block_name,
				array(
					'name'         => $variation_name,
					'label'        => ucwords( str_replace( '-', ' ', $variation_name ) ),
					'style_handle' => $handle,
				)
			);
		}
	}

	// Removed Carousel style registrations to clean up the UI.
	// We now exclusively use Block Variations (strap-carousels.js) for carousels.
}
add_action( 'init', 'strap_register_block_styles' );


