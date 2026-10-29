<?php

/**
 * Title: List Lab
 * Slug: systemstrap/lab-lists
 * Categories: systemstrap, systemstrap-labs
 * Description: A comprehensive SystemStrap List laboratory demonstrating native lists, System List and Flat List styles, action hover behavior, badges, nested lists, Panel ownership, Equal Heights, and application-style list compositions.
 * Keywords: list, system list, flat list, action list, badge, nested list, panel, equal heights, systemstrap, pattern lab
 * Viewport Width: 1200
 * Inserter: yes
 */

?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">List Lab</h1>
    <!-- /wp:heading -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical"><!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Lists</button><button type="button" role="tab">Styles</button><button type="button" role="tab">Action</button><button type="button" role="tab">Badges</button><button type="button" role="tab">Height</button><button type="button" role="tab">Panels</button></div>
        <!-- /wp:tab-list -->

        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Lists"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Native Lists First</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>SystemStrap starts with the native WordPress List block. Content remains ordinary list markup while System List and System Flat List add coordinated row geometry, borders, spacing, and Panel-aware joins without replacing Core behavior.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Styles"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">System List and Flat List</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><strong>System List</strong> is the stronger surfaced treatment. <strong>System Flat List</strong> keeps the same structural language with quieter paint. Both remain native Lists and can participate directly inside System Panel and System Flat Panel compositions.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Action"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Action Hover</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Add the hidden developer helper class <code>is-action</code> to System List or System Flat List when rows should behave like interactive list-group items. It adds the canonical hover/action treatment without creating another visible block style.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Badges"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Badges on List Items</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>A List Item can use <strong>System Badge</strong>. Apply a WordPress Highlight color to the text that should become the badge; only the highlighted <code>&lt;mark&gt;</code> receives badge treatment, so ordinary row text remains ordinary content.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Height"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Equal Heights Around Lists</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Equal Heights belongs to the parent Columns or horizontal Group, not to the List itself. Use it when sibling Panels containing Lists should align. The layout returns to natural height when stacked, and an individual Panel can opt out with <code>is-not-equal-height</code>.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Panels"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Panel Ownership</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Lists can sit directly inside System Panel and System Flat Panel surfaces. The Panel owns the outer surface and joins; the List owns rows, separators, nesting, hover behavior, and currentColor relationships.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->
        </div>
        <!-- /wp:tab-panels -->
    </div>
    <!-- /wp:tabs -->

    <!-- wp:paragraph -->
    <p>Every example below uses native WordPress Lists and List Items. Copy the composition, change the content, and let the SystemStrap list contract travel with it.</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Structure First</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The baseline is still a normal WordPress List. Use native hierarchy first; add SystemStrap treatment when the content needs a stronger interface surface.</p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list"><!-- wp:list-item -->
            <li>Start with meaningful list content.</li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li>Keep hierarchy and nesting native.</li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li>Add a System list style when presentation is earned by context.</li>
            <!-- /wp:list-item -->

            <!-- wp:list-item -->
            <li>Keep links, badges, and nested content authored normally.</li>
            <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">The Basic Pair</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The same content in the two canonical treatments. Equal Heights is applied to the Columns parent so both list Panels align while their content remains independent.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">System List</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:list {"className":"is-style-system-list"} -->
                    <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                        <li>Account profile</li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Notification preferences</li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Privacy controls</li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Connected services</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Stronger row treatment.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">System Flat List</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:list {"className":"is-style-system-flat-list"} -->
                    <ul class="wp-block-list is-style-system-flat-list"><!-- wp:list-item -->
                        <li>Account profile</li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Notification preferences</li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Privacy controls</li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Connected services</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Same structure, quieter paint.</p>
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
        <h2 class="wp-block-heading">Action Rows</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The hidden <code>is-action</code> helper can be added to either List treatment. Hover the rows: the style communicates that the row is actionable without turning the List into a proprietary navigation component.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Project Queue</h4>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-system-list is-action"} -->
                    <ul class="wp-block-list is-style-system-list is-action"><!-- wp:list-item -->
                        <li><a href="#">Review homepage composition</a></li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li><a href="#">Inspect mobile navigation</a></li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li><a href="#">Verify variation contrast</a></li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li><a href="#">Prepare release notes</a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Reference Menu</h4>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-system-flat-list is-action"} -->
                    <ul class="wp-block-list is-style-system-flat-list is-action"><!-- wp:list-item -->
                        <li><a href="#">Architecture</a></li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li><a href="#">Design tokens</a></li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li><a href="#">Patterns</a></li>
                        <!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li><a href="#">Integration notes</a></li>
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
        <h2 class="wp-block-heading">Badges in the Row</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>List Item can carry the System Badge style while the parent remains a normal System List. Only highlighted text becomes the badge.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:list {"className":"is-style-system-list"} -->
            <ul class="wp-block-list is-style-system-list"><!-- wp:list-item {"className":"is-style-system-badge"} -->
                <li class="is-style-system-badge">Responsive review <strong><mark style="background-color:#009933" class="has-inline-color">Passed</mark></strong></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item {"className":"is-style-system-badge"} -->
                <li class="is-style-system-badge">Content freeze <strong><mark style="background-color:#3155A6" class="has-inline-color">Ready</mark></strong></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item {"className":"is-style-system-badge"} -->
                <li class="is-style-system-badge">Plugin compatibility <strong><mark style="background-color:#DD823B" class="has-inline-color">Review</mark></strong></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item {"className":"is-style-system-badge"} -->
                <li class="is-style-system-badge">Release package <strong><mark style="background-color:#009933" class="has-inline-color">Current</mark></strong></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Nested Information Architecture</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Nested Lists remain native hierarchy. The root System List owns the primary rows while nested Lists retain their own indentation and structure.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:list {"className":"is-style-system-list"} -->
            <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                <li>Design System
                    <!-- wp:list -->
                    <ul class="wp-block-list"><!-- wp:list-item -->
                        <li>Color and contrast</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Typography</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Spacing and geometry</li><!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>Components
                    <!-- wp:list -->
                    <ul class="wp-block-list"><!-- wp:list-item -->
                        <li>Panels</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Lists</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Tabs</li><!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>Integrations
                    <!-- wp:list -->
                    <ul class="wp-block-list"><!-- wp:list-item -->
                        <li>BuddyPress</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>WooCommerce</li><!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Equal Height Work Queues</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Equal Heights belongs to the Columns parent. Each sibling Panel owns its List and Footer. The third Panel deliberately uses <code>is-not-equal-height</code> to demonstrate the developer escape hatch.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Now</h4>
                    <!-- /wp:heading -->
                    <!-- wp:list {"className":"is-style-system-list is-action"} -->
                    <ul class="wp-block-list is-style-system-list is-action"><!-- wp:list-item -->
                        <li>Resolve launch blockers</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Review accessibility states</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Confirm mobile layouts</li><!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>3 active items</strong></p><!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Next</h4>
                    <!-- /wp:heading -->
                    <!-- wp:list {"className":"is-style-system-flat-list is-action"} -->
                    <ul class="wp-block-list is-style-system-flat-list is-action"><!-- wp:list-item -->
                        <li>Package registered patterns</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Write component docs</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Prepare release archive</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Tag candidate build</li><!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>4 queued items</strong></p><!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel is-not-equal-height","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel is-not-equal-height has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Later</h4>
                    <!-- /wp:heading -->
                    <!-- wp:list {"className":"is-style-system-flat-list"} -->
                    <ul class="wp-block-list is-style-system-flat-list"><!-- wp:list-item -->
                        <li>Explore post-release ideas</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Review deferred experiments</li><!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">Opted out of equalization.</p><!-- /wp:paragraph -->
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
        <h2 class="wp-block-heading">Panel-Contained Lists</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Direct ownership matters. The Panel owns the outer shell; the List owns the row system. These use direct child Lists so joins, borders, and editor parity stay predictable.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">System Panel + System List</h4><!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:list {"className":"is-style-system-list"} -->
                    <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                        <li>Panel owns atmosphere and outer geometry</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>List owns rows and separators</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Nested content remains native</li><!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Flat Panel + Flat List</h4><!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:list {"className":"is-style-system-flat-list"} -->
                    <ul class="wp-block-list is-style-system-flat-list"><!-- wp:list-item -->
                        <li>Same structural ownership</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>No System Panel atmosphere</li><!-- /wp:list-item -->
                        <!-- wp:list-item -->
                        <li>Quieter presentation for documentation</li><!-- /wp:list-item -->
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
        <h2 class="wp-block-heading">Release Queue</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A larger application-style composition combines Header, action rows, List Item badges, a direct System List, and a Panel Footer without introducing custom application markup.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Candidate Work</h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                    <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">4 Items</mark></strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:list {"className":"is-style-system-list is-action"} -->
            <ul class="wp-block-list is-style-system-list is-action"><!-- wp:list-item {"className":"is-style-system-badge"} -->
                <li class="is-style-system-badge"><a href="#"><strong>Group Lab</strong> — package registered pattern</a> <strong><mark style="background-color:#009933" class="has-inline-color">Ready</mark></strong></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item {"className":"is-style-system-badge"} -->
                <li class="is-style-system-badge"><a href="#"><strong>Tabs Lab</strong> — preserve frozen component contract</a> <strong><mark style="background-color:#009933" class="has-inline-color">Frozen</mark></strong></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item {"className":"is-style-system-badge"} -->
                <li class="is-style-system-badge"><a href="#"><strong>List Lab</strong> — verify variations and editor parity</a> <strong><mark style="background-color:#DD823B" class="has-inline-color">Review</mark></strong></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item {"className":"is-style-system-badge"} -->
                <li class="is-style-system-badge"><a href="#"><strong>Release archive</strong> — assemble distribution</a> <strong><mark style="background-color:#3155A6" class="has-inline-color">Next</mark></strong></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size"><strong>Hover rows to inspect the action treatment.</strong></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Archive</a></div>
                        <!-- /wp:button -->
                        <!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Open Queue</a></div>
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
</div>
<!-- /wp:group -->