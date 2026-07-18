<?php
/**
 * Style variation state helpers for SystemStrap.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'systemstrap_get_active_variation_slugs' ) ) {
	/**
	 * Determine the active Mix and Match style variation slugs.
	 *
	 * @return array<string, string>
	 */
	function systemstrap_get_active_variation_slugs() {
		static $active_slugs = null;

		if ( null !== $active_slugs ) {
			return $active_slugs;
		}

		$active_slugs = array(
			'layout'     => 'system',
			'color'      => 'system',
			'typography' => 'system',
		);

		if ( ! class_exists( 'WP_Theme_JSON_Resolver' ) ) {
			return $active_slugs;
		}

		$settings       = wp_get_global_settings();
		$active_palette = $settings['color']['palette']['theme'] ?? null;
		$active_fonts   = $settings['typography']['fontFamilies']['theme'] ?? null;
		$active_custom  = $settings['custom'] ?? array();
		$variations     = WP_Theme_JSON_Resolver::get_style_variations( 'theme' );

		foreach ( $variations as $variation ) {
			$slug = $variation['slug'] ?? '';

			if ( empty( $slug ) ) {
				$slug = sanitize_title(
					str_replace(
						array( ' Palette', ' Typography', ' Layout', ' Cyberpunk' ),
						'',
						$variation['title'] ?? 'unknown'
					)
				);
			}

			$clean_slug = $slug;

			if ( isset( $variation['settings']['color']['palette']['theme'] ) && ! empty( $variation['settings']['color']['palette']['theme'] ) ) {
				$is_match = true;

				foreach ( $variation['settings']['color']['palette']['theme'] as $var_color ) {
					$found = false;

					foreach ( $active_palette as $active_color ) {
						if (
							isset( $active_color['slug'], $var_color['slug'] ) &&
							$active_color['slug'] === $var_color['slug'] &&
							strtolower( $active_color['color'] ) === strtolower( $var_color['color'] )
						) {
							$found = true;
							break;
						}
					}

					if ( ! $found ) {
						$is_match = false;
						break;
					}
				}

				if ( $is_match ) {
					$active_slugs['color'] = $clean_slug;
				}
			}

			if ( isset( $variation['settings']['typography']['fontFamilies']['theme'] ) && ! empty( $variation['settings']['typography']['fontFamilies']['theme'] ) ) {
				$is_match = true;

				foreach ( $variation['settings']['typography']['fontFamilies']['theme'] as $var_font ) {
					$found = false;

					foreach ( $active_fonts as $active_font ) {
						if (
							isset( $active_font['slug'], $var_font['slug'] ) &&
							$active_font['slug'] === $var_font['slug'] &&
							$active_font['fontFamily'] === $var_font['fontFamily']
						) {
							$found = true;
							break;
						}
					}

					if ( ! $found ) {
						$is_match = false;
						break;
					}
				}

				if ( $is_match ) {
					$active_slugs['typography'] = $clean_slug;
				}
			}

			if ( isset( $variation['settings']['custom'] ) && ! empty( $variation['settings']['custom'] ) ) {
				$is_match = true;

				foreach ( $variation['settings']['custom'] as $key => $val ) {
					if ( ! isset( $active_custom[ $key ] ) || $active_custom[ $key ] !== $val ) {
						$is_match = false;
						break;
					}
				}

				if ( $is_match ) {
					$active_slugs['layout'] = $clean_slug;
				}
			}
		}

		return $active_slugs;
	}
}

if ( ! function_exists( 'systemstrap_inject_variation_body_classes' ) ) {
	/**
	 * Inject the active style variation slugs into the body class array.
	 *
	 * @param string[] $classes Existing body classes.
	 * @return string[]
	 */
	function systemstrap_inject_variation_body_classes( $classes ) {
		$active_slugs = systemstrap_get_active_variation_slugs();

		if ( isset( $active_slugs['layout'] ) ) {
			$classes[] = 'is-layout-' . sanitize_html_class( $active_slugs['layout'] );
		}

		if ( isset( $active_slugs['color'] ) ) {
			$classes[] = 'is-color-' . sanitize_html_class( $active_slugs['color'] );
		}

		if ( isset( $active_slugs['typography'] ) ) {
			$classes[] = 'is-typography-' . sanitize_html_class( $active_slugs['typography'] );
		}

		return $classes;
	}

	add_filter( 'body_class', 'systemstrap_inject_variation_body_classes' );
	add_filter(
		'admin_body_class',
		function ( $classes ) {
			$slugs = systemstrap_get_active_variation_slugs();
			$classes .= ' is-layout-' . sanitize_html_class( $slugs['layout'] );
			$classes .= ' is-color-' . sanitize_html_class( $slugs['color'] );
			$classes .= ' is-typography-' . sanitize_html_class( $slugs['typography'] );
			return $classes;
		}
	);
}

if ( ! function_exists( 'strap_get_style_variation_sync_map' ) ) {
	/**
	 * Build the editor sync map between layout, color, and typography partials.
	 *
	 * @return array<string, array<string, string>>
	 */
	function strap_get_style_variation_sync_map() {
		$theme_styles_dir = get_template_directory() . '/styles';
		$layout_files     = glob( $theme_styles_dir . '/*.json' );
		$sync_map         = array();

		if ( empty( $layout_files ) ) {
			return $sync_map;
		}

		foreach ( $layout_files as $layout_file ) {
			$slug            = basename( $layout_file, '.json' );
			$color_file      = $theme_styles_dir . '/colors/' . $slug . '.json';
			$typography_file = $theme_styles_dir . '/typography/' . $slug . '.json';

			if ( ! file_exists( $color_file ) || ! file_exists( $typography_file ) ) {
				continue;
			}

			$layout_data     = wp_json_file_decode( $layout_file, array( 'associative' => true ) );
			$color_data      = wp_json_file_decode( $color_file, array( 'associative' => true ) );
			$typography_data = wp_json_file_decode( $typography_file, array( 'associative' => true ) );

			if ( ! is_array( $layout_data ) || ! is_array( $color_data ) || ! is_array( $typography_data ) ) {
				continue;
			}

			$sync_map[ $slug ] = array(
				'layoutTitle'     => isset( $layout_data['title'] ) ? (string) $layout_data['title'] : $slug,
				'colorTitle'      => isset( $color_data['title'] ) ? (string) $color_data['title'] : $slug,
				'typographyTitle' => isset( $typography_data['title'] ) ? (string) $typography_data['title'] : $slug,
			);
		}

		return $sync_map;
	}
}
