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

		$settings  = wp_get_global_settings();
		$colors    = $settings['color']['palette']['theme'] ?? [];
		$gradients = $settings['color']['gradients']['theme'] ?? [];

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
		$same_element_contrast_css = "\n/* Same-Element Preset Contrast Routing */\n";
		$pagination_css   = "\n/* Dynamic Pagination Background Routing */\n";
		$pattern_css      = "\n/* Dynamic Pattern Gradient Background Routing */\n";
		$pattern_tone_css = "\n/* Dynamic Pattern Tone Routing */\n";

		if ( ! empty( $gradients ) ) {
			foreach ( $gradients as $g ) {
				$g_slug = sanitize_title( $g['slug'] ?? '' );
				if ( empty( $g_slug ) || strpos( $g_slug, 'pattern-' ) !== 0 ) {
					continue;
				}

				$pattern_css .= "
.has-{$g_slug}-gradient-background {
	--wp--custom--system-ui-pattern-color: currentColor;
	background-image: var(--wp--preset--gradient--{$g_slug}) !important;
}
";

				foreach ( $colors as $c_item ) {
					$c_slug = sanitize_title( $c_item['slug'] ?? '' );
					if ( empty( $c_slug ) ) {
						continue;
					}

					$pattern_css .= "
.has-{$c_slug}-background-color.has-{$g_slug}-gradient-background {
	background-color: var(--wp--preset--color--{$c_slug}) !important;
	background-image: var(--wp--preset--gradient--{$g_slug}) !important;
}
";
				}
			}
		}

		$palette_by_slug = array();
		foreach ( $colors as $c ) {
			$palette_slug  = sanitize_title( $c['slug'] ?? '' );
			$palette_color = $c['color'] ?? '';

			if ( $palette_slug && is_string( $palette_color ) && strpos( $palette_color, 'var(' ) === false ) {
				$palette_by_slug[ $palette_slug ] = $palette_color;
			}
		}

		foreach ( $colors as $color ) {
			$slug = sanitize_title( $color['slug'] );
			if ( empty( $slug ) ) {
				continue;
			}

			if ( in_array( $slug, $target_slugs, true ) ) {
				$pattern_tone_css .= "
.has-{$slug}-color {
	--wp--custom--system-ui-pattern-color:
		var(--wp--preset--color--{$slug});

	--wp--custom--system-ui-pattern-tone-low:
		var(--wp--preset--color--{$slug}-30);

	--wp--custom--system-ui-pattern-tone-mid:
		var(--wp--preset--color--{$slug}-60);

	--wp--custom--system-ui-pattern-tone-high:
		var(--wp--preset--color--{$slug}-90);
}
";
			}

			$color_value = $color['color'];

			if ( strpos( $color_value, 'var(' ) !== false ) {
				continue;
			}

			$pagination_text_color = 'inherit';
			if ( isset( $fixed_contrast_map[ $slug ] ) ) {
				$pagination_text_color = "var(--wp--preset--color--{$fixed_contrast_map[ $slug ]})";
			} elseif ( in_array( $slug, $target_slugs, true ) ) {
				$pagination_text_color = "var(--wp--preset--color--{$slug}-text)";
			}

			$pagination_css .= "
.wp-block-query-pagination.has-{$slug}-background-color,
.wp-block-comments-pagination.has-{$slug}-background-color {
    --strap-pagination-user-accent: var(--wp--preset--color--{$slug});
    --strap-pagination-user-background: var(--wp--preset--color--{$slug});
    --strap-pagination-user-color: inherit;
    background-color: transparent !important;
}

.wp-block-query-pagination-previous.has-{$slug}-background-color,
.wp-block-query-pagination-next.has-{$slug}-background-color,
.wp-block-comments-pagination-previous.has-{$slug}-background-color,
.wp-block-comments-pagination-next.has-{$slug}-background-color {
    --strap-pagination-user-accent: var(--wp--preset--color--{$slug});
    --strap-pagination-user-background: var(--wp--preset--color--{$slug});
    --strap-pagination-user-color: {$pagination_text_color};
    background-color: transparent !important;
}

.wp-block-query-pagination-numbers.has-{$slug}-background-color,
.wp-block-comments-pagination-numbers.has-{$slug}-background-color {
    --strap-pagination-user-accent: var(--wp--preset--color--{$slug});
    --strap-pagination-user-background: var(--wp--preset--color--{$slug});
    --strap-pagination-user-color: {$pagination_text_color};
    background-color: transparent !important;
    color: inherit !important;
}

.wp-block-query-pagination.has-{$slug}-background-color:not(:is(.is-style-system-ui-pagination, .is-style-system-ui-pagination-outline, .is-style-system-ui-pagination-pill, .is-style-system-ui-pagination-pill-outline, .is-style-system-ui-pagination-square, .is-style-system-ui-pagination-square-outline, .is-style-system-ui-pagination-badge)) > :is(.wp-block-query-pagination-previous, .wp-block-query-pagination-next),
.wp-block-comments-pagination.has-{$slug}-background-color:not(:is(.is-style-system-ui-pagination, .is-style-system-ui-pagination-outline, .is-style-system-ui-pagination-pill, .is-style-system-ui-pagination-pill-outline, .is-style-system-ui-pagination-square, .is-style-system-ui-pagination-square-outline, .is-style-system-ui-pagination-badge)) > :is(.wp-block-comments-pagination-previous, .wp-block-comments-pagination-next),
.wp-block-query-pagination.has-{$slug}-background-color:not(:is(.is-style-system-ui-pagination, .is-style-system-ui-pagination-outline, .is-style-system-ui-pagination-pill, .is-style-system-ui-pagination-pill-outline, .is-style-system-ui-pagination-square, .is-style-system-ui-pagination-square-outline, .is-style-system-ui-pagination-badge)) > .wp-block-query-pagination-numbers > :is(a, span.page-numbers:not(.dots)),
.wp-block-comments-pagination.has-{$slug}-background-color:not(:is(.is-style-system-ui-pagination, .is-style-system-ui-pagination-outline, .is-style-system-ui-pagination-pill, .is-style-system-ui-pagination-pill-outline, .is-style-system-ui-pagination-square, .is-style-system-ui-pagination-square-outline, .is-style-system-ui-pagination-badge)) > .wp-block-comments-pagination-numbers > :is(a, span.page-numbers:not(.dots)) {
    background-color: var(--wp--preset--color--{$slug}) !important;
    color: inherit !important;
}

:is(.wp-block-query-pagination-previous, .wp-block-query-pagination-next, .wp-block-comments-pagination-previous, .wp-block-comments-pagination-next).has-{$slug}-background-color:not(:is(.is-style-system-ui-pagination, .is-style-system-ui-pagination-outline, .is-style-system-ui-pagination-pill, .is-style-system-ui-pagination-pill-outline, .is-style-system-ui-pagination-square, .is-style-system-ui-pagination-square-outline, .is-style-system-ui-pagination-badge)),
:is(.wp-block-query-pagination-numbers, .wp-block-comments-pagination-numbers).has-{$slug}-background-color:not(:is(.is-style-system-ui-pagination, .is-style-system-ui-pagination-outline, .is-style-system-ui-pagination-pill, .is-style-system-ui-pagination-pill-outline, .is-style-system-ui-pagination-square, .is-style-system-ui-pagination-square-outline, .is-style-system-ui-pagination-badge)) > :is(a, span.page-numbers:not(.dots)) {
    background-color: var(--wp--preset--color--{$slug}) !important;
    color: {$pagination_text_color} !important;
}

:is(.wp-block-query-pagination-numbers, .wp-block-comments-pagination-numbers).has-{$slug}-background-color > :is(.dots, .page-numbers.dots) {
    color: inherit !important;
}
";

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
}

.query-directory-listing.has-{$slug}-background-color,
.directory-listing.has-{$slug}-background-color,
.query-directory-grid.has-{$slug}-background-color,
.systemstrap-directory-grid.has-{$slug}-background-color,
.query-latest-posts.has-{$slug}-background-color {
    --query-directory-listing-muted-color: var(--wp--preset--color--current-mix-color);
    --directory-grid-card-muted-color: var(--wp--preset--color--current-mix-color);
}

.query-directory-listing:has(> .query-directory-listing__header.has-{$slug}-background-color),
.directory-listing:has(> .directory-listing__header.has-{$slug}-background-color) {
    --query-directory-listing-badge-bg: rgba(var(--wp--preset--color--{$slug}-rgb), 0.16);
    --query-directory-listing-badge-border-color: rgba(var(--wp--preset--color--{$slug}-rgb), 0.3);
}

.wp-block-post-terms.is-style-system-badge.has-{$slug}-background-color {
    background-color: transparent !important;
    --strap-term-badge-bg: var(--wp--preset--color--{$slug});
    --strap-term-badge-border-color: var(--wp--preset--color--{$slug});
}

.wp-block-post-terms.is-style-system-badge.has-{$slug}-background-color a:hover,
.wp-block-post-terms.is-style-system-badge.has-{$slug}-background-color a:focus-visible {
    border-color: var(--wp--custom--btn-hover-border-color) !important;
    color: var(--wp--preset--color--{$slug}-text) !important;
    text-decoration: none !important;
}

.wp-block-post-terms.is-style-system-badge.has-{$slug}-color {
    background-color: transparent !important;
    --strap-term-badge-bg: rgba(var(--wp--preset--color--{$slug}-rgb), 0.16);
    --strap-term-badge-border-color: rgba(var(--wp--preset--color--{$slug}-rgb), 0.3);
    --strap-term-badge-color: var(--wp--preset--color--{$slug});
}
";

$latest_posts_css .= "
.query-latest-posts:has(> .query-latest-posts__header.has-{$slug}-color),
.query-latest-posts:has(> .query-latest-posts__header .query-latest-posts__heading.has-{$slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header.has-{$slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header .systemstrap-latest-posts__heading.has-{$slug}-color) {
    --query-directory-listing-badge-bg: var(--wp--preset--color--{$slug});
    --query-directory-listing-badge-border-color: var(--wp--preset--color--{$slug});
}

.query-latest-posts:has(> .query-latest-posts__header .query-latest-posts__header-icon.has-{$slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header .systemstrap-latest-posts__header-icon.has-{$slug}-color) {
    --query-directory-listing-badge-bg: var(--wp--preset--color--{$slug});
    --query-directory-listing-badge-border-color: var(--wp--preset--color--{$slug});
}

.query-latest-posts:has(> .query-latest-posts__header.has-{$slug}-background-color),
.query-latest-posts:has(> .query-latest-posts__header .query-latest-posts__heading.has-{$slug}-background-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header.has-{$slug}-background-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header .systemstrap-latest-posts__heading.has-{$slug}-background-color) {
    --query-directory-listing-badge-bg: var(--wp--preset--color--{$slug});
    --query-directory-listing-badge-border-color: var(--wp--preset--color--{$slug});
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
			$palette   = $generator->createExtendedPalette( 10.0 );
			$suffixes  = [ 10, 20, 30, 40, 50, 60, 70, 80, 90 ];

			foreach ( $palette as $index => $shade_hex ) {
				$suffix = $suffixes[ $index ];
				$css   .= sprintf( "\t--wp--preset--color--%s-%d: %s;\n", $slug, $suffix, $shade_hex );
			}

			$rgb_string = $generator->hex_to_rgb( $color_value );
			$rgb_raw    = str_replace( [ 'rgb(', 'rgba(', ')' ], '', $rgb_string );
			$css       .= sprintf( "\t--wp--preset--color--%s-rgb: %s;\n", $slug, $rgb_raw );

			$text_contrast = $generator->parse_the_contrast( $color_value );
			$css          .= sprintf( "\t--wp--preset--color--%s-text: %s;\n", $slug, $text_contrast );

			// Removed --wp--preset--color--{$slug}-text-rgb per user instruction.

			$shadow_index = 5;
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
ul.wp-block-latest-posts.has-{$slug}-background-color,
ul.wp-block-post-template.has-{$slug}-background-color {
    background-color: transparent !important;
}
ul.wp-block-latest-posts.has-{$slug}-background-color > li,
ul.wp-block-post-template.has-{$slug}-background-color > li {
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
.wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus {
    box-shadow: 0 0 0 .25rem rgba(var(--wp--preset--color--{$slug}-rgb), 0.5);
}

.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-color:not(:disabled):focus,
.wp-block-button.is-style-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus,
.wp-block-button.is-style-button-pill-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus,
.wp-block-button.is-style-button-square-outline .wp-block-button__link.has-{$slug}-background-color:not(:disabled):focus {
    box-shadow: 0 0 0 .25rem rgba(var(--wp--preset--color--{$slug}-rgb), 0.5);
}
";
			}
		}

		$semantic_text_slugs = array( 'primary', 'secondary', 'success', 'info', 'warning', 'danger' );
		$background_slugs    = array_merge( array( 'base', 'secondary-bg', 'tertiary-bg' ), $semantic_text_slugs );
		$suffixes            = array( 10, 20, 30, 40, 50, 60, 70, 80, 90 );

		foreach ( $semantic_text_slugs as $text_slug ) {
			if ( empty( $palette_by_slug[ $text_slug ] ) ) {
				continue;
			}

			$text_generator = new Strap_ColorGenerator( $palette_by_slug[ $text_slug ] );
			$text_palette   = $text_generator->createExtendedPalette( 10.0 );

			foreach ( $background_slugs as $background_slug ) {
				if ( $text_slug === $background_slug || empty( $palette_by_slug[ $background_slug ] ) ) {
					continue;
				}

				$background_color = $palette_by_slug[ $background_slug ];
				if ( $text_generator->passes_wcag_contrast( $palette_by_slug[ $text_slug ], $background_color, 4.5 ) ) {
					continue;
				}

				$check_order = $text_generator->passes_wcag_contrast( '#ffffff', $background_color, 4.5 )
					? array( 5, 6, 7, 8, 3, 2, 1, 0 )
					: array( 3, 2, 1, 0, 5, 6, 7, 8 );

				foreach ( $check_order as $index ) {
					if ( ! isset( $text_palette[ $index ] ) || ! $text_generator->passes_wcag_contrast( $text_palette[ $index ], $background_color, 4.5 ) ) {
						continue;
					}

					$same_element_contrast_css .= ".has-{$background_slug}-background-color.has-{$text_slug}-color { color: var(--wp--preset--color--{$text_slug}-{$suffixes[ $index ]}) !important; }\n";
					break;
				}
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
}

.query-latest-posts:has(> .query-latest-posts__header.has-{$background_slug}-background-color.has-{$text_slug}-color),
.query-latest-posts:has(> .query-latest-posts__header.has-{$background_slug}-background-color .query-latest-posts__heading.has-{$text_slug}-color),
.query-latest-posts:has(> .query-latest-posts__header .query-latest-posts__heading.has-{$background_slug}-background-color.has-{$text_slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header.has-{$background_slug}-background-color.has-{$text_slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header.has-{$background_slug}-background-color .systemstrap-latest-posts__heading.has-{$text_slug}-color),
.systemstrap-latest-posts:has(> .systemstrap-latest-posts__header .systemstrap-latest-posts__heading.has-{$background_slug}-background-color.has-{$text_slug}-color) {
    --query-directory-listing-badge-color: var(--wp--preset--color--{$text_slug});
}

.wp-block-post-terms.is-style-system-badge.has-{$background_slug}-background-color.has-{$text_slug}-color {
    background-color: transparent !important;
    --strap-term-badge-bg: var(--wp--preset--color--{$background_slug});
    --strap-term-badge-border-color: var(--wp--preset--color--{$background_slug});
    --strap-term-badge-color: var(--wp--preset--color--{$text_slug});
}
";
			}
		}

		// Inject WordPress native image sizes for responsive carousels
		$thumbnail_width = absint( get_option( 'thumbnail_size_w', 150 ) );
		$medium_width    = absint( get_option( 'medium_size_w', 300 ) );
		$thumbnail_width = $thumbnail_width > 0 ? $thumbnail_width : 150;
		$medium_width    = $medium_width > 0 ? $medium_width : 300;
		$css            .= sprintf( "\t--wp--custom--thumbnail-width: %dpx;\n", $thumbnail_width );
		$css            .= sprintf( "\t--wp--custom--medium-width: %dpx;\n", $medium_width );

		$css .= "}\n";
		$css .= $button_css;
		$css .= $tabs_css;
		$css .= $directory_css;
		$css .= $latest_posts_css;
		$css .= $same_element_contrast_css;
		$css .= $pagination_css;
		$css .= $pattern_css;
		$css .= $pattern_tone_css;

		// Add Gradient background routing for Latest Posts and Gradient Contrast Routing
		$accent_gradient_color_map = [
			'accent-10'  => 'primary',
			'accent-20'  => 'primary',
			'accent-30'  => 'secondary',
			'accent-40'  => 'secondary',
			'accent-50'  => 'success',
			'accent-60'  => 'success',
			'accent-70'  => 'info',
			'accent-80'  => 'info',
			'accent-90'  => 'warning',
			'accent-100' => 'warning',
			'accent-110' => 'danger',
			'accent-120' => 'danger',
			'accent-130' => 'light',
			'accent-140' => 'light',
			'accent-150' => 'dark',
			'accent-160' => 'dark',
		];

		$gradients = $settings['color']['gradients']['theme'] ?? [];
		if ( ! empty( $gradients ) ) {
			foreach ( $gradients as $gradient ) {
				$slug = sanitize_title( $gradient['slug'] );
				if ( empty( $slug ) ) {
					continue;
				}
				$color_slug = $accent_gradient_color_map[ $slug ] ?? str_replace( '-hover', '', $slug );
				if ( in_array( $color_slug, $target_slugs, true ) ) {
					$css .= "
/* Dynamic Gradient Background Contrast Routing */
.has-{$slug}-gradient-background:not(.has-text-color) {
    color: var(--wp--preset--color--{$color_slug}-text) !important;
}
";
				}

				$css .= "
/* Latest Posts Widget Gradient Fix */
ul.wp-block-latest-posts.has-{$slug}-gradient-background,
ul.wp-block-post-template.has-{$slug}-gradient-background {
    background: transparent !important;
}
ul.wp-block-latest-posts.has-{$slug}-gradient-background > li,
ul.wp-block-post-template.has-{$slug}-gradient-background > li {
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
