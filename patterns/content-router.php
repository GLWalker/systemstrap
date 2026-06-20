<?php

/**
 * Title: Content Router
 * Slug: systemstrap/content-router
 * Description: Dynamically routes main content to BuddyPress-specific or generic page template parts.
 */

$bp_component = '';
$bp_template_file = '';
$checked_files = []; // Cache for locate_template() calls

// Strengthened BP detection: Broader check for user context + general BP pages
if (function_exists('bp_current_component')) {
  // Broader check: Ensure we're in a user context, active component, or any BP page
  // FIX: replaced bp_is_current_component() with bp_current_component() to prevent ArgumentCountError
  if (bp_is_user() || bp_current_component() || function_exists('buddypress')) {
    $component = sanitize_key(bp_current_component());
    if ($component) {
      $bp_component = $component; // Sanitized component (e.g., 'profile')
      $bp_specific_part = "parts/part-buddypress-{$bp_component}.html";

      // Check BP-specific part first
      if (locate_template($bp_specific_part, false, false, $checked_files)) { // Cache via ref
        $bp_template_file = $bp_specific_part;
        // Fallback to generic BP
      } elseif (locate_template('parts/part-buddypress.html', false, false, $checked_files)) {
        $bp_template_file = 'parts/part-buddypress.html';
      }
    }
  }
}

// Final fallback to page part (or minimal content if missing)
if (empty($bp_template_file)) {
  if (locate_template('parts/part-page.html', false, false, $checked_files)) {
    $bp_template_file = 'parts/part-page.html';
  } else {
    // Universal fallback: Basic post content block to avoid blank pages
    echo '<!-- wp:post-content /-->';
    return; // Bail early
  }
}

// FIX: Inline the logic instead of declaring a function to avoid 'Cannot redeclare' fatal error
$slug = str_replace(['parts/part-', '.html'], '', $bp_template_file);
$class_name = (strpos($slug, 'page') !== false)
  ? 'site-main main-page'
  : "site-main main-buddypress main-{$slug}";

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
