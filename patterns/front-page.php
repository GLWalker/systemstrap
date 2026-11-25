<?php

/**
 * Title: Front Page
 * Slug: systemstrap/front-page
 * Categories: systemstrap
 * Description: Canonical SystemStrap front page built from native WordPress blocks, SystemStrap composition contracts, portable gradients, plugin-ready previews, and reusable patterns.
 * Keywords: front page, home, systemstrap, tabs, panels, native blocks, patterns, commerce, community
 * Viewport Width: 1440
 * Inserter: yes
 */

?>

<!-- wp:group {"metadata":{"name":"Front Page","patternName":"systemstrap/front-page","description":"Canonical SystemStrap front page built from native WordPress blocks, SystemStrap composition contracts, portable gradients, plugin-ready previews, and reusable patterns.","categories":["systemstrap"]},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","className":"has-accent-20-gradient-background","style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0","left":"var:preset|spacing|0","right":"var:preset|spacing|0"},"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"blockGap":"var:preset|spacing|0"}},"gradient":"accent-20","layout":{"type":"constrained"},"anchor":"hero"} -->
    <div class="wp-block-group alignfull has-accent-20-gradient-background has-background" id="hero" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0);padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><!-- wp:group {"align":"full","className":"has-pattern-140-gradient-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","gradient":"pattern-140","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignfull has-pattern-140-gradient-background has-info-color has-text-color has-background has-link-color"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull has-dark-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:html -->
                <style data-wp-block-html="css">
                    @media (min-width: 782px) {
                        .systemstrap-front-hero-tabs {
                            align-items: stretch;
                        }

                        .systemstrap-front-hero-tabs>.wp-block-tab-list {
                            align-self: stretch;
                        }

                        .systemstrap-front-hero-tabs>.wp-block-tab-panels,
                        .systemstrap-front-hero-tabs>.wp-block-tab-panels>.wp-block-tab-panel {
                            box-sizing: border-box;
                            height: 21rem;
                            min-height: 21rem;
                            overflow: hidden;
                        }

                        .systemstrap-front-hero-pane {
                            box-sizing: border-box;
                            height: 100%;
                            min-height: 100%;
                        }

                        .systemstrap-front-hero-pane--image,
                        .systemstrap-front-hero-pane--image>.wp-block-image {
                            height: 100%;
                            margin-block: 0;
                        }

                        .systemstrap-front-hero-pane--image>.wp-block-image img {
                            display: block;
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }

                        section.systemstrap-front-hero-pane--feature>.wp-block-group {
                            display: flex;
                            flex-direction: column;
                            height: 100%;
                            min-height: 100%;
                        }

                        section.systemstrap-front-hero-pane--feature>.wp-block-group>.wp-block-columns {
                            flex: 1 1 auto;
                            align-items: stretch !important;
                        }

                        section.systemstrap-front-hero-pane--feature>.wp-block-group>.wp-block-columns>.wp-block-column {
                            display: flex;
                            align-self: stretch;
                        }

                        section.systemstrap-front-hero-pane--feature>.wp-block-group>.wp-block-columns>.wp-block-column>.wp-block-group {
                            width: 100%;
                            height: 100%;
                        }

                        .systemstrap-front-hero-pane--gallery {
                            height: 100%;
                        }

                        .systemstrap-front-hero-pane--gallery>.wp-block-gallery {
                            display: grid !important;
                            grid-template-columns: repeat(3, minmax(0, 1fr));
                            grid-template-rows: repeat(2, minmax(0, 1fr));
                            gap: var(--wp--preset--spacing--10);
                            height: 100%;
                            margin-block: 0;
                        }

                        .systemstrap-front-hero-pane--gallery>.wp-block-gallery>.wp-block-image {
                            width: 100% !important;
                            height: 100% !important;
                            margin: 0 !important;
                        }

                        .systemstrap-front-hero-pane--gallery>.wp-block-gallery>.wp-block-image img {
                            display: block;
                            width: 100% !important;
                            height: 100% !important;
                            aspect-ratio: 1 / 1;
                            object-fit: cover;
                        }

                        .systemstrap-front-hero-pane--content {
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                        }
                    }

                    @media (min-width: 782px) and (max-width: 1100px) {
                        .systemstrap-front-hero-layout {
                            flex-wrap: wrap !important;
                        }

                        .systemstrap-front-hero-layout>.wp-block-column {
                            flex-basis: 100% !important;
                            width: 100%;
                        }
                    }

                    @media (max-width: 781px) {

                        .systemstrap-front-hero-tabs>.wp-block-tab-panels,
                        .systemstrap-front-hero-tabs>.wp-block-tab-panels>.wp-block-tab-panel {
                            height: auto;
                            min-height: 0;
                            overflow: visible;
                        }

                        .systemstrap-front-hero-pane--image>.wp-block-image {
                            margin-block: 0;
                        }

                        .systemstrap-front-hero-pane--image>.wp-block-image img {
                            display: block;
                            width: 100%;
                            height: auto;
                        }

                        section.systemstrap-front-hero-pane--feature>.wp-block-group>.wp-block-columns {
                            align-items: stretch !important;
                        }

                        section.systemstrap-front-hero-pane--feature>.wp-block-group>.wp-block-columns>.wp-block-column {
                            display: flex;
                            align-self: stretch;
                        }

                        section.systemstrap-front-hero-pane--feature>.wp-block-group>.wp-block-columns>.wp-block-column>.wp-block-group {
                            width: 100%;
                            height: 100%;
                        }

                        .systemstrap-front-hero-pane--gallery>.wp-block-gallery {
                            display: grid !important;
                            grid-template-columns: repeat(2, minmax(0, 1fr));
                            gap: var(--wp--preset--spacing--10);
                            margin-block: 0;
                        }

                        .systemstrap-front-hero-pane--gallery>.wp-block-gallery>.wp-block-image {
                            width: 100% !important;
                            margin: 0 !important;
                        }

                        .systemstrap-front-hero-pane--gallery>.wp-block-gallery>.wp-block-image img {
                            display: block;
                            width: 100% !important;
                            height: auto;
                            aspect-ratio: 1 / 1;
                            object-fit: cover;
                        }
                    }
                </style>
                <!-- /wp:html -->

                <!-- wp:columns {"verticalAlignment":"center","className":"is-style-default systemstrap-front-hero-layout"} -->
                <div class="wp-block-columns are-vertically-aligned-center is-style-default systemstrap-front-hero-layout"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>SYSTEMSTRAP</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":1,"style":{"css":"text-shadow:\n\t0 1px 0 rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase-rgb), 0.32),\n\t0 3px 3px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-rgb), 0.20),\n\t0 7px 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-rgb), 0.24);"},"fontSize":"display-6"} -->
                        <h1 class="wp-block-heading has-custom-css has-display-6-font-size">Default Blocks.<br>Endless Possibilities.</h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"css":"text-shadow:\n\t0 1px 0 rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase-rgb), 0.32),\n\t0 3px 3px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-rgb), 0.20),\n\t0 7px 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-rgb), 0.24);"},"fontSize":"medium"} -->
                        <p class="has-custom-css has-medium-font-size">Build beautiful WordPress websites with coordinated layouts, typography, components, and reusable patterns that work together as one complete system.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"style":{"css":"text-shadow:\n\t0 1px 0 rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase-rgb), 0.32),\n\t0 3px 3px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-rgb), 0.20),\n\t0 7px 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast-rgb), 0.24);"},"layout":{"type":"flex","flexWrap":"wrap"}} -->
                        <div class="wp-block-group has-custom-css"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size">✓ Native blocks</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size">✓ Portable content</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size">✓ No proprietary builder</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button" href="#theme-styles">Explore Styles →</a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"secondary-bg","textColor":"secondary-color","className":"is-style-button-pill","style":{"border":{"width":"3px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-color"}}}},"fontSize":"small","borderColor":"secondary-color"} -->
                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-secondary-color-color has-secondary-bg-background-color has-text-color has-background has-link-color has-border-color has-secondary-color-border-color has-small-font-size has-custom-font-size wp-element-button" href="#wordpress-native" style="border-width:3px">Learn More</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:tabs {"className":"is-style-system-vertical systemstrap-front-hero-tabs","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"backgroundColor":"dark"} -->
                            <div class="wp-block-tabs is-style-system-vertical systemstrap-front-hero-tabs has-dark-background-color has-background"><!-- wp:tab-list {"className":"is-style-system-nav-button","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                                <div role="tablist" class="wp-block-tab-list is-style-system-nav-button"><button type="button" role="tab">▣ Hero</button><button type="button" role="tab">▦ Feature</button><button type="button" role="tab">▧ Gallery</button><button type="button" role="tab">▤ Content</button></div>
                                <!-- /wp:tab-list -->

                                <!-- wp:tab-panels {"className":"is-style-system-flat-panel"} -->
                                <div class="wp-block-tab-panels is-style-system-flat-panel"><!-- wp:tab-panel {"label":"▣ Hero","className":"systemstrap-front-hero-pane systemstrap-front-hero-pane\u002d\u002dimage"} -->
                                    <section role="tabpanel" tabindex="0" class="wp-block-tab-panel systemstrap-front-hero-pane systemstrap-front-hero-pane--image"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-dark"} -->
                                        <figure class="wp-block-image size-full is-dark"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/site-editorial-business.webp" alt="SystemStrap editorial business site preview" /></figure>
                                        <!-- /wp:image -->
                                    </section>
                                    <!-- /wp:tab-panel -->

                                    <!-- wp:tab-panel {"label":"▦ Feature","className":"systemstrap-front-hero-pane systemstrap-front-hero-pane\u002d\u002dfeature"} -->
                                    <section role="tabpanel" tabindex="0" class="wp-block-tab-panel systemstrap-front-hero-pane systemstrap-front-hero-pane--feature"><!-- wp:group {"className":"is-style-system-panel systemstrap-front-hero-pane\u002d\u002dfeature has-accent-10-gradient-background","gradient":"accent-10","layout":{"type":"default"}} -->
                                        <div class="wp-block-group is-style-system-panel systemstrap-front-hero-pane--feature has-accent-10-gradient-background has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"constrained"}} -->
                                            <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}}} -->
                                                <h4 class="wp-block-heading has-text-align-center">SYSTEMSTRAP LAUNCH CLOCK</h4>
                                                <!-- /wp:heading -->

                                                <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                                <p class="has-text-align-center has-small-font-size">NEXT SHOWCASE BUILD</p>
                                                <!-- /wp:paragraph -->
                                            </div>
                                            <!-- /wp:group -->

                                            <!-- wp:columns {"verticalAlignment":"stretch","isStackedOnMobile":false,"className":"is-style-equal-heights","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
                                            <div class="wp-block-columns are-vertically-aligned-stretch is-not-stacked-on-mobile is-style-equal-heights"><!-- wp:column {"width":"33%"} -->
                                                <div class="wp-block-column" style="flex-basis:33%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"light","layout":{"type":"default"}} -->
                                                    <div class="wp-block-group is-style-system-panel has-light-background-color has-background"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"backgroundColor":"danger","fontSize":"x-large"} -->
                                                        <p class="has-text-align-center has-danger-background-color has-background has-x-large-font-size" style="padding-top:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0)"><strong>06</strong></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"var:preset|spacing|0"}}},"fontSize":"small"} -->
                                                        <p class="has-text-align-center has-small-font-size" style="padding-top:var(--wp--preset--spacing--0)">Days</p>
                                                        <!-- /wp:paragraph -->
                                                    </div>
                                                    <!-- /wp:group -->
                                                </div>
                                                <!-- /wp:column -->

                                                <!-- wp:column {"width":"33%"} -->
                                                <div class="wp-block-column" style="flex-basis:33%"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"light","layout":{"type":"default"}} -->
                                                    <div class="wp-block-group is-style-system-flat-panel has-light-background-color has-background"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"backgroundColor":"danger","fontSize":"x-large"} -->
                                                        <p class="has-text-align-center has-danger-background-color has-background has-x-large-font-size" style="padding-top:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0)"><strong>14</strong></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"var:preset|spacing|0"}}},"fontSize":"small"} -->
                                                        <p class="has-text-align-center has-small-font-size" style="padding-top:var(--wp--preset--spacing--0)">Hours</p>
                                                        <!-- /wp:paragraph -->
                                                    </div>
                                                    <!-- /wp:group -->
                                                </div>
                                                <!-- /wp:column -->

                                                <!-- wp:column {"width":"33%"} -->
                                                <div class="wp-block-column" style="flex-basis:33%"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"light","layout":{"type":"default"}} -->
                                                    <div class="wp-block-group is-style-system-flat-panel has-light-background-color has-background"><!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"backgroundColor":"danger","fontSize":"x-large"} -->
                                                        <p class="has-text-align-center has-danger-background-color has-background has-x-large-font-size" style="padding-top:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0)"><strong>32</strong></p>
                                                        <!-- /wp:paragraph -->

                                                        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"spacing":{"padding":{"top":"var:preset|spacing|0"}}},"fontSize":"small"} -->
                                                        <p class="has-text-align-center has-small-font-size" style="padding-top:var(--wp--preset--spacing--0)">Minutes</p>
                                                        <!-- /wp:paragraph -->
                                                    </div>
                                                    <!-- /wp:group -->
                                                </div>
                                                <!-- /wp:column -->
                                            </div>
                                            <!-- /wp:columns -->

                                            <!-- wp:spacer {"height":"var:preset|spacing|50"} -->
                                            <div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
                                            <!-- /wp:spacer -->

                                            <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"constrained"}} -->
                                            <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph -->
                                                <p>When the clock hits zero, the next SystemStrap showcase build goes live.</p>
                                                <!-- /wp:paragraph -->
                                            </div>
                                            <!-- /wp:group -->
                                        </div>
                                        <!-- /wp:group -->
                                    </section>
                                    <!-- /wp:tab-panel -->

                                    <!-- wp:tab-panel {"label":"▧ Gallery","className":"systemstrap-front-hero-pane systemstrap-front-hero-pane\u002d\u002dgallery"} -->
                                    <section role="tabpanel" tabindex="0" class="wp-block-tab-panel systemstrap-front-hero-pane systemstrap-front-hero-pane--gallery"><!-- wp:gallery {"columns":3,"linkTo":"none"} -->
                                        <figure class="wp-block-gallery has-nested-images columns-3 is-cropped"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-mountain-lake.png" alt="Mountain lake landscape" /></figure>
                                            <!-- /wp:image -->

                                            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-coastal-bay.png" alt="Coastal bay landscape" /></figure>
                                            <!-- /wp:image -->

                                            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-shoreline.png" alt="Shoreline landscape" /></figure>
                                            <!-- /wp:image -->

                                            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-coastal-cliffs.png" alt="Coastal cliffs landscape" /></figure>
                                            <!-- /wp:image -->

                                            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-minimal-seascape.png" alt="Minimal blue seascape" /></figure>
                                            <!-- /wp:image -->

                                            <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                            <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-constrained-mountain.png" alt="Mountain landscape" /></figure>
                                            <!-- /wp:image -->
                                        </figure>
                                        <!-- /wp:gallery -->
                                    </section>
                                    <!-- /wp:tab-panel -->

                                    <!-- wp:tab-panel {"label":"▤ Content","className":"systemstrap-front-hero-pane systemstrap-front-hero-pane\u002d\u002dcontent"} -->
                                    <section role="tabpanel" tabindex="0" class="wp-block-tab-panel systemstrap-front-hero-pane systemstrap-front-hero-pane--content"><!-- wp:paragraph {"dropCap":true} -->
                                        <p class="has-drop-cap">Good typography does not announce every decision. It gives the reader a clear entrance, a steady path through the page, and enough variation to understand where one idea ends and the next begins.</p>
                                        <!-- /wp:paragraph -->

                                        <!-- wp:paragraph -->
                                        <p>This paragraph contains <strong>strong text</strong>, <em>emphasized text</em>, <s>deleted text</s>, <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-warning-color">highlighted text</mark>, <code>inline_code()</code>, and a <a href="#theme-styles">working anchor link</a>. These details should remain readable without disturbing the paragraph rhythm.</p>
                                        <!-- /wp:paragraph -->
                                    </section>
                                    <!-- /wp:tab-panel -->
                                </div>
                                <!-- /wp:tab-panels -->
                            </div>
                            <!-- /wp:tabs -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained"},"anchor":"wordpress-native"} -->
    <div class="wp-block-group alignfull has-base-background-color has-background" id="wordpress-native" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:html -->
        <style data-wp-block-html="css">
            @media (min-width: 782px) and (max-width: 1100px) {
                .systemstrap-native-layout {
                    display: flex !important;
                    flex-wrap: wrap !important;
                    align-items: flex-start;
                }

                .systemstrap-native-layout>.systemstrap-native-copy {
                    flex: 0 0 100% !important;
                    flex-basis: 100% !important;
                    width: 100% !important;
                    max-width: 100%;
                }

                .systemstrap-native-layout>.systemstrap-native-blocks {
                    flex: 1 1 calc(58% - (var(--wp--preset--spacing--40) / 2)) !important;
                    flex-basis: calc(58% - (var(--wp--preset--spacing--40) / 2)) !important;
                    width: calc(58% - (var(--wp--preset--spacing--40) / 2)) !important;
                    max-width: calc(58% - (var(--wp--preset--spacing--40) / 2));
                    min-width: 0;
                }

                .systemstrap-native-layout>.systemstrap-native-summary {
                    flex: 1 1 calc(42% - (var(--wp--preset--spacing--40) / 2)) !important;
                    flex-basis: calc(42% - (var(--wp--preset--spacing--40) / 2)) !important;
                    width: calc(42% - (var(--wp--preset--spacing--40) / 2)) !important;
                    max-width: calc(42% - (var(--wp--preset--spacing--40) / 2));
                    min-width: 0;
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"top","align":"wide","className":"is-style-default systemstrap-native-layout"} -->
            <div class="wp-block-columns alignwide are-vertically-aligned-top is-style-default systemstrap-native-layout"><!-- wp:column {"verticalAlignment":"top","width":"36%","className":"systemstrap-native-copy"} -->
                <div class="wp-block-column is-vertically-aligned-top systemstrap-native-copy" style="flex-basis:36%"><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size"><strong>WORDPRESS NATIVE</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"fontSize":"xxx-large"} -->
                    <h2 class="wp-block-heading has-xxx-large-font-size">Start with WordPress.</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size">SystemStrap doesn't replace the Block Editor. It unlocks it. Use the blocks you already know, with a complete design system of layouts, styles, and components that work together.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill","fontSize":"x-large"} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-x-large-font-size has-custom-font-size wp-element-button" href="#colors">See the System</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top","width":"38%","className":"systemstrap-native-blocks","layout":{"type":"default"}} -->
                <div class="wp-block-column is-vertically-aligned-top systemstrap-native-blocks" style="flex-basis:38%"><!-- wp:columns {"verticalAlignment":"stretch","isStackedOnMobile":false,"className":"is-style-equal-heights","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-stretch is-not-stacked-on-mobile is-style-equal-heights"><!-- wp:column {"width":"33.33%"} -->
                        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:icon {"icon":"core/group","align":"center"} /-->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Group</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"33.33%"} -->
                        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:icon {"icon":"core/drawer-right","align":"center"} /-->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Columns</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"33.33%"} -->
                        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:icon {"icon":"core/cover","align":"center"} /-->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Cover</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:columns {"verticalAlignment":"stretch","isStackedOnMobile":false,"className":"is-style-equal-heights","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-stretch is-not-stacked-on-mobile is-style-equal-heights"><!-- wp:column {"width":"33.33%"} -->
                        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:icon {"icon":"core/heading","align":"center"} /-->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Heading</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"33.33%"} -->
                        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:icon {"icon":"core/paragraph","align":"center"} /-->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Paragraph</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"33.33%"} -->
                        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:icon {"icon":"core/block-default","align":"center"} /-->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Buttons</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"30%","className":"systemstrap-native-summary"} -->
                <div class="wp-block-column systemstrap-native-summary" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel has-secondary-bg-background-color has-background"><!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|10"}}},"fontSize":"small"} -->
                        <p class="has-small-font-size" style="padding-bottom:var(--wp--preset--spacing--10)"><strong>CORE BLOCKS + SYSTEMSTRAP</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:list {"className":"is-style-system-list-flush","style":{"spacing":{"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"fontSize":"small"} -->
                        <ul style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0)" class="wp-block-list is-style-system-list-flush has-small-font-size"><!-- wp:list-item {"style":{"border":{"width":"0px","style":"none"}}} -->
                            <li style="border-style:none;border-width:0px">☑ Coordinated layouts</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item {"style":{"border":{"width":"0px","style":"none"}}} -->
                            <li style="border-style:none;border-width:0px">☑ Consistent typography</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item {"style":{"border":{"width":"0px","style":"none"}}} -->
                            <li style="border-style:none;border-width:0px">☑ Semantic color system</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item {"style":{"border":{"width":"0px","style":"none"}}} -->
                            <li style="border-style:none;border-width:0px">☑ Enhanced components</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item {"style":{"border":{"width":"0px","style":"none"}}} -->
                            <li style="border-style:none;border-width:0px">☑ Reusable patterns</li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0","left":"var:preset|spacing|0","right":"var:preset|spacing|0"},"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"blockGap":"var:preset|spacing|0"}},"backgroundColor":"secondary-bg","layout":{"type":"constrained"},"anchor":"colors"} -->
    <div class="wp-block-group alignfull has-secondary-bg-background-color has-background" id="colors" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0);padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><!-- wp:html -->
        <style data-wp-block-html="css">
            .systemstrap-colors-art>.wp-block-image {
                margin-block: 0;
            }

            .systemstrap-colors-art>.wp-block-image img {
                display: block;
                width: 100%;
                object-fit: cover;
            }

            .systemstrap-color-swatches {
                display: grid !important;
                gap: var(--wp--preset--spacing--20) var(--wp--preset--spacing--10);
            }

            .systemstrap-color-swatch {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: var(--wp--preset--spacing--10);
                min-width: 0;
            }

            .systemstrap-color-chip {
                width: 4rem;
                height: 4rem;
                min-width: 4rem;
                min-height: 4rem;
                padding: 0 !important;
                border: 1px solid currentColor;
                border-radius: 999px;
            }

            @media (min-width: 1101px) {
                .systemstrap-colors-layout {
                    align-items: center !important;
                }

                .systemstrap-colors-art>.wp-block-image img {
                    height: 28rem;
                }

                .systemstrap-color-swatches {
                    grid-template-columns: repeat(4, minmax(0, 1fr));
                }
            }

            @media (min-width: 782px) and (max-width: 1100px) {
                .systemstrap-colors-layout {
                    align-items: center !important;
                }

                .systemstrap-colors-art>.wp-block-image img {
                    height: 24rem;
                }

                .systemstrap-color-swatches {
                    grid-template-columns: repeat(4, minmax(0, 1fr));
                }

                .systemstrap-color-chip {
                    width: 3.5rem;
                    height: 3.5rem;
                    min-width: 3.5rem;
                    min-height: 3.5rem;
                }
            }

            @media (max-width: 781px) {
                .systemstrap-colors-art>.wp-block-image img {
                    height: auto;
                    aspect-ratio: 4 / 3;
                }

                .systemstrap-color-swatches {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    gap: var(--wp--preset--spacing--20);
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:group {"align":"full","className":"has-pattern-10-gradient-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","gradient":"pattern-10","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignfull has-pattern-10-gradient-background has-contrast-color has-text-color has-background has-link-color"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-color"}}}},"textColor":"secondary-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull has-secondary-color-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","className":"systemstrap-colors-layout is-style-default"} -->
                <div class="wp-block-columns are-vertically-aligned-center systemstrap-colors-layout is-style-default"><!-- wp:column {"verticalAlignment":"center","width":"46%","className":"systemstrap-colors-art-column"} -->
                    <div class="wp-block-column is-vertically-aligned-center systemstrap-colors-art-column" style="flex-basis:46%"><!-- wp:group {"className":"systemstrap-colors-art","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-colors-art"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                            <figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/front-page-color-system-art.webp" alt="SystemStrap color system gradient artwork" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"54%","className":"systemstrap-colors-copy"} -->
                    <div class="wp-block-column is-vertically-aligned-center systemstrap-colors-copy" style="flex-basis:54%"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>COLORS</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"fontSize":"xxx-large"} -->
                        <h2 class="wp-block-heading has-xxx-large-font-size">Color is a system.<br>Gradients are geometry.</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size">A semantic color system with coordinated surfaces, readable foregrounds, and powerful gradients built for real design.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:group {"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-color-swatches","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group systemstrap-color-swatches"><!-- wp:group {"className":"systemstrap-color-swatch","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-color-swatch"><!-- wp:group {"className":"systemstrap-color-chip","backgroundColor":"base","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-color-chip has-base-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Base</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-color-swatch","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-color-swatch"><!-- wp:group {"className":"systemstrap-color-chip","backgroundColor":"contrast","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-color-chip has-contrast-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Contrast</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-color-swatch","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-color-swatch"><!-- wp:group {"className":"systemstrap-color-chip","backgroundColor":"primary","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-color-chip has-primary-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Primary</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-color-swatch","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-color-swatch"><!-- wp:group {"className":"systemstrap-color-chip","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-color-chip has-secondary-bg-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Secondary</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-color-swatch","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-color-swatch"><!-- wp:group {"className":"systemstrap-color-chip","backgroundColor":"success","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-color-chip has-success-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Success</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-color-swatch","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-color-swatch"><!-- wp:group {"className":"systemstrap-color-chip","backgroundColor":"info","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-color-chip has-info-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Info</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-color-swatch","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-color-swatch"><!-- wp:group {"className":"systemstrap-color-chip","backgroundColor":"warning","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-color-chip has-warning-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Warning</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-color-swatch","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-color-swatch"><!-- wp:group {"className":"systemstrap-color-chip","backgroundColor":"danger","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-color-chip has-danger-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>Danger</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:spacer {"height":"var:preset|spacing|20"} -->
                        <div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"textColor":"contrast","className":"is-style-button-pill-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"systemDialogAction":true,"systemDialogTemplatePart":"modal-colors","systemDialogPosition":"center"} -->
                            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-contrast-color has-text-color has-link-color wp-element-button">Explore Colors</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained"},"anchor":"theme-styles"} -->
    <div class="wp-block-group alignfull has-base-background-color has-background" id="theme-styles" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:html -->
        <style data-wp-block-html="css">
            .systemstrap-theme-style-grid {
                display: grid !important;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: var(--wp--preset--spacing--30);
                align-items: stretch;
            }

            .systemstrap-theme-style-grid>.wp-block-column {
                min-width: 0;
                width: auto !important;
                flex-basis: auto !important;
            }

            .systemstrap-theme-style-grid>.wp-block-column .is-style-system-flat-panel {
                display: grid;
                grid-template-rows: minmax(0, 1fr) auto;
                row-gap: var(--wp--preset--spacing--30);
            }

            .systemstrap-theme-style-grid>.wp-block-column .is-style-system-flat-panel>*+* {
                margin-block-start: 0;
            }

            .systemstrap-theme-style-aa {
                margin: 0;
                font-size: clamp(4rem, 6vw, 5.5rem);
                font-weight: 500;
                line-height: .9;
                letter-spacing: -.055em;
            }

            .systemstrap-theme-style-dot {
                width: 2.5rem;
                height: 2.5rem;
                min-width: 2.5rem;
                min-height: 2.5rem;
                padding: 0 !important;
                border-radius: 999px;
            }

            @media (min-width: 782px) and (max-width: 1100px) {
                .systemstrap-theme-style-grid {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
            }

            @media (max-width: 781px) {
                .systemstrap-theme-style-grid {
                    grid-template-columns: 1fr;
                }

                .systemstrap-theme-style-aa {
                    font-size: 4.5rem;
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong>THEME STYLES</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"fontSize":"xxx-large"} -->
            <h2 class="wp-block-heading has-xxx-large-font-size">Same blocks. Different character.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size">Color variations can reshape an entire design without changing the structure underneath. Each specimen uses the same blocks, the same semantic presets, and a different local color and typography system.</p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"className":"systemstrap-theme-style-grid is-style-equal-heights"} -->
            <div class="wp-block-columns systemstrap-theme-style-grid is-style-equal-heights"><!-- wp:column {"className":"is-style-color-wordsmithdark"} -->
                <div class="wp-block-column is-style-color-wordsmithdark"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                            <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"secondary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-secondary-background-color has-background"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">WordSmith Dark</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"is-style-color-cobalt"} -->
                <div class="wp-block-column is-style-color-cobalt"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                            <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"secondary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-secondary-background-color has-background"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Cobalt</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"is-style-color-neonpopdark"} -->
                <div class="wp-block-column is-style-color-neonpopdark"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                            <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"secondary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-secondary-background-color has-background"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Neon Pop Dark</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"is-style-color-rosewood"} -->
                <div class="wp-block-column is-style-color-rosewood"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                            <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"secondary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-secondary-background-color has-background"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Rosewood</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"is-style-color-forestdark"} -->
                <div class="wp-block-column is-style-color-forestdark"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                            <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"secondary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-secondary-background-color has-background"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Forest Dark</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"is-style-color-aurora"} -->
                <div class="wp-block-column is-style-color-aurora"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                            <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"secondary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-secondary-background-color has-background"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Aurora</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"is-style-color-radioactivecactusdark"} -->
                <div class="wp-block-column is-style-color-radioactivecactusdark"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                            <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"secondary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-secondary-background-color has-background"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Radioactive Cactus Dark</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"is-style-color-wylde"} -->
                <div class="wp-block-column is-style-color-wylde"><!-- wp:group {"className":"is-panel-wrapper","style":{"background":{"gradient":"var:preset|gradient|absolute-03"}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group is-panel-wrapper"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"background":{"gradient":"var:preset|gradient|pattern-40"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                            <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                                <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:group {"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"info","layout":{"type":"default"}} -->
                                    <div class="wp-block-group systemstrap-theme-style-dot has-info-background-color has-background"></div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"level":3,"fontSize":"large"} -->
                            <h3 class="wp-block-heading has-large-font-size">Wylde</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"is-style-color-coffeedark"} -->
                <div class="wp-block-column is-style-color-coffeedark"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"className":"systemstrap-theme-style-aa","fontFamily":"display"} -->
                            <p class="systemstrap-theme-style-aa has-display-font-family">Aa</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"primary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-primary-background-color has-background"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"systemstrap-theme-style-dot","backgroundColor":"secondary","layout":{"type":"default"}} -->
                                <div class="wp-block-group systemstrap-theme-style-dot has-secondary-background-color has-background"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3,"fontSize":"large"} -->
                        <h3 class="wp-block-heading has-large-font-size">Coffee Dark</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"secondary-bg","layout":{"type":"constrained"},"anchor":"layouts"} -->
    <div class="wp-block-group alignfull has-secondary-bg-background-color has-background" id="layouts" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:html -->
        <style data-wp-block-html="css">
            @media (min-width: 1101px) {
                .systemstrap-layouts-shell {
                    align-items: flex-start !important;
                }

                .systemstrap-layouts-showcase {
                    display: grid !important;
                    grid-template-columns: repeat(3, minmax(0, 1fr));
                    gap: var(--wp--preset--spacing--20);
                    align-items: stretch;
                }

                .systemstrap-layouts-showcase>.systemstrap-layout-card {
                    min-width: 0;
                }

                .systemstrap-layouts-showcase>.systemstrap-layout-card img {
                    display: block;
                    width: 100%;
                    height: 10rem;
                    object-fit: cover;
                }

                .systemstrap-layout-wide {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 10rem;
                }

                .systemstrap-layout-grid {
                    display: grid !important;
                    grid-template-columns: repeat(3, minmax(0, 1fr));
                    grid-template-rows: repeat(2, minmax(0, 1fr));
                    gap: var(--wp--preset--spacing--10);
                    height: 10rem;
                }

                .systemstrap-layout-grid>.wp-block-image {
                    width: 100% !important;
                    height: 100%;
                    margin: 0 !important;
                }

                .systemstrap-layout-grid>.wp-block-image img {
                    display: block;
                    width: 100% !important;
                    height: 100% !important;
                    object-fit: cover;
                }

                .systemstrap-layout-full img {
                    display: block;
                    width: 100%;
                    height: 8rem;
                    object-fit: cover;
                }
            }

            @media (min-width: 782px) and (max-width: 1100px) {
                .systemstrap-layouts-shell {
                    flex-wrap: wrap !important;
                }

                .systemstrap-layouts-shell>.systemstrap-layouts-copy,
                .systemstrap-layouts-shell>.systemstrap-layouts-media {
                    flex: 0 0 100% !important;
                    flex-basis: 100% !important;
                    width: 100% !important;
                    max-width: 100%;
                }

                .systemstrap-layouts-showcase {
                    display: grid !important;
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    gap: var(--wp--preset--spacing--20);
                }

                .systemstrap-layout-grid-card {
                    grid-column: 1 / -1;
                }

                .systemstrap-layouts-showcase>.systemstrap-layout-card img {
                    display: block;
                    width: 100%;
                    height: 12rem;
                    object-fit: cover;
                }

                .systemstrap-layout-wide {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 12rem;
                }

                .systemstrap-layout-grid {
                    display: grid !important;
                    grid-template-columns: repeat(3, minmax(0, 1fr));
                    grid-template-rows: repeat(2, minmax(0, 1fr));
                    gap: var(--wp--preset--spacing--10);
                    height: 14rem;
                }

                .systemstrap-layout-grid>.wp-block-image {
                    width: 100% !important;
                    height: 100%;
                    margin: 0 !important;
                }

                .systemstrap-layout-grid>.wp-block-image img {
                    display: block;
                    width: 100% !important;
                    height: 100% !important;
                    object-fit: cover;
                }

                .systemstrap-layout-full img {
                    display: block;
                    width: 100%;
                    height: 10rem;
                    object-fit: cover;
                }
            }

            @media (max-width: 781px) {
                .systemstrap-layouts-showcase {
                    display: grid !important;
                    grid-template-columns: 1fr;
                    gap: var(--wp--preset--spacing--20);
                }

                .systemstrap-layouts-showcase>.systemstrap-layout-card img {
                    display: block;
                    width: 100%;
                    height: auto;
                    aspect-ratio: 3 / 1;
                    object-fit: cover;
                }

                .systemstrap-layout-wide {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 10rem;
                }

                .systemstrap-layout-grid {
                    display: grid !important;
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    gap: var(--wp--preset--spacing--10);
                }

                .systemstrap-layout-grid>.wp-block-image {
                    width: 100% !important;
                    margin: 0 !important;
                }

                .systemstrap-layout-grid>.wp-block-image img {
                    display: block;
                    width: 100% !important;
                    height: auto;
                    aspect-ratio: 4 / 3;
                    object-fit: cover;
                }

                .systemstrap-layout-full img {
                    display: block;
                    width: 100%;
                    height: auto;
                    aspect-ratio: 3 / 1;
                    object-fit: cover;
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"top","className":"systemstrap-layouts-shell is-style-default"} -->
            <div class="wp-block-columns are-vertically-aligned-top systemstrap-layouts-shell is-style-default"><!-- wp:column {"verticalAlignment":"top","width":"32%","className":"systemstrap-layouts-copy"} -->
                <div class="wp-block-column is-vertically-aligned-top systemstrap-layouts-copy" style="flex-basis:32%"><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size"><strong>LAYOUTS</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"fontSize":"xxx-large"} -->
                    <h2 class="wp-block-heading has-xxx-large-font-size">Structure without surrendering control.</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"medium"} -->
                    <p class="has-medium-font-size">Flexible layouts for any idea. Use constrained, wide, full, grid and more — all built with native blocks.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill","fontSize":"small"} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="#typography">Font Structure →</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top","width":"68%","className":"systemstrap-layouts-media"} -->
                <div class="wp-block-column is-vertically-aligned-top systemstrap-layouts-media" style="flex-basis:68%"><!-- wp:group {"className":"systemstrap-layouts-showcase is-style-equal-heights","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group systemstrap-layouts-showcase is-style-equal-heights"><!-- wp:group {"className":"systemstrap-layout-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-layout-card"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>CONSTRAINED</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"className":"is-style-system-flat-panel","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-flat-panel"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                <figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-constrained-mountain.png" alt="Constrained mountain layout example" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-layout-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-layout-card"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>WIDE</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"className":"systemstrap-layout-wide is-style-system-flat-panel","backgroundColor":"secondary-color","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group systemstrap-layout-wide is-style-system-flat-panel has-secondary-color-background-color has-background"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}}} -->
                                <h3 class="wp-block-heading has-text-align-center">Build without limits.</h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-layout-card systemstrap-layout-grid-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-layout-card systemstrap-layout-grid-card"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>GRID</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"className":"systemstrap-layout-grid is-style-system-flat-panel","layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-layout-grid is-style-system-flat-panel"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-coastal-bay.png" alt="Coastal bay grid example" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-mountain-lake.png" alt="Mountain lake grid example" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-minimal-seascape.png" alt="Minimal seascape grid example" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-coastal-cliffs.png" alt="Coastal cliffs grid example" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-shoreline.png" alt="Shoreline grid example" /></figure>
                                <!-- /wp:image -->

                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-grid-coastal-bay.png" alt="Coastal grid example" /></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"systemstrap-layout-full","layout":{"type":"default"}} -->
                    <div class="wp-block-group systemstrap-layout-full"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>FULL</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
                        <figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/layouts-full-coast-panorama.png" alt="Full width coastal panorama layout example" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained"},"anchor":"typography"} -->
    <div class="wp-block-group alignfull has-base-background-color has-background" id="typography" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:html -->
        <style data-wp-block-html="css">
            .systemstrap-type-scale {
                display: flex;
                flex-direction: column;
                gap: 0;
                min-width: 0;
            }

            .systemstrap-type-row {
                display: grid !important;
                grid-template-columns: minmax(8rem, 0.8fr) minmax(0, 1.2fr);
                gap: var(--wp--preset--spacing--20);
                align-items: center;
                padding-block: var(--wp--preset--spacing--10);
                border-bottom: 1px solid currentColor;
            }

            .systemstrap-type-row:last-child {
                border-bottom: 0;
            }

            .systemstrap-type-row>* {
                margin-block: 0;
                min-width: 0;
            }

            .systemstrap-type-content>*:first-child {
                margin-block-start: 0;
            }

            .systemstrap-type-quote {
                margin-top: var(--wp--preset--spacing--40);
            }

            .systemstrap-type-reference-row {
                align-items: stretch;
            }

            .systemstrap-type-reference-row>.systemstrap-type-scale {
                flex: 1 1 0;
            }

            .systemstrap-type-reference-row>.systemstrap-type-specimen {
                flex: 0 0 min(15rem, 38%);
                min-width: 0;
                margin-top: 0;
                height: auto;
            }

            @media (min-width: 782px) and (max-width: 1100px) {
                .systemstrap-typography-layout {
                    display: flex !important;
                    flex-wrap: wrap !important;
                    align-items: flex-start !important;
                }

                .systemstrap-typography-layout>.systemstrap-type-content,
                .systemstrap-typography-layout>.systemstrap-type-reference {
                    flex: 0 0 100% !important;
                    flex-basis: 100% !important;
                    width: 100% !important;
                    max-width: 100%;
                    min-width: 0;
                }

                .systemstrap-type-reference-row {
                    display: flex !important;
                    flex-wrap: nowrap !important;
                    align-items: stretch;
                    gap: var(--wp--preset--spacing--40);
                }

                .systemstrap-type-reference-row>.systemstrap-type-scale {
                    flex: 1 1 calc(62% - (var(--wp--preset--spacing--40) / 2));
                    min-width: 0;
                }

                .systemstrap-type-reference-row>.systemstrap-type-specimen {
                    flex: 1 1 calc(38% - (var(--wp--preset--spacing--40) / 2));
                    min-width: 0;
                    max-width: none;
                    margin-top: 0;
                }

                .systemstrap-type-row {
                    grid-template-columns: minmax(8rem, 0.85fr) minmax(0, 1.15fr);
                }
            }

            @media (max-width: 781px) {
                .systemstrap-type-reference-row {
                    display: flex !important;
                    flex-wrap: wrap !important;
                }

                .systemstrap-type-reference-row>.systemstrap-type-scale,
                .systemstrap-type-reference-row>.systemstrap-type-specimen {
                    flex: 0 0 100% !important;
                    width: 100%;
                    max-width: 100%;
                }

                .systemstrap-type-row {
                    grid-template-columns: minmax(6.5rem, 0.9fr) minmax(0, 1.1fr);
                }

                .systemstrap-type-reference-row>.systemstrap-type-specimen {
                    margin-top: var(--wp--preset--spacing--20);
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong>TYPOGRAPHY</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"fontSize":"xxx-large"} -->
            <h2 class="wp-block-heading has-xxx-large-font-size">Type is structure.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size">A coordinated type system gives content hierarchy, clarity, rhythm, and character without getting in the way of the story.</p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"verticalAlignment":"top","className":"systemstrap-typography-layout is-style-default"} -->
            <div class="wp-block-columns are-vertically-aligned-top systemstrap-typography-layout is-style-default"><!-- wp:column {"verticalAlignment":"top","width":"50%","className":"systemstrap-type-content"} -->
                <div class="wp-block-column is-vertically-aligned-top systemstrap-type-content" style="flex-basis:50%"><!-- wp:paragraph {"dropCap":true} -->
                    <p class="has-drop-cap">Good typography does not announce every decision. It gives the reader a clear entrance, a steady path through the page, and enough variation to understand where one idea ends and the next begins.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p>This paragraph contains <strong>strong text</strong>, <em>emphasized text</em>, <s>deleted text</s>, <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-warning-color">highlighted text</mark>, <code>inline_code()</code>, and a <a href="#theme-styles">working anchor link</a>. These details should remain readable without disturbing the paragraph rhythm.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:quote {"className":"systemstrap-type-quote is-style-plain","style":{"spacing":{"margin":{"right":"var:preset|spacing|0","left":"var:preset|spacing|0"}}}} -->
                    <blockquote class="wp-block-quote systemstrap-type-quote is-style-plain" style="margin-right:var(--wp--preset--spacing--0);margin-left:var(--wp--preset--spacing--0)"><!-- wp:paragraph -->
                        <p>A theme should support the story without standing in front of it.</p>
                        <!-- /wp:paragraph --><cite>SystemStrap design principle</cite>
                    </blockquote>
                    <!-- /wp:quote -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"top","width":"","className":"systemstrap-type-reference"} -->
                <div class="wp-block-column is-vertically-aligned-top systemstrap-type-reference"><!-- wp:group {"className":"systemstrap-type-reference-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group systemstrap-type-reference-row"><!-- wp:group {"className":"systemstrap-type-scale","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-type-scale"><!-- wp:group {"className":"systemstrap-type-row","layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-type-row"><!-- wp:heading {"level":3,"fontSize":"xxx-large"} -->
                                <h3 class="wp-block-heading has-xxx-large-font-size">Display</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">For big ideas.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"systemstrap-type-row","layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-type-row"><!-- wp:heading {"level":4,"fontSize":"x-large"} -->
                                <h4 class="wp-block-heading has-x-large-font-size">Heading</h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">For clear structure.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"systemstrap-type-row","layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-type-row"><!-- wp:heading {"level":5,"fontSize":"large"} -->
                                <h5 class="wp-block-heading has-large-font-size">Subheading</h5>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">For supporting details.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"systemstrap-type-row","layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-type-row"><!-- wp:paragraph {"fontSize":"medium"} -->
                                <p class="has-medium-font-size"><strong>Body</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">For the story.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"systemstrap-type-row","layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-type-row"><!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Caption</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">For the metadata.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"systemstrap-type-row","layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-type-row"><!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>MONO</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>For the technical stuff.</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-panel systemstrap-type-specimen","backgroundColor":"base","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-system-panel systemstrap-type-specimen has-base-background-color has-background"><!-- wp:heading {"level":3,"fontSize":"display-3"} -->
                            <h3 class="wp-block-heading has-display-3-font-size">Aa</h3>
                            <!-- /wp:heading -->

                            <!-- wp:heading {"level":4,"fontSize":"x-large"} -->
                            <h4 class="wp-block-heading has-x-large-font-size">System Typeface</h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size">The quick brown fox jumps over the lazy dog.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size">0123456789<br>!@#$%^&amp;*()</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel-footer"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
                                <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"300"}},"fontSize":"small"} -->
                                    <p class="has-small-font-size" style="font-weight:300">Light</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size">·</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"style":{"typography":{"fontWeight":"400"}},"fontSize":"small"} -->
                                    <p class="has-small-font-size" style="font-weight:400">Regular</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size">·</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"fontSize":"small"} -->
                                    <p class="has-small-font-size" style="font-weight:500">Medium</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size">·</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
                                    <p class="has-small-font-size" style="font-weight:600">Semibold</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size">·</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"small"} -->
                                    <p class="has-small-font-size" style="font-weight:700">Bold</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"secondary-bg","layout":{"type":"constrained"},"anchor":"publishing"} -->
    <div class="wp-block-group alignfull has-secondary-bg-background-color has-background" id="publishing" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:html -->
        <style data-wp-block-html="css">
            @media (min-width: 782px) and (max-width: 1100px) {
                #publishing .systemstrap-publishing-layout {
                    flex-wrap: wrap !important;
                }

                #publishing .systemstrap-publishing-layout>.systemstrap-publishing-post,
                #publishing .systemstrap-publishing-layout>.systemstrap-publishing-sidebar {
                    flex: 0 0 100% !important;
                    flex-basis: 100% !important;
                    width: 100% !important;
                    max-width: 100%;
                    min-width: 0;
                }

                #publishing .systemstrap-publishing-sidebar {
                    display: grid;
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    gap: var(--wp--preset--spacing--30);
                    align-items: start;
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong>PUBLISHING</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"fontSize":"xxx-large"} -->
            <h2 class="wp-block-heading has-xxx-large-font-size">Content should feel organized.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>SystemStrap gives native WordPress content a clear, consistent structure — from posts and archives to calendars, comments, metadata, and navigation.</p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"verticalAlignment":"top","className":"systemstrap-publishing-layout is-style-default"} -->
            <div class="wp-block-columns are-vertically-aligned-top systemstrap-publishing-layout is-style-default"><!-- wp:column {"verticalAlignment":"top","width":"66%","className":"systemstrap-publishing-post"} -->
                <div class="wp-block-column is-vertically-aligned-top systemstrap-publishing-post" style="flex-basis:66%"><!-- wp:group {"tagName":"section","metadata":{"patternName":"systemstrap/query-latest-posts-list","categories":["posts"],"name":"Latest Posts List"},"className":"query-latest-posts is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <section class="wp-block-group query-latest-posts is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"tertiary-bg","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-panel-header has-tertiary-bg-background-color has-background"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                            <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group"><!-- wp:icon {"icon":"core/heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color"} /-->

                                    <!-- wp:heading {"level":3} -->
                                    <h3 class="wp-block-heading">Latest Post</h3>
                                    <!-- /wp:heading -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                                <p class="is-style-system-badge"><mark style="background-color:#0085BA" class="has-inline-color has-light-color">This Week</mark></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:query {"queryId":104,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null},"enhancedPagination":true,"className":"query-latest-posts__query is-style-system-ui-query","layout":{"type":"constrained"}} -->
                        <div class="wp-block-query query-latest-posts__query is-style-system-ui-query"><!-- wp:post-template {"className":"query-latest-posts__items","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info"} -->
                            <!-- wp:group {"className":"query-latest-posts__row is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color","layout":{"type":"default"}} -->
                            <div class="wp-block-group query-latest-posts__row is-style-default has-tertiary-color-color has-text-color has-link-color"><!-- wp:group {"className":"query-latest-posts__date is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|sm","elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"backgroundColor":"light","textColor":"dark","layout":{"type":"default"}} -->
                                <div class="wp-block-group query-latest-posts__date is-style-system-flat-panel has-dark-color has-light-background-color has-text-color has-background has-link-color" style="box-shadow:var(--wp--preset--shadow--sm)"><!-- wp:post-date {"format":"M","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-month","backgroundColor":"danger"} /-->

                                    <!-- wp:post-date {"format":"j","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-day"} /-->

                                    <!-- wp:post-date {"format":"Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"query-latest-posts__date-year"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"left","className":"query-latest-posts__image","style":{"shadow":"var:preset|shadow|sm"}} /-->

                                <!-- wp:group {"className":"query-latest-posts__content","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group query-latest-posts__content"><!-- wp:post-title {"level":3,"isLink":true,"className":"query-latest-posts__title","fontSize":"large"} /-->

                                    <!-- wp:post-terms {"term":"category","separator":" ","className":"query-latest-posts__category is-style-system-badge","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info"} /-->

                                    <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":13,"className":"query-latest-posts__excerpt","fontSize":"small"} /-->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"query-latest-posts__tags","layout":{"type":"default"}} -->
                                <div class="wp-block-group query-latest-posts__tags"><!-- wp:post-terms {"term":"post_tag","separator":" ","className":"query-latest-posts__tags-list is-style-system-badge","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info"} /--></div>
                                <!-- /wp:group -->

                                <!-- wp:icon {"icon":"core/chevron-right","className":"query-latest-posts__arrow"} /-->
                            </div>
                            <!-- /wp:group -->
                            <!-- /wp:post-template -->

                            <!-- wp:query-no-results -->
                            <!-- wp:paragraph {"className":"query-latest-posts__empty","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
                            <p class="query-latest-posts__empty" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">No posts were found.</p>
                            <!-- /wp:paragraph -->
                            <!-- /wp:query-no-results -->

                            <!-- wp:group {"className":"query-latest-posts__footer is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                            <div class="wp-block-group query-latest-posts__footer is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:query-total {"displayType":"range-display","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->

                                <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"className":"query-latest-posts__pagination is-style-system-ui-pagination-pill-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","layout":{"type":"flex","justifyContent":"right","flexWrap":"nowrap"}} -->
                                <!-- wp:query-pagination-previous /-->

                                <!-- wp:query-pagination-numbers /-->

                                <!-- wp:query-pagination-next /-->
                                <!-- /wp:query-pagination -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:query -->
                    </section>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"","className":"systemstrap-publishing-sidebar"} -->
                <div class="wp-block-column systemstrap-publishing-sidebar"><!-- wp:calendar {"className":"is-style-system-flat-panel","backgroundColor":"base"} /-->

                    <!-- wp:latest-comments {"commentsToShow":1,"className":"is-style-system-flat-list","backgroundColor":"base"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"primary","layout":{"type":"constrained"},"anchor":"market"} -->
    <div class="wp-block-group alignfull has-primary-background-color has-background" id="market" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:html -->
        <style data-wp-block-html="css">
            .systemstrap-market-popular-badge {
                display: flex;
                justify-content: center;
                width: 100%;
            }

            .systemstrap-market-popular-badge mark {
                margin-inline: auto;
            }

            @media (min-width: 782px) and (max-width: 1100px) {

                .systemstrap-market-pricing {
                    display: grid !important;
                    grid-template-columns: minmax(0, 1fr) minmax(0, 1.12fr) minmax(0, 1fr);
                    gap: var(--wp--preset--spacing--20);
                    align-items: center !important;
                }

                .systemstrap-market-pricing>.wp-block-column {
                    width: auto !important;
                    max-width: none !important;
                    min-width: 0;
                    flex-basis: auto !important;
                }

                .systemstrap-market-tier--side {
                    align-self: center !important;
                }

                .systemstrap-market-tier--featured {
                    align-self: center !important;
                }

                .systemstrap-market-tier--side>.systemstrap-market-tier-panel {
                    height: 34rem;
                }

                .systemstrap-market-tier--featured>.systemstrap-market-tier-panel {
                    height: 39rem;
                }

                .systemstrap-market-tier-panel {
                    display: flex;
                    flex-direction: column;
                    box-sizing: border-box;
                }

                .systemstrap-market-tier-panel>.wp-block-list {
                    flex: 1 1 auto;
                }

                .systemstrap-market-tier-panel,
                .systemstrap-market-tier-panel p,
                .systemstrap-market-tier-panel h2,
                .systemstrap-market-tier-panel h3,
                .systemstrap-market-tier-panel li {
                    text-align: center;
                }

                .systemstrap-market-tier-panel>.wp-block-list li {
                    justify-content: center;
                }

                .systemstrap-market-tier-panel .wp-block-buttons {
                    justify-content: center;
                }
            }

            @media (max-width: 781px) {

                .systemstrap-market-pricing {
                    align-items: stretch !important;
                }

                .systemstrap-market-pricing>.wp-block-column {
                    width: 100% !important;
                    max-width: 100%;
                    flex-basis: 100% !important;
                }

                .systemstrap-market-tier-panel {
                    height: auto !important;
                }

                .systemstrap-market-tier-panel,
                .systemstrap-market-tier-panel p,
                .systemstrap-market-tier-panel h2,
                .systemstrap-market-tier-panel h3,
                .systemstrap-market-tier-panel li {
                    text-align: center;
                }

                .systemstrap-market-tier-panel>.wp-block-list li {
                    justify-content: center;
                }

                .systemstrap-market-tier-panel .wp-block-buttons {
                    justify-content: center;
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:group {"className":"systemstrap-market-inner","layout":{"type":"default"}} -->
        <div class="wp-block-group systemstrap-market-inner"><!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong>MARKET</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"fontSize":"xxx-large"} -->
            <h2 class="wp-block-heading has-xxx-large-font-size">Make the offer easy to understand.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Clear pricing, strong hierarchy, feature comparisons, and focused calls to action help turn complex choices into confident decisions.</p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"verticalAlignment":"center","className":"is-style-equal-heights systemstrap-market-pricing"} -->
            <div class="wp-block-columns are-vertically-aligned-center is-style-equal-heights systemstrap-market-pricing"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"systemstrap-market-tier systemstrap-market-tier\u002d\u002dside"} -->
                <div class="wp-block-column is-vertically-aligned-center systemstrap-market-tier systemstrap-market-tier--side" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-panel systemstrap-market-tier-panel","style":{"shadow":"none","elements":{"link":{"color":{"text":"var:preset|color|success"}}}},"backgroundColor":"tertiary-bg","textColor":"success","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel systemstrap-market-tier-panel has-success-color has-tertiary-bg-background-color has-text-color has-background has-link-color" style="box-shadow:none"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}}} -->
                            <h3 class="wp-block-heading has-text-align-center">Starter</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"className":"wp-block-heading has-text-align-center","style":{"typography":{"fontSize":"4rem","fontStyle":"normal","fontWeight":"700"}}} -->
                        <h2 class="wp-block-heading has-text-align-center" style="font-size:4rem;font-style:normal;font-weight:700">$0</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                        <p class="has-text-align-center">For personal sites and experiments.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:list {"className":"is-style-system-list"} -->
                        <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                            <li>1 project</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Core design system</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Community resources</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Pattern library</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Self Help Center</li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-panel-footer"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Start Free</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","className":"systemstrap-market-tier systemstrap-market-tier\u002d\u002dfeatured"} -->
                <div class="wp-block-column is-vertically-aligned-center systemstrap-market-tier systemstrap-market-tier--featured"><!-- wp:group {"className":"is-style-system-panel systemstrap-market-tier-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|danger"}}},"shadow":"var:preset|shadow|lg"},"backgroundColor":"base","textColor":"danger","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel systemstrap-market-tier-panel has-danger-color has-base-background-color has-text-color has-background has-link-color" style="box-shadow:var(--wp--preset--shadow--lg)"><!-- wp:group {"className":"is-style-system-panel-header has-pattern-20-gradient-background","style":{"elements":{"link":{"color":{"text":"var:preset|color|danger"}}}},"textColor":"danger","gradient":"pattern-20","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-system-panel-header has-pattern-20-gradient-background has-danger-color has-text-color has-background has-link-color"><!-- wp:paragraph {"className":"has-system-badge systemstrap-market-popular-badge","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                            <p class="has-text-align-center has-system-badge systemstrap-market-popular-badge has-large-font-size"><strong><mark style="background-color:#DD823B" class="has-inline-color">OUR MOST POPULAR</mark></strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"huge"} -->
                            <h3 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-huge-font-size">Pro</h3>
                            <!-- /wp:heading -->

                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal","verticalAlignment":"top"}} -->
                            <div class="wp-block-group"><!-- wp:paragraph {"className":"wp-block-heading has-text-align-center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"display-5"} -->
                                <p class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-display-5-font-size">$</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"className":"wp-block-heading has-text-align-center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"display-1"} -->
                                <p class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color has-display-1-font-size"><strong>49</strong></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|secondary-color"}}}},"textColor":"secondary-color","fontSize":"large"} -->
                            <p class="has-text-align-center has-secondary-color-color has-text-color has-link-color has-large-font-size">For serious builders shipping real projects.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:list {"className":"is-style-system-list"} -->
                        <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                            <li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color-color">Unlimited projects</mark></li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color-color">Priority support</mark></li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color-color">Custom domains</mark></li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color-color">Advanced component library</mark></li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color-color">All Pattern Labs</mark></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:group {"className":"is-style-system-panel-footer has-pattern-90-gradient-background","gradient":"pattern-90","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-panel-footer has-pattern-90-gradient-background has-background"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                            <div class="wp-block-buttons"><!-- wp:button {"textColor":"light","gradient":"luminous-vivid-orange-to-vivid-red","className":"has-luminous-vivid-orange-to-vivid-red-gradient-background","style":{"dimensions":{"width":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                                <div class="wp-block-button has-luminous-vivid-orange-to-vivid-red-gradient-background"><a class="wp-block-button__link has-light-color has-luminous-vivid-orange-to-vivid-red-gradient-background has-text-color has-background has-link-color wp-element-button">Get Started</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"30%","className":"systemstrap-market-tier systemstrap-market-tier\u002d\u002dside"} -->
                <div class="wp-block-column is-vertically-aligned-center systemstrap-market-tier systemstrap-market-tier--side" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-panel systemstrap-market-tier-panel","style":{"shadow":"none","elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"backgroundColor":"tertiary-bg","textColor":"info","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel systemstrap-market-tier-panel has-info-color has-tertiary-bg-background-color has-text-color has-background has-link-color" style="box-shadow:none"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}}} -->
                            <h3 class="wp-block-heading has-text-align-center">Studio</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"className":"wp-block-heading has-text-align-center","style":{"typography":{"fontSize":"4rem","fontStyle":"normal","fontWeight":"700"}}} -->
                        <h2 class="wp-block-heading has-text-align-center" style="font-size:4rem;font-style:normal;font-weight:700">$99</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                        <p class="has-text-align-center">For teams managing larger systems.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:list {"className":"is-style-system-list"} -->
                        <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                            <li>Everything in Pro</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Team workspaces</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Shared component governance</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Priority implementation support</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Release tooling</li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-panel-footer"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Contact Sales</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained"},"anchor":"commerce-preview"} -->
    <div class="wp-block-group alignfull has-base-background-color has-background" id="commerce-preview" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:html -->
        <style data-wp-block-html="css">
            /* ============================================================
   COMMERCE PREVIEW
   Front-page composition only.
   Existing Tabs / Panel / Button variations own presentation.
   ============================================================ */

            /* ------------------------------------------------------------
   Desktop
   - Copy left / showcase right
   - Narrower copy gives the storefront more working room
   - Product grid = 3 across
   - Category list remains on the RIGHT
   ------------------------------------------------------------ */

            @media (min-width: 1101px) {

                #commerce-preview .systemstrap-commerce-tabs {
                    grid-template-columns: minmax(0, 1fr) minmax(9rem, 12rem);
                }

                #commerce-preview .systemstrap-commerce-tabs>.wp-block-tab-panels {
                    grid-column: 1;
                    grid-row: 1;
                }

                #commerce-preview .systemstrap-commerce-tabs>.wp-block-tab-list {
                    grid-column: 2;
                    grid-row: 1;
                }

                #commerce-preview .systemstrap-commerce-products {
                    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
                }

                #commerce-preview .systemstrap-commerce-products--apparel {
                    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
                }

                #commerce-preview .systemstrap-commerce-products--two {
                    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                }
            }

            /* ------------------------------------------------------------
   Tablet
   - Copy becomes full-width
   - Storefront follows below
   - Category list remains on the right
   - Product grids = 2 across
   ------------------------------------------------------------ */

            @media (min-width: 782px) and (max-width: 1100px) {

                #commerce-preview .systemstrap-commerce-layout {
                    flex-wrap: wrap !important;
                }

                #commerce-preview .systemstrap-commerce-layout>.systemstrap-commerce-copy,
                #commerce-preview .systemstrap-commerce-layout>.systemstrap-commerce-showcase {
                    flex: 0 0 100% !important;
                    flex-basis: 100% !important;
                    width: 100% !important;
                    max-width: 100%;
                    min-width: 0;
                }

                #commerce-preview .systemstrap-commerce-tabs {
                    grid-template-columns: minmax(0, 1fr) minmax(9rem, 12rem);
                }

                #commerce-preview .systemstrap-commerce-tabs>.wp-block-tab-panels {
                    grid-column: 1;
                    grid-row: 1;
                }

                #commerce-preview .systemstrap-commerce-tabs>.wp-block-tab-list {
                    grid-column: 2;
                    grid-row: 1;
                }

                #commerce-preview .systemstrap-commerce-products,
                #commerce-preview .systemstrap-commerce-products--apparel,
                #commerce-preview .systemstrap-commerce-products--two {
                    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                }
            }

            /* ------------------------------------------------------------
   Mobile
   - Let the Tabs variation own its normal narrow layout
   - Product grids remain 2 across
   ------------------------------------------------------------ */

            @media (max-width: 781px) {

                #commerce-preview .systemstrap-commerce-products,
                #commerce-preview .systemstrap-commerce-products--apparel,
                #commerce-preview .systemstrap-commerce-products--two {
                    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:columns {"verticalAlignment":"top","className":"systemstrap-commerce-layout is-style-default"} -->
        <div class="wp-block-columns are-vertically-aligned-top systemstrap-commerce-layout is-style-default"><!-- wp:column {"verticalAlignment":"top","width":"22%","className":"systemstrap-commerce-copy"} -->
            <div class="wp-block-column is-vertically-aligned-top systemstrap-commerce-copy" style="flex-basis:22%"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>COMMERCE PREVIEW</strong></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"fontSize":"xxx-large"} -->
                <h2 class="wp-block-heading has-xxx-large-font-size">A storefront,<br>built your way.</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size">Product cards, categories, and storefront-ready composition built from native WordPress blocks and SystemStrap design contracts.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">This is a native-block preview. When WooCommerce is installed, SystemStrap applies the same design language to live commerce components.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill","fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button" href="#community-preview">Commerce Ready →</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"78%","className":"systemstrap-commerce-showcase"} -->
            <div class="wp-block-column is-vertically-aligned-top systemstrap-commerce-showcase" style="flex-basis:78%"><!-- wp:tabs {"className":"is-style-system-flat-list systemstrap-commerce-tabs"} -->
                <div class="wp-block-tabs is-style-system-flat-list systemstrap-commerce-tabs"><!-- wp:tab-list {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                    <div role="tablist" class="wp-block-tab-list is-style-default"><button class="has-primary-color has-text-color has-link-color" type="button" role="tab">Shop All</button><button class="has-primary-color has-text-color has-link-color" type="button" role="tab">Apparel</button><button class="has-primary-color has-text-color has-link-color" type="button" role="tab">Drinkware</button><button class="has-primary-color has-text-color has-link-color" type="button" role="tab">Print</button></div>
                    <!-- /wp:tab-list -->

                    <!-- wp:tab-panels -->
                    <div class="wp-block-tab-panels"><!-- wp:tab-panel {"label":"Shop All"} -->
                        <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:group {"className":"is-style-equal-heights systemstrap-commerce-products","layout":{"type":"grid","columnCount":3}} -->
                            <div class="wp-block-group is-style-equal-heights systemstrap-commerce-products"><!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-folded-shirt-alt.webp" alt="Folded SystemStrap T-shirt" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">T-Shirt</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$25.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-cap.webp" alt="SystemStrap cap" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Cap</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$18.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-mug.webp" alt="SystemStrap mug" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Mug</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$14.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-tour-poster.webp" alt="SystemStrap tour poster" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Tour Poster</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$22.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-water-bottle.webp" alt="SystemStrap water bottle" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Water Bottle</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$20.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-sticker-pack.webp" alt="SystemStrap sticker pack" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Sticker Pack</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$8.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </section>
                        <!-- /wp:tab-panel -->

                        <!-- wp:tab-panel {"label":"Apparel"} -->
                        <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:group {"className":"is-style-equal-heights systemstrap-commerce-products systemstrap-commerce-products\u002d\u002dapparel","layout":{"type":"grid","columnCount":3}} -->
                            <div class="wp-block-group is-style-equal-heights systemstrap-commerce-products systemstrap-commerce-products--apparel"><!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-terra-systemstrap-shirt.webp" alt="Terra wearing a SystemStrap shirt" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">T-Shirt</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$25.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-folded-shirt-alt.webp" alt="Folded SystemStrap T-shirt" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">T-Shirt</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$25.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-cap.webp" alt="SystemStrap cap" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Cap</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$18.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </section>
                        <!-- /wp:tab-panel -->

                        <!-- wp:tab-panel {"label":"Drinkware"} -->
                        <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:group {"className":"is-style-equal-heights systemstrap-commerce-products systemstrap-commerce-products\u002d\u002dtwo","layout":{"type":"grid","columnCount":2}} -->
                            <div class="wp-block-group is-style-equal-heights systemstrap-commerce-products systemstrap-commerce-products--two"><!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-mug.webp" alt="SystemStrap mug" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Mug</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$14.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-water-bottle.webp" alt="SystemStrap water bottle" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Water Bottle</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$20.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </section>
                        <!-- /wp:tab-panel -->

                        <!-- wp:tab-panel {"label":"Print"} -->
                        <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:group {"className":"is-style-equal-heights systemstrap-commerce-products systemstrap-commerce-products\u002d\u002dtwo","layout":{"type":"grid","columnCount":2}} -->
                            <div class="wp-block-group is-style-equal-heights systemstrap-commerce-products systemstrap-commerce-products--two"><!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-tour-poster.webp" alt="SystemStrap tour poster" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Tour Poster</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$22.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"is-style-system-panel systemstrap-commerce-product","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel systemstrap-commerce-product has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
                                    <figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/product-systemstrap-sticker-pack.webp" alt="SystemStrap sticker pack" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}},"fontSize":"medium"} -->
                                    <h4 class="wp-block-heading has-text-align-center has-medium-font-size">Sticker Pack</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"fontSize":"small"} -->
                                    <p class="has-text-align-center has-small-font-size"><strong>$8.00</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Add to cart</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </section>
                        <!-- /wp:tab-panel -->
                    </div>
                    <!-- /wp:tab-panels -->
                </div>
                <!-- /wp:tabs -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"secondary-bg","layout":{"type":"constrained"},"anchor":"community-preview"} -->
    <div class="wp-block-group alignfull has-secondary-bg-background-color has-background" id="community-preview" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:html -->
        <style data-wp-block-html="css">
            @media (min-width: 782px) and (max-width: 1100px) {
                #community-preview .systemstrap-community-layout {
                    flex-wrap: wrap !important;
                }

                #community-preview .systemstrap-community-layout>.systemstrap-community-copy,
                #community-preview .systemstrap-community-layout>.systemstrap-community-showcase {
                    flex: 0 0 100% !important;
                    flex-basis: 100% !important;
                    width: 100% !important;
                    max-width: 100%;
                    min-width: 0;
                }
            }

            @media (max-width: 781px) {
                #community-preview .systemstrap-community-updates .wp-block-media-text {
                    display: grid !important;
                    grid-template-columns: 4rem minmax(0, 1fr) !important;
                    align-items: start;
                }

                #community-preview .systemstrap-community-updates .wp-block-media-text__media {
                    grid-column: 1;
                    grid-row: 1;
                    align-self: start;
                    margin: 0;
                }

                #community-preview .systemstrap-community-updates .wp-block-media-text__media img {
                    display: block;
                    width: 4rem;
                    height: 4rem;
                    aspect-ratio: 1 / 1;
                    object-fit: cover;
                }

                #community-preview .systemstrap-community-updates .wp-block-media-text__content {
                    grid-column: 2;
                    grid-row: 1;
                    min-width: 0;
                    padding: 0 0 0 var(--wp--preset--spacing--20) !important;
                }
            }
        </style>
        <!-- /wp:html -->

        <!-- wp:columns {"verticalAlignment":"top","className":"systemstrap-community-layout is-style-default"} -->
        <div class="wp-block-columns are-vertically-aligned-top systemstrap-community-layout is-style-default"><!-- wp:column {"verticalAlignment":"top","width":"27%","className":"systemstrap-community-copy"} -->
            <div class="wp-block-column is-vertically-aligned-top systemstrap-community-copy" style="flex-basis:27%"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>COMMUNITY PREVIEW</strong></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"fontSize":"xxx-large"} -->
                <h2 class="wp-block-heading has-xxx-large-font-size">A community,<br>ready to grow.</h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"fontSize":"medium"} -->
                <p class="has-medium-font-size">Members, activity, and familiar social surfaces assembled from native WordPress blocks and the SystemStrap design system.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">This is a native-block preview. When BuddyPress is active, SystemStrap adapts live community interfaces to the same visual language.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill"} -->
                    <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link wp-element-button" href="#market">Join Now →</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"73%","className":"systemstrap-community-showcase"} -->
            <div class="wp-block-column is-vertically-aligned-top systemstrap-community-showcase" style="flex-basis:73%"><!-- wp:columns {"verticalAlignment":"top","className":"systemstrap-community-content is-style-default"} -->
                <div class="wp-block-columns are-vertically-aligned-top systemstrap-community-content is-style-default"><!-- wp:column {"verticalAlignment":"top","width":"62%","className":"systemstrap-community-members"} -->
                    <div class="wp-block-column is-vertically-aligned-top systemstrap-community-members" style="flex-basis:62%"><!-- wp:columns {"verticalAlignment":"stretch","isStackedOnMobile":false,"className":"is-style-equal-heights"} -->
                        <div class="wp-block-columns are-vertically-aligned-stretch is-not-stacked-on-mobile is-style-equal-heights"><!-- wp:column {"width":"50%"} -->
                            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                                    <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-twix-rottweiler.webp" alt="Twix the Rottweiler" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}}} -->
                                    <h4 class="wp-block-heading has-text-align-center">Twix</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"secondary-color","fontSize":"small"} -->
                                    <p class="has-text-align-center has-secondary-color-color has-text-color has-small-font-size">Active 3 minutes ago</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill-outline","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button">Add Friend</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"50%"} -->
                            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                                    <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-meyer-french-bulldog.webp" alt="Meyer the French Bulldog" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}}} -->
                                    <h4 class="wp-block-heading has-text-align-center">Meyer</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"secondary-color","fontSize":"small"} -->
                                    <p class="has-text-align-center has-secondary-color-color has-text-color has-small-font-size">Active 12 minutes ago</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill-outline","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button">Message</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- wp:columns {"verticalAlignment":"stretch","isStackedOnMobile":false,"className":"is-style-equal-heights"} -->
                        <div class="wp-block-columns are-vertically-aligned-stretch is-not-stacked-on-mobile is-style-equal-heights"><!-- wp:column {"width":"50%"} -->
                            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                                    <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-henry-tabby-cat.webp" alt="Henry the orange tabby cat" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}}} -->
                                    <h4 class="wp-block-heading has-text-align-center">Henry</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"secondary-color","fontSize":"small"} -->
                                    <p class="has-text-align-center has-secondary-color-color has-text-color has-small-font-size">Active 1 hour ago</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill-outline","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button">Add Friend</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"width":"50%"} -->
                            <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
                                    <figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-albert-pot-belly-pig.webp" alt="Albert the pot-belly pig" /></figure>
                                    <!-- /wp:image -->

                                    <!-- wp:heading {"level":4,"style":{"typography":{"textAlign":"center"}}} -->
                                    <h4 class="wp-block-heading has-text-align-center">Albert</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"secondary-color","fontSize":"small"} -->
                                    <p class="has-text-align-center has-secondary-color-color has-text-color has-small-font-size">Active 2 hours ago</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                                    <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill-outline","fontSize":"small"} -->
                                            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-small-font-size has-custom-font-size wp-element-button">Add Friend</a></div>
                                            <!-- /wp:button -->
                                        </div>
                                        <!-- /wp:buttons -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"top","width":"38%","className":"systemstrap-community-widgets"} -->
                    <div class="wp-block-column is-vertically-aligned-top systemstrap-community-widgets" style="flex-basis:38%"><!-- wp:group {"className":"is-style-system-panel systemstrap-community-updates","backgroundColor":"base","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-panel systemstrap-community-updates has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                                <h3 class="wp-block-heading has-large-font-size">Latest Updates</h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"layout":{"type":"constrained"}} -->
                            <div class="wp-block-group"><!-- wp:media-text {"mediaId":0,"mediaLink":"","mediaType":"image","mediaWidth":22,"verticalAlignment":"center"} -->
                                <div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:22% auto">
                                    <figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-twix-rottweiler.webp" alt="Twix the Rottweiler" /></figure>
                                    <div class="wp-block-media-text__content"><!-- wp:heading {"level":5} -->
                                        <h5 class="wp-block-heading">Twix</h5>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                                        <p class="has-secondary-color-color has-text-color has-small-font-size">19 minutes ago</p>
                                        <!-- /wp:paragraph -->

                                        <!-- wp:paragraph {"fontSize":"small"} -->
                                        <p class="has-small-font-size">Just published a new project on the site!</p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                </div>
                                <!-- /wp:media-text -->

                                <!-- wp:separator {"className":"is-style-wide"} -->
                                <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />
                                <!-- /wp:separator -->

                                <!-- wp:media-text {"mediaId":0,"mediaLink":"","mediaType":"image","mediaWidth":22,"verticalAlignment":"center"} -->
                                <div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:22% auto">
                                    <figure class="wp-block-media-text__media"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-albert-pot-belly-pig.webp" alt="Albert the pot-belly pig" /></figure>
                                    <div class="wp-block-media-text__content"><!-- wp:heading {"level":5} -->
                                        <h5 class="wp-block-heading">Albert</h5>
                                        <!-- /wp:heading -->

                                        <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                                        <p class="has-secondary-color-color has-text-color has-small-font-size">2 hours ago</p>
                                        <!-- /wp:paragraph -->

                                        <!-- wp:paragraph {"fontSize":"small"} -->
                                        <p class="has-small-font-size">Updated my profile and added a few new links.</p>
                                        <!-- /wp:paragraph -->
                                    </div>
                                </div>
                                <!-- /wp:media-text -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                                <h3 class="wp-block-heading has-large-font-size">Recently Active</h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:columns {"isStackedOnMobile":false,"className":"is-style-equal-heights"} -->
                            <div class="wp-block-columns is-not-stacked-on-mobile is-style-equal-heights"><!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
                                    <figure class="wp-block-image size-thumbnail is-style-rounded"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-twix-rottweiler.webp" alt="Twix" style="aspect-ratio:1;object-fit:cover" /></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
                                    <figure class="wp-block-image size-thumbnail is-style-rounded"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-meyer-french-bulldog.webp" alt="Meyer" style="aspect-ratio:1;object-fit:cover" /></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
                                    <figure class="wp-block-image size-thumbnail is-style-rounded"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-henry-tabby-cat.webp" alt="Henry" style="aspect-ratio:1;object-fit:cover" /></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column -->
                                <div class="wp-block-column"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
                                    <figure class="wp-block-image size-thumbnail is-style-rounded"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/member-albert-pot-belly-pig.webp" alt="Albert" style="aspect-ratio:1;object-fit:cover" /></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","anchor":"systemstrap-by-the-numbers","backgroundColor":"secondary-bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-secondary-bg-background-color has-background" id="systemstrap-by-the-numbers" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
        <p class="has-secondary-color-color has-text-color has-small-font-size"><strong>SYSTEMSTRAP / BY THE NUMBERS</strong></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-xx-large-font-size">Default Blocks. Endless Possibilities.</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"textColor":"secondary-color"} -->
        <p class="has-secondary-color-color has-text-color">A complete system. Down to the details.</p>
        <!-- /wp:paragraph -->

        <!-- wp:separator {"className":"is-style-wide","backgroundColor":"border-color"} -->
        <hr class="wp-block-separator has-text-color has-border-color-color has-alpha-channel-opacity has-border-color-background-color has-background is-style-wide" />
        <!-- /wp:separator -->

        <!-- wp:columns {"className":"is-style-equal-heights","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns is-style-equal-heights">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                <p class="has-secondary-color-color has-text-color has-small-font-size">01 / DESIGN FREEDOM</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"fontSize":"xx-large"} -->
                <h3 class="wp-block-heading has-xx-large-font-size">468</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Possible design combinations</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                <p class="has-secondary-color-color has-text-color has-small-font-size">26 color × 6 typography × 3 layout styles</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                <p class="has-secondary-color-color has-text-color has-small-font-size">02 / BLOCK SYSTEM</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"fontSize":"xx-large"} -->
                <h3 class="wp-block-heading has-xx-large-font-size">24</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Unique block styles</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                <p class="has-secondary-color-color has-text-color has-small-font-size">Native blocks. Reusable treatments.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                <p class="has-secondary-color-color has-text-color has-small-font-size">03 / DEVELOPER EXTENSIBILITY</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"fontSize":"xx-large"} -->
                <h3 class="wp-block-heading has-xx-large-font-size">69</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Named action hooks</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                <p class="has-secondary-color-color has-text-color has-small-font-size">PHP extension points embedded in block content.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">
            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size"><strong>EVERY COLOR STYLE SHIPS WITH A COMPLETE PALETTE</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-columns is-not-stacked-on-mobile">
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:heading {"level":3,"fontSize":"x-large"} -->
                    <h3 class="wp-block-heading has-x-large-font-size">20</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                    <p class="has-secondary-color-color has-text-color has-small-font-size">Color presets</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:heading {"level":3,"fontSize":"x-large"} -->
                    <h3 class="wp-block-heading has-x-large-font-size">42</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                    <p class="has-secondary-color-color has-text-color has-small-font-size">Gradients</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:heading {"level":3,"fontSize":"x-large"} -->
                    <h3 class="wp-block-heading has-x-large-font-size">18</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
                    <p class="has-secondary-color-color has-text-color has-small-font-size">Duotones</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:paragraph {"textColor":"secondary-color","fontSize":"small"} -->
            <p class="has-secondary-color-color has-text-color has-small-font-size">GRADIENT MAP / 04 core · 16 accent · 10 pattern · 12 texture <strong>— in each of 26 color styles.</strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"background":{"backgroundImage":{"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/front-page/prefooter-wave-right-transparent.png","source":"file","title":"prefooter-wave-right-transparent"},"backgroundSize":"cover"}},"backgroundColor":"dark","layout":{"type":"constrained"},"anchor":"real-sites"} -->
    <div class="wp-block-group alignfull has-dark-background-color has-background" id="real-sites" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"textColor":"light","fontSize":"small"} -->
            <p class="has-light-color has-text-color has-small-font-size"><strong>BUILD FOR REAL SITES</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textColor":"light","fontSize":"xxx-large"} -->
            <h2 class="wp-block-heading has-light-color has-text-color has-xxx-large-font-size">Same blocks. Different expectations.</h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"light","fontSize":"medium"} -->
            <p class="has-light-color has-text-color has-medium-font-size">SystemStrap keeps WordPress recognizable while giving every page a coordinated design language. Start with Core blocks, shape them with reusable styles and patterns, and carry the same system from a simple landing page to publishing, commerce, and community.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"light"} -->
            <p class="has-light-color has-text-color">No proprietary builder. No locked-in content. Just a theme built to help real sites grow without giving up the editor underneath.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"light","textColor":"dark","className":"is-style-button-pill","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"fontSize":"small"} -->
                <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-dark-color has-light-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" href="#hero">Explore Theme ↑</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
