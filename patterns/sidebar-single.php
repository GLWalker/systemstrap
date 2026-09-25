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

	<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'Search form label', 'systemstrap' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search…', 'Search field placeholder', 'systemstrap' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'Search button text', 'systemstrap' ); ?>","buttonUseIcon":true} /-->

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

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Archives', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:archives {"showPostCounts":true} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Tags', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:tag-cloud {"smallestFontSize":"0.8rem","largestFontSize":"1rem","numberOfTags":20} /-->

	</div>
	<!-- /wp:group -->

</aside>
<!-- /wp:group -->