# SystemStrap Design Token Reference

> **Status:** Contract / human-and-agent reference
> **Authority:** `theme.json` and designated runtime token emitters remain authoritative.
> **Purpose:** Make SystemStrap’s reusable design constants easy to discover and reuse without repeatedly scanning `theme.json`.

## 1. Contract Rules

### 1.1 Authority

This document is an index and semantic reference, **not a second source of truth**.

If this document disagrees with:

1. `theme.json`,
2. a designated dynamic token emitter,
3. or an explicitly documented System UI master,

the source wins and this reference must be updated.

### 1.2 Reuse before literals

Before introducing a literal value for spacing, typography, weight, radius, border, shadow, width, motion, or another reusable design-system property:

1. Check this reference.
2. Confirm the authoritative source.
3. Reuse an existing semantic token when it represents the requirement.
4. Do not infer a token name from a numeric value.
5. Do not create a new token merely to eliminate a literal.
6. If no existing token represents the intended design role, document the gap before adding a new constant.

### 1.3 Semantic intent matters

A matching numeric value is not automatically the correct token. Prefer the token whose **role** matches the component.

### 1.4 Colors and gradients are separate

Color, gradient, duotone, and style-dependent surface values are intentionally excluded from the stable-value sections below.

Their **semantic token names** are reusable, but their resolved values may change by active style variation.

Maintain colors/gradients in a separate reference section or contract.

### 1.5 CSS custom-property forms

WordPress preset and custom values resolve to CSS variables such as:

```css
var(--wp--preset--spacing--30)
var(--wp--preset--font-size--medium)
var(--wp--preset--font-family--heading)
var(--wp--custom--font-weight-heading)
var(--wp--preset--shadow--md)
```

Use the generated CSS custom property in authored CSS rather than repeating the source literal.

---

# 2. Spacing Scale

Authoritative source: `settings.spacing.spacingSizes`.

| Token      | CSS variable                |              Source value | Approx. px at 16px root | SystemStrap working definition                                                               |
| ---------- | --------------------------- | ------------------------: | ----------------------: | -------------------------------------------------------------------------------------------- |
| Spacing 10 | `--wp--preset--spacing--10` |                  `.25rem` |                     4px | Micro spacing. Tight label offsets, small metadata separation, fine composition adjustments. |
| Spacing 20 | `--wp--preset--spacing--20` |                   `.5rem` |                     8px | Compact spacing. Tight component gaps, small internal separation, pagination/button groups.  |
| Spacing 30 | `--wp--preset--spacing--30` |                    `1rem` |                    16px | **Standard SystemStrap component gap.** Default block gap and common component inset/rhythm. |
| Spacing 40 | `--wp--preset--spacing--40` |                  `1.5rem` |                    24px | Roomy component spacing. Larger padding, column separation, generous internal rhythm.        |
| Spacing 50 | `--wp--preset--spacing--50` |                    `3rem` |                    48px | Section spacing. Large component/section padding and major vertical separation.              |
| Spacing 60 | `--wp--preset--spacing--60` |                    `5rem` |                    80px | Large section spacing. Strong page/section separation.                                       |
| Spacing 70 | `--wp--preset--spacing--70` |  `clamp(4rem, 4vw, 7rem)` |                   fluid | Large responsive section/hero spacing.                                                       |
| Spacing 80 | `--wp--preset--spacing--80` | `clamp(6rem, 6vw, 10rem)` |                   fluid | Maximum responsive hero/display spacing.                                                     |

### Spacing guidance

- Root/default `blockGap` is **Spacing 30**.
- Core Buttons and pagination commonly use **Spacing 20** for tight control gaps.
- Heading bottom rhythm uses **Spacing 10** where heading-owned margin is appropriate.
- Prefer parent-owned `blockGap` for external rhythm; do not add child margins that duplicate it.

### Important literal-value warning

There is currently **no 20px spacing preset** in `theme.json`.

At a 16px root:

- Spacing 30 = 16px
- Spacing 40 = 24px

Therefore an authored `20px` value must **not** be silently replaced by a spacing token merely because a token name contains “20”. `spacing-20` is `.5rem` / approximately 8px.

If a component genuinely requires 20px, either retain the justified literal or separately authorize a design-system change.

---

# 3. Typography Scale

Authoritative source: `settings.typography.fontSizes`.

Fluid typography is configured for a **360px → 1440px** viewport range.

## 3.1 Content / heading scale

| Token        | CSS variable                         | Nominal size |          Fluid range | Working role                                            |
| ------------ | ------------------------------------ | -----------: | -------------------: | ------------------------------------------------------- |
| XS           | `--wp--preset--font-size--x-small`   |     `.75rem` |                fixed | Extra-small metadata, badges, tertiary labels.          |
| S            | `--wp--preset--font-size--small`     |    `.875rem` |                fixed | Small metadata, compact controls, pagination, captions. |
| FS6 / Medium | `--wp--preset--font-size--medium`    |       `1rem` |    `.9375rem → 1rem` | **Body/default UI size.**                               |
| FS5 / Large  | `--wp--preset--font-size--large`     |    `1.25rem` | `1.125rem → 1.25rem` | Small heading / emphasized content.                     |
| FS4 / XL     | `--wp--preset--font-size--x-large`   |     `1.5rem` |   `1.25rem → 1.5rem` | H4-scale / component heading.                           |
| FS3 / XXL    | `--wp--preset--font-size--xx-large`  |    `1.75rem` | `1.375rem → 1.75rem` | H3-scale.                                               |
| FS2 / XXXL   | `--wp--preset--font-size--xxx-large` |       `2rem` |      `1.5rem → 2rem` | H2-scale.                                               |
| FS1 / Huge   | `--wp--preset--font-size--huge`      |     `2.5rem` |  `1.875rem → 2.5rem` | H1-scale.                                               |

## 3.2 Display scale

| Token | CSS variable                         | Nominal size |         Fluid range | Working role                      |
| ----- | ------------------------------------ | -----------: | ------------------: | --------------------------------- |
| DS6   | `--wp--preset--font-size--display-6` |     `2.5rem` | `1.875rem → 2.5rem` | Small display heading.            |
| DS5   | `--wp--preset--font-size--display-5` |       `3rem` |    `2.25rem → 3rem` | Display heading.                  |
| DS4   | `--wp--preset--font-size--display-4` |     `3.5rem` |   `2.5rem → 3.5rem` | Large display heading.            |
| DS3   | `--wp--preset--font-size--display-3` |       `4rem` |    `2.75rem → 4rem` | Large display/hero heading.       |
| DS2   | `--wp--preset--font-size--display-2` |     `4.5rem` |     `3rem → 4.5rem` | Extra-large display/hero heading. |
| DS1   | `--wp--preset--font-size--display-1` |       `5rem` |    `3.25rem → 5rem` | Maximum display heading.          |

---

# 4. Font Families

Authoritative source: `settings.typography.fontFamilies`.

| Role      | CSS variable                           | Source stack                                                                                                                                                | Definition                                                |
| --------- | -------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------- |
| Body      | `--wp--preset--font-family--body`      | `system-ui, sans-serif`                                                                                                                                     | Default reading text, form controls, general metadata.    |
| Heading   | `--wp--preset--font-family--heading`   | `Avenir, Montserrat, Corbel, 'URW Gothic', source-sans-pro, sans-serif`                                                                                     | Headings, titles, prominent component labels.             |
| Display   | `--wp--preset--font-family--display`   | `Seravek, 'Gill Sans Nova', Ubuntu, Calibri, 'DejaVu Sans', source-sans-pro, sans-serif`                                                                    | Display/hero typography and decorative large-format text. |
| Monospace | `--wp--preset--font-family--monospace` | `SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace`                                                                      | Code and preformatted text.                               |
| Button    | `--wp--preset--font-family--button`    | `ui-rounded, 'Hiragino Maru Gothic ProN', Quicksand, Comfortaa, Manjari, 'Arial Rounded MT', 'Arial Rounded MT Bold', Calibri, source-sans-pro, sans-serif` | Buttons, navigation, compact interaction labels.          |

---

# 5. Font Weights

Authoritative source: `settings.custom`.

| Token      | CSS variable                        | Value | Definition                                      |
| ---------- | ----------------------------------- | ----: | ----------------------------------------------- |
| Light      | `--wp--custom--font-weight-light`   | `300` | Light emphasis / selected editorial treatments. |
| Body       | `--wp--custom--font-weight-body`    | `400` | Default reading and form-control weight.        |
| Button     | `--wp--custom--font-weight-button`  | `500` | Buttons, emphasized interactive/meta labels.    |
| Navigation | `--wp--custom--font-weight-nav`     | `500` | Navigation and navigation-like controls.        |
| Heading    | `--wp--custom--font-weight-heading` | `600` | Headings/titles.                                |
| Bold       | `--wp--custom--font-weight-bold`    | `700` | Strong emphasis.                                |

---

# 6. Line-Height and Tracking Conventions

| Role                          |    Line height |    Letter spacing | Definition                                                             |
| ----------------------------- | -------------: | ----------------: | ---------------------------------------------------------------------- |
| Body / text controls / labels |          `1.6` |            normal | Primary reading and form baseline.                                     |
| Heading / title               |          `1.2` |         `0.015em` | Compact heading rhythm.                                                |
| Button                        |         `1.45` |          `0.03em` | Interactive control baseline.                                          |
| Navigation                    |         `1.45` |          `0.03em` | Navigation control baseline.                                           |
| Compact metadata / captions   | commonly `1.5` | commonly `0.03em` | Dates, terms, captions and related metadata where explicitly authored. |
| H4                            |         `1.25` |  heading tracking | Secondary heading adjustment.                                          |
| H5 / H6                       |          `1.3` |  heading tracking | Small heading adjustment.                                              |

---

# 7. Borders and Radius

## 7.1 Border primitives

| Token        | CSS variable                 |   Value | Definition                    |
| ------------ | ---------------------------- | ------: | ----------------------------- |
| Border width | `--wp--custom--border-width` |   `1px` | Standard SystemStrap outline. |
| Border style | `--wp--custom--border-style` | `solid` | Standard border style.        |

## 7.2 Radius scale

| Token          | CSS variable                       |     Value | Approx. px | Definition                             |
| -------------- | ---------------------------------- | --------: | ---------: | -------------------------------------- |
| Small radius   | `--wp--custom--border-radius-sm`   |  `.25rem` |        4px | Compact controls/surfaces.             |
| Default radius | `--wp--custom--border-radius`      | `.375rem` |        6px | **Standard System UI radius.**         |
| Large radius   | `--wp--custom--border-radius-lg`   |   `.5rem` |        8px | Larger cards/media/surfaces.           |
| XL radius      | `--wp--custom--border-radius-xl`   |    `1rem` |       16px | Large containers/dialog-like surfaces. |
| Pill radius    | `--wp--custom--border-radius-pill` |   `50rem` |          — | Pills/capsules/fully rounded controls. |

Specialized aliases:

- `--wp--custom--btn-border-radius`
- `--wp--custom--form-border-radius`
- `--wp--custom--dropdown-border-radius`
- `--wp--custom--badge-border-radius`

---

# 8. Shadows and Elevation

Authoritative source: `settings.shadow.presets`.

| Token          | CSS variable                                | Definition                              |
| -------------- | ------------------------------------------- | --------------------------------------- |
| Small          | `--wp--preset--shadow--sm`                  | Low elevation / subtle surface lift.    |
| Medium         | `--wp--preset--shadow--md`                  | **Standard System UI panel elevation.** |
| Large          | `--wp--preset--shadow--lg`                  | High elevation / modal-like surfaces.   |
| Inset          | `--wp--preset--shadow--inset`               | Recessed treatment.                     |
| Dropdown Menu  | `--wp--preset--shadow--dropdown-menu`       | Floating menu/dropdown elevation.       |
| Form Focus     | `--wp--preset--shadow--form-focus`          | Focus treatment.                        |
| Form Shadow    | `--wp--preset--shadow--form-control-shadow` | Form-control depth.                     |
| Button Resting | `--wp--preset--shadow--btn-resting`         | Resting button elevation.               |
| Button Hover   | `--wp--preset--shadow--btn-hover`           | Hover button elevation.                 |
| Button Active  | `--wp--preset--shadow--btn-active`          | Pressed/active button state.            |

Default alias:

```css
--wp--custom--shadow: var(--wp--preset--shadow--md);
```

---

# 9. Layout Widths

| Role          | Source value        | Definition                        |
| ------------- | ------------------- | --------------------------------- |
| Content width | `min(100%, 1200px)` | Normal constrained content width. |
| Wide width    | `min(100%, 1320px)` | Wide-aligned content width.       |

Root horizontal page padding:

```css
clamp(1rem, 2vw, 2rem)
```

This is composition-level page padding, not a general reusable spacing token.

---

# 10. Button Structural Constants

| Role            | Token/value                                      | Definition                                  |
| --------------- | ------------------------------------------------ | ------------------------------------------- |
| Border width    | `--wp--custom--btn-border-width` = `1px`         | Standard button outline width.              |
| Radius          | `--wp--custom--btn-border-radius`                | Button radius; defaults to standard radius. |
| Transform       | `--wp--custom--btn-transform` = `none`           | Resting transform.                          |
| Hover transform | `--wp--custom--btn-hover-transform` = `none`     | Hover transform.                            |
| Transition      | `--wp--custom--btn-transition`                   | Shared button transition contract.          |
| Font family     | Button family                                    | Shared button typography.                   |
| Font size       | Medium                                           | Shared button typography.                   |
| Weight          | Button / `500`                                   | Shared button typography.                   |
| Tracking        | `.03em`                                          | Shared button typography.                   |
| Line height     | `1.45`                                           | Shared button typography.                   |
| Inline padding  | Spacing 30                                       | Shared standard button inset.               |
| Block padding   | `calc(var(--wp--preset--font-size--small) * .5)` | Size-relative vertical inset.               |

Color-bearing button tokens are intentionally excluded.

---

# 11. Form Structural Constants

| Role             | Token/value                                 | Definition                         |
| ---------------- | ------------------------------------------- | ---------------------------------- |
| Border width     | `--wp--custom--form-border-width`           | Standard form outline width.       |
| Radius           | `--wp--custom--form-border-radius`          | Standard form-control radius.      |
| Transition       | `--wp--custom--form-transition`             | Border/shadow transition contract. |
| Text family      | Body                                        | Frozen generic form baseline.      |
| Text size        | Medium                                      | Frozen generic form baseline.      |
| Text weight      | Body / `400`                                | Frozen generic form baseline.      |
| Text line height | `1.6`                                       | Frozen generic form baseline.      |
| Focus ring width | `--wp--custom--focus-ring-width` = `.25rem` | Standard focus halo width.         |

---

# 12. Badge Constants

| Role                 | CSS variable                        |             Value | Definition                            |
| -------------------- | ----------------------------------- | ----------------: | ------------------------------------- |
| Badge font size      | `--wp--custom--badge-font-size`     |           `.75em` | Badge text scale relative to context. |
| Badge weight         | `--wp--custom--badge-font-weight`   | Navigation weight | Compact emphasized label weight.      |
| Badge inline padding | `--wp--custom--badge-padding-x`     |           `.65em` | Horizontal badge inset.               |
| Badge block padding  | `--wp--custom--badge-padding-y`     |           `.35em` | Vertical badge inset.                 |
| Badge radius         | `--wp--custom--badge-border-radius` |           derived | Radius derived from standard radius.  |

---

# 13. Interaction and State Constants

| Role              | CSS variable/value                                               | Definition                            |
| ----------------- | ---------------------------------------------------------------- | ------------------------------------- |
| Focus ring width  | `--wp--custom--focus-ring-width: .25rem`                         | Standard keyboard-focus ring width.   |
| Disabled opacity  | `--wp--custom--disabled-opacity: .75`                            | Standard disabled visual opacity.     |
| Disabled filter   | `--wp--custom--disabled-filter: grayscale(75%) brightness(100%)` | Standard disabled-state filter.       |
| Button transition | `--wp--custom--btn-transition`                                   | Shared interactive button transition. |
| Form transition   | `--wp--custom--form-transition`                                  | Shared form-control transition.       |

---

# 14. System UI Structural Constants

Stable structural expectations:

- standard border width: `1px`
- standard border style: `solid`
- standard radius: `.375rem`
- standard Panel shadow: Medium shadow
- standard component gap: Spacing 30
- compact control gap: Spacing 20
- heading micro rhythm: Spacing 10
- Body baseline: Body / Medium / 400 / `1.6`
- Heading baseline: Heading / Heading weight / `1.2`
- Button baseline: Button / Medium / 500 / `.03em` / `1.45`

Do not duplicate those values inside plugin adapters when the shared token is available.

---

# 15. Style-Dependent Color and Gradient Tokens

**Values intentionally omitted from this contract.**

Maintain style-dependent colors, semantic surfaces, palettes, duotones, gradients and patterns in a separate reference such as:

```text
docs/contracts/systemstrap-color-tokens.md
```

That reference should document semantic role and token name without encouraging copied resolved hex/RGB/gradient values.

---

# 16. Dynamic / Runtime Tokens

Not every reusable SystemStrap constant originates in `theme.json`.

Runtime-derived tokens, such as WordPress image dimensions, should be documented separately with:

- semantic role
- CSS variable
- runtime source
- fallback
- whether the value can vary by site settings

Do not hardcode runtime-derived values here as permanent constants.

---

# 17. Agent / Contributor Directive

> **SYSTEMSTRAP TOKEN RULE**
> Before authoring a literal spacing, typography, font-weight, radius, border, shadow, width, control-size, motion, or other design-system value, consult the SystemStrap Design Token Reference and its authoritative source. Reuse an existing semantic token when one represents the requirement. Do not infer token names from resolved numeric values. Do not create a new token solely to eliminate a literal. If the design system lacks the needed semantic constant, report the gap before introducing one. Color and gradient values must be consumed by semantic token name and must never be copied from the currently active style variation as universal constants.

---

# 18. Maintenance Rule

Recommended future workflow:

```text
theme.json / runtime token emitters
            ↓
authoritative token data
            ↓
generated/reference documentation
            ↓
humans + agents + integrations
```

A future generator should parse spacing presets, typography, stable custom geometry/weight/motion values, shadows, layout widths, and approved runtime token emitters while keeping style-dependent color/gradient values separate.

---

## Source snapshot

Prepared from the current `main` branch `theme.json` in the SystemStrap repository on 2026-09-03.

Primary authority:

```text
https://github.com/GLWalker/systemstrap/blob/main/theme.json
```
