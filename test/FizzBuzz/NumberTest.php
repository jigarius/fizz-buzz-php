<?php

namespace FizzBuzz;

use PHPUnit\Framework\TestCase;

/**
 * FizzBuzz::Number Test.
 */
class NumberTest extends TestCase {

  /**
   * Number cannot be created with invalid values.
   */
  public function testInvalidNumber() {
    $inputs = [0, 19.5, '19', -15];
    foreach ($inputs as $input) {
      $this->expectException(\InvalidArgumentException::class);

      new Number($input);
    }
  }

  /**
   * Number stringifies as 'fizz' when divisible by 3.
   */
  public function testFizzNumber() {
    $inputs = [3, 6, 333];
    foreach ($inputs as $input) {
      $number = new Number($input);
      $this->assertEquals('fizz', (string) $number);
    }
  }

  /**
   * Number stringifies as 'buzz' when divisible by 5.
   */
  public function testBuzzNumber() {
    $inputs = [5, 10, 500];
    foreach ($inputs as $input) {
      $number = new Number($input);
      $this->assertEquals('buzz', (string) $number);
    }
  }

  /**
   * Number stringifies as 'fizzbuzz' when divisible by 3 and 5.
   */
  public function testFizzBuzzNumber() {
    $inputs = [15, 30, 225];
    foreach ($inputs as $input) {
      $number = new Number($input);
      $this->assertEquals('fizzbuzz', (string) $number);
    }
  }

  /**
   * Number stringifies as the number itself when not divisible by 3 or 5.
   */
  public function testNonFizzBuzzNumber() {
    $inputs = [2, 13, 1001];
    foreach ($inputs as $input) {
      $number = new Number($input);
      $this->assertEquals((string) $input, (string) $number);
    }
  }

}
