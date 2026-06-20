# Contract: Semantic Rendering and Accessibility Layer

## Classification

This file is a CONTRACT.

## Contract Version

Current Version: 1.1

Last Updated: 2026-06-15

## Change Log

### 1.1

Addressed architectural review: stripped absolute paths to support git/symlinks, clarified class token matching for disabled elements, tightened breadcrumb node terminology, explicitly stated site title semantic modification, and appended regression validation checklist.

### 1.0

Initial semantic rendering contract.

## Purpose

SystemStrap MUST treat semantic HTML, assistive technology support, machine-readable content, and structured data as part of theme runtime behavior.

SystemStrap MUST NOT rely on default WordPress output alone when the theme has already established a custom render layer for the same surface.

SystemStrap MUST preserve these goals across all theme changes:

- Full keyboard-usable and screen-reader-readable interactive output.
- Native HTML5 landmarks and element choice wherever the theme controls output.
- Machine-readable content relationships through schema.org attributes, microformat classes already present in theme output, and explicit content labeling.
- Safe parsing and safe output mutation when modifying rendered blocks or remote content.

## Principles

- Prefer native HTML semantics.
- Prefer enhancement over replacement unless the theme already owns the full render surface.
- Prefer core renderers when they can be safely extended without losing theme requirements.
- Prefer progressive enhancement for interactive behavior.
- Prefer machine readability without sacrificing readable front-end output.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

The semantic rendering layer is currently implemented through these runtime files:

- `functions.php`
- `inc/block-filters.php`
- `inc/block-replacements.php`
- `inc/dialog-renderer.php`
- `assets/js/dialog-init.js`
- `assets/js/ajax-search.js`

The class and pattern signals consumed by that layer are defined in these content sources:

- `patterns/content-router.php`
- `patterns/content-single.php`
- `patterns/content-page.php`
- `patterns/content-buddypress.php`
- `patterns/content-buddypress-activity.php`
- `patterns/content-buddypress-members.php`
- `patterns/content-buddypress-groups.php`
- `patterns/content-buddypress-blogs.php`
- `patterns/posts-meta.php`
- `patterns/query-posts-grid.php`
- `patterns/query-media-object.php`
- `patterns/modal-search-full.php`
- `patterns/header.php`
- `patterns/header-alt.php`
- `parts/*.html`

## Enforcement Boundary

Any change to the files listed above MUST be reviewed against this contract.

Any new semantic, schema, ARIA, landmark, dialog, list, title, search-result, or machine-readable render behavior MUST be added to this contract in the same change set that introduces it.

Any removal of an existing interception, replacement, or attribute injection listed in this contract MUST be treated as a behavior change and documented here in the same change set.

## Approved Modification Mechanisms

SystemStrap currently uses these mechanisms to alter WordPress output.

### 1. Core block render filters

SystemStrap MAY intercept rendered core blocks with `render_block_*` filters when the theme needs to append or replace semantics without rebuilding the entire block.

SystemStrap currently does this in `inc/block-filters.php`.

### 2. Core block server-side replacement callbacks

SystemStrap MAY unregister a core block server render action and register a replacement callback when the entire rendered structure or schema layer must be controlled by the theme.

SystemStrap currently does this in `inc/block-replacements.php`.

### 3. Generic `render_block` interception

SystemStrap MAY use the generic `render_block` filter only when detection depends on block type plus custom class or custom block attributes that are not covered by a dedicated block-specific filter.

SystemStrap currently uses this for alert, toolbar, button-group, breadcrumb, disabled-button, and widget-badge interception.

### 4. `WP_HTML_Tag_Processor`

When mutating rendered HTML attributes, SystemStrap MUST prefer `WP_HTML_Tag_Processor`.

String replacement MUST be treated as legacy fallback behavior and MUST remain limited to cases already present in runtime code unless the mutation cannot be expressed with the processor.

### 5. Pattern and class signal detection

SystemStrap uses class names and block attributes embedded in patterns and parts as runtime detection signals.

When a filter or replacement depends on a class name, that class name is part of the theme contract and MUST NOT be renamed casually.

## Detection and Interception Rules

SystemStrap currently detects semantic work through these signals.

### Block name detection

SystemStrap checks exact block names for these surfaces:

- `core/separator`
- `core/template-part`
- `core/group`
- `core/post-excerpt`
- `core/post-content`
- `core/post-featured-image`
- `core/comment-content`
- `core/post-comments-form`
- `core/navigation`
- `core/search`
- `core/categories`
- `core/archives`
- `core/site-logo`
- `core/social-links`
- `core/quote`
- `core/pullquote`
- `core/gallery`
- `core/tag-cloud`
- `core/post-date`
- `core/post-terms`
- `core/video`
- `core/audio`
- `bp/dynamic-members`
- `bp/dynamic-groups`
- `core/button`
- `core/buttons`
- `core/icon`
- `icon-block/icon`

### Class-name detection

SystemStrap currently uses the following class signals as semantic triggers:

- `strap-action-hook`
- `site-header`
- `site-main`
- `site-footer`
- `secondary-content`
- `tertiary-content`
- `hentry`
- `entry-summary`
- `entry-content`
- `entry-meta`
- `post-navigation`
- `breadcrumbs`
- `alert`
- `toolbar`
- `button-group`
- `buddypress-pattern`
- `buddypress-activity-pattern`
- `buddypress-members-pattern`
- `buddypress-groups-pattern`
- `buddypress-blogs-pattern`
- `strap-ajax-search-wrapper`

### Block attribute detection

SystemStrap currently uses these non-core theme attributes as interception signals:

- `systemDialogAction`
- `systemDialogPattern`
- `systemDialogPosition`

### Route-derived class detection

`patterns/content-router.php` generates `site-main main-{slug}` or `site-main main-page`.

`inc/block-filters.php` depends on those class names to assign page-type semantics to template-part output.

## Current Semantic and Machine-Readable Layer

### Theme support contract

`functions.php` registers `custom-logo` support with `unlink-homepage-logo`.

This setting is part of the semantic logo contract because the fallback logo renderer changes homepage behavior from linked logo markup to current-page static markup.

### Action-hook separator contract

`inc/block-filters.php` converts a `core/separator` block into action output only when the full class name is exactly:

- `strap-action-hook <hook-name>`

No additional classes are allowed on an action-hook separator if it is expected to render hook output instead of the `<hr>`.

If the class string does not exactly match that format, the separator MUST remain a separator.

This is an intentional replacement contract, not a parsing limitation.

### Template-part landmark contract

`render_block_core/template-part` is intercepted in `strap_structured_data_parts_block_filter()`.

The first rendered tag of the template part receives semantics derived from class name:

- `site-header`
    - MUST receive `id="masthead"`.
    - MUST receive `role="banner"`.
    - MUST receive `aria-label="Site header"`.
    - MUST receive `itemscope`.
    - MUST receive `itemtype="https://schema.org/WPHeader"`.
- `site-main`
    - MUST receive `role="main"`.
    - MUST receive `aria-label="Main content"`.
    - MUST receive `itemscope`.
    - MUST receive page-type `itemtype`.
    - `main-search` maps to `https://schema.org/SearchResultsPage`.
    - `main-index`, `main-single`, and `main-archive` map to `https://schema.org/Blog`.
    - all other `site-main` surfaces map to `https://schema.org/WebPage`.
- `site-footer`
    - MUST receive `id="colophon"`.
    - MUST receive `role="contentinfo"`.
    - MUST receive `aria-label="Site footer"`.
    - MUST receive `itemscope`.
    - MUST receive `itemtype="https://schema.org/WPFooter"`.
- `secondary-content`
    - MUST receive `role="complementary"`.
    - MUST receive `aria-label="Secondary content"`.
- `tertiary-content`
    - MUST receive `role="complementary"`.
    - MUST receive `aria-label="Tertiary content"`.

### Content wrapper contract

`render_block_core/group` is intercepted to add wrapper-level semantics to theme-owned class patterns.

- `hentry`
    - the first tag MUST receive `itemscope`.
    - the first tag MUST receive `itemtype="https://schema.org/BlogPosting"` when the queried singular object is a standard post.
    - the first tag MUST receive `itemtype="https://schema.org/CreativeWork"` for non-post singular content.
    - this inner content-object typing MUST remain distinct from the outer `site-main` page-surface typing.
    - SystemStrap MUST NOT flatten both the outer page wrapper and the inner `hentry` wrapper to the same generic `WebPage` type merely for symmetry.
- `entry-meta`
    - the first tag MUST receive `aria-label="Entry meta"`.
- `post-navigation`
    - the first tag MUST receive `aria-label="Post navigation"`.
- `comments-header`
    - the wrapper MUST collapse entirely when the nested comments title output is empty.

### Excerpt and content contract

- `render_block_core/post-excerpt`
    - when the rendered block carries `entry-summary`, the first tag MUST receive `itemprop="description"`.
- `render_block_core/post-content`
    - when the rendered block carries `entry-content`, the first tag MUST receive `itemprop="articleBody"`.

### Navigation contract

`render_block_core/navigation` is intercepted in `strap_navigation_content_block_filter()`.

- the root `<nav>` MUST receive `itemscope`.
- the root `<nav>` MUST receive `itemtype="https://schema.org/SiteNavigationElement"`.
- the primary navigation container `<ul class="wp-block-navigation__container">` MUST receive `role="list"`.
- every `<a>` in the rendered navigation block MUST receive `itemprop="url"`.

SystemStrap MUST NOT reintroduce `role="menu"` or `role="menuitem"` for standard site navigation output.

### Categories and archives contract

`render_block_core/categories` and `render_block_core/archives` are intercepted.

- the rendered `<ul>` MUST receive `role="list"`.
- categories MUST receive `aria-label="Categories"`.
- archives MUST receive `aria-label="Archives"`.
- SystemStrap MUST NOT attach generic `itemprop="url"` metadata to categories or archives widget links when they are not nested inside their own scoped item.

### Widget badge replacement contract

`strap_render_block_widget_badges()` converts the native count text pattern `(123)` inside rendered categories and archives output into:

- `<span class="system-badge">123</span>`

This is a runtime output replacement, not an editor-only style rule.

This replacement MUST apply only to list-style rendered output.

SystemStrap MUST NOT inject HTML badge elements into `<select>` or `<option>`-based dropdown output.

### Alert, toolbar, button-group, breadcrumb, and disabled-button contract

SystemStrap uses generic `render_block` interception for these surfaces.

- `core/group` with `alert`
    - the first rendered tag MUST receive `role="alert"`.
- `core/group` with `toolbar`
    - the first rendered tag MUST receive `role="toolbar"`.
    - the first rendered tag MUST receive `aria-label="Toolbar"`.
- `core/buttons` with `button-group`
    - the first rendered tag MUST receive `role="group"`.
    - the first rendered tag MUST receive `aria-label="Button group"`.
- `core/group` with `breadcrumbs`
    - if the first rendered element is not a `NAV` element, the first rendered element MUST receive `role="navigation"`.
    - the first rendered element MUST receive `aria-label="Breadcrumbs"`.
- `core/button`
    - any rendered `A` or `BUTTON` with a `disabled` attribute or containing the standalone class token `disabled` MUST receive `aria-disabled="true"`.
    - the same element MUST receive `tabindex="-1"`.

SystemStrap MUST NOT add `role="button"` to a native anchor or button merely because it looks like a button.

### Site title and tagline filter contract

`inc/block-filters.php` intercepts `render_block_core/site-title` and `render_block_core/site-tagline` after WordPress core has already produced the base markup.

- the theme MUST preserve the core renderer for both blocks.
- semantic augmentation MUST occur after render through `strap_add_schema_to_title_markup()` and `strap_add_schema_to_tagline_markup()`.
- SystemStrap MUST NOT reintroduce full server replacement for these two blocks unless a core change makes post-render mutation impossible.

- `core/site-title`
    - the outer heading or paragraph tag MUST receive `itemprop="headline"`.
    - the outer heading or paragraph tag MUST receive the `site-title` class.
    - the inner anchor, when present, MUST receive `itemprop="url"`.
- `core/site-tagline`
    - the outer tag MUST receive `itemprop="description"`.
    - the outer tag MUST receive the `site-description` class.

### Post title filter contract

`inc/block-filters.php` intercepts `render_block_core/post-title` after WordPress core has already produced the base markup.

- the theme MUST preserve the core renderer for `core/post-title`.
- semantic augmentation MUST occur after render through `strap_add_schema_to_title_markup()`.
- SystemStrap MUST NOT reintroduce title hook injection into this block unless a new documented runtime requirement depends on it.
- the outer heading or paragraph tag MUST receive `itemprop="headline"`.
- the outer heading or paragraph tag MUST receive the `entry-title` class.
- the inner anchor, when present, MUST receive `itemprop="url"`.

### Post date filter contract

`inc/block-filters.php` intercepts `render_block_core/post-date` after WordPress core has already produced the base markup.

- the theme MUST preserve the core renderer for `core/post-date`.
- semantic augmentation MUST occur after render.
- the wrapper MUST retain the core block wrapper and MUST additionally receive the `posted-on` class.
- the rendered `<time>` MUST carry either:
    - `itemprop="datePublished"`, or
    - `itemprop="dateModified"`
- when the block is rendering modified date and the modified date is later than the published date:
    - the visible `<time>` MUST represent the modified date.
    - a hidden published `<time>` with `itemprop="datePublished"` MUST remain in output.
- when `isLink` is enabled:
    - the visible date text MUST be linked to the post permalink.
    - that link MUST receive `itemprop="url"`.

### Post author filter contract

`inc/block-filters.php` intercepts `render_block_core/post-author-name` after WordPress core has already produced the base markup.

- the theme MUST preserve the core renderer for `core/post-author-name`.
- semantic augmentation MUST occur after render.
- the filter MUST preserve Core support for both post-context authors and author-archive fallback context.

- the wrapper MUST include `author vcard`.
- the wrapper MUST receive `itemprop="author"`.
- the wrapper MUST receive `itemscope`.
- the wrapper MUST receive `itemtype="https://schema.org/Person"`.
- the author name element MUST receive `itemprop="name"`.
- if linked:
    - the author link MUST receive `itemprop="url"`.
    - the author link MUST retain `rel="author"`.

### Comment author and comment date filter contract

`inc/block-filters.php` intercepts `render_block_core/comment-author-name` and `render_block_core/comment-date` after WordPress core has already produced the base markup.

- the theme MUST preserve the core renderer for both blocks.
- semantic augmentation MUST occur after render.
- comment author post-processing MUST preserve the pending-comment safety rule by reducing disallowed linked markup through `wp_kses()` when pending links are not allowed.

- comment author wrapper
    - MUST include `comment-author vcard`.
    - MUST receive `itemprop="author"`.
    - MUST receive `itemscope`.
    - MUST receive `itemtype="https://schema.org/Person"`.
- comment author name
    - MUST be represented inside `<cite class="fn">`.
    - MUST receive `itemprop="name"` on the text-bearing span.
    - if linked, the link MUST receive `itemprop="url"`.
    - if the comment is unapproved and pending links are not allowed, the output MUST be reduced to the allowed safe subset enforced by `wp_kses()`.
- comment date wrapper
    - MUST include `entry-meta comment-metadata`.
- comment date `<time>`
    - MUST receive `itemprop="datePublished"`.
    - MUST receive an ISO `datetime`.
    - if linked, the link MUST receive `itemprop="url"`.

### Latest posts replacement contract

`core/latest-posts` is server-replaced with custom semantic list output.

- replacement remains justified because the block must emit a complete `ItemList` with explicit `ListItem` position metadata for each entry.
- replacement remains justified because each item may need to compose multiple semantic sub-surfaces at once: article type selection, featured image `ImageObject`, author `Person`, date, excerpt/full body, and read-more handling.
- replacement remains justified because protected-content and trimmed-excerpt branches must remain machine-readable while preserving accessible read-more text behavior.

- the outer wrapper MUST be a `<ul>`.
- the `<ul>` MUST receive `role="list"`.
- the `<ul>` MUST receive `itemscope`.
- the `<ul>` MUST receive `itemtype="https://schema.org/ItemList"`.
- the `<ul>` MUST receive `itemListOrder="https://schema.org/ItemListOrderAscending"`.
- each post item MUST be a `ListItem`.
- each post item MUST emit a `position` meta value.
- each post item MUST wrap post content in an `article` scoped as:
    - `https://schema.org/BlogPosting` for posts.
    - `https://schema.org/CreativeWork` for non-post post types.
- each item MUST emit:
    - `mainEntityOfPage`
    - `headline`
- featured image, when rendered, MUST be represented as `ImageObject`.
- author, when rendered, MUST be represented as `Person`.
- date, when rendered, MUST use `itemprop="datePublished"`.
- excerpt mode, when rendered, MUST use `itemprop="description"`.
- full-post mode, when rendered, MUST use `itemprop="articleBody"`.
- the read-more augmentation inside trimmed excerpts MUST preserve the screen-reader-text post title suffix.

SystemStrap MUST NOT reintroduce menu semantics for latest-posts output.

### Post template replacement contract

`core/post-template` is server-replaced with custom list semantics.

- replacement remains justified because query loop output must be promoted from generic loop markup to an `ItemList` with deterministic `ListItem` position metadata.
- replacement remains justified because each loop item must wrap the rendered inner blocks inside an article shell whose schema type varies by post type.
- replacement remains justified because the current implementation depends on early `render_block_context` injection for each loop item before nested blocks render.

- the outer wrapper MUST be a `<ul>`.
- the `<ul>` MUST receive `role="list"`.
- the `<ul>` MUST receive `itemscope`.
- the `<ul>` MUST receive `itemtype="https://schema.org/ItemList"`.
- the `<ul>` MUST receive `itemListOrder="https://schema.org/ItemListOrderAscending"`.
- each item MUST be a `ListItem` with position metadata.
- each item MUST wrap the rendered post block content inside an `article`.
- the `article` MUST be scoped as:
    - `https://schema.org/BlogPosting` for posts.
    - `https://schema.org/CreativeWork` otherwise.
- each `article` MUST emit:
    - `headline`
    - `mainEntityOfPage`
- block context injection for each loop item MUST continue to occur through the early `render_block_context` filter in `strap_render_block_core_post_template()`.

SystemStrap MUST NOT represent query loop items as menu items.

### Latest comments replacement contract

`core/latest-comments` is server-replaced with semantic list and comment markup.

- replacement remains justified because the block must emit a full `ItemList` with explicit comment positions rather than a flat visual list only.
- replacement remains justified because each item composes nested `Comment` and `Person` scopes together with optional avatar, date, excerpt, and commented-post link branches.
- replacement remains justified because the rendered comment excerpt, full-content, author/date, and commented-post-link surfaces must stay machine-readable even when those optional pieces are toggled independently.
- replacement remains justified because the current implementation preserves latest-comments behavior branches that are awkward to reconstruct safely after render, including `displayContent`, empty-state handling, author URL fallback, and comment-link targeting.

- the outer wrapper MUST be a `<ul>`.
- the `<ul>` MUST receive `role="list"`.
- the `<ul>` MUST receive `itemscope`.
- the `<ul>` MUST receive `itemtype="https://schema.org/ItemList"`.
- each comment item MUST be a `ListItem`.
- each comment item MUST emit a `position`.
- each comment body MUST be wrapped in an `article` scoped as `https://schema.org/Comment`.
- comment author MUST be scoped as `Person`.
- comment date, when shown, MUST use `itemprop="dateCreated"`.
- excerpt text, when shown, MUST use `itemprop="text"`.
- full comment text, when shown, MUST use `itemprop="text"`.

SystemStrap MUST NOT reintroduce menu semantics for latest-comments output.

### Site logo contract

`render_block_core/site-logo` is intercepted in `strap_site_logo_block_filter()`.

If WordPress core returns empty site-logo output, SystemStrap MUST render a bundled fallback logo asset supplied by the theme.

The current implementation uses:

- `assets/media/SystemStrap-Logo-90.png`

The fallback behavior MUST follow these rules:

- if `isLink` is false:
    - the fallback output MUST remain an unlinked image inside `.wp-block-site-logo`.
- if `isLink` is true and the current page is not the unlink-homepage case:
    - the fallback output MUST use `<a class="custom-logo-link" rel="home">`.
- if the current page is the front page and the theme supports `unlink-homepage-logo`:
    - the fallback output MUST use `<span class="custom-logo-link" aria-current="page">`.

The schema layer applied afterward MUST follow these rules:

- the rendered `A` or `SPAN` wrapper MUST receive:
    - `itemscope`
    - `itemtype="https://schema.org/ImageObject"`
- the rendered `IMG` MUST receive `itemprop="logo"`.

### Social links contract

`render_block_core/social-links` is intercepted.

- the outer `<ul>` MUST receive `role="list"`.
- if no accessible label is already present, the outer `<ul>` MUST receive `aria-label="Social links"`.

### Search, comment content, comments form, featured image, tag cloud, quote, gallery, post terms, video, and audio contract

SystemStrap applies additional processor-based mutation to these blocks in `inc/block-filters.php`.

- `core/search`
    - the rendered root `<form>` MUST retain `role="search"` from core.
    - if no accessible name is already present on the rendered form, it MUST receive `aria-label`.
    - the label source MUST be the block `label` attribute when available.
    - otherwise the fallback accessible name MUST be `Search`.
- `core/comment-content`
    - the rendered wrapper MUST receive `itemprop="text"`.
- `core/post-comments-form`
    - the outer rendered wrapper MUST receive `aria-label="Comment form"`.
    - the native inner `<form>`, when not already named, MUST receive `aria-label="Comment submission form"`.
- `core/post-featured-image`
    - the rendered root `<figure>` MUST receive `itemscope`.
    - the rendered root `<figure>` MUST receive `itemtype="https://schema.org/ImageObject"`.
    - the rendered root `<figure>` MUST receive `itemprop="image"`.
    - if the image is linked, the rendered anchor MUST receive `itemprop="url"`.
    - the rendered `IMG` MUST receive `itemprop="contentUrl"`.
- `core/tag-cloud`
    - the rendered root paragraph MUST receive `aria-label="Tag cloud"`.
    - each rendered tag link MUST receive `itemprop="keywords"`.
- `core/quote` and `core/pullquote`
    - the rendered `<blockquote>` MUST receive `itemscope`.
    - the rendered `<blockquote>` MUST receive `itemtype="https://schema.org/Quotation"`.
- `core/gallery`
    - the rendered root `<figure>` MUST receive `itemscope`.
    - the rendered root `<figure>` MUST receive `itemtype="https://schema.org/ImageGallery"`.
- `core/post-terms`
    - if rendered as `UL` or `OL`, the list MUST receive `role="list"`.
    - the same list MUST receive `aria-label`.
    - the default label MUST be `Post taxonomy`.
    - if a `term` attribute exists, the label MUST become `Post {term}` after `sanitize_text_field()` processing.
    - each rendered `LI` MUST receive `itemprop="itemListElement"`.
    - for `post_tag`, each rendered term link MUST receive `itemprop="keywords"`.
    - for `category`, each rendered term link MUST receive `itemprop="articleSection"`.
    - for other term types, SystemStrap MUST NOT attach generic `itemprop="url"` metadata unless that term output is later wrapped in its own scoped item.
- `core/video`
    - the rendered root `<figure>` MUST receive `itemscope`.
    - the rendered root `<figure>` MUST receive `itemtype="https://schema.org/VideoObject"`.
- `core/audio`
    - the rendered root `<figure>` MUST receive `itemscope`.
    - the rendered root `<figure>` MUST receive `itemtype="https://schema.org/AudioObject"`.

### BuddyPress pattern wrapper contract

`render_block_core/group` is intercepted in `strap_buddypress_semantic_block_filter()`.

The first rendered tag for BuddyPress pattern wrappers MUST be labeled from class name:

- `buddypress-activity-pattern`
    - MUST receive `role="feed"`.
    - MUST receive `aria-label="Activity feed"`.
- `buddypress-members-pattern`
    - MUST receive `role="region"`.
    - MUST receive `aria-label="Members directory"`.
- `buddypress-groups-pattern`
    - MUST receive `role="region"`.
    - MUST receive `aria-label="Groups directory"`.
- `buddypress-blogs-pattern`
    - MUST receive `role="region"`.
    - MUST receive `aria-label="Sites directory"`.

### BuddyPress dynamic directory block contract

`render_block_bp/dynamic-members` and `render_block_bp/dynamic-groups` are intercepted in `inc/block-filters.php`.

- `bp/dynamic-members`
    - the outer rendered block wrapper MUST receive `role="region"`.
    - the outer rendered block wrapper MUST receive `aria-label="Members directory"`.
    - the `.item-options` wrapper MUST receive `aria-label="Member sorting options"`.
    - the `.item-list` element MUST receive `role="list"`.
    - the `.item-list` element MUST receive `aria-label="Members"`.
- `bp/dynamic-groups`
    - the outer rendered block wrapper MUST receive `role="region"`.
    - the outer rendered block wrapper MUST receive `aria-label="Groups directory"`.
    - the `.item-options` wrapper MUST receive `aria-label="Group sorting options"`.
    - the `.item-list` element MUST receive `role="list"`.
    - the `.item-list` element MUST receive `aria-label="Groups"`.

The theme contract for these BuddyPress blocks currently governs wrapper, control-group, and list semantics only.

Item-level directory markup that is injected by BuddyPress templates and client-side block scripts remains plugin-managed unless SystemStrap explicitly introduces a theme-owned interception layer for those item templates in a later change set.

### Dialog trigger and dialog shell contract

`inc/dialog-renderer.php` defines the dialog interception layer.

Detection rules:

- `render_block_core/icon`
- `render_block_icon-block/icon`
- `render_block_core/button`

These blocks are intercepted only when block attributes include:

- `systemDialogAction`
- `systemDialogPattern`

Trigger mutation rules:

- the first rendered tag MUST receive `data-strap-dialog-target`.
- the first rendered tag MUST receive `data-strap-dialog-label-closed`.
- the first rendered tag MUST receive `data-strap-dialog-label-open`.
- the first rendered tag MUST receive `aria-controls`.
- the first rendered tag MUST receive `aria-expanded="false"` before activation.
- the first rendered tag MUST receive `aria-haspopup="dialog"`.
- the first rendered tag MUST receive a stateful `aria-label` derived from the registered block pattern title when available.
- if the first rendered tag is not `A` or `BUTTON`:
    - it MUST receive `role="button"`.
    - it MUST receive `tabindex="0"`.
- for intercepted `core/icon` and `icon-block/icon` dialog triggers:
    - the single rendered root wrapper MUST be upgraded to a native `<button type="button">` before trigger attributes are applied.
    - those upgraded icon triggers MUST NOT retain `role="button"` or `tabindex="0"`.
- icon blocks that do not opt into dialog behavior MUST remain core-rendered and MUST NOT be converted into buttons by the dialog runtime.
- if the intercepted trigger contains inline SVG:
    - each rendered `svg` descendant MUST receive `aria-hidden="true"`.
    - each rendered `svg` descendant MUST receive `focusable="false"`.

Dialog shell rules:

- intercepted patterns MUST be rendered once into `self::$dialogs`.
- dialogs MUST be injected into the rendered footer template-part when the current `core/template-part` block is identified as `site-footer` or `slug="footer"`.
- `wp_footer` MAY print the queued dialogs only as a fallback when no eligible footer template-part consumed them.
- each dialog shell MUST use a native `<dialog>` element.
- each dialog MUST receive:
    - a unique `id`
    - `aria-modal="true"`
    - `aria-label`
- the inner content wrapper MUST receive `role="document"`.
- the close control MUST remain a real `<button type="button">`.
- the close control MUST receive `aria-label="Close dialog"`.

### Dialog interaction script contract

`assets/js/dialog-init.js` is part of the semantic layer because it preserves actual accessibility of the injected dialog triggers.

- clicks on `[data-strap-dialog-target]` MUST open the addressed native dialog with `showModal()`.
- `Enter` and `Space` on `[data-strap-dialog-target]` MUST open the addressed native dialog with `showModal()`.
- opening a dialog from a trigger MUST set that trigger’s `aria-expanded` state to `true`.
- closing a dialog MUST restore the originating trigger’s `aria-expanded` state to `false`.
- closing a dialog MUST restore focus to the originating trigger.
- trigger `aria-label` values MUST switch between closed-state and open-state labels supplied by the server-rendered trigger markup.
- backdrop clicks outside the dialog rectangle MUST close the active dialog.

#### Current close selector implementations

The current implementation treats these selectors as dialog close controls:

- `.-close`
- `.close`
- `[data-dismiss="dialog"]`

Elements matching those selectors inside a dialog MUST close the dialog under the current implementation.

### AJAX search result parsing contract

`assets/js/ajax-search.js` is part of the machine-readable and safe-output layer for the theme’s custom live search surface.

Detection rules:

- the script activates only inside `.strap-ajax-search-wrapper`.
- the script targets the input inside `.strap-ajax-search-form`.

Parsing and safety rules:

- post titles from the REST API MUST be converted to plain text before insertion.
- post excerpts from the REST API MUST be converted to plain text before insertion.
- post links from the REST API MUST be accepted only when they resolve to `http:` or `https:`.
- result markup MUST be built with DOM APIs, not by concatenating untrusted API strings into `innerHTML`.

Output rules:

- result headings MUST be real heading elements.
- result dates MUST be rendered as separate text nodes.
- result excerpts MUST be rendered as separate paragraph elements.
- pagination controls MUST reflect disabled state through script behavior.

## Pattern and Part Coupling

The following class-bearing content files are coupled to the semantic layer and MUST remain in sync with the filters and replacements that consume them:

- `patterns/content-router.php`
    - source of `site-main main-*`
- `patterns/content-single.php`
    - source of `hentry`, `entry-content`, `entry-meta`, `post-navigation`
- `patterns/content-page.php`
    - source of `hentry`, `entry-content`
- `patterns/content-buddypress.php`
    - source of `hentry buddypress-pattern`
- `patterns/content-buddypress-activity.php`
    - source of `buddypress-activity-pattern`
- `patterns/content-buddypress-members.php`
    - source of `buddypress-members-pattern`
- `patterns/content-buddypress-groups.php`
    - source of `buddypress-groups-pattern`
- `patterns/content-buddypress-blogs.php`
    - source of `buddypress-blogs-pattern`
- `patterns/posts-meta.php`
    - source of `entry-meta`
- `patterns/query-posts-grid.php`
    - source of `entry-summary`
- `patterns/query-media-object.php`
    - source of `entry-summary`
- `patterns/modal-search-full.php`
    - source of `strap-ajax-search-wrapper`
- `parts/*.html`
    - source of theme hook separators using `strap-action-hook`

## Prohibited Regressions

The theme MUST NOT introduce any of the following regressions into covered surfaces:

- replacing `WP_HTML_Tag_Processor` mutations with regex against rendered markup when processor mutation is possible
- reintroducing `role="menu"` or `role="menuitem"` for standard navigation, query lists, or comment lists
- stripping `aria-label` from covered landmarks and control groups
- renaming class-name triggers without updating the consuming filter or this contract
- bypassing the fallback logo behavior while the bundled logo asset remains part of the theme
- replacing DOM-based AJAX search result construction with direct unsanitized HTML injection
- replacing the native `<dialog>` shell with non-dialog generic containers without updating this contract

## Expansion Rule

New semantic work MUST extend this contract by adding:

- detection source
- interception mechanism
- affected block or runtime surface
- exact attributes or structure required
- coupled patterns, parts, or scripts if applicable

## Regression Validation

Changes affecting this contract SHOULD be manually verified against:

- Keyboard navigation
- Screen reader landmark discovery
- Structured data output
- Pattern detection signals
- Dialog interaction surfaces
- AJAX search rendering

## Current Expansion Queue

The following surface remains a later expansion target and is not part of the current core and BuddyPress completion pass:

- WooCommerce render surfaces when introduced into the theme’s semantic layer
