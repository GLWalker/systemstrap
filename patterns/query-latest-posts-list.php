<?php

/**
 * Title: Latest Posts List
 * Slug: systemstrap/query-latest-posts-list
 * Categories: query, posts, systemstrap
 * Keywords: latest posts, query, list, editorial
 * Description: A responsive latest-posts query with a stacked date, featured image, excerpt, taxonomy terms, and pagination.
 * Viewport Width: 1440
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"categories":["systemstrap"],"patternName":"systemstrap/query-latest-posts-list","name":"Latest Posts List"},"className":"query-latest-posts query-directory-listing","layout":{"type":"constrained"}} -->
<section class="wp-block-group query-latest-posts query-directory-listing"><!-- wp:group {"tagName":"header","className":"query-latest-posts__header query-directory-listing__header","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<header class="wp-block-group query-latest-posts__header query-directory-listing__header"><!-- wp:icon {"icon":"core/calendar","className":"query-latest-posts__header-icon"} /-->

		<!-- wp:heading {"className":"query-latest-posts__heading"} -->
		<h2 class="wp-block-heading query-latest-posts__heading">Latest Posts</h2>
		<!-- /wp:heading -->
	</header>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":104,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[]},"enhancedPagination":true,"className":"query-latest-posts__query query-directory-listing__query","layout":{"type":"constrained"}} -->
	<div class="wp-block-query query-latest-posts__query query-directory-listing__query"><!-- wp:post-template {"className":"query-latest-posts__items query-directory-listing__items"} -->
		<!-- wp:group {"className":"query-latest-posts__row query-directory-listing__row","layout":{"type":"default"}} -->
		<div class="wp-block-group query-latest-posts__row query-directory-listing__row"><!-- wp:group {"className":"query-latest-posts__date","layout":{"type":"default"}} -->
			<div class="wp-block-group query-latest-posts__date"><!-- wp:post-date {"format":"M","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-month"} /-->

				<!-- wp:post-date {"format":"j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-day"} /-->

				<!-- wp:post-date {"format":"Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-year"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"left","className":"query-latest-posts__image"} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"className":"query-latest-posts__title query-directory-listing__title"} /-->

			<!-- wp:post-terms {"term":"category","separator":" ","className":"query-latest-posts__category query-directory-listing__post-terms"} /-->

			<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":22,"className":"query-latest-posts__excerpt query-directory-listing__excerpt"} /-->

			<!-- wp:group {"className":"query-latest-posts__tags query-directory-listing__tags","layout":{"type":"default"}} -->
			<div class="wp-block-group query-latest-posts__tags query-directory-listing__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-latest-posts__tags-list query-directory-listing__post-terms"} /--></div>
			<!-- /wp:group -->

			<!-- wp:icon {"icon":"core/chevron-right","className":"query-latest-posts__arrow query-directory-listing__arrow"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"className":"query-latest-posts__empty query-directory-listing__empty"} -->
		<p class="query-latest-posts__empty query-directory-listing__empty">No posts were found.</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

		<!-- wp:group {"className":"query-latest-posts__footer query-directory-listing__footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group query-latest-posts__footer query-directory-listing__footer"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

			<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-latest-posts__pagination query-directory-listing__pagination","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
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
