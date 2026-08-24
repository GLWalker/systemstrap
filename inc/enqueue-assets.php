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

			if ( 'strap-woocommerce-product-template-compatibility' === $basename && ! class_exists( 'WooCommerce' ) ) {
				continue;
			}

			if ( 'strap-style-sync' === $basename ) {
				$deps = array( 'wp-data', 'wp-core-data' );
			}

			if ( 'strap-woocommerce-product-template-compatibility' === $basename ) {
				$deps = array( 'wp-compose', 'wp-element', 'wp-hooks' );
			}

			wp_enqueue_script(
				'strap-variation-' . $basename,
				get_template_directory_uri() . '/assets/js/variations/' . basename( $file ),
				$deps,
				wp_get_theme()->get( 'Version' ),
				true
			);
			wp_add_inline_script(
				'strap-variation-' . $basename,
				'window.systemstrap = window.systemstrap || {}; window.systemstrap.templateUri = ' . wp_json_encode( trailingslashit( get_template_directory_uri() ) ) . ';',
				'before'
			);

			if ( 'strap-style-sync' === $basename ) {
				wp_add_inline_script(
					'strap-variation-' . $basename,
					'window.systemstrapStyleSync = ' . wp_json_encode( strap_get_typography_pairing_manifest() ) . ';',
					'before'
				);
			}
		}
	}
}
add_action( 'enqueue_block_editor_assets', 'strap_enqueue_block_editor_assets' );
