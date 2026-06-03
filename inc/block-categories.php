<?php
/**
 * Register Custom Block Categories
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function strap_custom_block_category( $categories, $block_editor_context ) {
	$new_category = array(
		'slug'  => 'systemstrap',
		'title' => 'SystemStrap',
		'icon'  => null,
	);

	// Find the position of the 'theme' category
	$theme_index = -1;
	foreach ( $categories as $index => $category ) {
		if ( 'theme' === $category['slug'] ) {
			$theme_index = $index;
			break;
		}
	}

	if ( $theme_index !== -1 ) {
		// Insert exactly before the 'theme' category
		array_splice( $categories, $theme_index, 0, array( $new_category ) );
	} else {
		// Fallback if 'theme' category isn't found
		$categories[] = $new_category;
	}

	return $categories;
}
add_filter( 'block_categories_all', 'strap_custom_block_category', 10, 2 );
