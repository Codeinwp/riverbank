import { createRoot } from '@wordpress/element';

import DesignPackNotice from './components/DesignPackNotice';

const container = document.createElement( 'div' );
container.id = 'riverbank-design-pack-notice';
document.body.appendChild( container );

if ( container ) {
	createRoot( container ).render( <DesignPackNotice /> );
}
