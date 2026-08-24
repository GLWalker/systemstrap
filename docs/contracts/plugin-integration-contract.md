# SystemStrap Plugin Integration Contract

## Status

**NORMATIVE ARCHITECTURAL CONTRACT**

This document defines the ownership boundary between the SystemStrap
theme, optional SystemStrap companion plugins, and third-party
application plugins.

It applies to integrations including, but not limited to:

-   BuddyPress
-   WooCommerce
-   bbPress
-   future forum, commerce, membership, LMS, directory, and application
    plugins

This contract governs architecture and ownership.

Plugin-specific implementation details belong in their respective
integration documents and companion-plugin documentation.

------------------------------------------------------------------------

# 1. Core Principle

SystemStrap owns the **page context**.

A SystemStrap companion plugin owns the **integration with an optional
application's components and presentation**.

The application plugin owns the **application itself**.

The fundamental ownership model is:

SYSTEMSTRAP THEME → page context → page composition → page semantics

SYSTEMSTRAP COMPANION → application-specific presentation → component
semantics → compatibility integration

APPLICATION PLUGIN → application state → application behavior →
application data

These boundaries must remain explicit.

------------------------------------------------------------------------

# 2. Theme Independence

SystemStrap core must remain fully functional when an optional
application plugin is absent.

Installing, activating, deactivating, or deleting an integration target
such as WooCommerce, BuddyPress, or bbPress must not be required for
SystemStrap's baseline operation.

Optional integrations must not become hidden dependencies of the theme.

The theme may contain guarded awareness of an optional application when
that awareness is required to determine page context.

The theme must not require the optional application merely to
initialize.

------------------------------------------------------------------------

# 3. Theme Ownership

SystemStrap owns the outer document and page-level composition.

Theme responsibilities include:

-   WordPress block templates
-   template parts
-   patterns
-   Content Router decisions
-   page-level landmarks
-   page-level schema
-   page-level ARIA semantics
-   page titles and page headers where theme-owned
-   content/wide/full-width layout boundaries
-   sidebar composition
-   global spacing and layout primitives
-   theme-authored query/list semantics
-   Site Editor customization boundaries

The theme decides how an application page participates in the overall
site.

It does not assume ownership of the application's internal behavior.

## Three-level semantic ownership

SystemStrap integration semantics are deliberately split into three levels:

1. **Landmarks** — the theme owns the outer `main`, `aside`, `nav`, `header`, and `footer` structure, including concise landmark labels where they materially distinguish a route.
2. **Page schema** — the theme owns route-level `WebPage` subtypes on its `site-main` shell, such as `CollectionPage`, `SearchResultsPage`, guarded `ProfilePage`, and `ItemPage` where the route itself warrants that page type.
3. **Application/entity schema** — the application or its companion owns entity types and component relationships, such as WooCommerce `Product`/`Offer`, BuddyPress member/group/activity entities, and bbPress forum/topic/reply entities.

The theme MUST NOT use a page-shell type to impersonate an application entity, and it MUST NOT duplicate valid application entity schema.

------------------------------------------------------------------------

# 4. Application Plugin Ownership

The third-party application plugin remains authoritative for its
application logic.

Examples include:

WooCommerce:

-   products
-   cart state
-   checkout state
-   orders
-   account endpoints
-   payment interfaces
-   notices
-   product queries
-   commerce actions

BuddyPress:

-   members
-   groups
-   activity
-   account state
-   application navigation
-   friendships
-   messages
-   notifications

bbPress:

-   forums
-   topics
-   replies
-   subscriptions
-   favorites
-   moderation
-   posting forms
-   synthetic forum/query state

SystemStrap must not duplicate, fork, or replace application logic
merely to achieve visual or semantic integration.

------------------------------------------------------------------------

# 5. Companion Plugin Ownership

When integration behavior exists solely because a particular optional
application plugin exists, that behavior should normally belong to a
SystemStrap companion plugin.

Examples:

systemstrap-buddypress systemstrap-woocommerce systemstrap-bbpress

Companion responsibilities include:

-   plugin-specific CSS
-   plugin-specific block styles
-   plugin-specific block variations
-   application-component visual integration
-   component-level render filters
-   component-level DOM repair
-   component-level ARIA repair
-   application-specific compatibility fixes
-   application-specific asset registration
-   application-specific asset ordering
-   application-specific editor parity
-   compatibility bridges required by the application's rendering
    architecture

A companion plugin may depend on both SystemStrap and the application it
integrates.

SystemStrap itself must not depend on the companion.

------------------------------------------------------------------------

# 6. Hard CSS Boundary

## Plugin-specific visual CSS must not live in SystemStrap core.

This is a hard architectural rule.

If a stylesheet exists because WooCommerce, BuddyPress, bbPress, or
another optional application exists, that stylesheet belongs to its
companion plugin.

Therefore:

BuddyPress CSS → systemstrap-buddypress

WooCommerce CSS → systemstrap-woocommerce

bbPress CSS → systemstrap-bbpress

This includes:

-   structural application overrides
-   component appearance
-   plugin-specific responsive fixes
-   plugin-specific block styles
-   plugin-specific style variations
-   application-specific design-system synchronization
-   CSS required to normalize application markup against SystemStrap

The theme may provide generic design tokens and generic component
styles.

The companion consumes those systems.

The theme must not accumulate application-specific selectors merely
because they use SystemStrap variables.

### Baseline layout compatibility exception

SystemStrap MAY contain a narrowly scoped application selector only when a
supported application directly overrides a SystemStrap-owned page layout or
semantic contract. Such a rule MUST restore existing theme behavior, identify
the upstream declaration it neutralizes, and MUST NOT redesign application
components, business UI, or interaction. Application presentation remains
companion-owned.

When an optional application requires this baseline compatibility CSS, the
theme MUST emit it conditionally from the compatibility layer and attach it to
an existing theme stylesheet. It MUST NOT remain in a generic theme stylesheet
or emit when the application is inactive.

### Generated block presentation compatibility exception

SystemStrap MAY conditionally normalize a normal WordPress block presentation
control when an application block's generated public markup causes that control
to paint the wrong structural level. This is theme compatibility when it
preserves native application layout and behavior while restoring ordinary
Gutenberg presentation ownership.

Such a normalization MUST target only source-proven public roots or direct
public descendants, emit only while the application is active, and leave
application interaction, private markup, and optional System UI appearance
untouched. It MUST remain available when a companion is inactive.

### Baseline public-output compatibility exception

SystemStrap MAY conditionally normalize a source-proven public plugin component
when that component must share the theme's ordinary typography, form-control,
spacing, focus, or responsive baseline while its companion is inactive. Such a
rule MUST use existing theme tokens and public roots only. It MUST NOT add
optional System UI surfaces, list chrome, shadows, or application behavior.

For supported plugins, this baseline MAY normalize source-proven public output
to SystemStrap's ordinary design-system contract where safe: typography,
heading hierarchy and weights, spacing, forms, buttons, semantic tables,
focus, disabled and invalid states, responsive spacing, and ordinary
Gutenberg presentation fidelity. Optional System UI presentation remains
companion-owned and opt-in.

Before a companion ports a named SystemStrap component treatment, it MUST audit
the authoritative master CSS, inventory its complete visual and interactive
contract, map each master DOM role to a source-proven public application role,
and record every property as direct, adapted, or not applicable. A companion
MUST adapt the master component contract; it MUST NOT approximate, redesign, or
partially imitate it. Any non-applicable master behavior requires a structural
justification from the application's public markup.

## Style-capability gate

Before a plugin companion registers a block-style variation, it MUST verify
that the candidate block has a useful editor Styles UI, a saved `is-style-*`
class round trip, matching editor and frontend asset loading, a stable public
root, and normal user removal through the editor. A block that fails this gate
MUST use conditional theme baseline compatibility plus a companion component
mapping or public-boundary adapter instead of fake block-style controls.

------------------------------------------------------------------------

# 7. Generic Design System vs Application Styling

SystemStrap may define generic visual primitives such as:

-   System Panel
-   System Panel Header
-   System Panel Footer
-   System List
-   System List Flush
-   badges
-   buttons
-   navigation treatments
-   form primitives
-   spacing
-   borders
-   radii
-   shadows
-   typography
-   surfaces

These remain theme-owned because they are application-independent.

A companion plugin may adapt application components to those primitives.

For example:

bbPress forum index → System List visual language

WooCommerce account navigation → SystemStrap navigation visual language

BuddyPress directory widget → System Panel visual language

The generic primitive remains owned by SystemStrap.

The application-specific mapping belongs to the companion.

------------------------------------------------------------------------

# 8. Render Filter Boundary

Render filters are classified by semantic scope, not merely by the hook
or block on which they operate.

## Theme-owned filters

A filter belongs in SystemStrap when it describes a page or composition
that SystemStrap owns.

Examples:

-   main landmark semantics
-   page-level WebPage schema
-   page-level archive regions
-   theme-authored pattern semantics
-   route classes
-   theme-owned query/list schema
-   sidebar landmarks
-   page header semantics
-   conditional generated-block presentation compatibility that restores a
    normal Gutenberg control to its source-proven public visual owner

## Companion-owned filters

A filter belongs in the companion when it describes or repairs
application internals.

A companion filter MUST NOT own baseline generated-block presentation
compatibility that the active theme can safely provide and that must continue
to work when the companion is inactive.

Examples:

-   WooCommerce block DOM
-   BuddyPress component lists
-   bbPress topic/reply markup
-   application-specific navigation ARIA
-   application-specific component classes
-   plugin-specific block variation restoration
-   component-specific schema repairs
-   application compatibility filters

The location of the PHP hook does not determine ownership.

The semantic responsibility of the callback does.

------------------------------------------------------------------------

# 9. Ownership Test

When ownership is unclear, apply this test:

> If the optional application plugin were removed, would this function,
> stylesheet, selector, block variation, or compatibility behavior still
> make architectural sense inside SystemStrap?

If YES:

It may belong to the theme.

If NO:

It normally belongs to the companion plugin.

A second test applies to semantics:

> Does this code describe the page SystemStrap created, or does it
> describe an application component rendered inside that page?

Page: → theme

Application component: → companion

------------------------------------------------------------------------

# 10. Router Boundary

The SystemStrap Content Router is a page-composition mechanism.

It is not a universal plugin compatibility layer.

Optional application contexts may participate in the Router when:

1.  WordPress resolves them through a Router-backed template; and
2.  SystemStrap genuinely needs to choose between multiple page
    compositions.

BuddyPress currently demonstrates this model:

WordPress Page hierarchy → page.html → Content Router → BuddyPress route
part → BuddyPress application content

The Router may contain guarded application-context awareness required to
make that page-level decision.

That does not transfer ownership of application internals to the Router.

------------------------------------------------------------------------

# 11. Direct Template Boundary

When WordPress or an application already exposes a deterministic
block-template context, SystemStrap should normally use the native
template hierarchy.

Examples may include:

-   product archive
-   single product
-   product search
-   Cart
-   Checkout
-   forum archive
-   single forum
-   single topic

Conceptually:

DETERMINISTIC CONTEXT → SystemStrap block template → SystemStrap page
composition → application content

Do not route deterministic contexts through the Content Router merely to
make the architecture appear uniform.

Native WordPress template hierarchy is part of the architecture.

The Router exists for actual routing decisions.

------------------------------------------------------------------------

# 12. Endpoint Boundary

Application endpoints do not automatically justify additional theme
templates.

If multiple URLs represent internal application states inside the same
page context, the application remains responsible for those states.

Example:

My Account ├── root ├── orders ├── downloads ├── edit-address ├──
edit-account └── payment methods

If these states retain the same outer WordPress Page/template,
SystemStrap should normally provide one page composition.

WooCommerce owns the endpoint interior.

The same principle applies to comparable BuddyPress, bbPress, and future
application states.

------------------------------------------------------------------------

# 13. Landmark Ownership

SystemStrap owns page-level landmark correctness for SystemStrap-owned
compositions.

Every rendered page must have a clear page-level landmark model.

The normal invariant is:

-   one primary `<main>`
-   one primary main landmark
-   correctly scoped navigation landmarks
-   correctly scoped complementary landmarks
-   distinct accessible names where multiple landmarks of the same type
    exist

Application components may contain legitimate internal landmarks.

Companion integrations must not introduce competing page-level main
landmarks.

If application fallback templates introduce conflicting outer landmarks,
SystemStrap should use supported template override mechanisms to
establish the correct page shell.

------------------------------------------------------------------------

# 14. Schema Ownership

SystemStrap owns schema describing SystemStrap's page-level composition.

Examples:

-   WebPage
-   CollectionPage
-   SearchResultsPage
-   ProfilePage where a guarded application route is a member profile
-   ItemPage where a route is devoted to one product
-   BlogPosting
-   CreativeWork
-   page-level ItemList structures where theme-authored
-   theme-owned article wrappers

Application-specific entity schema should remain application-owned
unless a companion must repair or augment it.

Examples may include:

-   Product
-   Offer
-   AggregateRating
-   forum/topic-specific entities
-   member/application entities

Do not duplicate valid application schema merely because SystemStrap can
add schema.

Schema augmentation must be evidence-driven.

------------------------------------------------------------------------

# 15. Markup Ownership

SystemStrap may wrap application output when necessary to establish:

-   page layout
-   page landmarks
-   page schema
-   page header
-   width constraints
-   sidebar composition

SystemStrap should avoid rewriting application-owned interior markup
unless required for compatibility.

When application interior markup requires adaptation, prefer a
companion-owned render filter over copying the application's templates
into the theme.

The goal is integration, not application forking.

------------------------------------------------------------------------

# 16. Supported Override Mechanisms

Integrations must use supported WordPress and application-plugin
extension mechanisms.

Permitted mechanisms may include:

-   block templates
-   template parts
-   patterns
-   WordPress filters/actions
-   application filters/actions
-   block render filters
-   block style registration
-   block variation registration
-   supported classic template overrides when genuinely required
-   application-provided compatibility APIs

Do not modify third-party plugin core files.

Do not patch WordPress core.

Do not rely on undocumented filesystem mutation as an integration
strategy.

------------------------------------------------------------------------

# 17. Site Editor Boundary

SystemStrap integrations must preserve WordPress Site Editor ownership.

Filesystem templates establish defaults.

Database `wp_template` and `wp_template_part` customizations may
supersede filesystem resources according to WordPress behavior.

Integration code must not silently destroy or bypass user
customizations.

Before renaming or removing existing template/template-part slugs, check
for database overrides.

Stable slugs are part of the customization contract.

------------------------------------------------------------------------

# 18. Companion Asset Loading

A companion plugin must not load application integration assets globally
merely because the application plugin is active.

Assets should be registered independently from their eventual enqueue
where possible.

Loading should be scoped to the smallest reliable context.

Preferred progression:

1.  application context
2.  block presence
3.  component presence
4.  specific style variation where practical

Do not enqueue every companion stylesheet on every frontend request.

Do not enqueue every block variation merely because its parent
application is active.

Where WordPress APIs such as `wp_enqueue_block_style()` provide reliable
block-presence loading, prefer them over unconditional page-wide
enqueues.

Further optimization may be performed when runtime evidence justifies
it.

------------------------------------------------------------------------

# 19. Generic Theme Asset APIs

SystemStrap may expose generic asset APIs that companion plugins
consume.

Examples include:

-   style buckets
-   style bucket ordering
-   generic dependency anchors
-   generic design tokens

These APIs must remain application-neutral.

SystemStrap must not contain hardcoded WooCommerce, BuddyPress, or
bbPress branches inside otherwise generic infrastructure merely to
satisfy a companion.

Application-specific categorization belongs to the companion using the
generic API.

------------------------------------------------------------------------

# 20. Editor Parity

Where an application component can appear in the editor, companion
integration should preserve reasonable frontend/editor visual parity.

Editor support belongs to the same owner as the corresponding frontend
integration.

Therefore application-specific editor CSS belongs to the companion
plugin, not SystemStrap core.

Editor support must not justify globally loading integration CSS on
unrelated editor screens.

------------------------------------------------------------------------

# 21. Compatibility Repairs

Some supported applications require structural compatibility work beyond
presentation.

Examples include:

-   synthetic query compatibility
-   block-theme template bridging
-   Post Content rendering repairs
-   legacy application template compatibility
-   lifecycle/timing corrections
-   interoperability repairs between supported applications

Compatibility ownership is determined first by **baseline
functionality**, then by **WordPress lifecycle feasibility**.

If the repair is required for the application to function correctly with
SystemStrap or with another explicitly supported WordPress ecosystem
plugin, SystemStrap should provide the repair as baseline compatibility
**when the theme loads early enough to do so safely**.

If the repair must execute before the active theme can participate in
the WordPress bootstrap lifecycle, it belongs in the earliest
appropriate SystemStrap companion/plugin layer. This is a lifecycle
exception, not a presentation-ownership decision.

If the application already functions correctly and the repair exists
only to adapt application internals to SystemStrap's component/design
system, it belongs to the companion.

A compatibility repair must:

-   be narrowly scoped
-   be guarded by application availability
-   affect only the relevant context
-   use supported hooks/APIs where possible
-   fail safely
-   avoid modifying application or WordPress core
-   avoid changing unrelated WordPress requests
-   contain no application-specific visual styling when theme-owned
-   document the upstream behavior and lifecycle requirement it corrects

bbPress block-theme compatibility must therefore be evaluated piece by
piece: repairs that can safely execute from the theme may be SystemStrap
baseline compatibility; repairs that must execute before theme bootstrap
belong in the appropriate companion/plugin layer.

------------------------------------------------------------------------

# 22. Companion Failure Model

SystemStrap must remain usable when a companion plugin is inactive.

Where possible:

APPLICATION ACTIVE + COMPANION ACTIVE → fully integrated SystemStrap
presentation

APPLICATION ACTIVE + COMPANION INACTIVE → functional application with
reduced SystemStrap-specific presentation

APPLICATION INACTIVE + COMPANION ACTIVE → companion safely bails without
warnings/fatals

APPLICATION INACTIVE + COMPANION INACTIVE → normal SystemStrap baseline

A companion should not be required merely to prevent the theme from
fataling.

------------------------------------------------------------------------

# 23. Companion Activation

A companion should verify its prerequisites.

At minimum:

-   SystemStrap availability where required
-   target application availability

Missing prerequisites should fail gracefully.

Activation/deactivation must not unnecessarily mutate unrelated site
state.

Rewrite flushing should occur only when the companion genuinely
registers or changes rewrite behavior.

Visual integration plugins must not flush rewrite rules simply because
they were activated.

------------------------------------------------------------------------

# 24. Integration Development Sequence

New integrations should proceed in this order.

## Phase A --- Reconnaissance

Audit:

-   application routing
-   block-template behavior
-   classic-template behavior
-   virtual endpoints
-   query state
-   fallback behavior
-   Site Editor behavior
-   rendered landmarks
-   assets
-   application schema

No implementation.

## Phase B --- Page Architecture

Establish:

-   direct-template vs Router-backed contexts
-   theme page composition
-   main ownership
-   width/layout behavior
-   page-level semantics

No application-specific CSS.

## Phase C --- Runtime Validation

Verify:

-   routes
-   endpoints
-   application behavior
-   editor behavior
-   landmarks
-   schema
-   responsive composition

## Phase D --- Companion Scaffold

Before application-specific styling begins, create the companion plugin.

## Phase E --- Component Integration

Implement:

-   application-specific CSS
-   block variations
-   component semantics
-   DOM repair
-   compatibility behavior
-   scoped assets

## Phase F --- Optimization

Only after correctness:

-   reduce unnecessary assets
-   improve conditional loading
-   remove redundant compatibility work
-   profile frontend/editor behavior

Correctness precedes optimization.

------------------------------------------------------------------------

# 25. No Styling Creep

Template implementation frequently exposes visual inconsistencies.

That does not authorize adding application-specific CSS to the theme.

When page architecture is correct and the next required change is
visual:

STOP THE THEME IMPLEMENTATION.

Create or continue the appropriate companion plugin.

This gate is mandatory.

Examples:

Woo template renders correctly but looks unstyled →
systemstrap-woocommerce

bbPress forum index renders correctly but needs System List treatment →
systemstrap-bbpress

BuddyPress component needs design-system synchronization →
systemstrap-buddypress

Do not solve these by adding selectors to SystemStrap.

------------------------------------------------------------------------

# 26. No Premature Companion Logic

The inverse rule also applies.

Do not move generic SystemStrap behavior into companions merely because
the current consumer happens to be an application plugin.

Generic page semantics, generic design primitives, generic asset APIs,
and generic layout infrastructure remain theme-owned.

Companions integrate with SystemStrap.

They do not become repositories for theme architecture.

------------------------------------------------------------------------

# 27. Integration Documentation

Every major integration should maintain a plugin-specific evidence
document.

Examples:

docs/woocommerce-fragments.md docs/bbpress-fragments.md
docs/buddypress-fragments.md

These documents may contain:

-   runtime fixture results
-   application-version findings
-   routing peculiarities
-   source references
-   known compatibility issues
-   implementation requirements

They supplement this contract.

They do not override it silently.

If application runtime behavior requires an exception to this contract,
the exception must be explicitly documented and justified.

------------------------------------------------------------------------

# 28. Upgrade Resilience

Application integrations must assume third-party markup and internal
implementation can change.

Prefer:

-   public APIs
-   documented hooks
-   block names
-   stable template hierarchy
-   application context functions
-   narrowly scoped selectors

Avoid unnecessary dependence on:

-   deeply nested DOM structure
-   incidental class ordering
-   private PHP methods
-   copied application templates
-   version-specific implementation details

When a deep dependency is unavoidable, document it in the
integration-specific fragment file.

------------------------------------------------------------------------

# 29. Acceptance Standard

A SystemStrap application integration is complete only when:

-   application functionality remains intact
-   SystemStrap owns the intended page shell
-   one primary main landmark exists
-   page-level schema remains correct
-   application schema is not duplicated unnecessarily
-   width and alignment behavior remain correct
-   Site Editor behavior remains intact
-   application-specific styling exists only in the companion
-   component-level application filters exist in the appropriate
    companion
-   theme-owned semantic filters remain in SystemStrap
-   assets are scoped reasonably
-   companion absence does not break SystemStrap
-   application absence does not cause companion warnings/fatals
-   no third-party core files are modified
-   no PHP warnings/notices are introduced
-   no new browser console errors are introduced

------------------------------------------------------------------------

# 30. Architectural Summary

The SystemStrap integration boundary is:

SYSTEMSTRAP owns the page.

COMPANION owns how the application fits the SystemStrap design and
component system.

APPLICATION owns what the application does.

Or, expressed as the rendering stack:

WordPress request ↓ Application establishes context/state where
applicable ↓ WordPress/SystemStrap selects page architecture ↓
SystemStrap owns page shell + page semantics ↓ Application renders
application functionality ↓ Companion adapts application components to
SystemStrap ↓ SystemStrap generic design system supplies shared visual
primitives

No layer should absorb another layer's responsibility merely for
convenience.

------------------------------------------------------------------------

# 31. Current Reference Implementations

## BuddyPress

BuddyPress currently demonstrates:

-   Router-backed page context
-   theme-owned BuddyPress page composition
-   companion-owned BuddyPress CSS
-   companion-owned component semantics
-   generic SystemStrap asset API consumption

## WooCommerce

WooCommerce currently demonstrates at the page-architecture layer:

-   direct deterministic SystemStrap templates for Catalog, Product
    Search, Single Product, Cart, Checkout, and Order Confirmation
-   shared `archive-product` fallback for Product Category and Product
    Tag unless a verified distinction later requires dedicated taxonomy
    templates
-   Router-backed My Account as one stable Page context, with Woo
    endpoints remaining application-owned internal states
-   theme-owned commerce page shells and one page-level main landmark
-   theme-owned route page schema: `CollectionPage` for catalog routes,
    `SearchResultsPage` for product search, `ItemPage` for Single Product, and
    `WebPage` for Cart, Checkout, Order Confirmation, and My Account
-   preserved Woo Cart/Checkout
    `page-content-wrapper → core/post-content` application contract
-   Woo-owned commerce state and commerce entity schema
-   no Woo-specific visual CSS in SystemStrap core
-   Woo-aware Product Sidebar and Product Sidebar 2 template parts for Site
    Editor composition; their content-bearing patterns remain separate from
    generic sidebars even where their Core Columns geometry matches
-   Product layouts selected through the WooCommerce `single-product*`
    hierarchy, including `single-product-{product-slug}` for a product-specific
    override, rather than the Post/Page custom-template picker

Generic `blank` and other Post/Page custom templates MUST NOT be exposed as
WooCommerce Product assignments. Product-specific styling remains companion-owned.

Woo presentation and component-level integration remain companion-owned
and begin only after runtime/editor acceptance of the page architecture.

## bbPress

bbPress is expected to demonstrate:

-   direct forum/topic templates where appropriate
-   compatibility bridging for block-theme limitations
-   theme-owned forum page shells
-   bbPress-owned forum application state
-   companion-owned System List/System Panel presentation and component
    repair
-   theme-owned page shells and route-level page schema only; forum, topic,
    reply, and user entity schema remain bbPress or future companion-owned

These integrations may use different routing mechanisms.

They must obey the same ownership contract.

------------------------------------------------------------------------

# FINAL RULE

When deciding where new integration code belongs, do not ask:

> "Where is it easiest to put this?"

Ask:

> "Who owns the responsibility this code represents?"

Page responsibility: → SystemStrap

Application integration responsibility: → Companion

Application behavior: → Application plugin

That boundary is the SystemStrap Plugin Integration Contract.

# 32. Baseline Compatibility Exception

SystemStrap core may contain application-specific compatibility code
when that code is required for a supported application plugin to
function correctly with the theme, WordPress block themes, or another
explicitly supported WordPress ecosystem plugin.

This is an intentional exception to the normal application-specific
integration boundary.

Theme-owned baseline compatibility may include:

-   block-theme template-resolution bridges
-   request/template compatibility
-   synthetic content rendering repairs
-   lifecycle/timing corrections that can execute after theme bootstrap
-   interoperability fixes between supported plugins that can execute
    after theme bootstrap
-   guarded compatibility shims required for baseline functionality

The purpose of this layer is:

APPLICATION ACTIVE + SYSTEMSTRAP ACTIVE → application works correctly
without requiring a SystemStrap companion plugin, where WordPress
lifecycle timing makes theme ownership technically possible.

Compatibility code must:

-   be narrowly scoped
-   be guarded by plugin/application availability
-   use supported hooks/APIs
-   fail safely when the application is absent
-   contain no application-specific visual styling
-   avoid modifying third-party core files
-   avoid duplicating application business logic
-   be documented with the upstream behavior it corrects
-   be removable when the upstream defect is verifiably fixed

The companion plugin remains responsible for enhanced presentation,
component-level adaptation, visual synchronization, optional integration
features, and any baseline compatibility repair that must execute before
the theme can safely participate.

Baseline functionality belongs to the theme **when the WordPress
lifecycle allows it**. Enhanced integration belongs to the companion.
Application behavior belongs to the application.

Ownership test:

Does the supported application fail, misroute, fail to render, or
otherwise malfunction without this compatibility code?

YES → Prefer the SystemStrap baseline compatibility layer, subject to
the early-boot lifecycle exception below.

Does the application already work correctly but need
SystemStrap-specific presentation/component adaptation?

YES → Companion plugin.

------------------------------------------------------------------------

# 33. Early-Boot Compatibility Exception

Some interoperability defects occur before the active theme is loaded.

A normal theme cannot reliably intercept plugin callbacks that have
already executed during plugin bootstrap. Therefore compatibility code
must not be forced into SystemStrap core merely to satisfy an ownership
preference when the WordPress lifecycle makes that technically unsafe.

Ownership rule:

-   If the repair can execute safely after the theme loads: →
    SystemStrap baseline compatibility layer may own it.

-   If the repair must execute before `setup_theme` /
    `after_setup_theme`, or must alter callbacks that fire during the
    earlier plugin bootstrap sequence: → place it in the earliest
    appropriate SystemStrap companion/plugin layer.

This is a lifecycle constraint, not a visual-integration decision.

Early-boot compatibility must remain:

-   narrowly scoped
-   non-visual
-   guarded by target plugin availability
-   based on supported hooks/APIs where possible
-   safe when either target plugin is absent
-   documented with the upstream lifecycle defect it repairs
-   removable when upstream behavior is verifiably corrected

## Current BuddyPress + bbPress Example

The current BuddyPress + bbPress interoperability defect is an
early-boot exception.

Verified behavior:

`bbp_setup_buddypress()` is attached to BuddyPress `bp_include`.

That path constructs the bbPress BuddyPress component before WordPress
`init`, causing a translated `bbpress` string to trigger
`_load_textdomain_just_in_time()` too early.

A normal SystemStrap theme callback runs too late to safely move the
original callback. Attempting the repair after the early callback has
already fired can initialize the bbPress BuddyPress component twice and
cause fatal redeclaration.

Therefore the validated repair currently belongs in
`systemstrap-buddypress`, which can execute early enough to:

-   remove `bbp_setup_buddypress()` from `bp_include`
-   reattach it to `bp_init` at priority `0`
-   preserve `BBP_Forums_Component` initialization
-   eliminate the premature `bbpress` textdomain warning

This exception does **not** transfer bbPress visual integration,
forum/topic styling, or general application behavior into
`systemstrap-buddypress`.

It also does **not** establish that all bbPress block-theme
compatibility must be plugin-owned. Later bbPress compatibility
requirements must be evaluated individually. Any bridge or rendering
repair that can safely execute from the theme should be considered for
SystemStrap baseline compatibility.

------------------------------------------------------------------------

# 34. Compatibility File Strategy

When baseline compatibility is required and the theme lifecycle is
sufficient, SystemStrap should centralize guarded compatibility loading
in a dedicated theme compatibility layer rather than scattering
application checks throughout unrelated files.

The initial implementation may use:

`inc/plugin-compatibility.php`

If the compatibility surface grows substantially, it may later be split
into application-specific files such as:

`inc/compat/buddypress.php` `inc/compat/bbpress.php`
`inc/compat/woocommerce.php`

The organizational form may evolve, but the ownership rules in this
contract must remain unchanged.

The compatibility layer must not become a location for
application-specific CSS, component styling, or convenience hacks.

------------------------------------------------------------------------

# FINAL RULE

When deciding where new integration code belongs, do not ask:

> "Where is it easiest to put this?"

Ask:

> "Who owns the responsibility this code represents, and at what point
> in the WordPress lifecycle can that owner safely act?"

Page responsibility: → SystemStrap

Baseline functional compatibility that the theme can safely provide: →
SystemStrap compatibility layer

Required pre-theme/bootstrap compatibility: → earliest appropriate
SystemStrap companion/plugin layer

Application presentation/component integration: → Companion

Application behavior: → Application plugin

That boundary is the SystemStrap Plugin Integration Contract.
