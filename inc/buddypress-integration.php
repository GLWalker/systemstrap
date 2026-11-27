<?php

/**
 * First-class BuddyPress Nouveau integration for SystemStrap.
 *
 * This module is loaded only while BuddyPress is active and the transitional
 * companion plugin is inactive. Nouveau remains the markup and interaction
 * authority; SystemStrap supplies only registry-driven presentation bridges.
 *
 * @package systemstrap
 */

if (! defined('ABSPATH')) {
	exit;
}

/**
 * Return the authoritative BuddyPress presentation registry.
 *
 * @return array<string, array<string, mixed>>
 */
function strap_buddypress_component_registry()
{
	$panel_treatments = array(
		'native'               => array('label' => __('Native BuddyPress', 'systemstrap')),
		'system-panel-bp'      => array('label' => __('System Panel', 'systemstrap'), 'class' => 'strap-panel-surface strap-bp-treatment-system-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-panel-surface'),
		'system-flat-panel-bp' => array('label' => __('System Flat Panel', 'systemstrap'), 'class' => 'strap-panel-surface is-style-system-flat-panel strap-bp-treatment-system-flat-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-panel-surface'),
	);
	$activity_stream_treatments = array(
		'native'               => array('label' => __('Native BuddyPress', 'systemstrap')),
		'system-flat-list-bp'  => array('label' => __('System Flat List', 'systemstrap'), 'class' => 'strap-comments-thread is-style-system-flat-list strap-bp-treatment-system-flat-list', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-buddypress-activity-system-list'),
		'system-list-bp'       => array('label' => __('System List', 'systemstrap'), 'class' => 'strap-comments-thread is-style-system-list strap-bp-treatment-system-list', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-buddypress-activity-system-list'),
		'system-flat-panel-bp' => array('label' => __('System Flat Panel', 'systemstrap'), 'class' => 'strap-comments-thread is-style-system-flat-panel strap-bp-treatment-system-flat-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-buddypress-activity-system-flat-panel'),
		'system-panel-bp'      => array('label' => __('System Panel', 'systemstrap'), 'class' => 'strap-comments-thread is-style-system-panel strap-bp-treatment-system-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-buddypress-activity-system-panel'),
	);
	$directory_treatments = array(
		'native'               => array('label' => __('Native BuddyPress', 'systemstrap')),
		'system-panel-bp'      => array('label' => __('System Panel', 'systemstrap'), 'class' => 'strap-bp-treatment-system-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-panel-surface'),
		'system-flat-panel-bp' => array('label' => __('System Flat Panel', 'systemstrap'), 'class' => 'strap-bp-treatment-system-flat-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-panel-surface'),
	);
	$navigation_treatments = array(
		'system-panel-bp'  => array('label' => __('System Panel', 'systemstrap'), 'class' => 'is-style-system-panel strap-panel-surface strap-bp-navigation-treatment-system-nav'),
		'native'           => array('label' => __('Native BuddyPress', 'systemstrap')),
		'system-nav'       => array('label' => __('System Navigation', 'systemstrap'), 'class' => 'strap-bp-navigation-treatment-system-nav'),
		'system-list'      => array('label' => __('System List', 'systemstrap'), 'class' => 'strap-bp-navigation-treatment-system-list'),
		'system-flat-list' => array('label' => __('System Flat List', 'systemstrap'), 'class' => 'strap-bp-navigation-treatment-system-flat-list'),
	);
	$horizontal_navigation_treatments = array(
		'native'            => array('label' => __('Native BuddyPress', 'systemstrap')),
		'wp-default'        => array('label' => __('WP Default', 'systemstrap'), 'class' => 'wp-block-navigation strap-bp-horizontal-navigation strap-bp-horizontal-navigation-treatment-wp-default'),
		'system-nav-button' => array('label' => __('System Nav Button', 'systemstrap'), 'class' => 'wp-block-navigation is-style-system-nav-button strap-bp-horizontal-navigation strap-bp-horizontal-navigation-treatment-system-nav-button', 'theme_style_handle' => 'core-navigation-system-nav-button'),
		'system-nav-gen'    => array('label' => __('System Nav Gen', 'systemstrap'), 'class' => 'wp-block-navigation is-style-system-nav-gen strap-bp-horizontal-navigation strap-bp-horizontal-navigation-treatment-system-nav-gen', 'theme_style_handle' => 'core-navigation-system-nav-gen'),
	);

	return array(
		'pagination_style'      => array('label' => __('Pagination Style', 'systemstrap'), 'default' => 'system-ui-pagination-pill-outline', 'application' => 'admin_mapping', 'targets' => array('non-Native BuddyPress pagination'), 'treatments' => strap_buddypress_get_pagination_styles()),
		'activity_stream'       => array('label' => __('Activity Stream', 'systemstrap'), 'default' => 'system-panel-bp', 'application' => 'admin_mapping', 'targets' => array('#activity-stream', '.activity-list.bp-list', '.activity-list > .activity-item'), 'treatments' => $activity_stream_treatments),
		'activity_composer'     => array('label' => __('Activity Composer', 'systemstrap'), 'default' => 'system-panel-bp', 'application' => 'admin_mapping', 'targets' => array('.activity-update-form', '#bp-nouveau-activity-form', '#whats-new-form'), 'treatments' => $panel_treatments),
		'member_directory'      => array('label' => __('Member Directory', 'systemstrap'), 'default' => 'system-panel-bp', 'application' => 'admin_mapping', 'targets' => array('#members-dir-list[data-bp-list="members"]', '#members-group-list[data-bp-list="group_members"]', '.members.friends[data-bp-list="friends"]', '[data-bp-list="friendship_requests"]'), 'treatments' => $directory_treatments),
		'group_directory'       => array('label' => __('Group Directory', 'systemstrap'), 'default' => 'system-panel-bp', 'application' => 'admin_mapping', 'targets' => array('#groups-dir-list[data-bp-list="groups"]', '.groups.mygroups[data-bp-list="groups"]'), 'treatments' => $directory_treatments),
		'site_directory'        => array('label' => __('Site Directory', 'systemstrap'), 'default' => 'system-panel-bp', 'application' => 'admin_mapping', 'targets' => array('#blogs-dir-list[data-bp-list="blogs"]', '.blogs.myblogs[data-bp-list="blogs"]'), 'treatments' => $directory_treatments),
		'member_profile'        => array('label' => __('Member Profile', 'systemstrap'), 'default' => 'system-panel-bp', 'application' => 'admin_mapping', 'targets' => array('#item-body.item-body'), 'treatments' => $panel_treatments),
		'group_profile'         => array('label' => __('Group Profile', 'systemstrap'), 'default' => 'system-panel-bp', 'application' => 'admin_mapping', 'targets' => array('#item-body.item-body'), 'treatments' => $panel_treatments),
		'directory_navigation'  => array('label' => __('Horizontal Navigation', 'systemstrap'), 'default' => 'system-nav-button', 'application' => 'admin_mapping', 'targets' => array('.main-navs.dir-navs', '.bp-subnavs', '#object-nav.horizontal'), 'legacy_treatments' => array('system-nav' => 'system-nav-gen', 'system-list' => 'wp-default', 'system-flat-list' => 'wp-default'), 'treatments' => $horizontal_navigation_treatments),
		'single_navigation'     => array('label' => __('Single Navigation', 'systemstrap'), 'default' => 'system-list', 'application' => 'admin_mapping', 'targets' => array('#object-nav.vertical', '.wp-block-bp-primary-nav'), 'treatments' => $navigation_treatments),
		'feedback_notices'      => array('label' => __('Feedback Notices', 'systemstrap'), 'default' => 'native', 'application' => 'fixed', 'targets' => array('.bp-feedback', '.bp-template-notice', '.bp-messages'), 'treatments' => array('native' => array('label' => __('Native BuddyPress', 'systemstrap')))),
		'default_button_style'  => array('label' => __('Default Button Style', 'systemstrap'), 'default' => 'pill-outline', 'application' => 'admin_mapping', 'targets' => array('primary transactional BuddyPress buttons'), 'treatments' => array('primary' => array('label' => __('Primary', 'systemstrap')), 'secondary' => array('label' => __('Secondary', 'systemstrap')), 'link' => array('label' => __('Link', 'systemstrap')), 'pill' => array('label' => __('Pill', 'systemstrap')), 'pill-outline' => array('label' => __('Pill Outline', 'systemstrap')), 'square' => array('label' => __('Square', 'systemstrap')), 'square-outline' => array('label' => __('Square Outline', 'systemstrap')))),
		'avatar_style'          => array('label' => __('Avatar Style', 'systemstrap'), 'default' => 'rounded', 'application' => 'admin_mapping', 'targets' => array('BuddyPress member and group identity images'), 'treatments' => array('default' => array('label' => __('Default BuddyPress', 'systemstrap')), 'square' => array('label' => __('Square', 'systemstrap')), 'rounded' => array('label' => __('Rounded', 'systemstrap')), 'circle' => array('label' => __('Circle', 'systemstrap')))),
		'activity_rss_icon'     => array('label' => __('Activity RSS Icon', 'systemstrap'), 'default' => 'hide', 'application' => 'admin_mapping', 'targets' => array('#activity-rss-feed'), 'treatments' => array('show' => array('label' => __('Show', 'systemstrap')), 'hide' => array('label' => __('Hide', 'systemstrap')))),
	);
}

/** Native presentation first; canonical choices come from registered Core styles. */
function strap_buddypress_get_pagination_styles()
{
	$choices = array('buddypress-default' => array('label' => __('BuddyPress Default', 'systemstrap')));
	if (! class_exists('WP_Block_Styles_Registry')) {
		return $choices;
	}
	foreach (WP_Block_Styles_Registry::get_instance()->get_registered_styles_for_block('core/query-pagination') as $style) {
		$name = $style['name'] ?? '';
		if (str_starts_with($name, 'system-ui-pagination')) {
			$choices[$name] = array('label' => $style['label'], 'class' => 'is-style-' . $name);
		}
	}
	return $choices;
}

/** Resolve pagination from the actual loop/profile owner, never navigation. */
function strap_buddypress_has_system_pagination()
{
	if ('buddypress-default' === strap_buddypress_get_component_treatment('pagination_style')) {
		return false;
	}
	$ownership = strap_buddypress_get_screen_component_ownership();
	foreach (array('member_directory', 'group_directory', 'site_directory', 'member_profile', 'group_profile') as $component_id) {
		if ($ownership[$component_id] && 'native' !== strap_buddypress_get_component_treatment($component_id)) {
			return true;
		}
	}
	return function_exists('bp_is_group_create') && bp_is_group_create() && 'native' !== strap_buddypress_get_component_treatment('group_profile');
}

/**
 * Resolve one BuddyPress treatment without materializing defaults.
 *
 * @param string $component_id Registry component identifier.
 * @return string
 */
function strap_buddypress_get_component_treatment($component_id)
{
	$registry = strap_buddypress_component_registry();
	if (! isset($registry[$component_id])) {
		return '';
	}

	$component = $registry[$component_id];
	$default   = sanitize_key($component['default'] ?? '');
	$stored    = strap_get_component_mappings('buddypress');
	$value     = isset($stored[$component_id]) && is_string($stored[$component_id]) ? sanitize_key($stored[$component_id]) : $default;
	$legacy    = $component['legacy_treatments'] ?? array();

	if (is_array($legacy) && isset($legacy[$value]) && is_string($legacy[$value])) {
		$value = $legacy[$value];
	}

	return isset($component['treatments'][$value]) ? $value : $default;
}

/**
 * Resolve the request-level class for the selected canonical Button treatment.
 *
 * The root class also covers Nouveau controls injected after server render.
 *
 * @return string
 */
function strap_buddypress_get_default_button_style_class()
{
	return 'strap-bp-default-button-style-' . sanitize_html_class(strap_buddypress_get_component_treatment('default_button_style'));
}

/**
 * Add the selected default Button treatment to BuddyPress requests only.
 *
 * @param array<int, string> $classes Existing body classes.
 * @return array<int, string>
 */
function strap_buddypress_add_default_button_style_body_class($classes)
{
	if (is_admin() || ! class_exists('BuddyPress')) {
		return $classes;
	}

	$ownership = strap_buddypress_get_screen_component_ownership();

	$classes[] = strap_buddypress_get_default_button_style_class();
	$classes[] = 'strap-bp-avatar-' . sanitize_html_class(strap_buddypress_get_component_treatment('avatar_style'));
	$classes[] = 'strap-bp-activity-rss-' . sanitize_html_class(strap_buddypress_get_component_treatment('activity_rss_icon'));
	if (strap_buddypress_has_sidebar_primary_navigation()) {
		$classes[] = 'strap-bp-sidebar-navigation';
	}
	if (function_exists('is_buddypress') && is_buddypress() && 'buddypress-default' === strap_buddypress_get_component_treatment('pagination_style')) {
		$classes[] = 'strap-bp-pagination-default';
	}
	if (strap_buddypress_has_system_pagination()) {
		$style = strap_buddypress_get_component_treatment('pagination_style');
		if (isset(strap_buddypress_get_pagination_styles()[$style])) {
			$classes[] = 'strap-bp-pagination-scope';
			$classes[] = 'is-style-' . $style;
		}
	}
	if (strap_buddypress_has_system_directory_control_treatment()) {
		$classes[] = 'strap-bp-controls-system-directory';
	}
	if ($ownership['activity_stream'] && 'native' !== strap_buddypress_get_component_treatment('activity_stream')) {
		$classes[] = 'strap-bp-controls-system-activity';
	}
	if ((strap_buddypress_is_member_profile() && 'native' !== strap_buddypress_get_component_treatment('member_profile')) || (strap_buddypress_is_group_profile() && 'native' !== strap_buddypress_get_component_treatment('group_profile'))) {
		$classes[] = 'strap-bp-controls-system-profile';
	}

	return array_values(array_unique($classes));
}
add_filter('body_class', 'strap_buddypress_add_default_button_style_body_class');

/**
 * Determine whether a directory screen needs request-level control scope.
 * Directory search and filter controls sit outside Nouveau's list root.
 *
 * @return bool
 */
function strap_buddypress_has_system_directory_control_treatment()
{
	$ownership  = strap_buddypress_get_screen_component_ownership();
	$components = array('activity_stream', 'member_directory', 'group_directory', 'site_directory');

	foreach ($components as $component_id) {
		if (! empty($ownership[$component_id]) && 'native' !== strap_buddypress_get_component_treatment($component_id)) {
			return true;
		}
	}

	return false;
}

/**
 * Return the registry-declared classes for an effective component treatment.
 *
 * @param string $component_id Registry component identifier.
 * @return array<int, string>
 */
function strap_buddypress_get_component_treatment_classes($component_id)
{
	$registry  = strap_buddypress_component_registry();
	$treatment = strap_buddypress_get_component_treatment($component_id);
	$classes   = $registry[$component_id]['treatments'][$treatment]['class'] ?? '';

	if (! is_string($classes) || '' === trim($classes)) {
		return array();
	}

	return array_values(
		array_filter(
			preg_split('/\s+/', trim($classes)),
			static function ($class_name) {
				return is_string($class_name) && $class_name === sanitize_html_class($class_name);
			}
		)
	);
}

/**
 * Apply one registry-declared treatment to the current HTML tag.
 *
 * @param WP_HTML_Tag_Processor $processor Active markup processor.
 * @param string                $component_id Registry component identifier.
 * @return void
 */
function strap_buddypress_add_component_treatment_classes($processor, $component_id)
{
	$classes = strap_buddypress_get_component_treatment_classes($component_id);
	foreach ($classes as $class_name) {
		$processor->add_class($class_name);
	}

	if ($classes && in_array($component_id, array('activity_stream', 'activity_composer', 'member_directory', 'group_directory', 'site_directory', 'member_profile', 'group_profile'), true)) {
		$processor->add_class('strap-bp-controls-system-scope');
	}
}

/**
 * Sanitize submitted BuddyPress mappings against the registry.
 *
 * @param mixed $mappings Submitted values.
 * @return array<string, string>
 */
function strap_buddypress_sanitize_component_mappings($mappings)
{
	$valid     = array();
	$registry  = strap_buddypress_component_registry();
	$mappings  = is_array($mappings) ? $mappings : array();

	foreach ($registry as $component_id => $component) {
		if ('admin_mapping' !== ($component['application'] ?? '') || ! isset($mappings[$component_id]) || ! is_string($mappings[$component_id])) {
			continue;
		}
		$treatment = sanitize_key($mappings[$component_id]);
		$legacy    = $component['legacy_treatments'] ?? array();
		if (is_array($legacy) && isset($legacy[$treatment]) && is_string($legacy[$treatment])) {
			$treatment = $legacy[$treatment];
		}
		if (isset($component['treatments'][$treatment])) {
			$valid[$component_id] = $treatment;
		}
	}

	foreach (strap_buddypress_directory_layout_controls() as $key => $control) {
		if (isset($mappings[$key]) && in_array($mappings[$key], array('native', '1', '2', '3', '4'), true)) {
			$valid[$key] = $mappings[$key];
		}
	}

	return $valid;
}

function strap_buddypress_directory_layout_controls()
{
	return array(
		'members_layout'         => array('label' => __('Members Directory Columns', 'systemstrap'), 'default' => '3', 'treatment' => 'member_directory'),
		'groups_layout'          => array('label' => __('Groups Directory Columns', 'systemstrap'), 'default' => '2', 'treatment' => 'group_directory'),
		'members_friends_layout' => array('label' => __('Friends Columns', 'systemstrap'), 'default' => '3', 'treatment' => 'member_directory'),
		'members_group_layout'   => array('label' => __('Group Members Columns', 'systemstrap'), 'default' => '3', 'treatment' => 'member_directory'),
	);
}

function strap_buddypress_directory_layouts($appearance)
{
	$saved = strap_get_component_mappings('buddypress');
	foreach (strap_buddypress_directory_layout_controls() as $key => $control) {
		$count = $saved[$key] ?? $control['default'];
		if ('native' !== strap_buddypress_get_component_treatment($control['treatment']) && in_array($count, array('1', '2', '3', '4'), true)) {
			$appearance[$key] = $count;
		}
	}

	if ('native' !== strap_buddypress_get_component_treatment('single_navigation')) {
		$appearance['user_nav_display'] = 1;
		$appearance['group_nav_display'] = 1;
		$appearance['user_nav_tabs'] = 0;
		$appearance['group_nav_tabs'] = 0;
	}
	if ('native' !== strap_buddypress_get_component_treatment('directory_navigation')) {
		foreach (array('members', 'groups', 'activity', 'sites') as $directory) {
			$appearance[$directory . '_dir_layout'] = 0;
			$appearance[$directory . '_dir_tabs'] = 0;
		}
		$appearance['user_subnav_tabs'] = 0;
		$appearance['group_subnav_tabs'] = 0;
	}
	return $appearance;
}
add_filter('bp_before_nouveau_appearance_settings_parse_args', 'strap_buddypress_directory_layouts');

/**
 * Render the BuddyPress component mapping fields.
 */
function strap_buddypress_render_component_mapping_fields()
{
	$fields = array();
	$layouts = function_exists('bp_nouveau_customizer_grid_choices') ? strap_buddypress_directory_layout_controls() : array();
	$saved = strap_get_component_mappings('buddypress');
	foreach (strap_buddypress_component_registry() as $key => $component) {
		if ('admin_mapping' === ($component['application'] ?? '')) {
			$fields[$key] = array(
				'label' => $component['label'],
				'value' => strap_buddypress_get_component_treatment($key),
				'choices' => array_map(static function ($treatment) { return $treatment['label']; }, $component['treatments']),
			);
		}
		foreach ($layouts as $layout_key => $layout) {
			if ($key === $layout['treatment']) {
				$fields[$layout_key] = array(
					'label' => $layout['label'],
					'value' => $saved[$layout_key] ?? $layout['default'],
					'choices' => array('native' => __('Native BuddyPress', 'systemstrap')) + bp_nouveau_customizer_grid_choices(),
				);
			}
		}
	}
	// Group the presentation controls and their related layouts in the form.
	$order = array(
		'member_directory', 'members_layout', 'members_friends_layout', 'member_profile',
		'group_directory', 'groups_layout', 'members_group_layout', 'group_profile',
		'site_directory', 'activity_stream', 'activity_composer', 'activity_rss_icon',
		'directory_navigation', 'single_navigation', 'pagination_style', 'default_button_style', 'avatar_style',
	);
	$fields = array_replace(array_intersect_key(array_fill_keys($order, null), $fields), $fields);
?>
	<h2><?php esc_html_e('BuddyPress', 'systemstrap'); ?></h2>
	<p><?php esc_html_e('Choose the active presentation for each supported BuddyPress component. Missing settings resolve to the declared SystemStrap default.', 'systemstrap'); ?></p>
	<table class="form-table" role="presentation">
		<tbody>
			<?php foreach ($fields as $key => $field) : ?>
				<tr>
					<th scope="row"><label for="strap-buddypress-<?php echo esc_attr($key); ?>"><?php echo esc_html($field['label']); ?></label></th>
					<td>
						<select class="regular-text" style="width: 25em; max-width: 100%;" id="strap-buddypress-<?php echo esc_attr($key); ?>" name="systemstrap_component_mappings[buddypress][<?php echo esc_attr($key); ?>]">
							<?php foreach ($field['choices'] as $value => $label) : ?>
								<option value="<?php echo esc_attr($value); ?>" <?php selected($field['value'], $value); ?>><?php echo esc_html($label); ?></option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php
}

/**
 * Register theme-owned Nouveau assets with physical modification versions.
 */
function strap_buddypress_register_assets()
{
	$directory = get_template_directory() . '/assets/css/buddypress/';
	$uri       = get_template_directory_uri() . '/assets/css/buddypress/';
	$navigation_script = get_template_directory() . '/assets/js/buddypress-members-directory-navigation.js';
	$button_roles_script = get_template_directory() . '/assets/js/buddypress-button-roles.js';
	$message_editor_script = get_template_directory() . '/assets/js/buddypress-message-editor.js';
	$variation_directory = get_template_directory() . '/assets/css/style-variations/';
	$variation_uri       = get_template_directory_uri() . '/assets/css/style-variations/';
	$assets    = array(
		'strap-buddypress-typography'          => array('file' => 'buddypress-typography.css', 'deps' => array('bp-nouveau')),
		'strap-buddypress-avatars'             => array('file' => 'buddypress-avatars.css', 'deps' => array()),
		'strap-buddypress-single-navigation'  => array('file' => 'buddypress-single-navigation.css', 'deps' => array()),
		'strap-buddypress-components'          => array('file' => 'buddypress-components.css', 'deps' => array('strap-buddypress-typography', 'strap-panel-surface', 'strap-buddypress-avatars', 'strap-buddypress-single-navigation')),
		'strap-buddypress-inner-shell'         => array('file' => 'buddypress-inner-shell.css', 'deps' => array()),
	);
	$activity_assets = array(
		// Nouveau -> SystemStrap bridge -> canonical Comments treatment.
		'strap-buddypress-activity-system-list'       => array('file' => 'core-comments-system-list.css', 'deps' => array('strap-buddypress-components')),
		'strap-buddypress-activity-system-panel'      => array('file' => 'core-comments-system-panel.css', 'deps' => array('strap-buddypress-components', 'strap-panel-surface', 'strap-panel-structure')),
		'strap-buddypress-activity-system-flat-panel' => array('file' => 'core-comments-system-flat-panel.css', 'deps' => array('strap-buddypress-components', 'strap-panel-surface', 'strap-panel-structure')),
	);

	foreach ($assets as $handle => $asset) {
		$path = $directory . $asset['file'];
		if (file_exists($path)) {
			wp_register_style($handle, $uri . $asset['file'], $asset['deps'], filemtime($path));
		}
	}

	foreach ($activity_assets as $handle => $asset) {
		$path = $variation_directory . $asset['file'];
		if (file_exists($path)) {
			wp_register_style($handle, $variation_uri . $asset['file'], $asset['deps'], filemtime($path));
		}
	}

	if (file_exists($navigation_script)) {
		wp_register_script(
			'strap-buddypress-members-directory-navigation',
			get_template_directory_uri() . '/assets/js/buddypress-members-directory-navigation.js',
			array('bp-nouveau'),
			filemtime($navigation_script),
			true
		);
	}

	if (file_exists($button_roles_script)) {
		wp_register_script(
			'strap-buddypress-button-roles',
			get_template_directory_uri() . '/assets/js/buddypress-button-roles.js',
			array('bp-nouveau-activity-post-form'),
			filemtime($button_roles_script),
			true
		);
	}

	if (file_exists($message_editor_script)) {
		wp_register_script(
			'strap-buddypress-message-editor',
			get_template_directory_uri() . '/assets/js/buddypress-message-editor.js',
			array('wp-tinymce'),
			filemtime($message_editor_script),
			true
		);
	}
}
add_action('bp_enqueue_community_scripts', 'strap_buddypress_register_assets', 20);

/**
 * Register the editor-only BuddyPress stylesheet independently of Nouveau.
 */
function strap_buddypress_register_editor_asset()
{
	$path = get_template_directory() . '/assets/css/buddypress/buddypress-editor.css';

	if (file_exists($path)) {
		wp_register_style(
			'strap-buddypress-editor',
			get_template_directory_uri() . '/assets/css/buddypress/buddypress-editor.css',
			array('wp-edit-blocks'),
			filemtime($path)
		);
	}
}
add_action('init', 'strap_buddypress_register_editor_asset', 20);

/**
 * Retire the old menu-style axis. Saved classes are reconciled at render time;
 * the block Styles UI now owns only its container, never its menu treatment.
 */
function strap_buddypress_register_primary_navigation_styles()
{
	if (! function_exists('unregister_block_style')) {
		return;
	}

	$registry = strap_buddypress_component_registry();
	foreach ($registry['single_navigation']['treatments'] as $name => $treatment) {
		if (WP_Block_Styles_Registry::get_instance()->is_registered('bp/primary-nav', $name)) {
			unregister_block_style('bp/primary-nav', $name);
		}
	}
}
add_action('init', 'strap_buddypress_register_primary_navigation_styles', 30);

/**
 * True only on the Activity directory, where the Phase 4 presentation applies.
 *
 * @return bool
 */
function strap_buddypress_is_activity_directory()
{
	return function_exists('bp_is_activity_directory') && bp_is_activity_directory();
}

function strap_buddypress_is_members_directory()
{
	return function_exists('bp_is_members_directory') && bp_is_members_directory();
}

function strap_buddypress_is_groups_directory()
{
	return function_exists('bp_is_groups_directory') && bp_is_groups_directory();
}

function strap_buddypress_is_blogs_directory()
{
	return function_exists('bp_is_blogs_directory') && bp_is_blogs_directory();
}

function strap_buddypress_is_member_profile()
{
	return function_exists('bp_is_user') && bp_is_user();
}

function strap_buddypress_is_group_profile()
{
	return function_exists('bp_is_group') && bp_is_group();
}

/**
 * Resolve the semantic Nouveau components rendered by the current screen.
 *
 * A Member or Group single URL can render an Activity stream, a directory
 * listing, or profile-owned content. Keep those ownership decisions in one
 * place so an outer profile treatment cannot wrap a delegated component.
 *
 * @return array<string, bool>
 */
function strap_buddypress_get_screen_component_ownership()
{
	$ownership = array(
		'activity_stream'      => false,
		'activity_composer'    => false,
		'member_directory'     => false,
		'group_directory'      => false,
		'site_directory'       => false,
		'member_profile'       => false,
		'group_profile'        => false,
		'directory_navigation' => false,
		'single_navigation'    => false,
	);

	if (! function_exists('is_buddypress') || ! is_buddypress()) {
		return $ownership;
	}

	if (strap_buddypress_is_activity_directory()) {
		$ownership['activity_stream']      = true;
		$ownership['activity_composer']    = true;
		$ownership['directory_navigation'] = true;
		return $ownership;
	}

	if (strap_buddypress_is_members_directory()) {
		$ownership['member_directory']     = true;
		$ownership['directory_navigation'] = true;
		return $ownership;
	}

	if (strap_buddypress_is_groups_directory()) {
		$ownership['group_directory']      = true;
		$ownership['directory_navigation'] = true;
		return $ownership;
	}

	if (strap_buddypress_is_blogs_directory()) {
		$ownership['site_directory']        = true;
		$ownership['directory_navigation'] = true;
		return $ownership;
	}

	if (strap_buddypress_is_member_profile()) {
		$ownership['single_navigation']    = true;
		$ownership['directory_navigation'] = true;

		if (function_exists('bp_is_user_activity') && bp_is_user_activity()) {
			$ownership['activity_stream']   = true;
			$ownership['activity_composer'] = true;
		} elseif (function_exists('bp_is_user_blogs') && bp_is_user_blogs()) {
			$ownership['site_directory'] = true;
		} elseif (function_exists('bp_is_user_friends') && bp_is_user_friends()) {
			$ownership['member_directory'] = true;
		} elseif (function_exists('bp_is_user_groups') && bp_is_user_groups()) {
			$ownership['group_directory'] = true;
		} else {
			// Nouveau routes all other core and extension member screens through #item-body.
			$ownership['member_profile'] = true;
		}

		return $ownership;
	}

	if (strap_buddypress_is_group_profile()) {
		$ownership['single_navigation']    = true;
		$ownership['directory_navigation'] = true;

		if (function_exists('bp_is_group_activity') && bp_is_group_activity()) {
			$ownership['activity_stream']   = true;
			$ownership['activity_composer'] = true;
		} elseif (function_exists('bp_is_group_members') && bp_is_group_members()) {
			$ownership['member_directory'] = true;
		} else {
			// Group front, management, invitation, and extension screens remain profile-owned.
			$ownership['group_profile'] = true;
		}
	}

	return $ownership;
}

/**
 * Determine whether the current processor tag has a specific HTML class.
 *
 * @param WP_HTML_Tag_Processor $processor Active markup processor.
 * @param string                $class_name Class to find.
 * @return bool
 */
function strap_buddypress_processor_has_class($processor, $class_name)
{
	$classes = preg_split('/\s+/', trim((string) $processor->get_attribute('class')));
	return is_array($classes) && in_array($class_name, $classes, true);
}

/**
 * Determine whether a Nouveau control is an ordinary transactional action.
 *
 * Icon utilities, priority controls, pagination, text actions, and destructive
 * actions retain their component-specific BuddyPress treatment.
 *
 * @param WP_HTML_Tag_Processor $processor Active markup processor.
 * @return bool
 */
function strap_buddypress_is_default_button_control($processor)
{
	$tag     = (string) $processor->get_tag();
	$classes = preg_split('/\s+/', trim((string) $processor->get_attribute('class')));
	$classes = is_array($classes) ? $classes : array();
	$id      = (string) $processor->get_attribute('id');
	$name    = (string) $processor->get_attribute('name');
	$type    = strtolower((string) $processor->get_attribute('type'));
	$exclude = array(
		'dashicons',
		'text-button',
		'button-small',
		'bp-icons',
		'bp-priority-nav-more-toggle',
		'submenu-expand',
		'wp-hide-pw',
		'wp-cancel-pw',
		'bp-remove-item',
		'messages-button',
		'group-members-paginate-button',
		'bp-search',
		'nouveau-search-submit',
		'delete-activity',
		'spam-activity',
		'message-action-delete',
		'message-action-exit',
		'message-action-star',
		'message-action-unstar',
		'group-remove-invite-button',
		'bp-secondary-action',
		'leave-group',
		'unfriend',
		'member-ban',
		'member-unban',
		'member-promote-to-mod',
		'member-promote-to-admin',
		'mod-promote-to-admin',
		'mod-demote-to-member',
		'admin-demote-to-member',
	);

	if (in_array($id, array('delete-account-button', 'delete-group-button'), true) || array_intersect($classes, $exclude)) {
		return false;
	}

	if ('A' === $tag) {
		return in_array('button', $classes, true);
	}

	if ('BUTTON' === $tag) {
		return in_array('button', $classes, true) || 'bp-data-export-nonce' === $name;
	}

	return 'INPUT' === $tag && in_array($type, array('button', 'submit'), true);
}

/**
 * Add the existing canonical Button classes to a rendered Nouveau action.
 *
 * @param WP_HTML_Tag_Processor $processor            Active markup processor.
 * @param bool                  $include_color_classes Whether to add the selected style's color utility classes.
 * @return void
 */
function strap_buddypress_add_default_button_classes($processor, $include_color_classes = true)
{
	$style = strap_buddypress_get_component_treatment('default_button_style');

	$processor->add_class('wp-element-button');
	$processor->add_class('strap-bp-default-button');

	if ($include_color_classes && 'secondary' === $style) {
		$processor->add_class('has-secondary-background-color');
		$processor->add_class('has-background');
	}

	if (in_array($style, array('link', 'pill', 'pill-outline', 'square', 'square-outline'), true)) {
		$processor->add_class('is-style-button-' . $style);
	}

	if ($include_color_classes && in_array($style, array('pill-outline', 'square-outline'), true)) {
		$processor->add_class('has-primary-color');
		$processor->add_class('has-text-color');
	}
}

/**
 * Attach canonical compact Button classes to Nouveau's Activity reply submit.
 *
 * Nouveau emits this input directly from its submit-button registry rather
 * than through the BuddyPress Button API, so classify it at that supported
 * source before the comment form is rendered.
 *
 * @param array<string, array<string, mixed>> $actions Nouveau submit definitions.
 * @return array<string, array<string, mixed>>
 */
function strap_buddypress_map_activity_reply_submit($actions)
{
	if (empty($actions['activity-new-comment']['attributes']) || ! is_array($actions['activity-new-comment']['attributes'])) {
		return $actions;
	}

	$attributes = $actions['activity-new-comment']['attributes'];
	$classes    = preg_split('/\s+/', trim((string) ($attributes['class'] ?? '')));
	$classes    = is_array($classes) ? array_filter($classes) : array();
	$classes    = array_merge(
		$classes,
		array('wp-element-button', 'strap-bp-default-button', 'strap-bp-button-small', 'has-small-font-size')
	);

	$actions['activity-new-comment']['attributes']['class'] = implode(' ', array_unique($classes));
	return $actions;
}
add_filter('bp_nouveau_get_submit_button', 'strap_buddypress_map_activity_reply_submit', 20);

/**
 * Shorten treated friendship action labels without changing native states.
 *
 * @param array<string, mixed> $button_args BuddyPress friendship button arguments.
 * @return array<string, mixed>
 */
function strap_buddypress_shorten_pending_friend_request_label($button_args)
{
	$ownership = strap_buddypress_get_screen_component_ownership();
	$treated = ($ownership['member_directory'] && 'native' !== strap_buddypress_get_component_treatment('member_directory'))
		|| ($ownership['member_profile'] && 'native' !== strap_buddypress_get_component_treatment('member_profile'));
	$labels = array('pending' => __('Cancel', 'systemstrap'), 'is_friend' => __('Remove', 'systemstrap'));
	$id = $button_args['id'] ?? '';
	if ($treated && isset($labels[$id])) {
		$button_args['link_text']  = $labels[$id];
		$button_args['link_title'] = $labels[$id];
	}

	return $button_args;
}
add_filter('bp_get_add_friend_button', 'strap_buddypress_shorten_pending_friend_request_label');

/** Site media must not participate in member/group Avatar Style geometry. */
function strap_buddypress_mark_site_image($html, $blog_id, $args)
{
	if (empty($args['html']) || ! is_string($html)) {
		return $html;
	}
	$processor = new WP_HTML_Tag_Processor($html);
	if ($processor->next_tag('IMG')) {
		$processor->add_class('strap-bp-site-image');
	}
	return $processor->get_updated_html();
}
add_filter('bp_get_blog_avatar', 'strap_buddypress_mark_site_image', 20, 3);

/** Registration shares the existing Member Profile control treatment choice. */
function strap_buddypress_has_registration_treatment()
{
	return function_exists('bp_is_register_page') && bp_is_register_page()
		&& 'native' !== strap_buddypress_get_component_treatment('member_profile');
}

/**
 * Shorten treated group-directory action labels without changing their state.
 *
 * @param array<string, mixed> $button_args BuddyPress group button arguments.
 * @return array<string, mixed>
 */
function strap_buddypress_shorten_group_action_labels($button_args)
{
	if ('native' === strap_buddypress_get_component_treatment('group_directory')) {
		return $button_args;
	}

	$labels = array(
		'join_group'           => __('Join', 'systemstrap'),
		'request_membership'   => __('Request', 'systemstrap'),
		'membership_requested' => __('Cancel', 'systemstrap'),
		'leave_group'          => __('Leave', 'systemstrap'),
	);
	$id = (string) ($button_args['id'] ?? '');

	if (isset($labels[$id])) {
		$button_args['link_text']  = $labels[$id];
		$button_args['link_title'] = $labels[$id];
	}

	return $button_args;
}
add_filter('bp_get_group_join_button', 'strap_buddypress_shorten_group_action_labels', 20);

/**
 * Use the shared concise status vocabulary in treated single-group headers.
 *
 * @param array<string, string> $group_meta Group metadata prepared by Nouveau.
 * @param object                $group      Current group object.
 * @param bool                  $is_group   Whether a single group is displayed.
 * @return array<string, string>
 */
function strap_buddypress_normalize_treated_single_group_status($group_meta, $group, $is_group)
{
	if (! $is_group || 'native' === strap_buddypress_get_component_treatment('group_profile') || ! isset($group_meta['status'])) {
		return $group_meta;
	}

	$labels = array(
		'public'  => __('Public', 'systemstrap'),
		'private' => __('Private', 'systemstrap'),
		'hidden'  => __('Hidden', 'systemstrap'),
	);
	$status = sanitize_key($group->status ?? '');

	if (isset($labels[$status])) {
		$group_meta['status'] = $labels[$status];
	}

	return $group_meta;
}
add_filter('bp_nouveau_get_group_meta', 'strap_buddypress_normalize_treated_single_group_status', 15, 3);

/**
 * Remove Nouveau's combined status/count sentence from treated group loops.
 *
 * The same BuddyPress-owned values are rendered as canonical badges by
 * strap_buddypress_render_group_directory_meta_badges(). Native presentation
 * and single-group metadata remain unchanged.
 *
 * @param array<string, string> $group_meta Group metadata prepared by Nouveau.
 * @param object                $group      Current group loop object.
 * @param bool                  $is_group   Whether a single group is displayed.
 * @return array<string, string>
 */
function strap_buddypress_remove_treated_group_directory_meta($group_meta, $group, $is_group)
{
	if ($is_group || 'native' === strap_buddypress_get_component_treatment('group_directory')) {
		return $group_meta;
	}

	unset($group_meta['status'], $group_meta['count']);
	return $group_meta;
}
add_filter('bp_nouveau_get_group_meta', 'strap_buddypress_remove_treated_group_directory_meta', 20, 3);

/**
 * Render concise group status and BuddyPress-owned member count badges.
 *
 * Nouveau's group-meta template escapes each value before joining it into one
 * sentence, so its supported loop-item hook is the narrow markup-safe bridge.
 *
 * @return void
 */
function strap_buddypress_render_group_directory_meta_badges()
{
	if ('native' === strap_buddypress_get_component_treatment('group_directory') || empty($GLOBALS['groups_template']->group)) {
		return;
	}

	$group  = $GLOBALS['groups_template']->group;
	$labels = array(
		'public'  => __('Public', 'systemstrap'),
		'private' => __('Private', 'systemstrap'),
		'hidden'  => __('Hidden', 'systemstrap'),
	);
	$status = sanitize_key($group->status ?? '');

	if (! isset($labels[$status])) {
		return;
	}

	printf(
		'<div class="strap-bp-group-meta-badges"><span class="system-badge strap-bp-group-meta-badge">%1$s</span><span class="system-badge strap-bp-group-meta-badge">%2$s</span></div>',
		esc_html($labels[$status]),
		esc_html(bp_get_group_member_count($group))
	);
}
add_action('bp_directory_groups_item', 'strap_buddypress_render_group_directory_meta_badges', 5);

/**
 * Add canonical presentation classes to one BuddyPress Button API result.
 *
 * The Button API is shared by Nouveau headers, directory cards, activity
 * actions, and their AJAX response markup. It leaves the generated element,
 * attributes, labels, and component behavior under BuddyPress ownership.
 *
 * @param string    $contents Rendered BuddyPress Button markup.
 * @param array     $args     Original Button API arguments.
 * @param BP_Button $button   Constructed BuddyPress Button object.
 * @return string
 */
function strap_buddypress_map_button_presentation($contents, $args, $button)
{
	if ((is_admin() && ! wp_doing_ajax()) || ! class_exists('WP_HTML_Tag_Processor')) {
		return $contents;
	}

	$component = (string) $button->component;
	$id        = (string) $button->id;
	$excluded  = array(
		'activity_spam',
		'activity_comment_spam',
		'group_remove_invite',
		'member_ban',
		'member_unban',
		'member_promote_to_mod',
		'member_promote_to_admin',
		'mod_promote_to_admin',
		'mod_demote_to_member',
		'admin_demote_to_member',
	);

	if (in_array($id, $excluded, true)) {
		return $contents;
	}

	$processor = new WP_HTML_Tag_Processor($contents);
	$has_button = false;

	while ($processor->next_tag()) {
		$tag = (string) $processor->get_tag();
		if (! in_array($tag, array('A', 'BUTTON', 'INPUT'), true)) {
			continue;
		}

		$has_button = true;

		if ('activity' === $component && 'activity_delete' === $id) {
			continue;
		}

		if ('activity' === $component && 'activity_comment_delete' === $id) {
			strap_buddypress_add_default_button_classes($processor, false);
			$processor->add_class('strap-bp-danger-button');
			$processor->add_class('has-danger-background-color');
			$processor->add_class('has-background');
			$processor->add_class('strap-bp-button-small');
			$processor->add_class('has-small-font-size');
			continue;
		}

		if ('activity' === $component && 'activity_conversation' === $id) {
			$processor->add_class('strap-bp-activity-comment-control');
			continue;
		}

		if ('activity' === $component && 'activity_favorite' === $id) {
			continue;
		}

		strap_buddypress_add_default_button_classes($processor);
		if ('activity' === $component && 'activity_comment_reply' === $id) {
			$processor->add_class('strap-bp-button-small');
			$processor->add_class('has-small-font-size');
		}
	}

	return $has_button ? $processor->get_updated_html() : $contents;
}
add_filter('bp_get_button', 'strap_buddypress_map_button_presentation', 20, 3);

/**
 * Attach the selected horizontal-navigation treatment to Nouveau's compatible
 * directory, sub-navigation, and horizontal object-navigation roots.
 *
 * The bridge preserves Nouveau's list, item, link, current, and priority-nav
 * markup while exposing the structural classes consumed by core/navigation.
 *
 * @param string $html Rendered BuddyPress markup.
 * @return string
 */
function strap_buddypress_render_horizontal_navigation_presentation($html)
{
	if (! class_exists('WP_HTML_Tag_Processor') || 'native' === strap_buddypress_get_component_treatment('directory_navigation')) {
		return $html;
	}

	$processor = new WP_HTML_Tag_Processor($html);
	$open_tags = array();
	$void_tags = array('AREA', 'BASE', 'BR', 'COL', 'EMBED', 'HR', 'IMG', 'INPUT', 'LINK', 'META', 'PARAM', 'SOURCE', 'TRACK', 'WBR');

	while ($processor->next_tag()) {
		$tag = (string) $processor->get_tag();

		if ($processor->is_tag_closer()) {
			if ($open_tags && $tag === end($open_tags)['tag']) {
				array_pop($open_tags);
			}
			continue;
		}

		// An embedded Primary Navigation block has its own Single Navigation
		// owner, even when Nouveau calls its native root "horizontal".
		if ($processor->has_class('wp-block-bp-primary-nav') || $processor->has_class('strap-bp-inner-sidebar')) {
			$depth = 1;
			while ($processor->next_tag(array('tag_closers' => 'visit'))) {
				if ($tag === $processor->get_tag()) {
					$depth += $processor->is_tag_closer() ? -1 : 1;
				}
				if (0 === $depth) {
					break;
				}
			}
			continue;
		}
		$parent              = $open_tags ? end($open_tags) : array();
		$is_horizontal_root  = strap_buddypress_processor_has_class($processor, 'dir-navs') || strap_buddypress_processor_has_class($processor, 'bp-subnavs') || ('object-nav' === (string) $processor->get_attribute('id') && strap_buddypress_processor_has_class($processor, 'horizontal'));
		$is_navigation_list  = 'UL' === $tag && ! empty($parent['horizontal_root']);
		$is_navigation_item  = 'LI' === $tag && ! empty($parent['navigation_list']);
		$is_navigation_link  = 'A' === $tag && ! empty($parent['navigation_item']);
		$stack_entry         = array(
			'tag'             => $tag,
			'horizontal_root' => false,
			'navigation_list' => false,
			'navigation_item' => false,
			'current_item'    => false,
		);

		if (strap_buddypress_processor_has_class($processor, 'bp-priority-nav-more-toggle')) {
			$processor->set_attribute('tabindex', '0');
		}

		if ($is_horizontal_root) {
			strap_buddypress_add_component_treatment_classes($processor, 'directory_navigation');
			$stack_entry['horizontal_root'] = true;
		} elseif ($is_navigation_list) {
			$processor->add_class('wp-block-navigation__container');
			$stack_entry['navigation_list'] = true;
		} elseif ($is_navigation_item) {
			$processor->add_class('wp-block-navigation-item');
			if (strap_buddypress_processor_has_class($processor, 'current') || strap_buddypress_processor_has_class($processor, 'selected')) {
				$processor->add_class('current-menu-item');
				$stack_entry['current_item'] = true;
			}
			$stack_entry['navigation_item'] = true;
		} elseif ($is_navigation_link) {
			$processor->add_class('wp-block-navigation-item__content');
			if (! empty($parent['current_item'])) {
				$processor->set_attribute('aria-current', 'page');
			}
		}

		if (! in_array($tag, $void_tags, true)) {
			$open_tags[] = $stack_entry;
		}
	}

	return $processor->get_updated_html();
}

/**
 * Make Nouveau's sidebar-navigation check account for SystemStrap pattern navs.
 *
 * Nouveau's bp_nouveau_is_object_nav_in_sidebar() only scans persisted Widgets
 * sidebars. SystemStrap renders bp/primary-nav from the dedicated inner-sidebar
 * pattern, so expose a request-only widget sentinel to Nouveau's existing check.
 *
 * The real navigation is rendered by the theme pattern. The sentinel exists
 * only to prevent Nouveau from rendering its duplicate inline object nav.
 *
 * @return string
 */
function strap_buddypress_inner_shell()
{
	return strap_buddypress_is_member_profile() ? 'member' : (strap_buddypress_is_group_profile() ? 'group' : '');
}

/**
 * Determine whether the current inner shell owns a pattern-rendered Primary Nav.
 *
 * @return bool
 */
function strap_buddypress_has_sidebar_primary_navigation()
{
	$object = strap_buddypress_inner_shell();

	if ('' === $object) {
		return false;
	}

	if (! locate_template('parts/part-buddypress-' . $object . '-inner.html', false, false)) {
		return false;
	}

	return (bool) locate_template(
		'patterns/sidebar-buddypress-' . $object . '-inner.php',
		false,
		false
	);
}

/**
 * Keep Nouveau's horizontal priority-menu runtime off treated vertical navs.
 *
 * @param string        $class   Space-separated Nouveau navigation classes.
 * @param array<string> $classes Nouveau navigation classes before joining.
 * @return string
 */
function strap_buddypress_normalize_vertical_primary_navigation($class, $classes)
{
	if ('native' === strap_buddypress_get_component_treatment('single_navigation') || ! strap_buddypress_has_sidebar_primary_navigation()) {
		return $class;
	}

	if (in_array('vertical', $classes, true) && in_array('bp-priority-nav', $classes, true)) {
		$classes = array_values(array_diff($classes, array('bp-priority-nav')));
		$class   = implode(' ', $classes);
	}

	return $class;
}
add_filter('bp_nouveau_get_single_item_nav_classes', 'strap_buddypress_normalize_vertical_primary_navigation', 20, 2);

/**
 * Add a request-only Primary Navigation block to Nouveau's widget scan.
 *
 * This is an ownership sentinel only. The real bp/primary-nav block is rendered
 * directly by the SystemStrap inner-sidebar pattern. Never render this sentinel.
 *
 * @param mixed $widget_blocks Stored widget block instances.
 * @return array<string, mixed>
 */
function strap_buddypress_add_sidebar_primary_navigation_widget_block($widget_blocks)
{
	if (! strap_buddypress_has_sidebar_primary_navigation()) {
		return is_array($widget_blocks) ? $widget_blocks : array();
	}

	$widget_blocks = is_array($widget_blocks) ? $widget_blocks : array();

	$widget_blocks['systemstrap-buddypress-sidebar-primary-nav'] = array(
		'content' => '<!-- wp:bp/primary-nav /-->',
	);

	return $widget_blocks;
}
add_filter('option_widget_block', 'strap_buddypress_add_sidebar_primary_navigation_widget_block', 10, 1);
add_filter('default_option_widget_block', 'strap_buddypress_add_sidebar_primary_navigation_widget_block', 10, 1);

/**
 * Add the request-only sentinel to a synthetic widget sidebar so Nouveau's
 * supported sidebar-navigation check suppresses its inline object navigation.
 *
 * @param mixed $sidebars_widgets Active widget sidebars.
 * @return array<string, mixed>
 */
function strap_buddypress_add_sidebar_primary_navigation_widget_area($sidebars_widgets)
{
	if (! strap_buddypress_has_sidebar_primary_navigation()) {
		return is_array($sidebars_widgets) ? $sidebars_widgets : array();
	}

	$sidebars_widgets = is_array($sidebars_widgets) ? $sidebars_widgets : array();
	$sidebars_widgets['systemstrap-buddypress-sidebar'] = array(
		'block-systemstrap-buddypress-sidebar-primary-nav',
	);

	return $sidebars_widgets;
}
add_filter('sidebars_widgets', 'strap_buddypress_add_sidebar_primary_navigation_widget_area');

/**
 * Give Nouveau's single-group member loop the canonical member-list identity.
 *
 * Nouveau deliberately names this loop `members-group-list`, while the shared
 * Member Directory card contract consumes `members-list` in every context.
 * Preserve the native class and add the common structural role.
 *
 * @param array<int, string> $classes   Nouveau loop classes.
 * @param string             $component Nouveau loop component.
 * @return array<int, string>
 */
function strap_buddypress_normalize_group_member_loop_classes($classes, $component)
{
	if ('members_group' !== $component || 'native' === strap_buddypress_get_component_treatment('member_directory')) {
		return $classes;
	}

	$classes   = is_array($classes) ? $classes : array();
	$classes[] = 'members-list';

	return array_values(array_unique($classes));
}
add_filter('bp_nouveau_get_loop_classes', 'strap_buddypress_normalize_group_member_loop_classes', 20, 2);

/**
 * Normalize the potential-invite display name before Nouveau's escaped
 * Underscore interpolation owns final output escaping.
 *
 * WP_User display names can contain an already encoded entity. Passing that
 * value to Nouveau's `{{ data.name }}` template escapes it a second time and
 * exposes the entity text. Decode only this plain-text response field; the
 * client template continues to escape the resulting display name.
 *
 * @param array<string, mixed> $response Potential invite response.
 * @return array<string, mixed>
 */
function strap_buddypress_normalize_group_invite_display_name($response)
{
	if (isset($response['name']) && is_string($response['name'])) {
		$response['name'] = wp_specialchars_decode($response['name'], ENT_QUOTES);
	}

	return $response;
}
add_filter('bp_nouveau_prepare_group_potential_invites_for_js', 'strap_buddypress_normalize_group_invite_display_name', 20, 1);

function strap_buddypress_enqueue_nouveau_assets()
{
	if (! wp_style_is('bp-nouveau', 'enqueued')) {
		return;
	}

	$ownership = strap_buddypress_get_screen_component_ownership();

	wp_enqueue_style('strap-buddypress-typography');
	wp_enqueue_style('strap-buddypress-inner-shell');
	if (strap_buddypress_has_system_pagination()) {
		wp_enqueue_style('strap-system-ui-pagination');
	}
	wp_enqueue_style('strap-buddypress-components');

	if ($ownership['activity_stream']) {
		strap_buddypress_enqueue_component_treatment_asset('activity_stream');
	}
	if ($ownership['activity_composer']) {
		strap_buddypress_enqueue_component_treatment_asset('activity_composer');
		if ('native' !== strap_buddypress_get_component_treatment('activity_composer')) {
			wp_enqueue_script('strap-buddypress-button-roles');
		}
	}
	if ($ownership['directory_navigation'] || $ownership['single_navigation']) {
		strap_buddypress_enqueue_component_treatment_asset('directory_navigation');
	}
	if ($ownership['directory_navigation'] && 'native' !== strap_buddypress_get_component_treatment('directory_navigation')) {
		wp_enqueue_script('strap-buddypress-members-directory-navigation');
	}
	$is_member_editor_screen = (function_exists('bp_is_user_messages') && bp_is_user_messages()) || (function_exists('bp_is_user_profile_edit') && bp_is_user_profile_edit());
	if ($is_member_editor_screen && $ownership['member_profile'] && 'native' !== strap_buddypress_get_component_treatment('member_profile')) {
		wp_enqueue_script('strap-buddypress-message-editor');
	}
}
add_action('bp_enqueue_community_scripts', 'strap_buddypress_enqueue_nouveau_assets', 30);

/**
 * Enqueue the canonical physical asset declared by an effective treatment.
 *
 * @param string $component_id Registry component identifier.
 * @return void
 */
function strap_buddypress_enqueue_component_treatment_asset($component_id)
{
	$registry = strap_buddypress_component_registry();
	if (! isset($registry[$component_id])) {
		return;
	}

	$treatment = strap_buddypress_get_component_treatment($component_id);
	$handle    = $registry[$component_id]['treatments'][$treatment]['theme_style_handle'] ?? '';
	if (is_string($handle) && '' !== $handle) {
		wp_enqueue_style($handle);
	}
}

function strap_buddypress_enqueue_editor_assets()
{
	wp_enqueue_style('strap-buddypress-editor');
}
add_action('enqueue_block_editor_assets', 'strap_buddypress_enqueue_editor_assets');

/**
 * Attach registry-declared presentation roles to stable Nouveau component roots.
 *
 * @param string $block_content Rendered post-content markup.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_buddypress_render_component_presentation($block_content, $block)
{
	if (! class_exists('WP_HTML_Tag_Processor')) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor($block_content);
	$ownership = strap_buddypress_get_screen_component_ownership();
	$load_more = false;
	$is_treated_group_create = function_exists('bp_is_group_create') && bp_is_group_create() && 'native' !== strap_buddypress_get_component_treatment('group_profile');

	$is_treated_registration = strap_buddypress_has_registration_treatment();
	if (! array_filter($ownership) && ! $is_treated_group_create && ! $is_treated_registration) {
		return $block_content;
	}

	while ($processor->next_tag()) {
		$id        = (string) $processor->get_attribute('id');
		$list_type = (string) $processor->get_attribute('data-bp-list');
		$name      = (string) $processor->get_attribute('name');
		if ($is_treated_registration && 'register-page' === $id) {
			$processor->add_class('strap-bp-controls-system-scope');
		}

		if ('delete-group-button' === $id) {
			strap_buddypress_add_default_button_classes($processor, false);
			$processor->add_class('strap-bp-danger-button');
			$processor->add_class('has-danger-background-color');
			$processor->add_class('has-background');
		}

		if (strap_buddypress_is_default_button_control($processor)) {
			strap_buddypress_add_default_button_classes($processor);
			if (strap_buddypress_processor_has_class($processor, 'large') && strap_buddypress_processor_has_class($processor, 'button-primary')) {
				$processor->add_class('strap-bp-button-small');
				$processor->add_class('has-small-font-size');
			}
			if ('ac_form_submit' === $name) {
				$processor->add_class('strap-bp-button-small');
				$processor->add_class('has-small-font-size');
			}
		}

		if ('LI' === (string) $processor->get_tag() && strap_buddypress_processor_has_class($processor, 'load-more')) {
			$load_more = true;
		} elseif ($load_more && 'A' === (string) $processor->get_tag()) {
			strap_buddypress_add_default_button_classes($processor);
			$processor->add_class('strap-bp-load-more-button');
			$load_more = false;
		}

		if ($ownership['activity_stream'] && 'activity-stream' === $id) {
			strap_buddypress_add_component_treatment_classes($processor, 'activity_stream');
		}
		if ($ownership['activity_composer'] && 'bp-nouveau-activity-form' === $id) {
			strap_buddypress_add_component_treatment_classes($processor, 'activity_composer');
		}
		if ('create-group-form' === $id && $is_treated_group_create) {
			$processor->add_class('strap-bp-controls-system-scope');
		}
		if ($ownership['member_directory'] && ('members-dir-list' === $id || 'members-group-list' === $id || in_array($list_type, array('friends', 'friendship_requests'), true))) {
			strap_buddypress_add_component_treatment_classes($processor, 'member_directory');
		}
		if ($ownership['group_directory'] && ('groups-dir-list' === $id || 'groups' === $list_type)) {
			strap_buddypress_add_component_treatment_classes($processor, 'group_directory');
		}
		if ($ownership['site_directory'] && ('blogs-dir-list' === $id || 'blogs' === $list_type)) {
			strap_buddypress_add_component_treatment_classes($processor, 'site_directory');
		}
		if ('item-body' === $id && (($ownership['member_directory'] && 'native' !== strap_buddypress_get_component_treatment('member_directory')) || ($ownership['group_directory'] && 'native' !== strap_buddypress_get_component_treatment('group_directory')) || ($ownership['site_directory'] && 'native' !== strap_buddypress_get_component_treatment('site_directory')))) {
			$processor->add_class('strap-bp-delegated-directory-shell');
		}

		if (
			'item-body' === $id
			&& $ownership['activity_stream']
			&& 'native' !== strap_buddypress_get_component_treatment('activity_stream')
			&& (
				strap_buddypress_is_member_profile()
				|| strap_buddypress_is_group_profile()
			)
		) {
			$processor->add_class('strap-bp-delegated-activity-shell');
		}

		if ('item-body' === $id && $ownership['member_profile']) {
			strap_buddypress_add_component_treatment_classes($processor, 'member_profile');
		}
		if ('item-body' === $id && $ownership['group_profile']) {
			strap_buddypress_add_component_treatment_classes($processor, 'group_profile');
		}
		if ($ownership['single_navigation'] && 'object-nav' === $id && ! strap_buddypress_processor_has_class($processor, 'horizontal')) {
			strap_buddypress_add_component_treatment_classes($processor, 'single_navigation');
		}
	}

	return strap_buddypress_render_horizontal_navigation_presentation($processor->get_updated_html());
}
add_filter('render_block_core/post-content', 'strap_buddypress_render_component_presentation', 20, 2);

/**
 * Map Login Form block controls to the canonical Button classes while keeping
 * the native login form and registration link unchanged.
 *
 * @param string $block_content Rendered BuddyPress Login Form block markup.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_buddypress_render_login_form_button_presentation($block_content, $block)
{
	if (! class_exists('WP_HTML_Tag_Processor')) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor($block_content);
	while ($processor->next_tag()) {
		$id = (string) $processor->get_attribute('id');
		if ('bp-login-widget-submit' === $id) {
			strap_buddypress_add_default_button_classes($processor);
			$processor->add_class('strap-bp-button-full');
		}

		if (strap_buddypress_processor_has_class($processor, 'logout')) {
			strap_buddypress_add_default_button_classes($processor);
			$processor->add_class('strap-bp-button-small');
			$processor->add_class('has-small-font-size');
		}
	}

	return $processor->get_updated_html();
}
add_filter('render_block_bp/login-form', 'strap_buddypress_render_login_form_button_presentation', 20, 2);

/**
 * Apply the existing Single Navigation treatment to the primary-navigation block.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_buddypress_render_primary_navigation_presentation($block_content, $block)
{
	return strap_buddypress_render_sidebar_block($block_content, $block);
}
add_filter('render_block_bp/primary-nav', 'strap_buddypress_render_primary_navigation_presentation', 20, 2);

/**
 * Adapt selected widget roots without replacing BuddyPress content or handlers.
 * Wrapper-less multi-root widgets need one neutral shell; existing single-root
 * widgets keep their root. Default surfaces are returned without alteration.
 */
function strap_buddypress_render_sidebar_block($block_content, $block)
{
	$name = $block['blockName'] ?? '';
	if (! in_array($name, strap_buddypress_sidebar_blocks(), true) || ! is_string($block_content) || '' === trim($block_content) || ! class_exists('WP_HTML_Tag_Processor')) {
		return $block_content;
	}

	$authored = preg_split('/\s+/', (string) ($block['attrs']['className'] ?? ''));
	$style = in_array('is-style-system-flat-panel', $authored, true) ? 'system-flat-panel' : (in_array('is-style-system-panel', $authored, true) ? 'system-panel' : '');
	$is_navigation = 'bp/primary-nav' === $name;
	$navigation = $is_navigation ? strap_buddypress_get_component_treatment('single_navigation') : 'native';
	$processor = new WP_HTML_Tag_Processor($block_content);
	if (! $processor->next_tag()) {
		return $block_content;
	}

	// Remove legacy authored menu states even when Native is now selected.
	if ($is_navigation) {
		$registry = strap_buddypress_component_registry();
		do {
			foreach ($registry['single_navigation']['treatments'] as $key => $treatment) {
				$processor->remove_class('is-style-' . $key);
				foreach (explode(' ', $treatment['class'] ?? '') as $class) {
					if ('' !== $class) {
						$processor->remove_class($class);
					}
				}
			}
		} while ($processor->next_tag());
		$block_content = $processor->get_updated_html();
	}
	if ('' === $style && 'native' === $navigation) {
		return $block_content;
	}

	$root_class = 'wp-block-' . str_replace('/', '-', $name);
	$processor = new WP_HTML_Tag_Processor($block_content);
	$processor->next_tag();
	$has_root = $processor->has_class($root_class) || $processor->has_class('bp-dynamic-block-container') || $processor->has_class('bp-latest-activities-block') || $processor->has_class('bp-sitewide-notice-block');
	if (! $has_root) {
		$block_content = '<div class="' . esc_attr($root_class . ' buddypress') . '">' . $block_content . '</div>';
		$processor = new WP_HTML_Tag_Processor($block_content);
		$processor->next_tag();
	}
	$processor->add_class($root_class);
	if ($is_navigation) {
		$processor->add_class('buddypress_object_nav');
	}
	if ('' !== $style) {
		$processor->remove_class('is-style-default');
		$processor->add_class('is-style-' . $style);
		$processor->add_class('strap-bp-sidebar-panel');
		$processor->add_class('strap-panel-surface');
		if ('system-flat-panel' === $style) {
			$processor->remove_class('is-style-system-panel');
		}
	}
	if ($is_navigation && 'native' !== $navigation) {
		strap_buddypress_add_component_treatment_classes($processor, 'single_navigation');
		wp_enqueue_style('strap-buddypress-single-navigation');
	}
	if ('' !== $style && 'bp/sitewide-notices' === $name) {
		while ($processor->next_tag()) {
			if ($processor->has_class('dismiss-notice')) {
				$processor->remove_class('button');
				$processor->add_class('strap-icon-button');
			}
		}
	}
	return $processor->get_updated_html();
}

function strap_buddypress_register_sidebar_render_filters()
{
	foreach (strap_buddypress_sidebar_blocks() as $name) {
		if ('bp/primary-nav' !== $name) {
			add_filter('render_block_' . $name, 'strap_buddypress_render_sidebar_block', 25, 2);
		}
	}
}
add_action('init', 'strap_buddypress_register_sidebar_render_filters', 21);

/**
 * Preserve the companion's semantic improvements without its CSS ownership.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_buddypress_dynamic_directory_semantics($block_content, $block)
{
	$labels = array('bp/dynamic-members' => array('Members directory', 'Member sorting options', 'Members'), 'bp/dynamic-groups' => array('Groups directory', 'Group sorting options', 'Groups'));
	$name   = $block['blockName'] ?? '';
	if (! isset($labels[$name]) || ! class_exists('WP_HTML_Tag_Processor')) {
		return $block_content;
	}
	$processor = new WP_HTML_Tag_Processor($block_content);
	if (! $processor->next_tag()) {
		return $block_content;
	}
	$processor->set_attribute('role', 'region');
	$processor->set_attribute('aria-label', $labels[$name][0]);
	if ($processor->next_tag(array('tag_name' => 'DIV', 'class_name' => 'item-options'))) {
		$processor->set_attribute('aria-label', $labels[$name][1]);
	}
	if ($processor->next_tag(array('tag_name' => 'UL', 'class_name' => 'item-list'))) {
		$processor->set_attribute('role', 'list');
		$processor->set_attribute('aria-label', $labels[$name][2]);
	}
	return $processor->get_updated_html();
}
add_filter('render_block_bp/dynamic-members', 'strap_buddypress_dynamic_directory_semantics', 10, 2);
add_filter('render_block_bp/dynamic-groups', 'strap_buddypress_dynamic_directory_semantics', 10, 2);

/**
 * Output the current Group's cover image inside each standard Nouveau directory item.
 *
 * The hook is emitted during normal loop rendering and BuddyPress AJAX refreshes.
 *
 * @return void
 */
function strap_buddypress_render_directory_group_cover()
{
	if (! function_exists('bp_get_group_cover_url') || ! function_exists('bp_get_group_name')) {
		return;
	}

	$cover_url = bp_get_group_cover_url();
	if ('' === $cover_url) {
		return;
	}

	printf(
		'<div class="strap-bp-group-card-cover"><img src="%1$s" alt="%2$s" /></div>',
		esc_url($cover_url),
		esc_attr(sprintf(__('%s group cover', 'systemstrap'), bp_get_group_name()))
	);
}
add_action('bp_directory_groups_item', 'strap_buddypress_render_directory_group_cover', 10);
