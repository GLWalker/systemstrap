# Contract: Carousel Runtime

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.0

Last Updated: 2026-07-16

## Change Log

### 1.0

Initial carousel-runtime contract documenting the live SystemStrap Splide integration, saved markup boundaries, runtime ownership split between WordPress, JavaScript, CSS, and Splide, thumbnail-versus-medium detection rules, explicit runtime state classes, and the known special handling for `has-nav-center-out`.

## Purpose

SystemStrap MUST treat the carousel as a runtime architecture surface rather than a decorative block-style add-on.

SystemStrap MUST preserve these goals across carousel-related changes:

- stable saved Gutenberg markup
- clear ownership between WordPress layout, Splide movement, JavaScript transformation, and CSS presentation
- frontend and editor parity where practical
- predictable thumbnail and medium sizing behavior based on native WordPress image-size classes
- isolated handling for navigation-position variants without collateral regressions in other carousel modes

## Principles

- Prefer WordPress-resolved layout width over re-creating layout math in JavaScript.
- Prefer Splide as the movement engine instead of competing post-mount CSS geometry.
- Prefer CSS for presentation and containment, not for countermanding Splide movement.
- Prefer explicit runtime state classes over fragile selector inference.
- Prefer documenting known fussy surfaces, especially `has-nav-center-out`, rather than pretending they are generic carousels.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

The current carousel runtime is implemented through these files:

- `docs/START.md`
- `docs/contracts/variation-architecture.md`
- `docs/contracts/theme-json-design-system.md`
- `docs/contracts/runtime-style-ownership.md`
- `docs/splide-current-plan.md`
- `inc/enqueue-assets.php`
- `inc/block-styles.php`
- `inc/dynamic-styles.php`
- `assets/js/variations/strap-carousel.js`
- `assets/js/carousel-nav.js`
- `assets/js/carousel-editor-preview.js`
- `assets/css/style-variations/core-group-system-carousel.css`
- `assets/css/main-styles.css`
- `assets/vendor/splide/splide.min.js`
- `assets/vendor/splide/splide.min.css`

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new runtime class, navigation-position rule, measurement rule, variation removal, image-size interpretation, or explicit carousel exception MUST be documented here in the same change set that introduces it.

## Saved Markup Contract

The saved block structure for the current shipped carousel variations MUST remain Group-based.

The expected saved structure is:

```txt
outer carousel group
└── system-carousel-wrapper group
    ├── system-carousel-nav-buttons
    └── carousel group
        ├── slide block
        ├── slide block
        └── slide block
```

The following saved class names are part of the live contract:

- `system-carousel-wrapper`
- `system-carousel-nav-buttons`
- `carousel-prev`
- `carousel-next`
- `is-style-system-carousel`
- `is-style-system-carousel-auto`
- `is-style-system-carousel-multi`
- `has-nav-bottom`
- `has-nav-center`
- `has-nav-top`
- `has-nav-center-out`

SystemStrap MUST preserve these saved class contracts unless the same change set updates the variation registrations, runtime CSS, runtime JS, and this contract together.

## Variation Inventory Contract

The current supported shipped carousel variation surfaces are:

- standard single-slide carousel using `is-style-system-carousel`
- thumbnail and medium carousel using `is-style-system-carousel-auto`
- multi-item non-thumbnail carousel using `is-style-system-carousel-multi`

The previously removed variation families are no longer part of the live contract:

- media and text carousel
- latest posts carousel
- recent comments carousel

SystemStrap MUST NOT document those removed variations as live inserter choices unless they are intentionally restored.

## Runtime Ownership Contract

### WordPress owns outer layout

WordPress owns the resolved outer carousel width through:

- `alignfull`
- `alignwide`
- constrained Group layout
- parent container width
- `contentSize`
- `wideSize`
- inline layout styles emitted by Core

The carousel runtime MUST measure rendered width rather than re-creating WordPress layout rules in JavaScript.

### JavaScript owns runtime transformation

`assets/js/carousel-nav.js` currently owns:

- direct slide-container discovery
- runtime Splide markup injection
- runtime state-class application
- thumbnail-versus-medium detection
- thumbnail and medium slide-width calculation
- Splide option updates for thumbnail-style rows
- binding custom previous and next controls

`assets/js/carousel-editor-preview.js` currently owns editor-side preview state mirroring for thumbnail-versus-medium classification and the unmounted fallback lane.

## Frontend Asset Gate Contract

Frontend carousel runtime assets MUST NOT load globally.

`inc/enqueue-assets.php` currently gates frontend carousel assets behind singular saved-content markers that indicate the page actually contains carousel markup.

The current gated frontend asset set is:

- `assets/vendor/splide/splide.min.css`
- `assets/css/style-variations/core-group-system-carousel.css`
- `assets/vendor/splide/splide.min.js`
- `assets/js/carousel-nav.js`

Editor preview assets remain outside that frontend gate because editor-side carousel preview is a separate runtime lane.

### Splide owns movement

Splide owns:

- translation
- snapping
- pagination state
- drag behavior
- active slide state
- keyboard-compatible movement behavior

CSS MUST NOT override mounted slide geometry in ways that contradict Splide’s actual movement math.

### CSS owns presentation

`core-group-system-carousel.css` and `main-styles.css` own:

- editor fallback presentation before mount
- border, radius, and shadow treatment
- slide containment
- image presentation
- navigation placement
- underflow visual handling
- the shared icon-button presentation used by carousel arrows

## Runtime State Class Contract

The current runtime depends on these post-mount state classes:

- `splide`
- `is-initialized`
- `is-system-carousel-mounted`
- `is-system-thumbnail-carousel`
- `is-system-thumb-thumbnail`
- `is-system-thumb-medium`
- `is-thumbs-underflow`

These classes are part of the runtime contract and MUST remain synchronized across CSS and JavaScript.

## Thumbnail Versus Medium Detection Contract

For thumbnail-style carousels, `size-medium` is the only true medium trigger.

The current classification rules are:

- every direct relevant image slide is `.size-medium` -> medium mode
- `.size-thumbnail` -> thumbnail mode
- `.size-full` -> thumbnail mode
- unset image size class -> thumbnail mode
- mixed image-size classes -> thumbnail mode
- non-image direct slides -> thumbnail mode

SystemStrap MUST treat thumbnail mode as the default and medium mode as explicit and unanimous.

## Width Token Contract

The carousel runtime consumes these WordPress-derived custom properties:

- `--wp--custom--thumbnail-width`
- `--wp--custom--medium-width`

Those values are emitted by `inc/dynamic-styles.php` from WordPress Media Settings with defensive positive-integer fallbacks.

The runtime MAY shrink below those preferred widths when the rendered carousel width is narrower.

## Navigation Position Contract

The current supported navigation-position states are:

- bottom
- center
- top
- center-outside

`has-nav-center-out` is a known special-case lane.

It MUST be treated as a narrower visible-window mode than the equivalent carousel using bottom, center, or top navigation, because the outer arrows consume visual space outside the slide window.

SystemStrap MAY use a reduced visible-count cap, a narrower carousel viewport, or both for `has-nav-center-out`, but those adjustments MUST remain local to that mode.

## Center-Outside Stability Rule

The `has-nav-center-out` lane is currently the most sensitive carousel mode across Safari and Chrome.

Changes to that lane MUST prefer:

- shrinking the visible carousel window
- reducing the visible-count cap for thumbnail-style rows
- preserving the same landing geometry before and after navigation

Changes to that lane MUST NOT rely on fake first-frame padding that is not also reflected in Splide’s actual movement geometry.

## Underflow Contract

Thumbnail-style rows MAY enter an underflow state when their total content width fits within the usable track width.

The `is-thumbs-underflow` class is the explicit contract for that state.

Underflow handling MUST remain visually scoped and MUST NOT trigger resize-feedback loops by measuring already-shrunken geometry as if it were the base layout width.

## Editor Parity Contract

Before Splide mounts, the editor preview uses an unmounted horizontal fallback.

That fallback MUST continue to mirror the same thumbnail-versus-medium classification rule used on the frontend.

Perfect pixel identity is not required, but the editor MUST NOT suggest a different image-size mode than the frontend for the same saved content.

## Explicit Non-Goals

The current carousel runtime does NOT promise:

- universal identical rendering across every theme style variation without small visual drift
- support for removed legacy carousel variation families
- arbitrary post-mount CSS slide-width overrides outside the documented runtime state classes
- vendor-file modification inside `assets/vendor/splide/`

## Change Management Rule

Any future carousel refactor MUST document, in the same change set:

- which layer owns width measurement
- which layer owns movement geometry
- whether `has-nav-center-out` behavior changed
- whether thumbnail-versus-medium detection changed
- whether any saved class contracts changed
