SystemStrap Front Page Implementation Blueprint
Target pattern: patterns/front-page.php
Asset directory: assets/media/front-page/
Status: updated implementation contract
Purpose: define the canonical architecture, ownership rules, production asset inventory, and section-by-section build plan for the SystemStrap front page.

1. Front Page Intent
   The SystemStrap front page is not a static product brochure and should not be built as a collection of screenshots that merely imitate theme capability.

It must function as a live demonstration of the SystemStrap design system:

- WordPress Core owns block structure and behavior.
- SystemStrap owns presentation and coordinated design-system treatment.
- Authors retain normal editor control.
- Optional plugin ecosystems may be previewed with native blocks, but the front page must not require those plugins to render correctly.
- If SystemStrap can build a visual with native blocks, the front page should build it with native blocks.
- Image assets are reserved for content that is genuinely image content: editorial imagery, product photography, portraits, site previews, scenic layout imagery, and abstract/decorative art.
  The front page should communicate one central idea:
  Native WordPress blocks underneath. SystemStrap design system on top.

A secondary positioning line may reinforce the same principle:
SystemStrap gives Gutenberg the system. You decide what it becomes.

The visual direction should come from the strongest proven SystemStrap Lab compositions rather than from a fictional UI that requires new CSS to reproduce.

Primary visual references include:

- Group Lab layered surfaces
- Mission Control
- Racing Cluster
- Query Control Center
- Details / Live System Runbook
- Navigation Command Center
- Widget Operations Deck
- System Panel / Flat Panel compositions
- Equal Heights
- System Lists
- System Tables
- System Buttons
- System Badge
- Classic Tabs
- pattern/gradient-backed authored surfaces

2. Canonical File and Asset Paths
   The front-page pattern must live at:
   patterns/front-page.php
   All front-page image assets live directly in:
   assets/media/front-page/
   Do not introduce nested asset directories unless a later implementation need clearly justifies them.

The production asset ZIP currently contains a stale README that says assets/images/front-page/. That path is obsolete. The canonical shipping path is:
assets/media/front-page/
Use the theme’s existing portable PHP asset-resolution convention when referencing bundled images. Do not serialize local development URLs and do not rely on JavaScript-only path helpers. 3. Global Build Rules
3.1 Prefer live blocks over screenshots
Build these with actual blocks whenever possible:

- Navigation
- Tabs
- Panels and Flat Panels
- Panel Wrapper
- Lists
- Tables
- Query
- Details
- Buttons
- Badges
- Widgets
- color swatches
- typography samples
- commerce cards
- community/member cards
- cart preview
- application shells
- pattern miniatures
  Use image assets only when the represented content should genuinely be an image.
  3.2 No required WooCommerce or BuddyPress dependency
  The WordPress.org front page must render correctly with neither WooCommerce nor BuddyPress installed.

Commerce and community sections are therefore native-block previews.

They may visually reproduce the established SystemStrap presentation of:

- WooCommerce product cards
- WooCommerce related-product rows
- BuddyPress member cards
- BuddyPress group cards
- BuddyPress-style activity/member navigation
  But they must be assembled from Core blocks plus existing SystemStrap contracts.

Do not use plugin blocks, plugin templates, plugin data, or plugin activation as a requirement.
3.3 Dark sections must use dark-owned surfaces
On dark front-page sections:

- Prefer the actual dark preset or another deliberate dark-owned surface.
- Do not use contrast as a large background merely because it appears dark in the default variation.
- A contrast surface may invert to a bright surface in dark variations.
- Semantic colors are signals, not arbitrary section paint.
- Foreground/background ownership must follow the existing SystemStrap contrast contract.
  3.4 Tabs are a signature motif, but not a universal container
  Use the actual Tabs system where switching views communicates real categories or compositions.

Recommended uses:

- Real Sites / expectations
- Commerce preview
- Community preview
- Components / Patterns / Application UI
  Do not force Tabs into the hero.

The hero should instead use a highly detailed native block composition derived from Mission Control / Group Lab / application-surface patterns.
3.5 No front-page-only CSS unless a contract gap is proven
The implementation should first use:

- native Group / Columns / Cover / Image
- System Panel
- System Flat Panel
- Panel Header / Footer
- Panel Wrapper
- Equal Heights
- Navigation styles
- Tabs
- Button styles
- semantic colors
- gradients and patterns
- System Lists
- System Tables
- native responsive behavior
  Only add front-page-specific CSS if a reusable presentation gap is proven and documented.
  3.6 Scale and composition
  The front page must not collapse into a page of tiny Lab specimens.

Prefer:

- large horizontal sections
- editorial asymmetry
- image-led compositions
- strong two-column and three-column bands
- one or two substantial visual anchors per section
- selective use of Panels rather than wrapping every block in a card
  The goal is:
  “How did native WordPress blocks do that?”

not:
“Here is every component in miniature.”

4. Canonical Section Order
   The updated section order is:
1. Hero
1. WordPress Native
1. Real Sites / Expectations
1. Layouts
1. Color + Typography
1. Commerce Preview
1. Community Preview
1. Components + Patterns
1. Patterns Are Proven Compositions
1. Pattern Lab / Example Sites / Site Editor Gateway
1. Final CTA / Prefooter
   The previous standalone Native Gets Serious and duplicate Real Sites Showcase sections are no longer separate full-width sections.

Their strongest ideas are folded into:

- Components + Patterns → Application UI
- Real Sites / Expectations
- Patterns Are Proven Compositions
  This keeps the homepage focused while preserving the same capability story.

5. Section Blueprint
   Section 1 — Hero
   Purpose
   Establish the product promise immediately while proving that the page itself is built from SystemStrap contracts.
   Background
   Use:
   Texture: Low Poly
   pattern-140
   The backing surface must be intentionally dark.

Do not generate a separate hero background image.

Use the proven portable preset-gradient serialization:
{
"className": "has-dark-background-color",
"gradient": "pattern-140"
}
Core owns the preset gradient class; the manually retained dark backing provides deterministic surface ownership.

Do not use:
style.background.gradient
for preset gradients.
Left content
Eyebrow:
SYSTEMSTRAP
Primary heading:
Default Blocks.
Endless Possibilities.
Supporting copy should explain that SystemStrap coordinates native WordPress blocks through:

- design tokens
- layouts
- reusable patterns
- dynamic color and contrast
- application-grade components
  Proof points:
  ✓ Native blocks
  ✓ Portable content
  ✓ No proprietary builder
  Primary CTAs:
  Explore Patterns
  Open the Site Editor
  Right-side visual — detailed native composition
  Do not use a fake tabbed editor shell.

Build a detailed application-style surface from proven contracts, borrowing the density and compositional logic of Mission Control, Group Lab, and Racing Cluster.

Recommended structure:
System Panel / application shell
├── Panel Header
│ ├── "DESIGN WORKBENCH // LIVE PREVIEW"
│ └── Native / Ready badge
├── compact System Nav Button or joined Button strip
│ ├── Layouts
│ ├── Colors
│ ├── Typography
│ ├── Components
│ └── Patterns
├── Equal Height Columns
│ ├── left tool rail
│ │ ├── Hero
│ │ ├── Feature
│ │ ├── Gallery
│ │ ├── Content
│ │ └── CTA / Footer
│ ├── central image canvas
│ │ ├── site-editorial-business.webp
│ │ └── compact live Panel overlay
│ └── right style rail
│ ├── typography specimen
│ ├── semantic accents
│ ├── surface labels
│ └── small badges
└── Panel Footer
├── Constrained
├── Wide
├── Full
└── "Core blocks + SystemStrap composition"
The central preview image should remain the dominant visual. The side rails frame it; they must not squeeze it into a tiny card.
Assets
Required:
site-editorial-business.webp
Section 2 — WordPress Native
Purpose
Explain that SystemStrap extends Gutenberg rather than replacing it.
Heading
WORDPRESS NATIVE

Start with WordPress.
Suggested supporting message:
SystemStrap does not replace the Block Editor. It unlocks it.

Layout
Use a strong editorial split:

- left: copy + CTAs
- right: six native block specimens + one wider explanatory composition
  Native block examples:
- Group
- Columns
- Cover
- Heading
- Paragraph
- Buttons
  The larger explanatory surface:
  CORE BLOCKS

* SYSTEMSTRAP
  with:

- Layouts
- Tokens
- Styles
- Patterns
- System UI
- Composition
  Assets
  None required.
  Section 3 — Real Sites / Expectations
  Purpose
  Show that the same underlying block system can support radically different visual identities.
  Background
  Dark-owned surface.
  Heading
  BUILD FOR REAL SITES

Same blocks.
Different expectations.
Tabs
Use a real horizontal Tabs composition.

Suggested categories:
Business
Portfolio
Blog
Nonprofit
Education
Site cards
Use image-led native compositions:

- Image or Cover
- Heading
- short supporting copy
- optional compact action
- Flat Panel or authored Group shell
  The image should dominate. Avoid small generic card chrome.
  Assets
  Required:
  site-sonar-command.webp
  site-racing-telemetry.webp
  site-deep-marsh-discovery.webp
  Additional variety:
  site-editorial-business.webp
  No site-modern-interior.webp exists in the current production asset ZIP, so it is no longer part of the required or optional contract.
  Section 4 — Layouts
  Purpose
  Demonstrate layout capability with a buildable native composition rather than a screenshot.
  Heading
  LAYOUTS

Structure without
surrendering control.
Suggested copy:
Flexible layouts for any idea. Use constrained, wide, full, grid, and more — all built with native blocks.

Composition
Use real block geometry:
left editorial copy
right layout showcase
├── Constrained
├── Wide
├── Grid
└── Full
Constrained
Use:
layouts-constrained-mountain.png
inside a native Image / Cover / Flat Panel composition.
Wide
Do not require an image.

Build the Wide example as a dark-owned live Group or Panel with live text:
WIDE

Build without limits.
This is intentionally block-built.
Grid
Build the grid from separate Image blocks using:
layouts-grid-mountain-lake.png
layouts-grid-coastal-bay.png
layouts-grid-shoreline.png
layouts-grid-coastal-cliffs.png
layouts-grid-minimal-seascape.png
Do not flatten these into one baked collage.
Full
Use:
layouts-full-coast-panorama.png
as a wide image strip proving the full-width composition.
Presentation
is-panel-wrapper is preferred where neutral layered paint or canonical radius is needed without Panel atmosphere.

Use Equal Heights only where matching height is intentionally part of the example.
Section 5 — Color + Typography
Purpose
Show that color and type are systems rather than isolated choices.
Layout
Three strong visual regions:

1. semantic color system
2. abstract / gradient art
3. typography hierarchy
   Color heading
   COLORS

Color is a system.
Gradients are geometry.
Color content
Use actual preset-backed live swatches:

- Base
- Contrast
- Primary
- Secondary
- Success
- Info
- Warning
- Danger
  Do not bake the swatches into an image.
  Center art
  Use:
  front-page-color-system-art.webp
  as supporting image content.
  Typography heading
  TYPOGRAPHY

Type is structure.
Use live blocks to demonstrate:

- Display
- Heading
- Subheading
- Body
- Caption
- Mono
  Include one compact live type specimen surface.
  Section 6 — Commerce Preview
  Purpose
  Show storefront composition without requiring WooCommerce.
  Heading
  COMMERCE PREVIEW

A storefront,
built your way.
Disclosure
Suggested copy:
Preview storefront composition with native blocks. When WooCommerce is installed, SystemStrap applies the same design language to live commerce components.

Tabs
Suggested:
Featured
Apparel
Accessories
Digital
Visual contract
The mock product cards must deliberately resemble the established SystemStrap WooCommerce product-card treatment shown in the provided reference screenshots.

Preferred product-card style:

- image-led vertical card
- large light image region
- product title below image
- price beneath title
- optional sale badge / struck-through price
- dark SystemStrap action button
- subtle bordered / shadowed Panel shell
- clean equal-height row
  A secondary horizontal related-product treatment may be used sparingly if useful, but the primary homepage commerce preview should use the stronger vertical card style because it reads immediately as storefront UI.
  Product cards
  Build each from native blocks:
- Image
- Heading
- Price
- optional rating
- Button
- optional badge
  Cart preview
  Build from native blocks:
- System Panel / Flat Panel
- line items
- quantity
- subtotal
- shipping
- total
- Checkout button
  Do not imply a live cart unless WooCommerce is actually installed.
  Assets
  Required:
  product-terra-systemstrap-shirt.webp
  product-systemstrap-cap.webp
  product-systemstrap-mug.webp
  product-systemstrap-tour-poster.webp
  Available alternate:
  product-folded-shirt-alt.webp
  Section 7 — Community Preview
  Purpose
  Show member/community composition without requiring BuddyPress.
  Heading
  COMMUNITY PREVIEW

A community,
ready to grow.
Disclosure
Suggested copy:
Preview member, activity, group, and forum-oriented layouts with native blocks. When BuddyPress is active, SystemStrap adapts live plugin surfaces to the same system.

Tabs
Suggested:
Members
Activity
Groups
Forums
Member-card visual contract
The mock member cards should intentionally reproduce the established SystemStrap BuddyPress member-card look shown in the provided screenshots:

- large portrait/headshot area
- centered member name
- muted activity line
- outlined action button
- light Panel / card shell
- consistent equal-height card geometry
- generous vertical spacing
- no unnecessary decorative chrome
  Use the four animal identities as the homepage members:
- Twix — black and rust Rottweiler
- Meyer — brindle blue French Bulldog
- Henry — orange striped tabby cat
- Albert — black pot-belly pig
  Group-card visual contract
  When the Groups tab is shown, model the composition on the established BuddyPress Group cards:
- wide banner or visual header
- centered / overlapping group image if appropriate
- group name
- privacy/member-count badges
- activity line
- short excerpt
- Join / Leave action
  Build it with native blocks and SystemStrap Panels.
  Activity preview
  Use:
- Group / Panel
- Image
- Paragraph
- List
- small metadata
- timestamps
  No BuddyPress markup is required.
  Assets
  Required:
  member-twix-rottweiler.webp
  member-meyer-french-bulldog.webp
  member-henry-tabby-cat.webp
  member-albert-pot-belly-pig.webp
  Section 8 — Components + Patterns
  Purpose
  Show SystemStrap’s visual language as one integrated design system.
  Background
  Explicit dark-owned surface.
  Heading
  COMPONENTS & PATTERNS

One visual language.
Unlimited combinations.
Tabs
Suggested:
Components
Patterns
Sections
Application UI
Components tab
Use real miniature block compositions, not generic marketing cards.

Possible specimens:

- System Panel
- System List
- System Table
- Buttons / alerts / semantic state
  Patterns tab
  Possible specimens:
- Hero
- editorial grid
- layered surface
- CTA / promotional composition
  Application UI tab
  Fold the former standalone Native Gets Serious material into this tab.

Show compact, real miniatures of:

- Query Control Center
- Live System Runbook
- Widget Operations Deck
- Navigation Command Center or operations table
  These should use actual blocks wherever practical.
  Assets
  Prefer none.
  Section 9 — Patterns Are Proven Compositions
  Purpose
  Show that patterns are reusable, editable compositions rather than proprietary templates.
  Heading
  PATTERNS

Patterns are proven compositions.
Suggested copy:
They are built from the same native blocks and system contracts demonstrated throughout the site. Insert one, change it, dismantle it, or build something entirely different.

Preferred implementation order

1. native miniature pattern markup
2. existing SystemStrap screenshot / asset
3. generated image only if neither is practical
   Candidate compositions
   Use non-trademarked SystemStrap examples such as:

- SystemStrap Tour
- Sonar Command Station
- Racing Telemetry
- Wildlife / Deep Marsh
- application UI composition
  Do not ship Black Sabbath or other trademark-dependent showcase identities as a front-page feature.
  SystemStrap Tour
  The existing SystemStrap Tour page should have a path toward becoming a reusable pattern.
  Assets
  Available:
  product-systemstrap-tour-poster.webp
  site-sonar-command.webp
  site-racing-telemetry.webp
  site-deep-marsh-discovery.webp
  Use these only where the image itself is the content; otherwise prefer miniature live markup.
  Section 10 — Pattern Lab / Example Sites / Site Editor Gateway
  Purpose
  Give users three clear next steps.
  Layout
  Three large equal-height Panels:
  Pattern Lab
  Experiment. Iterate. Discover.
  CTA:
  Visit the Lab
  Example Sites
  A system, not a look.
  CTA:
  See Example Sites
  Site Editor
  Design in context.
  CTA:
  Open the Site Editor
  Implementation
  Block-first.

Use screenshots only if the cards later prove visually weak without them.
Assets
None required.
Section 11 — Final CTA / Prefooter
Purpose
Close with a strong SystemStrap identity statement and clear next actions.
Background
Dark-owned surface.

The decorative artwork must not own the background color.
Heading
SYSTEMSTRAP

What will you build with it?
Supporting copy:
SystemStrap gives Gutenberg the system. You decide what it becomes.

Buttons
Explore Patterns
Open the Site Editor
Decorative overlay
Use:
prefooter-wave-right-transparent.png
This is a transparent PNG designed to:

- align right on desktop
- sit over any theme-owned background color
- preserve alpha transparency
- provide contour / wave / glow detail without baking in section text
- reduce or center gracefully on smaller screens
  Do not bake copy into the asset.
  Existing final CTA art
  The ZIP also contains:
  front-page-final-cta-art.webp
  This remains available, but the transparent prefooter wave is the preferred primary decorative treatment because it allows the live theme surface to own the background.

Use front-page-final-cta-art.webp only if the final composition benefits from a secondary contained artwork treatment. 6. Production Asset Inventory
The current production ZIP contains 23 front-page assets.
Site previews
site-sonar-command.webp
site-racing-telemetry.webp
site-deep-marsh-discovery.webp
site-editorial-business.webp
Commerce
product-terra-systemstrap-shirt.webp
product-systemstrap-cap.webp
product-systemstrap-mug.webp
product-systemstrap-tour-poster.webp
product-folded-shirt-alt.webp
Community
member-twix-rottweiler.webp
member-meyer-french-bulldog.webp
member-henry-tabby-cat.webp
member-albert-pot-belly-pig.webp
Layout showcase
layouts-constrained-mountain.png
layouts-grid-mountain-lake.png
layouts-grid-coastal-bay.png
layouts-grid-shoreline.png
layouts-grid-coastal-cliffs.png
layouts-grid-minimal-seascape.png
layouts-full-coast-panorama.png
Supporting / decorative art
front-page-color-system-art.webp
front-page-final-cta-art.webp
prefooter-wave-right-transparent.png
Asset status
No additional image generation is required for the current front-page contract.

If implementation later reveals a genuine missing image-content need, document that need before generating another asset. 7. Responsive Requirements
The front page must remain useful without relying on desktop-only compositions.
Hero

- detailed right-side application composition may stack below hero copy
- side rails may become rows or stack around the central canvas
- central image remains visually dominant
- control labels must remain readable without requiring horizontal overflow
  Tabs
- allow native responsive behavior
- keep labels concise
- validate Classic Tabs at narrow widths
- do not hardcode desktop-only tab geometry
  Columns
- use native stacking behavior
- apply Equal Heights only where matched composition is intentional
- restore natural heights after mobile stacking unless the established contract says otherwise
  Commerce / community cards
- card rows collapse cleanly
- do not depend on four-across desktop geometry for meaning
- cart/activity side panels move below the primary card region naturally
  Layout showcase
- individual Grid images remain separate blocks
- Full panorama may crop responsively
- Wide block remains live text / surface, not an image dependency
  Prefooter wave
- right aligned on desktop
- may reduce width, center, or sit beneath text on mobile
- must retain transparent background
- must never force the CTA surface color

8. Accessibility and Semantic Requirements

- Preserve native heading hierarchy.
- Buttons must be actual Buttons when actions are intended.
- Navigation destinations must remain real Navigation or links.
- Tabs must use the native Tabs blocks.
- Do not replace real widget blocks with decorative replicas when the real Core block exists.
- Product/community preview cards may contain mock data, but use meaningful headings, images, metadata, and Buttons.
- Image assets require useful alt text when informative.
- Decorative abstract artwork and the prefooter wave should use empty/decorative alt treatment.
- Do not rely on color alone for status/state communication.
- Maintain focus behavior through canonical SystemStrap focus contracts.
- Badge text should carry meaning beyond its color.

9. Plugin Preview Contract
   Commerce preview
   Must:

- render without WooCommerce
- use Core blocks plus SystemStrap styles
- visually align with established SystemStrap WooCommerce cards
- clearly identify itself as a preview
- avoid implying live cart/product behavior when WooCommerce is absent
  Community preview
  Must:
- render without BuddyPress
- use Core blocks plus SystemStrap styles
- visually align with established SystemStrap BuddyPress member/group cards
- clearly identify itself as a preview
- avoid implying live BuddyPress data when BuddyPress is absent
  The WordPress.org distribution must never show missing-plugin placeholder blocks on the front page.

10. Pattern and Portability Rules

- The front page must insert without database-specific IDs.
- Avoid Custom CSS dependencies for ordinary presentation.
- Use canonical preset classes/attributes for colors, gradients, and styles.
- For preset gradients, use the proven portable top-level gradient attribute plus deterministic backing surface where required.
- Never use inert style.background.gradient preset serialization.
- Bundled assets must resolve from the active theme.
- Never serialize local development URLs.
- Do not require a specific database state to avoid broken layout.
- Live Query/widget specimens must degrade gracefully when little content exists.
- Woo/Buddy preview sections must remain complete without those plugins.
- Preserve Gutenberg block grammar so a clean install does not trigger recovery prompts.

11. Acceptance Criteria
    The front page is ready to freeze when:
1. patterns/front-page.php parses cleanly as Gutenberg block markup.
1. It inserts on a clean SystemStrap installation without block recovery prompts.
1. It renders with neither WooCommerce nor BuddyPress installed.
1. Commerce and community previews remain complete without those plugins.
1. All 23 bundled production assets resolve from assets/media/front-page/.
1. Hero uses pattern-140 Low Poly with the proven portable gradient contract.
1. Hero right-side UI is a real native composition, not a screenshot and not a fake tabbed editor.
1. Dark sections remain dark across tested variations.
1. No large section depends on contrast being dark.
1. Real Tabs appear where category switching is meaningful.
1. Layouts uses the separate production images as real block content rather than a baked composite.
1. Commerce cards visually match the established SystemStrap Woo-style card language.
1. Community member/group cards visually match the established SystemStrap BuddyPress-style card language.
1. Components + Patterns includes live miniatures of serious application UI.
1. Pattern cards prefer live miniature markup over screenshots.
1. SystemStrap Tour has a path toward becoming a reusable pattern.
1. The prefooter wave remains transparent and theme-background-owned.
1. Desktop, tablet, and mobile layouts remain coherent.
1. The page remains semantically rich because native blocks retain ownership of markup and behavior.
1. No front-page-only CSS is introduced unless a reusable contract gap is documented first.
1. Implementation Principle for Future Developers and AI Agents
   When extending or rebuilding this front page, use this decision order:
   Can the desired result be built with an existing native block?
   ↓ yes
   Use the native block.

Does SystemStrap already provide a style or composition contract for it?
↓ yes
Use that contract.

Can existing Panels, Tabs, Lists, Tables, Navigation, Equal Heights,
semantic colors, gradients, patterns, or Panel Wrapper compose the result?
↓ yes
Compose them.

Is the desired thing actually image content?
↓ yes
Use an asset from assets/media/front-page/.

Is there still a real presentation gap?
↓ yes
Document the reusable contract gap before adding new CSS.
The front page must remain proof of the SystemStrap thesis, not an exception to it.
If SystemStrap can build it with blocks, build it with blocks.
