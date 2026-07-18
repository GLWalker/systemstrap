<?php
/**
 * Runtime style ordering for SystemStrap.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Move top-level Global Styles custom CSS onto its own late handle.
 *
 * @return void
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
 * @return void
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

		if ( str_starts_with( $handle, 'strap-' ) || str_contains( $src, $theme_uri ) ) {
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
