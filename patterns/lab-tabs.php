<?php

/**
 * Title: Tabs Lab
 * Slug: systemstrap/lab-tabs
 * Description: A curated laboratory of native WordPress Tabs compositions using SystemStrap styles, including Classic, Vertical, System List, navigation treatments, panel surfaces, and realistic content examples.
 * Categories: systemstrap, systemstrap-labs
 * Keywords: tabs, lab, components, navigation, panels, vertical, list
 * Viewport Width: 1200
 * Inserter: yes
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Tabs Lab</h1><!-- /wp:heading -->
    <!-- wp:paragraph -->
    <p>Native WordPress Tabs composed with SystemStrap styles. Each example sits inside a plain Group so it can be selected, copied, remixed, and reused.</p><!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Classic Documentation Tabs</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>A familiar horizontal interface for documentation, product details, onboarding, and compact reference content.</p><!-- /wp:paragraph -->
        <!-- wp:tabs {"activeTabIndex":0,"className":"is-style-system-classic"} -->
        <div class="wp-block-tabs is-style-system-classic">
            <!-- wp:tab-list -->
            <div role="tablist" class="wp-block-tab-list"><button type="button" role="tab">Overview</button><button type="button" role="tab">Installation</button><button type="button" role="tab">Configuration</button><button type="button" role="tab">Resources</button></div>
            <!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
            <div class="wp-block-tab-panels is-style-system-panel">
                <!-- wp:tab-panel {"label":"Overview"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Build with the blocks you already know.</h3><!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>SystemStrap extends native WordPress blocks with coordinated styles, surfaces, spacing, and interaction states. Tabs remain Core blocks while the theme provides presentation choices that fit the rest of the system.</p><!-- /wp:paragraph -->
                    <!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Native WordPress behavior</li>
                        <li>Composable SystemStrap styles</li>
                        <li>Editor-authored colors, borders, and radius</li>
                        <li>Responsive layouts without custom runtime behavior</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Installation"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Start with a normal Tabs block.</h3><!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>Insert Core Tabs, add the labels you need, and write ordinary block content inside each panel. SystemStrap styles stay optional, so the content remains portable.</p><!-- /wp:paragraph -->
                    <!-- wp:list {"ordered":true} -->
                    <ol class="wp-block-list">
                        <li>Insert Tabs.</li>
                        <li>Add or remove tabs.</li>
                        <li>Select a parent composition.</li>
                        <li>Optionally style the Tab List and Tab Panels.</li>
                        <li>Author the content normally.</li>
                    </ol><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Configuration"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Compose the presentation.</h3><!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>The parent Tabs block controls composition. The Tab List can adopt System Nav Button or System Nav Gen where supported, while Tab Panels can independently use System Panel or System Flat Panel.</p><!-- /wp:paragraph -->
                    <!-- wp:quote -->
                    <blockquote class="wp-block-quote"><!-- wp:paragraph -->
                        <p>Core owns behavior. SystemStrap owns presentation. The editor owns author intent.</p><!-- /wp:paragraph -->
                    </blockquote><!-- /wp:quote -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Resources"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel">
                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Keep useful content close.</h3><!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>Tabs work well for reference material that belongs together but does not need to occupy the page at the same time.</p><!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Open the Site Editor</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Browse Components</a></div><!-- /wp:button -->
                    </div><!-- /wp:buttons -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Classic Button Navigation</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>A compact control rail paired with an independent pane for feature switchers, compact dashboards, and product views.</p><!-- /wp:paragraph -->
        <!-- wp:tabs {"activeTabIndex":1,"className":"is-style-system-classic"} -->
        <div class="wp-block-tabs is-style-system-classic">
            <!-- wp:tab-list {"className":"is-style-system-nav-button"} -->
            <div role="tablist" class="wp-block-tab-list is-style-system-nav-button"><button type="button" role="tab">Summary</button><button type="button" role="tab">Features</button><button type="button" role="tab">Workflow</button><button type="button" role="tab">Next Steps</button></div><!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-flat-panel"} -->
            <div class="wp-block-tab-panels is-style-system-flat-panel">
                <!-- wp:tab-panel {"label":"Summary"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">One component, several presentations.</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>The same Core content can move between Default, Classic, Vertical, and List compositions without changing the underlying behavior.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Features"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Presentation</h4><!-- /wp:heading --><!-- wp:list -->
                            <ul class="wp-block-list">
                                <li>Button navigation</li>
                                <li>Context navigation</li>
                                <li>Panel surfaces</li>
                                <li>Theme-aware states</li>
                            </ul><!-- /wp:list -->
                        </div><!-- /wp:column --><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Author control</h4><!-- /wp:heading --><!-- wp:list -->
                            <ul class="wp-block-list">
                                <li>Text and background colors</li>
                                <li>Border color and width</li>
                                <li>Radius</li>
                                <li>Nested native blocks</li>
                            </ul><!-- /wp:list -->
                        </div><!-- /wp:column -->
                    </div><!-- /wp:columns -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Workflow"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:paragraph -->
                    <p>Choose the parent composition first, add a navigation personality only when it helps, then decide whether the pane needs a surface. Each layer has one clear job.</p><!-- /wp:paragraph --><!-- wp:separator -->
                    <hr class="wp-block-separator has-alpha-channel-opacity" /><!-- /wp:separator --><!-- wp:paragraph -->
                    <p>This avoids all-or-nothing presets and keeps the component useful across editorial pages, documentation, interfaces, and application-style layouts.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Next Steps"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:paragraph -->
                    <p>Copy this Group, replace the labels, and drop your own blocks into each pane.</p><!-- /wp:paragraph --><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Start Building</a></div><!-- /wp:button -->
                    </div><!-- /wp:buttons -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Vertical Account Settings</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>A joined vertical interface for settings, account management, documentation sections, or workflows with substantial content.</p><!-- /wp:paragraph -->
        <!-- wp:tabs {"activeTabIndex":0,"className":"is-style-system-vertical"} -->
        <div class="wp-block-tabs is-style-system-vertical">
            <!-- wp:tab-list -->
            <div role="tablist" class="wp-block-tab-list"><button type="button" role="tab">Profile</button><button type="button" role="tab">Notifications</button><button type="button" role="tab">Privacy</button><button type="button" role="tab">Integrations</button><button type="button" role="tab">Advanced Settings</button></div><!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
            <div class="wp-block-tab-panels is-style-system-panel">
                <!-- wp:tab-panel {"label":"Profile"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Profile settings</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Keep the information people see about you up to date. This pane uses normal blocks to stand in for controls that a real plugin or application could place here.</p><!-- /wp:paragraph --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Display name and biography</li>
                        <li>Profile visibility</li>
                        <li>Public links and contact details</li>
                        <li>Avatar and presentation preferences</li>
                    </ul><!-- /wp:list --><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Save Profile</a></div><!-- /wp:button -->
                    </div><!-- /wp:buttons -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Notifications"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Notification preferences</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Group related controls together without forcing the entire settings experience into one long page.</p><!-- /wp:paragraph --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Account activity</li>
                        <li>Replies and mentions</li>
                        <li>Project updates</li>
                        <li>Weekly summaries</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Privacy"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Privacy and visibility</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Substantial pane content grows naturally while the navigation remains compact. That makes Vertical useful for real settings and documentation instead of tiny demo copy.</p><!-- /wp:paragraph --><!-- wp:quote -->
                    <blockquote class="wp-block-quote"><!-- wp:paragraph -->
                        <p>Good settings screens make choices understandable before they make them configurable.</p><!-- /wp:paragraph -->
                    </blockquote><!-- /wp:quote -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Integrations"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Connected services</h3><!-- /wp:heading --><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Publishing</h4><!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Connect tools that extend the publishing workflow.</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column --><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Analytics</h4><!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Keep reporting and measurement tools organized in the same interface.</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column -->
                    </div><!-- /wp:columns -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Advanced Settings"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Advanced settings</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Reserve advanced controls for experienced users while keeping them in the same component. Long labels wrap naturally and the layout stacks when horizontal space becomes limited.</p><!-- /wp:paragraph --><!-- wp:paragraph -->
                    <p>The pane remains an ordinary block container, so documentation, warnings, helper content, lists, buttons, and plugin-provided blocks can live here without a special template.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Project Dashboard List</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>System List turns Tabs into dashboard-style navigation beside an independent content pane.</p><!-- /wp:paragraph -->
        <!-- wp:tabs {"activeTabIndex":0,"className":"is-style-system-list"} -->
        <div class="wp-block-tabs is-style-system-list">
            <!-- wp:tab-list -->
            <div role="tablist" class="wp-block-tab-list"><button type="button" role="tab">Overview</button><button type="button" role="tab">Activity</button><button type="button" role="tab">Tasks</button><button type="button" role="tab">Files</button><button type="button" role="tab">Settings</button></div><!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
            <div class="wp-block-tab-panels is-style-system-panel">
                <!-- wp:tab-panel {"label":"Overview"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Project Phoenix</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>A compact dashboard can keep related project information in one place without turning every view into a separate page.</p><!-- /wp:paragraph --><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Status</h4><!-- /wp:heading --><!-- wp:paragraph -->
                            <p>On track</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column --><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Milestone</h4><!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Interface review</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column --><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Owner</h4><!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Design Systems</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column -->
                    </div><!-- /wp:columns -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Activity"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Recent activity</h3><!-- /wp:heading --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Navigation review completed.</li>
                        <li>Responsive state tests approved.</li>
                        <li>Documentation updated.</li>
                        <li>Accessibility checks queued.</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Tasks"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Open tasks</h3><!-- /wp:heading --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Finalize content examples.</li>
                        <li>Review mobile layouts.</li>
                        <li>Prepare release screenshots.</li>
                        <li>Package the final build.</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Files"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Project files</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Use ordinary WordPress blocks, media, downloads, or plugin-provided file interfaces inside the pane.</p><!-- /wp:paragraph --><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Files</a></div><!-- /wp:button -->
                    </div><!-- /wp:buttons -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Settings"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Project settings</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>The List composition stays visually independent from the pane, making it useful for management screens and application-style layouts.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Flat Resource Library</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>The same dashboard geometry with flatter surfaces for layouts that need less visual elevation.</p><!-- /wp:paragraph -->
        <!-- wp:tabs {"activeTabIndex":1,"className":"is-style-system-flat-list"} -->
        <div class="wp-block-tabs is-style-system-flat-list">
            <!-- wp:tab-list -->
            <div role="tablist" class="wp-block-tab-list"><button type="button" role="tab">Guides</button><button type="button" role="tab">Examples</button><button type="button" role="tab">Reference</button><button type="button" role="tab">Downloads</button></div><!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-flat-panel"} -->
            <div class="wp-block-tab-panels is-style-system-flat-panel">
                <!-- wp:tab-panel {"label":"Guides"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Guides</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Use this area for tutorials, onboarding material, or grouped documentation.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Examples"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Examples that start useful.</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>A Lab should not stop at proving that a style exists. It should show enough real content that someone can immediately imagine using the component.</p><!-- /wp:paragraph --><!-- wp:quote -->
                    <blockquote class="wp-block-quote"><!-- wp:paragraph -->
                        <p>Insert it, inspect it, remix it, or copy the part you need.</p><!-- /wp:paragraph -->
                    </blockquote><!-- /wp:quote --><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Explore Examples</a></div><!-- /wp:button -->
                    </div><!-- /wp:buttons -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Reference"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Reference material</h3><!-- /wp:heading --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Style ownership</li>
                        <li>Responsive behavior</li>
                        <li>Authored color support</li>
                        <li>Accessibility and keyboard behavior</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Downloads"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Downloads</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Place downloadable resources, package links, or other native blocks here as the project requires.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">System Panel Showcase</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>An outer System Panel can hold the entire Tabs composition while the navigation and pane retain independent presentation choices.</p><!-- /wp:paragraph -->
        <!-- wp:tabs {"activeTabIndex":2,"className":"is-style-system-panel"} -->
        <div class="wp-block-tabs is-style-system-panel">
            <!-- wp:tab-list {"className":"is-style-system-nav-button"} -->
            <div role="tablist" class="wp-block-tab-list is-style-system-nav-button"><button type="button" role="tab">Design</button><button type="button" role="tab">Build</button><button type="button" role="tab">Review</button><button type="button" role="tab">Ship</button></div><!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-flat-panel"} -->
            <div class="wp-block-tab-panels is-style-system-flat-panel">
                <!-- wp:tab-panel {"label":"Design"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Design with system primitives.</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Start with layout, typography, color, spacing, and reusable component styles instead of rebuilding the visual language for every page.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Build"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Build with native blocks.</h3><!-- /wp:heading --><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:paragraph -->
                            <p><strong>Compose.</strong> Combine familiar blocks into useful interfaces.</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column --><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:paragraph -->
                            <p><strong>Style.</strong> Apply SystemStrap variations only where they improve the presentation.</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column -->
                    </div><!-- /wp:columns -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Review"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Review the composition, not just the component.</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Stress the layout with real labels, long content, nested blocks, responsive widths, authored colors, and alternate theme variations.</p><!-- /wp:paragraph --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Check hover and selected states.</li>
                        <li>Check responsive wrapping.</li>
                        <li>Check pane ownership.</li>
                        <li>Check authored values.</li>
                        <li>Check dark and alternate color variations.</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Ship"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Ship the system.</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Once the component survives the Lab, the same blocks can move into real patterns and pages with confidence.</p><!-- /wp:paragraph --><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Build Something</a></div><!-- /wp:button -->
                    </div><!-- /wp:buttons -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Classic Context Navigation</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>A lighter horizontal treatment for related content that should feel more like local navigation than a row of controls.</p><!-- /wp:paragraph -->

        <!-- wp:tabs {"activeTabIndex":1,"className":"is-style-system-classic"} -->
        <div class="wp-block-tabs is-style-system-classic">
            <!-- wp:tab-list {"className":"is-style-system-nav-gen"} -->
            <div role="tablist" class="wp-block-tab-list is-style-system-nav-gen"><button type="button" role="tab">Overview</button><button type="button" role="tab">Highlights</button><button type="button" role="tab">Roadmap</button><button type="button" role="tab">Release Notes</button></div><!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-flat-panel"} -->
            <div class="wp-block-tab-panels is-style-system-flat-panel">
                <!-- wp:tab-panel {"label":"Overview"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">A compact secondary navigation.</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>System Nav Gen keeps the tab list visually quiet while still giving hover and selected states enough weight to orient the reader.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Highlights"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Highlights</h3><!-- /wp:heading --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Compact local navigation</li>
                        <li>Flat contextual states</li>
                        <li>Independent pane surface</li>
                        <li>Responsive wrapping</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Roadmap"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Roadmap</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Use this format for product areas, documentation subsections, project phases, or other content where the navigation should stay compact.</p><!-- /wp:paragraph --><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Roadmap</a></div><!-- /wp:button -->
                    </div><!-- /wp:buttons -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Release Notes"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Release notes</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Keep recent changes grouped with the feature they describe instead of sending the reader to a separate page for every update.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Vertical Button Workspace</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>A stronger vertical control rail for workflows where the navigation should feel actionable while the pane remains an independent surface.</p><!-- /wp:paragraph -->

        <!-- wp:tabs {"activeTabIndex":0,"className":"is-style-system-vertical"} -->
        <div class="wp-block-tabs is-style-system-vertical">
            <!-- wp:tab-list {"className":"is-style-system-nav-button"} -->
            <div role="tablist" class="wp-block-tab-list is-style-system-nav-button"><button type="button" role="tab">Workspace</button><button type="button" role="tab">Content</button><button type="button" role="tab">Appearance</button><button type="button" role="tab">Publishing</button></div><!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
            <div class="wp-block-tab-panels is-style-system-panel">
                <!-- wp:tab-panel {"label":"Workspace"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Workspace overview</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Use a Button Nav rail when each section represents a clear mode or task. The rail stays compact while the content pane can grow as large as necessary.</p><!-- /wp:paragraph --><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Current mode</h4><!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Editorial workspace</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column --><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Status</h4><!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Ready to publish</p><!-- /wp:paragraph -->
                        </div><!-- /wp:column -->
                    </div><!-- /wp:columns -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Content"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Content controls</h3><!-- /wp:heading --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Editorial structure</li>
                        <li>Reusable sections</li>
                        <li>Content visibility</li>
                        <li>Review workflow</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Appearance"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Appearance</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Theme styles, authored colors, borders, and radius can all remain normal editor choices while the Tabs composition stays intact.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Publishing"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Publishing</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Finish the workflow with ordinary native controls and supporting content.</p><!-- /wp:paragraph --><!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Review and Publish</a></div><!-- /wp:button -->
                    </div><!-- /wp:buttons -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Flat Panel Knowledge Base</h2><!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>An outer flat shell with contextual navigation and an enhanced inner pane demonstrates that the Tabs container and Tab Panels can carry different surface roles.</p><!-- /wp:paragraph -->

        <!-- wp:tabs {"activeTabIndex":2,"className":"is-style-system-flat-panel"} -->
        <div class="wp-block-tabs is-style-system-flat-panel">
            <!-- wp:tab-list {"className":"is-style-system-nav-gen"} -->
            <div role="tablist" class="wp-block-tab-list is-style-system-nav-gen"><button type="button" role="tab">Start Here</button><button type="button" role="tab">Concepts</button><button type="button" role="tab">Recipes</button><button type="button" role="tab">Troubleshooting</button></div><!-- /wp:tab-list -->
            <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
            <div class="wp-block-tab-panels is-style-system-panel">
                <!-- wp:tab-panel {"label":"Start Here"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Start with the system, not the workaround.</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Use the native block first, then add SystemStrap styles only where they clarify hierarchy or interaction.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Concepts"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Core concepts</h3><!-- /wp:heading --><!-- wp:list -->
                    <ul class="wp-block-list">
                        <li>Composition belongs to the parent.</li>
                        <li>Navigation personality belongs to the Tab List.</li>
                        <li>Pane surface belongs to Tab Panels.</li>
                        <li>Behavior remains native to WordPress.</li>
                    </ul><!-- /wp:list -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Recipes"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Useful recipes</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>Combine the same blocks differently for documentation, account screens, project dashboards, reference libraries, feature explorers, and compact application interfaces.</p><!-- /wp:paragraph --><!-- wp:quote -->
                    <blockquote class="wp-block-quote"><!-- wp:paragraph -->
                        <p>The goal is not more presets. The goal is more useful combinations.</p><!-- /wp:paragraph -->
                    </blockquote><!-- /wp:quote -->
                </section><!-- /wp:tab-panel -->
                <!-- wp:tab-panel {"label":"Troubleshooting"} -->
                <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Troubleshooting</h3><!-- /wp:heading --><!-- wp:paragraph -->
                    <p>When a composition feels wrong, inspect ownership first: parent layout, Tab List presentation, pane surface, then authored block values.</p><!-- /wp:paragraph -->
                </section><!-- /wp:tab-panel -->
            </div><!-- /wp:tab-panels -->
        </div><!-- /wp:tabs -->
    </div><!-- /wp:group -->

</div><!-- /wp:group -->