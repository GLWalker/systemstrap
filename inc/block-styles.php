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
	$pagination_stylesheet = "{$theme_dir}assets/css/system-ui-pagination.css";
	$panel_surface_stylesheet = "{$theme_dir}assets/css/system-ui-panel-surface.css";
	$panel_structure_stylesheet = "{$theme_dir}assets/css/system-ui-panel-structure.css";
	$table_surface_stylesheet = "{$theme_dir}assets/css/system-ui-table-surface.css";

	if ( file_exists( $pagination_stylesheet ) ) {
		wp_register_style(
			'strap-system-ui-pagination',
			$theme_uri . 'assets/css/system-ui-pagination.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}

	if ( file_exists( $panel_surface_stylesheet ) ) {
		wp_register_style(
			'strap-panel-surface',
			$theme_uri . 'assets/css/system-ui-panel-surface.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}

	if ( file_exists( $panel_structure_stylesheet ) ) {
		wp_register_style(
			'strap-panel-structure',
			$theme_uri . 'assets/css/system-ui-panel-structure.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}

	if ( file_exists( $table_surface_stylesheet ) ) {
		wp_register_style(
			'strap-table-surface',
			$theme_uri . 'assets/css/system-ui-table-surface.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}

	$variation_order = array(
		'core/group' => array(
			'system-flat-panel',
			'system-panel',
			'system-panel-header',
			'system-panel-footer',
		),
	);

	$all_files = glob( "{$theme_dir}assets/css/style-variations/*.css" );
	$ordered_files = array();
	$file_map      = array();

	foreach ( $all_files as $file ) {
		$file_map[ basename( $file ) ] = $file;
	}

	foreach ( $variation_order as $block_name => $variations ) {
		$block_prefix = str_replace( '/', '-', $block_name );
		foreach ( $variations as $var ) {
			$filename = "{$block_prefix}-{$var}.css";
			if ( isset( $file_map[ $filename ] ) ) {
				$ordered_files[] = $file_map[ $filename ];
				unset( $file_map[ $filename ] );
			}
		}
	}

	$files_to_process = array_merge( $ordered_files, array_values( $file_map ) );

	// Auto-register and map stylesheets to specific blocks via wp_enqueue_block_style
	// Expected filename format: [namespace]-[block]-[variation].css (e.g., core-details-system-details.css)
	foreach ( $files_to_process as $file ) {
		$filename = basename( $file, '.css' );
		
		// Find where the variation name starts (assuming all our variations start with 'system-')
		$var_pos = strpos( $filename, '-system-' );
		
		if ( 'core-button-system-icon' === $filename ) {
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



			if ( str_starts_with( $variation_name, 'system-ui-pagination' ) ) {
				$deps[] = 'strap-system-ui-pagination';
			}

			if ( 'core-table-system-panel' === $filename || 'core-table-system-flat-panel' === $filename ) {
				$deps[] = 'strap-table-surface';
			}

			if ( str_ends_with( $filename, '-system-panel' ) || str_ends_with( $filename, '-system-flat-panel' ) ) {
				$deps[] = 'strap-panel-surface';
				$deps[] = 'strap-panel-structure';
			}

			if ( str_ends_with( $filename, '-system-flat-list' ) ) {
				$deps[] = str_replace( '-system-flat-list', '-system-list', $filename );
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
			$variation_label = ucwords( str_replace( '-', ' ', $variation_name ) );

			if ( 'system-flat-panel' === $variation_name ) {
				$variation_label = 'System Flat';
			} elseif ( str_starts_with( $variation_name, 'system-ui-pagination' ) ) {
				$variation_label = str_replace( 'System Ui', 'System UI', $variation_label );
			}

			register_block_style(
				$block_name,
				array(
					'name'         => $variation_name,
					'label'        => $variation_label,
					'style_handle' => $handle,
				)
			);

			if ( str_starts_with( $variation_name, 'system-ui-pagination' ) ) {
				$pagination_child_blocks = array(
					'core/query-pagination'    => array( 'core/query-pagination-previous', 'core/query-pagination-numbers', 'core/query-pagination-next' ),
					'core/comments-pagination' => array( 'core/comments-pagination-previous', 'core/comments-pagination-numbers', 'core/comments-pagination-next' ),
				);

				foreach ( $pagination_child_blocks[ $block_name ] ?? array() as $child_block_name ) {
					wp_enqueue_block_style(
						$child_block_name,
						array(
							'handle' => $handle,
							'src'    => $theme_uri . 'assets/css/style-variations/' . basename( $file ),
							'path'   => $file,
							'deps'   => $deps,
						)
					);

					register_block_style(
						$child_block_name,
						array(
							'name'         => $variation_name,
							'label'        => $variation_label,
							'style_handle' => $handle,
						)
					);
				}
			}

			// 3. Auto-register a Flush variation for any System List component
			if ( str_starts_with( $variation_name, 'system-list' ) && ! in_array( $block_name, array( 'core/comments', 'core/latest-comments' ), true ) ) {
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
