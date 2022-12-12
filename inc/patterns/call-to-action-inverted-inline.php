<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: call-to-action-inverted-inline
 * title: Call to action inline
 * categories: Riverbank
 * keywords: call to action, buttons
 */

return array(
	'title'      => __( 'Call to action inline', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"32px","bottom":"32px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:32px;padding-bottom:32px">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
			<!-- wp:paragraph {"textColor":"ti-fg-alt","fontSize":"large"} -->
			<p class="has-ti-fg-alt-color has-text-color has-large-font-size">Work with me, lorem ipsum dolor si amet</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"ti-fg-alt","width":100,"className":"is-style-outline"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-ti-fg-alt-color has-text-color wp-element-button">' . __( 'Learn more', 'riverbank' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
);


