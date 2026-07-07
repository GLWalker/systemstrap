System UI Cleanup Guide

Remaining / completed checklist
- [x] Root out duplicate System UI authority in `main-styles.css`
- [x] Fix tabs variable scoping in the editor lane
- [x] Fix selector drift and copy/paste targeting in query overlays
- [x] Audit and patch confirmed destructive `background` shorthand
- [x] Restore nested header/body/footer edge joins for active query patterns
- [x] Restore parent/root borders for archives, categories, and page-list System Lists
- [x] Restore plain list-block edge-to-edge behavior inside System Panels
- [x] Sync `docs/system-ui.css` to corrected runtime selectors
- [x] Add a generic default `core/query` System UI overlay for plain Query Loop usage
- [ ] Run the query-specific QA matrix across all supported query/listing patterns
- [ ] Confirm pagination overlay consistency across all query patterns
- [ ] Classify nested behaviors as intentional, defect, or backlog
- [ ] Do dead-weight cleanup only after runtime stability is confirmed

This is the order I’d use so we root out real defects first, without breaking the nested overlay model or accidentally flattening the system.
What this guide is for
Fix confirmed System UI lane defects one by one.
Keep base styles intact unless a defect is proven to live there.
Preserve editor-assigned colors and the nested surface model.
Avoid “cleanup” passes that silently redesign behavior.
What this guide is not for
No redesign of System UI architecture.
No renaming slugs.
No refactor of base query pattern styling.
No rewriting docs/system-ui.css until runtime behavior is corrected.
Freeze the authority map before touching anythingRuntime overlay files to treat as primary:[core-group-system-panel.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-group-system-panel.css)
[core-list-system-list.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-list-system-list.css)
[core-accordion-system-accordion.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-accordion.css)
[core-accordion-system-tabs.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css)
[core-accordion-system-tabs-vertical.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css)
[core-query-system-ui-query.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-query-system-ui-query.css)

Supporting file that may still be leaking authority:[main-styles.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/main-styles.css)

Documentation authority map:[docs/system-ui.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/docs/system-ui.css)

Success condition:We can answer, for each behavior, “which file owns it?”

Root out duplicate System UI authority in main-styles.cssInspect the System UI-like regions already confirmed:[main-styles.css (line 311)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/main-styles.css:311)
[main-styles.css (line 406)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/main-styles.css:406)

Goal:Identify rules that are pretending to be System UI overlays instead of staying base-safe.

Questions to answer for each rule:Is this base behavior?
Is this System UI overlay behavior?
Does this rule flatten layered backgrounds by forcing background: transparent?

Fix order:First remove or relocate only confirmed overlay ownership leaks.
Do not touch neutral base layout or typography rules here.

Success condition:main-styles.css no longer overrides System UI surface layering.

Fix variable scoping bugs in tabs before touching visualsInspect:[core-accordion-system-tabs.css (line 7)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css:7)
[core-accordion-system-tabs.css (line 161)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css:161)
[core-accordion-system-tabs-vertical.css (line 7)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css:7)
[core-accordion-system-tabs-vertical.css (line 240)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css:240)

Goal:Make sure editor fallback is reading variables that actually exist in the editor lane.

Rule:Fix scope first, style second.

Success condition:Editor fallback no longer depends on frontend-only variable declarations.

Fix selector drift and copy/paste mistakes in query overlaysInspect:[core-query-system-ui-query.css (line 273)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-query-system-ui-query.css:273)

Goal:Remove accidental cross-component targeting like latest-posts rules hitting directory selectors.

Method:For each selector block, verify its root component and its descendants match.

Success condition:query-latest-posts-_ rules target latest-posts markup only.
query-directory-listing-_ rules target directory markup only.
Shared rules are intentionally shared, not accidentally mixed.

Audit destructive background: shorthand usagePriority files:[core-query-system-ui-query.css (line 44)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-query-system-ui-query.css:44)
[core-group-system-panel.css (line 224)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-group-system-panel.css:224)
[main-styles.css (line 367)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/main-styles.css:367)

Goal:Separate safe shorthand from destructive shorthand.

Test for each occurrence:Does this reset background-image?
Does this kill backdrop-filter?
Does this wipe editor-assigned background layers?
Is the reset intentional because this element should be flat?

Success condition:Only elements that are meant to flatten surfaces use flattening rules.

Verify nested-panel behavior against your actual model, not the reviewer’sInspect:[core-group-system-panel.css (line 190)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-group-system-panel.css:190)
[core-group-system-panel.css (line 224)](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-group-system-panel.css:224)

Goal:Decide which nested behaviors are intentional and which are accidental.

Explicitly classify each nested case:Nested list inside panel
Nested query inside panel
Nested accordion/details inside panel
Intentional nested card inside panel

Important rule:Do not “fix” nested chrome by globally flattening all nested panels.

Success condition:Nested overlays suppress only the layers they are supposed to suppress.

Run a query-specific QA matrix after every query overlay changeTest these blocks:Query Loop / Post Template
Latest Posts
Directory listing pattern
Query directory grid pattern
Any currently-supported listing-style blocks using core-query-system-ui-query.css

Test each in:Standalone
Nested inside is-style-system-panel
With editor background color
With editor text color
With images
Without images
First item
Middle item
Last item
Narrow viewport
Wide viewport

Success condition:No doubled borders, no collapsed radii, no dead footer/header joins, no lost overlay layers.

Treat footer/header edge-to-edge joins as a dedicated passFiles to inspect first:[core-group-system-panel.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-group-system-panel.css)
[core-query-system-ui-query.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-query-system-ui-query.css)

Goal:Ensure query bodies, header bands, and footer bands all honor the same edge logic when nested.

Rule:Do not special-case only latest-posts if the same join contract should apply to directory listings too.

Success condition:Header, body rows, and footer all stretch with the same edge model in nested System UI panels.

Treat pagination as its own overlay component, not an afterthoughtInspect:[core-query-system-ui-query.css](/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/assets/css/style-variations/core-query-system-ui-query.css)
any existing pagination style variation file if one exists for System UI pagination

Goal:Confirm pagination is picking up the intended System UI panel/list overlay treatment rather than partial inherited styles.

Questions:Is pagination surface-owning itself?
Is it expecting a separate style slug?
Is it inheriting from query footer correctly?

Success condition:Pagination circles, arrows, and footer band behave consistently across all query patterns.

Do a dead-weight cleanup only after runtime bugs are solvedTargets:redundant border-color: transparent; followed immediately by real border color
duplicate modal/panel exclusion selector lists
obvious copy/paste leftovers

Rule:No cleanup before behavior is proven stable.

Success condition:You remove only rules that are demonstrably dead, not merely ugly.

Update docs/system-ui.css lastOnly after runtime files are settled.
Goal:Make the doc a precise authority mirror again.

Include:every active selector group
nested panel behavior
query/list/grid/list-flush behavior
tabs/editor fallback ownership

Do not include:base styling
speculative future cleanup

Success condition:No guessing is required to understand System UI behavior from the doc.

Keep a decision log as you goFor each issue, record:confirmed defect
intentional behavior
reviewer concern but unproven
future enhancement

This matters because some of that feedback is real, and some of it is somebody trying to flatten a layered system into a Bootstrap brain.

Recommended execution order
main-styles.css authority leak
tabs variable scope
query selector drift
shorthand background audit
nested panel/query edge joins
pagination overlay
dead-weight cleanup
doc sync
Simple triage labels to use
Fix now: proven defect, active runtime conflict
Verify visually: plausible but not code-proven
Intentional: matches nested overlay model
Backlog: good idea, not current breakage
