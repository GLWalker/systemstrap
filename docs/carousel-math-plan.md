# Flawless CSS Math Plan for Carousels

Instead of relying on `autoWidth: true` (which causes clipping and sliding bugs), we will use `autoWidth: false` and `perPage: 3`. 
To prevent cavernous gaps when the container is wider than 3 items, we dynamically constrain the `max-width` of the wrapper to EXACTLY the width of 3 items.

## The Math
- Item Width: `var(--wp--custom--medium-width, 300px)`
- Gaps: 2 gaps of `var(--wp--preset--spacing--20, 1rem)`
- Total Track Width: `calc((300px * 3) + (1rem * 2))`

For outer arrows, we add the button space to the wrapper's max-width:
- Arrow Space: `calc(((var(--carousel-button-size) + var(--carousel-nav-gap)) * 2))`

By setting these `max-width` boundaries and `margin: 0 auto`, the carousel naturally centers, never stretches past 3 items, and `perPage: 3` flawlessly divides the space.
