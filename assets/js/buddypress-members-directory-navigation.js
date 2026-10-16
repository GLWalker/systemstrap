/* global jQuery */
( function ( $ ) {
	'use strict';

	function normalizeStructure( navigation ) {
		var lists = navigation.querySelectorAll( ':scope > ul' );

		lists.forEach( function ( list ) {
			list.classList.add( 'wp-block-navigation__container' );

			list.querySelectorAll( ':scope > li' ).forEach( function ( item ) {
				var link = item.querySelector( ':scope > a' );

				item.classList.add( 'wp-block-navigation-item' );

				if ( link ) {
					link.classList.add( 'wp-block-navigation-item__content' );
				}
			} );
		} );
	}

	function syncCurrentState( navigation ) {
		var items = navigation.querySelectorAll( ':scope > .wp-block-navigation__container > .wp-block-navigation-item' );
		var hasSelectedItem = navigation.querySelector( ':scope > .wp-block-navigation__container > .wp-block-navigation-item.selected' );

		items.forEach( function ( item ) {
			var link = item.querySelector( ':scope > .wp-block-navigation-item__content' );
			var isCurrent = hasSelectedItem ? item.classList.contains( 'selected' ) : item.classList.contains( 'current' );

			item.classList.toggle( 'current-menu-item', isCurrent );

			if ( ! link ) {
				return;
			}

			if ( isCurrent ) {
				link.setAttribute( 'aria-current', 'page' );
				link.setAttribute( 'data-strap-bp-current', 'true' );
			} else {
				link.removeAttribute( 'aria-current' );
				link.removeAttribute( 'data-strap-bp-current' );
			}
		} );
	}

	function normalizeNavigation( navigation ) {
		normalizeStructure( navigation );
		syncCurrentState( navigation );
	}

	function initialize() {
		document.querySelectorAll( '#buddypress .strap-bp-horizontal-navigation:is(.dir-navs, .bp-subnavs, #object-nav.horizontal)' ).forEach( normalizeNavigation );
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', initialize );
	} else {
		initialize();
	}

	$( document ).on( 'bp_ajax_request bp_ajax_append bp_ajax_prepend', '#buddypress [data-bp-list]', initialize );
}( jQuery ) );
