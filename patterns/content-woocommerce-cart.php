<?php
/**
 * Title: Content WooCommerce Cart
 * Slug: systemstrap/content-woocommerce-cart
 * Inserter: no
 */
?>
<!-- wp:woocommerce/page-content-wrapper {"page":"cart"} -->
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'WooCommerce Cart Content Pattern', 'systemstrap' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"full","layout":{"type":"constrained","wideSize":"var(--wp--style--global--content-size)"}} -->
	<div class="wp-block-group alignfull">
	<!-- wp:woocommerce/store-notices /-->
	<!-- wp:post-title {"align":"wide","level":1} /-->
	<!-- wp:post-content {"align":"wide"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:woocommerce/page-content-wrapper -->
