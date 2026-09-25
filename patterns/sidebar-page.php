<?php
/**
 * Title: Page Sidebar
 * Slug: systemstrap/sidebar-page
 * Description: Complementary navigation and discovery content for page layouts.
 * Categories: systemstrap
 */
?>

<!-- wp:group {"tagName":"aside","anchor":"page-sidebar","metadata":{"patternName":"systemstrap/sidebar-page"},"align":"full","className":"page-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="page-sidebar" class="wp-block-group alignfull page-sidebar">

	<!-- wp:heading {"level":2,"anchor":"page-sidebar-title","className":"screen-reader-text"} -->
	<h2 class="wp-block-heading screen-reader-text" id="page-sidebar-title"><?php esc_html_e( 'Page Sidebar', 'systemstrap' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'Search form label', 'systemstrap' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search…', 'Search field placeholder', 'systemstrap' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Search button text', 'systemstrap' ); ?>","buttonUseIcon":true} /-->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Pages', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:page-list /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Latest Posts', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"postsToShow":5,"displayPostDate":true} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Categories', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:categories {"showPostCounts":true} /-->

	</div>
	<!-- /wp:group -->

</aside>
<!-- /wp:group -->