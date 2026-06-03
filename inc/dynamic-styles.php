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
				
				// Generate dynamic button CSS for this color
				$button_css .= "
.wp-block-button__link.has-{$slug}-background-color:not(:disabled) {
    box-shadow: inset 0 .0625rem 0 rgba(var(--wp--preset--color--{$slug}-text-rgb), 0.15), 0 .0625rem .0625rem rgba(0, 0, 0, 0.075);
}
.wp-block-button__link.has-{$slug}-background-color:not(:disabled):hover {
    background-color: var(--wp--preset--color--{$slug}-50) !important;
    box-shadow: inset 0 .0625rem 0 rgba(var(--wp--preset--color--{$slug}-text-rgb), 0.15), 0 .0625rem .0625rem rgba(0, 0, 0, 0.075);
    transform: translateY(-1px);
}
.wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus {
    box-shadow: 0 0 0 .25rem rgba(var(--wp--preset--color--{$slug}-rgb), 0.5);
}
.wp-block-button__link.has-{$slug}-background-color:not(:disabled):active {
    background-color: var(--wp--preset--color--{$slug}-20) !important;
    box-shadow: inset 0 .1875rem .3125rem rgba(0, 0, 0, 0.125);
    transform: translateY(0);
}

.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):hover,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):hover,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):hover {
    background-color: var(--wp--preset--color--{$slug}) !important;
    color: var(--wp--preset--color--{$slug}-text) !important;
    box-shadow: inset 0 .0625rem 0 rgba(var(--wp--preset--color--{$slug}-text-rgb), 0.15), 0 .0625rem .0625rem rgba(0, 0, 0, 0.075);
    transform: translateY(-1px);
}
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus {
    box-shadow: 0 0 0 .25rem rgba(var(--wp--preset--color--{$slug}-rgb), 0.5);
}
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):active,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):active,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):active {
    background-color: var(--wp--preset--color--{$slug}-20) !important;
    color: var(--wp--preset--color--{$slug}-text) !important;
    border-color: var(--wp--preset--color--{$slug}-20) !important;
    box-shadow: inset 0 .1875rem .3125rem rgba(0, 0, 0, 0.125);
    transform: translateY(0);
}
";
			}
		}

		$css .= "}\n";
		$css .= $button_css;

		return $css;
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
		wp_add_inline_style( 'global-styles', $css );
	}
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_all_dynamic_css', 100 );
add_action( 'enqueue_block_assets', 'strap_enqueue_all_dynamic_css', 100 );
