<?php

/**
 * Class FizzBuzz.
 */
class FizzBuzz {

  /**
   * Returns fizz buzz for a number.
   *
   * @param int $number
   *   A number.
   *
   * @return string
   *   Returns one of "fizz", "buzz", "fizzbuzz" or the original number.
   *
   *   "fizz" if the number is divisible by 3.
   *   "buzz" if the number is divisible by 5.
   *   "fizzbuzz" if the number is divisible by 3 & 5.
   *   The number, if it is not divisible by 3 or 5.
   */
  public static function processNumber(int $number): string {
    $output = '';
    if ($number % 3 === 0) {
      $output .= 'fizz';
    }
    if ($number % 5 === 0) {
      $output .= 'buzz';
    }
    return $output ?: (string) $number;
  }

  /**
   * Return fizz buzz for a range of numbers.
   *
   * @param int $from
   *   Range start.
   * @param int $till
   *   Range end.
   *
   * @return array
   *   An array containing "fizzbuzz" equivalent of each number.
   */
  public static function processRange(int $from, int $till): array {
    return self::processArray(range($from, $till));
  }

  /**
   * Return fizz buzz for a range of numbers.
   *
   * @param int[] $numbers
   *   An array of numbers.
   *
   * @return array
   *   An array containing "fizzbuzz" equivalent of each number.
   */
  private static function processArray(array $numbers): array {
    $output = [];
    foreach ($numbers as $key => $number) {
      $output[$key] = self::processNumber($number);
    }
    return $output;
  }

}
