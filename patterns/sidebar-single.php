<?php
/**
 * Title: Single Sidebar
 * Slug: systemstrap/sidebar-single
 * Description: Complementary navigation and discovery content for single post layouts.
 * Categories: systemstrap
 */
?>

<!-- wp:group {"tagName":"aside","anchor":"single-sidebar","metadata":{"patternName":"systemstrap/sidebar-single"},"align":"full","className":"single-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="single-sidebar" class="wp-block-group alignfull single-sidebar">

	<!-- wp:heading {"level":2,"anchor":"single-sidebar-title","className":"screen-reader-text"} -->
	<h2 class="wp-block-heading screen-reader-text" id="single-sidebar-title"><?php esc_html_e( 'Post Sidebar', 'systemstrap' ); ?></h2>
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

		<!-- wp:latest-posts {"postsToShow":4,"displayPostDate":true,"className":"is-style-system-list-flush","layout":{"type":"default","columnCount":2}} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-system-panel-header">

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Categories', 'systemstrap' ); ?></h3>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->

		<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"className":"is-style-system-list-flush"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default has-info-color has-text-color has-link-color">

		<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
		<h3 class="wp-block-heading has-contrast-color has-text-color has-link-color"><?php esc_html_e( 'Tags', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:tag-cloud {"numberOfTags":24,"showTagCounts":true,"className":"is-style-system-tags"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</aside>
<!-- /wp:group -->