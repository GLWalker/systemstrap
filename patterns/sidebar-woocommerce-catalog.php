<?php
/**
 * Title: WooCommerce Catalog Sidebar
 * Slug: systemstrap/sidebar-woocommerce-catalog
 * Description: Complementary product discovery and navigation for WooCommerce catalog layouts.
 * Categories: systemstrap
 */
?>

<!-- wp:group {"tagName":"aside","anchor":"woocommerce-catalog-sidebar","metadata":{"patternName":"systemstrap/sidebar-woocommerce-catalog"},"align":"full","className":"woocommerce-catalog-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="woocommerce-catalog-sidebar" class="wp-block-group alignfull woocommerce-catalog-sidebar">

	<!-- wp:heading {"level":2,"anchor":"woocommerce-catalog-sidebar-title","className":"screen-reader-text"} -->
	<h2 class="wp-block-heading screen-reader-text" id="woocommerce-catalog-sidebar-title"><?php esc_html_e( 'Product Catalog Sidebar', 'systemstrap' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Search Products', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search products","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"}} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Product Categories', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-categories {"hasCount":true,"hasImage":false,"isDropdown":false} /-->

	</div>
	<!-- /wp:group -->

</aside>
<!-- /wp:group -->