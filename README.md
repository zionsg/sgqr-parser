# SGQR Parser

Parse SGQR code (Singapore Quick Response Code) as per http://www.mas.gov.sg/sgqr.
No validation is performed at this point of time.

Gave a talk on this at the December 2018 meetup for the Singapore PHP User Group - video recording
[here](https://engineers.sg/video/writing-a-sgqr-parser-singapore-php-user-group--3061).

## Requirements
- PHP >= 7.0
- Composer >= 1.6.4

## Installation
- Clone this repo.
- Run `composer install` to install dependencies.

## Tests
- Run `composer test` to run tests.
- Run `composer cs` to run coding style checks.
- Run `composer check` to do both.

## Add to project
- As this library is not available on Packagist, the GitHub repository needs to be added to the
  project's `composer.json`.

  ```
  {
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/zionsg/sgqr-parser"
        }
    ]
  }
  ```
- Run `composer require zionsg/sgqr-parser:dev-master` to get the latest release in the `master` branch.

## Usage
- See PHPUnit tests in `test` folder.
