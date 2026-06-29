<?php

/**
 * SystemStrap Color Palette Generator
 * @package SystemStrap
 * @since 0.0.1
 */

declare(strict_types=1);

defined('ABSPATH') || exit;

/**
 * Class to generate and manipulate color palettes with contrast adjustments.
 */
class Strap_ColorGenerator
{
    private string $color;
    private array $cache = [];
    private array $luminanceCache = [];

    /**
     * Constructor for the color palette generator.
     *
     * @param string $color Initial color in hex or RGB format.
     */
    public function __construct(string $color)
    {
        $this->color = $this->sanitize_color($color);
        if (str_starts_with($this->color, 'rgb')) {
            $this->color = $this->rgb_to_hex($this->color);
        }
    }

    /**
     * Sanitizes a color string by trimming and limiting hex length.
     *
     * @param string $color Color to sanitize.
     * @return string Sanitized color string.
     */
    private function sanitize_color(string $color): string
    {
        $color = trim($color);
        return str_starts_with($color, '#') ? substr($color, 0, 7) : $color;
    }

    public function adjust_alpha($rgb, $alpha = 1)
    {
        $rgb = str_replace(['rgb(', ')'], '', $rgb);
        return "rgba($rgb, $alpha)";
    }

    /**
     * Validates and normalizes a hex color string.
     *
     * @param string $color Hex color to validate.
     * @return string Normalized hex color without '#'.
     */
    private function validate_hex(string $color): string
    {
        $color = ltrim($color, '#');
        if (strlen($color) === 3) {
            $color = preg_replace('/./', '$0$0', $color);
        }

        if (!ctype_xdigit($color) || strlen($color) !== 6) {
            $this->log_error("Invalid hex color detected: $color");
            return '000000'; // Fallback to black
        }

        return $color;
    }

    /**
     * Converts hex color to RGB or RGBA string.
     *
     * @param string $color Hex color to convert.
     * @param float|null $alpha Optional alpha value (0.0 to 1.0).
     * @return string RGB or RGBA string.
     */
    public function hex_to_rgb(string $color, ?float $alpha = null): string
    {
        $cacheKey = "hex2rgb|$color|" . ($alpha ?? 'null');
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        $color = $this->validate_hex($color);
        [$r, $g, $b] = array_map('hexdec', str_split($color, 2));
        $result = $alpha === null
            ? sprintf('rgb(%d, %d, %d)', $r, $g, $b)
            : sprintf('rgba(%d, %d, %d, %.2f)', $r, $g, $b, max(0.0, min(1.0, $alpha)));

        return $this->cache[$cacheKey] = $result;
    }

    /**
     * Converts RGB/A or hex color to hex string.
     *
     * @param string $color RGB/A or hex color to convert.
     * @return string Hex color string.
     */
    public function rgb_to_hex(string $color): string
    {
        $cacheKey = "rgb2hex|$color";
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        if (str_starts_with($color, '#')) {
            return $this->cache[$cacheKey] = $this->validate_hex($color);
        }

        if (sscanf($color, 'rgb(%d, %d, %d)', $r, $g, $b) === 3) {
            return $this->cache[$cacheKey] = sprintf('#%02x%02x%02x', $r, $g, $b);
        }

        if (sscanf($color, 'rgba(%d, %d, %d, %f)', $r, $g, $b, $a) === 4) {
            return $this->cache[$cacheKey] = sprintf('#%02x%02x%02x%02x', $r, $g, $b, (int) round($a * 255));
        }

        $this->log_error("Invalid RGB/A color: $color");
        return '#808080'; // Fallback to black
    }

    /**
     * Parses RGB/A or hex color to array of values.
     *
     * @param string $color Color to parse.
     * @return array RGB or RGBA values as array.
     */
    private function parse_rgb(string $color): array
    {
        $cacheKey = "parse_rgb|$color";
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        if (str_starts_with($color, '#')) {
            $color = $this->hex_to_rgb($color);
        }

        // Match rgb(...) format
        if (sscanf($color, 'rgb(%d, %d, %d)', $r, $g, $b) === 3) {
            return $this->cache[$cacheKey] = [$r, $g, $b];
        }

        // Match rgba(...) format
        if (sscanf($color, 'rgba(%d, %d, %d, %f)', $r, $g, $b, $a) === 4) {
            return $this->cache[$cacheKey] = [$r, $g, $b, $a];
        }

        // Match plain comma-separated RGB, e.g., "255,0,255"
        if (preg_match('/^\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*$/', $color, $matches)) {
            return $this->cache[$cacheKey] = [intval($matches[1]), intval($matches[2]), intval($matches[3])];
        }

        $this->log_error("Invalid RGB/A color: $color");
        return [128, 128, 128]; // Fallback to medium gray
    }

    /**
     * Adjusts text color for contrast against a background.
     *
     * @param string $background Background color (hex or RGB).
     * @param string $textColor Initial text color (hex or RGB).
     * @param float $minContrast Minimum contrast ratio (default 7.0).
     * @return string Adjusted hex color for text.
     */
    public function adjust_color_contrast(string $background, string $textColor, float $minContrast = 7.0): string
    {
        $bgRgb = str_starts_with($background, '#') ? $this->hex_to_rgb($background) : $background;
        $isDarkBg = $this->relative_luminance($bgRgb) < 0.5;
        $bgHsl = $this->rgb_to_hsl($this->parse_rgb($bgRgb));

        $txtHsl = $this->rgb_to_hsl($this->parse_rgb($textColor));
        $txtHsl['h'] = $bgHsl['h'];
        $txtHsl['s'] = min($bgHsl['s'], 50.0);
        $txtRgb = $this->hex_to_rgb($this->hsl_to_hex($txtHsl));

        if ($this->wcag_contrast_ratio($bgRgb, $txtRgb) >= $minContrast) {
            return $this->rgb_to_hex($txtRgb);
        }

        $maxIterations = 20;
        $i = 0;
        while ($this->wcag_contrast_ratio($bgRgb, $txtRgb) < $minContrast && $i++ < $maxIterations) {
            if ($isDarkBg && $textColor === '#ffffff') {
                $txtHsl['l'] = max(70.0, $txtHsl['l'] - 5.0);
            } elseif (!$isDarkBg && $textColor === '#111111') {
                $txtHsl['l'] = min(30.0, $txtHsl['l'] + 5.0);
            } elseif ($isDarkBg && $textColor === '#111111') {
                $txtHsl['l'] = min(100.0, $txtHsl['l'] + 5.0);
            }
            $txtRgb = $this->hex_to_rgb($this->hsl_to_hex($txtHsl));
            if ($txtHsl['l'] <= 0.0 || $txtHsl['l'] >= 100.0) {
                break;
            }
        }

        if ($this->wcag_contrast_ratio($bgRgb, $txtRgb) < $minContrast) {
            $txtHsl['l'] = $isDarkBg ? 85.0 : 15.0; // Light for dark BG, dark for light BG
            $txtRgb = $this->hsl_to_hex($txtHsl);
        }

        return $this->rgb_to_hex($txtRgb);
    }

    /**
     * Calculates WCAG contrast ratio between two colors.
     *
     * @param string $rgb1 First color (hex or RGB).
     * @param string $rgb2 Second color (hex or RGB).
     * @return float Contrast ratio.
     */
    private function wcag_contrast_ratio(string $rgb1, string $rgb2): float
    {
        $rgb1 = str_starts_with($rgb1, '#') ? $this->hex_to_rgb($rgb1) : $rgb1;
        $rgb2 = str_starts_with($rgb2, '#') ? $this->hex_to_rgb($rgb2) : $rgb2;

        $key = "contrast|$rgb1|$rgb2";
        if (isset($this->cache[$key])) {
            return $this->cache[$key];
        }

        $l1 = $this->relative_luminance($rgb1) + 0.05;
        $l2 = $this->relative_luminance($rgb2) + 0.05;
        return $this->cache[$key] = max($l1, $l2) / min($l1, $l2);
    }

    private function passes_wcag_contrast(string $fg_hex, string $bg_hex, float $threshold = 4.5): bool
    {
        return $this->wcag_contrast_ratio($fg_hex, $bg_hex) >= $threshold;
    }

    /**
     * Creates a palette of colors based on the initial color.
     *
     * @param int $colorCount Number of colors in the palette (default 5).
     * @param float $step Lightness step between colors (default 10.0).
     * @return array Array of hex color strings.
     */
    /*
    public function createPalette(int $colorCount = 5, float $step = 10.0): array
    {
        $cacheKey = "palette|{$this->color}|$colorCount|$step";
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        $rgb = array_map('hexdec', str_split($this->validate_hex($this->color), 2));
        $hsl = $this->rgb_to_hsl($rgb);
        $middle = (int)floor($colorCount / 2);
        $palette = [];

        for ($i = 0; $i < $colorCount; $i++) {
            $shift = ($i - $middle) * $step;
            $lightness = max(20.0, min(95.0, $hsl['l'] + $shift));
            $palette[] = $this->hsl_to_hex(['h' => $hsl['h'], 's' => $hsl['s'], 'l' => $lightness]);
        }

        return $this->cache[$cacheKey] = $palette;
    }
        */
    /*
    public function createPalette(int $colorCount = 4, float $step = 10.0): array
    {
        $cacheKey = "palette|{$this->color}|$colorCount|$step";
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        $rgb = array_map('hexdec', str_split($this->validate_hex($this->color), 2));
        $hsl = $this->rgb_to_hsl($rgb);
        $middle = (int)floor($colorCount / 2); // Input color at -500
        $palette = [];

        for ($i = 0; $i < $colorCount; $i++) {
            $shift = ($i - $middle) * $step;
            $lightness = max(10.0, min(95.0, $hsl['l'] + $shift)); // System: 10%-95% range
            $saturation = ($i < $middle)
                ? max(20.0, $hsl['s'] - ($middle - $i) * 15) // Fade S up to -100
                : min(100.0, $hsl['s']); // Keep S strong down to -900

            $palette[] = $this->hsl_to_hex(['h' => $hsl['h'], 's' => $saturation, 'l' => $lightness]);
        }

        return $this->cache[$cacheKey] = $palette;
    }
    */

    public function createPalette(int $colorCount = 4, float $step = 10.0): array
    {
        $cacheKey = "palette|{$this->color}|$colorCount|$step";
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        $rgb = array_map('hexdec', str_split($this->validate_hex($this->color), 2));
        $hsl = $this->rgb_to_hsl($rgb);
        $middle = (int)floor($colorCount / 2); // Input color at -500
        $palette = [];

        for ($i = 0; $i < $colorCount; $i++) {
            $shift = ($i - $middle) * $step;
            $lightness = max(10.0, min(95.0, $hsl['l'] + $shift)); // System: 10%-95% range

            // Adjust saturation for hover (light) colors
            $saturation = ($i < $middle)
                ? max(20.0, $hsl['s'] - ($middle - $i) * 10) // Fade saturation down more slowly
                : min(90.0, $hsl['s']); // Allow stronger saturation for darker shades

            // For lighter colors (e.g., hover), clamp the saturation gently
            if ($lightness > 70.0) {
                $saturation = min(70.0, $saturation); // Avoid excessive saturation for lighter shades
            }

            // If the lightness is very high, slightly reduce saturation
            if ($lightness > 85.0) {
                $saturation = max(40.0, $saturation); // Lower saturation slightly for very light colors
            }

            // Add the color to the palette
            $palette[] = $this->hsl_to_hex(['h' => $hsl['h'], 's' => $saturation, 'l' => $lightness]);
        }

        return $this->cache[$cacheKey] = $palette;
    }

    /**
     * Creates a dark palette of colors based on the initial color, optimized for dark mode.
     *
     * @param int $colorCount Number of colors in the palette (default 5).
     * @param float $step Lightness step between colors (default 5.0).
     * @return array Array of hex color strings.
     */
    public function createDarkPalette(int $colorCount = 5, float $step = 7.0): array
    {
        $cacheKey = "dark_palette|{$this->color}|$colorCount|$step";
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        $neonColor = $this->makeNeon();
        $rgb = array_map('hexdec', str_split($this->validate_hex($neonColor), 2));
        $hsl = $this->rgb_to_hsl($rgb);
        $palette = array_fill(0, $colorCount, '');

        $palette[1] = $neonColor;

        for ($i = 0; $i < $colorCount; $i++) {
            if ($i === 1) continue;
            $shift = ($i - 1) * $step;
            $hue = $hsl['h'];
            $saturation = min(100.0, $hsl['s'] * 1.5);
            $lightness = ($i === 2) ? 85.0 : max(5.0, min(70.0, $hsl['l'] + $shift)); // Super vibrant borders
            $palette[$i] = $this->hsl_to_hex(['h' => $hue, 's' => $saturation, 'l' => $lightness]);
        }

        return $this->cache[$cacheKey] = $palette;
    }

    public function makeHue(string $hex): string
    {
        $hex = trim($hex, '#');
        if (!preg_match('/^[0-9a-fA-F]{6}$/', $hex)) {
            error_log("Invalid hex: $hex, defaulting to #000000");
            $hex = '000000';
        }

        $rgb = array_map('hexdec', str_split($hex, 2));
        $hsl = $this->rgb_to_hsl($rgb);

        $hue = $hsl['h'];
        $saturation = 100.0;
        $lightness = 50.0;

        return $this->hsl_to_hex(['h' => $hue, 's' => $saturation, 'l' => $lightness]);
    }

    public function makeNeon(): string
    {
        $hex = $this->validate_hex($this->color);
        $rgb = array_map('hexdec', str_split($hex, 2));
        $hsl = $this->rgb_to_hsl($rgb);

        $isSubtle = strpos($this->color, 'bg-subtle') !== false;
        $isLight = in_array($hex, ['f8f9fa', 'fcfcfd']); // Only these get gray

        if ($isLight) {
            return '#5e5e5e'; // Hardcode gray for light vars
        }

        $blackRatio = $isSubtle ? 0.8 : 0.3; // 80% black for subtle, 30% for main
        $colorRatio = $isSubtle ? 0.2 : 0.7;

        $r = (int)round($rgb[0] * $colorRatio);
        $g = (int)round($rgb[1] * $colorRatio);
        $b = (int)round($rgb[2] * $colorRatio);

        if ($isSubtle) {
            $newRgb = [$r, $g, $b];
            $newHsl = $this->rgb_to_hsl($newRgb);
            return $this->hsl_to_hex(['h' => $newHsl['h'], 's' => min(50.0, $hsl['s']), 'l' => 20.0]); // Subtle, not gray
        }

        return sprintf('#%02x%02x%02x', $r, $g, $b);
    }

    public function makeBright(): string
    {
        $rgb_string = $this->hex_to_rgb($this->color);
        $rgb_array  = $this->parse_rgb($rgb_string);
        $hsl        = $this->rgb_to_hsl($rgb_array);

        // If already bright, return as-is
        if ($this->passes_wcag_contrast($this->hsl_to_hex($hsl), '#000000')) {
            return $this->hsl_to_hex($hsl);
        }

        // Leave hue/saturation untouched, bump lightness gradually
        while ($hsl['l'] < 90) {
            $hsl['l'] += 2;
            $bright_hex = $this->hsl_to_hex($hsl);
            if ($this->passes_wcag_contrast($bright_hex, '#000000')) {
                return $bright_hex;
            }
        }

        // Fallback if still not enough
        $hsl['l'] = 90;
        return $this->hsl_to_hex($hsl);
    }

    public function makeDark(): string
    {
        $rgb_string = $this->hex_to_rgb($this->color);
        $rgb_array  = $this->parse_rgb($rgb_string);
        $hsl        = $this->rgb_to_hsl($rgb_array);

        // Preserve identity by avoiding extreme hue shifts
        // Patch for near-white subtle colors only
        if ($hsl['l'] > 95 && $hsl['s'] < 25) {
            $hsl['s'] = 5;
            $hsl['l'] = 40;
            return $this->hsl_to_hex($hsl);
        }
        // Only shift hue if it's really desaturated *and* near grayscale range
        if ($hsl['s'] < 10 && ($hsl['h'] < 30 || $hsl['h'] > 330)) {
            $hsl['h'] = 280; // A subtle, deep violet shift for grayscale-reds
        }

        // Slightly increase saturation to make colors pop in dark UI
        if ($hsl['s'] < 50) {
            $hsl['s'] = min(65, $hsl['s'] + 15);
        }

        // Lightness tweaks based on current value
        if ($hsl['l'] >= 80) {
            $hsl['l'] = 65; // Light colors get toned down
        } elseif ($hsl['l'] < 25) {
            $hsl['l'] = 35; // Very dark colors come up for contrast
        } else {
            $hsl['l'] += 10; // Gentle lift
        }

        return $this->hsl_to_hex($hsl);
    }

    public function makeEmphasis(): string
    {
        $hex = $this->validate_hex($this->color);
        $rgb = array_map('hexdec', str_split($hex, 2));
        $hsl = $this->rgb_to_hsl($rgb);

        $hue = $hsl['h'];
        $saturation = $hsl['s'];
        $lightness = 20.0;

        return $this->hsl_to_hex(['h' => $hue, 's' => $saturation, 'l' => $lightness]);
    }

    public function makeDarkInverse(): string
    {
        $rgb_string = $this->hex_to_rgb($this->color);
        $rgb_array  = $this->parse_rgb($rgb_string);
        $hsl        = $this->rgb_to_hsl($rgb_array);

        // Invert lightness
        $hsl['l'] = 100 - $hsl['l'];

        // Tweak saturation gently to preserve tone
        if ($hsl['s'] < 10) {
            $hsl['s'] = 15;
        } elseif ($hsl['s'] < 30) {
            $hsl['s'] += 10;
        } else {
            $hsl['s'] *= 0.9;
        }

        // Optional: Gentle hue rotation for neutrality inversion (like gray to steely-blue)
        if ($hsl['s'] < 20 && ($hsl['h'] < 30 || $hsl['h'] > 330)) {
            $hsl['h'] = 210; // Push grays and reddish neutrals toward bluish slate
        }

        return $this->hsl_to_hex($hsl);
    }

    /**
     * Converts RGB array to HSL array.
     *
     * @param array $rgb RGB values as [r, g, b].
     * @return array HSL values as ['h' => float, 's' => float, 'l' => float].
     */
    private function rgb_to_hsl(array $rgb): array
    {
        $cacheKey = "rgb2hsl|" . implode('|', $rgb);
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        //  [$r, $g, $b] = array_map(fn(int $v): float => $v / 255.0, $rgb);

        // Fix: take only the first 3 values (RGB)
        [$r, $g, $b] = array_map(fn(int $v): float => $v / 255.0, array_slice($rgb, 0, 3));

        $max = max($r, $g, $b);
        $min = min($r, $g, $b);
        $l = ($max + $min) / 2.0;
        $d = $max - $min;

        $h = 0.0;
        $s = 0.0;

        if ($d !== 0.0) {
            $s = $l > 0.5 ? $d / (2.0 - $max - $min) : $d / ($max + $min);
            if ($max === $r) {
                $h = (($g - $b) / $d + ($g < $b ? 6.0 : 0.0)) * 60.0;
            } elseif ($max === $g) {
                $h = (($b - $r) / $d + 2.0) * 60.0;
            } elseif ($max === $b) {
                $h = (($r - $g) / $d + 4.0) * 60.0;
            }
        }

        return $this->cache[$cacheKey] = ['h' => $h, 's' => $s * 100.0, 'l' => $l * 100.0];
    }

    /**
     * Converts HSL array to hex color string.
     *
     * @param array $hsl HSL values as ['h' => float, 's' => float, 'l' => float].
     * @return string Hex color string.
     */
    private function hsl_to_hex(array $hsl): string
    {
        $cacheKey = "hsl2hex|" . implode('|', [$hsl['h'], $hsl['s'], $hsl['l']]);
        if (isset($this->cache[$cacheKey])) {
            return $this->cache[$cacheKey];
        }

        $h = $hsl['h'] / 360.0;
        $s = $hsl['s'] / 100.0;
        $l = $hsl['l'] / 100.0;

        if ($s === 0.0) {
            $v = (int)round($l * 255.0);
            return $this->cache[$cacheKey] = sprintf('#%02x%02x%02x', $v, $v, $v);
        }

        $c = (1.0 - abs(2.0 * $l - 1.0)) * $s;
        $x = $c * (1.0 - abs(fmod($h * 6.0, 2.0) - 1.0));
        $m = $l - $c / 2.0;

        $hPrime = $h * 6.0;
        if ($hPrime < 1.0) {
            $rgb = [$c, $x, 0.0];
        } elseif ($hPrime < 2.0) {
            $rgb = [$x, $c, 0.0];
        } elseif ($hPrime < 3.0) {
            $rgb = [0.0, $c, $x];
        } elseif ($hPrime < 4.0) {
            $rgb = [0.0, $x, $c];
        } elseif ($hPrime < 5.0) {
            $rgb = [$x, 0.0, $c];
        } else {
            $rgb = [$c, 0.0, $x];
        }
        [$r, $g, $b] = $rgb;

        return $this->cache[$cacheKey] = sprintf(
            '#%02x%02x%02x',
            (int)round(($r + $m) * 255.0),
            (int)round(($g + $m) * 255.0),
            (int)round(($b + $m) * 255.0)
        );
    }

    /**
     * Calculates relative luminance of a color.
     *
     * @param string $rgb RGB or hex color.
     * @return float Relative luminance value.
     */
    private function relative_luminance(string $rgb): float
    {
        [$r, $g, $b] = array_map('intval', $this->parse_rgb($rgb));
        $normalize = fn(float $v): float => $v / 255.0 <= 0.03928 ? $v / 12.92 / 255.0 : pow(($v / 255.0 + 0.055) / 1.055, 2.4);
        return 0.2126 * $normalize((float)$r) + 0.7152 * $normalize((float)$g) + 0.0722 * $normalize((float)$b);
    }

    /**
     * Determines base contrast color (#111111 or #ffffff).
     *
     * @param string $color Color to check contrast for.
     * @param string $comparisonColor Color to compare against (default #000000).
     * @return string Hex color (#111111 or #ffffff).
     */
    public function parse_the_contrast(string $color, string $comparisonColor = '#000000'): string
    {
        $l1 = $this->calculate_luminance($color) + 0.05;
        $l2 = $this->calculate_luminance($comparisonColor) + 0.05;

        $contrastRatio = max($l1, $l2) / min($l1, $l2);

        // Raise the threshold from 5 to 6.5 so that medium-dark colors (like Yeti's #008cba)
        // fall back to white (#ffffff) instead of getting forced to dark text.
        return $contrastRatio > 6 ? '#111111' : '#ffffff';
    }

    /**
     * Calculates luminance of a hex color.
     *
     * @param string $color Hex color to calculate luminance for.
     * @return float Luminance value.
     */
    private function calculate_luminance(string $color): float
    {
        if (isset($this->luminanceCache[$color])) {
            return $this->luminanceCache[$color];
        }

        $color = $this->validate_hex($color);
        $rgb = array_map('hexdec', str_split($color, 2));

        foreach ($rgb as &$component) {
            $component /= 255;
            $component = $component <= 0.03928
                ? $component / 12.92
                : pow(($component + 0.055) / 1.055, 2.4);
        }

        return $this->luminanceCache[$color] = 0.2126 * $rgb[0] + 0.7152 * $rgb[1] + 0.0722 * $rgb[2];
    }

    /**
     * Returns WCAG contrast ratio between this color and another.
     *
     * @param string $otherColor Another color in hex format.
     * @return float
     */
    public function contrast_ratio_with(string $otherColor): float
    {
        return $this->wcag_contrast_ratio($this->color, $otherColor);
    }

    /**
     * Clears all cached data.
     *
     * @return void
     */
    public function clearCache(): void
    {
        $this->cache = [];
        $this->luminanceCache = [];
    }

    /**
     * Logs errors to WordPress debug log if SCRIPT_DEBUG is enabled.
     *
     * @param string $message Error message to log.
     * @return void
     */
    private function log_error(string $message): void
    {
        if (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) {
            error_log("[SystemPress_ColorPalette] $message");
        }
    }
}
