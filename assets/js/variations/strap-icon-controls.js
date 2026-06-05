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

	// 1. Extend attributes for the allowed blocks
	wp.hooks.addFilter(
		"blocks.registerBlockType",
		"systemstrap/extend-dialog-attributes",
		function (settings, name) {
			if (allowedBlocks.includes(name)) {
				settings.attributes = Object.assign(settings.attributes || {}, {
					systemDialogAction: { type: "boolean", default: false },
					systemDialogPattern: { type: "string", default: "" },
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
					
					// Use wp.data.useSelect to fetch patterns dynamically from the editor store
					const blockPatterns = wp.data.useSelect(function(select) {
						const coreStore = select('core');
						return coreStore && coreStore.getBlockPatterns ? coreStore.getBlockPatterns() : [];
					}, []);

					// Determine the filter keyword based on selected position
					const isModal = attributes.systemDialogPosition === 'center';
					
					// Build options array
					let patternOptions = [{ label: "Select Pattern...", value: "" }];
					
					if (blockPatterns && blockPatterns.length > 0) {
						blockPatterns.forEach(function(pattern) {
							// Split namespace from slug (e.g., 'systemstrap/modal-search' -> 'modal-search')
							// User created patterns in the DB might have different namespaces (like 'core/' or none)
							const nameParts = pattern.name.split('/');
							const slug = nameParts.length > 1 ? nameParts[1].toLowerCase() : pattern.name.toLowerCase();
							
							// If Center (modal), strictly load patterns whose slug starts with 'modal-'
							// Otherwise, strictly load patterns whose slug starts with 'offcanvas-'
							if (isModal && slug.startsWith('modal-')) {
								patternOptions.push({ label: pattern.title, value: pattern.name });
							} else if (!isModal && slug.startsWith('offcanvas-')) {
								patternOptions.push({ label: pattern.title, value: pattern.name });
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
										// If they change position, clear the pattern if it's no longer valid
										setAttributes({ systemDialogPosition: value, systemDialogPattern: "" });
									}
								}),
								attributes.systemDialogAction && el(SelectControl, {
									label: "Load Pattern",
									value: attributes.systemDialogPattern,
									options: patternOptions,
									onChange: function (value) {
										setAttributes({ systemDialogPattern: value });
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
