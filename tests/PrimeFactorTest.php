<?php
class PrimeFactorTest extends PHPUnit_Framework_TestCase {
	private $primeFactor;

	protected function setup() {
		$this->primeFactor = new PrimeFactor();
	}

	public function testComputePrimeFactorOf1ShouldReturnEmptyArray() {
		$number = 1;
		$expectedResult = [];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testComputePrimeFactorOf2() {
		$number = 2;
		$expectedResult = [2];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testComputePrimeFactorOf3() {
		$number = 3;
		$expectedResult = [3];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testComputePrimeFactorOf4() {
		$number = 4;
		$expectedResult = [2, 2];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testComputePrimeFactorOf6() {
		$number = 6;
		$expectedResult = [2, 3];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testComputePrimeFactorOf8() {
		$number = 8;
		$expectedResult = [2, 2, 2];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testComputePrimeFactorOf9() {
		$number = 9;
		$expectedResult = [3, 3];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testComputePrimeFactorOf12() {
		$number = 12;
		$expectedResult = [2, 2, 3];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testComputePrimeFactorOf15() {
		$number = 15;
		$expectedResult = [3, 5];

		$actualResult = $this->primeFactor->generate($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

}