<?php
/**
 * Class UnitTests
 *
 * @package Wcct16
 */

/**
 * Sample test case.
 */
class UnitTests extends \PHPUnit_Framework_TestCase {
	use PHPMock;



	public function test_wcct_get_option() {
		// Replace this with some actual testing code.
		$this->assertEquals( 'river-club', wcct_get_option('venue') );
	}
}