<?php

namespace FizzBuzz;

use PHPUnit\Framework\TestCase;

/**
 * FizzBuzz::Generator Test.
 */
class GeneratorTest extends TestCase {

  /**
   * Number returns the fizzbuzz representation of a single number.
   */
  public function testNumber() {
    $this->assertEquals('1', Generator::number(1));
    $this->assertEquals('fizz', Generator::number(3));
    $this->assertEquals('buzz', Generator::number(5));
    $this->assertEquals('fizzbuzz', Generator::number(15));
  }

  /**
   * Range throws an Exception if $limit is invalid.
   */
  public function testRangeInvalid() {
    $limits = [0, -1];
    foreach ($limits as $limit) {
      $this->expectException(\InvalidArgumentException::class);

      Generator::range($limit);
    }
  }

  /**
   * Range can generate fizzbuzz from 1 to 15.
   */
  public function testRangeFifteen() {
    $this->assertEquals(Generator::range(15), [
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
