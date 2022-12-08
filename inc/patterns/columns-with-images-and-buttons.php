<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: columns-with-images-and-buttons
 * title: Columns with images and buttons
 * categories: Riverbank
 * keywords: columns, images, buttons
 */

use Riverbank\Assets_Manager;

$data = array(
	array(
		'image' => Assets_Manager::get_image_url( 'img-riverbank-02.png' ),
		'title' => __( 'Style Variations', 'riverbank' ),
	),
	array(
		'image' => Assets_Manager::get_image_url( 'img-riverbank-03.png' ),
		'title' => __( 'Built-in Patterns', 'riverbank' ),
	),
	array(
		'image' => Assets_Manager::get_image_url( 'img-riverbank-04.png' ),
		'title' => __( 'Powered by blocks', 'riverbank' ),
	),
);

$col_markup = '
<!-- wp:column -->
<div class="wp-block-column">

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
<figure class="wp-block-image size-full"><img src="%s"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3>%s</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">' . __( 'Button', 'riverbank' ) . '</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->
';

$columns = '';

foreach ( $data as $col_data ) {
	$columns .= sprintf( $col_markup, $col_data['image'], $col_data['title'] );
}

return array(
	'title'      => __( 'Columns with images and buttons', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">' . $columns . '</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);
