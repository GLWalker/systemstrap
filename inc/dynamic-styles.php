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
		$fixed_contrast_map = [
			'base'            => 'contrast',
			'contrast'        => 'base',
			'secondary-bg'    => 'secondary-color',
			'secondary-color' => 'secondary-bg',
			'tertiary-bg'     => 'tertiary-color',
			'tertiary-color'  => 'tertiary-bg',
		];
		$css            = ":root, body, .editor-styles-wrapper {\n";
		$button_css     = "\n/* Dynamic Button Hover Shadows */\n";
		$tabs_css       = "\n/* Dynamic System Tabs Active Join Color Routing */\n";
		$directory_css    = "\n/* Dynamic Query Directory Header-to-Badge Color Routing */\n";
		$latest_posts_css = "\n/* Dynamic Latest Posts Header-to-Badge Color Routing */\n";

		foreach ( $colors as $color ) {
			$slug = sanitize_title( $color['slug'] );
			if ( empty( $slug ) ) {
				continue;
			}
			$color_value = $color['color'];

			if ( strpos( $color_value, 'var(' ) !== false ) {
				continue;
			}

			$tabs_css .= "
body:not(.editor-styles-wrapper) .wp-block-accordion.is-style-system-tabs .system-tabs__tab.has-{$slug}-background-color[aria-selected=\"true\"],
body:not(.editor-styles-wrapper) .wp-block-accordion.is-style-system-tabs-vertical .system-tabs__tab.has-{$slug}-background-color[aria-selected=\"true\"] {
    --system-tabs-active-join-color: var(--wp--preset--color--{$slug}) !important;
}
";

$directory_css .= "
.query-directory-listing.has-{$slug}-color,
.directory-listing.has-{$slug}-color,
.query-directory-grid.has-{$slug}-color,
.systemstrap-directory-grid.has-{$slug}-color,
.query-latest-posts.has-{$slug}-color {
    --query-directory-listing-muted-color: var(--wp--preset--color--current-mix-color);
    --directory-grid-card-muted-color: var(--wp--preset--color--current-mix-color);
    --strap-pagination-current-bg: var(--wp--preset--color--{$slug});
    --strap-pagination-current-border-color: var(--wp--preset--color--{$slug});
    --strap-pagination-current-color: var(--wp--preset--color--base);
}

.query-directory-listing.has-{$slug}-background-color,
.directory-listing.has-{$slug}-background-color,
.query-directory-grid.has-{$slug}-background-color,
.systemstrap-directory-grid.has-{$slug}-background-color,
.query-latest-posts.has-{$slug}-background-color {
    --query-directory-listing-muted-color: var(--wp--preset--color--current-mix-color);
    --directory-grid-card-muted-color: var(--wp--preset--color--current-mix-color);
    --strap-pagination-current-bg: var(--wp--preset--color--{$slug}-text);
    --strap-pagination-current-border-color: var(--wp--preset--color--{$slug}-text);
    --strap-pagination-current-color: var(--wp--preset--color--{$slug});
}

.query-directory-listing:has(> .query-directory-listing__header.has-{$slug}-background-color),
.directory-listing:has(> .directory-listing__header.has-{$slug}-background-color) {
    --query-directory-listing-badge-bg: rgba(var(--wp--preset--color--{$slug}-rgb), 0.16);
    --query-directory-listing-badge-border-color: rgba(var(--wp--preset--color--{$slug}-rgb), 0.3);
}

.query-directory-listing__post-terms.has-{$slug}-background-color,
.directory-listing__post-terms.has-{$slug}-background-color {
    background-color: transparent !important;
    --query-directory-listing-term-badge-bg: var(--wp--preset--color--{$slug});
    --query-directory-listing-term-badge-border-color: var(--wp--preset--color--{$slug});
}

.query-directory-listing__post-terms.has-{$slug}-background-color a:hover,
.query-directory-listing__post-terms.has-{$slug}-background-color a:focus-visible,
.directory-listing__post-terms.has-{$slug}-background-color a:hover,
.directory-listing__post-terms.has-{$slug}-background-color a:focus-visible {
    background-color: var(--wp--preset--color--{$slug}-50) !important;
    border-color: var(--wp--custom--btn-hover-border-color) !important;
    color: var(--wp--preset--color--{$slug}-text) !important;
    text-decoration: none !important;
}

.query-directory-listing__post-terms.has-{$slug}-color,
.directory-listing__post-terms.has-{$slug}-color {
    background-color: transparent !important;
    --query-directory-listing-term-badge-bg: rgba(var(--wp--preset--color--{$slug}-rgb), 0.16);
    --query-directory-listing-term-badge-border-color: rgba(var(--wp--preset--color--{$slug}-rgb), 0.3);
    --query-directory-listing-term-badge-color: var(--wp--preset--color--{$slug});
}
";

$latest_posts_css .= "
.query-latest-posts:has(> .query-latest-posts__header.has-{$slug}-color),
.query-latest-posts:has(> .query-latest-posts__header .query-latest-posts__heading.has-{$slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header.has-{$slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header .systemstrap-latest-posts__heading.has-{$slug}-color) {
    --query-directory-listing-badge-bg: var(--wp--preset--color--{$slug});
    --query-directory-listing-badge-border-color: var(--wp--preset--color--{$slug});
    --strap-pagination-current-bg: var(--wp--preset--color--{$slug});
    --strap-pagination-current-border-color: var(--wp--preset--color--{$slug});
    --strap-pagination-current-color: var(--wp--preset--color--base);
}

.query-latest-posts:has(> .query-latest-posts__header .query-latest-posts__header-icon.has-{$slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header .systemstrap-latest-posts__header-icon.has-{$slug}-color) {
    --query-directory-listing-badge-bg: var(--wp--preset--color--{$slug});
    --query-directory-listing-badge-border-color: var(--wp--preset--color--{$slug});
    --strap-pagination-current-bg: var(--wp--preset--color--{$slug});
    --strap-pagination-current-border-color: var(--wp--preset--color--{$slug});
    --strap-pagination-current-color: var(--wp--preset--color--base);
}

.query-latest-posts:has(> .query-latest-posts__header.has-{$slug}-background-color),
.query-latest-posts:has(> .query-latest-posts__header .query-latest-posts__heading.has-{$slug}-background-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header.has-{$slug}-background-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header .systemstrap-latest-posts__heading.has-{$slug}-background-color) {
    --query-directory-listing-badge-bg: var(--wp--preset--color--{$slug});
    --query-directory-listing-badge-border-color: var(--wp--preset--color--{$slug});
    --strap-pagination-current-bg: var(--wp--preset--color--{$slug});
    --strap-pagination-current-border-color: var(--wp--preset--color--{$slug});
    --strap-pagination-current-color: var(--wp--preset--color--base);
}
";

			if ( in_array( $slug, $rgb_only_slugs, true ) ) {
				$generator  = new Strap_ColorGenerator( $color_value );
				$rgb_string = $generator->hex_to_rgb( $color_value );
				$rgb_raw    = str_replace( [ 'rgb(', 'rgba(', ')' ], '', $rgb_string );
				$css       .= sprintf( "\t--wp--preset--color--%s-rgb: %s;\n", $slug, $rgb_raw );

				if ( isset( $fixed_contrast_map[ $slug ] ) ) {
					$contrast_slug = $fixed_contrast_map[ $slug ];
					$button_css .= "
/* Fixed Contrast Routing */
.has-{$slug}-background-color:not(.has-text-color) {
    color: var(--wp--preset--color--{$contrast_slug}) !important;
}
";
				}

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

			// Removed --wp--preset--color--{$slug}-text-rgb per user instruction.

			$shadow_index = 3;
			if ( isset( $palette[ $shadow_index ] ) ) {
				$shadow_rgb_string = $generator->hex_to_rgb( $palette[ $shadow_index ] );
				$shadow_rgb_raw    = str_replace( [ 'rgb(', 'rgba(', ')' ], '', $shadow_rgb_string );
				$css              .= sprintf( "\t--wp--preset--color--%s-shadow-rgb: %s;\n", $slug, $shadow_rgb_raw );

				// Generate dynamic component CSS for this color
				$button_css .= "
/* Dynamic Background Contrast Routing */
.has-{$slug}-background-color:not(.has-text-color) {
    color: var(--wp--preset--color--{$slug}-text) !important;
}

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

		foreach ( $colors as $background_color ) {
			$background_slug = sanitize_title( $background_color['slug'] );
			if ( empty( $background_slug ) ) {
				continue;
			}

			foreach ( $colors as $text_color ) {
				$text_slug = sanitize_title( $text_color['slug'] );
				if ( empty( $text_slug ) ) {
					continue;
				}

$latest_posts_css .= "
.query-directory-listing.has-{$background_slug}-background-color.has-{$text_slug}-color,
.directory-listing.has-{$background_slug}-background-color.has-{$text_slug}-color,
.query-directory-grid.has-{$background_slug}-background-color.has-{$text_slug}-color,
.systemstrap-directory-grid.has-{$background_slug}-background-color.has-{$text_slug}-color,
.query-latest-posts.has-{$background_slug}-background-color.has-{$text_slug}-color {
    --query-directory-listing-muted-color: var(--wp--preset--color--current-mix-color);
    --directory-grid-card-muted-color: var(--wp--preset--color--current-mix-color);
    --strap-pagination-current-bg: var(--wp--preset--color--{$text_slug});
    --strap-pagination-current-border-color: var(--wp--preset--color--{$text_slug});
    --strap-pagination-current-color: var(--wp--preset--color--{$background_slug});
}

.query-latest-posts:has(> .query-latest-posts__header.has-{$background_slug}-background-color.has-{$text_slug}-color),
.query-latest-posts:has(> .query-latest-posts__header.has-{$background_slug}-background-color .query-latest-posts__heading.has-{$text_slug}-color),
.query-latest-posts:has(> .query-latest-posts__header .query-latest-posts__heading.has-{$background_slug}-background-color.has-{$text_slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header.has-{$background_slug}-background-color.has-{$text_slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header.has-{$background_slug}-background-color .systemstrap-latest-posts__heading.has-{$text_slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header .systemstrap-latest-posts__heading.has-{$background_slug}-background-color.has-{$text_slug}-color) {
    --query-directory-listing-badge-color: var(--wp--preset--color--{$text_slug});
    --strap-pagination-current-color: var(--wp--preset--color--{$text_slug});
}

.query-directory-listing__post-terms.has-{$background_slug}-background-color.has-{$text_slug}-color,
.directory-listing__post-terms.has-{$background_slug}-background-color.has-{$text_slug}-color {
    background-color: transparent !important;
    --query-directory-listing-term-badge-bg: var(--wp--preset--color--{$background_slug});
    --query-directory-listing-term-badge-border-color: var(--wp--preset--color--{$background_slug});
    --query-directory-listing-term-badge-color: var(--wp--preset--color--{$text_slug});
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
		$css .= $tabs_css;
		$css .= $directory_css;
		$css .= $latest_posts_css;

		// Add Gradient background routing for Latest Posts
		$gradients = $settings['color']['gradients']['theme'] ?? [];
		if ( ! empty( $gradients ) ) {
			foreach ( $gradients as $gradient ) {
				$slug = sanitize_title( $gradient['slug'] );
				if ( empty( $slug ) ) {
					continue;
				}
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
	 */
	function strap_ensure_global_styles_handle() {
		if ( wp_style_is( 'global-styles', 'registered' ) ) {
			return;
		}
		wp_register_style( 'global-styles', false );
		wp_enqueue_style( 'global-styles' );
	}
}

if ( ! function_exists( 'strap_enqueue_all_dynamic_css' ) ) {
	/**
	 * Frontend & Editor injection of dynamic palette styles.
	 * We append directly to 'global-styles' so it prints inside the same tag,
	 * but we use late priorities (9999) to ensure WP core has already added its own rules first.
	 */
	function strap_enqueue_all_dynamic_css() {
		static $has_run = false;
		if ( $has_run ) {
			return;
		}
		$has_run = true;

		$css = strap_generate_dynamic_colors_output();
		if ( ! $css ) {
			return;
		}

		strap_ensure_global_styles_handle();
		wp_add_inline_style( 'global-styles', $css );
	}
}
// Run very late so wp_enqueue_global_styles (priority 10) has already populated its rules.
add_action( 'wp_enqueue_scripts', 'strap_enqueue_all_dynamic_css', 9999 );
add_action( 'enqueue_block_editor_assets', 'strap_enqueue_all_dynamic_css', 9999 );

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
	add_filter( 'admin_body_class', function( $classes ) {
		$slugs = systemstrap_get_active_variation_slugs();
		$classes .= ' is-layout-' . sanitize_html_class( $slugs['layout'] ) . ' is-color-' . sanitize_html_class( $slugs['color'] ) . ' is-typography-' . sanitize_html_class( $slugs['typography'] );
		return $classes;
	} );
}
