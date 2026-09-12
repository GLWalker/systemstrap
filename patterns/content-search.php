<?php

/**
 * Title: Content Search
 * Slug: systemstrap/content-search
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e('Search Content Pattern', 'systemstrap'); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"> <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull"> <!-- wp:group {"tagName":"header","layout":{"type":"constrained"}} -->
        <header class="wp-block-group"> <!-- wp:query-title {"type":"search"} /--> </header> <!-- /wp:group -->

        <!-- wp:paragraph {"className":" "} -->
        <p class="">query-media-object</p>
        <!-- /wp:paragraph -->

        <!-- wp:pattern {"slug":"systemstrap/query-media-object"} /-->

        <!-- wp:paragraph {"className":" "} -->
        <p class="">query-latest-posts-list</p>
        <!-- /wp:paragraph -->

        <!-- wp:pattern {"slug":"systemstrap/query-latest-posts-list"} /-->

        <!-- wp:paragraph {"className":" "} -->
        <p class="">query-directory-listing</p>
        <!-- /wp:paragraph -->

        <!-- wp:pattern {"slug":"systemstrap/query-directory-listing"} /-->

        <!-- wp:paragraph {"className":" "} -->
        <p class="">query-directory-grid</p>
        <!-- /wp:paragraph -->

        <!-- wp:pattern {"slug":"systemstrap/query-directory-grid"} /-->

        <!-- wp:paragraph {"className":" "} -->
        <p class="">query-directory-image-grid</p>
        <!-- /wp:paragraph -->

        <!-- wp:pattern {"slug":"systemstrap/query-directory-image-grid"} /-->

    </div> <!-- /wp:group -->
</div> <!-- /wp:group -->