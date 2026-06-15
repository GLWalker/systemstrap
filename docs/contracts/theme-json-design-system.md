# Contract: Theme JSON Design System

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.0

Last Updated: 2026-06-15

## Change Log

### 1.0

Initial theme.json design-system contract.

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
- `wp-content/themes/systemstrap/assets/css/strap-reset.css`
- `wp-content/themes/systemstrap/assets/css/style-variations/*.css`
- `wp-content/themes/systemstrap/assets/js/variations/*.js`
- `wp-content/themes/systemstrap/patterns/*.php`

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new token family, preset family, block-level style family, global-styles interception rule, editor-style rule, or token-consuming CSS convention MUST be added to this contract in the same change set that introduces it.

Any removal or rename of a token slug, custom property, style-variation naming rule, or global-styles interception rule listed here MUST be treated as a design-system behavior change and documented here in the same change set.

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

These slugs are part of the contract because runtime CSS, patterns, and global-styles interception consume them directly.

Palette slug renames MUST be treated as breaking design-system changes.

### Duotone contract

The theme currently defines a custom duotone set in `theme.json`.

The theme MUST treat these duotones as theme-owned presets rather than inherited core defaults.

### Gradient contract

The theme currently defines a custom gradient set in `theme.json`.

The gradient registry includes at least these families:

- generic surface gradients such as `gradient`, `gradient-alt`, `body`, and `element`
- accent gradients such as `primary`, `secondary`, `success`, `info`, `warning`, `danger`, `light`, and `dark`
- corresponding hover gradients such as `primary-hover`, `secondary-hover`, `success-hover`, `info-hover`, `warning-hover`, `danger-hover`, `light-hover`, and `dark-hover`

These gradients are part of the design-system contract because they reference preset colors and are intended to stay inside the same token family.

### Custom token contract

`theme.json.settings.custom` currently defines custom-property families for:

- body typography
- heading typography
- single-title typography
- navigation typography
- monospace typography
- button typography
- display typography
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

- `geist`
- `manrope`
- `inter`
- `monospace`
- `syne`

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
- `part-sidebar-buddypress`
- `part-sidebar-secondary`
- `part-sidebar-tertiary`
- `part-single`
- `part-offcanvas`
- `part-search-modal`

### Custom templates contract

The current `customTemplates` registry includes:

- `no-title` for `page` and `post`
- `blank` for `page` and `post`
- `single-secondary` for `post`
- `single-tertiary` for `post`

## Editor and Frontend Parity Contract

`functions.php` and `inc/enqueue-assets.php` together define the current frontend/editor style-loading contract.

### Editor styles contract

`functions.php` currently registers editor styles through `add_editor_style()` with:

- `assets/css/strap-reset.css`
- `assets/css/main-styles.css`
- `assets/css/style-variations/core-group-system-carousel.css`

If the theme is a child theme, `style.css` is added to that editor style list.

These files are part of editor parity and MUST remain design-system-aware.

### Frontend style enqueue contract

`inc/enqueue-assets.php` currently enqueues:

- `strap-reset`
- `strap-main-styles`
- `splide-core`
- `strap-carousel-styles`
- `strap-button-icon`

If the theme is a child theme, `strap-child-style` is enqueued after `strap-main-styles`.

This load order is part of the current design-system runtime because the token layer is consumed by `main-styles.css` and subsequent variation styles.

## Global Styles Interception Contract

`inc/enqueue-assets.php` modifies WordPress global styles at runtime through two mechanisms.

### Default preset stripping contract

The theme currently filters `wp_theme_json_data_default` and empties the default core arrays for:

- `palette`
- `duotone`
- `gradients`

This behavior is part of the token-ownership contract.

SystemStrap MUST NOT silently restore default core palettes, gradients, or duotones while the theme owns those registries in `theme.json`.

### Global stylesheet rewrite contract

The theme currently intercepts `wp_enqueue_global_styles` and rebuilds the global stylesheet through `strap_intercept_global_styles()`.

This routine currently:

- removes WordPress global-styles enqueue actions from both frontend hooks
- regenerates CSS through `wp_get_global_stylesheet()`
- rewrites background utility classes to inject contrast-aware text colors for theme-owned background slugs
- registers a replacement `global-styles` handle
- adds the rewritten stylesheet inline
- enqueues the rewritten stylesheet after theme styles

The current background text-color rewrite contract includes:

- slug remapping for `base`, `contrast`, `secondary-bg`, and `tertiary-bg`
- accent background text-color fallback for `primary`, `secondary`, `success`, `info`, `warning`, `danger`, `light`, and `dark`

This interception is part of the design system because color legibility is not left to default WordPress output.

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

Current pagination chrome for core pagination blocks is block-scoped through this mechanism, including:

- `assets/css/style-variations/core-query-pagination-system-pagination.css`
- `assets/css/style-variations/core-comments-pagination-system-pagination.css`

These files are conditional block styles, not global stylesheet rules, and MUST remain in the block-style loading path unless the loading contract is explicitly replaced.

`inc/enqueue-assets.php` currently adds a render-time enqueue safeguard for:

- `core/query-pagination*`
- `core/comments-pagination*`

That safeguard MUST enqueue:

- `core-query-pagination-system-pagination`
- `core-comments-pagination-system-pagination`

when the corresponding pagination blocks render on the frontend.

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

- re-enabling default core palette, gradient, or duotone families while theme-owned replacements remain active
- renaming preset slugs or custom-token families without updating their runtime consumers and this contract
- bypassing `theme.json` tokens in favor of repeated hard-coded literals where an existing equivalent token family already exists
- changing global-styles interception order in a way that causes WordPress output to override `strap-main-styles` unexpectedly
- breaking editor/frontend parity for shared token consumers without documenting the split
- changing style-variation filename parsing rules without documenting the new rule here

## Expansion Rule

New design-system work MUST extend this contract by adding:

- source file
- token family or style surface
- runtime consumer
- interception behavior if any
- editor/frontend implications if any

## Current Expansion Queue

The following related contracts are active next-step documentation targets:

- `starter-content.md`
- `variation-architecture.md`

Detailed governance for those surfaces is not complete until those contracts are written.
