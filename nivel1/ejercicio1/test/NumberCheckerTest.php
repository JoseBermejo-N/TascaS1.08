<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/NumberChecker.php";

class NumberCheckerTest extends TestCase {

	public function testNumberIsEven() {
		$numberChecker1 = new NumberChecker(4);
		$numberChecker2 = new NumberChecker(3);
		$numberChecker3 = new NumberChecker(0);
		$this->assertTrue($numberChecker1->isEven());
		$this->assertFalse($numberChecker2->isEven());
		$this->assertTrue($numberChecker3->isEven());
	}

	public function testNumberIsPositive() {
		$numberChecker1 = new NumberChecker(5);
		$numberChecker2 = new NumberChecker(-5);
		$numberChecker3 = new NumberChecker(0);
		$this->assertTrue($numberChecker1->isPositive());
		$this->assertFalse($numberChecker2->isPositive());
		$this->assertFalse($numberChecker3->isPositive());
		
	}

}
