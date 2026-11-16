<?php

/**
 * Title: Query Lab
 * Slug: systemstrap/lab-queries
 * Categories: systemstrap, systemstrap-labs
 * Description: A comprehensive SystemStrap Query laboratory demonstrating native Query Loop composition, System UI Query presentation, shipping directory and post patterns, ordering, layout, pagination styles, query totals, empty states, and application-style query surfaces.
 * Keywords: query, query loop, posts, directory, grid, listing, pagination, empty state, archive, systemstrap, pattern lab
 * Viewport Width: 1440
 * Inserter: yes
 */

?>
<!-- wp:group {"metadata":{"categories":["systemstrap-labs"],"patternName":"systemstrap/lab-queries","name":"Query Lab"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Query Lab</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Native WordPress Query Loops pushed through SystemStrap layout, directory patterns, metadata, pagination, empty states, ordering, responsive behavior, and application-style composition.</p>
    <!-- /wp:paragraph -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical"><!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Queries</button><button type="button" role="tab">Patterns</button><button type="button" role="tab">Layout</button><button type="button" role="tab">Pagination</button><button type="button" role="tab">Empty</button><button type="button" role="tab">Context</button></div>
        <!-- /wp:tab-list -->

        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Queries"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Core Owns the Loop</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>The Query block owns data selection, Post Template repetition, no-results behavior, and pagination. SystemStrap styles those native pieces without replacing the Query Loop model.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Patterns"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Shipping Query Patterns</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Directory Grid, Directory Image Grid, Directory Listing, Latest Posts List, and Media Object are production patterns. The Lab references those canonical patterns directly instead of maintaining demonstration forks.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Layout"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">One Data Model, Many Presentations</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Post Template can render cards, editorial lists, media objects, compact indexes, or application rows. Layout changes presentation without changing the underlying Query contract.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Pagination"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Seven Pagination Treatments</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>System UI Pagination supports default, Badge, Outline, Pill, Pill Outline, Square, and Square Outline treatments while Previous, Numbers, and Next remain native pagination blocks.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Empty"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Queries Own the Message, Pages Own Search</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>No-results regions explain the empty state. Search pages own the page-level Search control, so individual Query patterns do not need to repeat a Search form inside every empty state.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Context"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Author Intent Still Wins</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Queries can sit inside Panels, carry badges and metadata, expose totals, and use semantic presentation while post data stays dynamic and editor-owned.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->
        </div>
        <!-- /wp:tab-panels -->
    </div>
    <!-- /wp:tabs -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Structure First</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>This is the native baseline: independent Query, three-column Post Template, featured image, title, metadata, excerpt, Read More, no-results message, and pagination.</p>
        <!-- /wp:paragraph -->

        <!-- wp:query {"queryId":901,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"align":"wide"} -->
        <div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

                    <!-- wp:post-terms {"term":"category"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-excerpt {"moreText":"Continue reading","excerptLength":18} /-->

                <!-- wp:read-more {"content":"Read the full post"} /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph -->
            <p>No posts matched this query.</p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->

            <!-- wp:query-pagination {"className":"is-style-system-ui-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
            <!-- wp:query-pagination-previous {"label":"Previous"} /-->

            <!-- wp:query-pagination-numbers /-->

            <!-- wp:query-pagination-next {"label":"Next"} /-->
            <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">System UI Query</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The Query style adds SystemStrap presentation around an otherwise ordinary Post Template. Titles, dates, and excerpts remain native post blocks.</p>
        <!-- /wp:paragraph -->

        <!-- wp:query {"queryId":902,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
        <div class="wp-block-query is-style-system-ui-query"><!-- wp:post-template -->
            <!-- wp:post-title {"level":3,"isLink":true} /-->

            <!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

            <!-- wp:post-excerpt {"excerptLength":18} /-->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph -->
            <p>No posts matched this query.</p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Shipping Pattern Gallery</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>These are the actual production Query patterns. Keeping them referenced by slug makes this Lab a live regression surface for the canonical implementations rather than a second set of copied fixtures.</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Directory Grid</h3>
        <!-- /wp:heading -->

        <!-- wp:query {"queryId":103,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"metadata":{"patternName":"systemstrap/query-directory-grid","name":"Query Directory Grid","description":"A responsive directory grid with taxonomy badges, excerpts, and pagination.","categories":["query","posts","systemstrap"]},"className":"query-directory-grid query-directory-grid__query is-style-system-ui-query","layout":{"type":"constrained"}} -->
        <div class="wp-block-query query-directory-grid query-directory-grid__query is-style-system-ui-query"><!-- wp:post-template {"className":"query-directory-grid__items","layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"className":"query-directory-grid__card","layout":{"type":"default"}} -->
            <div class="wp-block-group query-directory-grid__card"><!-- wp:group {"className":"query-directory-grid__body","layout":{"type":"default"}} -->
                <div class="wp-block-group query-directory-grid__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"query-directory-grid__title","fontSize":"large"} /-->

                    <!-- wp:post-terms {"term":"category","separator":" ","className":"query-directory-grid__category is-style-system-badge"} /-->

                    <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20,"className":"query-directory-grid__excerpt"} /-->

                    <!-- wp:group {"className":"query-directory-grid__card-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                    <div class="wp-block-group query-directory-grid__card-footer"><!-- wp:group {"className":"query-directory-grid__tags","layout":{"type":"default"}} -->
                        <div class="wp-block-group query-directory-grid__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-directory-grid__tags-list is-style-system-badge"} /--></div>
                        <!-- /wp:group -->

                        <!-- wp:icon {"icon":"core/chevron-right","className":"query-directory-grid__arrow"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"className":"query-directory-grid__empty"} -->
            <p class="query-directory-grid__empty">No listings were found.</p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->

            <!-- wp:group {"className":"query-directory-grid__footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group query-directory-grid__footer"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

                <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-directory-grid__pagination is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:query -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Directory Image Grid</h3>
        <!-- /wp:heading -->

        <!-- wp:query {"queryId":105,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"metadata":{"patternName":"systemstrap/query-directory-image-grid","name":"Query Directory Image Grid","description":"A responsive directory grid with featured images, taxonomy badges, excerpts, and pagination.","categories":["query","posts","systemstrap"]},"className":"query-directory-image-grid query-directory-image-grid__query is-style-system-ui-query","layout":{"type":"constrained"}} -->
        <div class="wp-block-query query-directory-image-grid query-directory-image-grid__query is-style-system-ui-query"><!-- wp:post-template {"className":"query-directory-image-grid__items","layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"className":"query-directory-image-grid__card","layout":{"type":"default"}} -->
            <div class="wp-block-group query-directory-image-grid__card"><!-- wp:group {"className":"query-directory-image-grid__media","layout":{"type":"default"}} -->
                <div class="wp-block-group query-directory-image-grid__media"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"100%","className":"query-directory-image-grid__image"} /--></div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"query-directory-image-grid__body","layout":{"type":"default"}} -->
                <div class="wp-block-group query-directory-image-grid__body"><!-- wp:post-title {"level":3,"isLink":true,"className":"query-directory-image-grid__title","fontSize":"large"} /-->

                    <!-- wp:post-terms {"term":"category","separator":" ","className":"query-directory-image-grid__category is-style-system-badge"} /-->

                    <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20,"className":"query-directory-image-grid__excerpt"} /-->

                    <!-- wp:group {"className":"query-directory-image-grid__card-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                    <div class="wp-block-group query-directory-image-grid__card-footer"><!-- wp:group {"className":"query-directory-image-grid__tags","layout":{"type":"default"}} -->
                        <div class="wp-block-group query-directory-image-grid__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-directory-image-grid__tags-list is-style-system-badge"} /--></div>
                        <!-- /wp:group -->

                        <!-- wp:icon {"icon":"core/chevron-right","className":"query-directory-image-grid__arrow"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"className":"query-directory-image-grid__empty"} -->
            <p class="query-directory-image-grid__empty">No listings were found.</p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->

            <!-- wp:group {"className":"query-directory-image-grid__footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group query-directory-image-grid__footer"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

                <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-directory-image-grid__pagination is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:query -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Directory Listing</h3>
        <!-- /wp:heading -->

        <!-- wp:group {"metadata":{"patternName":"systemstrap/query-directory-listing","name":"Query Directory Listing","description":"A responsive directory listing with titles, excerpts, taxonomy terms, and pagination.","categories":["query","posts","systemstrap"]},"className":"query-directory-listing","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group query-directory-listing"><!-- wp:group {"className":"query-directory-listing__header","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group query-directory-listing__header"><!-- wp:icon {"icon":"core/cover","className":"query-directory-listing__header-icon"} /-->

                <!-- wp:heading {"className":"query-directory-listing__heading","fontSize":"large"} -->
                <h2 class="wp-block-heading query-directory-listing__heading has-large-font-size">Directory</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":102,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"className":"query-directory-listing__query","layout":{"type":"default"}} -->
            <div class="wp-block-query query-directory-listing__query"><!-- wp:post-template {"className":"query-directory-listing__items"} -->
                <!-- wp:group {"className":"query-directory-listing__row","layout":{"type":"default"}} -->
                <div class="wp-block-group query-directory-listing__row"><!-- wp:group {"className":"query-directory-listing__identity","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group query-directory-listing__identity"><!-- wp:post-title {"level":3,"isLink":true,"className":"query-directory-listing__title","fontSize":"medium"} /--></div>
                    <!-- /wp:group -->

                    <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":10,"className":"query-directory-listing__excerpt"} /-->

                    <!-- wp:group {"className":"query-directory-listing__tags","layout":{"type":"default"}} -->
                    <div class="wp-block-group query-directory-listing__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-directory-listing__post-terms is-style-system-badge"} /--></div>
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

                <!-- wp:group {"className":"query-directory-listing__footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
                <div class="wp-block-group query-directory-listing__footer"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

                    <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-directory-listing__pagination is-style-system-ui-pagination","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Latest Posts List</h3>
        <!-- /wp:heading -->

        <!-- wp:group {"tagName":"section","metadata":{"patternName":"systemstrap/query-latest-posts-list","name":"Latest Posts List","description":"A responsive latest-posts query with a stacked date, featured image, excerpt, taxonomy terms, and pagination.","categories":["query","posts","systemstrap"]},"className":"query-latest-posts is-style-system-panel","layout":{"type":"constrained"}} -->
        <section class="wp-block-group query-latest-posts is-style-system-panel"><!-- wp:group {"tagName":"header","className":"query-latest-posts__header is-style-system-panel-header","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <header class="wp-block-group query-latest-posts__header is-style-system-panel-header"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:icon {"icon":"core/calendar","className":"query-latest-posts__header-icon"} /-->

                    <!-- wp:heading {"className":"query-latest-posts__heading","fontSize":"large"} -->
                    <h2 class="wp-block-heading query-latest-posts__heading has-large-font-size">Latest Posts</h2>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
            </header>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":104,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"className":"query-latest-posts__query is-style-system-ui-query","layout":{"type":"constrained"}} -->
            <div class="wp-block-query query-latest-posts__query is-style-system-ui-query"><!-- wp:post-template {"className":"query-latest-posts__items"} -->
                <!-- wp:group {"className":"query-latest-posts__row is-style-default","layout":{"type":"default"}} -->
                <div class="wp-block-group query-latest-posts__row is-style-default"><!-- wp:group {"className":"query-latest-posts__date is-style-default","layout":{"type":"default"}} -->
                    <div class="wp-block-group query-latest-posts__date is-style-default"><!-- wp:post-date {"format":"M","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-month"} /-->

                        <!-- wp:post-date {"format":"j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-day"} /-->

                        <!-- wp:post-date {"format":"Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-year"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"left","className":"query-latest-posts__image"} /-->

                    <!-- wp:group {"className":"query-latest-posts__content","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group query-latest-posts__content"><!-- wp:post-title {"level":3,"isLink":true,"className":"query-latest-posts__title","fontSize":"large"} /-->

                        <!-- wp:post-terms {"term":"category","separator":" ","className":"query-latest-posts__category is-style-system-badge"} /-->

                        <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":22,"className":"query-latest-posts__excerpt"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"query-latest-posts__tags","layout":{"type":"default"}} -->
                    <div class="wp-block-group query-latest-posts__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-latest-posts__tags-list is-style-system-badge"} /--></div>
                    <!-- /wp:group -->

                    <!-- wp:icon {"icon":"core/chevron-right","className":"query-latest-posts__arrow"} /-->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"className":"query-latest-posts__empty"} -->
                <p class="query-latest-posts__empty">No posts were found.</p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->

                <!-- wp:group {"className":"query-latest-posts__footer is-style-system-panel-footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                <div class="wp-block-group query-latest-posts__footer is-style-system-panel-footer"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

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

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Media Object</h3>
        <!-- /wp:heading -->

        <!-- wp:group {"metadata":{"patternName":"systemstrap/query-media-object","name":"Query Media Object","description":"A responsive media-object query for search and archive results with optional featured images, post meta, excerpts, result counts, and pagination.","categories":["query","posts","systemstrap"]},"className":"query-media-object__wrapper","layout":{"type":"constrained"}} -->
        <div class="wp-block-group query-media-object__wrapper"><!-- wp:query {"queryId":101,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"className":"query-media-object","layout":{"type":"constrained"}} -->
            <div class="wp-block-query query-media-object"><!-- wp:query-no-results -->
                <!-- wp:group {"className":"query-media-object__empty is-style-system-panel","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group query-media-object__empty is-style-system-panel"><!-- wp:group {"className":"query-media-object__empty-content","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group query-media-object__empty-content"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Nothing found.</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Try another search term or browse from a different starting point.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:query-no-results -->

                <!-- wp:post-template {"className":"query-media-object__items","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
                <!-- wp:group {"className":"query-media-object__item is-style-system-panel","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group query-media-object__item is-style-system-panel" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"className":"query-media-object__media-row","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"left"}} -->
                    <div class="wp-block-group query-media-object__media-row"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","sizeSlug":"medium","className":"query-media-object__image","style":{"border":{"radius":"var:preset|custom|border-radius"}}} /-->

                        <!-- wp:group {"className":"query-media-object__body","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
                        <div class="wp-block-group query-media-object__body"><!-- wp:group {"className":"query-media-object__content","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group query-media-object__content"><!-- wp:group {"className":"query-media-object__header","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group query-media-object__header"><!-- wp:post-title {"isLink":true,"className":"query-media-object__title","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"large"} /-->

                                    <!-- wp:group {"metadata":{"patternName":"systemstrap/posts-meta","name":"Posts Meta","categories":["systemstrap","query"]},"className":"entry-meta","style":{"elements":{"link":{"color":{"text":"var:preset|color|inherit"},":hover":{"color":{"text":"var:preset|color|inherit"}}}},"spacing":{"blockGap":"var:preset|spacing|20"}},"textColor":"inherit","fontSize":"small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
                                    <div class="wp-block-group entry-meta has-inherit-color has-text-color has-link-color has-small-font-size"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                                        <div class="wp-block-group"><!-- wp:icon {"icon":"core/calendar","className":"strap-dashicon","style":{"dimensions":{"width":"1rem"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} /-->

                                            <!-- wp:post-date {"format":"n/j/Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                                        <div class="wp-block-group"><!-- wp:icon {"icon":"core/heading","className":"strap-dashicon","style":{"dimensions":{"width":"1rem"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} /-->

                                            <!-- wp:post-author-name {"isLink":true} /-->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
                                        <div class="wp-block-group"><!-- wp:icon {"icon":"core/file","className":"strap-dashicon","style":{"dimensions":{"width":"1rem"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} /-->

                                            <!-- wp:post-terms {"term":"category"} /-->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-excerpt {"moreText":"","className":"query-media-object__excerpt","fontSize":"small"} /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"query-media-object__footer-row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
                            <div class="wp-block-group query-media-object__footer-row"><!-- wp:read-more {"content":"View Result","className":"query-media-object__read-more wp-element-button","fontSize":"small"} /--></div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:group {"className":"query-media-object__footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
                <div class="wp-block-group query-media-object__footer" style="padding-top:var(--wp--preset--spacing--30)"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

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
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Ordering Lab</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The same post type can answer different questions by changing Query controls rather than rebuilding presentation. One side shows recent activity; the other acts like an alphabetical index.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Newest First</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:query {"queryId":903,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
                    <div class="wp-block-query is-style-system-ui-query"><!-- wp:post-template -->
                        <!-- wp:post-title {"level":4,"isLink":true} /-->

                        <!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Alphabetical Index</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:query {"queryId":904,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
                    <div class="wp-block-query is-style-system-ui-query"><!-- wp:post-template -->
                        <!-- wp:post-title {"level":4,"isLink":true} /-->

                        <!-- wp:post-excerpt {"moreText":"","excerptLength":8} /-->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Compact Index vs Editorial Cards</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Post Template layout is presentation. The left side behaves like a compact directory; the right side gives the same content room to breathe as editorial cards.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-default"} -->
        <div class="wp-block-columns is-style-default"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Compact Index</h4>
                    <!-- /wp:heading -->

                    <!-- wp:separator -->
                    <hr class="wp-block-separator has-alpha-channel-opacity" />
                    <!-- /wp:separator -->

                    <!-- wp:query {"queryId":905,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
                    <div class="wp-block-query is-style-system-ui-query"><!-- wp:post-template -->
                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group"><!-- wp:post-title {"level":4,"isLink":true} /-->

                            <!-- wp:post-date {"format":"M j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:query -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:query {"queryId":906,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
                <div class="wp-block-query is-style-system-ui-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
                    <!-- wp:group {"className":"is-style-default","backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-default has-base-background-color has-background"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

                        <!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

                            <!-- wp:post-terms {"term":"category","className":"is-style-system-badge"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-excerpt {"moreText":"","excerptLength":18} /-->

                        <!-- wp:read-more {"content":"Read article"} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Pagination Registry</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>One Query provides the page state while seven Pagination blocks exercise the complete SystemStrap pagination family. Previous, Numbers, and Next remain ordinary Core children in every treatment.</p>
        <!-- /wp:paragraph -->

        <!-- wp:query {"queryId":907,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:post-title {"level":4,"isLink":true} /-->
            <!-- /wp:post-template -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>System UI</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Badge</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-badge","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Outline</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-outline","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Pill</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-pill","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Pill Outline</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Square</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-square","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Square Outline</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-square-outline","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Pagination Accent Stress</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Pagination accepts normal authored color context. These specimens deliberately vary semantic background ownership while keeping the structural pagination style unchanged.</p>
        <!-- /wp:paragraph -->

        <!-- wp:query {"queryId":908,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
        <div class="wp-block-query"><!-- wp:post-template -->
            <!-- wp:post-title {"level":4,"isLink":true} /-->
            <!-- /wp:post-template -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Success Pill</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-pill","backgroundColor":"success","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Info Outline</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-outline","backgroundColor":"info","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Warning Square</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-square","backgroundColor":"warning","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:paragraph -->
                    <p><strong>Danger Badge</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:query-pagination {"className":"is-style-system-ui-pagination-badge","backgroundColor":"danger","layout":{"type":"flex","justifyContent":"space-between"}} -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Query Total + Pagination</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Query Total communicates result position while Pagination owns movement. They can share a footer without either block pretending to own the other.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Result Browser</h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":909,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"enhancedPagination":true,"className":"is-style-system-ui-query"} -->
            <div class="wp-block-query is-style-system-ui-query"><!-- wp:post-template -->
                <!-- wp:post-title {"level":4,"isLink":true} /-->

                <!-- wp:post-excerpt {"moreText":"","excerptLength":12} /-->
                <!-- /wp:post-template -->

                <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
                <div class="wp-block-group is-style-system-panel-footer"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

                    <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
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
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Empty-State Contract</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>These Queries deliberately search for a fixture string that should not exist. Each Query owns only its empty-state message. A search-results page can provide one prominent Search control above the entire results region instead of duplicating Search inside every Query.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:query {"queryId":910,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"__systemstrap_query_lab_no_results_910__","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:post-title {"isLink":true} /-->
                    <!-- /wp:post-template -->

                    <!-- wp:query-no-results -->
                    <!-- wp:paragraph -->
                    <p>Nothing found. Try another search term or browse from a different starting point.</p>
                    <!-- /wp:paragraph -->
                    <!-- /wp:query-no-results -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:query {"queryId":911,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"__systemstrap_query_lab_no_results_911__","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:post-title {"isLink":true} /-->
                    <!-- /wp:post-template -->

                    <!-- wp:query-no-results -->
                    <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">No directory entries</h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>No listings matched the current query.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:query-no-results -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:query {"queryId":912,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"__systemstrap_query_lab_no_results_912__","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
                <div class="wp-block-query"><!-- wp:post-template -->
                    <!-- wp:post-title {"isLink":true} /-->
                    <!-- /wp:post-template -->

                    <!-- wp:query-no-results -->
                    <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">No posts available</h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>There are no posts to display for this filter. Change the filter or continue browsing elsewhere.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:query-no-results -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">SystemStrap Query Control Center</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The final fixture treats Query as an application surface without abandoning native post blocks: Panel framing, live result count, compact metadata, badges, dynamic post data, and pagination all stay composable.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"tagName":"section","metadata":{"patternName":"systemstrap/query-latest-posts-list","categories":["posts"],"name":"Latest Posts List"},"className":"query-latest-posts is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
        <section class="wp-block-group query-latest-posts is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-system-badge","fontSize":"small"} -->
                        <p class="is-style-system-badge has-small-font-size"><strong><mark style="background-color:#009933" class="has-inline-color has-light-color">CONTENT</mark> // <mark style="background-color:#DD823B" class="has-inline-color has-light-color">LIVE INDEX</mark></strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Query Control Center</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                    <p class="is-style-system-badge"><mark style="background-color:#0085BA" class="has-inline-color has-light-color">Dynamic</mark></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":104,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"className":"query-latest-posts__query is-style-system-ui-query","layout":{"type":"constrained"}} -->
            <div class="wp-block-query query-latest-posts__query is-style-system-ui-query"><!-- wp:post-template {"className":"query-latest-posts__items","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","gradient":"pattern-90"} -->
                <!-- wp:group {"className":"query-latest-posts__row is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color","layout":{"type":"default"}} -->
                <div class="wp-block-group query-latest-posts__row is-style-default has-tertiary-color-color has-text-color has-link-color"><!-- wp:group {"className":"query-latest-posts__date is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|sm","elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"backgroundColor":"light","textColor":"dark","layout":{"type":"default"}} -->
                    <div class="wp-block-group query-latest-posts__date is-style-system-flat-panel has-dark-color has-light-background-color has-text-color has-background has-link-color" style="box-shadow:var(--wp--preset--shadow--sm)"><!-- wp:post-date {"format":"M","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-month","backgroundColor":"danger"} /-->

                        <!-- wp:post-date {"format":"j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-day"} /-->

                        <!-- wp:post-date {"format":"Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-year"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"left","className":"query-latest-posts__image","style":{"shadow":"var:preset|shadow|sm"}} /-->

                    <!-- wp:group {"className":"query-latest-posts__content","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group query-latest-posts__content"><!-- wp:post-title {"level":3,"isLink":true,"className":"query-latest-posts__title","fontSize":"large"} /-->

                        <!-- wp:post-terms {"term":"category","separator":" ","className":"query-latest-posts__category is-style-system-badge","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info"} /-->

                        <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":22,"className":"query-latest-posts__excerpt","fontSize":"small"} /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"query-latest-posts__tags","layout":{"type":"default"}} -->
                    <div class="wp-block-group query-latest-posts__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-latest-posts__tags-list is-style-system-badge","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info"} /--></div>
                    <!-- /wp:group -->

                    <!-- wp:icon {"icon":"core/chevron-right","className":"query-latest-posts__arrow"} /-->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"className":"query-latest-posts__empty","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
                <p class="query-latest-posts__empty" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">No posts were found.</p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->

                <!-- wp:group {"className":"query-latest-posts__footer is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                <div class="wp-block-group query-latest-posts__footer is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

                    <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-latest-posts__pagination is-style-system-ui-pagination-pill-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
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
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->