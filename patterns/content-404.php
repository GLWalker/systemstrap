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

<!-- wp:group {"metadata":{"name":"<?php esc_attr_e('Content 404', 'systemstrap'); ?>","patternName":"systemstrap/content-404"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

    <!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull">

        <!-- wp:group {"metadata":{"name":"404 Hero"},"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|border-color","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"},"background":{"gradient":"var:preset|gradient|pattern-42"}},"backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide has-tertiary-bg-background-color has-background" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">

            <!-- wp:group {"metadata":{"name":"404 Intro"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"clamp(5rem,12vw,10rem)","fontWeight":"900","lineHeight":"0.82","letterSpacing":"-0.05em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <p style="margin-top:0;margin-bottom:0;font-size:clamp(5rem,12vw,10rem);font-weight:900;letter-spacing:-0.05em;line-height:0.82">404</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.05"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                <h1 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-weight:800;line-height:1.05"><?php esc_html_e('You took a wrong turn.', 'systemstrap'); ?></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} -->
                <p class="has-large-font-size" style="margin-top:0;margin-bottom:0;line-height:1.5"><?php esc_html_e('That page isn’t here, but you still have options. Search the site or head back home.', 'systemstrap'); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"Recovery Actions"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group">

                <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":"640px"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">

                    <!-- wp:search {"label":"<?php esc_attr_e('Search', 'systemstrap'); ?>","showLabel":false,"placeholder":"<?php esc_attr_e('Search the site…', 'systemstrap'); ?>","width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e('Search', 'systemstrap'); ?>","buttonUseIcon":true} /-->

                </div>
                <!-- /wp:group -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">

                    <!-- wp:button -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Return Home', 'systemstrap'); ?></a>
                    </div>
                    <!-- /wp:button -->

                </div>
                <!-- /wp:buttons -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Archive Journey"},"align":"wide","style":{"border":{"radius":"var:preset|border-radius|lg"},"spacing":{"margin":{"top":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}},"css":"position:relative; overflow:hidden;","background":{"gradient":"var:preset|gradient|absolute-03"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide has-custom-css" style="border-radius:var(--wp--preset--border-radius--lg);margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:group {"metadata":{"name":"Archive Journey Content"},"style":{"css":"position:relative; z-index:10;","spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-custom-css">

                <!-- wp:group {"metadata":{"name":"Archive Introduction"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
                <div class="wp-block-group">

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
                    <div class="wp-block-group">

                        <!-- wp:icon {"icon":"core/map-marker","style":{"dimensions":{"width":"90px"}}} /-->

                        <!-- wp:group {"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">

                            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"800","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} -->
                            <p class="has-small-font-size" style="margin-top:0;margin-bottom:0;font-weight:800;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Another Route', 'systemstrap'); ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"800","lineHeight":"1.05"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                            <h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-weight:800;line-height:1.05"><?php esc_html_e('Explore the archive.', 'systemstrap'); ?></h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                            <p style="margin-top:0;margin-bottom:0"><?php esc_html_e('Browse by year and see where the site has been.', 'systemstrap'); ?></p>
                            <!-- /wp:paragraph -->

                        </div>
                        <!-- /wp:group -->

                    </div>
                    <!-- /wp:group -->

                    <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
                    <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                </div>
                <!-- /wp:group -->

                <!-- wp:group {"metadata":{"name":"Archive List"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"css":"width:88%; margin-left:auto; margin-right:auto;"},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-custom-css" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">

                    <!-- wp:archives {"showPostCounts":true,"type":"yearly","className":"is-style-system-list","backgroundColor":"tertiary-bg"} /-->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->