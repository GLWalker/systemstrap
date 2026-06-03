# SystemStrap: A Modern FSE Foundation

Welcome to **SystemStrap**—a high-performance WordPress Block Theme designed for developers who want a predictable, modular, and scalable foundation for Full Site Editing (FSE).

SystemStrap focuses on a strict **Structural UI Architecture** to ensure visual consistency and robust child-theme compatibility.

## Key Features

### 1. Modular CSS Variation Routing
Instead of a monolithic `style.css`, SystemStrap leverages block-level CSS variations (`assets/css/style-variations/`). The browser only loads the CSS for the specific blocks rendered on the page, resulting in highly scoped and performant code that natively integrates with the Gutenberg canvas via `add_editor_style()`.

### 2. Unified "Structural System UI"
We’ve established a strict global design contract (`main-styles.css`) that unifies cards, accordions, panels, and lists:
* **Frosted Surfaces:** A calibrated `rgba(.1)` base token powers all structural blocks.
* **Calm Interaction Model:** Unified `.15` hover states across all components for a consistent, premium feel.
* **Context-Aware Logic:** Blocks natively detect when they are placed inside colored containers and seamlessly adapt their borders and hovers.

### 3. Bulletproof Child Theme Architecture
SystemStrap is built to ensure parent-child theme stability:
* Core system variables are locked into `main-styles.css` and explicitly enqueued by the parent. 
* Child theme `style.css` files are dynamically detected and automatically routed into both the front-end and the Gutenberg Editor.
* Child themes can safely override colors and typography without accidentally destroying the underlying Structural UI logic.

### 4. Controlled Global Styles
SystemStrap actively intercepts WordPress Global Styles (`wp_enqueue_global_styles`), rewriting background/text contrast classes to ensure predictable rendering and making sure Site Editor CSS always loads last.

***

**SystemStrap provides a predictable, highly-optimized foundation for modern WordPress development.**

## Third-Party Resources & Attributions

SystemStrap is built on the shoulders of open-source giants:

* **Splide.js:** A lightweight, accessible, and flexible slider/carousel script ([MIT License](https://github.com/Splidejs/splide/blob/master/LICENSE)).
* **Placeholder Images:** Structural UI placeholder graphics provided via [BetterPlaceholder](https://betterplaceholder.com/) and Wikimedia Commons ([CC0 Public Domain](https://creativecommons.org/publicdomain/zero/1.0/)).
* **Fonts (Porting Soon):** Utilizing [SIL Open Font Licensed](https://scripts.sil.org/OFL) typography families to ensure compliance and pristine typography.
