# Contract: Variation Architecture

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 3.22

Last Updated: 2026-07-18

## Change Log

### 3.22

Updated the live filesystem variation inventory to match the current shipped style families. Replaced the stale `quartz`, `slate`, `superhero`, `united`, and `vapor` references with the active `breeze`, `capsule`, `colony`, `forge`, `polymer`, `reboot`, `slab`, and `twenty` families across the governed filesystem tree and explicit style-file registries.

### 3.21

Delegated the detailed Splide and carousel runtime behavior to `docs/contracts/carousel-runtime.md`. `variation-architecture.md` remains authoritative for variation registration, saved class contracts, and enqueue boundaries, while the new dedicated carousel contract now governs runtime ownership, thumbnail-versus-medium detection, state classes, underflow rules, and `has-nav-center-out` handling.

### 3.20

Documented the current SystemStrap carousel runtime contract more explicitly. The carousel variations continue to save the same Group-based variation markup and class names, while `assets/js/carousel-nav.js` now owns direct-slide discovery, runtime Splide markup injection, normalized thumbnail-mode classes, underflow state, wrapper-scoped navigation binding, and thumbnail measurement from the rendered track width. The carousel CSS remains explicitly enqueued rather than auto-registered, and the editor preview keeps an unmounted horizontal fallback while mirroring the frontend medium-versus-thumbnail detection rule.

### 3.19

Rewrote `core-accordion-system-tabs.css` and `core-accordion-system-tabs-vertical.css` into explicit token, layout, state, panel, seam, editor-fallback, and nested-override lanes so both tab styles now align to the System UI authority surfaces. The tabs CSS now consumes `system-ui-surface-banner`, `system-ui-list-hover-bg`, `system-ui-active-bg`, `system-ui-surface`, and `system-ui-border-color` directly, keeps the panel-owned seam mask contract intact, preserves the accordion-like editor fallback with tab labels, and leaves `accordion-tabs.js` as the unchanged transform and geometry layer.

### 3.18

Added `assets/js/variations/strap-accordion-tabs.js` as an editor-only block-variation registration surface for `core/accordion`. The file registers two inserter variations, `strap-accordion-tabs` and `strap-accordion-tabs-vertical`, that preconfigure the existing System Tabs and System Vertical Tabs styles with three starter accordion items and Base-preset heading/panel backgrounds without changing the frontend tabs runtime.

### 3.17

Updated the System Tabs seam contract so the panel now owns the seam mask that hides its joining border beneath the active tab. `accordion-tabs.js` now writes active-tab geometry onto the active panel, while the horizontal and vertical tab variation styles paint the seam cover from the panel pseudo-element and leave the tab pseudo-element responsible only for active-state depth styling.

### 3.16

Updated the System Tabs active-state presentation so the selected tab keeps its joining edge transparent while a higher-layer inherited-background seam strip covers the panel join. Added a shared active-state depth overlay to the tab surface so selection remains visually obvious even when user styling changes background, border, or panel values independently.

### 3.15

Updated the System Tabs seam behavior so the active joining edge is covered by a tab-owned inherited-background pseudo-element instead of relying on color-matched border overrides. Horizontal tabs now mask the panel join from the active tab bottom edge, and vertical tabs do the same from the active right edge on desktop plus the bottom edge on the mobile fallback layout.

### 3.14

Updated the System Tabs seam behavior so the active joining border now consumes the measured active tab background color directly. The runtime keeps `accordion-tabs.js` seam measurement, but the horizontal and vertical variations no longer paint the seam from `.system-tabs__panels::after`.

### 3.13

Updated the System Tabs seam runtime so `accordion-tabs.js` measures the active tab and writes seam geometry plus background values onto the accordion root. The horizontal and vertical tab variations now paint the seam cover from `.system-tabs__panels::after` instead of relying on a tab-owned pseudo-element.

### 3.12

Updated the System Tabs CSS seam behavior so the active tab paints a small inherited-background mask over the panel join. The horizontal variation uses a bottom mask strip, the desktop vertical variation uses a right-edge mask strip, and the mobile vertical fallback reuses the bottom mask behavior.

### 3.11

Updated the System Tabs transform so the first valid source accordion item supplies border classes, inline border settings, resolved border style, and resolved radius to the surviving accordion shell. Updated horizontal and vertical tab seams so the panel border remains authoritative while active tabs mask only their joining edge.

### 3.10

Updated the System Tabs accordion runtime contract so `accordion-tabs.js` remains the transform layer for `is-style-system-tabs` and `is-style-system-tabs-vertical` while preserving accordion-derived heading and panel styling hooks on the generated tab buttons and panels. Confirmed the horizontal and vertical tab styles remain CSS block-style variation surfaces and consume System UI tokens for surface, border, radius, focus, and spacing behavior.

### 3.9

Updated the live filesystem variation inventory to include active `styles/*.json`, `styles/colors/*.json`, and `styles/typography/*.json` files, and documented the body/admin variation class contract emitted by `inc/dynamic-styles.php`.

### 3.8

Updated the BuddyPress variation anchor contract so it resolves against whichever Core global-styles handle is actually registered in the current context, with `wp-block-library` as the final fallback. Added a shared BuddyPress widget-heading variation asset registered across the relevant widget-style BuddyPress blocks, and aligned BuddyPress panel/nav variation chrome more closely with the Core panel/header/nav families.

### 3.7

Replaced the direct BuddyPress variation dependency on `global-styles` with a dedicated `strap-buddypress-variation-anchor` handle. That anchor resolves to `global-styles` on the frontend and `global-styles-css-custom-properties` in editor contexts so BuddyPress block style variations can remain in the post-Core-style lane without triggering unregistered-dependency notices in the Site Editor.

### 3.6

Updated BuddyPress block style variation dependency routing so BuddyPress `assets/css/style-variations/*.css` files remain dependent on `strap-buddypress-blocks` but also anchor to `global-styles`. This keeps BuddyPress variation chrome in the same post-Global-Styles runtime lane as the theme's broader variation layer while preserving the BuddyPress block base stylesheet beneath it.

### 3.5

Extended `assets/css/buddypress-theme-sync.css` to govern broader BuddyPress Nouveau runtime surfaces, including tabbed navigation states, directory/list loop rhythm, metadata tone, pagination tone, and generic activity-card shell styling. These broad surfaces remain in the sync layer and MUST NOT be collapsed into the BuddyPress block-owned stylesheet.

### 3.2

Updated BuddyPress `system-panel` and `system-nav-button` variation behavior so block-level `has-background` classes route through the variation chrome instead of being buried under default surface colors. Preserved the explicit editor/frontend BuddyPress variation layer rather than moving that logic into the broader sync stylesheet.

### 3.3

Extended the same background-routing rule into `assets/css/buddypress-blocks.css` for BuddyPress block-owned panel surfaces, including base group cards, group lists, latest activities cards, and sitewide notice panels. Reduced unnecessary color and border `!important` usage on those BuddyPress-owned block surfaces where plugin CSS did not require it.

### 3.4

Reduced unnecessary color and border `!important` usage in the BuddyPress base navigation, dynamic-list, and notice-control styling so manual class-based color assignment can continue to override those surfaces without breaking the structural layout rules that still rely on stronger declarations.

### 3.1

Added `system-panel` BuddyPress block style variations for `bp/member` and `bp/members`, and updated the governed variation inventory to include those CSS surfaces.

### 3.0

Rewrote the contract to match SystemStrap's current contract standard and actual runtime. Added exact file inventories, runtime loading paths, theme.json inline variation snippets, planned-but-empty global variation directories, CSS block-style rules, JS block-variation rules, and editor-control extension rules.

### 2.0

Massive factual expansion to explicitly map the Mix-and-Match global theme variations, CSS block styles, JS block variations, and the specific PHP filters powering the architecture.

### 1.1

Expanded contract with registries for Source of Truth files, Block Surface Boundaries, and Token Consumption Pipeline mapping.

### 1.0

Initial variation-architecture contract incorporating mix-and-match theme.json rules, auto-flush semantic boundaries, and Gutenberg serialization strictness.

## Purpose

SystemStrap MUST treat variation architecture as a runtime system, not as an editor-only convenience.

SystemStrap MUST preserve these goals across all variation-related changes:

- composable design changes without collapsing the base token system
- clear separation between global theme variations, block style variations, block variations, and editor control extensions
- predictable file-based loading behavior for CSS and JavaScript variation assets
- safe Gutenberg serialization for variation-provided `InnerBlocks`, classes, and custom attributes
- future support for mix-and-match global style directories without misdescribing them as already-active runtime behavior

## Principles

- Prefer WordPress-native variation surfaces before inventing parallel systems.
- Prefer the base `theme.json` token registry and pipeline syntax over hard-coded literals in variation files.
- Prefer file-based, explicitly scoped variation loading over monolithic global styling.
- Prefer exact filesystem truth over planned architecture when documenting behavior.
- Prefer documenting future-ready directories as reserved or planned when they are not yet active.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

The variation architecture is currently implemented through these files and directories:

- `theme.json`
- `functions.php`
- `inc/enqueue-assets.php`
- `inc/block-styles.php`
- `inc/dynamic-styles.php`
- `inc/dialog-renderer.php`
- `assets/css/main-styles.css`
- `assets/css/buddypress-blocks.css`
- `assets/css/style-variations/*.css`
- `assets/js/variations/*.js`
- `styles/`
- `patterns/*.php`
- `parts/*.html`

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new global style variation file, block style variation file, block variation registration, editor-side variation control, variation-specific class contract, or render-time variation enqueue safeguard MUST be added to this contract in the same change set that introduces it.

Any removal, rename, or loading-path change affecting a variation surface listed here MUST be treated as a behavior change and documented here in the same change set.

## Variation Surface Taxonomy

SystemStrap currently uses four distinct variation surfaces:

1. Base `theme.json` styles and inline block variations.
2. Filesystem global-style variation directories under `styles/`.
3. CSS block style variations and CSS runtime exceptions under `assets/css/style-variations/`.
4. Editor-side JavaScript registrations under `assets/js/variations/`.

These surfaces are related, but they are NOT interchangeable.

SystemStrap also ships explicit conditional block stylesheets that are not style variations.

Those files are block-scoped runtime CSS, but they do NOT create editor-visible `register_block_style()` choices unless documented as a true block style variation.

## Token Ownership Rule

Variation files are consumers of the canonical design system, not independent token registries.

The authoritative token registry is defined by:

- `theme.json`
- the Theme JSON Design System Contract
- runtime-generated variables emitted by SystemStrap

Variation contracts MUST NOT duplicate the full token registry.

The following token families represent the currently approved consumption surfaces for variation files, not an exclusive forever-closed list.

Derived or expanded token families MAY be introduced when they are documented in the same change set and remain subordinate to the canonical design-system contracts.

## Filesystem Boundary

The current variation filesystem shape is:

```txt
.
├── theme.json
├── styles/
│   ├── breeze.json
│   ├── brite.json
│   ├── capsule.json
│   ├── colony.json
│   ├── forge.json
│   ├── polymer.json
│   ├── reboot.json
│   ├── slab.json
│   ├── twenty.json
│   ├── colors/
│   │   ├── a-default-dark.json
│   │   ├── breeze-dark.json
│   │   ├── breeze.json
│   │   ├── brite-dark.json
│   │   ├── brite.json
│   │   ├── capsule-dark.json
│   │   ├── capsule.json
│   │   ├── colony-dark.json
│   │   ├── colony.json
│   │   ├── forge-dark.json
│   │   ├── forge.json
│   │   ├── polymer-dark.json
│   │   ├── polymer.json
│   │   ├── reboot-dark.json
│   │   ├── reboot.json
│   │   ├── slab-dark.json
│   │   ├── slab.json
│   │   ├── twenty-dark.json
│   │   └── twenty.json
│   └── typography/
│       ├── breeze.json
│       ├── brite.json
│       ├── capsule.json
│       ├── colony.json
│       ├── forge.json
│       ├── polymer.json
│       ├── reboot.json
│       ├── slab.json
│       └── twenty.json
├── assets/css/style-variations/
│   ├── bp-login-form-system-panel.css
│   ├── bp-member-system-panel.css
│   ├── bp-members-system-panel.css
│   ├── bp-primary-nav-system-nav-button.css
│   ├── bp-primary-nav-system-nav-gen.css
│   ├── bp-widget-system-panel-header.css
│   ├── core-accordion-system-accordion.css
│   ├── core-accordion-system-tabs-vertical.css
│   ├── core-accordion-system-tabs.css
│   ├── core-archives-system-list.css
│   ├── core-button-system-icon.css
│   ├── core-calendar-system-panel.css
│   ├── core-categories-system-list.css
│   ├── core-comments-pagination-system-pagination.css
│   ├── core-details-system-details.css
│   ├── core-group-system-carousel.css
│   ├── core-group-system-panel-footer.css
│   ├── core-group-system-panel-header.css
│   ├── core-group-system-panel.css
│   ├── core-icon-dialog.css
│   ├── core-latest-comments-system-list.css
│   ├── core-latest-posts-system-list.css
│   ├── core-latest-posts-system-panel.css
│   ├── core-list-system-list.css
│   ├── core-navigation-system-nav-button.css
│   ├── core-navigation-system-nav-gen.css
│   ├── core-page-list-system-list.css
│   ├── core-post-terms-system-list.css
│   ├── core-query-pagination-system-pagination.css
│   ├── core-rss-system-list.css
│   ├── core-table-system-panel.css
│   └── core-tag-cloud-system-tags.css
└── assets/js/variations/
    ├── strap-accordion-tabs.js
    ├── strap-action-hook.js
    ├── strap-buttons.js
    ├── strap-carousel.js
    ├── strap-controls.js
    ├── strap-icon-controls.js
    ├── strap-panels.js
    └── strap-style-sync.js
```

The `styles/` directory currently contains active filesystem variation JSON files in the root, `colors/`, and `typography/` lanes.

Those lanes are part of the current contract and MUST be documented as live runtime variation surfaces, not as reserved placeholders.

## Global Theme Variation Contract

### Current runtime state

SystemStrap currently has one active base global theme configuration source:

- `theme.json`

SystemStrap currently also ships active filesystem variation JSON files in:

- `styles/breeze.json`
- `styles/brite.json`
- `styles/capsule.json`
- `styles/colony.json`
- `styles/forge.json`
- `styles/polymer.json`
- `styles/reboot.json`
- `styles/slab.json`
- `styles/twenty.json`
- `styles/colors/a-default-dark.json`
- `styles/colors/breeze-dark.json`
- `styles/colors/breeze.json`
- `styles/colors/brite-dark.json`
- `styles/colors/brite.json`
- `styles/colors/capsule-dark.json`
- `styles/colors/capsule.json`
- `styles/colors/colony-dark.json`
- `styles/colors/colony.json`
- `styles/colors/forge-dark.json`
- `styles/colors/forge.json`
- `styles/colors/polymer-dark.json`
- `styles/colors/polymer.json`
- `styles/colors/reboot-dark.json`
- `styles/colors/reboot.json`
- `styles/colors/slab-dark.json`
- `styles/colors/slab.json`
- `styles/colors/twenty-dark.json`
- `styles/colors/twenty.json`
- `styles/typography/breeze.json`
- `styles/typography/brite.json`
- `styles/typography/capsule.json`
- `styles/typography/colony.json`
- `styles/typography/forge.json`
- `styles/typography/polymer.json`
- `styles/typography/reboot.json`
- `styles/typography/slab.json`
- `styles/typography/twenty.json`

These files are active runtime variation sources layered onto the base `theme.json` configuration.

SystemStrap currently also ships a theme-owned editor sync layer that auto-merges matching color and typography partials after a root layout variation is selected in the Site Editor:

- `assets/js/variations/strap-style-sync.js`

That editor-side behavior is derived from the live `styles/`, `styles/colors/`, and `styles/typography/` filenames through `strap_get_style_variation_sync_map()` in `inc/style-variations.php`.

The current sync rule is one-way:

- selecting a root `styles/{slug}.json` variation MUST merge the matching `styles/colors/{slug}.json` and `styles/typography/{slug}.json` partials when they exist
- selecting a color-only or typography-only partial MUST NOT force a layout variation change

### Reserved directory intent

The current runtime variation roles are:

- `styles/*.json`
    - full global style variations or layout-oriented base overlays
- `styles/colors/*.json`
    - color-only overlays
- `styles/typography/*.json`
    - typography-only overlays

Files in these directories MUST remain scoped to those domains or WordPress may interpret them as broader Global Styles behavior.

### Deep merge and array replacement rules

When filesystem global variation files are introduced or updated, SystemStrap MUST treat WordPress `theme.json` merge behavior as follows:

- object-like configuration nodes are deep-merged
- array nodes are replaced wholesale

This rule is especially relevant for:

- `settings.color.palette`
- `settings.color.gradients`
- `settings.color.duotone`
- `settings.typography.fontFamilies`
- `settings.typography.fontSizes`
- any future array-backed preset family

If a variation file overrides one item in an array-backed family, that variation file MUST restate the full array needed for the intended result.

### Pipeline mapping rule

Custom-property consumers in SystemStrap SHOULD continue to point at preset and custom slugs rather than literal values.

This currently appears in `theme.json` through pipeline syntax such as:

```json
{
  "fontFamily": "var:custom|font-family-heading",
  "fontSize": "var:preset|font-size|large",
  "background": "var:preset|color|secondary-bg"
}
```

Future filesystem global variations SHOULD prefer changing token slugs and preset values over redefining unrelated custom-property families in parallel.

## Body/Admin Variation Class Contract

`inc/dynamic-styles.php` currently injects the resolved active variation slugs into:

- `body_class`
- `admin_body_class`

The emitted runtime classes are:

- `is-layout-{slug}`
- `is-color-{slug}`
- `is-typography-{slug}`

These classes are derived from `systemstrap_get_active_variation_slugs()` and MUST remain aligned with the active variation files resolved through `WP_Theme_JSON_Resolver::get_style_variations( 'theme' )`.

## Theme JSON Inline Variation Contract

SystemStrap already uses inline variation-style definitions inside the base `theme.json`.

These are part of the variation architecture even though they are not separate files.

### Current inline variation surfaces

`theme.json` currently defines inline block variation styling for:

- `styles.blocks.core/image.variations.rounded`
- `styles.blocks.core/quote.variations.plain`
- `styles.blocks.core/quote.variations.large`

### Current inline variation snippets

The following snippets were verified against the current `theme.json` at the time of this contract revision.

Current `core/image` inline variation shape:

```json
{
  "core/image": {
    "variations": {
      "rounded": {
        "border": {
          "radius": "var:custom|border-radius-lg"
        }
      }
    }
  }
}
```

Current `core/quote` inline variation shape:

```json
{
  "core/quote": {
    "variations": {
      "plain": {
        "color": {
          "background": "transparent"
        }
      },
      "large": {
        "typography": {
          "fontSize": "var:preset|font-size|large"
        }
      }
    }
  }
}
```

These inline variations are governed by `theme.json` runtime, not by `assets/css/style-variations/` and not by `assets/js/variations/`.

## CSS Block Style Variation Contract

### Auto-registration mechanism

`inc/block-styles.php` currently auto-registers block style variations from:

- `assets/css/style-variations/*.css`

The parser expects the filename format:

- `[namespace]-[block]-[variation].css`

The runtime rule is:

- the first dash separates namespace from block name
- the block name is converted from `core-group` style to `core/group`
- the variation segment is normalized around `-system-`
- the file is registered through `wp_enqueue_block_style()`
- the variation is registered through `register_block_style()`

This logic is implemented by `strap_register_block_styles()` on `init`.

Example:

- `core-navigation-system-nav-gen.css`
    - block: `core/navigation`
    - style name: `system-nav-gen`

### Auto-registered block style files

The following files are governed by this contract as of Version 3.0 and currently match the auto-registration rule:

- `core-accordion-system-accordion.css`
- `core-accordion-system-tabs-vertical.css`
- `core-accordion-system-tabs.css`
- `core-archives-system-list.css`
- `core-calendar-system-panel.css`
- `core-categories-system-list.css`
- `core-comments-pagination-system-pagination.css`
- `core-details-system-details.css`
- `core-group-system-panel-footer.css`
- `core-group-system-panel-header.css`
- `core-group-system-panel.css`
- `core-latest-comments-system-list.css`
- `core-latest-posts-system-list.css`
- `core-latest-posts-system-panel.css`
- `core-list-system-list.css`
- `core-navigation-system-nav-button.css`
- `core-navigation-system-nav-gen.css`
- `core-page-list-system-list.css`
- `core-post-terms-system-list.css`
- `core-query-pagination-system-pagination.css`
- `core-rss-system-list.css`
- `core-table-system-panel.css`
- `core-tag-cloud-system-tags.css`

### Explicit auto-registration exceptions

The following files in `assets/css/style-variations/` are NOT governed by the default auto-registration path:

- `core-group-system-carousel.css`
    - explicitly skipped by `strap_register_block_styles()`
- `core-button-system-icon.css`
    - explicitly skipped by `strap_register_block_styles()`
- `bp-widget-system-panel-header.css`
    - explicitly skipped by `strap_register_block_styles()`
- `core-icon-dialog.css`
    - does not match the `-system-` parsing rule

These files MUST be loaded only through their explicit runtime loaders unless the loading contract is intentionally changed.

### Explicit CSS loaders

The variation architecture currently uses these explicit CSS loading exceptions:

- `inc/block-styles.php`
- `inc/dynamic-styles.php`
    - conditionally registers `assets/css/buddypress-blocks.css` through `wp_enqueue_block_style()`
    - maps the same stylesheet to:
        - `bp/primary-nav`
        - `bp/login-form`
        - `bp/member`
        - `bp/members`
        - `bp/dynamic-members`
        - `bp/online-members`
        - `bp/active-members`
        - `bp/latest-activities`
        - `bp/friends`
        - `bp/group`
        - `bp/groups`
        - `bp/dynamic-groups`
        - `bp/sitewide-notices`
    - assigns `strap-buddypress-sync` as the dependency for `strap-buddypress-blocks`
    - assigns `strap-buddypress-blocks` as the dependency root for BuddyPress block style variation files
    - assigns `strap-buddypress-variation-anchor` as an additional dependency for BuddyPress block style variation files so those variation handles print in the post-Core-style lane without depending directly on a frontend-only Core handle
    - explicitly registers `assets/css/style-variations/bp-widget-system-panel-header.css` as a shared BuddyPress widget-heading variation across:
        - `bp/primary-nav`
        - `bp/dynamic-members`
        - `bp/online-members`
        - `bp/active-members`
        - `bp/latest-activities`
        - `bp/friends`
        - `bp/dynamic-groups`
        - `bp/sitewide-notices`
    - uses this file for editor/frontend parity on BuddyPress block-owned surfaces without routing those rules through the broader BuddyPress frontend sync stylesheet

- `inc/enqueue-assets.php`
    - enqueues `core-group-system-carousel.css` as `strap-carousel-styles`
    - registers `strap-buddypress-sync` on `init`
    - registers `strap-buddypress-variation-anchor` on `init`
    - enqueues `strap-buddypress-sync` on `bp_enqueue_community_scripts` for BuddyPress frontend surfaces
    - resolves `strap-buddypress-variation-anchor` against the first registered Core style lane among:
        - `global-styles`
        - `global-styles-css-custom-properties`
        - `wp-block-library`
    - enqueues the same `strap-buddypress-sync` handle on `enqueue_block_editor_assets` when BuddyPress is present so BuddyPress block-style dependencies remain valid in editor contexts
- `inc/theme-setup.php`
    - includes `assets/css/style-variations/core-group-system-carousel.css` in `add_editor_style()`
- `inc/dialog-renderer.php`
    - enqueues `assets/css/style-variations/core-icon-dialog.css` when dialog runtime is active

`core-button-system-icon.css` is no longer part of the active block-style registration or explicit frontend enqueue path.

The shared `is-style-system-btn-icon` treatment is instead owned by `assets/css/main-styles.css` so carousel navigation buttons and dialog close buttons can continue to use the same class contract without exposing a `core/button` style variation in the editor.

`assets/css/buddypress-blocks.css` is NOT part of the `assets/css/style-variations/*.css` parser.

It MUST remain on the explicit `wp_enqueue_block_style()` path unless the BuddyPress block loading contract is intentionally replaced.

### BuddyPress block dependency chain

The current BuddyPress block CSS stack is intentionally layered as:

1. BuddyPress plugin/theme-pack CSS
2. `strap-buddypress-sync`
3. `strap-buddypress-blocks`
4. `strap-buddypress-variation-anchor`
5. BuddyPress block style variation CSS

The current rationale is:

- `strap-buddypress-sync` normalizes BuddyPress-owned baseline controls and nav surfaces
- `strap-buddypress-sync` also carries broad non-block BuddyPress Nouveau polish such as generic tabbed-nav states, loop/list spacing, meta-tone defaults, and activity-card shell styling
- `strap-buddypress-blocks` establishes token-aware block defaults shared by BuddyPress block widgets in frontend and editor contexts
- BuddyPress block style variations such as nav and panel treatments MUST sit on top of that shared base rather than duplicating it independently
- shared BuddyPress widget-heading chrome MAY be delivered through one CSS asset as long as each participating block still receives its own style variation registration

This dependency chain is part of the variation runtime and MUST remain explicit.

## Render-Time Asset Safeguards

The following render-time safeguards are part of the variation runtime:

- `strap_enqueue_accordion_tabs()`
    - hooked to `render_block`
    - detects `is-style-system-tabs` and `is-style-system-tabs-vertical`
    - enqueues `accordion-tabs.js`
    - transforms rendered accordion items into tab buttons and tab panels on the frontend
    - preserves accordion-derived heading and panel hooks on generated tab controls through `.wp-block-accordion-heading__toggle` and `.wp-block-accordion-panel`
    - copies presentation classes and inline styles from source accordion items, headings, heading controls, and panels into the generated tab structure while excluding structural accordion wrapper classes
    - copies border presentation from the first valid source accordion item onto the surviving accordion shell so item-level border settings remain visible after transformation
- `strap_enqueue_pagination_block_styles()`
    - hooked to `render_block`
    - detects `core/query-pagination*`
    - enqueues `core-query-pagination-system-pagination`
    - detects `core/comments-pagination*`
    - enqueues `core-comments-pagination-system-pagination`

These safeguards are conditional loading behavior and MUST be treated as part of the variation contract.

## CSS Variation Surface Registry

The current CSS block-style surfaces covered by this contract as of Version 3.0 are:

- accordion and tabs
    - `core-accordion-system-accordion.css`
    - `core-accordion-system-tabs.css`
    - `core-accordion-system-tabs-vertical.css`
- list-family styles
    - `core-archives-system-list.css`
    - `core-categories-system-list.css`
    - `core-list-system-list.css`
    - `core-page-list-system-list.css`
    - `core-post-terms-system-list.css`
    - `core-rss-system-list.css`
    - `core-latest-posts-system-list.css`
    - `core-latest-comments-system-list.css`
- panel-family styles
    - `core-group-system-panel.css`
    - `core-group-system-panel-header.css`
    - `core-group-system-panel-footer.css`
    - `core-latest-posts-system-panel.css`
    - `core-calendar-system-panel.css`
    - `core-table-system-panel.css`
- navigation-family styles
    - `core-navigation-system-nav-gen.css`
    - `core-navigation-system-nav-button.css`
- BuddyPress widget-heading surface
    - `bp-widget-system-panel-header.css`
- button and icon surfaces
    - `core-icon-dialog.css`
- detail and tag surfaces
    - `core-details-system-details.css`
    - `core-tag-cloud-system-tags.css`
- query and comments pagination surfaces
    - `core-query-pagination-system-pagination.css`
    - `core-comments-pagination-system-pagination.css`
- carousel surface
    - `core-group-system-carousel.css`

## System Tabs CSS Surface Contract

The System Tabs CSS runtime is split across:

- `core-accordion-system-tabs.css`
- `core-accordion-system-tabs-vertical.css`

These two files are CSS-only variation surfaces and MUST remain responsible for:

- tab root token setup
- frontend tablist and panel layout
- resting, hover, active, and focus visual deltas on generated tabs
- generated panel surface presentation
- seam-mask presentation on the panel pseudo-element
- accordion-like editor fallback presentation for tab variations

These files MUST consume the System UI authority tokens directly:

- `--wp--custom--system-ui-surface-banner`
- `--wp--custom--system-ui-list-hover-bg`
- `--wp--custom--system-ui-active-bg`
- `--wp--custom--system-ui-surface`
- `--wp--custom--system-ui-border-color`
- `--wp--custom--system-ui-background-image`
- `--wp--custom--system-ui-backdrop-filter`

Nested tab overrides MAY exist only where they directly mirror existing System UI authority behavior for nested surfaces. They MUST NOT introduce new runtime responsibilities, duplicate transform logic, or replace the editor fallback with frontend tab rendering inside the editor.

## JavaScript Variation Contract

### Loader boundary

`inc/enqueue-assets.php` currently loads every JavaScript file in:

- `assets/js/variations/`

through `strap_enqueue_block_editor_assets()` on `enqueue_block_editor_assets`.

This means every file in `assets/js/variations/` is currently editor-only JavaScript unless a file's effects also alter saved block attributes or block markup.

### JS surface categories

The files in `assets/js/variations/` currently fall into three categories:

1. true block variations registered through `wp.blocks.registerBlockVariation()`
2. editor-side block-style registrations through `wp.blocks.registerBlockStyle()`
3. editor-side attribute and inspector control extensions through `wp.hooks.addFilter()`

These categories MUST NOT be conflated.

The following JavaScript files are governed by this contract as of Version 3.0.

## Registered Block Variation Registry

### `strap-accordion-tabs.js`

Registers two `core/accordion` variations:

- `strap-accordion-tabs`
- `strap-accordion-tabs-vertical`

These variations currently inject:

- `className: "is-style-system-tabs"`
- `className: "is-style-system-tabs-vertical"`
- three preconfigured `core/accordion-item` children
- `core/accordion-heading` children with Base-preset backgrounds and starter titles
- `core/accordion-panel` children with Base-preset backgrounds and placeholder paragraph content

These variations are starter-content registrations only. They MUST continue to rely on the existing System Tabs runtime and CSS block-style surfaces rather than introducing duplicate accordion-tab behavior in the editor variation layer.

### `strap-action-hook.js`

Registers one `core/separator` variation:

- `system-action-hook`

This variation injects:

- `className: "strap-action-hook"`

This JS registration is coupled to the semantic action-hook contract in `inc/block-filters.php`.

### `strap-carousel.js`

Registers three `core/group` variations:

- `strap-carousel-media`
- `strap-carousel-banner`
- `strap-carousel-thumb`

These variations currently inject class-bearing structures including:

- `system-carousel-wrapper`
- `system-carousel-nav-buttons`
- `carousel-prev is-style-system-btn-icon`
- `carousel-next is-style-system-btn-icon`
- `is-style-system-carousel`
- `is-style-system-carousel-auto`
- `is-style-system-panel`

These class names are part of the carousel variation contract.

The current carousel runtime also depends on these post-mount state classes:

- `splide`
- `is-initialized`
- `is-system-carousel-mounted`
- `is-system-thumbnail-carousel`
- `is-system-thumb-thumbnail`
- `is-system-thumb-medium`
- `is-thumbs-underflow`

### `strap-panels.js`

Registers seven `core/group` variations:

- `strap-panel-basic`
- `strap-panel-modal`
- `strap-panel-image`
- `strap-panel-custom`
- `strap-panel-list`
- `strap-panel-details`
- `strap-panel-pricing`

These variations currently inject class-bearing structures including:

- `is-style-system-panel`
- `is-style-system-modal`
- `is-style-system-panel-header`
- `is-style-system-panel-footer`
- `is-style-system-list`
- `is-style-system-details`

These class names are part of the panel variation contract and are coupled to the CSS block-style files and the semantic dialog contract.

The panel variation architecture assumes:

- panel wrapper variations apply to `core/group`
- list styling inside panel structures is consumed through nested list-compatible block surfaces rather than arbitrary child markup

Violations of those assumptions produce undefined visual results and MUST be treated as unsupported variation behavior.

## Registered Block Style Registry From JS

### `strap-buttons.js`

Registers editor-visible block styles for `core/button`:

- `button-link`
- `button-pill`
- `button-pill-outline`
- `button-square`
- `button-square-outline`

These are registered through JavaScript with `registerBlockStyle()`.

The current frontend CSS consumer for these button styles lives in:

- `assets/css/main-styles.css`

These button styles are variation behavior even though they are not part of the auto-registered CSS file naming system.

## Editor Extensions and Inspector Extension Contract

### `strap-controls.js`

This file extends `core/group` in the editor by:

- adding the custom attribute `systemNavPosition`
- adding inspector controls for carousel groups identified through `metadata.name`
- injecting editor wrapper classes such as `has-nav-top`, `has-nav-center`, `has-nav-center-out`, and `has-nav-bottom`
- adding the same classes to saved frontend markup through `blocks.getSaveContent.extraProps`

This file is an editor extension and save-output extension, not a block variation registration.

### `strap-icon-controls.js`

This file extends these blocks:

- `core/icon`
- `icon-block/icon`
- `core/button`

It adds the custom attributes:

- `systemDialogAction`
- `systemDialogPattern`
- `systemDialogPosition`

It also adds inspector UI for choosing dialog behavior and a pattern source.

This file is coupled to `inc/dialog-renderer.php` and the semantic dialog contract.

## Variation Coupling to Patterns and Runtime

Variation architecture in SystemStrap is coupled to pattern and runtime classes.

Current variation-sensitive class and attribute signals include:

- `strap-action-hook`
- `system-carousel-wrapper`
- `system-carousel-nav-buttons`
- `carousel-prev`
- `carousel-next`
- `is-style-system-panel`
- `is-style-system-panel-header`
- `is-style-system-panel-footer`
- `is-style-system-modal`
- `is-style-system-list`
- `is-style-system-details`
- `is-style-system-carousel`
- `is-style-system-carousel-auto`
- `is-style-system-carousel-multi`
- `is-system-carousel-mounted`
- `is-system-thumbnail-carousel`
- `is-system-thumb-thumbnail`
- `is-system-thumb-medium`
- `is-thumbs-underflow`
- `has-nav-top`
- `has-nav-center`
- `has-nav-center-out`
- `has-nav-bottom`
- `systemDialogAction`
- `systemDialogPattern`
- `systemDialogPosition`
- `systemNavPosition`

Renaming any of these without updating the relevant JS, CSS, PHP, and contract files in the same change set MUST be treated as a breaking variation behavior change.

## Carousel Runtime Contract

The current carousel runtime is split across these files:

- `assets/js/variations/strap-carousel.js`
- `assets/js/variations/strap-controls.js`
- `assets/js/carousel-nav.js`
- `assets/js/carousel-editor-preview.js`
- `assets/css/style-variations/core-group-system-carousel.css`
- `inc/enqueue-assets.php`
- `inc/dynamic-styles.php`

The saved block contract remains:

- outer `core/group` variation wrapper
- nested `system-carousel-wrapper`
- nested `system-carousel-nav-buttons`
- nested carousel Group using one of:
  - `is-style-system-carousel`
  - `is-style-system-carousel-auto`
  - `is-style-system-carousel-multi`

The runtime contract is:

- saved Gutenberg slide blocks remain the authored source of truth
- Splide wrappers are injected only at runtime
- `core-group-system-carousel.css` is explicitly enqueued as `strap-carousel-styles`
- `core-group-system-carousel.css` MUST NOT be auto-registered through the generic block-style scanner
- thumbnail carousel width is measured from the rendered track, not re-derived from `theme.json` layout math
- thumbnail mode defaults to thumbnail and promotes to medium only when every direct image slide is explicitly `size-medium`
- `size-full`, undefined size, mixed sizes, and non-image direct slides all resolve to thumbnail mode
- editor preview remains an unmounted horizontal fallback and mirrors the same thumbnail-mode rule

## Gutenberg Serialization Contract

JS block variations that inject `InnerBlocks` MUST produce block shapes and attributes that Gutenberg can serialize and reload without recovery errors.

SystemStrap variation files currently rely heavily on:

- `className`
- `metadata.name`
- nested `core/group`, `core/button`, and content block templates

When adding or modifying a variation template:

- custom classes SHOULD be preferred over fragile inline style objects when the same outcome can be achieved through existing CSS contracts
- metadata names used by editor extensions MUST remain stable if inspector logic depends on them
- new custom attributes MUST be declared through `blocks.registerBlockType` filters before they are consumed by editor UI or saved output hooks

## Current Mix-and-Match Global Variation Rule

SystemStrap currently supports modular global variation layering through the `styles/` directory structure.

The current active JSON variation files are:

- `styles/breeze.json`
- `styles/brite.json`
- `styles/capsule.json`
- `styles/colony.json`
- `styles/forge.json`
- `styles/polymer.json`
- `styles/reboot.json`
- `styles/slab.json`
- `styles/twenty.json`
- `styles/colors/a-default-dark.json`
- `styles/colors/breeze-dark.json`
- `styles/colors/breeze.json`
- `styles/colors/brite-dark.json`
- `styles/colors/brite.json`
- `styles/colors/capsule-dark.json`
- `styles/colors/capsule.json`
- `styles/colors/colony-dark.json`
- `styles/colors/colony.json`
- `styles/colors/forge-dark.json`
- `styles/colors/forge.json`
- `styles/colors/polymer-dark.json`
- `styles/colors/polymer.json`
- `styles/colors/reboot-dark.json`
- `styles/colors/reboot.json`
- `styles/colors/slab-dark.json`
- `styles/colors/slab.json`
- `styles/colors/twenty-dark.json`
- `styles/colors/twenty.json`
- `styles/typography/breeze.json`
- `styles/typography/brite.json`
- `styles/typography/capsule.json`
- `styles/typography/colony.json`
- `styles/typography/forge.json`
- `styles/typography/polymer.json`
- `styles/typography/reboot.json`
- `styles/typography/slab.json`
- `styles/typography/twenty.json`

Future additions to those directories MUST be documented here with exact file names and scope boundaries.

## Prohibited Regressions

The following regressions are prohibited:

- documenting `styles/colors/` or `styles/typography/` as empty reserved directories when active JSON files exist there
- adding uncategorized broad Global Style keys to future `styles/colors/*.json` or `styles/typography/*.json` files without documenting the scope change
- renaming variation files in `assets/css/style-variations/` without preserving or intentionally replacing the filename parsing contract
- moving editor extension files out of `assets/js/variations/` without updating the glob loader in `strap_enqueue_block_editor_assets()`
- treating all JS files in `assets/js/variations/` as `registerBlockVariation()` files when some are editor extensions or `registerBlockStyle()` registrations
- assuming every CSS file in `assets/css/style-variations/` is auto-registered when `core-group-system-carousel.css` and `core-icon-dialog.css` currently are not
- adding new class-bearing `InnerBlocks` templates without updating the class coupling documented here when those classes are consumed by runtime CSS or PHP
- modifying saved variation markup in a way that breaks Gutenberg reload fidelity
