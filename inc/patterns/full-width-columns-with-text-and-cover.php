<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: full-width-columns-with-text-and-cover
 * title: Full width columns with text and cover
 * categories: Riverbank
 * keywords: full width, cover, columns
 */

use Riverbank\Assets_Manager;

$image = Assets_Manager::get_image_url( 'img-riverbank-07.png' );

return array(
	'title'      => __( 'Full width columns with text and cover', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|ti-fg-alt"}}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px">
    <!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
    <div class="wp-block-columns alignfull">
        <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
            <!-- wp:group {"layout":{"type":"constrained","contentSize":"","justifyContent":"right"}} -->
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
    
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:cover {"url":"' . esc_url( $image ) . '","dimRatio":0,"overlayColor":"ti-bg-inv","minHeight":567,"minHeightUnit":"px","isDark":false} -->
            <div class="wp-block-cover is-light" style="min-height:567px">
            <span aria-hidden="true" class="wp-block-cover__background has-ti-bg-inv-background-color has-background-dim-0 has-background-dim"></span>
            <img class="wp-block-cover__image-background" src="' . esc_url( $image ) . '" data-object-fit="cover"/>
            <div class="wp-block-cover__inner-container"></div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);
