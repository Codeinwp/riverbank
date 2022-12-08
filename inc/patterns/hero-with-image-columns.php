<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: hero-with-image-columns
 * title: Hero with image columns
 * categories: Riverbank
 * keywords: hero, section, columns
 */

use Riverbank\Assets_Manager;

$data = array(
	array(
		'image' => Assets_Manager::get_image_url( 'img-riverbank-01.png' ),
		'title' => __( 'FSE Templates', 'riverbank' ),
	),
	array(
		'image' => Assets_Manager::get_image_url( 'img-riverbank-03.png' ),
		'title' => __( 'Patterns', 'riverbank' ),
	),
	array(
		'image' => Assets_Manager::get_image_url( 'img-riverbank-04.png' ),
		'title' => __( 'Style variations', 'riverbank' ),
	),
);

$column_markup = '
  <!-- wp:column -->
    <div class="wp-block-column">
	    <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"size-full"} -->
	    <figure class="wp-block-image size-full"><img src="%s"/></figure>
	    <!-- /wp:image -->
    
	    <!-- wp:heading {"level":3,"fontSize":"normal"} -->
	    <h3 class="has-normal-font-size">%s</h3>
	    <!-- /wp:heading -->
    </div>
<!-- /wp:column -->
';

$columns_markup = '';

foreach ( $data as $column ) {
	$columns_markup .= sprintf( $column_markup, $column['image'], $column['title'] );
}

return array(
	'title'      => __( 'Hero with image columns', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"80px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"top"} -->
        <div class="wp-block-column is-vertically-aligned-top">
            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":1,"align":"wide","fontSize":"huge"} -->
            <h1 class="alignwide has-huge-font-size">' . __( 'A Minimal & Organic Theme', 'riverbank' ) . '</h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
    
    <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
        <div class="wp-block-columns alignwide is-not-stacked-on-mobile">
  ' . $columns_markup . '
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
