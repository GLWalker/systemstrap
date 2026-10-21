<?php

/**
 * Title: BuddyPress Members Sidebar
 * Slug: systemstrap/sidebar-buddypress-members
 * Description: Member presence, community activity, social context, and group discovery for BuddyPress member directory layouts.
 * Categories: systemstrap
 */

?>

<!-- wp:group {"tagName":"aside","anchor":"buddypress-members-sidebar","metadata":{"patternName":"systemstrap/sidebar-buddypress-members"},"align":"full","className":"buddypress-members-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="buddypress-members-sidebar" class="wp-block-group alignfull buddypress-members-sidebar">

    <!-- wp:heading {"level":2,"anchor":"buddypress-members-sidebar-title","className":"screen-reader-text"} -->
    <h2 id="buddypress-members-sidebar-title" class="wp-block-heading screen-reader-text"><?php esc_html_e('Community Members Sidebar', 'systemstrap'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:bp/login-form {"className":"is-style-system-panel"} /-->

    <!-- wp:bp/sitewide-notices /-->

    <!-- wp:bp/primary-nav {"className":"is-style-default"} /-->

    <!-- wp:bp/online-members {"align":"center","className":"is-style-system-panel"} /-->

    <!-- wp:bp/active-members {"maxMembers":12,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/friends {"linkTitle":true,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/latest-activities {"className":"is-style-system-panel"} /-->

    <!-- wp:bp/dynamic-groups {"linkTitle":true,"className":"is-style-system-panel"} /-->

    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

</aside>
<!-- /wp:group -->
