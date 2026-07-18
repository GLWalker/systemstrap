# Contract: Interactive Surface Architecture

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.0

Last Updated: 2026-06-15

## Change Log

### 1.0

Rewritten to current contract standard from live theme sources.

## Purpose

SystemStrap MUST treat interactive frontend behavior as a theme-owned runtime surface rather than an incidental side effect of block markup.

SystemStrap MUST document the actual architecture used for interactive controls, editor-side trigger configuration, server-side interception, and frontend dialog behavior.

SystemStrap MUST preserve these goals across all changes to interactive surfaces:

- editor controls define interaction intent through block attributes
- frontend runtime behavior remains source-traceable from editor configuration to rendered output
- dialog and offcanvas triggers stay native-block-compatible rather than requiring custom frontend block types
- current implementation and future Interactivity API ambitions remain clearly separated

## Principles

- Prefer extending core blocks over replacing them with heavy custom frontend blocks.
- Prefer source-traceable editor attributes over magic class-name-only behavior when the theme owns the trigger architecture.
- Prefer server-side augmentation of block output where the theme needs guaranteed runtime markup.
- Prefer native HTML interactive primitives where the theme already has a working browser runtime.
- Prefer documenting planned migration separately from shipped architecture.

## Runtime Priority Order

When interactive goals conflict, SystemStrap currently prioritizes them in this order:

1. Accessibility.
2. Native browser primitives.
3. Editor traceability.
4. Theme consistency.
5. Visual enhancement.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

The current interactive-surface layer is implemented through these files:

- `wp-content/themes/systemstrap/inc/dialog-renderer.php`
- `wp-content/themes/systemstrap/assets/js/dialog-init.js`
- `wp-content/themes/systemstrap/assets/js/variations/strap-icon-controls.js`
- `wp-content/themes/systemstrap/assets/js/variations/strap-panels.js`
- `wp-content/themes/systemstrap/inc/enqueue-assets.php`
- `wp-content/themes/systemstrap/theme.json`
- `wp-content/themes/systemstrap/parts/offcanvas-part.html`
- `wp-content/themes/systemstrap/parts/modal-part.html`
- `wp-content/themes/systemstrap/parts/modal-search.html`
- `wp-content/themes/systemstrap/patterns/header.php`
- `wp-content/themes/systemstrap/patterns/header-alt.php`

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new interactive trigger attribute, trigger detection rule, dialog runtime rule, variation-side editor control, or migration to a different interaction model MUST be added to this contract in the same change set that introduces it.

Any removal of an interaction behavior listed here MUST be treated as an architecture change and documented here in the same change set.

## Current Architecture Status

SystemStrap currently does NOT implement the WordPress Interactivity API as its shipped interactive runtime for dialogs or offcanvas surfaces.

The current shipped architecture is:

- editor-side attribute extension on selected core blocks
- editor-side inspector controls for selecting dialog behavior and template part targets
- server-side interception of rendered triggers
- server-side rendering of selected template parts into native `<dialog>` shells
- frontend JavaScript that opens and closes those dialogs through browser APIs

The theme MUST NOT claim that `data-wp-interactive`, `wp_interactivity_state()`, or `@wordpress/interactivity` store modules are part of the current runtime unless code for them is added.

## Progressive Enhancement Contract

If JavaScript fails to execute, interactive triggers MAY lose their enhanced open-and-close behavior, but they MUST NOT corrupt non-interactive page rendering.

Server-rendered trigger markup, template-part output, and surrounding block content MUST remain valid HTML output even when the frontend runtime does not execute.

## Approved Current Mechanisms

SystemStrap currently uses these approved mechanisms for interactive surfaces.

### 1. Editor block attribute extension

The theme extends selected block types in the editor through `blocks.registerBlockType` filters in `assets/js/variations/strap-icon-controls.js`.

### 2. Editor inspector controls

The theme adds inspector controls through `editor.BlockEdit` filters in `assets/js/variations/strap-icon-controls.js`.

### 3. Server-side render interception

The theme intercepts rendered block output in `inc/dialog-renderer.php` for allowed trigger blocks.

### 4. Template-part-backed dialog composition

The theme renders selected template parts into dialog shells at runtime instead of embedding a separate custom dialog block frontend runtime.

For offcanvas positions, the rendered dialog shell MUST remain a transport layer for dimensions, visibility, animation, and close-button overlay behavior.

For offcanvas positions, the dialog renderer MUST wrap rendered template-part content in a runtime surface container carrying `strap-offcanvas-panel`.

That runtime wrapper MUST own the visible surface styling, scrolling behavior, padding, and inner-edge border treatment.

### 5. Native browser dialog runtime

The frontend currently uses the browser `<dialog>` element plus theme JavaScript in `assets/js/dialog-init.js`.

## Current Trigger Block Contract

The current allowed trigger blocks are:

- `core/icon`
- `icon-block/icon`
- `core/button`

These block types are part of the current interaction contract because both the editor extension and the server-side renderer consume them explicitly.

## Current Editor Attribute Contract

`assets/js/variations/strap-icon-controls.js` currently extends the allowed trigger blocks with these attributes:

- `systemDialogAction`
- `systemDialogPattern`
- `systemDialogTemplatePart`
- `systemDialogPosition`

The current defaults are:

- `systemDialogAction: false`
- `systemDialogPattern: ""`
- `systemDialogTemplatePart: ""`
- `systemDialogPosition: "start"`

These attribute names are part of the current public architecture surface for interactive triggers.

## Current Editor Control Contract

The theme currently injects inspector controls labeled:

- `Dialog Action`
- `Trigger Dialog Modal?`
- `Slide Direction / Position`
- `Load Template Part`

The current position options are:

- `start`
- `end`
- `top`
- `bottom`
- `center`

The current implementation treats:

- `center` as modal selection behavior
- all non-`center` positions as offcanvas-style selection behavior

When the position changes, the current implementation clears `systemDialogPattern` and `systemDialogTemplatePart`.

That reset behavior is part of the current editor-side interaction contract.

## Template Part Selection Contract

The current template-part selector in `strap-icon-controls.js` uses the editor entity store through `wp.data.useSelect()`.

The current template-part filtering behavior is:

- if `systemDialogPosition === "center"`, available template parts are restricted to slugs beginning with `modal-`
- otherwise, available template parts are restricted to slugs beginning with `offcanvas-`

This slug-prefix filtering is part of the current interaction architecture.

The current trigger architecture therefore depends on template part slugs that follow the `modal-*` or `offcanvas-*` convention.

The current selector MUST discover both admin-created template parts stored in the database and file-backed template parts shipped in the active theme.

The default offcanvas visual tokens currently come from `theme.json` custom properties:

- `--wp--custom--offcanvas-bg`
- `--wp--custom--offcanvas-text`

Those tokens are part of the current interactive-surface contract for offcanvas template parts.

## Server-Side Trigger Detection Contract

`inc/dialog-renderer.php` currently intercepts rendered blocks only when:

- the rendered block type is one of the allowed trigger blocks
- `systemDialogAction` is truthy
- either `systemDialogTemplatePart` is not empty or a legacy `systemDialogPattern` value can be mapped to a template part slug

If those conditions are not met, the rendered block content MUST remain unmodified by the dialog renderer.

## Server-Side Trigger Mutation Contract

When a block is intercepted, the first rendered tag currently receives:

- `data-strap-dialog-target`
- `data-strap-dialog-label-closed`
- `data-strap-dialog-label-open`
- `aria-controls`
- `aria-expanded="false"`
- `aria-haspopup="dialog"`
- `aria-label`

If the first rendered tag is not `A` or `BUTTON`, it currently also receives:

- `role="button"`
- `tabindex="0"`

For dialog-enabled `core/icon` and `icon-block/icon` blocks, SystemStrap currently upgrades the single rendered root wrapper to a native:

- `<button type="button">`

before applying dialog trigger attributes.

This conversion applies only to intercepted dialog-enabled icon blocks.

Icon blocks that do not opt into the dialog trigger architecture MUST remain core-rendered and MUST NOT be rewritten into buttons by this runtime.

If the intercepted trigger contains inline SVG markup, each descendant `svg` currently receives:

- `aria-hidden="true"`
- `focusable="false"`

This mutation is part of the current trigger runtime contract.

## Dialog Identity Contract

Each intercepted trigger currently receives a generated dialog target id of the form:

- `strap-dialog-<uuid>`

This id is used as:

- the trigger target selector
- the rendered dialog `id`

The theme MUST maintain this one-trigger-to-one-dialog linkage unless the runtime model changes explicitly.

## Template Part Rendering Contract

The current dialog renderer uses:

- `get_block_template( get_stylesheet() . '//' . $slug, 'wp_template_part' )`

to resolve the selected template part during the main render process.

When a template part is resolved successfully, the renderer uses `do_blocks( $template_part->content )` so nested block markup is rendered through core during the main render process.

The current implementation also tracks in-flight dialog source guards to prevent infinite recursion when a dialog source loops back into itself.

## Dialog Shell Contract

The current runtime renders intercepted content into native dialog shells in the footer.

SystemStrap currently attempts to mount those dialog shells inside the rendered `core/template-part` footer block when the template-part is identified as `site-footer` or `slug="footer"`.

If no eligible footer template-part consumes the dialog queue, `wp_footer` remains the fallback mount point.

Each rendered dialog currently:

- uses a native `<dialog>` element
- receives a unique `id`
- receives a position-derived class of the form `strap-dialog strap-dialog-pos-{position}`
- receives `aria-modal="true"`
- receives `aria-label`

The inner content wrapper currently:

- uses `<div class="strap-dialog-content" role="document">`

The close control currently:

- is rendered as a real `<button type="button">`
- sits inside `.strap-dialog-close-btn`
- carries `aria-label="Close dialog"`

## Frontend Runtime Contract

`assets/js/dialog-init.js` currently governs dialog behavior after the dialog shells are printed.

The current runtime behavior is:

- clicking a trigger with `[data-strap-dialog-target]` opens the addressed dialog with `showModal()`
- pressing `Enter` on a focused trigger with `[data-strap-dialog-target]` opens the addressed dialog with `showModal()`
- pressing `Space` on a focused trigger with `[data-strap-dialog-target]` opens the addressed dialog with `showModal()`
- opening a dialog from a trigger sets that trigger’s `aria-expanded` state to `true`
- closing a dialog restores the originating trigger’s `aria-expanded` state to `false`
- closing a dialog restores focus to the originating trigger
- trigger `aria-label` values switch between the server-provided closed and open state labels
- clicking outside the dialog content rectangle closes the dialog
- matching close controls inside a dialog close the dialog

### Current close selector implementations

The current close selector list is:

- `.-close`
- `.close`
- `[data-dismiss="dialog"]`

Elements matching those selectors inside a dialog MUST close the dialog under the current implementation.

## Asset Loading Contract

`inc/dialog-renderer.php` currently enqueues these runtime assets unconditionally through `wp_enqueue_scripts`:

- `assets/css/style-variations/core-icon-dialog.css`
- `assets/js/dialog-init.js`

This unconditional load is part of the current architecture contract.

## Group Variation Contract

`assets/js/variations/strap-panels.js` currently registers `core/group` variations that participate in the interactive content surface around modal-style panels.

The current known variation set includes at least:

- `strap-panel-basic`
- `strap-panel-modal`
- `strap-panel-image`

The `strap-panel-modal` variation currently applies:

- `className: "is-style-system-panel is-style-system-modal"`
- `backgroundColor: "base"`
- modal-oriented inner block scaffolding

This variation is part of the current interactive composition layer because AJAX search and modal content detection use `.is-style-system-modal`.

## Theme JSON Variation Contract

`theme.json` currently contains block-level `variations` style declarations for at least some block types such as:

- `core/image`
- `core/quote`

Those `theme.json` variation style declarations are part of the broader editor/runtime variation surface, but they do NOT currently constitute a WordPress Interactivity API runtime.

Detailed variation governance belongs in `variation-architecture.md` when that contract is fully written.

## Template Part Coupling Contract

The current interaction layer is coupled to dialog template part families and headers that already emit interactive triggers.

The current interactive dialog template part surfaces include:

- `parts/offcanvas-part.html`
- `parts/modal-part.html`
- `parts/modal-search.html`
- trigger-bearing header patterns such as `patterns/header.php` and `patterns/header-alt.php`

Template part slug naming is part of the current architecture because editor-side selection filters on `modal-` and `offcanvas-` prefixes.

## Non-Implemented Interactivity API Contract

The following Interactivity API surfaces are NOT part of the current shipped runtime:

- `data-wp-interactive`
- `data-wp-on--*`
- `data-wp-bind--*`
- `wp_interactivity_state()`
- `@wordpress/interactivity` store modules

This contract MUST remain explicit about that absence until real implementation code exists.

## Planned Migration Contract

SystemStrap MAY migrate some or all current interactive surfaces to the WordPress Interactivity API in the future.

That migration is currently roadmap intent, not shipped architecture.

## Interactivity API Migration Preservation Contract

If SystemStrap adopts the WordPress Interactivity API for currently shipped surfaces, that adoption MUST preserve existing trigger attributes and editor-side authoring experience unless the change is explicitly documented as a breaking change.

If such migration happens, the contract MUST be updated to document:

- source files
- state registration mechanism
- rendered `data-wp-*` attributes
- trigger and target coupling rules
- fallback behavior for non-supporting environments if any

## Prohibited Regressions

The theme MUST NOT introduce any of the following regressions into the interactive architecture layer:

- claiming Interactivity API usage without shipped implementation
- removing editor-side trigger attributes without replacing the server-side detection mechanism
- breaking the template-part slug-prefix contract for modal and offcanvas selection without updating the editor filter logic and this contract
- replacing native `<dialog>` runtime behavior without updating both frontend and server-side contracts
- removing keyboard activation for non-button triggers without explicit replacement
- dropping recursion protection for template-part rendering without equivalent safeguards

## Expansion Rule

New interactive work MUST extend this contract by adding:

- source file
- editor configuration surface if any
- server-side interception mechanism if any
- frontend runtime mechanism
- pattern or variation coupling if applicable
- Interactivity API status if it changes

## Current Expansion Queue

The following related surfaces are active future documentation or migration targets:

- a dedicated `variation-architecture.md` contract for the broader variation system
- any future Interactivity API migration for dialogs, offcanvas, dropdowns, or other controls
- WooCommerce interactive surfaces if WooCommerce-specific runtime behavior enters the theme
