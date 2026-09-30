<?php

/**
 * Title: WooCommerce Catalog Sidebar
 * Slug: systemstrap/sidebar-woocommerce-catalog
 * Description: Complementary product discovery and navigation for WooCommerce catalog layouts.
 * Categories: systemstrap
 */
?>

<!-- wp:group {"tagName":"aside","anchor":"woocommerce-catalog-sidebar","metadata":{"patternName":"systemstrap/sidebar-woocommerce-catalog"},"align":"full","className":"woocommerce-catalog-sidebar","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<aside id="woocommerce-catalog-sidebar" class="wp-block-group alignfull woocommerce-catalog-sidebar">

	<!-- wp:heading {"level":2,"anchor":"woocommerce-catalog-sidebar-title","className":"screen-reader-text"} -->
	<h2 id="woocommerce-catalog-sidebar-title" class="wp-block-heading screen-reader-text"><?php esc_html_e('Product Catalog Sidebar', 'systemstrap'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e('Search', 'systemstrap'); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"Search products","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"}} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-filters -->
	<div class="wp-block-woocommerce-product-filters wc-block-product-filters">

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php esc_html_e('Filters', 'systemstrap'); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:group {"className":"is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|form-control-shadow"},"backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background" style="box-shadow:var(--wp--preset--shadow--form-control-shadow)">

			<!-- wp:woocommerce/product-filter-active {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-woocommerce-product-filter-active" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">

				<!-- wp:woocommerce/product-filter-removable-chips {"chipText":"info","customChipText":"#0085BA","chipBackground":"base","customChipBackground":"#F9FAFB"} -->
				<div class="wp-block-woocommerce-product-filter-removable-chips wc-block-product-filter-removable-chips has-chip-text-color has-chip-background-color" style="--wc-product-filter-removable-chips-text:var(--wp--preset--color--info);--wc-product-filter-removable-chips-background:var(--wp--preset--color--base)"></div>
				<!-- /wp:woocommerce/product-filter-removable-chips -->

				<!-- wp:woocommerce/product-filter-clear-button -->
				<!-- wp:buttons {"fontSize":"x-small","layout":{"type":"flex","verticalAlignment":"stretched","justifyContent":"right"}} -->
				<div class="wp-block-buttons has-custom-font-size has-x-small-font-size">

					<!-- wp:button {"textColor":"danger","className":"wc-block-product-filter-clear-button is-style-button-pill-outline","style":{"typography":{"textDecoration":"none"},"outline":"none","fontSize":"medium","elements":{"link":{"color":{"text":"var:preset|color|danger"}}}}} -->
					<div class="wp-block-button wc-block-product-filter-clear-button is-style-button-pill-outline">
						<a class="wp-block-button__link has-danger-color has-text-color has-link-color wp-element-button" style="text-decoration:none"><?php esc_html_e('Clear filters', 'systemstrap'); ?></a>
					</div>
					<!-- /wp:button -->

				</div>
				<!-- /wp:buttons -->
				<!-- /wp:woocommerce/product-filter-clear-button -->

			</div>
			<!-- /wp:woocommerce/product-filter-active -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">

			<!-- wp:woocommerce/product-filter-price -->
			<div class="wp-block-woocommerce-product-filter-price">

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|10"}}},"fontSize":"large","fontFamily":"heading"} -->
				<p class="has-heading-font-family has-large-font-size" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--10)"><strong><?php esc_html_e('Price', 'systemstrap'); ?></strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:woocommerce/product-filter-price-slider {"inlineInput":true,"sliderHandle":"primary","customSliderHandle":"#2D4054","sliderHandleBorder":"border-color","customSliderHandleBorder":"color-mix(in srgb, currentColor 30%, transparent)","slider":"border-color","customSlider":"color-mix(in srgb, currentColor 30%, transparent)"} -->
				<div class="wp-block-woocommerce-product-filter-price-slider wc-block-product-filter-price-slider has-slider-handle-color has-slider-handle-border-color has-slider-color" style="--wc-product-filter-price-slider-handle:var(--wp--preset--color--primary);--wc-product-filter-price-slider-handle-border:var(--wp--preset--color--border-color);--wc-product-filter-price-slider:var(--wp--preset--color--border-color)"></div>
				<!-- /wp:woocommerce/product-filter-price-slider -->

			</div>
			<!-- /wp:woocommerce/product-filter-price -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-system-panel">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","right":"var:preset|spacing|0","bottom":"var:preset|spacing|10","left":"var:preset|spacing|0"},"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"blockGap":"var:preset|spacing|0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0);padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--0)">

				<!-- wp:accordion {"autoclose":true,"className":"is-style-system-flat-panel","layout":{"type":"default"}} -->
				<div role="group" class="wp-block-accordion is-style-system-flat-panel">

					<!-- wp:accordion-item -->
					<div class="wp-block-accordion-item">

						<!-- wp:accordion-heading -->
						<h3 class="wp-block-accordion-heading has-icon has-icon-right">
							<button type="button" class="wp-block-accordion-heading__toggle">
								<span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e('Rating', 'systemstrap'); ?></span>
								<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
							</button>
						</h3>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel -->
						<div role="region" class="wp-block-accordion-panel">

							<!-- wp:woocommerce/product-filter-rating -->
							<div class="wp-block-woocommerce-product-filter-rating">

								<!-- wp:woocommerce/product-filter-checkbox-list -->
								<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
								<!-- /wp:woocommerce/product-filter-checkbox-list -->

							</div>
							<!-- /wp:woocommerce/product-filter-rating -->

						</div>
						<!-- /wp:accordion-panel -->

					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item -->
					<div class="wp-block-accordion-item">

						<!-- wp:accordion-heading -->
						<h3 class="wp-block-accordion-heading has-icon has-icon-right">
							<button type="button" class="wp-block-accordion-heading__toggle">
								<span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e('Category', 'systemstrap'); ?></span>
								<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
							</button>
						</h3>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel -->
						<div role="region" class="wp-block-accordion-panel">

							<!-- wp:woocommerce/product-filter-taxonomy {"displayStyle":"woocommerce/product-filter-chips","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color"} -->
							<div class="wp-block-woocommerce-product-filter-taxonomy has-tertiary-color-color has-text-color has-link-color">

								<!-- wp:woocommerce/product-filter-chips {"className":"has-x-small-font-size"} -->
								<div class="wp-block-woocommerce-product-filter-chips wc-block-product-filter-chips has-x-small-font-size"></div>
								<!-- /wp:woocommerce/product-filter-chips -->

							</div>
							<!-- /wp:woocommerce/product-filter-taxonomy -->

						</div>
						<!-- /wp:accordion-panel -->

					</div>
					<!-- /wp:accordion-item -->

					<!-- wp:accordion-item -->
					<div class="wp-block-accordion-item">

						<!-- wp:accordion-heading -->
						<h3 class="wp-block-accordion-heading has-icon has-icon-right">
							<button type="button" class="wp-block-accordion-heading__toggle">
								<span class="wp-block-accordion-heading__toggle-title"><?php esc_html_e('Availability', 'systemstrap'); ?></span>
								<span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span>
							</button>
						</h3>
						<!-- /wp:accordion-heading -->

						<!-- wp:accordion-panel -->
						<div role="region" class="wp-block-accordion-panel">

							<!-- wp:woocommerce/product-filter-status -->
							<div class="wp-block-woocommerce-product-filter-status">

								<!-- wp:woocommerce/product-filter-checkbox-list -->
								<div class="wp-block-woocommerce-product-filter-checkbox-list wc-block-product-filter-checkbox-list"></div>
								<!-- /wp:woocommerce/product-filter-checkbox-list -->

							</div>
							<!-- /wp:woocommerce/product-filter-status -->

						</div>
						<!-- /wp:accordion-panel -->

					</div>
					<!-- /wp:accordion-item -->

				</div>
				<!-- /wp:accordion -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:woocommerce/product-filters -->

	<!-- wp:group {"className":"is-style-system-panel","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-system-panel">

		<!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"constrained"}} -->
		<div class="wp-block-group is-style-system-panel-header">

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e('Categories', 'systemstrap'); ?></h3>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:group -->

		<!-- wp:categories {"taxonomy":"product_cat","showPostCounts":true,"className":"is-style-system-list-flush"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-info-color has-text-color has-link-color">

		<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
		<h3 class="wp-block-heading has-contrast-color has-text-color has-link-color"><?php esc_html_e('Tags', 'systemstrap'); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:tag-cloud {"taxonomy":"product_tag","showTagCounts":true,"className":"is-style-system-tags"} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

</aside>
<!-- /wp:group -->