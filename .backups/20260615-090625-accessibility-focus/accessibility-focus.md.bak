# SystemStrap Contract: Accessibility & Focus Rings

## Core Philosophy
In SystemStrap, we do not compromise on accessibility, nor do we compromise on visual cleanliness for mouse/touch users. All interactive elements must implement accessible focus states that trigger intelligently.

## 1. The `:focus-visible` Standard
**NEVER** use the generic `:focus` pseudo-class for focus rings.
**ALWAYS** use `:focus-visible`.

- **Why?** `:focus-visible` allows the browser to differentiate between a mouse click and keyboard navigation. Mouse clicks will not trigger the visual ring (keeping the design clean), but keyboard tabbing will (ensuring strict accessibility compliance).

## 2. The Focus Ring Implementation
When applying a focus ring, use the theme's native variables to create a consistent, glowing halo via `box-shadow`. Do not rely purely on `outline`.

### Standard Implementation:
```css
.interactive-element:focus-visible {
    outline: none; /* Disable default browser outline */
    box-shadow: 0 0 0 var(--wp--custom--focus-ring-width) var(--wp--custom--focus-ring-color);
    z-index: 2;
    position: relative;
}
```

### Complex Elements (e.g., Accordions, Custom Inputs)
If the element also needs a solid inner border change upon focus (without causing layout shifts), use a compound `box-shadow`:
```css
.complex-element:focus-visible {
    outline: none;
    box-shadow: 
        inset 0 0 0 1px var(--wp--preset--color--primary), /* Inner solid border */
        0 0 0 var(--wp--custom--focus-ring-width) var(--wp--custom--focus-ring-color); /* Outer accessible halo */
}
```

## 3. Targeted Focus (No Bloated Wrappers)
Focus rings must **ONLY** wrap the actual interactive click target.
- **Example:** For a `<details>` (accordion) block, apply the focus ring to the `<summary>` element, NOT the outer `<details>` container.
- **Why?** Applying focus to the wrapper means the entire block lights up if a user clicks or tabs into the inner content area, which is visually jarring and incorrect context.
