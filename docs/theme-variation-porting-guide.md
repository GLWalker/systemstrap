# Theme Variation Porting Guide

Version: 2.1
Status: Active
Scope: Porting external themes into SystemStrap variation architecture

---

# Purpose

This guide explains how to convert an external design system, Bootstrap theme, Bootswatch theme, commercial template, or custom stylesheet into one complete SystemStrap style.

A complete SystemStrap style consists of three files:

```text
/styles/{variation}.json
/styles/colors/{variation}.json
/styles/typography/{variation}.json
```

````

Port the design.

Do not port the framework.

---

# Source Hierarchy

When sources conflict, authority is:

1. SystemStrap architecture
2. Source theme stylesheet
3. Source theme assets
4. SystemStrap `theme.json`
5. Existing SystemStrap variations
6. Personal preference

When the source theme conflicts with SystemStrap architecture:

```text
SystemStrap wins.
```

---

# Required Blueprint First

Before writing files, produce a complete blueprint for all three files:

```text
/styles/{variation}.json
/styles/colors/{variation}.json
/styles/typography/{variation}.json
```

The blueprint must list keys and values in final file order, including duplicated default values required by atomic sets.

Do not create files until the blueprint is approved.

---

# Three Variation Files

## Layout Variation

```text
/styles/{variation}.json
```

Owns:

- radius
- shadows
- spacing
- font weights
- surface treatment
- System UI custom overrides
- block-level CSS when required

## Color Variation

```text
/styles/colors/{variation}.json
```

Owns:

- palette
- duotones
- gradients
- body background
- color application

## Typography Variation

```text
/styles/typography/{variation}.json
```

Owns:

- font families
- fontFace registration
- typography assignments

---

# Step 1 — Identify the Theme Personality

Ask:

```text
What makes this theme recognizable?
```

Possible drivers:

- palette
- typography
- gradients
- shadows
- chrome
- glassmorphism
- spacing
- surface treatment

Do not stop after extracting colors.

Quartz proved that some themes are chrome-driven, not palette-driven.

---

# Step 2 — Extract Palette

Capture:

```text
base
contrast
secondary-bg
secondary-color
tertiary-bg
tertiary-color
border-color
primary
secondary
success
info
warning
danger
light
dark
transparent
current
current-mix
inherit
```

Rules:

- Palette values must be solid.
- Convert `rgba()` values to calculated or close solid equivalents.
- No two palette values should be identical.
- If the source theme duplicates values, adjust each duplicate to a close unique value.

---

# Step 3 — Build Duotones

Duotones are always rebuilt.

Rules:

- Same slug set as default `theme.json`
- Same name set as default `theme.json`
- Same order as default `theme.json`
- Full replacement
- No partial replacement

Map duotones according to their labels.

Example:

```text
Base to Primary
Contrast to Primary
Dark to Light
```

---

# Step 4 — Determine Gradient Strategy

Gradients are case-by-case.

Most themes do not need a full gradient redesign.

Usually only the first four gradients are evaluated:

```text
Gradient
Gradient Alt
Body Background
Element Background
```

All remaining gradients are duplicated from default because they use variables and will naturally adapt to the active palette.

---

## Gradient

General overlay used to slightly lighten or darken surfaces.

## Gradient Alt

Companion overlay.

## Body Background

Overall page identity.

If the source theme provides a body gradient, use it.

If a color variation applies a body gradient, it must also set body text color:

```json
{
	"styles": {
		"color": {
			"gradient": "var:preset|gradient|body",
			"text": "var:preset|color|contrast"
		}
	}
}
```

Never move variation identity into reset CSS.

## Element Background

Used for chrome, panels, cards, surfaces, and containers.

If the source theme provides a card/chrome gradient, map it to the `element` gradient.

Then consume it from the layout variation through existing System UI custom variables:

```json
{
	"settings": {
		"custom": {
			"system-ui-background-image": "var:preset|gradient|element"
		}
	}
}
```

Do not hardcode the element gradient into every block unless the System UI variables cannot express the effect.

---

# Step 5 — Extract Typography

Capture:

```text
body
heading
single-title
navigation
button
display
monospace
```

Typography variations always rewrite the complete `fontFamilies` set, even if only one family changes.

Use semantic slugs.

Fonts change.

Slugs do not.

If local font files are required:

- ship them
- register `fontFace`
- verify paths exist
- avoid remote font imports

---

# Step 6 — Extract Font Weights

Font families belong in the typography variation.

Font weights belong in the layout variation through existing custom variables when the theme needs them.

Examples:

```text
font-weight-body
font-weight-heading
font-weight-nav
font-weight-button
font-weight-bold
```

Only override existing root `theme.json.settings.custom` keys.

Never invent new custom variables.

---

# Step 7 — Extract Shadows

If one shadow changes, reproduce the complete shadow preset set.

Required order:

```text
sm
md
lg
inset
dropdown-menu
form-focus
form-control-shadow
btn-resting
btn-hover
btn-active
```

Rules:

- Preserve slugs.
- Preserve names.
- Preserve order.
- Values may be variation-specific.
- Do not replace variation shadow values with defaults.

Scale `sm`, `md`, and `lg` to match the source theme’s shadow language.

The shadow used most often by the source theme becomes:

```json
{
	"settings": {
		"custom": {
			"shadow": "var:preset|shadow|md"
		}
	}
}
```

Use `sm`, `md`, or `lg` according to the source theme’s dominant shadow.

---

# Step 8 — Extract Radius

Capture:

```text
default radius
small radius
large radius
pill radius
```

Map into existing custom vars:

```text
border-radius
border-radius-sm
border-radius-lg
border-radius-pill
```

Only use custom keys already defined in root `theme.json`.

---

# Step 9 — Evaluate Spacing

Spacing may be ported globally or per element when it is part of the source theme identity.

Examples:

- button padding
- card padding
- section spacing
- container spacing
- gutters

Do not blindly rewrite spacing.

If only buttons differ, adjust buttons only.

Preserve existing button layout behavior when changing button spacing.

---

# Step 10 — Inspect the End of the Stylesheet

Mandatory for Bootstrap and Bootswatch ports.

Important personality rules are often placed after print styles or near the end.

Inspect:

- cards
- dropdowns
- accordions
- modals
- offcanvas
- alerts
- tables
- navbars
- chrome surfaces
- glass effects
- shadows
- gradients
- backdrop filters

Quartz is the canonical warning:

```text
The palette was not the theme.
The chrome was the theme.
```

---

# Step 11 — Block CSS

Only write custom CSS directly against WordPress block targets or existing SystemStrap block surfaces.

Allowed:

```text
styles.blocks.core/button
styles.blocks.core/group
styles.blocks.core/details
styles.blocks.core/table
```

Avoid:

```text
.button
.card
.navbar
.alert
.dropdown
```

Do not create raw framework classes.

Avoid generic custom CSS when possible because user-authored block custom CSS becomes manually removable editor state.

Use existing SystemStrap contracts and variables.

Do not create new architecture.

---

# What Not To Port

Generally avoid:

```text
Bootstrap utility classes
Bootstrap reset layers
Bootstrap component classes
Bootstrap JavaScript
Bootstrap data attributes
Bootstrap dark-mode runtime
Bootstrap variable namespaces
```

SystemStrap already provides the framework.

The variation provides the personality.

---

# Common Mistakes

Do not:

- invent custom variables
- assume gradients apply themselves
- replace variation shadow values with defaults
- ignore stylesheet sections after print styles
- treat palette extraction as complete theme extraction
- move variation behavior into reset CSS
- port framework architecture instead of design language
- write raw Bootstrap class CSS
- partially replace atomic sets

---

# Final Validation

Before accepting a variation:

- JSON parses
- blueprint was approved
- palette is complete
- palette values are solid and unique
- duotones are complete
- gradients are complete
- body gradient is applied when required
- body text color is set when body gradient is applied
- typography `fontFamilies` set is complete
- font assets exist
- shadow library is complete
- dominant shadow is assigned to `settings.custom.shadow`
- radius system is complete
- spacing changes are intentional
- no local URLs remain
- no new architecture was introduced
- variation remains compatible with WordPress Mix-and-Match

---

# Guiding Principle

Port the design.

Do not port the framework.

SystemStrap already provides the framework.

The variation should provide the personality.


# SystemStrap Style Variation Porting Rules QUICK overview.

When building or porting style variations (Layout, Colors, Typography) for the SystemStrap theme:

1. **Strict Blueprint First Flow**:
    - Always produce a complete blueprint for all three variation files (`/styles/{variation}.json`, `/styles/colors/{variation}.json`, `/styles/typography/{variation}.json`) first.
    - Wait for explicit user approval of the blueprint before writing any variation files.

2. **Atomic Preset & Slug Integrity**:
    - Rebuilt presets (like duotones and gradients) must preserve default slugs and order exactly from the base `theme.json`. Slugs must **never** be changed.
    - Do not silently correct spelling errors in preset friendly names (`name` fields). If a typo is found, ask the user before changing it.

3. **Body Gradient Pair Rule**:
    - If a color variation (`styles/colors/{variation}.json`) applies a body gradient, it MUST explicitly define the body text color:
        ```json
        "styles": {
            "color": {
                "gradient": "var:preset|gradient|body",
                "text": "var:preset|color|contrast"
            }
        }
        ```

4. **Single FontFace Registration**:
    - In typography variations (`styles/typography/{variation}.json`), register the `@font-face` block **only once** (under the primary family container, e.g. `body`).
    - For all other font slugs that map to the same font (like `heading`, `navigation`, `display`, `button`, and `single-title`), use variable definitions (e.g., `"fontFamily": "var(--wp--preset--font-family--body)"` or reference the family string directly) without repeating the `@font-face` declaration, unless a variant requires a separate font file or weight mapping.
````
