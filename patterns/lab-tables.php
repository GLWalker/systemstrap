<?php

/**
 * Title: Table Lab
 * Slug: systemstrap/lab-tables
 * Categories: systemstrap, systemstrap-labs
 * Description: A comprehensive SystemStrap Table laboratory demonstrating native WordPress tables, registered Table styles, semantic color, Panel composition, comparison matrices, document-style treatments, and responsive data stress.
 * Keywords: table, tables, data, comparison, stripes, semantic, panel, responsive, systemstrap, pattern lab
 * Viewport Width: 1200
 * Inserter: yes
 */

?>

<!-- wp:group {"metadata":{"categories":["systemstrap-labs"],"patternName":"systemstrap/lab-tables","name":"Table Lab"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Table Lab</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Native WordPress Tables pushed through SystemStrap structure, semantic state, Panel composition, comparison, and responsive stress.</p>
    <!-- /wp:paragraph -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical"><!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Tables</button><button type="button" role="tab">Styles</button><button type="button" role="tab">Density</button><button type="button" role="tab">Color</button><button type="button" role="tab">Panels</button><button type="button" role="tab">Responsive</button></div>
        <!-- /wp:tab-list -->

        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Tables"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Native Table Foundation</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Core owns table markup and editing. SystemStrap coordinates borders, surfaces, density, color, and composition.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Styles"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">System and Flat Treatments</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Use stronger surfaced treatments for application data and flatter treatments for documentation and reference tables.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Density"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Compact to Roomy</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Operational and editorial tables need different rhythm while preserving scanability and hierarchy.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Color"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Semantic Cells and Status</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Semantic paint, inline status marks, and links can live inside cells without changing the native Table contract.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Panels"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Panel Composition</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>A Panel can own the application shell while the Table owns rows, headers, footers, and data.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Responsive"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Wide Data Must Survive Narrow Space</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Long labels, many columns, numeric data, links, and actions should remain usable when the viewport narrows.</p>
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

        <!-- wp:table {"hasFixedLayout":false} -->
        <figure class="wp-block-table">
            <table>
                <thead>
                    <tr>
                        <th>Component</th>
                        <th>Owner</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Table markup</td>
                        <td>WordPress Core</td>
                        <td>Native</td>
                    </tr>
                    <tr>
                        <td>Presentation</td>
                        <td>SystemStrap</td>
                        <td>Theme-owned</td>
                    </tr>
                    <tr>
                        <td>Content</td>
                        <td>Author</td>
                        <td>Portable</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <!-- /wp:table -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Basic Table Pair</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">System Panel Table</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-panel"} -->
                    <figure class="wp-block-table is-style-system-panel">
                        <table>
                            <thead>
                                <tr>
                                    <th>Metric</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Availability</td>
                                    <td>99.98%</td>
                                </tr>
                                <tr>
                                    <td>Active jobs</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Alerts</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">System Flat Panel Table</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel"} -->
                    <figure class="wp-block-table is-style-system-flat-panel">
                        <table>
                            <thead>
                                <tr>
                                    <th>Metric</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Availability</td>
                                    <td>99.98%</td>
                                </tr>
                                <tr>
                                    <td>Active jobs</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Alerts</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
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
        <h2 class="wp-block-heading">Semantic Status Table</h2>
        <!-- /wp:heading -->

        <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-panel"} -->
        <figure class="wp-block-table is-style-system-panel">
            <table>
                <thead>
                    <tr>
                        <th>Check</th>
                        <th>Owner</th>
                        <th>Status</th>
                        <th>Next action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Responsive review</td>
                        <td>Design Systems</td>
                        <td>Passed</td>
                        <td>None</td>
                    </tr>
                    <tr>
                        <td>Plugin compatibility</td>
                        <td>Integration</td>
                        <td>Review</td>
                        <td>Verify staging</td>
                    </tr>
                    <tr>
                        <td>Release package</td>
                        <td>Operations</td>
                        <td>Ready</td>
                        <td>Tag build</td>
                    </tr>
                    <tr>
                        <td>Deprecated fixture</td>
                        <td>Docs</td>
                        <td>Remove</td>
                        <td>Archive</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <!-- /wp:table -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Panel-Owned Data Surface</h2>
        <!-- /wp:heading -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Environment Readiness</h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-panel"} -->
            <figure class="wp-block-table is-style-system-panel">
                <table>
                    <thead>
                        <tr>
                            <th>Environment</th>
                            <th>Theme</th>
                            <th>Patterns</th>
                            <th>Plugins</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Production</td>
                            <td>1.0.58</td>
                            <td>52</td>
                            <td>Healthy</td>
                            <td>Ready</td>
                        </tr>
                        <tr>
                            <td>Staging</td>
                            <td>1.0.58</td>
                            <td>52</td>
                            <td>Healthy</td>
                            <td>Ready</td>
                        </tr>
                        <tr>
                            <td>Clean install</td>
                            <td>1.0.58</td>
                            <td>52</td>
                            <td>Healthy</td>
                            <td>Ready</td>
                        </tr>
                    </tbody>
                </table>
            </figure>
            <!-- /wp:table -->

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Matrix</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"success"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-success-background-color has-background wp-element-button">Promote Release</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Comparison Matrix</h2>
        <!-- /wp:heading -->

        <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel"} -->
        <figure class="wp-block-table is-style-system-flat-panel">
            <table>
                <thead>
                    <tr>
                        <th>Capability</th>
                        <th>Starter</th>
                        <th>Professional</th>
                        <th>Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Projects</td>
                        <td>3</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td>Pattern Labs</td>
                        <td>Core set</td>
                        <td>Full library</td>
                        <td>Full library</td>
                    </tr>
                    <tr>
                        <td>Support</td>
                        <td>Community</td>
                        <td>Priority</td>
                        <td>Dedicated</td>
                    </tr>
                    <tr>
                        <td>Deployment tooling</td>
                        <td>—</td>
                        <td>Included</td>
                        <td>Included</td>
                    </tr>
                    <tr>
                        <td>Custom integration</td>
                        <td>—</td>
                        <td>—</td>
                        <td>Included</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Action</td>
                        <td>Start Free</td>
                        <td>Choose Pro</td>
                        <td>Contact Sales</td>
                    </tr>
                </tfoot>
            </table>
        </figure>
        <!-- /wp:table -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Wide Data Stress</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>This table intentionally carries too many columns and long labels to expose wrapping, overflow, and narrow-viewport failures.</p>
        <!-- /wp:paragraph -->

        <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-panel"} -->
        <figure class="wp-block-table is-style-system-panel">
            <table>
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Region</th>
                        <th>Environment</th>
                        <th>Version</th>
                        <th>Requests</th>
                        <th>p50</th>
                        <th>p95</th>
                        <th>Error rate</th>
                        <th>Owner</th>
                        <th>Last deploy</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Public web application</td>
                        <td>US Central</td>
                        <td>Production</td>
                        <td>1.0.58</td>
                        <td>128,442</td>
                        <td>92 ms</td>
                        <td>184 ms</td>
                        <td>0.03%</td>
                        <td>Platform Engineering</td>
                        <td>2026-10-28 18:40</td>
                    </tr>
                    <tr>
                        <td>Community integration layer</td>
                        <td>US East</td>
                        <td>Production</td>
                        <td>14.5.2</td>
                        <td>84,210</td>
                        <td>108 ms</td>
                        <td>212 ms</td>
                        <td>0.05%</td>
                        <td>Integration Systems</td>
                        <td>2026-10-28 18:32</td>
                    </tr>
                    <tr>
                        <td>Commerce presentation layer</td>
                        <td>US Central</td>
                        <td>Staging</td>
                        <td>Current</td>
                        <td>63,005</td>
                        <td>101 ms</td>
                        <td>198 ms</td>
                        <td>0.02%</td>
                        <td>Commerce Systems</td>
                        <td>2026-10-28 17:55</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <!-- /wp:table -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">SystemStrap Operations Matrix</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The final stress fixture combines application framing, numeric data, links, and operational state in one native Table composition.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Release Control Grid</h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-panel"} -->
            <figure class="wp-block-table is-style-system-panel">
                <table>
                    <thead>
                        <tr>
                            <th>Subsystem</th>
                            <th>Signal</th>
                            <th>Current</th>
                            <th>Threshold</th>
                            <th>Trend</th>
                            <th>Status</th>
                            <th>Runbook</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Frontend availability</td>
                            <td>Availability</td>
                            <td>99.98%</td>
                            <td>≥ 99.90%</td>
                            <td>Stable</td>
                            <td>Healthy</td>
                            <td><a href="#">Open</a></td>
                        </tr>
                        <tr>
                            <td>Build pipeline</td>
                            <td>Passing checks</td>
                            <td>48 / 48</td>
                            <td>48 / 48</td>
                            <td>Stable</td>
                            <td>Healthy</td>
                            <td><a href="#">Open</a></td>
                        </tr>
                        <tr>
                            <td>Pattern registry</td>
                            <td>Valid patterns</td>
                            <td>52</td>
                            <td>52</td>
                            <td>Stable</td>
                            <td>Healthy</td>
                            <td><a href="#">Open</a></td>
                        </tr>
                        <tr>
                            <td>Plugin integration</td>
                            <td>Known regressions</td>
                            <td>0</td>
                            <td>0</td>
                            <td>Stable</td>
                            <td>Healthy</td>
                            <td><a href="#">Open</a></td>
                        </tr>
                        <tr>
                            <td>Clean-install portability</td>
                            <td>Portable fixtures</td>
                            <td>Review</td>
                            <td>Pass</td>
                            <td>Improving</td>
                            <td>Attention</td>
                            <td><a href="#">Open</a></td>
                        </tr>
                    </tbody>
                </table>
            </figure>
            <!-- /wp:table -->

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>Native data. SystemStrap presentation. Author-owned decisions.</strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Table Style Registry</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>WordPress supplies the native Regular and Stripes treatments. SystemStrap adds System Panel and System Flat Panel without replacing the Core Table block.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Regular</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-regular"} -->
                    <figure class="wp-block-table is-style-regular">
                        <table>
                            <thead>
                                <tr>
                                    <th>Quarter</th>
                                    <th>Revenue</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Q1</td>
                                    <td>$84k</td>
                                    <td>+6%</td>
                                </tr>
                                <tr>
                                    <td>Q2</td>
                                    <td>$91k</td>
                                    <td>+8%</td>
                                </tr>
                                <tr>
                                    <td>Q3</td>
                                    <td>$97k</td>
                                    <td>+7%</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Stripes</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-stripes"} -->
                    <figure class="wp-block-table is-style-stripes">
                        <table>
                            <thead>
                                <tr>
                                    <th>Quarter</th>
                                    <th>Revenue</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Q1</td>
                                    <td>$84k</td>
                                    <td>+6%</td>
                                </tr>
                                <tr>
                                    <td>Q2</td>
                                    <td>$91k</td>
                                    <td>+8%</td>
                                </tr>
                                <tr>
                                    <td>Q3</td>
                                    <td>$97k</td>
                                    <td>+7%</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">System Panel</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-panel"} -->
                    <figure class="wp-block-table is-style-system-panel">
                        <table>
                            <thead>
                                <tr>
                                    <th>Quarter</th>
                                    <th>Revenue</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Q1</td>
                                    <td>$84k</td>
                                    <td>+6%</td>
                                </tr>
                                <tr>
                                    <td>Q2</td>
                                    <td>$91k</td>
                                    <td>+8%</td>
                                </tr>
                                <tr>
                                    <td>Q3</td>
                                    <td>$97k</td>
                                    <td>+7%</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">System Flat Panel</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel"} -->
                    <figure class="wp-block-table is-style-system-flat-panel">
                        <table>
                            <thead>
                                <tr>
                                    <th>Quarter</th>
                                    <th>Revenue</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Q1</td>
                                    <td>$84k</td>
                                    <td>+6%</td>
                                </tr>
                                <tr>
                                    <td>Q2</td>
                                    <td>$91k</td>
                                    <td>+8%</td>
                                </tr>
                                <tr>
                                    <td>Q3</td>
                                    <td>$97k</td>
                                    <td>+7%</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
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
        <h2 class="wp-block-heading">Word-Style Banded Tables</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Think document editor rather than dashboard: strong heading hierarchy, banded rows, captions, totals, and a restrained outer surface.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color has-background"><!-- wp:table {"className":"is-style-stripes"} -->
                    <figure class="wp-block-table is-style-stripes">
                        <table class="has-fixed-layout">
                            <thead>
                                <tr>
                                    <th>Department</th>
                                    <th>Budget</th>
                                    <th>Actual</th>
                                    <th>Variance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Engineering</td>
                                    <td>$120k</td>
                                    <td>$116k</td>
                                    <td>-$4k</td>
                                </tr>
                                <tr>
                                    <td>Operations</td>
                                    <td>$82k</td>
                                    <td>$79k</td>
                                    <td>-$3k</td>
                                </tr>
                                <tr>
                                    <td>Marketing</td>
                                    <td>$64k</td>
                                    <td>$68k</td>
                                    <td>+$4k</td>
                                </tr>
                                <tr>
                                    <td>Support</td>
                                    <td>$48k</td>
                                    <td>$46k</td>
                                    <td>-$2k</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    <td>$314k</td>
                                    <td>$309k</td>
                                    <td>-$5k</td>
                                </tr>
                            </tfoot>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-tertiary-bg-background-color has-background"><!-- wp:table {"className":"is-style-system-flat-panel"} -->
                    <figure class="wp-block-table is-style-system-flat-panel">
                        <table class="has-fixed-layout">
                            <thead>
                                <tr>
                                    <th>Check</th>
                                    <th>Owner</th>
                                    <th>Result</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Accessibility</td>
                                    <td>Design Systems</td>
                                    <td>Pass</td>
                                </tr>
                                <tr>
                                    <td>Responsive</td>
                                    <td>Frontend</td>
                                    <td>Pass</td>
                                </tr>
                                <tr>
                                    <td>Plugin integration</td>
                                    <td>Integration</td>
                                    <td>Review</td>
                                </tr>
                                <tr>
                                    <td>Clean install</td>
                                    <td>Release</td>
                                    <td>Pass</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
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
        <h2 class="wp-block-heading">Surface Color Context</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The Table owns its authored background or foreground directly through normal block color controls. SystemStrap’s Table styles preserve that author intent while coordinating borders, headers, footers, contrast, and surface treatment across theme variations.</p>

        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">The first row gives each Table an authored semantic surface. The second keeps a Base surface and applies semantic foreground color instead. Together they demonstrate full-surface emphasis and restrained semantic ink without changing the underlying Table block.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Success Context</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel","backgroundColor":"success","fontSize":"small"} -->
                    <figure class="wp-block-table is-style-system-flat-panel has-small-font-size">
                        <table class="has-success-background-color has-background">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Frontend</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td>API</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td>Database</td>
                                    <td>Healthy</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Info Context</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel","backgroundColor":"info","fontSize":"small"} -->
                    <figure class="wp-block-table is-style-system-flat-panel has-small-font-size">
                        <table class="has-info-background-color has-background">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Documents</td>
                                    <td>Updated</td>
                                </tr>
                                <tr>
                                    <td>Patterns</td>
                                    <td>Approved</td>
                                </tr>
                                <tr>
                                    <td>Examples</td>
                                    <td>Current</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Warning Context</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel","backgroundColor":"warning","fontSize":"small"} -->
                    <figure class="wp-block-table is-style-system-flat-panel has-small-font-size">
                        <table class="has-warning-background-color has-background">
                            <thead>
                                <tr>
                                    <th>Dependency</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cache</td>
                                    <td>Review</td>
                                </tr>
                                <tr>
                                    <td>Migration</td>
                                    <td>Verify</td>
                                </tr>
                                <tr>
                                    <td>Release</td>
                                    <td>Hold</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Danger Context</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel","backgroundColor":"danger","fontSize":"small"} -->
                    <figure class="wp-block-table is-style-system-flat-panel has-small-font-size">
                        <table class="has-danger-background-color has-background">
                            <thead>
                                <tr>
                                    <th>Issue</th>
                                    <th>State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Regression</td>
                                    <td>Open</td>
                                </tr>
                                <tr>
                                    <td>Build</td>
                                    <td>Blocked</td>
                                </tr>
                                <tr>
                                    <td>Deploy</td>
                                    <td>Stopped</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Success Text</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|success"}}}},"backgroundColor":"base","textColor":"success","fontSize":"small"} -->
                    <figure class="wp-block-table is-style-system-flat-panel has-small-font-size">
                        <table class="has-success-color has-base-background-color has-text-color has-background has-link-color">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Frontend</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td>API</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td>Database</td>
                                    <td>Healthy</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Info Text</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"backgroundColor":"base","textColor":"info","fontSize":"small"} -->
                    <figure class="wp-block-table is-style-system-flat-panel has-small-font-size">
                        <table class="has-info-color has-base-background-color has-text-color has-background has-link-color">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Documents</td>
                                    <td>Updated</td>
                                </tr>
                                <tr>
                                    <td>Patterns</td>
                                    <td>Approved</td>
                                </tr>
                                <tr>
                                    <td>Examples</td>
                                    <td>Current</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Warning Text</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|warning"}}}},"backgroundColor":"base","textColor":"warning","fontSize":"small"} -->
                    <figure class="wp-block-table is-style-system-flat-panel has-small-font-size">
                        <table class="has-warning-color has-base-background-color has-text-color has-background has-link-color">
                            <thead>
                                <tr>
                                    <th>Dependency</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cache</td>
                                    <td>Review</td>
                                </tr>
                                <tr>
                                    <td>Migration</td>
                                    <td>Verify</td>
                                </tr>
                                <tr>
                                    <td>Release</td>
                                    <td>Hold</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Danger Text</h4>
                    <!-- /wp:heading -->

                    <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|danger"}}}},"backgroundColor":"base","textColor":"danger","fontSize":"small"} -->
                    <figure class="wp-block-table is-style-system-flat-panel has-small-font-size">
                        <table class="has-danger-color has-base-background-color has-text-color has-background has-link-color">
                            <thead>
                                <tr>
                                    <th>Issue</th>
                                    <th>State</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Regression</td>
                                    <td>Open</td>
                                </tr>
                                <tr>
                                    <td>Build</td>
                                    <td>Blocked</td>
                                </tr>
                                <tr>
                                    <td>Deploy</td>
                                    <td>Stopped</td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <!-- /wp:table -->
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
        <h2 class="wp-block-heading">Semantic Status Language</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Until Table gets a documented row-action helper, keep row semantics portable: the row label says what happened, while inline status marks reinforce state without changing native Table serialization.</p>
        <!-- /wp:paragraph -->

        <!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-panel is-style-system-badge"} -->
        <figure class="wp-block-table is-style-system-panel is-style-system-badge">
            <table>
                <thead>
                    <tr>
                        <th>Operation</th>
                        <th>Owner</th>
                        <th>Status</th>
                        <th>Meaning</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Deploy production</td>
                        <td>Release</td>
                        <td><mark style="background-color:#009933" class="has-inline-color has-light-color">Success</mark></td>
                        <td>Completed normally</td>
                    </tr>
                    <tr>
                        <td>Inspect telemetry</td>
                        <td>Operations</td>
                        <td><mark style="background-color:#0693e3" class="has-inline-color has-light-color">Info</mark></td>
                        <td>Additional context available</td>
                    </tr>
                    <tr>
                        <td>Review dependency</td>
                        <td>Integration</td>
                        <td><mark style="background-color:#fcb900" class="has-inline-color has-dark-color">Warning</mark></td>
                        <td>Attention required</td>
                    </tr>
                    <tr>
                        <td>Rollback release</td>
                        <td>Release</td>
                        <td><mark style="background-color:#C1403B" class="has-inline-color has-light-color">Danger</mark></td>
                        <td>Destructive recovery path</td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <!-- /wp:table -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Document Table with Header Band</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A familiar report-table treatment: strong header hierarchy, neutral body rows, a distinct total row, and optional surrounding color context. The Table remains native while Groups, Panels, and structural wrappers can establish the larger document surface around it.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color has-background"><!-- wp:table {"className":"is-style-system-flat-panel"} -->
            <figure class="wp-block-table is-style-system-flat-panel">
                <table class="has-fixed-layout">
                    <thead>
                        <tr>
                            <th>Workstream</th>
                            <th>Owner</th>
                            <th>Budget</th>
                            <th>Actual</th>
                            <th>Variance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Design system</td>
                            <td>Design Systems</td>
                            <td>$48,000</td>
                            <td>$46,500</td>
                            <td>-$1,500</td>
                        </tr>
                        <tr>
                            <td>Frontend integration</td>
                            <td>Platform</td>
                            <td>$72,000</td>
                            <td>$70,800</td>
                            <td>-$1,200</td>
                        </tr>
                        <tr>
                            <td>Plugin compatibility</td>
                            <td>Integration</td>
                            <td>$36,000</td>
                            <td>$38,400</td>
                            <td>+$2,400</td>
                        </tr>
                        <tr>
                            <td>Documentation</td>
                            <td>Docs</td>
                            <td>$24,000</td>
                            <td>$22,900</td>
                            <td>-$1,100</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>Program</strong></td>
                            <td><strong>$180,000</strong></td>
                            <td><strong>$178,600</strong></td>
                            <td><strong>-$1,400</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </figure>
            <!-- /wp:table -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">The first example places a native Table inside a surfaced Flat Panel. The second reverses the ownership test: an Info-colored Panel Wrapper establishes the surrounding surface while the nested System Flat Panel Table retains its own table presentation.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-panel-wrapper has-info-background-color","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-panel-wrapper has-info-background-color"><!-- wp:table {"hasFixedLayout":false,"className":"is-style-system-flat-panel"} -->
            <figure class="wp-block-table is-style-system-flat-panel">
                <table>
                    <thead>
                        <tr>
                            <th>Department</th>
                            <th>Target</th>
                            <th>Actual</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Engineering</td>
                            <td>48</td>
                            <td>48</td>
                            <td>Complete</td>
                        </tr>
                        <tr>
                            <td>Operations</td>
                            <td>12</td>
                            <td>11</td>
                            <td>Review</td>
                        </tr>
                        <tr>
                            <td>Documentation</td>
                            <td>24</td>
                            <td>24</td>
                            <td>Complete</td>
                        </tr>
                        <tr>
                            <td>Integration</td>
                            <td>16</td>
                            <td>15</td>
                            <td>Review</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>100</strong></td>
                            <td><strong>98</strong></td>
                            <td><strong>98%</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </figure>
            <!-- /wp:table -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->