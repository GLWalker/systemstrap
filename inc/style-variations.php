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

if ( ! function_exists( 'strap_extract_typography_properties' ) ) {
	/**
	 * Retain only typography values while preserving their nested paths.
	 *
	 * @param mixed $value Source value.
	 * @return mixed
	 */
	function strap_extract_typography_properties( $value ) {
		if ( ! is_array( $value ) ) {
			return array();
		}

		$result = array();

		foreach ( $value as $key => $item ) {
			if ( 'typography' === $key ) {
				$result[ $key ] = $item;
				continue;
			}

			if ( is_array( $item ) ) {
				$nested = strap_extract_typography_properties( $item );
				if ( ! empty( $nested ) ) {
					$result[ $key ] = $nested;
				}
			}
		}

		return $result;
	}
}

if ( ! function_exists( 'strap_get_typography_pairing_manifest' ) ) {
	/**
	 * Resolve editor-safe typography data from the data-only pairing manifest.
	 *
	 * @return array<string, mixed>
	 */
	function strap_get_typography_pairing_manifest() {
		$stylesheet_dir = get_stylesheet_directory();
		$template_dir   = get_template_directory();
		$resolve_file   = static function ( $relative_path ) use ( $stylesheet_dir, $template_dir ) {
			if ( ! is_string( $relative_path ) || '' === $relative_path || str_contains( $relative_path, '..' ) ) {
				return '';
			}

			foreach ( array_unique( array( $stylesheet_dir, $template_dir ) ) as $theme_dir ) {
				$file = $theme_dir . '/' . ltrim( $relative_path, '/' );

				if ( is_file( $file ) ) {
					return $file;
				}
			}

			return '';
		};
		$manifest_file  = $resolve_file( 'assets/typography-pairing-manifest.json' );
		$theme_file     = $resolve_file( 'theme.json' );

		if ( '' === $manifest_file || '' === $theme_file ) {
			return array();
		}

		$manifest      = wp_json_file_decode( $manifest_file, array( 'associative' => true ) );
		$theme_data    = wp_json_file_decode( $theme_file, array( 'associative' => true ) );
		$pairings      = array();

		if ( ! is_array( $manifest ) || ! is_array( $theme_data ) || empty( $manifest['pairings'] ) || ! is_array( $manifest['pairings'] ) ) {
			return array();
		}

		foreach ( $manifest['pairings'] as $pairing ) {
			$color_path      = $pairing['color'] ?? '';
			$typography_path = $pairing['typography'] ?? '';
			$is_color_variation = is_string( $color_path ) && 0 === strpos( $color_path, 'styles/colors/' );
			$is_typography_variation = is_string( $typography_path ) && 0 === strpos( $typography_path, 'styles/typography/' );
			$is_default_typography = 'theme.json' === $typography_path;

			if ( ! $is_color_variation || ( ! $is_typography_variation && ! $is_default_typography ) ) {
				continue;
			}

			$color_file      = $resolve_file( $color_path );
			$typography_file = $is_typography_variation ? $resolve_file( $typography_path ) : '';

			if ( '' === $color_file || ( $is_typography_variation && '' === $typography_file ) ) {
				continue;
			}

			$color_data      = wp_json_file_decode( $color_file, array( 'associative' => true ) );
			$typography_data = $is_typography_variation ? wp_json_file_decode( $typography_file, array( 'associative' => true ) ) : array();

			if ( ! is_array( $color_data ) || empty( $color_data['title'] ) || empty( $color_data['settings']['color']['palette'] ) || ( $is_typography_variation && ( ! is_array( $typography_data ) || empty( $typography_data['title'] ) ) ) ) {
				continue;
			}

			$pairings[] = array(
				'isDefaultTypography' => $is_default_typography,
				'palette'         => $color_data['settings']['color']['palette'],
				'typography'      => array(
					'settings' => $is_typography_variation ? strap_extract_typography_properties( $typography_data['settings'] ?? array() ) : strap_extract_typography_properties( $theme_data['settings'] ?? array() ),
					'styles'   => $is_typography_variation ? strap_extract_typography_properties( $typography_data['styles'] ?? array() ) : strap_extract_typography_properties( $theme_data['styles'] ?? array() ),
				),
			);
		}

		return array(
			'pairings' => $pairings,
			'defaultTypography' => array(
				'settings' => strap_extract_typography_properties( $theme_data['settings'] ?? array() ),
				'styles'   => strap_extract_typography_properties( $theme_data['styles'] ?? array() ),
			),
		);
	}
}
