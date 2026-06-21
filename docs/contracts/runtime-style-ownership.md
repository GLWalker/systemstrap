# Contract: Runtime Style Ownership

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.0

Last Updated: 2026-06-18

## Change Log

### 1.0

Initial runtime-style-ownership contract defining stylesheet ownership, queue lanes, duplication boundaries, and BuddyPress extension surfaces.

## Purpose

SystemStrap MUST treat stylesheet ownership and load order as explicit runtime architecture rather than incidental output.

SystemStrap MUST preserve these goals across all stylesheet-loading changes:

- clear separation between Core-owned, plugin-owned, and SystemStrap-owned CSS
- predictable queue ordering for frontend theme, variation, and user-authored Custom CSS
- extension of BuddyPress and Core surfaces without replacing them unnecessarily
- explicit documentation of intentional duplicate-loading exceptions

## Principles

- Prefer extending existing platform styles over replacing them.
- Prefer explicit queue ordering over accidental cascade wins.
- Prefer one owned surface per concern before adding new top-level stylesheets.
- Prefer documenting intentional duplication over hand-waving it away.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

The current runtime style ownership layer is implemented through these files:

- `docs/START.md`
- `docs/contracts/theme-json-design-system.md`
- `docs/contracts/color-runtime.md`
- `docs/contracts/variation-architecture.md`
- `inc/enqueue-assets.php`
- `inc/block-styles.php`
- `inc/dialog-renderer.php`
- `assets/css/strap-reset.css`
- `assets/css/main-styles.css`
- `assets/css/buddypress-theme-sync.css`
- `assets/css/buddypress-blocks.css`
- `assets/css/style-variations/*.css`
- `assets/js/main-scripts.js`

Runtime verification snapshots MAY be captured in:

- `docs/global-vars.html`

Those snapshots are evidence artifacts, not the canonical source of behavior.

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new stylesheet handle, queue bucket, duplicate-style exception, or plugin-extension stylesheet MUST be documented here in the same change set that introduces it.

## Ownership Model

SystemStrap currently participates in three ownership lanes:

1. Core-owned CSS
2. plugin-owned CSS
3. theme-owned CSS

SystemStrap MUST NOT present plugin-owned or Core-owned CSS as if the theme authored it.

SystemStrap MAY layer on top of those surfaces through explicit enqueue order, block-style registration, or inline `global-styles` mutation where separately governed contracts already allow it.

## Core-Owned Runtime Surface

The following CSS is currently treated as Core-owned:

- `global-styles`
- `wp-block-library`
- per-block inline Core styles
- block-support inline styles
- local font output
- admin bar and dashicons when WordPress loads them

SystemStrap MAY extend these surfaces.

SystemStrap MUST NOT silently replace them without a separately documented contract change.

## BuddyPress-Owned Runtime Surface

When BuddyPress is active, the following CSS is currently treated as plugin-owned:

- `bp-nouveau` or `bp-legacy-css`
- BuddyPress tooltips and related frontend styles
- BuddyPress block inline styles emitted by block packages
- BuddyPress admin bar extensions

SystemStrap MAY normalize or restyle these surfaces through:

- `assets/css/buddypress-theme-sync.css`
- `assets/css/buddypress-blocks.css`
- BuddyPress block style variation CSS

SystemStrap MUST treat BuddyPress as an extension target, not as theme-authored base CSS.

## SystemStrap-Owned Runtime Surface

SystemStrap currently owns these primary stylesheet lanes:

- `strap-reset`
- `strap-main-styles`
- `strap-buddypress-sync`
- `strap-buddypress-blocks`
- block style variation CSS under `assets/css/style-variations/`
- explicit runtime exception handles such as `strap-carousel-styles`, `strap-button-icon`, and dialog CSS

These handles are the theme-owned styling surface.

## JavaScript Anchor Surface

SystemStrap intentionally ships `strap-main-scripts` from `assets/js/main-scripts.js` as a no-op runtime anchor.

The handle MUST remain registered and enqueued so child themes and future inline runtime behaviors have a stable attachment point.

The file MUST NOT be described as dead code merely because it does not yet contain executable logic.

## Frontend Queue Contract

The current frontend queue contract is:

1. `strap-reset`
2. BuddyPress plugin/theme-pack CSS
3. `strap-buddypress-sync`
4. `strap-buddypress-blocks`
5. Core block library styles
6. `global-styles`
7. `strap-main-styles`
8. `strap-child-style`
9. BuddyPress block style variation CSS
10. remaining SystemStrap theme CSS
11. `wp-block-custom-css` and `global-styles-custom-css`
12. everything else

This order is implemented by `strap_reorder_frontend_style_queue()` in `inc/enqueue-assets.php`.

This queue order is part of the runtime contract and MUST NOT be changed casually.

## No-BuddyPress Ownership Tree

When BuddyPress is inactive, the practical ownership tree is:

```txt
frontend head
├── WordPress Core CSS
│   ├── global-styles
│   ├── wp-block-library
│   ├── per-block inline styles
│   └── block-support inline styles
└── SystemStrap CSS
    ├── strap-reset
    ├── strap-main-styles
    ├── core block style variations
    ├── explicit runtime exception styles
    └── global-styles-custom-css
```

## BuddyPress Ownership Tree

When BuddyPress is active, the practical ownership tree is:

```txt
frontend head
├── WordPress Core CSS
│   ├── global-styles
│   ├── wp-block-library
│   ├── per-block inline styles
│   └── block-support inline styles
├── BuddyPress CSS
│   ├── theme-pack CSS
│   ├── tooltips and utility CSS
│   └── BuddyPress block inline styles
└── SystemStrap CSS
    ├── strap-reset
    ├── strap-buddypress-sync
    ├── strap-buddypress-blocks
    ├── strap-main-styles
    ├── BuddyPress block style variations
    ├── core block style variations
    ├── explicit runtime exception styles
    └── global-styles-custom-css
```

## Duplication Exception Contract

The following duplication is currently intentional and MUST NOT be treated as accidental without evidence:

- `core-button-system-icon.css`
  - auto-registered as a block style through `inc/block-styles.php`
  - explicitly enqueued as `strap-button-icon` through `inc/enqueue-assets.php`

The rationale is:

- the file participates in normal block-style registration
- the icon button treatment is also needed outside purely block-style-triggered assumptions

Any new duplicate-style exception MUST be documented here in the same change set that introduces it.

## BuddyPress Extension Boundary

SystemStrap currently extends BuddyPress through three layers:

1. `assets/css/buddypress-theme-sync.css`
2. `assets/css/buddypress-blocks.css`
3. BuddyPress block style variation CSS

The current responsibilities are:

- `buddypress-theme-sync.css`
  - broad BuddyPress Nouveau normalization and token-aware extension
- `buddypress-blocks.css`
  - BuddyPress block-owned base layout and editor/frontend parity
- BuddyPress block style variation CSS
  - optional chrome treatments such as panel, nav, or heading variants

These layers MUST remain distinct unless a later contract change intentionally collapses them.

## Shared Variation Family Contract

SystemStrap MAY use one shared CSS asset across multiple BuddyPress blocks when:

- the visual treatment is identical in purpose
- the DOM targets are verified for each participating block
- each block still receives its own editor-visible style variation registration

This pattern is currently approved for shared BuddyPress widget-heading chrome.

## Pollution Boundary Contract

SystemStrap currently has:

- low-to-moderate style pollution without BuddyPress
- moderate-to-high total head footprint with BuddyPress active

That larger BuddyPress-active footprint MUST NOT be described as purely theme-created noise.

The theme's responsibility is to:

- keep its own owned layers explicit
- avoid replacing Core or BuddyPress CSS without necessity
- document intentional overrides and duplicate-style exceptions

## Prohibited Regressions

SystemStrap MUST NOT introduce any of the following regressions into the covered runtime-style-ownership layer:

- removing Core `global-styles` simply to simplify queue management
- moving theme-owned variation CSS ahead of Core `global-styles`
- letting theme-owned Custom CSS print before theme and variation layers
- collapsing BuddyPress sync, base block styles, and variation styles into one undocumented stylesheet
- introducing new duplicate-style handles without documenting the rationale
