<?php

/**
 * Title: Header
 * Slug: systemstrap/header
 * Categories: header, systemstrap
 * Keywords: header, masthead, navigation, brand, utilities, systemstrap
 * Description: A responsive site header with branding, primary navigation, search, offcanvas utilities, and WooCommerce controls.
 * Block Types: core/template-part/header
 * Viewport Width: 1440
 */

?>

<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"border":{"top":{"width":"0"},"right":{"width":"0"},"bottom":{"color":"var:preset|color|border-color","style":"solid","width":"1px"},"left":{"width":"0"}},"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|20","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20"}},"background":{"gradient":"var:preset|gradient|absolute-03"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-top-width:0;border-right-width:0;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-style:solid;border-bottom-width:1px;border-left-width:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
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

        <!-- wp:group {"metadata":{"name":"Primary Navigation and Utilities"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
        <div class="wp-block-group">

            <!-- wp:navigation {"metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->

            <!-- wp:home-link {"label":"Home"} /-->

            <!-- wp:navigation-link {"label":"Patterns","url":"/patterns/","kind":"custom","isTopLevelLink":true} /-->

            <!-- wp:navigation-link {"label":"Components","url":"/components/","kind":"custom","isTopLevelLink":true} /-->

            <!-- wp:navigation-link {"label":"Sites","url":"/sites/","kind":"custom","isTopLevelLink":true} /-->

            <!-- wp:navigation-link {"label":"Docs","url":"/docs/","kind":"custom","isTopLevelLink":true} /-->

            <!-- /wp:navigation -->

            <!-- wp:group {"metadata":{"name":"Header Utilities"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"center"}} -->
            <div class="wp-block-group">

                <!-- wp:icon {"icon":"core/search","metadata":{"name":"Advanced Search"},"style":{"dimensions":{"width":"32px"}},"systemDialogAction":true,"systemDialogTemplatePart":"modal-search","systemDialogPosition":"center"} /-->

                <!-- wp:icon {"icon":"core/drawer-left","metadata":{"name":"Offcanvas Menu"},"style":{"dimensions":{"width":"32px"}},"systemDialogAction":true,"systemDialogTemplatePart":"offcanvas-part"} /-->

                <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","hasDropdownNavigation":true} /-->

                <!-- wp:woocommerce/mini-cart /-->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->