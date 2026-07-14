# Carousel CSS Optimization Plan

## The Problems
1. **Clipping on the Right Edge:** The `.splide__slide > *` wrapper has `display: table !important;`. When combined with flexbox and Splide's dynamic calculations, `display: table` can stubbornly refuse to shrink below its intrinsic content width, causing fractional pixel overflow that clips the right edge of images on certain screen sizes.
2. **Awkward Spacing on 2-item Rows:** The `is-style-system-carousel-auto` currently uses `perPage: 2` when there are outer arrows. This splits the 1200px container into two 600px columns. Because the images are capped at a `max-width` of 300px, they sit perfectly centered in their 600px columns, resulting in a massive 300px+ gap between the two images. 

## Proposed Solution (Minimal Change, Maximum Impact)

### 1. Fix the Clipping (Responsiveness)
We will replace `display: table !important;` on the figure wrappers with `display: flex; flex-direction: column; align-items: center;`. 
This allows the figure to perfectly constrain its internal image, center it without relying on `margin: 0 auto`, and completely respects `max-width: 100%` without the rigid overflow properties of `table`.

### 2. Fix the Image Sizing
Currently, `.is-style-system-carousel-auto .wp-block-image` uses `width: 100% !important`. We will change this to `width: auto !important; max-width: 100% !important;` to ensure the figure never forces the slide to overflow, while still respecting the dynamic WP size variables (e.g., `--wp--custom--medium-width`).

### 3. Fix the Awkward Spacing (JS Update)
Instead of forcing `perPage: 2` and creating massive empty columns, we will change `splideOptions.autoWidth = true;` for `.is-style-system-carousel-auto` in `carousel-nav.js`. 
By doing this, the slides will shrink to fit the images exactly. We will then add a CSS rule to center the `.splide__list` if the total width of the slides is less than the container. This keeps the 2 items centered exactly as you like them, but with a perfect, natural gap between them instead of awkward cavernous columns.

## Verification
1. I have already backed up `core-group-system-carousel.css`.
2. I will apply the CSS fixes to the figure and image.
3. I will update `carousel-nav.js` to use `autoWidth: true` for the auto carousel.
