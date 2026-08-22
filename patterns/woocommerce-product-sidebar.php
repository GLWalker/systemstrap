<?php
/**
 * Title: Product + Sidebar
 * Slug: systemstrap/woocommerce-product-sidebar
 * Categories: systemstrap
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Product + Sidebar', 'systemstrap' ); ?>"},"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;margin-left:0;margin-right:0">
	<!-- wp:columns {"verticalAlignment":"top","metadata":{"patternName":"woocommerce-product-sidebar","name":"<?php esc_attr_e( 'Product + Sidebar Columns', 'systemstrap' ); ?>"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"left":"0"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top" style="margin-top:0;margin-bottom:0;margin-left:0;margin-right:0">
		<!-- wp:column {"verticalAlignment":"top","width":"","metadata":{"name":"<?php esc_attr_e( 'Product Main Column', 'systemstrap' ); ?>"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:template-part {"slug":"part-woocommerce-single-product","tagName":"main","area":"uncategorized","className":"site-main main-woocommerce-single-product"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"33%","metadata":{"name":"<?php esc_attr_e( 'Product Sidebar', 'systemstrap' ); ?>"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33%">
			<!-- wp:template-part {"slug":"part-woocommerce-product-sidebar","tagName":"aside","area":"uncategorized","align":"wide","className":"secondary-content"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
