/**
 * SystemStrap Button Block Styles
 */

wp.domReady(() => {
    const { registerBlockStyle } = wp.blocks;



    registerBlockStyle('core/button', {
        name: 'button-link',
        label: 'Link',
    });

    // Register Pill Button
    registerBlockStyle('core/button', {
        name: 'button-pill',
        label: 'Pill',
    });

    // Register Pill Outline Button
    registerBlockStyle('core/button', {
        name: 'button-pill-outline',
        label: 'Pill Outline',
    });

    // Register Square Button
    registerBlockStyle('core/button', {
        name: 'button-square',
        label: 'Square',
    });

    // Register Square Outline Button
    registerBlockStyle('core/button', {
        name: 'button-square-outline',
        label: 'Square Outline',
    });
});
