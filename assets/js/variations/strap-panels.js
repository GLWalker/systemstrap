var templateUri = (typeof systemstrap !== 'undefined' && systemstrap.templateUri) ? systemstrap.templateUri : "./wp-content/themes/systemstrap/";

var el = wp.element.createElement;

var SystemPanelIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('path', { d: 'M6.5 5.5h9.75a2.25 2.25 0 0 1 2.25 2.25v9.75' }),
	el('rect', { x: '4.5', y: '7.5', width: '13', height: '11', rx: '2.25' }),
	el('path', { d: 'M7.5 10.5h.01M10.5 10.5h4' })
);

var SystemListIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('rect', { x: '4', y: '4.5', width: '16', height: '15', rx: '2.5' }),
	el('path', { d: 'M4 11.75h16' }),
	el('path', { d: 'M8 8h7.5M8 15.75h7.5' })
);

var SystemAccordionIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('path', { d: 'M6.5 5.5h11a2 2 0 0 1 2 2v1.25a2 2 0 0 1-2 2h-11a2 2 0 0 1-2-2V7.5a2 2 0 0 1 2-2Z' }),
	el('path', { d: 'M8 8.25h5.5M16 7.5l1 1 1-1' }),
	el('path', { d: 'M5.5 14h13' }),
	el('path', { d: 'M7.5 17.5h9' })
);

var SystemPricingTableIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('path', { d: 'M4 9a2.5 2.5 0 0 1 2.5-2.5H9v13H4Z' }),
	el('path', { d: 'M9 4.5h6a2.5 2.5 0 0 1 2.5 2.5v12.5H9Z' }),
	el('path', { d: 'M17.5 8.5h.75A2.75 2.75 0 0 1 21 11.25v8.25h-3.5Z' }),
	el('path', { d: 'M11.5 9h3M11.5 13h3M11.5 16.5h3' })
);

wp.blocks.registerBlockVariation("core/group", {
	name: "strap-panel-basic",
	title: "Block Panel Basic",
	category: "systemstrap",
	description: "System Panel basic layout",
	icon: SystemPanelIcon,
	keywords: ["SystemStrap", "group", "Block Panel Basic", "card", "panel"],
	attributes: {
		className: "is-style-system-panel",
		layout: {
			type: "default",
		},
		metadata: {
			name: "System Panel",
		},
	},
	innerBlocks: [
		[
			"core/group",
			{
				className: "is-style-system-panel-header",
				layout: {
					type: "default"
				}
			},
			[
				[
					"core/heading",
					{
						level: 5,
						content: "Panel Heading",
						style: {
							typography: {
								textAlign: "left"
							}
						},
						metadata: {
							name: "Panel Heading"
						}
					}
				]
			]
		],
		[
			"core/paragraph",
			{
				content: "Some quick example text to build on the panel title and make up the bulk of the panel’s content.",
				style: {
					typography: {
						textAlign: "left"
					}
				},
				metadata: {
					name: "Panel Text"
				}
			}
		],
		[
			"core/group",
			{
				className: "is-style-system-panel-footer",
				layout: {
					type: "default"
				}
			},
			[
				[
					"core/paragraph",
					{
						content: "Panel Footer"
					}
				]
			]
		]
	],
});

wp.blocks.registerBlockVariation("core/group", {
	name: "strap-panel-modal",
	title: "Modal Panel Basic",
	category: "systemstrap",
	description: "System Panel layout optimized for modals",
	icon: SystemPanelIcon,
	keywords: ["SystemStrap", "group", "Modal Panel Basic", "card", "modal", "panel"],
	attributes: {
		className: "is-style-system-panel is-style-system-modal",
		backgroundColor: "base",
		layout: {
			type: "default",
		},
		metadata: {
			name: "System Modal",
		},
	},
	innerBlocks: [
		[
			"core/group",
			{
				className: "is-style-system-panel-header",
				layout: {
					type: "default"
				}
			},
			[
				[
					"core/heading",
					{
						level: 2,
						content: "Modal Header",
						style: {
							typography: {
								textAlign: "left"
							}
						},
						metadata: {
							name: "Modal Heading"
						}
					}
				]
			]
		],
		[
			"core/group",
			{
				layout: {
					type: "constrained"
				}
			},
			[
				[
					"core/paragraph",
					{
						content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
						style: {
							typography: {
								textAlign: "left"
							}
						},
						metadata: {
							name: "Modal Text"
						}
					}
				]
			]
		],
		[
			"core/group",
			{
				className: "is-style-system-panel-footer",
				layout: {
					type: "default"
				}
			},
			[
				[
					"core/paragraph",
					{
						content: " "
					}
				]
			]
		]
	],
});

wp.blocks.registerBlockVariation("core/group", {
	name: "strap-panel-image",
	title: "Panel Block Image",
	category: "systemstrap",
	description: "System Panel layout with featured image",
	icon: SystemPanelIcon,
	keywords: ["SystemStrap", "group", "Panel Block Image", "card", "card image", "panel"],
	attributes: {
		className: "is-style-system-panel",
		layout: {
			type: "default",
		},
		metadata: {
			name: "System Panel",
		},
	},
	innerBlocks: [
		[
			"core/image",
			{
				url: templateUri + "assets/media/hero-1280x720.webp",
				alt: "Panel Featured Image",
				sizeSlug: "full",
				linkDestination: "none",
				metadata: {
					name: "Panel Img",
				},
			},
		],
		[
			"core/heading",
			{
				level: 5,
				content: "Panel Heading",
				style: {
					typography: {
						textAlign: "left",
					},
				},
				metadata: {
					name: "Panel Heading",
				},
			},
		],
		[
			"core/paragraph",
			{
				content: "Some quick example text to build on the panel title and make up the bulk of the panel’s content.",
				style: {
					typography: {
						textAlign: "left",
					},
				},
				metadata: {
					name: "Panel Text",
				},
			},
		],
		[
			"core/buttons",
			{
				layout: {
					type: "flex",
					justifyContent: "right",
				},
			},
			[
				[
					"core/button",
					{
						text: "Go somewhere",
					},
				],
			],
		],
	],
});

wp.blocks.registerBlockVariation("core/group", {
	name: "strap-panel-custom",
	title: "Panel Block Custom",
	category: "systemstrap",
	description: "System Panel layout with a custom header and links",
	icon: SystemPanelIcon,
	keywords: ["SystemStrap", "group", "Panel Block Custom", "card", "custom header", "panel"],
	attributes: {
		className: "is-style-system-panel",
		layout: {
			type: "default",
		},
		metadata: {
			name: "System Panel",
		},
	},
	innerBlocks: [
		[
			"core/group",
			{
				backgroundColor: "tertiary-bg",
				layout: {
					type: "flex",
					flexWrap: "nowrap",
					verticalAlignment: "center"
				},
				style: {
					spacing: {
						margin: {
							top: "var:preset|spacing|0",
							bottom: "var:preset|spacing|0"
						},
						blockGap: "var:preset|spacing|10"
					}
				}
			},
			[
				[
					"core/icon",
					{
						icon: "core/published",
						align: "left"
					}
				],
				[
					"core/heading",
					{
						level: 5,
						content: "Panel Title",
						style: {
							typography: {
								textAlign: "left"
							}
						}
					}
				]
			]
		],
		[
			"core/heading",
			{
				level: 6,
				content: "Panel Subtitle"
			}
		],
		[
			"core/paragraph",
			{
				content: "Some quick example text to build on the panel title and make up the bulk of the panel’s content.",
				style: {
					typography: {
						textAlign: "left"
					}
				}
			}
		],
		[
			"core/paragraph",
			{
				content: '<a href="#">Panel Link </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#">Another Link</a>'
			}
		]
	],
});

wp.blocks.registerBlockVariation("core/group", {
	name: "strap-panel-list",
	title: "Panel Block List",
	category: "systemstrap",
	description: "System Panel layout with flush list",
	icon: SystemListIcon,
	keywords: ["SystemStrap", "group", "Panel Block List", "card", "list group", "panel"],
	attributes: {
		className: "is-style-system-panel",
		layout: {
			type: "default",
		},
		metadata: {
			name: "System Panel",
		},
	},
	innerBlocks: [
		[
			"core/group",
			{
				className: "is-style-system-panel-header",
				layout: {
					type: "default"
				}
			},
			[
				[
					"core/heading",
					{
						level: 5,
						content: "Panel Heading",
						style: {
							typography: {
								textAlign: "left"
							}
						},
						metadata: {
							name: "Panel Heading"
						}
					}
				]
			]
		],
		[
			"core/list",
			{
				className: "is-style-system-list"
			},
			[
				[
					"core/list-item",
					{
						content: "List Item 1"
					}
				],
				[
					"core/list-item",
					{
						content: "List Item 2"
					}
				],
				[
					"core/list-item",
					{
						content: "List Item 3"
					}
				]
			]
		]
	],
});

wp.blocks.registerBlockVariation("core/group", {
	name: "strap-panel-details",
	title: "Panel Block Details",
	category: "systemstrap",
	description: "System Panel layout with flush details blocks",
	icon: SystemAccordionIcon,
	keywords: ["SystemStrap", "group", "Panel Block Details", "card", "details", "panel"],
	attributes: {
		className: "is-style-system-panel",
		layout: {
			type: "default",
		},
		metadata: {
			name: "System Panel",
		},
	},
	innerBlocks: [
		[
			"core/group",
			{
				className: "is-style-system-panel-header",
				layout: {
					type: "default"
				}
			},
			[
				[
					"core/heading",
					{
						level: 5,
						content: "Panel Heading",
						style: {
							typography: {
								textAlign: "left"
							}
						},
						metadata: {
							name: "Panel Heading"
						}
					}
				]
			]
		],
		[
			"core/details",
			{
				className: "is-style-system-details",
				summary: "Summary Heading"
			},
			[
				[
					"core/paragraph",
					{
						content: "Details that are hidden within",
						placeholder: "Type / to add a hidden block"
					}
				]
			]
		],
		[
			"core/details",
			{
				className: "is-style-system-details",
				summary: "Summary Heading 2"
			},
			[
				[
					"core/paragraph",
					{
						content: "Details that are hidden within",
						placeholder: "Type / to add a hidden block"
					}
				]
			]
		],
		[
			"core/details",
			{
				className: "is-style-system-details",
				summary: "Summary Heading 3"
			},
			[
				[
					"core/paragraph",
					{
						content: "Details that are hidden within",
						placeholder: "Type / to add a hidden block"
					}
				]
			]
		]
	],
});

wp.blocks.registerBlockVariation("core/group", {
	name: "strap-panel-pricing",
	title: "Panel Block Pricing",
	category: "systemstrap",
	description: "System Panel layout for pricing tiers",
	icon: SystemPricingTableIcon,
	keywords: ["SystemStrap", "group", "Panel Block Pricing", "card", "pricing", "panel"],
	attributes: {
		className: "is-style-system-panel",
		layout: {
			type: "default",
		},
		metadata: {
			name: "System Panel",
		},
	},
	innerBlocks: [
		[
			"core/group",
			{
				className: "is-style-system-panel-header",
				layout: {
					type: "default"
				}
			},
			[
				[
					"core/heading",
					{
						level: 5,
						metadata: {
							name: "Panel Heading"
						},
						style: {
							typography: {
								textAlign: "center"
							}
						},
						content: "Pro Tier"
					}
				]
			]
		],
		[
			"core/heading",
			{
				level: 2,
				style: {
					typography: {
						fontStyle: "normal",
						fontWeight: "700",
						fontSize: "4rem",
						textAlign: "center"
					}
				},
				content: '$49<span style="font-size:clamp(1.1rem, 1.1vw, 1.3rem)" class="wp-element-caption">/mo</span>'
			}
		],
		[
			"core/paragraph",
			{
				style: {
					typography: {
						textAlign: "center"
					}
				},
				content: "Perfect for serious developers."
			}
		],
		[
			"core/list",
			{
				className: "is-style-system-list"
			},
			[
				[
					"core/list-item",
					{
						content: "Unlimited Projects"
					}
				],
				[
					"core/list-item",
					{
						content: "Priority 24/7 Support"
					}
				],
				[
					"core/list-item",
					{
						content: "Custom Domains"
					}
				]
			]
		],
		[
			"core/group",
			{
				className: "is-style-system-panel-footer",
				layout: {
					type: "default"
				}
			},
			[
				[
					"core/buttons",
					{
						layout: {
							type: "flex",
							justifyContent: "center"
						}
					},
					[
						[
							"core/button",
							{
								width: 100,
								text: "Get Started Now"
							}
						]
					]
				]
			]
		]
	],
});
