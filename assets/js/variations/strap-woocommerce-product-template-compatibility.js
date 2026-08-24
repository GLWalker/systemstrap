( function( compose, element, hooks ) {
	'use strict';

	if ( ! compose || ! element || ! hooks || ! element.useEffect ) {
		return;
	}

	var createElement = element.createElement;
	var useEffect = element.useEffect;
	var createHigherOrderComponent = compose.createHigherOrderComponent;

	function getCustomSurface( attributes ) {
		var style = attributes.style && 'object' === typeof attributes.style ? attributes.style : {};
		var color = style.color && 'object' === typeof style.color ? style.color : {};

		return {
			background: 'string' === typeof color.background ? color.background : '',
			gradient: 'string' === typeof color.gradient ? color.gradient : ''
		};
	}

	function synchronizeSurface( clientId, surface ) {
		var block = document.querySelector( '[data-block="' + clientId + '"]' );
		var root = block && block.querySelector( 'ul.wp-block-woocommerce-product-template, ul.wc-block-product-template' );

		if ( ! root ) {
			return;
		}

		Object.keys( surface ).forEach( function( property ) {
			var value = surface[ property ];
			var className = 'has-strap-woocommerce-product-template-custom-' + property;
			var variable = '--strap-woocommerce-product-template-' + property;

			root.classList.toggle( className, !! value );

			if ( value ) {
				root.style.setProperty( variable, value );
			} else {
				root.style.removeProperty( variable );
			}
		} );
	}

	hooks.addFilter(
		'editor.BlockEdit',
		'systemstrap/woocommerce-product-template-surface-compatibility',
		createHigherOrderComponent( function( BlockEdit ) {
			return function( props ) {
				var surface = 'woocommerce/product-template' === props.name ? getCustomSurface( props.attributes || {} ) : null;

				useEffect( function() {
					if ( ! surface ) {
						return undefined;
					}

					var frame = window.requestAnimationFrame( function() {
						synchronizeSurface( props.clientId, surface );
					} );

					return function() {
						window.cancelAnimationFrame( frame );
					};
				}, [ props.clientId, surface && surface.background, surface && surface.gradient ] );

				return createElement( BlockEdit, props );
			};
		}, 'withWooProductTemplateSurfaceCompatibility' )
	);
} )( window.wp.compose, window.wp.element, window.wp.hooks );
