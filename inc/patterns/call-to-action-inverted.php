<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: call-to-action-inverted
 * title: Call to action
 * categories: Riverbank
 * keywords: call to action, buttons
 */

return array(
	'title'      => __( 'Call to action', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
	
	<!-- wp:heading {"textAlign":"center","textColor":"ti-fg-alt"} -->
    <h2 class="has-text-align-center has-ti-fg-alt-color has-text-color">' . __( 'Before we even knew it, we were off the ground', 'riverbank' ) . '</h2>
    <!-- /wp:heading -->

    <!-- wp:separator -->
    <hr class="wp-block-separator has-alpha-channel-opacity"/>
    <!-- /wp:separator -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
    	<!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">' . __( 'Button', 'riverbank' ) . '</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
    
</div>
<!-- /wp:group -->',
);
