<?php

/**
 * Title: Navigation Lab
 * Slug: systemstrap/lab-navigation
 * Categories: systemstrap, systemstrap-labs
 * Description: SystemStrap Navigation laboratory covering native navigation, System Nav Button, System Nav Gen, horizontal and vertical layouts, submenus, responsive overlays, semantic surfaces, and application navigation shells.
 * Keywords: navigation, menu, submenu, dropdown, vertical navigation, horizontal navigation, systemstrap, pattern lab
 * Viewport Width: 1440
 * Inserter: yes
 */
?>

<!-- wp:group {"metadata":{"categories":["systemstrap-labs"],"patternName":"systemstrap/lab-navigation","name":"Navigation Lab"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Navigation Lab</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>Native WordPress Navigation pushed through SystemStrap horizontal and vertical treatments, dropdowns, semantic surfaces, Panels, responsive behavior, and application-style navigation architecture.</p>
    <!-- /wp:paragraph -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical"><!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Navigation</button><button type="button" role="tab">Styles</button><button type="button" role="tab">Horizontal</button><button type="button" role="tab">Vertical</button><button type="button" role="tab">Dropdowns</button><button type="button" role="tab">Responsive</button></div>
        <!-- /wp:tab-list -->

        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Navigation"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Core Owns Navigation Behavior</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>WordPress owns links, submenus, responsive containers, and overlay behavior. SystemStrap styles those native structures without replacing the Navigation block.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Styles"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Two System Treatments</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>System Nav Button behaves like grouped controls. System Nav Gen behaves like joined navigation chrome with zero-gap structure and dedicated submenu presentation.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Horizontal"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Primary and Context Navigation</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Horizontal Navigation fits site headers, local section navigation, compact control rows, and contextual navigation.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Vertical"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Sidebars and Workspaces</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Both System treatments can run vertically for settings, dashboards, documentation sidebars, and workspace rails.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Dropdowns"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Submenus Stay Native</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Navigation Submenu remains a Core child. SystemStrap coordinates the toggle, dropdown surface, item geometry, and focus treatment around it.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Responsive"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Desktop and Overlay Are One Navigation</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>The same Navigation block can wrap, stack, or enter its responsive overlay according to native block settings.</p>
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

        <!-- wp:paragraph -->
        <p>Plain Core Navigation establishes the baseline before SystemStrap styles are applied.</p>
        <!-- /wp:paragraph -->

        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
        <!-- wp:navigation-link {"label":"Home","url":"#home","kind":"custom"} /-->

        <!-- wp:navigation-link {"label":"Patterns","url":"#patterns","kind":"custom"} /-->

        <!-- wp:navigation-link {"label":"Components","url":"#components","kind":"custom"} /-->

        <!-- wp:navigation-link {"label":"Docs","url":"#docs","kind":"custom"} /-->
        <!-- /wp:navigation -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Horizontal Style Pair</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">System Nav Button</h4>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"ref":6701,"overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap","justifyContent":"center"}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">System Nav Gen</h4>
                    <!-- /wp:heading -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"}}},"backgroundColor":"tertiary-bg","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                    <div class="wp-block-group has-tertiary-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0)"><!-- wp:navigation {"overlayMenu":"never","className":"is-style-system-nav-gen","layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap","justifyContent":"center"}} -->
                        <!-- wp:navigation-link {"label":"Overview","url":"#overview","kind":"custom"} /-->

                        <!-- wp:navigation-link {"label":"Features","url":"#features","kind":"custom"} /-->

                        <!-- wp:navigation-link {"label":"Pricing","url":"#pricing","kind":"custom"} /-->

                        <!-- wp:navigation-link {"label":"Support","url":"#support","kind":"custom"} /-->
                        <!-- /wp:navigation -->
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
        <h2 class="wp-block-heading">Semantic Horizontal Navigation</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Authored backgrounds can establish semantic context without changing the Navigation treatment.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:navigation {"backgroundColor":"success","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
                <!-- wp:navigation-link {"label":"Deploy","url":"#deploy","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Checks","url":"#checks","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"History","url":"#history","kind":"custom"} /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:navigation {"backgroundColor":"info","overlayMenu":"never","className":"is-style-system-nav-gen","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
                <!-- wp:navigation-link {"label":"Overview","url":"#overview","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Docs","url":"#docs","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Examples","url":"#examples","kind":"custom"} /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Dropdown Lab</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Button Dropdown</h4>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                    <!-- wp:navigation-submenu {"label":"Workspace","url":"#workspace","kind":"custom"} -->
                    <!-- wp:navigation-link {"label":"Dashboard","url":"#dashboard","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Projects","url":"#projects","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Members","url":"#members","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Settings","url":"#settings","kind":"custom"} /-->
                    <!-- /wp:navigation-submenu -->

                    <!-- wp:navigation-link {"label":"Activity","url":"#activity","kind":"custom"} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Nav Gen Dropdown</h4>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"overlayMenu":"never","className":"is-style-system-nav-gen","layout":{"type":"flex","justifyContent":"left"}} -->
                    <!-- wp:navigation-submenu {"label":"Resources","url":"#resources","kind":"custom"} -->
                    <!-- wp:navigation-link {"label":"Documentation","url":"#documentation","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Examples","url":"#examples","kind":"custom"} /-->

                    <!-- wp:navigation-submenu {"label":"Reference","url":"#reference","kind":"custom"} -->
                    <!-- wp:navigation-link {"label":"Tokens","url":"#tokens","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Contracts","url":"#contracts","kind":"custom"} /-->
                    <!-- /wp:navigation-submenu -->
                    <!-- /wp:navigation-submenu -->

                    <!-- wp:navigation-link {"label":"Support","url":"#support","kind":"custom"} /-->
                    <!-- /wp:navigation -->
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
        <h2 class="wp-block-heading">Vertical Workspace Rails</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column {"width":"32%"} -->
            <div class="wp-block-column" style="flex-basis:32%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Button Workspace</h4>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                    <!-- wp:navigation-link {"label":"Overview","url":"#overview","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Activity","url":"#activity","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Members","url":"#members","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Files","url":"#files","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Settings","url":"#settings","kind":"custom"} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"secondary-bg","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color has-background"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Workspace Content</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>A vertical control rail can sit beside any ordinary block composition. Navigation owns destinations; the neighboring Panel owns content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"is-style-system-list"} -->
                    <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                        <li>Independent navigation surface</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Normal responsive Columns behavior</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>No special application markup required</li>
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

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Vertical Nav Gen Documentation</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column {"width":"32%"} -->
            <div class="wp-block-column" style="flex-basis:32%"><!-- wp:navigation {"overlayMenu":"never","className":"is-style-system-nav-gen","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                <!-- wp:navigation-link {"label":"Start Here","url":"#start","kind":"custom"} /-->

                <!-- wp:navigation-submenu {"label":"Concepts","url":"#concepts","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Surface Ownership","url":"#surface-ownership","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Contrast","url":"#contrast","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Geometry","url":"#geometry","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->

                <!-- wp:navigation-submenu {"label":"Components","url":"#components","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Panels","url":"#panels","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Lists","url":"#lists","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Tabs","url":"#tabs","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->

                <!-- wp:navigation-link {"label":"Troubleshooting","url":"#troubleshooting","kind":"custom"} /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Documentation Surface</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Joined vertical navigation reads more like a documentation tree or settings rail than a stack of independent buttons.</p>
                    <!-- /wp:paragraph -->
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
        <h2 class="wp-block-heading">Responsive Overlay</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>These examples deliberately allow the native responsive menu. Resize the viewport to exercise the same Navigation block in desktop and overlay modes.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Nav Button Overlay</h4>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"className":"is-style-system-nav-button","layout":{"type":"flex","justifyContent":"left"}} -->
                    <!-- wp:navigation-link {"label":"Home","url":"#home","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Patterns","url":"#patterns","kind":"custom"} /-->

                    <!-- wp:navigation-submenu {"label":"More","url":"#more","kind":"custom"} -->
                    <!-- wp:navigation-link {"label":"Components","url":"#components","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Docs","url":"#docs","kind":"custom"} /-->
                    <!-- /wp:navigation-submenu -->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Nav Gen Overlay</h4>
                    <!-- /wp:heading -->

                    <!-- wp:navigation {"className":"is-style-system-nav-gen","layout":{"type":"flex","justifyContent":"left"}} -->
                    <!-- wp:navigation-link {"label":"Home","url":"#home","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Patterns","url":"#patterns","kind":"custom"} /-->

                    <!-- wp:navigation-submenu {"label":"More","url":"#more","kind":"custom"} -->
                    <!-- wp:navigation-link {"label":"Components","url":"#components","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Docs","url":"#docs","kind":"custom"} /-->
                    <!-- /wp:navigation-submenu -->
                    <!-- /wp:navigation -->
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
        <h2 class="wp-block-heading">SystemStrap Navigation Command Center</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The final fixture combines primary navigation, a vertical workspace rail, nested destinations, semantic actions, and a content Panel while keeping every destination inside native Navigation blocks.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>NAVIGATION // COMMAND CENTER</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Application Shell</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                    <p class="is-style-system-badge"><mark style="background-color:#009933" class="has-inline-color has-light-color">Online</mark></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation {"className":"is-style-system-nav-gen","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
                <!-- wp:navigation-link {"label":"Dashboard","url":"#dashboard","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Projects","url":"#projects","kind":"custom"} /-->

                <!-- wp:navigation-submenu {"label":"Operations","url":"#operations","kind":"custom"} -->
                <!-- wp:navigation-link {"label":"Deployments","url":"#deployments","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Monitoring","url":"#monitoring","kind":"custom"} /-->

                <!-- wp:navigation-link {"label":"Incidents","url":"#incidents","kind":"custom"} /-->
                <!-- /wp:navigation-submenu -->

                <!-- wp:navigation-link {"label":"Docs","url":"#docs","kind":"custom"} /-->
                <!-- /wp:navigation -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights"><!-- wp:column {"width":"28%"} -->
                <div class="wp-block-column" style="flex-basis:28%"><!-- wp:navigation {"backgroundColor":"secondary","overlayMenu":"never","className":"is-style-system-nav-button","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
                    <!-- wp:navigation-link {"label":"Overview","url":"#overview","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Activity","url":"#activity","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Members","url":"#members","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Integrations","url":"#integrations","kind":"custom"} /-->

                    <!-- wp:navigation-link {"label":"Settings","url":"#settings","kind":"custom"} /-->
                    <!-- /wp:navigation -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Workspace Overview</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>The top rail handles global destinations. The left rail handles local workspace destinations. The content surface remains independent from both navigation systems.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:columns {"className":"is-style-equal-heights"} -->
                        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                                    <h4 class="wp-block-heading">Primary</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p>Global application navigation.</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                                    <h4 class="wp-block-heading">Context</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p>Workspace-specific navigation.</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                                    <h4 class="wp-block-heading">Content</h4>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph -->
                                    <p>Independent application surface.</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
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

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>Native links. Native submenus. SystemStrap presentation.</strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->