var templateUri = (typeof systemstrap !== 'undefined' && systemstrap.templateUri) ? systemstrap.templateUri : "./wp-content/themes/systemstrap/";

var el = wp.element.createElement;

var SystemCarouselIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('path', { d: 'M7.5 6.5 15.75 5a2 2 0 0 1 2.3 1.65l1.25 7.1' }),
	el('rect', { x: '5', y: '8', width: '12.5', height: '9.5', rx: '2.25' }),
	el('path', { d: 'M8 14.5l2-2 2 2 1.25-1.25L15.5 15.5' })
);

var SystemHeroIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('rect', { x: '2.5', y: '5', width: '19', height: '14', rx: '2.5' }),
	el('path', { d: 'M12 7.25v1.5M12 13.75v1.5M8.75 11.25h6.5M10 14h4' }),
	el('path', { d: 'M12 8.75c.35 1.25 1 1.9 2.25 2.25C13 11.35 12.35 12 12 13.25 11.65 12 11 11.35 9.75 11 11 10.65 11.65 10 12 8.75Z' }),
	el('path', { d: 'M2.5 16.25c3.5-1.5 6.5-1.5 9 0s6 1.5 10 0' })
);

var SystemCarouselPostsIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('path', { d: 'M7 5.5 16 4.25a2.25 2.25 0 0 1 2.5 1.9l.85 6' }),
	el('rect', { x: '3.5', y: '7', width: '16', height: '12', rx: '2.75' }),
	el('path', { d: 'M7.25 11h8.5M7.25 14.5h6.25' })
);

var SystemCarouselCommentsIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('path', { d: 'M7 5.5 16 4.25a2.25 2.25 0 0 1 2.5 1.9l.7 5' }),
	el('rect', { x: '3.5', y: '7', width: '16', height: '12', rx: '2.75' }),
	el('path', { d: 'M8 11.25h5.75M8 14.25h3.75' }),
	el('path', { d: 'M14.25 13.75h3.25a2 2 0 0 1 2 2v.5a2 2 0 0 1-2 2h-1.25L14.5 20v-1.75h-.25a2 2 0 0 1-2-2v-.5a2 2 0 0 1 2-2Z' })
);

var SystemCarouselMediaTextIcon = el(
	'svg',
	{ viewBox: '0 0 24 24', fill: 'none', stroke: 'currentColor', strokeWidth: '1.5', strokeLinecap: 'round', strokeLinejoin: 'round', 'aria-hidden': 'true', style: { fill: 'none', transform: 'scale(1.15)', transformOrigin: 'center' } },
	el('path', { d: 'M6.5 5.5 15.75 4a2.2 2.2 0 0 1 2.5 1.8l1.1 6.25' }),
	el('rect', { x: '3.5', y: '7', width: '16', height: '12', rx: '2.5' }),
	el('circle', { cx: '8.25', cy: '11.25', r: '1.75' }),
	el('path', { d: 'M5.75 16.25a3 3 0 0 1 5 0' }),
	el('path', { d: 'M13 11h4M13 14h3.25M13 16.75h2' })
);

/* ==========================================================================
   1. Carousel - Media/Custom (Cover Blocks)
   ========================================================================== */
wp.blocks.registerBlockVariation("core/group", {
	name: "strap-carousel-media",
	title: "Carousel: Media / Custom",
	category: "systemstrap",
	description: "A large hero slider using Cover blocks.",
	icon: SystemHeroIcon,
	scope: ["inserter"],
	keywords: ["Carousel", "slider", "media", "cover", "hero"],
	attributes: {
		className: "alignfull",
		layout: { type: "constrained" },
		metadata: { name: "Media Carousel" },
	},
	innerBlocks: [
		[
			"core/group",
			{ className: "system-carousel-wrapper", layout: { type: "constrained" } },
			[
				[ 
					"core/buttons", 
					{ className: "system-carousel-nav-buttons", layout: { type: "flex", flexWrap: "nowrap" } }, 
					[
						[ "core/button", { className: "carousel-prev is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-left\"></span>", url: "#" } ],
						[ "core/button", { className: "carousel-next is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-right\"></span>", url: "#" } ]
					]
				],
				[
					"core/group",
					{
						className: "is-style-system-carousel",
						layout: { type: "default" },
					},
					[
						[ "core/cover", { url: templateUri + "assets/media/blog-1200x800.webp", dimRatio: 0, isUserOverlayColor: true, style: { color: { duotone: "var:preset|duotone|duotone-13" } } }, [[ "core/heading", { textAlign: "center", content: "Slide 1 Content" }]] ],
						[ "core/cover", { url: templateUri + "assets/media/blog-1200x800.webp", dimRatio: 0, isUserOverlayColor: true, style: { color: { duotone: "var:preset|duotone|duotone-14" } } }, [[ "core/heading", { textAlign: "center", content: "Slide 2 Content" }]] ],
						[ "core/cover", { url: templateUri + "assets/media/blog-1200x800.webp", dimRatio: 0, isUserOverlayColor: true, style: { color: { duotone: "var:preset|duotone|duotone-15" } } }, [[ "core/heading", { textAlign: "center", content: "Slide 3 Content" }]] ],
					]
				]
			]
		]
	],
});

/* ==========================================================================
   2. Carousel - Banner Slider
   ========================================================================== */
wp.blocks.registerBlockVariation("core/group", {
	name: "strap-carousel-banner",
	title: "Carousel: Banner Slider",
	category: "systemstrap",
	description: "Full width banner image slider.",
	icon: SystemHeroIcon,
	scope: ["inserter"],
	keywords: ["Carousel", "slider", "banner", "image"],
	attributes: {
		className: "alignfull",
		layout: { type: "constrained" },
		metadata: { name: "Banner Carousel" },
	},
	innerBlocks: [
		[
			"core/group",
			{ className: "system-carousel-wrapper", layout: { type: "constrained" } },
			[
				[ 
					"core/buttons", 
					{ className: "system-carousel-nav-buttons", layout: { type: "flex", flexWrap: "nowrap" } }, 
					[
						[ "core/button", { className: "carousel-prev is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-left\"></span>", url: "#" } ],
						[ "core/button", { className: "carousel-next is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-right\"></span>", url: "#" } ]
					]
				],
				[
					"core/group",
					{
						className: "is-style-system-carousel",
						layout: { type: "default" },
					},
					[
						[ "core/image", { url: templateUri + "assets/media/banner-1200x400.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-13" } } } ],
						[ "core/image", { url: templateUri + "assets/media/banner-1200x400.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-14" } } } ],
						[ "core/image", { url: templateUri + "assets/media/banner-1200x400.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-15" } } } ],
						[ "core/image", { url: templateUri + "assets/media/banner-1200x400.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-16" } } } ],
						[ "core/image", { url: templateUri + "assets/media/banner-1200x400.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-17" } } } ],
					]
				]
			]
		]
	],
});

/* ==========================================================================
   3. Carousel - Multi-Item Thumbnail Slider
   ========================================================================== */
wp.blocks.registerBlockVariation("core/group", {
	name: "strap-carousel-thumb",
	title: "Carousel: Thumbnails",
	category: "systemstrap",
	description: "Slider showing 3 items at a time.",
	icon: SystemCarouselIcon,
	scope: ["inserter"],
	keywords: ["Carousel", "slider", "thumbnails", "grid"],
	attributes: {
		className: "alignwide",
		layout: { type: "constrained" },
		metadata: { name: "Thumbnails Carousel" },
	},
	innerBlocks: [
		[
			"core/group",
			{ className: "system-carousel-wrapper", layout: { type: "constrained" } },
			[
				[ 
					"core/buttons", 
					{ className: "system-carousel-nav-buttons", layout: { type: "flex", flexWrap: "nowrap" } }, 
					[
						[ "core/button", { className: "carousel-prev is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-left\"></span>", url: "#" } ],
						[ "core/button", { className: "carousel-next is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-right\"></span>", url: "#" } ]
					]
				],
				[
					"core/group",
					{
						className: "is-style-system-carousel-auto",
						layout: { type: "default" },
					},
					[
						[ "core/image", { url: templateUri + "assets/media/thumbnail-300x300.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-13" } } } ],
						[ "core/image", { url: templateUri + "assets/media/thumbnail-300x300.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-14" } } } ],
						[ "core/image", { url: templateUri + "assets/media/thumbnail-300x300.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-15" } } } ],
						[ "core/image", { url: templateUri + "assets/media/thumbnail-300x300.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-16" } } } ],
						[ "core/image", { url: templateUri + "assets/media/thumbnail-300x300.webp", sizeSlug: "full", style: { color: { duotone: "var:preset|duotone|duotone-17" } } } ],
					]
				]
			]
		]
	],
});

/* ==========================================================================
   4. Carousel - Media & Text (Meet the Team)
   ========================================================================== */
wp.blocks.registerBlockVariation("core/group", {
	name: "strap-carousel-mediatext",
	title: "Carousel: Media & Text",
	category: "systemstrap",
	description: "Slider featuring media and text profile cards.",
	icon: SystemCarouselMediaTextIcon,
	scope: ["inserter"],
	keywords: ["Carousel", "slider", "team", "profile", "media text"],
	attributes: {
		className: "alignwide",
		layout: { type: "constrained" },
		metadata: { name: "Team Carousel" },
	},
	innerBlocks: [
		[
			"core/group",
			{ className: "system-carousel-wrapper", layout: { type: "constrained" } },
			[
				[ 
					"core/buttons", 
					{ className: "system-carousel-nav-buttons", layout: { type: "flex", flexWrap: "nowrap" } }, 
					[
						[ "core/button", { className: "carousel-prev is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-left\"></span>", url: "#" } ],
						[ "core/button", { className: "carousel-next is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-right\"></span>", url: "#" } ]
					]
				],
				[
					"core/group",
					{
						className: "is-style-system-carousel",
						layout: { type: "default" },
					},
					[
						[
							"core/media-text",
							{
								mediaUrl: templateUri + "assets/media/female-360x480.webp",
								mediaType: "image",
								verticalAlignment: "center",
								className: "is-style-system-panel"
							},
							[
								[ "core/heading", { level: 3, content: "Meet Jane" } ],
								[ "core/paragraph", { content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." } ],
								[ "core/buttons", {}, [[ "core/button", { text: "Contact Jane" } ]] ],
								[ "core/social-links", { iconColor: "current", iconColorValue: "currentcolor", className: "is-style-logos-only" }, [
									[ "core/social-link", { url: "#", service: "facebook" } ],
									[ "core/social-link", { url: "#", service: "x" } ],
									[ "core/social-link", { url: "#", service: "pinterest" } ]
								]]
							]
						],
						[
							"core/media-text",
							{
								mediaUrl: templateUri + "assets/media/male-360x480.webp",
								mediaType: "image",
								verticalAlignment: "center",
								className: "is-style-system-panel"
							},
							[
								[ "core/heading", { level: 3, content: "Meet John" } ],
								[ "core/paragraph", { content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." } ],
								[ "core/buttons", {}, [[ "core/button", { text: "Contact John" } ]] ],
								[ "core/social-links", { iconColor: "current", iconColorValue: "currentcolor", className: "is-style-logos-only" }, [
									[ "core/social-link", { url: "#", service: "facebook" } ],
									[ "core/social-link", { url: "#", service: "x" } ],
									[ "core/social-link", { url: "#", service: "pinterest" } ]
								]]
							]
						]
					]
				]
			]
		]
	],
});

/* ==========================================================================
   5. Carousel - Latest Posts & Comments
   ========================================================================== */
wp.blocks.registerBlockVariation("core/group", {
	name: "strap-carousel-posts",
	title: "Carousel: Latest Posts",
	category: "systemstrap",
	description: "Dynamic latest posts slider.",
	icon: SystemCarouselPostsIcon,
	scope: ["inserter"],
	keywords: ["Carousel", "slider", "posts", "blog"],
	attributes: {
		className: "alignwide",
		layout: { type: "constrained" },
		metadata: { name: "Posts Carousel" },
	},
	innerBlocks: [
		[
			"core/group",
			{ className: "system-carousel-wrapper", layout: { type: "constrained" } },
			[
				[ 
					"core/buttons", 
					{ className: "system-carousel-nav-buttons", layout: { type: "flex", flexWrap: "nowrap" } }, 
					[
						[ "core/button", { className: "carousel-prev is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-left\"></span>", url: "#" } ],
						[ "core/button", { className: "carousel-next is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-right\"></span>", url: "#" } ]
					]
				],
				[
					"core/latest-posts",
					{
						postsToShow: 6,
						displayPostDate: true,
						displayPostImage: true,
						displayPostContent: true,
						displayPostContentRadio: "excerpt",
						excerptLength: 20,
						className: "is-style-system-carousel-auto is-style-system-panel",
					}
				]
			]
		]
	],
});

wp.blocks.registerBlockVariation("core/group", {
	name: "strap-carousel-comments",
	title: "Carousel: Recent Comments",
	category: "systemstrap",
	description: "Dynamic recent comments slider.",
	icon: SystemCarouselCommentsIcon,
	scope: ["inserter"],
	keywords: ["Carousel", "slider", "comments", "testimonials"],
	attributes: {
		className: "alignwide",
		layout: { type: "constrained" },
		metadata: { name: "Comments Carousel" },
	},
	innerBlocks: [
		[
			"core/group",
			{ className: "system-carousel-wrapper", layout: { type: "constrained" } },
			[
				[ 
					"core/buttons", 
					{ className: "system-carousel-nav-buttons", layout: { type: "flex", flexWrap: "nowrap" } }, 
					[
						[ "core/button", { className: "carousel-prev is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-left\"></span>", url: "#" } ],
						[ "core/button", { className: "carousel-next is-style-system-btn-icon", text: "<span class=\"system-icon system-icon-right\"></span>", url: "#" } ]
					]
				],
				[
					"core/latest-comments",
					{
						displayAvatar: true,
						displayDate: true,
						displayExcerpt: true,
						className: "is-style-system-carousel-auto is-style-system-panel",
					}
				]
			]
		]
	],
});
