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
require_once get_template_directory() . '/inc/class-color-generator.php';
require_once get_template_directory() . '/inc/dynamic-styles.php';
require_once get_template_directory() . '/inc/block-filters.php';
require_once get_template_directory() . '/inc/block-replacements.php';
require_once get_template_directory() . '/inc/block-styles.php';
require_once get_template_directory() . '/inc/dialog-renderer.php';

/**
 * SystemStrap Theme Setup
 */
function strap_theme_setup()
{
	// Enable support for editor styles so Gutenberg parses and scopes them natively
	add_theme_support('editor-styles');
	add_theme_support(
		'custom-logo',
		array(
			'height'               => 90,
			'width'                => 90,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array('site-title', 'site-description'),
			'unlink-homepage-logo' => true,
		)
	);

	$editor_styles = array(
		'assets/css/strap-reset.css',
		'assets/css/main-styles.css',
		'assets/css/style-variations/core-group-system-carousel.css',
	);

	if (is_child_theme()) {
		$editor_styles[] = 'style.css';
	}

	// Enqueue the custom CSS files directly into the editor canvas
	add_editor_style($editor_styles);
}
add_action('after_setup_theme', 'strap_theme_setup');

if (! function_exists('strap_do_comments_template')) {
	/**
	 * Add the comments template part to singular post and page views.
	 *
	 * @return void
	 */
	function strap_do_comments_template(): void
	{
		if (! is_singular()) {
			return;
		}

		if (! comments_open() && '0' === get_comments_number()) {
			return;
		}

		block_template_part('part-comments');
	}

	add_action('strap_hook_end_single', 'strap_do_comments_template', 15);
	add_action('strap_hook_end_page', 'strap_do_comments_template', 15);
}

/**
 * Register Custom Block Categories
 *
 */

if (! function_exists('strap_custom_block_category')) {
	function strap_custom_block_category($categories, $block_editor_context)
	{

		$new_category = array(
			'slug'  => 'systemstrap',
			'title' => 'SystemStrap',
			'icon'  => null,
		);

		// Find the position of the 'theme' category
		$theme_index = -1;
		foreach ($categories as $index => $category) {
			if ('theme' === $category['slug']) {
				$theme_index = $index;
				break;
			}
		}

		if ($theme_index !== -1) {
			// Insert exactly before the 'theme' category
			array_splice($categories, $theme_index, 0, array($new_category));
		} else {
			// Fallback if 'theme' category isn't found
			$categories[] = $new_category;
		}

		return $categories;
	}

	add_filter('block_categories_all', 'strap_custom_block_category', 10, 2);
}

/**
 * Register Custom Pattern Category
 */
if (! function_exists('strap_custom_pattern_category')) {
	function strap_custom_pattern_category() {
		register_block_pattern_category(
			'systemstrap',
			array('label' => __('SystemStrap', 'systemstrap'))
		);
	}
	add_action('init', 'strap_custom_pattern_category');
}

