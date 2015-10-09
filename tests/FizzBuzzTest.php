<?php
class FizzBuzzTest extends PHPUnit_Framework_TestCase {
	public function testNumberIs1ShouldReturnSameNumber() {
		$number = 1;
		$expectedResult = $number;

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs2ShouldReturnSameNumber() {
		$number = 2;
		$expectedResult = $number;

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs3ShouldReturnFizz() {
		$number = 3;
		$expectedResult = "Fizz";

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs11ShouldReturnFizz() {
		$number = 11;
		$expectedResult = $number;

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs6ShouldReturnFizz() {
		$number = 6;
		$expectedResult = "Fizz";

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs5ShouldReturnBuzz() {
		$number = 5;
		$expectedResult = "Buzz";

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs10ShouldReturnBuzz() {
		$number = 10;
		$expectedResult = "Buzz";

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs15ShouldReturnFizzBuzz() {
		$number = 15;
		$expectedResult = "FizzBuzz";

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs24ShouldReturnFizz() {
		$number = 24;
		$expectedResult = "Fizz";

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs25ShouldReturnBuzz() {
		$number = 25;
		$expectedResult = "Buzz";

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}

	public function testNumberIs30ShouldReturnFizz() {
		$number = 30;
		$expectedResult = "FizzBuzz";

		$fizzBuzz = new FizzBuzz();

		$actualResult = $fizzBuzz->getNumber($number);

		$this->assertEquals($expectedResult, $actualResult);
	}
}