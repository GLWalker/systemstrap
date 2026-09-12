<?php

/**
 * Block-driven asset triggers for SystemStrap.
 *
 * @package systemstrap
 */

if (! defined('ABSPATH')) {
	exit;
}

/**
 * Conditionally enqueue scripts for Accordion Tabs variation.
 *
 * @param string $block_content Rendered block content.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_enqueue_accordion_tabs($block_content, $block)
{
	if (
		isset($block['attrs']['className']) &&
		(
			false !== strpos($block['attrs']['className'], 'is-style-system-tabs') ||
			false !== strpos($block['attrs']['className'], 'is-style-system-tabs-vertical')
		)
	) {
		wp_enqueue_script(
			'strap-accordion-tabs',
			get_template_directory_uri() . '/assets/js/accordion-tabs.js',
			array(),
			wp_get_theme()->get('Version'),
			true
		);
	}

	return $block_content;
}
add_filter('render_block', 'strap_enqueue_accordion_tabs', 10, 2);

/**
 * Conditionally enqueue query component styles when their markup renders.
 *
 * @param string $block_content Rendered block content.
 * @param array  $block         Parsed block data.
 * @return string
 */
function strap_enqueue_query_directory_styles($block_content, $block)
{
	if (empty($block['blockName'])) {
		return $block_content;
	}

	if (! in_array($block['blockName'], array('core/group', 'core/query', 'core/post-template'), true)) {
		return $block_content;
	}

	// Query Directory Listing.
	if (false !== strpos($block_content, 'query-directory-listing')) {
		wp_enqueue_style('strap-query-directory');
	}

	// Query Directory Grid.
	if (false !== strpos($block_content, 'query-directory-grid')) {
		wp_enqueue_style('strap-query-directory');
		wp_enqueue_style('strap-query-directory-grid');
	}

	// Query Latest Posts List.
	if (false !== strpos($block_content, 'query-latest-posts')) {
		wp_enqueue_style('strap-query-directory');
		wp_enqueue_style('strap-query-latest-posts-list');
	}

	// Query Directory Image Grid.
	if (false !== strpos($block_content, 'query-directory-image-grid')) {
		wp_enqueue_style('strap-query-directory');
		wp_enqueue_style('strap-query-directory-image-grid');
	}

	return $block_content;
}
add_filter('render_block', 'strap_enqueue_query_directory_styles', 10, 2);
