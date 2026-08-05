Proceeding from the current GitHub PHP, your diagnosis is correct—and there is one sharper bug hiding underneath it.

## Implemented server-side pass

The first contrast pass is implemented in local source:

1. `parse_the_contrast()` now compares opaque dark and light foreground candidates directly.
2. The broad Base-derived `.has-{slug}-color` override is removed.
3. Failure-only same-element preset-pair rules are generated for semantic text over known preset surfaces.

The editor-side live update companion remains a separate task. Saved palette changes are correct after the next editor or frontend load.

## Original diagnosis

The current implementation handles two different contrast jobs:

1. **Text placed on an accent background**
   Generates `--wp--preset--color--{slug}-text`.

2. **Accent-colored text placed on the global `base` background**
   If the accent fails against `base`, it globally substitutes a generated shade.

The first job is calculated from the accent itself. The second assumes that every `.has-{slug}-color` element sits directly on the global `base` color. That assumption breaks as soon as the text is placed in a panel, Cover, card, nested Group, table header, secondary surface, or another arbitrary color background. ([GitHub][1])

## Finding 1: `parse_the_contrast()` can deliberately choose a failing color

This is the first thing I would fix.

The method does not calculate and compare the actual contrast of both candidate foregrounds. It compares the background against black, then uses a custom threshold:

```php
return $contrastRatio > 6 ? '#111111' : '#ffffff';
```

The comment says that threshold was raised so medium-dark colors such as `#008cba` would receive white text. ([GitHub][2])

That produces a dangerous middle band:

- Black may pass 4.5:1.
- The black ratio may still be below the custom `6` cutoff.
- The method therefore selects white.
- White may fail 4.5:1.

For opaque colors, the proper answer is straightforward: calculate both candidate ratios and return whichever is higher. WCAG contrast is determined from the actual foreground and background pair, not from a rough darkness threshold. Normal text requires at least 4.5:1; large text permits 3:1. ([W3C][3])

### Small durable replacement

```php
/**
 * Return the strongest accessible foreground for an opaque background.
 *
 * @param string $background Background color.
 * @param string $dark       Dark foreground candidate.
 * @param string $light      Light foreground candidate.
 * @return string
 */
public function get_best_contrast_color(
	string $background,
	string $dark = '#111111',
	string $light = '#ffffff'
): string {
	$dark_ratio  = $this->get_contrast_ratio( $dark, $background );
	$light_ratio = $this->get_contrast_ratio( $light, $background );

	return $dark_ratio >= $light_ratio ? $dark : $light;
}

/**
 * Calculate the WCAG contrast ratio for two opaque colors.
 *
 * @param string $foreground Foreground color.
 * @param string $background Background color.
 * @return float
 */
public function get_contrast_ratio(
	string $foreground,
	string $background
): float {
	return $this->wcag_contrast_ratio( $foreground, $background );
}
```

Then:

```php
$text_contrast = $generator->get_best_contrast_color( $color_value );
```

I would retain `parse_the_contrast()` temporarily as a compatibility wrapper:

```php
/**
 * Backward-compatible contrast helper.
 *
 * @param string $color           Background color.
 * @param string $comparisonColor Deprecated and ignored.
 * @return string
 */
public function parse_the_contrast(
	string $color,
	string $comparisonColor = '#000000'
): string {
	unset( $comparisonColor );

	return $this->get_best_contrast_color( $color );
}
```

That keeps any unknown consumers alive while correcting the result.

## Finding 2: The global accessible-text override is contextually wrong

This generated rule is the architectural weak point:

```css
body .has-info-color,
.editor-styles-wrapper .has-info-color {
	color: var(--wp--preset--color--info-30) !important;
}
```

Its chosen shade was tested only against `base`, but the selector applies everywhere. ([GitHub][1])

Consider:

```html
<div class="has-dark-background-color">
	<p class="has-info-color">Text</p>
</div>
```

The generated `info-30` may have been selected for a light base. On the dark local background, a lighter `info-70` or the original info value may be the accessible choice. The global override cannot know.

Worse, `!important` prevents a more local component rule from correcting it without joining the specificity arms race. Bless its heart, that selector solves Tuesday’s screenshot by creating Thursday’s bug.

### Recommendation

Remove the broad `$a11y_text_css` override.

Do **not** globally rewrite:

```css
.has-{slug}-color
```

based on `base`.

Keep automatic contrast routing where the actual surface is known:

```css
.has-info-background-color:not(.has-text-color) {
	color: var(--wp--preset--color--info-text);
}
```

That is deterministic because the background and generated foreground belong to the same element.

## Finding 3: Fixed contrast pairs are trusted, not verified

These pairs are hard-coded:

```php
$fixed_contrast_map = [
	'base'            => 'contrast',
	'contrast'        => 'base',
	'secondary-bg'    => 'secondary-color',
	'secondary-color' => 'secondary-bg',
	'tertiary-bg'     => 'tertiary-color',
	'tertiary-color'  => 'tertiary-bg',
];
```

The resulting CSS assumes every pair is accessible. No ratio is calculated before it is emitted. ([GitHub][1])

That may be safe in curated family sets. It is not guaranteed once color systems can be mixed independently or modified by users.

I would treat those mappings as **preferred semantic pairs**, then verify them:

```php
$preferred_color = $palette_by_slug[ $contrast_slug ] ?? '';

if (
	$preferred_color &&
	$generator->passes_wcag_contrast(
		$preferred_color,
		$color_value,
		4.5
	)
) {
	$foreground = "var(--wp--preset--color--{$contrast_slug})";
} else {
	$foreground = $generator->get_best_contrast_color( $color_value );
}
```

That preserves authored intent when it works and falls back safely when somebody creates a particularly adventurous little bastard.

## Finding 4: The code only handles literal colors

The dynamic loop skips any palette value containing `var(`. ([GitHub][1])

That is understandable because PHP cannot calculate a value it cannot resolve. But it means any alias-based or chained token does not receive:

- RGB output
- Extended shades
- Generated foreground
- Contrast correction
- Shadow RGB

That should be documented as an explicit generator boundary.

A later enhancement could resolve only safe, known palette references such as:

```text
var(--wp--preset--color--primary)
```

through an already-built slug map. I would not attempt arbitrary CSS variable resolution in PHP.

## Recommended contrast model

I would divide the problem into three levels.

### 1. Guaranteed pairs

SystemStrap owns both foreground and surface:

- Buttons
- Badges
- Tabs
- Pagination
- System panels
- Table headers
- Dialog controls
- Carousel controls
- Generated semantic backgrounds

Generate and consume an explicit `on-*` token:

```css
--wp--preset--color--info-text: #111111;
```

These can be guaranteed.

### 2. Deterministic same-element WordPress pairs

An element has both classes:

```html
<div class="has-info-background-color has-danger-color"></div>
```

PHP can generate rules for every literal palette pair and fix only combinations that fail:

```css
.has-info-background-color.has-danger-color {
	color: var(--wp--preset--color--danger-on-info);
}
```

This is technically possible, though I would question whether silently replacing an explicit user-selected foreground is the right editor behavior. A warning may be more honest than mutation.

### 3. Unknown rendered contexts

Examples:

```html
<div class="has-info-background-color">
	<div class="some-transparent-panel">
		<p class="has-primary-color">Text</p>
	</div>
</div>
```

Or text over:

- Gradients
- Cover images
- Transparent backgrounds
- Custom CSS colors
- Plugin-rendered surfaces
- Nested blocks with inherited backgrounds

Server-side palette generation cannot know the actual rendered backdrop. WCAG evaluates text against the background behind that text in normal use. ([W3C][4])

Those contexts require one of:

- Explicit component surface ownership
- Author guidance
- Editor-side contrast warnings
- Automated rendered-page testing

Not runtime DOM recoloring.

## Patch order

I would do this in two controlled passes.

### Pass one: correct the existing promises

1. Replace `parse_the_contrast()` with real candidate comparison.
2. Verify the fixed semantic pairs.
3. Remove the global base-derived `.has-{slug}-color` overrides.
4. Keep known background-to-foreground routing.
5. Update the accessibility and design-system contracts.

### Pass two: expand contextual ownership

Inventory the unpushed System UI CSS and classify every foreground use as:

- On page base
- On secondary surface
- On tertiary surface
- On semantic/accent surface
- On transparent/composited surface
- Unknown/user-controlled

Then replace implicit inheritance with explicit variables where the component owns the surface:

```css
.system-panel {
	background: var(--system-panel-bg);
	color: var(--system-panel-color);
}

.system-panel.has-info-background-color {
	--system-panel-bg: var(--wp--preset--color--info);
	--system-panel-color: var(--wp--preset--color--info-text);
}
```

## One small math correction

The luminance helper uses the older `0.03928` breakpoint. Current W3C material uses `0.04045`, while noting that the difference has no practical effect for ordinary 8-bit color calculations. This is not your real bug, but it is worth correcting while touching the function. ([GitHub][2])

## What remains unverified

I have not seen the unpushed `assets/css/style-variations/*.css`, so I cannot yet inventory its actual surface ownership or identify each selector consuming the generated variables.

But the PHP verdict is firm:

> **Fix the generated “on accent” color first, remove the global base-assumption override, and make each System UI component declare the surface it actually owns.**

That gets you from “coded for known screenshots” to a defensible contrast contract without pretending PHP can divine every possible rendered background.

---

Use WP Dev Helper locally in your editor:
[WordPress LLM Architecture](https://github.com/GLWalker/WordPress-LLM-Architecture)

[1]: https://github.com/GLWalker/systemstrap/blob/main/inc/dynamic-styles.php "systemstrap/inc/dynamic-styles.php at main · GLWalker/systemstrap · GitHub"
[2]: https://github.com/GLWalker/systemstrap/blob/main/inc/class-color-generator.php "systemstrap/inc/class-color-generator.php at main · GLWalker/systemstrap · GitHub"
[3]: https://www.w3.org/WAI/WCAG22/Techniques/general/G18?utm_source=chatgpt.com "G18: Ensuring that a contrast ratio of at least 4.5:1 exists between text (and images of text) and background behind the text | WAI | W3C"
[4]: https://www.w3.org/WAI/WCAG22/Understanding/focus-appearance?utm_source=chatgpt.com "Understanding Success Criterion 2.4.13: Focus Appearance | WAI | W3C"

Do not alter established carousel sizing formulas, responsive thresholds,
media-width tokens, Splide options, underflow calculations, or navigation
placement math unless a failing regression test proves that the DOM cleanup
requires a narrowly scoped correction.
