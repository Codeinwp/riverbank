<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: hero-with-feature-columns
 * title: Hero section with feature columns
 * categories: Riverbank
 * keywords: columns, hero
 */

use Riverbank\Assets_Manager;

$features = array(
	__( 'FSE Templates', 'riverbank' ),
	__( 'Patterns', 'riverbank' ),
	__( 'Style Variations', 'riverbank' ),
);

$column_markup = '
<!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"level":3} -->
	<h3>%s</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
';

$columns_markup = '';

foreach ( $features as $feature ) {
	$columns_markup .= sprintf( $column_markup, $feature );
}

return array(
	'title'      => __( 'Hero section with feature columns', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"24px","margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"level":1,"align":"wide","fontSize":"huge"} -->
			<h1 class="alignwide has-huge-font-size">An organic theme for Gutenberg</h1>
			<!-- /wp:heading -->
		
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
			<!-- /wp:paragraph -->
		
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full">
			<img src="' . esc_url( Assets_Manager::get_image_url( 'img-riverbank-09.png' ) ) . '"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
		' . $columns_markup . '
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
