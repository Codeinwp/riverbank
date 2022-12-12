<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: boxed-image-features-with-buttons
 * title: Boxed image features with buttons
 * categories: Riverbank
 * keywords: boxed, columns, features, buttons
 */

$image      = \Riverbank\Assets_Manager::get_image_url( 'img-riverbank-05.png' );
$col_markup = '
<!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}},"border":{"width":"2px"}},"backgroundColor":"ti-bg-alt"} -->
<div class="wp-block-column has-ti-bg-alt-background-color has-background" style="border-width:2px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="' . esc_url( $image ) . '"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>%s</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
';

$columns = '';

$features_titles = array(
	__( 'Feature one', 'riverbank' ),
	__( 'Feature two', 'riverbank' ),
	__( 'Feature three', 'riverbank' ),
);

foreach ( $features_titles as $features_title ) {
	$columns .= sprintf( $col_markup, $features_title );
}


return array(
	'title'      => __( 'Boxed image features with buttons', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"40px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">

<!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%">
<!-- wp:heading -->
<h2>Lorem ipsum dolor</h2>
<!-- /wp:heading -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%">
<!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
<p class="has-text-align-right has-medium-font-size">' . __( 'This is a description for the section', 'riverbank' ) . '</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
<div class="wp-block-columns alignwide">' . $columns . '</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);
