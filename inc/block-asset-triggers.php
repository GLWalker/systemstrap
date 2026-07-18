<?php
/**
 * Block-driven asset triggers for SystemStrap.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Conditionally enqueue scripts for Accordion Tabs variation.
 *
 * @param string $block_content Rendered block content.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_enqueue_accordion_tabs( $block_content, $block ) {
	if (
		isset( $block['attrs']['className'] ) &&
		(
			false !== strpos( $block['attrs']['className'], 'is-style-system-tabs' ) ||
			false !== strpos( $block['attrs']['className'], 'is-style-system-tabs-vertical' )
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
 * @param array  $block Parsed block data.
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
		false !== strpos( $block_content, 'query-directory-listing' ) ||
		false !== strpos( $block_content, 'directory-listing' ) ||
		false !== strpos( $block_content, 'directory-listing__query' )
	) {
		wp_enqueue_style( 'strap-query-directory' );
	}

	if (
		false !== strpos( $block_content, 'systemstrap-directory-grid' ) ||
		false !== strpos( $block_content, 'systemstrap-directory-grid__items' )
	) {
		wp_enqueue_style( 'strap-query-directory' );
		wp_enqueue_style( 'strap-query-directory-grid' );
	}

	if (
		false !== strpos( $block_content, 'query-latest-posts' ) ||
		false !== strpos( $block_content, 'systemstrap-latest-posts' ) ||
		false !== strpos( $block_content, 'systemstrap-latest-posts__query' )
	) {
		wp_enqueue_style( 'strap-query-directory' );
		wp_enqueue_style( 'strap-query-latest-posts-list' );
	}

	return $block_content;
}
add_filter( 'render_block', 'strap_enqueue_query_directory_styles', 10, 2 );

/**
 * Enqueue pagination block styles only when pagination blocks render.
 *
 * @param string $block_content Rendered block content.
 * @param array  $block Parsed block data.
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
