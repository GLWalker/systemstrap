<?php

/**
 * Title: Colors Lab
 * Slug: systemstrap/lab-colors
 * Categories: systemstrap, systemstrap-labs
 * Description: A comprehensive SystemStrap Color laboratory demonstrating surface colors, semantic shade ladders, gradients, patterns, deterministic backing surfaces, contrast ownership, and layered color compositions.
 * Keywords: color, palette, semantic color, shade ladder, gradient, pattern, contrast, panel wrapper, equal heights, systemstrap, pattern lab
 * Viewport Width: 1200
 * Inserter: yes
 */

?>
<!-- wp:group {"metadata":{"name":"SystemStrap Color Lab","categories":["systemstrap-labs"],"patternName":"systemstrap/lab-colors"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:paragraph -->
    <p>SYSTEMSTRAP DESIGN SYSTEM</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Color Lab</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Canonical preset reference plus controlled color-system demonstrations. Everything on this page is built from theme.json presets or SystemStrap-generated semantic shade variables, with explicit surface ownership where contrast depends on a background.</p>
    <!-- /wp:paragraph -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical"><!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Surfaces</button><button type="button" role="tab">Ladders</button><button type="button" role="tab">Gradients</button><button type="button" role="tab">Patterns</button><button type="button" role="tab">Layering</button><button type="button" role="tab">Contrast</button></div>
        <!-- /wp:tab-list -->

        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Surfaces"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Surface Ownership</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Base, Contrast, Secondary, Tertiary, and semantic colors are more than swatches: they establish surface and foreground relationships. When a component intentionally owns foreground contrast, give it an explicit background so the color runtime has a deterministic surface to reason about.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Ladders"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Generated Semantic Ladders</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Primary, Secondary, Success, Info, Warning, Danger, Light, and Dark each expose generated 10–90 shade ladders. SystemStrap uses those families for contrast-aware semantic presentation rather than treating each semantic color as a single fixed paint value.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Gradients"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Gradients Need a Surface</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Gradients are visual paint layers, not reliable contrast surfaces by themselves. Pair a gradient with an explicit preset background such as Base or a semantic background so the composition keeps a deterministic backing surface if the gradient is translucent or pattern-based.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Patterns"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern and currentColor Behavior</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>SystemStrap patterns use WordPress gradient presets. Some respond primarily to the backing surface while others use <code>currentColor</code>, allowing authored foreground color to become part of the pattern language. The Lab isolates both behaviors below.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Layering"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Panel Wrapper for Layered Paint</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>The hidden <code>is-panel-wrapper</code> helper provides canonical Panel radius without border, padding, gap, shadow, or atmosphere. Use it when a composition needs nested background, gradient, or pattern layers without turning every layer into another Panel.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Contrast"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Automatic Contrast</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>When a supported surface owns a background, SystemStrap can choose an appropriate light or dark foreground and may adjust semantic foreground shades to preserve contrast. Explicit authored foreground/background pairs remain author-owned; the Lab is designed to expose those boundaries across theme variations.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->
        </div>
        <!-- /wp:tab-panels -->
    </div>
    <!-- /wp:tabs -->

    <!-- wp:paragraph -->
    <p>Use this Lab as a visual registry and stress fixture: compare surfaces, inspect generated ladders, confirm gradients keep real backing colors, and change theme variations aggressively. Color should change mood without changing ownership.</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading">01 — Quick reference</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Color preset reference.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><code>CSS variable: --wp--preset--color--{slug}</code></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Surface system</h3>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"base"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Base/Body</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>base</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"contrast"} -->
            <div class="wp-block-group is-style-system-flat-panel has-contrast-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Contrast</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>contrast</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"secondary-bg"} -->
            <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Secondary Body BG</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>secondary-bg</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"secondary-color"} -->
            <div class="wp-block-group is-style-system-flat-panel has-secondary-color-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Secondary Body Contrast</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>secondary-color</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"tertiary-bg"} -->
            <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Tertiary Body BG</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>tertiary-bg</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"tertiary-color"} -->
            <div class="wp-block-group is-style-system-flat-panel has-tertiary-color-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Tertiary Body Contrast</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>tertiary-color</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Accent color ladders</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Each semantic parent color is paired with its generated 10–90 ladder. The ladder runs top to bottom with no gaps: 10, 20, 30, 40, 50, 60, 70, 80, 90.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><code>Parent: --wp--preset--color--{slug} · Ladder: --wp--preset--color--{slug}-{10…90}</code></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"primary"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-primary-background-color has-background" style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Primary</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>primary</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"strap-color-ladder","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group strap-color-ladder"><!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-10-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-10-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-20-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-20-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-30-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-30-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-40-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-40-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-50-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-50-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-60-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-60-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-70-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-70-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-80-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-80-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-primary-90-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-primary-90-background-color"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"secondary"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-secondary-background-color has-background" style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Secondary</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>secondary</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"strap-color-ladder","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group strap-color-ladder"><!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-10-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-10-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-20-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-20-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-30-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-30-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-40-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-40-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-50-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-50-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-60-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-60-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-70-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-70-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-80-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-80-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-secondary-90-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-secondary-90-background-color"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"success"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-success-background-color has-background" style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Success</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>success</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"strap-color-ladder","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group strap-color-ladder"><!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-10-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-10-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-20-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-20-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-30-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-30-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-40-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-40-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-50-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-50-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-60-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-60-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-70-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-70-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-80-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-80-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-success-90-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-success-90-background-color"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"info"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-info-background-color has-background" style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Info</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>info</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"strap-color-ladder","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group strap-color-ladder"><!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-10-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-10-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-20-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-20-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-30-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-30-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-40-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-40-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-50-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-50-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-60-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-60-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-70-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-70-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-80-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-80-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-info-90-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-info-90-background-color"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"warning"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-warning-background-color has-background" style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Warning</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>warning</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"strap-color-ladder","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group strap-color-ladder"><!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-10-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-10-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-20-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-20-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-30-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-30-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-40-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-40-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-50-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-50-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-60-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-60-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-70-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-70-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-80-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-80-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-warning-90-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-warning-90-background-color"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"danger"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-danger-background-color has-background" style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Danger</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>danger</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"strap-color-ladder","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group strap-color-ladder"><!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-10-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-10-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-20-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-20-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-30-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-30-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-40-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-40-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-50-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-50-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-60-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-60-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-70-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-70-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-80-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-80-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-danger-90-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-danger-90-background-color"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"light"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-background-color has-background" style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Light</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>light</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"strap-color-ladder","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group strap-color-ladder"><!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-10-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-10-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-20-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-20-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-30-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-30-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-40-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-40-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-50-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-50-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-60-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-60-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-70-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-70-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-80-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-80-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-light-90-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-light-90-background-color"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
            <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 auto;min-width:0;","border":{"radius":{"topRight":"0px","bottomRight":"0px"}}},"backgroundColor":"dark"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-dark-background-color has-background" style="border-top-right-radius:0px;border-bottom-right-radius:0px;min-height:9rem"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Dark</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>dark</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"strap-color-ladder","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
                <div class="wp-block-group strap-color-ladder"><!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-10-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-10-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-20-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-20-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-30-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-30-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-40-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-40-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-50-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-50-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-60-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-60-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-70-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-70-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-80-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-80-background-color"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:spacer {"height":"1rem","className":"strap-color-ladder__swatch has-dark-90-background-color"} -->
                    <div style="height:1rem" aria-hidden="true" class="wp-block-spacer strap-color-ladder__swatch has-dark-90-background-color"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Contextual &amp; utility</h3>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"border-color"} -->
            <div class="wp-block-group is-style-system-flat-panel has-border-color-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Border Color</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>border-color</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"current"} -->
            <div class="wp-block-group is-style-system-flat-panel has-current-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-bg"}}}},"textColor":"tertiary-bg"} -->
                <h3 class="wp-block-heading has-tertiary-bg-color has-text-color has-link-color">Current</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-bg"}}}},"textColor":"tertiary-bg"} -->
                <p class="has-tertiary-bg-color has-text-color has-link-color">current</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"current-mix"} -->
            <div class="wp-block-group is-style-system-flat-panel has-current-mix-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Current Mix</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>current-mix</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"current-mix-color"} -->
            <div class="wp-block-group is-style-system-flat-panel has-current-mix-color-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Current Mix Text</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>current-mix-color</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"transparent"} -->
            <div class="wp-block-group is-style-system-flat-panel has-transparent-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Transparent</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>transparent</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"8rem"}},"backgroundColor":"inherit"} -->
            <div class="wp-block-group is-style-system-flat-panel has-inherit-background-color has-background" style="min-height:8rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Inherit</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>inherit</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading">02 — Gradient system</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Gradient preset reference.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><code>CSS variable: --wp--preset--gradient--{slug}</code></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Core gradients</h3>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"absolute-01"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-absolute-01-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Absolute: Gradient</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>absolute-01</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"absolute-02"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-absolute-02-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Absolute: Gradient Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>absolute-02</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"absolute-03"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-absolute-03-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Absolute: Body</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>absolute-03</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"absolute-04"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-absolute-04-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Absolute: Element</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>absolute-04</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Accent families</h3>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Primary</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-10"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-10-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Primary</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-10</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-20"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-20-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Primary Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-20</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Secondary</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-30"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-30-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Secondary</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-30</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-40"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-40-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Secondary Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-40</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Success</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-50"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-50-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Success</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-50</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-60"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-60-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Success Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-60</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Info</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-70"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-70-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Info</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-70</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-80"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-80-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Info Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-80</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Warning</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-90"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-90-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Warning</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-90</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-100"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-100-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Warning Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-100</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Danger</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-110"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-110-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Danger</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-110</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-120"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-120-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Danger Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-120</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Light</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-130"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-130-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Light</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-130</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-140"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-140-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Light Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-140</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Dark</h3>
            <!-- /wp:heading -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-150"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-150-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Dark</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-150</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"accent-160"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-accent-160-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Accent: Dark Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>accent-160</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading">03 — Pattern registry</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Pattern presets use the same WordPress gradient variable form.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><code>CSS variable: --wp--preset--gradient--{slug}</code></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Expressive patterns</h3>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"12rem"}},"gradient":"pattern-10"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-10-gradient-background has-background" style="min-height:12rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Starburst</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-10</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"12rem"}},"gradient":"pattern-20"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-20-gradient-background has-background" style="min-height:12rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Starburst Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-20</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"12rem"}},"gradient":"pattern-30"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-30-gradient-background has-background" style="min-height:12rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Spiral Ring</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-30</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"12rem"}},"gradient":"pattern-40"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-40-gradient-background has-background" style="min-height:12rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Spiral Ring Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-40</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"12rem"}},"gradient":"pattern-41"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-41-gradient-background has-background" style="min-height:12rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Compass</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-41</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"12rem"}},"gradient":"pattern-42"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-42-gradient-background has-background" style="min-height:12rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Compass Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-42</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"12rem"}},"gradient":"pattern-50"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-50-gradient-background has-background" style="min-height:12rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Topographic Lines</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-50</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"12rem"}},"gradient":"pattern-60"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-60-gradient-background has-background" style="min-height:12rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Topographic Lines Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-60</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"6rem"}},"gradient":"pattern-70"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-70-gradient-background has-background" style="min-height:6rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Wood Grain</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-70</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"6rem"}},"gradient":"pattern-80"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-80-gradient-background has-background" style="min-height:6rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Pattern: Wood Grain Alt</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-80</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Practical textures</h3>
    <!-- /wp:heading -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-90"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-90-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Fine Grain</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-90</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-100"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-100-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Pressed Paper</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-100</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-110"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-110-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Woven Linen</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-110</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-120"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-120-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Blueprint Grid</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-120</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-130"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-130-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Carbon Fiber</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-130</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-140"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-140-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Low Poly</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-140</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-150"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-150-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Terrazzo</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-150</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-160"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-160-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Dark Brushed Metal</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-160</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-170"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-170-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Dot Matrix</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-170</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-180"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-180-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Honeycomb</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-180</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-190"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-190-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Cabinet Mesh</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-190</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"10rem"}},"gradient":"pattern-200"} -->
            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-pattern-200-gradient-background has-background" style="min-height:10rem"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Texture: Brickwork</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>pattern-200</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading">04 — Layered surface recipes</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>These specimens use <code>is-panel-wrapper</code> as a neutral paint carrier. The wrapper contributes canonical Panel radius but no border, padding, gap, shadow, or System Panel atmosphere, so each visible layer comes from authored color, gradient, and pattern choices.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-panel-wrapper has-tertiary-bg-background-color is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"},"gradient":"pattern-200"} -->
            <div class="wp-block-group is-panel-wrapper has-tertiary-bg-background-color is-style-default has-contrast-color has-text-color has-link-color has-pattern-200-gradient-background has-background"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|danger"}}}},"textColor":"danger","layout":{"type":"constrained"},"gradient":"pattern-90"} -->
                <div class="wp-block-group is-style-system-flat-panel has-danger-color has-text-color has-link-color has-pattern-90-gradient-background has-background"><!-- wp:heading {"level":4,"className":"is-style-system-badge","style":{"elements":{"link":{"color":{"text":"var:preset|color|current-mix-color"}}}},"textColor":"current-mix-color"} -->
                    <h4 class="wp-block-heading is-style-system-badge has-current-mix-color-color has-text-color has-link-color"><mark style="background-color:#C1403B" class="has-inline-color has-light-color">Brick</mark> <mark style="background-color:#fcb900" class="has-inline-color has-dark-color">Stack</mark></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color","fontSize":"small"} -->
                    <p class="has-tertiary-color-color has-text-color has-link-color has-small-font-size">Tertiary backing + Brickwork Grad → Danger text + Fine Grain Flat Panel → P + Tertiary text.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-panel-wrapper has-base-background-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"},"gradient":"pattern-90"} -->
            <div class="wp-block-group is-panel-wrapper has-base-background-color has-contrast-color has-text-color has-link-color has-pattern-90-gradient-background has-background"><!-- wp:group {"className":"is-style-system-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","layout":{"type":"constrained"},"gradient":"pattern-30"} -->
                <div class="wp-block-group is-style-system-panel has-info-color has-text-color has-link-color has-pattern-30-gradient-background has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Pattern + Atmosphere</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Base backing + Fine Grain → Info text + Spiral Ring System Panel.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-panel-wrapper has-base-background-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|danger"}}}},"textColor":"danger","layout":{"type":"constrained"},"gradient":"pattern-70"} -->
            <div class="wp-block-group is-panel-wrapper has-base-background-color has-danger-color has-text-color has-link-color has-pattern-70-gradient-background has-background"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color","layout":{"type":"constrained"},"gradient":"pattern-120"} -->
                <div class="wp-block-group is-style-system-flat-panel has-tertiary-color-color has-text-color has-link-color has-pattern-120-gradient-background has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">currentColor Layer</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Base backing + Danger-driven Topographic → Tertiary text + Blueprint Flat Panel.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"className":"is-style-equal-heights"} -->
    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-panel-wrapper has-secondary-bg-background-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-color"}}}},"textColor":"secondary-color","layout":{"type":"constrained"},"gradient":"pattern-20"} -->
            <div class="wp-block-group is-panel-wrapper has-secondary-bg-background-color has-secondary-color-color has-text-color has-link-color has-pattern-20-gradient-background has-background"><!-- wp:group {"className":"is-panel-wrapper","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color","layout":{"type":"constrained"},"gradient":"pattern-120"} -->
                <div class="wp-block-group is-panel-wrapper has-tertiary-color-color has-text-color has-link-color has-pattern-120-gradient-background has-background"><!-- wp:group {"className":"is-panel-wrapper","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","layout":{"type":"constrained"},"gradient":"pattern-90"} -->
                    <div class="wp-block-group is-panel-wrapper has-info-color has-text-color has-link-color has-pattern-90-gradient-background has-background"><!-- wp:group {"className":"is-style-system-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"},"gradient":"pattern-30"} -->
                        <div class="wp-block-group is-style-system-panel has-contrast-color has-text-color has-link-color has-pattern-30-gradient-background has-background"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Four-Layer Signal Stack</h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size">Secondary backing + Pattern → Tertiary Blueprint → Info Fine Grain → Contrast Spiral System Panel.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph -->
                            <p>One backing surface carries the composition. Each layer above it contributes transparent pattern paint and a new foreground context without covering the layers beneath.</p>
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

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-panel-wrapper has-tertiary-bg-background-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color","layout":{"type":"constrained"},"gradient":"pattern-200"} -->
            <div class="wp-block-group is-panel-wrapper has-tertiary-bg-background-color has-tertiary-color-color has-text-color has-link-color has-pattern-200-gradient-background has-background"><!-- wp:group {"className":"is-panel-wrapper","style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-cyan-blue"}}}},"textColor":"vivid-cyan-blue","layout":{"type":"constrained"},"gradient":"pattern-70"} -->
                <div class="wp-block-group is-panel-wrapper has-vivid-cyan-blue-color has-text-color has-link-color has-pattern-70-gradient-background has-background"><!-- wp:group {"className":"is-panel-wrapper","style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-purple"}}}},"textColor":"vivid-purple","layout":{"type":"constrained"},"gradient":"pattern-90"} -->
                    <div class="wp-block-group is-panel-wrapper has-vivid-purple-color has-text-color has-link-color has-pattern-90-gradient-background has-background"><!-- wp:group {"className":"is-panel-wrapper","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","layout":{"type":"constrained"},"gradient":"pattern-120"} -->
                        <div class="wp-block-group is-panel-wrapper has-info-color has-text-color has-link-color has-pattern-120-gradient-background has-background"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color","layout":{"type":"constrained"},"gradient":"pattern-30"} -->
                            <div class="wp-block-group is-style-system-flat-panel has-tertiary-color-color has-text-color has-link-color has-pattern-30-gradient-background has-background"><!-- wp:heading {"level":4} -->
                                <h4 class="wp-block-heading">Maximum Layer Stress Test</h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">Tertiary backing + Brickwork / Tertiary text → Topographic / WP Blue text → Fine Grain / WP Purple text → Blueprint / Info text → Spiral Flat Panel / Tertiary text → Fine Grain Footer / Light Green text → Fine Grain inner Group / Amber text → Paragraph / Tertiary text.</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:group {"className":"is-style-system-panel-footer","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-green-cyan"}}}},"textColor":"light-green-cyan","layout":{"type":"constrained"},"gradient":"pattern-90"} -->
                                <div class="wp-block-group is-style-system-panel-footer has-light-green-cyan-color has-text-color has-link-color has-pattern-90-gradient-background has-background"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-amber"}}}},"textColor":"luminous-vivid-amber","layout":{"type":"constrained"},"gradient":"pattern-90"} -->
                                    <div class="wp-block-group has-luminous-vivid-amber-color has-text-color has-link-color has-pattern-90-gradient-background has-background"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color"} -->
                                        <p class="has-tertiary-color-color has-text-color has-link-color">One backing surface carries the stack. Every layer above it contributes transparent pattern paint and a new foreground context without covering the layers beneath.</p>
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
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading">05 — Expressive pattern behavior</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Two controlled tests: Starburst keeps its text treatment unchanged while only the semantic background changes. Spiral Ring keeps the default Flat surface while only the text/currentColor context changes.</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Starburst — background response</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><code>Pattern: --wp--preset--gradient--pattern-10 · Background: --wp--preset--color--{slug}</code></p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel has-primary-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"gradient":"pattern-10"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-primary-background-color has-pattern-10-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Starburst / Primary</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-10</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>primary</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"gradient":"pattern-10"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-secondary-background-color has-pattern-10-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Starburst / Secondary</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-10</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>secondary</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-success-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"gradient":"pattern-10"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-success-background-color has-pattern-10-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Starburst / Success</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-10</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>success</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-info-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"gradient":"pattern-10"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-info-background-color has-pattern-10-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Starburst / Info</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-10</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>info</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-warning-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"gradient":"pattern-10"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-warning-background-color has-pattern-10-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Starburst / Warning</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-10</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>warning</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-danger-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"gradient":"pattern-10"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-danger-background-color has-pattern-10-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Starburst / Danger</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-10</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>danger</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-light-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"gradient":"pattern-10"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-background-color has-pattern-10-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Starburst / Light</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-10</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>light</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-dark-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"gradient":"pattern-10"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-dark-background-color has-pattern-10-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Starburst / Dark</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-10</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>dark</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading">Spiral Ring — text/currentColor response</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><code>Pattern: --wp--preset--gradient--pattern-30 · Text: --wp--preset--color--{slug}</code></p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group"><!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"textColor":"primary","gradient":"pattern-30"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-primary-color has-base-background-color has-text-color has-pattern-30-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Spiral Ring / Primary</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-30</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>primary</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"textColor":"secondary","gradient":"pattern-30"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-secondary-color has-base-background-color has-text-color has-pattern-30-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Spiral Ring / Secondary</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-30</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>secondary</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"textColor":"success","gradient":"pattern-30"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-success-color has-base-background-color has-text-color has-pattern-30-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Spiral Ring / Success</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-30</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>success</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"textColor":"info","gradient":"pattern-30"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-info-color has-base-background-color has-text-color has-pattern-30-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Spiral Ring / Info</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-30</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>info</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"textColor":"warning","gradient":"pattern-30"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-warning-color has-base-background-color has-text-color has-pattern-30-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Spiral Ring / Warning</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-30</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>warning</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"textColor":"danger","gradient":"pattern-30"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-danger-color has-base-background-color has-text-color has-pattern-30-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Spiral Ring / Danger</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-30</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>danger</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"backgroundColor":"base","textColor":"light","gradient":"pattern-30"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-base-background-color has-text-color has-background has-pattern-30-gradient-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Spiral Ring / Light</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-30</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>light</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-base-background-color","style":{"dimensions":{"minHeight":"9rem"},"css":"flex:1 1 calc(25% - var(--wp--preset--spacing--10));min-width:9rem;"},"textColor":"dark","gradient":"pattern-30"} -->
        <div class="wp-block-group is-style-system-flat-panel has-custom-css has-dark-color has-base-background-color has-text-color has-pattern-30-gradient-background has-background" style="min-height:9rem"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Spiral Ring / Dark</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>pattern-30</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>dark</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading">06 — Composition lab</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Cockpit-inspired specimens push the same SystemStrap tokens into layered interfaces: pattern surfaces, generated ladder gradients, semantic status colors, telemetry displays, and nested Flat surfaces. These are compositions, not additional presets.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><code>Color ladders: --wp--preset--color--{slug}-{10…90} · Patterns: --wp--preset--gradient--{slug} · Shadows: --wp--preset--color--{slug}-shadow-rgb</code></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"36rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark);box-shadow:inset 0 0 58px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.12);","spacing":{"blockGap":"var:preset|spacing|20"}},"backgroundColor":"dark","textColor":"light","gradient":"pattern-160"} -->
            <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-pattern-160-gradient-background has-dark-background-color has-text-color has-background" style="min-height:36rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading -->
                        <h2 class="wp-block-heading">Primary Signal</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"30%"} -->
                    <div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.32);text-align:center;"},"borderColor":"primary"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-primary-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">SYSTEM NOMINAL</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:paragraph {"style":{"css":"margin:0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);opacity:.78;"},"textColor":"light","fontSize":"small"} -->
                <p class="has-custom-css has-light-color has-text-color has-small-font-size">dark + pattern-160 + primary ladder</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"12rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 48px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.18);"},"backgroundColor":"dark","textColor":"light","gradient":"pattern-120"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-pattern-120-gradient-background has-dark-background-color has-text-color has-background" style="min-height:12rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.10em;"},"textColor":"light","fontSize":"small"} -->
                    <p class="has-custom-css has-light-color has-text-color has-small-font-size">SIGNAL DISPLAY</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Primary / Vector</h3>
                    <!-- /wp:heading -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">HEADING</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"primary"} -->
                                <p class="has-custom-css has-primary-color has-text-color">270°</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">SIGNAL</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"info"} -->
                                <p class="has-custom-css has-info-color has-text-color">88.4</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">LOCK</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"success"} -->
                                <p class="has-custom-css has-success-color has-text-color">YES</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.32);text-align:center;"},"borderColor":"success"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-success-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">NAV</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.32);text-align:center;"},"borderColor":"primary"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-primary-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">MODE</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-20));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-shadow-rgb),.32);text-align:center;"},"borderColor":"warning"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-warning-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">AUX</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.5rem"},"css":"background:linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-70));box-shadow:0 0 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.28);"},"borderColor":"primary"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-primary-border-color has-custom-css" style="min-height:3.5rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.06em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">PRIMARY 30→70</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.5rem"},"css":"background:linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-70));box-shadow:0 0 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.28);"},"borderColor":"info"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-info-border-color has-custom-css" style="min-height:3.5rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.06em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">INFO 30→70</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:group {"style":{"dimensions":{"minHeight":"3.25rem"},"css":"display:flex;align-items:center;justify-content:center;"},"gradient":"pattern-190"} -->
                <div class="wp-block-group has-custom-css has-pattern-190-gradient-background has-background" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.12em;text-align:center;"},"textColor":"light","fontSize":"small"} -->
                    <p class="has-custom-css has-light-color has-text-color has-small-font-size">SYSTEMSTRAP // COLOR SYSTEM</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"36rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark);box-shadow:inset 0 0 58px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.12);","spacing":{"blockGap":"var:preset|spacing|20"}},"backgroundColor":"dark","textColor":"light","gradient":"pattern-190"} -->
            <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-pattern-190-gradient-background has-dark-background-color has-text-color has-background" style="min-height:36rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading -->
                        <h2 class="wp-block-heading">Success Navigation</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"30%"} -->
                    <div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.32);text-align:center;"},"borderColor":"success"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-success-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">SYSTEM NOMINAL</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:paragraph {"style":{"css":"margin:0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);opacity:.78;"},"textColor":"light","fontSize":"small"} -->
                <p class="has-custom-css has-light-color has-text-color has-small-font-size">dark + pattern-190 + success ladder</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"12rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 48px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.18);"},"backgroundColor":"dark","textColor":"light","gradient":"pattern-41"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-pattern-41-gradient-background has-dark-background-color has-text-color has-background" style="min-height:12rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.10em;"},"textColor":"light","fontSize":"small"} -->
                    <p class="has-custom-css has-light-color has-text-color has-small-font-size">NAVIGATION DISPLAY</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Success / Compass</h3>
                    <!-- /wp:heading -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">COURSE</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"success"} -->
                                <p class="has-custom-css has-success-color has-text-color">122.8</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">RANGE</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"info"} -->
                                <p class="has-custom-css has-info-color has-text-color">18.6</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">SAFE</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"success"} -->
                                <p class="has-custom-css has-success-color has-text-color">100%</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.32);text-align:center;"},"borderColor":"success"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-success-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">LOCK</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.32);text-align:center;"},"borderColor":"info"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-info-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">GUIDE</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-20));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-shadow-rgb),.32);text-align:center;"},"borderColor":"warning"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-warning-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">WARN</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.5rem"},"css":"background:linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-70));box-shadow:0 0 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.28);"},"borderColor":"success"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-success-border-color has-custom-css" style="min-height:3.5rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.06em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">SUCCESS 30→70</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.5rem"},"css":"background:linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-70));box-shadow:0 0 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-shadow-rgb),.28);"},"borderColor":"secondary"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-secondary-border-color has-custom-css" style="min-height:3.5rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.06em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">SECONDARY 30→70</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:group {"style":{"dimensions":{"minHeight":"3.25rem"},"css":"display:flex;align-items:center;justify-content:center;"},"gradient":"pattern-120"} -->
                <div class="wp-block-group has-custom-css has-pattern-120-gradient-background has-background" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.12em;text-align:center;"},"textColor":"light","fontSize":"small"} -->
                    <p class="has-custom-css has-light-color has-text-color has-small-font-size">SYSTEMSTRAP // COLOR SYSTEM</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"36rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark);box-shadow:inset 0 0 58px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-shadow-rgb),.12);","spacing":{"blockGap":"var:preset|spacing|20"}},"backgroundColor":"dark","textColor":"light","gradient":"pattern-50"} -->
            <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-pattern-50-gradient-background has-dark-background-color has-text-color has-background" style="min-height:36rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading -->
                        <h2 class="wp-block-heading">Warning Terrain</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"30%"} -->
                    <div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-shadow-rgb),.32);text-align:center;"},"borderColor":"warning"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-warning-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">SYSTEM NOMINAL</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:paragraph {"style":{"css":"margin:0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);opacity:.78;"},"textColor":"light","fontSize":"small"} -->
                <p class="has-custom-css has-light-color has-text-color has-small-font-size">dark + pattern-50 + warning/danger ladders</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"12rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-10);box-shadow:inset 0 0 52px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-shadow-rgb),.18);"},"backgroundColor":"dark","textColor":"light","gradient":"pattern-50"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-pattern-50-gradient-background has-dark-background-color has-text-color has-background" style="min-height:12rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.10em;"},"textColor":"light","fontSize":"small"} -->
                    <p class="has-custom-css has-light-color has-text-color has-small-font-size">TERRAIN DISPLAY</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Warning / Topography</h3>
                    <!-- /wp:heading -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">DEPTH</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"warning"} -->
                                <p class="has-custom-css has-warning-color has-text-color">2740</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddanger-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">GRADE</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"danger"} -->
                                <p class="has-custom-css has-danger-color has-text-color">21%</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">TRACK</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"info"} -->
                                <p class="has-custom-css has-info-color has-text-color">LOCK</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-shadow-rgb),.32);text-align:center;"},"borderColor":"warning"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-warning-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">TERRAIN</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddanger-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddanger-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddanger-shadow-rgb),.32);text-align:center;"},"borderColor":"danger"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-danger-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">BRAKE</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-20));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsuccess-shadow-rgb),.32);text-align:center;"},"borderColor":"success"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-success-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">SAFE</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.5rem"},"css":"background:linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-70));box-shadow:0 0 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dwarning-shadow-rgb),.28);"},"borderColor":"warning"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-warning-border-color has-custom-css" style="min-height:3.5rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.06em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">WARNING 30→70</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.5rem"},"css":"background:linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddanger-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddanger-70));box-shadow:0 0 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddanger-shadow-rgb),.28);"},"borderColor":"danger"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-danger-border-color has-custom-css" style="min-height:3.5rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.06em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">DANGER 30→70</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:group {"style":{"dimensions":{"minHeight":"3.25rem"},"css":"display:flex;align-items:center;justify-content:center;"},"gradient":"pattern-70"} -->
                <div class="wp-block-group has-custom-css has-pattern-70-gradient-background has-background" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.12em;text-align:center;"},"textColor":"light","fontSize":"small"} -->
                    <p class="has-custom-css has-light-color has-text-color has-small-font-size">SYSTEMSTRAP // COLOR SYSTEM</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"36rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark);box-shadow:inset 0 0 58px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.12);","spacing":{"blockGap":"var:preset|spacing|20"}},"backgroundColor":"dark","textColor":"light","gradient":"pattern-120"} -->
            <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-pattern-120-gradient-background has-dark-background-color has-text-color has-background" style="min-height:36rem"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading -->
                        <h2 class="wp-block-heading">Info Spectrum</h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"30%"} -->
                    <div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.32);text-align:center;"},"borderColor":"info"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-info-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">SYSTEM NOMINAL</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:paragraph {"style":{"css":"margin:0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);opacity:.78;"},"textColor":"light","fontSize":"small"} -->
                <p class="has-custom-css has-light-color has-text-color has-small-font-size">dark + pattern-120 + info/primary ladders</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"12rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 52px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.18);"},"backgroundColor":"dark","textColor":"light","gradient":"pattern-190"} -->
                <div class="wp-block-group is-style-system-flat-panel has-custom-css has-light-color has-pattern-190-gradient-background has-dark-background-color has-text-color has-background" style="min-height:12rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.10em;"},"textColor":"light","fontSize":"small"} -->
                    <p class="has-custom-css has-light-color has-text-color has-small-font-size">SPECTRUM DISPLAY</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Info / Grid</h3>
                    <!-- /wp:heading -->

                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">BAND</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"secondary"} -->
                                <p class="has-custom-css has-secondary-color has-text-color">AUX</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">FREQ</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"info"} -->
                                <p class="has-custom-css has-info-color has-text-color">110.30</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"5rem"},"css":"background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002ddark-20);box-shadow:inset 0 0 24px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.14);"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css" style="min-height:5rem"><!-- wp:paragraph {"style":{"css":"margin:0;opacity:.68;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                                <p class="has-custom-css has-light-color has-text-color has-small-font-size">GAIN</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph {"style":{"css":"margin:.35rem 0 0;font-family:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dmonospace);font-weight:800;"},"textColor":"primary"} -->
                                <p class="has-custom-css has-primary-color has-text-color">72%</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.32);text-align:center;"},"borderColor":"info"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-info-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">COM1</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-70),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-40));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.32);text-align:center;"},"borderColor":"primary"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-primary-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">COM2</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.25rem"},"css":"background:linear-gradient(180deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-20));box-shadow:0 0 14px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-shadow-rgb),.32);text-align:center;"},"borderColor":"secondary"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-secondary-border-color has-custom-css" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.08em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">STBY</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
                <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.5rem"},"css":"background:linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-70));box-shadow:0 0 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dinfo-shadow-rgb),.28);"},"borderColor":"info"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-info-border-color has-custom-css" style="min-height:3.5rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.06em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">INFO 30→70</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"dimensions":{"minHeight":"3.5rem"},"css":"background:linear-gradient(90deg,var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-30),var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-70));box-shadow:0 0 16px rgba(var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary-shadow-rgb),.28);"},"borderColor":"primary"} -->
                        <div class="wp-block-group is-style-system-flat-panel has-border-color has-primary-border-color has-custom-css" style="min-height:3.5rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.06em;"},"textColor":"light","fontSize":"small"} -->
                            <p class="has-custom-css has-light-color has-text-color has-small-font-size">PRIMARY 30→70</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:group {"style":{"dimensions":{"minHeight":"3.25rem"},"css":"display:flex;align-items:center;justify-content:center;"},"gradient":"pattern-160"} -->
                <div class="wp-block-group has-custom-css has-pattern-160-gradient-background has-background" style="min-height:3.25rem"><!-- wp:paragraph {"style":{"css":"margin:0;font-weight:800;letter-spacing:.12em;text-align:center;"},"textColor":"light","fontSize":"small"} -->
                    <p class="has-custom-css has-light-color has-text-color has-small-font-size">SYSTEMSTRAP // COLOR SYSTEM</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:heading -->
    <h2 class="wp-block-heading">Reference notes</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Registry swatches use System Flat so WordPress presets remain the visual source of truth. Generated 10–90 ladder tokens are demonstrated through persistent theme classes on Core Spacer blocks and stay paired with their semantic parent as a single responsive specimen. Composition Lab panels combine only existing preset gradients, semantic colors, generated ladder variables, and their shadow RGB companions. Map Trails placeholders remain intentionally omitted.</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
