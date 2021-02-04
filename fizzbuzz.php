<?php

/**
 * @file
 * FizzBuzz entry point.
 */

require 'vendor/autoload.php';

try {
  $limit = count($argv) !== 2 ? (int) $argv[1] : 0;
  $output = FizzBuzz::generate($limit);
}
catch (InvalidArgumentException $ex) {
  echo $ex->getMessage();
  exit(1);
}

foreach ($output as $line) {
  echo "{$line}\n";
}

exit(0);
