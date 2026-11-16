(function () {
	if (! window.wp || ! wp.compose || ! wp.element || ! wp.hooks) {
		return;
	}

	var withTabsCompositionGap = wp.compose.createHigherOrderComponent(function (BlockListBlock) {
		return function (props) {
			if ('core/tabs' !== props.name) {
				return wp.element.createElement(BlockListBlock, props);
			}

			var spacing = props.attributes && props.attributes.style && props.attributes.style.spacing;
			var gap = spacing && spacing.blockGap;

			if (gap && 'object' === typeof gap) {
				gap = gap.top;
			}

			if (null === gap || undefined === gap || '' === gap) {
				return wp.element.createElement(BlockListBlock, props);
			}

			gap = String(gap);

			if (0 === gap.indexOf('var:preset|spacing|')) {
				var slug = gap.split('|').pop().replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();
				gap = '0' === slug ? '0' : 'var(--wp--preset--spacing--' + slug + ')';
			}

			var wrapperProps = Object.assign({}, props.wrapperProps, {
				style: Object.assign({}, props.wrapperProps && props.wrapperProps.style, {
					'--strap-tabs-composition-gap': gap
				})
			});

			return wp.element.createElement(BlockListBlock, Object.assign({}, props, {
				wrapperProps: wrapperProps
			}));
		};
	}, 'withTabsCompositionGap');

	wp.hooks.addFilter(
		'editor.BlockListBlock',
		'systemstrap/tabs-composition-gap',
		withTabsCompositionGap
	);
}());
