<?php

/**
 * Title: BuddyPress Activity Sidebar
 * Slug: systemstrap/sidebar-buddypress-activity
 * Description: Community navigation, account context, notices, members, friends, and groups for BuddyPress activity layouts.
 * Categories: systemstrap
 */

?>

<!-- wp:group {"tagName":"aside","anchor":"buddypress-activity-sidebar","metadata":{"patternName":"systemstrap/sidebar-buddypress-activity"},"align":"full","className":"buddypress-activity-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="buddypress-activity-sidebar" class="wp-block-group alignfull buddypress-activity-sidebar">

    <!-- wp:heading {"level":2,"anchor":"buddypress-activity-sidebar-title","className":"screen-reader-text"} -->
    <h2 id="buddypress-activity-sidebar-title" class="wp-block-heading screen-reader-text"><?php esc_html_e('Community Activity Sidebar', 'systemstrap'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:bp/login-form {"className":"is-style-system-panel"} /-->

    <!-- wp:bp/sitewide-notices /-->

    <!-- wp:bp/primary-nav {"className":"is-style-default"} /-->

    <!-- wp:bp/online-members {"align":"center","className":"is-style-system-panel"} /-->

    <!-- wp:bp/active-members {"maxMembers":12,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/friends {"linkTitle":true,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/dynamic-groups {"linkTitle":true,"className":"is-style-system-panel"} /-->

    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

</aside>
<!-- /wp:group -->
