<?php
class BelloTest extends PHPUnit_Framework_TestCase {
	public function testBello() {
		$expectedResult = 'Bello, Ton ninja';
		$bello = new Bello();

		$actualResult = $bello->sayHi('Ton ninja');

		$this->assertEquals($expectedResult, $actualResult);
	}
}