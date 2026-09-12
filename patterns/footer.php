<?php

/**
 * Title: Footer
 * Slug: systemstrap/footer
 * Categories: footer, systemstrap
 * Keywords: footer, colophon, navigation, social links, brand, systemstrap
 * Description: A responsive site footer with branding, navigation, social links, and a compact colophon.
 * Block Types: core/template-part/footer
 * Viewport Width: 1440
 */

?>

<!-- wp:group {"metadata":{"name":"Footer"},"align":"full","style":{"background":{"gradient":"var:preset|gradient|absolute-03"}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background">

    <!-- wp:group {"metadata":{"name":"Footer Primary"},"align":"full","style":{"border":{"top":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"right":{"width":"0"},"bottom":{"width":"0"},"left":{"width":"0"}},"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--border-color);border-top-style:solid;border-top-width:1px;border-right-width:0;border-bottom-width:0;border-left-width:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)">

        <!-- wp:group {"metadata":{"name":"Footer Primary Content"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
        <div class="wp-block-group alignwide">

            <!-- wp:group {"metadata":{"name":"Brand"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group">

                <!-- wp:image {"width":"42px","sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":"var:preset|duotone|duotone-11"}}} -->
                <figure class="wp-block-image size-full is-resized">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/media/SystemStrap-Logo.png'); ?>"
                            alt="<?php echo esc_attr(get_bloginfo('name')); ?>"
                            style="width:42px;height:auto" />
                    </a>
                </figure>
                <!-- /wp:image -->

                <!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textAlign":"left"}}} /-->

            </div>
            <!-- /wp:group -->

            <!-- wp:group {"metadata":{"name":"Footer Navigation and Social"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right","verticalAlignment":"center"}} -->
            <div class="wp-block-group">

                <!-- wp:navigation {"metadata":{"name":"Footer Navigation","ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->

                <!-- wp:home-link {"label":"Home"} /-->

                <!-- wp:navigation-link {"label":"Patterns","url":"/patterns/","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"Components","url":"/components/","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"Sites","url":"/sites/","kind":"custom","isTopLevelLink":true} /-->

                <!-- wp:navigation-link {"label":"Docs","url":"/docs/","kind":"custom","isTopLevelLink":true} /-->

                <!-- /wp:navigation -->

                <!-- wp:group {"metadata":{"name":"Social Links"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
                <div class="wp-block-group">

                    <!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <ul class="wp-block-social-links has-small-icon-size is-style-logos-only">

                        <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->

                        <!-- wp:social-link {"url":"#","service":"github"} /-->

                    </ul>
                    <!-- /wp:social-links -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Subfooter"},"align":"full","style":{"border":{"top":{"color":"var:preset|color|border-color","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|20","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20"}}},"backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-secondary-bg-background-color has-background" style="border-top-color:var(--wp--preset--color--border-color);border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)">

        <!-- wp:group {"metadata":{"name":"Colophon"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
        <div class="wp-block-group alignwide">

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size">Designed with <a href="https://wordpress.org/">WordPress</a></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size">Theme by SystemStrap</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size">Built for what’s next.</p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->