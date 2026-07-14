<?php
/**
 * Enqueue scripts and styles for SystemStrap.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'strap_enqueue_assets' ) ) {
	/**
	 * Determine whether the current singular post needs Page Break navigation styles.
	 *
	 * @return bool
	 */
	function strap_should_enqueue_page_break_navigation() {
		if ( ! is_singular() ) {
			return false;
		}

		$post = get_queried_object();

		if ( ! ( $post instanceof WP_Post ) || ! is_string( $post->post_content ) || '' === $post->post_content ) {
			return false;
		}

		return has_block( 'core/nextpage', $post ) || str_contains( $post->post_content, '<!--nextpage-->' );
	}

	/**
	 * Enqueue main scripts and styles.
	 */
	function strap_enqueue_assets() {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = is_string( $theme_version ) ? $theme_version : false;

		// Main Styles
		wp_enqueue_style(
			'strap-main-styles',
			get_template_directory_uri() . '/assets/css/main-styles.css',
			array( 'strap-reset', 'global-styles' ),
			$version
		);

		// Splide CSS
		wp_enqueue_style(
			'splide-core',
			get_template_directory_uri() . '/assets/vendor/splide/splide.min.css',
			array(),
			'4.1.4'
		);

		// Carousel Styles (Our custom tweaks)
		wp_enqueue_style(
			'strap-carousel-styles',
			get_template_directory_uri() . '/assets/css/style-variations/core-group-system-carousel.css',
			array('strap-main-styles', 'splide-core'),
			$version
		);

		// Button Icon Styles
		wp_enqueue_style(
			'strap-button-icon',
			get_template_directory_uri() . '/assets/css/style-variations/core-button-system-icon.css',
			array('strap-main-styles'),
			$version
		);

		wp_register_style(
			'strap-query-directory',
			get_template_directory_uri() . '/assets/css/query-directory.css',
			array( 'strap-main-styles' ),
			$version
		);

		wp_register_style(
			'strap-query-directory-grid',
			get_template_directory_uri() . '/assets/css/query-directory-grid.css',
			array( 'strap-main-styles' ),
			$version
		);

		wp_register_style(
			'strap-query-latest-posts-list',
			get_template_directory_uri() . '/assets/css/query-latest-posts-list.css',
			array( 'strap-main-styles' ),
			$version
		);

		if ( strap_should_enqueue_page_break_navigation() ) {
			// Page Break Navigation Styles
			wp_enqueue_style(
				'strap-page-break-navigation',
				get_template_directory_uri() . '/assets/css/page-break-navigation.css',
				array( 'strap-main-styles' ),
				$version
			);
		}

		// Main Scripts
		wp_enqueue_script(
			'strap-main-scripts',
			get_template_directory_uri() . '/assets/js/main-scripts.js',
			array(),
			$version,
			true
		);

		// Splide JS
		wp_enqueue_script(
			'splide-core',
			get_template_directory_uri() . '/assets/vendor/splide/splide.min.js',
			array(),
			'4.1.4',
			true
		);

		// Carousel Init JS
		wp_enqueue_script(
			'strap-carousel',
			get_template_directory_uri() . '/assets/js/carousel-nav.js',
			array('splide-core'),
			$version,
			true
		);

		// AJAX Search JS
		wp_enqueue_script(
			'strap-ajax-search',
			get_template_directory_uri() . '/assets/js/ajax-search.js',
			array(),
			$version,
			true
		);
		wp_localize_script(
			'strap-ajax-search',
			'systemStrapAjax',
			array(
				'rest_url' => esc_url_raw( rest_url( 'wp/v2/posts' ) ),
			)
		);

		// Dropdown Boundary Detection JS
		wp_enqueue_script(
			'strap-dropdown-boundary',
			get_template_directory_uri() . '/assets/js/dropdown-boundary.js',
			array(),
			$version,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_assets', 8 );

if ( ! function_exists( 'strap_enqueue_child_style' ) ) {
	/**
	 * Enqueue child theme styles after the parent theme stylesheet layer.
	 */
	function strap_enqueue_child_style() {
		if ( ! is_child_theme() ) {
			return;
		}

		$child_theme   = wp_get_theme( get_stylesheet() );
		$child_version = $child_theme->get( 'Version' );
		$version       = is_string( $child_version ) ? $child_version : false;

		wp_enqueue_style(
			'strap-child-style',
			get_stylesheet_uri(),
			array( 'strap-main-styles' ),
			$version
		);
	}
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_child_style', 100 );

if ( ! function_exists( 'strap_enqueue_reset_style' ) ) {
	/**
	 * Enqueue the reset stylesheet as early as possible.
	 */
	function strap_enqueue_reset_style() {
		if ( is_admin() ) {
			return;
		}

		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_style(
			'strap-reset',
			get_template_directory_uri() . '/assets/css/strap-reset.css',
			array(),
			$version
		);
	}
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_reset_style', 0 );

/**
 * Register the BuddyPress sync stylesheet handle early so block-style
 * dependencies can resolve it in both frontend and editor contexts.
 */
function strap_register_buddypress_sync_style() {
	if ( ! class_exists( 'BuddyPress' ) ) {
		return;
	}

	$theme_version = wp_get_theme()->get( 'Version' );
	$version       = is_string( $theme_version ) ? $theme_version : false;

	wp_register_style(
		'strap-buddypress-sync',
		get_template_directory_uri() . '/assets/css/buddypress-theme-sync.css',
		array(),
		$version
	);
}
add_action( 'init', 'strap_register_buddypress_sync_style', 5 );

/**
 * Register a BuddyPress variation anchor handle that can safely sit after
 * Core Global Styles in both frontend and editor contexts.
 *
 * This handle has no stylesheet source of its own. It exists only to give
 * BuddyPress block style variations a stable dependency target that resolves
 * against the correct Core style handle per context.
 */
function strap_register_buddypress_variation_anchor() {
	if ( ! class_exists( 'BuddyPress' ) ) {
		return;
	}

	$theme_version = wp_get_theme()->get( 'Version' );
	$version       = is_string( $theme_version ) ? $theme_version : false;

	wp_register_style(
		'strap-buddypress-variation-anchor',
		false,
		array( 'wp-block-library' ),
		$version
	);
}
add_action( 'init', 'strap_register_buddypress_variation_anchor', 5 );

/**
 * Resolve the active Core style handle that should anchor BuddyPress
 * variation styles after the current Global Styles lane.
 *
 * @return string
 */
function strap_get_buddypress_variation_anchor_dependency() {
	$wp_styles = wp_styles();
	$candidates = array(
		'global-styles',
		'global-styles-css-custom-properties',
	);

	foreach ( $candidates as $handle ) {
		if ( isset( $wp_styles->registered[ $handle ] ) ) {
			return $handle;
		}
	}

	return 'wp-block-library';
}

/**
 * Point the BuddyPress variation anchor at the best available Core style lane
 * for the current request context.
 *
 * @return void
 */
function strap_point_buddypress_variation_anchor() {
	$wp_styles = wp_styles();

	if ( isset( $wp_styles->registered['strap-buddypress-variation-anchor'] ) ) {
		$wp_styles->registered['strap-buddypress-variation-anchor']->deps = array(
			strap_get_buddypress_variation_anchor_dependency(),
		);
	}
}

/**
 * Get the active BuddyPress theme-pack stylesheet handles.
 *
 * @return string[]
 */
function strap_get_buddypress_theme_style_handles() {
	$handles = array();

	if ( wp_style_is( 'bp-nouveau', 'registered' ) || wp_style_is( 'bp-nouveau', 'enqueued' ) ) {
		$handles[] = 'bp-nouveau';
	}

	if ( wp_style_is( 'bp-legacy-css', 'registered' ) || wp_style_is( 'bp-legacy-css', 'enqueued' ) ) {
		$handles[] = 'bp-legacy-css';
	}

	return $handles;
}

/**
 * Enqueue BuddyPress Lightweight Theme Sync
 * Attached to the active BuddyPress theme-pack handle after BuddyPress
 * registers/enqueues its community styles.
 */
function strap_enqueue_buddypress_sync() {
	if ( function_exists( 'is_buddypress' ) && is_buddypress() ) {
		$deps      = strap_get_buddypress_theme_style_handles();
		$wp_styles = wp_styles();

		if ( isset( $wp_styles->registered['strap-buddypress-sync'] ) ) {
			$wp_styles->registered['strap-buddypress-sync']->deps = $deps;
		}

		strap_point_buddypress_variation_anchor();

		wp_enqueue_style( 'strap-buddypress-sync' );
	}
}
add_action( 'bp_enqueue_community_scripts', 'strap_enqueue_buddypress_sync', 20 );

/**
 * Enqueue the BuddyPress sync stylesheet in the block editor when BuddyPress
 * blocks are available, so dependent BP block styles have a registered handle.
 */
function strap_enqueue_buddypress_sync_editor() {
	if ( ! is_admin() ) {
		return;
	}

	if ( ! class_exists( 'BuddyPress' ) ) {
		return;
	}

	strap_point_buddypress_variation_anchor();

	wp_enqueue_style( 'strap-buddypress-sync' );
}
add_action( 'enqueue_block_editor_assets', 'strap_enqueue_buddypress_sync_editor', 1 );

/**
 * Move top-level Global Styles custom CSS onto its own late handle.
 *
 * Core merges theme custom CSS into the global-styles handle. SystemStrap
 * keeps the native global-styles lifecycle intact, but peels the custom CSS
 * back off so it can print after theme and variation styles.
 */
function strap_enqueue_global_styles_custom_css_last() {
	static $has_run = false;

	if ( $has_run || is_admin() || ! wp_is_block_theme() ) {
		return;
	}

	$has_run = true;

	$theme_custom_css = wp_get_global_stylesheet( array( 'custom-css' ) );
	$customizer_css   = trim( wp_get_custom_css() );
	$late_custom_css  = '';

	if ( $customizer_css ) {
		$late_custom_css .= "\n" . $customizer_css;
	}

	$late_custom_css .= $theme_custom_css;

	if ( '' === trim( $late_custom_css ) ) {
		return;
	}

	$wp_styles = wp_styles();
	$css_parts = $wp_styles->get_data( 'global-styles', 'after' );

	if ( empty( $css_parts ) || ! is_array( $css_parts ) ) {
		return;
	}

	foreach ( $css_parts as $index => $css ) {
		if ( ! is_string( $css ) || '' === $css ) {
			continue;
		}

		$position = strrpos( $css, $late_custom_css );

		if ( false === $position ) {
			continue;
		}

		$trailing_css = trim( substr( $css, $position ) );

		if ( trim( $late_custom_css ) !== $trailing_css ) {
			continue;
		}

		$css_parts[ $index ] = rtrim( substr( $css, 0, $position ) );
		break;
	}

	$wp_styles->registered['global-styles']->extra['after'] = $css_parts;

	$theme_version = wp_get_theme()->get( 'Version' );
	$version       = is_string( $theme_version ) ? $theme_version : false;

	wp_register_style( 'global-styles-custom-css', false, array(), $version );
	wp_enqueue_style( 'global-styles-custom-css' );
	wp_add_inline_style( 'global-styles-custom-css', $late_custom_css );
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_global_styles_custom_css_last', 12 );

/**
 * Reorder frontend styles into the SystemStrap contract order.
 *
 * Order:
 * 1. strap-reset
 * 2. BuddyPress plugin/theme-pack CSS
 * 3. SystemStrap BuddyPress sync
 * 4. SystemStrap BuddyPress block base styles
 * 5. Core block library styles
 * 6. global-styles
 * 7. SystemStrap main theme CSS
 * 8. Child theme CSS
 * 9. SystemStrap BuddyPress block style variations
 * 10. Remaining SystemStrap theme CSS
 * 11. wp-block-custom-css / global-styles-custom-css
 * 12. everything else
 */
function strap_reorder_frontend_style_queue() {
	if ( is_admin() ) {
		return;
	}

	$wp_styles = wp_styles();

	if ( empty( $wp_styles->queue ) || ! is_array( $wp_styles->queue ) ) {
		return;
	}

	$theme_uri = trailingslashit( get_template_directory_uri() );
	$queue     = array_values( array_unique( $wp_styles->queue ) );
	$buckets   = array(
		'reset'         => array(),
		'bp_plugin'     => array(),
		'bp_sync'       => array(),
		'bp_blocks'     => array(),
		'bp_variations' => array(),
		'core_blocks'   => array(),
		'global'        => array(),
		'main'          => array(),
		'child'         => array(),
		'theme_rest'    => array(),
		'custom_css'    => array(),
		'remainder'     => array(),
	);

	foreach ( $queue as $handle ) {
		$src = '';

		if ( isset( $wp_styles->registered[ $handle ]->src ) && is_string( $wp_styles->registered[ $handle ]->src ) ) {
			$src = $wp_styles->registered[ $handle ]->src;
		}

		if ( 'strap-reset' === $handle ) {
			$buckets['reset'][] = $handle;
			continue;
		}

		if ( 'strap-buddypress-sync' === $handle ) {
			$buckets['bp_sync'][] = $handle;
			continue;
		}

		if ( 'strap-buddypress-blocks' === $handle ) {
			$buckets['bp_blocks'][] = $handle;
			continue;
		}

		if ( str_contains( $src, $theme_uri . 'assets/css/style-variations/bp-' ) ) {
			$buckets['bp_variations'][] = $handle;
			continue;
		}

		if ( 'wp-block-custom-css' === $handle || 'global-styles-custom-css' === $handle ) {
			$buckets['custom_css'][] = $handle;
			continue;
		}

		if (
			str_contains( $src, '/wp-content/plugins/buddypress/' ) ||
			( str_starts_with( $handle, 'bp-' ) && ! str_contains( $src, $theme_uri . 'assets/css/style-variations/bp-' ) )
		) {
			$buckets['bp_plugin'][] = $handle;
			continue;
		}

		if ( 'global-styles' === $handle ) {
			$buckets['global'][] = $handle;
			continue;
		}

		if (
			'wp-block-library' === $handle ||
			'wp-block-library-theme' === $handle ||
			str_starts_with( $handle, 'wp-block-' ) ||
			str_contains( $src, '/wp-includes/css/dist/block-library/' )
		) {
			$buckets['core_blocks'][] = $handle;
			continue;
		}

		if ( 'strap-main-styles' === $handle ) {
			$buckets['main'][] = $handle;
			continue;
		}

		if ( 'strap-child-style' === $handle ) {
			$buckets['child'][] = $handle;
			continue;
		}

		if (
			str_starts_with( $handle, 'strap-' ) ||
			str_contains( $src, $theme_uri )
		) {
			$buckets['theme_rest'][] = $handle;
			continue;
		}

		$buckets['remainder'][] = $handle;
	}

	$wp_styles->queue = array_values(
		array_unique(
				array_merge(
					$buckets['reset'],
					$buckets['bp_plugin'],
					$buckets['bp_sync'],
					$buckets['bp_blocks'],
					$buckets['core_blocks'],
					$buckets['global'],
					$buckets['main'],
					$buckets['child'],
					$buckets['bp_variations'],
					$buckets['theme_rest'],
					$buckets['custom_css'],
					$buckets['remainder']
			)
		)
	);
}
add_action( 'wp_print_styles', 'strap_reorder_frontend_style_queue', 1 );

/**
 * Conditionally enqueue scripts for Accordion Tabs variation.
 * Hooked to render_block to ensure it loads even if the block is nested inside a pattern or template part.
 */
function strap_enqueue_accordion_tabs( $block_content, $block ) {
	if (
		isset( $block['attrs']['className'] ) &&
		(
			strpos( $block['attrs']['className'], 'is-style-system-tabs' ) !== false ||
			strpos( $block['attrs']['className'], 'is-style-system-tabs-vertical' ) !== false
		)
	) {
		wp_enqueue_script(
			'strap-accordion-tabs',
			get_template_directory_uri() . '/assets/js/accordion-tabs.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
	return $block_content;
}
add_filter( 'render_block', 'strap_enqueue_accordion_tabs', 10, 2 );

/**
 * Conditionally enqueue the directory query base stylesheet when its markup renders.
 *
 * @param string $block_content Rendered block content.
 * @param array  $block         Parsed block data.
 * @return string
 */
function strap_enqueue_query_directory_styles( $block_content, $block ) {
	if ( empty( $block['blockName'] ) ) {
		return $block_content;
	}

	if ( ! in_array( $block['blockName'], array( 'core/group', 'core/query', 'core/post-template' ), true ) ) {
		return $block_content;
	}

	if (
		strpos( $block_content, 'query-directory-listing' ) !== false ||
		strpos( $block_content, 'directory-listing' ) !== false ||
		strpos( $block_content, 'directory-listing__query' ) !== false
	) {
		wp_enqueue_style( 'strap-query-directory' );
	}

	if (
		strpos( $block_content, 'systemstrap-directory-grid' ) !== false ||
		strpos( $block_content, 'systemstrap-directory-grid__items' ) !== false
	) {
		wp_enqueue_style( 'strap-query-directory' );
		wp_enqueue_style( 'strap-query-directory-grid' );
	}

	if (
		strpos( $block_content, 'query-latest-posts' ) !== false ||
		strpos( $block_content, 'systemstrap-latest-posts' ) !== false ||
		strpos( $block_content, 'systemstrap-latest-posts__query' ) !== false
	) {
		wp_enqueue_style( 'strap-query-directory' );
		wp_enqueue_style( 'strap-query-latest-posts-list' );
	}

	return $block_content;
}
add_filter( 'render_block', 'strap_enqueue_query_directory_styles', 10, 2 );



/**
 * Enqueue Block Editor Assets (Scripts)
 */
function strap_get_style_variation_sync_map() {
	$theme_styles_dir = get_template_directory() . '/styles';
	$layout_files     = glob( $theme_styles_dir . '/*.json' );
	$sync_map         = array();

	if ( empty( $layout_files ) ) {
		return $sync_map;
	}

	foreach ( $layout_files as $layout_file ) {
		$slug            = basename( $layout_file, '.json' );
		$color_file      = $theme_styles_dir . '/colors/' . $slug . '.json';
		$typography_file = $theme_styles_dir . '/typography/' . $slug . '.json';

		if ( ! file_exists( $color_file ) || ! file_exists( $typography_file ) ) {
			continue;
		}

		$layout_data     = wp_json_file_decode( $layout_file, array( 'associative' => true ) );
		$color_data      = wp_json_file_decode( $color_file, array( 'associative' => true ) );
		$typography_data = wp_json_file_decode( $typography_file, array( 'associative' => true ) );

		if ( ! is_array( $layout_data ) || ! is_array( $color_data ) || ! is_array( $typography_data ) ) {
			continue;
		}

		$layout_title     = isset( $layout_data['title'] ) ? (string) $layout_data['title'] : $slug;
		$color_title      = isset( $color_data['title'] ) ? (string) $color_data['title'] : $slug;
		$typography_title = isset( $typography_data['title'] ) ? (string) $typography_data['title'] : $slug;

		$sync_map[ $slug ] = array(
			'layoutTitle'     => $layout_title,
			'colorTitle'      => $color_title,
			'typographyTitle' => $typography_title,
		);
	}

	return $sync_map;
}

function strap_enqueue_block_editor_assets() {
	wp_enqueue_style(
		'strap-query-directory',
		get_template_directory_uri() . '/assets/css/query-directory.css',
		array( 'wp-edit-blocks' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'strap-query-directory-grid',
		get_template_directory_uri() . '/assets/css/query-directory-grid.css',
		array( 'wp-edit-blocks' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'strap-query-latest-posts-list',
		get_template_directory_uri() . '/assets/css/query-latest-posts-list.css',
		array( 'wp-edit-blocks' ),
		wp_get_theme()->get( 'Version' )
	);

	$variations_dir = get_template_directory() . '/assets/js/variations/';
	if ( is_dir( $variations_dir ) ) {
		$variations = glob( $variations_dir . '*.js' );
		foreach ( $variations as $file ) {
			$basename = basename( $file, '.js' );
			$deps     = array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-i18n' );

			if ( 'strap-style-sync' === $basename ) {
				$deps = array( 'wp-data', 'wp-core-data' );
			}

			wp_enqueue_script(
				'strap-variation-' . $basename,
				get_template_directory_uri() . '/assets/js/variations/' . basename( $file ),
				$deps,
				wp_get_theme()->get( 'Version' ),
				true
			);

			if ( 'strap-style-sync' === $basename ) {
				wp_add_inline_script(
					'strap-variation-' . $basename,
					'window.systemstrapStyleSync = ' . wp_json_encode(
						array(
							'variationMap' => strap_get_style_variation_sync_map(),
						)
					) . ';',
					'before'
				);
			}
		}
	}
}
add_action( 'enqueue_block_editor_assets', 'strap_enqueue_block_editor_assets' );

/**
 * Assign a stable page-unique query ID to each rendered Query Loop block.
 *
 * Pattern markup can be duplicated on the same page, which causes hardcoded
 * query IDs to collide and share pagination state. Replacing the query ID at
 * render time keeps each instance isolated while preserving the authored query
 * settings. Theme-owned query patterns are grouped into family-specific ID
 * ranges so repeated instances remain easy to reason about.
 *
 * @param array      $parsed_block Parsed block data.
 * @param array|null $source_block Source block data prior to processing.
 * @param array|null $parent_block Parent block data.
 * @return array
 */
function strap_assign_runtime_query_ids( $parsed_block, $source_block = null, $parent_block = null ) {
	static $query_family_counts = array();

	$query_id_families = array(
		101 => 'query_media_object',
		102 => 'query_directory_listing',
		103 => 'query_directory_grid',
		104 => 'query_latest_posts_list',
		105 => 'query_directory_grid',
	);

	$query_id_ranges = array(
		'query_media_object'      => 1100,
		'query_directory_listing' => 1200,
		'query_directory_grid'    => 1300,
		'query_latest_posts_list' => 1400,
	);

	if ( empty( $parsed_block['blockName'] ) || 'core/query' !== $parsed_block['blockName'] ) {
		return $parsed_block;
	}

	if ( ! isset( $parsed_block['attrs'] ) || ! is_array( $parsed_block['attrs'] ) ) {
		$parsed_block['attrs'] = array();
	}

	$source_query_id = isset( $parsed_block['attrs']['queryId'] ) ? (int) $parsed_block['attrs']['queryId'] : 0;

	if ( ! isset( $query_id_families[ $source_query_id ] ) ) {
		return $parsed_block;
	}

	$query_family = $query_id_families[ $source_query_id ];

	if ( ! isset( $query_family_counts[ $query_family ] ) ) {
		$query_family_counts[ $query_family ] = 0;
	}

	$query_family_counts[ $query_family ]++;
	$parsed_block['attrs']['queryId'] = $query_id_ranges[ $query_family ] + $query_family_counts[ $query_family ];

	return $parsed_block;
}
add_filter( 'render_block_data', 'strap_assign_runtime_query_ids', 10, 3 );

/**
 * Enqueue pagination block styles only when pagination blocks render.
 *
 * The theme's auto-registered block-style path is retained, but these explicit
 * render-time enqueues guarantee frontend loading for pagination surfaces in
 * this runtime.
 *
 * @param string $block_content Rendered block content.
 * @param array  $block         Parsed block data.
 * @return string
 */
function strap_enqueue_pagination_block_styles( $block_content, $block ) {
	if ( empty( $block['blockName'] ) ) {
		return $block_content;
	}

	if ( str_starts_with( $block['blockName'], 'core/query-pagination' ) ) {
		wp_enqueue_style( 'core-query-pagination-system-pagination' );
	}

	if ( str_starts_with( $block['blockName'], 'core/comments-pagination' ) ) {
		wp_enqueue_style( 'core-comments-pagination-system-pagination' );
	}

	return $block_content;
}
add_filter( 'render_block', 'strap_enqueue_pagination_block_styles', 10, 2 );
