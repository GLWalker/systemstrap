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
<div class="wp-block-group alignfull">

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Query Lab</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Native WordPress Query Loops pushed through SystemStrap layout, directory patterns, metadata, pagination, empty states, ordering, responsive behavior, and application-style composition.</p>
<!-- /wp:paragraph -->

<!-- wp:tabs {"className":"is-style-system-vertical"} -->
<div class="wp-block-tabs is-style-system-vertical">
<!-- wp:tab-list {"className":"is-style-default"} -->
<div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Queries</button><button type="button" role="tab">Patterns</button><button type="button" role="tab">Layout</button><button type="button" role="tab">Pagination</button><button type="button" role="tab">Empty</button><button type="button" role="tab">Context</button></div>
<!-- /wp:tab-list -->

<!-- wp:tab-panels {"className":"is-style-system-panel"} -->
<div class="wp-block-tab-panels is-style-system-panel">

<!-- wp:tab-panel {"label":"Queries"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Core Owns the Loop</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>The Query block owns data selection, Post Template repetition, no-results behavior, and pagination. SystemStrap styles those native pieces without replacing the Query Loop model.</p><!-- /wp:paragraph -->
</section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"Patterns"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Shipping Query Patterns</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Directory Grid, Directory Image Grid, Directory Listing, Latest Posts List, and Media Object are production patterns. The Lab references those canonical patterns directly instead of maintaining demonstration forks.</p><!-- /wp:paragraph -->
</section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"Layout"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">One Data Model, Many Presentations</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Post Template can render cards, editorial lists, media objects, compact indexes, or application rows. Layout changes presentation without changing the underlying Query contract.</p><!-- /wp:paragraph -->
</section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"Pagination"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Seven Pagination Treatments</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>System UI Pagination supports default, Badge, Outline, Pill, Pill Outline, Square, and Square Outline treatments while Previous, Numbers, and Next remain native pagination blocks.</p><!-- /wp:paragraph -->
</section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"Empty"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Queries Own the Message, Pages Own Search</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>No-results regions explain the empty state. Search pages own the page-level Search control, so individual Query patterns do not need to repeat a Search form inside every empty state.</p><!-- /wp:paragraph -->
</section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"Context"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Author Intent Still Wins</h3><!-- /wp:heading -->
<!-- wp:paragraph --><p>Queries can sit inside Panels, carry badges and metadata, expose totals, and use semantic presentation while post data stays dynamic and editor-owned.</p><!-- /wp:paragraph -->
</section>
<!-- /wp:tab-panel -->

</div>
<!-- /wp:tab-panels -->
</div>
<!-- /wp:tabs -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">Structure First</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>This is the native baseline: independent Query, three-column Post Template, featured image, title, metadata, excerpt, Read More, no-results message, and pagination.</p><!-- /wp:paragraph -->

<!-- wp:query {"queryId":901,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"align":"wide"} -->
<div class="wp-block-query alignwide">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:post-date /-->
<!-- wp:post-terms {"term":"category"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-excerpt {"moreText":"Continue reading"} /-->
<!-- wp:read-more {"content":"Read the full post"} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph --><p>No posts matched this query.</p><!-- /wp:paragraph -->
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
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">System UI Query</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>The Query style adds SystemStrap presentation around an otherwise ordinary Post Template. Titles, dates, and excerpts remain native post blocks.</p><!-- /wp:paragraph -->

<!-- wp:query {"queryId":902,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
<div class="wp-block-query is-style-system-ui-query">
<!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- wp:post-date /-->
<!-- wp:post-excerpt {"excerptLength":18} /-->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph --><p>No posts matched this query.</p><!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">Shipping Pattern Gallery</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>These are the actual production Query patterns. Keeping them referenced by slug makes this Lab a live regression surface for the canonical implementations rather than a second set of copied fixtures.</p><!-- /wp:paragraph -->

<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Directory Grid</h3><!-- /wp:heading -->
<!-- wp:pattern {"slug":"systemstrap/query-directory-grid"} /-->

<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Directory Image Grid</h3><!-- /wp:heading -->
<!-- wp:pattern {"slug":"systemstrap/query-directory-image-grid"} /-->

<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Directory Listing</h3><!-- /wp:heading -->
<!-- wp:pattern {"slug":"systemstrap/query-directory-listing"} /-->

<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Latest Posts List</h3><!-- /wp:heading -->
<!-- wp:pattern {"slug":"systemstrap/query-latest-posts-list"} /-->

<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Media Object</h3><!-- /wp:heading -->
<!-- wp:pattern {"slug":"systemstrap/query-media-object"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">Ordering Lab</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>The same post type can answer different questions by changing Query controls rather than rebuilding presentation. One side shows recent activity; the other acts like an alphabetical index.</p><!-- /wp:paragraph -->

<!-- wp:columns {"className":"is-style-equal-heights"} -->
<div class="wp-block-columns is-style-equal-heights">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-system-panel has-base-background-color has-background">
<!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel-header">
<!-- wp:heading {"level":4} --><h4 class="wp-block-heading">Newest First</h4><!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":903,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
<div class="wp-block-query is-style-system-ui-query">
<!-- wp:post-template -->
<!-- wp:post-title {"level":4,"isLink":true} /-->
<!-- wp:post-date /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background">
<!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel-header">
<!-- wp:heading {"level":4} --><h4 class="wp-block-heading">Alphabetical Index</h4><!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":904,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
<div class="wp-block-query is-style-system-ui-query">
<!-- wp:post-template -->
<!-- wp:post-title {"level":4,"isLink":true} /-->
<!-- wp:post-excerpt {"excerptLength":8,"moreText":""} /-->
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
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">Compact Index vs Editorial Cards</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>Post Template layout is presentation. The left side behaves like a compact directory; the right side gives the same content room to breathe as editorial cards.</p><!-- /wp:paragraph -->

<!-- wp:columns {"className":"is-style-equal-heights"} -->
<div class="wp-block-columns is-style-equal-heights">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background">
<!-- wp:heading {"level":4} --><h4 class="wp-block-heading">Compact Index</h4><!-- /wp:heading -->

<!-- wp:query {"queryId":905,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
<div class="wp-block-query is-style-system-ui-query">
<!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:post-title {"level":4,"isLink":true} /-->
<!-- wp:post-date {"format":"M j"} /-->
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
<div class="wp-block-column">
<!-- wp:query {"queryId":906,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"className":"is-style-system-ui-query"} -->
<div class="wp-block-query is-style-system-ui-query">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-system-panel has-base-background-color has-background">
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:post-date /-->
<!-- wp:post-terms {"term":"category","className":"is-style-system-badge"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-excerpt {"excerptLength":18,"moreText":""} /-->
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
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">Pagination Registry</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>One Query provides the page state while seven Pagination blocks exercise the complete SystemStrap pagination family. Previous, Numbers, and Next remain ordinary Core children in every treatment.</p><!-- /wp:paragraph -->

<!-- wp:query {"queryId":907,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
<div class="wp-block-query">

<!-- wp:post-template -->
<!-- wp:post-title {"level":4,"isLink":true} /-->
<!-- /wp:post-template -->

<!-- wp:columns {"className":"is-style-equal-heights"} -->
<div class="wp-block-columns is-style-equal-heights">

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>System UI</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"className":"is-style-system-ui-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Badge</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"className":"is-style-system-ui-pagination-badge","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Outline</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"className":"is-style-system-ui-pagination-outline","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"is-style-equal-heights"} -->
<div class="wp-block-columns is-style-equal-heights">

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Pill</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"className":"is-style-system-ui-pagination-pill","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Pill Outline</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"className":"is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Square</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"className":"is-style-system-ui-pagination-square","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Square Outline</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"className":"is-style-system-ui-pagination-square-outline","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">Pagination Accent Stress</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>Pagination accepts normal authored color context. These specimens deliberately vary semantic background ownership while keeping the structural pagination style unchanged.</p><!-- /wp:paragraph -->

<!-- wp:query {"queryId":908,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
<div class="wp-block-query">

<!-- wp:post-template -->
<!-- wp:post-title {"level":4,"isLink":true} /-->
<!-- /wp:post-template -->

<!-- wp:columns {"className":"is-style-equal-heights"} -->
<div class="wp-block-columns is-style-equal-heights">

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Success Pill</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"backgroundColor":"success","className":"is-style-system-ui-pagination-pill","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Info Outline</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"backgroundColor":"info","className":"is-style-system-ui-pagination-outline","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Warning Square</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"backgroundColor":"warning","className":"is-style-system-ui-pagination-square","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

<!-- wp:column --><div class="wp-block-column">
<!-- wp:paragraph --><p><strong>Danger Badge</strong></p><!-- /wp:paragraph -->
<!-- wp:query-pagination {"backgroundColor":"danger","className":"is-style-system-ui-pagination-badge","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div><!-- /wp:column -->

</div>
<!-- /wp:columns -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">Query Total + Pagination</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>Query Total communicates result position while Pagination owns movement. They can share a footer without either block pretending to own the other.</p><!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel has-base-background-color has-background">

<!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel-header">
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Result Browser</h3><!-- /wp:heading -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":909,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"enhancedPagination":true,"className":"is-style-system-ui-query"} -->
<div class="wp-block-query is-style-system-ui-query">

<!-- wp:post-template -->
<!-- wp:post-title {"level":4,"isLink":true} /-->
<!-- wp:post-excerpt {"excerptLength":12,"moreText":""} /-->
<!-- /wp:post-template -->

<!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-system-panel-footer">
<!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->
<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"is-style-system-ui-pagination-pill-outline","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
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
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">Empty-State Contract</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>These Queries deliberately search for a fixture string that should not exist. Each Query owns only its empty-state message. A search-results page can provide one prominent Search control above the entire results region instead of duplicating Search inside every Query.</p><!-- /wp:paragraph -->

<!-- wp:columns {"className":"is-style-equal-heights"} -->
<div class="wp-block-columns is-style-equal-heights">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:query {"queryId":910,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"__systemstrap_query_lab_no_results_910__","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
<div class="wp-block-query">
<!-- wp:post-template --><!-- wp:post-title {"isLink":true} /--><!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph --><p>Nothing found. Try another search term or browse from a different starting point.</p><!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:query {"queryId":911,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"__systemstrap_query_lab_no_results_911__","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
<div class="wp-block-query">
<!-- wp:post-template --><!-- wp:post-title {"isLink":true} /--><!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background">
<!-- wp:heading {"level":4} --><h4 class="wp-block-heading">No directory entries</h4><!-- /wp:heading -->
<!-- wp:paragraph --><p>No listings matched the current query.</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:query {"queryId":912,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"__systemstrap_query_lab_no_results_912__","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null}} -->
<div class="wp-block-query">
<!-- wp:post-template --><!-- wp:post-title {"isLink":true} /--><!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-system-panel has-base-background-color has-background">
<!-- wp:heading {"level":4} --><h4 class="wp-block-heading">No posts available</h4><!-- /wp:heading -->
<!-- wp:paragraph --><p>There are no posts to display for this filter. Change the filter or continue browsing elsewhere.</p><!-- /wp:paragraph -->
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
<div class="wp-block-group">
<!-- wp:heading --><h2 class="wp-block-heading">SystemStrap Query Control Center</h2><!-- /wp:heading -->
<!-- wp:paragraph --><p>The final fixture treats Query as an application surface without abandoning native post blocks: Panel framing, live result count, compact metadata, badges, dynamic post data, and pagination all stay composable.</p><!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel has-base-background-color has-background">

<!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><strong>CONTENT // LIVE INDEX</strong></p><!-- /wp:paragraph -->
<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Query Control Center</h3><!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"is-style-system-badge"} --><p class="is-style-system-badge"><mark style="background-color:#0693e3" class="has-inline-color has-light-color">Dynamic</mark></p><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":913,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"enhancedPagination":true,"className":"is-style-system-ui-query"} -->
<div class="wp-block-query is-style-system-ui-query">

<!-- wp:post-template -->
<!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:post-title {"level":4,"isLink":true} /-->
<!-- wp:post-date {"fontSize":"small"} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-terms {"term":"category","separator":" ","className":"is-style-system-badge"} /-->
<!-- wp:post-excerpt {"excerptLength":14,"moreText":""} /-->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:post-terms {"term":"post_tag","separator":" ","className":"is-style-system-badge"} /-->
<!-- wp:read-more {"content":"Open Post","fontSize":"small"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph --><p>No posts matched the Control Center query.</p><!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background">
<!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->
<!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"is-style-system-ui-pagination-square-outline","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
