<?php
/**
 * Dynamic Styles Generation for SystemStrap.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'strap_generate_dynamic_colors' ) ) {
	/**
	 * Generates dynamic color shades and RGB variables from theme.json.
	 */
	function strap_generate_dynamic_colors_output() {
		if ( ! class_exists( 'Strap_ColorGenerator' ) ) {
			return '';
		}

		$settings = wp_get_global_settings();
		$colors   = $settings['color']['palette']['theme'] ?? [];

		if ( empty( $colors ) ) {
			return '';
		}

		$target_slugs   = [ 'primary', 'secondary', 'success', 'info', 'warning', 'danger', 'light', 'dark' ];
		$rgb_only_slugs = [ 'base', 'contrast', 'secondary-bg', 'secondary-color', 'tertiary-bg', 'tertiary-color', 'border-color' ];
		$css            = ":root, body, .editor-styles-wrapper {\n";
		$button_css     = "\n/* Dynamic Button Hover Shadows */\n";

		foreach ( $colors as $color ) {
			$slug = $color['slug'];
			$color_value = $color['color'];

			if ( strpos( $color_value, 'var(' ) !== false ) {
				continue;
			}

			if ( in_array( $slug, $rgb_only_slugs, true ) ) {
				$generator  = new Strap_ColorGenerator( $color_value );
				$rgb_string = $generator->hex_to_rgb( $color_value );
				$rgb_raw    = str_replace( [ 'rgb(', 'rgba(', ')' ], '', $rgb_string );
				$css       .= sprintf( "\t--wp--preset--color--%s-rgb: %s;\n", $slug, $rgb_raw );
				continue;
			}

			if ( ! in_array( $slug, $target_slugs, true ) ) {
				continue;
			}

			$generator = new Strap_ColorGenerator( $color_value );
			$palette   = $generator->createPalette( 5 );
			$suffixes  = [ 10, 20, 30, 40, 50 ];

			foreach ( $palette as $index => $shade_hex ) {
				$suffix = $suffixes[ $index ] ?? ( $index * 10 + 10 );
				$css   .= sprintf( "\t--wp--preset--color--%s-%d: %s;\n", $slug, $suffix, $shade_hex );
			}

			$rgb_string = $generator->hex_to_rgb( $color_value );
			$rgb_raw    = str_replace( [ 'rgb(', 'rgba(', ')' ], '', $rgb_string );
			$css       .= sprintf( "\t--wp--preset--color--%s-rgb: %s;\n", $slug, $rgb_raw );

			$text_contrast = $generator->parse_the_contrast( $color_value );
			$css          .= sprintf( "\t--wp--preset--color--%s-text: %s;\n", $slug, $text_contrast );

			$text_rgb_string = $generator->hex_to_rgb( $text_contrast );
			$text_rgb_raw    = str_replace( [ 'rgb(', 'rgba(', ')' ], '', $text_rgb_string );
			$css          .= sprintf( "\t--wp--preset--color--%s-text-rgb: %s;\n", $slug, $text_rgb_raw );

			$shadow_index = 3;
			if ( isset( $palette[ $shadow_index ] ) ) {
				$shadow_rgb_string = $generator->hex_to_rgb( $palette[ $shadow_index ] );
				$shadow_rgb_raw    = str_replace( [ 'rgb(', 'rgba(', ')' ], '', $shadow_rgb_string );
				$css              .= sprintf( "\t--wp--preset--color--%s-shadow-rgb: %s;\n", $slug, $shadow_rgb_raw );

				// Generate dynamic component CSS for this color
				$button_css .= "
/* System Badge Contrast Routing */
.system-badge.has-{$slug}-background-color,
.has-system-badge mark.has-{$slug}-background-color {
    color: var(--wp--preset--color--{$slug}-text) !important;
}

/* Latest Posts Widget Fix */
ul.wp-block-latest-posts.has-{$slug}-background-color {
    background-color: transparent !important;
}
ul.wp-block-latest-posts.has-{$slug}-background-color > li {
    background-color: var(--wp--preset--color--{$slug}) !important;
    color: var(--wp--preset--color--{$slug}-text, inherit) !important;
}

.wp-block-button__link.has-{$slug}-background-color {
    --local-btn-highlight-rgb: var(--wp--preset--color--{$slug}-text-rgb);
    --local-btn-shadow-rgb: var(--wp--preset--color--{$slug}-shadow-rgb);
}
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-color,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-color,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-color,
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-background-color,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-background-color,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-background-color {
    background-color: transparent !important;
    color: var(--wp--preset--color--{$slug}) !important;
    border-color: var(--wp--preset--color--{$slug}) !important;
    --local-btn-highlight-rgb: var(--wp--preset--color--{$slug}-text-rgb);
    --local-btn-shadow-rgb: var(--wp--preset--color--{$slug}-shadow-rgb);
}

.wp-block-button__link.has-{$slug}-background-color:not(:disabled) {
    box-shadow: var(--wp--preset--shadow--btn-resting, none);
}
.wp-block-button__link.has-{$slug}-background-color:not(:disabled):hover {
    background-color: var(--wp--preset--color--{$slug}-50) !important;
    border-color: var(--wp--custom--btn-hover-border-color) !important;
    box-shadow: var(--wp--preset--shadow--btn-hover, none);
}
.wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus {
    box-shadow: 0 0 0 .25rem rgba(var(--wp--preset--color--{$slug}-rgb), 0.5);
}
.wp-block-button__link.has-{$slug}-background-color:not(:disabled):active {
    background-color: var(--wp--preset--color--{$slug}-20) !important;
    box-shadow: var(--wp--preset--shadow--btn-active, none);
}

.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):hover,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):hover,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):hover,
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):hover,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):hover,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):hover {
    background-color: var(--wp--preset--color--{$slug}) !important;
    color: var(--wp--preset--color--{$slug}-text) !important;
    border-color: var(--wp--custom--btn-hover-border-color) !important;
    box-shadow: var(--wp--preset--shadow--btn-hover, none);
}
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus,
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus {
    box-shadow: 0 0 0 .25rem rgba(var(--wp--preset--color--{$slug}-rgb), 0.5);
}
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):active,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):active,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):active,
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):active,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):active,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):active {
    background-color: var(--wp--preset--color--{$slug}-20) !important;
    color: var(--wp--preset--color--{$slug}-text) !important;
    border-color: var(--wp--preset--color--{$slug}-20) !important;
    box-shadow: var(--wp--preset--shadow--btn-active, none);
}
";
			}
		}

		// Inject WordPress native image sizes for responsive carousels
		$thumbnail_width = get_option( 'thumbnail_size_w', 150 );
		$medium_width    = get_option( 'medium_size_w', 300 );
		$css            .= sprintf( "\t--wp--custom--thumbnail-width: %dpx;\n", $thumbnail_width );
		$css            .= sprintf( "\t--wp--custom--medium-width: %dpx;\n", $medium_width );

		$css .= "}\n";
		$css .= $button_css;

		// Add Gradient background routing for Latest Posts
		$gradients = $settings['color']['gradients']['theme'] ?? [];
		if ( ! empty( $gradients ) ) {
			foreach ( $gradients as $gradient ) {
				$slug = $gradient['slug'];
				$css .= "
/* Latest Posts Widget Gradient Fix */
ul.wp-block-latest-posts.has-{$slug}-gradient-background {
    background: transparent !important;
}
ul.wp-block-latest-posts.has-{$slug}-gradient-background > li {
    background-image: var(--wp--preset--gradient--{$slug}) !important;
}

/* Gradient Button Hover & Active States */
.wp-block-button__link.has-{$slug}-gradient-background:not(:disabled):hover {
    filter: brightness(1.15);
    box-shadow: var(--wp--preset--shadow--btn-hover, none);
    background-image: var(--wp--preset--gradient--{$slug}-hover, var(--wp--preset--gradient--{$slug})) !important;
}
.wp-block-button__link.has-{$slug}-gradient-background:not(:disabled):active {
    filter: brightness(0.9);
    box-shadow: var(--wp--preset--shadow--btn-active, none);
}
";
			}
		}

		return $css;
	}
}

if ( ! function_exists( 'strap_ensure_global_styles_handle' ) ) {
	/**
	 * Ensure a writable global styles handle exists before attaching inline CSS.
	 *
	 * Core registers `global-styles` on the frontend, but editor and block-asset
	 * flows may not always have that handle available when SystemStrap appends
	 * dynamic palette-derived CSS.
	 *
	 * @return void
	 */
	function strap_ensure_global_styles_handle() {
		if ( wp_style_is( 'global-styles', 'registered' ) ) {
			return;
		}

		wp_register_style( 'global-styles', false );
		wp_enqueue_style( 'global-styles' );
	}
}

// Frontend & Editor injection via global-styles
function strap_enqueue_all_dynamic_css() {
	static $has_run = false;
	if ( $has_run ) {
		return;
	}
	$has_run = true;

	$css = strap_generate_dynamic_colors_output();
	if ( $css ) {
		strap_ensure_global_styles_handle();
		wp_add_inline_style( 'global-styles', $css );
	}
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_all_dynamic_css', 100 );
add_action( 'enqueue_block_assets', 'strap_enqueue_all_dynamic_css', 100 );

if ( ! function_exists( 'systemstrap_get_active_variation_slugs' ) ) {
	/**
	 * Determines the active Mix and Match style variations (Color/Typography)
	 * by comparing the user's active settings against registered partial JSONs.
	 *
	 * @return array Associative array containing 'color' and 'typography' slugs.
	 */
	function systemstrap_get_active_variation_slugs() {
		static $active_slugs = null;
		if ( null !== $active_slugs ) {
			return $active_slugs;
		}

		$active_slugs = [
			'layout'     => 'system',
			'color'      => 'system',
			'typography' => 'system'
		];

		if ( ! class_exists( 'WP_Theme_JSON_Resolver' ) ) {
			return $active_slugs;
		}

		$settings = wp_get_global_settings();
		$active_palette = $settings['color']['palette']['theme'] ?? null;
		$active_fonts   = $settings['typography']['fontFamilies']['theme'] ?? null;
		$active_custom  = $settings['custom'] ?? [];

		// Get all mix and match partial variations
		$variations = WP_Theme_JSON_Resolver::get_style_variations( 'theme' );

		foreach ( $variations as $variation ) {
			$slug = $variation['slug'] ?? '';
			if ( empty( $slug ) ) {
				$slug = sanitize_title( str_replace( array( ' Palette', ' Typography', ' Layout', ' Cyberpunk' ), '', $variation['title'] ?? 'unknown' ) );
			}
			$clean_slug = $slug;

			// Fingerprint the color palette
			if ( isset( $variation['settings']['color']['palette']['theme'] ) && ! empty( $variation['settings']['color']['palette']['theme'] ) ) {
				$is_match = true;
				foreach ( $variation['settings']['color']['palette']['theme'] as $var_color ) {
					$found = false;
					foreach ( $active_palette as $active_color ) {
						if ( isset( $active_color['slug'], $var_color['slug'] ) && $active_color['slug'] === $var_color['slug'] && strtolower( $active_color['color'] ) === strtolower( $var_color['color'] ) ) {
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

			// Fingerprint the typography fontFamilies
			if ( isset( $variation['settings']['typography']['fontFamilies']['theme'] ) && ! empty( $variation['settings']['typography']['fontFamilies']['theme'] ) ) {
				$is_match = true;
				foreach ( $variation['settings']['typography']['fontFamilies']['theme'] as $var_font ) {
					$found = false;
					foreach ( $active_fonts as $active_font ) {
						if ( isset( $active_font['slug'], $var_font['slug'] ) && $active_font['slug'] === $var_font['slug'] && $active_font['fontFamily'] === $var_font['fontFamily'] ) {
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

			// Fingerprint the layout/custom variables
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
	 * Injects the active style variation slugs into the body class.
	 */
	function systemstrap_inject_variation_body_classes( $classes ) {
		$active_slugs = systemstrap_get_active_variation_slugs();

		if ( isset( $active_slugs['layout'] ) ) {
			$classes[] = 'is-layout-' . esc_attr( $active_slugs['layout'] );
		}
		if ( isset( $active_slugs['color'] ) ) {
			$classes[] = 'is-color-' . esc_attr( $active_slugs['color'] );
		}
		if ( isset( $active_slugs['typography'] ) ) {
			$classes[] = 'is-typography-' . esc_attr( $active_slugs['typography'] );
		}

		return $classes;
	}
	add_filter( 'body_class', 'systemstrap_inject_variation_body_classes' );
	add_filter( 'admin_body_class', function( $classes ) {
		$slugs = systemstrap_get_active_variation_slugs();
		$classes .= ' is-layout-' . sanitize_html_class( $slugs['layout'] ) . ' is-color-' . sanitize_html_class( $slugs['color'] ) . ' is-typography-' . sanitize_html_class( $slugs['typography'] );
		return $classes;
	} );
}
