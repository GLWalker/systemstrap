# Contract: First-Class WooCommerce Integration

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 2.6

Last Updated: 2026-09-28

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
| Product Cards | Native, Panel, Flat Panel, List, Flat List | Linked Products / Upsells selection |
| Linked Products / Upsells | Native, Panel, Flat Panel, List, Flat List | Panel |
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
authored Product Template style wins. A classless Gutenberg Default resolves
the current Linked Products / Upsells selection at render time and does not
write the inherited treatment into saved block content. Panel and Flat Panel
share the Product Template Panel structure; Flat
Panel adds the canonical `is-style-system-flat-panel` role to each direct card.
List and Flat List share the Product Template media-object geometry; Flat List
retains its borders, radius, and seams without shadow, background image, or
backdrop filter. Product-card title, price, and action typography are treatment
roles and override producer-specific authored sizes inside these four
treatments. Native, Panel, and Flat Panel Grid presentations retain Woo's
Columns, Responsive, Fill/Fixed, and responsive-layout ownership. List and Flat
List Grid presentations instead use Product Collection width: above 900px they
use three cards, from 601px through 900px they use two, and at 600px or below
they use one. Their constrained media lane consumes
`--wp--custom--thumbnail-width`. Stack and Carousel retain Woo layout ownership.
Presentation may style direct `li.wc-block-product` cards, but MUST NOT set
Carousel track alignment, slide basis or width, scrolling, controls, directives,
or behavior.

Linked Products maps Woo's stable classic Upsells, Related Products,
Cross-sells, and catalog loop boundaries plus classless Product Templates to the
selected Native, Panel, Flat Panel, List, or Flat List treatment. The classic
adapter adds only `strap-woo-product-loop` and the selected treatment roles to
Woo's existing `ul.products`; Woo retains `li.product`, its product link, sale
state, image, title, price, and add-to-cart markup. Panel and Flat Panel share
the Product Template structural adapter; List and Flat List share the Product
Template media-object adapter. Classic loop grids use an intrinsic minimum card
width so nominal `columns-*` output cannot collapse their contents. Flat
treatments retain their family geometry without shadow or atmosphere. Native is
terminal. Block Cart cross-sells receive an explicit Native marker only when
Native is selected; every non-Native Default uses the same shared resolver as
all other Product Templates.

Woo's `woocommerce/product-new` (Newest Products) block has no authored style
override and always resolves the same Linked Products / Upsells selection. Its
server-rendered `wc-block-grid` roles consume the shared Product Panel or
Product List physical adapter. Native, Panel, and Flat Panel preserve Woo's
Rows and Columns ownership. List and Flat List use the same block-container
width contract as Product Template Grid: three cards above 900px, two from
601px through 900px, and one at 600px or below. No Gutenberg style selector is
registered for Newest Products.

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
their semantic root. Product Cards Flat Panel shares the Product Template Panel
adapter and consumes the canonical Group Flat Panel role. Product Cards Flat
List and classic Product Loop List-family treatments share the Product Template
List adapter. Newest Products consumes those same physical Panel and List
adapters through its stable block-grid roles. The Panel and List physical assets
each own one geometry contract for modern Product Templates, classic product
loops, and Newest Products; route-specific archive, Upsells, Related Products,
or Empty Cart copies are prohibited. Account Flat List consumes
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
The localized Product Template Default is resolved from Linked Products /
Upsells and is applied only to the live editor DOM; selecting Gutenberg Default
MUST remain classless in serialized block attributes.

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
