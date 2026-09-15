<?php

/**
 * Title: Content Archive
 * Slug: systemstrap/content-archive
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"section","metadata":{"patternName":"systemstrap/content-archive"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">

		<!-- wp:group {"tagName":"header","layout":{"type":"constrained"}} -->
		<header class="wp-block-group">

			<!-- wp:query-title {"type":"archive"} /-->

			<!-- wp:term-description /-->

		</header>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"systemstrap/query-latest-posts-list"} /-->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->