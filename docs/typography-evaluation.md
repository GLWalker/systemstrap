# Typography Evaluation: Theme Variations

This document provides a comprehensive evaluation of the typography settings across all SystemStrap theme variations. It outlines the specific body and heading font families used by each theme, details any local web font assets registered, and groups variations that share identical configurations.

---

## 1. Theme Variation Typography Chart

* **base**
  * Body Font: `system-ui`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **brite**
  * Body Font: `system-ui`
  * Heading Font: `Manrope`
  * Local Files: `Manrope-VariableFont_wght.ttf`, `Geist-VariableFont_wght.ttf`, `syne-variable.woff2`

* **cerulean**
  * Body Font: `system-ui`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **cosmo**
  * Body Font: `Source Sans Pro`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **cyborg**
  * Body Font: `Roboto`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `roboto-variable.woff2`

* **darkly**
  * Body Font: `Lato`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `lato-v24-latin-regular.woff2`, `lato-v24-latin-700.woff2`

* **flatly**
  * Body Font: `Lato`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `lato-v24-latin-regular.woff2`, `lato-v24-latin-700.woff2`

* **journal**
  * Body Font: `system-ui`
  * Heading Font: `News Cycle`
  * Local Files: `newscycle-regular.woff2`, `newscycle-bold.woff2`

* **litera**
  * Body Font: `system-ui`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **lumen**
  * Body Font: `Source Sans Pro`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **lux**
  * Body Font: `Nunito Sans`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `nunito-sans-variable.woff2`

* **materia**
  * Body Font: `Roboto`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `roboto-variable.woff2`

* **minty**
  * Body Font: `system-ui`
  * Heading Font: `Montserrat`
  * Local Files: `montserrat-variable.woff2`

* **morph**
  * Body Font: `Nunito Sans`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `nunito-sans-variable.woff2`

* **pulse**
  * Body Font: `system-ui`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **quartz**
  * Body Font: `system-ui`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **sandstone**
  * Body Font: `Roboto`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `roboto-variable.woff2`

* **simplex**
  * Body Font: `Open Sans`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `open-sans-variable.woff2`

* **sketchy**
  * Body Font: `Neucha`
  * Heading Font: `Cabin Sketch`
  * Local Files: `neucha_normal_400.ttf`, `cabin-sketch_normal_400.ttf`, `cabin-sketch_normal_700.ttf`

* **slate**
  * Body Font: `system-ui`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **solar**
  * Body Font: `Source Sans Pro`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: None

* **spacelab**
  * Body Font: `Open Sans`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `open-sans-variable.woff2`

* **superhero**
  * Body Font: `Lato`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `lato-v24-latin-regular.woff2`, `lato-v24-latin-regular.woff`, `lato-v24-latin-italic.woff2`, `lato-v24-latin-italic.woff`

* **united**
  * Body Font: `Ubuntu`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `ubuntu-v20-latin-regular.woff2`, `ubuntu-v20-latin-regular.woff`, `ubuntu-v20-latin-700.woff2`, `ubuntu-v20-latin-700.woff`

* **vapor**
  * Body Font: `Lato`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `lato-v24-latin-regular.woff2`, `lato-v24-latin-regular.woff`, `lato-v24-latin-italic.woff2`, `lato-v24-latin-italic.woff`, `lato-v24-latin-700.woff2`, `lato-v24-latin-700.woff`, `lato-v24-latin-700italic.woff2`, `lato-v24-latin-700italic.woff`

* **yeti**
  * Body Font: `Open Sans`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `open-sans-variable.woff2`

* **zephyr**
  * Body Font: `Inter`
  * Heading Font: `var(--wp--preset--font-family--body)`
  * Local Files: `Inter-VariableFont_slnt,wght.woff2`

---

## 2. Identical Typography Configurations (4-Slug Structure)

With the consolidation of the active typography slugs down to `body`, `heading`, `display`, and `button`, the following theme groups share the **exact same** active font configurations.

* **cerulean, slate**
  * *Font stack:* Body is `system-ui`. Heading and Button map to `body`. Display maps to `heading`.
* **cosmo, lumen, solar**
  * *Font stack:* Body is `Source Sans Pro`. Heading, Display, and Button map to `body`.
* **cyborg, materia, sandstone**
  * *Font stack:* Body is `Roboto`. Heading, Display, and Button map to `body`.
* **darkly, flatly, superhero, vapor**
  * *Font stack:* Body is `Lato`. Heading, Display, and Button map to `body`.
* **litera, quartz**
  * *Font stack:* Body is `system-ui`. Heading, Display, and Button map to `body`. *(Note: Differs from cerulean/slate by mapping Display directly to body rather than heading).*
* **lux, morph**
  * *Font stack:* Body is `Nunito Sans`. Heading, Display, and Button map to `body`.
* **simplex, spacelab, yeti**
  * *Font stack:* Body is `Open Sans`. Heading, Display, and Button map to `body`.

---

## 3. Notable Unique Variations
* **base, pulse**: Both use `system-ui` for body text. However, `base` maps Display to `heading`, while `pulse` maps Display directly to `body`.
* **brite**: Utilizes multiple distinct local web fonts: **Manrope** for headings, **Syne** for displays, and inherits `system-ui` for body.
* **sketchy**: Integrates hand-drawn local fonts, registering **Neucha** for body/other slots and **Cabin Sketch** for headings/displays.
* **journal**: Maps Heading to **News Cycle** and inherits `system-ui` for body.
* **minty**: Maps Heading to **Montserrat** and inherits `system-ui` for body.
* **zephyr**: Uses **Inter** for body text and maps the rest to `body`.
* **united**: Uses **Ubuntu** for body text and maps the rest to `body`.
