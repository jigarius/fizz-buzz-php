<?php

/**
 * @file
 * FizzBuzz entry point.
 */

require 'vendor/autoload.php';

use FizzBuzz\Generator;

try {
  $limit = count($argv) === 2 ? (int) $argv[1] : 0;
  $output = Generator::range($limit);
}
catch (InvalidArgumentException $ex) {
  echo $ex->getMessage();
  exit(1);
}

foreach ($output as $line) {
  echo "{$line}\n";
}

exit(0);
