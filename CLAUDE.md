# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

A command-line Fizz Buzz application that demonstrates PHP syntax. Given a numeric limit `N`, it prints lines `1..N`, replacing multiples of 3 with `fizz`, multiples of 5 with `buzz`, and multiples of both with `fizzbuzz`.

## Commands

Run the app:
```bash
./bin/fizzbuzz 15          # requires chmod +x ./bin/fizzbuzz first
```

Tests (PHPUnit) and linting (PHP_CodeSniffer):
```bash
composer install
composer exec phpunit       # run full test suite
composer exec phpunit -- --filter testFizzNumber   # run a single test
composer exec phpcs         # lint against the Drupal coding standard
```

Via Docker Compose (runs in a container):
```bash
docker compose build
docker compose run --rm main composer install
docker compose run --rm main ./bin/fizzbuzz 15
docker compose run --rm main composer exec phpunit
docker compose run --rm main composer exec phpcs
```

## Architecture

Three layers, intentionally separated to showcase OOP structure:

- **`fizzbuzz.php`** — entry point. Parses `$argv`, calls `Generator::range()`, catches `InvalidArgumentException` (exit 1), and prints each result line. `bin/fizzbuzz` is just a `#!/usr/bin/env php` shim that requires this file.
- **`src/FizzBuzz/Generator.php`** (`FizzBuzz\Generator`) — facade with two static methods: `number(int): string` returns one value's fizzbuzz string, and `range(int $limit): array` maps `1..$limit` through `number()`. Both delegate the actual rules to `Number`; `range()` validates `$limit > 0`.
- **`src/FizzBuzz/Number.php`** (`FizzBuzz\Number`) — wraps a single positive integer. The fizz/buzz logic lives in `__toString()`, which concatenates `fizz` and/or `buzz` and falls back to the integer itself. Validates `$integer > 0` in the constructor.

Classes are autoloaded via Composer **PSR-4**, mapping the `FizzBuzz\` namespace to `src/FizzBuzz/` (see `composer.json`). A class's file path must match its namespace, or it won't load.

## Conventions

- **Coding standard: Drupal** (enforced by `phpcs.xml.dist` → `<rule ref="Drupal"/>`). This means 2-space indentation, docblocks on every class/method, and `TRUE`/`FALSE`/`NULL` uppercase. Match the existing style in `src/`.
- Requires **PHP ^8.3** (`composer.json`); the `Dockerfile` uses `php:8.3-cli` to match.
- Each git branch (e.g. `7.x`, `8.x`) targets a different PHP version; the default/main branch for PRs is `7.x`.