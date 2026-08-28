<?php
/**
 * Optional plugin compatibility for SystemStrap-owned page contracts.
 *
 * @package systemstrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Restore the SystemStrap content-width contract on WooCommerce page wrappers.
 */
function strap_enqueue_woocommerce_width_compatibility() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	/* WooCommerce applies a generic 1000px block-theme max-width to Cart,
	 * Checkout, and Account application wrappers. SystemStrap already owns the
	 * page-width contract, so this restores its contentSize; it is not component styling. */
	$css = '
.woocommerce-cart main .woocommerce,
.woocommerce-checkout main .woocommerce,
.woocommerce-account main .woocommerce {
	max-width: var(--wp--style--global--content-size) !important;
}
';

	wp_add_inline_style( 'strap-main-styles', $css );
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_woocommerce_width_compatibility', 9 );

/**
 * Return safe custom Product Template surface declarations.
 *
 * @param array $parsed_block Parsed block data.
 * @return array<string, string>
 */
function strap_get_woocommerce_product_template_custom_surface_declarations( $parsed_block ) {
	$attributes = isset( $parsed_block['attrs'] ) && is_array( $parsed_block['attrs'] ) ? $parsed_block['attrs'] : array();
	$style      = isset( $attributes['style'] ) && is_array( $attributes['style'] ) ? $attributes['style'] : array();
	$color      = isset( $style['color'] ) && is_array( $style['color'] ) ? $style['color'] : array();
	$values     = array(
		'background' => isset( $color['background'] ) && is_string( $color['background'] ) ? $color['background'] : '',
		'gradient'   => isset( $color['gradient'] ) && is_string( $color['gradient'] ) ? $color['gradient'] : '',
	);
	$styles     = array();

	foreach ( $values as $property => $value ) {
		if ( '' === trim( $value ) ) {
			continue;
		}

		$declaration = safecss_filter_attr( '--strap-woocommerce-product-template-' . $property . ':' . trim( $value ) . ';' );

		if ( str_starts_with( $declaration, '--strap-woocommerce-product-template-' . $property . ':' ) ) {
			$styles[ $property ] = rtrim( $declaration, ';' );
		}
	}

	return $styles;
}

/**
 * Route custom Product Template paint to WooCommerce's public product items.
 *
 * @param string $block_content Rendered block markup.
 * @param array  $parsed_block  Parsed block data.
 * @return string
 */
function strap_render_woocommerce_product_template_compatibility( $block_content, $parsed_block ) {
	$styles = strap_get_woocommerce_product_template_custom_surface_declarations( $parsed_block );

	if ( empty( $styles ) || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );

	if ( ! $processor->next_tag( array( 'tag_name' => 'ul' ) ) ) {
		return $block_content;
	}

	foreach ( array_keys( $styles ) as $property ) {
		$processor->add_class( 'has-strap-woocommerce-product-template-custom-' . $property );
	}

	$current_style = trim( (string) $processor->get_attribute( 'style' ) );
	$processor->set_attribute( 'style', trim( $current_style . ';' . implode( ';', $styles ), ';' ) . ';' );

	return $processor->get_updated_html();
}

/**
 * Register Product Template compatibility only while WooCommerce is active.
 */
function strap_register_woocommerce_product_template_compatibility() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	add_filter( 'render_block_woocommerce/product-template', 'strap_render_woocommerce_product_template_compatibility', 10, 2 );
}
add_action( 'init', 'strap_register_woocommerce_product_template_compatibility', 20 );

/**
 * Generate Product Template presentation compatibility CSS.
 *
 * @return string
 */
function strap_get_woocommerce_product_template_compatibility_css() {
	$settings  = wp_get_global_settings();
	$colors    = $settings['color']['palette']['theme'] ?? array();
	$gradients = $settings['color']['gradients']['theme'] ?? array();
	$root      = ':is(.wp-block-woocommerce-product-template, .wc-block-product-template)';
	$css       = '
/* Woo Product Template compatibility: direct public product items own paint. */
' . $root . '.has-strap-woocommerce-product-template-custom-background { background-color: transparent !important; }
' . $root . '.has-strap-woocommerce-product-template-custom-background > li.wc-block-product { background-color: var(--strap-woocommerce-product-template-background) !important; }
' . $root . '.has-strap-woocommerce-product-template-custom-gradient { background-image: none !important; }
' . $root . '.has-strap-woocommerce-product-template-custom-gradient > li.wc-block-product { background-image: var(--strap-woocommerce-product-template-gradient) !important; }

/* Woo Stack has no parent gap support; normalize its public item seam only. */
' . $root . '.is-product-collection-layout-list > li.wc-block-product:not(:last-child) { margin-block-end: var(--wp--style--block-gap, var(--wp--preset--spacing--30)); }

/* Product Template owns this default; an authored Product Button size wins. */
.wc-block-product-template > li.wc-block-product .wp-block-button.wc-block-components-product-button > .wp-block-button__link.wp-element-button.wc-block-components-product-button__button:not(:where(
	[style*="font-size"],
	.has-x-small-font-size,
	.has-small-font-size,
	.has-medium-font-size,
	.has-large-font-size,
	.has-x-large-font-size,
	.has-xx-large-font-size,
	.has-xxx-large-font-size,
	.has-huge-font-size
)) { font-size: var(--wp--preset--font-size--small); }
';

	foreach ( $colors as $color ) {
		$slug = sanitize_title( $color['slug'] ?? '' );

		if ( '' === $slug ) {
			continue;
		}

		$css .= sprintf(
			"%1\$s.has-%2\$s-background-color { background-color: transparent !important; }\n%1\$s.has-%2\$s-background-color > li.wc-block-product { background-color: var(--wp--preset--color--%2\$s) !important; }\n",
			$root,
			$slug
		);
	}

	foreach ( $gradients as $gradient ) {
		$slug = sanitize_title( $gradient['slug'] ?? '' );

		if ( '' === $slug ) {
			continue;
		}

		$css .= sprintf(
			"%1\$s.has-%2\$s-gradient-background { background-image: none !important; }\n%1\$s.has-%2\$s-gradient-background > li.wc-block-product { background-image: var(--wp--preset--gradient--%2\$s) !important; }\n",
			$root,
			$slug
		);
	}

	return $css;
}

/**
 * Emit Product Template compatibility in the active Global Styles lane.
 */
function strap_enqueue_woocommerce_product_template_compatibility() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	strap_ensure_global_styles_handle();
	wp_add_inline_style( 'global-styles', strap_get_woocommerce_product_template_compatibility_css() );
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_woocommerce_product_template_compatibility', 9998 );
add_action( 'enqueue_block_editor_assets', 'strap_enqueue_woocommerce_product_template_compatibility', 9998 );

/**
 * Return baseline Woo Product Reviews compatibility CSS.
 *
 * This keeps public review output coherent with SystemStrap Comments without
 * applying optional List or Panel presentation.
 *
 * @return string
 */
function strap_get_woocommerce_reviews_compatibility_css() {
	return '
/* Woo Product Reviews baseline: native review data and interaction remain Woo-owned. */
.wp-block-woocommerce-product-reviews { display: grid; gap: var(--wp--preset--spacing--30); }
.wp-block-woocommerce-product-reviews :is(.wp-block-woocommerce-product-review-template, #reviews #comments > .commentlist) { list-style: none; margin: 0; padding: 0; }
.wp-block-woocommerce-product-reviews :is(.wp-block-woocommerce-product-review-template, #reviews #comments > .commentlist) > li + li { margin-top: var(--wp--preset--spacing--30); }
.wp-block-woocommerce-product-reviews :is(.wp-block-woocommerce-product-review-author-name, #reviews #comments .comment-author) { font-weight: var(--wp--custom--font-weight-button); }
.wp-block-woocommerce-product-reviews :is(.wp-block-woocommerce-product-review-date, #reviews #comments .meta) { font-size: var(--wp--preset--font-size--small); opacity: .68; }
.wp-block-woocommerce-product-reviews :is(.wp-block-woocommerce-product-review-content, #reviews #comments .description) { font-size: var(--wp--preset--font-size--medium); }
.wp-block-woocommerce-product-reviews :is(.wp-block-woocommerce-product-review-template, #reviews #comments .commentlist) ol { list-style: none; margin: var(--wp--preset--spacing--20) 0 0 var(--wp--preset--spacing--30); padding: var(--wp--preset--spacing--20) 0 0 var(--wp--preset--spacing--20); }
.wp-block-woocommerce-product-reviews .comment-respond { display: grid; gap: var(--wp--preset--spacing--20); }
.wp-block-woocommerce-product-reviews .comment-respond :is(.comment-form-author, .comment-form-email, .comment-form-url, .comment-form-comment, .comment-form-rating, .comment-form-cookies-consent, .form-submit) { margin: 0; }
.wp-block-woocommerce-product-reviews .comment-respond :is(.comment-form-author, .comment-form-email, .comment-form-url, .comment-form-comment, .comment-form-rating) > label { display: block; margin-bottom: var(--wp--preset--spacing--10); }
.wp-block-woocommerce-product-reviews .comment-respond form.comment-form { display: grid; gap: var(--wp--preset--spacing--20); }
.wp-block-woocommerce-product-reviews .comment-respond form.comment-form > .form-submit { margin-top: var(--wp--preset--spacing--10) !important; }
.wp-block-woocommerce-product-reviews :is(.wp-block-woocommerce-product-reviews-pagination, .woocommerce-pagination) { display: flex; flex-wrap: wrap; gap: var(--wp--preset--spacing--20); font-size: var(--wp--preset--font-size--small); }
';
}

/**
 * Emit Product Reviews baseline compatibility in the Global Styles lane.
 */
function strap_enqueue_woocommerce_reviews_compatibility() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	strap_ensure_global_styles_handle();
	wp_add_inline_style( 'global-styles', strap_get_woocommerce_reviews_compatibility_css() );
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_woocommerce_reviews_compatibility', 9998 );
add_action( 'enqueue_block_editor_assets', 'strap_enqueue_woocommerce_reviews_compatibility', 9998 );

/**
 * Return baseline My Account compatibility CSS.
 *
 * This normalizes only WooCommerce's stable public application markup to the
 * existing SystemStrap typography, control, table, and spacing contracts.
 * Optional System UI presentation remains companion-owned.
 *
 * @return string
 */
function strap_get_woocommerce_account_compatibility_css() {
	return '
/* Woo My Account baseline: public application semantics remain Woo-owned. */
.woocommerce-account .woocommerce-MyAccount-navigation > ul { list-style: none; margin: 0; padding: 0; }
.woocommerce-account .woocommerce-MyAccount-navigation li { margin: 0; padding: 0 !important; }
.woocommerce-account .woocommerce-MyAccount-navigation li + li { margin-top: 0; }
.woocommerce-account .woocommerce-MyAccount-navigation a { display: block; padding: var(--wp--preset--spacing--10) var(--wp--preset--spacing--20); font-family: var(--wp--preset--font-family--button); font-weight: var(--wp--custom--font-weight-nav); line-height: 1.3; text-decoration: none; }
.woocommerce-account .woocommerce-MyAccount-navigation a:hover { text-decoration: underline; }
.woocommerce-account .woocommerce-MyAccount-navigation a[aria-current="page"] { font-weight: var(--wp--custom--font-weight-heading); }
.woocommerce-account .woocommerce-MyAccount-content { display: grid; gap: var(--wp--preset--spacing--30); }
.woocommerce-account .woocommerce :is(h2, h3) { font-family: var(--wp--preset--font-family--heading); font-weight: var(--wp--custom--font-weight-heading); }
.woocommerce-account .woocommerce :is(.woocommerce-form-row, .form-row) { margin: 0 0 var(--wp--preset--spacing--20); }
.woocommerce-account .woocommerce :is(.woocommerce-form-row, .form-row) > label { display: block; margin-bottom: var(--wp--preset--spacing--10); font-family: var(--wp--preset--font-family--body); font-weight: var(--wp--custom--font-weight-button); }
.woocommerce-account .woocommerce :is(input, select, textarea) { font: inherit; line-height: 1.5; }
.woocommerce-account .woocommerce :is(input, select, textarea):disabled { cursor: not-allowed; opacity: .65; }
.woocommerce-account .woocommerce .woocommerce-invalid :is(input, select, textarea) { border-color: var(--wp--custom--form-invalid-border-color); }
.woocommerce-account .woocommerce :is(.woocommerce-button.button, .button) { font-family: var(--wp--preset--font-family--button); font-size: var(--wp--preset--font-size--small); font-weight: var(--wp--custom--font-weight-button); line-height: 1.3; }
.woocommerce-account .woocommerce-MyAccount-content table { width: 100%; border-collapse: collapse; font-family: var(--wp--preset--font-family--body); }
.woocommerce-account .woocommerce-MyAccount-content :is(th, td) { padding: var(--wp--preset--spacing--20) var(--wp--preset--spacing--30); border-color: var(--wp--preset--color--border-color); border-style: var(--wp--custom--border-style); border-width: 0 0 var(--wp--custom--border-width); text-align: start; }
.woocommerce-account .woocommerce-MyAccount-content th { font-weight: var(--wp--custom--font-weight-heading); }
.woocommerce-account :is(.woocommerce-error, .woocommerce-info, .woocommerce-message) { margin: 0 0 var(--wp--preset--spacing--30); font-size: var(--wp--preset--font-size--small); line-height: 1.5; }
.woocommerce-account :is(a, button, input, select, textarea):focus-visible { outline: 2px solid var(--wp--custom--form-focus-border-color); outline-offset: 2px; }
@media (max-width: 600px) {
	.woocommerce-account .woocommerce-MyAccount-content :is(th, td) { padding-inline: var(--wp--preset--spacing--20); }
}
';
}

/**
 * Emit My Account baseline compatibility only while WooCommerce is active.
 */
function strap_enqueue_woocommerce_account_compatibility() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	strap_ensure_global_styles_handle();
	wp_add_inline_style( 'global-styles', strap_get_woocommerce_account_compatibility_css() );
}
add_action( 'wp_enqueue_scripts', 'strap_enqueue_woocommerce_account_compatibility', 9998 );
