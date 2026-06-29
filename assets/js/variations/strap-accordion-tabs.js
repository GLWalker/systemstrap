var el = wp.element.createElement

var SystemTabsIcon = el(
	"svg",
	{
		viewBox: "0 0 24 24",
		fill: "none",
		stroke: "currentColor",
		strokeWidth: "1.5",
		strokeLinecap: "round",
		strokeLinejoin: "round",
		"aria-hidden": "true",
		style: {
			fill: "none",
			transform: "scale(1.15)",
			transformOrigin: "center",
		},
	},
	el("path", {
		d: "M4 7.25A2.25 2.25 0 0 1 6.25 5h11.5A2.25 2.25 0 0 1 20 7.25v2.25H4Z",
	}),
	el("path", {
		d: "M4 9.5v8.25A2.25 2.25 0 0 0 6.25 20h11.5A2.25 2.25 0 0 0 20 17.75V9.5",
	}),
	el("path", { d: "M8 7.25h2.5M12 7.25h2.5" }),
)

var SystemVerticalTabsIcon = el(
	"svg",
	{
		viewBox: "0 0 24 24",
		fill: "none",
		stroke: "currentColor",
		strokeWidth: "1.5",
		strokeLinecap: "round",
		strokeLinejoin: "round",
		"aria-hidden": "true",
		style: {
			fill: "none",
			transform: "scale(1.15)",
			transformOrigin: "center",
		},
	},
	el("path", {
		d: "M4 6.25A2.25 2.25 0 0 1 6.25 4h3.5A2.25 2.25 0 0 1 12 6.25V20H6.25A2.25 2.25 0 0 1 4 17.75Z",
	}),
	el("path", {
		d: "M12 6.25A2.25 2.25 0 0 1 14.25 4h3.5A2.25 2.25 0 0 1 20 6.25v11.5A2.25 2.25 0 0 1 17.75 20h-5.5Z",
	}),
	el("path", { d: "M6.75 8h2.5M6.75 12h2.5M14.75 8h2.5" }),
)

var strapAccordionLorem =
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."

function strapCreateAccordionItem(title, panelName, openByDefault) {
	return [
		"core/accordion-item",
		{
			openByDefault: !!openByDefault,
			metadata: {
				name: panelName,
			},
		},
		[
			[
				"core/accordion-heading",
				{
					title: title,
					metadata: {
						name: title,
					},
				},
			],
			[
				"core/accordion-panel",
				{
					metadata: {
						name: panelName + " Panel",
					},
				},
				[
					[
						"core/paragraph",
						{
							content: strapAccordionLorem,
						},
					],
				],
			],
		],
	]
}

function strapCreateAccordionTemplate() {
	return [
		strapCreateAccordionItem("Tab Title", "Tab 1", true),
		strapCreateAccordionItem("Tab Title 2", "Tab 2", false),
		strapCreateAccordionItem("Tab Title 3", "Tab 3", false),
	]
}

function strapAccordionVariationIsActive(blockAttributes, variationAttributes) {
	return (
		typeof blockAttributes.className === "string" &&
		blockAttributes.className.indexOf(variationAttributes.className) !== -1
	)
}

wp.blocks.registerBlockVariation("core/accordion", {
	name: "strap-accordion-tabs",
	title: "System Tabs",
	category: "systemstrap",
	description: "Preconfigured accordion tabs with three starter panels.",
	icon: SystemTabsIcon,
	scope: ["inserter"],
	keywords: ["SystemStrap", "tabs", "accordion", "tabbed"],
	isActive: strapAccordionVariationIsActive,
	attributes: {
		className: "is-style-system-tabs",
		metadata: {
			name: "System Tabs",
		},
	},
	innerBlocks: strapCreateAccordionTemplate(),
})

wp.blocks.registerBlockVariation("core/accordion", {
	name: "strap-accordion-tabs-vertical",
	title: "System Vertical Tabs",
	category: "systemstrap",
	description:
		"Preconfigured vertical accordion tabs with three starter panels.",
	icon: SystemVerticalTabsIcon,
	scope: ["inserter"],
	keywords: ["SystemStrap", "tabs", "accordion", "vertical"],
	isActive: strapAccordionVariationIsActive,
	attributes: {
		className: "is-style-system-tabs-vertical",
		metadata: {
			name: "System Vertical Tabs",
		},
	},
	innerBlocks: strapCreateAccordionTemplate(),
})
