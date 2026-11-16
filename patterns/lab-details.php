<?php

/**
 * Title: Details Lab
 * Slug: systemstrap/lab-details
 * Categories: systemstrap, systemstrap-labs
 * Description: A comprehensive SystemStrap Details and Accordion laboratory demonstrating native Details blocks, System and Flat styles, joined accordion geometry, Panel composition, nested content, Equal Heights, semantic states, and application-style disclosure interfaces.
 * Keywords: details, accordion, disclosure, faq, panel, equal heights, nested content, systemstrap, pattern lab
 * Viewport Width: 1200
 * Inserter: yes
 */

?>
<!-- wp:group {"metadata":{"categories":["systemstrap-labs"],"patternName":"systemstrap/lab-details","name":"Details Lab"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Details / Accordion Lab</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Native WordPress Details blocks pushed through SystemStrap structure, joining, semantic paint, nested content, and real interface composition.</p>
    <!-- /wp:paragraph -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical"><!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Details</button><button type="button" role="tab">Styles</button><button type="button" role="tab">Joining</button><button type="button" role="tab">Panels</button><button type="button" role="tab">Content</button><button type="button" role="tab">Behavior</button></div>
        <!-- /wp:tab-list -->

        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Details"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Native Disclosure First</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Core owns disclosure behavior and open state. SystemStrap owns presentation, geometry, joins, color, and composition.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Styles"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">System and Flat Details</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>System Details carries the stronger surfaced treatment. System Flat Details keeps the same structural contract with quieter paint.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Joining"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Joined Accordion Geometry</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Direct sibling Details can join as one accordion. Nested or indirect Details must retain their own shell and must not be falsely joined through editor wrappers.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Panels"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Panel Ownership</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>A Panel can own a disclosure stack, and Details can reveal nested Panels. Direct ownership decides borders, radii, and joins.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Content"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Native Content Inside</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Lists, Buttons, Groups, Panels, and other native blocks remain ordinary content inside the revealed region.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Behavior"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Open, Closed, and Nested States</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Test authored-open state, long summaries, multiple open items, nested Details, focus states, and responsive stacking without replacing native behavior.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->
        </div>
        <!-- /wp:tab-panels -->
    </div>
    <!-- /wp:tabs -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Structure First</h2>
        <!-- /wp:heading -->

        <!-- wp:details -->
        <details class="wp-block-details">
            <summary>What does SystemStrap change here?</summary><!-- wp:paragraph -->
            <p>Presentation only. Native Details behavior stays native.</p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->

        <!-- wp:details {"showContent":true} -->
        <details class="wp-block-details" open>
            <summary>This one starts open</summary><!-- wp:paragraph -->
            <p>Authored open state should survive editor reloads, frontend render, and theme variation changes.</p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">The Basic Pair</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-default"} -->
        <div class="wp-block-columns is-style-default"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">System Details</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:details {"className":"is-style-system-details"} -->
                    <details class="wp-block-details is-style-system-details">
                        <summary>Stronger surfaced treatment</summary><!-- wp:paragraph -->
                        <p>Use this when disclosure should read as a substantial interface element.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:details {"showContent":true,"className":"is-style-system-details"} -->
                    <details class="wp-block-details is-style-system-details" open>
                        <summary>Open state</summary><!-- wp:paragraph -->
                        <p>The revealed content remains part of the same owned shell.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">System Flat Details</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:details {"className":"is-style-system-flat-details"} -->
                    <details class="wp-block-details is-style-system-flat-details">
                        <summary>Quieter disclosure treatment</summary><!-- wp:paragraph -->
                        <p>Useful for documentation, settings, and content-heavy interfaces.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:details {"showContent":true,"className":"is-style-system-flat-details"} -->
                    <details class="wp-block-details is-style-system-flat-details" open>
                        <summary>Open state</summary><!-- wp:paragraph -->
                        <p>Same disclosure contract, flatter presentation.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->
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
        <h2 class="wp-block-heading">Joined Accordion Stack</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Direct sibling Details should read as one joined accordion with only the outer corners exposed.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:details {"className":"is-style-system-details"} -->
            <details class="wp-block-details is-style-system-details">
                <summary>Account profile</summary><!-- wp:paragraph -->
                <p>Name, avatar, biography, contact details, and public profile settings.</p>
                <!-- /wp:paragraph -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"showContent":true,"className":"is-style-system-details"} -->
            <details class="wp-block-details is-style-system-details" open>
                <summary>Notification preferences</summary><!-- wp:list {"style":{"spacing":{"margin":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                <ul style="margin-right:var(--wp--preset--spacing--40);margin-left:var(--wp--preset--spacing--40)" class="wp-block-list"><!-- wp:list-item -->
                    <li>Account activity</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Replies and mentions</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Project updates</li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"className":"is-style-system-details"} -->
            <details class="wp-block-details is-style-system-details">
                <summary>Privacy and visibility</summary><!-- wp:paragraph -->
                <p>Control discovery, activity visibility, and contact permissions.</p>
                <!-- /wp:paragraph -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"className":"is-style-system-details"} -->
            <details class="wp-block-details is-style-system-details">
                <summary>Advanced settings</summary><!-- wp:paragraph -->
                <p>Export data, disconnect integrations, and manage destructive actions.</p>
                <!-- /wp:paragraph -->
            </details>
            <!-- /wp:details -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Direct vs Nested Geometry</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>This is the permanent regression fixture for editor-wrapper false joins. Only true direct children should participate in the direct Panel-to-Details geometry contract.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:details {"className":"is-style-system-flat-details"} -->
                    <details class="wp-block-details is-style-system-flat-details">
                        <summary>Direct child</summary><!-- wp:paragraph -->
                        <p>This may participate in direct Panel-to-Details joining.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:details {"className":"is-style-system-flat-details"} -->
                        <details class="wp-block-details is-style-system-flat-details">
                            <summary>Nested through Group</summary><!-- wp:paragraph -->
                            <p>This must retain its own border and radius.</p>
                            <!-- /wp:paragraph -->
                        </details>
                        <!-- /wp:details -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:details {"className":"is-style-system-flat-details"} -->
                            <details class="wp-block-details is-style-system-flat-details">
                                <summary>Nested through Column</summary><!-- wp:paragraph -->
                                <p>This is the exact geometry that previously exposed editor-only false joining.</p>
                                <!-- /wp:paragraph -->
                            </details>
                            <!-- /wp:details -->
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
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Semantic Disclosure</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:details {"showContent":true,"className":"is-style-system-details","backgroundColor":"success"} -->
                <details class="wp-block-details is-style-system-details has-success-background-color has-background" open>
                    <summary>Success — deployment complete</summary><!-- wp:paragraph -->
                    <p>The release is live and all checks passed.</p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:details {"showContent":true,"className":"is-style-system-details","backgroundColor":"info"} -->
                <details class="wp-block-details is-style-system-details has-info-background-color has-background" open>
                    <summary>Info — review available</summary><!-- wp:paragraph -->
                    <p>New diagnostic information is ready.</p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:details {"showContent":true,"className":"is-style-system-details","backgroundColor":"warning"} -->
                <details class="wp-block-details is-style-system-details has-warning-background-color has-background" open>
                    <summary>Warning — attention needed</summary><!-- wp:paragraph -->
                    <p>One dependency should be reviewed.</p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:details {"showContent":true,"className":"is-style-system-details","backgroundColor":"danger"} -->
                <details class="wp-block-details is-style-system-details has-danger-background-color has-background" open>
                    <summary>Danger — destructive action</summary><!-- wp:paragraph -->
                    <p>This disclosure contains permanent actions.</p>
                    <!-- /wp:paragraph -->
                </details>
                <!-- /wp:details -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Long Summary Stress</h2>
        <!-- /wp:heading -->

        <!-- wp:details {"showContent":true,"className":"is-style-system-flat-details"} -->
        <details class="wp-block-details is-style-system-flat-details" open>
            <summary>This is an intentionally long disclosure summary intended to test wrapping, indicator alignment, multiple lines, responsive widths, and the relationship between summary text and the revealed region beneath it</summary><!-- wp:paragraph -->
            <p>Long labels are normal in documentation, legal text, settings, and workflow interfaces.</p>
            <!-- /wp:paragraph -->
        </details>
        <!-- /wp:details -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Details Containing Panels</h2>
        <!-- /wp:heading -->

        <!-- wp:details {"showContent":true,"className":"is-style-system-details"} -->
        <details class="wp-block-details is-style-system-details" open>
            <summary>Project deployment summary</summary><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Release candidate 1.0.58</h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:list {"className":"is-style-system-list"} -->
                <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                    <li>Theme files packaged</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Pattern registry verified</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Variation contrast checked</li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->

                <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel-footer"><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"success"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-success-background-color has-background wp-element-button">Deploy</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Review Files</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </details>
        <!-- /wp:details -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Panels Containing Details</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading">Knowledge Base</h4>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:details {"className":"is-style-system-flat-details"} -->
            <details class="wp-block-details is-style-system-flat-details">
                <summary>Getting started</summary><!-- wp:paragraph -->
                <p>Installation, configuration, and first-run guidance.</p>
                <!-- /wp:paragraph -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"className":"is-style-system-flat-details"} -->
            <details class="wp-block-details is-style-system-flat-details">
                <summary>Theme variations</summary><!-- wp:paragraph -->
                <p>How palette changes affect authored surfaces and component contracts.</p>
                <!-- /wp:paragraph -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"className":"is-style-system-flat-details"} -->
            <details class="wp-block-details is-style-system-flat-details">
                <summary>Plugin integration</summary><!-- wp:paragraph -->
                <p>BuddyPress and WooCommerce keep behavior while SystemStrap owns presentation integration.</p>
                <!-- /wp:paragraph -->
            </details>
            <!-- /wp:details -->

            <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size">Three documentation sections</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Nested Details</h2>
        <!-- /wp:heading -->

        <!-- wp:details {"showContent":true,"className":"is-style-system-details"} -->
        <details class="wp-block-details is-style-system-details" open>
            <summary>Advanced configuration</summary><!-- wp:paragraph -->
            <p>These settings reveal a second disclosure layer.</p>
            <!-- /wp:paragraph -->

            <!-- wp:details {"className":"is-style-system-flat-details"} -->
            <details class="wp-block-details is-style-system-flat-details">
                <summary>Performance options</summary><!-- wp:list -->
                <ul class="wp-block-list"><!-- wp:list-item -->
                    <li>Asset loading</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Cache behavior</li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li>Responsive boundaries</li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"className":"is-style-system-flat-details"} -->
            <details class="wp-block-details is-style-system-flat-details">
                <summary>Developer options</summary><!-- wp:paragraph -->
                <p>Extension points, helper classes, and documented contracts.</p>
                <!-- /wp:paragraph -->
            </details>
            <!-- /wp:details -->
        </details>
        <!-- /wp:details -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Equal Height Disclosure Cards</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Starter FAQ</h4>
                    <!-- /wp:heading -->

                    <!-- wp:details {"className":"is-style-system-flat-details"} -->
                    <details class="wp-block-details is-style-system-flat-details">
                        <summary>Is setup required?</summary><!-- wp:paragraph -->
                        <p>Only normal theme activation and content composition.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">1 answer</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Developer FAQ</h4>
                    <!-- /wp:heading -->

                    <!-- wp:details {"className":"is-style-system-flat-details"} -->
                    <details class="wp-block-details is-style-system-flat-details">
                        <summary>Can nested components keep their own geometry?</summary><!-- wp:paragraph -->
                        <p>Yes. Nested surfaces own their shell when they are outside a documented direct-child join.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:details {"className":"is-style-system-flat-details"} -->
                    <details class="wp-block-details is-style-system-flat-details">
                        <summary>Does editor wrapping change ownership?</summary><!-- wp:paragraph -->
                        <p>No. Transparent editor wrappers should not create false direct-child classification.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">2 answers</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Operations FAQ</h4>
                    <!-- /wp:heading -->

                    <!-- wp:details {"className":"is-style-system-flat-details"} -->
                    <details class="wp-block-details is-style-system-flat-details">
                        <summary>What should be tested before release?</summary><!-- wp:list -->
                        <ul class="wp-block-list"><!-- wp:list-item -->
                            <li>Theme variations</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Editor/frontend parity</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Responsive geometry</li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Release checklist</p>
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
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">SystemStrap Control Room Accordion</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The final stress composition treats Details as a real application primitive: operational state, runbooks, alerts, controls, and nested surfaces remain native disclosures.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>OPERATIONS // CONTROL ROOM</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Live System Runbook</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                    <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">Healthy</mark></strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:details {"showContent":true,"className":"is-style-system-badge is-style-system-details","style":{"typography":{"letterSpacing":"2px"}}} -->
            <details class="wp-block-details is-style-system-badge is-style-system-details" style="letter-spacing:2px" open>
                <summary><mark style="background-color:#0085BA" class="has-inline-color">01</mark>&nbsp; Runtime Status</summary><!-- wp:group {"style":{"background":{"gradient":"var:preset|gradient|pattern-160"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-contrast-color has-text-color has-link-color"><!-- wp:columns {"className":"is-style-equal-heights"} -->
                    <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>AVAILABILITY</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">99.98%</h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|inset","css":"box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dinset);"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-custom-css has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>ACTIVE JOBS</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">12</h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size"><strong>ALERTS</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">0</h3>
                                <!-- /wp:heading -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"className":"is-style-system-details is-style-system-badge","style":{"typography":{"letterSpacing":"2px"}}} -->
            <details class="wp-block-details is-style-system-details is-style-system-badge" style="letter-spacing:2px">
                <summary><mark style="background-color:#0085BA" class="has-inline-color">02</mark>&nbsp; Deployment runbook</summary><!-- wp:group {"style":{"background":{"gradient":"var:preset|gradient|pattern-160"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-contrast-color has-text-color has-link-color"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:list {"className":"is-style-system-list-flush"} -->
                        <ul class="wp-block-list is-style-system-list-flush"><!-- wp:list-item -->
                            <li>Verify package checksum</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Confirm maintenance window</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Deploy candidate</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Run smoke tests</li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"className":"is-style-system-details is-style-system-badge","style":{"typography":{"letterSpacing":"2px"}}} -->
            <details class="wp-block-details is-style-system-details is-style-system-badge" style="letter-spacing:2px">
                <summary><mark style="background-color:#0085BA" class="has-inline-color">03</mark>&nbsp; Incident controls</summary><!-- wp:group {"style":{"background":{"gradient":"var:preset|gradient|pattern-160"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-contrast-color has-text-color has-link-color"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:paragraph -->
                        <p>Escalate only when the current issue requires operational intervention.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"warning","textColor":"dark","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-dark-color has-warning-background-color has-text-color has-background has-link-color wp-element-button">Maintenance Mode</a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"backgroundColor":"danger","textColor":"light","style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-light-color has-danger-background-color has-text-color has-background has-link-color wp-element-button">Rollback</a></div>
                            <!-- /wp:button -->

                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Open Logs</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </details>
            <!-- /wp:details -->

            <!-- wp:details {"className":"is-style-system-details is-style-system-badge","style":{"typography":{"letterSpacing":"2px"}}} -->
            <details class="wp-block-details is-style-system-details is-style-system-badge" style="letter-spacing:2px">
                <summary><mark style="background-color:#0085BA" class="has-inline-color">04</mark>&nbsp; Post-release review</summary><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"background":{"gradient":"var:preset|gradient|pattern-160"}},"textColor":"contrast","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-contrast-color has-text-color has-link-color"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:paragraph -->
                        <p>Capture regressions, confirm variation behavior, and promote proven compositions into reusable patterns.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </details>
            <!-- /wp:details -->

            <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>Native behavior. SystemStrap presentation. Author-owned content.</strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->