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
