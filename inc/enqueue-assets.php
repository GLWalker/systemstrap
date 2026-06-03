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
	 * Enqueue main scripts and styles.
	 */
	function strap_enqueue_assets() {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version       = is_string( $theme_version ) ? $theme_version : false;

		// Reset Styles (Zero Slot)
		if ( ! is_admin() ) {
			wp_register_style(
				'strap-reset',
				get_template_directory_uri() . '/assets/css/strap-reset.css',
				array(),
				$version
			);
			array_unshift( wp_styles()->queue, 'strap-reset' );
		}

		// Main Styles
		wp_enqueue_style(
			'strap-main-styles',
			get_template_directory_uri() . '/assets/css/main-styles.css',
			array('strap-reset'), // Enforces reset loads first
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

		// Child Theme Styles (Loaded after main-styles)
		if ( is_child_theme() ) {
			wp_enqueue_style(
				'strap-child-style',
				get_stylesheet_uri(),
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
	}
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_assets', 8 );

/**
 * Completely remove inline default styles/markup for WordPress core palettes, 
 * gradients, and duotones before they are parsed by global styles.
 */
add_filter(
	'wp_theme_json_data_default',
	static function ( $theme_json ) {
		$data = $theme_json->get_data();

		$data['settings']['color']['palette']['default']   = [];
		$data['settings']['color']['duotone']['default']   = [];
		$data['settings']['color']['gradients']['default'] = [];

		$theme_json->update_with( $data );

		return $theme_json;
	}
);

/**
 * Intercept and rewrite WordPress Global Styles.
 * - Injects complementary text colors into background classes.
 * - Prunes useless generated classes for border-color.
 */
function strap_intercept_global_styles() {
	// Nuke WP's default generation on whatever hook is currently firing
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'enqueue_block_assets', 'wp_enqueue_global_styles' );

	static $has_run = false;
	if ( $has_run ) {
		return;
	}
	$has_run = true;

	// Grab the CSS ourselves natively
	$css = wp_get_global_stylesheet();

	// Base background replacements (these flip in dark mode, so they map to slugs)
	$slug_replacements = [
		'base'         => 'contrast',
		'contrast'     => 'base',
		'secondary-bg' => 'secondary-color',
		'tertiary-bg'  => 'tertiary-color',
	];

	// Accent background replacements (these now map to their dynamically generated -text variables)
	$accent_slugs = [ 'primary', 'secondary', 'success', 'info', 'warning', 'danger', 'light', 'dark' ];

	foreach ( $slug_replacements as $bg_slug => $text_slug ) {
		$pattern = '/\.has-' . $bg_slug . '-background-color\s*\{/';
		$replace = ".has-{$bg_slug}-background-color:not(.has-text-color) {\n\tcolor: var(--wp--preset--color--{$text_slug}) !important;";
		$css     = preg_replace( $pattern, $replace, $css );
	}

	foreach ( $accent_slugs as $bg_slug ) {
		$pattern = '/\.has-' . $bg_slug . '-background-color\s*\{/';
		$replace = ".has-{$bg_slug}-background-color:not(.has-text-color) {\n\tcolor: var(--wp--preset--color--{$bg_slug}-text) !important;";
		$css     = preg_replace( $pattern, $replace, $css );
	}

	// Register and enqueue the filtered styles properly
	// Force dependencies to ensure Site Editor CSS is printed absolute last on the frontend
	$global_deps = array();
	if ( ! is_admin() ) {
		$global_deps[] = 'strap-main-styles';
		if ( is_child_theme() ) {
			$global_deps[] = 'strap-child-style';
		}
	}
	
	wp_register_style( 'global-styles', false, $global_deps );
	wp_add_inline_style( 'global-styles', $css );
	wp_enqueue_style( 'global-styles' );
}
// Hook early to ensure WP is unhooked before it runs
add_action( 'wp_enqueue_scripts', 'strap_intercept_global_styles', 9 );
add_action( 'enqueue_block_assets', 'strap_intercept_global_styles', 9 );

/**
 * Enqueue Block Editor Assets (Scripts)
 */
function strap_enqueue_block_editor_assets() {
	$variations_dir = get_template_directory() . '/assets/js/variations/';
	if ( is_dir( $variations_dir ) ) {
		$variations = glob( $variations_dir . '*.js' );
		foreach ( $variations as $file ) {
			$basename = basename( $file, '.js' );
			wp_enqueue_script(
				'strap-variation-' . $basename,
				get_template_directory_uri() . '/assets/js/variations/' . basename( $file ),
				array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-i18n' ),
				wp_get_theme()->get( 'Version' ),
				true
			);
		}
	}
}
add_action( 'enqueue_block_editor_assets', 'strap_enqueue_block_editor_assets' );

/**
 * Enqueue Editor-only Styles safely into the Iframe
 */
function strap_enqueue_editor_iframe_styles() {
	if ( is_admin() ) {
		wp_enqueue_style(
			'strap-reset-editor',
			get_template_directory_uri() . '/assets/css/strap-reset.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'enqueue_block_assets', 'strap_enqueue_editor_iframe_styles' );
