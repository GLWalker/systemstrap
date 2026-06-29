<?php
/**
 * Title: Events Query Loop
 * Slug: systemstrap/query-events
 * Categories: query, posts, systemstrap
 * Description: A card-style query loop designed for upcoming events.
 */
?>
<!-- wp:query {"queryId":2,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query">
    <!-- wp:post-template -->
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
        <!-- wp:post-date {"isLink":true,"format":"F j, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /-->
        <!-- wp:post-excerpt {"moreText":"View Event details","excerptLength":30,"fontSize":"small"} /-->
        
        <!-- wp:group {"layout":{"type":"flex","justifyContent":"right"}} -->
        <div class="wp-block-group">
            <!-- wp:post-terms {"term":"post_tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"x-small"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
    <!-- wp:query-pagination-previous /-->
    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph -->
    <p>No events found.</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
