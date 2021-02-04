<?php

namespace FizzBuzz;

use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase {
  public function testInvalidNumber() {
    $inputs = [0, 19.5, '19', -15];
    foreach ($inputs as $input) {
      $this->expectException(\InvalidArgumentException::class);

      new Number($input);
    }
  }

  public function testFizzNumber() {
    $inputs = [3, 6, 333];
    foreach ($inputs as $input) {
      $number = new Number($input);
      $this->assertEquals('fizz', (string) $number);
    }
  }

  public function testBuzzNumber() {
    $inputs = [5, 10, 500];
    foreach ($inputs as $input) {
      $number = new Number($input);
      $this->assertEquals('buzz', (string) $number);
    }
  }

  public function testFizzBuzzNumber() {
    $inputs = [15, 30, 225];
    foreach ($inputs as $input) {
      $number = new Number($input);
      $this->assertEquals('fizzbuzz', (string) $number);
    }
  }

  public function testNonFizzBuzzNumber() {
    $inputs = [2, 13, 1001];
    foreach ($inputs as $input) {
      $number = new Number($input);
      $this->assertEquals((string) $input, (string) $number);
    }
  }
}
