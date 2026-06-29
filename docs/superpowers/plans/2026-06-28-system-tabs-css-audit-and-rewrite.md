# System Tabs CSS Audit And Rewrite Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Re-audit and rewrite the `system-tabs` and `system-tabs-vertical` block-style CSS so the tabs behave like true SystemStrap System UI surfaces, with `system-panel` and `system-list` treated as the authority references.

**Architecture:** This plan treats the existing tabs styles as a drifted runtime surface that has accumulated overlapping selectors, mixed state logic, and inconsistent System UI layering. The rewrite will inventory every current tabs selector, compare it against the `system-panel` and `system-list` authority surfaces, then replace both tab stylesheets with tighter full-file rewrites that separate structural layout from shared surface behavior, state deltas, seam behavior, editor fallback, and any truly necessary nested overrides.

**Tech Stack:** WordPress block-style variation CSS, SystemStrap theme contracts, core accordion markup transformed by `accordion-tabs.js`

---

## File Structure Map

### Audit Inputs

- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css`
  - Current horizontal tabs block-style variation.
  - Contains frontend tablist, tab, panel, seam, and editor fallback rules.
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css`
  - Current vertical tabs block-style variation.
  - Contains desktop vertical layout, mobile horizontal fallback, seam rules, and editor fallback rules.
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-accordion.css`
  - Authority for accordion/header/panel System UI token behavior.
  - Source of truth for nested-in-panel behavior for accordion surfaces.
- `wp-content/themes/systemstrap/assets/css/style-variations/core-group-system-panel.css`
  - Authority for panel shell behavior, nested flush logic, and anti-double-chrome rules.
- `wp-content/themes/systemstrap/assets/css/style-variations/core-list-system-list.css`
  - Authority for list surface behavior, nested surface behavior, and hover patterns.
- `wp-content/themes/systemstrap/assets/css/style-variations/core-details-system-details.css`
  - Secondary authority for header/body/open-state behavior aligned with accordion semantics.
- `wp-content/themes/systemstrap/assets/js/accordion-tabs.js`
  - Runtime transform reference only.
  - MUST NOT change during the CSS audit/rewrite unless a future task explicitly scopes JS changes.
- `wp-content/themes/systemstrap/inc/dynamic-styles.php`
  - Future follow-up reference only.
  - Not part of this rewrite, but called out because a later task may export richer per-item UI variables or state-aware color helpers.
- `wp-content/themes/systemstrap/docs/contracts/variation-architecture.md`
  - Contract source for tabs runtime responsibilities and block-style variation boundaries.
- `wp-content/themes/systemstrap/docs/contracts/theme-json-design-system.md`
  - Contract source for design-system token ownership and runtime variable behavior.

### Rewrite Outputs

- Replace: `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css`
  - Full-file rewrite for horizontal tabs.
- Replace: `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css`
  - Full-file rewrite for vertical tabs, sharing the same surface logic where possible.
- Modify: `wp-content/themes/systemstrap/docs/contracts/variation-architecture.md`
  - Update the tabs contract after the rewrite lands so the contract reflects the new, consolidated surface structure and authority alignment.

### Explicitly Out Of Scope

- `wp-content/themes/systemstrap/assets/js/accordion-tabs.js`
- `wp-content/themes/systemstrap/assets/js/variations/strap-accordion-tabs.js`
- `wp-content/themes/systemstrap/inc/dynamic-styles.php`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-accordion.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-details-system-details.css`
- Any changes to the tabs block variation registrations, editor inserter behavior, or dynamic color export pipeline

## Confirmed Findings

### Runtime Boundaries

- `core-accordion-system-tabs.css` and `core-accordion-system-tabs-vertical.css` are the tabs CSS runtime surfaces.
- `accordion-tabs.js` owns the frontend DOM transform and seam geometry export.
- The tab files should style:
  - accordion root in tab variations
  - generated `.system-tabs__tablist`
  - generated `.system-tabs__tab`
  - generated `.system-tabs__panel`
  - editor fallback for tab variations

### Surface Drift Against Authorities

- `system-panel` is the authority for:
  - system-ui image/filter layering
  - shell-level border and shadow behavior
  - nested flush logic
  - anti-double-chrome rules
- `system-list` is the authority for:
  - nested surface/image behavior
  - hover rhythm for interactive rows
  - direct-vs-nested surface separation
- `system-accordion` and `system-details` are the authority for:
  - header/body/open-state semantics
  - nested-in-panel overrides

### Known Tabs Problems From Current Audit

- Horizontal and vertical tabs duplicate a large amount of surface/state/editor logic instead of sharing a common behavioral shape.
- State selectors are split between:
  - base tab rule
  - `:not(.has-background):not([style*="background"])`
  - `[aria-selected="true"]`
  - `.has-background[aria-selected="true"]`
  This causes System UI image/filter behavior to be conditional when it should usually be surface-wide.
- Resting tabs only recently gained the System UI image/filter stack; the implementation is still scattered across multiple selectors.
- Nested surface behavior from `system-accordion` is missing from tabs:
  - no `system-ui-surface-nested`
  - no `system-ui-background-image-nested`
  - no explicit anti-double-chrome handling like panel/list
- Horizontal and vertical editor fallbacks currently carry their own repeated accordion-style fallback blocks instead of one clearly defined shared editor presentation model.
- Horizontal tabs currently contain a debug artifact:
  - `border-bottom-color: red !important;`
  This MUST be removed in the rewrite.

### Authority Alignment Requirements

These behaviors are now required for the tabs rewrite:

- Resting header/tab background:
  - `--wp--custom--system-ui-surface-banner`
- Header/tab hover background:
  - `--wp--custom--system-ui-list-hover-bg`
- Active/open header/tab background:
  - `--wp--custom--system-ui-active-bg`
- Body/panel background:
  - `--wp--custom--system-ui-surface`
- Border color:
  - `--wp--custom--system-ui-border-color`
- Surface image/filter stack on true System UI surfaces:
  - `--wp--custom--system-ui-background-image`
  - `--wp--custom--system-ui-backdrop-filter`

### Nested Behavior Rules

- Existing nested-in-panel behavior in `system-accordion` and `system-details` MUST remain authoritative.
- Tabs MUST NOT invent broader nested rules than the panel/list/accordion authorities support.
- The rewrite MAY add nested tabs behavior only if it directly mirrors existing authority patterns:
  - surface-nested token usage
  - background-image-nested token usage
  - anti-double-chrome behavior when nested inside `system-panel`

## Selector Inventory To Use During Rewrite

### Horizontal Tabs: Current Selector Groups

- Root tokens and layout
  - `.wp-block-accordion.is-style-system-tabs`
- Shared text-decoration reset
  - `.system-tabs__tab`
  - `.system-tabs__tab *`
- Frontend layout
  - `.system-tabs__tablist`
  - `.system-tabs__panel`
- Base tab surface
  - `.system-tabs__tab`
- Resting tab surface without user background
  - `.system-tabs__tab:not(.has-background):not([style*="background"])`
- Hover paths
  - `.system-tabs__tab:not(.has-background):not([style*="background"]):hover`
  - `.system-tabs__tab.has-background:hover`
  - `.system-tabs__tab[style*="background"]:hover`
- Active tab state
  - `.system-tabs__tab[aria-selected="true"]`
  - `.system-tabs__tab[aria-selected="true"] > *`
  - `.system-tabs__tab[aria-selected="true"]::before`
  - `.system-tabs__tab:not(.has-background):not([style*="background"])[aria-selected="true"]`
  - `.system-tabs__tab.has-background[aria-selected="true"]`
  - `.system-tabs__tab[style*="background"][aria-selected="true"]`
- Focus
  - `.system-tabs__tab:focus-visible`
- Panel seam
  - `.system-tabs__panel::before`
- Panel background without user background
  - `.system-tabs__panel:not(.has-background):not([style*="background"])`
- Panel child margin cleanup
  - `.system-tabs__panel > *:first-child`
- Editor fallback
  - `.editor-styles-wrapper .wp-block-accordion.is-style-system-tabs`
  - `::before`
  - `>.wp-block-accordion-item`
  - `>.wp-block-accordion-item + .wp-block-accordion-item`
  - `>.wp-block-accordion-item:has(+ .wp-block-accordion-item)`
  - `.wp-block-accordion-heading`
  - `.wp-block-accordion-heading__toggle`
  - stacked/open hover variants
  - `.wp-block-accordion-panel`
  - first/last child margin cleanup

### Vertical Tabs: Current Selector Groups

- Root tokens and layout
  - `.wp-block-accordion.is-style-system-tabs-vertical`
- Shared text-decoration reset
  - `.system-tabs__tab`
  - `.system-tabs__tab *`
- Frontend layout
  - `.system-tabs__tablist`
  - `.system-tabs__panel`
- Base tab surface
  - `.system-tabs__tab`
- Resting tab surface without user background
  - `.system-tabs__tab:not(.has-background):not([style*="background"])`
- Hover paths
  - `.system-tabs__tab:not(.has-background):not([style*="background"]):hover`
  - `.system-tabs__tab.has-background:hover`
  - `.system-tabs__tab[style*="background"]:hover`
- Active tab state
  - `.system-tabs__tab[aria-selected="true"]`
  - `.system-tabs__tab[aria-selected="true"] > *`
  - `.system-tabs__tab[aria-selected="true"]::before`
  - `.system-tabs__tab:not(.has-background):not([style*="background"])[aria-selected="true"]`
  - `.system-tabs__tab.has-background[aria-selected="true"]`
  - `.system-tabs__tab[style*="background"][aria-selected="true"]`
- Desktop-only seam/layout state
  - `@media (min-width: 701px)` tablist and active tab selectors
- Mobile-only fallback state
  - `@media (max-width: 700px)` tablist, tab, panel, active-tab selectors
- Panel seam
  - `.system-tabs__panel::before`
  - media-query seam variants
- Panel background without user background
  - `.system-tabs__panel:not(.has-background):not([style*="background"])`
- Panel child margin cleanup
  - `.system-tabs__panel > *:first-child`
- Editor fallback
  - `.editor-styles-wrapper .wp-block-accordion.is-style-system-tabs-vertical`
  - `::before`
  - `>.wp-block-accordion-item`
  - `>.wp-block-accordion-item + .wp-block-accordion-item`
  - `>.wp-block-accordion-item:has(+ .wp-block-accordion-item)`
  - `.wp-block-accordion-heading`
  - `.wp-block-accordion-heading__toggle`
  - stacked/open hover variants
  - `.wp-block-accordion-panel`
  - first/last child margin cleanup

## Rewrite Strategy

### Shared Design Rules

The rewrite should make the shared System UI surface behavior obvious and reusable between horizontal and vertical tabs:

- one shared tab-surface rule pattern per file
- state selectors change only deltas
- image/filter stack belongs to the surface, not only to some states
- user-selected backgrounds SHOULD layer with the System UI stack where safe instead of opting the tab out of the stack
- seam rules should not restate unrelated surface logic

### Horizontal File: Required Structure

The rewritten `core-accordion-system-tabs.css` SHOULD be ordered like this:

1. Root token lane
2. Frontend layout lane
3. Base tab surface lane
4. Tab state delta lane
5. Panel surface lane
6. Seam lane
7. Editor fallback lane
8. Nested override lane, only if the audit proves it is necessary and directly authority-aligned

### Vertical File: Required Structure

The rewritten `core-accordion-system-tabs-vertical.css` SHOULD be ordered like this:

1. Root token lane
2. Shared base surface lane
3. Desktop vertical layout lane
4. Mobile horizontal fallback lane
5. State delta lane
6. Panel surface lane
7. Seam lane
8. Editor fallback lane
9. Nested override lane, only if the audit proves it is necessary and directly authority-aligned

### Shared Rules To Consolidate

The rewrite SHOULD consolidate repeated declarations for:

- `text-decoration: none !important`
- `background-image: var(--wp--custom--system-ui-background-image, none)`
- `backdrop-filter: var(--wp--custom--system-ui-backdrop-filter, none)`
- `-webkit-backdrop-filter: var(--wp--custom--system-ui-backdrop-filter, none)`
- border token usage
- shared focus ring behavior
- panel child first/last margin cleanup
- editor accordion fallback surfaces

### Rules To Keep Separate

These rules should remain split because they are real behavior differences:

- horizontal vs vertical layout geometry
- desktop vertical seam geometry vs mobile horizontal seam geometry
- horizontal active-tab overlap behavior vs vertical active-tab join behavior
- any editor label text differences

## Replacement-Ready Rewrite Requirements

When implementation begins, the engineer should replace each tabs stylesheet in full rather than patching isolated selectors again.

### Horizontal Rewrite Must Include

- removal of the debug red bottom border
- a single authoritative resting tab surface rule
- active-state selectors that change only:
  - background delta
  - join/overlap geometry
  - any active depth treatment
- panel surface rules that consistently carry System UI image/filter behavior
- editor fallback that behaves like a labeled System UI accordion, not a partial fake tab layout

### Vertical Rewrite Must Include

- a single authoritative resting tab surface rule
- one desktop active join model
- one mobile active join model
- consistent panel surface logic matching horizontal tabs
- editor fallback that behaves like a labeled System UI accordion

### Optional Nested Rewrite Additions

Only add these if directly validated against authority behavior:

- tabs nested inside `.is-style-system-panel` use:
  - `--wp--custom--system-ui-surface-nested`
  - `--wp--custom--system-ui-background-image-nested`
- nested tabs disable extra chrome the same way nested panels/lists do

If this cannot be implemented cleanly without creating new CSS complexity, defer nested tabs to a dedicated follow-up task.

## Testing Requirements

### Visual Test Matrix

Test these variations after the rewrite:

- default/base variation
- Quartz variation
- any variation that uses obvious System UI image/filter treatment

Test these states:

- horizontal tabs, resting
- horizontal tabs, hover
- horizontal tabs, active
- horizontal tabs with editor-picked background color on tab headers
- horizontal tabs with editor-picked background color on panels
- vertical tabs, desktop resting/hover/active
- vertical tabs, mobile fallback resting/hover/active
- system-tabs editor fallback
- system-tabs-vertical editor fallback

Test these placement contexts:

- standalone tabs
- tabs nested inside `system-panel`
- tabs adjacent to panel headers/footers if supported

### Runtime Regression Checks

- confirm `accordion-tabs.js` still transforms the accordion frontend correctly
- confirm no editor recovery errors occur for existing tab variation content
- confirm focus ring remains visible and above seam treatment
- confirm no tab state loses border visibility unexpectedly

## Task Breakdown

### Task 1: Freeze The Audit And Authority Map

**Files:**
- Modify: `wp-content/themes/systemstrap/docs/superpowers/plans/2026-06-28-system-tabs-css-audit-and-rewrite.md`

- [ ] **Step 1: Re-read the audit inputs before editing the tabs files**

Read:
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-accordion.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-group-system-panel.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-list-system-list.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-details-system-details.css`

Expected: a fresh selector inventory and no reliance on earlier conversational assumptions.

- [ ] **Step 2: Mark every tabs selector into one of five buckets**

Buckets:
- structure/layout
- base surface
- state delta
- seam/join
- editor fallback

Expected: every selector in both tabs files has one clear responsibility before any rewrite begins.

- [ ] **Step 3: Flag selectors that currently overlap or restate non-delta surface behavior**

Flag examples:
- state selectors that restate full surface image/filter logic
- editor selectors that duplicate frontend state semantics
- separate selectors that differ only by horizontal vs vertical layout, not by true behavior

Expected: a deletion/merge list exists before rewriting code.

### Task 2: Write The Full Horizontal Replacement

**Files:**
- Replace: `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css`

- [ ] **Step 1: Create a full-file backup before replacing contents**

Run:
```bash
cp wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css wp-content/themes/systemstrap/.backups/core-accordion-system-tabs.css.$(date +%Y%m%d-%H%M%S).bak
```

Expected: backup file created under `.backups/`.

- [ ] **Step 2: Rewrite the file in one pass using the lane order from this plan**

Implementation requirements:
- remove the debug red border
- keep root tokens together at the top
- keep one authoritative resting tab surface rule
- move active-state-only declarations into active selectors
- keep seam rules isolated from surface rules
- keep editor fallback isolated from frontend layout rules

Expected: no selector in the rewritten file should style more than one responsibility lane.

- [ ] **Step 3: Verify the rewritten horizontal file for drift**

Run:
```bash
rg -n "red !important|system-tabs__tab:not\\(.has-background\\)|background-image: var\\(--wp--custom--system-ui-background-image, none\\)|backdrop-filter: var\\(--wp--custom--system-ui-backdrop-filter, none\\)" wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css
```

Expected:
- no debug red rule remains
- the main resting-surface rule is easy to identify
- image/filter declarations are not scattered across unnecessary duplicate selectors

### Task 3: Write The Full Vertical Replacement

**Files:**
- Replace: `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css`

- [ ] **Step 1: Create a full-file backup before replacing contents**

Run:
```bash
cp wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css wp-content/themes/systemstrap/.backups/core-accordion-system-tabs-vertical.css.$(date +%Y%m%d-%H%M%S).bak
```

Expected: backup file created under `.backups/`.

- [ ] **Step 2: Rewrite the file in one pass using the lane order from this plan**

Implementation requirements:
- preserve desktop vertical behavior and mobile fallback behavior
- keep one authoritative resting tab surface rule
- isolate media-query layout/seam deltas from base surface behavior
- keep editor fallback aligned to the horizontal rewrite structure

Expected: vertical file differs from horizontal only where layout and seam geometry truly require it.

- [ ] **Step 3: Verify the rewritten vertical file for drift**

Run:
```bash
rg -n "system-tabs__tab:not\\(.has-background\\)|background-image: var\\(--wp--custom--system-ui-background-image, none\\)|backdrop-filter: var\\(--wp--custom--system-ui-backdrop-filter, none\\)|@media \\(max-width: 700px\\)|@media \\(min-width: 701px\\)" wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css
```

Expected:
- one clear resting-surface path
- one desktop seam lane
- one mobile seam lane
- no unnecessary duplication of surface logic across state selectors

### Task 4: Validate Against Authority Surfaces

**Files:**
- Compare: `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css`
- Compare: `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css`
- Compare against:
  - `wp-content/themes/systemstrap/assets/css/style-variations/core-group-system-panel.css`
  - `wp-content/themes/systemstrap/assets/css/style-variations/core-list-system-list.css`
  - `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-accordion.css`
  - `wp-content/themes/systemstrap/assets/css/style-variations/core-details-system-details.css`

- [ ] **Step 1: Confirm token semantics match the authorities**

Required match:
- resting headers/tabs => `surface-banner`
- hover => `list-hover-bg`
- active headers/tabs => `active-bg`
- body/panel => `surface`
- image/filter stack remains on the surface

Expected: no tabs selector should contradict this token mapping.

- [ ] **Step 2: Confirm nested behavior is either aligned or intentionally deferred**

Check:
- nested surface/image handling
- anti-double-chrome behavior
- flush edge behavior inside `system-panel`

Expected:
- either tabs mirror the authority cleanly
- or the plan/implementation notes explicitly defer nested tabs to a future task

### Task 5: Contract And Test Handoff

**Files:**
- Modify: `wp-content/themes/systemstrap/docs/contracts/variation-architecture.md`

- [ ] **Step 1: Update the tabs contract entry after the CSS rewrite lands**

Document:
- the rewritten file responsibilities
- shared surface alignment to System UI authority surfaces
- any explicit nested behavior decision

Expected: contract reflects the rewritten runtime truth, not the old drifted structure.

- [ ] **Step 2: Run the visual test matrix**

Manual test checklist:
- horizontal tabs in Base
- horizontal tabs in Quartz
- vertical tabs in Base
- vertical tabs in Quartz
- editor fallback labels
- nested tabs inside `system-panel`, if supported

Expected: the tabs read as true System UI surfaces and no longer require paint-order hacks just to resemble the design system.

## Future Follow-Up Reminder

This is NOT part of the rewrite task, but should be captured for a separate scoped task:

- evaluate `wp-content/themes/systemstrap/inc/dynamic-styles.php` as a source for exported per-item or state-aware UI variables
- investigate whether tab border color can be derived from the tab surface/background more elegantly
- investigate whether panel background or heading background can be exported into runtime CSS variables for improved seam/join polish
- investigate whether multi-layer dynamic color surfaces should become a formal design-system feature rather than ad hoc tab-only logic

## Self-Review

### Spec Coverage

- full tabs selector audit: covered
- authority comparison to panel/list: covered
- replacement-ready rewrite structure: covered
- future dynamic-styles reminder: covered
- contract update path: covered

### Placeholder Scan

- no `TODO`
- no `TBD`
- no “implement later” placeholders
- explicit file paths are present for each implementation task

### Type And Name Consistency

- file names, CSS surfaces, and contract paths match the current project structure
- horizontal and vertical files are named consistently throughout
- `system-panel`, `system-list`, `system-accordion`, `system-details`, and `accordion-tabs.js` references match current runtime naming

## Execution Handoff

Plan complete and saved to `wp-content/themes/systemstrap/docs/superpowers/plans/2026-06-28-system-tabs-css-audit-and-rewrite.md`. Two execution options:

**1. Subagent-Driven (recommended)** - I dispatch a fresh subagent per task, review between tasks, fast iteration

**2. Inline Execution** - Execute tasks in this session using executing-plans, batch execution with checkpoints

Which approach?
