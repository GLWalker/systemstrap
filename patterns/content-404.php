<?php

/**
 * Title: Content 404
 * Slug: systemstrap/content-404
 * Categories: systemstrap
 * Keywords: 404, not found, error, recovery, systemstrap
 * Description: Internal 404 page content with search, home recovery, and archive navigation.
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"article","metadata":{"patternName":"systemstrap/content-404"},"align":"full","className":"hentry","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<article class="wp-block-group alignfull hentry" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"align":"wide","className":"is-style-system-flat-panel","style":{"background":{"gradient":"var:preset|gradient|pattern-42"}},"backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide is-style-system-flat-panel has-tertiary-bg-background-color has-background">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"clamp(5rem,12vw,10rem)","fontWeight":"900","lineHeight":"0.82","letterSpacing":"-0.05em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p style="margin-top:0;margin-bottom:0;font-size:clamp(5rem,12vw,10rem);font-weight:900;letter-spacing:-0.05em;line-height:0.82">404</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<h1 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'You took a wrong turn.', 'systemstrap' ); ?></h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} -->
				<p class="has-large-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'That page isn’t here, but you still have options. Search the site or head back home.', 'systemstrap' ); ?></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"center"}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)">

				<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":"640px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">

					<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', '404 search label', 'systemstrap' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search the site…', '404 search placeholder', 'systemstrap' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php echo esc_attr_x( 'Search', '404 search button text', 'systemstrap' ); ?>","buttonUseIcon":true} /-->

				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">

					<!-- wp:button -->
					<div class="wp-block-button">
						<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return Home', 'systemstrap' ); ?></a>
					</div>
					<!-- /wp:button -->

				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","className":"is-style-system-flat-panel","style":{"background":{"gradient":"var:preset|gradient|absolute-03"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide is-style-system-flat-panel has-base-background-color has-background">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

				<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40)">

					<!-- wp:icon {"icon":"core/map-marker","style":{"dimensions":{"width":"3rem"}}} /-->

					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">

						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:800;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Another Route', 'systemstrap' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
						<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Explore the archive.', 'systemstrap' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
						<p style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Browse by year and see where the site has been.', 'systemstrap' ); ?></p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

				<!-- wp:archives {"type":"yearly","className":"is-style-system-list-flush"} /-->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</article>
<!-- /wp:group -->