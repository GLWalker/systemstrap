# SystemStrap Project Documentation & Agent Directives

> [!IMPORTANT]
> **AGENT ENTRY DIRECTIVE:**
> If you are an AI agent reading this file, this is your primary entry directive for the SystemStrap project.
> Project contracts and feature specifications are stored in `docs/contracts/`.
> **You MUST ALWAYS check the `docs/contracts/` folder before making architectural decisions or starting new features.**
> Semantic render behavior is governed by `docs/contracts/semantic-rendering-contract.md`.
> Any change to block filters, block replacements, dialog rendering, search result parsing, or machine-readable output MUST be checked against that contract in the same change set.
> Carousel runtime behavior, saved carousel markup, thumbnail-versus-medium sizing, and Splide ownership boundaries are governed by `docs/contracts/carousel-runtime.md`.
> Any change to carousel variations, carousel runtime JavaScript, carousel runtime CSS, navigation-position handling, or carousel sizing behavior MUST be checked against that contract in the same change set.
> Theme token, preset, global-style, and editor/frontend design-system behavior is governed by `docs/contracts/theme-json-design-system.md`.
> Any change to `theme.json`, token consumers, global-style extension, or style-variation loading MUST be checked against that contract in the same change set.
> Theme variation creation, scope boundaries, and external theme porting (e.g., Bootswatch/Bootstrap) are governed by `docs/guides/theme-variation-porting-guide.md` and `docs/contracts/variation-architecture.md`.
> Any creation of new variations or architectural changes to variations MUST be checked against these guides.
> System UI styling conventions, documentation maps, and runtime CSS contracts are governed by `docs/guides/system-ui.css`. This file is the authoritative map of all UI classes, CSS variables, and rules used across the theme (including those in `main-styles.css`). It exists to provide a single, scannable reference to prevent overlap, collision, and nesting issues. Any changes to live System UI surfaces MUST be reflected in this map.
> Accessibility standards, interactivity API implementation, starter content, and submission demonstration architecture are governed by `docs/contracts/accessibility-focus.md`, `docs/contracts/interactivity-api.md`, `docs/contracts/starter-content.md`, and `docs/contracts/submission-demonstration-architecture.md` respectively.

## Internal Contributor Reference — Coding Standards

**Purpose:**
Provide a concise, neutral, reusable description of preferred coding practices for JavaScript, PHP, and CSS across the SystemStrap project.

────────────────────────────────────────

### JavaScript Coding Standards

────────────────────────────────────────

1. **Style & Structure**

- Use `var` for variable declarations (consistency, predictable scoping, works cleanly in inline/embedded environments).
- Prefer simple, direct code instead of abstractions, frameworks, or over-engineering.
- Code should run cleanly inline without wrappers unless absolutely required.
- Wrapper patterns (IIFE, modules, classes) only used when logically necessary, not by default.
- Keep function and variable names short, clear, and purpose-driven.

2. **Namespacing**

- Avoid polluting the global scope.
- Shared utilities should be namespaced, e.g.:
    ```javascript
    window.Strap = window.Strap || {}
    Strap.doSomething = function () {}
    ```

3. **Event Handling & DOM**

- Add event listeners directly, not through abstraction layers.
- Prefer direct DOM and attribute manipulation (`element.classList.add(...)`).
- Keep logic plain and performant.

4. **Dependencies**

- Minimal dependencies. SystemStrap aims to be dependency-free where possible.
- Use jQuery only when interacting with WordPress admin or where it is natively required by core.

────────────────────────────────────────

### PHP Coding Standards

────────────────────────────────────────

1. **General Style**

- Concise, readable logic with early returns to reduce nesting.
- Functions and methods should do one clear job.

2. **Structure & Organization**

- Use classes when grouping related functionality or managing encapsulated systems.
- Use standalone functions for simple, utility-oriented logic.

3. **Namespacing / Prefixing**

- All functions/classes MUST be prefixed or namespaced to prevent collisions.
- Use `strap_` for functions and `Strap_` or CamelCase (e.g., `ColorGenerator`) for classes.

4. **Inputs, Outputs, & Compatibility**

- Always sanity-check and sanitize input.
- Escape all output going to HTML.
- Adhere strictly to WordPress standards for capability checks and nonces.

────────────────────────────────────────

### CSS Coding Standards

────────────────────────────────────────

1. **Simplicity**

- Clean, minimal selectors. Avoid excessive nesting and unnecessary specificity.

2. **Utility-Oriented Thinking**

- Prefer short, purposeful classes over long semantic ones.
- Reuse layout utilities (flex, grid, spacing) rather than rewriting each time.

3. **Color Systems & Design**

- Colors should always maintain WCAG-compliant contrast.
- Visual perfection is key — spacing, alignment, sizing must be intentional.

────────────────────────────────────────

### Cross-Language Philosophy

────────────────────────────────────────

1. **Performance first:** Lean, optimized, efficient code.
2. **Structural discipline:** Code should always be predictable and organized.
3. **Cleanliness:** Readable, concise, and free of bloat.
4. **Utility bias:** When something repeats, turn it into a reusable tool.
5. **Professional craftsmanship:** Strong, exact, efficient, and clean.
