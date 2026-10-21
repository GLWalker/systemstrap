( function () {
	'use strict';

	function applyEditorPalette( editor ) {
		var scope;
		var styles;
		var editorBody;
		var sourceElement;

		if ( ! editor || ! editor.getBody() ) {
			return;
		}

		sourceElement = editor.getElement();
		scope = sourceElement ? sourceElement.closest( '.strap-bp-controls-system-scope' ) : null;
		if ( ! scope ) {
			return;
		}

		styles = window.getComputedStyle( scope );
		editorBody = editor.getBody();
		editorBody.style.backgroundColor = styles.getPropertyValue( '--wp--custom--form-bg-color' ).trim();
		editorBody.style.color = styles.getPropertyValue( '--wp--custom--form-text-color' ).trim();
	}

	function watchEditor( editor ) {
		if ( ! editor || editor.strapBpPaletteWatched ) {
			return;
		}
		editor.strapBpPaletteWatched = true;

		editor.on( 'init', function () {
			applyEditorPalette( editor );
		} );
		editor.on( 'focus', function () {
			applyEditorPalette( editor );
		} );

		applyEditorPalette( editor );
	}

	function initialize() {
		if ( ! window.tinymce ) {
			return;
		}

		window.tinymce.on( 'AddEditor', function ( event ) {
			watchEditor( event.editor );
		} );

		window.tinymce.editors.forEach( watchEditor );
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', initialize );
	} else {
		initialize();
	}
}() );
