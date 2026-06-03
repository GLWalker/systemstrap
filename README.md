# SystemStrap: The Modern FSE Foundation

Welcome to **SystemStrap**—a WordPress Block Theme engineered from the ground up for developers who are tired of monolithic stylesheets, unpredictable cascading overrides, and easily broken child themes. 

SystemStrap isn’t just a theme; it’s a meticulously designed **Structural UI Architecture** built specifically for the modern WordPress Full Site Editing (FSE) ecosystem.

## Why You Need to Use This for Your Next Project

### 1. Zero Bloat: Modular CSS Variation Routing
We threw the 10,000-line `style.css` in the trash. SystemStrap leverages strict, block-level CSS variations (`assets/css/style-variations/`). The browser **only** loads the CSS for the specific blocks rendered on the page. It's incredibly fast, highly scoped, and natively injected right into the Gutenberg canvas via `add_editor_style()`.

### 2. The Unified "Structural System UI" Contract
Say goodbye to disjointed aesthetics. We’ve established a strict global design contract (`main-styles.css`) that unifies every card, accordion, panel, and list in the theme. 
* **Ultra-Subtle Frosted Surfaces:** A highly calibrated `rgba(.1)` base token powers all structural blocks.
* **Calm Interaction Model:** Unified `.15` hover states across all components, eliminating jarring color jumps and guaranteeing an elegant, premium feel.
* **Context-Aware Adaptive Logic:** Blocks natively detect when they are placed inside colored containers and seamlessly adapt their borders and hovers without developer intervention.

### 3. Bulletproof Child Theme Architecture
Most parent themes break the moment a child theme forgets to enqueue a stylesheet. SystemStrap is indestructible. 
* Core system variables are locked into `main-styles.css` and forcefully enqueued by the parent. 
* Child theme `style.css` files are dynamically detected and automatically routed into both the front-end and the Gutenberg Editor exactly where they belong.
* **Result:** Child themes can safely override colors and typography without ever destroying the underlying Structural UI logic.

### 4. Absolute Control Over WordPress Core Output
Tired of WordPress injecting default palettes, duotones, and useless inline styles? SystemStrap actively intercepts and neutralizes WordPress Global Styles (`wp_enqueue_global_styles`), dynamically rewriting background/text contrast classes before they ever hit the DOM, ensuring your Site Editor CSS *always* loads dead last. 

***

**Stop fighting the Block Editor. Start building on a foundation that actually scales.**
