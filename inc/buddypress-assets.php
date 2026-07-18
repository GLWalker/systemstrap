<?php
/**
 * BuddyPress asset support for SystemStrap.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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
	$wp_styles  = wp_styles();
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
 * Enqueue BuddyPress Lightweight Theme Sync.
 *
 * @return void
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
 * blocks are available.
 *
 * @return void
 */
function strap_enqueue_buddypress_sync_editor() {
	if ( ! is_admin() || ! class_exists( 'BuddyPress' ) ) {
		return;
	}

	strap_point_buddypress_variation_anchor();
	wp_enqueue_style( 'strap-buddypress-sync' );
}
add_action( 'enqueue_block_editor_assets', 'strap_enqueue_buddypress_sync_editor', 1 );
