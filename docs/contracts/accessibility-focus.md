# Contract: Accessibility Focus and Visible Focus States

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.1

Last Updated: 2026-06-26

## Change Log

### 1.1

Added the generated System Tabs accordion controls to the focus contract. The horizontal and vertical tab accordion style variations now define keyboard-visible focus on `.system-tabs__tab:focus-visible` while preserving the accordion-derived `.wp-block-accordion-heading__toggle` hook on generated tab buttons.

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
- `wp-content/themes/systemstrap/assets/css/buddypress-theme-sync.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-details-system-details.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-accordion.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/core-accordion-system-tabs-vertical.css`
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
- `focus-ring-color`
- `focus-ring-opacity`
- `form-focus-border-color`

The current focus-related shadow preset includes:

- `form-focus`

These tokens are part of the accessibility contract because runtime CSS consumes them directly.

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
  - `outline-offset: 2px`

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

- `summary` inside `core-details-system-details`
- `.wp-block-accordion-heading__toggle` inside `core-accordion-system-accordion`
- `.system-tabs__tab` inside `core-accordion-system-tabs`
- `.system-tabs__tab` inside `core-accordion-system-tabs-vertical`
- `.wp-block-navigation-item__content` and `.wp-block-navigation-submenu__toggle` inside the two current navigation variations

This targeting behavior is part of the accessibility contract.

The theme MUST NOT move visible focus styling from the actual interactive target to a non-interactive outer wrapper unless the runtime interaction model itself changes.

## Details Variation Contract

`assets/css/style-variations/core-details-system-details.css` currently defines keyboard-visible focus on:

- `.wp-block-details.is-style-system-details summary:focus-visible`

The current behavior is:

- `outline: none`
- compound box-shadow using inset border emphasis plus outer focus halo
- `z-index: 2`
- `position: relative`

This is part of the contract for theme-owned details styling.

## Accordion Variation Contract

`assets/css/style-variations/core-accordion-system-accordion.css` currently defines keyboard-visible focus on:

- `.wp-block-accordion.is-style-system-accordion .wp-block-accordion-heading__toggle:focus-visible`

The current behavior is:

- `outline: none`
- compound box-shadow using inset border emphasis plus outer focus halo
- `z-index: 2`
- `position: relative`

This is part of the contract for theme-owned accordion styling.

## Accordion Tabs Variation Contract

`assets/css/style-variations/core-accordion-system-tabs.css` currently defines keyboard-visible focus on:

- `.wp-block-accordion.is-style-system-tabs .system-tabs__tab:focus-visible`

`assets/css/style-variations/core-accordion-system-tabs-vertical.css` currently defines keyboard-visible focus on:

- `.wp-block-accordion.is-style-system-tabs-vertical .system-tabs__tab:focus-visible`

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
- `outline-offset: -2px !important`
- `border-radius: inherit`

### `core-navigation-system-nav-button`

`assets/css/style-variations/core-navigation-system-nav-button.css` currently applies `:focus-visible` to:

- `.wp-block-navigation-item__content`
- `.wp-block-navigation-submenu__toggle`

The current behavior is:

- `outline: 2px solid currentColor !important`
- `outline-offset: -2px !important`
- `border-radius: inherit`

These navigation treatments are part of the current contract and MUST NOT be described as outer-halo focus rings.

## BuddyPress Sync Contract

`assets/css/buddypress-theme-sync.css` currently extends focus styling into BuddyPress-rendered controls.

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
