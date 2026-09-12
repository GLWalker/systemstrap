<?php

/**
 * Title: Query Directory Grid
 * Slug: systemstrap/query-directory-grid
 * Categories: query, posts, systemstrap
 * Keywords: directory, grid, cards, listings, query, posts, taxonomy, systemstrap
 * Description: A responsive directory grid with taxonomy badges, excerpts, and pagination.
 * Viewport Width: 1440
 */

?>

<!-- wp:query {"queryId":103,"query":{"perPage":null,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"metadata":{"patternName":"systemstrap/query-directory-grid"},"className":"query-directory-grid query-directory-grid__query is-style-system-ui-query","layout":{"type":"constrained"}} -->
<div class="wp-block-query query-directory-grid query-directory-grid__query is-style-system-ui-query">

	<!-- wp:post-template {"className":"query-directory-grid__items","layout":{"type":"grid","columnCount":3}} -->

	<!-- wp:group {"className":"query-directory-grid__card","layout":{"type":"default"}} -->
	<div class="wp-block-group query-directory-grid__card">

		<!-- wp:group {"className":"query-directory-grid__body","layout":{"type":"default"}} -->
		<div class="wp-block-group query-directory-grid__body">

			<!-- wp:post-title {"level":3,"isLink":true,"className":"query-directory-grid__title","fontSize":"large"} /-->

			<!-- wp:post-terms {"term":"category","separator":" ","className":"query-directory-grid__category is-style-system-badge"} /-->

			<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20,"className":"query-directory-grid__excerpt"} /-->

			<!-- wp:group {"className":"query-directory-grid__card-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group query-directory-grid__card-footer">

				<!-- wp:group {"className":"query-directory-grid__tags","layout":{"type":"default"}} -->
				<div class="wp-block-group query-directory-grid__tags">

					<!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-directory-grid__tags-list is-style-system-badge"} /-->

				</div>
				<!-- /wp:group -->

				<!-- wp:icon {"icon":"core/chevron-right","className":"query-directory-grid__arrow"} /-->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->

	<!-- wp:paragraph {"className":"query-directory-grid__empty"} -->
	<p class="query-directory-grid__empty"><?php
																				esc_html_e('No listings were found.', 'systemstrap');
																				?></p>
	<!-- /wp:paragraph -->

	<!-- /wp:query-no-results -->

	<!-- wp:group {"className":"query-directory-grid__footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group query-directory-grid__footer">

		<!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

		<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-directory-grid__pagination is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->

		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->

		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->