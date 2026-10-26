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
	$tabs_stylesheet = "{$theme_dir}assets/css/system-ui-tabs.css";
	$equal_heights_stylesheet = "{$theme_dir}assets/css/system-ui-equal-heights.css";

	if ( file_exists( $pagination_stylesheet ) ) {
		wp_register_style(
			'strap-system-ui-pagination',
			$theme_uri . 'assets/css/system-ui-pagination.css',
			array(),
			filemtime( $pagination_stylesheet )
		);
	}

	if ( file_exists( $panel_surface_stylesheet ) ) {
		wp_register_style(
			'strap-panel-surface',
			$theme_uri . 'assets/css/system-ui-panel-surface.css',
			array(),
			filemtime( $panel_surface_stylesheet )
		);
	}

	if ( file_exists( $panel_structure_stylesheet ) ) {
		wp_register_style(
			'strap-panel-structure',
			$theme_uri . 'assets/css/system-ui-panel-structure.css',
			array(),
			filemtime( $panel_structure_stylesheet )
		);
	}

	if ( file_exists( $table_surface_stylesheet ) ) {
		wp_register_style(
			'strap-table-surface',
			$theme_uri . 'assets/css/system-ui-table-surface.css',
			array(),
			filemtime( $table_surface_stylesheet )
		);
	}

	if ( file_exists( $tabs_stylesheet ) ) {
		wp_enqueue_block_style(
			'core/tabs',
			array(
				'handle' => 'strap-system-ui-tabs',
				'src'    => $theme_uri . 'assets/css/system-ui-tabs.css',
				'path'   => $tabs_stylesheet,
				'ver'    => filemtime( $tabs_stylesheet ),
			)
		);
	}

	if ( file_exists( $equal_heights_stylesheet ) ) {
		foreach ( array( 'core/columns', 'core/group' ) as $block_name ) {
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => 'strap-system-ui-equal-heights',
					'src'    => $theme_uri . 'assets/css/system-ui-equal-heights.css',
					'path'   => $equal_heights_stylesheet,
					'ver'    => filemtime( $equal_heights_stylesheet ),
				)
			);

			register_block_style(
				$block_name,
				array(
					'name'         => 'equal-heights',
					'label'        => __( 'Equal Heights', 'systemstrap' ),
					'style_handle' => 'strap-system-ui-equal-heights',
				)
			);
		}
	}

	$variation_order = array(
		'core/tabs' => array(
			'system-classic',
			'system-vertical',
			'system-panel',
			'system-flat-panel',
			'system-list',
			'system-flat-list',
		),
		'core/tab-list' => array(
			'system-nav-button',
			'system-nav-gen',
		),
		'core/tab-panels' => array(
			'system-panel',
			'system-flat-panel',
		),
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
	$flat_panel_structure_deps = array(
		'core-details-system-flat-panel'   => 'core-details-system-details',
		'core-accordion-system-flat-panel' => 'core-accordion-system-accordion',
	);

	// Auto-register and map stylesheets to specific blocks via wp_enqueue_block_style
	// Expected filename format: [namespace]-[block]-[variation].css (e.g., core-details-system-details.css)
	foreach ( $files_to_process as $file ) {
		$filename = basename( $file, '.css' );
		
		// Find where the variation name starts (assuming all our variations start with 'system-')
		$var_pos = strpos( $filename, '-system-' );
		
		if ( in_array( $filename, array( 'core-button-system-icon', 'bp-widget-system-panel-header' ), true ) ) {
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

			if ( isset( $flat_panel_structure_deps[ $filename ] ) ) {
				$deps[] = $flat_panel_structure_deps[ $filename ];
			}

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
					'ver'    => filemtime( $file ),
				)
			);

			// 2. Register the Block Style Variation and map it to the handle
			$variation_label = ucwords( str_replace( '-', ' ', $variation_name ) );

			if ( 'system-flat-panel' === $variation_name ) {
				if ( 'core/details' === $block_name ) {
					$variation_label = 'System Flat Details';
				} elseif ( 'core/accordion' === $block_name ) {
					$variation_label = 'System Flat Accordion';
				} elseif ( in_array( $block_name, array( 'core/tabs', 'core/tab-panels' ), true ) ) {
					$variation_label = 'System Flat Panel';
				} else {
					$variation_label = 'System Flat';
				}
			} elseif ( 'core/tabs' === $block_name && 'system-classic' === $variation_name ) {
				$variation_label = 'Classic';
			} elseif ( 'core/tabs' === $block_name && 'system-vertical' === $variation_name ) {
				$variation_label = 'Vertical';
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
							'ver'    => filemtime( $file ),
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
			if ( str_starts_with( $variation_name, 'system-list' ) && ! in_array( $block_name, array( 'core/comments', 'core/latest-comments', 'core/tabs', 'core/tab-list' ), true ) ) {
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

	// Expose the existing inline System Badge helper through eligible text blocks.
	foreach ( array( 'core/paragraph', 'core/heading', 'core/list-item', 'core/preformatted', 'core/verse' ) as $block_name ) {
		register_block_style(
			$block_name,
			array(
				'name'  => 'system-badge',
				'label' => __( 'System Badge', 'systemstrap' ),
			)
		);
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

/**
 * Register the shared BuddyPress System Panel treatment.
 *
 * BuddyPress widget blocks own their Panel surface directly so sidebar
 * patterns do not need wrapper Groups to provide that presentation.
 */
function strap_buddypress_sidebar_blocks() {
	return array( 'bp/login-form', 'bp/online-members', 'bp/active-members', 'bp/dynamic-members', 'bp/friends', 'bp/dynamic-groups', 'bp/latest-activities', 'bp/sitewide-notices', 'bp/primary-nav' );
}

function strap_register_buddypress_block_styles() {
	if ( ! function_exists( 'register_block_style' ) || ! function_exists( 'wp_enqueue_block_style' ) ) {
		return;
	}
	if ( ! function_exists( 'strap_should_load_buddypress_integration' ) || ! strap_should_load_buddypress_integration() ) {
		return;
	}

	$stylesheet = get_template_directory() . '/assets/css/style-variations/bp-widget-system-panel-header.css';

	if ( ! file_exists( $stylesheet ) ) {
		return;
	}

	foreach ( array( 'avatars', 'single-navigation' ) as $asset ) {
		$path = get_template_directory() . '/assets/css/buddypress/buddypress-' . $asset . '.css';
		wp_register_style( 'strap-buddypress-' . $asset, get_template_directory_uri() . '/assets/css/buddypress/buddypress-' . $asset . '.css', array(), filemtime( $path ) );
	}
	// The Group's on-demand enqueue may not have run when a BP block needs
	// its canonical Flat Panel context. Register that same asset/handle now.
	$flat_path = get_template_directory() . '/assets/css/style-variations/core-group-system-flat-panel.css';
	wp_register_style( 'core-group-system-flat-panel', get_template_directory_uri() . '/assets/css/style-variations/core-group-system-flat-panel.css', array( 'strap-panel-surface', 'strap-panel-structure' ), filemtime( $flat_path ) );

	foreach ( strap_buddypress_sidebar_blocks() as $block_name ) {
		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => 'bp-widget-system-panel-header',
				'src'    => get_template_directory_uri() . '/assets/css/style-variations/bp-widget-system-panel-header.css',
				'path'   => $stylesheet,
				'deps'   => array( 'strap-panel-surface', 'core-group-system-flat-panel', 'strap-buddypress-avatars' ),
				'ver'    => filemtime( $stylesheet ),
			)
		);

		foreach ( array( 'default' => __( 'BuddyPress Default', 'systemstrap' ), 'system-panel' => __( 'System Panel', 'systemstrap' ), 'system-flat-panel' => __( 'System Flat Panel', 'systemstrap' ) ) as $name => $label ) {
			register_block_style( $block_name, array( 'name' => $name, 'label' => $label, 'is_default' => 'default' === $name, 'style_handle' => 'bp-widget-system-panel-header' ) );
		}
	}
}
add_action( 'init', 'strap_register_buddypress_block_styles', 20 );
