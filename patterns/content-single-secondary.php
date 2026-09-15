<?php

/**
 * Title: Content Single Secondary
 * Slug: systemstrap/content-single-secondary
 * Inserter: no
 */

?>

<!-- wp:group {"metadata":{"patternName":"systemstrap/content-single-secondary"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"bs-secondary-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-bs-secondary-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">

		<!-- wp:search {"className":"is-layout-flex","label":"<?php esc_attr_e( 'Search', 'systemstrap' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search Anything', 'systemstrap' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'systemstrap' ); ?>","buttonUseIcon":true} /-->

		<!-- wp:group {"className":"is-style-system-panel","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"bs-primary-bg-subtle","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-system-panel has-bs-primary-bg-subtle-background-color has-background">

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php esc_html_e( 'Latest Posts', 'systemstrap' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:latest-posts {"excerptLength":11,"displayPostDate":true,"featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"className":"is-style-system-list"} /-->

		</div>
		<!-- /wp:group -->

		<!-- wp:archives {"showPostCounts":true,"type":"yearly","className":"is-style-system-list"} /-->

		<!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-system-panel has-base-background-color has-background">

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading"><?php esc_html_e( 'Tags', 'systemstrap' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:tag-cloud {"numberOfTags":20,"largestFontSize":"14pt","align":"center","className":"is-style-system-tags"} /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->