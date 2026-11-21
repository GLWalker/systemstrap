<?php

/**
 * Title: Modal Search Content
 * Slug: systemstrap/modal-search-content
 * Categories: systemstrap
 */
?>
<!-- wp:group {"metadata":{"name":"System Modal"},"className":"is-style-system-panel is-style-system-modal strap-ajax-search-modal","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel is-style-system-modal strap-ajax-search-modal has-base-background-color has-background">
    <!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
    <div class="wp-block-group is-style-system-panel-header">
        <!-- wp:heading {"metadata":{"name":"Modal Heading"},"style":{"typography":{"textAlign":"left"}}} -->
        <h2 class="wp-block-heading has-text-align-left">Search</h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"strap-ajax-search-wrapper","layout":{"type":"constrained"}} -->
    <div class="wp-block-group strap-ajax-search-wrapper">
        <!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"className":"strap-ajax-search-form"} /-->

        <!-- wp:heading {"level":4,"className":"strap-ajax-search-title"} -->
        <h4 class="wp-block-heading strap-ajax-search-title">Search Results:</h4>
        <!-- /wp:heading -->

        <!-- wp:html -->
        <div class="strap-ajax-results-container"
            style="height: 380px; overflow-y: auto; overflow-x: hidden; padding-top: var(--wp--preset--spacing--20);">
            <p class="strap-ajax-no-results" style="display:none; text-align:center; padding: 2rem 0; opacity: 0.6;">No
                results found.</p>
            <p class="strap-ajax-loading" style="display:none; text-align:center; padding: 2rem 0; opacity: 0.6;">
                Searching...</p>
            <div class="strap-ajax-results-list">
                <p style="opacity:0.6; text-align:center; padding: 2rem 0;">Type above to start searching.</p>
            </div>
        </div>
        <!-- /wp:html -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
    <div class="wp-block-group is-style-system-panel-footer">
        <!-- wp:group {"className":"strap-ajax-search-footer-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
        <div class="wp-block-group strap-ajax-search-footer-row">
            <!-- wp:paragraph {"className":"strap-ajax-counter","style":{"typography":{"textAlign":"left"}}} -->
            <p class="has-text-align-left strap-ajax-counter">0 results found</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"tagName":"button","className":"strap-ajax-prev"} -->
                <div class="wp-block-button strap-ajax-prev"><button type="button" class="wp-block-button__link wp-element-button">Previous</button></div>
                <!-- /wp:button -->

                <!-- wp:button {"tagName":"button","className":"strap-ajax-next"} -->
                <div class="wp-block-button strap-ajax-next"><button type="button" class="wp-block-button__link wp-element-button">Next</button></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
