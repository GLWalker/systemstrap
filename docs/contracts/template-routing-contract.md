# Contract: Template, Part, and Pattern Routing

## Classification

This file is a CONTRACT.

## Purpose

SystemStrap served output is composed by WordPress request resolution, a selected block template, template parts, patterns, native or plugin content, and render-time semantic filters. This contract records the current source-backed routing and ownership boundaries. It does not authorize template, part, pattern, router, schema, or layout changes.

## Source of Truth

The current routing layer is defined by:

- `templates/*.html`
- `parts/*.html`
- `patterns/content-router.php`
- `patterns/content-*.php`
- `inc/theme-setup.php`
- `inc/block-filters.php`
- `theme.json`

`docs/contracts/semantic-rendering-contract.md` remains the authority for render-filter semantics. This contract records the template, part, and pattern paths on which those semantics depend.

## Runtime Verification Boundary

The runtime observations below were captured on 2026-08-19 with the active `systemstrap` theme. They distinguish verified requests from source-only paths.

- The effective filesystem `page` template is `systemstrap//page`; no `wp_template` database record currently overrides it.
- The current site uses a static front page. No Posts Page is configured; therefore `home.html` is source-mapped but not exercised by the current site setting.
- The active database contains custom `wp_template_part` records for `header`, `footer`, `part-home`, and `part-buddypress-activity`. A selected custom template part shadows its corresponding filesystem part.
- No persistent diagnostic plugin, log, renamed template, or other runtime test artifact is part of this contract.
- The Post and Page template assignment query exposes only the four SystemStrap content-layout templates: `blank`, `no-title`, `single-secondary`, and `three-column`. Runtime hierarchy templates remain available to automatic resolution and the Site Editor outside that post-type-specific query.

## Current Template Resolution Model

SystemStrap output resolves in this order:

```text
WordPress request/query context
→ WordPress-selected block template
→ template parts in that template
→ Content Router invoked directly by `page.html` or through `part-blank`
→ route-selected content template part
→ content pattern
→ native WordPress or plugin block content
→ render_block semantic filters
→ final HTML
```

WordPress owns request classification and outer block-template selection. SystemStrap owns the filesystem compositions selected by that hierarchy, subject to Site Editor overrides. A plugin owns its application content and request context; the theme owns the page shell, Router decision, and theme-provided semantic wrapper when the active outer template includes them.

`inc/theme-setup.php` filters only `get_block_templates()` queries explicitly scoped to `post` or `page`. The filter constrains the per-content Template picker to the four registered SystemStrap content-layout templates; it does not remove runtime templates from WordPress hierarchy resolution or unscoped Site Editor template queries.

## Post Type and Context Matrix

| Request/query context | Effective outer template | Verification/source | Router | Final content owner | Main landmark owner |
| --- | --- | --- | --- | --- | --- |
| Current static Front Page | `templates/page.html` | Runtime verified | Yes | `part-page` / `content-page` | Router-selected `part-page` |
| Normal Page | `templates/page.html` | Runtime verified | Yes | `part-page` / `content-page` | Router-selected `part-page` |
| Page with Blank template | `templates/blank.html` | Runtime verified | Yes | `part-page` / `content-page` | Router-selected `part-page` |
| Page with No Title template | `templates/no-title.html` | Runtime verified | Yes | `part-page` / `content-page` | Router-selected `part-page` |
| Posts Page / Home | `templates/home.html` | Source only; no Posts Page is configured | No | `part-home` / `content-home` | Direct `part-home` |
| Single Post | `templates/single.html` | Runtime verified | No | `part-single` / `content-single` | Direct `part-single` |
| Single Post with sidebar template | `templates/single-secondary.html` | Runtime verified | No | `part-single` / `content-single`, plus secondary sidebar | Direct `part-single`; separate sidebar part owns `aside` |
| Post or Page with Three Column template | `templates/three-column.html` | Source verified | No | `part-single` / `content-single`, plus secondary and tertiary sidebars | Direct `part-single`; separate sidebar parts own two labeled `aside` landmarks |
| Archive | `templates/archive.html` | Runtime verified | No | `part-archive` / `content-archive` | Direct `part-archive` |
| Taxonomy archive | `templates/archive.html` | Runtime verified | No | `part-archive` / `content-archive` | Direct `part-archive` |
| Author archive | `templates/archive.html` | Runtime verified | No | `part-archive` / `content-archive` | Direct `part-archive` |
| Search | `templates/search.html` | Runtime verified | No | `part-search` / `content-search` | Direct `part-search` |
| WooCommerce product catalog / Shop | `templates/archive-product.html` | WooCommerce 11.0.1 source verified | No | `part-woocommerce-catalog` / `content-woocommerce-catalog` | Direct `part-woocommerce-catalog` |
| WooCommerce product category or tag | `templates/archive-product.html` through WooCommerce fallback | WooCommerce 11.0.1 source verified | No | `part-woocommerce-catalog` / `content-woocommerce-catalog` | Direct `part-woocommerce-catalog` |
| WooCommerce product search | `templates/product-search-results.html` | WooCommerce 11.0.1 source verified | No | `part-woocommerce-product-search` / `content-woocommerce-product-search` | Direct `part-woocommerce-product-search` |
| WooCommerce single product | `templates/single-product.html` | WooCommerce 11.0.1 source verified | No | `part-woocommerce-single-product` / `content-woocommerce-single-product` | Direct `part-woocommerce-single-product` |
| WooCommerce Cart | `templates/page-cart.html` | WooCommerce 11.0.1 source verified | No | `part-woocommerce-cart` / `content-woocommerce-cart` | Direct `part-woocommerce-cart` |
| WooCommerce Checkout | `templates/page-checkout.html` | WooCommerce 11.0.1 source verified | No | `part-woocommerce-checkout` / `content-woocommerce-checkout` | Direct `part-woocommerce-checkout` |
| WooCommerce order confirmation | `templates/order-confirmation.html` | WooCommerce 11.0.1 source verified | No | `part-woocommerce-order-confirmation` / `content-woocommerce-order-confirmation` | Direct `part-woocommerce-order-confirmation` |
| WooCommerce My Account and endpoints | `templates/page.html` | WooCommerce 11.0.1 source and prior runtime verified | Yes | `part-woocommerce-account` / `content-page` | Router-selected `part-woocommerce-account` |
| 404 | `templates/404.html` | Runtime verified | No | `part-404` / `content-404` | Direct `part-404` |
| Index fallback | `templates/index.html` | Source only | No | `part-index` / `content-index` | Direct `part-index` |
| BuddyPress Activity | `templates/page.html` | Runtime verified | Yes | `part-buddypress-activity` / `content-buddypress-activity` | Router-selected `part-buddypress-activity` |
| BuddyPress Members directory | `templates/page.html` | Router mapping source-backed | Yes | `part-buddypress-members` / `content-buddypress-members` | Router-selected part |
| BuddyPress Groups directory | `templates/page.html` | Router mapping source-backed | Yes | `part-buddypress-groups` / `content-buddypress-groups` | Router-selected part |
| BuddyPress Blogs directory | `templates/page.html` | Router mapping source-backed | Yes | `part-buddypress-blogs` / `content-buddypress-blogs` | Router-selected part |
| BuddyPress member/profile route | `templates/page.html` | Runtime verified | Yes | `part-buddypress` / `content-buddypress` | Router-selected `part-buddypress` |
| BuddyPress unknown or empty component | `templates/page.html` | Router source-backed | Yes | `part-buddypress` / `content-buddypress` | Router-selected `part-buddypress` |
| BuddyPress inactive / non-BuddyPress page | `templates/page.html` | Router source-backed | Yes | `part-page` / `content-page` | Router-selected `part-page` |

The route table does not make `page.html` a universal fallback. Direct templates for single, archive, search, WooCommerce's deterministic application contexts, home, 404, and index bypass the Router. WooCommerce product categories and tags deliberately use WooCommerce's `archive-product` fallback; SystemStrap does not provide redundant taxonomy templates.

## BuddyPress Template Classification

`templates/buddypress.html` is a **DORMANT COMPATIBILITY ENTRY POINT** in the current runtime mode.

- The filesystem file exists.
- No `wp_template` database override exists for `systemstrap//buddypress`.
- `bp_use_theme_compat_with_current_theme()` returned `true`.
- `bp_theme_compat_is_block_theme()` returned `false`.
- BuddyPress therefore did not use its block-theme `locate_block_template()` path.
- Runtime requests for `/activity/` and `/members/walker/profile/` resolved to `systemstrap//page`, then entered the Content Router.

BuddyPress source makes the `buddypress` block-template candidate relevant only when BuddyPress is not using theme compatibility and reports a block-theme compatibility path. This dormant compatibility entry point remains available for that source-proven alternate mode.

## Router Participation Matrix

`patterns/content-router.php` is invoked directly by `templates/page.html` and through `parts/part-blank.html`.

| Outer template route | Includes `part-blank` | Router participation |
| --- | --- | --- |
| `page.html` | No; invokes `content-router` directly | Yes |
| `no-title.html` | Yes | Yes |
| `blank.html` | Yes | Yes |
| Current BuddyPress requests resolved as Page | Directly, through `page.html` | Yes |
| `single.html` / `single-secondary.html` | No | No |
| `archive.html` | No | No |
| `search.html` | No | No |
| `home.html` | No | No |
| `404.html` | No | No |
| `index.html` | No | No |
| `buddypress.html` | Yes | Only if that currently dormant template becomes selected |
| WooCommerce My Account and endpoints resolved as Page | Directly, through `page.html` | Yes, when `is_account_page()` is available and true |

The Router first selects `part-woocommerce-account` only when WooCommerce is active, `is_account_page()` is true, and that filesystem part exists. It then maps the BuddyPress components `activity`, `blogs`, `groups`, and `members` to matching `part-buddypress-*` parts. All other BuddyPress components, including an empty component, use `part-buddypress` when it exists. Remaining requests use `part-page` when it exists.

## Template Part and Pattern Chains

| Template / Router output | Template part | Pattern | Responsibility |
| --- | --- | --- | --- |
| Router Page fallback | `part-page` | `content-page` | Page article, entry header, featured image/title, and entry content composition |
| Router BuddyPress generic | `part-buddypress` | `content-buddypress` | Generic BuddyPress article composition |
| Router BuddyPress directories | `part-buddypress-{activity,blogs,groups,members}` | matching `content-buddypress-*` | Component-specific BuddyPress section composition |
| Direct single | `part-single` | `content-single` | Single-post article, entry metadata, content, tags, and post navigation |
| Direct archive | `part-archive` | `content-archive` | Archive header and archive query composition |
| Direct search | `part-search` | `content-search` | Search header and search query composition |
| Direct WooCommerce catalog | `part-woocommerce-catalog` | `content-woocommerce-catalog` | SystemStrap outer and inner full-width constrained page chamber around WooCommerce catalog application blocks |
| Direct WooCommerce product search | `part-woocommerce-product-search` | `content-woocommerce-product-search` | SystemStrap outer and inner full-width constrained page chamber around WooCommerce product-search application blocks |
| Direct WooCommerce single product | `part-woocommerce-single-product` | `content-woocommerce-single-product` | SystemStrap outer and inner full-width constrained page chamber around WooCommerce single-product application blocks |
| Direct WooCommerce Cart | `part-woocommerce-cart` | `content-woocommerce-cart` | SystemStrap outer and inner full-width constrained page chamber preserving WooCommerce `page-content-wrapper` and Post Content composition |
| Direct WooCommerce Checkout | `part-woocommerce-checkout` | `content-woocommerce-checkout` | SystemStrap outer and inner full-width constrained page chamber preserving WooCommerce `page-content-wrapper` and Post Content composition |
| Direct WooCommerce order confirmation | `part-woocommerce-order-confirmation` | `content-woocommerce-order-confirmation` | SystemStrap outer and inner full-width constrained page chamber around WooCommerce order-confirmation application blocks |
| Router WooCommerce My Account | `part-woocommerce-account` | `content-page` | Page composition with WooCommerce-owned account endpoint application state |
| Direct home | `part-home` | `content-home` | Home composition patterns |
| Direct index | `part-index` | `content-index` | Index query composition |
| Direct 404 | `part-404` | `content-404` | 404 content composition |
| End of Page and Single hook | `part-comments` | `content-comments` | Comments section, comment template, pagination, and form |
| Single-secondary sidebar column | `part-sidebar-secondary` | `content-sidebar-secondary` | Complementary sidebar composition |
| Three-column sidebar columns | `part-sidebar-secondary` and `part-sidebar-tertiary` | matching sidebar patterns | Distinct complementary sidebar compositions |
| WooCommerce Product Sidebar | `part-woocommerce-product-sidebar` | `content-woocommerce-product-sidebar` | Woo-aware complementary sidebar composition, separate from generic sidebar content |
| WooCommerce Product Sidebar 2 | `part-woocommerce-product-sidebar-secondary` | `content-woocommerce-product-sidebar-secondary` | Second Woo-aware complementary sidebar composition, separate from generic sidebar content |

`header` and `footer` are structural shell parts. They render the `header` and `footer` patterns between protected action-hook separators. `part-blank` is a neutral Router host: it does not own a `main` landmark itself. `part-sidebar-tertiary` and its related pattern are composed by `three-column.html` as the labeled tertiary complementary region.

## Landmark Ownership

| Surface | Current owner | Filter-owned additions |
| --- | --- | --- |
| Site header | `header` template part | `site-header` receives `id="masthead"`, `role="banner"`, label, and `WPHeader` microdata |
| Router-backed main | Router-emitted template part | `site-main` receives `role="main"`, a concise route label where useful, and a route-aware page type |
| Direct-template main | Direct `wp:template-part` with `tagName: "main"` | Same `site-main` filter behavior |
| Page and single article | `content-page` / `content-single` `hentry` group | `hentry` receives `Article` or `BlogPosting` microdata according to the queried object |
| BuddyPress generic article | `content-buddypress` `hentry buddypress-pattern` group | `hentry` filter applies its current source behavior |
| BuddyPress directories | Component patterns use route-specific `section` | Activity receives `role="feed"`; members, groups, and blogs receive labeled `region` roles |
| WooCommerce direct application routes | Direct WooCommerce template parts | `site-main` supplies the page-level main landmark; WooCommerce application blocks retain product, cart, checkout, and order semantics |
| Secondary sidebar | `part-sidebar-secondary` template part | `secondary-content` receives `role="complementary"` and label |
| Tertiary sidebar | `part-sidebar-tertiary` template part | `tertiary-content` receives `role="complementary"` and label |
| WooCommerce Product Sidebar | `part-woocommerce-product-sidebar` template part | `secondary-content` receives the existing secondary complementary landmark and label |
| WooCommerce Product Sidebar 2 | `part-woocommerce-product-sidebar-secondary` template part | `tertiary-content` receives the existing tertiary complementary landmark and label |
| Site footer | `footer` template part | `site-footer` receives `id="colophon"`, `role="contentinfo"`, label, and `WPFooter` microdata |
| Navigation | Header and content patterns that render Navigation | Navigation filter adds `SiteNavigationElement`; navigation lists and links receive the current list and URL semantics |

Router-backed contexts MUST have exactly one `main` landmark emitted by the Router-selected part. Direct-template contexts MUST have exactly one `main` landmark emitted by their direct template part. `part-blank` MUST remain landmark-neutral because it hosts the Router-owned landmark.

## Schema and Microformat Ownership

`inc/block-filters.php` owns render-time schema, microformat, and ARIA augmentation. Patterns own the class signals and structural elements that those filters consume.

Route semantics have three ownership levels: SystemStrap owns the outer landmark and page-level `WebPage` subtype; application plugins or companions own their entity schema and component semantics. Theme-authored `hentry` content-object typing remains a documented inner-content exception, not plugin entity ownership.

- `site-main` establishes a theme-owned page type according to route context: `WebPage` by default, `SearchResultsPage` for search, `CollectionPage` for list/catalog routes, guarded `ProfilePage` for BuddyPress member routes, and `ItemPage` for Single Product.
- `hentry` establishes `BlogPosting` for a singular queried post and `CreativeWork` otherwise.
- `entry-content` adds `articleBody`; `entry-summary` adds `description`.
- Post titles, dates, terms, and links receive their current item properties through the filter layer.
- Navigation receives `SiteNavigationElement`, list, and URL semantics.
- `core/post-template` and the Latest Posts replacement establish `ItemList` on the list, `ListItem` and position metadata on items, and `Article` semantics on their inner articles.
- Latest Comments receives its current `ItemList` / `Comment` semantics through the same filter layer.

WooCommerce direct template parts use `main-woocommerce-*` classes. Catalog and product-taxonomy fallback routes receive `CollectionPage`; product search receives `SearchResultsPage`; Single Product receives `ItemPage`; Cart, Checkout, Order Confirmation, and My Account remain `WebPage`. WooCommerce product patterns do not add `hentry`; Product, Offer, rating, order, and other commerce-entity semantics remain WooCommerce-owned.

The outer `site-main` page type remains distinct from inner `hentry` content-object typing: standard posts remain `BlogPosting`, and non-post singular `hentry` content remains `CreativeWork`.

## Width and Layout Ownership

`theme.json` owns the root layout sizes: `contentSize: min(100%, 1200px)` and `wideSize: min(100%, 1320px)`. Templates, parts, and patterns use block attributes and wrapper Groups to realize those WordPress layout rules.

- Page, Single, generic BuddyPress, and component BuddyPress patterns use their current `alignfull` outer compositions with constrained inner Groups and global padding.
- Archive and Search use padded `alignfull` outer Groups with constrained inner content and their route query patterns.
- Index uses its current `alignfull` outer composition and wide query/header content.
- WooCommerce direct patterns use an `alignfull` constrained outer Group with existing spacing-40 block padding. Catalog, product search, and single product preserve WooCommerce `alignwide` application blocks; Cart and Checkout preserve WooCommerce's `page-content-wrapper` and Post Content path.
- Query patterns own their post-template layout primitives. `query-media-object` uses a constrained wide Query with a non-wrapping row composition; Directory and Latest Posts query patterns retain their own query structures.
- `single-secondary.html` owns the sidebar composition through an `alignwide` Columns block: the first Column contains the main landmark, and the second 33% Column contains the sidebar `aside`. Columns therefore provide both visual geometry and editor layout semantics; they do not own either landmark.
- `three-column.html` uses the same `alignwide` Columns primitive with a flexible main Column and two 25% sidebar Columns. Core Columns preserves the responsive stacking behavior below its native 782px breakpoint; the two sidebar parts retain separate complementary landmark labels.
- `woocommerce-product-sidebar` and `woocommerce-product-three-column` are Site Editor composition patterns. They clone the respective Main + Sidebar and Three Column Columns topology, but use `part-woocommerce-single-product` and Woo-specific sidebar parts. They are not Product custom templates and do not affect hierarchy selection.

No wrapper described here may be simplified without a separate source and editor/frontend layout review.

## Query and List Semantics

Archive, Search, Index, and custom query patterns compose WordPress Query and Post Template blocks. `inc/block-filters.php` supplies their list semantics:

```text
Query / post-template
→ ItemList
→ ListItem with position metadata
→ Article
```

The same filter layer attaches the current headline, description, date, author, and URL schema properties. Sidebar patterns may contain Latest Posts or other query-style content, but their sidebar composition remains pattern-owned while rendered list semantics remain filter-owned.

## Fallback Model

The Router fallback is deterministic within the currently loaded theme filesystem:

1. A WooCommerce My Account request selects `part-woocommerce-account` only when WooCommerce's `is_account_page()` exists, returns true, and the filesystem part exists.
2. A mapped BuddyPress component part is selected only when its mapped filesystem part exists.
3. A BuddyPress request without a selected mapped part uses `part-buddypress` when that filesystem part exists.
4. All remaining Router requests use `part-page` when that filesystem part exists.
5. If `part-page` is unavailable, the Router emits its emergency `main.site-main.main-page` wrapper with `core/post-content`.

The Router does not inspect a Site Editor template-part override before its filesystem `locate_template()` decision. Once a slug is selected, WordPress template-part resolution may render a custom database template part for that slug.

WordPress owns block-template hierarchy fallback when no more specific SystemStrap template applies. This contract does not claim an additional SystemStrap-specific fallback beyond the present `index.html` file.

## Site Editor Override Model

A custom `wp_template` record shadows the corresponding filesystem outer template. A custom `wp_template_part` record shadows the corresponding filesystem template part.

- A custom Page template can remove Router participation if it no longer includes the Router path.
- A custom `part-blank` can alter or remove Router participation from templates that include it.
- A custom routed part can change the final pattern/content composition while retaining Router selection.
- A custom header or footer can change shell composition while the selected main route remains unchanged.
- A custom WooCommerce `wp_template` record shadows the matching SystemStrap filesystem template; absent that record, WooCommerce's template lookup can use the SystemStrap filesystem template before its plugin fallback.
- WooCommerce Product layouts use WooCommerce's `single-product*` hierarchy, not the Post/Page custom-template picker. `single-product` is the global layout and `single-product-{product-slug}` is the supported per-product override lane. A per-product template may compose either Woo Product layout pattern.
- Generic `blank` is not a WooCommerce Product assignment mechanism. A future blank Product layout must be a Woo hierarchy-compatible Product composition.

At the current runtime snapshot, `header`, `footer`, `part-home`, and `part-buddypress-activity` have custom `wp_template_part` records. The effective source of each selected one is the Site Editor record, not its filesystem file.

## Semantic Class and Filter Dependencies

The following class signals are semantic dependencies and MUST NOT be removed or renamed without updating `semantic-rendering-contract.md` and this contract:

| Class signal | Filter dependency |
| --- | --- |
| `site-header` | Header landmark, ARIA, and `WPHeader` microdata |
| `site-main` | Main landmark, route label, and main itemtype |
| `main-page`, `main-buddypress`, `main-search`, `main-index`, `main-single`, `main-archive`, `main-three-column`, `main-woocommerce-*` | Deterministic route and page-schema selection |
| `hentry` | Article / BlogPosting semantic wrapper |
| `entry-header` | Entry header structure |
| `entry-content` | `articleBody` ownership |
| `entry-summary` | Description ownership |
| `secondary-content`, `tertiary-content` | Complementary landmark and label |
| `buddypress-pattern`, `buddypress-activity-pattern`, `buddypress-members-pattern`, `buddypress-groups-pattern`, `buddypress-blogs-pattern` | BuddyPress route roles and labels |

## Current Architecture Summary

SystemStrap currently uses direct templates for route families with stable, dedicated content parts, including Main + Sidebar, Three Column, and deterministic WooCommerce application contexts. It uses `page.html` plus the Content Router for ordinary pages, current BuddyPress Page-resolved routes, and WooCommerce My Account's shared Page context. The Router selects the main landmark-bearing content part; the selected part selects the content pattern. Theme render filters then add the semantic and machine-readable layer based on those emitted block classes and structures.

## Future Extension Rules

The following rules record the current BuddyPress-derived integration boundary:

1. A plugin route MUST use `page.html` plus the Content Router only when runtime proof shows that WordPress resolves the route as the ordinary Page template and the plugin endpoints can be represented by the existing routed-part boundary.
2. A plugin route MUST receive a dedicated `templates/*.html` file only when runtime proof shows that it selects or requires a distinct outer shell rather than the Page shell.
3. Plugin endpoints MUST share one routed part only when their current content composition and semantic wrapper are the same. Component-specific endpoints MUST use separate routed parts when their patterns differ.
4. WordPress owns request/query context and block-template hierarchy. SystemStrap owns the selected theme shell, template-part composition, Router behavior, and theme semantic wrapper. The plugin owns application internals and plugin-provided content.
5. Plugin-specific CSS and JavaScript MUST remain with the owning plugin or the established plugin integration surface. Theme page-level semantic filters MUST remain in the theme filter layer; component-level filters MUST remain with the component owner unless the theme is intentionally replacing that exact rendered surface.

## Architectural Anomalies and Deferred Review Points

- `templates/buddypress.html` is a dormant compatibility entry point and is not selected in the verified BuddyPress compatibility mode.
- `home.html` and `index.html` are source-mapped but not exercised by the current live settings/fixtures.
- Site Editor template-part records currently shadow selected filesystem parts; filesystem inspection alone is not proof of effective rendered part content.
- BuddyPress is inactive in the current runtime; its guarded profile/directory mapping requires runtime verification when the application is active.

## Enforcement Boundary

Changes to template selection, template parts, `part-blank`, `patterns/content-router.php`, `content-*` routing patterns, sidebar composition, or semantic class signals MUST be reviewed against this contract and `semantic-rendering-contract.md` in the same change set.
