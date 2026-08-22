<?php
/**
 * Title: Content WooCommerce Product Sidebar
 * Slug: systemstrap/content-woocommerce-product-sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Product Sidebar Content', 'systemstrap' ); ?>"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Product Categories', 'systemstrap' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:woocommerce/product-categories /-->
</div>
<!-- /wp:group -->
