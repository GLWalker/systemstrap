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

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Search', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search…","buttonText":"Search","buttonUseIcon":true} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Latest Posts', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"postsToShow":4,"displayPostDate":true,"className":"is-style-system-list-flush","layout":{"type":"default","columnCount":3}} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-system-panel-header">

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Pages', 'systemstrap' ); ?></h3>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->

		<!-- wp:page-list {"className":"is-style-system-list-flush"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</aside>
<!-- /wp:group -->