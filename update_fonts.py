import json

theme_json_path = '/Users/glwalker/DevKinsta/public/system/wp-content/themes/systemstrap/theme.json'

with open(theme_json_path, 'r') as f:
    data = json.load(f)

font_families = data['settings']['typography']['fontFamilies']

# Find existing Lato and Open Sans
open_sans = next((f for f in font_families if f['slug'] == 'open-sans'), None)
lato = next((f for f in font_families if f['slug'] == 'lato'), None)
system = next((f for f in font_families if f['slug'] == 'system'), None)
monospace = next((f for f in font_families if f['slug'] == 'monospace'), None)

new_font_families = [
    system,
    {
        "fontFamily": "Inter, sans-serif",
        "name": "Inter",
        "slug": "inter",
        "fontFace": [
            {
                "fontFamily": "Inter",
                "fontStyle": "normal",
                "fontWeight": "100 900",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/inter/Inter-VariableFont_slnt,wght.woff2"]
            }
        ]
    },
    {
        "fontFamily": "Montserrat, sans-serif",
        "name": "Montserrat",
        "slug": "montserrat",
        "fontFace": [
            {
                "fontFamily": "Montserrat",
                "fontStyle": "normal",
                "fontWeight": "400",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/montserrat/montserrat_normal_400.ttf"]
            },
            {
                "fontFamily": "Montserrat",
                "fontStyle": "normal",
                "fontWeight": "500",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/montserrat/montserrat_normal_500.ttf"]
            },
            {
                "fontFamily": "Montserrat",
                "fontStyle": "normal",
                "fontWeight": "700",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/montserrat/montserrat_normal_700.ttf"]
            }
        ]
    },
    {
        "fontFamily": "Roboto, sans-serif",
        "name": "Roboto",
        "slug": "roboto",
        "fontFace": [
            {
                "fontFamily": "Roboto",
                "fontStyle": "normal",
                "fontWeight": "300",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/roboto/roboto_normal_300.ttf"]
            },
            {
                "fontFamily": "Roboto",
                "fontStyle": "normal",
                "fontWeight": "400",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/roboto/roboto_normal_400.ttf"]
            },
            {
                "fontFamily": "Roboto",
                "fontStyle": "normal",
                "fontWeight": "700",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/roboto/roboto_normal_700.ttf"]
            }
        ]
    },
    {
        "fontFamily": "Nunito Sans, sans-serif",
        "name": "Nunito Sans",
        "slug": "nunito-sans",
        "fontFace": [
            {
                "fontFamily": "Nunito Sans",
                "fontStyle": "normal",
                "fontWeight": "400",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/nunito/nunito-sans_normal_400.ttf"]
            },
            {
                "fontFamily": "Nunito Sans",
                "fontStyle": "normal",
                "fontWeight": "500",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/nunito/nunito-sans_normal_500.ttf"]
            },
            {
                "fontFamily": "Nunito Sans",
                "fontStyle": "normal",
                "fontWeight": "700",
                "fontDisplay": "swap",
                "src": ["file:./assets/fonts/nunito/nunito-sans_normal_700.ttf"]
            }
        ]
    },
    lato,
    open_sans,
    monospace
]

data['settings']['typography']['fontFamilies'] = new_font_families

# Map the variables in settings.custom
data['settings']['custom']['wp--preset--font-family--body'] = 'var:preset|font-family|inter'
data['settings']['custom']['wp--preset--font-family--heading'] = 'var:preset|font-family|montserrat'
data['settings']['custom']['wp--preset--font-family--display'] = 'var:preset|font-family|roboto'
# Monospace and single-title remain the same.

with open(theme_json_path, 'w') as f:
    json.dump(data, f, indent="\t")
