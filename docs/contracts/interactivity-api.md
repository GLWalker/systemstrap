# Contract: Interactivity API Architecture

## Vision
Instead of building heavy custom React blocks or enqueuing large `@wordpress/components` on the frontend, SystemStrap will utilize the **WordPress Interactivity API** natively for interactive frontend components (Modals, Offcanvas menus, Tabs, etc.).

## Implementation Strategy
1. **Block Variations (Editor Experience):**
   - We will register JS block variations for standard core blocks (e.g., a "Modal Trigger" variation of the core/button block).
   - These variations will simply attach a specific trigger class name (like `.is-modal-trigger` or `.is-offcanvas-content`).
   - This keeps the block editor clean and native.

2. **Render Filters (Backend Processing):**
   - We will hook into the `render_block` filter in PHP.
   - When the filter detects a block with our trigger class names, we will use `WP_HTML_Tag_Processor` to safely inject the necessary `data-wp-interactive`, `data-wp-on--click`, and `data-wp-bind--class` attributes.
   - This prevents the need for any regex hacking and outputs clean HTML.

3. **Interactivity Store (Frontend Logic):**
   - We will register the state via `wp_interactivity_state()` on the server side.
   - We will write tiny JavaScript modules (using the `@wordpress/interactivity` store) to handle the click and toggle events on the frontend.

## Roadmap & Prioritization
> [!IMPORTANT]
> **Priority Directive:** We will NOT build these components until the foundational theme architecture is completely migrated.

**Action Plan:**
1. Complete migration of base theme files, patterns, and block variations from the old SystemPress theme to SystemStrap.
2. Establish mapping of standard variables and colors.
3. Once the core patterns and layouts are stable, convert any legacy Bootstrap-reliant interactive components (modals, dropdowns, offcanvas) to this Interactivity API model **one at a time**.
