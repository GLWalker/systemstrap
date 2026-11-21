<?php
/**
 * Title: Modal Colors Content
 * Slug: systemstrap/modal-colors-content
 * Categories: systemstrap
 */
?>
<!-- wp:group {"metadata":{"name":"Colors Modal"},"className":"is-style-system-panel is-style-system-modal systemstrap-color-modal","backgroundColor":"base","layout":{"type":"default"}} -->
<div
    class="wp-block-group is-style-system-panel is-style-system-modal systemstrap-color-modal has-base-background-color has-background">
    <!-- wp:html -->
    <style data-wp-block-html="css">
        .systemstrap-color-modal {

            max-height: 90vh;
            overflow: hidden;
            display: flex;
            flex-direction: column
        }

        .systemstrap-color-modal-body {

            overflow-y: auto;
            overflow-x: hidden;
            overscroll-behavior: contain;
            scrollbar-gutter: stable;

        }
    </style>
    <!-- /wp:html -->

    <!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading -->
        <h2 class="wp-block-heading">Colors</h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"systemstrap-color-modal-body","layout":{"type":"default"}} -->
    <div class="wp-block-group systemstrap-color-modal-body">

        <!-- wp:tabs {"className":"is-style-system-classic"} -->

        <div class="wp-block-tabs is-style-system-classic"><!-- wp:tab-list -->
            <div role="tablist" class="wp-block-tab-list"><button type="button" role="tab">Surface</button><button
                    type="button" role="tab">Accent</button><button type="button" role="tab">Utility</button><button
                    type="button" role="tab">Gradients</button></div>
            <!-- /wp:tab-list -->

            <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
            <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Surface"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Surface</h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"systemstrap-color-grid","layout":{"type":"grid","columnCount":3}} -->
                    <div class="wp-block-group systemstrap-color-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"base","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-base-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>base</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"contrast","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-contrast-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>contrast</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-secondary-bg-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>secondary-bg</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"secondary-color","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-secondary-color-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>secondary-color</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"tertiary-bg","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-tertiary-bg-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>tertiary-bg</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"tertiary-color","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-tertiary-color-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>tertiary-color</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </section>
                <!-- /wp:tab-panel -->

                <!-- wp:tab-panel {"label":"Accent"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Accent</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Each accent preset generates a coordinated 10–90 color ladder.
                        Reference any shade with <code>--wp--preset--color--{slug}-{10…90}</code>.
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"systemstrap-accent-grid","layout":{"type":"grid","columnCount":2}} -->
                    <div class="wp-block-group systemstrap-accent-grid">
                        <!-- wp:group {"className":"systemstrap-accent-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
                        <div class="wp-block-group systemstrap-accent-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-parent","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-color-parent has-custom-css has-primary-background-color has-background"
                                style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>primary</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"strap-color-ladder","style":{"spacing":{"blockGap":"0"},"dimensions":{"minWidth":"3.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group strap-color-ladder" style="min-width:3.5rem">
                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-10-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-10-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-20-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-20-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-30-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-30-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-40-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-40-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-50-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-50-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-60-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-60-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-70-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-70-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-80-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-80-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-primary-90-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-primary-90-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-accent-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
                        <div class="wp-block-group systemstrap-accent-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-parent","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-color-parent has-custom-css has-secondary-background-color has-background"
                                style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>secondary</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"strap-color-ladder","style":{"spacing":{"blockGap":"0"},"dimensions":{"minWidth":"3.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group strap-color-ladder" style="min-width:3.5rem">
                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-10-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-10-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-20-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-20-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-30-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-30-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-40-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-40-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-50-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-50-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-60-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-60-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-70-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-70-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-80-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-80-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-secondary-90-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-secondary-90-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-accent-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
                        <div class="wp-block-group systemstrap-accent-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-parent","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"success","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-color-parent has-custom-css has-success-background-color has-background"
                                style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>success</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"strap-color-ladder","style":{"spacing":{"blockGap":"0"},"dimensions":{"minWidth":"3.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group strap-color-ladder" style="min-width:3.5rem">
                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-10-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-10-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-20-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-20-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-30-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-30-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-40-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-40-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-50-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-50-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-60-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-60-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-70-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-70-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-80-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-80-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-success-90-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-success-90-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-accent-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
                        <div class="wp-block-group systemstrap-accent-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-parent","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"info","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-color-parent has-custom-css has-info-background-color has-background"
                                style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>info</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"strap-color-ladder","style":{"spacing":{"blockGap":"0"},"dimensions":{"minWidth":"3.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group strap-color-ladder" style="min-width:3.5rem">
                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-10-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-10-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-20-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-20-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-30-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-30-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-40-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-40-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-50-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-50-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-60-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-60-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-70-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-70-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-80-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-80-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-info-90-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-info-90-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-accent-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
                        <div class="wp-block-group systemstrap-accent-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-parent","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"warning","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-color-parent has-custom-css has-warning-background-color has-background"
                                style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>warning</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"strap-color-ladder","style":{"spacing":{"blockGap":"0"},"dimensions":{"minWidth":"3.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group strap-color-ladder" style="min-width:3.5rem">
                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-10-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-10-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-20-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-20-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-30-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-30-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-40-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-40-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-50-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-50-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-60-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-60-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-70-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-70-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-80-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-80-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-warning-90-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-warning-90-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-accent-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
                        <div class="wp-block-group systemstrap-accent-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-parent","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"danger","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-color-parent has-custom-css has-danger-background-color has-background"
                                style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>danger</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"strap-color-ladder","style":{"spacing":{"blockGap":"0"},"dimensions":{"minWidth":"3.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group strap-color-ladder" style="min-width:3.5rem">
                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-10-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-10-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-20-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-20-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-30-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-30-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-40-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-40-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-50-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-50-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-60-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-60-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-70-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-70-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-80-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-80-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-danger-90-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-danger-90-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-accent-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
                        <div class="wp-block-group systemstrap-accent-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-parent","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"light","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-color-parent has-custom-css has-light-background-color has-background"
                                style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>light</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"strap-color-ladder","style":{"spacing":{"blockGap":"0"},"dimensions":{"minWidth":"3.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group strap-color-ladder" style="min-width:3.5rem">
                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-10-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-10-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-20-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-20-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-30-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-30-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-40-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-40-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-50-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-50-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-60-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-60-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-70-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-70-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-80-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-80-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-light-90-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-light-90-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"systemstrap-accent-card","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
                        <div class="wp-block-group systemstrap-accent-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-parent","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"dark","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-color-parent has-custom-css has-dark-background-color has-background"
                                style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>dark</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:group {"className":"strap-color-ladder","style":{"spacing":{"blockGap":"0"},"dimensions":{"minWidth":"3.5rem"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group strap-color-ladder" style="min-width:3.5rem">
                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-10-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-10-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-20-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-20-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-30-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-30-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-40-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-40-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-50-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-50-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-60-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-60-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-70-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-70-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-80-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-80-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->

                                <!-- wp:group {"className":"strap-color-ladder__swatch has-dark-90-background-color","style":{"dimensions":{"minHeight":"1rem"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group strap-color-ladder__swatch has-dark-90-background-color"
                                    style="min-height:1rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </section>
                <!-- /wp:tab-panel -->

                <!-- wp:tab-panel {"label":"Utility"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Utility</h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"systemstrap-color-grid","layout":{"type":"grid","columnCount":3}} -->
                    <div class="wp-block-group systemstrap-color-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"border-color","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-border-color-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>border-color</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"current","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-current-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>current</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"current-mix","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-current-mix-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>current-mix</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"current-mix-color","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-current-mix-color-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>current-mix-color</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"transparent","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-transparent-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>transparent</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-grid-card","style":{"dimensions":{"minHeight":"5.5rem"}},"backgroundColor":"inherit","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-grid-card has-inherit-background-color has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>inherit</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </section>
                <!-- /wp:tab-panel -->

                <!-- wp:tab-panel {"label":"Gradients"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Core gradients</h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"systemstrap-gradient-grid","layout":{"type":"grid","columnCount":4}} -->
                    <div class="wp-block-group systemstrap-gradient-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"absolute-01","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-absolute-01-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>absolute-01</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"absolute-02","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-absolute-02-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>absolute-02</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"absolute-03","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-absolute-03-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>absolute-03</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"absolute-04","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-absolute-04-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>absolute-04</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"className":"systemstrap-modal-section-title"} -->
                    <h3 class="wp-block-heading systemstrap-modal-section-title">Accent gradients</h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"systemstrap-gradient-grid","layout":{"type":"grid","columnCount":4}} -->
                    <div class="wp-block-group systemstrap-gradient-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-10","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-10-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-10</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-20","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-20-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-20</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-30","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-30-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-30</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-40","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-40-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-40</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-50","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-50-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-50</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-60","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-60-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-60</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-70","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-70-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-70</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-80","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-80-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-80</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-90","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-90-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-100","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-100-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-100</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-110","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-110-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-110</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-120","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-120-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-120</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-130","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-130-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-130</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-140","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-140-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-140</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-150","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-150-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-150</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"accent-160","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-160-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-160</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"className":"systemstrap-modal-section-title"} -->
                    <h3 class="wp-block-heading systemstrap-modal-section-title">Patterns</h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"systemstrap-gradient-grid","layout":{"type":"grid","columnCount":4}} -->
                    <div class="wp-block-group systemstrap-gradient-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-10","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-10-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-10</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-20","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-20-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-20</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-30","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-30-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-30</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-40","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-40-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-40</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-41","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-41-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-41</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-42","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-42-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-42</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-50","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-50-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-50</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-60","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-60-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-60</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-70","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-70-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-70</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-80","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-80-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-80</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":3,"className":"systemstrap-modal-section-title"} -->
                    <h3 class="wp-block-heading systemstrap-modal-section-title">Textures</h3>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"systemstrap-gradient-grid","layout":{"type":"grid","columnCount":4}} -->
                    <div class="wp-block-group systemstrap-gradient-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-90","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-90-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-100","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-100-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-100</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-110","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-110-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-110</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-120","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-120-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-120</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-130","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-130-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-130</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-140","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-140-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-140</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-150","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-150-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-150</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-160","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-160-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-160</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-170","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-170-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-170</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-180","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-180-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-180</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-190","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-190-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-190</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","style":{"dimensions":{"minHeight":"5.5rem"}},"gradient":"pattern-200","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-200-gradient-background has-background"
                            style="min-height:5.5rem"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-200</code></p>
                            <!-- /wp:paragraph -->
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
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
