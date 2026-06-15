<?php
/**
 * Title: Offcanvas Left
 * Slug: systemstrap/offcanvas-left
 * Categories: systemstrap
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","className":"is-style-system-search-minimal"} /-->

<!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel">
    
    <!-- wp:group {"className":"is-style-system-panel-header","gradient":"element","layout":{"type":"constrained","justifyContent":"center"}} -->
    <div class="wp-block-group is-style-system-panel-header has-element-gradient-background has-background">
        <!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"left"}}} -->
        <h5 class="wp-block-heading has-text-align-left">Categories</h5>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"showEmpty":true,"className":"is-style-system-list"} /-->
</div>
<!-- /wp:group -->

<!-- wp:tag-cloud {"className":"is-style-system-tags"} /-->

</div>
<!-- /wp:group -->