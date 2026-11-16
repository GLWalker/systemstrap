<?php

/**
 * Title: Modal Color
 * Slug: systemstrap/modal-color
 * Categories: systemstrap
 */
?>
<!-- wp:group {"metadata":{"name":"System Modal"},"className":"is-style-system-panel is-style-system-modal systemstrap-color-reference-modal","backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-system-panel is-style-system-modal systemstrap-color-reference-modal has-base-background-color has-background">
    <style data-wp-block-html="css">
        .systemstrap-color-reference-modal {
            width: min(94vw, 88rem);
            max-width: 88rem;
            max-height: 90vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .systemstrap-color-reference-modal>.is-style-system-panel-header {
            flex: 0 0 auto;
        }

        .systemstrap-color-reference-scroll {
            max-height: calc(90vh - 6rem);
            overflow-y: auto;
            overflow-x: hidden;
            overscroll-behavior: contain;
            scrollbar-gutter: stable;
            padding-right: var(--wp--preset--spacing--10);
        }

        .systemstrap-color-reference-modal .wp-block-tab-list {
            position: sticky;
            top: 0;
            z-index: 10;
            background: var(--wp--preset--color--base);
        }

        .systemstrap-color-reference-modal .wp-block-tab-panel {
            padding-block: var(--wp--preset--spacing--20);
        }

        .systemstrap-color-reference-grid {
            display: grid !important;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: var(--wp--preset--spacing--20);
        }

        .systemstrap-accent-ladder-grid {
            display: grid !important;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: var(--wp--preset--spacing--20);
        }

        .systemstrap-ladder-card {
            min-width: 0;
        }

        .systemstrap-ladder-strip {
            display: grid !important;
            grid-template-columns: repeat(9, minmax(0, 1fr));
            gap: 0 !important;
            overflow: hidden;
        }

        .systemstrap-ladder-strip>.wp-block-group {
            min-width: 0 !important;
            width: auto !important;
        }

        .systemstrap-ladder-labels {
            margin-top: var(--wp--preset--spacing--10) !important;
            white-space: nowrap;
        }

        .systemstrap-gradient-grid {
            display: grid !important;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: var(--wp--preset--spacing--20);
        }

        .systemstrap-gradient-card {
            min-width: 0;
        }

        .systemstrap-gradient-card p {
            margin-block: 0;
        }

        .systemstrap-reference-section-heading {
            margin-top: var(--wp--preset--spacing--30);
        }

        @media (max-width:1100px) {

            .systemstrap-color-reference-grid,
            .systemstrap-gradient-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .systemstrap-accent-ladder-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width:781px) {
            .systemstrap-color-reference-modal {
                width: min(96vw, 48rem);
                max-height: 92vh;
            }

            .systemstrap-color-reference-scroll {
                max-height: calc(92vh - 5rem);
                padding-right: 0;
            }

            .systemstrap-color-reference-grid,
            .systemstrap-gradient-grid {
                grid-template-columns: 1fr;
            }

            .systemstrap-color-reference-modal .wp-block-tab-list {
                overflow-x: auto;
                flex-wrap: nowrap;
            }

            .systemstrap-color-reference-modal .wp-block-tab-list>button {
                flex: 0 0 auto;
            }
        }
    </style>
    <!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
    <div class="wp-block-group is-style-system-panel-header">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Colors</h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"className":"systemstrap-color-reference-scroll","layout":{"type":"default"}} -->
    <div class="wp-block-group systemstrap-color-reference-scroll">
        <!-- wp:tabs {"metadata":{"patternName":"systemstrap/modal-color","name":"Modal Color","categories":["systemstrap"]},"className":"is-style-system-classic"} -->
        <div class="wp-block-tabs is-style-system-classic">
            <!-- wp:tab-list -->
            <div role="tablist" class="wp-block-tab-list"><button type="button" role="tab">Surface</button><button type="button" role="tab">Accent</button><button type="button" role="tab">Utility</button><button type="button" role="tab">Gradients</button></div>
            <!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-panel systemstrap-color-reference-tab-panels"} -->
            <div class="wp-block-tab-panels is-style-system-panel systemstrap-color-reference-tab-panels">
                <!-- wp:tab-panel {"label":"Surface"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Surface system</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Core foreground and background surfaces used throughout the theme.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:group {"className":"systemstrap-color-reference-grid","layout":{"type":"default"}} -->
                    <div class="wp-block-group systemstrap-color-reference-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"base","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-base-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Base / Body</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>base</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"contrast","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-contrast-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Contrast</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>contrast</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-secondary-bg-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Secondary Body BG</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>secondary-bg</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"secondary-color","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-secondary-color-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Secondary Body Contrast</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>secondary-color</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"tertiary-bg","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-tertiary-bg-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Tertiary Body BG</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>tertiary-bg</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"tertiary-color","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-tertiary-color-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Tertiary Body Contrast</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>tertiary-color</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </section>
                <!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Accent"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Accent color ladders</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Each semantic parent color is paired with its generated 10–90 ladder. Ladder order is left to right: 10 through 90.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:group {"className":"systemstrap-accent-ladder-grid","layout":{"type":"default"}} -->
                    <div class="wp-block-group systemstrap-accent-ladder-grid">
                        <!-- wp:group {"className":"systemstrap-ladder-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-ladder-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-ladder-parent","style":{"dimensions":{"minHeight":"6rem"}},"backgroundColor":"primary","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-ladder-parent has-primary-background-color has-background" style="min-height:6rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Primary</strong></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>primary</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"className":"systemstrap-ladder-strip","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-ladder-strip">
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-10);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-20);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-30);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-40);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-50);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-60);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-70);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-80);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--primary-90);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph {"fontSize":"small","align":"center","className":"systemstrap-ladder-labels"} -->
                            <p class="has-text-align-center has-small-font-size systemstrap-ladder-labels"><code>10 · 20 · 30 · 40 · 50 · 60 · 70 · 80 · 90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"systemstrap-ladder-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-ladder-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-ladder-parent","style":{"dimensions":{"minHeight":"6rem"}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-ladder-parent has-secondary-background-color has-background" style="min-height:6rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Secondary</strong></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>secondary</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"className":"systemstrap-ladder-strip","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-ladder-strip">
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-10);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-20);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-30);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-40);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-50);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-60);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-70);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-80);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--secondary-90);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph {"fontSize":"small","align":"center","className":"systemstrap-ladder-labels"} -->
                            <p class="has-text-align-center has-small-font-size systemstrap-ladder-labels"><code>10 · 20 · 30 · 40 · 50 · 60 · 70 · 80 · 90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"systemstrap-ladder-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-ladder-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-ladder-parent","style":{"dimensions":{"minHeight":"6rem"}},"backgroundColor":"success","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-ladder-parent has-success-background-color has-background" style="min-height:6rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Success</strong></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>success</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"className":"systemstrap-ladder-strip","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-ladder-strip">
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-10);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-20);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-30);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-40);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-50);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-60);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-70);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-80);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--success-90);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph {"fontSize":"small","align":"center","className":"systemstrap-ladder-labels"} -->
                            <p class="has-text-align-center has-small-font-size systemstrap-ladder-labels"><code>10 · 20 · 30 · 40 · 50 · 60 · 70 · 80 · 90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"systemstrap-ladder-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-ladder-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-ladder-parent","style":{"dimensions":{"minHeight":"6rem"}},"backgroundColor":"info","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-ladder-parent has-info-background-color has-background" style="min-height:6rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Info</strong></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>info</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"className":"systemstrap-ladder-strip","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-ladder-strip">
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-10);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-20);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-30);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-40);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-50);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-60);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-70);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-80);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--info-90);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph {"fontSize":"small","align":"center","className":"systemstrap-ladder-labels"} -->
                            <p class="has-text-align-center has-small-font-size systemstrap-ladder-labels"><code>10 · 20 · 30 · 40 · 50 · 60 · 70 · 80 · 90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"systemstrap-ladder-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-ladder-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-ladder-parent","style":{"dimensions":{"minHeight":"6rem"}},"backgroundColor":"warning","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-ladder-parent has-warning-background-color has-background" style="min-height:6rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Warning</strong></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>warning</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"className":"systemstrap-ladder-strip","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-ladder-strip">
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-10);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-20);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-30);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-40);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-50);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-60);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-70);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-80);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--warning-90);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph {"fontSize":"small","align":"center","className":"systemstrap-ladder-labels"} -->
                            <p class="has-text-align-center has-small-font-size systemstrap-ladder-labels"><code>10 · 20 · 30 · 40 · 50 · 60 · 70 · 80 · 90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"systemstrap-ladder-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-ladder-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-ladder-parent","style":{"dimensions":{"minHeight":"6rem"}},"backgroundColor":"danger","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-ladder-parent has-danger-background-color has-background" style="min-height:6rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Danger</strong></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>danger</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"className":"systemstrap-ladder-strip","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-ladder-strip">
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-10);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-20);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-30);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-40);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-50);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-60);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-70);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-80);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--danger-90);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph {"fontSize":"small","align":"center","className":"systemstrap-ladder-labels"} -->
                            <p class="has-text-align-center has-small-font-size systemstrap-ladder-labels"><code>10 · 20 · 30 · 40 · 50 · 60 · 70 · 80 · 90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"systemstrap-ladder-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-ladder-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-ladder-parent","style":{"dimensions":{"minHeight":"6rem"}},"backgroundColor":"light","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-ladder-parent has-light-background-color has-background" style="min-height:6rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Light</strong></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>light</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"className":"systemstrap-ladder-strip","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-ladder-strip">
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-10);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-20);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-30);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-40);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-50);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-60);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-70);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-80);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--light-90);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph {"fontSize":"small","align":"center","className":"systemstrap-ladder-labels"} -->
                            <p class="has-text-align-center has-small-font-size systemstrap-ladder-labels"><code>10 · 20 · 30 · 40 · 50 · 60 · 70 · 80 · 90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"systemstrap-ladder-card","layout":{"type":"default"}} -->
                        <div class="wp-block-group systemstrap-ladder-card">
                            <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-ladder-parent","style":{"dimensions":{"minHeight":"6rem"}},"backgroundColor":"dark","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-system-flat-panel systemstrap-ladder-parent has-dark-background-color has-background" style="min-height:6rem">
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>Dark</strong></p>
                                <!-- /wp:paragraph -->
                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><code>dark</code></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:group {"className":"systemstrap-ladder-strip","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
                            <div class="wp-block-group systemstrap-ladder-strip">
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-10);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-20);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-30);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-40);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-50);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-60);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-70);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-80);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                                <!-- wp:group {"className":"systemstrap-ladder-chip","style":{"dimensions":{"minHeight":"1.25rem"},"css":"background-color:var(--wp--preset--color--dark-90);"}} -->
                                <div class="wp-block-group systemstrap-ladder-chip has-custom-css" style="min-height:1.25rem"></div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- wp:paragraph {"fontSize":"small","align":"center","className":"systemstrap-ladder-labels"} -->
                            <p class="has-text-align-center has-small-font-size systemstrap-ladder-labels"><code>10 · 20 · 30 · 40 · 50 · 60 · 70 · 80 · 90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </section>
                <!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Utility"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Contextual &amp; utility colors</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Structural, contextual, transparent, and inherited color presets.</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:group {"className":"systemstrap-color-reference-grid","layout":{"type":"default"}} -->
                    <div class="wp-block-group systemstrap-color-reference-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"border-color","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-border-color-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Border Color</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>border-color</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"current","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-current-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Current</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>current</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"current-mix","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-current-mix-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Current Mix</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>current-mix</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"current-mix-color","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-current-mix-color-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Current Mix Text</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>current-mix-color</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"transparent","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-transparent-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Transparent</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>transparent</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel systemstrap-color-reference-swatch","style":{"dimensions":{"minHeight":"7rem"}},"backgroundColor":"inherit","layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel systemstrap-color-reference-swatch has-inherit-background-color has-background" style="min-height:7rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Inherit</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>inherit</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </section>
                <!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Gradients"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Core gradients</h3>
                    <!-- /wp:heading --><!-- wp:group {"className":"systemstrap-gradient-grid","layout":{"type":"default"}} -->
                    <div class="wp-block-group systemstrap-gradient-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"absolute-01","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-absolute-01-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Absolute: Gradient</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>absolute-01</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"absolute-02","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-absolute-02-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Absolute: Gradient Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>absolute-02</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"absolute-03","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-absolute-03-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Absolute: Body</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>absolute-03</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"absolute-04","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-absolute-04-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Absolute: Element</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>absolute-04</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group --><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Accent families</h3>
                    <!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Two coordinated gradients for each semantic accent family.</p>
                    <!-- /wp:paragraph --><!-- wp:group {"className":"systemstrap-gradient-grid","layout":{"type":"default"}} -->
                    <div class="wp-block-group systemstrap-gradient-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-10","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-10-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Primary</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-10</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-20","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-20-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Primary Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-20</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-30","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-30-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Secondary</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-30</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-40","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-40-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Secondary Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-40</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-50","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-50-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Success</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-50</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-60","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-60-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Success Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-60</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-70","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-70-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Info</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-70</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-80","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-80-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Info Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-80</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-90","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-90-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Warning</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-100","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-100-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Warning Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-100</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-110","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-110-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Danger</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-110</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-120","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-120-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Danger Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-120</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-130","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-130-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Light</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-130</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-140","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-140-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Light Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-140</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-150","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-150-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Dark</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-150</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"accent-160","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-accent-160-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Dark Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>accent-160</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group --><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Expressive patterns</h3>
                    <!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Pattern presets use the WordPress gradient preset contract with a deterministic backing surface.</p>
                    <!-- /wp:paragraph --><!-- wp:group {"className":"systemstrap-gradient-grid","layout":{"type":"default"}} -->
                    <div class="wp-block-group systemstrap-gradient-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-10","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-10-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Starburst</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-10</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-20","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-20-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Starburst Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-20</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-30","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-30-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Spiral Ring</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-30</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-40","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-40-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Spiral Ring Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-40</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-41","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-41-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Compass</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-41</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-42","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-42-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Compass Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-42</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-50","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-50-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Topographic Lines</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-50</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-60","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-60-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Topographic Lines Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-60</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-70","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-70-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Wood Grain</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-70</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-80","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-80-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Pattern: Wood Grain Alt</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-80</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group --><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Practical textures</h3>
                    <!-- /wp:heading --><!-- wp:group {"className":"systemstrap-gradient-grid","layout":{"type":"default"}} -->
                    <div class="wp-block-group systemstrap-gradient-grid">
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-90","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-90-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Fine Grain</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-90</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-100","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-100-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Pressed Paper</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-100</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-110","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-110-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Woven Linen</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-110</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-120","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-120-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Blueprint Grid</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-120</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-130","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-130-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Carbon Fiber</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-130</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-140","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-140-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Low Poly</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-140</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-150","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-150-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Terrazzo</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-150</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-160","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-160-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Dark Brushed Metal</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-160</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-170","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-170-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Dot Matrix</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-170</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-180","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-180-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Honeycomb</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-180</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-190","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-190-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Cabinet Mesh</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><code>pattern-190</code></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card","gradient":"pattern-200","style":{"dimensions":{"minHeight":"7.5rem"}},"layout":{"type":"default"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color systemstrap-gradient-card has-pattern-200-gradient-background has-background" style="min-height:7.5rem">
                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>Texture: Brickwork</strong></p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"fontSize":"small"} -->
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