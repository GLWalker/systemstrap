<?php

/**
 * Title: Query Directory Image Grid
 * Slug: systemstrap/query-directory-image-grid
 * Categories: query, posts, systemstrap
 * Keywords: directory, grid, cards, listings, query, posts, taxonomy, systemstrap
 * Description: A responsive directory grid with featured images, taxonomy badges, excerpts, and pagination.
 * Viewport Width: 1440
 */

?>

<!-- wp:query {"queryId":105,"query":{"perPage":null,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"metadata":{"patternName":"systemstrap/query-directory-image-grid"},"className":"query-directory-image-grid query-directory-image-grid__query is-style-system-ui-query","layout":{"type":"constrained"}} -->
<div class="wp-block-query query-directory-image-grid query-directory-image-grid__query is-style-system-ui-query">

	<!-- wp:post-template {"className":"query-directory-image-grid__items","layout":{"type":"grid","columnCount":3}} -->

	<!-- wp:group {"className":"query-directory-image-grid__card","layout":{"type":"default"}} -->
	<div class="wp-block-group query-directory-image-grid__card">

		<!-- wp:group {"className":"query-directory-image-grid__media","layout":{"type":"default"}} -->
		<div class="wp-block-group query-directory-image-grid__media">

			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"100%","className":"query-directory-image-grid__image"} /-->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"query-directory-image-grid__body","layout":{"type":"default"}} -->
		<div class="wp-block-group query-directory-image-grid__body">

			<!-- wp:post-title {"level":3,"isLink":true,"className":"query-directory-image-grid__title","fontSize":"large"} /-->

			<!-- wp:post-terms {"term":"category","separator":" ","className":"query-directory-image-grid__category is-style-system-badge"} /-->

			<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20,"className":"query-directory-image-grid__excerpt"} /-->

			<!-- wp:group {"className":"query-directory-image-grid__card-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group query-directory-image-grid__card-footer">

				<!-- wp:group {"className":"query-directory-image-grid__tags","layout":{"type":"default"}} -->
				<div class="wp-block-group query-directory-image-grid__tags">

					<!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-directory-image-grid__tags-list is-style-system-badge"} /-->

				</div>
				<!-- /wp:group -->

				<!-- wp:icon {"icon":"core/chevron-right","className":"query-directory-image-grid__arrow"} /-->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->

	<!-- wp:paragraph {"className":"query-directory-image-grid__empty"} -->
	<p class="query-directory-image-grid__empty"><?php
																					esc_html_e('No listings were found.', 'systemstrap');
																					?></p>
	<!-- /wp:paragraph -->

	<!-- /wp:query-no-results -->

	<!-- wp:group {"className":"query-directory-image-grid__footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group query-directory-image-grid__footer">

		<!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

		<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-directory-image-grid__pagination is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->

		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->

		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->