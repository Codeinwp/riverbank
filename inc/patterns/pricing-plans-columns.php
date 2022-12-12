<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: Pricing-plans-columns
 * title: Columns of pricing plans
 * categories: Riverbank
 * keywords: pricing, plans
 */

$data = array(
	array(
		'price'  => '$49',
		'period' => __( 'Weekly', 'riverbank' ),
	),
	array(
		'price'  => '$149',
		'period' => __( 'Monthly', 'riverbank' ),
	),
	array(
		'price'  => '$1599',
		'period' => __( 'Yearly', 'riverbank' ),
	),
);

$column_markup = '
<!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt"} -->
<div class="wp-block-column has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
    <!-- wp:heading {"level":3} -->
    <h3>%s</h3>
    <!-- /wp:heading -->

    <!-- wp:heading {"fontSize":"huge"} -->
    <h2 class="has-huge-font-size">%s</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
    <!-- /wp:paragraph -->

    <!-- wp:separator {"className":"is-style-wide"} -->
    <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
    <!-- /wp:separator -->

    <!-- wp:list -->
    <ul>
        <!-- wp:list-item -->
        <li>Super flexible</li>
        <!-- /wp:list-item -->
        
        <!-- wp:list-item -->
        <li>Auto-renewal</li>
        <!-- /wp:list-item -->
        
        <!-- wp:list-item -->
        <li>Premium support</li>
        <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"width":100,"className":"is-style-outline"} -->
        <div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Buy this plan</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:column -->
';

$columns_markup = '';

foreach ( $data as $item ) {
	$columns_markup .= sprintf( $column_markup, $item['period'], $item['price'] );
}


return array(
	'title'      => __( 'Columns of pricing plans', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"100%","style":{"spacing":{"blockGap":"8px"}}} -->
        <div class="wp-block-column" style="flex-basis:100%">
            <!-- wp:heading -->
            <h2>Lorem ipsum dolor</h2>
            <!-- /wp:heading -->
        
            <!-- wp:paragraph {"fontSize":"medium"} -->
            <p class="has-medium-font-size">' . __( 'This is a description for the section', 'riverbank' ) . '</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
           <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
	<div class="wp-block-columns alignwide">
		' . $columns_markup . '
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);

