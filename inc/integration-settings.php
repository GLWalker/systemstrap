<?php
/**
 * Shared SystemStrap integration settings.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return stored mappings for one supported integration.
 *
 * The legacy options remain readable so existing selections survive the move
 * to the consolidated option without a database migration.
 *
 * @param string $integration Integration identifier.
 * @return array<string, string>
 */
function strap_get_component_mappings( $integration ) {
	$legacy_options = array(
		'woocommerce' => 'strap_woocommerce_component_mappings',
		'buddypress'   => 'strap_buddypress_component_mappings',
	);

	if ( ! isset( $legacy_options[ $integration ] ) ) {
		return array();
	}

	$settings = get_option( 'systemstrap_component_mappings', array() );
	$settings = is_array( $settings ) ? $settings : array();

	if ( isset( $settings[ $integration ] ) && is_array( $settings[ $integration ] ) ) {
		return $settings[ $integration ];
	}

	$legacy = get_option( $legacy_options[ $integration ], array() );

	return is_array( $legacy ) ? $legacy : array();
}

/**
 * Sanitize the consolidated integration mappings without erasing an inactive tab.
 *
 * @param mixed $settings Submitted settings.
 * @return array<string, array<string, string>>
 */
function strap_sanitize_component_mappings( $settings ) {
	$settings = is_array( $settings ) ? $settings : array();
	$valid    = array();
	$groups   = array(
		'woocommerce' => 'strap_woocommerce_sanitize_component_mappings',
		'buddypress'   => 'strap_buddypress_sanitize_component_mappings',
	);

	foreach ( $groups as $integration => $callback ) {
		if ( isset( $settings[ $integration ] ) && is_array( $settings[ $integration ] ) && function_exists( $callback ) ) {
			$valid[ $integration ] = call_user_func( $callback, $settings[ $integration ] );
			continue;
		}

		$stored = strap_get_component_mappings( $integration );

		if ( $stored ) {
			$valid[ $integration ] = $stored;
		}
	}

	return $valid;
}

/**
 * Register the shared component-mapping option.
 */
function strap_register_integration_settings() {
	register_setting(
		'systemstrap_component_mappings',
		'systemstrap_component_mappings',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'strap_sanitize_component_mappings',
			'default'           => array(),
		)
	);
}
add_action( 'admin_init', 'strap_register_integration_settings' );

/**
 * Allow theme editors to save the theme-owned settings page.
 *
 * @return string
 */
function strap_integration_settings_capability() {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_systemstrap_component_mappings', 'strap_integration_settings_capability' );

/**
 * Register the consolidated Appearance page.
 */
function strap_register_integration_settings_page() {
	add_theme_page(
		__( 'SystemStrap', 'systemstrap' ),
		__( 'SystemStrap', 'systemstrap' ),
		'edit_theme_options',
		'systemstrap',
		'strap_render_integration_settings_page'
	);
}
add_action( 'admin_menu', 'strap_register_integration_settings_page' );

/**
 * Return the settings tabs available for this request.
 *
 * @return array<string, string>
 */
function strap_get_integration_settings_tabs() {
	$tabs = array(
		'overview' => __( 'Overview', 'systemstrap' ),
	);

	if ( function_exists( 'strap_woocommerce_component_registry' ) ) {
		$tabs['woocommerce'] = __( 'WooCommerce', 'systemstrap' );
	}

	if ( function_exists( 'strap_buddypress_component_registry' ) ) {
		$tabs['buddypress'] = __( 'BuddyPress', 'systemstrap' );
	}

	return $tabs;
}

/**
 * Render the consolidated SystemStrap settings page.
 */
function strap_render_integration_settings_page() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$tabs        = strap_get_integration_settings_tabs();
	$current_tab = isset( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : 'overview'; // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- Read-only tab navigation.

	if ( ! isset( $tabs[ $current_tab ] ) ) {
		$current_tab = 'overview';
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'SystemStrap', 'systemstrap' ); ?></h1>
		<nav class="nav-tab-wrapper" aria-label="<?php esc_attr_e( 'SystemStrap settings', 'systemstrap' ); ?>">
			<?php foreach ( $tabs as $tab => $label ) : ?>
				<a class="nav-tab<?php echo $current_tab === $tab ? ' nav-tab-active' : ''; ?>" href="<?php echo esc_url( add_query_arg( array( 'page' => 'systemstrap', 'tab' => $tab ), admin_url( 'themes.php' ) ) ); ?>"<?php echo $current_tab === $tab ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $label ); ?></a>
			<?php endforeach; ?>
		</nav>

		<?php if ( 'overview' === $current_tab ) : ?>
			<h2><?php esc_html_e( 'Build with SystemStrap', 'systemstrap' ); ?></h2>
			<p><?php esc_html_e( 'Optional integration settings appear here when their supported plugins are active.', 'systemstrap' ); ?></p>
			<p><a class="button button-primary" href="https://github.com/sponsors/GLWalker" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Support SystemStrap', 'systemstrap' ); ?> <span class="screen-reader-text"><?php esc_html_e( '(opens in a new tab)', 'systemstrap' ); ?></span></a></p>
		<?php else : ?>
			<form action="options.php" method="post">
				<?php settings_fields( 'systemstrap_component_mappings' ); ?>
				<?php if ( 'woocommerce' === $current_tab && function_exists( 'strap_woocommerce_render_component_mapping_fields' ) ) : ?>
					<?php strap_woocommerce_render_component_mapping_fields(); ?>
				<?php elseif ( 'buddypress' === $current_tab && function_exists( 'strap_buddypress_render_component_mapping_fields' ) ) : ?>
					<?php strap_buddypress_render_component_mapping_fields(); ?>
				<?php endif; ?>
				<?php submit_button(); ?>
			</form>
		<?php endif; ?>
	</div>
	<?php
}
