<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: section-with-covers-and-text
 * title: Full-width section with covers and text
 * categories: Riverbank
 * keywords: cover, full-width
 */

use Riverbank\Assets_Manager;

$images = array(
	Assets_Manager::get_image_url( 'img-riverbank-08.png' ),
	Assets_Manager::get_image_url( 'img-riverbank-07.png' ),
);

$cover_markup = '
<!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:cover {"url":"%1$s","dimRatio":0,"overlayColor":"ti-bg-inv","minHeight":567,"minHeightUnit":"px"} -->
	<div class="wp-block-cover" style="min-height:567px"><span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background" src="%1$s" data-object-fit="cover"/>
		<div class="wp-block-cover__inner-container">
		<!-- wp:paragraph --><p></p><!-- /wp:paragraph -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:column -->
';

$covers_markup = '';

foreach ( $images as $image ) {
	$covers_markup .= sprintf( $cover_markup, $image );
}

return array(
	'title'      => __( 'Full-width section with covers and text', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-alt","textColor":"ti-fg","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-ti-fg-color has-ti-bg-alt-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px">
	<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns alignfull">
	' . $covers_markup . '
		<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading -->
				<h2>Lorem ipsum dolor si amet</h2>
				<!-- /wp:heading -->
			
				<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
				<p class="has-text-align-left has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);


