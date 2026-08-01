# SystemStrap System UI Rework Playbook

Status: Approved working playbook
Classification: Implementation guide / Non-runtime reference
Runtime CSS touched by this playbook: No direct runtime authority
Do not enqueue this file.

## Purpose

This playbook exists to make the System UI CSS stronger, smarter, and less dependent on broad relational selectors without changing the visual language, Gutenberg semantics, dynamic color behavior, or established interactive contracts.

This is not a redesign brief.
This is not permission to normalize everything into one mega-file.
This is not permission to simplify markup by changing saved block output.

This is a phased cleanup guide for improving ownership, readability, and durability in the existing System UI CSS.
It is built around the idea that System UI styles are opt-in, opinionated framework contracts layered over a flatter WordPress baseline.

## End Goal

Reach a System UI architecture where:

- each component family owns its own internals
- parent components style joins, not grandchildren
- direct-child rules are preferred over tree-scanning selectors
- first authored child boundaries are treated as the handoff point between panel ownership and normal Gutenberg/container ownership
- color inheritance remains stable and PHP-generated contrast remains authoritative
- editor adapters remain explicit and separate from frontend geometry
- carousel runtime remains structurally untouched
- BuddyPress remains an adapter layer instead of leaking into generic core block files

## Core Doctrine

The main System UI goal is not to map every possible styled component inside a panel.

The main goal is to let the panel respond to structure first:

- direct child: panel normalizes outer geometry
- nested child: panel stops interfering and lets the immediate container take over
- special case: add a targeted rule only when the visual contract genuinely needs one

This means System UI should move away from block-by-block descendant discovery and toward depth-aware ownership.

The expected result is:

- the polished look stays
- nested surfaces can still use neutral nested System UI variables
- editor-applied colors still show
- PHP-generated foreground contrast still flows through inheritance
- targeted joins and special cases still work
- the system relies on far fewer broad `:has()` and negative-registry selectors

## Non-Goals

Do not use this playbook to:

- redesign the System UI look
- change saved block markup to make CSS easier
- replace native WordPress blocks with proprietary wrappers
- introduce a second token system alongside `theme.json`
- rebuild carousel geometry
- flatten all CSS into one abstraction layer
- remove `!important` mechanically just because the count looks ugly
- delete `:has()` blindly when it is expressing real relational state

## Mandatory Reading Before Any Runtime CSS Change

Read these first:

1. `docs/START.md`
2. every applicable file in `docs/contracts/`
3. `docs/guides/system-ui.css`
4. the runtime stylesheet you intend to change
5. the asset registration/loading path in `inc/`

If a contract and this playbook appear to disagree:

1. preserve the contract
2. document the conflict
3. do not improvise architectural changes

## Authority Order

Use this order when deciding what wins:

1. WordPress block semantics and saved markup
2. `docs/contracts/*`
3. `theme.json` settings, presets, and custom properties
4. `inc/dynamic-styles.php` generated color and contrast output
5. component runtime stylesheet
6. editor-only adapter rules
7. this playbook
8. `docs/guides/system-ui.css`

## Frozen Contracts

### Carousel Is Frozen

Do not change:

- `assets/js/carousel-nav.js`
- `assets/js/carousel-editor-preview.js`
- carousel variation markup
- Splide initialization options
- track/list/slide geometry
- thumbnail-versus-medium detection
- WordPress image-size routing
- underflow logic
- nav-position logic
- responsive width math
- editor fallback structure
- established carousel-specific `:has()` selectors
- structural `!important` declarations required at Gutenberg/Splide boundaries

System UI may affect only presentation around carousel surfaces:

- inherited foreground color
- surface color
- border color
- border radius
- shadow
- arrow appearance
- pagination appearance
- typography
- focus presentation

If a shared System UI selector breaks carousel behavior, the shared selector is wrong. Do not “fix” carousel runtime to accommodate sloppy shared CSS.

## Working Principles

### 1. Native Blocks Stay Native

System UI is presentation over native WordPress blocks, not a parallel builder.
The neutral baseline comes from `theme.json` and ordinary core block behavior.
Selecting a System UI style opts the block into a more opinionated, framework-like contract.

### 2. Geometry and Color Are Different Jobs

Geometry should normally come from immediate structure.
Color can flow through nested System UI ancestry.
Nested System UI surfaces may still consume neutral nested-surface variables without requiring the parent panel to inspect deep descendant markup.

### 3. Direct Children Define Shell Behavior

Panels should reason about immediate children first.
They should not become rendering engines for every possible descendant tree.
The first authored child boundary is the main ownership handoff.

### 4. Components Own Their Own Internals

- panel owns panel shell
- list owns list rows
- query owns query rows and query structure
- tabs own tab geometry
- accordion owns accordion behavior
- dialog owns dialog behavior
- carousel owns carousel geometry

### 5. Authored Containers Keep Their Spacing

A direct Group inside a panel keeps the spacing the author gave it.
The panel should not crawl inside and repad everything.
The panel may normalize the Group's outer geometry, but not erase the Group's internal layout contract unless a specific component style says otherwise.

### 6. Inherited Foreground Is Sacred

Dynamic contrast output from PHP already exists.
Do not recreate that logic in CSS.
Use `color: inherit` and `currentColor` properly so that chain survives.

### 7. Complexity Must Be Intentional

Specificity, `:has()`, and `!important` are allowed at known authority boundaries.
They are not the default design language of the system.

### 8. Structure First, Exceptions Second

The parent component should do as much as possible from first-level structure alone.
Special-case handling should be the small exception layer, not the main architecture.

## Selector Decision Tree

Use this decision order before writing a selector.

### Start Here

1. Can the component style its own class directly?
2. Can the relationship be expressed as an immediate child rule?
3. Can equivalent forms be grouped with `:is()`?
4. Can direct-versus-nested depth solve the problem without enumerating blocks?
5. Is this only an editor wrapper bridge?
6. Is `:has()` required because the state truly lives in a descendant?
7. Is `!important` required because WordPress, inline styles, editor wrappers, or a third-party library are the competing authority?

If you get to step 6 or 7, leave a short reason in a comment.

### Preferred Selector Forms

- `.component`
- `.component > .direct-child`
- `.component > :is(...)`
- `.component :where(...)`
- explicit editor adapter groups collected together

Think in this order:

1. normalize direct-child geometry
2. selectively restore body spacing for direct text-like blocks
3. let direct structural children own their internals
4. stop styling once the first authored container boundary is reached
5. add only the narrow special-case rules that the visual contract truly needs

### Discouraged Forms

- giant block registries used only to detect “generic content”
- nested `:not(:has(...))` chains
- parent rules styling grandchildren and deeper
- frontend and editor logic interleaved line by line
- hardcoded foreground colors inside System UI surfaces
- blanket `!important` without a known authority boundary

## Runtime Ownership Model

### Foundation

Owns:

- theme tokens
- dynamic contrast output
- shared focus tokens
- shared surface variables
- variation body classes

Runtime files:

- `theme.json`
- `inc/dynamic-styles.php`
- `inc/style-variations.php`
- `assets/css/main-styles.css`
- `assets/css/strap-reset.css`

### Panel

Owns:

- shell background
- border
- radius
- shadow
- overflow policy
- immediate-child width and outer-geometry normalization
- direct prose-like body spacing
- direct joins with header/footer and System UI children
- shallow composition rules for first/last direct children where shell radius or join behavior changes
- nested panel surface context

Does not own:

- list internals
- query internals
- carousel geometry
- arbitrary descendant spacing
- nested descendant spacing once a direct authored child container takes over

Panel contract in plain language:

- direct structural children are allowed to sit edge-to-edge
- direct text-like children receive automatic panel-body spacing
- direct authored containers span the shell but keep their own internal spacing
- nested descendants re-enter normal Gutenberg/container ownership at the first authored boundary
- the panel may react to shallow composition states such as direct header/footer presence or first/last child media joins

Panel implementation doctrine:

- do not enumerate every possible supported block just to preserve the panel look
- start from direct-child normalization and direct-versus-nested depth rules
- let most child behavior fall out of structure rather than descendant inspection
- keep special treatment only for cases that are visually or structurally unique
- preserve nested surface neutrality through existing nested System UI variables, not through deep parent inference

### List

Owns:

- list shell
- row padding
- separators
- nested indentation
- hover/current state
- flush mode

Does not own:

- panel shell
- query shell
- carousel slide treatment

### Query

Owns:

- query shell
- post-template rows/cards
- headers/footers inside query context
- empty state
- metadata alignment
- query pagination placement

Does not own:

- generic panel prose padding
- generic list row logic
- carousel geometry

### Interactive Families

Accordion, details, tabs, navigation, dialog, and carousel own their interactive geometry and states.

Shared System UI may provide tokens and surfaces.
Shared System UI must not reconstruct their behavior.

### BuddyPress

BuddyPress files are adapters.
They may consume System UI tokens.
They must not teach generic core component files how to understand BuddyPress markup.

## System UI Style Philosophy

The default theme layer should remain broadly usable, theme-aware, and flexible.
System UI styles are where the theme becomes more opinionated and framework-like.

That means a System UI style should be judged by whether:

- its overrides are intentional
- its direct-child contract is predictable
- its editor controls do not imply behavior the style does not support
- nested content escapes back into normal Gutenberg behavior at a clear boundary
- removing the style returns the block to a sane baseline

The question is not whether a System UI style preserves every neutral Core behavior.
The question is whether the style defines a clear, reversible component contract.

## Panel Direct-Child Contract

This is the heart of the rework.

`System UI Panel` should behave like a Bootstrap-style card shell with a clear first-level ownership model.

### Direct Children Are Normalized

By default, direct children of a panel should:

- span the panel width
- drop unintended outer constraints or margins that fight the shell
- participate in first/last-child shell joins where appropriate

This normalization is about outer geometry.
It is not a blanket instruction to erase all child padding.
In WordPress terms, the panel should trim the outer wrapping geometry, not bulldoze the child block's own internal spacing contract.

### Direct Text-Like Children Get Automatic Body Spacing

Examples include:

- paragraph
- heading
- quote
- preformatted/code-like text blocks
- other direct prose blocks that would look broken if rendered flush to the shell

These blocks should not require a throwaway Group wrapper just to gain sensible panel spacing.

### Direct Structural Children Stay Flush

Examples include:

- Group
- Cover
- Query
- Navigation
- styled List blocks
- Accordion
- Tabs
- panel header
- panel footer
- direct media blocks where flush rendering is part of the intended shell presentation

These direct children should be allowed to occupy the shell edge-to-edge while their own component files manage internal spacing.
This is the main reason the panel does not need a dedicated mandatory content wrapper block.

### First Authored Container Boundary Ends Panel Spacing Logic

Examples:

- `Panel > Group > Paragraph`
- `Panel > Group > Image`
- `Panel > Group > Group`

In these cases, the direct Group becomes the layout boundary.
The panel should not reach through that Group to repad or reclassify grandchildren.

### Image Handling Must Respect the Block Wrapper

For the core Image block, the meaningful direct child is the wrapper:

- `Panel > .wp-block-image`

Do not treat generic descendant `img` selectors as the primary panel boundary.
Target the direct image block wrapper first, then only the contained image when needed.

### Smart Should Mean Shallow

The panel is allowed to be intelligent about direct composition.
Examples:

- direct list groups joining the panel shell
- direct header/footer affecting top/bottom joins
- direct first-child media inheriting top radius behavior
- direct last-child media inheriting bottom radius behavior

This is valid component composition logic.
It is not permission to scan deep descendant structures looking for inferred meaning.

### What The Panel Should Usually Not Need To Know

The panel should usually not need to care:

- what a nested Group contains
- whether a Query contains media further down
- whether a List contains a particular descendant shape
- whether a component appears several levels deep inside a layout wrapper

If the visual contract depends on that level of discovery, first ask whether the responsibility belongs in the child component file instead.

## How To Work A Component Family

Use this sequence every time.

### Step 1. Capture Baseline

- identify the runtime file
- identify the exact component family
- note what will not be modified
- confirm whether the component has editor adapters
- capture the current behavior on the showcase/examples page

### Step 2. Identify Real Ownership

Write down:

- what this file should own
- what it currently styles that belongs elsewhere
- what immediate-child relationships are real
- what descendant-driven rules are only compensating for older architecture
- where the first authored boundary should end parent ownership
- which special cases are truly necessary after structure-first rules are in place

### Step 3. Separate Frontend From Editor Bridges

- frontend geometry first
- editor adapters second
- do not let editor bridges become a second component design

### Step 4. Reduce Inference Carefully

Replace broad detection rules only when one of these is true:

- a direct-child rule can do the job
- a stable parent mode class already exists
- the relationship can be grouped once instead of repeated everywhere
- the rule is only needed for a shallow direct-composition state

### Step 5. Preserve Valid Complexity

Keep `:has()` when it expresses real state, such as:

- suppressing ancestor hover while a nested row is hovered
- distinguishing branches from leaves
- styling a stable parent from a necessary descendant state
- reacting to a shallow direct-child composition state when sibling/direct-child forms cannot express it cleanly

Keep `!important` when it crosses a real authority boundary, such as:

- Gutenberg inline styles
- block editor wrappers
- navigation responsive overlays
- dynamic global styles
- third-party library structure

### Step 6. Verify Against Acceptance Gates

Do not stop at linting.
Check rendered frontend and editor behavior.

### Step 7. Update Documentation

Any accepted runtime change must also update:

- `docs/guides/system-ui.css`

## Phase Order

Work in this order. Do not skip ahead just because another file looks tempting.

### Phase 1. Baseline

- confirm active showcase/reference pages
- confirm carousel fixtures are unchanged before touching anything
- identify current light/dark examples across style variations
- record pain points by family

### Phase 2. Panel Shell

Goal:

- isolate shell declarations from child classification

Do:

- clean shell ownership first
- preserve current visuals

Do not:

- change list/query internals yet

### Phase 3. Panel Direct-Child Geometry

Goal:

- move panel behavior toward first-boundary ownership

Do:

- define direct-child width normalization
- define prose-like direct children that regain body spacing
- define structural direct children that stay flush
- define authored container behavior without erasing child-owned padding
- define direct component joins and shallow radius/composition rules
- delete block registries that exist only to approximate direct-versus-nested ownership where a structure-first rule can replace them

Do not:

- repad grandchildren through nested authored Groups
- treat generic descendant `img` rules as the panel boundary
- rebuild a giant exception list when a depth rule plus a few special cases can do the job

### Phase 4. Panel Header/Footer Joins

Goal:

- make header/footer explicit join components instead of content detectors

Do:

- isolate top/bottom joins
- remove duplicate border/radius compensation where possible

### Phase 5. Generic List

Goal:

- keep list row logic in the list family

Do:

- separate shell, rows, nested rows, state, panel-join, editor adapters

Do not:

- move nested row behavior into panel CSS

### Phase 6. Specialized Lists

Goal:

- reduce repeated context prefixes without inventing a fake abstraction framework

Do:

- keep markup-specific mapping local to each specialized block

Do not:

- copy full surface systems into every file unnecessarily

### Phase 7. Query

Goal:

- replace broad query inference with stable anchors and mode-based ownership

Do:

- inventory existing modes
- anchor each mode from the nearest stable class
- group aliases where appropriate
- split shell, rows, metadata, footer, pagination, editor adapters

Do not:

- keep rediscovering the same mode through repeated relational prefixes if one stable anchor can own it

### Phase 8. Remaining Families

- accordion
- details
- tabs
- pagination
- navigation
- badges/tags
- tables/calendars
- BuddyPress

Order inside this phase:

1. finish the current panel stabilization and remaining small direct-child utility checks
2. run a dedicated hover-overlay contract pass
3. expand the System UI pagination family
4. tighten latest-comments presentation after pagination contracts are stable
5. execute a full comments-family system pass after latest-comments presentation is stable

#### Hover Overlay Contract Pass

Goal:

- preserve the existing System UI hover language while removing accidental overlay escape and inconsistent row-click behavior

Do:

- inventory every row-hover and row-click overlay implementation
- classify each implementation as one of:
  - `row-hover-only`
  - `row-click-overlay`
  - `active/current-row`
  - `nested-row-hover`
- require a local containment context for every absolute hover or click overlay
- standardize layering rules so content sits above hover washes and only intentional full-row click targets sit above row content
- keep hover/current visuals local to the family that owns the row

Do not:

- mix the hover cleanup into unfinished panel/body ownership work
- rebuild component markup just to simplify hover selectors
- remove the hover-overlay approach itself; refine its contract instead

#### Pagination Expansion Pass (Superseded)

Goal:

- keep one shared pagination structure while supporting multiple System UI visual treatments

Do:

- use `theme.json` for the text-only baseline
- use `system-ui-pagination`, `-outline`, `-pill`, `-pill-outline`, `-square`, `-square-outline`, and `-badge` for Query Pagination, Comments Pagination, and Post Navigation Link
- load shared explicit-style control CSS only through the selected variation dependency
- keep page-break navigation baseline-only

Do not:

- fork pagination into unrelated implementations per theme variation
- hardcode one shape as the only System UI pagination option
- change pagination placement or query runtime while defining visual variants

#### Comments Presentation Tightening Pass

Goal:

- tighten latest-comments presentation so comment rows feel deliberate without changing the underlying panel ownership contract

Do:

- preserve the existing latest-comments shell and row ownership
- tighten author/date/context rhythm where the row header feels too loose
- increase avatar presence only when it improves row balance without bloating dense lists
- keep inherited text color and nested surface routing intact
- prefer token-driven spacing and typography adjustments when multiple row elements need to move together

Do not:

- rebuild latest-comments markup around new wrappers
- move comments presentation logic into the generic panel contract
- break standalone latest-comments behavior just to improve panel-contained rows
- mix comments presentation cleanup into hover-overlay or pagination implementation

#### Comments Family System Pass

Goal:

- define comments as a first-class System UI family with a shared baseline, shared variations, and coordinated styling across all comment-related blocks

Do:

- audit `theme.json` support and defaults for the full comments family
- keep the classic WordPress comments baseline recognizable, but cleaner and more modern
- define a stronger `system-ui-list` treatment for comments and comment-adjacent blocks
- define a `system-ui-panel` treatment where comment threads and replies can read as one cohesive chat-like interface
- align latest-comments, post comments, reply/edit/meta links, pagination, and comment content under one shared comments contract
- ensure comment parts and patterns can consume the same comment-family visual language without one-off overrides

Status:

- the root Comments block owns opt-in `System List`, `System List Flush`, and `System Panel` thread contracts
- unstyled Comments retain the classic WordPress presentation
- comment templates, replies, metadata, forms, and pagination remain core markup and inherit the selected root contract

Do not:

- treat comments as just another generic list edge case
- let latest-comments and post comments drift into separate visual systems
- rebuild core comments markup to fake a chat layout
- mix BuddyPress-specific discussion styling into the generic comments family contract

### Phase 9. Documentation and Submission Readiness

- update `docs/guides/system-ui.css`
- verify conditional asset loading remains correct
- verify editor/frontend parity
- confirm no carousel diff

## Per-Family Checklists

### Panel Checklist

- shell separated from child classification
- direct-child width normalization defined explicitly
- direct prose padding defined intentionally
- direct structural children remain flush unless their own contract says otherwise
- authored layout containers keep authored spacing
- parent ownership stops at the first authored container boundary
- nested components inside authored containers remain independent
- descendant-driven padding rules reduced where possible
- image handling targets the direct image block wrapper first
- shallow join/radius logic is explicit where visually required
- nested surfaces can still consume neutral nested System UI variables
- editor-applied backgrounds still show correctly through the ownership cleanup
- no new carousel targeting introduced

### Header/Footer Checklist

- header/footer treated as explicit component styles
- join logic kept at immediate panel-child level
- no descendant content detection
- no nested list/query styling inside header/footer files

### Generic List Checklist

- standard vs flush remains distinct
- rows own separators and padding
- nested indentation remains correct
- hovered nested row does not trigger wrong ancestor hover
- direct panel child join is explicit
- standalone list behavior remains intact

### Specialized List Checklist

- markup-specific row mapping stays local
- duplicate context prefixes reduced
- valid relational selectors retained with reasons
- panel/list/query responsibilities remain separated

### Query Checklist

- query modes identified explicitly
- shell, rows, metadata, empty state, and pagination separated conceptually
- repeated relational prefixes reduced
- positive anchors preferred over massive negative registries
- editor structure mirrors frontend ownership as closely as possible

### Interactive Family Checklist

- state-driven visuals remain correct
- focus remains visible
- orientation-specific files remain separate where geometry differs
- no shared System UI rule reconstructs component behavior
- hover overlays remain contained to their owning row or shell
- row-click overlays do not leak across the page or across sibling components
- nested hover does not trigger unintended ancestor hover

### Pagination Checklist

- query and comments pagination share one structural contract
- plain pagination remains easy to skin by framework variations
- square pagination follows system border-radius tokens
- rounded pagination sits between square and circle without inventing a new geometry system
- circle pagination preserves the current bold navigation option
- current, hover, focus, disabled, and dots states remain correct
- panel-contained pagination still uses the correct nested surface treatment

### Comments Presentation Checklist

- author, date, and context read as one intentional header unit
- avatar size supports the row instead of feeling incidental
- excerpt spacing stays compact but readable
- panel-contained and standalone latest-comments remain visually aligned
- inherited text color still flows from parent surface contexts

### Comments Family Checklist

- `theme.json` comment block settings support the shared family baseline
- classic comment flow remains recognizable before System UI variations are applied
- `system-ui-list` comments feel more open, readable, and modern without losing structure
- `system-ui-panel` comments support a cohesive chat-like thread surface
- replies, meta links, content, avatars, and pagination feel like one coordinated system
- comments parts and patterns can share the same family treatment without bespoke CSS forks

### Navigation Checklist

- retained `!important` rules are justified by real authority boundaries
- core navigation and BuddyPress navigation remain separate adapters
- responsive overlays and submenu states still work

### Tables and Calendars Checklist

- cell and caption rules stay in their own files
- panel only owns immediate shell join
- responsive overflow remains a table/calendar concern

### BuddyPress Checklist

- theme works without BuddyPress active
- BuddyPress assets remain conditional
- BuddyPress-specific selectors remain out of generic core component files

## Acceptance Gates

Do not mark a phase complete until these pass where applicable.

### Panel Geometry

- `Panel > Paragraph` receives panel spacing
- `Panel > Heading` receives panel spacing
- `Panel > Figure` remains flush
- `Panel > Cover` remains flush unless the Cover owns spacing
- `Panel > Group` preserves Group spacing
- `Panel > Group > Paragraph` is not repadded by panel
- `Panel > Group > Figure` is not flattened by panel and remains spaced by the Group/container that owns it
- unknown direct blocks preserve native behavior

### Panel Component Joins

- direct header joins top
- direct footer joins bottom
- direct first-child media receives correct top-edge join behavior
- direct last-child media receives correct bottom-edge join behavior
- direct list joins without duplicate shell border
- direct query joins according to query contract
- nested components inside authored Groups remain independent
- nested panels use nested surface variables

### Color

- editor-selected background still produces accessible foreground
- inherited foreground flows through nested System UI components
- `currentColor` borders/icons follow foreground
- transparent overlays do not become muddy through stacking
- no component hardcodes light/dark foreground without contract reason

### Lists

- standard and flush variants remain distinct
- row separators remain correct
- nested indentation remains correct
- current/active states remain visible
- panel integration does not break standalone lists

### Query

- generic query remains correct
- directory listing remains correct
- directory grid remains correct
- latest-posts query remains correct
- empty state remains correct
- query pagination remains correct
- editor structure mirrors frontend ownership expectations

### Interactive

- accordion state remains correct
- details state remains correct
- horizontal tabs remain correct
- vertical tabs remain correct
- keyboard focus remains visible
- responsive navigation remains correct
- dialog remains correct
- row-click and hover overlays remain contained to their intended rows
- hovered nested row does not trigger unrelated page-level hover behavior

### Pagination

- query pagination remains correct
- comments pagination remains correct
- plain pagination renders without forced pill/circle chrome
- square pagination follows the system border radius
- rounded pagination remains visually distinct from square and circle
- circle pagination preserves current behavior
- current/hover/focus/disabled states remain correct

### Carousel

- runtime files have no diff unless task explicitly targets carousel
- JS files have no diff unless task explicitly targets carousel
- thumbnail mode unchanged
- medium mode unchanged
- banner mode unchanged
- underflow unchanged
- editor fallback unchanged
- System UI surface layering does not alter carousel geometry

### BuddyPress

- theme works with BuddyPress inactive
- BuddyPress assets remain conditional
- BuddyPress visual alignment remains intact

## Reporting Template

After each family pass, report:

1. files changed
2. rules removed
3. rules moved to a different owner
4. retained `:has()` selectors and why each one stays
5. retained `!important` declarations and the competing authority
6. editor-only adapters retained
7. acceptance checks performed
8. any visual differences
9. confirmation that carousel files were untouched

Do not claim success from linting alone.
Rendered behavior in frontend and editor is required.

## Working Notes Template

Use this during execution:

```md
### Component Family

- Runtime file:
- Phase:
- Baseline captured:
- Frontend checked:
- Editor checked:

#### Current

-

#### Problem

-

#### Target

-

#### Change

-

#### Retained Complexity

-

#### Result

-

#### Carousel Check

- no carousel runtime or geometry changes

#### Documentation

- `docs/guides/system-ui.css` updated: yes/no
```

## First Targets

These are the highest-value first passes:

1. `core-group-system-panel.css`
2. `core-list-system-list.css`
3. `core-query-system-ui-query.css`

Reason:

- panel currently carries broad cross-component inference
- list should own more of its own row logic
- query carries the highest selector-complexity load

## Translation To Runtime Work

When runtime edits begin, the practical order should be:

1. shrink panel child-classification logic down to structure-first rules
2. reintroduce only the direct text-like spacing rules the panel truly needs
3. keep direct structural children flush and child-owned internally
4. preserve shallow join/radius behavior for direct header/footer/list/media compositions
5. move any deep descendant logic that still matters into the component that actually owns that markup
6. preserve nested System UI surface neutrality and inherited foreground routing throughout

That is how the theme keeps the same polished appearance while reducing brittle parent intelligence.

## Final Rule

The goal is not “fewer selectors at any cost.”
The goal is better ownership with the same visual and behavioral result.

If a complex selector is still the right tool after tracing ownership and authority, keep it and explain why.
