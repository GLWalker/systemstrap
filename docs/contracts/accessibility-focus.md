# Contract: Accessibility Focus and Visible Focus States

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.2

Last Updated: 2026-10-31

## Change Log

### 1.2

Core Tabs owns Tabs behavior, focus targets, and ARIA. SystemStrap applies
visible focus directly to real `core/tab-list` buttons through the Classic,
Vertical, System List, System Flat List, System Nav Button, and System Nav Gen
presentation contracts. No generated Accordion Tabs controls remain.

### 1.1

Historical generated Accordion Tabs focus ownership was retired when the theme
migrated to Core Tabs.

### 1.0

Rewritten to current contract standard from live theme sources.

## Purpose

SystemStrap MUST treat focus visibility as a runtime accessibility contract, not as optional decoration.

SystemStrap MUST provide keyboard-discernible focus states on interactive surfaces it styles.

SystemStrap MUST preserve these goals across all changes to focus styling:

- keyboard users can identify the active control without ambiguity
- mouse and touch interaction do not receive unnecessary focus chrome where the theme has explicitly narrowed visible-focus behavior
- theme-defined focus rings stay token-driven and visually consistent
- native fallback behavior remains available where the theme has not fully replaced it

## Principles

- Prefer visible focus for actual interactive targets, not their decorative wrappers.
- Prefer theme tokens for focus ring size, color, and border behavior.
- Prefer `:focus-visible` on custom interactive surfaces where the theme owns the full focus presentation.
- Prefer narrow, source-traceable exceptions over broad global focus overrides.
- Prefer retaining a fallback outline path for high-contrast and native-control resilience when the theme has not fully normalized a control surface.

## User Priority Order

When focus goals conflict, SystemStrap currently prioritizes them in this order:

1. Focus visibility for keyboard users.
2. Preservation of native accessibility affordances.
3. Theme consistency.
4. Visual aesthetics.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

The current focus-visibility layer is implemented through these files:

- `wp-content/themes/systemstrap/theme.json`
- `wp-content/themes/systemstrap/assets/css/strap-reset.css`
- `wp-content/themes/systemstrap/assets/css/main-styles.css`
- `wp-content/themes/systemstrap/assets/css/buddypress/buddypress-components.css`
- `wp-content/themes/systemstrap/assets/css/buddypress/buddypress-single-navigation.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-details-system-details.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-details-system-flat-panel.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-accordion.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-flat-panel.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-tabs-system-classic.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-tabs-system-vertical.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-tab-list-system-nav-*.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-navigation-system-nav-gen.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-navigation-system-nav-button.css`

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new focus-ring token, focus selector strategy, reset behavior, high-contrast fallback, or block-specific focus exception MUST be added to this contract in the same change set that introduces it.

Any removal of a focus visibility rule listed here MUST be treated as an accessibility behavior change and documented here in the same change set.

## Canonical Token Contract

The focus system is currently tokenized through `theme.json.settings.custom` and `theme.json.settings.shadow.presets`.

The current theme-owned focus tokens include:

- `focus-ring-width`
- `focus-ring-offset`
- `focus-ring-color`
- `focus-ring-opacity`
- `form-focus-border-color`

The current focus-related shadow preset includes:

- `form-focus`

These tokens are part of the accessibility contract because runtime CSS consumes them directly.

The standard theme-owned outline offset is `var(--wp--custom--focus-ring-offset)`.
Inset offsets are geometry exceptions only: they are retained for interactive
targets inside clipped System List shells or zero-gap joined navigation rows,
where an outward outline would be clipped or would cross an adjacent control.

## Current Selector Strategy Contract

SystemStrap currently uses a mixed selector strategy for focus visibility.

The current implementation is:

- `:focus-visible` for theme-owned custom interactive surfaces where the theme wants keyboard-only visible focus
- `:focus` for generic form controls and BuddyPress sync surfaces where the theme currently normalizes native control focus directly
- a targeted reset for `button:focus:not(:focus-visible)` to suppress non-keyboard outline behavior on buttons

The theme MUST NOT claim that all focus treatment is `:focus-visible`-only while the current CSS still contains `:focus`-based control styling.

## Reset Layer Contract

`assets/css/strap-reset.css` is part of the focus contract.

The current reset layer enforces these behaviors:

- `button:focus:not(:focus-visible)` MUST set `outline: 0`
- native control surfaces in the reset layer currently receive theme-aware background, text color, box-shadow, and outline fallback rules
- the reset layer retains a high-contrast fallback through:
  - `outline: 2px solid var(--wp--preset--color--primary, #2D4054)`
  - `outline-offset: var(--wp--custom--focus-ring-offset)`

This means the reset layer is not purely removing focus affordances. It is actively redefining them.

## Main Form Control Focus Contract

`assets/css/main-styles.css` currently defines explicit focus treatment for these control families:

- `input[type="text"]`
- `input[type="email"]`
- `input[type="password"]`
- `input[type="search"]`
- `input[type="tel"]`
- `input[type="url"]`
- `input[type="number"]`
- `textarea`
- `select`
- `.wp-block-search__input`

The current focus behavior for those surfaces is:

- selector strategy: `:focus`
- `outline: none`
- `border-color: var(--wp--custom--form-focus-border-color)`
- `box-shadow: var(--wp--preset--shadow--form-focus, none)`

These form controls are part of the current accessibility contract even though they are not yet using `:focus-visible`.

## Theme-Owned Focus Ring Contract

Where the theme uses the custom focus ring, the current visible ring is based on:

- `var(--wp--custom--focus-ring-width)`
- `var(--wp--custom--focus-ring-color)`

Where the theme uses inset plus outer-ring treatment, the current compound ring pattern is:

- an inset border emphasis using `var(--wp--custom--border-width, 1px)` and `var(--wp--preset--color--primary)`
- an outer halo using `var(--wp--custom--focus-ring-width)` and `var(--wp--custom--focus-ring-color)`

This compound pattern is part of the current contract for theme-owned expandable controls.

## Targeted Focus Surface Contract

SystemStrap currently applies visible focus to the actual interactive subcontrol on custom expandable surfaces rather than their outer wrapper.

The current targeted surfaces include:

- `summary` inside `core-details-system-details` or its `system-flat-panel` counterpart
- `.wp-block-accordion-heading__toggle` inside `core-accordion-system-accordion` or its `system-flat-panel` counterpart
- `.wp-block-tab-list > button` inside the `core/tabs` Classic and Vertical fallback treatments
- `.wp-block-tab-list > button` inside both explicit `core/tab-list` Nav treatments
- `.wp-block-tab-list > button` inside the parent-owned `core/tabs` List treatments
- `.wp-block-navigation-item__content` and `.wp-block-navigation-submenu__toggle` inside the two current navigation variations

This targeting behavior is part of the accessibility contract.

The theme MUST NOT move visible focus styling from the actual interactive target to a non-interactive outer wrapper unless the runtime interaction model itself changes.

## Details Variation Contract

`assets/css/style-variations/core-details-system-details.css` currently defines keyboard-visible focus on:

- `.wp-block-details:is(.is-style-system-details, .is-style-system-flat-panel) summary:focus-visible`

The current behavior is:

- `outline: none`
- compound box-shadow using inset border emphasis plus outer focus halo
- `z-index: 2`
- `position: relative`

This is part of the contract for theme-owned details styling.

## Accordion Variation Contract

`assets/css/style-variations/core-accordion-system-accordion.css` currently defines keyboard-visible focus on:

- `.wp-block-accordion:is(.is-style-system-accordion, .is-style-system-flat-panel) .wp-block-accordion-heading__toggle:focus-visible`

The current behavior is:

- `outline: none`
- compound box-shadow using inset border emphasis plus outer focus halo
- `z-index: 2`
- `position: relative`

This is part of the contract for theme-owned accordion styling.

## Core Tabs Variation Contract

`assets/css/style-variations/core-tabs-system-classic.css` and `core-tabs-system-vertical.css` define fallback keyboard-visible focus on:

- `.wp-block-tab-list:not([class*="is-style-system-"]) > button:focus-visible`

`assets/css/system-ui-tabs.css` defines the equivalent fallback for Core
Default Tab Lists inside the Default-family parent compositions.

The two `core-tab-list-system-nav-*.css` adapters define keyboard-visible focus on:

- `.wp-block-tab-list.is-style-system-* > button:focus-visible`

`core-tabs-system-list.css` defines keyboard-visible focus for both parent-owned List treatments.

The current behavior is:

- `outline: none`
- compound box-shadow using inset border emphasis plus outer focus halo
- `z-index: 2`
- `position: relative`

These generated tab controls also preserve the `.wp-block-accordion-heading__toggle` class so the tab runtime remains an accordion-derived interactive surface.

## Navigation Variation Contract

The current navigation variations use a different visible-focus treatment than the details and accordion surfaces.

### `core-navigation-system-nav-gen`

`assets/css/style-variations/core-navigation-system-nav-gen.css` currently applies `:focus-visible` to:

- `.wp-block-navigation-item__content`
- `.wp-block-navigation-submenu__toggle`

The current behavior is:

- `outline: 2px solid currentColor !important`
- `outline-offset: calc(-1 * var(--wp--custom--focus-ring-width)) !important`
- `border-radius: inherit`

### `core-navigation-system-nav-button`

`assets/css/style-variations/core-navigation-system-nav-button.css` currently applies `:focus-visible` to:

- `.wp-block-navigation-item__content`
- `.wp-block-navigation-submenu__toggle`

The current behavior is:

- `outline: 2px solid currentColor !important`
- `outline-offset: calc(-1 * var(--wp--custom--focus-ring-width)) !important`
- `border-radius: inherit`

These navigation treatments are part of the current contract and MUST NOT be described as outer-halo focus rings.

The complete retained geometry-exception set is:

- Core Navigation System Nav Gen and System Nav Button interactive targets: inset because each navigation item is a zero-gap joined row containing content and, where present, its submenu toggle.
- Core Tab List System Nav Gen buttons: inset because the compact buttons form a zero-gap joined row.
- BuddyPress System List and System Flat List row links: inset because the bordered list shell clips overflow to its radius.
- WooCommerce System List account-navigation links, plus Flush links when nested directly in a System Panel: inset because those shells clip overflow; standalone Flush links use the standard outward offset.

No other theme-owned `outline-offset` may differ from `var(--wp--custom--focus-ring-offset)` without adding a demonstrated clipping or joined-geometry exception here.

## BuddyPress Sync Contract

`assets/css/buddypress/buddypress-components.css` and `assets/css/buddypress/buddypress-single-navigation.css` currently extend focus styling into BuddyPress-rendered controls.

The current BuddyPress focus surfaces include:

- `body.buddypress`-scoped BuddyPress buttons
- `body.buddypress`-scoped submit, button, and reset inputs
- `body.buddypress`-scoped time inputs
- `body.buddypress`-scoped textareas
- `body.buddypress`-scoped selects

The current behavior is:

- focus selector strategy: `:focus`
- `box-shadow: 0 0 0 var(--wp--custom--focus-ring-width, .25rem) var(--wp--custom--focus-ring-color, rgba(0,0,0,0.25)) !important`
- `outline: none !important`
- where applicable, `border-color: var(--wp--preset--color--primary) !important`

This BuddyPress sync layer is part of the current accessibility contract.

## Current Exceptions and Non-Uniformity Contract

The current focus layer is intentionally not uniform across every control family.

The current implementation includes these distinct focus families:

- reset-layer fallback outline behavior for native controls
- `:focus` plus `form-focus` shadow for generic form fields
- `:focus-visible` plus outer halo for theme-owned details and accordion controls
- `:focus-visible` plus inner outline treatment for current navigation variations
- BuddyPress `:focus` sync surfaces using theme tokenized box-shadow

This non-uniformity is part of the current source of truth and MUST be documented rather than normalized away in prose.

## Prohibited Regressions

The theme MUST NOT introduce any of the following regressions into the focus layer:

- removing visible focus styling from a theme-owned interactive target without replacing it with an equally discernible alternative
- moving focus styling from an actual interactive element to a purely structural wrapper
- hard-coding repeated focus ring values where the existing theme tokens already cover the same use case
- claiming `:focus-visible` exclusivity while leaving `:focus` implementations in place
- removing the current high-contrast outline fallback from reset-controlled native surfaces without an explicit replacement strategy
- stripping focus treatment from BuddyPress sync surfaces without updating this contract and the BuddyPress CSS

## Expansion Rule

New focus work MUST extend this contract by adding:

- source file
- selector family
- token family or literal behavior
- target surface
- exception status if the rule differs from the default focus strategy

## Current Expansion Queue

The following surfaces are likely future normalization targets and MUST be added here when their behavior changes:

- generic form controls that may later move from `:focus` to `:focus-visible`
- additional navigation variations
- WooCommerce form and button surfaces if WooCommerce styling enters the theme
- any Interactivity API-driven custom controls that define their own keyboard focus layer
