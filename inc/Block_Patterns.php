<?php
/**
 * Patterns Handler.
 *
 * @author Themeisle
 * @package riverbank
 * @since 1.0.0
 */

namespace Riverbank;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package riverbank
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {
		$categories = array(
			'riverbank' => array( 'label' => __( 'Riverbank Patterns', 'riverbank' ) ),
		);

		$patterns = array(
			'boxed-columns-with-text-image-and-buttons',
			'boxed-image-features-with-buttons',
			'call-to-action-inverted',
			'columns-with-images-and-buttons',
			'feature-grid',
			'full-width-columns-with-text-and-cover',
			'hero-with-image-columns',
			'posts-grid',
			'pricing-plans-columns',
			'pricing-plans-row',
			'quote-section',
			'section-with-covers-and-text',
			'hero-with-feature-columns',
			'call-to-action-inverted-inline',
			'columns-with-image-title-and-text',
		);

		$this->categories = apply_filters( 'riverbank_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'riverbank_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	private function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}
	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */
	private function register_patterns() {
		foreach ( $this->patterns as $pattern ) {
			$file = RIVERBANK_DIR . 'inc/patterns/' . $pattern . '.php';

			if ( ! is_file( $file ) ) {
				continue;
			}

			register_block_pattern( 'riverbank/' . $pattern, require $file );
		}
	}
}
