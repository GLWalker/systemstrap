# Contract: Theme JSON Design System

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.17

Last Updated: 2026-07-31

## Change Log

### 1.17

Finalized the explicit `system-ui-pagination*` contract without changing any `theme.json` variable names. Visible pagination borders now resolve through `--wp--custom--system-ui-border-color`; the component layers its base background, a capped `--wp--custom--system-ui-surface`, `--wp--custom--system-ui-background-image`, active or hover overlay, border, and content. The current page consumes `--wp--custom--system-ui-active-bg`, hover consumes `--wp--custom--system-ui-list-hover-bg`, and the badge variation consumes the existing badge font, padding, and radius custom variables. Explicit pagination styles no longer consume button transitions, transforms, shadows, border tokens, or button radius.

### 1.6

Extended `inc/dynamic-styles.php` with palette-driven background routing for Query and Comments Pagination. A background selected on the pagination wrapper is removed from that layout container and applied to each rendered previous, number, and next control; a background selected on one of those nested blocks applies only to its own rendered control. The existing dynamic contrast class remains the text-color authority.

### 1.7

The shared `system-ui-pagination` family now supports the same selected variation on Query and Comments Pagination child blocks. Parent selection remains the bulk control; Previous, Page Numbers, and Next selection is a local override that reuses the same token contract.

### 1.8

Dynamic child-pagination color routing now uses the generated palette contrast token directly for colored Previous, Next, and page-number controls. A colored Page Numbers wrapper keeps its `...` separator unpainted and inheriting the pagination text color, so separator visibility is not coupled to the page-control background contrast.

### 1.9

Pagination now uses a layered System UI contract. Dynamic color routing exposes the editor-selected palette as pagination accent, background, and contrast context; explicit System UI variations consume that context to add their own translucent surface, border, hover, active, and arrow-geometry treatment. Without an explicit variation, pagination remains the native text-first baseline.

### 1.10

The explicit pagination family now owns component-specific density, interaction shadows, and translucent badge surfaces instead of directly inheriting button presentation. Styled previous and next controls use centered CSS chevrons inside intact control frames; the badge variation uses compact arrow controls without clipped button geometry.

### 1.11

When an explicit System UI pagination variation is selected, dynamic palette routing now supplies only the selected color context and no longer hard-paints rendered controls. The shared pagination component is therefore the sole styled-surface authority, keeping badge arrows and page numbers visually identical.

### 1.12

Pagination arrows now have an explicit component token contract. `--strap-pagination-arrow-control-size` and `--strap-pagination-arrow-padding-inline` are independent from number-control sizing, allowing each variation to make arrows narrower while preserving the shared vertical rhythm and centered CSS chevron. The arrow inline padding remains `2px` smaller than its matching number control.

### 1.13

Pagination arrow controls now assign their own border-box `inline-size`, `min-inline-size`, and flex basis from `--strap-pagination-arrow-control-size`. The shared number-control geometry can no longer expand a styled previous or next control after the arrow token has resolved.

### 1.14

Pagination arrows now have independent `--strap-pagination-arrow-control-height` and `--strap-pagination-arrow-padding-block` tokens. Arrow controls resolve their own border-box block size and vertical padding while remaining centered in the pagination row.

### 1.15

All explicit pagination families now resolve arrow controls six pixels shorter than their matching number controls by default. This shared height offset keeps filled, outline, and badge arrows visibly compact without altering number-control dimensions.

### 1.16

Pagination now exposes a local border-width token with the theme button border width as its fallback. `system-ui-pagination-square-outline` sets that token to `1px`, preventing sharp-cornered pagination controls from inheriting an overly heavy variation-level button border.

### 1.5

Replaced the legacy Query and Comments pagination chrome with a native block-style family shared by Query Pagination, Comments Pagination, and Post Navigation Link. `theme.json` now owns the text-only baseline; `assets/css/system-ui-pagination.css` loads only when an explicit `system-ui-pagination*` variation is selected. The retired `system-pagination`, `system-ui-circle`, `system-ui-rounded`, and `system-ui-square` classes intentionally fall back to the baseline.

### 1.4

Documented the WordPress media-width variables consumed by the SystemStrap carousel runtime. `inc/dynamic-styles.php` continues to emit `--wp--custom--thumbnail-width` and `--wp--custom--medium-width` from the native Media Settings options, with defensive positive-integer fallbacks, and the carousel runtime now treats thumbnail width as the default presentation width unless every direct image slide in the thumbnail variation is explicitly `size-medium`.

### 1.3

Extended the `inc/dynamic-styles.php` global-styles append lane so active System Tabs and System Vertical Tabs can route their joining edge color from theme palette background utility classes. The tabs CSS now defaults that active join edge to `--wp--custom--system-ui-surface`, while the dynamic palette loop overrides it for `.has-*-background-color` active tab states on the frontend.

### 1.0

Initial theme.json design-system contract.

### 1.1

Delegated detailed runtime color, contrast, and global-styles extension behavior to this contract and `variation-architecture.md`. Updated the global-styles section to match the current Core-preserving extension architecture and removed the outdated PHP-side default-preset stripping description.

### 1.2

Synced the template metadata registry to the live filesystem by removing unresolved template-part and custom-template entries that had no matching shipped files.

## Purpose

SystemStrap MUST treat `theme.json` as the canonical token registry for editor-facing and runtime-facing design primitives that are already expressed through WordPress presets, custom properties, global styles, and block-level style definitions.

SystemStrap MUST treat the design system as a runtime contract, not as decorative configuration.

SystemStrap MUST preserve these goals across all changes to `theme.json` and its consuming files:

- consistent tokens between frontend and editor
- controlled replacement of WordPress default presets where the theme already owns the token layer
- predictable consumption of color, typography, spacing, radius, shadow, and layout tokens across blocks and custom CSS
- safe extension of WordPress global styles without surrendering contrast or token discipline

## Principles

- Prefer WordPress-native token surfaces before introducing custom parallel systems.
- Prefer `theme.json` presets and custom properties as the source of token truth.
- Prefer consuming `theme.json` values through `var(--wp--preset--...)` and `var(--wp--custom--...)` instead of hard-coding repeated literals in CSS.
- Prefer extending or intercepting WordPress global styles over replacing the design system with unrelated standalone CSS architecture.
- Prefer frontend and editor parity unless a file is explicitly editor-only or frontend-only.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

The design-system layer is currently implemented through these files:

- `wp-content/themes/systemstrap/theme.json`
- `wp-content/themes/systemstrap/functions.php`
- `wp-content/themes/systemstrap/inc/enqueue-assets.php`
- `wp-content/themes/systemstrap/inc/block-styles.php`
- `wp-content/themes/systemstrap/assets/css/main-styles.css`
- `wp-content/themes/systemstrap/assets/css/buddypress-blocks.css`
- `wp-content/themes/systemstrap/assets/css/strap-reset.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/*.css`
- `wp-content/themes/systemstrap/assets/js/variations/*.js`
- `wp-content/themes/systemstrap/patterns/*.php`

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new token family, preset family, block-level style family, global-styles extension rule, editor-style rule, or token-consuming CSS convention MUST be added to this contract in the same change set that introduces it.

Any removal or rename of a token slug, custom property, style-variation naming rule, or global-styles extension rule listed here MUST be treated as a design-system behavior change and documented here in the same change set.

## Canonical Token Registry

`theme.json` is the canonical registry for the design-system surfaces currently owned by the theme.

The top-level `theme.json` contract currently includes:

- `$schema`
- `version`
- `settings`
- `styles`
- `templateParts`
- `customTemplates`

### Theme JSON version contract

`theme.json` currently declares:

- schema: `https://schemas.wp.org/trunk/theme.json`
- version: `3`

The theme MUST remain compatible with the declared `theme.json` version in the file itself.

## Settings Layer Contract

`theme.json.settings` currently governs these design-system families:

- `appearanceTools`
- `color`
- `custom`
- `layout`
- `shadow`
- `spacing`
- `typography`
- `useRootPaddingAwareAlignments`

### Appearance tools contract

`appearanceTools` is enabled.

The theme MUST assume that WordPress appearance tool support is part of the editor contract unless this file changes.

### Color contract

The theme currently disables default core color families inside `theme.json.settings.color`:

- `defaultDuotone: false`
- `defaultGradients: false`
- `defaultPalette: false`

The theme currently owns these color registries:

- `duotone`
- `gradients`
- `palette`
- `link`

The color design system MUST be treated as theme-owned rather than default-core-owned.

Detailed governance for runtime color derivation, contrast routing, `global-styles` extension, and compatibility behavior belongs to this contract and `variation-architecture.md`.

### Palette contract

The current palette includes named slugs for:

- `base`
- `contrast`
- `secondary-bg`
- `secondary-color`
- `tertiary-bg`
- `tertiary-color`
- `border-color`
- `primary`
- `secondary`
- `success`
- `info`
- `warning`
- `danger`
- `light`
- `dark`
- `transparent`
- `current`
- `current-mix`
- `inherit`

These slugs are part of the contract because runtime CSS, patterns, and global-styles extension consume them directly.

Palette slug renames MUST be treated as breaking design-system changes.

### Duotone contract

The theme currently defines a custom duotone set in `theme.json`.

The theme MUST treat these duotones as theme-owned presets rather than inherited core defaults.

## Gradient Preset Registry

SystemStrap organizes theme gradient presets into three strictly ordered namespaces:

1. **Absolute** (`absolute-*`): Structural surface gradients.
2. **Accent** (`accent-*`): Palette-aligned base and Alt material gradients.
3. **Pattern** (`pattern-*`): Contextual transparent pattern gradients.

### Canonical Gradient Preset Table

| Slug | Name | Role |
| :--- | :--- | :--- |
| `absolute-01` | `Absolute: Gradient` | General structural gradient |
| `absolute-02` | `Absolute: Gradient Alt` | Alternate structural gradient |
| `absolute-03` | `Absolute: Body` | Page-level atmospheric background |
| `absolute-04` | `Absolute: Element` | Restrained element surface |
| `accent-10` | `Accent: Primary` | Primary accent material |
| `accent-20` | `Accent: Primary Alt` | Alternate primary material |
| `accent-30` | `Accent: Secondary` | Secondary accent material |
| `accent-40` | `Accent: Secondary Alt` | Alternate secondary material |
| `accent-50` | `Accent: Success` | Success accent material |
| `accent-60` | `Accent: Success Alt` | Alternate success material |
| `accent-70` | `Accent: Info` | Informational accent material |
| `accent-80` | `Accent: Info Alt` | Alternate informational material |
| `accent-90` | `Accent: Warning` | Warning accent material |
| `accent-100` | `Accent: Warning Alt` | Alternate warning material |
| `accent-110` | `Accent: Danger` | Danger accent material |
| `accent-120` | `Accent: Danger Alt` | Alternate danger material |
| `accent-130` | `Accent: Light` | Light accent material |
| `accent-140` | `Accent: Light Alt` | Alternate light material |
| `accent-150` | `Accent: Dark` | Dark accent material |
| `accent-160` | `Accent: Dark Alt` | Alternate dark material |
| `pattern-10` | `Pattern: Starburst` | Contextual radial/conic starburst pattern |
| `pattern-20` | `Pattern: Starburst Alt` | Alternate upper-right focal starburst pattern |
| `pattern-30` | `Pattern: Spiral Ring` | Broad offset concentric ring pattern |
| `pattern-40` | `Pattern: Spiral Ring Alt` | Shifted tighter concentric ring pattern |
| `pattern-50` | `Pattern: Topographic Lines` | Fluid contour-line pattern |
| `pattern-60` | `Pattern: Topographic Lines Alt` | Shifted tighter topographic contour pattern |
| `pattern-70` | `Pattern: Wood Grain` | Directional fibers and growth-ring pattern |
| `pattern-80` | `Pattern: Wood Grain Alt` | Shifted descending wood grain pattern |
| `pattern-90` | `Texture: Fine Grain` | Subtle micro-grain surface texture |
| `pattern-100` | `Texture: Pressed Paper` | Soft editorial fiber texture with paper flecks |
| `pattern-110` | `Texture: Woven Linen` | Contextual fabric weave |
| `pattern-120` | `Texture: Blueprint Grid` | Fine technical grid with major divisions |
| `pattern-130` | `Texture: Carbon Fiber` | Tight diagonal technical composite weave |
| `pattern-140` | `Texture: Low Poly` | Broad angular tessellated texture |
| `pattern-150` | `Texture: Terrazzo` | Scattered contextual mineral-chip texture |
| `pattern-160` | `Texture: Dark Brushed Metal` | Directional brushed technical texture |
| `pattern-170` | `Texture: Dot Matrix` | Fluid geometric dot field |
| `pattern-180` | `Texture: Honeycomb` | Contextual hexagonal mesh texture |
| `pattern-190` | `Texture: Cabinet Mesh` | Industrial enclosure equipment grid |
| `pattern-200` | `Texture: Brickwork` | Restrained offset masonry pattern |

### Accent Gradient Composition

Accent gradients are semantic, variation-aware surfaces generated from canonical semantic shade ladders.

Each semantic family provides:

- one Base gradient for calm, reusable tonal movement;
- one Alt gradient for a related but compositionally distinct treatment.

Base and Alt gradients MUST differ through more than direction alone. Stop selection, semantic emphasis, midpoint placement, or tonal progression MUST provide visible distinction.

Accent gradients SHOULD:

- use two or three purposeful stops;
- favor neighboring shades and restrained luminance distance;
- remain smooth and free of hard seams;
- preserve the identity of their owning semantic family;
- avoid pure white and black endpoints;
- remain useful beyond showcase previews.

Accent gradients MUST NOT:

- hardcode hexadecimal, RGB, HSL, or named colors;
- use Pattern runtime variables;
- use repeating, conic, or texture geometry;
- depend on block-specific CSS;
- become aliases for fully art-directed promotional materials.

### Canonical Pattern Registry Lock

The root Pattern registry is complete and locked at twenty contextual gradient presets:

- eight Expressive Patterns;
- twelve Practical Textures.

The registry uses the sequential `pattern-10` through `pattern-200` namespace.

Existing slugs, names, order, and formulas MUST remain stable unless the Pattern contract is deliberately revised. New experiments MUST NOT be appended casually to the root registry.

Changes to the canonical registry require:

1. a documented design-system reason;
2. reference-impact review;
3. visual testing across light, dark, semantic, and custom color contexts;
4. contract revision;
5. validation of backward compatibility.

Fully colored promotional gradients, art-directed hero treatments, and layout-dependent materials do not belong in the contextual Pattern registry. Those treatments should be evaluated separately through stylesheet-driven block styles, theme variations, patterns, or child-theme design work.

### Gradient Governance Rules

- Absolute presets are structural and MUST remain first in `theme.json.settings.color.gradients`.
- Accent presets occur in base/Alt pairs.
- "Alt" means an alternate material, not an interaction state (do not use "Hover" in names or slugs).
- Pattern presets (`pattern-*`) are transparent contextual materials.
- Pattern presets consume `currentColor` through the System UI pattern variable surface (`--wp--custom--system-ui-pattern-*`).
- Pattern gradients may consume the shared pattern tone channels.
- Pattern tone channels are optional and must provide `currentColor`-compatible fallbacks.
- Pattern gradients MUST remain neutral, block-agnostic, and MUST NOT reference a fixed semantic color family.
- Variations may add additional `pattern-*` presets without PHP changes.
- Pattern-specific geometry belongs in gradient presets, not runtime PHP.
- `pattern-10` establishes the neutral starburst pattern with lower-left focal origin.
- `pattern-20` establishes the alternate starburst pattern with upper-right focal origin.
- `pattern-30` and `pattern-40` establish the Spiral Ring Base and Alt concentric ring textures.
- `pattern-50` and `pattern-60` establish the Topographic Lines Base and Alt contour textures.
- `pattern-70` and `pattern-80` establish the Wood Grain Base and Alt organic textures.
- The canonical registry MUST contain eight expressive patterns and twelve practical textures unless the contract is intentionally revised.
- All entries MUST use the `pattern-*` namespace so the generic contextual runtime applies consistently.
- Practical textures MUST remain transparent and MUST derive color from the active contextual pattern variables.
- Practical textures MUST NOT embed fixed semantic palette colors.
- Texture geometry MUST work as a standalone `theme.json` gradient value.
- Textures MUST NOT require `background-size`, `background-position`, masks, pseudo-elements, external images, or block-specific runtime logic.
- Visual similarity to a physical material is desirable, but readability and broad contextual usefulness take priority over literal realism.
- A texture that reads as noise, mud, visual interference, or an unrelated geometric pattern MUST be removed rather than retained for registry completeness.
- All pattern formulas must scale gracefully across small cards and large panels using percentage-based geometry or rem-based/em-based spacing.
- Numeric spacing (`10`, `20`, ..., `200`) leaves insertion room for future presets.
- Gradient arrays are deliberately ordered and MUST NOT be alphabetized.

Public Pattern Token Surface:
- `system-ui-pattern-color`
- `system-ui-pattern-highlight-color`
- `system-ui-pattern-shadow-color`
- `system-ui-pattern-opacity`
- `system-ui-pattern-shadow-opacity`
- `system-ui-pattern-tone-low`
- `system-ui-pattern-tone-mid`
- `system-ui-pattern-tone-high`

*(Note: Legacy gradient slugs `gradient`, `gradient-alt`, `body`, `element`, `primary`, `primary-hover`, `secondary`, `secondary-hover`, `success`, `success-hover`, `info`, `info-hover`, `warning`, `warning-hover`, `danger`, `danger-hover`, `light`, `light-hover`, `dark`, `dark-hover`, and `neutral-starburst` are superseded by this contract and are no longer active root gradient presets).*

### Custom token contract

`theme.json.settings.custom` currently defines custom-property families for:

- body typography
- heading typography
- display typography
- button typography
- monospace typography
- font weights
- link colors
- code and highlight colors
- border width and border style
- border-radius tiers
- shared shadow alias
- button border, transform, transition, and radius tokens
- form border, radius, transition, focus, valid, and invalid tokens
- dropdown border, radius, and shadow tokens
- badge size, weight, padding, and radius tokens
- focus-ring width, color, and opacity tokens
- disabled-state background, opacity, and filter tokens

These tokens MUST be treated as first-class design-system inputs.

The theme MUST prefer consuming these values through `var(--wp--custom--...)` and the generated preset variables rather than duplicating equivalent literals across CSS.

### Layout contract

`theme.json.settings.layout` currently defines:

- `contentSize`
- `wideSize`

These values are part of the content-width contract between editor and frontend.

### Shadow contract

`theme.json.settings.shadow.presets` currently defines theme-owned shadow presets, including:

- `sm`
- `md`
- `lg`
- `inset`
- directional shadows such as `top`, `right`, `bottom`, and `left`
- compound directional shadows such as `top-right`, `top-bottom`, and `all-sides`
- inset compound shadows such as `inset-all-sides`
- form shadows including `form-focus` and `form-control-shadow`
- button shadows including `btn-resting`, `btn-hover`, and `btn-active`

These slugs are part of the design-system contract because patterns and CSS consume them directly.

### Spacing contract

`theme.json.settings.spacing` currently:

- disables default spacing sizes
- defines theme-owned spacing sizes
- defines allowed units

The current spacing preset slugs include:

- `10`
- `20`
- `30`
- `40`
- `50`
- `60`
- `70`
- `80`

These spacing tokens are part of the layout rhythm contract across patterns, block styles, and custom CSS.

### Typography contract

`theme.json.settings.typography` currently:

- disables default font sizes
- enables `dropCap`
- enables fluid typography
- enables `textColumns`
- enables `writingMode`

The current font-size preset family includes:

- `x-small`
- `small`
- `medium`
- `large`
- `x-large`
- `xx-large`
- `xxx-large`
- `huge`
- `display-6`
- `display-5`
- `display-4`
- `display-3`
- `display-2`
- `display-1`

The current font-family preset family includes:

- `body`
- `heading`
- `display`
- `button`
- `monospace`

These family slugs are part of the design-system contract because custom tokens and block styles reference them directly.

### Root padding aware alignment contract

`useRootPaddingAwareAlignments` is enabled.

The theme MUST assume that root padding is part of the alignment and content-width behavior shared between frontend and editor.

## Styles Layer Contract

`theme.json.styles` currently governs these top-level families:

- `color`
- `spacing`
- `typography`
- `blocks`
- `elements`

### Global document style contract

The top-level style layer currently sets:

- base document background to `var:preset|color|base`
- base document text to `var:preset|color|contrast`
- global block gap to `var:preset|spacing|30`
- root side padding to `var:preset|spacing|30`
- body typography to the custom body token family

These values are the default frontend and editor document style contract unless a more specific block or element override exists.

### Elements contract

`theme.json.styles.elements` currently defines theme-owned rules for:

- `button`
- `caption`
- `h1`
- `h2`
- `h3`
- `h4`
- `h5`
- `h6`
- `heading`
- `link`

These element rules are part of the design-system contract because they shape default element behavior before block-specific overrides.

### Block style contract

`theme.json.styles.blocks` currently defines block-level design rules for 78 block surfaces.

This block-style layer is part of the design-system contract and MUST be treated as the theme-owned default style map for those blocks.

The currently declared block-style map includes:

- archive, category, and list-adjacent blocks such as `core/archives`, `core/categories`, `core/list`, `core/list-item`, `core/tag-cloud`, `core/rss`, and `core/page-list`
- media blocks such as `core/audio`, `core/avatar`, `core/cover`, `core/embed`, `core/file`, `core/gallery`, `core/image`, `core/media-text`, and `core/video`
- button and navigation blocks such as `core/button`, `core/buttons`, `core/navigation`, `core/navigation-submenu`, `core/read-more`, and `core/loginout`
- content and typography blocks such as `core/code`, `core/html`, `core/paragraph`, `core/preformatted`, `core/quote`, `core/pullquote`, `core/table`, `core/shortcode`, and `core/verse`
- query and post blocks such as `core/query`, `core/query-no-results`, `core/query-pagination`, `core/query-pagination-next`, `core/query-pagination-numbers`, `core/query-pagination-previous`, `core/post-author`, `core/post-author-name`, `core/post-comments-form`, `core/post-content`, `core/post-date`, `core/post-excerpt`, `core/post-featured-image`, `core/post-navigation-link`, `core/post-template`, `core/post-terms`, `core/post-title`, and `core/query-title`
- comments surfaces such as `core/comment-author-name`, `core/comment-content`, `core/comment-date`, `core/comment-edit-link`, `core/comment-reply-link`, `core/comment-template`, `core/comments`, and comments pagination variants
- structural blocks such as `core/group`, `core/column`, `core/columns`, `core/details`, and `core/missing`
- site identity surfaces such as `core/site-logo`, `core/site-tagline`, `core/site-title`, and `core/social-links`

Any change to the set of styled blocks or their token references MUST be treated as a design-system change.

## Template Metadata Contract

`theme.json` currently defines `templateParts` and `customTemplates`.

These sections are part of the theme.json contract because they bind the design system to actual theme layout surfaces.

### Template parts contract

The current `templateParts` registry includes:

- `header`
- `footer`
- `part-404`
- `part-archive`
- `part-blank`
- `part-buddypress`
- `part-buddypress-activity`
- `part-buddypress-members`
- `part-buddypress-groups`
- `part-buddypress-blogs`
- `part-page`
- `part-comments`
- `part-index`
- `part-home`
- `part-search`
- `part-sidebar-secondary`
- `part-sidebar-tertiary`
- `part-single`
- `part-search-modal`

### Custom templates contract

The current `customTemplates` registry includes:

- `no-title` for `page` and `post`
- `blank` for `page` and `post`
- `single-secondary` for `post`

## Editor and Frontend Parity Contract

`inc/theme-setup.php` and `inc/enqueue-assets.php` together define the current frontend/editor style-loading contract.

### Editor styles contract

`inc/theme-setup.php` currently registers editor styles through `add_editor_style()` with:

- `assets/css/strap-reset.css`
- `assets/css/main-styles.css`
- `assets/css/style-variations/core-group-system-carousel.css`

If the theme is a child theme, `style.css` is added to that editor style list.

These files are part of editor parity and MUST remain design-system-aware.

When BuddyPress is active, `inc/enqueue-assets.php` also enqueues `strap-buddypress-sync` on `enqueue_block_editor_assets`.

This editor-side enqueue exists so the BuddyPress block base stylesheet dependency graph remains valid inside the Site Editor and block editor.

The current editor BuddyPress contract is:

- register `strap-buddypress-sync` early on `init`
- enqueue `strap-buddypress-sync` in the editor only when BuddyPress exists
- keep BuddyPress frontend theme-pack dependencies out of the editor path
- preserve the same handle name across frontend and editor so `wp_enqueue_block_style()` dependencies remain stable

### Frontend style enqueue contract

`inc/enqueue-assets.php` currently enqueues:

- `strap-reset`
- `strap-main-styles`
- `splide-core`
- `strap-carousel-styles`

If the theme is a child theme, `strap-child-style` is enqueued after `strap-main-styles`.

This load order is part of the current design-system runtime because the token layer is consumed by `main-styles.css` and subsequent variation styles.

When BuddyPress is active on the frontend, the current stylesheet runtime also includes:

- BuddyPress plugin/theme-pack CSS such as `bp-nouveau` or `bp-legacy-css`
- `strap-buddypress-sync`
- `strap-buddypress-blocks`
- BuddyPress block style variations registered through `wp_enqueue_block_style()`

The current frontend queue contract in `strap_reorder_frontend_style_queue()` is:

1. `strap-reset`
2. BuddyPress plugin/theme-pack CSS
3. `strap-buddypress-sync`
4. `strap-buddypress-blocks`
5. Core block library styles
6. `global-styles`
7. `strap-main-styles`
8. `strap-child-style`
9. BuddyPress block style variations
10. remaining SystemStrap theme CSS
11. `wp-block-custom-css` and `global-styles-custom-css`
12. everything else

This order is part of the current design-system runtime and MUST NOT be changed casually.

The current rationale is:

- reset rules must run first
- BuddyPress plugin CSS must establish its baseline before SystemStrap extends it
- BuddyPress theme sync and BuddyPress block base styles must land before Core global/theme layers so later token-aware theme styling can still win
- theme and variation styles must load before user-authored Custom CSS
- user-authored Custom CSS must remain the final override surface

## Global Styles Extension Contract

`inc/dynamic-styles.php` extends WordPress global styles at runtime.

### Dynamic CSS enqueue contract

The theme preserves WordPress's native `wp_enqueue_global_styles()` lifecycle and appends dynamic CSS directly to the `global-styles` handle using `wp_add_inline_style()`.

This routine:

- generates dynamic color and layout utilities, including accessibility contrast rules for theme-owned background slugs
- appends the rules onto the native `global-styles` handle to output them inside the same tag
- runs late (priority 9999) on both frontend and editor styles enqueue to ensure core styles are loaded first

Detailed governance for the color-runtime behavior of these appended styles belongs to this contract.

The dynamic background text-color contrast mapping includes:

- slug remapping for `base`, `contrast`, `secondary-bg`, and `tertiary-bg`
- accent background text-color fallback for `primary`, `secondary`, `success`, `info`, `warning`, `danger`, `light`, and `dark`

The current global-styles extension also includes palette-driven active join-color routing for:

- `.wp-block-accordion.is-style-system-tabs .system-tabs__tab.has-*-background-color[aria-selected="true"]`
- `.wp-block-accordion.is-style-system-tabs-vertical .system-tabs__tab.has-*-background-color[aria-selected="true"]`

It also routes editor-selected palette backgrounds for Query and Comments Pagination away from their layout wrappers and onto their rendered controls. Wrapper-level colors fan out to previous, number, and next controls; nested block colors stay local to that selected control. Generated palette contrast remains the source color context; an explicitly selected System UI variation may then apply its own surface presentation above it.

These rules exist so palette-selected tab backgrounds can force the active joining edge to the same preset color on the frontend, instead of relying only on transparent surface blending.

This extension is part of the design system because color legibility is not left to default WordPress output.

### Late custom CSS contract

WordPress currently merges top-level Global Styles Custom CSS into the `global-styles` handle.

Under the SystemStrap runtime, that default behavior is not sufficient because it causes user-authored Custom CSS to print before:

- `strap-main-styles`
- BuddyPress block style variations
- later theme-owned variation chrome

`inc/style-runtime.php` therefore currently peels the top-level custom CSS back off the `global-styles` inline payload through `strap_enqueue_global_styles_custom_css_last()`, then re-enqueues that CSS on a dedicated late handle named `global-styles-custom-css`.

SystemStrap preserves native Global Styles generation, but re-emits top-level Custom CSS last so user-authored CSS remains the final cascade layer over theme and variation styles.

The current contract is:

- preserve WordPress's native `global-styles` lifecycle
- do NOT remove `wp_enqueue_global_styles()`
- extract only the trailing top-level Custom CSS payload
- re-emit that payload on `global-styles-custom-css`
- keep `global-styles-custom-css` in the final custom-CSS queue bucket

This late custom CSS contract exists so user-authored CSS from the Site Editor remains the final cascade layer on the frontend.

## CSS Token Consumption Contract

`assets/css/main-styles.css` is the primary custom consumer of theme tokens.

It currently consumes `--wp--preset--*` and `--wp--custom--*` variables for:

- shared surface colors
- headings and special title font-family classes
- button transitions, transforms, colors, padding, borders, and focus states
- dropdown borders, backgrounds, and spacing
- form border, focus, and shadow states
- badge padding, typography, border radius, and default colors
- panel borders, shadows, and surface tones
- global foundational styles that are not block-scoped through `wp_enqueue_block_style()`

`main-styles.css` MUST be treated as a token-consumption layer, not as a separate ungoverned style system.

When a repeated literal can be sourced from an existing preset or custom token family already defined in `theme.json`, the theme SHOULD prefer the tokenized form.

## Block Style Variation Contract

`inc/block-styles.php` auto-registers block style variations from:

- `assets/css/style-variations/*.css`

The current naming rule is:

- `[namespace]-[block]-[variation].css`

with runtime parsing around `-system-`.

The current contract behavior is:

- the first dash separates namespace from block name
- the variation name is normalized to `system-*`
- the file is registered through `wp_enqueue_block_style()`
- the variation is registered through `register_block_style()`
- `core-group-system-carousel.css` is explicitly skipped from auto-registration

This file naming and registration behavior is part of the current design-system runtime and MUST remain stable until replaced explicitly.

Pagination uses a text-only baseline in `theme.json` for Query Pagination, Comments Pagination, and Post Navigation Link. The explicit System UI family is block-scoped through `assets/css/system-ui-pagination.css`, which is a dependency of these registered variation files:

- `core-query-pagination-system-ui-pagination*.css`
- `core-comments-pagination-system-ui-pagination*.css`
- `core-post-navigation-link-system-ui-pagination*.css`

The supported suffixes are `pagination`, `pagination-outline`, `pagination-pill`, `pagination-pill-outline`, `pagination-square`, `pagination-square-outline`, and `pagination-badge`. The shared stylesheet MUST remain conditional on an explicit style selection; default pagination MUST remain text-only.

`inc/block-styles.php` also conditionally maps `assets/css/buddypress-blocks.css` to BuddyPress block surfaces through `wp_enqueue_block_style()`.

That BuddyPress stylesheet is part of the current design-system implementation because it consumes canonical tokens while preserving frontend/editor parity for BuddyPress block-owned UI.

It is a conditional block stylesheet, not a global reset and not a style-variation choice.

The current BuddyPress block base-style contract includes:

- widget body copy generally stepping down to the small typography scale
- widget titles and key member/group names retaining the medium typography scale
- widget-scoped button and meta text stepping down to the x-small scale where the current sidebar density requires it
- base navigation typography living in the BuddyPress sync/base layer so BuddyPress nav style variations inherit from a stable tokenized baseline

`wp_enqueue_block_style()` loads the selected pagination variation and its shared `strap-system-ui-pagination` dependency. Runtime filters MUST NOT force every pagination variation onto a page.

## Carousel Image Width Token Contract

`inc/dynamic-styles.php` currently appends these frontend/editor variables to the global runtime token surface:

- `--wp--custom--thumbnail-width`
- `--wp--custom--medium-width`

These values currently originate from the native WordPress options:

- `thumbnail_size_w`
- `medium_size_w`

The current contract is:

- both values MUST be treated as positive integer pixel widths
- malformed, zero, or negative values MUST fall back to `150px` for thumbnail and `300px` for medium
- the carousel runtime MAY shrink below those preferred widths when the rendered track is narrower
- the thumbnail variation MUST NOT upscale beyond the active preferred width
- thumbnail mode is the safe default for the thumbnail variation
- medium mode applies only when every direct image slide in the thumbnail variation is explicitly `size-medium`
- `size-full`, undefined size classes, mixed size classes, and non-image direct slides remain thumbnail mode

These variables are currently consumed by:

- `assets/js/carousel-nav.js`
- `assets/js/carousel-editor-preview.js`
- `assets/css/style-variations/core-group-system-carousel.css`

## Variation Script Loading Contract

`inc/enqueue-assets.php` currently loads every JavaScript file in:

- `assets/js/variations/`

through `enqueue_block_editor_assets`.

This is part of the editor-facing variation contract because style-variation affordances are not purely CSS-based.

Detailed governance for variations belongs in the future `variation-architecture.md` contract, but the current loading behavior is part of the present design-system implementation surface.

## Pattern Consumption Contract

Theme patterns currently consume the token system extensively through:

- `var:preset|spacing|*`
- `var:preset|color|*`
- `var:preset|shadow|*`
- `fontSize`
- `fontFamily`
- background color slugs

Patterns are design-system consumers, not independent token registries.

Patterns MUST use the token families already present in `theme.json` when those tokens satisfy the need.

## Prohibited Regressions

The theme MUST NOT introduce any of the following regressions into the covered design-system layer:

- changing the theme-owned color settings in `theme.json` without updating this contract when runtime color behavior is affected
- renaming preset slugs or custom-token families without updating their runtime consumers and this contract
- bypassing `theme.json` tokens in favor of repeated hard-coded literals where an existing equivalent token family already exists
- changing global-styles extension order in a way that causes WordPress output to override `strap-main-styles` unexpectedly
- breaking editor/frontend parity for shared token consumers without documenting the split
- changing style-variation filename parsing rules without documenting the new rule here

## Expansion Rule

New design-system work MUST extend this contract by adding:

- source file
- token family or style surface
- runtime consumer
- extension behavior if any
- editor/frontend implications if any

## Current Expansion Queue

The following related contracts are active next-step documentation targets:

- `starter-content.md`
- `variation-architecture.md`

Detailed governance for those surfaces is not complete until those contracts are written.
