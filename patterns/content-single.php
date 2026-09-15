<?php

/**
 * Title: Content Single
 * Slug: systemstrap/content-single
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"article","metadata":{"patternName":"systemstrap/content-single"},"align":"full","className":"hentry","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull hentry" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">

		<!-- wp:group {"tagName":"header","className":"entry-header","layout":{"type":"constrained"}} -->
		<header class="wp-block-group entry-header">

			<!-- wp:post-featured-image /-->

			<!-- wp:post-title {"level":1,"className":"entry-title"} /-->

			<!-- wp:pattern {"slug":"systemstrap/posts-meta"} /-->

		</header>
		<!-- /wp:group -->

		<!-- wp:post-content {"align":"full","className":"entry-content","layout":{"type":"constrained"}} /-->

		<!-- wp:group {"tagName":"footer","className":"entry-meta","layout":{"type":"constrained"}} -->
		<footer class="wp-block-group entry-meta">

			<!-- wp:post-terms {"term":"post_tag","textAlign":"left","separator":" ","className":"is-style-system-list"} /-->

			<!-- wp:group {"tagName":"nav","className":"post-navigation","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<nav class="wp-block-group post-navigation">

				<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_attr_x( 'Previous: ', 'Previous post navigation label', 'systemstrap' ); ?>","showTitle":true,"linkLabel":true,"arrow":"chevron"} /-->

				<!-- wp:post-navigation-link {"label":"<?php echo esc_attr_x( 'Next: ', 'Next post navigation label', 'systemstrap' ); ?>","showTitle":true,"linkLabel":true,"arrow":"chevron"} /-->

			</nav>
			<!-- /wp:group -->

		</footer>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</article>
<!-- /wp:group -->