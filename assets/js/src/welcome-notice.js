/* global riverbankData, jQuery */

import { installPlugin, activatePlugin } from './common/plugin-install';

function handleWelcomeNotice( $ ) {
	const {
		activating,
		installing,
		done,
		activationUrl,
		ajaxUrl,
		nonce,
		otterStatus,
	} = riverbankData;

	const installBtn = $(
		'.riverbank-welcome-notice #riverbank-install-otter'
	);
	const dismissBtn = $( '.riverbank-welcome-notice .notice-dismiss' );
	const notice = $( '.riverbank-welcome-notice' );
	const installText = installBtn.find( '.text' );
	const installSpinner = installBtn.find( '.dashicons' );

	const hideAndRemoveNotice = () => {
		notice.fadeTo( 100, 0, () => {
			notice.slideUp( 100, () => {
				notice.remove();
			} );
		} );
	};

	const activateOtter = async () => {
		installText.text( activating );
		await activatePlugin( activationUrl );
		installSpinner.removeClass( 'dashicons-update' );
		installSpinner.addClass( 'dashicons-yes' );
		installText.text( done );
		setTimeout( hideAndRemoveNotice, 1500 );
	};

	$( installBtn ).on( 'click', async () => {
		installSpinner.removeClass( 'hidden' );
		installBtn.attr( 'disabled', true );

		if ( otterStatus === 'installed' ) {
			await activateOtter();
			return;
		}

		installText.text( installing );
		await installPlugin( 'otter-blocks' );
		await activateOtter();
	} );

	$( dismissBtn ).on( 'click', () => {
		$.post( ajaxUrl, {
			nonce,
			action: 'riverbank_dismiss_welcome_notice',
			success: hideAndRemoveNotice,
		} );
	} );
}

document.addEventListener( 'DOMContentLoaded', () => {
	handleWelcomeNotice( jQuery );
} );
