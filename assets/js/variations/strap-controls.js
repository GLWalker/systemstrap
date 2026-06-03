/**
 * SystemStrap Custom Block Controls
 * 
 * Injects custom InspectorControl panels for specific block variations based on their metadata name.
 */
;(function (wp) {
	const el = wp.element.createElement;
	const Fragment = wp.element.Fragment;
	const InspectorControls = wp.blockEditor.InspectorControls;
	const PanelBody = wp.components.PanelBody;
	const SelectControl = wp.components.SelectControl;

	// 1. Extend attributes for the core/group block
	wp.hooks.addFilter(
		"blocks.registerBlockType",
		"systemstrap/extend-group-attributes",
		function (settings, name) {
			if (name === "core/group") {
				settings.attributes = Object.assign(settings.attributes, {
					systemNavPosition: { type: "string", default: "bottom" }
				});
			}
			return settings;
		}
	);

	// 2. Add controls to the block editor
	wp.hooks.addFilter(
		"editor.BlockEdit",
		"systemstrap/add-group-inspector-controls",
		function (BlockEdit) {
			return function (props) {
				// Only target core/group
				if (props.name === "core/group") {
					const metadataName = props.attributes.metadata?.name || "";
					
					// If we want to target other carousels in the future, we just add them here!
					const isCarousel = metadataName.includes("Carousel");

					if (isCarousel) {
						const attributes = props.attributes;
						const setAttributes = props.setAttributes;

						return el(
							Fragment,
							null,
							el(BlockEdit, props),
							el(
								InspectorControls,
								{ key: "systemstrap-inspector-controls" },
								el(
									PanelBody,
									{
										title: "Carousel Settings",
										initialOpen: true,
										key: "systemstrap-carousel-panel"
									},
									el(SelectControl, {
										label: "Button Placement",
										value: attributes.systemNavPosition || "",
										options: [
											{ label: "Default", value: "" },
											{ label: "Top", value: "top" },
											{ label: "Centered", value: "center" },
											{ label: "Centered Outside", value: "center-out" },
											{ label: "Bottom", value: "bottom" },
										],
										onChange: function (value) {
											setAttributes({ systemNavPosition: value });
										}
									})
								)
							)
						);
					}
				}
				
				// Fallback for all other blocks
				return el(BlockEdit, props);
			};
		}
	);

	// 3. Add custom attributes to the block's wrapper class in the Editor
	wp.hooks.addFilter(
		"editor.BlockListBlock",
		"systemstrap/apply-editor-classes",
		function (BlockListBlock) {
			return function (props) {
				if (props.name === "core/group" && props.attributes.systemNavPosition) {
					// Clone the wrapper props to inject the class
					const wrapperProps = props.wrapperProps ? { ...props.wrapperProps } : {};
					const customClass = "has-nav-" + props.attributes.systemNavPosition;
					
					// Avoid duplicate classes
					if (!wrapperProps.className || !wrapperProps.className.includes(customClass)) {
						wrapperProps.className = wrapperProps.className 
							? wrapperProps.className + " " + customClass 
							: customClass;
					}
					
					return el(BlockListBlock, Object.assign({}, props, { wrapperProps: wrapperProps }));
				}
				return el(BlockListBlock, props);
			};
		}
	);

	// 4. Add custom attributes to the block's saved output on the Frontend
	wp.hooks.addFilter(
		"blocks.getSaveContent.extraProps",
		"systemstrap/apply-frontend-classes",
		function (extraProps, blockType, attributes) {
			if (blockType.name === "core/group" && attributes.systemNavPosition) {
				const customClass = "has-nav-" + attributes.systemNavPosition;
				
				if (!extraProps.className || !extraProps.className.includes(customClass)) {
					extraProps.className = extraProps.className 
						? extraProps.className + " " + customClass 
						: customClass;
				}
			}
			return extraProps;
		}
	);
})(window.wp);
