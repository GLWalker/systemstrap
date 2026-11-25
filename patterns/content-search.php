<?php

/**
 * Title: Content Search
 * Slug: systemstrap/content-search
 * Categories: systemstrap
 * Keywords: search, results, query, recovery, systemstrap
 * Description: Internal search page content with a prominent search form and media-object results.
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"article","metadata":{"patternName":"systemstrap/content-search"},"align":"full","className":"hentry","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull hentry" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"tagName":"header","align":"wide","className":"is-style-system-flat-panel has-tertiary-bg-background-color","gradient":"pattern-42","layout":{"type":"constrained"}} -->
		<header class="wp-block-group alignwide is-style-system-flat-panel has-tertiary-bg-background-color has-pattern-42-gradient-background has-background">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)">

				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:800;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Search SystemStrap', 'systemstrap'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:query-title {"type":"search","showPrefix":false,"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} -->
				<p class="has-large-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Refine your search or explore the matching content below.', 'systemstrap'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:search {"label":"<?php echo esc_attr_x('Search', 'search results form label', 'systemstrap'); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x('Search the site…', 'search results form placeholder', 'systemstrap'); ?>","width":100,"widthUnit":"%","buttonText":"<?php echo esc_attr_x('Search', 'search results form button text', 'systemstrap'); ?>","buttonUseIcon":true} /-->

			</div>
			<!-- /wp:group -->

		</header>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"systemstrap/query-media-object"} /-->

	</div>
	<!-- /wp:group -->

</article>
<!-- /wp:group -->
