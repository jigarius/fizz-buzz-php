<?php

use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzTest.
 */
class FizzBuzzTest extends TestCase {

  /**
   * Test for number range 1 to 15.
   */
  public function testGenerate() {
    $this->assertEquals(FizzBuzz::generate(15), [
      '1',
      '2',
      'fizz',
      '4',
      'buzz',
      'fizz',
      '7',
      '8',
      'fizz',
      'buzz',
      '11',
      'fizz',
      '13',
      '14',
      'fizzbuzz',
    ]);
  }

}
