# Contract: Carousel Runtime

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 2.0

Last Updated: 2026-08-17

## Change Log

### 2.0
Extracted carousel functionality into a standalone companion plugin (`systemstrap-carousel`). SystemStrap theme no longer owns the carousel runtime. Navigational buttons are no longer saved in the database to support graceful degradation (progressive enhancement).

### 1.0
Initial carousel-runtime contract documenting the live SystemStrap Splide integration, saved markup boundaries, runtime ownership split between WordPress, JavaScript, CSS, and Splide, thumbnail-versus-medium detection rules, explicit runtime state classes, and the known special handling for `has-nav-center-out`.

## Purpose

SystemStrap MUST NOT treat the carousel as a native theme component. The carousel runtime and its variations belong entirely to the `systemstrap-carousel` plugin.

SystemStrap MUST preserve these goals across carousel-related changes:

- The theme may provide optional visual styling for carousel markup if needed, but should default to no intervention.
- The theme may contain patterns that use carousel-compatible native blocks.
- The theme MUST NOT contain the carousel runtime/behavior itself.

## Principles

- Prefer WordPress-resolved layout width over re-creating layout math in JavaScript.
- Prefer Splide as the movement engine instead of competing post-mount CSS geometry.
- Prefer explicit runtime state classes over fragile selector inference.
- Use Progressive Enhancement for navigation controls: DO NOT save carousel arrow buttons to the database. Generate them at runtime.

## Source of Truth

The current carousel runtime is implemented through the **SystemStrap Carousel Plugin** (`wp-content/plugins/systemstrap-carousel`):

- `systemstrap-carousel.php` (Plugin entrypoint and enqueues)
- `assets/js/variations/strap-carousel.js` (Variation registrations)
- `assets/js/variations/strap-controls.js` (Editor inspector controls)
- `assets/js/carousel-nav.js` (Runtime initialization and progressive enhancement)
- `assets/js/carousel-editor-preview.js` (Editor previews)
- `assets/css/carousel-runtime.css` (Runtime CSS and fallback)
- `assets/vendor/splide/splide.min.js`
- `assets/vendor/splide/splide.min.css`

## Saved Markup Contract

The saved block structure for the current shipped carousel variations MUST remain Group-based and MUST NOT include hardcoded navigation buttons.

The expected saved structure is:

```txt
outer carousel group (system-carousel-wrapper)
└── carousel group (is-style-system-carousel)
    ├── slide block
    ├── slide block
    └── slide block
```

The following saved class names are part of the live contract:

- `system-carousel-wrapper`
- `is-style-system-carousel`
- `is-style-system-carousel-auto`
- `is-style-system-carousel-multi`
- `has-nav-bottom`
- `has-nav-center`
- `has-nav-top`
- `has-nav-center-out`

## Runtime Ownership Contract

### Plugin JavaScript owns runtime transformation

`assets/js/carousel-nav.js` currently owns:

- progressive enhancement of navigation arrows (`splide__arrow`) into the DOM
- direct slide-container discovery
- runtime Splide markup injection
- runtime state-class application
- thumbnail-versus-medium detection
- thumbnail and medium slide-width calculation
- Splide option updates for thumbnail-style rows
- binding custom previous and next controls

`assets/js/carousel-editor-preview.js` currently owns editor-side preview state mirroring for thumbnail-versus-medium classification and the unmounted fallback lane.

### Plugin CSS owns presentation

`carousel-runtime.css` owns:

- editor fallback presentation before mount
- border, radius, and shadow treatment
- slide containment
- image presentation
- navigation placement and styling for dynamically generated buttons
- underflow visual handling

## Change Management Rule

Any future carousel refactor MUST occur within the `systemstrap-carousel` plugin. SystemStrap theme MUST NOT re-introduce carousel dependencies without explicit architectural approval.
