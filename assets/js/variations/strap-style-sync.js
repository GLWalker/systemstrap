/**
 * SystemStrap global style variation sync.
 *
 * When a root layout variation is selected in the Site Editor, automatically
 * merge the matching color and typography partials that share the same stem.
 */
;( function( wp ) {
	if ( ! wp || ! wp.data ) {
		return;
	}

	var store = window.systemstrapStyleSync || {};
	var variationMap = store.variationMap || {};
	var select = wp.data.select;
	var dispatch = wp.data.dispatch;
	var lastAppliedSignature = '';
	var lastLayoutSelectionSignature = '';
	var isApplying = false;

	function sortKeysDeep( value ) {
		if ( Array.isArray( value ) ) {
			return value.map( sortKeysDeep );
		}

		if ( value && typeof value === 'object' ) {
			var sorted = {};
			Object.keys( value ).sort().forEach( function( key ) {
				if ( typeof value[ key ] !== 'undefined' ) {
					sorted[ key ] = sortKeysDeep( value[ key ] );
				}
			} );
			return sorted;
		}

		return value;
	}

	function stableStringify( value ) {
		return JSON.stringify( sortKeysDeep( value || {} ) );
	}

	function stripPropertiesDeep( value, properties ) {
		if ( Array.isArray( value ) ) {
			return value.map( function( item ) {
				return stripPropertiesDeep( item, properties );
			} );
		}

		if ( ! value || typeof value !== 'object' ) {
			return value;
		}

		var stripped = {};

		Object.keys( value ).forEach( function( key ) {
			if ( properties.indexOf( key ) !== -1 ) {
				return;
			}

			var nextValue = stripPropertiesDeep( value[ key ], properties );
			if ( typeof nextValue !== 'undefined' ) {
				stripped[ key ] = nextValue;
			}
		} );

		return stripped;
	}

	function getVariationTitle( variation ) {
		if ( ! variation || typeof variation !== 'object' ) {
			return '';
		}

		if ( variation.title && typeof variation.title === 'object' && variation.title.raw ) {
			return variation.title.raw;
		}

		return variation.title || '';
	}

	function getLayoutSlugByTitle( title ) {
		var matchedSlug = '';

		Object.keys( variationMap ).some( function( slug ) {
			if ( variationMap[ slug ].layoutTitle === title ) {
				matchedSlug = slug;
				return true;
			}

			return false;
		} );

		return matchedSlug;
	}

	function getVariationByTitle( variations, title ) {
		return ( variations || [] ).find( function( variation ) {
			return getVariationTitle( variation ) === title;
		} ) || null;
	}

	function findMatchedRootSlug( rootVariations, currentRecord ) {
		var currentSignature = stableStringify( {
			settings: stripPropertiesDeep( currentRecord.settings || {}, [ 'color', 'typography' ] ),
			styles: stripPropertiesDeep( currentRecord.styles || {}, [ 'color', 'typography' ] ),
		} );

		var matchedVariation = rootVariations.find( function( variation ) {
			return currentSignature === stableStringify( {
				settings: stripPropertiesDeep( variation.settings || {}, [ 'color', 'typography' ] ),
				styles: stripPropertiesDeep( variation.styles || {}, [ 'color', 'typography' ] ),
			} );
		} );

		if ( ! matchedVariation ) {
			return '';
		}

		return getLayoutSlugByTitle( getVariationTitle( matchedVariation ) );
	}

	function mergeObjects( base, overlay ) {
		var result = Object.assign( {}, base || {} );

		Object.keys( overlay || {} ).forEach( function( key ) {
			var baseValue = result[ key ];
			var overlayValue = overlay[ key ];

			if (
				baseValue &&
				overlayValue &&
				typeof baseValue === 'object' &&
				typeof overlayValue === 'object' &&
				! Array.isArray( baseValue ) &&
				! Array.isArray( overlayValue )
			) {
				result[ key ] = mergeObjects( baseValue, overlayValue );
				return;
			}

			result[ key ] = overlayValue;
		} );

		return result;
	}

	function maybeSyncLinkedVariations() {
		if ( isApplying ) {
			return;
		}

		var coreSelect = select( 'core' );
		if ( ! coreSelect || ! coreSelect.getEditedEntityRecord || ! coreSelect.__experimentalGetCurrentThemeGlobalStylesVariations ) {
			return;
		}

		var globalStylesId = coreSelect.__experimentalGetCurrentGlobalStylesId && coreSelect.__experimentalGetCurrentGlobalStylesId();
		if ( ! globalStylesId ) {
			return;
		}

		var currentRecord = coreSelect.getEditedEntityRecord( 'root', 'globalStyles', globalStylesId );
		var variations = coreSelect.__experimentalGetCurrentThemeGlobalStylesVariations();
		if ( ! currentRecord || ! Array.isArray( variations ) || ! variations.length ) {
			return;
		}

		var rootVariations = variations.filter( function( variation ) {
			return !! getLayoutSlugByTitle( getVariationTitle( variation ) );
		} );
		var matchedSlug = findMatchedRootSlug( rootVariations, currentRecord );
		var layoutSelectionSignature = stableStringify( {
			settings: stripPropertiesDeep( currentRecord.settings || {}, [ 'color', 'typography' ] ),
			styles: stripPropertiesDeep( currentRecord.styles || {}, [ 'color', 'typography' ] ),
		} );

		if ( ! matchedSlug || ! variationMap[ matchedSlug ] ) {
			lastAppliedSignature = '';
			lastLayoutSelectionSignature = layoutSelectionSignature;
			return;
		}

		if ( layoutSelectionSignature === lastLayoutSelectionSignature ) {
			return;
		}

		var rootSignature = matchedSlug + '::' + stableStringify( {
			settings: currentRecord.settings || {},
			styles: currentRecord.styles || {},
		} );

		if ( rootSignature === lastAppliedSignature ) {
			return;
		}

		var colorVariation = getVariationByTitle( variations, variationMap[ matchedSlug ].colorTitle );
		var typographyVariation = getVariationByTitle( variations, variationMap[ matchedSlug ].typographyTitle );

		if ( ! colorVariation || ! typographyVariation ) {
			lastAppliedSignature = rootSignature;
			return;
		}

		var mergedSettings = mergeObjects(
			mergeObjects( currentRecord.settings || {}, colorVariation.settings || {} ),
			typographyVariation.settings || {}
		);
		var mergedStyles = mergeObjects(
			mergeObjects( currentRecord.styles || {}, colorVariation.styles || {} ),
			typographyVariation.styles || {}
		);

		if (
			stableStringify( mergedSettings ) === stableStringify( currentRecord.settings || {} ) &&
			stableStringify( mergedStyles ) === stableStringify( currentRecord.styles || {} )
		) {
			lastLayoutSelectionSignature = layoutSelectionSignature;
			lastAppliedSignature = rootSignature;
			return;
		}

		isApplying = true;
		lastLayoutSelectionSignature = layoutSelectionSignature;
		lastAppliedSignature = rootSignature;

		dispatch( 'core' ).editEntityRecord(
			'root',
			'globalStyles',
			globalStylesId,
			{
				settings: mergedSettings,
				styles: mergedStyles,
			},
			{ undoIgnore: true }
		);

		window.setTimeout( function() {
			isApplying = false;
		}, 0 );
	}

	wp.data.subscribe( maybeSyncLinkedVariations );
	maybeSyncLinkedVariations();
} )( window.wp );
