<?php
/**
 * Title: Archive Sidebar
 * Slug: systemstrap/sidebar-archive
 * Description: Complementary archive navigation and discovery content.
 * Categories: systemstrap
 */
?>

<!-- wp:group {"tagName":"aside","anchor":"archive-sidebar","metadata":{"patternName":"systemstrap/sidebar-archive"},"align":"full","className":"archive-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="archive-sidebar" class="wp-block-group alignfull archive-sidebar">

	<!-- wp:heading {"level":2,"anchor":"archive-sidebar-title","className":"screen-reader-text"} -->
	<h2 class="wp-block-heading screen-reader-text" id="archive-sidebar-title"><?php esc_html_e( 'Archive Sidebar', 'systemstrap' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e( 'Search', 'systemstrap' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search…","buttonText":"Search","buttonUseIcon":true} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default">

		<!-- wp:calendar {"className":"is-style-system-panel"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-default","layout":{"type":"default"}} -->
	<div class="wp-block-group is-style-default">

		<!-- wp:accordion {"iconPosition":"left","autoclose":true,"className":"is-style-system-accordion","layout":{"type":"default"}} -->
		<div role="group" class="wp-block-accordion is-style-system-accordion">

			<!-- wp:accordion-item {"openByDefault":true} -->
			<div class="wp-block-accordion-item is-open">

				<!-- wp:accordion-heading {"iconPosition":"left"} -->
				<h3 class="wp-block-accordion-heading has-icon has-icon-left"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Archives', 'systemstrap' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0","left":"var:preset|spacing|0","right":"var:preset|spacing|0"}}}} -->
				<div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)">

					<!-- wp:archives {"showPostCounts":true,"className":"is-style-system-list-flush","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info"} /-->

				</div>
				<!-- /wp:accordion-panel -->

			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">

				<!-- wp:accordion-heading {"iconPosition":"left"} -->
				<h3 class="wp-block-accordion-heading has-icon has-icon-left"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Categories', 'systemstrap' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0","left":"var:preset|spacing|0","right":"var:preset|spacing|0"}}}} -->
				<div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)">

					<!-- wp:categories {"showPostCounts":true,"className":"is-style-system-list-flush","style":{"elements":{"link":{"color":{"text":"var:preset|color|success"}}}},"textColor":"success"} /-->

				</div>
				<!-- /wp:accordion-panel -->

			</div>
			<!-- /wp:accordion-item -->

			<!-- wp:accordion-item -->
			<div class="wp-block-accordion-item">

				<!-- wp:accordion-heading {"iconPosition":"left"} -->
				<h3 class="wp-block-accordion-heading has-icon has-icon-left"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span><span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e( 'Tags', 'systemstrap' ); ?></span></button></h3>
				<!-- /wp:accordion-heading -->

				<!-- wp:accordion-panel {"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0","left":"var:preset|spacing|0","right":"var:preset|spacing|0"}}}} -->
				<div role="region" class="wp-block-accordion-panel" style="padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)">

					<!-- wp:categories {"taxonomy":"post_tag","showPostCounts":true,"className":"is-style-system-list-flush","style":{"elements":{"link":{"color":{"text":"var:preset|color|warning"}}}},"textColor":"warning"} /-->

				</div>
				<!-- /wp:accordion-panel -->

			</div>
			<!-- /wp:accordion-item -->

		</div>
		<!-- /wp:accordion -->

	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</aside>
<!-- /wp:group -->