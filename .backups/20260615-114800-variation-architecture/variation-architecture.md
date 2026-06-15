# Contract: Variation Architecture

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 2.0

Last Updated: 2026-06-15

## Change Log

### 2.0
Massive factual expansion to explicitly map the Mix-and-Match global theme variations, CSS block styles, JS block variations, and the specific PHP filters powering the architecture.

### 1.1
Expanded contract with registries for Source of Truth files, Block Surface Boundaries, and Token Consumption Pipeline mapping.

### 1.0
Initial variation-architecture contract incorporating mix-and-match theme.json rules, auto-flush semantic boundaries, and Gutenberg serialization strictness.

## Purpose

This contract governs the architectural boundaries, file naming rules, editor loading behaviors, and token interaction rules for all variation surfaces within SystemStrap. This includes Global Theme Variations (Mix-and-Match `theme.json`), CSS Block Style Variations, and JS Block Variations.

## Principles

- Global theme variations MUST follow a decoupled, mix-and-match directory structure to unlock multiplier combinations.
- Arrays in `theme.json` are all-or-nothing replacements; objects are deep merged.
- Pipeline syntax MUST be prioritized to map custom properties directly to registered presets dynamically.
- Variations MUST adhere strictly to Gutenberg markup serialization rules.
- Custom CSS block variations MUST offload complex utility styles to `className` attributes to bypass strict JSON validation errors.
- CSS block styles merely inject classes; JS block variations inject complex `InnerBlocks` structures.

---

## 1. Global Theme Variations (Mix-and-Match System)

SystemStrap embraces a perfectly modular, mix-and-match system for global styles, empowering the decoupling of design into lightweight, independent layers rather than forcing rigid, monolithic skins.

### Directory Infrastructure (WP 6.6+)

Global variations MUST be categorized into isolated directories to populate specific Site Editor selection panels:
- `styles/*.json` for structural base layouts.
- `styles/colors/*.json` for independent color palette overlays.
- `styles/typography/*.json` for independent typography stack overlays.

By providing just a handful of variations in each directory alongside the base `theme.json` fallback, the theme instantly unlocks exponential, flawless layout combinations for the user (e.g., 4 layouts × 4 palettes × 4 typographies = 64 unique combinations).

### The Deep Merge vs. Array Replacement Rule

- **Configuration Objects**: Variations acting on configuration objects (custom variables, block-specific styles) are executed as a surgical, continuous deep merge over the base `theme.json`. If a variation adjusts a single border radius, every other setting remains perfectly intact.
- **JSON Arrays**: Arrays (such as `palette`, `gradients`, or `fontFamilies`) trigger an **all-or-nothing replacement**. To safely modify a single color or font within a variation, the variation MUST duplicate the entire array from the base configuration and tweak the specific targeted values.

### Variation Isolation Safeties

Variations located in `styles/colors/` or `styles/typography/` MUST NOT contain generic, uncategorized configuration keys. If WordPress detects generic keys in these files, the internal parser will panic and inadvertently upgrade the file to a full Global Style. When a user clicks a full Global Style, the editor destructively resets their active color and typography selections. Keeping variations strictly confined to their domains guarantees they remain safe, isolated layers.

### The Pipeline Syntax Requirement

Developers MUST lean heavily into the WordPress pipeline syntax (`var:preset|category|slug`) for mapping custom variables. 

- Custom properties SHOULD be linked directly to registered presets.
- Variations SHOULD safely overwrite the default array items (e.g., redefining the `primary` color hex code or pointing the `body` font slug to a new typeface). 
- Because custom variables are piped to these slugs, the entire styling stack automatically inherits the new values across the entire theme. This eliminates the need to aggressively redefine custom properties inside the variations themselves, keeping configuration files incredibly lean.

---

## 2. Block-Level Style Variations (CSS Layer)

### Registration and Filters

Block Style Variations modify the visual appearance of an existing block structure by appending a CSS class (e.g., `.is-style-system-list`). 

They are automatically registered and enqueued via the `strap_register_block_styles` function hooked to `init` in `inc/block-styles.php`.
- The parser expects the naming convention: `[namespace]-[block]-[variation].css`.
- The parser extracts the namespace and block (e.g., `core-details`) and maps it to `core/details`, while normalizing the variation name around the `-system-` delimiter.

### Exhaustive File Mapping

The following 26 CSS variations in `assets/css/style-variations/` are explicitly governed by this contract:

- **Accordion & Tabs**: `core-accordion-system-accordion.css`, `core-accordion-system-tabs-vertical.css`, `core-accordion-system-tabs.css`
- **Archives & Categories**: `core-archives-system-list.css`, `core-categories-system-list.css`
- **Buttons**: `core-button-system-icon.css`
- **Calendar**: `core-calendar-system-panel.css`
- **Pagination**: `core-comments-pagination-system-pagination.css`, `core-query-pagination-system-pagination.css`
- **Details**: `core-details-system-details.css`
- **Groups & Panels**: `core-group-system-carousel.css`, `core-group-system-panel-footer.css`, `core-group-system-panel-header.css`, `core-group-system-panel.css`
- **Icons**: `core-icon-dialog.css`
- **Lists (Latest Posts/Comments)**: `core-latest-comments-system-list.css`, `core-latest-posts-system-list.css`, `core-list-system-list.css`, `core-page-list-system-list.css`, `core-post-terms-system-list.css`, `core-rss-system-list.css`
- **Panels (Latest Posts/Table)**: `core-latest-posts-system-panel.css`, `core-table-system-panel.css`
- **Navigation**: `core-navigation-system-nav-button.css`, `core-navigation-system-nav-gen.css`
- **Tags**: `core-tag-cloud-system-tags.css`

### Render-Time Enqueue Safeguards

Certain critical variations are conditionally enqueued at render-time to ensure they load even when deeply nested inside templates or patterns. These are strictly governed in `inc/enqueue-assets.php`:
- `strap_enqueue_accordion_tabs` (hooked to `render_block`): Enqueues `accordion-tabs.js` when the `is-style-system-tabs` class is detected.
- `strap_enqueue_pagination_block_styles` (hooked to `render_block`): Enqueues pagination variations for `core/query-pagination` and `core/comments-pagination`.

---

## 3. Block Variations (JavaScript Layer)

Block Variations use JavaScript to modify the underlying HTML structure, default attributes, and `InnerBlocks` of a block before rendering in the editor.

### Registration and Filters

JavaScript variations are loaded into the editor via the `strap_enqueue_block_editor_assets` function hooked to `enqueue_block_editor_assets` in `inc/enqueue-assets.php`. This function dynamically globs and enqueues all `.js` files within the `assets/js/variations/` directory.

### Exhaustive File Mapping

The following 6 JavaScript variations are explicitly governed by this contract:
1. `strap-action-hook.js`
2. `strap-buttons.js`
3. `strap-carousel.js`
4. `strap-controls.js`
5. `strap-icon-controls.js`
6. `strap-panels.js`

---

## 4. Gutenberg Markup Strictness Contract

PHP Patterns and JS Block Variations MUST avoid injecting complex inline JSON styling configurations (such as `{"style":{"spacing":{"blockGap":...}}}`) unless they also perfectly generate the corresponding HTML wrappers and inline CSS styles required by the WordPress parser. Mismatches trigger "Block contains unexpected or invalid content" recovery errors.

### The ClassName Fallback Strategy

When constructing custom patterns or rebuilding variation structures, developers MUST prefer shifting utility styles (colors, layouts, shadows) into the `"className"` property of the block comment instead of relying on strict layout/color JSON configuration objects. 

Because Gutenberg bypasses strict HTML/JSON parity validation on custom classes, this guarantees flawless block parsing while preserving the visual aesthetic.

---

## 5. Semantic Component Rules (Auto-Flush Architecture)

### System Panels

- The `is-style-system-panel` CSS variation MUST ONLY be applied to `core/group` blocks.
- It MUST NOT be applied to `core/column` blocks.
- The underlying CSS relies on direct-child (`>`) selector logic to automatically flush margins, strip duplicate borders, and collapse radii for internal headers, footers, and system lists.

### System Lists

- The `is-style-system-list` class MUST be applied to `core/list` and nested directly inside a panel to trigger the border-collapse junction logic.

---

## 6. Token Consumption & Pipeline Mapping

Variations are design-system consumers, not independent registries. They MUST explicitly bind to the base `theme.json` foundation by exclusively consuming the following token families:

### Typography Tokens
Variations affecting typography MUST consume the custom property pipeline rather than hardcoding families or line heights:
- **Font Families**: `--wp--custom--typography--heading--font-family`, `--wp--custom--typography--body--font-family`, `--wp--custom--typography--monospace--font-family`
- **Line Heights**: `--wp--custom--typography--body--line-height` (strictly `1.5`), `--wp--custom--typography--heading--line-height` (strictly `1.2`)
- **Font Weights**: `--wp--custom--typography--font-weight--normal`, `--wp--custom--typography--font-weight--bold`
- **Font Sizes**: `var(--wp--preset--font-size--*)` (e.g., `display-4`, `large`)

### Spacing Tokens
Variations introducing margins, padding, or gaps MUST consume the preset spacing pipeline. Hard-coded pixel values are explicitly prohibited:
- **Density Layouts**: `var(--wp--preset--spacing--30)` (1.5rem baseline), `var(--wp--preset--spacing--40)`, `var(--wp--preset--spacing--50)`, `var(--wp--preset--spacing--60)`

### Color & Styling Tokens
Variations manipulating backgrounds, borders, or text color MUST consume the pipeline-generated utility classes or presets:
- **Classes**: `has-bs-primary-background-color`, `has-body-gradient-background`, `has-bs-success-color`
- **Shadows**: `var(--wp--preset--shadow--lg)`, `var(--wp--preset--shadow--sm)`
- **Border Radius**: `--wp--custom--radius--md`, `--wp--custom--radius--lg`
