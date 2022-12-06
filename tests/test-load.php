<?php
/**
 * Class Test_Loading
 *
 * @package riverbank
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'RIVERBANK_VERSION' ) );
		$this->assertTrue( defined( 'RIVERBANK_DEBUG' ) );
		$this->assertTrue( defined( 'RIVERBANK_DIR' ) );
		$this->assertTrue( defined( 'RIVERBANK_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertEquals( RIVERBANK_DEBUG, WP_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'Riverbank\Core', false ) );
	}
}