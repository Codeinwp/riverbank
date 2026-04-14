/* global jQuery */

jQuery( document ).ready( ( $ ) => {
	$( '.wp-block-navigation-submenu__toggle' ).on( 'click', function () {
		$( this ).parent( 'li' ).toggleClass( 'is-submenu-open' );
	} );
} );
