const fs = require('fs');
const file = 'styles/colors/brite-dark.json';
const data = JSON.parse(fs.readFileSync(file, 'utf8'));

// 1. Update Palette
const palette = data.settings.color.palette;
palette.find(p => p.slug === 'contrast').color = '#dee2e6';
palette.find(p => p.slug === 'secondary-bg').color = '#343a40';
palette.find(p => p.slug === 'secondary-color').color = 'rgba(222, 226, 230, 0.75)';
palette.find(p => p.slug === 'tertiary-bg').color = '#2b3035';
palette.find(p => p.slug === 'tertiary-color').color = 'rgba(222, 226, 230, 0.5)';

// 2. Update Duotones
// In light mode, base is #ffffff, contrast is #212529.
// Now base is #212529, contrast is #dee2e6.
data.settings.color.duotone.forEach(d => {
    d.colors = d.colors.map(c => {
        if (c === '#ffffff') return '#212529'; // Old base becomes new base
        if (c === '#212529') return '#dee2e6'; // Old contrast becomes new contrast
        return c;
    });
});

// 3. Update Gradients (First 4)
const gradients = data.settings.color.gradients;
// Reverse gradient and gradient-alt
const grad = gradients.find(g => g.slug === 'gradient');
const gradAlt = gradients.find(g => g.slug === 'gradient-alt');

if (grad && gradAlt) {
    grad.gradient = "linear-gradient(180deg, rgba(0, 0, 0, 0.15) 0%, rgba(0, 0, 0, 0) 100%)";
    gradAlt.gradient = "linear-gradient(180deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.2) 100%)";
}

fs.writeFileSync(file, JSON.stringify(data, null, '\t') + '\n');
