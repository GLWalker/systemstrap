<?php

/**
 * Title: BuddyPress Groups Sidebar
 * Slug: systemstrap/sidebar-buddypress-groups
 * Description: Group discovery, community activity, and member context for BuddyPress group directory layouts.
 * Categories: systemstrap
 */

?>

<!-- wp:group {"tagName":"aside","anchor":"buddypress-groups-sidebar","metadata":{"patternName":"systemstrap/sidebar-buddypress-groups"},"align":"full","className":"buddypress-groups-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="buddypress-groups-sidebar" class="wp-block-group alignfull buddypress-groups-sidebar">

    <!-- wp:heading {"level":2,"anchor":"buddypress-groups-sidebar-title","className":"screen-reader-text"} -->
    <h2 id="buddypress-groups-sidebar-title" class="wp-block-heading screen-reader-text"><?php esc_html_e('Community Groups Sidebar', 'systemstrap'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:bp/login-form {"className":"is-style-system-panel"} /-->

    <!-- wp:bp/sitewide-notices /-->

    <!-- wp:bp/primary-nav {"className":"is-style-default"} /-->

    <!-- wp:bp/dynamic-groups {"linkTitle":true,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/online-members {"align":"center","className":"is-style-system-panel"} /-->

    <!-- wp:bp/active-members {"maxMembers":12,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/latest-activities {"className":"is-style-system-panel"} /-->

    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

</aside>
<!-- /wp:group -->