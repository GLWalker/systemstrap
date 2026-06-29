<?php
/**
 * Title: Query Card Object
 * Slug: systemstrap/query-card-object
 * Categories: query, posts, systemstrap
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">

    <!-- wp:query-no-results -->
    <!-- wp:paragraph -->
    <p>No posts were found.</p>
    <!-- /wp:paragraph -->
    <!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search"} /-->
    <!-- /wp:query-no-results -->

    <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
    
    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"100%","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        
        <!-- wp:post-title {"isLink":true,"level":2,"style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"large"} /-->

        <!-- wp:pattern {"slug":"systemstrap/posts-meta"} /-->

        <!-- wp:post-excerpt {"moreText":"","fontSize":"small"} /-->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
        <div class="wp-block-buttons">
            <!-- wp:read-more {"content":"Read More","fontSize":"small","className":"wp-block-button__link wp-element-button"} /-->
        </div>
        <!-- /wp:buttons -->

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
