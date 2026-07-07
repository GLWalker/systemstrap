<?php

/**
 * Title: Query Directory Grid
 * Slug: systemstrap/query-directory-grid
 * Categories: query, posts, systemstrap
 * Keywords: directory, grid, cards, listings
 * Description: A responsive directory grid with featured images, taxonomy badges, excerpts, and pagination.
 * Viewport Width: 1440
 */
?>

<!-- wp:query {"queryId":105,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[]},"enhancedPagination":true,"className":"query-directory-grid query-directory-grid__query systemstrap-directory-grid systemstrap-directory-grid__query","layout":{"type":"constrained"}} -->
<div class="wp-block-query query-directory-grid query-directory-grid__query systemstrap-directory-grid systemstrap-directory-grid__query"><!-- wp:post-template {"className":"query-directory-grid__items systemstrap-directory-grid__items","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"className":"query-directory-grid__card systemstrap-directory-grid__card","layout":{"type":"default"}} -->
		<div class="wp-block-group query-directory-grid__card systemstrap-directory-grid__card"><!-- wp:group {"className":"query-directory-grid__media systemstrap-directory-grid__media","layout":{"type":"default"}} -->
			<div class="wp-block-group query-directory-grid__media systemstrap-directory-grid__media"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"100%","className":"query-directory-grid__image systemstrap-directory-grid__image"} /--></div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"query-directory-grid__body systemstrap-directory-grid__body","layout":{"type":"default"}} -->
			<div class="wp-block-group query-directory-grid__body systemstrap-directory-grid__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"query-directory-grid__title query-directory-listing__title systemstrap-directory-grid__title"} /-->

				<!-- wp:post-terms {"term":"category","separator":" ","className":"query-directory-grid__category query-directory-listing__post-terms systemstrap-directory-grid__category"} /-->

				<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20,"className":"query-directory-grid__excerpt query-directory-listing__excerpt systemstrap-directory-grid__excerpt"} /-->

				<!-- wp:group {"className":"query-directory-grid__card-footer systemstrap-directory-grid__card-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
				<div class="wp-block-group query-directory-grid__card-footer systemstrap-directory-grid__card-footer"><!-- wp:group {"className":"query-directory-grid__tags query-directory-listing__tags systemstrap-directory-grid__tags","layout":{"type":"default"}} -->
					<div class="wp-block-group query-directory-grid__tags query-directory-listing__tags systemstrap-directory-grid__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-directory-grid__tags-list query-directory-listing__post-terms systemstrap-directory-grid__terms"} /--></div>
					<!-- /wp:group -->

					<!-- wp:icon {"icon":"core/chevron-right","className":"query-directory-grid__arrow query-directory-listing__arrow systemstrap-directory-grid__arrow"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"className":"query-directory-grid__empty systemstrap-directory-grid__empty query-directory-listing__empty"} -->
		<p class="query-directory-grid__empty systemstrap-directory-grid__empty query-directory-listing__empty">No listings were found.</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

		<!-- wp:group {"className":"query-directory-grid__footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
		<div class="wp-block-group query-directory-grid__footer"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

			<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-directory-grid__pagination query-directory-listing__pagination","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-numbers /-->

			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
