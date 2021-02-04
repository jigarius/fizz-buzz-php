<?php

/**
 * FizzBuzz entry point.
 */

require 'vendor/autoload.php';

// Limit must be defined.
if (count($argv) !== 2 ||
    !is_numeric($argv[1]) ||
    $argv[1] <= 0) {
  echo 'Limit must be a positive integer.';
  exit(1);
}
$limit = (int) $argv[1];

// Generate FizzBuzz.
$output = FizzBuzz::generate($limit);
foreach ($output as $line) {
  echo "{$line}\n";
}

exit(0);
