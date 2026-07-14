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

	$bp_block_stylesheet = "{$theme_dir}assets/css/buddypress-blocks.css";

	if ( class_exists( 'BuddyPress' ) && file_exists( $bp_block_stylesheet ) ) {
		$bp_block_names = array(
			'bp/primary-nav',
			'bp/login-form',
			'bp/member',
			'bp/members',
			'bp/dynamic-members',
			'bp/online-members',
			'bp/active-members',
			'bp/latest-activities',
			'bp/friends',
			'bp/group',
			'bp/groups',
			'bp/dynamic-groups',
			'bp/sitewide-notices',
		);

		foreach ( $bp_block_names as $bp_block_name ) {
			wp_enqueue_block_style(
				$bp_block_name,
				array(
					'handle' => 'strap-buddypress-blocks',
					'src'    => $theme_uri . 'assets/css/buddypress-blocks.css',
					'path'   => $bp_block_stylesheet,
					'deps'   => array( 'strap-buddypress-sync' ),
				)
			);
		}
	}

	$bp_widget_panel_header_stylesheet = "{$theme_dir}assets/css/style-variations/bp-widget-system-panel-header.css";

	if ( class_exists( 'BuddyPress' ) && file_exists( $bp_widget_panel_header_stylesheet ) ) {
		$bp_widget_panel_header_blocks = array(
			'bp/primary-nav',
			'bp/dynamic-members',
			'bp/online-members',
			'bp/active-members',
			'bp/latest-activities',
			'bp/friends',
			'bp/dynamic-groups',
			'bp/sitewide-notices',
		);

		foreach ( $bp_widget_panel_header_blocks as $bp_widget_panel_header_block ) {
			wp_enqueue_block_style(
				$bp_widget_panel_header_block,
				array(
					'handle' => 'bp-widget-system-panel-header',
					'src'    => $theme_uri . 'assets/css/style-variations/bp-widget-system-panel-header.css',
					'path'   => $bp_widget_panel_header_stylesheet,
					'deps'   => array( 'strap-buddypress-blocks', 'strap-buddypress-variation-anchor' ),
				)
			);

			register_block_style(
				$bp_widget_panel_header_block,
				array(
					'name'         => 'system-panel-header',
					'label'        => 'System Panel Header',
					'style_handle' => 'bp-widget-system-panel-header',
				)
			);
		}
	}

	// Auto-register and map stylesheets to specific blocks via wp_enqueue_block_style
	// Expected filename format: [namespace]-[block]-[variation].css (e.g., core-details-system-details.css)
	foreach ( glob( "{$theme_dir}assets/css/style-variations/*.css" ) as $file ) {
		$filename = basename( $file, '.css' );
		
		// Find where the variation name starts (assuming all our variations start with 'system-')
		$var_pos = strpos( $filename, '-system-' );
		
		// Skip files that are strictly for block variations rather than block styles
		if ( in_array( $filename, array( 'core-group-system-carousel', 'bp-widget-system-panel-header' ), true ) ) {
			continue;
		}
		
		if ( $var_pos !== false ) {
			$block_part     = substr( $filename, 0, $var_pos ); // e.g., 'core-details' or 'core-page-list'
			$variation_name = 'system-' . substr( $filename, $var_pos + 8 ); // e.g., 'system-details'
			
			// Replace only the *first* dash in the block part with a slash to separate namespace from block
			$dash_pos   = strpos( $block_part, '-' );
			$block_name = substr_replace( $block_part, '/', $dash_pos, 1 ); // e.g., 'core/details' or 'core/page-list'
			
			$handle = $filename;
			$deps   = array();

			if ( str_starts_with( $block_name, 'bp/' ) ) {
				if ( ! class_exists( 'BuddyPress' ) ) {
					continue;
				}
				$deps[] = 'strap-buddypress-blocks';
				$deps[] = 'strap-buddypress-variation-anchor';
			}

			// 1. Register the conditional block stylesheet using absolute path
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => $handle,
					'src'    => $theme_uri . 'assets/css/style-variations/' . basename( $file ),
					'path'   => $file,
					'deps'   => $deps,
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

			// 3. Auto-register a Flush variation for any System List component
			if ( str_starts_with( $variation_name, 'system-list' ) ) {
				register_block_style(
					$block_name,
					array(
						'name'         => $variation_name . '-flush',
						'label'        => ucwords( str_replace( '-', ' ', $variation_name ) ) . ' Flush',
						'style_handle' => $handle,
					)
				);
			}
		}
	}

	// 4. Force core/table to use our custom tables.css override mapping
	wp_enqueue_block_style(
		'core/table',
		array(
			'handle' => 'systemstrap-tables',
			'src'    => $theme_uri . 'assets/css/tables.css',
		)
	);

	// Removed Carousel style registrations to clean up the UI.
	// We now exclusively use Block Variations (strap-carousels.js) for carousels.
}
add_action( 'init', 'strap_register_block_styles' );
