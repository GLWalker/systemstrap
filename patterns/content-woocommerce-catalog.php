<?php

/**
 * Title: Content WooCommerce Catalog
 * Slug: systemstrap/content-woocommerce-catalog
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"section","metadata":{"patternName":"systemstrap/content-woocommerce-catalog"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"full","layout":{"type":"constrained","wideSize":"var(--wp--style--global--content-size)"}} -->
	<div class="wp-block-group alignfull">

		<!-- wp:woocommerce/breadcrumbs {"align":"none"} /-->

		<!-- wp:query-title {"type":"archive","showPrefix":false,"align":"wide"} /-->

		<!-- wp:term-description {"align":"wide"} /-->

		<!-- wp:woocommerce/store-notices {"align":"none"} /-->

		<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:woocommerce/product-results-count {"fontSize":"small"} /-->

			<!-- wp:woocommerce/catalog-sorting /-->

		</div>
		<!-- /wp:group -->

		<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":[],"isProductCollectionBlock":true,"perPage":10,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill","fixedWidth":""},"queryContextIncludes":["collection"],"align":"wide"} -->
		<div class="wp-block-woocommerce-product-collection alignwide">

			<!-- wp:woocommerce/product-template {"className":"is-style-system-list-woo"} -->

				<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} -->

					<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"right"} /-->

				<!-- /wp:woocommerce/product-image -->

				<!-- wp:post-title {"isLink":true,"style":{"typography":{"textAlign":"center"}},"fontSize":"xx-large","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

				<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

				<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small","className":"is-style-fill","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->

			<!-- /wp:woocommerce/product-template -->

			<!-- wp:query-pagination {"className":"is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"center"}} -->

				<!-- wp:query-pagination-previous /-->

				<!-- wp:query-pagination-numbers /-->

				<!-- wp:query-pagination-next /-->

			<!-- /wp:query-pagination -->

			<!-- wp:woocommerce/product-collection-no-results -->

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
				<div class="wp-block-group">

					<!-- wp:paragraph {"fontSize":"medium"} -->
					<p class="has-medium-font-size">
						<strong><?php esc_html_e( 'No results found', 'systemstrap' ); ?></strong>
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>
						<?php esc_html_e( 'You can try', 'systemstrap' ); ?>
						<a class="wc-link-clear-any-filters" href="#"><?php esc_html_e( 'clearing any filters', 'systemstrap' ); ?></a>
						<?php esc_html_e( 'or head to our', 'systemstrap' ); ?>
						<a class="wc-link-stores-home" href="#"><?php esc_html_e( "store's home", 'systemstrap' ); ?></a>
					</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			<!-- /wp:woocommerce/product-collection-no-results -->

		</div>
		<!-- /wp:woocommerce/product-collection -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->