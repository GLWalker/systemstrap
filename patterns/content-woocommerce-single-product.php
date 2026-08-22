<?php
/**
 * Title: Content WooCommerce Single Product
 * Slug: systemstrap/content-woocommerce-single-product
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'WooCommerce Single Product Content Pattern', 'systemstrap' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"full","layout":{"type":"constrained","wideSize":"var(--wp--style--global--content-size)"}} -->
	<div class="wp-block-group alignfull">
	<!-- wp:woocommerce/breadcrumbs {"align":"none"} /-->
	<!-- wp:woocommerce/store-notices {"align":"none"} /-->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"512px"} -->
		<div class="wp-block-column" style="flex-basis:512px">
			<!-- wp:woocommerce/product-image-gallery /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:post-title {"level":1,"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
			<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"large"} /-->
			<!-- wp:post-excerpt {"__woocommerceNamespace":"woocommerce/product-query/product-summary","excerptLength":100} /-->
			<!-- wp:woocommerce/add-to-cart-form /-->

			<!-- wp:woocommerce/product-meta -->
			<div class="wp-block-woocommerce-product-meta">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:woocommerce/product-sku /-->
					<!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /-->
					<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:woocommerce/product-meta -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal"} /-->
	<!-- wp:pattern {"slug":"woocommerce-blocks/related-products"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
