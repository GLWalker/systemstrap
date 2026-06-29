<?php
/**
 * Title: Query Directory
 * Slug: systemstrap/query-directory
 * Categories: query, posts, systemstrap
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","alignItems":"center"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:icon {"icon":"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" fill=\"currentColor\"><path d=\"M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v11c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M20,19H4V8h16V19z\"/></svg>"} /-->
        <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0">Directory Name</h3>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
    <div class="wp-block-query">

        <!-- wp:query-no-results -->
        <!-- wp:paragraph -->
        <p>No posts were found.</p>
        <!-- /wp:paragraph -->
        <!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search"} /-->
        <!-- /wp:query-no-results -->

        <!-- wp:post-template {"layout":{"type":"default"}} -->
        
        <!-- wp:group {"className":"systemstrap-directory-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","alignItems":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-group systemstrap-directory-row">
            
            <!-- Col 1 -->
            <!-- wp:group {"className":"systemstrap-directory-col-1","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","alignItems":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":""}}} -->
            <div class="wp-block-group systemstrap-directory-col-1">
                <!-- wp:icon {"icon":"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" fill=\"currentColor\"><path d=\"M12 2L2 22l10-3 10 3L12 2z\"/></svg>"} /-->
                <!-- wp:post-title {"isLink":true,"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
                <!-- wp:post-excerpt {"moreText":"","excerptLength":12,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- Col 2 -->
            <!-- wp:group {"className":"systemstrap-directory-col-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","alignItems":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-group systemstrap-directory-col-2">
                <!-- wp:icon {"icon":"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" fill=\"currentColor\"><circle cx=\"12\" cy=\"12\" r=\"8\"/></svg>"} /-->
                <!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- Col 3 -->
            <!-- wp:group {"className":"systemstrap-directory-col-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","alignItems":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-group systemstrap-directory-col-3">
                <!-- wp:post-terms {"term":"post_tag","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- Col 4 -->
            <!-- wp:group {"className":"systemstrap-directory-col-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","alignItems":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <div class="wp-block-group systemstrap-directory-col-4">
                <!-- wp:icon {"icon":"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" fill=\"currentColor\"><path d=\"M8.59,16.59L13.17,12L8.59,7.41L10,6l6,6l-6,6L8.59,16.59z\"/></svg>"} /-->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->
        
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","alignItems":"center"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
        <!-- wp:query-pagination-previous /-->
        <!-- wp:query-pagination-numbers /-->
        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
