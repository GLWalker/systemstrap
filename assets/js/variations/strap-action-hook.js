var el = wp.element.createElement;

var SystemActionHookIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('path', { d: 'M7.5 5H5.75A2.75 2.75 0 0 0 3 7.75v2.75A1.5 1.5 0 0 1 1.5 12 1.5 1.5 0 0 1 3 13.5v2.75A2.75 2.75 0 0 0 5.75 19H7.5' }),
	el('path', { d: 'M16.5 5h1.75A2.75 2.75 0 0 1 21 7.75v2.75a1.5 1.5 0 0 0 1.5 1.5 1.5 1.5 0 0 0-1.5 1.5v2.75A2.75 2.75 0 0 1 18.25 19H16.5' }),
	el('path', { d: 'M10 8.5 6.5 12l3.5 3.5M14 8.5l3.5 3.5-3.5 3.5' }),
	el('circle', { cx: '12', cy: '12', r: '1' })
);

wp.blocks.registerBlockVariation("core/separator", {
	name: "system-action-hook",
	title: "Action Hook",
	category: "systemstrap",
	description: "Provides a custom PHP action hook for developers to inject code.",
	icon: SystemActionHookIcon,
	keywords: ["hook", "action", "php", "developer", "systemstrap"],
	attributes: {
		className: "strap-action-hook",
	},
});
