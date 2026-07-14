# Absolute Minimal Fix

1. Remove `padding-right` on `.splide__track` so the last item stops peeking/getting cut on the right edge.
2. Replace `display: table` with `display: flex; flex-direction: column; align-items: center;` on the slide content wrapper to ensure it's fully responsive and Safari-safe.
3. Update `carousel-nav.js` to strictly use `perPage: 3` (or 2 for medium) without the `hasOutsideNav` math that creates cavernous columns.
