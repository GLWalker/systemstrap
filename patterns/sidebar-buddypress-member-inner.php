<?php

/**
 * Title: BuddyPress Member Inner Sidebar
 * Slug: systemstrap/sidebar-buddypress-member-inner
 * Description: Contextual BuddyPress primary navigation for single-member inner layouts.
 * Categories: systemstrap
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"aside","anchor":"buddypress-member-inner-sidebar","metadata":{"patternName":"systemstrap/sidebar-buddypress-member-inner"},"align":"full","className":"strap-bp-inner-sidebar buddypress-member-inner-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="buddypress-member-inner-sidebar" class="wp-block-group alignfull strap-bp-inner-sidebar buddypress-member-inner-sidebar">

    <!-- wp:heading {"level":2,"anchor":"buddypress-member-inner-sidebar-title","className":"screen-reader-text"} -->
    <h2 id="buddypress-member-inner-sidebar-title" class="wp-block-heading screen-reader-text"><?php esc_html_e('Member Navigation', 'systemstrap'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:bp/login-form {"className":"is-style-system-panel"} /-->

    <!-- wp:bp/sitewide-notices /-->

    <!-- wp:bp/primary-nav {"className":"is-style-default"} /-->

    <!-- wp:bp/friends {"linkTitle":true,"postId":"systemstrap//part-buddypress-member-inner","className":"is-style-system-panel"} /-->

    <!-- wp:bp/latest-activities {"className":"is-style-system-panel"} /-->

    <!-- wp:bp/active-members {"maxMembers":12,"className":"is-style-system-panel"} /-->

    <!-- wp:bp/online-members {"align":"center","className":"is-style-system-panel"} /-->

    <!-- wp:spacer {"height":"var:preset|spacing|40"} -->
    <div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

</aside>
<!-- /wp:group -->