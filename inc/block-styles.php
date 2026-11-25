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
	$conditional_assets = array();

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
			$asset = array(
				'handle' => 'strap-system-ui-equal-heights',
				'src'    => $theme_uri . 'assets/css/system-ui-equal-heights.css',
				'path'   => $equal_heights_stylesheet,
				'ver'    => filemtime( $equal_heights_stylesheet ),
				'deps'   => array(),
			);
			foreach ( array( 'is-style-equal-heights', 'has-equal-heights' ) as $token ) {
				$conditional_assets[ $block_name ][ $token ][ $asset['handle'] ] = $asset;
			}

			register_block_style(
				$block_name,
				array(
					'name'  => 'equal-heights',
					'label' => __( 'Equal Heights', 'systemstrap' ),
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
	$ordered_handles = array();
	$flat_panel_structure_deps = array(
		'core-details-system-flat-panel'   => 'core-details-system-details',
		'core-accordion-system-flat-panel' => 'core-accordion-system-accordion',
	);

	// Derive variation registrations and their asset loading paths from filenames.
	// Expected filename format: [namespace]-[block]-[variation].css (e.g., core-details-system-details.css)
	foreach ( $files_to_process as $file ) {
		$filename = basename( $file, '.css' );
		
		// Find where the variation name starts (assuming all our variations start with 'system-')
		$var_pos = strpos( $filename, '-system-' );
		
		if ( 'bp-widget-system-panel-header' === $filename ) {
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

			$asset = array(
				'handle' => $handle,
				'src'    => $theme_uri . 'assets/css/style-variations/' . basename( $file ),
				'path'   => $file,
				'deps'   => $deps,
				'ver'    => filemtime( $file ),
			);
			$conditional_assets[ $block_name ][ 'is-style-' . $variation_name ][ $handle ] = $asset;
			if ( isset( $variation_order[ $block_name ] ) ) {
				$ordered_handles[] = $handle;
			}

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

			$variation = array(
				'name'  => $variation_name,
				'label' => $variation_label,
			);
			register_block_style( $block_name, $variation );

			if ( str_starts_with( $variation_name, 'system-ui-pagination' ) ) {
				$pagination_child_blocks = array(
					'core/query-pagination'    => array( 'core/query-pagination-previous', 'core/query-pagination-numbers', 'core/query-pagination-next' ),
					'core/comments-pagination' => array( 'core/comments-pagination-previous', 'core/comments-pagination-numbers', 'core/comments-pagination-next' ),
				);

				foreach ( $pagination_child_blocks[ $block_name ] ?? array() as $child_block_name ) {
					$conditional_assets[ $child_block_name ][ 'is-style-' . $variation_name ][ $handle ] = $asset;
					register_block_style( $child_block_name, $variation );
				}
			}

			// 3. Auto-register a Flush variation for any System List component
			if ( str_starts_with( $variation_name, 'system-list' ) && ! in_array( $block_name, array( 'core/comments', 'core/latest-comments', 'core/tabs', 'core/tab-list' ), true ) ) {
				$flush = $variation;
				$flush['name'] .= '-flush';
				$flush['label'] = ucwords( str_replace( '-', ' ', $variation_name ) ) . ' Flush';
				$conditional_assets[ $block_name ][ 'is-style-' . $flush['name'] ][ $handle ] = $asset;
				register_block_style( $block_name, $flush );
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

	// Carousel variations and runtime presentation are owned by the companion plugin.
	add_action( 'init', static function () use ( $conditional_assets, $ordered_handles ) {
		strap_load_conditional_variation_assets(
			apply_filters( 'strap_variation_asset_consumers', $conditional_assets ),
			$ordered_handles
		);
	}, 23 );
}
add_action( 'init', 'strap_register_block_styles' );

/**
 * Load migrated variation CSS from the filename-derived block and class lookup.
 */
function strap_load_conditional_variation_assets( $assets_by_block, $ordered_handles ) {
	if ( empty( $assets_by_block ) ) {
		return;
	}

	$register_assets = static function ( $variations ) {
		// The editor iframe collects styles using a separate WP_Styles instance.
		static $registered_by_queue;
		if ( null === $registered_by_queue ) {
			$registered_by_queue = new SplObjectStorage();
		}

		$queue = wp_styles();
		$registered = $registered_by_queue->contains( $queue ) ? $registered_by_queue[ $queue ] : array();

		foreach ( $variations as $assets ) {
			foreach ( $assets as $handle => $asset ) {
				if ( isset( $registered[ $handle ] ) && wp_style_is( $handle, 'registered' ) ) {
					continue;
				}

				wp_register_style( $handle, $asset['src'], $asset['deps'], $asset['ver'], 'all' );
				wp_style_add_data( $handle, 'path', $asset['path'] );

				$rtl_path = str_replace( '.css', '-rtl.css', $asset['path'] );
				if ( file_exists( $rtl_path ) ) {
					wp_style_add_data( $handle, 'rtl', 'replace' );
					if ( is_rtl() ) {
						wp_style_add_data( $handle, 'path', $rtl_path );
					}
				}

				$registered[ $handle ] = true;
			}
		}
		$registered_by_queue[ $queue ] = $registered;
	};

	// Canonical masters can be requested by native plugin markup without a Core block.
	$explicit_assets = array();
	foreach ( array(
		'core/navigation' => array( 'is-style-system-nav-button', 'is-style-system-nav-gen' ),
		'core/page-list'  => array( 'is-style-system-list', 'is-style-system-flat-list' ),
		'core/group'      => array( 'is-style-system-flat-panel' ),
		'core/table'      => array( 'is-style-system-flat-panel' ),
	) as $block_name => $tokens ) {
		foreach ( $tokens as $token ) {
			if ( isset( $assets_by_block[ $block_name ][ $token ] ) ) {
				$explicit_assets[] = $assets_by_block[ $block_name ][ $token ];
			}
		}
	}
	add_action( 'init', static function () use ( $register_assets, $explicit_assets ) {
		$register_assets( $explicit_assets );
	}, 24 );

	$ordered_selection = array_fill_keys( $ordered_handles, false );
	// Flush after the ordinary block enqueues, including Tabs base CSS.
	add_action( 'wp_enqueue_scripts', static function () use ( &$ordered_selection ) {
		foreach ( array_filter( $ordered_selection ) as $handle => $selected ) {
			wp_enqueue_style( $handle );
		}
	}, 100 );

	add_filter( 'render_block', static function ( $html, $block ) use ( $assets_by_block, $register_assets, &$ordered_selection ) {
		$variations = $assets_by_block[ $block['blockName'] ?? '' ] ?? null;
		if ( null === $variations || is_admin() || wp_is_rest_endpoint() || is_feed() ) {
			return $html;
		}

		// Register on the first participating block, even if no variation is selected.
		$register_assets( $variations );
		$class_name = $block['attrs']['className'] ?? '';
		if ( '' === trim( $html ) || ! is_string( $class_name ) || '' === trim( $class_name ) ) {
			return $html;
		}

		$tokens = preg_split( '/[\x09-\x0d\x20]+/', trim( $class_name ), -1, PREG_SPLIT_NO_EMPTY );
		// Query directory wrappers also consume Query UI when directly inside a Panel.
		if ( 'core/group' === $block['blockName'] && in_array( 'is-style-system-panel', $tokens, true ) ) {
			$query_assets = $assets_by_block['core/query']['is-style-system-ui-query'] ?? array();
			$directory_classes = array( 'query-directory-listing', 'query-latest-posts', 'query-directory-grid', 'query-directory-image-grid' );
			foreach ( $block['innerBlocks'] ?? array() as $child ) {
				$classes = preg_split( '/[\x09-\x0d\x20]+/', (string) ( $child['attrs']['className'] ?? '' ), -1, PREG_SPLIT_NO_EMPTY );
				if ( array_intersect( $directory_classes, $classes ) ) {
					$register_assets( array( $query_assets ) );
					foreach ( $query_assets as $handle => $asset ) {
						wp_enqueue_style( $handle );
					}
					break;
				}
			}
		}
		foreach ( array_intersect_key( $variations, array_fill_keys( $tokens, true ) ) as $assets ) {
			foreach ( $assets as $handle => $asset ) {
				if ( isset( $ordered_selection[ $handle ] ) && ! did_action( 'wp_head' ) ) {
					$ordered_selection[ $handle ] = true;
				} else {
					wp_enqueue_style( $handle );
				}
			}
		}

		return $html;
	}, 10, 2 );

	add_action( 'enqueue_block_assets', static function () use ( $assets_by_block, $register_assets ) {
		// The iframe collector runs this action on the active block-editor screen.
		$screen = function_exists( 'get_current_screen' ) ? get_current_screen() : null;
		if ( ! $screen || ! $screen->is_block_editor() || wp_is_rest_endpoint() ) {
			return;
		}

		foreach ( $assets_by_block as $variations ) {
			$register_assets( $variations );
			foreach ( $variations as $assets ) {
				foreach ( $assets as $handle => $asset ) {
					wp_enqueue_style( $handle );
				}
			}
		}
	}, 10 );
}

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
	if ( ! function_exists( 'register_block_style' ) ) {
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

	$widget_asset = array(
		'handle' => 'bp-widget-system-panel-header',
		'src'    => get_template_directory_uri() . '/assets/css/style-variations/bp-widget-system-panel-header.css',
		'path'   => $stylesheet,
		'deps'   => array( 'strap-panel-surface', 'core-group-system-flat-panel', 'strap-buddypress-avatars' ),
		'ver'    => filemtime( $stylesheet ),
	);
	add_filter( 'strap_variation_asset_consumers', static function ( $assets ) use ( $widget_asset ) {
		foreach ( strap_buddypress_sidebar_blocks() as $block_name ) {
			foreach ( array( 'is-style-system-panel', 'is-style-system-flat-panel' ) as $token ) {
				$assets[ $block_name ][ $token ][ $widget_asset['handle'] ] = $widget_asset;
			}
		}
		return $assets;
	} );

	foreach ( strap_buddypress_sidebar_blocks() as $block_name ) {
		foreach ( array( 'default' => __( 'BuddyPress Default', 'systemstrap' ), 'system-panel' => __( 'System Panel', 'systemstrap' ), 'system-flat-panel' => __( 'System Flat Panel', 'systemstrap' ) ) as $name => $label ) {
			register_block_style( $block_name, array( 'name' => $name, 'label' => $label, 'is_default' => 'default' === $name ) );
		}
	}
}
add_action( 'init', 'strap_register_buddypress_block_styles', 20 );
