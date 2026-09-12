<?php

/**
 * Title: Query Media Object
 * Slug: systemstrap/query-media-object
 * Categories: query, posts, systemstrap
 * Keywords: media object, search results, query, posts, list, featured image, excerpt, systemstrap
 * Description: A responsive media-object query for search and archive results with optional featured images, post meta, excerpts, result counts, and pagination.
 * Viewport Width: 1440
 */

?>

<!-- wp:group {"metadata":{"patternName":"systemstrap/query-media-object"},"className":"query-media-object__wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group query-media-object__wrapper">

    <!-- wp:query {"queryId":101,"query":{"perPage":null,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"className":"query-media-object","layout":{"type":"constrained"}} -->
    <div class="wp-block-query query-media-object">

        <!-- wp:query-no-results -->

        <!-- wp:group {"className":"query-media-object__empty is-style-system-panel","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group query-media-object__empty is-style-system-panel">

            <!-- wp:group {"className":"query-media-object__empty-content","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group query-media-object__empty-content">

                <!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php
                                                                    esc_html_e('Nothing found.', 'systemstrap');
                                                                    ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php
                    esc_html_e(
                        'Try another search term or browse from a different starting point.',
                        'systemstrap'
                    );
                    ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:search {"label":"<?php echo esc_attr_x('Search', 'Search block label', 'systemstrap'); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php echo esc_attr_x('Search', 'Search button text', 'systemstrap'); ?>"} /-->

        </div>
        <!-- /wp:group -->

        <!-- /wp:query-no-results -->

        <!-- wp:post-template {"className":"query-media-object__items","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->

        <!-- wp:group {"className":"query-media-object__item is-style-system-panel","layout":{"type":"constrained"}} -->
        <div class="wp-block-group query-media-object__item is-style-system-panel">

            <!-- wp:group {"className":"query-media-object__media-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top","justifyContent":"left"}} -->
            <div class="wp-block-group query-media-object__media-row">

                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"180px","sizeSlug":"medium","className":"query-media-object__image","style":{"border":{"radius":"var:preset|custom|border-radius"},"layout":{"selfStretch":"fixed","flexSize":"180px"}}} /-->

                <!-- wp:group {"className":"query-media-object__body","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
                <div class="wp-block-group query-media-object__body">

                    <!-- wp:group {"className":"query-media-object__content","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group query-media-object__content">

                        <!-- wp:group {"className":"query-media-object__header","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group query-media-object__header">

                            <!-- wp:post-title {"isLink":true,"className":"query-media-object__title","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /-->

                            <!-- wp:pattern {"slug":"systemstrap/posts-meta"} /-->

                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-excerpt {"moreText":"","className":"query-media-object__excerpt","fontSize":"small"} /-->

                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"query-media-object__footer-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
                    <div class="wp-block-group query-media-object__footer-row">

                        <!-- wp:read-more {"content":"<?php echo esc_attr_x('View Result', 'Search result link label', 'systemstrap'); ?>","className":"query-media-object__read-more","fontSize":"small"} /-->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <!-- /wp:post-template -->

        <!-- wp:group {"className":"query-media-object__footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
        <div class="wp-block-group query-media-object__footer" style="padding-top:var(--wp--preset--spacing--30)">

            <!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

            <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-media-object__pagination is-style-system-ui-pagination","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->

            <!-- wp:query-pagination-previous /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next /-->

            <!-- /wp:query-pagination -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->