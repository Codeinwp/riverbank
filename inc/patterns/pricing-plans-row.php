<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: pricing-plans-row
 * title: Row with pricing plans
 * categories: Riverbank
 * keywords: pricing, plans
 */

$data = array(
	array(
		'title' => __( 'Basic', 'riverbank' ),
		'price' => '$49',
	),
	array(
		'title' => __( 'Premium', 'riverbank' ),
		'price' => '$149',
	),
);


$table_markup = '
<!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}},"border":{"width":"2px"}},"backgroundColor":"ti-bg-alt"} -->
		<div class="wp-block-column has-ti-bg-alt-background-color has-background" style="border-width:2px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"level":3} -->
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
		<ul><!-- wp:list-item -->
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
		<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button">Buy this plan</a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
';

$markup = '';

foreach ( $data as $item ) {
	$markup .= sprintf( $table_markup, $item['title'], $item['price'] );
}

return array(
	'title'      => __( 'Row with pricing plans', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}}}} -->
		<div class="wp-block-column" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">
			<!-- wp:heading -->
			<h2>' . __( 'Get started with a premium plan', 'riverbank' ) . '</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		' . $markup . '
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
',
);
