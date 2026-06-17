# Fizz Buzz: PHP

A neat command-line application to demonstrate PHP syntax.

## What is Fizz Buzz?

**Fizz buzz** is a group word game for children to teach them about division.
Players take turns to count incrementally, with the following rules:

  * For numbers divisible by `3`, say `fizz`.
  * For numbers divisible by `5`, say `buzz`.
  * For numbers is divisible by both, say `fizzbuzz`.
  * For other numbers, say the number.

## Example

```
1
2
fizz
4
buzz
fizz
7
8
fizz
10
11
fizz
13
14
fizzbuzz
```

## Usage

* Clone the repository.
* Add exec permissions to the `bin/fizzbuzz` file;
  `chmod +x ./bin/fizzbuzz`.
* Run it with a numeric argument; `./bin/fizzbuzz 15`

### Docker Compose

If you use Docker, you can run this project in a container instead.

* Clone this repository and `cd` into the directory.
* Build the image; `make build`.
* Open a shell in the container; `make ssh`.
* Inside the container, install dependencies; `composer install`.
* Inside the container, run it with a numeric argument; `./bin/fizzbuzz 15`.