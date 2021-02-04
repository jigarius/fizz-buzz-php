<?php

use FizzBuzz\Number;

/**
 * Fizz-Buzz helper.
 */
class FizzBuzz {

  /**
   * Return fizzbuzz from 1 to $limit.
   *
   * @param int $limit
   *   A limit.
   *
   * @return array
   *   An array containing "fizzbuzz" equivalent of each number.
   */
  public static function generate(int $limit): array {
    $numbers = range(1, $limit);

    foreach ($numbers as &$number) {
      $number = (string) new Number($number);
    }

    return $numbers;
  }

}
