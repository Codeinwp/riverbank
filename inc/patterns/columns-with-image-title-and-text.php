<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: columns-with-image-title-and-text
 * title: Columns with image, title and text
 * categories: Riverbank
 * keywords: columns, content, title, image
 */

$images = array(
	\Riverbank\Assets_Manager::get_image_url( 'img-riverbank-08.png' ),
	\Riverbank\Assets_Manager::get_image_url( 'img-riverbank-07.png' ),
);

$col_markup = '
<!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:image {,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="%s"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":3} -->
	<h3>Lorem ipsum</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
';

$columns_markup = join(
	'',
	array(
		sprintf( $col_markup, $images[0] ),
		sprintf( $col_markup, $images[1] ),
	) 
);

return array(
	'title'      => __( 'Columns with image, title and text', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
	' . $columns_markup . '
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);
