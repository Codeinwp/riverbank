<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: feature-grid
 * title: Features grid
 * categories: Riverbank
 * keywords: features, grid, services
 */

$column_markup = '
<!-- wp:column -->
<div class="wp-block-column">

	<!-- wp:heading {"level":3} -->
	<h3>' . __( 'Feature', 'riverbank' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->
';

$columns = '
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
<div class="wp-block-columns alignwide">' . $column_markup . $column_markup . $column_markup . '</div>
<!-- /wp:columns -->
';

return array(
	'title'      => __( 'Features grid', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"80px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"100%","style":{"spacing":{"blockGap":"8px"}}} -->
		<div class="wp-block-column" style="flex-basis:100%">
			<!-- wp:heading -->
			<h2>Lorem ipsum dolor</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
			<p class="has-text-align-left has-medium-font-size">This is a description for the section</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
' . $columns . $columns . '
</div>
<!-- /wp:group -->',
);



