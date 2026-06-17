<?php

namespace FizzBuzz;

/**
 * Generates Fizz-Buzz output.
 */
class Generator {

  /**
   * Return the fizzbuzz representation of a single number.
   *
   * @param int $integer
   *   A positive integer.
   *
   * @return string
   *   The "fizzbuzz" equivalent of the number.
   */
  public static function number(int $integer): string {
    return (string) new Number($integer);
  }

  /**
   * Return fizzbuzz from 1 to $limit.
   *
   * @param int $limit
   *   A limit.
   *
   * @return array
   *   An array containing the "fizzbuzz" equivalent of each number.
   */
  public static function range(int $limit): array {
    if ($limit <= 0) {
      throw new \InvalidArgumentException('Limit must be a positive integer.');
    }

    return array_map(
      static fn (int $integer): string => self::number($integer),
      range(1, $limit),
    );
  }

}
