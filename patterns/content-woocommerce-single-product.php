<?php

/**
 * Title: Content WooCommerce Single Product
 * Slug: systemstrap/content-woocommerce-single-product
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e('WooCommerce Single Product Content Pattern', 'systemstrap'); ?>"},"align":"full","className":"woocommerce product","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull woocommerce product" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"full","layout":{"type":"constrained","wideSize":"var(--wp--style--global--content-size)"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:woocommerce/breadcrumbs {"align":"none"} /-->
		<!-- wp:woocommerce/store-notices {"align":"none"} /-->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"512px"} -->
			<div class="wp-block-column" style="flex-basis:512px">
				<!-- wp:woocommerce/product-gallery -->
				<div class="wp-block-woocommerce-product-gallery wc-block-product-gallery">
					<!-- wp:woocommerce/product-gallery-thumbnails /-->

					<!-- wp:woocommerce/product-gallery-large-image -->
					<div class="wp-block-woocommerce-product-gallery-large-image wc-block-product-gallery-large-image__inner-blocks">
						<!-- wp:woocommerce/product-image {"showProductLink":false,"showSaleBadge":false} -->
						<div class="is-loading"></div>
						<!-- /wp:woocommerce/product-image -->

						<!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->

						<!-- wp:woocommerce/product-gallery-large-image-next-previous -->
						<div class="wp-block-woocommerce-product-gallery-large-image-next-previous"></div>
						<!-- /wp:woocommerce/product-gallery-large-image-next-previous -->
					</div>
					<!-- /wp:woocommerce/product-gallery-large-image -->
				</div>
				<!-- /wp:woocommerce/product-gallery -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:post-title {"level":1,"__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
				<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true} /-->
				<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"large"} /-->
				<!-- wp:woocommerce/product-summary {"isDescendentOfSingleProductTemplate":true} /-->
				<!-- wp:woocommerce/add-to-cart-with-options /-->

				<!-- wp:woocommerce/product-meta -->
				<div class="wp-block-woocommerce-product-meta"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-terms {"term":"product_cat","prefix":"Category: ","separator":" ","className":"is-style-system-badge","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

						<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: ","separator":" ","className":"is-style-system-badge"} /-->

						<!-- wp:woocommerce/product-sku /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:woocommerce/product-meta -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:woocommerce/product-details {"align":"wide","className":"is-style-minimal"} /-->
		<!-- wp:pattern {"slug":"systemstrap/woocommerce-related-products"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
