<?php

/**
 * Column color-context block styles.
 *
 * @package systemstrap
 */

if (! defined('ABSPATH')) {
	exit;
}

/**
 * Validates a theme-owned CSS custom-property value.
 *
 * @param mixed $value Candidate CSS value.
 * @return string
 */
function strap_color_context_css_value($value)
{
	if (! is_string($value)) {
		return '';
	}

	$value = trim($value);
	if ('' === $value || preg_match('/[\x00-\x1F\x7F{};<>]/', $value)) {
		return '';
	}

	return $value;
}

/**
 * Converts the generator's rgb() output to a raw RGB triplet.
 *
 * @param string $color Hex color.
 * @return string
 */
function strap_color_context_rgb_triplet($color)
{
	$generator = new Strap_ColorGenerator($color);
	$rgb       = $generator->hex_to_rgb($color);

	return str_replace(['rgb(', 'rgba(', ')'], '', $rgb);
}

/**
 * Resolves the typography companion for each color variation.
 *
 * @return array
 */
function strap_get_color_context_typography_map()
{
	static $typography_map = null;

	if (null !== $typography_map) {
		return $typography_map;
	}

	$typography_map = [];
	$theme_dirs     = array_unique([get_stylesheet_directory(), get_template_directory()]);
	$resolve_file   = static function ($relative_path) use ($theme_dirs) {
		if (! is_string($relative_path) || '' === $relative_path || str_contains($relative_path, '..')) {
			return '';
		}

		foreach ($theme_dirs as $theme_dir) {
			$file = $theme_dir . '/' . ltrim($relative_path, '/');

			if (is_file($file) && is_readable($file)) {
				return $file;
			}
		}

		return '';
	};
	$manifest_file = $resolve_file('assets/typography-pairing-manifest.json');

	if ('' === $manifest_file) {
		return $typography_map;
	}

	$manifest = json_decode(file_get_contents($manifest_file), true);
	if (! is_array($manifest) || empty($manifest['pairings']) || ! is_array($manifest['pairings'])) {
		return $typography_map;
	}

	foreach ($manifest['pairings'] as $pairing) {
		$color_path      = $pairing['color'] ?? '';
		$typography_path = $pairing['typography'] ?? '';

		if (
			! is_string($color_path) ||
			0 !== strpos($color_path, 'styles/colors/') ||
			! is_string($typography_path) ||
			('theme.json' !== $typography_path && 0 !== strpos($typography_path, 'styles/typography/'))
		) {
			continue;
		}

		$typography_file = $resolve_file($typography_path);
		if ('' === $typography_file) {
			continue;
		}

		$typography_data = json_decode(file_get_contents($typography_file), true);
		$font_families   = $typography_data['settings']['typography']['fontFamilies'] ?? [];

		if (! is_array($font_families) || empty($font_families)) {
			continue;
		}

		$color_slug                  = sanitize_title(pathinfo($color_path, PATHINFO_FILENAME));
		$typography_map[$color_slug] = $font_families;
	}

	return $typography_map;
}

/**
 * Builds one scoped Column color-context stylesheet.
 *
 * @param string $style_slug Block-style slug.
 * @param array  $palette    Theme JSON palette.
 * @param array  $gradients  Theme JSON gradients.
 * @param array  $fonts      Paired Theme JSON font families.
 * @return string
 */
function strap_build_color_context_css($style_slug, $palette, $gradients, $fonts = [])
{
	$target_slugs   = ['primary', 'secondary', 'success', 'info', 'warning', 'danger', 'light', 'dark'];
	$rgb_only_slugs = ['base', 'contrast', 'secondary-bg', 'secondary-color', 'tertiary-bg', 'tertiary-color', 'border-color'];
	$font_slugs     = ['body', 'heading', 'display', 'button', 'monospace'];
	$suffixes       = [10, 20, 30, 40, 50, 60, 70, 80, 90];
	$declarations   = [];

	foreach ($palette as $color) {
		$slug  = sanitize_title($color['slug'] ?? '');
		$value = strap_color_context_css_value($color['color'] ?? '');

		if ('' === $slug || '' === $value) {
			continue;
		}

		$declarations["--wp--preset--color--{$slug}"] = $value;

		if (! preg_match('/^#[0-9a-f]{6}$/i', $value)) {
			continue;
		}

		if (in_array($slug, $rgb_only_slugs, true)) {
			$declarations["--wp--preset--color--{$slug}-rgb"] = strap_color_context_rgb_triplet($value);
			continue;
		}

		if (! in_array($slug, $target_slugs, true)) {
			continue;
		}

		$generator = new Strap_ColorGenerator($value);
		$shades    = $generator->createExtendedPalette(10.0);

		foreach ($shades as $index => $shade) {
			if (! isset($suffixes[$index])) {
				continue;
			}

			$declarations["--wp--preset--color--{$slug}-{$suffixes[$index]}"] = $shade;
		}

		$declarations["--wp--preset--color--{$slug}-rgb"]  = strap_color_context_rgb_triplet($value);
		$declarations["--wp--preset--color--{$slug}-text"] = $generator->parse_the_contrast($value);

		if (isset($shades[5])) {
			$declarations["--wp--preset--color--{$slug}-shadow-rgb"] = strap_color_context_rgb_triplet($shades[5]);
		}
	}

	foreach ($gradients as $gradient) {
		$slug  = sanitize_title($gradient['slug'] ?? '');
		$value = strap_color_context_css_value($gradient['gradient'] ?? '');

		if ('' === $slug || '' === $value) {
			continue;
		}

		$declarations["--wp--preset--gradient--{$slug}"] = $value;
	}

	foreach ($fonts as $font) {
		$slug  = sanitize_title($font['slug'] ?? '');
		$value = strap_color_context_css_value($font['fontFamily'] ?? '');

		if (! in_array($slug, $font_slugs, true) || '' === $value) {
			continue;
		}

		$declarations["--wp--preset--font-family--{$slug}"] = $value;
	}

	if (empty($declarations)) {
		return '';
	}

	$css = ".wp-block-column.is-style-{$style_slug} {\n";
	foreach ($declarations as $property => $value) {
		$css .= "\t{$property}: {$value};\n";
	}

	return $css . "}\n";
}

/**
 * Discovers color variations and prepares their Column block styles.
 *
 * @return array
 */
function strap_get_color_context_variations()
{
	static $variations = null;

	if (null !== $variations) {
		return $variations;
	}

	$variations = [];
	$directory  = get_template_directory() . '/styles/colors';
	$files      = glob($directory . '/*.json');
	$typography = strap_get_color_context_typography_map();

	if (! is_array($files)) {
		return $variations;
	}

	sort($files, SORT_STRING);
	foreach ($files as $file) {
		if (! is_readable($file)) {
			continue;
		}

		$data = json_decode(file_get_contents($file), true);

		if (! is_array($data)) {
			continue;
		}

		$variation_slug = sanitize_title(pathinfo($file, PATHINFO_FILENAME));
		$palette        = $data['settings']['color']['palette'] ?? [];
		$gradients      = $data['settings']['color']['gradients'] ?? [];

		if ('' === $variation_slug || ! is_array($palette) || empty($palette)) {
			continue;
		}

		$style_slug = 'color-' . $variation_slug;
		$css        = strap_build_color_context_css(
			$style_slug,
			$palette,
			is_array($gradients) ? $gradients : [],
			$typography[$variation_slug] ?? []
		);

		if ('' === $css) {
			continue;
		}

		$title = sanitize_text_field($data['title'] ?? ucwords(str_replace(['-', '_'], ' ', $variation_slug)));
		$title = preg_replace('/\s+Colors$/i', '', $title);

		$variations[] = [
			'name'         => $style_slug,
			'label'        => $title,
			'inline_style' => $css,
		];
	}

	return $variations;
}

/**
 * Registers filesystem color variations as Column color contexts.
 */
function strap_register_color_context_styles()
{
	if (! class_exists('Strap_ColorGenerator')) {
		return;
	}

	foreach (strap_get_color_context_variations() as $variation) {
		register_block_style('core/column', $variation);
	}
}
add_action('init', 'strap_register_color_context_styles');
