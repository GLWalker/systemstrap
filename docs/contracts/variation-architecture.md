# Contract: Variation Architecture

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 3.0

Last Updated: 2026-06-15

## Change Log

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
- `inc/dialog-renderer.php`
- `assets/css/main-styles.css`
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

## Token Ownership Rule

Variation files are consumers of the canonical design system, not independent token registries.

The authoritative token registry is defined by:

- `theme.json`
- the Theme JSON Design System Contract
- runtime-generated variables emitted by SystemStrap

Variation contracts MUST NOT duplicate the full token registry.

## Filesystem Boundary

The current variation filesystem shape is:

```txt
.
├── theme.json
├── styles/
│   ├── colors/
│   └── typography/
├── assets/css/style-variations/
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
    ├── strap-action-hook.js
    ├── strap-buttons.js
    ├── strap-carousel.js
    ├── strap-controls.js
    ├── strap-icon-controls.js
    └── strap-panels.js
```

The `styles/` directory currently contains the `colors/` and `typography/` directories but no active JSON variation files.

That empty-but-reserved state is part of the current contract.

## Global Theme Variation Contract

### Current runtime state

SystemStrap currently has one active global theme configuration source:

- `theme.json`

SystemStrap currently does NOT ship active filesystem variation JSON files in:

- `styles/*.json`
- `styles/colors/*.json`
- `styles/typography/*.json`

The presence of the empty `styles/colors/` and `styles/typography/` directories MUST be treated as reserved architecture, not as active runtime variation behavior.

### Reserved directory intent

The reserved directory roles are:

- `styles/*.json`
    - full global style variations or layout-oriented base overlays
- `styles/colors/*.json`
    - color-only overlays
- `styles/typography/*.json`
    - typography-only overlays

If files are added to `styles/colors/` or `styles/typography/`, they MUST remain scoped to that domain or they risk being treated by WordPress as broader Global Styles behavior.

### Deep merge and array replacement rules

When filesystem global variation files are introduced, SystemStrap MUST treat WordPress `theme.json` merge behavior as follows:

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

The following files currently match the auto-registration rule:

- `core-accordion-system-accordion.css`
- `core-accordion-system-tabs-vertical.css`
- `core-accordion-system-tabs.css`
- `core-archives-system-list.css`
- `core-button-system-icon.css`
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
- `core-icon-dialog.css`
    - does not match the `-system-` parsing rule

These files MUST be loaded only through their explicit runtime loaders unless the loading contract is intentionally changed.

### Explicit CSS loaders

The variation architecture currently uses these explicit CSS loading exceptions:

- `inc/enqueue-assets.php`
    - enqueues `core-group-system-carousel.css` as `strap-carousel-styles`
    - enqueues `core-button-system-icon.css` as `strap-button-icon`
- `functions.php`
    - includes `assets/css/style-variations/core-group-system-carousel.css` in `add_editor_style()`
- `inc/dialog-renderer.php`
    - enqueues `assets/css/style-variations/core-icon-dialog.css` when dialog runtime is active

`core-button-system-icon.css` is currently both:

- auto-registered as a block style through `inc/block-styles.php`
- explicitly enqueued through `inc/enqueue-assets.php`

Under the current runtime, that duplication MUST be treated as intentional behavior rather than assumed accidental double-loading.

The current rationale is:

- the file participates in normal block-style registration
- the icon button treatment is also required outside normal block-style loading assumptions

## Render-Time Asset Safeguards

The following render-time safeguards are part of the variation runtime:

- `strap_enqueue_accordion_tabs()`
    - hooked to `render_block`
    - detects `is-style-system-tabs` and `is-style-system-tabs-vertical`
    - enqueues `accordion-tabs.js`
- `strap_enqueue_pagination_block_styles()`
    - hooked to `render_block`
    - detects `core/query-pagination*`
    - enqueues `core-query-pagination-system-pagination`
    - detects `core/comments-pagination*`
    - enqueues `core-comments-pagination-system-pagination`

These safeguards are conditional loading behavior and MUST be treated as part of the variation contract.

## CSS Variation Surface Registry

The current CSS block-style surfaces covered by this contract are:

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
- button and icon surfaces
    - `core-button-system-icon.css`
    - `core-icon-dialog.css`
- detail and tag surfaces
    - `core-details-system-details.css`
    - `core-tag-cloud-system-tags.css`
- query and comments pagination surfaces
    - `core-query-pagination-system-pagination.css`
    - `core-comments-pagination-system-pagination.css`
- carousel surface
    - `core-group-system-carousel.css`

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

## Registered Block Variation Registry

### `strap-action-hook.js`

Registers one `core/separator` variation:

- `system-action-hook`

This variation injects:

- `className: "strap-action-hook"`

This JS registration is coupled to the semantic action-hook contract in `inc/block-filters.php`.

### `strap-carousel.js`

Registers six `core/group` variations:

- `strap-carousel-media`
- `strap-carousel-banner`
- `strap-carousel-thumb`
- `strap-carousel-mediatext`
- `strap-carousel-posts`
- `strap-carousel-comments`

These variations currently inject class-bearing structures including:

- `system-carousel-wrapper`
- `system-carousel-nav-buttons`
- `carousel-prev is-style-system-btn-icon`
- `carousel-next is-style-system-btn-icon`
- `is-style-system-carousel`
- `is-style-system-carousel-auto`
- `is-style-system-panel`

These class names are part of the carousel variation contract.

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

## Editor Attribute and Inspector Extension Contract

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
- `has-nav-top`
- `has-nav-center`
- `has-nav-center-out`
- `has-nav-bottom`
- `systemDialogAction`
- `systemDialogPattern`
- `systemDialogPosition`
- `systemNavPosition`

Renaming any of these without updating the relevant JS, CSS, PHP, and contract files in the same change set MUST be treated as a breaking variation behavior change.

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

## Planned Mix-and-Match Global Variation Rule

SystemStrap is architected to support modular global variation layering through the reserved `styles/` directory structure.

Until actual JSON variation files exist there:

- the contract MUST describe that structure as reserved
- the theme MUST NOT be documented as already shipping color-pack or typography-pack files
- future additions to those directories MUST be documented here with exact file names and scope boundaries

## Prohibited Regressions

The following regressions are prohibited:

- documenting `styles/colors/` or `styles/typography/` as active runtime file inventories when they are empty
- adding uncategorized broad Global Style keys to future `styles/colors/*.json` or `styles/typography/*.json` files without documenting the scope change
- renaming variation files in `assets/css/style-variations/` without preserving or intentionally replacing the filename parsing contract
- moving editor extension files out of `assets/js/variations/` without updating the glob loader in `strap_enqueue_block_editor_assets()`
- treating all JS files in `assets/js/variations/` as `registerBlockVariation()` files when some are editor extensions or `registerBlockStyle()` registrations
- assuming every CSS file in `assets/css/style-variations/` is auto-registered when `core-group-system-carousel.css` and `core-icon-dialog.css` currently are not
- adding new class-bearing `InnerBlocks` templates without updating the class coupling documented here when those classes are consumed by runtime CSS or PHP
- modifying saved variation markup in a way that breaks Gutenberg reload fidelity
