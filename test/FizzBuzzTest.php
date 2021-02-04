<?php

use PHPUnit\Framework\TestCase;

/**
 * FizzBuzz Test.
 */
class FizzBuzzTest extends TestCase {

  /**
   * Generate throws an Exception if $limit is invalid.
   */
  public function testGenerateInvalid() {
    $limits = [0, -1];
    foreach ($limits as $limit) {
      $this->expectException(\InvalidArgumentException::class);

      FizzBuzz::generate($limit);
    }
  }

  /**
   * Generate can generate fizzbuzz from 1 to 15.
   */
  public function testGenerateFifteen() {
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
