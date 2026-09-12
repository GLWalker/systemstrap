<?php

/**
 * Title: Latest Posts List
 * Slug: systemstrap/query-latest-posts-list
 * Categories: query, posts, systemstrap
 * Keywords: latest posts, query, posts, archive, list, editorial, systemstrap
 * Description: A responsive latest-posts query with a stacked date, featured image, excerpt, taxonomy terms, and pagination.
 * Viewport Width: 1440
 */

?>

<!-- wp:group {"tagName":"section","metadata":{"patternName":"systemstrap/query-latest-posts-list"},"className":"query-latest-posts is-style-system-panel","layout":{"type":"constrained"}} -->
<section class="wp-block-group query-latest-posts is-style-system-panel">

	<!-- wp:group {"tagName":"header","className":"query-latest-posts__header is-style-system-panel-header","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<header class="wp-block-group query-latest-posts__header is-style-system-panel-header">

		<!-- wp:icon {"icon":"core/calendar","className":"query-latest-posts__header-icon"} /-->

		<!-- wp:heading {"className":"query-directory-listing__heading","fontSize":"large"} -->
		<h2 class="wp-block-heading query-directory-listing__heading has-large-font-size"><?php
																							esc_html_e('Latest Posts', 'systemstrap');
																							?></h2>
		<!-- /wp:heading -->

	</header>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":104,"query":{"perPage":null,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"className":"query-latest-posts__query is-style-system-ui-query","layout":{"type":"constrained"}} -->
	<div class="wp-block-query query-latest-posts__query is-style-system-ui-query">

		<!-- wp:post-template {"className":"query-latest-posts__items"} -->

		<!-- wp:group {"className":"query-latest-posts__row is-style-default","layout":{"type":"default"}} -->
		<div class="wp-block-group query-latest-posts__row is-style-default">

			<!-- wp:group {"className":"query-latest-posts__date is-style-default","layout":{"type":"default"}} -->
			<div class="wp-block-group query-latest-posts__date is-style-default">

				<!-- wp:post-date {"format":"M","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-month"} /-->

				<!-- wp:post-date {"format":"j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-day"} /-->

				<!-- wp:post-date {"format":"Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-year"} /-->

			</div>
			<!-- /wp:group -->

			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"left","className":"query-latest-posts__image"} /-->

			<!-- wp:group {"className":"query-latest-posts__content","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
			<div class="wp-block-group query-latest-posts__content">

				<!-- wp:post-title {"level":3,"isLink":true,"className":"query-latest-posts__title","fontSize":"large"} /-->

				<!-- wp:post-terms {"term":"category","separator":" ","className":"query-latest-posts__category is-style-system-badge"} /-->

				<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":22,"className":"query-latest-posts__excerpt"} /-->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"query-latest-posts__tags","layout":{"type":"default"}} -->
			<div class="wp-block-group query-latest-posts__tags">

				<!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-latest-posts__tags-list is-style-system-badge"} /-->

			</div>
			<!-- /wp:group -->

			<!-- wp:icon {"icon":"core/chevron-right","className":"query-latest-posts__arrow"} /-->

		</div>
		<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->

		<!-- wp:paragraph {"className":"query-latest-posts__empty"} -->
		<p class="query-latest-posts__empty"><?php
												esc_html_e('No posts were found.', 'systemstrap');
												?></p>
		<!-- /wp:paragraph -->

		<!-- /wp:query-no-results -->

		<!-- wp:group {"className":"query-latest-posts__footer is-style-system-panel-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group query-latest-posts__footer is-style-system-panel-footer">

			<!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

			<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-latest-posts__pagination is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->

			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next /-->

			<!-- /wp:query-pagination -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:query -->

</section>
<!-- /wp:group -->