<?php

/**
 * Title: Button Lab
 * Slug: systemstrap/lab-buttons
 * Categories: systemstrap, systemstrap-labs
 * Description: A comprehensive SystemStrap Button laboratory demonstrating native WordPress Buttons, fills, outlines, pills, semantic accents, gradients, typography scales, widths, alignment, grouped controls, Equal Heights, and application-style action surfaces.
 * Keywords: button, buttons, outline, pill, semantic, gradient, alignment, width, equal heights, systemstrap, pattern lab
 * Viewport Width: 1200
 * Inserter: yes
 */

?>
<!-- wp:group {"metadata":{"categories":["systemstrap-labs"],"patternName":"systemstrap/lab-buttons","name":"Button Lab"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Button Lab</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Native WordPress Buttons pushed through the SystemStrap design language: shape, hierarchy, semantic color, gradients, sizing, alignment, grouped controls, and real interface composition.</p>
    <!-- /wp:paragraph -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical"><!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Buttons</button><button type="button" role="tab">Color</button><button type="button" role="tab">Size</button><button type="button" role="tab">Align</button><button type="button" role="tab">Width</button><button type="button" role="tab">Groups</button></div>
        <!-- /wp:tab-list -->

        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Buttons"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Native Button Foundation</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>SystemStrap starts with native Button and Buttons blocks. Labels, links, widths, typography, colors, borders, gradients, and alignment remain normal editor choices; the theme coordinates presentation rather than replacing Core.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Color"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Color and Intent</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Buttons can own explicit semantic backgrounds, foregrounds, borders, and gradients. Color can reinforce meaning, but labels still carry the actual action. Stress every authored combination across light and dark variations.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Size"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Typography Is Part of the Control</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Font-size controls can move a Button from tiny utility action to oversized call to action without creating a new component. The control should remain stable at every scale.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Align"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">The Parent Owns Arrangement</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>The Buttons parent owns wrapping, justification, and orientation. Individual Buttons own their style, paint, label, and width. Keep container layout separate from child presentation.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Width"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Content Width to Full Width</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Native width controls work for card footers, mobile actions, pricing controls, toolbars, and stacked interfaces. Width is an authored layout decision, not another Button style.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Groups"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Compose Controls</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Buttons become command bars, decision rows, card footers, vertical rails, pricing actions, and workspace controls through ordinary Groups, Columns, Panels, and Equal Heights.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->
        </div>
        <!-- /wp:tab-panels -->
    </div>
    <!-- /wp:tabs -->

    <!-- wp:paragraph -->
    <p>Everything below is native block content. The examples intentionally range from boring to ridiculous so the Button system gets tested as both interface primitive and expressive design material.</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Structure First</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The baseline: one Buttons container, ordinary Button children, no proprietary markup.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Primary Action</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Secondary Action</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link wp-element-button">Pill Action</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"},"anchor":"buttons"} -->
    <div id="buttons" class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Style Variations</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The first row uses the semantic colors supplied by the active style variation. Duplicate the row to test SystemStrap button styles without rebuilding the content.</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Fill</h5>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#buttons">Primary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"secondary"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#buttons">Secondary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"success"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-success-background-color has-background wp-element-button" href="#buttons">Success</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"info"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-info-background-color has-background wp-element-button" href="#buttons">Info</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"warning"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-warning-background-color has-background wp-element-button" href="#buttons">Warning</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"danger"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-danger-background-color has-background wp-element-button" href="#buttons">Danger</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"light"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-light-background-color has-background wp-element-button" href="#buttons">Light</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"dark"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-dark-background-color has-background wp-element-button" href="#buttons">Dark</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Outline</h5>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#buttons">Primary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"secondary","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#buttons">Secondary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"success","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-success-background-color has-background wp-element-button" href="#buttons">Success</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"info","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-info-background-color has-background wp-element-button" href="#buttons">Info</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"warning","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-warning-background-color has-background wp-element-button" href="#buttons">Warning</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"danger","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-danger-background-color has-background wp-element-button" href="#buttons">Danger</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"light","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-light-background-color has-background wp-element-button" href="#buttons">Light</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"dark","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-dark-background-color has-background wp-element-button" href="#buttons">Dark</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Pill</h5>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#buttons">Primary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#buttons">Secondary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"success","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-success-background-color has-background wp-element-button" href="#buttons">Success</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"info","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-info-background-color has-background wp-element-button" href="#buttons">Info</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"warning","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-warning-background-color has-background wp-element-button" href="#buttons">Warning</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"danger","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-danger-background-color has-background wp-element-button" href="#buttons">Danger</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"light","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-light-background-color has-background wp-element-button" href="#buttons">Light</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"dark","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-dark-background-color has-background wp-element-button" href="#buttons">Dark</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Pill Outline</h5>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-pill-outline"} -->
            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#buttons">Primary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-pill-outline"} -->
            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#buttons">Secondary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"success","className":"is-style-button-pill-outline"} -->
            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-success-background-color has-background wp-element-button" href="#buttons">Success</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"info","className":"is-style-button-pill-outline"} -->
            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-info-background-color has-background wp-element-button" href="#buttons">Info</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"warning","className":"is-style-button-pill-outline"} -->
            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-warning-background-color has-background wp-element-button" href="#buttons">Warning</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"danger","className":"is-style-button-pill-outline"} -->
            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-danger-background-color has-background wp-element-button" href="#buttons">Danger</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"light","className":"is-style-button-pill-outline"} -->
            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-light-background-color has-background wp-element-button" href="#buttons">Light</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"dark","className":"is-style-button-pill-outline"} -->
            <div class="wp-block-button is-style-button-pill-outline"><a class="wp-block-button__link has-dark-background-color has-background wp-element-button" href="#buttons">Dark</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Square</h5>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-square"} -->
            <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#buttons">Primary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-square"} -->
            <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#buttons">Secondary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"success","className":"is-style-button-square"} -->
            <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-success-background-color has-background wp-element-button" href="#buttons">Success</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"info","className":"is-style-button-square"} -->
            <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-info-background-color has-background wp-element-button" href="#buttons">Info</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"warning","className":"is-style-button-square"} -->
            <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-warning-background-color has-background wp-element-button" href="#buttons">Warning</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"danger","className":"is-style-button-square"} -->
            <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-danger-background-color has-background wp-element-button" href="#buttons">Danger</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"light","className":"is-style-button-square"} -->
            <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-light-background-color has-background wp-element-button" href="#buttons">Light</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"dark","className":"is-style-button-square"} -->
            <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-dark-background-color has-background wp-element-button" href="#buttons">Dark</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Square Outline</h5>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","className":"is-style-button-square-outline"} -->
            <div class="wp-block-button is-style-button-square-outline"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" href="#buttons">Primary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-square-outline"} -->
            <div class="wp-block-button is-style-button-square-outline"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="#buttons">Secondary</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"success","className":"is-style-button-square-outline"} -->
            <div class="wp-block-button is-style-button-square-outline"><a class="wp-block-button__link has-success-background-color has-background wp-element-button" href="#buttons">Success</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"info","className":"is-style-button-square-outline"} -->
            <div class="wp-block-button is-style-button-square-outline"><a class="wp-block-button__link has-info-background-color has-background wp-element-button" href="#buttons">Info</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"warning","className":"is-style-button-square-outline"} -->
            <div class="wp-block-button is-style-button-square-outline"><a class="wp-block-button__link has-warning-background-color has-background wp-element-button" href="#buttons">Warning</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"danger","className":"is-style-button-square-outline"} -->
            <div class="wp-block-button is-style-button-square-outline"><a class="wp-block-button__link has-danger-background-color has-background wp-element-button" href="#buttons">Danger</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"light","className":"is-style-button-square-outline"} -->
            <div class="wp-block-button is-style-button-square-outline"><a class="wp-block-button__link has-light-background-color has-background wp-element-button" href="#buttons">Light</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"dark","className":"is-style-button-square-outline"} -->
            <div class="wp-block-button is-style-button-square-outline"><a class="wp-block-button__link has-dark-background-color has-background wp-element-button" href="#buttons">Dark</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- wp:heading {"level":5} -->
        <h5 class="wp-block-heading">Link</h5>
        <!-- /wp:heading -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-link"} -->
            <div class="wp-block-button is-style-button-link"><a class="wp-block-button__link wp-element-button">Link Button</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Core Shapes</h2>
        <!-- /wp:heading -->

        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Filled</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Strong default action.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Continue</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Outline</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Visible without dominating.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Continue</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Pill</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Compact and expressive.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill"} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link wp-element-button">Continue</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Semantic Action Spectrum</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Semantic presets can reinforce action intent while the label remains the primary signal.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Success</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"success","textColor":"light","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-light-color has-success-background-color has-text-color has-background has-link-color wp-element-button">Publish</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"textColor":"success","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|success"}}}},"borderColor":"success"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-success-color has-text-color has-link-color has-border-color has-success-border-color wp-element-button">Approve</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Info</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"info"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-info-background-color has-background wp-element-button">Inspect</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"textColor":"info","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"borderColor":"info"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-info-color has-text-color has-link-color has-border-color has-info-border-color wp-element-button">Details</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Warning</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"warning","textColor":"dark","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-dark-color has-warning-background-color has-text-color has-background has-link-color wp-element-button">Review</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"textColor":"warning","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|warning"}}}},"borderColor":"warning"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-warning-color has-text-color has-link-color has-border-color has-warning-border-color wp-element-button">Defer</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Danger</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"danger","textColor":"light","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-light-color has-danger-background-color has-text-color has-background has-link-color wp-element-button">Delete</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"textColor":"danger","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|danger"}}}},"borderColor":"danger"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-danger-color has-text-color has-link-color has-border-color has-danger-border-color wp-element-button">Cancel</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Accent Gradient Arsenal</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Preset gradients turn ordinary Buttons into loud accent controls without changing the underlying block model.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"gradient":"accent-10","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-10-gradient-background has-background wp-element-button">Primary Flux</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"gradient":"accent-30","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-30-gradient-background has-background wp-element-button">Secondary Shift</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"gradient":"accent-50","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-50-gradient-background has-background wp-element-button">Success Wave</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"gradient":"accent-70","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-70-gradient-background has-background wp-element-button">Info Pulse</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"gradient":"accent-90","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-90-gradient-background has-background wp-element-button">Warning Burn</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"gradient":"accent-110","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-110-gradient-background has-background wp-element-button">Danger Arc</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"gradient":"accent-130","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-130-gradient-background has-background wp-element-button">Light Beam</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"gradient":"accent-150","className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-150-gradient-background has-background wp-element-button">Dark Matter</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Type Scale</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Same control, different typography. Scale changes hierarchy without changing semantics.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:buttons {"fontSize":"x-small"} -->
            <div class="wp-block-buttons has-custom-font-size has-x-small-font-size"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">X-Small Utility</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:buttons {"fontSize":"small"} -->
            <div class="wp-block-buttons has-custom-font-size has-small-font-size"><!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Small Compact</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:buttons {"fontSize":"medium"} -->
            <div class="wp-block-buttons has-custom-font-size has-medium-font-size"><!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Medium Standard</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:buttons {"fontSize":"large"} -->
            <div class="wp-block-buttons has-custom-font-size has-large-font-size"><!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Large Prominent</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:buttons {"fontSize":"x-large"} -->
            <div class="wp-block-buttons has-custom-font-size has-x-large-font-size"><!-- wp:button {"className":"is-style-button-pill"} -->
                <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link wp-element-button">X-Large CTA</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Alignment Matrix</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Left</h5>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Left</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Pair</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Center</h5>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Center</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Pair</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Right</h5>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Right</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Pair</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Vertical Action Rails</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Buttons become stacked workspace controls without leaving the native block model.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Workspace</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Overview</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Activity</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Members</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Settings</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Deployment</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"success","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-success-background-color has-background wp-element-button">Deploy</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"warning","textColor":"dark","style":{"dimensions":{"width":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-dark-color has-warning-background-color has-text-color has-background has-link-color wp-element-button">Pause</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"danger","textColor":"light","style":{"dimensions":{"width":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-light-color has-danger-background-color has-text-color has-background has-link-color wp-element-button">Rollback</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Width Lab</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Percentage widths turn native Buttons into card actions, mobile controls, and deliberate visual anchors.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"has-custom-width wp-block-button__width-25","style":{"dimensions":{"width":"25%"}}} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-25"><a class="wp-block-button__link wp-element-button">25%</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"has-custom-width wp-block-button__width-50 is-style-outline","style":{"dimensions":{"width":"50%"}}} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link wp-element-button">50%</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"has-custom-width wp-block-button__width-75 is-style-button-pill","style":{"dimensions":{"width":"75%"}}} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-75 is-style-button-pill"><a class="wp-block-button__link wp-element-button">75%</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"primary","className":"has-custom-width wp-block-button__width-100","style":{"dimensions":{"width":"100%"}}} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button">100% Full Width</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Geometry Stress</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Short labels, long labels, punctuation, version numbers, and state language should all remain stable.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Go</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Save &amp; Continue</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-button-pill"} -->
            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link wp-element-button">v1.0.58</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"success"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-success-background-color has-background wp-element-button">✓ Approved</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"warning","textColor":"dark","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-dark-color has-warning-background-color has-text-color has-background has-link-color wp-element-button">! Needs Review</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"backgroundColor":"danger","textColor":"light","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-light-color has-danger-background-color has-text-color has-background has-link-color wp-element-button">× Remove Permanently</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"textColor":"info","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"borderColor":"info"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-info-color has-text-color has-link-color has-border-color has-info-border-color wp-element-button">→ Open Documentation</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Equal Height Action Cards</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Equal Heights belongs to the Columns parent. Direct Panel Footers can pin Button actions to a common baseline even when card copy varies.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Starter</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>A minimal card with a short description.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:buttons -->
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

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Professional</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>More copy deliberately creates a taller content region while the action still aligns with its siblings.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list -->
                    <ul class="wp-block-list"><!-- wp:list-item -->
                        <li>Unlimited projects</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Priority support</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"gradient":"accent-110","style":{"dimensions":{"width":"100%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-accent-110-gradient-background has-background wp-element-button">Choose Pro</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Enterprise</h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Flat treatment, same structural contract, different visual intensity.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"info","style":{"dimensions":{"width":"100%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-info-background-color has-background wp-element-button">Contact Sales</a></div>
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

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Stacked Button Columns</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A Flat Panel can carry several vertical Button rails at once. Columns own the side-by-side layout, each Buttons block owns its stack, and Equal Heights keeps the sibling control zones aligned.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:columns {"className":"is-style-default"} -->
            <div class="wp-block-columns is-style-default"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Workspace</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Overview</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Activity</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Members</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Settings</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Release</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"success","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-success-background-color has-background wp-element-button">Deploy</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"info","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-info-background-color has-background wp-element-button">Inspect</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"warning","textColor":"dark","style":{"dimensions":{"width":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-dark-color has-warning-background-color has-text-color has-background has-link-color wp-element-button">Pause</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"danger","textColor":"light","style":{"dimensions":{"width":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-light-color has-danger-background-color has-text-color has-background has-link-color wp-element-button">Rollback</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Utilities</h4>
                    <!-- /wp:heading -->

                    <!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-pill","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link wp-element-button">Documentation</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-button-pill","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link wp-element-button">Patterns</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">System Status</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Support</a></div>
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

    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Navigation Dropdown Buttons</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>System Nav Button belongs in the Button Lab because it tests button-shaped navigation without turning Navigation into Button markup. Each specimen contains a native submenu so dropdown geometry, semantic backgrounds, hover, focus, and submenu ownership can be exercised together.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center","orientation":"horizontal"}} -->
            <div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","orientation":"horizontal"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->

                <!-- wp:navigation {"backgroundColor":"secondary","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->

                <!-- wp:navigation {"backgroundColor":"success","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:navigation {"backgroundColor":"info","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->

                <!-- wp:navigation {"backgroundColor":"warning","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->

                <!-- wp:navigation {"backgroundColor":"danger","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:navigation {"backgroundColor":"light","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->

                <!-- wp:navigation {"backgroundColor":"dark","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->

                <!-- wp:navigation {"textColor":"current","backgroundColor":"transparent","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                <!-- wp:navigation-submenu {"label":"Button Dropdown","url":"#buttons","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Primary action","url":"#buttons","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Media examples","url":"#media","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Widget examples","url":"#widgets","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Back to top","url":"#overview","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Decision Surface</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A destructive-action composition where hierarchy comes from label, order, and semantic color.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Delete project?</h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p>This will permanently remove the project and its configuration. Export anything you need before continuing.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Cancel</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"warning","textColor":"dark","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-dark-color has-warning-background-color has-text-color has-background has-link-color wp-element-button">Export First</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"danger","textColor":"light","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-light-color has-danger-background-color has-text-color has-background has-link-color wp-element-button">Delete Permanently</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Command Deck</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A dense application surface combining utility, primary, semantic, pill, outline, vertical, and full-width actions.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>WORKSPACE // COMMAND DECK</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Release Controls</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons {"fontSize":"small"} -->
                    <div class="wp-block-buttons has-custom-font-size has-small-font-size"><!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Docs</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-button-pill"} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link wp-element-button">Settings</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>CURRENT RELEASE</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">1.0.58</h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>All checks passed. Candidate is ready for deployment.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"success","style":{"dimensions":{"width":"100%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-success-background-color has-background wp-element-button">Deploy Release</a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"className":"is-style-outline","style":{"dimensions":{"width":"100%"}}} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Checklist</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>OPERATIONS</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Live controls</h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Fast actions for active maintenance and rollback scenarios.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"warning","textColor":"dark","className":"is-style-button-pill","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}}} -->
                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-dark-color has-warning-background-color has-text-color has-background has-link-color wp-element-button">Maintenance</a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"danger","textColor":"light","className":"is-style-button-pill","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                            <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-light-color has-danger-background-color has-text-color has-background has-link-color wp-element-button">Rollback</a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"textColor":"info","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"borderColor":"info"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-info-color has-text-color has-link-color has-border-color has-info-border-color wp-element-button">Logs</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">← Previous Release</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"gradient":"accent-70"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-accent-70-gradient-background has-background wp-element-button">Open Release Console →</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->