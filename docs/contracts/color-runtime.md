# Contract: Color Runtime and Contrast Routing

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.1

Last Updated: 2026-06-18

## Change Log

### 1.1

Extended the background utility rewrite contract so `secondary-color` routes text color to `secondary-bg` and `tertiary-color` routes text color to `tertiary-bg` when those `*-color` slugs are applied as background utilities without an explicit text-color class.

### 1.0

Initial color-runtime contract.

## Purpose

SystemStrap MUST treat color, contrast, shade generation, and preset-aware utility behavior as a runtime system rather than as static decoration.

SystemStrap MUST preserve these goals across all color-related changes:

- accessible foreground/background contrast derived from active design tokens
- predictable frontend and editor color behavior from one shared token model
- compatibility with WordPress preset-backed content even when default preset controls are hidden from the editor UI
- controlled extension of Core Global Styles without replacing WordPress's native generation lifecycle

## Principles

- Prefer `theme.json` preset and custom token sources before introducing parallel color registries.
- Prefer extending Core Global Styles over replacing them.
- Prefer derived variables from active palette values over hard-coded duplicate shade declarations.
- Prefer compatibility-preserving editor restrictions over runtime deletion of Core preset registries.
- Prefer WCAG-aware contrast routing wherever SystemStrap owns the resulting color behavior.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

The current color-runtime layer is implemented through these files:

- `theme.json`
- `functions.php`
- `inc/enqueue-assets.php`
- `inc/dynamic-styles.php`
- `inc/class-color-generator.php`
- `assets/css/main-styles.css`
- `assets/css/strap-reset.css`
- `assets/css/style-variations/*.css`

The color runtime is consumed by patterns, parts, templates, and block styles that reference:

- `var:preset|color|*`
- `var:preset|gradient|*`
- `var:preset|shadow|*`
- `var(--wp--preset--color--*-rgb)`
- `var(--wp--preset--color--*-text)`
- `var(--wp--preset--color--*-shadow-rgb)`

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new palette slug, derived shade family, contrast variable, global-styles extension rule, runtime color override, or compatibility exception MUST be added to this contract in the same change set that introduces it.

Any removal or rename of a documented color slug or derived variable family MUST be treated as a color-runtime behavior change and documented here in the same change set.

## Canonical Registry Contract

`theme.json` is the canonical authorable registry for SystemStrap color families.

The theme currently defines editor-facing restrictions through:

- `settings.color.defaultPalette: false`
- `settings.color.defaultGradients: false`
- `settings.color.defaultDuotone: false`

These flags currently govern editor availability, not runtime deletion of Core preset registries.

Derived runtime variables are consumers of this registry and MUST NOT become independent authorable sources.

SystemStrap MUST NOT depend on PHP-side stripping of Core default palette, gradient, or duotone arrays for normal runtime behavior.

## Palette Ownership Contract

The current theme-owned palette includes these slugs:

- `base`
- `contrast`
- `secondary-bg`
- `secondary-color`
- `tertiary-bg`
- `tertiary-color`
- `border-color`
- `primary`
- `secondary`
- `success`
- `info`
- `warning`
- `danger`
- `light`
- `dark`
- `transparent`
- `current`
- `current-mix`
- `inherit`

These slugs are part of the contract because runtime CSS, gradients, shadows, and global-styles extension consume them directly.

Palette slug renames MUST be treated as breaking runtime changes.

## Gradient and Duotone Contract

SystemStrap currently owns custom `gradients` and `duotone` registries in `theme.json`.

Those registries MUST be treated as theme-owned design surfaces.

The editor MAY hide Core defaults while still preserving compatibility with Core preset-backed content at runtime.

## Approved Modification Mechanisms

SystemStrap currently uses these approved mechanisms for color behavior.

### 1. Theme JSON editor restriction

SystemStrap MAY hide Core default preset controls through `theme.json` settings.

This is the preferred mechanism for suppressing editor-facing defaults.

### 2. Dynamic token derivation

SystemStrap MAY derive additional runtime variables from active theme palette values.

SystemStrap currently does this in `inc/dynamic-styles.php` through `Strap_ColorGenerator`.

### 3. Inline extension of the `global-styles` handle

SystemStrap appends additional dynamic layout and color CSS to the enqueued `global-styles` handle, preserving the native WordPress enqueue lifecycle.

SystemStrap currently does this in `inc/dynamic-styles.php` through `strap_enqueue_all_dynamic_css()`.

### 5. Token-consuming custom CSS

SystemStrap MAY consume runtime variables through `main-styles.css`, reset CSS, block styles, and variation styles.

That CSS MUST consume the existing token model rather than silently creating incompatible parallel values.

## Dynamic Derivation Contract

`inc/dynamic-styles.php` currently generates derived variables from the active theme palette returned by `wp_get_global_settings()`.

### RGB-only derived variable contract

The following slugs currently receive only `-rgb` variables:

- `base`
- `contrast`
- `secondary-bg`
- `secondary-color`
- `tertiary-bg`
- `tertiary-color`
- `border-color`

### Shade-family derivation contract

The following target slugs currently receive expanded runtime derivation:

- `primary`
- `secondary`
- `success`
- `info`
- `warning`
- `danger`
- `light`
- `dark`

For each target slug, the current runtime MUST generate:

- shade variables with suffixes `-10`, `-20`, `-30`, `-40`, and `-50`
- an `-rgb` variable
- a `-text` contrast variable
- a `-text-rgb` variable
- a `-shadow-rgb` variable

These derived variables are part of the color-runtime contract because gradients, buttons, and contrast-aware surfaces consume them directly.

Derived variables are deterministic outputs and MUST NOT be directly user-authored.

## Contrast Derivation Contract

`inc/class-color-generator.php` currently determines contrast-aware text values through `Strap_ColorGenerator::parse_the_contrast()`.

The current runtime behavior selects either:

- `#111111`
- `#ffffff`

for the `-text` contrast variable family.

SystemStrap MUST treat this contrast routing as part of the accessibility contract for color-aware surfaces.

If the contrast algorithm changes, that change MUST be documented as a runtime behavior change.

## Global Styles Extension Contract

`inc/dynamic-styles.php` extends generated WordPress Global Styles without replacing Core's lifecycle.

The current behavior is:

- Core enqueues `global-styles` normally.
- `strap_enqueue_all_dynamic_css()` runs after Core on:
  - `wp_enqueue_scripts` (priority 9999)
  - `enqueue_block_editor_assets` (priority 9999)
- the function dynamically generates the layout and color utility overrides.
- the function appends the generated CSS to the existing `global-styles` handle using `wp_add_inline_style()`.

This additive path is part of the runtime contract.

SystemStrap MUST NOT revert to removing `wp_enqueue_global_styles()` unless a later change documents a concrete incompatibility that cannot be solved through additive extension.

## Background Utility Contrast Contract

SystemStrap dynamically generates `.has-*-background-color` utility overrides to inject contrast-aware text colors when `.has-text-color` is not already present.

### Current remapped background slugs

The current remap behavior is:

- `base` routes text color to `contrast`
- `contrast` routes text color to `base`
- `secondary-bg` routes text color to `secondary-color`
- `secondary-color` routes text color to `secondary-bg`
- `tertiary-bg` routes text color to `tertiary-color`
- `tertiary-color` routes text color to `tertiary-bg`

### Current accent background slugs

The following background slugs route text color to their derived `-text` variables:

- `primary`
- `secondary`
- `success`
- `info`
- `warning`
- `danger`
- `light`
- `dark`

This dynamic generation behavior is part of the color-runtime contract because it is how SystemStrap achieves readable preset utility classes without demanding explicit text-color classes from authors.

## Global Styles Handle Availability Contract

`inc/dynamic-styles.php` currently ensures a writable `global-styles` handle exists before attaching dynamic inline CSS.

`strap_ensure_global_styles_handle()` is part of the runtime contract because SystemStrap uses `global-styles` as the shared color attachment surface for:

- frontend
- editor
- block-asset flows

SystemStrap MUST preserve a valid inline-style target for runtime color CSS across those contexts.

## Dynamic CSS Consumer Contract

The current dynamic color CSS appended to `global-styles` includes runtime behavior for:

- `:root`, `body`, and `.editor-styles-wrapper` variable output
- badge contrast routing
- latest-posts background and text fixes
- button background hover, focus, and active behavior
- outline button hover, focus, and active behavior

This list is exhaustive as of the current contract version.

These consumers are part of the contract because they depend on derived color variables rather than only on base palette values.

## Pattern and Style Consumer Contract

The theme currently expects color consumers across patterns and CSS to reference the canonical token model through:

- preset color variables
- preset gradient variables
- derived `-rgb` variables
- derived `-text` variables
- derived `-shadow-rgb` variables

Patterns and styles MUST be treated as consumers of the runtime color engine, not as independent color registries.

## Compatibility Contract

SystemStrap currently hides Core default preset controls in the editor while preserving compatibility with preset-backed content at runtime.

This means:

- test content or legacy content using Core preset classes SHOULD continue to resolve those classes through Core
- SystemStrap color enhancements MAY layer on top of those classes when the rewrite rules apply
- the theme MUST NOT rely on deleting Core preset registries to maintain its own color system

## Prohibited Regressions

The theme MUST NOT introduce any of the following regressions into the covered color-runtime layer:

- removing Core Global Styles enqueue actions to take over the full lifecycle without documented necessity
- deleting Core default preset registries at runtime as a substitute for editor-facing restriction
- renaming theme-owned palette slugs without updating their derived variables, consumers, and this contract
- dropping `-text` contrast routing for background utility classes while still claiming accessibility-aware color behavior
- generating a second independent color registry outside `theme.json` plus the documented derived runtime variables
- breaking frontend/editor parity for derived runtime variables without documenting the split
- silently removing the `global-styles` handle availability guarantee used by dynamic color injection

## Expansion Rule

New color-runtime work MUST extend this contract by adding:

- source file
- token source or derived token family
- extension or generation mechanism
- consuming surfaces
- editor/runtime implications
- compatibility implications

## Current Expansion Queue

The following future color-runtime surfaces are expected to expand this contract:

- richer contrast derivation beyond binary dark/light text if the algorithm is intentionally upgraded
- additional derived token families when justified by documented runtime consumers
- explicit block-level color-runtime rules for additional Core blocks beyond the current dynamic CSS consumers
- BuddyPress-specific color-runtime rules where directory or activity surfaces need token-aware contrast guarantees
- WooCommerce color-runtime rules once WooCommerce support is introduced
