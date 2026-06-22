# Theme Variation Porting Guide

Version: 2.0
Status: Active
Scope: Porting external themes into SystemStrap variation architecture

---

# Purpose

This document explains how to convert an external design system, Bootstrap theme, Bootswatch theme, commercial template, or custom stylesheet into a complete SystemStrap variation.

A complete SystemStrap variation consists of three files:

```text
/styles/{variation}.json
/styles/colors/{variation}.json
/styles/typography/{variation}.json
```

Together these files recreate the visual identity of the source theme while remaining compatible with:

- WordPress 6.6+ Mix and Match Variations
- SystemStrap runtime contracts
- SystemStrap color runtime
- SystemStrap shadow system
- SystemStrap CSS architecture

This guide teaches the porting process.

It does not define runtime governance.

---

# Source Hierarchy

When porting a variation, use the following order of authority:

1. Source Theme Stylesheet
2. Source Theme Assets
3. SystemStrap theme.json
4. Existing SystemStrap Variations
5. Personal Preference

When the source theme provides a clear implementation:

- Prefer the source.

When the source theme is silent:

- Reuse SystemStrap conventions.

---

# Orthogonal Design Domains

Do not treat a variation as a monolithic "theme skin."

A variation must be treated as three orthogonal design domains:

1. **Layout / Personality** (`styles/{variation}.json`)
2. **Color System** (`styles/colors/{variation}.json`)
3. **Typography System** (`styles/typography/{variation}.json`)

These domains must remain independently composable so users can mix and match styles (e.g., Typography A + Colors B + Layout C) without creating monolithic presets.

**Why does SystemStrap use a Layout variation for structural personality (shadows, radius, chrome)?**

Because external design systems derive their identity differently:

- **Flatly** derives identity from color.
- **Quartz** derives identity from chrome and glass.
- **Morph** derives identity from shadows and neumorphism.
- **Vapor** derives identity from neon gradients.

Color variations cannot naturally hold glassmorphism or neumorphism. 
The Layout variation is the correct owner for structural personality, preserving the non-color, non-typography identity of the imported design system.

---

# Understanding the Three Files

## Layout Variation

Location:

```text
/styles/{variation}.json
```

Purpose:

- Radius system
- Shadow system
- Spacing system
- Font weights
- Surface treatments
- Block CSS
- Theme personality

Examples:

```text
brite.json
vapor.json
quartz.json
```

---

## Color Variation

Location:

```text
/styles/colors/{variation}.json
```

Purpose:

- Palette
- Duotones
- Gradients
- Body background
- Color application

Examples:

```text
styles/colors/brite.json
styles/colors/vapor.json
styles/colors/quartz.json
```

---

## Typography Variation

Location:

```text
/styles/typography/{variation}.json
```

Purpose:

- Font registration
- Font assignment
- Typography styling

Examples:

```text
styles/typography/brite.json
styles/typography/vapor.json
styles/typography/quartz.json
```

---

# Variation Scope Discipline

A variation should only own the things it is responsible for.

## Typography Variation

Should own:

```json
{
  "settings": {
    "typography": {}
  },
  "styles": {
    "typography": {}
  }
}
```

Should not own:

```json
{
  "settings": {
    "color": {}
  }
}
```

## Color Variation

Should own:

```json
{
  "settings": {
    "color": {}
  },
  "styles": {
    "color": {}
  }
}
```

Should not own:

```json
{
  "settings": {
    "typography": {}
  }
}
```

## Layout Variation

Should own:

```json
{
  "settings": {
    "custom": {}
  },
  "styles": {
    "blocks": {}
  }
}
```

and structural personality concerns.

That discipline is what allows WordPress Mix-and-Match Variations to work predictably.

---

# Porting Workflow

Every variation should be created using the following workflow.

---

## Step 1 — Identify the Theme

Determine what creates the visual identity.

Examples:

```text
Corporate
Bootstrap
Bootswatch
Glassmorphism
Minimal
Dark
Material
Neumorphism
```

Ask:

```text
What makes this theme recognizable?
```

Possible answers:

```text
Color palette
Typography
Chrome
Gradients
Shadows
Surface treatments
```

The answer determines where most effort should be spent.

---

## Step 2 — Extract Colors

Capture:

```text
Base
Contrast

Secondary Background
Secondary Contrast

Tertiary Background
Tertiary Contrast

Border Color

Primary
Secondary
Success
Info
Warning
Danger
Light
Dark
```

These become the palette in:

```text
styles/colors/{variation}.json
```

---

## Step 3 — Build Duotones

Duotones are always rebuilt.

Requirements:

- Same slug set as theme.json
- Same naming convention
- Complete replacement
- No partial replacement

Duotones should clearly express the variation palette.

---

## Step 4 — Determine Gradient Strategy

Gradient changes are the exception.

Most themes should reuse existing SystemStrap gradients.

Only four gradients are normally evaluated.

---

### Gradient

Used to slightly lighten or darken surfaces.

May remain unchanged.

May be adjusted to better fit the theme.

---

### Gradient Alt

Companion gradient.

May remain unchanged.

May be adjusted to better fit the theme.

---

### Body Background

Represents page identity.

If the source theme provides a body gradient:

Use it.

Otherwise:

Create a modern background gradient that supports the theme palette.

Then, apply it natively in the Color Variation:

```json
{
	"styles": {
		"color": {
			"gradient": "var:preset|gradient|body"
		}
	}
}
```

---

### Element Background

Represents:

```text
Cards
Panels
Chrome
Surfaces
Containers
```

If the source theme provides a primary element gradient:

Use it.

Otherwise:

Reuse the existing SystemStrap gradient.

---

### Remaining Gradients

Duplicate the remaining gradients unchanged.

Because they use palette variables they will naturally adapt to the variation.

---

# Gradient Application Rule

Defining a gradient does not apply a gradient.

When a variation requires a body gradient:

1. Create the gradient in settings.color.gradients.
2. Apply the gradient through styles.color.gradient.

Example:

```json
{
  "styles": {
    "color": {
      "gradient": "var:preset|gradient|body"
    }
  }
}
```

Never move variation identity into reset CSS merely to force a background image.

---

# Step 5 — Extract Typography

Capture:

```text
Body Font
Heading Font
Navigation Font
Button Font
Display Font
Monospace Font
```

Register fonts in:

```text
styles/typography/{variation}.json
```

If local font files are required:

- Ship the files
- Register fontFace entries
- Verify paths exist

---

# Step 6 — Extract Shadows

Identify the primary shadow used throughout the design.

Common locations:

```text
Cards
Panels
Buttons
Dropdowns
Modals
Menus
```

Determine:

```text
Small
Medium
Large
```

Map those values into the SystemStrap shadow library.

Required shadow set:

```text
Small
Medium
Large
Inset
Form Focus
Form Shadow
Button Resting
Button Hover
Button Active
Dropdown Menu
```

---

## Important Rule

Structure and values are separate concerns.

Preserve:

- Slugs
- Names
- Order

Do not assume a variation should inherit default shadow values.

A variation may define an entirely different shadow system while still preserving the required shadow structure.

The Brite shadow regression occurred because structure and values were treated as the same thing.

They are not.

---

## Primary Shadow

The most common shadow should be assigned to:

```json
{
	"settings": {
		"custom": {
			"shadow": "var:preset|shadow|md"
		}
	}
}
```

The selected preset becomes the variation's preferred shadow.

---

# Step 7 — Extract Radius System

Capture:

```text
Default Radius
Small Radius
Large Radius
Pill Radius
```

Map into:

```text
border-radius
border-radius-sm
border-radius-lg
border-radius-pill
```

inside `settings.custom` in the layout variation.

---

# Step 8 — Evaluate Spacing

Bootstrap spacing should not be blindly ported.

Determine whether spacing contributes to the theme's identity.

Examples:

```text
Button padding
Card spacing
Container spacing
Section spacing
Gutters
```

If spacing is part of the design language:

Port it.

If spacing is generic Bootstrap behavior:

Retain SystemStrap defaults.

---

# Step 9 — Chrome Extraction

Many themes derive their visual identity from chrome rather than color.

Common examples:

- Glassmorphism
- Frosted Panels
- Card Treatments
- Modal Styling
- Navigation Chrome
- Surface Effects

When evaluating a theme:

Do not stop after extracting colors.

Determine whether the visual identity is primarily driven by:

- Color
- Typography
- Chrome
- Shadows
- Gradients

Quartz is a chrome-driven theme.

Its palette alone does not recreate the design.

---

# Step 10 — Determine Whether Block CSS Is Needed

Some themes can be represented entirely through variables.

Others require additional styling.

Examples:

```text
Glassmorphism
Neumorphism
Heavy Chrome
Surface Systems
```

When needed:

Add CSS to the layout variation.

Do not create new architecture.

Do not create new custom variables.

Use existing SystemStrap contracts.

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

SystemStrap already provides its own architecture for these concerns.

Port the design.

Do not port the framework.

---

# Common Porting Mistakes

Do not:

- Port Bootstrap utility classes.
- Port Bootstrap JavaScript.
- Invent custom variables.
- Assume gradients apply themselves.
- Replace variation shadow values with defaults.
- Ignore stylesheet sections after the print block.
- Treat palette extraction as complete theme extraction.
- Move variation behavior into reset CSS.
- Port framework architecture instead of design language.

---

# Final Validation

Before accepting a variation:

- JSON parses successfully.
- Fonts exist.
- Palette is complete.
- Duotones are complete.
- Gradients are complete.
- Shadow library is complete.
- Radius system is complete.
- No local URLs remain.
- No new architecture was introduced.
- Variation remains compatible with Mix-and-Match Variations.

---

# Guiding Principle

Port the design.

Do not port the framework.

SystemStrap already provides the framework.
The variation should provide the personality.
