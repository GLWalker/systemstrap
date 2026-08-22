<?php
/**
 * Title: Content WooCommerce Order Confirmation
 * Slug: systemstrap/content-woocommerce-order-confirmation
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'WooCommerce Order Confirmation Content Pattern', 'systemstrap' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
	<!-- wp:woocommerce/order-confirmation-status {"fontSize":"large"} /-->
	<!-- wp:woocommerce/order-confirmation-summary /-->

	<!-- wp:woocommerce/order-confirmation-totals-wrapper {"align":"wide"} -->
	<!-- wp:pattern {"slug":"woocommerce/order-confirmation-totals-heading"} /-->
	<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
	<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

	<!-- wp:woocommerce/order-confirmation-downloads-wrapper {"align":"wide"} -->
	<!-- wp:pattern {"slug":"woocommerce/order-confirmation-downloads-heading"} /-->
	<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
	<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

	<!-- wp:columns {"align":"wide","className":"wc-block-order-confirmation-address-wrapper"} -->
	<div class="wp-block-columns alignwide wc-block-order-confirmation-address-wrapper">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:woocommerce/order-confirmation-shipping-wrapper {"align":"wide"} -->
			<!-- wp:pattern {"slug":"woocommerce/order-confirmation-shipping-heading"} /-->
			<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
			<!-- /wp:woocommerce/order-confirmation-shipping-wrapper -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:woocommerce/order-confirmation-billing-wrapper {"align":"wide"} -->
			<!-- wp:pattern {"slug":"woocommerce/order-confirmation-billing-heading"} /-->
			<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
			<!-- /wp:woocommerce/order-confirmation-billing-wrapper -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {"align":"wide"} -->
	<!-- wp:pattern {"slug":"woocommerce/order-confirmation-additional-fields-heading"} /-->
	<!-- wp:woocommerce/order-confirmation-additional-fields /-->
	<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

	<!-- wp:woocommerce/order-confirmation-additional-information /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
