/**
 * SystemStrap global style variation sync.
 *
 * When a color variation is selected in the Site Editor, apply its suggested
 * typography variation from the localized pairing manifest.
 */
;( function( wp ) {
	if ( ! wp || ! wp.data ) {
		return;
	}

	var store = window.systemstrapStyleSync || {};
	var typographyPairings = store.pairings || [];
	var defaultTypography = store.defaultTypography || {};
	var select = wp.data.select;
	var dispatch = wp.data.dispatch;
	var lastColorSelectionSignature = '';
	var isApplying = false;
	var isInitialBoot = true;

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

	function extractPropertiesDeep( value, properties ) {
		if ( Array.isArray( value ) ) {
			return value.map( function( item ) {
				return extractPropertiesDeep( item, properties );
			} );
		}

		if ( ! value || typeof value !== 'object' ) {
			return {};
		}

		var extracted = {};

		Object.keys( value ).forEach( function( key ) {
			if ( properties.indexOf( key ) !== -1 ) {
				extracted[ key ] = value[ key ];
				return;
			}

			var nextValue = extractPropertiesDeep( value[ key ], properties );
			if ( Object.keys( nextValue ).length ) {
				extracted[ key ] = nextValue;
			}
		} );

		return extracted;
	}

	function getThemePreset( preset ) {
		if ( preset && ! Array.isArray( preset ) && Array.isArray( preset.theme ) ) {
			return preset.theme;
		}

		return Array.isArray( preset ) ? preset : [];
	}

	function getPaletteSignature( palette ) {
		return stableStringify(
			getThemePreset( palette ).map( function( color ) {
				return {
					slug: color.slug || '',
					color: typeof color.color === 'string' ? color.color.toLowerCase() : '',
				};
			} )
		);
	}

	function normalizeTypographySettings( value ) {
		if ( Array.isArray( value ) ) {
			return value.map( normalizeTypographySettings );
		}

		if ( ! value || typeof value !== 'object' ) {
			return value;
		}

		var normalized = {};

		Object.keys( value ).forEach( function( key ) {
			var item = value[ key ];
			if ( ( key === 'fontFamilies' || key === 'fontSizes' ) && Array.isArray( item ) ) {
				normalized[ key ] = { theme: item };
				return;
			}

			normalized[ key ] = normalizeTypographySettings( item );
		} );

		return normalized;
	}

	function findPairing( currentRecord ) {
		var activePalette = currentRecord.settings && currentRecord.settings.color && currentRecord.settings.color.palette;
		var activePaletteSignature = getPaletteSignature( activePalette );

		return typographyPairings.find( function( pairing ) {
			return activePaletteSignature === getPaletteSignature( pairing.palette );
		} ) || null;
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
		if ( ! coreSelect || ! coreSelect.getEditedEntityRecord ) {
			return;
		}

		var globalStylesId = coreSelect.__experimentalGetCurrentGlobalStylesId && coreSelect.__experimentalGetCurrentGlobalStylesId();
		if ( ! globalStylesId ) {
			return;
		}

		var currentRecord = coreSelect.getEditedEntityRecord( 'root', 'globalStyles', globalStylesId );
		if ( ! currentRecord ) {
			return;
		}

		var pairing = findPairing( currentRecord );
		var colorSelectionSignature = getPaletteSignature(
			currentRecord.settings && currentRecord.settings.color && currentRecord.settings.color.palette
		);

		if ( isInitialBoot ) {
			isInitialBoot = false;
			lastColorSelectionSignature = colorSelectionSignature;
			return;
		}

		if ( colorSelectionSignature === lastColorSelectionSignature ) {
			return;
		}

		lastColorSelectionSignature = colorSelectionSignature;

		if ( ! pairing ) {
			return;
		}

		var typography = pairing.typography || defaultTypography;
		var typographySettings = normalizeTypographySettings(
			extractPropertiesDeep( typography.settings || {}, [ 'typography' ] )
		);
		var typographyStyles = extractPropertiesDeep( typography.styles || {}, [ 'typography' ] );

		var mergedSettings = mergeObjects(
			stripPropertiesDeep( currentRecord.settings || {}, [ 'typography' ] ),
			typographySettings
		);
		var mergedStyles = mergeObjects(
			stripPropertiesDeep( currentRecord.styles || {}, [ 'typography' ] ),
			typographyStyles
		);

		if (
			stableStringify( mergedSettings ) === stableStringify( currentRecord.settings || {} ) &&
			stableStringify( mergedStyles ) === stableStringify( currentRecord.styles || {} )
		) {
			return;
		}

		isApplying = true;

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
