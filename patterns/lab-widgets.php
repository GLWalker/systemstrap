<?php

/**
 * Title: Widget Lab
 * Slug: systemstrap/lab-widgets
 * Categories: systemstrap, systemstrap-labs
 * Description: SystemStrap widget laboratory covering native utility blocks, list and Panel treatments, badges and tags, taxonomy discovery, calendar, search, social links, composed sidebars, plugin extension boundaries, selective Equal Heights, and dashboard-style widget surfaces.
 * Keywords: widgets, sidebar, archives, categories, latest posts, latest comments, calendar, tag cloud, rss, search, social links, systemstrap, pattern lab
 * Viewport Width: 1440
 * Inserter: yes
 */
?>

<!-- wp:group {"metadata":{"categories":["systemstrap-labs"],"patternName":"systemstrap/lab-widgets","name":"Widget Lab"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

    <!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Widget Lab</h1><!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p>Native WordPress utility blocks exercised as real theme widgets: lists, Panels, badges, tags, taxonomy discovery, recent content, calendar, search, social links, plugin extensions, sidebars, dashboards, and dense application surfaces.</p><!-- /wp:paragraph -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical">
        <!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Widgets</button><button type="button" role="tab">Lists</button><button type="button" role="tab">Panels</button><button type="button" role="tab">Discovery</button><button type="button" role="tab">Utility</button><button type="button" role="tab">Extensions</button></div>
        <!-- /wp:tab-list -->
        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel">
            <!-- wp:tab-panel {"label":"Widgets"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Small Blocks, Large Responsibility</h3><!-- /wp:heading --><!-- wp:paragraph -->
                <p>Widget blocks repeat across sidebars, footers, archives, plugin shells, and application layouts. They deserve the same design-system discipline as larger components.</p><!-- /wp:paragraph -->
            </section><!-- /wp:tab-panel -->
            <!-- wp:tab-panel {"label":"Lists"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">System List Is the Shared Language</h3><!-- /wp:heading --><!-- wp:paragraph -->
                <p>Archives, Categories, Latest Posts, Latest Comments, Page List, and RSS can share System List and Flat List presentation while keeping native behavior.</p><!-- /wp:paragraph -->
            </section><!-- /wp:tab-panel -->
            <!-- wp:tab-panel {"label":"Panels"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Some Widgets Own Their Own Surface</h3><!-- /wp:heading --><!-- wp:paragraph -->
                <p>Latest Posts and Latest Comments support Panel treatments, while Calendar has its own System Panel treatment.</p><!-- /wp:paragraph -->
            </section><!-- /wp:tab-panel -->
            <!-- wp:tab-panel {"label":"Discovery"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Taxonomy Is Navigation</h3><!-- /wp:heading --><!-- wp:paragraph -->
                <p>Categories, Archives, Page List, Tag Cloud, and Terms Query help users discover content without changing destination semantics.</p><!-- /wp:paragraph -->
            </section><!-- /wp:tab-panel -->
            <!-- wp:tab-panel {"label":"Utility"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Utility Blocks Belong in Real Layouts</h3><!-- /wp:heading --><!-- wp:paragraph -->
                <p>Calendar, Search, Social Icons, and feeds often live beside content rather than inside it.</p><!-- /wp:paragraph -->
            </section><!-- /wp:tab-panel -->
            <!-- wp:tab-panel {"label":"Extensions"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Plugins Extend the Widget Surface</h3><!-- /wp:heading --><!-- wp:paragraph -->
                <p>BuddyPress widgets can adopt SystemStrap presentation while BuddyPress continues to own data, interaction, and markup.</p><!-- /wp:paragraph -->
            </section><!-- /wp:tab-panel -->
        </div><!-- /wp:tab-panels -->
    </div><!-- /wp:tabs -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Widget Anatomy</h2><!-- /wp:heading -->
        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Source</h4><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Core or plugin data decides what the widget knows.</p><!-- /wp:paragraph -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Structure</h4><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">The block owns its native HTML and behavior.</p><!-- /wp:paragraph -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Treatment</h4><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">List, Flat List, Panel, Flat Panel, Badge, Tags, and semantic color change presentation.</p><!-- /wp:paragraph -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Composition</h4><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Groups, Columns, Panels, Equal Heights, Headers, and Footers build complete widget regions.</p><!-- /wp:paragraph -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Structure First</h2><!-- /wp:heading -->
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Archives</h4><!-- /wp:heading --><!-- wp:archives {"showPostCounts":true} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Categories</h4><!-- /wp:heading --><!-- wp:categories {"showPostCounts":true,"showHierarchy":true} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Latest Posts</h4><!-- /wp:heading --><!-- wp:latest-posts {"displayPostDate":true} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Latest Comments</h4><!-- /wp:heading --><!-- wp:latest-comments {"commentsToShow":4,"displayAvatar":true,"displayDate":true,"displayExcerpt":false} /-->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">System List Family</h2><!-- /wp:heading -->
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Archives / System List</h4><!-- /wp:heading --><!-- wp:archives {"showPostCounts":true,"className":"is-style-system-list"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Categories / Flat List</h4><!-- /wp:heading --><!-- wp:categories {"showPostCounts":true,"showHierarchy":true,"className":"is-style-system-flat-list"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Page List / System List</h4><!-- /wp:heading --><!-- wp:page-list {"className":"is-style-system-list"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">RSS / Flat List</h4><!-- /wp:heading --><!-- wp:rss {"feedURL":"https://wordpress.org/news/feed/","itemsToShow":4,"displayExcerpt":false,"displayAuthor":false,"displayDate":true,"className":"is-style-system-flat-list"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Latest Content Surface Matrix</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Latest Posts and Latest Comments can move from list utility to self-contained surfaced widgets without changing their data source.</p><!-- /wp:paragraph -->
        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Posts / List</h4><!-- /wp:heading --><!-- wp:latest-posts {"displayPostDate":true,"className":"is-style-system-list"} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Posts / Flat List</h4><!-- /wp:heading --><!-- wp:latest-posts {"displayPostDate":true,"className":"is-style-system-flat-list"} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Posts / Panel</h4><!-- /wp:heading --><!-- wp:latest-posts {"displayPostDate":true,"className":"is-style-system-panel"} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Posts / Flat Panel</h4><!-- /wp:heading --><!-- wp:latest-posts {"displayPostDate":true,"className":"is-style-system-flat-panel"} /-->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Comments / List</h4><!-- /wp:heading --><!-- wp:latest-comments {"commentsToShow":4,"displayAvatar":true,"displayDate":true,"displayExcerpt":false,"className":"is-style-system-list"} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Comments / Flat List</h4><!-- /wp:heading --><!-- wp:latest-comments {"commentsToShow":4,"displayAvatar":true,"displayDate":true,"displayExcerpt":false,"className":"is-style-system-flat-list"} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Comments / Panel</h4><!-- /wp:heading --><!-- wp:latest-comments {"commentsToShow":4,"displayAvatar":true,"displayDate":true,"displayExcerpt":false,"className":"is-style-system-panel"} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Comments / Flat Panel</h4><!-- /wp:heading --><!-- wp:latest-comments {"commentsToShow":4,"displayAvatar":true,"displayDate":true,"displayExcerpt":false,"className":"is-style-system-flat-panel"} /-->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Taxonomy and Discovery</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Discovery widgets should reveal their natural geometry first. Lists emphasize structure, badges emphasize compact categories, and tag treatments emphasize browsing without pretending every taxonomy widget is the same shape.</p><!-- /wp:paragraph -->
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Archive Badges</h4><!-- /wp:heading --><!-- wp:archives {"showPostCounts":true,"className":"is-style-system-badge"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Category Badges</h4><!-- /wp:heading --><!-- wp:categories {"showPostCounts":true,"className":"is-style-system-badge"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Tag Cloud / Badge</h4><!-- /wp:heading --><!-- wp:tag-cloud {"className":"is-style-system-badge"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Tag Cloud / Tags</h4><!-- /wp:heading --><!-- wp:tag-cloud {"className":"is-style-system-tags"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Badge &amp; Tag Vocabulary</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>The same discovery language can be presented at different visual weights. System Badge is compact and categorical; System Tags is looser and browse-oriented; System List remains the strongest choice when hierarchy and scanning matter most.</p><!-- /wp:paragraph -->

        <!-- wp:columns -->
        <div class="wp-block-columns">

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background">
                    <!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Archive Badges</h4><!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Compact date discovery.</p><!-- /wp:paragraph -->
                    <!-- wp:archives {"showPostCounts":true,"className":"is-style-system-badge"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background">
                    <!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Category Badges</h4><!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Compact categorical navigation.</p><!-- /wp:paragraph -->
                    <!-- wp:categories {"showPostCounts":true,"className":"is-style-system-badge"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background">
                    <!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Tag Cloud / Badge</h4><!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Dense tag discovery with stronger token boundaries.</p><!-- /wp:paragraph -->
                    <!-- wp:tag-cloud {"className":"is-style-system-badge"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background">
                    <!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Tag Cloud / Tags</h4><!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">A softer cluster for exploratory browsing.</p><!-- /wp:paragraph -->
                    <!-- wp:tag-cloud {"className":"is-style-system-tags"} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->

        </div><!-- /wp:columns -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Same Discovery, Different Weight</h3><!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Badges are useful when the taxonomy itself is the interface. Tags work better when browsing should feel lighter. Lists remain the clearest treatment when counts, hierarchy, or long labels need room.</p><!-- /wp:paragraph -->
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">List</h4><!-- /wp:heading --><!-- wp:categories {"showPostCounts":true,"className":"is-style-system-flat-list"} /-->
                </div><!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Badges</h4><!-- /wp:heading --><!-- wp:categories {"showPostCounts":true,"className":"is-style-system-badge"} /-->
                </div><!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Tags</h4><!-- /wp:heading --><!-- wp:tag-cloud {"className":"is-style-system-tags"} /-->
                </div><!-- /wp:column -->
            </div><!-- /wp:columns -->
        </div><!-- /wp:group -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Calendar, Search, and Social Utility</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>These widgets intentionally keep their natural dimensions. They are different tools, not cards that need to pretend they share the same height.</p><!-- /wp:paragraph -->
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Calendar / System Panel</h4><!-- /wp:heading --><!-- wp:calendar {"className":"is-style-system-panel"} /-->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Search</h4><!-- /wp:heading --><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search this site…","buttonText":"Search","buttonUseIcon":true} /-->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Social Links</h4><!-- /wp:heading --><!-- wp:social-links {"openInNewTab":true,"showLabels":true,"className":"is-style-logos-only"} -->
                    <ul class="wp-block-social-links has-visible-labels is-style-logos-only"><!-- wp:social-link {"url":"https://github.com/","service":"github","label":"GitHub"} /--><!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress","label":"WordPress"} /--><!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube","label":"YouTube"} /--></ul><!-- /wp:social-links -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Sidebar Composition</h2><!-- /wp:heading -->
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"34%"} -->
            <div class="wp-block-column" style="flex-basis:34%">
                <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background">
                    <!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Site Utility</h3><!-- /wp:heading -->
                    </div><!-- /wp:group -->
                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Find something…","buttonUseIcon":true} /--><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Recent Posts</h4><!-- /wp:heading --><!-- wp:latest-posts {"displayPostDate":true,"className":"is-style-system-flat-list"} /--><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Categories</h4><!-- /wp:heading --><!-- wp:categories {"showPostCounts":true,"className":"is-style-system-flat-list"} /--><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Topics</h4><!-- /wp:heading --><!-- wp:tag-cloud {"className":"is-style-system-tags"} /-->
                    </div><!-- /wp:group -->
                    <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Search · Browse · Discover</p><!-- /wp:paragraph -->
                    </div><!-- /wp:group -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Content Surface</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>The sidebar stays independent from the primary content region. Widget styling should help scanning without making the utility rail compete with the page’s main purpose.</p><!-- /wp:paragraph --><!-- wp:quote -->
                    <blockquote class="wp-block-quote"><!-- wp:paragraph -->
                        <p>Widgets work best when each one has a job and the surrounding layout supplies the larger hierarchy.</p><!-- /wp:paragraph -->
                    </blockquote><!-- /wp:quote -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Equal Height Widget Dashboard</h2><!-- /wp:heading -->
        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights">
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Recent Activity</h4><!-- /wp:heading -->
                    </div><!-- /wp:group --><!-- wp:latest-comments {"commentsToShow":3,"displayAvatar":true,"displayDate":true,"displayExcerpt":false,"className":"is-style-system-flat-list"} /--><!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Latest comments</p><!-- /wp:paragraph -->
                    </div><!-- /wp:group -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Archive Index</h4><!-- /wp:heading -->
                    </div><!-- /wp:group --><!-- wp:archives {"showPostCounts":true,"className":"is-style-system-flat-list"} /--><!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Browse by month</p><!-- /wp:paragraph -->
                    </div><!-- /wp:group -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Topic Cloud</h4><!-- /wp:heading -->
                    </div><!-- /wp:group --><!-- wp:tag-cloud {"className":"is-style-system-tags"} /--><!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Browse by tag</p><!-- /wp:paragraph -->
                    </div><!-- /wp:group -->
                </div><!-- /wp:group -->
            </div><!-- /wp:column -->
        </div><!-- /wp:columns -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">Plugin Widget Extension Boundary</h2><!-- /wp:heading -->
        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color has-background">
            <!-- wp:paragraph -->
            <p>SystemStrap supports plugin-owned widget surfaces without making plugins a requirement for the Core Widget Lab. BuddyPress is the clearest example: member, activity, login, navigation, and notice widgets keep BuddyPress data and behavior while adopting theme presentation where supported.</p><!-- /wp:paragraph -->
            <!-- wp:list {"className":"is-style-system-list"} -->
            <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                <li>Plugin owns data and interaction.</li><!-- /wp:list-item --><!-- wp:list-item -->
                <li>SystemStrap owns supported presentation adapters.</li><!-- /wp:list-item --><!-- wp:list-item -->
                <li>Core widget specimens remain useful when the plugin is inactive.</li><!-- /wp:list-item -->
            </ul><!-- /wp:list -->
        </div><!-- /wp:group -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading -->
        <h2 class="wp-block-heading">SystemStrap Widget Operations Deck</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>The final fixture treats classic theme widgets as one composable application surface: discovery, recent activity, calendar context, search, and external signals remain independent blocks inside a shared Panel system.</p><!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background">
            <!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>WIDGETS // OPERATIONS DECK</strong></p><!-- /wp:paragraph --><!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Site Utility Console</h3><!-- /wp:heading -->
                    </div><!-- /wp:group --><!-- wp:paragraph {"className":"is-style-system-badge"} -->
                    <p class="is-style-system-badge"><mark style="background-color:#009933" class="has-inline-color has-light-color">Online</mark></p><!-- /wp:paragraph -->
                </div><!-- /wp:group -->
            </div><!-- /wp:group -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights">
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Find</h4><!-- /wp:heading --><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the site…","buttonUseIcon":true} /--><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Quick Filters</h4><!-- /wp:heading --><!-- wp:categories {"showPostCounts":true,"className":"is-style-system-badge"} /--><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Category Index</h4><!-- /wp:heading --><!-- wp:categories {"showPostCounts":true,"className":"is-style-system-flat-list"} /-->
                    </div><!-- /wp:group -->
                </div><!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Recent</h4><!-- /wp:heading --><!-- wp:latest-posts {"displayPostDate":true,"className":"is-style-system-flat-list"} /--><!-- wp:latest-comments {"commentsToShow":3,"displayAvatar":false,"displayDate":true,"displayExcerpt":false,"className":"is-style-system-flat-list"} /-->
                    </div><!-- /wp:group -->
                </div><!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Browse</h4><!-- /wp:heading --><!-- wp:archives {"showPostCounts":true,"className":"is-style-system-flat-list"} /--><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Topics</h4><!-- /wp:heading --><!-- wp:tag-cloud {"className":"is-style-system-tags"} /--><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Hot Tags</h4><!-- /wp:heading --><!-- wp:tag-cloud {"className":"is-style-system-badge"} /-->
                    </div><!-- /wp:group -->
                </div><!-- /wp:column -->
            </div><!-- /wp:columns -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:calendar {"className":"is-style-system-panel"} /-->
                </div><!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">External Signal</h4><!-- /wp:heading --><!-- wp:paragraph {"className":"is-style-system-badge"} -->
                            <p class="is-style-system-badge"><mark style="background-color:#0693e3" class="has-inline-color has-light-color">Feed</mark></p><!-- /wp:paragraph -->
                        </div><!-- /wp:group --><!-- wp:rss {"feedURL":"https://wordpress.org/news/feed/","itemsToShow":3,"displayExcerpt":false,"displayAuthor":false,"displayDate":true,"className":"is-style-system-flat-list"} /-->
                    </div><!-- /wp:group -->
                </div><!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Connect</h4><!-- /wp:heading --><!-- wp:paragraph {"className":"is-style-system-badge"} -->
                            <p class="is-style-system-badge"><mark style="background-color:#009933" class="has-inline-color has-light-color">Community</mark></p><!-- /wp:paragraph -->
                        </div><!-- /wp:group --><!-- wp:social-links {"openInNewTab":true,"showLabels":true,"className":"is-style-logos-only"} -->
                        <ul class="wp-block-social-links has-visible-labels is-style-logos-only"><!-- wp:social-link {"url":"https://github.com/","service":"github","label":"GitHub"} /--><!-- wp:social-link {"url":"https://wordpress.org/","service":"wordpress","label":"WordPress"} /--><!-- wp:social-link {"url":"https://www.youtube.com/","service":"youtube","label":"YouTube"} /--></ul><!-- /wp:social-links -->
                    </div><!-- /wp:group -->
                </div><!-- /wp:column -->
            </div><!-- /wp:columns -->

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>Native widgets. Shared presentation. Portable composition.</strong></p><!-- /wp:paragraph -->
            </div><!-- /wp:group -->
        </div><!-- /wp:group -->
    </div><!-- /wp:group -->

</div><!-- /wp:group -->