<?php

namespace FizzBuzz;

use http\Exception\InvalidArgumentException;

/**
 * A Fizz-Buzz Number.
 */
class Number {

  /**
   * An integer.
   *
   * @var int
   */
  protected $integer;

  /**
   * Number constructor.
   *
   * @param int $integer
   *   A positive integer.
   */
  function __construct(int $integer) {
    if ($integer <= 0) {
      throw new \InvalidArgumentException('Argument must be a positive integer.');
    }

    $this->integer = $integer;
  }

  /**
   * Whether the number is a 'fizz' number.
   *
   * @return bool
   *   TRUE if the the number is divisible by 3.
   */
  protected function isFizz(): bool {
    return $this->integer % 3 === 0;
  }

  /**
   * Whether the number is a 'buzz' number.
   *
   * @return bool
   *   TRUE if the the number is divisible by 5.
   */
  protected function isBuzz(): bool {
    return $this->integer % 5 === 0;
  }

  function __toString(): string {
    $result = '';

    if ($this->isFizz()) $result .= 'fizz';
    if ($this->isBuzz()) $result .= 'buzz';

    if ($result) return $result;

    return (string) $this->integer;
  }

}
