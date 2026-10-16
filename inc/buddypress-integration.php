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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return the authoritative BuddyPress presentation registry.
 *
 * @return array<string, array<string, mixed>>
 */
function strap_buddypress_component_registry() {
	$panel_treatments = array(
		'native'               => array( 'label' => __( 'Native BuddyPress', 'systemstrap' ) ),
		'system-panel-bp'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-panel-surface strap-bp-treatment-system-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-panel-surface' ),
		'system-flat-panel-bp' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-panel-surface is-style-system-flat-panel strap-bp-treatment-system-flat-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-panel-surface' ),
	);
	$activity_stream_treatments = array(
		'native'               => array( 'label' => __( 'Native BuddyPress', 'systemstrap' ) ),
		'system-flat-list-bp'  => array( 'label' => __( 'System Flat List', 'systemstrap' ), 'class' => 'strap-comments-thread is-style-system-flat-list strap-bp-treatment-system-flat-list', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-buddypress-activity-system-list' ),
		'system-list-bp'       => array( 'label' => __( 'System List', 'systemstrap' ), 'class' => 'strap-comments-thread is-style-system-list strap-bp-treatment-system-list', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-buddypress-activity-system-list' ),
		'system-flat-panel-bp' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-comments-thread is-style-system-flat-panel strap-bp-treatment-system-flat-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-buddypress-activity-system-flat-panel' ),
		'system-panel-bp'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-comments-thread is-style-system-panel strap-bp-treatment-system-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-buddypress-activity-system-panel' ),
	);
	$directory_treatments = array(
		'native'               => array( 'label' => __( 'Native BuddyPress', 'systemstrap' ) ),
		'system-panel-bp'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-bp-treatment-system-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-panel-surface' ),
		'system-flat-panel-bp' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-bp-treatment-system-flat-panel', 'stylesheet' => 'buddypress-components.css', 'theme_style_handle' => 'strap-panel-surface' ),
	);
	$navigation_treatments = array(
		'native'           => array( 'label' => __( 'Native BuddyPress', 'systemstrap' ) ),
		'system-nav'       => array( 'label' => __( 'System Navigation', 'systemstrap' ), 'class' => 'strap-bp-navigation-treatment-system-nav' ),
		'system-list'      => array( 'label' => __( 'System List', 'systemstrap' ), 'class' => 'strap-bp-navigation-treatment-system-list' ),
		'system-flat-list' => array( 'label' => __( 'System Flat List', 'systemstrap' ), 'class' => 'strap-bp-navigation-treatment-system-flat-list' ),
	);
	$horizontal_navigation_treatments = array(
		'native'            => array( 'label' => __( 'Native BuddyPress', 'systemstrap' ) ),
		'wp-default'        => array( 'label' => __( 'WP Default', 'systemstrap' ), 'class' => 'wp-block-navigation strap-bp-horizontal-navigation strap-bp-horizontal-navigation-treatment-wp-default' ),
		'system-nav-button' => array( 'label' => __( 'System Nav Button', 'systemstrap' ), 'class' => 'wp-block-navigation is-style-system-nav-button strap-bp-horizontal-navigation strap-bp-horizontal-navigation-treatment-system-nav-button', 'theme_style_handle' => 'core-navigation-system-nav-button' ),
		'system-nav-gen'    => array( 'label' => __( 'System Nav Gen', 'systemstrap' ), 'class' => 'wp-block-navigation is-style-system-nav-gen strap-bp-horizontal-navigation strap-bp-horizontal-navigation-treatment-system-nav-gen', 'theme_style_handle' => 'core-navigation-system-nav-gen' ),
	);

	return array(
		'activity_stream'       => array( 'label' => __( 'Activity Stream', 'systemstrap' ), 'default' => 'native', 'application' => 'admin_mapping', 'targets' => array( '#activity-stream', '.activity-list.bp-list', '.activity-list > .activity-item' ), 'treatments' => $activity_stream_treatments ),
		'activity_composer'     => array( 'label' => __( 'Activity Composer', 'systemstrap' ), 'default' => 'native', 'application' => 'admin_mapping', 'targets' => array( '.activity-update-form', '#bp-nouveau-activity-form', '#whats-new-form' ), 'treatments' => $panel_treatments ),
		'member_directory'      => array( 'label' => __( 'Member Directory', 'systemstrap' ), 'default' => 'native', 'application' => 'admin_mapping', 'targets' => array( '#members-dir-list[data-bp-list="members"]', '#members-group-list[data-bp-list="members"]', '.members.friends[data-bp-list="friends"]' ), 'treatments' => $directory_treatments ),
		'group_directory'       => array( 'label' => __( 'Group Directory', 'systemstrap' ), 'default' => 'native', 'application' => 'admin_mapping', 'targets' => array( '#groups-dir-list[data-bp-list="groups"]', '.groups.mygroups[data-bp-list="groups"]' ), 'treatments' => $directory_treatments ),
		'member_profile'        => array( 'label' => __( 'Member Profile', 'systemstrap' ), 'default' => 'native', 'application' => 'admin_mapping', 'targets' => array( '#item-body.item-body' ), 'treatments' => $panel_treatments ),
		'group_profile'         => array( 'label' => __( 'Group Profile', 'systemstrap' ), 'default' => 'native', 'application' => 'admin_mapping', 'targets' => array( '#item-body.item-body' ), 'treatments' => $panel_treatments ),
		'directory_navigation'  => array( 'label' => __( 'Horizontal Navigation', 'systemstrap' ), 'default' => 'native', 'application' => 'admin_mapping', 'targets' => array( '.main-navs.dir-navs', '.bp-subnavs', '#object-nav.horizontal' ), 'legacy_treatments' => array( 'system-nav' => 'system-nav-gen', 'system-list' => 'wp-default', 'system-flat-list' => 'wp-default' ), 'treatments' => $horizontal_navigation_treatments ),
		'single_navigation'     => array( 'label' => __( 'Single Navigation', 'systemstrap' ), 'default' => 'native', 'application' => 'admin_mapping', 'targets' => array( '#object-nav.vertical', '.wp-block-bp-primary-nav' ), 'treatments' => $navigation_treatments ),
		'feedback_notices'      => array( 'label' => __( 'Feedback Notices', 'systemstrap' ), 'default' => 'native', 'application' => 'fixed', 'targets' => array( '.bp-feedback', '.bp-template-notice', '.bp-messages' ), 'treatments' => array( 'native' => array( 'label' => __( 'Native BuddyPress', 'systemstrap' ) ) ) ),
		'default_button_style'  => array( 'label' => __( 'Default Button Style', 'systemstrap' ), 'default' => 'primary', 'application' => 'admin_mapping', 'targets' => array( 'primary transactional BuddyPress buttons' ), 'treatments' => array( 'primary' => array( 'label' => __( 'Primary', 'systemstrap' ) ), 'secondary' => array( 'label' => __( 'Secondary', 'systemstrap' ) ), 'link' => array( 'label' => __( 'Link', 'systemstrap' ) ), 'pill' => array( 'label' => __( 'Pill', 'systemstrap' ) ), 'pill-outline' => array( 'label' => __( 'Pill Outline', 'systemstrap' ) ), 'square' => array( 'label' => __( 'Square', 'systemstrap' ) ), 'square-outline' => array( 'label' => __( 'Square Outline', 'systemstrap' ) ) ) ),
	);
}

/**
 * Resolve one BuddyPress treatment without materializing defaults.
 *
 * @param string $component_id Registry component identifier.
 * @return string
 */
function strap_buddypress_get_component_treatment( $component_id ) {
	$registry = strap_buddypress_component_registry();
	if ( ! isset( $registry[ $component_id ] ) ) {
		return '';
	}

	$component = $registry[ $component_id ];
	$default   = sanitize_key( $component['default'] ?? '' );
	$stored    = get_option( 'strap_buddypress_component_mappings', array() );
	$stored    = is_array( $stored ) ? $stored : array();
	$value     = isset( $stored[ $component_id ] ) && is_string( $stored[ $component_id ] ) ? sanitize_key( $stored[ $component_id ] ) : $default;
	$legacy    = $component['legacy_treatments'] ?? array();

	if ( is_array( $legacy ) && isset( $legacy[ $value ] ) && is_string( $legacy[ $value ] ) ) {
		$value = $legacy[ $value ];
	}

	return isset( $component['treatments'][ $value ] ) ? $value : $default;
}

/**
 * Resolve the request-level class for the selected canonical Button treatment.
 *
 * The root class also covers Nouveau controls injected after server render.
 *
 * @return string
 */
function strap_buddypress_get_default_button_style_class() {
	return 'strap-bp-default-button-style-' . sanitize_html_class( strap_buddypress_get_component_treatment( 'default_button_style' ) );
}

/**
 * Add the selected default Button treatment to BuddyPress requests only.
 *
 * @param array<int, string> $classes Existing body classes.
 * @return array<int, string>
 */
function strap_buddypress_add_default_button_style_body_class( $classes ) {
	if ( is_admin() || ! class_exists( 'BuddyPress' ) ) {
		return $classes;
	}

	$classes[] = strap_buddypress_get_default_button_style_class();

	return array_values( array_unique( $classes ) );
}
add_filter( 'body_class', 'strap_buddypress_add_default_button_style_body_class' );

/**
 * Return the registry-declared classes for an effective component treatment.
 *
 * @param string $component_id Registry component identifier.
 * @return array<int, string>
 */
function strap_buddypress_get_component_treatment_classes( $component_id ) {
	$registry  = strap_buddypress_component_registry();
	$treatment = strap_buddypress_get_component_treatment( $component_id );
	$classes   = $registry[ $component_id ]['treatments'][ $treatment ]['class'] ?? '';

	if ( ! is_string( $classes ) || '' === trim( $classes ) ) {
		return array();
	}

	return array_values(
		array_filter(
			preg_split( '/\s+/', trim( $classes ) ),
			static function( $class_name ) {
				return is_string( $class_name ) && $class_name === sanitize_html_class( $class_name );
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
function strap_buddypress_add_component_treatment_classes( $processor, $component_id ) {
	foreach ( strap_buddypress_get_component_treatment_classes( $component_id ) as $class_name ) {
		$processor->add_class( $class_name );
	}
}

/**
 * Sanitize submitted BuddyPress mappings against the registry.
 *
 * @param mixed $mappings Submitted values.
 * @return array<string, string>
 */
function strap_buddypress_sanitize_component_mappings( $mappings ) {
	$valid     = array();
	$registry  = strap_buddypress_component_registry();
	$mappings  = is_array( $mappings ) ? $mappings : array();

	foreach ( $registry as $component_id => $component ) {
		if ( 'admin_mapping' !== ( $component['application'] ?? '' ) || ! isset( $mappings[ $component_id ] ) || ! is_string( $mappings[ $component_id ] ) ) {
			continue;
		}
		$treatment = sanitize_key( $mappings[ $component_id ] );
		$legacy    = $component['legacy_treatments'] ?? array();
		if ( is_array( $legacy ) && isset( $legacy[ $treatment ] ) && is_string( $legacy[ $treatment ] ) ) {
			$treatment = $legacy[ $treatment ];
		}
		if ( isset( $component['treatments'][ $treatment ] ) ) {
			$valid[ $component_id ] = $treatment;
		}
	}

	return $valid;
}

function strap_buddypress_register_component_mapping_settings() {
	register_setting( 'systemstrap_buddypress_mappings', 'strap_buddypress_component_mappings', array( 'type' => 'array', 'sanitize_callback' => 'strap_buddypress_sanitize_component_mappings', 'default' => array() ) );
}
add_action( 'admin_init', 'strap_buddypress_register_component_mapping_settings' );

function strap_buddypress_register_component_mapping_page() {
	add_options_page( __( 'SystemStrap BuddyPress', 'systemstrap' ), __( 'SystemStrap BuddyPress', 'systemstrap' ), 'manage_options', 'systemstrap-buddypress', 'strap_buddypress_render_component_mapping_page' );
}
add_action( 'admin_menu', 'strap_buddypress_register_component_mapping_page' );

function strap_buddypress_render_component_mapping_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'SystemStrap BuddyPress', 'systemstrap' ); ?></h1>
		<p><?php esc_html_e( 'Choose the active presentation for each supported BuddyPress component. Missing settings resolve to the declared SystemStrap default.', 'systemstrap' ); ?></p>
		<form action="options.php" method="post">
			<?php settings_fields( 'systemstrap_buddypress_mappings' ); ?>
			<table class="form-table" role="presentation"><tbody>
			<?php foreach ( strap_buddypress_component_registry() as $component_id => $component ) : ?>
				<?php if ( 'admin_mapping' !== ( $component['application'] ?? '' ) ) : ?>
					<?php continue; ?>
				<?php endif; ?>
				<tr><th scope="row"><label for="strap-buddypress-<?php echo esc_attr( $component_id ); ?>"><?php echo esc_html( $component['label'] ); ?></label></th><td>
					<select class="regular-text" id="strap-buddypress-<?php echo esc_attr( $component_id ); ?>" name="strap_buddypress_component_mappings[<?php echo esc_attr( $component_id ); ?>]">
					<?php foreach ( $component['treatments'] as $treatment_id => $treatment ) : ?>
						<option value="<?php echo esc_attr( $treatment_id ); ?>" <?php selected( strap_buddypress_get_component_treatment( $component_id ), $treatment_id ); ?>><?php echo esc_html( $treatment['label'] ); ?></option>
					<?php endforeach; ?>
					</select>
				</td></tr>
			<?php endforeach; ?>
			</tbody></table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}

/**
 * Register theme-owned Nouveau assets with physical modification versions.
 */
function strap_buddypress_register_assets() {
	$directory = get_template_directory() . '/assets/css/buddypress/';
	$uri       = get_template_directory_uri() . '/assets/css/buddypress/';
	$script     = get_template_directory() . '/assets/js/buddypress-members-directory-navigation.js';
	$variation_directory = get_template_directory() . '/assets/css/style-variations/';
	$variation_uri       = get_template_directory_uri() . '/assets/css/style-variations/';
	$assets    = array(
		'strap-buddypress-typography'          => array( 'file' => 'buddypress-typography.css', 'deps' => array( 'bp-nouveau' ) ),
		'strap-buddypress-components'          => array( 'file' => 'buddypress-components.css', 'deps' => array( 'strap-buddypress-typography', 'strap-panel-surface' ) ),
	);
	$activity_assets = array(
		// Nouveau -> SystemStrap bridge -> canonical Comments treatment.
		'strap-buddypress-activity-system-list'       => array( 'file' => 'core-comments-system-list.css', 'deps' => array( 'strap-buddypress-components' ) ),
		'strap-buddypress-activity-system-panel'      => array( 'file' => 'core-comments-system-panel.css', 'deps' => array( 'strap-buddypress-components', 'strap-panel-surface', 'strap-panel-structure' ) ),
		'strap-buddypress-activity-system-flat-panel' => array( 'file' => 'core-comments-system-flat-panel.css', 'deps' => array( 'strap-buddypress-components', 'strap-panel-surface', 'strap-panel-structure' ) ),
	);

	foreach ( $assets as $handle => $asset ) {
		$path = $directory . $asset['file'];
		if ( file_exists( $path ) ) {
			wp_register_style( $handle, $uri . $asset['file'], $asset['deps'], filemtime( $path ) );
		}
	}

	foreach ( $activity_assets as $handle => $asset ) {
		$path = $variation_directory . $asset['file'];
		if ( file_exists( $path ) ) {
			wp_register_style( $handle, $variation_uri . $asset['file'], $asset['deps'], filemtime( $path ) );
		}
	}

	if ( file_exists( $script ) ) {
		wp_register_script(
			'strap-buddypress-members-directory-navigation',
			get_template_directory_uri() . '/assets/js/buddypress-members-directory-navigation.js',
			array( 'bp-nouveau' ),
			filemtime( $script ),
			true
		);
	}
}
add_action( 'bp_enqueue_community_scripts', 'strap_buddypress_register_assets', 20 );

/**
 * Register the editor-only BuddyPress stylesheet independently of Nouveau.
 */
function strap_buddypress_register_editor_asset() {
	$path = get_template_directory() . '/assets/css/buddypress/buddypress-editor.css';

	if ( file_exists( $path ) ) {
		wp_register_style(
			'strap-buddypress-editor',
			get_template_directory_uri() . '/assets/css/buddypress/buddypress-editor.css',
			array( 'wp-edit-blocks' ),
			filemtime( $path )
		);
	}
}
add_action( 'init', 'strap_buddypress_register_editor_asset', 20 );

/**
 * Expose the shared Single Navigation treatments in the Primary Navigation
 * block UI. Frontend context still resolves through the registry adapter.
 */
function strap_buddypress_register_primary_navigation_styles() {
	if ( ! function_exists( 'register_block_style' ) ) {
		return;
	}

	$styles = array(
		'system-nav'       => __( 'System Navigation', 'systemstrap' ),
		'system-list'      => __( 'System List', 'systemstrap' ),
		'system-flat-list' => __( 'System Flat List', 'systemstrap' ),
	);

	foreach ( $styles as $name => $label ) {
		register_block_style(
			'bp/primary-nav',
			array(
				'name'         => $name,
				'label'        => $label,
				'style_handle' => 'strap-buddypress-components',
			)
		);
	}
}
add_action( 'init', 'strap_buddypress_register_primary_navigation_styles', 30 );

/**
 * True only on the Activity directory, where the Phase 4 presentation applies.
 *
 * @return bool
 */
function strap_buddypress_is_activity_directory() {
	return function_exists( 'bp_is_activity_directory' ) && bp_is_activity_directory();
}

function strap_buddypress_is_members_directory() {
	return function_exists( 'bp_is_members_directory' ) && bp_is_members_directory();
}

function strap_buddypress_is_groups_directory() {
	return function_exists( 'bp_is_groups_directory' ) && bp_is_groups_directory();
}

function strap_buddypress_is_blogs_directory() {
	return function_exists( 'bp_is_blogs_directory' ) && bp_is_blogs_directory();
}

function strap_buddypress_is_member_profile() {
	return function_exists( 'bp_is_user' ) && bp_is_user();
}

function strap_buddypress_is_group_profile() {
	return function_exists( 'bp_is_group' ) && bp_is_group();
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
function strap_buddypress_get_screen_component_ownership() {
	$ownership = array(
		'activity_stream'      => false,
		'activity_composer'    => false,
		'member_directory'     => false,
		'group_directory'      => false,
		'member_profile'       => false,
		'group_profile'        => false,
		'directory_navigation' => false,
		'single_navigation'    => false,
	);

	if ( ! function_exists( 'is_buddypress' ) || ! is_buddypress() ) {
		return $ownership;
	}

	if ( strap_buddypress_is_activity_directory() ) {
		$ownership['activity_stream']      = true;
		$ownership['activity_composer']    = true;
		$ownership['directory_navigation'] = true;
		return $ownership;
	}

	if ( strap_buddypress_is_members_directory() ) {
		$ownership['member_directory']     = true;
		$ownership['directory_navigation'] = true;
		return $ownership;
	}

	if ( strap_buddypress_is_groups_directory() ) {
		$ownership['group_directory']      = true;
		$ownership['directory_navigation'] = true;
		return $ownership;
	}

	if ( strap_buddypress_is_blogs_directory() ) {
		$ownership['directory_navigation'] = true;
		return $ownership;
	}

	if ( strap_buddypress_is_member_profile() ) {
		$ownership['single_navigation']    = true;
		$ownership['directory_navigation'] = true;

		if ( function_exists( 'bp_is_user_activity' ) && bp_is_user_activity() ) {
			$ownership['activity_stream']   = true;
			$ownership['activity_composer'] = true;
		} elseif ( function_exists( 'bp_is_user_friends' ) && bp_is_user_friends() ) {
			$ownership['member_directory'] = true;
		} elseif ( function_exists( 'bp_is_user_groups' ) && bp_is_user_groups() ) {
			$ownership['group_directory'] = true;
		} else {
			// Nouveau routes all other core and extension member screens through #item-body.
			$ownership['member_profile'] = true;
		}

		return $ownership;
	}

	if ( strap_buddypress_is_group_profile() ) {
		$ownership['single_navigation']    = true;
		$ownership['directory_navigation'] = true;

		if ( function_exists( 'bp_is_group_activity' ) && bp_is_group_activity() ) {
			$ownership['activity_stream']   = true;
			$ownership['activity_composer'] = true;
		} elseif ( function_exists( 'bp_is_group_members' ) && bp_is_group_members() ) {
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
function strap_buddypress_processor_has_class( $processor, $class_name ) {
	$classes = preg_split( '/\s+/', trim( (string) $processor->get_attribute( 'class' ) ) );
	return is_array( $classes ) && in_array( $class_name, $classes, true );
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
function strap_buddypress_is_default_button_control( $processor ) {
	$tag     = (string) $processor->get_tag();
	$classes = preg_split( '/\s+/', trim( (string) $processor->get_attribute( 'class' ) ) );
	$classes = is_array( $classes ) ? $classes : array();
	$id      = (string) $processor->get_attribute( 'id' );
	$type    = strtolower( (string) $processor->get_attribute( 'type' ) );
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

	if ( in_array( $id, array( 'delete-account-button', 'delete-group-button' ), true ) || array_intersect( $classes, $exclude ) ) {
		return false;
	}

	if ( 'A' === $tag ) {
		return in_array( 'button', $classes, true );
	}

	if ( 'BUTTON' === $tag ) {
		return in_array( 'button', $classes, true );
	}

	return 'INPUT' === $tag && in_array( $type, array( 'button', 'submit' ), true );
}

/**
 * Add the existing canonical Button classes to a rendered Nouveau action.
 *
 * @param WP_HTML_Tag_Processor $processor Active markup processor.
 * @return void
 */
function strap_buddypress_add_default_button_classes( $processor ) {
	$style = strap_buddypress_get_component_treatment( 'default_button_style' );

	$processor->add_class( 'wp-element-button' );
	$processor->add_class( 'strap-bp-default-button' );

	if ( 'secondary' === $style ) {
		$processor->add_class( 'has-secondary-background-color' );
		$processor->add_class( 'has-background' );
	}

	if ( in_array( $style, array( 'link', 'pill', 'pill-outline', 'square', 'square-outline' ), true ) ) {
		$processor->add_class( 'is-style-button-' . $style );
	}

	if ( in_array( $style, array( 'pill-outline', 'square-outline' ), true ) ) {
		$processor->add_class( 'has-primary-color' );
		$processor->add_class( 'has-text-color' );
	}
}

/**
 * Shorten the outgoing friendship-request cancellation label without changing
 * the established-friend cancellation label or Nouveau's action semantics.
 *
 * @param array<string, mixed> $button_args BuddyPress friendship button arguments.
 * @return array<string, mixed>
 */
function strap_buddypress_shorten_pending_friend_request_label( $button_args ) {
	if ( 'pending' === ( $button_args['id'] ?? '' ) ) {
		$button_args['link_text']  = __( 'Cancel Request', 'systemstrap' );
		$button_args['link_title'] = __( 'Cancel Request', 'systemstrap' );
	}

	return $button_args;
}
add_filter( 'bp_get_add_friend_button', 'strap_buddypress_shorten_pending_friend_request_label' );

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
function strap_buddypress_map_button_presentation( $contents, $args, $button ) {
	if ( ( is_admin() && ! wp_doing_ajax() ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
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

	if ( in_array( $id, $excluded, true ) ) {
		return $contents;
	}

	$processor = new WP_HTML_Tag_Processor( $contents );
	$has_button = false;

	while ( $processor->next_tag() ) {
		$tag = (string) $processor->get_tag();
		if ( ! in_array( $tag, array( 'A', 'BUTTON', 'INPUT' ), true ) ) {
			continue;
		}

		$has_button = true;

		if ( 'activity' === $component && 'activity_delete' === $id ) {
			continue;
		}

		if ( 'activity' === $component && 'activity_comment_delete' === $id ) {
			strap_buddypress_add_default_button_classes( $processor );
			$processor->add_class( 'strap-bp-danger-button' );
			$processor->add_class( 'has-danger-background-color' );
			$processor->add_class( 'has-background' );
			$processor->add_class( 'strap-bp-button-small' );
			$processor->add_class( 'has-small-font-size' );
			continue;
		}

		if ( 'activity' === $component && 'activity_conversation' === $id ) {
			$processor->add_class( 'strap-bp-activity-comment-control' );
			continue;
		}

		if ( 'activity' === $component && 'activity_favorite' === $id ) {
			continue;
		}

		strap_buddypress_add_default_button_classes( $processor );
		if ( 'activity' === $component && 'activity_comment_reply' === $id ) {
			$processor->add_class( 'strap-bp-button-small' );
			$processor->add_class( 'has-small-font-size' );
		}
	}

	return $has_button ? $processor->get_updated_html() : $contents;
}
add_filter( 'bp_get_button', 'strap_buddypress_map_button_presentation', 20, 3 );

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
function strap_buddypress_render_horizontal_navigation_presentation( $html ) {
	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) || 'native' === strap_buddypress_get_component_treatment( 'directory_navigation' ) ) {
		return $html;
	}

	$processor = new WP_HTML_Tag_Processor( $html );
	$open_tags = array();
	$void_tags = array( 'AREA', 'BASE', 'BR', 'COL', 'EMBED', 'HR', 'IMG', 'INPUT', 'LINK', 'META', 'PARAM', 'SOURCE', 'TRACK', 'WBR' );

	while ( $processor->next_tag() ) {
		$tag = (string) $processor->get_tag();

		if ( $processor->is_tag_closer() ) {
			if ( $open_tags && $tag === end( $open_tags )['tag'] ) {
				array_pop( $open_tags );
			}
			continue;
		}

		$parent              = $open_tags ? end( $open_tags ) : array();
		$is_horizontal_root  = strap_buddypress_processor_has_class( $processor, 'dir-navs' ) || strap_buddypress_processor_has_class( $processor, 'bp-subnavs' ) || ( 'object-nav' === (string) $processor->get_attribute( 'id' ) && strap_buddypress_processor_has_class( $processor, 'horizontal' ) );
		$is_navigation_list  = 'UL' === $tag && ! empty( $parent['horizontal_root'] );
		$is_navigation_item  = 'LI' === $tag && ! empty( $parent['navigation_list'] );
		$is_navigation_link  = 'A' === $tag && ! empty( $parent['navigation_item'] );
		$stack_entry         = array(
			'tag'             => $tag,
			'horizontal_root' => false,
			'navigation_list' => false,
			'navigation_item' => false,
			'current_item'    => false,
		);

		if ( $is_horizontal_root ) {
			strap_buddypress_add_component_treatment_classes( $processor, 'directory_navigation' );
			$stack_entry['horizontal_root'] = true;
		} elseif ( $is_navigation_list ) {
			$processor->add_class( 'wp-block-navigation__container' );
			$stack_entry['navigation_list'] = true;
		} elseif ( $is_navigation_item ) {
			$processor->add_class( 'wp-block-navigation-item' );
			if ( strap_buddypress_processor_has_class( $processor, 'current' ) || strap_buddypress_processor_has_class( $processor, 'selected' ) ) {
				$processor->add_class( 'current-menu-item' );
				$stack_entry['current_item'] = true;
			}
			$stack_entry['navigation_item'] = true;
		} elseif ( $is_navigation_link ) {
			$processor->add_class( 'wp-block-navigation-item__content' );
			if ( ! empty( $parent['current_item'] ) ) {
				$processor->set_attribute( 'aria-current', 'page' );
			}
		}

		if ( ! in_array( $tag, $void_tags, true ) ) {
			$open_tags[] = $stack_entry;
		}
	}

	return $processor->get_updated_html();
}

/**
 * Make Nouveau's sidebar-navigation check account for SystemStrap Part navs.
 *
 * Nouveau's bp_nouveau_is_object_nav_in_sidebar() only scans persisted Widgets
 * sidebars. SystemStrap Parts can own an equivalent bp/primary-nav block, so
 * expose a request-only block instance to that existing check. This prevents
 * the inline object navigation from rendering without forking Nouveau.
 *
 * @return bool
 */
function strap_buddypress_has_sidebar_primary_navigation() {
	return ( function_exists( 'bp_is_user_activity' ) && bp_is_user_activity() ) || ( function_exists( 'bp_is_user_groups' ) && bp_is_user_groups() );
}

/**
 * Add the request-only Part primary-navigation block to the widget scan.
 *
 * @param mixed $widget_blocks Stored widget block instances.
 * @return array<string, mixed>
 */
function strap_buddypress_add_sidebar_primary_navigation_widget_block( $widget_blocks ) {
	if ( ! strap_buddypress_has_sidebar_primary_navigation() ) {
		return is_array( $widget_blocks ) ? $widget_blocks : array();
	}

	$widget_blocks = is_array( $widget_blocks ) ? $widget_blocks : array();
	$widget_blocks['systemstrap-buddypress-sidebar-primary-nav'] = array(
		'content' => '<!-- wp:bp/primary-nav /-->',
	);

	return $widget_blocks;
}
add_filter( 'option_widget_block', 'strap_buddypress_add_sidebar_primary_navigation_widget_block', 10, 1 );
add_filter( 'default_option_widget_block', 'strap_buddypress_add_sidebar_primary_navigation_widget_block', 10, 1 );

/**
 * Add the request-only Part primary-navigation block to a widget sidebar.
 *
 * @param mixed $sidebars_widgets Active widget sidebars.
 * @return array<string, mixed>
 */
function strap_buddypress_add_sidebar_primary_navigation_widget_area( $sidebars_widgets ) {
	if ( ! strap_buddypress_has_sidebar_primary_navigation() ) {
		return is_array( $sidebars_widgets ) ? $sidebars_widgets : array();
	}

	$sidebars_widgets = is_array( $sidebars_widgets ) ? $sidebars_widgets : array();
	$sidebars_widgets['systemstrap-buddypress-sidebar'] = array( 'block-systemstrap-buddypress-sidebar-primary-nav' );

	return $sidebars_widgets;
}
add_filter( 'sidebars_widgets', 'strap_buddypress_add_sidebar_primary_navigation_widget_area' );

function strap_buddypress_enqueue_nouveau_assets() {
	if ( ! function_exists( 'is_buddypress' ) || ! is_buddypress() ) {
		return;
	}

	$ownership = strap_buddypress_get_screen_component_ownership();

	wp_enqueue_style( 'strap-buddypress-typography' );
	if ( array_filter( $ownership ) ) {
		wp_enqueue_style( 'strap-buddypress-components' );
	}

	if ( $ownership['activity_stream'] ) {
		strap_buddypress_enqueue_component_treatment_asset( 'activity_stream' );
	}
	if ( $ownership['activity_composer'] ) {
		strap_buddypress_enqueue_component_treatment_asset( 'activity_composer' );
	}
	if ( $ownership['directory_navigation'] || $ownership['single_navigation'] ) {
		strap_buddypress_enqueue_component_treatment_asset( 'directory_navigation' );
	}
	if ( $ownership['directory_navigation'] && 'native' !== strap_buddypress_get_component_treatment( 'directory_navigation' ) ) {
		wp_enqueue_script( 'strap-buddypress-members-directory-navigation' );
	}
}
add_action( 'bp_enqueue_community_scripts', 'strap_buddypress_enqueue_nouveau_assets', 30 );

/**
 * Enqueue the canonical physical asset declared by an effective treatment.
 *
 * @param string $component_id Registry component identifier.
 * @return void
 */
function strap_buddypress_enqueue_component_treatment_asset( $component_id ) {
	$registry = strap_buddypress_component_registry();
	if ( ! isset( $registry[ $component_id ] ) ) {
		return;
	}

	$treatment = strap_buddypress_get_component_treatment( $component_id );
	$handle    = $registry[ $component_id ]['treatments'][ $treatment ]['theme_style_handle'] ?? '';
	if ( is_string( $handle ) && '' !== $handle ) {
		wp_enqueue_style( $handle );
	}
}

function strap_buddypress_enqueue_editor_assets() {
	wp_enqueue_style( 'strap-buddypress-editor' );
}
add_action( 'enqueue_block_editor_assets', 'strap_buddypress_enqueue_editor_assets' );

/**
 * Attach registry-declared presentation roles to stable Nouveau component roots.
 *
 * @param string $block_content Rendered post-content markup.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_buddypress_render_component_presentation( $block_content, $block ) {
	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );
	$ownership = strap_buddypress_get_screen_component_ownership();
	$load_more = false;

	if ( ! array_filter( $ownership ) ) {
		return $block_content;
	}

	while ( $processor->next_tag() ) {
		$id        = (string) $processor->get_attribute( 'id' );
		$list_type = (string) $processor->get_attribute( 'data-bp-list' );

		if ( strap_buddypress_is_default_button_control( $processor ) ) {
			strap_buddypress_add_default_button_classes( $processor );
			if ( strap_buddypress_processor_has_class( $processor, 'large' ) && strap_buddypress_processor_has_class( $processor, 'button-primary' ) ) {
				$processor->add_class( 'strap-bp-button-small' );
				$processor->add_class( 'has-small-font-size' );
			}
		}

		if ( 'LI' === (string) $processor->get_tag() && strap_buddypress_processor_has_class( $processor, 'load-more' ) ) {
			$load_more = true;
		} elseif ( $load_more && 'A' === (string) $processor->get_tag() ) {
			strap_buddypress_add_default_button_classes( $processor );
			$processor->add_class( 'strap-bp-load-more-button' );
			$load_more = false;
		}

		if ( $ownership['activity_stream'] && 'activity-stream' === $id ) {
			strap_buddypress_add_component_treatment_classes( $processor, 'activity_stream' );
		}
		if ( $ownership['activity_composer'] && 'bp-nouveau-activity-form' === $id ) {
			strap_buddypress_add_component_treatment_classes( $processor, 'activity_composer' );
		}
		if ( $ownership['member_directory'] && ( 'members-dir-list' === $id || 'members-group-list' === $id || 'friends' === $list_type ) ) {
			strap_buddypress_add_component_treatment_classes( $processor, 'member_directory' );
		}
		if ( $ownership['group_directory'] && ( 'groups-dir-list' === $id || 'groups' === $list_type ) ) {
			strap_buddypress_add_component_treatment_classes( $processor, 'group_directory' );
		}
		if ( 'item-body' === $id && ( ( $ownership['member_directory'] && 'native' !== strap_buddypress_get_component_treatment( 'member_directory' ) ) || ( $ownership['group_directory'] && 'native' !== strap_buddypress_get_component_treatment( 'group_directory' ) ) ) ) {
			$processor->add_class( 'strap-bp-delegated-directory-shell' );
		}
		if ( 'item-body' === $id && $ownership['member_profile'] ) {
			strap_buddypress_add_component_treatment_classes( $processor, 'member_profile' );
		}
		if ( 'item-body' === $id && $ownership['group_profile'] ) {
			strap_buddypress_add_component_treatment_classes( $processor, 'group_profile' );
		}
		if ( $ownership['single_navigation'] && 'object-nav' === $id && ! strap_buddypress_processor_has_class( $processor, 'horizontal' ) ) {
			strap_buddypress_add_component_treatment_classes( $processor, 'single_navigation' );
		}
	}

	return strap_buddypress_render_horizontal_navigation_presentation( $processor->get_updated_html() );
}
add_filter( 'render_block_core/post-content', 'strap_buddypress_render_component_presentation', 20, 2 );

/**
 * Map Login Form block controls to the canonical Button classes while keeping
 * the native login form and registration link unchanged.
 *
 * @param string $block_content Rendered BuddyPress Login Form block markup.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_buddypress_render_login_form_button_presentation( $block_content, $block ) {
	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );
	while ( $processor->next_tag() ) {
		$id = (string) $processor->get_attribute( 'id' );
		if ( 'bp-login-widget-submit' === $id ) {
			strap_buddypress_add_default_button_classes( $processor );
			$processor->add_class( 'strap-bp-button-full' );
		}

		if ( strap_buddypress_processor_has_class( $processor, 'logout' ) ) {
			strap_buddypress_add_default_button_classes( $processor );
			$processor->add_class( 'strap-bp-button-small' );
			$processor->add_class( 'has-small-font-size' );
		}
	}

	return $processor->get_updated_html();
}
add_filter( 'render_block_bp/login-form', 'strap_buddypress_render_login_form_button_presentation', 20, 2 );

/**
 * Apply the existing Single Navigation treatment to the primary-navigation block.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_buddypress_render_primary_navigation_presentation( $block_content, $block ) {
	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$ownership = strap_buddypress_get_screen_component_ownership();
	$component = $ownership['single_navigation'] ? 'single_navigation' : '';
	if ( '' === $component ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );
	if ( ! $processor->next_tag() ) {
		return $block_content;
	}

	strap_buddypress_add_component_treatment_classes( $processor, $component );

	return $processor->get_updated_html();
}
add_filter( 'render_block_bp/primary-nav', 'strap_buddypress_render_primary_navigation_presentation', 20, 2 );

/**
 * Preserve the companion's semantic improvements without its CSS ownership.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $block Parsed block data.
 * @return string
 */
function strap_buddypress_dynamic_directory_semantics( $block_content, $block ) {
	$labels = array( 'bp/dynamic-members' => array( 'Members directory', 'Member sorting options', 'Members' ), 'bp/dynamic-groups' => array( 'Groups directory', 'Group sorting options', 'Groups' ) );
	$name   = $block['blockName'] ?? '';
	if ( ! isset( $labels[ $name ] ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}
	$processor = new WP_HTML_Tag_Processor( $block_content );
	if ( ! $processor->next_tag() ) {
		return $block_content;
	}
	$processor->set_attribute( 'role', 'region' );
	$processor->set_attribute( 'aria-label', $labels[ $name ][0] );
	if ( $processor->next_tag( array( 'tag_name' => 'DIV', 'class_name' => 'item-options' ) ) ) {
		$processor->set_attribute( 'aria-label', $labels[ $name ][1] );
	}
	if ( $processor->next_tag( array( 'tag_name' => 'UL', 'class_name' => 'item-list' ) ) ) {
		$processor->set_attribute( 'role', 'list' );
		$processor->set_attribute( 'aria-label', $labels[ $name ][2] );
	}
	return $processor->get_updated_html();
}
add_filter( 'render_block_bp/dynamic-members', 'strap_buddypress_dynamic_directory_semantics', 10, 2 );
add_filter( 'render_block_bp/dynamic-groups', 'strap_buddypress_dynamic_directory_semantics', 10, 2 );

/**
 * Output the current Group's cover image inside each standard Nouveau directory item.
 *
 * The hook is emitted during normal loop rendering and BuddyPress AJAX refreshes.
 *
 * @return void
 */
function strap_buddypress_render_directory_group_cover() {
	if ( ! function_exists( 'bp_get_group_cover_url' ) || ! function_exists( 'bp_get_group_name' ) ) {
		return;
	}

	$cover_url = bp_get_group_cover_url();
	if ( '' === $cover_url ) {
		return;
	}

	printf(
		'<div class="strap-bp-group-card-cover"><img src="%1$s" alt="%2$s" /></div>',
		esc_url( $cover_url ),
		esc_attr( sprintf( __( '%s group cover', 'systemstrap' ), bp_get_group_name() ) )
	);
}
add_action( 'bp_directory_groups_item', 'strap_buddypress_render_directory_group_cover', 10 );
