<?php

/**
 * Title: Query Directory
 * Slug: systemstrap/query-directory
 * Categories: query, posts, systemstrap
 */
?>

<!-- wp:group {"className":"query-directory-listing","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group query-directory-listing"><!-- wp:group {"className":"query-directory-listing__header","layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group query-directory-listing__header"><!-- wp:icon {"icon":"core/cover","className":"query-directory-listing__header-icon"} /-->

        <!-- wp:heading {"className":"query-directory-listing__heading"} -->
        <h2 class="wp-block-heading query-directory-listing__heading">Directory</h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":102,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null},"enhancedPagination":true,"className":"query-directory-listing__query","layout":{"type":"default"}} -->
    <div class="wp-block-query query-directory-listing__query"><!-- wp:post-template {"className":"query-directory-listing__items"} -->
        <!-- wp:group {"className":"query-directory-listing__row","layout":{"type":"default"}} -->
        <div class="wp-block-group query-directory-listing__row"><!-- wp:group {"className":"query-directory-listing__identity","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group query-directory-listing__identity"><!-- wp:icon {"icon":"core/location","className":"query-directory-listing__item-icon"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"className":"query-directory-listing__title"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":10,"className":"query-directory-listing__excerpt"} /-->

            <!-- wp:group {"className":"query-directory-listing__tags","layout":{"type":"default"}} -->
            <div class="wp-block-group query-directory-listing__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-directory-listing__post-terms"} /--></div>
            <!-- /wp:group -->

            <!-- wp:icon {"icon":"core/chevron-right","className":"query-directory-listing__arrow"} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"className":"query-directory-listing__empty"} -->
        <p class="query-directory-listing__empty">No listings were found.</p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->

        <!-- wp:group {"className":"query-directory-listing__footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
        <div class="wp-block-group query-directory-listing__footer"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

            <!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"className":"query-directory-listing__pagination is-style-system-pagination","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
            <!-- wp:query-pagination-previous /-->

            <!-- wp:query-pagination-next /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->
