<?php
/**
 * Title: Query Media Object
 * Slug: systemstrap/query-media-object
 * Categories: query, posts, systemstrap
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">

    <!-- wp:query-no-results -->
    <!-- wp:paragraph -->
    <p>No posts were found.</p>
    <!-- /wp:paragraph -->
    <!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search"} /-->
    <!-- /wp:query-no-results -->

    <!-- wp:post-template {"layout":{"type":"default"}} -->
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"flex-start"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
    <div class="wp-block-group">

        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"200px","sizeSlug":"thumbnail","style":{"border":{"radius":"var:preset|custom|border-radius"},"layout":{"selfStretch":"fixed","flexSize":"200px"}}} /-->

        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":""}}} -->
        <div class="wp-block-group">

            <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"large"} /-->

            <!-- wp:pattern {"slug":"systemstrap/posts-meta"} /-->

            <!-- wp:post-excerpt {"moreText":"","fontSize":"small"} /-->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
            <div class="wp-block-buttons">
                <!-- wp:read-more {"content":"Read More","fontSize":"small","className":"wp-block-button__link wp-element-button"} /-->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
        <!-- wp:query-pagination-previous /-->
        <!-- wp:query-pagination-numbers /-->
        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:query -->