<?php

/**
 * Title: Group Lab
 * Slug: systemstrap/lab-groups
 * Categories: systemstrap, systemstrap-labs
 * Description: A comprehensive SystemStrap Group laboratory demonstrating native structure, System Panel and Flat Panel surfaces, color and contrast ownership, badges, Equal Heights, layered surfaces, patterns, nested compositions, dashboards, pricing, and application interfaces.
 * Keywords: group, panel, flat panel, cards, dashboard, color, equal heights, systemstrap, pattern lab
 * Viewport Width: 1200
 * Inserter: yes
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":1} -->
    <h1 class="wp-block-heading">Group Lab</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p></p>
    <!-- /wp:paragraph -->

    <!-- wp:tabs {"className":"is-style-system-vertical"} -->
    <div class="wp-block-tabs is-style-system-vertical"><!-- wp:tab-list {"className":"is-style-default"} -->
        <div role="tablist" class="wp-block-tab-list is-style-default"><button type="button" role="tab">Groups</button><button type="button" role="tab">Color</button><button type="button" role="tab">Badges</button><button type="button" role="tab">Height</button><button type="button" role="tab">Hover</button><button type="button" role="tab">Wrapper</button></div>
        <!-- /wp:tab-list -->

        <!-- wp:tab-panels {"className":"is-style-system-panel"} -->
        <div class="wp-block-tab-panels is-style-system-panel"><!-- wp:tab-panel {"label":"Groups"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">System Panels</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Native WordPress Group blocks are the foundation here: structure first, then surfaces, layout, color, and behavior as the composition needs them. System Panel and System Flat Panel turn ordinary Groups into coordinated interface surfaces while the blocks inside remain normal, portable WordPress content.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Color"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Color System</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>SystemStrap’s color system is surface-aware. When a component owns a background, the theme can resolve an appropriate light or dark foreground and, where supported by the semantic color system, adjust the selected foreground shade to maintain proper contrast against that surface. For predictable results, a block that intentionally establishes its own foreground or contrast context should also own an explicit background. Pattern gradients can be layered over a solid preset background as well: assign the normal WordPress background-color class, such as <code>has-base-background-color</code>, together with the gradient so the pattern supplies the visual layer while the solid color provides a deterministic backing surface.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Badges"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">System Badge</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Inline highlighted text can become a System Badge by choosing the <strong>System Badge</strong> block style and then applying WordPress Highlight color to the desired text. The style leaves ordinary text alone and promotes only the highlighted <code>&lt;mark&gt;</code> content into the canonical badge treatment. This works particularly well for compact states, counts, labels, and status language without turning the surrounding Paragraph, Heading, or List Item into a badge.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Height"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading"><strong>Equal Heights</strong></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>Columns and horizontal Groups can use <strong>Equal Heights</strong> when sibling System Panels or System Flat Panels should align to a common height. The layout returns to natural content height when it stacks vertically. An individual participating Panel can opt out with the developer helper class <code>is-not-equal-height</code>, leaving its equalized siblings unchanged.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Hover"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Hover Action</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>System Lists and System Flat Lists can also receive the hidden <code>is-action</code> helper class when the rows should behave like interactive list-group items, adding the SystemStrap hover/action treatment without requiring another visible block style.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->

            <!-- wp:tab-panel {"label":"Wrapper"} -->
            <section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading">Panel Wrapper</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>For deeper visual compositions, <code>is-panel-wrapper</code> provides a neutral Group wrapper with canonical Panel radius but no border, padding, block gap, shadow, or Panel treatment of its own. It is useful for stacking authored background colors, gradients, and patterns into multiple visual layers while keeping the geometry synchronized with SystemStrap’s Default, Compact, and Expanded radius modes.</p>
                <!-- /wp:paragraph -->
            </section>
            <!-- /wp:tab-panel -->
        </div>
        <!-- /wp:tab-panels -->
    </div>
    <!-- /wp:tabs -->

    <!-- wp:paragraph -->
    <p>Every example in this Lab is built from native blocks and wrapped so it can be selected, copied, remixed, and reused. The goal is not to memorize special markup; it is to combine ordinary WordPress blocks with a small set of predictable SystemStrap surface, color, layout, and utility contracts.</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Structure First</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The native baseline: Group organizes content without demanding a visual surface. Structure comes first; treatment is earned by context.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size"><strong>NATIVE GROUP // ZERO TREATMENT</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">A simple content group</h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">Portable</mark></strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p>This wrapper owns no decorative surface. Its Heading, Paragraph, and Buttons remain ordinary WordPress blocks, ready to move into any template, pattern, or plugin-owned region.</p>
            <!-- /wp:paragraph -->

            <!-- wp:list -->
            <ul class="wp-block-list"><!-- wp:list-item -->
                <li>Use Group for hierarchy and layout before presentation.</li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>Add System Panel or Flat Panel only when content needs a distinct interface surface.</li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li>Keep authored content portable; let styles provide the visual contract.</li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Plain native action</a></div>
                <!-- /wp:button -->

                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Promote to Surface</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">The Basic's</h2>
        <!-- /wp:heading -->

        <!-- wp:columns {"className":"is-style-default"} -->
        <div class="wp-block-columns is-style-default"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":5,"metadata":{"name":"Panel Heading"},"style":{"typography":{"textAlign":"left"}}} -->
                        <h5 class="wp-block-heading has-text-align-left">Panel Heading</h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"metadata":{"name":"Panel Text"},"style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left">Some quick example text to build on the panel title and make up the bulk of the panel’s content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph -->
                        <p>Panel Footer</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","metadata":{"name":"Panel Img"}} -->
                    <figure class="wp-block-image size-full"><img src="https://system.local/wp-content/themes/systemstrap/assets/media/hero-1280x720.webp" alt="Panel Featured Image" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"level":5,"metadata":{"name":"Panel Heading"},"style":{"typography":{"textAlign":"left"}}} -->
                    <h5 class="wp-block-heading has-text-align-left">Panel Heading</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"metadata":{"name":"Panel Text"},"style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left">Some quick example text to build on the panel title and make up the bulk of the panel’s content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                    <div class="wp-block-buttons"><!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Go somewhere</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel"><!-- wp:group {"className":"is-style-system-panel-header","style":{"spacing":{"margin":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0"},"blockGap":"var:preset|spacing|10"}},"backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-tertiary-bg-background-color has-background" style="margin-top:var(--wp--preset--spacing--0);margin-bottom:var(--wp--preset--spacing--0)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:icon {"icon":"core/published","align":"left"} /-->

                            <!-- wp:heading {"level":5,"style":{"typography":{"textAlign":"left"}}} -->
                            <h5 class="wp-block-heading has-text-align-left">Panel Title</h5>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":6} -->
                    <h6 class="wp-block-heading">Panel Subtitle</h6>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left">Some quick example text to build on the panel title and make up the bulk of the panel’s content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p><a href="#">Panel Link </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Another Link</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"className":"is-style-default"} -->
        <div class="wp-block-columns is-style-default"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":5,"metadata":{"name":"Panel Heading"},"style":{"typography":{"textAlign":"left"}}} -->
                        <h5 class="wp-block-heading has-text-align-left">Panel Heading</h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:list {"className":"is-style-system-list"} -->
                    <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                        <li>List Item 1</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>List Item 2</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>List Item 3</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":5,"metadata":{"name":"Panel Heading"},"style":{"typography":{"textAlign":"left"}}} -->
                        <h5 class="wp-block-heading has-text-align-left">Panel Heading</h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:details {"className":"is-style-system-details"} -->
                    <details class="wp-block-details is-style-system-details">
                        <summary>Summary Heading</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
                        <p>Details that are hidden within</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:details {"className":"is-style-system-details"} -->
                    <details class="wp-block-details is-style-system-details">
                        <summary>Summary Heading 2</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
                        <p>Details that are hidden within</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:details {"className":"is-style-system-details"} -->
                    <details class="wp-block-details is-style-system-details">
                        <summary>Summary Heading 3</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
                        <p>Details that are hidden within</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":5,"metadata":{"name":"Panel Heading"},"style":{"typography":{"textAlign":"center"}}} -->
                        <h5 class="wp-block-heading has-text-align-center">Pro Tier</h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"4rem","textAlign":"center"}}} -->
                    <h2 class="wp-block-heading has-text-align-center" style="font-size:4rem;font-style:normal;font-weight:700">$49<span class="wp-element-caption" style="font-size:clamp(1.1rem, 1.1vw, 1.3rem)">/mo</span></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
                    <p class="has-text-align-center">Perfect for serious developers.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"is-style-system-list"} -->
                    <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                        <li>Unlimited Projects</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Priority 24/7 Support</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Custom Domains</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons"><!-- wp:button -->
                            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Get Started Now</a></div>
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
        <h2 class="wp-block-heading">Project Summary</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A System Panel can turn ordinary Groups, Columns, Headings, Paragraphs, Lists, and Buttons into a complete project surface with deliberate contrast ownership.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>PROJECT // PHOENIX</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Interface Review</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                    <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">On Track</mark></strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph -->
            <p>The team is closing the final interface pass before release packaging. The surface owns its background; semantic status remains free to express state without depending on the page behind it.</p>
            <!-- /wp:paragraph -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>MILESTONE</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Interface Review</h4>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Final responsive and interaction pass.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>COMPLETION</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"fontSize":"display-3"} -->
                        <h2 class="wp-block-heading has-display-3-font-size">72%</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Up 8% this cycle.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>CONTRIBUTORS</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"fontSize":"display-3"} -->
                        <h2 class="wp-block-heading has-display-3-font-size">12</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Across 3 workstreams.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group"><!-- wp:paragraph -->
                <p><strong>Next gate:</strong> release package approval</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"textColor":"success"} -->
                <p class="has-success-color has-text-color"><strong>12 / 12 owners reporting</strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Project</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Open Workspace</a></div>
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
        <h2 class="wp-block-heading">Editorial Brief</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>System Flat Panel keeps the structural contract while dropping elevation, making it ideal for editorial and document-like surfaces.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                <p class="has-small-font-size"><strong>EDITORIAL // FEATURE BRIEF</strong></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                <p class="is-style-system-badge"><strong><mark style="background-color:#3155A6" class="has-inline-color">Draft</mark></strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":3,"fontSize":"display-4"} -->
            <h3 class="wp-block-heading has-display-4-font-size">Build the story around native blocks.</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"fontSize":"large"} -->
            <p class="has-large-font-size">The visual system should amplify the editorial idea without making the content dependent on a proprietary component model.</p>
            <!-- /wp:paragraph -->

            <!-- wp:quote {"className":"is-style-default"} -->
            <blockquote class="wp-block-quote is-style-default"><!-- wp:paragraph -->
                <p>Same content architecture. Different voice. One coherent system.</p>
                <!-- /wp:paragraph -->
            </blockquote>
            <!-- /wp:quote -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Editorial intent</h4>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul class="wp-block-list"><!-- wp:list-item -->
                        <li>Lead with one strong visual idea.</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Keep hierarchy obvious at a glance.</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Let native content remain portable.</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">System intent</h4>
                    <!-- /wp:heading -->

                    <!-- wp:list -->
                    <ul class="wp-block-list"><!-- wp:list-item -->
                        <li>Flat surface, no required elevation.</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Theme tokens own spacing and rhythm.</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Variation changes mood, not structure.</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Review Brief</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Deployment Control</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A foreground-owning Panel also owns its surface. From there, System List structure, borders, links, and controls can follow the authored semantic language predictably.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"backgroundColor":"base","textColor":"info","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-info-color has-base-background-color has-text-color has-background has-link-color"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"tertiary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-tertiary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>RELEASE // 1.0.0</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Deployment Control</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                    <p class="is-style-system-badge"><strong><mark style="background-color:#212526" class="has-inline-color has-light-color">Ready</mark></strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"fontSize":"large"} -->
            <p class="has-large-font-size">Release candidate 1.0.0 has cleared the automated checks and is ready for final human review.</p>
            <!-- /wp:paragraph -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"65%"} -->
                <div class="wp-block-column" style="flex-basis:65%"><!-- wp:heading {"level":4} -->
                    <h4 class="wp-block-heading">Release checklist</h4>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-system-list is-action"} -->
                    <ul class="wp-block-list is-style-system-list is-action"><!-- wp:list-item -->
                        <li>Responsive review complete</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Dark and light variations verified</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Accessibility states checked</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li>Block serialization validated</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"35%"} -->
                <div class="wp-block-column" style="flex-basis:35%"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>DEPLOYMENT WINDOW</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"fontSize":"display-4"} -->
                        <h2 class="wp-block-heading has-display-4-font-size">02:30</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Rollback package prepared and verified.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"tertiary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-tertiary-bg-background-color has-background"><!-- wp:buttons {"fontSize":"x-small","layout":{"type":"flex","justifyContent":"right"}} -->
                <div class="wp-block-buttons has-custom-font-size has-x-small-font-size"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Report</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"backgroundColor":"info"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-info-background-color has-background wp-element-button">Deploy</a></div>
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
        <h2 class="wp-block-heading">Knowledge Base</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A Flat Panel can own the documentation surface while Details, Lists, and nested Groups keep their own behavior and presentation responsibilities.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","gradient":"pattern-90","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-pattern-90-gradient-background has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>DOCUMENTATION // IMPLEMENTATION GUIDE</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Build with ownership, not overrides.</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                    <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">Current</mark></strong></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"68%"} -->
                <div class="wp-block-column" style="flex-basis:68%"><!-- wp:details {"showContent":true,"className":"is-style-system-flat-panel"} -->
                    <details class="wp-block-details is-style-system-flat-panel" open>
                        <summary>Architecture</summary><!-- wp:paragraph {"backgroundColor":"tertiary-bg"} -->
                        <p class="has-tertiary-bg-background-color has-background">The outer Group owns the documentation surface. Nested blocks remain native, portable, and responsible for their own behavior.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:details {"className":"is-style-system-flat-panel"} -->
                    <details class="wp-block-details is-style-system-flat-panel">
                        <summary>Contrast ownership</summary><!-- wp:paragraph {"backgroundColor":"tertiary-bg"} -->
                        <p class="has-tertiary-bg-background-color has-background">A component that intentionally owns foreground contrast also owns an explicit background surface. Nested contrast boundaries establish their own pair.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:details {"className":"is-style-system-flat-panel"} -->
                    <details class="wp-block-details is-style-system-flat-panel">
                        <summary>Styling ownership</summary><!-- wp:paragraph {"backgroundColor":"tertiary-bg"} -->
                        <p class="has-tertiary-bg-background-color has-background">SystemStrap coordinates tokens, states, and structural relationships without turning Core blocks into proprietary components.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->

                    <!-- wp:details {"className":"is-style-system-flat-panel"} -->
                    <details class="wp-block-details is-style-system-flat-panel">
                        <summary>Responsive behavior</summary><!-- wp:paragraph {"backgroundColor":"tertiary-bg"} -->
                        <p class="has-tertiary-bg-background-color has-background">Content remains normal block flow, so layouts adapt naturally and retain editor portability.</p>
                        <!-- /wp:paragraph -->
                    </details>
                    <!-- /wp:details -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"32%"} -->
                <div class="wp-block-column" style="flex-basis:32%"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel has-tertiary-bg-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Quick Checks</h4>
                        <!-- /wp:heading -->

                        <!-- wp:list {"className":"is-action is-style-system-flat-list"} -->
                        <ul class="wp-block-list is-action is-style-system-flat-list"><!-- wp:list-item -->
                            <li>Authored colors</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Owned backgrounds</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Focus states</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Mobile stacking</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Variation stress test</li>
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

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Operational Snapshot</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Ordinary Groups become a compact operational dashboard when each metric owns a clear surface, hierarchy, and status signal.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size"><strong>OPERATIONS // CURRENT CYCLE</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Delivery health</h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">Healthy</mark></strong></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:columns {"className":"is-style-equal-heights"} -->
            <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>OPEN TASKS</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"fontSize":"display-2"} -->
                        <h2 class="wp-block-heading has-display-2-font-size">18</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"textColor":"warning"} -->
                        <p class="has-warning-color has-text-color"><strong>4 due this week</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>COMPLETION</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"fontSize":"display-2"} -->
                        <h2 class="wp-block-heading has-display-2-font-size">72%</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"textColor":"success"} -->
                        <p class="has-success-color has-text-color"><strong>↑ 8% this cycle</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>CONTRIBUTORS</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"fontSize":"display-2"} -->
                        <h2 class="wp-block-heading has-display-2-font-size">12</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"textColor":"info"} -->
                        <p class="has-info-color has-text-color"><strong>3 active workstreams</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>NEXT RELEASE</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3,"fontSize":"display-4"} -->
                        <h3 class="wp-block-heading has-display-4-font-size">Nov 14</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><strong>Candidate 1.0.0</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group"><!-- wp:paragraph -->
                <p><strong>Trend:</strong> steady delivery with no blocked release gates.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Open Report</a></div>
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
        <h2 class="wp-block-heading">Native, Portable, Composable</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Reusable feature cards made from nothing more exotic than styled Groups.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"background":{"gradient":"var:preset|gradient|pattern-150"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"textColor":"info","fontSize":"x-large"} -->
                        <p class="has-info-color has-text-color has-link-color has-x-large-font-size">◆</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
                        <h4 class="wp-block-heading">Native First</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph -->
                    <p>Build with WordPress blocks instead of a proprietary component runtime. Fully customizable.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"info","gradient":"absolute-03","className":"is-style-button-pill","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}},"dimensions":{"width":"var:preset|dimension|75"}},"borderColor":"info"} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-info-color has-absolute-03-gradient-background has-text-color has-background has-link-color has-border-color has-info-border-color wp-element-button">Learn More</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"background":{"gradient":"var:preset|gradient|pattern-150"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|danger"}}}},"textColor":"danger","fontSize":"x-large"} -->
                        <p class="has-danger-color has-text-color has-link-color has-x-large-font-size">◇</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
                        <h4 class="wp-block-heading">Portable Content</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph -->
                    <p>Theme styles enhance presentation without trapping content in custom markup.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"gradient":"accent-110","className":"is-style-button-pill","style":{"dimensions":{"width":"var:preset|dimension|75"}}} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-accent-110-gradient-background has-background wp-element-button">See the System</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"background":{"gradient":"var:preset|gradient|pattern-150"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|success"}}}},"textColor":"success","fontSize":"x-large"} -->
                        <p class="has-success-color has-text-color has-link-color has-x-large-font-size">▲</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":4,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
                        <h4 class="wp-block-heading">Composable Styles</h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph -->
                    <p>Panels, Lists, Tables, Buttons, Tabs, and native blocks share one coordinated language.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons"><!-- wp:button {"textColor":"success","gradient":"absolute-03","className":"is-style-button-pill","style":{"elements":{"link":{"color":{"text":"var:preset|color|success"}}},"dimensions":{"width":"var:preset|dimension|75"}},"borderColor":"success"} -->
                        <div class="wp-block-button is-style-button-pill"><a class="wp-block-button__link has-success-color has-absolute-03-gradient-background has-text-color has-background has-link-color has-border-color has-success-border-color wp-element-button">Browse Components</a></div>
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
        <h2 class="wp-block-heading">Three-Tier Pricing — Maximum Edition</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The classic three-card pricing table pushed hard: Panel regions, huge type, System Lists, full-width actions,
            and a deliberately dominant featured tier.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"verticalAlignment":"center","className":"is-style-default"} -->
        <div class="wp-block-columns are-vertically-aligned-center is-style-default"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-panel","style":{"shadow":"none","elements":{"link":{"color":{"text":"var:preset|color|success"}}}},"backgroundColor":"tertiary-bg","textColor":"success","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-success-color has-tertiary-bg-background-color has-text-color has-background has-link-color" style="box-shadow:none"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
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

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"is-style-system-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|danger"}}},"shadow":"var:preset|shadow|lg"},"backgroundColor":"base","textColor":"danger","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-danger-color has-base-background-color has-text-color has-background has-link-color" style="box-shadow:var(--wp--preset--shadow--lg)"><!-- wp:group {"className":"is-style-system-panel-header","style":{"background":{"gradient":"var:preset|gradient|pattern-20"},"elements":{"link":{"color":{"text":"var:preset|color|danger"}}}},"textColor":"danger","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-danger-color has-text-color has-link-color"><!-- wp:paragraph {"className":"has-system-badge","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
                        <p class="has-text-align-center has-system-badge has-large-font-size"><strong><mark style="background-color:#DD823B" class="has-inline-color">OUR MOST POPULAR</mark></strong></p>
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

                    <!-- wp:group {"className":"is-style-system-panel-footer","style":{"background":{"gradient":"var:preset|gradient|pattern-90"}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                        <div class="wp-block-buttons"><!-- wp:button {"textColor":"light","gradient":"luminous-vivid-orange-to-vivid-red","style":{"dimensions":{"width":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-light-color has-luminous-vivid-orange-to-vivid-red-gradient-background has-text-color has-background has-link-color wp-element-button">Get
                                    Started</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"className":"is-style-system-panel","style":{"shadow":"none","elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"backgroundColor":"tertiary-bg","textColor":"info","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-info-color has-tertiary-bg-background-color has-text-color has-background has-link-color" style="box-shadow:none"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
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

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Application Surface</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>One large Panel establishes application context while nested Groups divide planning, monitoring, and current work into independent native surfaces.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
        <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-header has-secondary-bg-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>WORKSPACE // RELEASE 1.0</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Workspace Overview</h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Settings</a></div>
                        <!-- /wp:button -->

                        <!-- wp:button -->
                        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">New Task</a></div>
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
                        <p class="has-small-font-size"><strong>PLAN</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Launch</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Prepare content, confirm responsive layouts, and close the release checklist before packaging.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                        <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">Ready</mark></strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>OBSERVE</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Monitor</h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>Track activity, review feedback, and keep operational signals together after the release moves.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                        <p class="is-style-system-badge"><strong><mark style="background-color:#3155A6" class="has-inline-color">Watching</mark></strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"68%"} -->
                <div class="wp-block-column" style="flex-basis:68%"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:heading {"level":4} -->
                        <h4 class="wp-block-heading">Current Work</h4>
                        <!-- /wp:heading -->

                        <!-- wp:list {"className":"is-style-system-list is-action"} -->
                        <ul class="wp-block-list is-style-system-list is-action"><!-- wp:list-item -->
                            <li>Finalize homepage composition</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Review Pattern Labs</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Confirm variation contrast</li>
                            <!-- /wp:list-item -->

                            <!-- wp:list-item -->
                            <li>Prepare release package</li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"32%"} -->
                <div class="wp-block-column" style="flex-basis:32%"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>RELEASE HEALTH</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"fontSize":"display-3"} -->
                        <h2 class="wp-block-heading has-display-3-font-size">96%</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"textColor":"success"} -->
                        <p class="has-success-color has-text-color"><strong>All critical checks green</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"secondary-bg","layout":{"type":"default"}} -->
            <div class="wp-block-group is-style-system-panel-footer has-secondary-bg-background-color has-background"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View Activity</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Open Workspace</a></div>
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
        <h2 class="wp-block-heading">Panel Color Recipes</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>The same ten color recipes are shown on both Panel treatments. The authored color contract stays the same; only the surface treatment changes. Use these as compact reference specimens for foregrounds, borders, regional surfaces, full surfaces, gradients, patterns, and nested contrast contexts.</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size"><strong>AUTHORING RULE:</strong> a component that establishes a foreground or contrast context should own an explicit background. A gradient or pattern may sit above that backing surface, and nested regions may establish their own independent foreground/background pair.</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Flat Panel Recipes</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">Quiet surfaces. Color and contrast do the work without System Panel enhancement.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|success"}}}},"backgroundColor":"base","textColor":"success","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-success-color has-base-background-color has-text-color has-background has-link-color"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>FOREGROUND</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Semantic Ink</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Base surface with semantic text and currentColor relationships.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","style":{"border":{"width":"1px"}},"backgroundColor":"base","borderColor":"danger","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-border-color has-danger-border-color has-base-background-color has-background" style="border-width:1px"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>BORDER</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Border Accent</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Neutral surface with a semantic border accent.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"info","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-info-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>HEADER</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Header Surface</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Only the Header owns the semantic background.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>FOOTER</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Footer Surface</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Only the Footer owns the semantic background.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"success","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer has-success-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>Semantic footer</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"primary","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-primary-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>BOOKENDS</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Header + Footer</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Matching semantic regions frame a neutral body.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"primary","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer has-primary-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>Matching footer</strong></p>
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
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","backgroundColor":"warning","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-warning-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>FULL SURFACE</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Semantic Surface</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">The whole Panel owns the semantic background and automatic foreground.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-panel-wrapper","backgroundColor":"danger","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-panel-wrapper has-danger-background-color has-background"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"has-absolute-01-gradient-background is-style-system-flat-panel","style":{"background":{"gradient":"var:preset|gradient|absolute-01"}},"backgroundColor":"danger","layout":{"type":"default"}} -->
                    <div class="wp-block-group has-absolute-01-gradient-background is-style-system-flat-panel has-danger-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>GRADIENT</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading">Gradient + Backing</h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">A real backing color sits beneath the visual gradient layer.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"backgroundColor":"base","textColor":"info","gradient":"pattern-70","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-info-color has-pattern-70-gradient-background has-base-background-color has-text-color has-background has-link-color"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>PATTERN</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Pattern + Ink</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Base owns contrast while semantic ink drives currentColor pattern geometry.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","backgroundColor":"success","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-success-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>NESTED</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Nested Surface</h5>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"is-panel-wrapper","backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-panel-wrapper has-base-background-color has-background"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size">Outer semantic context with a fresh inner Base context.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"info","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-info-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>SPLIT REGIONS</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Split Semantics</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Different regions can own independent semantic surfaces.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"warning","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer has-warning-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>Independent footer surface</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">System Panel Recipes</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"fontSize":"small"} -->
        <p class="has-small-font-size">The identical recipes on enhanced System Panels. Compare treatment, not markup or color ownership.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|success"}}}},"backgroundColor":"base","textColor":"success","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-success-color has-base-background-color has-text-color has-background has-link-color"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>FOREGROUND</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Semantic Ink</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Base surface with semantic text and currentColor relationships.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","style":{"border":{"width":"1px"}},"backgroundColor":"base","borderColor":"danger","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-border-color has-danger-border-color has-base-background-color has-background" style="border-width:1px"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>BORDER</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Border Accent</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Neutral surface with a semantic border accent.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"info","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-info-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>HEADER</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Header Surface</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Only the Header owns the semantic background.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>FOOTER</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Footer Surface</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Only the Footer owns the semantic background.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"success","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer has-success-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>Semantic footer</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"primary","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-primary-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>BOOKENDS</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Header + Footer</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Matching semantic regions frame a neutral body.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"primary","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer has-primary-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>Matching footer</strong></p>
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
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","backgroundColor":"warning","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-warning-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>FULL SURFACE</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Semantic Surface</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">The whole Panel owns the semantic background and automatic foreground.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-panel-wrapper","backgroundColor":"danger","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-panel-wrapper has-danger-background-color has-background"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"has-absolute-01-gradient-background is-style-system-panel","style":{"background":{"gradient":"var:preset|gradient|absolute-01"}},"backgroundColor":"danger","layout":{"type":"default"}} -->
                    <div class="wp-block-group has-absolute-01-gradient-background is-style-system-panel has-danger-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>GRADIENT</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:heading {"level":5} -->
                        <h5 class="wp-block-heading">Gradient + Backing</h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size">A real backing color sits beneath the visual gradient layer.</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","style":{"elements":{"link":{"color":{"text":"var:preset|color|info"}}}},"backgroundColor":"base","textColor":"info","gradient":"pattern-70","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-info-color has-pattern-70-gradient-background has-base-background-color has-text-color has-background has-link-color"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>PATTERN</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Pattern + Ink</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Base owns contrast while semantic ink drives currentColor pattern geometry.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","backgroundColor":"success","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-success-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                    <p class="has-x-small-font-size"><strong>NESTED</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Nested Surface</h5>
                    <!-- /wp:heading -->

                    <!-- wp:group {"className":"is-panel-wrapper","backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-panel-wrapper has-base-background-color has-background"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size">Outer semantic context with a fresh inner Base context.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","backgroundColor":"base","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-base-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","backgroundColor":"info","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header has-info-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>SPLIT REGIONS</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"level":5} -->
                    <h5 class="wp-block-heading">Split Semantics</h5>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size">Different regions can own independent semantic surfaces.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","backgroundColor":"warning","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer has-warning-background-color has-background"><!-- wp:paragraph {"fontSize":"x-small"} -->
                        <p class="has-x-small-font-size"><strong>Independent footer surface</strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading">Full Color Fully Loaded Side by Side</h3>
        <!-- /wp:heading -->

        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-flat-panel","backgroundColor":"info","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-info-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":5,"metadata":{"name":"Panel Heading"},"style":{"typography":{"textAlign":"left"}}} -->
                        <h5 class="wp-block-heading has-text-align-left">Flat Panel Heading</h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"metadata":{"name":"Panel Text"},"style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left">Some quick example text to build on the panel title and make up the bulk of the panel’s content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph -->
                        <p>Panel Footer</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"metadata":{"name":"System Panel"},"className":"is-style-system-panel","backgroundColor":"info","layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel has-info-background-color has-background"><!-- wp:group {"className":"is-style-system-panel-header","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-header"><!-- wp:heading {"level":5,"metadata":{"name":"Panel Heading"},"style":{"typography":{"textAlign":"left"}}} -->
                        <h5 class="wp-block-heading has-text-align-left">System Panel Heading</h5>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"metadata":{"name":"Panel Text"},"style":{"typography":{"textAlign":"left"}}} -->
                    <p class="has-text-align-left">Some quick example text to build on the panel title and make up the bulk of the panel’s content.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"className":"is-style-system-panel-footer","layout":{"type":"default"}} -->
                    <div class="wp-block-group is-style-system-panel-footer"><!-- wp:paragraph -->
                        <p>Panel Footer</p>
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
        <h2 class="wp-block-heading">Patterns &amp; Texture</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Pattern gradients are expressive layers, not contrast engines. Each example keeps a deterministic backing surface beneath the visual treatment.</p>
        <!-- /wp:paragraph -->

        <!-- wp:columns {"className":"is-style-equal-heights"} -->
        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","gradient":"pattern-10","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-pattern-10-gradient-background has-base-background-color has-background"><!-- wp:paragraph {"textColor":"danger","fontSize":"small"} -->
                    <p class="has-danger-color has-text-color has-small-font-size"><strong>EXPRESSIVE</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Starburst</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Campaign energy and geometric depth layered over an explicit Base surface.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","gradient":"pattern-30","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-pattern-30-gradient-background has-base-background-color has-background"><!-- wp:paragraph {"textColor":"info","fontSize":"small"} -->
                    <p class="has-info-color has-text-color has-small-font-size"><strong>CONTEXTUAL</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Spiral Ring</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Current-color geometry that adapts while the owned Base surface keeps contrast deterministic.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","gradient":"pattern-70","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-pattern-70-gradient-background has-base-background-color has-background"><!-- wp:paragraph {"textColor":"success","fontSize":"small"} -->
                    <p class="has-success-color has-text-color has-small-font-size"><strong>TOPOGRAPHIC</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Contour Map</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Map-like linework for field notes, technical layouts, and exploratory compositions.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"base","gradient":"pattern-90","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-pattern-90-gradient-background has-base-background-color has-background"><!-- wp:paragraph {"textColor":"warning","fontSize":"small"} -->
                    <p class="has-warning-color has-text-color has-small-font-size"><strong>TACTILE</strong></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"level":3} -->
                    <h3 class="wp-block-heading">Fine Grain</h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>Subtle texture that adds material character without changing the content architecture.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"className":"is-style-system-flat-panel has-contrast-background-color","style":{"background":{"gradient":"var:preset|gradient|pattern-120"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-contrast-background-color"><!-- wp:paragraph -->
            <p><strong>BLUEPRINT GRID // explicit Contrast backing surface + explicit Light foreground</strong></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"is-style-system-badge"} -->
            <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">Deterministic</mark></strong></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Layered Surfaces</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Panel Wrapper is the neutral layer between raw Group structure and a full Panel treatment. It keeps the canonical Panel radius while adding no border, padding, or block gap of its own, so authored margins can reveal as much or as little of each background, gradient, or pattern layer as the composition needs.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-panel-wrapper","backgroundColor":"secondary-bg","gradient":"pattern-120","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-panel-wrapper has-pattern-120-gradient-background has-secondary-bg-background-color has-background"><!-- wp:group {"className":"is-panel-wrapper","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"tertiary-bg","gradient":"pattern-90","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-panel-wrapper has-pattern-90-gradient-background has-tertiary-bg-background-color has-background" style="margin-top:var(--wp--preset--spacing--20);margin-right:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);margin-left:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-base-background-color has-background" style="margin-top:var(--wp--preset--spacing--20);margin-right:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);margin-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>SURFACE STACK // WRAPPER → WRAPPER → PANEL</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading">Depth without inventing another component.</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                        <p class="is-style-system-badge"><strong><mark style="background-color:#3155A6" class="has-inline-color">Composable</mark></strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph -->
                    <p>Each wrapper carries only visual layering. The innermost Flat Panel remains the real content surface and keeps responsibility for its own spacing, border, and presentation.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list {"className":"is-style-system-list"} -->
                    <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                        <li><strong>Outer layer:</strong> Blueprint Grid over Secondary Background.</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><strong>Middle layer:</strong> Fine Grain over Tertiary Background.</li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><strong>Content surface:</strong> Base Flat Panel with normal native blocks.</li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:paragraph {"fontSize":"small"} -->
                    <p class="has-small-font-size"><strong>AUTHORING NOTE:</strong> wrappers stay geometrically neutral; authored margins determine how much of each layer is revealed, while the shared radius follows SystemStrap geometry modes automatically.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">Wildlife Field Notes</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A playful field-guide composition built entirely from native blocks, with an explicit Base surface beneath the topographic pattern so the contrast context remains predictable.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"is-style-system-flat-panel","backgroundColor":"tertiary-bg","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-system-flat-panel has-tertiary-bg-background-color has-background"><!-- wp:group {"className":"is-style-default","style":{"background":{"gradient":"var:preset|gradient|pattern-50"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-green-cyan"}}},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"textColor":"vivid-green-cyan","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default has-vivid-green-cyan-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"css":"filter:blur(0);","elements":{"link":{"color":{"text":"var:preset|color|tertiary-color"}}}},"textColor":"tertiary-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-custom-css has-tertiary-color-color has-text-color has-link-color"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
                    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"textColor":"success","fontSize":"small"} -->
                            <p class="has-success-color has-text-color has-small-font-size"><strong>COASTAL FIELD NOTES // TRAIL 07</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                            <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color">Habitat Open</mark></strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Wildlife Along the Trail</h3>
                        <!-- /wp:heading -->

                        <!-- wp:group {"layout":{"type":"constrained","contentSize":"72ch"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph -->
                            <p>Follow the boardwalk through bayou, rookery, and shallows. The content is ordinary WordPress; the atmosphere comes from composition, semantic accents, and one expressive preset layer.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:columns {"className":"is-style-equal-heights","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
                    <div class="wp-block-columns is-style-equal-heights" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","borderColor":"success","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-border-color has-success-border-color has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|20","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20"}},"border":{"radius":"999px"},"typography":{"textAlign":"center"},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"tertiary-bg","fontSize":"display-3"} -->
                                    <p class="has-text-align-center has-tertiary-bg-background-color has-background has-display-3-font-size" style="border-radius:999px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)">🐊</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:paragraph {"textColor":"success","fontSize":"small"} -->
                                <p class="has-success-color has-text-color has-small-font-size"><strong>ZONE 01 // BAYOU</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">Gator Bayou</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>Suspended timber paths cross duckweed channels where alligators move below the boardwalk and bask along the muddy shelf.</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size"><strong>Best window:</strong> early morning</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center"} -->
                        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"is-style-system-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","borderColor":"danger","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-border-color has-danger-border-color has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|20","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20"}},"border":{"radius":"999px"},"typography":{"textAlign":"center"},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"tertiary-bg","fontSize":"display-3"} -->
                                    <p class="has-text-align-center has-tertiary-bg-background-color has-background has-display-3-font-size" style="border-radius:999px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)">🦩</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:paragraph {"textColor":"danger","fontSize":"small"} -->
                                <p class="has-danger-color has-text-color has-small-font-size"><strong>ZONE 02 // ROOKERY</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">Rookery Tower</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>Climb above the canopy to watch herons, egrets, and migrating flamingos gather around the exposed nesting islands.</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size"><strong>Best window:</strong> late afternoon</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-panel","style":{"shadow":"var:preset|shadow|inset"},"backgroundColor":"base","borderColor":"info","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group is-style-system-panel has-border-color has-info-border-color has-base-background-color has-background" style="box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                                <div class="wp-block-group"><!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|20","bottom":"var:preset|spacing|10","left":"var:preset|spacing|20"}},"border":{"radius":"999px"},"typography":{"textAlign":"center"},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"tertiary-bg","fontSize":"display-3"} -->
                                    <p class="has-text-align-center has-tertiary-bg-background-color has-background has-display-3-font-size" style="border-radius:999px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20)">🐢</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->

                                <!-- wp:paragraph {"textColor":"info","fontSize":"small"} -->
                                <p class="has-info-color has-text-color has-small-font-size"><strong>ZONE 03 // SHALLOWS</strong></p>
                                <!-- /wp:paragraph -->

                                <!-- wp:heading {"level":3} -->
                                <h3 class="wp-block-heading">Turtle Shallows</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>Explore shaded banks where snapping turtles, sliders, and chorus frogs gather in slow water beneath cypress roots.</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:group {"className":"is-style-system-panel-footer","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"default"}} -->
                                <div class="wp-block-group is-style-system-panel-footer" style="border-style:none;border-width:0px"><!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size"><strong>Best window:</strong> after rainfall</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"shadow":"none","css":"transform:rotate(-1deg); "},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-custom-css" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:none"><!-- wp:group {"className":"is-style-system-panel","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"shadow":"6px 6px 9px rgba(0, 0, 0, 0.24)","border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":{"color":"var:preset|color|border-color","width":"2px"},"bottom":{"color":"var:preset|color|border-color","width":"4px"},"left":{"color":"var:preset|color|border-color","width":"1px"},"radius":{"topLeft":"3px","topRight":"3px","bottomLeft":"3px","bottomRight":"3px"}}},"backgroundColor":"warning","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-system-panel has-warning-background-color has-background" style="border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-right-color:var(--wp--preset--color--border-color);border-right-width:2px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:4px;border-left-color:var(--wp--preset--color--border-color);border-left-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);box-shadow:6px 6px 9px rgba(0, 0, 0, 0.24)"><!-- wp:group {"style":{"background":{"gradient":"var:preset|gradient|pattern-70"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"shadow":"var:preset|shadow|inset","border":{"bottom":{"color":"var:preset|color|current-mix","width":"3px"},"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"},"top":{"color":"var:preset|color|border-color","width":"1px"}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
                            <div class="wp-block-group has-contrast-color has-text-color has-link-color" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-color:var(--wp--preset--color--current-mix);border-bottom-width:3px;box-shadow:var(--wp--preset--shadow--inset)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|0","bottom":"var:preset|spacing|0","left":"var:preset|spacing|0","right":"var:preset|spacing|0"}},"background":{"gradient":"var:preset|gradient|pattern-80"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-default has-light-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--0);padding-right:var(--wp--preset--spacing--0);padding-bottom:var(--wp--preset--spacing--0);padding-left:var(--wp--preset--spacing--0)"><!-- wp:paragraph {"className":"is-style-system-badge","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
                                    <p class="is-style-system-badge has-dark-color has-text-color has-link-color"><strong>Trail conditions:</strong> <br>Boardwalk <mark style="background-color:#0085BA" class="has-inline-color">dry</mark> · Observation tower <mark style="background-color:#009933" class="has-inline-color">open</mark> · North loop <mark style="background-color:#C1403B" class="has-inline-color">muddy</mark></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"light","className":"is-style-button-square","fontSize":"small","systemDialogAction":true,"systemDialogTemplatePart":"offcanvas-part"} -->
                                        <div class="wp-block-button is-style-button-square"><a class="wp-block-button__link has-light-background-color has-background has-small-font-size has-custom-font-size wp-element-button">Open Field Map</a></div>
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
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:heading -->
        <h2 class="wp-block-heading">SystemStrap Mission Control</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>A complete application shell made from native Groups. The outer Panel establishes the workspace, nested surfaces divide responsibility, and Header and Footer regions anchor action without introducing a custom application component.</p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"has-base-background-color is-panel-wrapper","style":{"background":{"gradient":"var:preset|gradient|accent-150"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group has-base-background-color is-panel-wrapper"><!-- wp:group {"className":"is-style-system-flat-panel","style":{"background":{"gradient":"var:preset|gradient|pattern-130"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-system-flat-panel"><!-- wp:group {"className":"is-style-system-panel-header has-base-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-03"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel-header has-base-background-color"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>OPERATIONS // LIVE // RC-11</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"level":3,"fontSize":"display-4"} -->
                            <h3 class="wp-block-heading has-display-4-font-size">Mission Control</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p>A composable command surface for the final release run.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Review Queue</a></div>
                            <!-- /wp:button -->

                            <!-- wp:button -->
                            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Launch Run</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-04"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color"><!-- wp:group {"className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group is-style-default"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
                        <p><strong>Release candidate RC-11 is ready for final inspection.</strong></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"className":"is-style-system-badge","style":{"typography":{"textAlign":"right"}}} -->
                        <p class="has-text-align-right is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color has-light-color">ALL SYSTEMS NOMINAL</mark></strong></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:columns {"className":"is-style-equal-heights"} -->
                <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:columns {"className":"is-style-equal-heights"} -->
                        <div class="wp-block-columns is-style-equal-heights"><!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-04"}},"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color"><!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size"><strong>READINESS</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:heading {"fontSize":"display-3"} -->
                                    <h2 class="wp-block-heading has-display-3-font-size">96%</h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"textColor":"success"} -->
                                    <p class="has-success-color has-text-color"><strong>One visual review remains</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column"><!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-04"}},"layout":{"type":"constrained"}} -->
                                <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color"><!-- wp:paragraph {"fontSize":"small"} -->
                                    <p class="has-small-font-size"><strong>CHECKS</strong></p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:heading {"fontSize":"display-3"} -->
                                    <h2 class="wp-block-heading has-display-3-font-size">48/48</h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"textColor":"success"} -->
                                    <p class="has-success-color has-text-color"><strong>Registry and parser green</strong></p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-04"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>WARNINGS</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"fontSize":"display-3"} -->
                                <h2 class="wp-block-heading has-display-3-font-size">0</h2>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"textColor":"warning"} -->
                                <p class="has-warning-color has-text-color"><strong>No warnings detected</strong> </p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"50%"} -->
                    <div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-04"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>OPEN ITEMS</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"fontSize":"display-3"} -->
                            <h2 class="wp-block-heading has-display-3-font-size">3</h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"textColor":"warning"} -->
                            <p class="has-warning-color has-text-color"><strong>Assigned and in motion</strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-04"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color"><!-- wp:paragraph {"fontSize":"small"} -->
                            <p class="has-small-font-size"><strong>WINDOW</strong></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:heading {"fontSize":"display-3"} -->
                            <h2 class="wp-block-heading has-display-3-font-size">02:30</h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"textColor":"info"} -->
                            <p class="has-info-color has-text-color"><strong>Planned deployment time</strong></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"className":"is-style-equal-heights"} -->
                <div class="wp-block-columns is-style-equal-heights"><!-- wp:column {"width":"58%"} -->
                    <div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-04"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                                <h4 class="wp-block-heading">Release Runbook</h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                                <p class="is-style-system-badge"><strong><mark style="background-color:#0085BA" class="has-inline-color has-light-color">4 Stages</mark></strong></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:list {"className":"is-style-system-list is-action"} -->
                            <ul class="wp-block-list is-style-system-list is-action"><!-- wp:list-item -->
                                <li>Freeze release candidate</li>
                                <!-- /wp:list-item -->

                                <!-- wp:list-item -->
                                <li>Verify color and contrast fixtures</li>
                                <!-- /wp:list-item -->

                                <!-- wp:list-item -->
                                <li>Package distribution archive</li>
                                <!-- /wp:list-item -->

                                <!-- wp:list-item -->
                                <li>Approve and publish release</li>
                                <!-- /wp:list-item -->
                            </ul>
                            <!-- /wp:list -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"42%"} -->
                    <div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"className":"is-style-system-flat-panel has-secondary-bg-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-04"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group is-style-system-flat-panel has-secondary-bg-background-color"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                            <div class="wp-block-group"><!-- wp:heading {"level":4} -->
                                <h4 class="wp-block-heading">Release Pipeline</h4>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph {"className":"is-style-system-badge"} -->
                                <p class="is-style-system-badge"><strong><mark style="background-color:#009933" class="has-inline-color has-light-color">Ready</mark></strong></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:list {"className":"is-style-system-list"} -->
                            <ul class="wp-block-list is-style-system-list"><!-- wp:list-item -->
                                <li><strong>BUILD</strong> — complete</li>
                                <!-- /wp:list-item -->

                                <!-- wp:list-item -->
                                <li><strong>VERIFY</strong> — complete</li>
                                <!-- /wp:list-item -->

                                <!-- wp:list-item -->
                                <li><strong>SHIP</strong> — awaiting approval</li>
                                <!-- /wp:list-item -->
                            </ul>
                            <!-- /wp:list -->

                            <!-- wp:group {"className":"is-style-default","layout":{"type":"default"}} -->
                            <div class="wp-block-group is-style-default"><!-- wp:paragraph {"fontSize":"small"} -->
                                <p class="has-small-font-size">No blockers. Rollback package verified.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:group {"className":"is-style-system-panel-footer has-base-background-color","style":{"background":{"gradient":"var:preset|gradient|absolute-03"}},"layout":{"type":"default"}} -->
                <div class="wp-block-group is-style-system-panel-footer has-base-background-color"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
                    <div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
                        <p class="has-small-font-size"><strong>LAST CHECK:</strong> contrast fixtures verified across representative light and dark variations.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Export Report</a></div>
                            <!-- /wp:button -->

                            <!-- wp:button -->
                            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Approve Release</a></div>
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
</div>
<!-- /wp:group -->