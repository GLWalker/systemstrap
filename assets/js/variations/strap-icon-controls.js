/**
 * SystemStrap Icon Dialog Controls
 * 
 * Extends the modern Icon block (and Buttons) to act as a Dialog/Offcanvas trigger.
 */
;(function (wp) {
	const el = wp.element.createElement;
	const Fragment = wp.element.Fragment;
	const InspectorControls = wp.blockEditor.InspectorControls;
	const PanelBody = wp.components.PanelBody;
	const SelectControl = wp.components.SelectControl;
	const ToggleControl = wp.components.ToggleControl;

	// Blocks allowed to trigger dialogs
	const allowedBlocks = ["core/icon", "icon-block/icon", "core/button"];
	const offcanvasPrefix = 'offcanvas-';
	const modalPrefix = 'modal-';

	function mapLegacyPatternToTemplatePart(patternName) {
		if (!patternName) {
			return '';
		}

		const nameParts = patternName.split('/');
		const slug = (nameParts.length > 1 ? nameParts[1] : patternName).toLowerCase();

		if (slug === 'modal-search' || slug === 'modal-search-full') {
			return 'modal-search';
		}

		if (slug.indexOf(modalPrefix) === 0) {
			return 'modal-part';
		}

		if (slug.indexOf(offcanvasPrefix) === 0) {
			return 'offcanvas-part';
		}

		return '';
	}

	function getTemplatePartLabel(templatePart) {
		if (!templatePart) {
			return '';
		}

		if (templatePart.title) {
			if (typeof templatePart.title === 'string') {
				return templatePart.title;
			}

			if (templatePart.title.rendered) {
				return templatePart.title.rendered;
			}

			if (templatePart.title.raw) {
				return templatePart.title.raw;
			}
		}

		if (templatePart.slug) {
			return templatePart.slug
				.replace(/-/g, ' ')
				.replace(/\b\w/g, function (letter) {
					return letter.toUpperCase();
				});
		}

		return templatePart.id || '';
	}

	// 1. Extend attributes for the allowed blocks
	wp.hooks.addFilter(
		"blocks.registerBlockType",
		"systemstrap/extend-dialog-attributes",
		function (settings, name) {
			if (allowedBlocks.includes(name)) {
				settings.attributes = Object.assign(settings.attributes || {}, {
					systemDialogAction: { type: "boolean", default: false },
					systemDialogPattern: { type: "string", default: "" },
					systemDialogTemplatePart: { type: "string", default: "" },
					systemDialogPosition: { type: "string", default: "start" },
				});
			}
			return settings;
		}
	);

	// 2. Add controls to the block editor
	wp.hooks.addFilter(
		"editor.BlockEdit",
		"systemstrap/add-dialog-inspector-controls",
		function (BlockEdit) {
			return function (props) {
				if (allowedBlocks.includes(props.name)) {
					const attributes = props.attributes;
					const setAttributes = props.setAttributes;
					
					// Use wp.data.useSelect to fetch template parts dynamically from the editor store.
					const templateParts = wp.data.useSelect(function(select) {
						const coreStore = select('core');
						return coreStore && coreStore.getEntityRecords
							? coreStore.getEntityRecords('postType', 'wp_template_part', { per_page: -1 })
							: [];
					}, []);

					// Determine the filter keyword based on selected position
					const isModal = attributes.systemDialogPosition === 'center';
					const selectedTemplatePart = attributes.systemDialogTemplatePart || mapLegacyPatternToTemplatePart(attributes.systemDialogPattern);
					
					// Build options array
					let templatePartOptions = [{ label: "Select Template Part...", value: "" }];
					
					if (templateParts && templateParts.length > 0) {
						templateParts.forEach(function(templatePart) {
							const slug = templatePart.slug ? templatePart.slug.toLowerCase() : '';
							const isModalPart = slug.indexOf(modalPrefix) === 0;
							const isOffcanvasPart = slug.indexOf(offcanvasPrefix) === 0;

							if ((isModal && isModalPart) || (!isModal && isOffcanvasPart)) {
								templatePartOptions.push({
									label: getTemplatePartLabel(templatePart),
									value: templatePart.slug
								});
							}
						});
					}

					return el(
						Fragment,
						null,
						el(BlockEdit, props),
						el(
							InspectorControls,
							{ key: "systemstrap-dialog-controls" },
							el(
								PanelBody,
								{
									title: "Dialog Action",
									initialOpen: true,
									key: "systemstrap-dialog-panel"
								},
								el(ToggleControl, {
									label: "Trigger Dialog Modal?",
									checked: !!attributes.systemDialogAction,
									onChange: function (val) {
										setAttributes({ systemDialogAction: val });
									}
								}),
								attributes.systemDialogAction && el(SelectControl, {
									label: "Slide Direction / Position",
									value: attributes.systemDialogPosition,
									options: [
										{ label: "Left (Start)", value: "start" },
										{ label: "Right (End)", value: "end" },
										{ label: "Top", value: "top" },
										{ label: "Bottom", value: "bottom" },
										{ label: "Center (Modal)", value: "center" },
									],
									onChange: function (value) {
										setAttributes({
											systemDialogPosition: value,
											systemDialogPattern: "",
											systemDialogTemplatePart: ""
										});
									}
								}),
								attributes.systemDialogAction && el(SelectControl, {
									label: "Load Template Part",
									value: selectedTemplatePart,
									options: templatePartOptions,
									onChange: function (value) {
										setAttributes({
											systemDialogTemplatePart: value,
											systemDialogPattern: ""
										});
									}
								})
							)
						)
					);
				}
				
				// Fallback for all other blocks
				return el(BlockEdit, props);
			};
		}
	);

})(window.wp);
