<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 *
 * slug: quote-section
 * title: Quote
 * categories: Riverbank
 * keywords: quote, testimonial
 */

return array(
	'title'      => __( 'Quote', 'riverbank' ),
	'categories' => array( 'riverbank' ),
	'content'    => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px">
    <!-- wp:quote -->
    <blockquote class="wp-block-quote"><!-- wp:paragraph {"fontSize":"x-large"} -->
    <p class="has-x-large-font-size">"...Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor..."</p>
    <!-- /wp:paragraph --><cite>George</cite></blockquote>
    <!-- /wp:quote -->
</div>
<!-- /wp:group -->
',
);

