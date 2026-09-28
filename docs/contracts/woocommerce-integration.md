# Contract: First-Class WooCommerce Integration

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 2.1

Last Updated: 2026-09-27

## Ownership and bootstrap

WooCommerce integration is first-class SystemStrap theme functionality. The
integration is authorized by `inc/plugin-compatibility.php` and loads only when
WooCommerce is active. The legacy `systemstrap-woocommerce` plugin is a
reference implementation and is not required when deactivated. If that legacy
plugin is still active, the theme yields for that request solely to prevent
duplicate historical hooks, settings, and function declarations.

WooCommerce remains authoritative for commerce data, state, semantic markup,
navigation, controls, scrolling, and interaction. SystemStrap owns only the
registered presentation treatments and narrow adapters in this contract.

Product Categories is a frozen, independently verified compatibility surface.
The consolidated integration MUST NOT change its markup or CSS contract.

## Component mappings

The option name remains `strap_woocommerce_component_mappings`.

- Valid explicit stored values override registry defaults.
- Missing or invalid keys resolve to the registry default in memory.
- Defaults are not prepopulated into the option.
- The settings page displays real choices only; it has no selectable
  “Theme default” pseudo-choice.
- Saving the page stores the selected valid treatment for every mapped row.

| Component | Valid choices | Default |
| --- | --- | --- |
| Product Cards | Native, Panel, List, List Flush | Panel |
| Linked Products / Upsells | Native, Panel, Flat Panel | Panel |
| Product Images | Native | Native |
| Product Button | Native plus canonical Button aliases | Native |
| Account Navigation | Native, Panel, Flat Panel, List, Flat List, List Flush | Panel |
| Woo Tables | Native, Panel, Flat Panel | Panel |
| Woo Addresses | Native, Panel, Flat Panel | Panel |
| Cart Items | Native, Panel, Flat Panel | Panel |
| Cart Totals | Native, Panel, Flat Panel | Panel |
| Checkout Fields | Native, Panel, Flat Panel | Panel |
| Checkout Totals | Native, Panel, Flat Panel | Panel |

Product Cards uses `is-style-native-woo` as its explicit Native opt-out. An
authored Product Template style wins; otherwise the Panel registry default is
applied. Stack, Grid, and Carousel retain Woo layout ownership. Presentation
may style direct `li.wc-block-product` cards, but MUST NOT set Carousel track
alignment, slide basis or width, scrolling, controls, directives, or behavior.

Linked Products maps Woo's stable legacy upsell loop and Cart cross-sell
Product Template to the selected Native, Panel, or Flat Panel treatment. Panel
and Flat Panel share the Product Template structural adapter; Flat Panel adds
the canonical `is-style-system-flat-panel` role to each mapped card. Native is
terminal. Cross-sells receive an explicit Native marker so the Product Cards
default does not accidentally override the Linked Products setting.

Account Panel and Flat Panel apply their canonical Panel-family surface to the
outer adapter. Existing Woo navigation and rows remain navigation, without
List chrome. List and List Flush adapt only Woo's public `nav > ul > li > a`
roles. Flat List assigns the canonical Page List and Flat List roles to Woo's
existing `ul`, allowing the canonical Page List assets to own its presentation.

Tables and Addresses retain Woo templates and receive only balanced public
wrappers or direct Panel-family surface classes. Table Flat Panel consumes the
canonical Table Flat Panel asset. Address Flat Panel consumes the canonical
Group Flat Panel asset. Cart and Checkout retain all Woo React markup and
behavior; mapped classes are attached only to their registered public block
roots.

## Canonical assets and adapters

Product Button consumes canonical Button CSS through Woo style aliases; no
duplicated Product Button stylesheet exists. Product Reviews consume canonical
Comments assets. Reviews Pagination consumes the canonical System UI Pagination
master. Neutral Panel and Table paint come from `strap-panel-surface` and
`strap-table-surface`. Mapped Flat Panels additionally consume
`core-group-system-flat-panel` or `core-table-system-flat-panel` according to
their semantic root. Account Flat List consumes
`core-page-list-system-flat-list`, including its canonical System List
dependency.

Woo-specific files under `assets/css/style-variations/` are structural adapters
or Product Template presentation files only. Every physical CSS and JavaScript
asset uses `filemtime()` versioning. Block assets load through block-aware
registration; mapped classic/account assets load only on relevant Woo routes.
The retired comment-only `woocommerce-theme-sync.css` is not part of the theme.

The Product Collection Carousel adapter adds only shared icon-button classes to
Woo's existing public controls. Woo retains the control elements, disabled
state, glyphs, track, sizing, scrolling, and Interactivity API behavior.

## Editor parity

The editor uses the same physical assets and canonical masters as the frontend.
Client bridges may add only transient public role classes that server render
adapters add on the frontend. They MUST NOT replace Woo Edit components or read
Woo data stores without declaring the corresponding Woo script dependency.

Woo's dependency detector may report an inline/unknown access to
`wc.wcBlocksData`. Source and asset-metadata tracing identifies WooCommerce's
own `assets/client/blocks/wc-blocks-data.js` bundle as the only local bundle
that both accesses that export and cannot list its own `wc-blocks-data-store`
handle as a dependency. Every other local bundle that accesses the export lists
the handle. SystemStrap scripts do not access `wc.wcBlocksData`; the theme MUST
NOT add a fictitious Woo dependency to silence this upstream self-access report.

## Verification boundary

Automated checks may prove syntax, registration, file identity, hook ownership,
mapping resolution, and adapter output. Visual parity remains a human
verification result and MUST NOT be claimed from static checks alone.
