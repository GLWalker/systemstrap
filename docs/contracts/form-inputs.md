# SystemStrap Native Form Element Contract

Status: Architecture decision
Scope: SystemStrap theme baseline
Ownership: Theme
Strategy: WordPress-native `theme.json` first, minimal CSS compatibility second

---

## Purpose

SystemStrap must provide a coherent baseline presentation for standard form
controls without requiring companion plugins, component-specific style
variations, or duplicated plugin CSS.

Forms are infrastructure.

A normal form control rendered by WordPress Core, WooCommerce, or another
compatible plugin should inherit the SystemStrap design language automatically
where the public markup permits it.

SystemStrap does not create a separate form design system.

Form controls consume the existing SystemStrap design system.

---

## Primary Architecture

Use WordPress's native `theme.json` form-element styling wherever WordPress
provides an appropriate public styling boundary.

Primary native element targets:

- `textInput`
- `select`

`textInput` is the baseline owner for supported text-like inputs and textarea.

`select` is the baseline owner for native select controls.

CSS is supplemental.

Do not replace a WordPress-native `theme.json` capability with a large global
selector system merely to achieve the same result.

---

## Design-System Ownership

Form controls MUST reuse existing SystemStrap tokens.

Do not introduce aliases such as:

- `--form-border-color`
- `--form-background`
- `--form-text-color`
- `--form-font-size`
- `--form-shadow`

when an existing canonical SystemStrap token already owns that visual role.

The form-control contract consumes the same tokens used by the rest of the
theme.

### Border

Use the existing SystemStrap border color.

Use the existing applicable border width.

Use the existing applicable SystemStrap radius.

The border system is already part of SystemStrap and must not be duplicated
for forms.

### Background

Use the existing Base/background color.

Form controls must participate naturally in the site's selected palette and
Global Styles configuration.

Do not hard-code wp-admin white.

### Text

Use the existing Contrast/text color.

Do not hard-code wp-admin text colors.

### Typography

Use SystemStrap's existing body/default typography.

This includes the applicable:

- font family
- default font size
- font weight
- line height

Do not copy wp-admin's fixed application font sizing onto the frontend.

### Spacing

Use the existing SystemStrap spacing scale.

Input/select/textarea padding must resolve through established spacing tokens.

Do not introduce a separate form spacing scale.

### Box Shadow

Preserve and reuse SystemStrap's existing form/control box-shadow treatments.

SystemStrap already has established shadows used by form controls. Those are
part of the form presentation contract and must be audited before changing the
baseline.

Do not replace them merely to imitate wp-admin.

Do not introduce a new `--form-shadow` alias if the existing shadow token/value
already expresses the required state.

The audit must identify existing shadow ownership for:

- normal controls, if applicable
- inset/control-depth treatment, if applicable
- focus
- invalid/error
- disabled/readonly where applicable

The final implementation must preserve the intended distinction between
SystemStrap's existing shadows and focus-ring treatment.

### Focus

Use the existing SystemStrap focus/outline contract.

Do not hard-code WordPress admin blue.

The interaction model may follow modern wp-admin:

- clear boundary
- obvious keyboard focus
- restrained visual treatment
- no unnecessary animation

But its color and visual tokens belong to SystemStrap.

Existing SystemStrap focus/outline custom properties remain authoritative.

---

## WordPress Admin Relationship

The goal is NOT:

> Make the frontend literally use wp-admin CSS.

The goal is:

> Use the same disciplined native-control philosophy as modern WordPress while
> expressing it through SystemStrap's design tokens.

We want the interaction qualities of wp-admin:

- crisp controls
- predictable boundaries
- obvious focus
- restrained radius
- native behavior
- accessible interaction
- minimal decorative interference

We do not copy wp-admin's hard-coded:

- colors
- font sizes
- font family
- spacing
- shadows
- application-specific presentation

SystemStrap remains visually authoritative.

---

## Native-Control Ownership

The browser and WordPress retain ownership of native control behavior wherever
possible.

### Browser / WordPress owns

- keyboard interaction
- form semantics
- autofill
- native select behavior
- native option menus
- date/time picker behavior
- checkbox/radio semantics
- accessibility mechanics
- platform interaction behavior
- validation semantics

### SystemStrap owns

- typography
- foreground color
- background color
- border
- radius
- padding
- control sizing where necessary
- existing control shadows
- placeholder presentation
- focus/focus-visible presentation
- disabled presentation
- readonly presentation
- invalid presentation
- accent color where appropriate
- field rhythm

---

## Text Inputs

Use WordPress `theme.json` `textInput` styling as the primary presentation
boundary where supported.

The baseline should derive from existing SystemStrap values for:

- background
- text
- border
- radius
- typography
- spacing

No plugin-specific class should be required for an ordinary text input to look
correct in SystemStrap.

---

## Textarea

Textarea belongs to the same text-input visual family.

It should inherit the same:

- border
- background
- text color
- typography
- radius
- padding language
- shadow
- focus treatment
- state treatment

Textarea-specific structural behavior may include:

- `width: 100%` where appropriate
- `max-width: 100%`
- useful minimum height
- vertical resize
- inherited typography
- comfortable line height

Prefer typography-relative sizing such as line-based minimum height over an
arbitrary global pixel height where browser support and the existing theme
contract permit it.

Textarea must not become an independently styled component.

---

## Select

Use WordPress `theme.json` `select` styling as the primary baseline.

SystemStrap should initially preserve the native select mechanism and native
dropdown behavior.

Do NOT begin by globally applying:

`appearance: none`

Do NOT begin by replacing the browser arrow with a custom SVG.

First normalize only what SystemStrap needs to own:

- typography
- text color
- background
- border
- radius
- spacing
- shadow
- focus
- disabled state

If cross-browser runtime testing later demonstrates that the native indicator
cannot coexist acceptably with SystemStrap spacing/presentation, a custom
indicator may be evaluated separately.

Native behavior is preferred over decorative emulation.

---

## Checkbox and Radio

Checkboxes and radios are not to be rebuilt with pseudo-elements merely for
visual consistency.

Start with native controls.

Audit the use of:

`accent-color`

against the existing SystemStrap palette/token system.

Preferred baseline:

- native checkbox/radio semantics
- native keyboard behavior
- native checked state
- SystemStrap accent color
- normalized alignment/spacing only where necessary
- SystemStrap focus contract

Only replace native appearance if a future cross-browser audit proves that the
native approach cannot meet the required SystemStrap baseline.

---

## Additional Input Types

The following require explicit audit because they do not necessarily belong to
the normal text-input presentation contract:

- checkbox
- radio
- date
- datetime-local
- time
- month
- week
- file
- range
- color
- hidden
- submit
- reset
- button

Do not blindly apply text-input styling to every `<input>`.

Each control must first be classified by native behavior and visual role.

Submit/reset/button controls belong to the Button system where appropriate,
not the text-input system.

Hidden inputs receive no presentation.

---

## Placeholder

Placeholder presentation belongs to theme baseline compatibility.

Use existing SystemStrap text/muted-color relationships where available.

Do not introduce an independent placeholder palette unless no existing token
correctly expresses the role.

Placeholder text must remain distinguishable from entered text without
sacrificing readability.

---

## Disabled State

Disabled controls must remain unmistakably disabled while preserving adequate
legibility.

SystemStrap may control:

- background
- text
- border
- shadow
- opacity where appropriate
- cursor where appropriate

Do not interfere with native disabled semantics.

---

## Readonly State

Readonly is not equivalent to disabled.

Readonly controls may still:

- receive selection
- allow copying
- participate differently in focus behavior

Do not simply reuse the disabled treatment without auditing the behavioral and
visual distinction.

---

## Invalid / Validation State

Preserve browser and plugin validation semantics.

SystemStrap may normalize presentation for:

- invalid border
- validation focus
- error shadow/ring
- error text relationships

Do not remove native/plugin state indicators unless SystemStrap supplies an
equivalent or stronger accessible indicator.

---

## Plugin Compatibility Rule

Plugins should inherit this baseline before companion-specific presentation is
considered.

Expected inheritance includes, where public markup allows:

- WooCommerce
- comments
- Core Form blocks
- Core Search
- Archives/Category dropdowns
- bbPress
- BuddyPress
- conventional third-party forms
- native template forms

A companion plugin must NOT create a redundant `System Forms` treatment merely
to make ordinary controls match SystemStrap.

That is theme responsibility.

---

## Companion Responsibility

Companions may adapt COMPONENT STRUCTURE where a plugin creates a specialized
form interface.

Examples:

- Woo quantity composition
- coupon input + button composition
- complex checkout field groups
- search/filter compositions
- specialized multi-select interfaces
- plugin-specific grouped controls

Even there, the ordinary controls inside the component should consume the
SystemStrap theme baseline whenever possible.

Companions arrange or bridge the component.

They do not redefine the global input design language.

---

## Specificity / `!important`

Begin with:

1. `theme.json`
2. normal cascade
3. narrowly scoped compatibility CSS

Use `!important` only when a plugin's public CSS prevents a legitimate
SystemStrap baseline property from winning and a safer cascade solution is not
practical.

This is particularly relevant for anticipated plugin compatibility.

A justified compatibility override must be:

- narrowly scoped
- property-specific
- documented
- tested against author controls
- limited to baseline properties SystemStrap legitimately owns

Do not use `!important` to indiscriminately erase plugin component design.

---

## Author Control Preservation

SystemStrap baseline compatibility must not unnecessarily defeat author choices.

Where WordPress exposes an authored control for:

- color
- background
- typography
- border
- radius
- spacing

the authored value should remain authoritative unless a documented structural
compatibility requirement makes that impossible.

The baseline is a default, not a lock.

---

## Implementation Order

Before implementation:

1. Audit current SystemStrap `theme.json`.
2. Audit current SystemStrap form CSS.
3. Identify all existing form-related tokens.
4. Identify existing control box-shadow rules and their state ownership.
5. Identify existing focus/outline tokens.
6. Audit WordPress's current `theme.json` support for `textInput` and `select`.
7. Map existing SystemStrap tokens directly onto those native elements.
8. Identify only the remaining gaps.
9. Implement the smallest possible compatibility CSS for those gaps.
10. Test Core controls before introducing plugin-specific corrections.

Do not start by writing a replacement forms stylesheet.

---

## Acceptance Matrix

Verify at minimum:

### Text-like controls

- text
- password
- email
- search
- tel
- URL
- number

### Multiline

- textarea

### Selection

- select
- select multiple

### Boolean

- checkbox
- radio

### States

- default
- hover where applicable
- focus
- focus-visible
- populated
- placeholder
- disabled
- readonly
- invalid

### Contexts

- Core/native form
- Search
- comments/reviews
- Woo Account
- Woo product forms
- Woo Cart/Checkout where public boundaries permit

### Responsive/accessibility

- desktop
- 360px
- keyboard-only
- zoom
- high-contrast/forced-colors sanity check where practical

---

## Final Architectural Rule

**Forms are theme infrastructure.**

SystemStrap should not require a companion plugin, block style, or special class
to make an ordinary public form control belong visually to the theme.

Use WordPress-native form element styling first.

Use SystemStrap's existing design tokens.

Preserve SystemStrap's existing form box-shadow language.

Preserve native browser behavior wherever possible.

Use compatibility CSS only to bridge what WordPress cannot express natively.

Plugins inherit the system.

They do not each receive a new one.
