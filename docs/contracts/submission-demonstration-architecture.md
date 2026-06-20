# Contract: Submission Demonstration Architecture

## Classification

This file is a TEMPORARY CONTRACT.

## Contract Version

Current Version: 1.0

Last Updated: 2026-06-15

## Change Log

### 1.0

Initial temporary contract for the WordPress.org submission demonstration architecture.

## Purpose

This contract governs the architecture, philosophy, scope boundaries, and implementation targets for the SystemStrap WordPress.org submission demonstration environment.

Unlike the permanent runtime contracts, this document exists to guide construction of the submission experience and MAY be retired, reduced, or folded into broader project documentation after the demonstration architecture is fully implemented.

Its purpose is to ensure the WordPress.org preview communicates what SystemStrap is:

- a practical, usable block theme
- a developer-oriented framework
- a demonstration of how native blocks can become dramatically different experiences through composition

## Principles

- The homepage MUST function as a legitimate website.
- The homepage MUST demonstrate practical everyday use.
- The homepage MUST showcase the flexibility of SystemStrap.
- All demonstrations MUST be built using WordPress core blocks and SystemStrap functionality only.
- No demonstration may require WooCommerce, BuddyPress, or third-party plugins.
- Educational value MUST be prioritized over marketing spectacle.
- Users SHOULD leave understanding both what SystemStrap is and how it works.
- The demonstration SHOULD teach composition, not merely present attractive screenshots.

## Requirement Keywords

The terms MUST, MUST NOT, SHOULD, SHOULD NOT, and MAY in this contract are to be interpreted as described in RFC 2119.

## Source of Truth

This temporary contract currently governs future work that will be implemented through theme-owned content and variation surfaces such as:

- `patterns/*.php`
- `parts/*.html`
- `templates/*.html`
- `theme.json`
- `assets/css/style-variations/*.css`
- `assets/js/variations/*.js`
- `docs/contracts/*.md`

This contract is intentionally broader than the currently implemented demo because the submission demonstration architecture is not yet fully built.

## Enforcement Boundary

Any new submission-demo pattern, template, template part, homepage composition, demonstration tab set, or supporting demo page intended for the WordPress.org showcase MUST be reviewed against this contract.

Any new implementation that materially changes the demonstration philosophy, homepage scope, tab taxonomy, or core-only rule MUST update this contract in the same change set.

## Submission Demonstration Contract

SystemStrap MUST present a WordPress.org demonstration environment that communicates both:

- practical site usability
- unusual compositional flexibility

The demonstration MUST NOT feel like a disconnected sandbox of random block experiments.

The demonstration MUST feel like a coherent website that also reveals the underlying design system.

## Homepage Contract

The homepage is the primary demonstration surface.

The homepage MUST include:

- a standard header
- a standard footer
- primary navigation
- practical page sections
- realistic content presentation
- query-driven or content-like sections where appropriate

The homepage MUST answer this question for the user:

> Would I actually use this theme if I activated it?

The homepage MUST feel trustworthy and usable before it feels clever.

## Primary Demonstration Contract

The homepage MUST include a featured demonstration section titled:

`Default Blocks, Endless Possibilities`

This section is the primary educational reveal.

Its purpose is to communicate:

> Native WordPress blocks, enhanced through SystemStrap composition and variations, can become complete experiences.

This demonstration MUST be embedded directly within the homepage.

Users MUST NOT be required to navigate to another page to understand the theme's core capability story.

## Tabbed Demonstration Contract

The primary demonstration MUST use the System Tabs Accordion variation.

Each tab MUST present a substantially different use case while remaining built entirely from native blocks and SystemStrap behavior.

The current intended tab set is:

- Sports Club
- Local Business
- Media Magazine
- Recipes

If this tab set changes, the replacement set MUST still preserve the same educational diversity of use cases.

## Sports Club Contract

The Sports Club tab MUST demonstrate themes such as:

- team presentation
- player information
- statistics layouts
- membership or participation calls to action
- schedule-oriented or fixture-oriented content

This tab SHOULD feel inspired by real-world club or team presentation rather than generic sports decoration.

## Local Business Contract

The Local Business tab MUST demonstrate themes such as:

- service layouts
- staff or team members
- testimonials
- pricing presentation
- contact-oriented sections

This tab SHOULD feel relevant to practical small business needs.

## Media Magazine Contract

The Media Magazine tab MUST demonstrate themes such as:

- editorial presentation
- featured stories
- category exploration
- strong visual hierarchy
- media-oriented or publishing-oriented layouts

This tab SHOULD feel like a credible publishing experience rather than a novelty page.

## Recipes Contract

The Recipes tab is the educational reveal.

Its purpose is to teach composition.

It MUST communicate:

> Everything above was created using the same ingredients.

The Recipes tab SHOULD explain:

- which core blocks were used
- which style variations were applied
- which patterns were combined
- how different outcomes emerged from identical foundations

The Recipes tab MAY use playful visual metaphor, including food or recipe framing, so long as the content still teaches composition clearly.

## Core-Only Demonstration Rule

All demonstration experiences governed by this contract MUST function without:

- WooCommerce
- BuddyPress
- third-party plugins
- external services

Look-alike or theme-adjacent experiences MAY be created using native blocks and SystemStrap patterns only.

The resulting user takeaway SHOULD be:

> If SystemStrap can do this with core blocks alone, imagine what you can build.

## Supporting Demonstration Pages Contract

Supporting pages MAY exist.

Their purpose is to expand the demonstrations beyond the homepage without replacing the homepage as the primary narrative surface.

Potential supporting pages include:

- Sports Demo
- Local Business Demo
- Media Magazine Demo
- Recipes
- Pattern Showcase

Blank templates MAY be used where a dramatically different experience helps demonstrate flexibility.

Supporting pages supplement the homepage but MUST NOT replace it as the central demonstration surface.

## Philosophy Reinforcement Contract

The homepage SHOULD conclude with a concise philosophy section reinforcing SystemStrap values.

The current intended themes are:

- Native First
- Accessible by Design
- Endless Possibilities

If these exact headings change, the closing philosophy section MUST still reinforce:

- core-block foundation
- accessibility and semantics
- compositional flexibility

## Content and Tone Contract

The submission demonstration MUST balance:

- practical usefulness
- educational clarity
- visual confidence

The demonstration MUST NOT collapse into:

- empty marketing copy
- meaningless spectacle
- disconnected style showcase fragments
- plugin-dependent fantasy features

The theme should impress by teaching, not by hiding how it works.

## Success Criteria

The demonstration succeeds if a user concludes:

> This feels like a practical website.

and:

> I understand how flexible this theme is.

and ultimately:

> Wait, all of this was built with the same theme?

The demonstration SHOULD NOT merely impress.

It SHOULD teach users how to think in SystemStrap.

## Temporary Status Rule

Because this file is a TEMPORARY CONTRACT:

- it MAY be removed after the submission demonstration architecture is fully built and no longer needs a dedicated governing document
- it MAY be collapsed into `docs/START.md` or another permanent contract if the demonstration architecture becomes stable long-term project behavior
- it MUST remain explicit while implementation work is still using it as the architectural target

## Prohibited Regressions

The following regressions are prohibited while this temporary contract is active:

- reducing the homepage to a shallow feature parade with no practical website credibility
- moving the primary demonstration off the homepage
- making the core demonstration depend on WooCommerce, BuddyPress, or third-party plugins
- turning the Recipes tab into pure decoration without composition teaching value
- replacing the educational purpose of the demonstration with unexplained spectacle
- implementing demo pages that contradict the core-only rule
