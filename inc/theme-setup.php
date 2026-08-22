<?php
/**
 * Theme setup adjuncts for SystemStrap.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'strap_theme_setup' ) ) {
	/**
	 * Register core theme supports and editor styles.
	 *
	 * @return void
	 */
	function strap_theme_setup() {
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'custom-logo',
			array(
				'height'               => 90,
				'width'                => 90,
				'flex-height'          => true,
				'flex-width'           => true,
				'header-text'          => array( 'site-title', 'site-description' ),
				'unlink-homepage-logo' => true,
			)
		);

		$editor_styles = array(
			'assets/css/strap-reset.css',
			'assets/css/main-styles.css',
		);

		if ( is_child_theme() ) {
			$editor_styles[] = 'style.css';
		}

		add_editor_style( $editor_styles );
	}

	add_action( 'after_setup_theme', 'strap_theme_setup' );
}

if ( ! function_exists( 'strap_do_comments_template' ) ) {
	/**
	 * Add the comments template part to singular post and page views.
	 *
	 * @return void
	 */
	function strap_do_comments_template(): void {
		if ( ! is_singular() ) {
			return;
		}

		if ( ! comments_open() && '0' === get_comments_number() ) {
			return;
		}

		block_template_part( 'part-comments' );
	}

	add_action( 'strap_hook_end_single', 'strap_do_comments_template', 15 );
	add_action( 'strap_hook_end_page', 'strap_do_comments_template', 15 );
}

if ( ! function_exists( 'strap_custom_block_category' ) ) {
	/**
	 * Register the SystemStrap block category near the native theme category.
	 *
	 * @param array $categories Existing block categories.
	 * @param mixed $block_editor_context Current editor context.
	 * @return array
	 */
	function strap_custom_block_category( $categories, $block_editor_context ) {
		$new_category = array(
			'slug'  => 'systemstrap',
			'title' => 'SystemStrap',
			'icon'  => null,
		);

		$theme_index = -1;
		foreach ( $categories as $index => $category ) {
			if ( 'theme' === $category['slug'] ) {
				$theme_index = $index;
				break;
			}
		}

		if ( -1 !== $theme_index ) {
			array_splice( $categories, $theme_index, 0, array( $new_category ) );
		} else {
			$categories[] = $new_category;
		}

		return $categories;
	}

	add_filter( 'block_categories_all', 'strap_custom_block_category', 10, 2 );
}

if ( ! function_exists( 'strap_custom_pattern_category' ) ) {
	/**
	 * Register the SystemStrap pattern category.
	 *
	 * @return void
	 */
	function strap_custom_pattern_category() {
		register_block_pattern_category(
			'systemstrap',
			array(
				'label' => __( 'SystemStrap', 'systemstrap' ),
			)
		);
	}

	add_action( 'init', 'strap_custom_pattern_category' );
}

if ( ! function_exists( 'strap_filter_assignable_block_templates' ) ) {
	/**
	 * Limit the post and page template picker to content-layout templates.
	 *
	 * Runtime templates remain available to WordPress's hierarchy and Site Editor.
	 *
	 * @param WP_Block_Template[] $templates     Available block templates.
	 * @param array               $query         Template query arguments.
	 * @param string              $template_type Requested template type.
	 * @return WP_Block_Template[]
	 */
	function strap_filter_assignable_block_templates( $templates, $query, $template_type ) {
		if (
			'wp_template' !== $template_type ||
			empty( $query['post_type'] ) ||
			! in_array( $query['post_type'], array( 'post', 'page' ), true )
		) {
			return $templates;
		}

		$assignable_slugs = array(
			'blank',
			'no-title',
			'single-secondary',
			'three-column',
		);

		return array_values(
			array_filter(
				$templates,
				function ( $template ) use ( $assignable_slugs ) {
					return in_array( $template->slug, $assignable_slugs, true );
				}
			)
		);
	}

	add_filter( 'get_block_templates', 'strap_filter_assignable_block_templates', 20, 3 );
}
