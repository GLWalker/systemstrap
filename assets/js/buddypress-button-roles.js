( function () {
	'use strict';

	function applyCompactRole( root ) {
		var submit = root.querySelector( '#aw-whats-new-submit' );

		if ( ! submit ) {
			return;
		}

		submit.classList.add( 'wp-element-button', 'strap-bp-default-button', 'strap-bp-button-small', 'has-small-font-size' );
	}

	function initialize() {
		document.querySelectorAll( '.strap-bp-controls-system-scope#bp-nouveau-activity-form' ).forEach( function ( root ) {
			applyCompactRole( root );
			new MutationObserver( function () {
				applyCompactRole( root );
			} ).observe( root, { childList: true, subtree: true } );
		} );
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', initialize );
	} else {
		initialize();
	}
}() );
