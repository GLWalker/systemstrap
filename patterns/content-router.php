<?php

/**
 * Title: Content Router
 * Slug: systemstrap/content-router
 * Description: Dynamically routes main content to BuddyPress-specific or generic page template parts.
 */

$wc_template_file = '';
$bp_template_file = '';

$bp_parts = array(
  'activity' => 'part-buddypress-activity',
  'blogs'    => 'part-buddypress-blogs',
  'groups'   => 'part-buddypress-groups',
  'members'  => 'part-buddypress-members',
);

$is_woocommerce_account = function_exists('is_account_page') && is_account_page();

if ($is_woocommerce_account && locate_template('parts/part-woocommerce-account.html', false, false)) {
  $wc_template_file = 'parts/part-woocommerce-account.html';
}

$is_buddypress = function_exists('is_buddypress') && is_buddypress();

if ($is_buddypress) {
  $component = function_exists('bp_current_component')
    ? sanitize_key(bp_current_component())
    : '';

  if ($component && isset($bp_parts[$component])) {
    $bp_specific_part = 'parts/' . $bp_parts[$component] . '.html';

    if (locate_template($bp_specific_part, false, false)) {
      $bp_template_file = $bp_specific_part;
    }
  }

  if (empty($bp_template_file) && locate_template('parts/part-buddypress.html', false, false)) {
    $bp_template_file = 'parts/part-buddypress.html';
  }
}

if (!empty($wc_template_file)) {
  $template_file = $wc_template_file;
} elseif (!empty($bp_template_file)) {
  $template_file = $bp_template_file;
} else {
  if (locate_template('parts/part-page.html', false, false)) {
    $bp_template_file = 'parts/part-page.html';
  } else {
    echo '<!-- wp:group {"tagName":"main","className":"site-main main-page"} -->';
    echo '<main class="wp-block-group site-main main-page">';
    echo '<!-- wp:post-content /-->';
    echo '</main>';
    echo '<!-- /wp:group -->';
    return;
  }

  $template_file = $bp_template_file;
}

// FIX: Inline the logic instead of declaring a function to avoid 'Cannot redeclare' fatal error
$slug = str_replace(['parts/part-', '.html'], '', $template_file);
$class_name = (strpos($slug, 'page') !== false)
  ? 'site-main main-page'
  : ((strpos($slug, 'woocommerce-account') !== false)
    ? 'site-main main-woocommerce-account'
    : "site-main main-buddypress main-{$slug}");

// Output the dynamic template part block
$block_attrs = [
  'slug' => "part-{$slug}",
  'theme' => 'systemstrap',
  'tagName' => 'main',
  'area' => 'uncategorized',
  'className' => $class_name,
];
$block_json = wp_json_encode($block_attrs);
echo "<!-- wp:template-part {$block_json} /-->";
