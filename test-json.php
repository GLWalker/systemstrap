<?php
require_once('/www/kinsta/public/system/wp-load.php');
$settings = wp_get_global_settings();
$active_palette = $settings['color']['palette']['theme'] ?? null;
$variations = WP_Theme_JSON_Resolver::get_style_variations( 'theme' );

echo "ACTIVE PALETTE HASH: " . md5(serialize($active_palette)) . PHP_EOL;

foreach ($variations as $variation) {
    if (isset($variation['settings']['color']['palette']['theme'])) {
        $var_palette = $variation['settings']['color']['palette']['theme'];
        echo "VAR " . $variation['title'] . " PALETTE HASH: " . md5(serialize($var_palette)) . PHP_EOL;
        
        if ($var_palette !== $active_palette) {
            echo "Differences in " . $variation['title'] . ":\n";
            print_r(array_diff_assoc(array_map('serialize', $active_palette), array_map('serialize', $var_palette)));
        }
    }
}
