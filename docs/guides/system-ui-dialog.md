# SystemStrap Dialog System — Codex Implementation Brief

## Objective

Tighten the existing SystemStrap dialog system without replacing its architecture.

Keep the current ownership model:

- Template parts own reusable authored dialog content.
- PHP resolves sources, mutates trigger semantics, and renders native `<dialog>` shells.
- Native `<dialog>` owns modality and browser-level focus behavior.
- JavaScript owns opening, closing, trigger state, focus restoration, and dynamic initialization.
- CSS owns placement, surface presentation, animation, and responsive behavior.

This is a lifecycle and durability pass, not a redesign.

## Governing source

Read these before editing:

```text
docs/START.md
docs/contracts/semantic-rendering-contract.md
```

Project source outranks this brief. If the current contract has changed, follow the authority chain from `docs/START.md` and update this plan accordingly.

## Primary files in scope

Verify exact paths from project source before editing. Expected files include:

```text
inc/dialog-renderer.php
assets/js/dialog-init.js
assets/js/ajax-search.js
assets/css/style-variations/core-icon-dialog.css
docs/contracts/semantic-rendering-contract.md
parts/modal-part.html
parts/modal-search.html
parts/offcanvas-part.html
```

Do not assume every expected file remains at the same path.

## Non-goals

Do not:

- Replace native `<dialog>`.
- Replace template parts with patterns or serialized page content.
- Rebuild dialogs as a React application.
- Add a custom dialog block unless an existing project contract requires it.
- Add a JavaScript focus-trap library.
- Rewrite the current placement or surface CSS without a proven regression.
- Change the settled carousel or contrast architecture.
- Introduce a service container, framework, build step, or generalized component manager.
- Perform database-wide content migrations during theme activation.
- conditionally enqueue dialog assets unless current asset size or project evidence makes that necessary.

## Required outcomes

1. Dialog initialization is idempotent and supports dynamically inserted dialogs.
2. Native controls retain native keyboard behavior.
3. Trigger state changes only after `showModal()` succeeds.
4. Dialog close cleanup always restores trigger state and focus.
5. Generic `.close` support is treated as legacy rather than the preferred contract.
6. Reduced-motion users do not receive dialog entrance animations.
7. Repeated triggers using the same source have an explicit, documented instance policy.
8. AJAX search cannot render stale responses over newer queries.
9. Existing dialog placements and visual behavior remain unchanged.
10. The semantic rendering contract matches the implementation.

---

## Phase 1 — Verify current source and contracts

Before changing code:

1. Read `docs/START.md`.
2. Follow its authority chain.
3. Read the semantic rendering contract.
4. Inspect all dialog template parts.
5. Trace the trigger attribute registration.
6. Trace PHP source resolution and dialog queueing.
7. Trace frontend initialization and close behavior.
8. Trace AJAX search localization and REST endpoint construction.
9. Verify child-theme template-part resolution behavior from project source or a local integration test.
10. Record any mismatch between source and contract before editing.

Do not infer behavior from filenames alone.

## Phase 2 — Define dialog instance ownership

The current system may render one dialog instance per trigger, even when multiple triggers select the same template part.

Make that policy explicit.

### Preferred model

Support two modes:

```text
shared
independent
```

#### Shared

Multiple triggers using the same source and placement reference one rendered dialog instance.

A stable instance key should be based on durable source identity and rendering options, for example:

```text
source type + source identifier + position
```

Do not use visible labels as identity.

#### Independent

Each trigger receives its own rendered dialog instance.

Use this only where the dialog contains state that must not be shared.

### Implementation constraint

Do not add a new block attribute merely for theoretical flexibility unless the current project needs both modes now.

If only one behavior is presently required, document it clearly and implement it consistently.

### Shared-instance requirements

When multiple triggers point to one dialog:

- Each trigger receives the same `aria-controls` target.
- Opening stores the actual originating trigger.
- Closing restores focus to the trigger that opened the dialog.
- Trigger labels and `aria-expanded` states remain synchronized correctly.
- Duplicate authored IDs inside the template part are avoided because the source is rendered once.
- Repeated PHP rendering of the same source is avoided.

### Independent-instance requirements

When independent rendering remains intentional:

- Every generated dialog ID is unique.
- Duplicate IDs inside authored template-part content are identified as a content-authoring risk.
- The contract states that the same source may be rendered more than once.
- Tests cover multiple instances on one page.

Do not silently change instance semantics without documenting the decision.

## Phase 3 — Add an idempotent dialog initializer

Refactor `assets/js/dialog-init.js` so initialization can run against the full document or an injected fragment.

Preferred public shape:

```js
window.Strap = window.Strap || {}

window.Strap.initDialogs = function initDialogs(scope = document) {
	// Initialize only uninitialized dialogs within scope.
}
```

Preserve an existing public namespace or initializer if project source already defines one. Do not create parallel globals.

### Initializer requirements

The initializer must:

1. Accept `document`, an `Element`, or a fragment-like scope supported by current project code.
2. Find dialogs within the scope.
3. Include the scope itself when it is a dialog.
4. Skip dialogs already initialized.
5. Bind close-event cleanup once.
6. Bind backdrop handling once.
7. Bind explicit close-control handling once, or use delegated handling.
8. Mark initialization using a runtime property or narrowly named data attribute.
9. Avoid duplicate event listeners after repeated calls.
10. Return a useful result only if existing project conventions support it.

Call the initializer on initial page load.

Example:

```js
document.addEventListener("DOMContentLoaded", () => {
	window.Strap.initDialogs(document)
})
```

### Dynamic-content requirement

This must work without duplicate listeners:

```js
window.Strap.initDialogs(document)
window.Strap.initDialogs(fragment)
window.Strap.initDialogs(fragment)
```

The third call must be harmless.

## Phase 4 — Preserve native control behavior

Do not manually recreate keyboard activation for native buttons and anchors.

The delegated click handler should remain the primary activation path.

Custom Enter/Space handling should apply only to fallback elements that are not naturally interactive.

Conceptual guard:

```js
function isNativeInteractive(element) {
	return element.matches("button, a[href], input, select, textarea, summary")
}
```

Then:

```js
if (isNativeInteractive(trigger)) {
	return
}
```

Only fallback elements with a verified dialog trigger role should receive custom key handling.

### Requirements

- Native buttons activate through browser behavior.
- Anchors activate through browser behavior where anchors remain supported.
- Space activates fallback `role="button"` triggers.
- Enter activates fallback `role="button"` triggers.
- Keyboard handling does not cause duplicate opens.
- Preventing default behavior is limited to fallback activation.

Do not broaden fallback semantics to arbitrary elements without a project reason.

## Phase 5 — Make opening state transactional

Do not set the trigger to an open state before confirming that `dialog.showModal()` succeeds.

Preferred sequence:

1. Resolve the target dialog.
2. If it is already open, apply the documented behavior and return.
3. Attempt `showModal()`.
4. On success:
    - store the originating trigger
    - set `aria-expanded="true"`
    - apply the open-state label
5. On failure:
    - clear any temporary trigger reference
    - restore closed-state semantics
    - avoid leaving stale state
    - log only according to project conventions

Conceptual form:

```js
function openDialog(dialog, trigger) {
	if (!(dialog instanceof HTMLDialogElement)) {
		return
	}

	if (dialog.open) {
		return
	}

	try {
		dialog.showModal()
		dialog.__strapTrigger = trigger
		syncTriggerState(trigger, true)
	} catch (error) {
		dialog.__strapTrigger = null
		syncTriggerState(trigger, false)
	}
}
```

Do not copy this blindly. Adapt it to current naming and compatibility requirements.

## Phase 6 — Centralize close cleanup

The native dialog `close` event should remain the single authoritative cleanup path.

Cleanup must:

1. Read the actual trigger that opened the dialog.
2. Set that trigger’s `aria-expanded` to `false`.
3. Restore its closed-state accessible label.
4. Clear the stored trigger reference.
5. Restore focus when the trigger remains connected and focus restoration is appropriate.
6. Avoid throwing when the trigger was removed.
7. Work for:
    - explicit close buttons
    - Escape
    - backdrop close
    - programmatic `dialog.close()`
    - search-result navigation where applicable

Do not duplicate full state cleanup in every close pathway. Each pathway should call `dialog.close()` and let the close event finish the job.

### Focus guard

Use a connected-element check before focusing:

```js
if (trigger && trigger.isConnected && typeof trigger.focus === "function") {
	trigger.focus()
}
```

Respect any existing project rule that intentionally suppresses focus restoration for navigation.

## Phase 7 — Tighten close-control ownership

Preferred authored close contract:

```html
<button type="button" data-dismiss="dialog">Close</button>
```

Generated close controls may retain their existing specific project class.

Treat generic `.close` matching as legacy compatibility.

### Required behavior

- Keep existing `.close` support temporarily if current content depends on it.
- Prefer `[data-dismiss="dialog"]` in documentation and new template parts.
- Scope all close-control detection to the owning dialog.
- Do not allow a close control in one dialog to close another dialog.
- Do not capture unrelated elements merely because a third-party block uses `.close`.

A compatibility check may support:

```text
[data-dismiss="dialog"]
.strap-dialog-close
.close
```

but the code and contract must label `.close` as legacy.

Do not remove legacy support without checking existing template parts and project content.

## Phase 8 — Backdrop behavior

Preserve the current backdrop-click behavior, but make the hit test explicit and testable.

A backdrop close should occur only when the pointer event targets the dialog shell itself, not a descendant inside the visible panel.

Typical condition:

```js
if (event.target === dialog) {
	dialog.close()
}
```

Verify this against all supported positions:

- center
- left
- right
- top
- bottom
- any current offcanvas aliases

Do not change placement calculations while adjusting event binding.

## Phase 9 — Add reduced-motion support

Update the dialog stylesheet so users requesting reduced motion do not receive entrance or stagger animations.

Preserve final layout, visibility, and placement.

Conceptual rule:

```css
@media (prefers-reduced-motion: reduce) {
	dialog.strap-dialog::backdrop,
	.strap-dialog[open] .strap-dialog-content,
	.strap-dialog[open] .strap-dialog-content > * {
		animation: none !important;
		transition: none !important;
	}
}
```

Use current selectors rather than inventing parallel structure.

Do not remove all transitions globally. Scope the rule to dialog-owned animation.

## Phase 10 — Protect AJAX search from stale responses

Inspect `assets/js/ajax-search.js`.

Add one of:

- `AbortController`, or
- a monotonically increasing request token

`AbortController` is preferred when supported by the project’s browser policy.

### Required behavior

When a new query starts:

1. Abort the previous unfinished request.
2. Create a new controller.
3. Pass its signal to `fetch()`.
4. Ignore `AbortError`.
5. Verify `response.ok`.
6. Render only the latest successful response.
7. Preserve current safe DOM construction.
8. Preserve current URL protocol validation.
9. Preserve current title and excerpt sanitization behavior.
10. Keep user-facing errors generic.

Conceptual form:

```js
let activeController = null

async function runSearch(url) {
	activeController?.abort()
	activeController = new AbortController()

	try {
		const response = await fetch(url, {
			signal: activeController.signal,
			credentials: "same-origin",
		})

		if (!response.ok) {
			throw new Error(`Search request failed: ${response.status}`)
		}

		const results = await response.json()
		renderResults(results)
	} catch (error) {
		if (error.name === "AbortError") {
			return
		}

		renderSearchError()
	} finally {
		activeController = null
	}
}
```

Adapt to existing code and localization.

Do not expose raw REST errors or server details to visitors.

## Phase 11 — Verify PHP semantic rendering

Inspect `inc/dialog-renderer.php`.

### Trigger authorization and mutation

Verify that only explicitly opted-in blocks are transformed.

Supported trigger block names must be documented and checked narrowly.

Do not mutate every icon or button globally.

For each supported trigger:

- Ensure a stable dialog target is present.
- Add or preserve `aria-controls`.
- Add or preserve `aria-haspopup="dialog"`.
- Initialize `aria-expanded="false"`.
- Set an accessible closed-state label.
- Preserve an open-state label for runtime use.
- Ensure native buttons use `type="button"`.

### Icon conversion

Keep icon-to-button conversion narrowly scoped.

Requirements:

- Only opted-in icon triggers are converted.
- Existing safe attributes are preserved.
- Attributes are escaped.
- Decorative SVG content is hidden from assistive technology where appropriate.
- Unsupported markup falls back safely.
- No generalized regex HTML parser is introduced.

Add regression fixtures or tests for every currently supported icon block implementation.

### Source resolution

Verify:

- Template-part source identifiers.
- Pattern source identifiers, if supported.
- Edited database template parts.
- Parent-theme template parts under a child theme.
- Child-theme overrides.
- Missing or invalid sources.
- Recursive source references.

Do not claim child-theme fallback is correct without testing it.

### Recursion guard

Preserve the existing recursion guard.

Test:

- direct self-reference
- two-source circular reference
- nested valid dialogs that do not recurse
- repeated shared-source triggers

Failure should skip unsafe recursive rendering without taking down the page.

## Phase 12 — Output placement

Preserve the existing output strategy unless testing proves it broken.

Dialog shells should remain outside ordinary flow content and be emitted at the project’s intended document-level location.

Verify both:

- the preferred template-part/footer insertion path
- the `wp_footer` fallback

Requirements:

- Dialogs output once.
- Shared instances output once.
- Independent instances output once per intended instance.
- No dialog is printed twice because both preferred and fallback paths run.
- Dialog output remains available when a custom footer template is used.
- Missing footer hooks are documented as an unsupported theme integration condition if unavoidable.

Do not relocate dialogs into the trigger block’s saved content.

## Phase 13 — Asset loading

Keep current dialog asset loading unless evidence justifies changing it.

The dialog runtime and stylesheet may be globally enqueued because dialogs can originate from headers, template parts, and other regions that complicate pre-head detection.

Before changing loading behavior, measure:

- runtime file size
- stylesheet size
- execution cost on pages without dialogs
- reliability of conditional detection before `wp_head`

Do not repeat the carousel gate problem merely to save a small asset.

If conditional loading is implemented later, it requires its own design and tests.

## Phase 14 — Contract update

Update:

```text
docs/contracts/semantic-rendering-contract.md
```

Document:

- Supported trigger blocks.
- Durable trigger attributes.
- Template-part and pattern source ownership.
- Shared versus independent instance policy.
- Native `<dialog>` ownership.
- PHP mutation responsibilities.
- JavaScript initialization and lifecycle.
- Dynamic-content initialization entry point.
- Trigger-state ordering around `showModal()`.
- Close-event cleanup.
- Focus restoration.
- Preferred close-control contract.
- Legacy `.close` support.
- Backdrop behavior.
- Reduced-motion behavior.
- Recursion protection.
- Child-theme source resolution.
- AJAX search request cancellation.
- Output placement and fallback behavior.

The contract must describe current source after the change, not the implementation somebody hopes exists later.

---

## Acceptance criteria

### Trigger semantics

For every supported trigger type:

- The trigger is natively interactive where possible.
- Button triggers use `type="button"`.
- `aria-controls` references an existing dialog ID.
- `aria-haspopup="dialog"` is present.
- `aria-expanded` begins as `false`.
- Closed and open accessible labels are correct.
- Unrelated icons and buttons remain unchanged.

### Open behavior

- A valid trigger opens its intended dialog once.
- `aria-expanded` becomes `true` only after successful opening.
- The open-state label is applied after successful opening.
- A failed `showModal()` call does not leave stale open state.
- Repeated activation of an already open dialog follows the documented policy.

### Close behavior

The dialog closes correctly through:

- generated close control
- authored `[data-dismiss="dialog"]` control
- Escape
- backdrop click
- programmatic `dialog.close()`

After close:

- `aria-expanded` is `false`
- the closed label is restored
- focus returns to the actual opening trigger when appropriate
- runtime trigger references are cleared

### Dynamic initialization

After initial page load:

1. Insert a new dialog and trigger.
2. Call the public initializer with the inserted scope.
3. Open and close the dialog.
4. Call the initializer again.
5. Confirm no duplicated behavior.

### Multiple triggers

Test two triggers using the same source.

For shared mode:

- one dialog shell is rendered
- both triggers reference it
- focus returns to the trigger that opened it

For independent mode:

- two unique shells are rendered
- each trigger references its own shell
- authored ID risks are documented or prevented

### Template-part resolution

Test:

- parent theme only
- active child theme without override
- child-theme override
- database-customized template part
- missing source
- recursive source

### Positioning

Verify visual and interaction behavior for all supported placements:

- center
- left
- right
- top
- bottom
- any current project-specific aliases

Do not accept unintended changes to width, height, panel ownership, scrolling, or calculated placement.

### Reduced motion

With `prefers-reduced-motion: reduce`:

- dialogs still open and close
- placement remains correct
- content remains visible
- entrance and stagger animations do not run

### AJAX search

- A newer query cannot be overwritten by an older response.
- Aborted requests do not show an error.
- Non-2xx responses show a generic user-facing failure.
- Unsafe link protocols are not rendered.
- Result output remains DOM-built rather than inserted as untrusted HTML.
- Closing and reopening the search dialog leaves the interface in the documented state.

### Regression matrix

Test at minimum:

1. Core Button trigger.
2. Core Icon trigger.
3. Third-party icon trigger currently supported by source.
4. Center modal.
5. Left offcanvas.
6. Right offcanvas.
7. Top panel.
8. Bottom panel.
9. Search dialog.
10. Multiple triggers to one source.
11. Multiple different dialogs.
12. Dialog nested in header output.
13. Dialog source containing forms.
14. Dialog source containing IDs and labels.
15. Dynamically inserted dialog.
16. Repeated initializer calls.
17. JavaScript failure or disabled JavaScript.
18. Child theme with no override.
19. Child theme with an override.
20. Recursive template-part reference.

## Preserve these behaviors

Unless current project source says otherwise, do not change:

- Native `<dialog>` usage.
- Current placement class names.
- Current dialog dimensions.
- Current surface ownership.
- Current System UI styling.
- Current template-part authoring workflow.
- Current trigger block support.
- Current semantic mutation for opted-in triggers.
- Current footer-level dialog output.
- Current safe result rendering in AJAX search.

## Expected deliverables

1. Idempotent dialog initializer.
2. Safe transactional open behavior.
3. Centralized close cleanup.
4. Native keyboard behavior preserved.
5. Dynamic-dialog support.
6. Explicit shared/independent instance policy.
7. Narrow close-control contract with legacy compatibility.
8. Reduced-motion CSS.
9. Stale AJAX search request protection.
10. Child-theme source-resolution verification.
11. Updated semantic rendering contract.
12. Concise implementation report listing:
    - changed files
    - verified behavior
    - tests run
    - unresolved assumptions
    - backward-compatibility decisions

## Final implementation rule

Fix the lifecycle without replacing the system.

The dialog architecture is already sound. Keep template parts, native `<dialog>`, server-rendered semantics, and scoped JavaScript. Make the runtime idempotent, make instance ownership explicit, and make failure states honest.

Do not decorate the problem. Fix it.
