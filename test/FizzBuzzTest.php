<?php

use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzTest.
 */
class FizzBuzzTest extends TestCase {

  /**
   * Test "fizz" when number is divisible by 3.
   */
  public function testFizz() {
    $this->assertSame(FizzBuzz::processNumber(3), 'fizz');
    $this->assertSame(FizzBuzz::processNumber(6), 'fizz');
    $this->assertSame(FizzBuzz::processNumber(333), 'fizz');
  }

  /**
   * Test "buzz" when number is divisible by 5.
   */
  public function testBuzz() {
    $this->assertSame(FizzBuzz::processNumber(5), 'buzz');
    $this->assertSame(FizzBuzz::processNumber(10), 'buzz');
    $this->assertSame(FizzBuzz::processNumber(500), 'buzz');
  }

  /**
   * Test "fizzbuzz" when number is divisible by both 3 and 5.
   */
  public function testFizzBuzz() {
    $this->assertSame(FizzBuzz::processNumber(15), 'fizzbuzz');
    $this->assertSame(FizzBuzz::processNumber(30), 'fizzbuzz');
    $this->assertSame(FizzBuzz::processNumber(225), 'fizzbuzz');
  }

  /**
   * Test when number is not divisible by 3 or 5.
   */
  public function testUndivisible() {
    $this->assertEquals(FizzBuzz::processNumber(2), 2);
    $this->assertEquals(FizzBuzz::processNumber(13), 13);
    $this->assertEquals(FizzBuzz::processNumber(1001), 1001);
  }

  /**
   * Test for number range 1 to 15.
   */
  public function testRange() {
    $this->assertEquals(FizzBuzz::processRange(1, 15), [
      1,
      2,
      'fizz',
      4,
      'buzz',
      'fizz',
      7,
      8,
      'fizz',
      'buzz',
      11,
      'fizz',
      13,
      14,
      'fizzbuzz',
    ]);
  }

}
