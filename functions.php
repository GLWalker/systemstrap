<?php

/**
 * SystemStrap functions and definitions
 *
 * @package systemstrap
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Required files.
 */
require_once get_template_directory() . '/inc/enqueue-assets.php';
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/class-color-generator.php';
require_once get_template_directory() . '/inc/dynamic-styles.php';
require_once get_template_directory() . '/inc/style-variations.php';
require_once get_template_directory() . '/inc/block-filters.php';
require_once get_template_directory() . '/inc/block-styles.php';
require_once get_template_directory() . '/inc/block-asset-triggers.php';
require_once get_template_directory() . '/inc/style-runtime.php';
require_once get_template_directory() . '/inc/buddypress-assets.php';
require_once get_template_directory() . '/inc/dialog-renderer.php';
