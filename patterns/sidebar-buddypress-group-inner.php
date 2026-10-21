<?php

/**
 * Title: BuddyPress Group Inner Sidebar
 * Slug: systemstrap/sidebar-buddypress-group-inner
 * Description: Contextual BuddyPress navigation and community blocks for single-group inner layouts.
 * Categories: systemstrap
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"aside","anchor":"buddypress-group-inner-sidebar","metadata":{"patternName":"systemstrap/sidebar-buddypress-group-inner"},"align":"full","className":"strap-bp-inner-sidebar buddypress-group-inner-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="buddypress-group-inner-sidebar" class="wp-block-group alignfull strap-bp-inner-sidebar buddypress-group-inner-sidebar">

    <!-- wp:heading {"level":2,"anchor":"buddypress-group-inner-sidebar-title","className":"screen-reader-text"} -->
    <h2 id="buddypress-group-inner-sidebar-title" class="wp-block-heading screen-reader-text"><?php esc_html_e('Group Navigation', 'systemstrap'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:bp/login-form {"className":"is-style-system-panel"} /-->

    <!-- wp:bp/sitewide-notices /-->

    <!-- wp:bp/primary-nav {"className":"is-style-default"} /-->

    <!-- wp:bp/groups {"linkTitle":true,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/latest-activities {"className":"is-style-system-panel"} /-->

    <!-- wp:bp/active-members {"maxMembers":12,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/online-members {"align":"center","className":"is-style-system-panel"} /-->

    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

</aside>
<!-- /wp:group -->