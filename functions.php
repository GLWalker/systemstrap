<?php
/**
 * SystemStrap functions and definitions
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Required files.
 */
require_once get_template_directory() . '/inc/enqueue-assets.php';
require_once get_template_directory() . '/inc/class-color-generator.php';
require_once get_template_directory() . '/inc/dynamic-styles.php';
require_once get_template_directory() . '/inc/block-filters.php';
require_once get_template_directory() . '/inc/block-replacements.php';
require_once get_template_directory() . '/inc/block-styles.php';
require_once get_template_directory() . '/inc/block-categories.php';
require_once get_template_directory() . '/inc/dialog-renderer.php';

/**
 * SystemStrap Theme Setup
 */
function strap_theme_setup() {
	// Enable support for editor styles so Gutenberg parses and scopes them natively
	add_theme_support( 'editor-styles' );

	$editor_styles = array(
		'assets/css/strap-reset.css',
		'assets/css/main-styles.css',
		'assets/css/style-variations/core-group-system-carousel.css',
	);

	if ( is_child_theme() ) {
		$editor_styles[] = 'style.css';
	}

	// Enqueue the custom CSS files directly into the editor canvas
	add_editor_style( $editor_styles );
}
add_action( 'after_setup_theme', 'strap_theme_setup' );


