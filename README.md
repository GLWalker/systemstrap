# SystemStrap

SystemStrap is a classic-style dynamic theme system expressed through native WordPress block-theme composition. It combines a coordinated design system, accessible color intelligence, reusable block treatments, semantic rendering, and developer extension points without replacing the Site Editor or locking content into a proprietary builder.

## Design freedom without lock-in

SystemStrap starts native blocks from a dependable baseline. A block can retain its familiar native appearance, use a flat structural treatment, or adopt a more expressive System Panel treatment. Those choices can be combined with the theme's color styles, typography pairings, gradients, layouts, and patterns without changing the content underneath.

The current design system includes:

- 26 color styles, 6 typography styles, and 3 layout styles
- 468 possible top-level design combinations
- 24 reusable block styles
- 69 named PHP action hooks
- 20 color presets, 42 gradients, and 18 duotones in each color style

## Features

- Token-driven color, typography, spacing, layout, border, radius, and shadow roles
- Automatic color shade generation and contrast-aware foreground resolution
- Responsive layouts, patterns, and reusable native-block compositions
- Navigation, button, panel, list, table, form, pagination, tab, and query treatments
- Accessibility-focused landmarks, ARIA definitions, focus treatment, and dialog behavior
- Semantic and machine-readable page rendering
- Conditional WooCommerce and BuddyPress presentation integration
- Editor and frontend styling that preserves native WordPress controls and plugin behavior
- PHP extension points embedded throughout block composition

## Requirements

- WordPress 6.6 or later
- Tested through WordPress 7.1
- PHP 7.4 or later

The authoritative release metadata is maintained in [`style.css`](style.css).

## Installation

1. Download the current release ZIP.
2. In WordPress, go to **Appearance → Themes → Add New**.
3. Upload the ZIP and activate SystemStrap.
4. Open **Appearance → Editor** to customize styles, templates, template parts, and patterns.
5. Open **Appearance → SystemStrap** for optional integration settings when supported plugins are active.

## Native WordPress foundation

SystemStrap uses WordPress blocks, templates, patterns, global styles, and the Site Editor. WooCommerce and BuddyPress are optional; the theme remains functional without either plugin, and their integration controls appear only when the corresponding integration is active.

Theme-specific presentation may change if SystemStrap is deactivated, but the underlying native block content remains portable.

## Supporting development

Sponsorship helps fund continued development, compatibility testing, accessibility work, documentation, child themes, design extensions, and presentation support for additional WordPress plugins.

[Support SystemStrap through GitHub Sponsors](https://github.com/sponsors/GLWalker)

## License

SystemStrap is licensed under the [GNU General Public License v2.0 or later](LICENSE.md).

SystemStrap WordPress Theme, Copyright 2026 SystemStrap contributors.
