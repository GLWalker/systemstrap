<?php
/**
 * First-class WooCommerce integration for SystemStrap.
 *
 * This module is loaded only when WooCommerce is active and the legacy
 * SystemStrap WooCommerce companion is not active.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Return the authoritative WooCommerce component treatment registry.
 *
 * @return array<string, array<string, mixed>>
 */
function strap_woocommerce_component_registry() {
	return array(
		'product_cards' => array(
			'label'             => __( 'Product Cards', 'systemstrap' ),
			'block_name'        => 'woocommerce/product-template',
			'sibling'           => 'core/post-template',
			'default_component' => 'linked_products_upsells',
			'application'       => 'authored_block_class',
			'treatments'        => array(
				'native'                => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ), 'class' => 'is-style-native-woo', 'style_name' => 'native-woo' ),
				'system-panel-woo'      => array(
					'label'              => __( 'System Panel', 'systemstrap' ),
					'class'              => 'is-style-system-panel-woo',
					'stylesheet'         => 'woocommerce-product-template-panel.css',
					'theme_style_handle' => 'strap-panel-surface',
					'presentation_depth' => 2,
					'child_targets'      => array( '> li.wc-block-product' ),
					'propagated_styles'  => array( 'background', 'background_image', 'color' ),
				),
				'system-flat-panel-woo' => array(
					'label'              => __( 'System Flat Panel', 'systemstrap' ),
					'class'              => 'is-style-system-flat-panel-woo',
					'stylesheet'         => 'woocommerce-product-template-panel.css',
					'theme_style_handle' => 'core-group-system-flat-panel',
					'presentation_depth' => 2,
					'child_targets'      => array( '> li.wc-block-product' ),
					'propagated_styles'  => array( 'background', 'background_image', 'color' ),
				),
				'system-list-woo'       => array(
					'label'              => __( 'System List', 'systemstrap' ),
					'class'              => 'is-style-system-list-woo',
					'stylesheet'         => 'woocommerce-product-template-list.css',
					'presentation_depth' => 2,
					'child_targets'      => array( '> li.wc-block-product' ),
				),
				'system-flat-list-woo'  => array(
					'label'              => __( 'System Flat List', 'systemstrap' ),
					'class'              => 'is-style-system-flat-list-woo',
					'stylesheet'         => 'woocommerce-product-template-list.css',
					'presentation_depth' => 2,
					'child_targets'      => array( '> li.wc-block-product' ),
				),
			),
		),
		'linked_products_upsells' => array(
			'label'         => __( 'Linked Products / Upsells', 'systemstrap' ),
			'default'       => 'system-panel-woo',
			'application'   => 'admin_mapping',
			'treatments'    => array(
				'native'                => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
				'system-panel-woo'      => array(
					'label'              => __( 'System Panel', 'systemstrap' ),
					'class'              => 'is-style-system-panel-woo',
					'stylesheet'         => 'woocommerce-product-template-panel.css',
					'theme_style_handle' => 'strap-panel-surface',
					'presentation_depth' => 2,
					'child_targets'      => array( '> li.product' ),
				),
				'system-flat-panel-woo' => array(
					'label'              => __( 'System Flat Panel', 'systemstrap' ),
					'class'              => 'is-style-system-panel-woo is-style-system-flat-panel',
					'stylesheet'         => 'woocommerce-product-template-panel.css',
					'theme_style_handle' => 'core-group-system-flat-panel',
					'presentation_depth' => 2,
					'child_targets'      => array( '> li.product' ),
				),
				'system-list-woo'       => array(
					'label'              => __( 'System List', 'systemstrap' ),
					'class'              => 'is-style-system-list-woo',
					'stylesheet'         => 'woocommerce-product-template-list.css',
					'presentation_depth' => 2,
					'child_targets'      => array( '> li.product' ),
				),
				'system-flat-list-woo'  => array(
					'label'              => __( 'System Flat List', 'systemstrap' ),
					'class'              => 'is-style-system-flat-list-woo',
					'stylesheet'         => 'woocommerce-product-template-list.css',
					'presentation_depth' => 2,
					'child_targets'      => array( '> li.product' ),
				),
			),
		),
		'product_images' => array(
			'label'       => __( 'Product Images', 'systemstrap' ),
			'block_name'  => 'woocommerce/product-image',
			'sibling'     => 'core/image',
			'default'     => 'native',
			'application' => 'authored_block_class',
			'treatments'  => array(
				'native' => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
			),
		),
		'product_button' => array(
			'label'       => __( 'Product Button', 'systemstrap' ),
			'block_name'  => 'woocommerce/product-button',
			'sibling'     => 'core/button',
			'default'     => 'native',
			'application' => 'authored_block_class',
			'treatments'  => array(
				'native'                    => array(
					'label'              => __( 'Native WooCommerce', 'systemstrap' ),
					'presentation_depth' => 1,
					'child_targets'      => array( '> .wp-block-button__link.wp-element-button.wc-block-components-product-button__button' ),
					'preserve_states'    => array( 'simple_add_to_cart', 'external_navigation', 'variable_navigation', 'grouped_navigation', 'loading', 'added', 'disabled', 'focus', 'view_cart' ),
				),
				'button-link-woo'           => array( 'label' => __( 'Link', 'systemstrap' ), 'class' => 'is-style-button-link-woo', 'presentation_depth' => 2, 'child_targets' => array( '> .wp-block-button__link.wp-element-button.wc-block-components-product-button__button' ) ),
				'button-pill-woo'           => array( 'label' => __( 'Pill', 'systemstrap' ), 'class' => 'is-style-button-pill-woo', 'presentation_depth' => 2, 'child_targets' => array( '> .wp-block-button__link.wp-element-button.wc-block-components-product-button__button' ) ),
				'button-pill-outline-woo'   => array( 'label' => __( 'Pill Outline', 'systemstrap' ), 'class' => 'is-style-button-pill-outline-woo', 'presentation_depth' => 2, 'child_targets' => array( '> .wp-block-button__link.wp-element-button.wc-block-components-product-button__button' ) ),
				'button-square-woo'         => array( 'label' => __( 'Square', 'systemstrap' ), 'class' => 'is-style-button-square-woo', 'presentation_depth' => 2, 'child_targets' => array( '> .wp-block-button__link.wp-element-button.wc-block-components-product-button__button' ) ),
				'button-square-outline-woo' => array( 'label' => __( 'Square Outline', 'systemstrap' ), 'class' => 'is-style-button-square-outline-woo', 'presentation_depth' => 2, 'child_targets' => array( '> .wp-block-button__link.wp-element-button.wc-block-components-product-button__button' ) ),
			),
		),
		'account_navigation' => array(
			'label'         => __( 'Account Navigation', 'systemstrap' ),
			'sibling'       => 'core/page-list',
			'default'       => 'system-panel-woo',
			'application'   => 'admin_mapping',
			'treatments'    => array(
				'native'                 => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
				'system-panel-woo'       => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-panel-surface strap-woocommerce-account-navigation-panel', 'stylesheet' => 'woocommerce-account-navigation.css', 'theme_style_handle' => 'strap-panel-surface', 'presentation_depth' => 1, 'child_targets' => array( '> nav' ) ),
				'system-flat-panel-woo'  => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-panel-surface is-style-system-flat-panel strap-woocommerce-account-navigation-panel', 'stylesheet' => 'woocommerce-account-navigation.css', 'theme_style_handle' => 'core-group-system-flat-panel', 'presentation_depth' => 1, 'child_targets' => array( '> nav' ) ),
				'system-list-woo'        => array( 'label' => __( 'System List', 'systemstrap' ), 'class' => 'is-style-system-list-woo', 'stylesheet' => 'woocommerce-account-navigation.css', 'presentation_depth' => 2, 'child_targets' => array( '> nav > ul > li' ) ),
				'system-flat-list-woo'   => array( 'label' => __( 'System Flat List', 'systemstrap' ), 'class' => 'is-style-system-flat-list-woo', 'stylesheet' => 'core-page-list-system-flat-list.css', 'theme_style_handle' => 'core-page-list-system-flat-list', 'presentation_depth' => 2, 'child_targets' => array( '> nav > ul > li' ) ),
				'system-list-flush-woo'  => array( 'label' => __( 'System List Flush', 'systemstrap' ), 'class' => 'is-style-system-list-flush-woo', 'stylesheet' => 'woocommerce-account-navigation.css', 'presentation_depth' => 2, 'child_targets' => array( '> nav > ul > li' ) ),
			),
		),
		'woo_tables' => array(
			'label'         => __( 'Woo Tables', 'systemstrap' ),
			'sibling'       => 'core/table',
			'default'       => 'system-panel-woo',
			'application'   => 'admin_mapping',
			'treatments'    => array(
				'native'                => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
				'system-panel-woo'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-table-surface', 'stylesheet' => 'woocommerce-table-adapter.css', 'theme_style_handle' => 'strap-table-surface', 'presentation_depth' => 1, 'child_targets' => array( '> table' ) ),
				'system-flat-panel-woo' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-table-surface is-style-system-flat-panel', 'stylesheet' => 'woocommerce-table-adapter.css', 'theme_style_handle' => 'core-table-system-flat-panel', 'presentation_depth' => 1, 'child_targets' => array( '> table' ) ),
			),
		),
		'woo_addresses' => array(
			'label'         => __( 'Woo Addresses', 'systemstrap' ),
			'default'       => 'system-panel-woo',
			'application'   => 'admin_mapping',
			'treatments'    => array(
				'native'                => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
				'system-panel-woo'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-panel-surface', 'stylesheet' => 'woocommerce-address-adapter.css', 'theme_style_handle' => 'strap-panel-surface', 'presentation_depth' => 1 ),
				'system-flat-panel-woo' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-panel-surface is-style-system-flat-panel', 'stylesheet' => 'woocommerce-address-adapter.css', 'theme_style_handle' => 'core-group-system-flat-panel', 'presentation_depth' => 1 ),
			),
		),
		'cart_items' => array(
			'label'         => __( 'Cart Items', 'systemstrap' ),
			'block_name'    => 'woocommerce/cart-line-items-block',
			'default'       => 'system-panel-woo',
			'application'   => 'admin_mapping',
			'treatments'    => array(
				'native'                => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
				'system-panel-woo'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-panel-surface', 'stylesheet' => 'woocommerce-application-panel-composition.css', 'theme_style_handle' => 'strap-panel-surface' ),
				'system-flat-panel-woo' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-panel-surface is-style-system-flat-panel', 'stylesheet' => 'woocommerce-application-panel-composition.css', 'theme_style_handle' => 'strap-panel-surface' ),
			),
		),
		'cart_totals' => array(
			'label'         => __( 'Cart Totals', 'systemstrap' ),
			'block_name'    => 'woocommerce/cart-order-summary-block',
			'default'       => 'system-panel-woo',
			'application'   => 'admin_mapping',
			'treatments'    => array(
				'native'                => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
				'system-panel-woo'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-panel-surface', 'stylesheet' => 'woocommerce-application-panel-composition.css', 'theme_style_handle' => 'strap-panel-surface' ),
				'system-flat-panel-woo' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-panel-surface is-style-system-flat-panel', 'stylesheet' => 'woocommerce-application-panel-composition.css', 'theme_style_handle' => 'strap-panel-surface' ),
			),
		),
		'checkout_fields' => array(
			'label'         => __( 'Checkout Fields', 'systemstrap' ),
			'block_name'    => 'woocommerce/checkout-fields-block',
			'default'       => 'system-panel-woo',
			'application'   => 'admin_mapping',
			'treatments'    => array(
				'native'                => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
				'system-panel-woo'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-panel-surface', 'stylesheet' => 'woocommerce-application-panel-composition.css', 'theme_style_handle' => 'strap-panel-surface' ),
				'system-flat-panel-woo' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-panel-surface is-style-system-flat-panel', 'stylesheet' => 'woocommerce-application-panel-composition.css', 'theme_style_handle' => 'strap-panel-surface' ),
			),
		),
		'checkout_totals' => array(
			'label'         => __( 'Checkout Totals', 'systemstrap' ),
			'block_name'    => 'woocommerce/checkout-order-summary-block',
			'default'       => 'system-panel-woo',
			'application'   => 'admin_mapping',
			'treatments'    => array(
				'native'                => array( 'label' => __( 'Native WooCommerce', 'systemstrap' ) ),
				'system-panel-woo'      => array( 'label' => __( 'System Panel', 'systemstrap' ), 'class' => 'strap-panel-surface', 'stylesheet' => 'woocommerce-application-panel-composition.css', 'theme_style_handle' => 'strap-panel-surface' ),
				'system-flat-panel-woo' => array( 'label' => __( 'System Flat Panel', 'systemstrap' ), 'class' => 'strap-panel-surface is-style-system-flat-panel', 'stylesheet' => 'woocommerce-application-panel-composition.css', 'theme_style_handle' => 'strap-panel-surface' ),
			),
		),
	);
}

/**
 * Resolve a component's registry default, including a declared shared source.
 *
 * @param string $component_id Component registry identifier.
 * @return string
 */
function strap_woocommerce_get_component_default_treatment( $component_id ) {
	$registry = strap_woocommerce_component_registry();

	if ( ! isset( $registry[ $component_id ] ) ) {
		return '';
	}

	$component = $registry[ $component_id ];
	$value     = isset( $component['default'] ) ? sanitize_key( $component['default'] ) : '';

	if ( ! empty( $component['default_component'] ) && isset( $registry[ $component['default_component'] ] ) ) {
		$value = strap_woocommerce_get_component_treatment( $component['default_component'] );
	}

	return isset( $component['treatments'][ $value ] ) ? $value : '';
}

/**
 * Resolve a component treatment without materializing registry defaults in the option.
 *
 * @param string $component_id Component registry identifier.
 * @return string
 */
function strap_woocommerce_get_component_treatment( $component_id ) {
	$registry = strap_woocommerce_component_registry();

	if ( ! isset( $registry[ $component_id ] ) ) {
		return '';
	}

	$component = $registry[ $component_id ];
	$default   = strap_woocommerce_get_component_default_treatment( $component_id );

	if ( 'admin_mapping' !== ( $component['application'] ?? '' ) ) {
		return $default;
	}

	$stored_mappings = get_option( 'strap_woocommerce_component_mappings', array() );
	$stored_mappings = is_array( $stored_mappings ) ? $stored_mappings : array();
	$value           = array_key_exists( $component_id, $stored_mappings ) && is_string( $stored_mappings[ $component_id ] )
		? sanitize_key( $stored_mappings[ $component_id ] )
		: $default;

	return isset( $component['treatments'][ $value ] ) ? $value : $default;
}

/**
 * Validate stored admin mappings against the shared registry.
 *
 * @param mixed $mappings Submitted mapping values.
 * @return array<string, string>
 */
function strap_woocommerce_sanitize_component_mappings( $mappings ) {
	$valid    = array();
	$registry = strap_woocommerce_component_registry();
	$mappings = is_array( $mappings ) ? $mappings : array();

	foreach ( $registry as $component_id => $component ) {
		if ( 'admin_mapping' !== ( $component['application'] ?? '' ) || ! array_key_exists( $component_id, $mappings ) ) {
			continue;
		}

		if ( ! is_string( $mappings[ $component_id ] ) ) {
			continue;
		}

		$treatment = sanitize_key( $mappings[ $component_id ] );

		if ( isset( $component['treatments'][ $treatment ] ) ) {
			$valid[ $component_id ] = $treatment;
		}
	}

	return $valid;
}

/**
 * Register the existing WooCommerce component mapping option.
 */
function strap_woocommerce_register_component_mapping_settings() {
	register_setting(
		'systemstrap_woocommerce_mappings',
		'strap_woocommerce_component_mappings',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'strap_woocommerce_sanitize_component_mappings',
			'default'           => array(),
		)
	);
}
add_action( 'admin_init', 'strap_woocommerce_register_component_mapping_settings' );

/**
 * Register the existing SystemStrap WooCommerce settings location.
 */
function strap_woocommerce_register_component_mapping_page() {
	add_options_page(
		__( 'SystemStrap WooCommerce', 'systemstrap' ),
		__( 'SystemStrap WooCommerce', 'systemstrap' ),
		'manage_options',
		'systemstrap-woocommerce',
		'strap_woocommerce_render_component_mapping_page'
	);
}
add_action( 'admin_menu', 'strap_woocommerce_register_component_mapping_page' );

/**
 * Render the component mapping settings page.
 */
function strap_woocommerce_render_component_mapping_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$registry = strap_woocommerce_component_registry();
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'SystemStrap WooCommerce', 'systemstrap' ); ?></h1>
		<p><?php esc_html_e( 'Choose the active presentation for each supported WooCommerce component. Fresh and missing settings use System Panel.', 'systemstrap' ); ?></p>
		<form action="options.php" method="post">
			<?php settings_fields( 'systemstrap_woocommerce_mappings' ); ?>
			<table class="form-table" role="presentation">
				<tbody>
					<?php foreach ( $registry as $component_id => $component ) : ?>
						<?php if ( 'admin_mapping' !== ( $component['application'] ?? '' ) ) : ?>
							<?php continue; ?>
						<?php endif; ?>
					<tr>
							<th scope="row"><label for="strap-woocommerce-<?php echo esc_attr( $component_id ); ?>"><?php echo esc_html( $component['label'] ); ?></label></th>
							<td>
								<select class="regular-text" id="strap-woocommerce-<?php echo esc_attr( $component_id ); ?>" name="strap_woocommerce_component_mappings[<?php echo esc_attr( $component_id ); ?>]">
								<?php foreach ( $component['treatments'] as $treatment_id => $treatment ) : ?>
									<option value="<?php echo esc_attr( $treatment_id ); ?>" <?php echo selected( strap_woocommerce_get_component_treatment( $component_id ), $treatment_id, false ); ?>><?php echo esc_html( $treatment['label'] ); ?></option>
									<?php endforeach; ?>
								</select>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>
	<?php
}

/**
 * Add the narrow block metadata capabilities used by Product Button and Reviews Pagination.
 *
 * @param array $metadata Block metadata.
 * @return array
 */
function strap_woocommerce_extend_block_metadata( $metadata ) {
	if ( ! is_array( $metadata ) || empty( $metadata['name'] ) ) {
		return $metadata;
	}

	if ( 'woocommerce/product-button' === $metadata['name'] ) {
		$metadata['supports'] = isset( $metadata['supports'] ) && is_array( $metadata['supports'] ) ? $metadata['supports'] : array();
		$metadata['supports']['color'] = isset( $metadata['supports']['color'] ) && is_array( $metadata['supports']['color'] ) ? $metadata['supports']['color'] : array();
		$metadata['supports']['color']['gradients'] = true;
	}

	if ( 'woocommerce/product-reviews-pagination' === $metadata['name'] ) {
		$metadata['attributes'] = isset( $metadata['attributes'] ) && is_array( $metadata['attributes'] ) ? $metadata['attributes'] : array();
		$metadata['attributes']['showLabel'] = array(
			'type'    => 'boolean',
			'default' => true,
		);
		$metadata['providesContext'] = isset( $metadata['providesContext'] ) && is_array( $metadata['providesContext'] ) ? $metadata['providesContext'] : array();
		$metadata['providesContext']['reviews/showLabel'] = 'showLabel';
	}

	if ( in_array( $metadata['name'], array( 'woocommerce/product-reviews-pagination-previous', 'woocommerce/product-reviews-pagination-next' ), true ) ) {
		$metadata['usesContext'] = isset( $metadata['usesContext'] ) && is_array( $metadata['usesContext'] ) ? $metadata['usesContext'] : array();

		if ( ! in_array( 'reviews/showLabel', $metadata['usesContext'], true ) ) {
			$metadata['usesContext'][] = 'reviews/showLabel';
		}
	}

	return $metadata;
}
add_filter( 'block_type_metadata', 'strap_woocommerce_extend_block_metadata', 20 );

/**
 * Register Product Button aliases that consume the canonical Button CSS.
 */
function strap_woocommerce_register_product_button_styles() {
	$styles = array(
		'button-link-woo'           => __( 'Link', 'systemstrap' ),
		'button-pill-woo'           => __( 'Pill', 'systemstrap' ),
		'button-pill-outline-woo'   => __( 'Pill Outline', 'systemstrap' ),
		'button-square-woo'         => __( 'Square', 'systemstrap' ),
		'button-square-outline-woo' => __( 'Square Outline', 'systemstrap' ),
	);

	foreach ( $styles as $name => $label ) {
		register_block_style(
			'woocommerce/product-button',
			array(
				'name'  => $name,
				'label' => $label,
			)
		);
	}
}
add_action( 'init', 'strap_woocommerce_register_product_button_styles', 20 );

/**
 * Register Woo review styles against the canonical Comments assets.
 */
function strap_woocommerce_register_review_styles() {
	$theme_dir = get_template_directory() . '/';
	$theme_uri = get_template_directory_uri() . '/';
	$styles    = array(
		'system-list'  => array( 'label' => __( 'System List', 'systemstrap' ), 'file' => 'core-comments-system-list.css', 'deps' => array() ),
		'system-panel' => array( 'label' => __( 'System Panel', 'systemstrap' ), 'file' => 'core-comments-system-panel.css', 'deps' => array( 'strap-panel-surface', 'strap-panel-structure' ) ),
	);
	$archives  = array( 'woocommerce/all-reviews', 'woocommerce/reviews-by-product', 'woocommerce/reviews-by-category' );

	foreach ( $styles as $name => $style ) {
		$file = $theme_dir . 'assets/css/style-variations/' . $style['file'];

		if ( ! file_exists( $file ) ) {
			continue;
		}

		$template_handle = 'strap-woocommerce-product-review-template-' . $name;
		wp_enqueue_block_style(
			'woocommerce/product-review-template',
			array(
				'handle' => $template_handle,
				'src'    => $theme_uri . 'assets/css/style-variations/' . $style['file'],
				'path'   => $file,
				'deps'   => $style['deps'],
				'ver'    => filemtime( $file ),
			)
		);
		register_block_style( 'woocommerce/product-review-template', array( 'name' => $name, 'label' => $style['label'], 'style_handle' => $template_handle ) );

		$archive_handle = 'strap-woocommerce-archive-reviews-' . $name;
		foreach ( $archives as $block_name ) {
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => $archive_handle,
					'src'    => $theme_uri . 'assets/css/style-variations/' . $style['file'],
					'path'   => $file,
					'deps'   => $style['deps'],
					'ver'    => filemtime( $file ),
				)
			);
			register_block_style( $block_name, array( 'name' => $name, 'label' => $style['label'], 'style_handle' => $archive_handle ) );
		}
	}
}
add_action( 'init', 'strap_woocommerce_register_review_styles', 21 );

/**
 * Register Woo Reviews Pagination against the canonical pagination master.
 */
function strap_woocommerce_register_reviews_pagination_styles() {
	if ( ! wp_style_is( 'strap-system-ui-pagination', 'registered' ) ) {
		return;
	}

	$theme_dir = get_template_directory() . '/';
	$theme_uri = get_template_directory_uri() . '/';
	$styles    = array(
		'system-ui-pagination'                => __( 'System UI Pagination', 'systemstrap' ),
		'system-ui-pagination-outline'        => __( 'System UI Pagination Outline', 'systemstrap' ),
		'system-ui-pagination-pill'           => __( 'System UI Pagination Pill', 'systemstrap' ),
		'system-ui-pagination-pill-outline'   => __( 'System UI Pagination Pill Outline', 'systemstrap' ),
		'system-ui-pagination-square'         => __( 'System UI Pagination Square', 'systemstrap' ),
		'system-ui-pagination-square-outline' => __( 'System UI Pagination Square Outline', 'systemstrap' ),
		'system-ui-pagination-badge'          => __( 'System UI Pagination Badge', 'systemstrap' ),
	);
	$blocks    = array(
		'woocommerce/product-reviews-pagination',
		'woocommerce/product-reviews-pagination-previous',
		'woocommerce/product-reviews-pagination-numbers',
		'woocommerce/product-reviews-pagination-next',
	);

	foreach ( $styles as $name => $label ) {
		$file = $theme_dir . 'assets/css/style-variations/core-comments-pagination-' . $name . '.css';

		if ( ! file_exists( $file ) ) {
			continue;
		}

		$handle = 'strap-woocommerce-product-reviews-pagination-' . $name;
		foreach ( $blocks as $block_name ) {
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => $handle,
					'src'    => $theme_uri . 'assets/css/style-variations/' . basename( $file ),
					'path'   => $file,
					'deps'   => array( 'strap-system-ui-pagination' ),
					'ver'    => filemtime( $file ),
				)
			);
			register_block_style( $block_name, array( 'name' => $name, 'label' => $label, 'style_handle' => $handle ) );
		}
	}
}
add_action( 'init', 'strap_woocommerce_register_reviews_pagination_styles', 23 );

/**
 * Map an explicitly selected Product Review Template style to Comments roles.
 *
 * @param string $block_content Rendered block markup.
 * @return string
 */
function strap_woocommerce_render_product_review_template_adapter( $block_content ) {
	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) || ! str_contains( $block_content, 'is-style-system-' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );

	if ( ! $processor->next_tag( array( 'tag_name' => 'ol' ) ) ) {
		return $block_content;
	}

	if ( ! preg_match( '/(?:^|\s)is-style-system-(?:list|panel)(?:\s|$)/', (string) $processor->get_attribute( 'class' ) ) ) {
		return $block_content;
	}

	$processor->add_class( 'strap-comments-thread' );

	return $processor->get_updated_html();
}
add_filter( 'render_block_woocommerce/product-review-template', 'strap_woocommerce_render_product_review_template_adapter', 10, 1 );

/**
 * Map an explicitly selected archive Reviews style to Comments roles.
 *
 * @param string $block_content Rendered block markup.
 * @return string
 */
function strap_woocommerce_render_archive_review_adapter( $block_content ) {
	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) || ! str_contains( $block_content, 'is-style-system-' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );

	if ( ! $processor->next_tag( array( 'tag_name' => 'div' ) ) ) {
		return $block_content;
	}

	if ( ! preg_match( '/(?:^|\s)is-style-system-(?:list|panel)(?:\s|$)/', (string) $processor->get_attribute( 'class' ) ) ) {
		return $block_content;
	}

	$processor->add_class( 'strap-comments-thread' );

	return $processor->get_updated_html();
}

foreach ( array( 'woocommerce/all-reviews', 'woocommerce/reviews-by-product', 'woocommerce/reviews-by-category' ) as $strap_woocommerce_review_block ) {
	add_filter( 'render_block_' . $strap_woocommerce_review_block, 'strap_woocommerce_render_archive_review_adapter', 10, 1 );
}
unset( $strap_woocommerce_review_block );

/**
 * Hide only visible Review Pagination labels when an authored arrow remains.
 *
 * @param string   $block_content Rendered block markup.
 * @param array    $parsed_block  Parsed block data.
 * @param WP_Block $block         Block instance.
 * @return string
 */
function strap_woocommerce_render_reviews_pagination_hidden_label( $block_content, $parsed_block, $block ) {
	$show_label = $block->context['reviews/showLabel'] ?? true;
	$arrow      = $block->context['reviews/paginationArrow'] ?? 'none';

	if ( false !== $show_label || ! in_array( $arrow, array( 'arrow', 'chevron' ), true ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$is_previous = 'woocommerce/product-reviews-pagination-previous' === ( $parsed_block['blockName'] ?? '' );
	$default     = $is_previous ? __( 'Older Reviews', 'woocommerce' ) : __( 'Newer Reviews', 'woocommerce' );
	$attributes  = isset( $parsed_block['attrs'] ) && is_array( $parsed_block['attrs'] ) ? $parsed_block['attrs'] : array();
	$label       = isset( $attributes['label'] ) && '' !== trim( (string) $attributes['label'] ) ? wp_strip_all_tags( (string) $attributes['label'] ) : $default;
	$processor   = new WP_HTML_Tag_Processor( $block_content );

	if ( ! $processor->next_tag( 'a' ) ) {
		return $block_content;
	}

	$processor->set_attribute( 'aria-label', $label );
	$inside_arrow = false;

	while ( $processor->next_token() ) {
		if ( '#tag' === $processor->get_token_type() && 'span' === strtolower( (string) $processor->get_token_name() ) ) {
			if ( $processor->is_tag_closer() ) {
				$inside_arrow = false;
			} elseif ( preg_match( '/(?:^|\s)wp-block-woocommerce-product-reviews-pagination-(?:previous|next)-arrow(?:\s|$)/', (string) $processor->get_attribute( 'class' ) ) ) {
				$inside_arrow = true;
			}

			continue;
		}

		if ( '#text' === $processor->get_token_type() && ! $inside_arrow && '' !== trim( $processor->get_modifiable_text() ) ) {
			$processor->set_modifiable_text( '' );
		}
	}

	return $processor->get_updated_html();
}
add_filter( 'render_block_woocommerce/product-reviews-pagination-previous', 'strap_woocommerce_render_reviews_pagination_hidden_label', 10, 3 );
add_filter( 'render_block_woocommerce/product-reviews-pagination-next', 'strap_woocommerce_render_reviews_pagination_hidden_label', 10, 3 );
/**
 * Resolve the registered component identifier for a Woo block.
 *
 * @param string $block_name Block name.
 * @return string
 */
function strap_woocommerce_get_component_id_for_block( $block_name ) {
	foreach ( strap_woocommerce_component_registry() as $component_id => $component ) {
		if ( isset( $component['block_name'] ) && $block_name === $component['block_name'] ) {
			return $component_id;
		}
	}

	return '';
}

/**
 * Resolve a structured presentation contract for a registered Woo block.
 *
 * @param array  $parsed_block Parsed block data.
 * @param string $context      Rendering context.
 * @return array<string, mixed>
 */
function strap_woocommerce_resolve_block_presentation( $parsed_block, $context ) {
	$block_name   = isset( $parsed_block['blockName'] ) ? $parsed_block['blockName'] : '';
	$component_id = strap_woocommerce_get_component_id_for_block( $block_name );

	if ( '' === $component_id ) {
		return array();
	}

	$registry   = strap_woocommerce_component_registry();
	$component  = $registry[ $component_id ];
	$attributes = isset( $parsed_block['attrs'] ) && is_array( $parsed_block['attrs'] ) ? $parsed_block['attrs'] : array();
	$class_name = isset( $attributes['className'] ) && is_string( $attributes['className'] ) ? $attributes['className'] : '';
	$treatment  = strap_woocommerce_get_component_default_treatment( $component_id );
	$source     = empty( $component['default_component'] ) ? 'default' : 'admin';

	foreach ( $component['treatments'] as $slug => $definition ) {
		if ( empty( $definition['class'] ) || ! preg_match( '/(?:^|\\s)' . preg_quote( $definition['class'], '/' ) . '(?:\\s|$)/', $class_name ) ) {
			continue;
		}

		$treatment = $slug;
		$source    = 'authored';
		break;
	}

	if ( 'admin_mapping' === ( $component['application'] ?? '' ) && 'authored' !== $source ) {
		$mapped_treatment = strap_woocommerce_get_component_treatment( $component_id );
		$treatment        = $mapped_treatment;
		$source           = 'admin';
	}

	$definition = $component['treatments'][ $treatment ];
	$contract   = array(
		'component_id'          => $component_id,
		'block_name'            => $block_name,
		'treatment'             => $treatment,
		'selection_source'      => $source,
		'presentation_depth'    => isset( $definition['presentation_depth'] ) ? (int) $definition['presentation_depth'] : 0,
		'root_classes'          => empty( $definition['class'] ) ? array() : array( $definition['class'] ),
		'child_targets'         => isset( $definition['child_targets'] ) ? $definition['child_targets'] : array(),
		'propagated_styles'     => isset( $definition['propagated_styles'] ) ? $definition['propagated_styles'] : array(),
		'propagated_attributes' => array(),
		'theme_json_baseline'   => isset( $definition['theme_json_baseline'] ) ? $definition['theme_json_baseline'] : null,
		'preserve_states'       => isset( $definition['preserve_states'] ) && is_array( $definition['preserve_states'] ) ? $definition['preserve_states'] : array(),
		'context'               => $context,
		'native_opt_out'        => 'native' === $treatment,
	);

	$contract = apply_filters( 'strap_woocommerce_block_presentation', $contract, $parsed_block, $context );

	return strap_woocommerce_validate_block_presentation( $contract );
}

/**
 * Validate a filter result against the registered presentation surface.
 *
 * @param mixed $contract Proposed presentation contract.
 * @return array<string, mixed>
 */
function strap_woocommerce_validate_block_presentation( $contract ) {
	if ( ! is_array( $contract ) || empty( $contract['component_id'] ) || empty( $contract['block_name'] ) || empty( $contract['treatment'] ) ) {
		return array();
	}

	$registry = strap_woocommerce_component_registry();

	if ( ! isset( $registry[ $contract['component_id'] ] ) || $registry[ $contract['component_id'] ]['block_name'] !== $contract['block_name'] ) {
		return array();
	}

	$component = $registry[ $contract['component_id'] ];
	$treatment = sanitize_key( $contract['treatment'] );

	if ( ! isset( $component['treatments'][ $treatment ] ) ) {
		return array();
	}

	$definition                   = $component['treatments'][ $treatment ];
	$contract['treatment']        = $treatment;
	$contract['selection_source'] = in_array( $contract['selection_source'], array( 'authored', 'admin', 'default', 'native' ), true ) ? $contract['selection_source'] : 'native';
	$contract['context']          = in_array( $contract['context'], array( 'frontend', 'editor' ), true ) ? $contract['context'] : 'frontend';
	$contract['presentation_depth'] = isset( $definition['presentation_depth'] ) ? (int) $definition['presentation_depth'] : 0;
	$contract['root_classes']        = empty( $definition['class'] ) ? array() : array( $definition['class'] );
	$contract['child_targets']       = isset( $definition['child_targets'] ) ? $definition['child_targets'] : array();
	$contract['propagated_styles']   = isset( $definition['propagated_styles'] ) ? $definition['propagated_styles'] : array();
	$contract['propagated_attributes'] = array();
	$contract['theme_json_baseline']   = isset( $definition['theme_json_baseline'] ) ? $definition['theme_json_baseline'] : null;
	$contract['preserve_states']       = isset( $definition['preserve_states'] ) && is_array( $definition['preserve_states'] ) ? $definition['preserve_states'] : array();
	$contract['native_opt_out']        = 'native' === $treatment;

	if ( $contract['native_opt_out'] ) {
		$contract['selection_source'] = 'native';
	}

	return $contract;
}

/**
 * Apply an explicit admin-selected Product Template treatment to its public
 * root. Authored styles already arrive in WooCommerce's wrapper classes.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $parsed_block  Parsed block data.
 * @return string
 */
function strap_woocommerce_render_product_template_presentation( $block_content, $parsed_block ) {
	$context  = is_admin() ? 'editor' : 'frontend';
	$contract = strap_woocommerce_resolve_block_presentation( $parsed_block, $context );

	if ( empty( $contract ) || $contract['native_opt_out'] ) {
		return $block_content;
	}

	if ( ! empty( $contract['root_classes'] ) && class_exists( 'WP_HTML_Tag_Processor' ) ) {
		$processor = new WP_HTML_Tag_Processor( $block_content );

		if ( $processor->next_tag( array( 'tag_name' => 'ul' ) ) ) {
			$classes = (string) $processor->get_attribute( 'class' );

			if ( in_array( $contract['selection_source'], array( 'admin', 'default' ), true ) ) {
				foreach ( $contract['root_classes'] as $class_name ) {
					$processor->add_class( $class_name );
				}
			}

			if ( in_array( $contract['treatment'], array( 'system-panel-woo', 'system-flat-panel-woo' ), true ) ) {
				while ( $processor->next_tag( array( 'tag_name' => 'li' ) ) ) {
					$card_classes = (string) $processor->get_attribute( 'class' );

					if ( preg_match( '/(?:^|\s)wc-block-product(?:\s|$)/', $card_classes ) ) {
						$processor->add_class( 'strap-panel-surface' );

						if ( 'system-flat-panel-woo' === $contract['treatment'] ) {
							$processor->add_class( 'is-style-system-flat-panel' );
						}
					}
				}
			}
		}

		$block_content = $processor->get_updated_html();
	}

	return apply_filters( 'strap_woocommerce_block_presentation_output', $block_content, $contract, $parsed_block, $context );
}

/**
 * Map Woo's Newest Products block grid to the global product-card treatment.
 *
 * Newest Products has no authored block-style control. Its presentation is
 * therefore resolved directly from Linked Products / Upsells while Woo keeps
 * ownership of its query, content visibility, rows, and native grid columns.
 *
 * @param string $block_content Rendered block markup.
 * @return string
 */
function strap_woocommerce_render_newest_products_presentation( $block_content ) {
	$treatment = strap_woocommerce_get_component_treatment( 'linked_products_upsells' );

	if ( 'native' === $treatment || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$registry   = strap_woocommerce_component_registry();
	$definition = $registry['linked_products_upsells']['treatments'][ $treatment ] ?? array();
	$processor  = new WP_HTML_Tag_Processor( $block_content );

	if ( ! $processor->next_tag( array( 'class_name' => 'wp-block-woocommerce-product-new' ) ) ) {
		return $block_content;
	}

	$processor->add_class( 'strap-woo-product-new' );

	foreach ( explode( ' ', $definition['class'] ?? '' ) as $class_name ) {
		if ( '' !== $class_name ) {
			$processor->add_class( $class_name );
		}
	}

	if ( in_array( $treatment, array( 'system-panel-woo', 'system-flat-panel-woo' ), true ) ) {
		while ( $processor->next_tag( array( 'class_name' => 'wc-block-grid__product' ) ) ) {
			$processor->add_class( 'strap-panel-surface' );

			if ( 'system-flat-panel-woo' === $treatment ) {
				$processor->add_class( 'is-style-system-flat-panel' );
			}
		}
	}

	return $processor->get_updated_html();
}
add_filter( 'render_block_woocommerce/product-new', 'strap_woocommerce_render_newest_products_presentation', 20, 1 );

/**
 * Whether the current classic Woo loop is a mapped product-card producer.
 *
 * @return bool
 */
function strap_woocommerce_is_mapped_product_card_loop() {
	if ( ! function_exists( 'wc_get_loop_prop' ) ) {
		return false;
	}

	if ( in_array( wc_get_loop_prop( 'name' ), array( 'up-sells', 'cross-sells', 'related' ), true ) ) {
		return true;
	}

	return ( function_exists( 'is_shop' ) && is_shop() )
		|| ( function_exists( 'is_product_taxonomy' ) && is_product_taxonomy() )
		|| ( is_search() && 'product' === get_query_var( 'post_type' ) );
}

/**
 * Bridge the selected Product Card treatment to Woo's classic product loops.
 *
 * The loop-start filter is the narrowest public boundary shared by legacy
 * Upsells, Related Products, Cross-sells, and classic catalog archives. No
 * query, product data, link, price, sale state, or action markup is changed.
 *
 * @param string $loop_start Rendered Woo product-loop opening markup.
 * @return string
 */
function strap_woocommerce_add_upsells_system_panel_class( $loop_start ) {
	$treatment = strap_woocommerce_get_component_treatment( 'linked_products_upsells' );

	if ( 'native' === $treatment || ! strap_woocommerce_is_mapped_product_card_loop() || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $loop_start;
	}

	$registry  = strap_woocommerce_component_registry();
	$processor = new WP_HTML_Tag_Processor( $loop_start );

	if ( $processor->next_tag( array( 'tag_name' => 'ul' ) ) ) {
		$processor->add_class( 'strap-woo-product-loop' );

		foreach ( explode( ' ', $registry['linked_products_upsells']['treatments'][ $treatment ]['class'] ) as $class_name ) {
			if ( '' !== $class_name ) {
				$processor->add_class( $class_name );
			}
		}
	}

	return $processor->get_updated_html();
}
add_filter( 'woocommerce_product_loop_start', 'strap_woocommerce_add_upsells_system_panel_class', 20 );

/**
 * Map selected classic product cards to the canonical Panel-family master.
 *
 * @param array $classes Existing Woo product classes.
 * @return array
 */
function strap_woocommerce_add_upsells_system_panel_card_class( $classes ) {
	/* Woo's block Single Product template merges wc_get_product_class() into
	 * body_class(). Component presentation roles must never reach <body>. */
	if ( doing_filter( 'body_class' ) ) {
		return $classes;
	}

	$treatment = strap_woocommerce_get_component_treatment( 'linked_products_upsells' );

	if ( in_array( $treatment, array( 'system-panel-woo', 'system-flat-panel-woo' ), true ) && strap_woocommerce_is_mapped_product_card_loop() ) {
		$classes[] = 'strap-panel-surface';

		if ( 'system-flat-panel-woo' === $treatment ) {
			$classes[] = 'is-style-system-flat-panel';
		}
	}

	return $classes;
}
add_filter( 'woocommerce_post_class', 'strap_woocommerce_add_upsells_system_panel_card_class', 20 );

/**
 * Map an admin-selected locked Woo application region to the neutral System
 * Panel surface and structural composition contracts without changing Woo's
 * nested markup.
 *
 * @param string $block_content Rendered block markup.
 * @param string $component_id  Component registry identifier.
 * @return string
 */
function strap_woocommerce_render_application_panel_surface( $block_content, $component_id ) {
	$registry = strap_woocommerce_component_registry();
	$treatment_slug = strap_woocommerce_get_component_treatment( $component_id );

	if ( 'native' === $treatment_slug || ! isset( $registry[ $component_id ]['treatments'][ $treatment_slug ]['class'] ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );

	if ( ! $processor->next_tag() ) {
		return $block_content;
	}

	$classes = explode( ' ', $registry[ $component_id ]['treatments'][ $treatment_slug ]['class'] );
	foreach ( $classes as $class_name ) {
		if ( ! empty( $class_name ) ) {
			$processor->add_class( $class_name );
		}
	}

	/*
	 * Woo's Order Summary retains its own compact content shell. It consumes
	 * only the neutral surface; the application-region inset belongs to the
	 * Cart and Checkout Fields roots.
	 */
	if ( 'checkout_totals' !== $component_id ) {
		$processor->add_class( 'strap-woocommerce-application-panel' );
	}

	return $processor->get_updated_html();
}

foreach ( array(
	'woocommerce/cart-line-items-block'  => 'cart_items',
	'woocommerce/cart-order-summary-block' => 'cart_totals',
	'woocommerce/checkout-fields-block' => 'checkout_fields',
	'woocommerce/checkout-order-summary-block' => 'checkout_totals',
) as $strap_woocommerce_application_block => $strap_woocommerce_application_component ) {
	add_filter(
		'render_block_' . $strap_woocommerce_application_block,
		static function( $block_content ) use ( $strap_woocommerce_application_component ) {
			return strap_woocommerce_render_application_panel_surface( $block_content, $strap_woocommerce_application_component );
		},
		10
	);
}
unset( $strap_woocommerce_application_block, $strap_woocommerce_application_component );

/**
 * Preserve the explicit Native opt-out for Block Cart cross-sells.
 *
 * Cart cross-sells render as a `woocommerce/product-collection` containing a
 * `woocommerce/product-template`. Non-Native Default templates now resolve the
 * shared Linked Products policy directly; only Native needs a terminal authored
 * marker so no later presentation resolver can decorate it.
 *
 * @param array $parsed_block The parsed block data.
 * @return array
 */
function strap_woocommerce_inject_cross_sells_template_style( $parsed_block ) {
	if ( 'woocommerce/product-collection' !== $parsed_block['blockName'] ) {
		return $parsed_block;
	}

	if ( ! isset( $parsed_block['attrs']['collection'] ) || 'woocommerce/product-collection/cross-sells' !== $parsed_block['attrs']['collection'] ) {
		return $parsed_block;
	}

	$treatment = strap_woocommerce_get_component_treatment( 'linked_products_upsells' );

	if ( 'native' !== $treatment ) {
		return $parsed_block;
	}

	$registry     = strap_woocommerce_component_registry();
	$class_to_add = $registry['product_cards']['treatments']['native']['class'];

	if ( isset( $parsed_block['innerBlocks'] ) && is_array( $parsed_block['innerBlocks'] ) ) {
		foreach ( $parsed_block['innerBlocks'] as &$inner_block ) {
			if ( 'woocommerce/product-template' === $inner_block['blockName'] ) {
				if ( ! isset( $inner_block['attrs']['className'] ) ) {
					$inner_block['attrs']['className'] = '';
				}
				$inner_block['attrs']['className'] .= ' ' . $class_to_add;
			}
		}
	}

	return $parsed_block;
}
add_filter( 'render_block_data', 'strap_woocommerce_inject_cross_sells_template_style', 10, 1 );

/**
 * Map native Product Collection Carousel controls to the shared SystemStrap
 * icon-button utility without changing Woo's button markup or behavior.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $parsed_block  Parsed block data.
 * @return string
 */
function strap_woocommerce_render_product_collection_carousel_icon_buttons( $block_content, $parsed_block ) {
	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) || ! str_contains( $block_content, 'is-product-collection-layout-carousel' ) || ! str_contains( $block_content, 'wc-block-next-previous-buttons__button' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );

	while ( $processor->next_tag( array( 'tag_name' => 'button' ) ) ) {
		$classes = (string) $processor->get_attribute( 'class' );

		if ( ! preg_match( '/(?:^|\\s)wc-block-next-previous-buttons__button(?:\\s|$)/', $classes ) ) {
			continue;
		}

		$processor->add_class( 'strap-icon-button' );
		$processor->add_class( 'strap-icon-button--woo' );
	}

	return $processor->get_updated_html();
}
add_filter( 'render_block_woocommerce/product-collection', 'strap_woocommerce_render_product_collection_carousel_icon_buttons', 20, 2 );

/**
 * Return the selected Account mapping class when it is non-native.
 *
 * @param string $component_id Account component registry identifier.
 * @return string
 */
function strap_woocommerce_get_account_mapping_class( $component_id ) {
	$registry  = strap_woocommerce_component_registry();
	$treatment = strap_woocommerce_get_component_treatment( $component_id );

	if ( ! isset( $registry[ $component_id ]['treatments'][ $treatment ] ) || 'native' === $treatment ) {
		return '';
	}

	return isset( $registry[ $component_id ]['treatments'][ $treatment ]['class'] ) ? $registry[ $component_id ]['treatments'][ $treatment ]['class'] : '';
}

/**
 * Return whether the optional My Account Address System Panel mapping is selected.
 *
 * @return bool
 */
function strap_woocommerce_has_address_surface_mapping() {
	return ! is_admin()
		&& is_account_page()
		&& '' !== strap_woocommerce_get_account_mapping_class( 'woo_addresses' );
}

/**
 * Start a narrow output bridge for Woo's stable My Account address overview.
 *
 * The template's direct `.woocommerce-Address` cards retain their complete
 * Woo markup; the bridge only adds the neutral shared Panel class.
 *
 * @param string $template_name Woo template name.
 */
function strap_woocommerce_before_my_account_address_surface( $template_name ) {
	if ( 'myaccount/my-address.php' !== $template_name || ! strap_woocommerce_has_address_surface_mapping() || ! is_wc_endpoint_url( 'edit-address' ) ) {
		return;
	}

	$GLOBALS['strap_woocommerce_address_surface_buffer_level'] = ob_get_level();
	ob_start();
}
add_action( 'woocommerce_before_template_part', 'strap_woocommerce_before_my_account_address_surface', 1 );

/**
 * Apply the selected neutral Panel class directly to each public Woo address card.
 *
 * @param string $template_name Woo template name.
 */
function strap_woocommerce_after_my_account_address_surface( $template_name ) {
	if ( 'myaccount/my-address.php' !== $template_name || ! isset( $GLOBALS['strap_woocommerce_address_surface_buffer_level'] ) ) {
		return;
	}

	$buffer_level = $GLOBALS['strap_woocommerce_address_surface_buffer_level'];
	unset( $GLOBALS['strap_woocommerce_address_surface_buffer_level'] );

	if ( ob_get_level() <= $buffer_level ) {
		return;
	}

	$content = ob_get_clean();

	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) || ! str_contains( $content, 'woocommerce-Address' ) ) {
		echo $content;
		return;
	}

	$processor       = new WP_HTML_Tag_Processor( $content );
	$mapping_classes = explode( ' ', strap_woocommerce_get_account_mapping_class( 'woo_addresses' ) );

	while ( $processor->next_tag( array( 'tag_name' => 'div' ) ) ) {
		$classes = (string) $processor->get_attribute( 'class' );

		if ( ! preg_match( '/(?:^|\\s)woocommerce-Address(?:\\s|$)/', $classes ) ) {
			continue;
		}

		foreach ( $mapping_classes as $class_name ) {
			if ( '' !== $class_name ) {
				$processor->add_class( $class_name );
			}
		}
	}

	echo $processor->get_updated_html();
}
add_action( 'woocommerce_after_template_part', 'strap_woocommerce_after_my_account_address_surface', 999 );

/**
 * Return whether the selected Address surface applies to My Account View Order.
 *
 * @return bool
 */
function strap_woocommerce_is_view_order_address_surface() {
	return strap_woocommerce_has_address_surface_mapping()
		&& is_wc_endpoint_url( 'view-order' );
}

/**
 * Start a narrow output bridge for Woo's View Order customer address template.
 *
 * @param string $template_name Woo template name.
 */
function strap_woocommerce_before_view_order_address_surface( $template_name ) {
	if ( 'order/order-details-customer.php' !== $template_name || ! strap_woocommerce_is_view_order_address_surface() ) {
		return;
	}

	$GLOBALS['strap_woocommerce_view_order_address_surface_buffer_level'] = ob_get_level();
	ob_start();
}
add_action( 'woocommerce_before_template_part', 'strap_woocommerce_before_view_order_address_surface', 1 );

/**
 * Apply the selected neutral Panel class to Woo's existing View Order address elements.
 *
 * @param string $template_name Woo template name.
 */
function strap_woocommerce_after_view_order_address_surface( $template_name ) {
	if ( 'order/order-details-customer.php' !== $template_name || ! isset( $GLOBALS['strap_woocommerce_view_order_address_surface_buffer_level'] ) ) {
		return;
	}

	$buffer_level = $GLOBALS['strap_woocommerce_view_order_address_surface_buffer_level'];
	unset( $GLOBALS['strap_woocommerce_view_order_address_surface_buffer_level'] );

	if ( ob_get_level() <= $buffer_level ) {
		return;
	}

	$content = ob_get_clean();

	if ( ! class_exists( 'WP_HTML_Tag_Processor' ) || ! str_contains( $content, 'woocommerce-customer-details' ) ) {
		echo $content;
		return;
	}

	$processor       = new WP_HTML_Tag_Processor( $content );
	$mapping_classes = explode( ' ', strap_woocommerce_get_account_mapping_class( 'woo_addresses' ) );

	while ( $processor->next_tag( array( 'tag_name' => 'address' ) ) ) {
		foreach ( $mapping_classes as $class_name ) {
			if ( '' !== $class_name ) {
				$processor->add_class( $class_name );
			}
		}
	}

	echo $processor->get_updated_html();
}
add_action( 'woocommerce_after_template_part', 'strap_woocommerce_after_view_order_address_surface', 999 );

/**
 * Wrap the stable Account navigation hook output only for a selected mapping.
 */
function strap_woocommerce_before_account_navigation_presentation() {
	if ( is_admin() ) {
		return;
	}

	$class_name = strap_woocommerce_get_account_mapping_class( 'account_navigation' );
	$treatment  = strap_woocommerce_get_component_treatment( 'account_navigation' );

	if ( '' === $class_name ) {
		return;
	}

	echo '<div class="strap-woocommerce-account-navigation ' . esc_attr( $class_name ) . '">';

	if ( 'system-flat-list-woo' === $treatment ) {
		$GLOBALS['strap_woocommerce_account_flat_list_buffer_level'] = ob_get_level();
		ob_start();
	}
}
add_action( 'woocommerce_before_account_navigation', 'strap_woocommerce_before_account_navigation_presentation', 1 );

/**
 * Close the selected Account navigation presentation wrapper.
 */
function strap_woocommerce_after_account_navigation_presentation() {
	if ( is_admin() || '' === strap_woocommerce_get_account_mapping_class( 'account_navigation' ) ) {
		return;
	}

	if ( isset( $GLOBALS['strap_woocommerce_account_flat_list_buffer_level'] ) ) {
		$buffer_level = $GLOBALS['strap_woocommerce_account_flat_list_buffer_level'];
		unset( $GLOBALS['strap_woocommerce_account_flat_list_buffer_level'] );

		if ( ob_get_level() > $buffer_level ) {
			$content = ob_get_clean();

			if ( class_exists( 'WP_HTML_Tag_Processor' ) ) {
				$processor = new WP_HTML_Tag_Processor( $content );

				if ( $processor->next_tag( array( 'class_name' => 'woocommerce-MyAccount-navigation' ) ) && $processor->next_tag( array( 'tag_name' => 'ul' ) ) ) {
					$processor->add_class( 'wp-block-page-list' );
					$processor->add_class( 'is-style-system-flat-list' );
					$content = $processor->get_updated_html();
				}
			}

			echo $content;
		}
	}

	echo '</div>';
}
add_action( 'woocommerce_after_account_navigation', 'strap_woocommerce_after_account_navigation_presentation', 999 );

/**
 * Return whether the optional Woo Tables System Panel mapping is selected.
 *
 * @return bool
 */
function strap_woocommerce_has_table_surface_mapping() {
	return ! is_admin() && '' !== strap_woocommerce_get_account_mapping_class( 'woo_tables' );
}

/**
 * Open the shared SystemStrap Table Surface around a stable Woo table output.
 */
function strap_woocommerce_open_table_surface() {
	if ( ! strap_woocommerce_has_table_surface_mapping() ) {
		return;
	}

	echo '<div class="strap-woocommerce-table-surface ' . esc_attr( strap_woocommerce_get_account_mapping_class( 'woo_tables' ) ) . '">';
}

/**
 * Close a selected shared SystemStrap Table Surface wrapper.
 */
function strap_woocommerce_close_table_surface() {
	if ( ! strap_woocommerce_has_table_surface_mapping() ) {
		return;
	}

	echo '</div>';
}

/**
 * Wrap Account Orders only when Woo is about to render its semantic table.
 *
 * @param bool $has_orders Whether the current account query has orders.
 */
function strap_woocommerce_before_account_orders_table_surface( $has_orders ) {
	if ( ! $has_orders ) {
		return;
	}

	strap_woocommerce_open_table_surface();
}
add_action( 'woocommerce_before_account_orders', 'strap_woocommerce_before_account_orders_table_surface', 1 );
add_action( 'woocommerce_before_account_orders_pagination', 'strap_woocommerce_close_table_surface', 1 );

/**
 * Wrap Account Payment Methods only when Woo renders its semantic table.
 *
 * @param bool $has_methods Whether the customer has saved payment methods.
 */
function strap_woocommerce_before_account_payment_methods_table_surface( $has_methods ) {
	if ( ! $has_methods ) {
		return;
	}

	strap_woocommerce_open_table_surface();
}

/**
 * Close the Account Payment Methods table surface before Woo's add-method link.
 *
 * @param bool $has_methods Whether the customer has saved payment methods.
 */
function strap_woocommerce_after_account_payment_methods_table_surface( $has_methods ) {
	if ( ! $has_methods ) {
		return;
	}

	strap_woocommerce_close_table_surface();
}
add_action( 'woocommerce_before_account_payment_methods', 'strap_woocommerce_before_account_payment_methods_table_surface', 1 );
add_action( 'woocommerce_after_account_payment_methods', 'strap_woocommerce_after_account_payment_methods_table_surface', 1 );

/**
 * Limit order-detail table bridges to the authenticated View Order endpoint.
 *
 * @return bool
 */
function strap_woocommerce_is_view_order_table_surface() {
	return strap_woocommerce_has_table_surface_mapping() && is_account_page() && is_wc_endpoint_url( 'view-order' );
}

/**
 * Wrap View Order details without changing Woo's table or responsive markup.
 */
function strap_woocommerce_before_view_order_table_surface() {
	if ( ! strap_woocommerce_is_view_order_table_surface() ) {
		return;
	}

	strap_woocommerce_open_table_surface();
}

/**
 * Close the View Order details table surface before Woo's following actions.
 */
function strap_woocommerce_after_view_order_table_surface() {
	if ( ! strap_woocommerce_is_view_order_table_surface() ) {
		return;
	}

	strap_woocommerce_close_table_surface();
}
add_action( 'woocommerce_order_details_before_order_table', 'strap_woocommerce_before_view_order_table_surface', 1 );
add_action( 'woocommerce_order_details_after_order_table', 'strap_woocommerce_after_view_order_table_surface', 1 );

/**
 * Identify Account Downloads and View Order downloads template rendering.
 *
 * @param string $template_name Woo template name.
 * @return bool
 */
function strap_woocommerce_is_account_downloads_table_template( $template_name ) {
	return 'order/order-downloads.php' === $template_name
		&& strap_woocommerce_has_table_surface_mapping()
		&& is_account_page()
		&& ( is_wc_endpoint_url( 'downloads' ) || is_wc_endpoint_url( 'view-order' ) );
}

/**
 * Open a shared surface around Woo's stable downloads template output.
 *
 * @param string $template_name Woo template name.
 */
function strap_woocommerce_before_account_downloads_table_surface( $template_name ) {
	if ( ! strap_woocommerce_is_account_downloads_table_template( $template_name ) ) {
		return;
	}

	strap_woocommerce_open_table_surface();
}

/**
 * Close a shared surface around Woo's stable downloads template output.
 *
 * @param string $template_name Woo template name.
 */
function strap_woocommerce_after_account_downloads_table_surface( $template_name ) {
	if ( ! strap_woocommerce_is_account_downloads_table_template( $template_name ) ) {
		return;
	}

	strap_woocommerce_close_table_surface();
}
add_action( 'woocommerce_before_template_part', 'strap_woocommerce_before_account_downloads_table_surface', 1 );
add_action( 'woocommerce_after_template_part', 'strap_woocommerce_after_account_downloads_table_surface', 999 );

/**
 * Return locked application block classes selected by the component mappings.
 *
 * @return array<string, string>
 */
function strap_woocommerce_get_selected_application_panel_blocks() {
	$blocks = array();

	foreach ( strap_woocommerce_component_registry() as $component_id => $component ) {
		if ( 'admin_mapping' !== ( $component['application'] ?? '' ) || empty( $component['block_name'] ) ) {
			continue;
		}

		$treatment = strap_woocommerce_get_component_treatment( $component_id );
		$class_name = $component['treatments'][ $treatment ]['class'] ?? '';

		if ( 'native' === $treatment || '' === $class_name ) {
			continue;
		}

		$blocks[ $component['block_name'] ] = trim( $class_name . ( 'checkout_totals' === $component_id ? '' : ' strap-woocommerce-application-panel' ) );
	}

	return $blocks;
}

/**
 * Register theme-owned Woo variation and structural adapter assets.
 */
function strap_woocommerce_register_presentation_assets() {
	$theme_dir = get_template_directory() . '/assets/css/style-variations/';
	$theme_uri = get_template_directory_uri() . '/assets/css/style-variations/';
	$registry  = strap_woocommerce_component_registry();
	$assets    = array(
		'product-panel' => array( 'file' => 'woocommerce-product-template-panel.css', 'deps' => array( 'strap-panel-surface' ) ),
		'product-list'  => array( 'file' => 'woocommerce-product-template-list.css', 'deps' => array() ),
		'account-nav'   => array( 'file' => 'woocommerce-account-navigation.css', 'deps' => array() ),
		'application'   => array( 'file' => 'woocommerce-application-panel-composition.css', 'deps' => array( 'strap-panel-surface' ) ),
		'tables'        => array( 'file' => 'woocommerce-table-adapter.css', 'deps' => array( 'strap-table-surface' ) ),
		'addresses'     => array( 'file' => 'woocommerce-address-adapter.css', 'deps' => array( 'strap-panel-surface' ) ),
		'blocks'        => array( 'file' => 'woocommerce-blocks-compatibility.css', 'deps' => array() ),
	);

	foreach ( $assets as $key => $asset ) {
		$file = $theme_dir . $asset['file'];

		if ( ! file_exists( $file ) ) {
			continue;
		}

		wp_register_style( 'strap-woocommerce-' . $key, $theme_uri . $asset['file'], $asset['deps'], filemtime( $file ) );
	}

	/* Account Navigation is not a Page List block, so register the canonical
	 * Flat List chain before on-demand block loading can defer these handles. */
	$account_flat_list_assets = array(
		'core-page-list-system-list'      => array( 'file' => 'core-page-list-system-list.css', 'deps' => array() ),
		'core-page-list-system-flat-list' => array( 'file' => 'core-page-list-system-flat-list.css', 'deps' => array( 'core-page-list-system-list' ) ),
	);

	foreach ( $account_flat_list_assets as $handle => $asset ) {
		$file = $theme_dir . $asset['file'];

		if ( ! file_exists( $file ) || wp_style_is( $handle, 'registered' ) ) {
			continue;
		}

		wp_register_style( $handle, $theme_uri . $asset['file'], $asset['deps'], filemtime( $file ) );
	}

	foreach ( array( 'product-panel', 'product-list' ) as $key ) {
		$file = $theme_dir . $assets[ $key ]['file'];

		if ( ! file_exists( $file ) ) {
			continue;
		}

		wp_enqueue_block_style(
			'woocommerce/product-template',
			array(
				'handle' => 'strap-woocommerce-' . $key,
				'src'    => $theme_uri . $assets[ $key ]['file'],
				'path'   => $file,
				'deps'   => $assets[ $key ]['deps'],
				'ver'    => filemtime( $file ),
			)
		);
	}

	/* Newest Products has no authored style selector. Register only the physical
	 * adapter selected by Linked Products / Upsells for this exact block. */
	$newest_products_treatment = strap_woocommerce_get_component_treatment( 'linked_products_upsells' );

	if ( 'native' !== $newest_products_treatment ) {
		$key  = in_array( $newest_products_treatment, array( 'system-list-woo', 'system-flat-list-woo' ), true ) ? 'product-list' : 'product-panel';
		$file = $theme_dir . $assets[ $key ]['file'];

		if ( file_exists( $file ) ) {
			wp_enqueue_block_style(
				'woocommerce/product-new',
				array(
					'handle' => 'strap-woocommerce-' . $key,
					'src'    => $theme_uri . $assets[ $key ]['file'],
					'path'   => $file,
					'deps'   => $assets[ $key ]['deps'],
					'ver'    => filemtime( $file ),
				)
			);
		}

		$master = $registry['linked_products_upsells']['treatments'][ $newest_products_treatment ]['theme_style_handle'] ?? '';

		if ( '' !== $master && ! in_array( $master, $assets[ $key ]['deps'], true ) ) {
			wp_enqueue_block_style( 'woocommerce/product-new', array( 'handle' => $master ) );
		}
	}

	if ( wp_style_is( 'strap-woocommerce-blocks', 'registered' ) ) {
		foreach ( array( 'woocommerce/product-collection', 'woocommerce/product-reviews' ) as $block_name ) {
			wp_enqueue_block_style(
				$block_name,
				array(
					'handle' => 'strap-woocommerce-blocks',
					'src'    => $theme_uri . $assets['blocks']['file'],
					'path'   => $theme_dir . $assets['blocks']['file'],
					'ver'    => filemtime( $theme_dir . $assets['blocks']['file'] ),
				)
			);
		}
	}
}
add_action( 'init', 'strap_woocommerce_register_presentation_assets', 19 );

/**
 * Register Product Template presentation styles, including explicit Native.
 */
function strap_woocommerce_register_product_template_styles() {
	$registry  = strap_woocommerce_component_registry();
	$component = $registry['product_cards'];

	foreach ( $component['treatments'] as $treatment_id => $treatment ) {
		$style = array(
			'name'  => $treatment['style_name'] ?? $treatment_id,
			'label' => $treatment['label'],
		);

		if ( 'system-panel-woo' === $treatment_id ) {
			$style['style_handle'] = 'strap-woocommerce-product-panel';
		} elseif ( 'system-flat-panel-woo' === $treatment_id ) {
			$style['style_handle'] = 'core-group-system-flat-panel';
		} elseif ( in_array( $treatment_id, array( 'system-list-woo', 'system-flat-list-woo' ), true ) ) {
			$style['style_handle'] = 'strap-woocommerce-product-list';
		}

		register_block_style( 'woocommerce/product-template', $style );
	}
}
add_action( 'init', 'strap_woocommerce_register_product_template_styles', 20 );

/**
 * Enqueue only mapped adapters relevant to the current Woo route.
 */
function strap_woocommerce_enqueue_mapped_presentation_styles() {
	if ( is_admin() ) {
		return;
	}

	$registry        = strap_woocommerce_component_registry();
	$requests        = array();
	$linked_products = strap_woocommerce_get_component_treatment( 'linked_products_upsells' );

	$has_classic_product_cards = ( function_exists( 'is_product' ) && is_product() )
		|| ( function_exists( 'is_cart' ) && is_cart() )
		|| ( function_exists( 'is_shop' ) && is_shop() )
		|| ( function_exists( 'is_product_taxonomy' ) && is_product_taxonomy() )
		|| ( is_search() && 'product' === get_query_var( 'post_type' ) );

	if ( $has_classic_product_cards && 'native' !== $linked_products ) {
		$asset_key              = in_array( $linked_products, array( 'system-list-woo', 'system-flat-list-woo' ), true ) ? 'product-list' : 'product-panel';
		$requests[ $asset_key ] = $registry['linked_products_upsells']['treatments'][ $linked_products ]['theme_style_handle'] ?? '';
	}

	if ( function_exists( 'is_account_page' ) && is_account_page() && is_user_logged_in() ) {
		$account_navigation = strap_woocommerce_get_component_treatment( 'account_navigation' );

		if ( 'native' !== $account_navigation ) {
			$requests['account-nav'] = $registry['account_navigation']['treatments'][ $account_navigation ]['theme_style_handle'] ?? '';
		}

		$woo_tables = strap_woocommerce_get_component_treatment( 'woo_tables' );

		if ( 'native' !== $woo_tables && ( is_wc_endpoint_url( 'orders' ) || is_wc_endpoint_url( 'downloads' ) || is_wc_endpoint_url( 'payment-methods' ) || is_wc_endpoint_url( 'view-order' ) ) ) {
			$requests['tables'] = $registry['woo_tables']['treatments'][ $woo_tables ]['theme_style_handle'] ?? '';
		}

		$woo_addresses = strap_woocommerce_get_component_treatment( 'woo_addresses' );

		if ( 'native' !== $woo_addresses && ( is_wc_endpoint_url( 'edit-address' ) || is_wc_endpoint_url( 'view-order' ) ) ) {
			$requests['addresses'] = $registry['woo_addresses']['treatments'][ $woo_addresses ]['theme_style_handle'] ?? '';
		}
	}

	if ( function_exists( 'is_cart' ) && is_cart() && ( 'native' !== strap_woocommerce_get_component_treatment( 'cart_items' ) || 'native' !== strap_woocommerce_get_component_treatment( 'cart_totals' ) ) ) {
		$requests['application'] = 'strap-panel-surface';
	}

	if ( function_exists( 'is_checkout' ) && is_checkout() && ( 'native' !== strap_woocommerce_get_component_treatment( 'checkout_fields' ) || 'native' !== strap_woocommerce_get_component_treatment( 'checkout_totals' ) ) ) {
		$requests['application'] = 'strap-panel-surface';
	}

	foreach ( $requests as $asset => $master ) {
		if ( '' !== $master && wp_style_is( $master, 'registered' ) ) {
			wp_enqueue_style( $master );
		}

		wp_enqueue_style( 'strap-woocommerce-' . $asset );
	}
}
add_action( 'wp_enqueue_scripts', 'strap_woocommerce_enqueue_mapped_presentation_styles', 21 );

/**
 * Load application composition when a mapped Cart or Checkout root is rendered.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $parsed_block  Parsed block data.
 * @return string
 */
function strap_woocommerce_enqueue_rendered_application_styles( $block_content, $parsed_block ) {
	$components = array(
		'woocommerce/cart-line-items-block'         => 'cart_items',
		'woocommerce/cart-order-summary-block'      => 'cart_totals',
		'woocommerce/checkout-fields-block'         => 'checkout_fields',
		'woocommerce/checkout-order-summary-block'  => 'checkout_totals',
	);
	$block_name = $parsed_block['blockName'] ?? '';

	if ( ! isset( $components[ $block_name ] ) || 'native' === strap_woocommerce_get_component_treatment( $components[ $block_name ] ) ) {
		return $block_content;
	}

	wp_enqueue_style( 'strap-panel-surface' );
	wp_enqueue_style( 'strap-woocommerce-application' );

	return $block_content;
}
add_filter( 'render_block', 'strap_woocommerce_enqueue_rendered_application_styles', 8, 2 );

/**
 * Supply mapped application assets to the block editor only when selected.
 */
function strap_woocommerce_enqueue_editor_presentation_styles() {
	if ( ! is_admin() || empty( strap_woocommerce_get_selected_application_panel_blocks() ) ) {
		return;
	}

	wp_enqueue_style( 'strap-panel-surface' );
	wp_enqueue_style( 'strap-woocommerce-application' );
}
add_action( 'enqueue_block_editor_assets', 'strap_woocommerce_enqueue_editor_presentation_styles', 1 );
